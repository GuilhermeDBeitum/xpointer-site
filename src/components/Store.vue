<template>
  <v-app id="inspire">
    <v-container class="black" style="padding:20px">
      <v-row no-gutters>
        <v-img width="100" src="..\assets\mario.png"></v-img>

        <v-col cols="11" md="5">
          <v-data
            >Envie os dados e aguarde o email de confirmação, para finalizar a
            sua compra!</v-data
          >
          <v-form
            id="contato"
            method="post"
            action="email.php"
            ref="form"
            v-model="valid"
            lazy-validation
          >
            <v-text-field
              color="red"
              v-model="name"
              :rules="nameRules"
              label="Nome"
              required
            ></v-text-field>

            <v-text-field
              color="red"
              v-model="email"
              :rules="emailRules"
              label="E-mail"
              required
            ></v-text-field>

            <v-text-field
              color="red"
              v-model="tel"
              type="number"
              counter="12"
              :rules="[
                (x) => !!x || 'Digite o telefone!',
                (x) => (x && x.length >= 12) || 'Digite Telefone Valido!',
              ]"
              label="Telefone"
              required
            ></v-text-field>

            <v-select
              color="red"
              v-model="select"
              :items="items"
              :rules="[(v) => !!v || 'Selecione 1 Item!']"
              label="Item"
              required
            ></v-select>

            <v-col cols="12" md="16">
              <v-textarea
                color="red"
                solo
                name="input-7-4"
                label="mensagem..."
              ></v-textarea>
            </v-col>

            <v-btn
              :disabled="!valid"
              color="success"
              class="mr-4"
              style="margin-left:100px"
              @click="validate"
            >
              Enviar
            </v-btn>
          </v-form>
        </v-col>
      </v-row>
    </v-container>
  </v-app>
</template>

<script>
export default {
  name: `compre`,
  props: {
    source: String,
  },

  data: () => ({
    length: 3,
    window: 0,
    tel: null,
    msg: "",
    valid: true,
    name: "",
    nameRules: [(v) => !!v || "Digite o nome!"],
    email: "",
    emailRules: [
      (v) => !!v || "Digite o email!",
      (v) => /.+@.+\..+/.test(v) || "Um E-mail valido",
    ],
    select: null,
    items: ["Console Delux XP + brindes", "XP-EN"],
    checkbox: false,
  }),
  methods: {
    validate() {
      if (this.$refs.form.validate()) {
        this.snackbar = true;
      }
    },
    reset() {
      this.$refs.form.reset();
    },
    resetValidation() {
      this.$refs.form.resetValidation();
    },
  },
};
</script>
