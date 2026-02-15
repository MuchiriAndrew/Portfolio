<template>
  <header
    class="fixed top-0 left-0 right-0 z-40 backdrop-blur transition-transform duration-300 ease-out"
    :class="{ '-translate-y-full': !headerVisible }"
  >
      <div class="max-w-6xl mx-auto px-4 sm:px-6 flex items-center justify-between h-14 md:h-16">

        <Link href="/" class="flex items-center gap-2 text-white font-semibold">
          <!-- <span class="w-8 h-8 border border-gray-500 rounded flex items-center justify-center text-xs">E</span> -->
          {{ siteName }}
        </Link>

        <!-- Desktop nav -->
        <nav class="hidden md:flex items-center gap-[32px]">
          <Link
            v-for="item in navItems"
            :key="item.name"
            :href="item.href"
            :class="[isActive(item) ? 'text-primary' : 'text-muted hover:text-white']"
            class="text-[16px] font-medium transition-colors"
          >
            {{ item.label }}
          </Link>

        </nav>

        <!-- Mobile menu button -->
        <button
          type="button"
          class="md:hidden p-2 text-muted hover:text-white"
          aria-label="Open menu"
          @click="mobileMenuOpen = true"
        >
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </header>

    <!-- Mobile offcanvas menu -->
    <Teleport to="body">
      <Transition name="slide">
        <div
          v-if="mobileMenuOpen"
          class="fixed inset-0 z-50 lg:hidden"
          aria-modal="true"
          role="dialog"
        >
          <div class="fixed inset-0 bg-black/60" @click="mobileMenuOpen = false" />
          <div class="fixed top-0 right-0 bottom-0 w-full max-w-sm bg-surface shadow-xl flex flex-col">
            <div class="flex items-center justify-between h-14 px-4 border-b border-gray-700">
              <Link href="/" class="font-semibold text-white" @click="mobileMenuOpen = false">
                {{ siteName }}
              </Link>
              <button
                type="button"
                class="p-2 text-muted hover:text-white"
                aria-label="Close menu"
                @click="mobileMenuOpen = false"
              >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <nav class="flex flex-col gap-1 p-4">
              <Link
                v-for="item in navItems"
                :key="item.name"
                :href="item.href"
                :class="[isActive(item) ? 'text-primary' : 'text-muted']"
                class="py-3 px-2 text-lg font-medium"
                @click="mobileMenuOpen = false"
              >
                {{ item.label }}
              </Link>
              <div class="py-3 px-2 text-muted flex items-center gap-2">
                <span>EN</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </div>
            </nav>
            <div class="mt-auto p-4 border-t border-gray-700 flex gap-4">
              <a
                v-for="link in socialLinks"
                :key="link.id"
                :href="link.url || '#'"
                target="_blank"
                rel="noopener noreferrer"
                class="text-muted hover:text-primary"
                @click="mobileMenuOpen = false"
              >
                <SocialIcon :platform="link.platform" class="!w-6 !h-6" />
              </a>
            </div>
          </div>
        </div>
      </Transition>
    </Teleport>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3'
import { ref, computed, onMounted, onUnmounted } from 'vue'
import SocialIcon from '@/Components/SocialIcon.vue'

const page = usePage()
const mobileMenuOpen = ref(false)

const scrollY = ref(0)
const lastScrollY = ref(0)
const headerVisible = ref(true)

const TOP_THRESHOLD = 80

function onScroll() {
  const y = window.scrollY ?? window.pageYOffset
  const last = lastScrollY.value
  lastScrollY.value = scrollY.value
  scrollY.value = y
  if (y <= TOP_THRESHOLD) {
    headerVisible.value = true
  } else if (y < last) {
    headerVisible.value = true
  } else if (y > last) {
    headerVisible.value = false
  }
}

onMounted(() => {
  scrollY.value = window.scrollY ?? window.pageYOffset
  lastScrollY.value = scrollY.value
  headerVisible.value = scrollY.value <= TOP_THRESHOLD
  window.addEventListener('scroll', onScroll, { passive: true })
})

onUnmounted(() => {
  window.removeEventListener('scroll', onScroll)
})

const siteName = computed(() => page.props.siteName || 'Portfolio')
const socialLinks = computed(() => page.props.socialLinks || [])

const navItems = [
  { name: 'home', href: '/', label: '#home' },
  { name: 'works', href: '/#projects', label: '#works' },
  { name: 'about', href: '/about', label: '#about-me' },
  { name: 'contacts', href: '/contact', label: '#contacts' },
]

function isActive(item) {
  if (item.name === 'home') return page.url === '/' || page.url === ''
  if (item.name === 'about') return page.url.startsWith('/about')
  if (item.name === 'contacts') return page.url.startsWith('/contact')
  return false
}
</script>

<style scoped>
.slide-enter-active,
.slide-leave-active {
  transition: opacity 0.25s ease;
}
.slide-enter-active .fixed.max-w-sm,
.slide-leave-active .fixed.max-w-sm {
  transition: transform 0.25s ease;
}
.slide-enter-from,
.slide-leave-to {
  opacity: 0;
}
.slide-enter-from .fixed.max-w-sm,
.slide-leave-to .fixed.max-w-sm {
  transform: translateX(100%);
}
</style>
