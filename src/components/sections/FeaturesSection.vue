<script setup lang="ts">
const features = [
  {
    title: 'Amplio inventario\nglobal',
    description:
      'Más de 2 millones de hoteles en más de 32,000 destinos, conectados a múltiples proveedores internacionales.',
    icon: 'globe',
  },
  {
    title: 'Confirmación\nInmediata',
    description:
      'Realiza reservas con confirmación automática para brindar mayor seguridad a tus clientes.',
    icon: 'user-check',
  },
  {
    title: 'Plataforma fácil\nde usar',
    description:
      'Diseñada específicamente para agencias de viajes, con una interfaz clara y eficiente.',
    icon: 'hand',
  },
  {
    title: 'Tarifas\ncompetitivas',
    description:
      'Acceso a tarifas negociadas y consolidadas para maximizar la rentabilidad de tu agencia.',
    icon: 'price',
  },
  {
    title: 'Disponibilidad en\ntiempo real',
    description:
      'Consulta tarifas y disponibilidad actualizadas directamente desde nuestra plataforma.',
    icon: 'clock-check',
  },
]

const starsLeft = [
  'left-[18px] top-[34px]',
  'left-[28px] top-[58px]',
  'left-[42px] top-[22px]',
  'left-[54px] top-[78px]',
  'left-[66px] top-[46px]',
  'left-[74px] top-[96px]',
  'left-[86px] top-[28px]',
  'left-[96px] top-[66px]',
  'left-[112px] top-[42px]',
]

const starsRight = [
  'right-[32px] top-[88px]',
  'right-[22px] top-[128px]',
  'right-[48px] top-[164px]',
  'right-[64px] top-[212px]',
  'right-[18px] top-[246px]',
  'right-[42px] top-[286px]',
  'right-[70px] top-[318px]',
  'right-[34px] top-[352px]',
  'right-[82px] top-[388px]',
  'right-[50px] top-[430px]',
]
</script>

<template>
  <section
    id="servicios"
    class="relative overflow-hidden border-y border-white/20 bg-[#020816] px-4 py-10 sm:px-6 lg:px-8"
  >
    <!-- fondo -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(8,38,92,0.35),transparent_42%)]" />
    <div class="absolute inset-0 bg-[linear-gradient(180deg,#020816_0%,#010611_45%,#01040c_100%)]" />

    <!-- línea superior/inferior -->
    <div class="absolute inset-x-0 top-0 h-px bg-white/25" />
    <div class="absolute inset-x-0 bottom-0 h-px bg-white/25" />

    <!-- destellos laterales -->
    <div
      v-for="(item, index) in starsLeft"
      :key="`left-${index}`"
      class="absolute h-[3px] w-[3px] rounded-full bg-[#1f7bff] shadow-[0_0_8px_rgba(37,99,235,1),0_0_18px_rgba(37,99,235,0.95)]"
      :class="item"
    />
    <div
      v-for="(item, index) in starsRight"
      :key="`right-${index}`"
      class="absolute h-[3px] w-[3px] rounded-full bg-[#1f7bff] shadow-[0_0_8px_rgba(37,99,235,1),0_0_18px_rgba(37,99,235,0.95)]"
      :class="item"
    />

    <div class="relative mx-auto max-w-[980px]">
      <!-- título -->
      <div class="text-center">
        <h2
          class="inline-block text-[30px] font-black uppercase leading-none tracking-[-0.02em] text-transparent [-webkit-text-stroke:1.6px_#1f7bff] [text-shadow:0_0_8px_rgba(37,99,235,0.95),0_0_18px_rgba(37,99,235,0.85)] sm:text-[38px]"
        >
          ¿QUE OFRECEMOS?
        </h2>
      </div>

      <!-- cards -->
      <div class="mx-auto mt-10 grid max-w-[860px] grid-cols-1 justify-items-center gap-x-8 gap-y-7 sm:grid-cols-2 lg:grid-cols-3">
        <article
          v-for="(item, index) in features"
          :key="item.title"
          class="group relative flex min-h-[262px] w-full max-w-[210px] flex-col items-center rounded-[22px] border border-white/70 bg-[radial-gradient(circle_at_top,rgba(10,34,73,0.95),rgba(3,11,28,0.98)_55%,rgba(2,7,18,1)_100%)] px-5 pt-7 pb-6 text-center shadow-[inset_0_0_30px_rgba(32,102,255,0.08)]"
          :class="index === 3 ? 'sm:col-start-1 lg:col-start-auto' : ''"
        >
          <!-- brillo inferior -->
          <div
            class="pointer-events-none absolute bottom-[-1px] left-1/2 h-[10px] w-[62%] -translate-x-1/2 rounded-full bg-[#2296ff] blur-[7px]"
          />
          <div
            class="pointer-events-none absolute inset-x-8 bottom-0 h-px bg-[linear-gradient(90deg,rgba(34,150,255,0),rgba(34,150,255,0.95),rgba(34,150,255,0))]"
          />

          <!-- icono -->
          <div class="mb-5 flex h-[62px] items-center justify-center text-[#0d63ff]">
            <!-- globe -->
            <svg
              v-if="item.icon === 'globe'"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              class="h-[52px] w-[52px] drop-shadow-[0_0_10px_rgba(13,99,255,0.85)]"
            >
              <circle cx="12" cy="12" r="9" />
              <path d="M3 12h18" />
              <path d="M12 3a15 15 0 0 1 0 18" />
              <path d="M12 3a15 15 0 0 0 0 18" />
              <path d="M5.5 7.5c2 .8 4.2 1.2 6.5 1.2s4.5-.4 6.5-1.2" />
              <path d="M5.5 16.5c2-.8 4.2-1.2 6.5-1.2s4.5.4 6.5 1.2" />
            </svg>

            <!-- user-check -->
            <svg
              v-else-if="item.icon === 'user-check'"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              class="h-[52px] w-[52px] drop-shadow-[0_0_10px_rgba(13,99,255,0.85)]"
            >
              <circle cx="10" cy="7" r="3.5" />
              <path d="M4.5 19c0-3.2 2.9-5.5 5.5-5.5S15.5 15.8 15.5 19" />
              <path d="m15.5 11.5 2 2 4-4" />
            </svg>

            <!-- hand -->
            <svg
              v-else-if="item.icon === 'hand'"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              class="h-[52px] w-[52px] drop-shadow-[0_0_10px_rgba(13,99,255,0.85)]"
            >
              <path d="M8 11V7a1.5 1.5 0 1 1 3 0v4" />
              <path d="M11 11V5.8a1.5 1.5 0 1 1 3 0V11" />
              <path d="M14 11V7.2a1.5 1.5 0 1 1 3 0V13" />
              <path d="M8 11l-1.1-1.1a1.5 1.5 0 1 0-2.1 2.1L8 15.2V18a3 3 0 0 0 3 3h2.2a4.8 4.8 0 0 0 4.1-2.3L19 16" />
              <path d="M18.8 5.5h.01" />
              <path d="M21 7.5h.01" />
              <path d="M20 10.5h.01" />
            </svg>

            <!-- price -->
            <svg
              v-else-if="item.icon === 'price'"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              class="h-[52px] w-[52px] drop-shadow-[0_0_10px_rgba(13,99,255,0.85)]"
            >
              <rect x="5" y="4" width="9" height="14" rx="1.5" />
              <path d="M8 8h3" />
              <path d="M8 11h2" />
              <path d="M8 14h1.5" />
              <circle cx="17.5" cy="15.5" r="4.5" />
              <path d="M17.5 13.2v4.6" />
              <path d="M16.1 14.4c.3-.7.9-1.2 1.7-1.2.8 0 1.5.4 1.7 1.1.2.7-.2 1.3-.9 1.6l-1.6.6c-.8.3-1.2 1-.9 1.7.2.6.8 1 1.5 1 .8 0 1.4-.4 1.8-1.1" />
              <path d="M5 6 3.7 4.7" />
              <path d="M10 6 8.7 4.7" />
            </svg>

            <!-- clock-check -->
            <svg
              v-else
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              class="h-[52px] w-[52px] drop-shadow-[0_0_10px_rgba(13,99,255,0.85)]"
            >
              <circle cx="11" cy="12" r="8" />
              <path d="M11 8v4l2.8 1.8" />
              <path d="m17 7 1.5 1.5 3-3" />
              <path d="M19.5 12.5a8.5 8.5 0 0 1-1.2 4.3" />
            </svg>
          </div>

          <h3
            class="whitespace-pre-line text-[16px] font-extrabold leading-[1.1] text-white"
          >
            {{ item.title }}
          </h3>

          <p class="mt-4 text-[10.5px] leading-[1.45] text-white/90">
            {{ item.description }}
          </p>
        </article>
      </div>

      <!-- bloque inferior -->
      <div class="mx-auto mt-14 max-w-[760px] text-center">
        <h3
          class="text-[34px] font-black leading-[1.02] tracking-[-0.03em] text-white sm:text-[44px]"
        >
          Empieza hoy a vender
          <br />
          hoteles en todo el mundo.
        </h3>

        <p class="mx-auto mt-4 max-w-[650px] text-[11.5px] leading-[1.5] text-white/80 sm:text-[12px]">
          Únete a ABC Travelling y ofrece a tus clientes miles de opciones de alojamiento con
          confirmación inmediata. Nuestra plataforma ofrece hoteles en destinos líderes del turismo
          internacional.
        </p>
      </div>
    </div>
  </section>
</template>
