<template>
  <div class="container">
    <div class="row">
      <div class="col-10">
        <h2 class="nes-text is-success">Web App Bootcamp for Nuxt.js</h2>
        <p>Created by MasanoriIwakura</p>
      </div>
      <div class="col-2">
        <a class href="https://github.com/MasanoriIwakura/web-app-bootcamp" target="_blank">
          <i class="nes-icon github is-large"></i>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <h3>{{ routeName }}</h3>
      </div>
    </div>

    <div class="main">
      <div class="row">
        <div class="col">
          <logo />
        </div>
      </div>

      <div class="row">
        <div class="col">
          <nuxt-link class="nes-btn is-success" :to="addLink">Add</nuxt-link>
        </div>
        <div class="col">
          <diary-list />
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import Logo from "../../components/Logo.vue";
import DiaryList from "../../components/DiaryList.vue";

@Component({
  components: {
    Logo,
    DiaryList
  }
})
export default class Index extends Vue {
  // TODO:後でAPIの向き先変更に使用
  private routeName: string = this.$nuxt.$route.params.slug;
  private addLink: string = `${this.$nuxt.$route.path}/create`;
}
</script>

