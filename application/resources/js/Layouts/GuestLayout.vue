<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div class="flex flex-col items-center p-6 sm:justify-center sm:p-0">
        <div
            class="mt-6 w-full overflow-hidden bg-white p-6 border border-yellow-400 sm:max-w-md sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
