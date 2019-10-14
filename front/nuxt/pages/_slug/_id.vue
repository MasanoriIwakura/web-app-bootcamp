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

@Component({
  components: {
    InputDiary
  }
})
export default class Edit extends Vue {
  private id: number = parseInt(this.$nuxt.$route.params.id);
  private title: string = 'test-title';
  private body: string = 'test-body';
  private previous: string = `/${this.$nuxt.$route.params.slug}`;
}
</script>
