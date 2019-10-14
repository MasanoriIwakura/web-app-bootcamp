<template>
  <div class="input-title">
    <div class="nes-field">
      <label class="form-label" for="title">Title</label>
      <input type="text" id="title" name="title" class="nes-input" v-model="value" required />
    </div>
  </div>
</template>

<script lang="ts">
import { Component, Vue, Prop } from "vue-property-decorator";

@Component
export default class InputTitle extends Vue {
  @Prop({
    default: ''
  })
  value: string;
}
</script>
