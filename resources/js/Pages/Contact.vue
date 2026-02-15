<template>
  <PortfolioLayout>
    <div class="py-12 md:py-20">
      <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">
        <span class="text-primary">/</span>contacts
      </h1>
      <p class="text-muted text-lg mb-12">Who am i?</p>

      <p class="text-muted max-w-xl mb-12">
        {{ contact.intro || "I'm interested in freelance opportunities. However, if you have other request or question, don't hesitate to contact me" }}
      </p>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div
          v-if="contact.supportNumber"
          class="rounded-lg border border-gray-600 bg-surface-light p-6"
        >
          <p class="text-white font-medium mb-2">Support me here</p>
          <p class="text-muted text-sm font-mono break-all">{{ contact.supportNumber }}</p>
        </div>
        <div class="rounded-lg border border-gray-600 bg-surface-light p-6">
          <p class="text-white font-medium mb-4">Message me here</p>
          <div v-if="contact.discord" class="flex items-center gap-2 text-muted text-sm mb-2">
            <span class="w-5 h-5 rounded bg-gray-600 flex items-center justify-center text-xs">D</span>
            {{ contact.discord }}
          </div>
          <div v-if="contact.email" class="flex items-center gap-2 text-muted text-sm">
            <span class="w-5 h-5 rounded bg-gray-600 flex items-center justify-center text-xs">@</span>
            <a :href="'mailto:' + contact.email" class="hover:text-primary">{{ contact.email }}</a>
          </div>
        </div>
      </div>

      <!-- All media -->
      <section class="mt-16 pt-8 border-t border-gray-700">
        <h2 class="text-2xl font-bold text-white mb-6">
          <span class="text-primary">#</span>all-media
        </h2>
        <div class="flex flex-wrap gap-6">
          <a
            v-for="link in socialLinks"
            :key="link.id"
            :href="link.url || '#'"
            target="_blank"
            rel="noopener noreferrer"
            class="flex items-center gap-2 text-muted hover:text-primary transition-colors"
          >
            <SocialIcon :platform="link.platform" />
            <span>{{ link.label || link.platform }}</span>
          </a>
        </div>
      </section>
    </div>
  </PortfolioLayout>
</template>

<script setup>
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue'
import SocialIcon from '@/Components/SocialIcon.vue'

defineProps({
  contact: { type: Object, default: () => ({}) },
  socialLinks: { type: Array, default: () => [] },
})
</script>
