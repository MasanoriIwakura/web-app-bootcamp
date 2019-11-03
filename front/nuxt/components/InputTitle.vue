<template>
  <div class="input-title">
    <div class="nes-field">
      <label class="form-label" for="title">Title</label>
      <input
        type="text"
        id="title"
        name="title"
        class="nes-input"
        :value="value"
        @input="inputValue($event.target.value)"
        required
      />
    </div>
  </div>
</template>

<script lang="ts">
import { Component, Vue, Prop, Emit } from "vue-property-decorator";

@Component
export default class InputTitle extends Vue {
  @Prop()
  value!: string;

  @Emit("input-value")
  public inputValue(val: string) {
    return val;
  }
}
</script>
