<template>
  <PortfolioLayout>
    <!-- Hero -->
    <section id="home" class="py-12 md:py-20 flex flex-col items-center">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <h1 class="text-[32px] font-bold text-white leading-tight">
            {{ hero.title || 'Andrew' }} is a
            <span class="text-primary">{{ hero.highlight1 || 'web designer' }}</span>
            and
            <span class="text-primary">{{ hero.highlight2 || 'front-end developer' }}</span>
          </h1>

          <p class="text-muted mt-4 text-[16px]">
            {{ hero.description || 'He crafts responsive websites where technologies meet creativity' }}
          </p>

          <a
            href="/contact"
            class="inline-block mt-6 py-[8px] px-[16px] border border-primary text-white text-[16px] font-medium hover:border-primary hover:text-primary transition-colors"
          >
            {{ hero.ctaText || 'Contact me' }}
          </a>
        </div>


        <div class="relative flex flex-col justify-center items-center">
          <div class="relative ">
                <img
                  :src="heroImageUrl"
                  alt="Hero"
                  id="hero-image"
                  class="w-full h-full object-cover"
                />

                <img
                  :src="dotsImageUrl"
                  alt="Dots"
                  id="dots-image"
                  class="absolute top-[246px] right-[16px] object-contain"
                />

                <img
                  :src="eliasLogoImageUrl"
                  alt="Elias Logo"
                  id="elias-logo"
                  class="absolute top-[84px] -left-[12px] object-contain"
                />
          </div>




          <!-- Hero status text -->
          <div
            v-if="hero.statusText"
            class="min-w-3/4 border border-muted px-4 py-3 flex gap-2 items-center justify-center md:justify-start"
          >
            <span class="w-2 h-2 rounded-full bg-primary animate-pulse duration-1000" />
            <span class="text-[16px] text-muted">{{ hero.statusText }}</span>
          </div>


        </div>
      </div>

      <!-- Quote -->
      <QuoteSection
        :text="quote.text"
        :author="quote.author ? `— ${quote.author}` : ''"
      />
    </section>

    <!-- Projects -->
    <section id="projects" class="py-16">
      <SectionHeading title="projects" hash="#" view-all-link="/#projects" />
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- <div class="overflow-x-auto pb-4 -mx-4 px-4 flex gap-6 scrollbar-thin"> -->

        <ProjectCard
          v-for="project in projects"
          :key="project.id"
          :title="project.title"
          :description="project.description"
          :tech-stack="project.tech_stack"
          :image="project.image"
          :slug="project.slug"
          :live-url="project.live_url"
          :github-url="project.github_url"
        />
      </div>
    </section>

    <!-- Skills -->
    <section id="skills" class="py-16">
      <SectionHeading title="skills" hash="#" />

      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">
        <SkillCard
          v-for="skill in skills"
          :key="skill.id"
          :name="skill.name"
          :image="skill.image"
        />
        <SkillCard
          v-for="skill in skills"
          :key="skill.id"
          :name="skill.name"
          :image="skill.image"
        />
        <SkillCard
          v-for="skill in skills"
          :key="skill.id"
          :name="skill.name"
          :image="skill.image"
        />
        <SkillCard
          v-for="skill in skills"
          :key="skill.id"
          :name="skill.name"
          :image="skill.image"
        />
        <SkillCard
          v-for="skill in skills"
          :key="skill.id"
          :name="skill.name"
          :image="skill.image"
        />
        <SkillCard
          v-for="skill in skills"
          :key="skill.id"
          :name="skill.name"
          :image="skill.image"
        />
        <SkillCard
          v-for="skill in skills"
          :key="skill.id"
          :name="skill.name"
          :image="skill.image"
        />
        <SkillCard
          v-for="skill in skills"
          :key="skill.id"
          :name="skill.name"
          :image="skill.image"
        />
      </div>


    </section>

    <!-- About (preview) -->
    <section id="about-me" class="py-16">
      <SectionHeading title="about-me" hash="#" />
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
          <p v-if="about.greeting" class="text-xl text-white font-medium mb-4">{{ about.greeting }}</p>
          <p class="text-muted mb-4">{{ about.paragraph1 }}</p>
          <p class="text-muted mb-6">{{ about.paragraph2 }}</p>
          <a
            href="/about"
            class="text-primary hover:underline inline-flex items-center gap-1"
          >
            Read more
            <span aria-hidden="true">→</span>
          </a>
        </div>
        <div class="rounded-lg overflow-hidden bg-surface-light border border-gray-600/50 aspect-[4/5] max-h-[400px] flex items-center justify-center">
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

    <!-- Contact (preview) -->
    <section id="contacts" class="py-16">
      <SectionHeading title="contacts" hash="#" />
      <div class="grid md:grid-cols-2 gap-8">
        <p class="text-muted">
          {{ contact.intro || "I'm interested in freelance opportunities. However, if you have other request or question, don't hesitate to contact me" }}
        </p>
        <div class="rounded-lg border border-gray-600 bg-surface-light p-6 space-y-4">
          <p class="text-white font-medium">Message me here</p>
          <div v-if="contact.discord" class="flex items-center gap-2 text-muted text-sm">
            <span class="w-5 h-5 rounded bg-gray-600 flex items-center justify-center text-xs">D</span>
            {{ contact.discord }}
          </div>
          <div v-if="contact.email" class="flex items-center gap-2 text-muted text-sm">
            <span class="w-5 h-5 rounded bg-gray-600 flex items-center justify-center text-xs">@</span>
            <a :href="'mailto:' + contact.email" class="hover:text-primary">{{ contact.email }}</a>
          </div>
        </div>
      </div>
    </section>
  </PortfolioLayout>
</template>

<script setup>
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue'
import ProjectCard from '@/Components/ProjectCard.vue'
import QuoteSection from '@/Components/QuoteSection.vue'
import SectionHeading from '@/Components/SectionHeading.vue'
import SkillCard from '@/Components/SkillCard.vue'

defineProps({
  hero: { type: Object, default: () => ({}) },
  quote: { type: Object, default: () => ({}) },
  about: { type: Object, default: () => ({}) },
  contact: { type: Object, default: () => ({}) },
  projects: { type: Array, default: () => [] },
  skills: { type: Array, default: () => [] },
})

// Public folder path – use string so Vite doesn't try to resolve it as an import
const heroImageUrl = '/images/hero-image.png'
const dotsImageUrl = '/images/dots.png'
const eliasLogoImageUrl = '/images/elias-logo.png'
</script>

<style scoped>
#hero-image {
  z-index: 20 !important;
}
#dots-image {
  z-index: 20 !important;
}
#elias-logo {
  z-index: 10 !important;
}
</style>
