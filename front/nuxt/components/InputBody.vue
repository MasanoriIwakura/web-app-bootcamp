<template>
  <div class="input-body">
    <div class="nes-field">
      <label class="form-label" for="body">Body</label>
      <input
        type="text"
        id="body"
        name="body"
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
export default class InputBody extends Vue {
  @Prop()
  value: string;

  @Emit("input-value")
  public inputValue(val: string) {
    return val;
  }
}
</script>
