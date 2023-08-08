import { createApp } from 'vue'
import { MotionPlugin } from '@vueuse/motion'
import App from './App.vue'
import router from './router'
import 'bootstrap/dist/css/bootstrap.css'


createApp(App).use(router,MotionPlugin).mount('#app')
// app.use(MotionPlugin)
import 'bootstrap/dist/js/bootstrap.js'

