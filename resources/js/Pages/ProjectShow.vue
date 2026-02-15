<template>
  <PortfolioLayout>
    <article class="py-12 md:py-20">
      <header class="mb-8">
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">{{ project.title }}</h1>
        <div v-if="project.tech_stack" class="flex flex-wrap gap-2 mb-6">
          <span
            v-for="tech in techList"
            :key="tech"
            class="text-xs text-muted border border-gray-500 rounded px-2 py-1"
          >
            {{ tech }}
          </span>
        </div>
        <div class="flex flex-wrap gap-4">
          <a
            v-if="project.live_url"
            :href="project.live_url"
            target="_blank"
            rel="noopener noreferrer"
            class="text-primary hover:underline inline-flex items-center gap-1"
          >
            Live
            <span aria-hidden="true">→</span>
          </a>
          <a
            v-if="project.github_url"
            :href="project.github_url"
            target="_blank"
            rel="noopener noreferrer"
            class="text-primary hover:underline inline-flex items-center gap-1"
          >
            GitHub
            <span aria-hidden="true">→</span>
          </a>
        </div>
      </header>

      <div v-if="project.image" class="mb-10 rounded-lg overflow-hidden border border-gray-600/50">
        <img :src="project.image" :alt="project.title" class="w-full h-auto object-cover" />
      </div>

      <p v-if="project.description" class="text-muted text-lg mb-8">{{ project.description }}</p>

      <div
        v-if="project.content"
        class="project-content text-muted"
        v-html="project.content"
      />
      <p v-else class="text-muted">No project write-up yet.</p>
    </article>
  </PortfolioLayout>
</template>

<script setup>
import { computed } from 'vue'
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue'

const props = defineProps({
  project: { type: Object, required: true },
})

const techList = computed(() =>
  props.project.tech_stack ? props.project.tech_stack.split(/\s+/).filter(Boolean) : []
)
</script>

<style scoped>
.project-content :deep(h1),
.project-content :deep(h2),
.project-content :deep(h3) {
  color: var(--color-primary, #f8f8f2);
  font-weight: 700;
  margin-top: 1.5em;
  margin-bottom: 0.5em;
}
.project-content :deep(h1) { font-size: 1.5rem; }
.project-content :deep(h2) { font-size: 1.25rem; }
.project-content :deep(h3) { font-size: 1.125rem; }
.project-content :deep(p) {
  margin-bottom: 1em;
  line-height: 1.6;
}
.project-content :deep(a) {
  color: var(--color-primary, #C778DD);
  text-decoration: underline;
}
.project-content :deep(ul),
.project-content :deep(ol) {
  margin-bottom: 1em;
  padding-left: 1.5em;
}
</style>
