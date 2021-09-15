<template>
  <v-app id="inspire">
    <v-row class="black" no-gutters justify="center">
      <v-col cols="11" md="8">
        <br />
        <v-card class="mx-auto white--text" height="500" width="470">
          <h1 class="my-4 text-center title white--text">
            Xpointer Games & Tecnologia
          </h1>
          <v-card class="my-4 text-center white--text">
            Empresa especializada em produtos de entretenimento tecnológico.
            Localizada na cidade de Curitiba, iniciou seus trabalhos em 2015 com
            vendas de consoles diversos de terceiros (Microsoft,Sony,Nintendo),
            hoje trabalha com o seu próprio produto o retro console XP.
          </v-card>
          <v-card class="my-4 text-center white--text">
            A XPOINTER foi uma das lojas virtuais que atuou com êxito nesse
            segmento de vendas de consoles diversos, e agora esta sendo
            atualizada e para atuar com a venda proprietária do produto da
            marca.
          </v-card>
          <v-card class="my-4 text-center white--text">
            O site e loja virtual XPOINTER, foi desenvolvido para que você
            encontre com facilidade as informações que precisa do produtos
            comercializados nesta loja. FAÇA SEU PEDIDO!. Com conforto e
            segurança.
          </v-card>
          <hr />
          <v-card>
            <h1 class="my-4 text-center title white--text">
              Contato: +55 041 998272549
            </h1>
            <h4 class="my-4 text-center title white--text">Curitiba/Paraná</h4>
          </v-card>
        </v-card>
      </v-col>
    </v-row>
  </v-app>
</template>

<script>
export default {
  name: `sobre`,
  props: {
    source: String,
  },

  data: () => ({
    length: 3,
    window: 0,
  }),
};
</script>
