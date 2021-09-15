<template>
  <v-app id="inspire">
    <v-card color="black" class="pt-16 mb-0" align="center" justify="center">
      <v-row justify="space-around">
        <v-col cols="12" md="7"> </v-col>
        <v-col cols="12" md="7"> </v-col>
        <embed
          justify="space-around"
          id="ytplayer"
          type="text/html"
          width="670"
          height="380"
          src="https://www.youtube.com/embed/-nxgunT6Ma4?autoplay=1&mute=1"
          frameborder="0"
        />

        <v-col cols="12" md="5" class="black">
          <v-card class="black" outlined tile>
            <p>
              SÂO MAIS DE 8.000 MIL JOGOS DISTRIBUIDOS EM 32 SISTEMAS DA ÉPOCA
              DE OURO!
            </p>
            <p>SISTEMAS COM TRATAMENTOS OTIMIZADOS!</p>
            <p>CONTROLES AUTO CONFIGURADOS!</p>
            <p>ALTA QUALIDADE DE GRÁFICOS E SOM!</p>
            <p>STREAM GAMES! GRAVE A SUA PARTIDA DIRETO DO SISTEMA</p>
            <p>0 INPUT LAG</p>
            <p>ONLINE PLAY</p>
            <p>SUPORTE TÉCNICO!</p>
            <p>GARANTIA DE SATISFAÇÂO A GAMERS!</p>
          </v-card>
        </v-col>
      </v-row>

      <v-row>
        <v-col order="last">
          <v-row align="center" justify="center">
            <v-img max-width="290" src="..\assets\img1.jpg"></v-img>
          </v-row>
        </v-col>
        <v-col>
          <v-row align="center" justify="center">
            <v-img max-width="290" src="..\assets\img6.jpg"></v-img>
          </v-row>
        </v-col>
        <v-col order="first">
          <v-row align="center" justify="center">
            <v-img max-width="278" src="..\assets\img7.jpg"></v-img>
          </v-row>
        </v-col>

        <v-col order="first">
          <v-row align="center" justify="center">
            <v-img max-width="278" src="..\assets\img8.jpeg"></v-img>
          </v-row>
        </v-col>
      </v-row>
    </v-card>
  </v-app>
</template>

<script>
export default {
  name: "home",
  props: {
    source: String,
  },

  data: () => ({
    model: null,
    multiple: false,
    mandatory: false,
    showArrows: true,
    prevIcon: false,
    nextIcon: false,
    centerActive: false,
  }),
};
</script>
