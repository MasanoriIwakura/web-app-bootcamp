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
          <label class="form-label">Id: {{ diary.id }}</label>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-10">
        <input-title
          :value="diary.title"
          @input-value="inputTitle"
        />
      </div>
    </div>

    <div class="row">
      <div class="col-10">
        <input-body
          :value="diary.body"
          @input-value="inputBody"
        />
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
import InputTitle from "./InputTitle.vue";
import InputBody from "./InputBody.vue";
import Diary from "../interfaces/diary";

@Component({
  components: {
    InputTitle,
    InputBody
  }
})
export default class InputDiary extends Vue {
  @Prop()
  diary: Diary

  @Prop({
    default: "edit"
  })
  mode: string;

  private successMessage: string = "";
  private errorMessage: string = "";

  public inputTitle(val: string){
    this.diary.title = val;
  }

  public inputBody(val: string){
    this.diary.body = val;
  }

  private submit(): void {
    const slug = this.$nuxt.$route.params.slug;

    if (this.mode == "edit") {
      this.$axios
            .$put(`${process.env.apiUrl}/${slug}/diaries/${this.diary.id}`, {
          ...this.diary
        })
        .then((response: any) => {
          this.successMessage = "Success.";
        })
        .catch((error: any) => {
          console.error(error);
          this.errorMessage = "Error. Update failure.";
        });
    } else {
      this.$axios
            .$post(`${process.env.apiUrl}/${slug}/diaries`, {
          title: this.diary.title,
          body: this.diary.body
        })
        .then((response: any) => {
          this.successMessage = "Success.";
        })
        .catch((error: any) => {
          console.error(error);
          this.errorMessage = "Error. Create failure.";
        });
    }
  }
}
</script>
