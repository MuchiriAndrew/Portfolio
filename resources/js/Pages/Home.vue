<template>
  <PortfolioLayout >
    <Head title="Andrew Muchiri" />
    <!-- Hero -->
    <section id="home" class="py-12 md:py-20 flex flex-col items-center">
      <div class="grid lg:grid-cols-2 gap-12 items-center justify-between">
        <div>
          <h1 class="text-[32px] font-bold text-white leading-tight">
            {{ hero.title || 'Andrew' }} is a
            <span class="text-primary">{{ hero.highlight1 || 'web designer' }}</span>
            and
            <span class="text-primary">{{ hero.highlight2 || 'front-end developer' }}</span>
          </h1>

          <div
            v-if="hero.description"
            class="rich-text text-[16px] mt-4 text-muted"
            v-html="hero.description"
          />
          <p v-else class="text-muted mt-4 text-[16px]">
            He crafts responsive websites where technologies meet creativity
          </p>

          <a
            href="/contact"
            class="inline-block mt-6 py-[12px] px-[24px] border border-primary hover:bg-primary text-white text-[16px] font-medium hover:border-primary hover:text-white hover:scale-105 transition-all duration-300"
          >
            {{ hero.ctaText || 'Contact me' }}
          </a>
        </div>


        <div class="relative flex flex-col justify-center items-end">
          <div class="relative ">
                <img
                  :src="hero.image"
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
      <div class="flex flex-col items-center justify-center">
        <QuoteSection :quotes="quotes" />
      </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="py-16">
      <SectionHeading title="projects" hash="#" view-all-link="/projects" />
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


      </div>


    </section>

    <!-- About (preview) -->
    <section id="about-me" class="py-16">
      <SectionHeading title="about-me" hash="#" />
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
          <div v-if="about.greeting" class="rich-text rich-text--light text-xl font-medium mb-4" v-html="about.greeting" />
          <div v-if="about.paragraph1" class="rich-text mb-4" v-html="about.paragraph1" />
          <div v-if="about.paragraph2" class="rich-text mb-6" v-html="about.paragraph2" />
          <a
            href="/about"
            class="text-primary hover:underline inline-flex items-center gap-1"
          >
            Read more
            <span aria-hidden="true">→</span>
          </a>
        </div>
        <div class="relative flex items-center justify-center">
          <img
            :src="personImageUrl"
            alt=""
            class="object-contain"
          />

          <!-- dots -->
          <img
            :src="dotsImageUrl"
            alt="Dots"
            id="dots-image-2"
            class="absolute top-[59px] -left-[4px] object-contain"
          />

          <!-- dots rectangle -->
          <img
            :src="dotsRectangleImageUrl"
            alt="Dots Rectangle"
            id="dots-rectangle-image"
            class="absolute top-[279px] right-[16px] object-contain"
          />


        </div>
      </div>

      <!-- Career history (preview) -->
      <CareerHistory
        v-if="experiences.length > 0 || education.length > 0"
        :experiences="experiences"
        :education="education"
      />
    </section>

    <!-- Contact (preview) -->
    <section id="contacts" class="py-16">
      <SectionHeading title="contact" hash="#" />
      <div class="grid md:grid-cols-2 gap-8">
        <div>
          <div v-if="contact.intro" class="rich-text text-muted" v-html="contact.intro" />
          <p v-else class="text-muted">I'm interested in freelance opportunities. However, if you have other request or question, don't hesitate to contact me.</p>
        </div>

        <ContactForm :buttonPosition="'end'" />
      </div>
    </section>
  </PortfolioLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue'
import ProjectCard from '@/Components/ProjectCard.vue'
import QuoteSection from '@/Components/QuoteSection.vue'
import CareerHistory from '@/Components/CareerHistory.vue'
import SectionHeading from '@/Components/SectionHeading.vue'
import SkillCard from '@/Components/SkillCard.vue'
import ContactForm from '@/Components/ContactForm.vue'
defineProps({
  hero: { type: Object, default: () => ({}) },
  quotes: { type: Array, default: () => [] },
  about: { type: Object, default: () => ({}) },
  contact: { type: Object, default: () => ({}) },
  projects: { type: Array, default: () => [] },
  skills: { type: Array, default: () => [] },
  experiences: { type: Array, default: () => [] },
  education: { type: Array, default: () => [] },
})

// Public folder path – use string so Vite doesn't try to resolve it as an import
const heroImageUrl = '/images/hero-image.png'
const dotsImageUrl = '/images/dots.png'
const eliasLogoImageUrl = '/images/elias-logo.png'
const personImageUrl = '/images/person-image2.png'
const dotsRectangleImageUrl = '/images/dots-rectangle.png'
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
