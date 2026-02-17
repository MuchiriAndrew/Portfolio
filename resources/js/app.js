import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import AOS from 'aos'
import 'aos/dist/aos.css'
import '../css/app.css'

createInertiaApp({
  resolve: name =>
    resolvePageComponent(
      `./Pages/${name}.vue`,
      import.meta.glob('./Pages/**/*.vue')
    ),
  setup({ el, App, props, plugin }) {
    const app = createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
    
    // Initialize AOS with subtle fade-in-up animations
    AOS.init({
      duration: 600,
      easing: 'ease-out',
      once: true, // Animation happens only once
      offset: 100, // Start animation when element is 100px from viewport
      delay: 0,
    })
    
    // Make AOS available globally for refresh calls
    window.AOS = AOS
    
    return app
  },
})
