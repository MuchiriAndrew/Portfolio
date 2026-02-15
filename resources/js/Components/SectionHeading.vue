<template>
  <div class="flex items-center justify-between gap-4 mb-6">


    <div class="flex items-center gap-4">
        <div class="flex items-center gap-2">
            <h2 class="text-[32px] font-medium text-primary">{{ hash }}</h2>
            <h2 class="text-[32px] font-medium text-white">{{ title }}</h2>
        </div>
        <hr class="border-primary w-[511px] ">
    </div>


    <a
      v-if="viewAllLink"
      :href="viewAllLink"
      class="text-[16px] text-white hover:text-primary whitespace-nowrap"
    >
      View all ~~>
    </a>

  </div>
</template>

<script setup>
defineProps({
  hash: { type: String, default: '#' },
  title: { type: String, required: true },
  viewAllLink: { type: String, default: null },
})
</script>
