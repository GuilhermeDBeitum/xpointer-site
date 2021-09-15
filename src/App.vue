<template>
  <v-app id="inspire">
    <v-img height="200" src=".\assets\xpointer.jpg"></v-img>
    <v-tabs
      background-color="black"
      centered
      center-active
      dark
      touchless
      grow
      height="30"
      color="red"
    >
      <v-tab to="home" exact>
        HOME
      </v-tab>

      <v-tab to="sistemas">
        SISTEMAS
      </v-tab>

      <v-tab to="produtos">
        PRODUTOS
      </v-tab>

      <v-tab to="sobreaxpointer">
        SOBRE A XPOINTER
      </v-tab>
    </v-tabs>
    <hr />
    <router-view></router-view>

    <v-card color="black" height="60">
      <v-card-actions class="justify-space-between"></v-card-actions>
    </v-card>
    <hr />
    <v-footer padless color="black" app>
      <v-col class="text-center" cols="12">
        <strong>&copy; XPOINTER 2020</strong>
      </v-col>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  props: {
    source: String,
  },

  data: () => ({
    length: 3,
    window: 0,
  }),

  created() {
    setInterval(() => {
      this.$vuetify.theme.dark = true;
      if (!this.autorun) return;
      if (++this.window >= this.length) this.window = 0;
    }, 1000);
  },
};
</script>
