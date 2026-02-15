<template>
    <section class="my-20 flex flex-col items-center justify-center">
        <p class="text-muted text-sm uppercase tracking-wider mb-2">Professional background</p>
        <h2 class="text-3xl font-bold mb-2">
            <span class="text-white">Career</span>
            <span class="text-primary"> History</span>
        </h2>

        <div class="rich-text text-muted text-center mb-8 max-w-xl">
            <p class="mb-2">
                3+ years of experience in the industry. Interested in working together?
                <a href="/contact" class="text-primary hover:underline">Get in touch</a>.
            </p>
        </div>

        <!-- Tabs -->
        <div class="flex gap-2 mb-8 w-full justify-center items-center">
            <button type="button" class="px-6 py-3 font-medium transition-colors cursor-pointer"
                :class="activeTab === 'experience' ? 'bg-primary text-white' : 'border border-primary text-primary hover:bg-primary/10'"
                @click="activeTab = 'experience'">
                Experience
            </button>
            <button type="button" class="px-6 py-3 font-medium transition-colors cursor-pointer"
                :class="activeTab === 'education' ? 'bg-primary text-white' : 'border border-primary text-primary hover:bg-primary/10'"
                @click="activeTab = 'education'">
                Education
            </button>
        </div>



        <!-- Experience timeline -->
        <div v-show="activeTab === 'experience'" class="relative w-full">
            <div class="absolute left-[19px] top-0 bottom-0 w-px bg-primary/50" aria-hidden="true" />
            <ul class="space-y-6">
                <li v-for="(exp, index) in experiences" :key="exp.id" class="relative pl-14">
                    <span
                        class="absolute left-0 flex h-10 w-10 items-center justify-center rounded-full bg-primary/20 text-sm font-medium"
                        aria-hidden="true">
                        <!-- {{ (exp.company || '?').charAt(0) }} -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-6 h-6 text-white bg-primary rounded-full p-1" aria-hidden="true">
                            <path
                                d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16">
                            </path>
                        </svg>
                    </span>
                    <div
                        class="rounded-lg cursor-pointer border border-primary/50 bg-surface-light/50 hover:bg-surface-light/70 hover:translate-y-[-3px] transition-all duration-300 px-6 py-4">
                        <div class="flex flex-wrap items-start justify-between gap-2">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="text-primary font-medium">{{ exp.company }}</span>
                                <span v-if="exp.role_tag"
                                    class="rounded px-2 py-0.5 text-xs bg-primary/20 text-primary">
                                    {{ exp.role_tag }}
                                </span>
                            </div>
                            <span v-if="exp.date_range" class="text-muted text-sm whitespace-nowrap">{{ exp.date_range
                                }}</span>
                        </div>
                        <p class="text-white font-semibold mt-1">{{ exp.title }}</p>
                        <div v-if="exp.tech_stack" class="flex flex-wrap gap-2 mt-2">
                            <span v-for="tech in techList(exp.tech_stack)" :key="tech"
                                class="rounded border border-gray-500 px-2 py-0.5 text-xs text-muted">
                                {{ tech }}
                            </span>
                        </div>
                        <hr class="my-4 border-primary">

                        <div v-if="exp.description"
                            class="rich-text text-muted text-sm mt-3 [&_ul]:list-disc [&_ul]:pl-5 [&_li]:mb-1"
                            v-html="exp.description" />
                    </div>
                </li>
                <li v-if="experiences.length === 0" class="pl-14 text-muted">
                    No experience entries yet.
                </li>
            </ul>
        </div>

        <!-- Education timeline -->
        <div v-show="activeTab === 'education'" class="relative w-full">
            <div class="absolute left-[19px] top-0 bottom-0 w-px bg-primary/50" aria-hidden="true" />
            <ul class="space-y-6">
                <li v-for="edu in education" :key="edu.id" class="relative pl-14">
                    <span
                        class="absolute left-0 flex h-10 w-10 items-center justify-center rounded-full bg-primary/20 text-sm font-medium"
                        aria-hidden="true">
                        <!-- {{ (edu.institution || '?').charAt(0) }} -->


                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-university w-4 h-4 text-white " aria-hidden="true">
                            <circle cx="12" cy="10" r="1"></circle>
                            <path d="M22 20V8h-4l-6-4-6 4H2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2"></path>
                            <path d="M6 17v.01"></path>
                            <path d="M6 13v.01"></path>
                            <path d="M18 17v.01"></path>
                            <path d="M18 13v.01"></path>
                            <path d="M14 22v-5a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v5"></path>
                        </svg>
                    </span>
                    <div
                        class="rounded-md border border-muted hover:border-primary cursor-pointer bg-surface-light/50 hover:bg-surface-light/70 hover:translate-y-[-3px] transition-all duration-300 px-6 py-4">
                        <div class="flex flex-wrap items-start justify-between gap-2">
                            <span class="text-primary font-medium">{{ edu.institution }}</span>
                            <span v-if="edu.date_range" class="text-muted text-sm whitespace-nowrap">{{ edu.date_range
                                }}</span>
                        </div>
                        <p v-if="edu.degree" class="text-white font-semibold mt-1">{{ edu.degree }}</p>

                        <hr class="my-4 border-primary">
                        <div v-if="edu.description"
                            class="rich-text text-muted text-sm mt-3 [&_ul]:list-disc [&_ul]:pl-5 [&_li]:mb-1"
                            v-html="edu.description" />
                    </div>
                </li>
                <li v-if="education.length === 0" class="pl-14 text-muted">
                    No education entries yet.
                </li>
            </ul>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue'

defineProps({
    experiences: { type: Array, default: () => [] },
    education: { type: Array, default: () => [] },
})

const activeTab = ref('experience')

function techList(techStack) {
    if (!techStack || typeof techStack !== 'string') return []
    return techStack.split(/[,;]/).map(s => s.trim()).filter(Boolean)
}
</script>
