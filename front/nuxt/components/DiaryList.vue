<template>
  <div class="diary-list">
    <div class="row">
      <div class="col" v-show="errorMessage">
        <h2 class="nes-text is-error">{{ this.errorMessage }}</h2>
      </div>
      <div class="col" v-show="successMessage">
        <h2 class="nes-text is-success">{{ this.successMessage }}</h2>
      </div>
    </div>

    <div class="row" v-show="diaries.length">
      <table class="nes-table is-borderd is-centerd">
        <thead>
          <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>BODY</th>
            <th>UPDATED AT</th>
            <th>EDIT</th>
            <th>DELETE</th>
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
            <td>
              <button
                type="button"
                class="nes-btn is-warning"
                @click="showDeleteDialog(diary.id)"
              >Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <dialog class="nes-dialog is-rounded" id="dialog-rounded">
      <form method="dialog">
        <p class="title">Danger</p>
        <p>Do you want to delete it?</p>
        <menu class="dialog-menu">
          <button class="nes-btn">Cancel</button>
          <button class="nes-btn is-error" @click="deleteAction">Delete</button>
        </menu>
      </form>
    </dialog>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import Diary from "~/interfaces/diary";

@Component
export default class DiaryList extends Vue {
  private diaries: Diary[] = [];
  private errorMessage: string = "";
  private successMessage: string = "";
  private routeName: string = this.$nuxt.$route.params.slug;
  private deleteId: number = 0;

  public mounted(): void {
    this.getDiaries();
  }

  private getDiaries(): void {
    this.$axios
      .$get(`${process.env.apiUrl}/${this.$nuxt.$route.params.slug}/diaries`)
      .then((response: Diary[]) => {
        this.diaries = response;
      })
      .catch((error: any) => {
        console.error(error);
        this.errorMessage = "Error. server access failure.";
      });
  }

  private showDeleteDialog(id: number): void {
    this.deleteId = id;
    const dialog = document.getElementById(
      "dialog-rounded"
    ) as HTMLDialogElement;
    dialog.showModal();
  }

  private deleteAction(): void {
    // 再検索すると再描画に時間がかかるため、先にDOMだけ削除
    this.diaries.some((diary, index) => {
      if (diary.id == this.deleteId) this.diaries.splice(index, 1);
    });

    this.$axios
      .$delete(`http://localhost:8000/api/diaries/${this.deleteId}`)
      .then(() => {
        this.successMessage = "Delete Success.";
      })
      .catch((error: any) => {
        console.error(error);
        this.errorMessage = "Error. Delete failure.";
      })
      .finally(() => {
        this.getDiaries();
      });
  }
}
</script>
