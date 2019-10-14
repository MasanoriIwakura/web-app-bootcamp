<template>
  <div class="input-body">
    <div class="nes-field">
      <label class="form-label" for="body">Body</label>
      <input type="text" id="body" name="body" class="nes-input" v-model="value" required />
    </div>
  </div>
</template>

<script lang="ts">
import { Component, Vue, Prop } from "vue-property-decorator";

@Component
export default class InputBody extends Vue {
  @Prop({
    default: ''
  })
  value: string;
}
</script>
