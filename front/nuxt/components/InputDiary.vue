<template>
  <div class="input-diary">
    <div class="row">
      <div class="col">
        <h2 class="nes-text is-success" v-show="successMessage">{{ successMessage }}</h2>
        <h2 class="nes-text is-error" v-show="errorMessage">{{ errorMessage }}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-10">
        <div class="nes-field">
          <label class="form-label">Id: {{ id }}</label>
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
        <button type="button" class="nes-btn is-primary" @click="submit">Submit</button>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { Component, Vue, Prop } from "vue-property-decorator";
import InputTitle from "~/components/InputTitle.vue";
import InputBody from "~/components/InputBody.vue";
import Diary from "~/interfaces/diary";

@Component({
  components: {
    InputTitle,
    InputBody
  }
})
export default class InputDiary extends Vue {
  @Prop({
    default: 0
  })
  id: number;

  @Prop({
    default: ""
  })
  title: string;

  @Prop({
    default: ""
  })
  body: string;

  private successMessage: string = "";
  private errorMessage: string = "";

  private submit(): void {
    this.$axios
      .$put(`http://localhost:8000/api/diaries/${this.id}`, {
        'id': this.id,
        'title': this.title,
        'body': this.body
      })
      .then((response: any) => {
        this.successMessage = "Success.";
      })
      .catch((error: any) => {
        console.error(error);
        this.errorMessage = "Error. Update failure.";
      });
  }
}
</script>
