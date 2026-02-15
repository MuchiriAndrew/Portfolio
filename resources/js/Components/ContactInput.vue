<template>
  <div>
    <div
      class="relative border px-4 pt-3 pb-3 transition-colors"
      :class="[
        error ? 'border-red-500' : 'border-gray-500 focus-within:border-primary focus-within:ring-1 focus-within:ring-primary',
      ]"
    >
      <span
        class="pointer-events-none absolute left-4 transition-all duration-200 origin-left"
        :class="isActive
          ? 'top-0 -translate-y-1/2 text-xs text-primary bg-surface px-1'
          : 'top-1/2 -translate-y-1/2 text-base text-muted'"
      >
        {{ placeholder }}
      </span>
      <input
        :value="modelValue"
        :type="type"
        :name="name"
        :autocomplete="autocomplete"
        :aria-label="placeholder || undefined"
        class="block w-full bg-transparent text-white focus:outline-none pt-0.5"
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
  modelValue: { type: [String, Number], default: '' },
  type: { type: String, default: 'text' },
  name: { type: String, default: undefined },
  placeholder: { type: String, default: '' },
  autocomplete: { type: String, default: undefined },
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
