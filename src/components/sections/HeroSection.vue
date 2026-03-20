<script setup lang="ts">
    import { computed, ref } from 'vue'
    import GlowButton from '@/components/ui/GlowButton.vue'
    import GlowBadge from '@/components/ui/GlowBadge.vue'
    import AnimatedGridBackground from '@/components/ui/AnimatedGridBackground.vue'
    import StatCard from '@/components/cards/StatCard.vue'

    const activeTab = ref<'b2b' | 'api' | 'ventas'>('b2b')

    const heroContent = computed(() => {
    const content = {
        b2b: {
        title: 'IMPULSAMOS TU NEGOCIO, POTENCIAMOS TUS VENTAS',
        description:
            'Plataforma visual moderna para presentar servicios, beneficios, integraciones y contacto con una experiencia tecnológica de alto impacto.',
        },
        api: {
        title: 'API DE INTEGRACIÓN PARA PLATAFORMAS DE VIAJES',
        description:
            'Diseño frontend listo para mostrar módulos, conectividad, procesos y ventajas competitivas con una estética premium.',
        },
        ventas: {
        title: 'UNA EXPERIENCIA VISUAL HECHA PARA CONVERTIR',
        description:
            'Ideal para páginas de presentación, servicios digitales, software B2B, demos comerciales y landings con enfoque en conversión.',
        },
    }

    return content[activeTab.value]
    })

    const stats = [
        { label: 'Módulos visuales', value: '06+' },
        { label: 'Secciones clave', value: '05' },
        { label: 'Estilo premium', value: '100%' },
    ]
</script>

<template>
    <section id="inicio" class="relative overflow-hidden px-4
    pt-8 pb-12 sm:px-6 lg:px-8 lg:pt-10">
        <AnimatedGridBackground />

        <div class="mx-auto grid max-w-7xl gap-6 xl:grid-cols-[1.45fr_0.75fr]">
            <div class="relative overflow-hidden rounded-[2rem] border border-cyan-400/20
            bg-slate-950/70 shadow-[0_0_80px_rgba(34,211,238,0.10)] backdrop-blur-xl">
                <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(34,211,238,0.18),transparent_28%),radial-gradient(circle_at_top_right,rgba(217,70,239,0.15),transparent_24%),linear-gradient(to_bottom,rgba(15,23,42,0.82),rgba(2,6,23,0.96))]"
                />
                <div class="relative">
                <div
                    class="flex flex-col gap-4 border-b border-white/10 px-5 py-4 md:flex-row md:items-center md:justify-between md:px-8"
                >
                    <div class="flex items-center gap-3">
                    <div
                        class="flex h-11 w-11 items-center justify-center rounded-2xl border border-cyan-400/30 bg-cyan-400/10 text-cyan-300 shadow-[0_0_20px_rgba(34,211,238,0.25)]"
                    >
                        ✦
                    </div>
                    <div>
                        <p class="text-sm font-semibold tracking-[0.25em] text-cyan-300 uppercase">
                        ABC Travelling
                        </p>
                        <p class="text-xs text-slate-400">Interfaz frontend con Vue + Tailwind</p>
                    </div>
                    </div>

                    <div class="flex flex-wrap gap-2">
                    <button
                        type="button"
                        class="rounded-full border px-4 py-2 text-sm transition"
                        :class="
                        activeTab === 'b2b'
                            ? 'border-cyan-400/50 bg-cyan-400/10 text-cyan-200 shadow-[0_0_18px_rgba(34,211,238,0.22)]'
                            : 'border-white/10 text-slate-300 hover:border-cyan-400/30 hover:text-white'
                        "
                        @click="activeTab = 'b2b'"
                    >
                        B2B
                    </button>

                    <button
                        type="button"
                        class="rounded-full border px-4 py-2 text-sm transition"
                        :class="
                        activeTab === 'api'
                            ? 'border-fuchsia-400/50 bg-fuchsia-400/10 text-fuchsia-200 shadow-[0_0_18px_rgba(217,70,239,0.22)]'
                            : 'border-white/10 text-slate-300 hover:border-fuchsia-400/30 hover:text-white'
                        "
                        @click="activeTab = 'api'"
                    >
                        API
                    </button>

                    <button
                        type="button"
                        class="rounded-full border px-4 py-2 text-sm transition"
                        :class="
                        activeTab === 'ventas'
                            ? 'border-violet-400/50 bg-violet-400/10 text-violet-200 shadow-[0_0_18px_rgba(139,92,246,0.22)]'
                            : 'border-white/10 text-slate-300 hover:border-violet-400/30 hover:text-white'
                        "
                        @click="activeTab = 'ventas'"
                    >
                        Ventas
                    </button>
                    </div>
                </div>

                <div class="grid gap-8 px-5 py-8 md:px-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
                    <div class="space-y-6">
                    <GlowBadge text="Landing premium con componentes reutilizables" />

                    <div class="space-y-4">
                        <h1
                        class="max-w-3xl text-3xl font-black leading-tight text-white sm:text-4xl lg:text-5xl"
                        >
                        {{ heroContent.title }}
                        </h1>

                        <p class="max-w-2xl text-sm leading-7 text-slate-300 sm:text-base">
                        {{ heroContent.description }}
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <GlowButton label="¡Registrarme ahora!" />
                        <GlowButton label="Ver módulos" variant="secondary" />
                    </div>

                    <div class="grid gap-3 sm:grid-cols-3">
                        <StatCard
                        v-for="stat in stats"
                        :key="stat.label"
                        :label="stat.label"
                        :value="stat.value"
                        />
                    </div>
                    </div>

                    <div class="relative">
                    <div
                        class="absolute -top-6 -right-6 h-32 w-32 rounded-full bg-fuchsia-500/20 blur-3xl"
                    />
                    <div
                        class="absolute -bottom-6 -left-6 h-32 w-32 rounded-full bg-cyan-500/20 blur-3xl"
                    />

                    <div
                        class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-slate-900/80 p-4 shadow-[0_0_45px_rgba(14,165,233,0.12)]"
                    >
                        <div
                        class="mb-4 rounded-[1.5rem] border border-cyan-400/20 bg-[radial-gradient(circle_at_center,rgba(34,211,238,0.16),transparent_32%),radial-gradient(circle_at_60%_40%,rgba(217,70,239,0.12),transparent_25%),linear-gradient(to_bottom_right,rgba(15,23,42,0.95),rgba(2,6,23,1))] p-6"
                        >
                        <div
                            class="mx-auto flex h-56 w-56 items-center justify-center rounded-full border border-cyan-400/30 bg-cyan-400/5 shadow-[inset_0_0_50px_rgba(34,211,238,0.12),0_0_35px_rgba(34,211,238,0.12)]"
                        >
                            <div
                            class="flex h-40 w-40 animate-pulse items-center justify-center rounded-full border border-fuchsia-400/30 bg-fuchsia-400/5 text-center shadow-[0_0_30px_rgba(217,70,239,0.14)]"
                            >
                            <div>
                                <p class="text-xs tracking-[0.35em] text-cyan-300 uppercase">Vue UI</p>
                                <p class="mt-2 text-lg font-bold text-white">Dashboard Futurista</p>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="grid gap-3 sm:grid-cols-2">
                        <div
                            class="rounded-2xl border border-white/10 bg-white/5 p-4 transition hover:border-cyan-400/30 hover:bg-cyan-400/5"
                        >
                            <p class="text-xs tracking-[0.25em] text-cyan-300 uppercase">Frontend</p>
                            <p class="mt-2 text-sm text-slate-300">
                            Secciones visuales, cards, llamadas a la acción y layout escalable.
                            </p>
                        </div>

                        <div
                            class="rounded-2xl border border-white/10 bg-white/5 p-4 transition hover:border-fuchsia-400/30 hover:bg-fuchsia-400/5"
                        >
                            <p class="text-xs tracking-[0.25em] text-fuchsia-300 uppercase">UX</p>
                            <p class="mt-2 text-sm text-slate-300">
                            Estados, transiciones, interacción visual y diseño orientado a conversión.
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="border-t border-white/10 px-5 py-4 md:px-8">
                    <div class="flex flex-wrap items-center gap-3 text-xs text-slate-400 sm:text-sm">
                    <span class="rounded-full border border-white/10 px-3 py-1">Vue 3</span>
                    <span class="rounded-full border border-white/10 px-3 py-1">Tailwind CSS</span>
                    <span class="rounded-full border border-white/10 px-3 py-1">Componentes reutilizables</span>
                    <span class="rounded-full border border-white/10 px-3 py-1">Sin backend</span>
                    </div>
                </div>
                </div>
            </div>

            <aside class="space-y-6">
                <div
                class="overflow-hidden rounded-[2rem] border border-fuchsia-400/20 bg-slate-950/75 p-5 shadow-[0_0_60px_rgba(217,70,239,0.08)] backdrop-blur-xl"
                >
                <p class="text-xs font-semibold tracking-[0.3em] text-fuchsia-300 uppercase">
                    ¿Qué ofrecemos?
                </p>

                <div class="mt-4 grid gap-3 sm:grid-cols-2 xl:grid-cols-1">
                    <div
                    class="rounded-2xl border border-white/10 bg-white/5 p-4 transition hover:-translate-y-0.5 hover:border-cyan-400/30"
                    >
                    <p class="font-semibold text-white">Amplio inventario global</p>
                    <p class="mt-2 text-sm text-slate-400">
                        Presentación de catálogo, servicios y soluciones con aspecto premium.
                    </p>
                    </div>

                    <div
                    class="rounded-2xl border border-white/10 bg-white/5 p-4 transition hover:-translate-y-0.5 hover:border-cyan-400/30"
                    >
                    <p class="font-semibold text-white">Confirmación inmediata</p>
                    <p class="mt-2 text-sm text-slate-400">
                        Microinteracciones y estados visuales para mejorar percepción de rapidez.
                    </p>
                    </div>

                    <div
                    class="rounded-2xl border border-white/10 bg-white/5 p-4 transition hover:-translate-y-0.5 hover:border-cyan-400/30"
                    >
                    <p class="font-semibold text-white">Tarifas competitivas</p>
                    <p class="mt-2 text-sm text-slate-400">
                        Layout pensado para destacar propuestas de valor y beneficios.
                    </p>
                    </div>
                </div>
                </div>

                <div
                class="overflow-hidden rounded-[2rem] border border-cyan-400/20 bg-slate-950/75 p-5 shadow-[0_0_60px_rgba(34,211,238,0.08)] backdrop-blur-xl"
                >
                <p class="text-xs font-semibold tracking-[0.3em] text-cyan-300 uppercase">
                    API / Integraciones
                </p>
                <div
                    class="mt-4 rounded-[1.5rem] border border-white/10 bg-[linear-gradient(to_bottom_right,rgba(15,23,42,0.95),rgba(2,6,23,1))] p-4"
                >
                    <div class="space-y-3 font-mono text-xs text-slate-300">
                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2">
                        GET /reservations
                    </div>
                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2">
                        POST /availability/search
                    </div>
                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2">
                        PUT /pricing/update
                    </div>
                    </div>
                </div>
                </div>
            </aside>
        </div>
    </section>
</template>
