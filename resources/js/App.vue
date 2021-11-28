<template>
    <EcoHeader />
    <router-view />
    <EcoFooter />
</template>

<script>
import EcoHeader from "./components/partials/EcoHeader.vue";
import EcoFooter from "./components/partials/EcoFooter.vue";
export default {
    components: {
        EcoFooter,
        EcoHeader,
    },
};
</script>

<style>

</style>
