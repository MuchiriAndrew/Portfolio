<template>
  <div
    :data-aos="attrs['data-aos'] || 'fade-up'"
    :data-aos-delay="attrs['data-aos-delay']"
    class=" border border-gray-600/50 bg-surface-light flex flex-col items-center justify-center p-6 aspect-square min-h-[120px] transition-colors hover:border-primary"
  >
    <div class="flex-1 flex items-center justify-center w-full mb-3">
      <img
        v-if="image"
        :src="image"
        :alt="name"
        class="w-auto max-h-18 object-contain"
      />
      <span
        v-else
        class="text-[32px] font-bold text-muted select-none"
        aria-hidden="true"
      >{{ name.charAt(0) }}</span>
    </div>
    <p class="text-white text-sm font-medium text-center">{{ name }}</p>
  </div>
</template>

<script setup>
import { useAttrs } from 'vue'

defineProps({
  name: { type: String, required: true },
  image: { type: String, default: null },
})

const attrs = useAttrs()
</script>
