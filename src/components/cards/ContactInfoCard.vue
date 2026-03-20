<script setup lang="ts">
import GlassCard from '@/components/ui/GlassCard.vue'

defineProps<{
  title: string
  value: string
  icon: string
}>()
</script>

<template>
  <GlassCard glow="fuchsia" hoverable>
    <div class="flex items-start gap-4">
      <div
        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border border-fuchsia-400/25 bg-fuchsia-400/10 text-xl"
      >
        {{ icon }}
      </div>

      <div>
        <p class="text-sm text-slate-400">{{ title }}</p>
        <p class="mt-1 font-semibold text-white">{{ value }}</p>
      </div>
    </div>
  </GlassCard>
</template>
