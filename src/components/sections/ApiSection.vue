<script setup lang="ts">
import SectionTitle from '@/components/ui/SectionTitle.vue'
import GlassCard from '@/components/ui/GlassCard.vue'
</script>

<template>
  <section id="api" class="px-4 py-12 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-7xl">
      <SectionTitle
        eyebrow="API de integración"
        title="Conectividad, procesos y arquitectura visual en una sola sección"
        description="Pensada para transmitir solidez técnica y mostrar cómo tu plataforma puede integrarse con procesos, servicios y disponibilidad en tiempo real."
      />

      <div class="mt-8 grid gap-6 lg:grid-cols-[0.9fr_1.1fr]">
        <GlassCard glow="fuchsia" hoverable>
          <div class="space-y-4">
            <div class="rounded-2xl border border-white/10 bg-white/5 p-4 font-mono text-sm">
              <p class="text-cyan-300">GET /reservations</p>
              <p class="mt-2 text-slate-400">Consulta disponibilidad y procesos operativos</p>
            </div>

            <div class="rounded-2xl border border-white/10 bg-white/5 p-4 font-mono text-sm">
              <p class="text-fuchsia-300">POST /availability/search</p>
              <p class="mt-2 text-slate-400">Búsqueda y procesamiento de resultados</p>
            </div>

            <div class="rounded-2xl border border-white/10 bg-white/5 p-4 font-mono text-sm">
              <p class="text-violet-300">PUT /pricing/update</p>
              <p class="mt-2 text-slate-400">Actualización y sincronización de información</p>
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
                <p class="mt-2 font-semibold text-white">Integración</p>
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
                Esta sección ayuda a comunicar capacidad técnica, procesos de conexión,
                interoperabilidad con terceros y una arquitectura preparada para operar con
                proveedores, inventarios o plataformas externas.
              </p>
            </div>
          </div>
        </GlassCard>
      </div>
    </div>
  </section>
</template>
