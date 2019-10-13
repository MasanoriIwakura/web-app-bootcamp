<template>
  <div class="input-diary">
    <div class="row">
      <div class="col-10">
        <input-title />
      </div>
    </div>

    <div class="row">
      <div class="col-10">
        <input-body />
      </div>
    </div>

    <div class="row">
      <div class="col">
        <button type="button" class="nes-btn is-primary">Submit</button>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from "vue-property-decorator";

@Component({
  components: {
    InputTitle: () => import("~/components/InputTitle.vue"),
    InputBody: () => import("~/components/InputBody.vue")
  }
})
export default class InputDiary extends Vue {}
</script>

