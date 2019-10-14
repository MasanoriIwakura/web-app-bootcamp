<template>
  <div class="edit">
    <div class="row">
      <div class="col">
        <h2>Edit Diary</h2>
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
  id: number = parseInt(this.$nuxt.$route.params.id)
  title: string = 'test-title'
  body: string = 'test-body'
}
</script>
