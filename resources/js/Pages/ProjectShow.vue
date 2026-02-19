<template>
  <PortfolioLayout>
    <Head :title="`${project.title} - Andrew Muchiri`" />
    <article class="py-12 md:py-20">
      <header class="mb-8" data-aos="fade-up">
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
        <div class="flex flex-wrap gap-3">
          <a
            v-if="project.live_url"
            :href="project.live_url"
            target="_blank"
            rel="noopener noreferrer"
            class="text-sm text-primary inline-flex items-center gap-1 border border-primary py-2 px-4 justify-center transition-colors hover:bg-primary/10"
          >
            Live
            <span aria-hidden="true">→</span>
          </a>
          <a
            v-if="project.github_url"
            :href="project.github_url"
            target="_blank"
            rel="noopener noreferrer"
            class="text-sm text-primary inline-flex items-center gap-1 border border-primary py-2 px-4 justify-center transition-colors hover:bg-primary/10"
          >
            GitHub
            <span aria-hidden="true">→</span>
          </a>
          <a
            v-if="project.admin_url"
            :href="project.admin_url"
            target="_blank"
            rel="noopener noreferrer"
            class="text-sm text-primary inline-flex items-center gap-1 border border-primary py-2 px-4 justify-center transition-colors hover:bg-primary/10"
          >
            {{ project.admin_button_title || 'Admin' }}
            <span aria-hidden="true">→</span>
          </a>
        </div>
      </header>

      <div v-if="project.image" class="mb-10 rounded-lg overflow-hidden border border-gray-600/50" data-aos="fade-up" data-aos-delay="100">
        <img :src="project.image" :alt="project.title" class="w-full h-auto object-cover" />
      </div>

      <!-- <p v-if="project.description" class="text-muted text-lg mb-8" data-aos="fade-up" data-aos-delay="150">{{ project.description }}</p> -->

      <div
        v-if="project.content"
        ref="contentRef"
        class="project-content text-muted"
        v-html="project.content"
        data-aos="fade-up"
        data-aos-delay="200"
      />
      <p v-else class="text-muted" data-aos="fade-up" data-aos-delay="200">No project write-up yet.</p>
    </article>
  </PortfolioLayout>
</template>

<script setup>
import { computed, ref, watch, nextTick, onMounted } from 'vue'
import { Head } from '@inertiajs/vue3'
import hljs from 'highlight.js'
import 'highlight.js/styles/vs2015.min.css'
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue'

const props = defineProps({
  project: { type: Object, required: true },
})

const contentRef = ref(null)
const techList = computed(() =>
  props.project.tech_stack ? props.project.tech_stack.split(/\s+/).filter(Boolean) : []
)

function highlightCode() {
  if (!contentRef.value) return
  contentRef.value.querySelectorAll('pre code').forEach((el) => {
    hljs.highlightElement(el)
  })
}

function makeSectionsCollapsible() {
  const container = contentRef.value
  if (!container || !container.children.length) return
  const children = Array.from(container.children)
  let i = 0
  const preamble = []
  while (i < children.length && children[i].tagName !== 'H2') {
    preamble.push(children[i])
    i++
  }
  const sectionList = []
  while (i < children.length) {
    if (children[i].tagName === 'H2') {
      const titleEl = children[i++]
      const content = []
      while (i < children.length && children[i].tagName !== 'H2') {
        content.push(children[i++])
      }
      sectionList.push({ titleEl, content })
    }
  }
  if (sectionList.length === 0) return
  const fragment = document.createDocumentFragment()
  preamble.forEach((n) => fragment.appendChild(n))
  sectionList.forEach(({ titleEl, content }) => {
    const wrap = document.createElement('div')
    wrap.className = 'collapsible-section border border-gray-600 rounded-lg mb-4 overflow-hidden'
    const header = document.createElement('button')
    header.type = 'button'
    header.className = 'section-header w-full flex items-center justify-between gap-2 text-left px-4 py-3 font-semibold text-primary bg-gray-800/50 hover:bg-gray-800 transition-colors'
    header.setAttribute('aria-expanded', 'true')
    const titleWrap = document.createElement('span')
    titleWrap.className = 'section-title'
    titleWrap.innerHTML = titleEl.innerHTML
    header.appendChild(titleWrap)
    const chevron = document.createElement('span')
    chevron.className = 'section-chevron shrink-0 transition-transform'
    chevron.setAttribute('aria-hidden', 'true')
    chevron.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>'
    header.appendChild(chevron)
    const body = document.createElement('div')
    body.className = 'section-body px-4 pb-4'
    content.forEach((n) => body.appendChild(n))
    header.addEventListener('click', () => {
      const isHidden = body.classList.toggle('hidden')
      chevron.classList.toggle('rotate-180', isHidden)
      header.setAttribute('aria-expanded', String(!isHidden))
    })
    wrap.appendChild(header)
    wrap.appendChild(body)
    fragment.appendChild(wrap)
  })
  container.innerHTML = ''
  container.appendChild(fragment)
}

function initContent() {
  nextTick(() => {
    highlightCode()
    makeSectionsCollapsible()
  })
}

onMounted(initContent)
watch(
  () => props.project.content,
  initContent,
  { flush: 'post' }
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
.project-content :deep(ul) {
  list-style-type: disc;
}
.project-content :deep(ul li) {
  display: list-item;
  list-style-type: inherit;
}
.project-content :deep(ol) {
  list-style-type: decimal;
}
.project-content :deep(ol li) {
  display: list-item;
  list-style-type: inherit;
}
.project-content :deep(img) {
  max-width: 100%;
  height: auto;
  border-radius: 6px;
  margin: 0.75em 0;
}
/* Code blocks (also in app.css for .project-content; scoped override if needed) */
.project-content :deep(pre) {
  margin: 1em 0;
  padding: 1rem 1.25rem;
  background: #1e1e1e;
  border: 1px solid #3d3d3d;
  border-radius: 8px;
  overflow-x: auto;
  font-family: 'Fira Code', ui-monospace, Menlo, Monaco, Consolas, monospace;
  font-size: 0.875rem;
  line-height: 1.6;
}
/* Let highlight.js theme color the code; only layout here */
.project-content :deep(pre code) {
  display: block;
  background: none;
  padding: 0;
  white-space: pre;
}
.project-content :deep(pre code.hljs) {
  padding: 0;
}
.project-content :deep(p code),
.project-content :deep(li code) {
  padding: 0.2em 0.4em;
  background: #32363e;
  border-radius: 4px;
  font-family: 'Fira Code', ui-monospace, Menlo, Monaco, Consolas, monospace;
  font-size: 0.9em;
  color: #C778DD;
}
</style>
