<template>
  <form @submit.prevent="submit" class="max-w-2xl">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
      <ContactInput
        v-model="form.name"
        type="text"
        name="name"
        placeholder="Name"
        autocomplete="name"
        :error="errors.name"
      />
      <ContactInput
        v-model="form.email"
        type="email"
        name="email"
        placeholder="Email"
        autocomplete="email"
        :error="errors.email"
      />
    </div>

    <div class="mb-4">
      <ContactInput
        v-model="form.title"
        type="text"
        name="title"
        placeholder="Title"
        :error="errors.title"
      />
    </div>

    <div class="mb-6">
      <ContactTextarea
        v-model="form.message"
        name="message"
        placeholder="Message"
        :rows="5"
        :error="errors.message"
      />
    </div>

    <p v-if="success" class="mb-4 text-sm text-green-400">Message sent. I'll get back to you soon.</p>
    <p v-if="genericError" class="mb-4 text-sm text-red-400">{{ genericError }}</p>

    <div class="flex items-center w-full" :class="buttonPosition === 'center' ? 'justify-center' : buttonPosition === 'end' ? 'justify-end' : 'justify-start'">
        <button
          type="submit"
          :disabled="sending"
          class="border-2 border-primary bg-transparent px-6 py-3 text-white font-medium transition-colors hover:bg-primary cursor-pointer disabled:opacity-50 disabled:cursor-not-allowed"
        >
          {{ sending ? 'Sending…' : 'Send' }}
        </button>
    </div>

  </form>
</template>

<script setup>
import { router, usePage } from '@inertiajs/vue3'
import { computed, reactive, ref, watch } from 'vue'
import ContactInput from '@/Components/ContactInput.vue'
import ContactTextarea from '@/Components/ContactTextarea.vue'

const page = usePage()
const sending = ref(false)

defineProps({
  buttonPosition: { type: String, default: 'start' },
})

const form = reactive({
  name: '',
  email: '',
  title: '',
  message: '',
})

const errors = computed(() => page.props.errors || {})
const success = computed(() => page.props.flash?.contactSuccess === true)
const genericError = computed(() => errors.value.email && errors.value.email.includes('could not send') ? errors.value.email : null)

watch(success, (isSuccess) => {
  if (isSuccess) {
    form.name = ''
    form.email = ''
    form.title = ''
    form.message = ''
  }
})

function submit() {
  sending.value = true
  router.post('/contact', form, {
    preserveScroll: true,
    onFinish: () => { sending.value = false },
  })
}
</script>
