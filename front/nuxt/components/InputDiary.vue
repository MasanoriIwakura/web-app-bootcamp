<template>
  <div class="input-diary">
    <div class="row">
      <div class="col-10">
        <div class="nes-field">
          <label class="form-label" >Id: {{ id }}</label>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-10">
        <input-title :value="title" />
      </div>
    </div>

    <div class="row">
      <div class="col-10">
        <input-body :value="body" />
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
import { Component, Vue, Prop } from "vue-property-decorator";

@Component({
  components: {
    InputTitle: () => import("~/components/InputTitle.vue"),
    InputBody: () => import("~/components/InputBody.vue")
  }
})
export default class InputDiary extends Vue {
  @Prop({
    default: 0
  })
  id: number;

  @Prop({
    default: ''
  })
  title: string;

  @Prop({
    default: ''
  })
  body: string;
}
</script>

