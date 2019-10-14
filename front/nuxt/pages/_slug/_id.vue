<template>
  <div class="edit">
    <div class="row">
      <div class="col">
        <h2>Edit Diary</h2>
      </div>
      <div class="col">
        <nuxt-link class="nes-btn" :to="previous">Back</nuxt-link>
      </div>
    </div>

    <div class="row" v-show="errorMessage">
      <div class="col">
        <h2 class="nes-text is-error">
          {{ errorMessage }}
        </h2>
      </div>
    </div>

    <div class="row">
      <div class="col-10">
        <input-diary :id="id" :title="title" :body="body" />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { Component, Vue, Prop } from "vue-property-decorator"
import InputDiary from "~/components/InputDiary.vue"
import Diary from "~/interfaces/diary"

@Component({
  components: {
    InputDiary
  }
})
export default class Edit extends Vue {
  private id: number = parseInt(this.$nuxt.$route.params.id);
  private title: string = "";
  private body: string = "";
  private previous: string = `/${this.$nuxt.$route.params.slug}`;
  private errorMessage: string = "";

  public mounted(): void {
    this.$axios
      .$get(`http://localhost:8000/api/diaries/${this.id}`)
      .then((diary: Diary) => {
        this.title = diary.title;
        this.body = diary.body;
      })
      .catch((error: any) => {
        console.error(error);
        this.errorMessage = "Error. server access failure.";
      });
  }
}
</script>
