<template>
  <footer class="border-t border-gray-700/50 bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-8">
      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
        <div class="space-y-1">
          <p class="font-semibold text-white">{{ footer.name }}</p>
          <a :href="'mailto:' + footer.email" class="text-muted hover:text-primary text-sm">{{ footer.email }}</a>
          <p class="text-muted text-sm">{{ footer.role }}</p>
        </div>
        <div>
          <!-- <p class="text-muted text-sm mb-2">Media</p> -->
          <div class="flex gap-4">
            <a
              v-for="link in socialLinks"
              :key="link.id"
              :href="link.url || '#'"
              target="_blank"
              rel="noopener noreferrer"
              class="text-muted hover:text-primary transition-colors"
            >
              <SocialIcon :platform="link.platform" :logo="link.logo" />
            </a>
          </div>
        </div>
      </div>
      <p class="text-center text-muted text-sm mt-8">{{ footer.copyright }}</p>
    </div>
  </footer>
</template>

<script setup>
import { usePage } from '@inertiajs/vue3'
import { computed } from 'vue'
import SocialIcon from '@/Components/SocialIcon.vue'

const page = usePage()
const footer = computed(() => page.props.footer || {})
const socialLinks = computed(() => page.props.socialLinks || [])
</script>
