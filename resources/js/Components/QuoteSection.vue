<template>
  <div
    v-if="quotes.length > 0"
    class="w-full relative mt-[112px] pb-14 md:pb-16 flex flex-col items-center lg:items-end justify-center"
  >
    <!-- Main quote box -->
    <div class="relative border border-muted px-8 py-8 text-center min-h-[120px] xl:min-w-[750px] flex flex-col justify-center">
      <div class="absolute -top-[20px] left-[11px] object-contain px-[0.5px] py-[0.5px] bg-surface">
        <img :src="quotesImageUrl" alt="Quote Marks" class="object-contain px-2 py-2">
      </div>

      <Transition name="quote-fade" mode="out-in">
        <div
          :key="currentQuote.id"
          class="rich-text rich-text--light text-[24px] relative z-10 px-4 [&_p]:mb-0 [&_p:last-child]:mb-0"
          v-html="currentQuote.text"
        />
      </Transition>
    </div>

    <!-- Attribution box (below and to the right) -->
    <div
      v-if="currentQuote.author"
      class="relative border border-muted px-4 py-4 max-w-auto border-t-0"
    >
      <div class="absolute -top-[20px] right-[16px] object-contain px-[0.5px] py-[0.5px] bg-surface rotate-180">
        <img :src="quotesImageUrl" alt="Quote Marks" class="object-contain px-2 py-2">
      </div>
      <p class="text-[#f8f8f2] text-[24px] text-right">
        {{ currentQuote.author }}
      </p>
    </div>

    <!-- Dots indicator when multiple quotes -->
    <div
      v-if="quotes.length > 1"
      class="flex gap-2 mt-4"
      aria-hidden="true"
    >
      <button
        v-for="(q, i) in quotes"
        :key="q.id"
        type="button"
        class="w-2 h-2 rounded-full transition-colors cursor-pointer"
        :class="i === currentIndex ? 'bg-primary' : 'bg-gray-500'"
        :aria-label="`Quote ${i + 1}`"
        @click="currentIndex = i; resetTimer()"
      />
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted, watch } from 'vue'

const props = defineProps({
  quotes: { type: Array, default: () => [] },
})

const ROTATE_INTERVAL_MS = 10000
let timerId = null

const currentIndex = ref(0)
const currentQuote = computed(() => {
  if (props.quotes.length === 0) return { id: null, text: '', author: '' }
  return props.quotes[currentIndex.value] ?? props.quotes[0]
})

function goNext() {
  if (props.quotes.length <= 1) return
  currentIndex.value = (currentIndex.value + 1) % props.quotes.length
}

function resetTimer() {
  if (timerId) clearInterval(timerId)
  timerId = setInterval(goNext, ROTATE_INTERVAL_MS)
}

onMounted(() => {
  if (props.quotes.length > 1) {
    timerId = setInterval(goNext, ROTATE_INTERVAL_MS)
  }
})

onUnmounted(() => {
  if (timerId) clearInterval(timerId)
})

watch(() => props.quotes.length, (len) => {
  if (timerId) clearInterval(timerId)
  timerId = null
  if (len > 1) timerId = setInterval(goNext, ROTATE_INTERVAL_MS)
})

const quotesImageUrl = '/images/quote-marks.png'
</script>

<style scoped>
.quote-fade-enter-active,
.quote-fade-leave-active {
  transition: opacity 0.3s ease;
}
.quote-fade-enter-from,
.quote-fade-leave-to {
  opacity: 0;
}
</style>
