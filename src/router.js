import Vue from "vue";
import Router from "vue-router";
import home from "@/components/Home";
import product from "@/components/Product";
import system from "@/components/System";
import aboult from "@/components/Aboult";

Vue.use(Router);

export default new Router({
  mode: "history",
  base: process.env.BASE_URL,
  routes: [
    {
      path: "/",
      name: "",
      component: home,
    },
    {
      path: "/home",
      name: "home",
      component: home,
    },
    {
      path: "/produtos",
      name: "produtos",
      component: product,
    },
    {
      path: "/sistemas",
      name: "sistemas",
      component: system,
    },
    {
      path: "/sobreaxpointer",
      name: "sobre",
      component: aboult,
    },
  ],
});
