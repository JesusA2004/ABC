<script setup lang="ts">
defineProps<{
  label: string
  value: string
}>()
</script>

<template>
  <div
    class="rounded-2xl border border-white/10 bg-white/5 p-4 backdrop-blur-md transition hover:border-cyan-400/30 hover:bg-cyan-400/5"
  >
    <p class="text-2xl font-black text-white">{{ value }}</p>
    <p class="mt-1 text-sm text-slate-400">{{ label }}</p>
  </div>
</template>
