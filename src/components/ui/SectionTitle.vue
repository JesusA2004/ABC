<script setup lang="ts">
    defineProps<{
        eyebrow: string
        title: string
        description?: string
    }>()
</script>

<template>
    <div class="max-w-3xl">
        <p class="text-xs font-semibold tracking-[0.35em] text-cyan-300 uppercase">
        {{ eyebrow }}
        </p>

        <h2 class="mt-3 text-2xl font-black leading-tight text-white sm:text-3xl lg:text-4xl">
        {{ title }}
        </h2>

        <p v-if="description" class="mt-4 text-sm leading-7 text-slate-400 sm:text-base">
        {{ description }}
        </p>
    </div>
</template>
