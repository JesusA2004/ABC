<script setup lang="ts">
    import SectionTitle from '@/components/ui/SectionTitle.vue'
    import GlassCard from '@/components/ui/GlassCard.vue'
</script>

<template>
    <section id="nosotros" class="px-4 py-12 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
        <SectionTitle
            eyebrow="¿Quiénes somos?"
            title="Una interfaz diseñada para comunicar valor desde el primer vistazo"
            description="Esta base visual está pensada para software, servicios B2B, plataformas digitales o páginas promocionales donde la presentación y la claridad importan tanto como la tecnología."
        />

        <div class="mt-8 grid gap-6 lg:grid-cols-[1fr_1fr]">
            <GlassCard glow="cyan" hoverable>
            <div class="space-y-4">
                <p class="text-sm leading-7 text-slate-300">
                Aquí puedes explicar quién es la empresa, qué problema resuelve y por qué su
                propuesta es diferente. La idea es que el diseño se sienta tecnológico, moderno y
                confiable.
                </p>

                <p class="text-sm leading-7 text-slate-400">
                Como estamos haciendo puro frontend, puedes usar esta sección para reforzar marca,
                credibilidad, diferenciadores y una explicación breve del modelo de negocio.
                </p>
            </div>
            </GlassCard>

            <GlassCard glow="fuchsia" hoverable>
            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                <p class="text-xs tracking-[0.25em] text-cyan-300 uppercase">Diseño</p>
                <p class="mt-2 text-lg font-bold text-white">Visual premium</p>
                <p class="mt-2 text-sm text-slate-400">
                    Gradientes, glow, paneles oscuros y composición moderna.
                </p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                <p class="text-xs tracking-[0.25em] text-fuchsia-300 uppercase">Código</p>
                <p class="mt-2 text-lg font-bold text-white">Escalable</p>
                <p class="mt-2 text-sm text-slate-400">
                    Componentes reutilizables y estructura limpia para crecer.
                </p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                <p class="text-xs tracking-[0.25em] text-violet-300 uppercase">UX</p>
                <p class="mt-2 text-lg font-bold text-white">Interactividad</p>
                <p class="mt-2 text-sm text-slate-400">
                    Estados visuales, hover, tabs, transiciones y navegación fluida.
                </p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                <p class="text-xs tracking-[0.25em] text-cyan-300 uppercase">Objetivo</p>
                <p class="mt-2 text-lg font-bold text-white">Conversión</p>
                <p class="mt-2 text-sm text-slate-400">
                    Secciones orientadas a presentar beneficios y generar acción.
                </p>
                </div>
            </div>
            </GlassCard>
        </div>
        </div>
    </section>
</template>
