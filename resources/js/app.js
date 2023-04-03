// import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler';

import DarkModeToggle from './vue/dark-mode-toggle.vue'

createApp()
    .component('dark-mode-toggle', DarkModeToggle)
    .mount("#app")
