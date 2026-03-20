<script setup lang="ts">
import GlassCard from '@/components/ui/GlassCard.vue'

defineProps<{
  title: string
  description: string
  icon: string
}>()
</script>

<template>
  <GlassCard glow="cyan" hoverable>
    <div class="space-y-4">
      <div
        class="flex h-14 w-14 items-center justify-center rounded-2xl border border-cyan-400/25 bg-cyan-400/10 text-2xl shadow-[0_0_20px_rgba(34,211,238,0.15)]"
      >
        {{ icon }}
      </div>

      <div>
        <h3 class="text-lg font-bold text-white">{{ title }}</h3>
        <p class="mt-2 text-sm leading-7 text-slate-400">
          {{ description }}
        </p>
      </div>
    </div>
  </GlassCard>
</template>
