<template>
  <div class="edit">
    <h1>{{ $nuxt.$route.params.id }}</h1>
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
  @Prop({
    default: '',
    required: true
  })
  id: string;
}
</script>
