import "../css/app.css";
import "./bootstrap";

import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { createApp, h } from "vue";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";
import DefaultLayout from "@/Layouts/DefaultLayout.vue";

const appName = import.meta.env.VITE_APP_NAME || "Laravel";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: async (name) => {
        const page = await resolvePageComponent(
            `./views/${name}.vue`,
            import.meta.glob("./views/**/*.vue")
        );

        page.default.layout = page.default.layout || DefaultLayout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: "#4B5563",
    },
});

// import { createApp, h } from "vue";
// import { createRouter, createWebHistory } from "vue-router";
// import Default from "@/Layouts/DefaultLayout.vue";
// import Home from "@/views/Home.vue";
// import About from "@/views/About.vue";
// import "../css/app.css";

// const routes = [
//     { path: "/", component: Home },
//     { path: "/about", component: About },
// ];

// const router = createRouter({
//     history: createWebHistory(),
//     routes,
// });

// const app = createApp({
//     render: () =>
//         h(Default, {
//             default: h(router.currentRoute.value.matched[0].components.default),
//         }),
// });

// app.use(router);
// app.mount("#app");
