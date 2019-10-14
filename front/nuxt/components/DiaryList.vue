<template>
  <div class="diary-list">
    <div class="row" v-show="diaries.length">
      <table class="nes-table is-borderd is-centerd">
        <thead>
          <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>BODY</th>
            <th>UPDATED AT</th>
            <th>EDIT</th>
          </tr>
        </thead>
        <tbody v-for="diary in diaries" :key="diary.id">
          <tr>
            <td>{{ diary.id }}</td>
            <td>{{ diary.title }}</td>
            <td>{{ diary.body }}</td>
            <td>{{ diary.updated_at }}</td>
            <td>
              <nuxt-link class="nes-btn is-primary" :to="`${routeName}/${diary.id}`">Edit</nuxt-link>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row" v-show="this.errorMessage">
      <h2>
        <font style="color:red">{{ this.errorMessage }}</font>
      </h2>
    </div>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import Diary from "~/interfaces/diary";

@Component
export default class DiaryList extends Vue {
  private diaries: Diary[] = [];
  private errorMessage: string = "";
  private routeName: string = this.$nuxt.$route.params.slug;

  public mounted(): void {
    this.$axios
      .$get("http://localhost:8000/api/diaries")
      .then((response: Diary[]) => {
        this.diaries = response;
      })
      .catch((error: any) => {
        console.error(error);
        this.errorMessage = "Error. server access failure.";
      });
  }
}
</script>
