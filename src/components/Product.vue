<template>
  <v-app id="inspire">
    <v-card class="black">
      <v-row no-gutters align="center" justify="center">
        <v-col cols="12" sm="8" md="8">
          <v-col cols="12" md="7"> </v-col>
          <v-card class="mx-auto" color="black" max-width="750">
            <v-img :aspect-ratio="26 / 22" src="..\assets\consoles.png">
            </v-img>
            <br />
            <br />
            <br />

            <v-card-text class="pt-6" style="position: relative;">
              <h1 align="right">R$599</h1>
              <h3 class="display-1 font-weight-light red--text mb-2">
                RETRO CONSOLE XP
              </h3>
              <div class="font-weight-light title mb-2 white--text">
                O XP console apresenta sistema base de 64 BITS para a placa
                Raspberry PI 3 (1,2 GHz, 64-bit, quad-core, ARMv8), contando com
                um cartão SD classe 10 de alta qualidade com 32 gigas, com o
                sistema completo com + de 8.000 Jogos. O produto já vem com
                adaptador wi-fi nativo, possibilitando a interação dos jogadores
                com a conexão on-line via LAN play, além da porta ethernet para
                conexões via cabo de rede, 4 USBs e bluetooth. Na embalagem
                consta manual de instruções, 1 console Delux Xpointer, 1
                controle anatômico especial Wireless (sem fio), sua bateria dura
                entorno de 5 horas! incluso cabo para carregar o controle,
                conector USB Wireless, cabo hdmi e cabo de energia.
              </div>
            </v-card-text>
          </v-card>
        </v-col>
        <v-col cols="12" md="4">
          <v-card color="black" width="430">
            <v-img :aspect-ratio="15 / 15" src="..\assets\pen.png"> </v-img>
            <v-card-text class="pt-6" style="position: relative;">
              <h1 align="right">R$199</h1>
              <h3 class="display-1 font-weight-light red--text mb-2">XP-EN</h3>
              <div class="font-weight-light title mb-2 white--text">
                Versão que contem o sistema completo com + de 8.000 Jogos, para
                jogar conectado em computador ou notbook. Na embalagem consta
                manual de instruções, folheto auto indicativo sobre os 31
                sistemas, 1 Pendrive (32G) de qualidade superior e 2 controles
                no formato playstation Dual Shock com fio.
              </div>
            </v-card-text>

            <v-col cols="12" md="12" order="first">
              <v-img
                height="310"
                :aspect-ratio="260 / 120"
                src="..\assets\sistema.jpg"
              ></v-img>
            </v-col>
          </v-card>
        </v-col>
      </v-row>
      <br />
    </v-card>
  </v-app>
</template>

<script>
export default {
  name: `produtos`,
  props: {
    source: String,
  },

  data: () => ({
    length: 3,
    window: 0,
  }),
};
</script>
