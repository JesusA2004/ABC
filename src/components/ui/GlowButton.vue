<script setup lang="ts">
    const props = withDefaults(
        defineProps<{
            label: string
            variant?: 'primary' | 'secondary' | 'ghost'
            type?: 'button' | 'submit' | 'reset'
            disabled?: boolean
            fullWidth?: boolean
        }>(),
        {
            variant: 'primary',
            type: 'button',
            disabled: false,
            fullWidth: false,
        },
    )

    const variantClasses = {
        primary:
            'border-cyan-400/40 bg-[linear-gradient(to_right,rgba(34,211,238,0.18),rgba(217,70,239,0.18))] text-white shadow-[0_0_30px_rgba(34,211,238,0.16)] hover:border-cyan-300/60 hover:shadow-[0_0_40px_rgba(34,211,238,0.22)]',
        secondary:
            'border-white/15 bg-white/5 text-slate-100 hover:border-fuchsia-400/40 hover:bg-fuchsia-400/10 hover:text-white',
        ghost:
            'border-transparent bg-transparent text-slate-200 hover:border-white/10 hover:bg-white/5 hover:text-white',
    }
</script>

<template>
    <button :type="type" :disabled="disabled"
    class="inline-flex items-center justify-center rounded-full border px-5 py-3 text-sm font-semibold transition duration-300 disabled:cursor-not-allowed disabled:opacity-50"
    :class="[variantClasses[variant], fullWidth ? 'w-full' : 'w-auto']">
        {{ label }}
    </button>
</template>
