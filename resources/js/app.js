import "../css/app.css";
import "./bootstrap";

import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { createInertiaApp } from "@inertiajs/vue3";
import { createApp, h } from "vue";

// const appName = import.meta.env.VITE_APP_NAME || "";

createInertiaApp({
    resolve: (name) =>
        resolvePageComponent(
            `./pages/${name}.vue`,
            import.meta.glob("./pages/**/*.vue"),
        ),
    setup({ App, el, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});
