<script setup lang="ts">
    import SectionTitle from '@/components/ui/SectionTitle.vue'
    import GlassCard from '@/components/ui/GlassCard.vue'
</script>

<template>
    <section id="api" class="px-4 py-12 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
        <SectionTitle
            eyebrow="API de integración"
            title="Un bloque perfecto para mostrar conectividad, procesos o arquitectura visual"
            description="Aunque tu proyecto sea solo frontend, esta sección funciona muy bien para transmitir capacidad técnica, integraciones, conectividad con terceros o procesos empresariales."
        />

        <div class="mt-8 grid gap-6 lg:grid-cols-[0.9fr_1.1fr]">
            <GlassCard glow="fuchsia" hoverable>
            <div class="space-y-4">
                <div class="rounded-2xl border border-white/10 bg-white/5 p-4 font-mono text-sm">
                <p class="text-cyan-300">GET /api/inventory</p>
                <p class="mt-2 text-slate-400">Consulta de catálogo o disponibilidad</p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/5 p-4 font-mono text-sm">
                <p class="text-fuchsia-300">POST /api/bookings</p>
                <p class="mt-2 text-slate-400">Creación de procesos o reservas</p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/5 p-4 font-mono text-sm">
                <p class="text-violet-300">PUT /api/pricing</p>
                <p class="mt-2 text-slate-400">Actualización y sincronización de datos</p>
                </div>
            </div>
            </GlassCard>

            <GlassCard glow="cyan" hoverable>
            <div class="space-y-5">
                <div class="grid gap-4 sm:grid-cols-3">
                <div class="rounded-2xl border border-white/10 bg-white/5 p-4 text-center">
                    <p class="text-xs tracking-[0.25em] text-cyan-300 uppercase">Entrada</p>
                    <p class="mt-2 font-semibold text-white">Solicitud</p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/5 p-4 text-center">
                    <p class="text-xs tracking-[0.25em] text-fuchsia-300 uppercase">Proceso</p>
                    <p class="mt-2 font-semibold text-white">Transformación</p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-white/5 p-4 text-center">
                    <p class="text-xs tracking-[0.25em] text-violet-300 uppercase">Salida</p>
                    <p class="mt-2 font-semibold text-white">Respuesta</p>
                </div>
                </div>

                <div
                class="rounded-[1.5rem] border border-white/10 bg-[linear-gradient(to_right,rgba(34,211,238,0.07),rgba(217,70,239,0.07),rgba(139,92,246,0.07))] p-5"
                >
                <p class="text-sm leading-7 text-slate-300">
                    Esta sección también puede usarse para explicar flujos internos, integraciones con
                    proveedores, automatizaciones, paneles administrativos o consumo de servicios
                    externos, todo con una estética técnica y visualmente atractiva.
                </p>
                </div>
            </div>
            </GlassCard>
        </div>
        </div>
    </section>
</template>
