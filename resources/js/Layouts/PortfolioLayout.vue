<template>
  <div class="min-h-screen bg-surface text-gray-100 flex flex-col">

    <!-- Left sidebar (desktop) -->
    <aside class="fixed left-0 top-0 z-99 hidden lg:flex flex-col items-center gap-6 pl-6">
      <div class="w-px flex-1 min-h-[200px] bg-gray-600" />
      <a
        v-for="link in socialLinks"
        :key="link.id"
        :href="link.url || '#'"
        target="_blank"
        rel="noopener noreferrer"
        class="text-muted hover:text-primary transition-colors"
        :aria-label="link.platform"
      >
        <SocialIcon :platform="link.platform" :logo="link.logo" />
      </a>
    </aside>

    <AppHeader />

    <main class="flex-1 pt-14 md:pt-16" id="main-wrapper">
      <div class="mx-auto max-w-7xl px-4 sm:px-6">
        <slot />
      </div>
    </main>

    <AppFooter />
  </div>
</template>

<script setup>
import { usePage } from '@inertiajs/vue3'
import { computed } from 'vue'
import AppHeader from '@/Components/AppHeader.vue'
import AppFooter from '@/Components/AppFooter.vue'
import SocialIcon from '@/Components/SocialIcon.vue'

const page = usePage()
const socialLinks = computed(() => page.props.socialLinks || [])
const backgroundImageUrl = '/images/background.png'
</script>


<style scoped>
#main-wrapper {
  background-image: url('/images/background.png');
  background-size: 100%;
  background-position: center;
  background-repeat: no-repeat;
}
/*  for small screens */
@media (max-width: 768px) {
  #main-wrapper {
    background-image: none;
  }
}
</style>
