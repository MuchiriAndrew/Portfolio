<template>
  <PortfolioLayout>
    <div class="py-12 md:py-20">
      <!-- About section -->
      <section class="mb-20">
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">
          <span class="text-primary">/</span>about-me
        </h1>
        <p class="text-muted text-lg mb-8">Who am i?</p>
        <div class="grid md:grid-cols-2 gap-12 items-start">
          <div class="space-y-4">
            <p v-if="about.greeting" class="text-xl text-white font-medium">{{ about.greeting }}</p>
            <p class="text-muted">{{ about.paragraph1 }}</p>
            <p class="text-muted">{{ about.paragraph2 }}</p>
            <a
              href="/contact"
              class="inline-flex items-center gap-1 text-primary hover:underline mt-4"
            >
              Read more
              <span aria-hidden="true">→</span>
            </a>
          </div>
          <div class="relative rounded-lg overflow-hidden bg-surface-light border border-gray-600/50 aspect-[3/4] max-h-[500px] flex items-center justify-center">
            <img
              v-if="about.image"
              :src="about.image"
              alt=""
              class="w-full h-full object-cover"
            />
            <span v-else class="text-muted text-sm">About image</span>
          </div>
        </div>
      </section>

      <!-- Skills -->
      <section class="mb-20">
        <h2 class="text-3xl font-bold text-white mb-6">
          <span class="text-primary">#</span>skills
        </h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">
          <SkillCard
            v-for="skill in skills"
            :key="skill.id"
            :name="skill.name"
            :image="skill.image"
          />
        </div>
      </section>

      <!-- Fun facts -->
      <section>
        <h2 class="text-3xl font-bold text-white mb-6">
          <span class="text-primary">#</span>my-fun-facts
        </h2>
        <div class="flex flex-wrap gap-3">
          <span
            v-for="(fact, i) in funFacts"
            :key="i"
            class="px-4 py-2 rounded-lg border border-gray-600 bg-surface-light text-muted text-sm"
          >
            {{ fact }}
          </span>
        </div>
      </section>
    </div>
  </PortfolioLayout>
</template>

<script setup>
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue'
import SkillCard from '@/Components/SkillCard.vue'

defineProps({
  about: { type: Object, default: () => ({}) },
  skills: { type: Array, default: () => [] },
  funFacts: { type: Array, default: () => [] },
})
</script>
