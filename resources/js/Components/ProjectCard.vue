<template>
  <article class="border border-muted bg-surface-light overflow-hidden flex flex-col min-w-[280px] max-w-[360px]  shrink-0">



    <div class="bg-gray-700/50 flex items-center justify-center">
      <img
        v-if="image"
        :src="image"
        :alt="title"
        class="w-full h-full object-cover"
      />
      <span v-else class="text-muted text-sm">Project image</span>
    </div>


    <div class="px-4 py-4 flex flex-wrap gap-2 border-b border-t border-muted">
      <span
        v-for="tech in techList"
        :key="tech"
        class="text-xs text-muted border border-gray-500  px-2 py-0.5"
      >
        {{ tech }}
      </span>
    </div>



    <div class="p-4 flex flex-col flex-1">
      <h3 class="text-lg font-semibold text-white mb-2">{{ title }}</h3>
      <p class="text-muted text-sm flex-1 line-clamp-2">{{ description }}</p>
      <div class="flex gap-3 mt-4">
        <a
          v-if="liveUrl"
          :href="liveUrl"
          target="_blank"
          rel="noopener noreferrer"
          class="text-sm text-primary hover:underline flex items-center gap-1"
        >
          Live
          <span aria-hidden="true">→</span>
        </a>

        <a
          v-if="cachedUrl"
          :href="cachedUrl"
          target="_blank"
          rel="noopener noreferrer"
          class="text-sm text-primary hover:underline flex items-center gap-1"
        >
          Cached
          <span aria-hidden="true">→</span>
        </a>
      </div>
    </div>



  </article>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
  title: { type: String, required: true },
  description: { type: String, default: '' },
  techStack: { type: String, default: '' },
  image: { type: String, default: null },
  liveUrl: { type: String, default: null },
  cachedUrl: { type: String, default: null },
})

const techList = computed(() =>
  props.techStack ? props.techStack.split(/\s+/).filter(Boolean) : []
)
</script>
