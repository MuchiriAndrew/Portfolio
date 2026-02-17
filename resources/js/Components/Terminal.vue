<template>
  <div class="terminal-container" data-aos="fade-up" data-aos-delay="100">
    <!-- Terminal header -->
    <div class="terminal-header flex items-center gap-2 px-4 py-3 bg-[#2d2d2d] border-b border-gray-700">
      <div class="flex gap-2">
        <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
        <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
        <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
      </div>
      <span class="text-gray-400 text-sm ml-4">{{ title }}</span>
    </div>

    <!-- Terminal body -->
    <div class="terminal-body bg-[#1e1e1e] p-6 font-mono text-sm overflow-hidden min-h-[280px]">
      <div class="flex items-start gap-2">
        <span class="text-green-400 select-none">$</span>
        <div class="flex-1">
          <pre class="text-white whitespace-pre-wrap" v-html="highlightedCode"></pre>
          <span v-if="isTyping" class="cursor animate-pulse">|</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'

const props = defineProps({
  code: { 
    type: String, 
    default: `const engineer = {
  name: "Andrew Muchiri",
  role: "Full-Stack Dev & DevOps",
  builds: "Scalable web systems"
}` 
  },
  title: { type: String, default: 'terminal' },
  typingSpeed: { type: Number, default: 50 }, // milliseconds per character
  startDelay: { type: Number, default: 500 }, // delay before typing starts
})

const displayedCode = ref('')
const isTyping = ref(false)
let typingTimeout = null

// Simple syntax highlighting for JavaScript
const highlightedCode = computed(() => {
  let code = displayedCode.value
  if (!code) return ''
  
  // Store strings temporarily to avoid highlighting keywords inside them
  const strings = []
  code = code.replace(/(["'`])(?:(?=(\\?))\2.)*?\1/g, (match) => {
    strings.push(match)
    return `__STRING_${strings.length - 1}__`
  })
  
  // Highlight keywords (const, let, var, function, etc.)
  code = code.replace(/\b(const|let|var|function|return|if|else|for|while|class|new|this|import|export|from|default)\b/g, 
    '<span class="syntax-keyword">$1</span>')
  
  // Highlight object keys before colons (but not inside our placeholder strings)
  code = code.replace(/([a-zA-Z_$][a-zA-Z0-9_$]*)(\s*)(?=:)/g, 
    '<span class="syntax-property">$1</span>$2')
  
  // Highlight comments
  code = code.replace(/(\/\/.*$)/gm, 
    '<span class="syntax-comment">$1</span>')
  
  // Restore strings with highlighting
  code = code.replace(/__STRING_(\d+)__/g, (match, index) => {
    return `<span class="syntax-string">${strings[parseInt(index)]}</span>`
  })
  
  return code
})

const typeCode = () => {
  const codeToType = props.code || ''
  let currentIndex = 0
  
  // Start typing after delay
  typingTimeout = setTimeout(() => {
    isTyping.value = true
    
    const type = () => {
      if (currentIndex < codeToType.length) {
        displayedCode.value = codeToType.substring(0, currentIndex + 1)
        currentIndex++
        typingTimeout = setTimeout(type, props.typingSpeed)
      } else {
        isTyping.value = false
      }
    }
    
    type()
  }, props.startDelay)
}

onMounted(() => {
  typeCode()
})

onUnmounted(() => {
  if (typingTimeout) {
    clearTimeout(typingTimeout)
  }
})
</script>

<style scoped>
.terminal-container {
  border: 1px solid #3d3d3d;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
  max-width: 600px;
  width: 100%;
}

.terminal-body {
  line-height: 1.6;
}

.terminal-body pre {
  margin: 0;
  padding: 0;
  font-family: 'Fira Code', 'Courier New', monospace;
}

/* Syntax highlighting colors */
.terminal-body :deep(.syntax-keyword) {
  color: #C586C0;
}

.terminal-body :deep(.syntax-string) {
  color: #CE9178;
}

.terminal-body :deep(.syntax-number) {
  color: #B5CEA8;
}

.terminal-body :deep(.syntax-property) {
  color: #9CDCFE;
}

.terminal-body :deep(.syntax-comment) {
  color: #6A9955;
}

.cursor {
  color: #C778DD;
  font-weight: bold;
}

@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0; }
}

.animate-pulse {
  animation: pulse 1s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}
</style>
