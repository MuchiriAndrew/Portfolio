<template>
  <div>
    <div
      class="relative border  px-4 pt-3 pb-3 transition-colors"
      :class="[
        error ? 'border-red-500' : 'border-gray-500 focus-within:border-primary focus-within:ring-1 focus-within:ring-primary',
      ]"
    >
      <span
        class="pointer-events-none absolute left-4 transition-all duration-200 origin-left"
        :class="isActive
          ? 'top-0 -translate-y-1/2 text-xs text-primary bg-surface px-1'
          : 'top-3 text-base text-muted'"
      >
        {{ placeholder }}
      </span>
      <textarea
        :value="modelValue"
        :name="name"
        :rows="rows"
        :aria-label="placeholder || undefined"
        class="block w-full bg-transparent text-white placeholder-muted focus:outline-none resize-y min-h-[120px] pt-0.5"
        :class="isActive ? 'placeholder:opacity-0' : ''"

        v-bind="$attrs"
        @input="$emit('update:modelValue', ($event.target || $event).value)"
        @focus="focused = true"
        @blur="focused = false"
      />
    </div>
    <p v-if="error" class="mt-1 text-sm text-red-400">{{ error }}</p>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'

defineOptions({ inheritAttrs: false })
const props = defineProps({
  modelValue: { type: String, default: '' },
  name: { type: String, default: undefined },
  placeholder: { type: String, default: '' },
  rows: { type: [String, Number], default: 5 },
  error: { type: String, default: null },
})
defineEmits(['update:modelValue'])

const focused = ref(false)
const hasValue = computed(() => {
  const v = props.modelValue
  if (v == null) return false
  return String(v).trim() !== ''
})
const isActive = computed(() => focused.value || hasValue.value)
</script>
