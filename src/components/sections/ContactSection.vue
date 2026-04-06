<script setup lang="ts">
const contactInfo = [
  {
    title: 'Teléfono',
    value: '+52 777 157 5437',
  },
  {
    title: 'Correo',
    value: 'atencion@abctravelling.com',
  },
  {
    title: 'Dirección',
    value: 'Subida al Club Hípico 1, Reforma\n62260 Cuernavaca, Mor.',
  },
  {
    title: 'Horario',
    value: 'Lunes a Viernes 9:00 a.m. - 18:00 p.m.',
  },
]

const starsLeft = [
  'left-[8px] bottom-[20px]',
  'left-[24px] bottom-[44px]',
  'left-[46px] bottom-[18px]',
  'left-[72px] bottom-[34px]',
]

const starsRight = [
  'right-[10px] top-[44px]',
  'right-[20px] top-[72px]',
  'right-[38px] top-[18px]',
]
</script>

<template>
  <section
    id="contacto"
    class="relative overflow-hidden border-y border-white/25 bg-[#020816] px-4 py-10 sm:px-6 lg:px-8"
  >
    <!-- fondo -->
    <div class="absolute inset-0 bg-[linear-gradient(180deg,#020816_0%,#010712_55%,#01040d_100%)]" />
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(20,80,180,0.18),transparent_38%)]" />

    <!-- estrellas decorativas -->
    <div
      v-for="(item, index) in starsLeft"
      :key="`left-${index}`"
      class="absolute h-[3px] w-[3px] rounded-full bg-[#167dff] shadow-[0_0_8px_rgba(22,125,255,1),0_0_18px_rgba(22,125,255,0.95)]"
      :class="item"
    />
    <div
      v-for="(item, index) in starsRight"
      :key="`right-${index}`"
      class="absolute h-[3px] w-[3px] rounded-full bg-[#167dff] shadow-[0_0_8px_rgba(22,125,255,1),0_0_18px_rgba(22,125,255,0.95)]"
      :class="item"
    />

    <div class="relative mx-auto max-w-[1120px]">
      <!-- título -->
      <div class="text-center">
        <h2
          class="inline-block text-[34px] font-black uppercase leading-none tracking-[-0.03em] text-transparent [-webkit-text-stroke:1.6px_#1f7bff] [text-shadow:0_0_8px_rgba(37,99,235,0.95),0_0_18px_rgba(37,99,235,0.8)] sm:text-[42px] md:text-[48px]"
        >
          CONTACTO
        </h2>
      </div>

      <!-- contenido -->
      <div class="mt-10 grid gap-6 lg:grid-cols-[260px_minmax(0,1fr)] lg:items-start">
        <!-- columna izquierda -->
        <div class="grid gap-2.5">
          <article
            v-for="item in contactInfo"
            :key="item.title"
            class="relative overflow-hidden rounded-[16px] border border-white/75 bg-[radial-gradient(circle_at_top,rgba(10,34,73,0.92),rgba(3,10,24,0.98)_60%,rgba(2,7,18,1)_100%)] px-4 py-3 shadow-[inset_0_0_26px_rgba(32,102,255,0.08)]"
          >
            <div
              class="pointer-events-none absolute right-[-8px] top-[-8px] h-10 w-10 rounded-full bg-[radial-gradient(circle,rgba(44,146,255,0.5),rgba(44,146,255,0)_70%)] blur-[6px]"
            />
            <div
              class="pointer-events-none absolute bottom-[-1px] left-1/2 h-[8px] w-[58%] -translate-x-1/2 rounded-full bg-[#2296ff] blur-[7px]"
            />

            <h3 class="text-[16px] font-extrabold leading-none text-white">
              {{ item.title }}
            </h3>

            <p class="mt-1.5 whitespace-pre-line text-[10px] leading-[1.35] text-white/80">
              {{ item.value }}
            </p>
          </article>
        </div>

        <!-- formulario -->
        <div
          class="relative overflow-hidden rounded-[18px] border border-white/70 bg-[radial-gradient(circle_at_top,rgba(10,34,73,0.6),rgba(3,10,24,0.96)_45%,rgba(2,7,18,1)_100%)] px-4 py-4 shadow-[inset_0_0_30px_rgba(32,102,255,0.06)] sm:px-5 sm:py-5 md:px-6 md:py-6"
        >
          <form class="grid gap-4">
            <div class="grid gap-4 md:grid-cols-2">
              <div>
                <label for="nombre" class="mb-1.5 block text-[12px] font-semibold text-white">
                  Nombre
                </label>
                <input
                  id="nombre"
                  type="text"
                  class="h-[32px] w-full rounded-[8px] border border-white/30 bg-[#06111f] px-3 text-[12px] text-white outline-none placeholder:text-white/25 focus:border-[#2a8cff] focus:ring-0"
                />
              </div>

              <div>
                <label for="correo" class="mb-1.5 block text-[12px] font-semibold text-white">
                  Correo
                </label>
                <input
                  id="correo"
                  type="email"
                  class="h-[32px] w-full rounded-[8px] border border-white/30 bg-[#06111f] px-3 text-[12px] text-white outline-none placeholder:text-white/25 focus:border-[#2a8cff] focus:ring-0"
                />
              </div>
            </div>

            <div>
              <label for="empresa" class="mb-1.5 block text-[12px] font-semibold text-white">
                Empresa
              </label>
              <input
                id="empresa"
                type="text"
                class="h-[32px] w-full rounded-[8px] border border-white/30 bg-[#06111f] px-3 text-[12px] text-white outline-none placeholder:text-white/25 focus:border-[#2a8cff] focus:ring-0"
              />
            </div>

            <div>
              <label for="mensaje" class="mb-1.5 block text-[12px] font-semibold text-white">
                Mensaje
              </label>
              <textarea
                id="mensaje"
                rows="5"
                class="min-h-[110px] w-full resize-none rounded-[8px] border border-white/30 bg-[#06111f] px-3 py-2 text-[12px] text-white outline-none placeholder:text-white/25 focus:border-[#2a8cff] focus:ring-0"
              />
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>
