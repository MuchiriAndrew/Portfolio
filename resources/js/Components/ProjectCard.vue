<template>
    <article
        :data-aos="attrs['data-aos'] || 'fade-up'"
        :data-aos-delay="attrs['data-aos-delay']"
        class="border border-muted hover:border-primary hover:translate-y-[-3px] transition-all duration-300 bg-surface-light overflow-hidden flex flex-col w-full min-h-[560px]">



        <div class="bg-gray-700/50 flex items-center justify-center">
            <img v-if="image" :src="image" :alt="title" class="w-full h-full object-cover" />
            <span v-else class="text-muted text-sm">Project image</span>
        </div>


        <div class="px-4 py-4 flex flex-wrap gap-2 border-b border-t border-muted">
            <span v-for="tech in techList" :key="tech" class="text-xs text-muted border border-gray-500  px-2 py-0.5">
                {{ tech }}
            </span>
        </div>



        <div class="p-4 flex flex-col flex-1">
            <h3 class="text-lg font-semibold text-white mb-2">{{ title }}</h3>
            <p class="text-muted text-sm flex-1 line-clamp-2">{{ description }}</p>
            <div class="flex flex-wrap gap-3 mt-4 w-full justify-between">
                <a v-if="liveUrl" :href="liveUrl" target="_blank" rel="noopener noreferrer"
                    class="text-sm text-primary hover:underline flex items-center gap-1 border border-primary w-[40%] py-2 px-2 justify-center ">
                    Live
                    <span aria-hidden="true">→</span>
                </a>

                <a v-if="githubUrl" :href="githubUrl" target="_blank" rel="noopener noreferrer"
                    class="text-sm text-primary hover:underline flex items-center gap-1 border border-primary w-[40%] py-2 px-2 justify-center">
                    Github
                    <span aria-hidden="true">→</span>
                </a>

            </div>
            <div class="mt-2 w-full flex items-center justify-center">

                <Link v-if="slug" :href="`/projects/${slug}`"
                    class="text-sm text-primary hover:underline flex items-center gap-1 border border-primary w-full py-2 px-2 justify-center">
                    Read More
                    <span aria-hidden="true">→</span>
                </Link>
            </div>
        </div>



    </article>
</template>

<script setup>
import { computed, useAttrs } from 'vue'
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    title: { type: String, required: true },
    description: { type: String, default: '' },
    techStack: { type: String, default: '' },
    image: { type: String, default: null },
    slug: { type: String, default: null },
    liveUrl: { type: String, default: null },
    githubUrl: { type: String, default: null },
})

const attrs = useAttrs()

const techList = computed(() =>
    props.techStack ? props.techStack.split(/\s+/).filter(Boolean) : []
)
</script>
