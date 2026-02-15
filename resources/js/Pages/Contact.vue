<template>
  <PortfolioLayout>
    <div class="py-12 flex flex-col gap-12">
        <!-- Contact Description -->
        <div class="flex flex-col gap-2">
            <h1 class="text-3xl md:text-4xl font-bold text-white">
              <span class="text-primary">/</span>contact
            </h1>
            <p class="text-muted text-lg">Who am i?</p>

            <p class="text-muted max-w-xl">
              {{ contact.intro || "I'm interested in freelance opportunities. However, if you have other request or question, don't hesitate to contact me" }}
            </p>
        </div>

        <!-- Contact Form -->
        <div class="">
            <ContactForm :buttonPosition="'end'"/>
        </div>

    </div>

    <!-- All media -->
    <!-- <section class="mt-16 pt-8 border-t border-gray-700">
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
          <SocialIcon :platform="link.platform" :logo="link.logo" />
          <span>{{ link.label || link.platform }}</span>
        </a>
      </div>
    </section> -->
  </PortfolioLayout>
</template>

<script setup>
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue'
import ContactForm from '@/Components/ContactForm.vue'
import SocialIcon from '@/Components/SocialIcon.vue'

defineProps({
  contact: { type: Object, default: () => ({}) },
  socialLinks: { type: Array, default: () => [] },
})
</script>
