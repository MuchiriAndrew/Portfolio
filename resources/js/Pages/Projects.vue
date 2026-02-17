<template>
    <PortfolioLayout>

        <Head title="Projects - Andrew Muchiri" />
        <div class="py-12 md:py-20">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2" data-aos="fade-up">
                <span class="text-primary">/</span>projects
            </h1>

            <p class="text-muted text-lg mb-12" data-aos="fade-up" data-aos-delay="50">Projects I've built</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <ProjectCard v-for="(project, index) in projectsList" :key="project.id" :title="project.title"
                    :description="project.description" :tech-stack="project.tech_stack" :image="project.image"
                    :slug="project.slug" :live-url="project.live_url" :github-url="project.github_url" :data-aos-delay="index * 50" />
            </div>

            <!-- Sentinel for infinite scroll -->
            <div v-if="nextPageUrl && !loadingMore" ref="sentinelRef" class="h-4 w-full" aria-hidden="true" />
            <div v-if="loadingMore" class="py-8 flex justify-center">
                <span class="text-muted text-sm">Loading more…</span>
            </div>
            <p v-if="!nextPageUrl && projectsList.length > 0" class="py-8 text-center text-muted text-sm">
                You've seen all projects.
            </p>
        </div>

    </PortfolioLayout>
</template>

<script setup>
import { ref, onMounted, onUnmounted, watch, nextTick } from 'vue'
import { Head } from '@inertiajs/vue3'
import PortfolioLayout from '@/Layouts/PortfolioLayout.vue'
import ProjectCard from '@/Components/ProjectCard.vue'

const props = defineProps({
    projects: { type: Array, default: () => [] },
    meta: {
        type: Object,
        default: () => ({ current_page: 1, last_page: 1, next_page_url: null }),
    },
})

const projectsList = ref([...props.projects])
const nextPageUrl = ref(props.meta?.next_page_url ?? null)
const loadingMore = ref(false)
const sentinelRef = ref(null)

let observer = null

async function loadMore() {
    if (!nextPageUrl.value || loadingMore.value) return
    loadingMore.value = true
    try {
        const res = await fetch(nextPageUrl.value, {
            headers: { Accept: 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
        })
        const json = await res.json()
        projectsList.value.push(...(json.data ?? []))
        nextPageUrl.value = json.meta?.next_page_url ?? null
        // Refresh AOS for newly loaded items
        await nextTick()
        if (window.AOS) {
            window.AOS.refresh()
        }
    } catch (_) {
        nextPageUrl.value = null
    } finally {
        loadingMore.value = false
    }
}

onMounted(() => {
    observer = new IntersectionObserver(
        (entries) => {
            const [entry] = entries
            if (entry?.isIntersecting && nextPageUrl.value && !loadingMore.value) {
                loadMore()
            }
        },
        { rootMargin: '200px', threshold: 0 }
    )
    if (sentinelRef.value) observer.observe(sentinelRef.value)
})

onUnmounted(() => {
    if (observer && sentinelRef.value) {
        observer.unobserve(sentinelRef.value)
    }
})

watch(sentinelRef, (el) => {
    if (observer && el) observer.observe(el)
})
</script>
