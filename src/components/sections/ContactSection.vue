<script setup lang="ts">
import GlassCard from '@/components/ui/GlassCard.vue'
import SectionTitle from '@/components/ui/SectionTitle.vue'
</script>

<template>
  <section id="contacto" class="px-4 py-12 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-7xl">
      <SectionTitle
        eyebrow="Contacto"
        title="Información clara, accesible y con una presentación visual moderna"
        description="La referencia usa un bloque informativo más visual que formulario. Por eso aquí dejamos un mapa ilustrativo y tarjetas de contacto alineadas al estilo general del sitio."
      />

      <div class="mt-8 grid gap-6 lg:grid-cols-[0.95fr_1.05fr]">
        <GlassCard glow="cyan" hoverable>
          <div
            class="flex min-h-[320px] items-end rounded-[1.5rem] border border-white/10 bg-[radial-gradient(circle_at_center,rgba(34,211,238,0.12),transparent_30%),linear-gradient(to_bottom_right,rgba(15,23,42,0.96),rgba(2,6,23,1))] p-6"
          >
            <div>
              <p class="text-xs tracking-[0.3em] text-cyan-300 uppercase">Ubicación</p>
              <h3 class="mt-3 text-3xl font-black text-white">Cuernavaca</h3>
              <p class="mt-3 max-w-sm text-sm leading-7 text-slate-400">
                Puedes sustituir este bloque por un mapa real, una imagen de oficina o una vista
                satelital para acercarte todavía más a la referencia.
              </p>
            </div>
          </div>
        </GlassCard>

        <div class="grid gap-4">
          <GlassCard glow="fuchsia" hoverable>
            <div class="flex items-start gap-4">
              <div
                class="flex h-12 w-12 items-center justify-center rounded-2xl border border-fuchsia-400/25 bg-fuchsia-400/10 text-xl"
              >
                📞
              </div>
              <div>
                <p class="text-sm text-slate-400">Teléfono</p>
                <p class="mt-1 font-semibold text-white">+52 777 000 0000</p>
              </div>
            </div>
          </GlassCard>

          <GlassCard glow="fuchsia" hoverable>
            <div class="flex items-start gap-4">
              <div
                class="flex h-12 w-12 items-center justify-center rounded-2xl border border-fuchsia-400/25 bg-fuchsia-400/10 text-xl"
              >
                ✉️
              </div>
              <div>
                <p class="text-sm text-slate-400">Correo</p>
                <p class="mt-1 font-semibold text-white">contacto@abctravelling.com</p>
              </div>
            </div>
          </GlassCard>

          <GlassCard glow="fuchsia" hoverable>
            <div class="flex items-start gap-4">
              <div
                class="flex h-12 w-12 items-center justify-center rounded-2xl border border-fuchsia-400/25 bg-fuchsia-400/10 text-xl"
              >
                📍
              </div>
              <div>
                <p class="text-sm text-slate-400">Dirección</p>
                <p class="mt-1 font-semibold text-white">
                  Cuernavaca, Morelos, México
                </p>
              </div>
            </div>
          </GlassCard>

          <GlassCard glow="fuchsia" hoverable>
            <div class="flex items-start gap-4">
              <div
                class="flex h-12 w-12 items-center justify-center rounded-2xl border border-fuchsia-400/25 bg-fuchsia-400/10 text-xl"
              >
                🕒
              </div>
              <div>
                <p class="text-sm text-slate-400">Horario</p>
                <p class="mt-1 font-semibold text-white">
                  Lunes a viernes · 9:00 a.m. a 6:00 p.m.
                </p>
              </div>
            </div>
          </GlassCard>
        </div>
      </div>
    </div>
  </section>
</template>
