import { createRouter, createWebHistory } from "vue-router";
import Main from "../components/partials/EcoMain.vue";
import EcoGroups from "../components/partials/EcoGroups.vue";

const routes = [
    {
        path: "/eco-groups",
        component: EcoGroups,
    },
    {
        path: "/:pathMatch(.*)*",
        component: Main,
    },
];

const router = createRouter({
    routes,
    history: createWebHistory("/"),
});

export default router;
