<template>
  <div class="create">
    <div class="row">
      <div class="col">
        <h2>Create Diary</h2>
      </div>
      <div class="col">
        <nuxt-link class="nes-btn" :to="previous">Back</nuxt-link>
      </div>
    </div>

    <div class="row">
      <div class="col-10">
        <input-diary :diary="diary" mode="create" />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { Component, Vue, Prop } from "vue-property-decorator"
import InputDiary from "../../components/InputDiary.vue"
import Diary from "../../interfaces/diary"

@Component({
  components: {
    InputDiary
  }
})
export default class Create extends Vue {
  private diary: Diary = {
    title: "",
    body: ""
  };
  private previous: string = `/${this.$nuxt.$route.params.slug}`;
}
</script>
