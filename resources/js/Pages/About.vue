<template>
    <PortfolioLayout>

        <Head title="About | Andrew Muchiri" />
        <div class="py-12 md:py-20">
            <!-- About section -->
            <section class="mb-20">
                <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">
                    <span class="text-primary">/</span>about-me
                </h1>
                <!-- <p class="text-muted text-lg mb-8">Who am i?</p> -->

                <div class="grid md:grid-cols-2 gap-12 items-start">


                    <div class="space-y-4 h-full flex flex-col justify-center">
                        <div v-if="about.greeting" class="rich-text rich-text--light text-xl font-medium"
                            v-html="about.greeting" />
                        <div v-if="about.paragraph1" class="rich-text text-muted" v-html="about.paragraph1" />
                        <div v-if="about.paragraph2" class="rich-text text-muted" v-html="about.paragraph2" />

                    </div>


                    <div class="relative flex justify-end items-start h-full">
                        <img :src="personImageUrl" alt="" class="object-contain" />

                        <!-- dots -->
                        <img :src="dotsImageUrl" alt="Dots" id="dots-image-2"
                            class="absolute top-[59px] -left-[4px] object-contain" />

                        <!-- dots rectangle -->
                        <img :src="dotsRectangleImageUrl" alt="Dots Rectangle" id="dots-rectangle-image"
                            class="absolute top-[279px] right-[16px] object-contain" />


                    </div>
                </div>
            </section>

            <!-- Career history -->
            <CareerHistory :experiences="experiences" :education="education" />

            <!-- Skills -->
            <section class="mb-20">
                <h2 class="text-3xl font-bold text-white mb-6">
                    <span class="text-primary">#</span>skills
                </h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">
                    <SkillCard v-for="skill in skills" :key="skill.id" :name="skill.name" :image="skill.image" />
                </div>
            </section>

            <!-- Fun facts -->
            <!-- <section>
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
      </section> -->
        </div>
    </PortfolioLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue'
import CareerHistory from '@/Components/CareerHistory.vue'
import SkillCard from '@/Components/SkillCard.vue'

defineProps({
    about: { type: Object, default: () => ({}) },
    skills: { type: Array, default: () => [] },
    funFacts: { type: Array, default: () => [] },
    experiences: { type: Array, default: () => [] },
    education: { type: Array, default: () => [] },
})

const heroImageUrl = '/images/hero-image.png'
const dotsImageUrl = '/images/dots.png'
const eliasLogoImageUrl = '/images/elias-logo.png'
const personImageUrl = '/images/person-image2.png'
const dotsRectangleImageUrl = '/images/dots-rectangle.png'
</script>
