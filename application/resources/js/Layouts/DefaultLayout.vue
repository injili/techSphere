<template>
    <div class="flex flex-col min-h-screen">
        <Navigation />
        <div class="flex-grow flex flex-col justify-center">
            <slot />
        </div>
        <Footer />
    </div>
</template>

<script>
import Navigation from "@/Components/Navigation.vue";
import Footer from "@/Components/Footer.vue";

export default {
    components: {
        Navigation,
        Footer,
    },
};
</script>
