<template>
  <div v-if="text" class="w-full relative mt-[112px] pb-14 md:pb-16 flex flex-col items-center lg:items-end justify-center">
    <!-- Main quote box -->
    <div class="relative border border-muted px-8 py-8 text-center">
      <!-- Large opening quote marks (top-left) -->

      <!-- Large closing quote marks (bottom-right) -->
      <!-- <span
        class="absolute bottom-2 right-4 md:bottom-3 md:right-6 text-[#6272a4] font-serif text-6xl md:text-7xl leading-none select-none"
        aria-hidden="true"
      >"</span> -->

      <div class="absolute -top-[20px] left-[11px] object-contain px-[0.5px] py-[0.5px] bg-surface">
        <img :src="quotesImageUrl" alt="Quote Marks" class="object-contain px-2 py-2">
      </div>

      <p class="text-[#f8f8f2] text-[24px] relative z-10 px-4">
        {{ text }}
      </p>
    </div>

    <!-- Attribution box (below and to the right) -->
    <div
      v-if="author"
      class="relative border border-muted px-4 py-4 max-w-auto border-t-0"
    >
    <div class="absolute -top-[20px] right-[16px] object-contain px-[0.5px] py-[0.5px] bg-surface">
        <img :src="quotesImageUrl" alt="Quote Marks" class="object-contain px-2 py-2">
      </div>
      <p class="text-[#f8f8f2] text-[24px] text-right">
        {{ author }}
      </p>
    </div>
  </div>
</template>

<script setup>
defineProps({
  text: { type: String, default: '' },
  author: { type: String, default: '' },
})

const quotesImageUrl = '/images/quote-marks.png'
</script>
