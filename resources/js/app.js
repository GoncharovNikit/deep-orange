require("./bootstrap");

import App from "./App.vue";
import { createApp } from "vue";
import router from "./router/index";

if (document.getElementById("vue-app") != null) {
    const app = createApp(App);

    app.use(router).mount("#vue-app");
}
