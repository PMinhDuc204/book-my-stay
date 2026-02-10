import '../css/app.css';
import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import Layout from './Layouts/Layout.vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import VueDOMPurifyHTML from 'vue-dompurify-html';


createInertiaApp({
    title: (title) => `Book My Stay | ${title}`,
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
        let page = pages[`./Pages/${name}.vue`];
        page.default.layout = page.default.layout || Layout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(VueDOMPurifyHTML)
            .mount(el)
    },
    progress: {
        // delay: 250,
        color: 'red',
        includeCSS: true,
        showSpinner: true,
    },
})
