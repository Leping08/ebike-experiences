import { createApp } from 'vue/dist/vue.esm-bundler'
import DarkModeToggle from './vue/dark-mode-toggle.vue'
import NavBar from './vue/nav-bar.vue'
import Map from './vue/trail-map.vue'

createApp()
    .component('dark-mode-toggle', DarkModeToggle)
    .component('nav-bar', NavBar)
    .component('trail-map', Map)
    .mount("#app")
