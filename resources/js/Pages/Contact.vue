<template>
  <PortfolioLayout>
    <Head title="Contact - Andrew Muchiri" />
    <div class="py-12 flex gap-12 ">

        <div class="flex flex-col gap-12">
            <!-- Contact Description -->
            <div class="flex flex-col gap-2" data-aos="fade-up">
                <h1 class="text-3xl md:text-4xl font-bold text-white">
                  <span class="text-primary">/</span>contact
                </h1>
                <!-- <p class="text-muted text-lg">Who am i?</p> -->

                <p class="text-muted max-w-xl">
                  <div v-if="contact.intro" class="rich-text text-muted" v-html="contact.intro" />
                <p v-else class="text-muted">I'm interested in freelance opportunities. However, if you have other request or question, don't hesitate to contact me.</p>
                </p>
            </div>

            <!-- Contact Form -->
            <div class="" data-aos="fade-up" data-aos-delay="100">
                <ContactForm :buttonPosition="'end'"/>
            </div>
        </div>

        <!-- right side -> shapes to fill space-->
        <div class="flex-1 relative hidden xl:block">
            <!-- shapes -->
             <div class="w-[146px] h-[146px] border-[0.5px] border-[ABB2BF] absolute top-12 right-30 "></div>

            <div class="w-[86px] h-[86px] border-[0.5px] border-[ABB2BF] absolute bottom-22 right-20 "></div>

            <div class="absolute top-40 left-20 w-full h-full">
                <img :src="dotsImageUrl" alt="Dots" id="dots-image" class="object-contain" />
            </div>
            <div class="absolute top-60 left-60 w-full h-full">
                <img :src="dotsImageUrl" alt="Dots" id="dots-image" class="object-contain" />
            </div>
        </div>



    </div>


  </PortfolioLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue'
import ContactForm from '@/Components/ContactForm.vue'
import SocialIcon from '@/Components/SocialIcon.vue'

defineProps({
  contact: { type: Object, default: () => ({}) },
  socialLinks: { type: Array, default: () => [] },
})

const dotsImageUrl = '/images/dots.png'
</script>
