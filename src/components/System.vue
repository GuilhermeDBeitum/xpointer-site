<template>
  <v-app id="inspire">
    <v-card class="d-flex justify-center black" justify="space-around">
      <v-col class="black" cols="12" md="8">
        <v-col cols="12" md="7"> </v-col>
        <v-img src="..\assets\tab.png"></v-img>
        <v-row>
          <v-col cols="12" md="6">
            <br />
            <p>
              Corra e compre o seu RetroConsole Agora!!! Todos os sistemas
              contam com enome variedades de jogos, todos configurados e sim!
              são + de 8000 jogos. Totalmente funcionais.
            </p>
            <br />
          </v-col>
          <br />

          <v-col cols="12" md="6">
            <v-img height="430" src="..\assets\mario.png"></v-img>
          </v-col>
        </v-row>
      </v-col>
    </v-card>
  </v-app>
</template>

<script>
export default {
  name: `system`,
  props: {
    source: String,
  },

  data: () => ({
    length: 3,
    window: 0,
  }),
};
</script>
