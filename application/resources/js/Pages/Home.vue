<script setup>
import { Head, Link } from "@inertiajs/vue3";
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>
<template>
    <Head title="Home" />
    <div>
        <div>
            <nav
                v-if="canLogin"
                class="-mx-3 flex flex-1 justify-end text-black"
            >
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                >
                    Dashboard
                </Link>

                <template v-else>
                    <Link
                        :href="route('login')"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                    >
                        Log in
                    </Link>

                    <Link
                        v-if="canRegister"
                        :href="route('register')"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                    >
                        Register
                    </Link>
                </template>
            </nav>
        </div>
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
