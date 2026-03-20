<script setup lang="ts">
withDefaults(
  defineProps<{
    glow?: 'cyan' | 'fuchsia' | 'violet' | 'none'
    hoverable?: boolean
  }>(),
  {
    glow: 'none',
    hoverable: false,
  },
)

const glowClasses = {
  cyan: 'shadow-[0_0_45px_rgba(34,211,238,0.08)] border-cyan-400/20',
  fuchsia: 'shadow-[0_0_45px_rgba(217,70,239,0.08)] border-fuchsia-400/20',
  violet: 'shadow-[0_0_45px_rgba(139,92,246,0.08)] border-violet-400/20',
  none: 'shadow-none border-white/10',
}
</script>

<template>
  <div
    class="rounded-[2rem] border bg-slate-950/70 p-5 backdrop-blur-xl transition duration-300"
    :class="[
      glowClasses[glow],
      hoverable ? 'hover:-translate-y-1 hover:border-white/20 hover:bg-slate-900/80' : '',
    ]"
  >
    <slot />
  </div>
</template>
