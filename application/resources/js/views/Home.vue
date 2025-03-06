<template>
    <div>
        <Hero />
        <About />
        <Newsletter />
    </div>
</template>
<script>
import Hero from "@/Components/Hero.vue";
import About from "@/Components/About.vue";
import Newsletter from "@/Components/Newsletter.vue";

export default {
    components: {
        Hero,
        About,
        Newsletter,
    },
};
</script>
