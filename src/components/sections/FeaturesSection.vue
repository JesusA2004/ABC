<script setup lang="ts">
import ofrecemos from '@/assets/ofrecemos.png'

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

const leftStars = [
  'left-[14px] top-[24px]',
  'left-[24px] top-[46px]',
  'left-[38px] top-[14px]',
  'left-[52px] top-[72px]',
  'left-[66px] top-[38px]',
  'left-[78px] top-[92px]',
  'left-[92px] top-[22px]',
  'left-[106px] top-[62px]',
  'left-[120px] top-[40px]',
]

const rightStars = [
  'right-[16px] top-[190px]',
  'right-[30px] top-[236px]',
  'right-[48px] top-[284px]',
  'right-[64px] top-[326px]',
  'right-[24px] top-[376px]',
  'right-[42px] top-[420px]',
  'right-[64px] top-[470px]',
  'right-[28px] top-[520px]',
  'right-[78px] top-[566px]',
  'right-[44px] top-[610px]',
]
</script>

<template>
  <section
    id="servicios"
    class="relative overflow-hidden border-y border-cyan-300/20 bg-[#000814] px-4 py-10 sm:px-5 sm:py-12 md:px-6 lg:px-8 lg:py-16"
  >
    <!-- fondo -->
    <div class="absolute inset-0 bg-[#000814]" />
    <div
      class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(0,120,255,0.14),transparent_34%),radial-gradient(circle_at_bottom,rgba(0,120,255,0.06),transparent_28%)]"
    />

    <!-- línea superior / inferior -->
    <div
      class="pointer-events-none absolute inset-x-0 top-0 h-px bg-[linear-gradient(90deg,rgba(0,174,255,0)_0%,rgba(0,174,255,0.45)_30%,rgba(0,174,255,0.9)_50%,rgba(255,191,73,0.45)_76%,rgba(255,191,73,0)_100%)]"
    />
    <div
      class="pointer-events-none absolute inset-x-0 bottom-0 h-px bg-[linear-gradient(90deg,rgba(255,191,73,0)_0%,rgba(255,191,73,0.45)_30%,rgba(255,191,73,0.9)_50%,rgba(0,174,255,0.45)_76%,rgba(0,174,255,0)_100%)]"
    />

    <!-- puntitos -->
    <div
      v-for="(item, index) in leftStars"
      :key="`left-${index}`"
      class="pointer-events-none absolute h-[3px] w-[3px] rounded-full bg-[#1e90ff] shadow-[0_0_8px_rgba(30,144,255,1),0_0_18px_rgba(30,144,255,0.95),0_0_30px_rgba(30,144,255,0.75)] sm:h-[4px] sm:w-[4px]"
      :class="item"
    />
    <div
      v-for="(item, index) in rightStars"
      :key="`right-${index}`"
      class="pointer-events-none absolute h-[3px] w-[3px] rounded-full bg-[#1e90ff] shadow-[0_0_8px_rgba(30,144,255,1),0_0_18px_rgba(30,144,255,0.95),0_0_30px_rgba(30,144,255,0.75)] sm:h-[4px] sm:w-[4px]"
      :class="item"
    />

    <!-- halos -->
    <div
      class="pointer-events-none absolute left-[8%] top-[8%] h-[140px] w-[140px] rounded-full bg-cyan-400/8 blur-[60px] sm:h-[180px] sm:w-[180px] sm:blur-[70px]"
    />
    <div
      class="pointer-events-none absolute right-[10%] bottom-[12%] h-[180px] w-[180px] rounded-full bg-cyan-400/8 blur-[70px] sm:h-[220px] sm:w-[220px] sm:blur-[80px]"
    />

    <div class="relative mx-auto max-w-[1240px]">
      <!-- título -->
      <div class="mx-auto flex justify-center px-2 sm:px-4">
        <img
          :src="ofrecemos"
          alt="¿Qué ofrecemos?"
          class="block h-auto w-full max-w-[700px] object-contain sm:max-w-[800px] md:max-w-[900px] lg:max-w-[1000px] xl:max-w-[1200px] 2xl:max-w-[1300px]"
        />
      </div>

      <!-- cards -->
      <div
        class="mx-auto mt-8 grid max-w-[1100px] grid-cols-1 justify-items-center gap-x-5 gap-y-6 sm:mt-10 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-7 lg:mt-12 lg:grid-cols-3 lg:gap-x-8 lg:gap-y-9"
      >
        <article
          v-for="(item, index) in features"
          :key="item.title"
          class="group relative flex min-h-[270px] w-full max-w-[280px] flex-col items-center rounded-[24px] border border-white/80 bg-[radial-gradient(circle_at_top,rgba(11,36,78,0.9),rgba(3,11,28,0.98)_56%,rgba(2,7,18,1)_100%)] px-5 pt-7 pb-6 text-center shadow-[inset_0_0_30px_rgba(32,102,255,0.10)] transition duration-300 hover:-translate-y-1 hover:shadow-[inset_0_0_34px_rgba(32,102,255,0.14),0_0_24px_rgba(30,144,255,0.14)] sm:min-h-[295px] sm:max-w-[290px] sm:px-6 sm:pt-8 sm:pb-7 lg:min-h-[330px] lg:max-w-[300px] lg:px-7 lg:pt-9 lg:pb-8"
          :class="[
            index === 3 ? 'sm:col-start-1 lg:col-start-auto' : '',
            index === 4 ? 'sm:col-start-2 lg:col-start-auto' : '',
          ]"
        >
          <div
            class="pointer-events-none absolute bottom-[-2px] left-1/2 h-[10px] w-[66%] -translate-x-1/2 rounded-full bg-[#1f93ff] blur-[8px]"
          />
          <div
            class="pointer-events-none absolute inset-x-8 bottom-0 h-px bg-[linear-gradient(90deg,rgba(34,150,255,0),rgba(34,150,255,0.98),rgba(34,150,255,0))]"
          />

          <!-- icono -->
          <div class="mb-5 flex h-[72px] items-center justify-center text-[#0d63ff] sm:mb-6 sm:h-[80px] lg:mb-7 lg:h-[84px]">
            <svg
              v-if="item.icon === 'globe'"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              class="h-[56px] w-[56px] drop-shadow-[0_0_12px_rgba(13,99,255,0.9)] sm:h-[62px] sm:w-[62px] lg:h-[68px] lg:w-[68px]"
            >
              <circle cx="12" cy="12" r="9" />
              <path d="M3 12h18" />
              <path d="M12 3a15 15 0 0 1 0 18" />
              <path d="M12 3a15 15 0 0 0 0 18" />
              <path d="M5.5 7.5c2 .8 4.2 1.2 6.5 1.2s4.5-.4 6.5-1.2" />
              <path d="M5.5 16.5c2-.8 4.2-1.2 6.5-1.2s4.5.4 6.5 1.2" />
            </svg>

            <svg
              v-else-if="item.icon === 'user-check'"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              class="h-[56px] w-[56px] drop-shadow-[0_0_12px_rgba(13,99,255,0.9)] sm:h-[62px] sm:w-[62px] lg:h-[68px] lg:w-[68px]"
            >
              <circle cx="10" cy="7" r="3.5" />
              <path d="M4.5 19c0-3.2 2.9-5.5 5.5-5.5S15.5 15.8 15.5 19" />
              <path d="m15.5 11.5 2 2 4-4" />
            </svg>

            <svg
              v-else-if="item.icon === 'hand'"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              class="h-[56px] w-[56px] drop-shadow-[0_0_12px_rgba(13,99,255,0.9)] sm:h-[62px] sm:w-[62px] lg:h-[68px] lg:w-[68px]"
            >
              <path d="M8 11V7a1.5 1.5 0 1 1 3 0v4" />
              <path d="M11 11V5.8a1.5 1.5 0 1 1 3 0V11" />
              <path d="M14 11V7.2a1.5 1.5 0 1 1 3 0V13" />
              <path d="M8 11l-1.1-1.1a1.5 1.5 0 1 0-2.1 2.1L8 15.2V18a3 3 0 0 0 3 3h2.2a4.8 4.8 0 0 0 4.1-2.3L19 16" />
              <path d="M18.8 5.5h.01" />
              <path d="M21 7.5h.01" />
              <path d="M20 10.5h.01" />
            </svg>

            <svg
              v-else-if="item.icon === 'price'"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              class="h-[56px] w-[56px] drop-shadow-[0_0_12px_rgba(13,99,255,0.9)] sm:h-[62px] sm:w-[62px] lg:h-[68px] lg:w-[68px]"
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

            <svg
              v-else
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              class="h-[56px] w-[56px] drop-shadow-[0_0_12px_rgba(13,99,255,0.9)] sm:h-[62px] sm:w-[62px] lg:h-[68px] lg:w-[68px]"
            >
              <circle cx="11" cy="12" r="8" />
              <path d="M11 8v4l2.8 1.8" />
              <path d="m17 7 1.5 1.5 3-3" />
              <path d="M19.5 12.5a8.5 8.5 0 0 1-1.2 4.3" />
            </svg>
          </div>

          <h3
            class="whitespace-pre-line text-[20px] font-extrabold leading-[1.05] tracking-[-0.03em] text-white sm:text-[22px] lg:text-[24px]"
          >
            {{ item.title }}
          </h3>

          <p class="mt-4 text-[12.5px] leading-[1.5] text-white/88 sm:mt-4 sm:text-[13px] lg:mt-5 lg:text-[14px]">
            {{ item.description }}
          </p>
        </article>
      </div>

      <!-- bloque inferior -->
      <div class="mx-auto mt-14 max-w-[940px] px-2 text-center sm:mt-16 lg:mt-20">
        <h3
          class="text-[34px] font-black leading-[1] tracking-[-0.04em] text-white sm:text-[44px] md:text-[52px] lg:text-[64px] xl:text-[68px]"
        >
          Empieza hoy a vender
          <br />
          hoteles en todo el mundo.
        </h3>

        <p
          class="mx-auto mt-4 max-w-[780px] text-[14px] leading-[1.55] text-white/80 sm:mt-5 sm:text-[15px] md:text-[16px] lg:text-[18px]"
        >
          Únete a ABC Travelling y ofrece a tus clientes miles de opciones de alojamiento con
          confirmación inmediata. Nuestra plataforma ofrece hoteles en destinos líderes del turismo
          internacional.
        </p>
      </div>
    </div>
  </section>
</template>
