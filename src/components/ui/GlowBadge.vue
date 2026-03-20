<script setup lang="ts">
defineProps<{
  text: string
}>()
</script>

<template>
  <div
    class="inline-flex items-center gap-2 rounded-full border border-cyan-400/25 bg-cyan-400/10 px-4 py-2 text-xs font-semibold tracking-[0.2em] text-cyan-200 uppercase shadow-[0_0_24px_rgba(34,211,238,0.12)]"
  >
    <span class="h-2 w-2 rounded-full bg-cyan-300 shadow-[0_0_14px_rgba(34,211,238,0.7)]" />
    <span>{{ text }}</span>
  </div>
</template>
