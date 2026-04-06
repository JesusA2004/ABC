<script setup lang="ts">
import mundoImg from '@/assets/mundo.png'
import quienesSomosTitle from '@/assets/QUIENESSOMOS.png'
import puntosImg from '@/assets/puntos.png'
</script>

<template>
  <section
    id="nosotros"
    class="relative overflow-hidden border-y border-cyan-300/25 bg-[#000814] px-0 py-0"
  >
    <!-- capa base -->
    <div class="absolute inset-0 bg-[#000814]" />
    <div class="absolute inset-0 bg-[rgba(0,8,20,0.10)]" />

    <!-- puntitos izquierda -->
    <div class="pointer-events-none absolute left-0 top-0 z-0">
      <img
        :src="puntosImg"
        alt=""
        aria-hidden="true"
        class="w-[150px] opacity-100 mix-blend-screen [filter:brightness(0)_saturate(100%)_invert(50%)_sepia(100%)_saturate(5000%)_hue-rotate(191deg)_brightness(120%)_contrast(110%)] sm:w-[190px] md:w-[230px] lg:w-[280px] xl:w-[320px]"
      />
    </div>

    <!-- puntitos derecha -->
    <div class="pointer-events-none absolute bottom-0 right-0 z-0">
      <img
        :src="puntosImg"
        alt=""
        aria-hidden="true"
        class="w-[150px] rotate-180 opacity-100 mix-blend-screen [filter:brightness(0)_saturate(100%)_invert(50%)_sepia(100%)_saturate(5000%)_hue-rotate(191deg)_brightness(120%)_contrast(110%)] sm:w-[200px] md:w-[240px] lg:w-[300px] xl:w-[340px]"
      />
    </div>

    <!-- brillo superior -->
    <div
      class="pointer-events-none absolute inset-x-0 top-0 h-[2px] bg-[linear-gradient(90deg,rgba(0,180,255,0)_0%,rgba(0,180,255,0.35)_25%,rgba(0,180,255,0.9)_50%,rgba(255,191,73,0.55)_78%,rgba(255,191,73,0)_100%)]"
    />

    <!-- glow dorado inferior -->
    <div
      class="pointer-events-none absolute bottom-0 left-1/2 h-[10px] w-[260px] -translate-x-1/2 bg-[radial-gradient(ellipse_at_center,rgba(255,191,73,1)_0%,rgba(255,191,73,0.60)_24%,rgba(255,191,73,0.16)_48%,rgba(255,191,73,0)_75%)] blur-[4px] sm:h-[12px] sm:w-[340px] md:w-[420px] lg:h-[14px] lg:w-[520px] xl:w-[620px]"
    />

    <div
      class="relative z-10 mx-auto grid min-h-[520px] max-w-[1360px] items-center gap-10 px-5 py-10 sm:px-6 sm:py-12 md:px-8 md:py-14 lg:min-h-[620px] lg:grid-cols-[1.02fr_0.98fr] lg:gap-6 lg:px-12 lg:py-14 xl:min-h-[700px] xl:px-16 xl:py-16"
    >
      <!-- izquierda -->
      <div class="max-w-[820px]">
        <!-- título responsive -->
        <div class="mx-auto flex justify-center lg:mx-0 lg:justify-start">
          <img
            :src="quienesSomosTitle"
            alt="¿Quiénes somos?"
            class="block h-auto w-full max-w-[280px] object-contain sm:max-w-[360px] md:max-w-[470px] lg:max-w-[620px] xl:max-w-[760px] 2xl:max-w-[860px]"
          />
        </div>

        <p
          class="mt-5 max-w-[820px] text-[20px] font-medium leading-[1.12] tracking-[-0.02em] text-white sm:mt-6 sm:text-[24px] md:text-[27px] lg:mt-7 lg:text-[29px] xl:text-[31px]"
        >
          Tu aliado tecnológico en la
          <span class="font-extrabold">distribución hotelera</span>
        </p>

        <div
          class="mt-5 max-w-[760px] space-y-6 text-[15px] leading-[1.6] text-white/95 sm:mt-6 sm:space-y-7 sm:text-[16px] md:text-[17px] lg:mt-6 lg:space-y-8 lg:text-[18px] xl:text-[19px]"
        >
          <p class="text-justify">
            <span class="font-extrabold text-white">ABC Travelling</span> es una plataforma B2B
            diseñada <span class="font-extrabold text-white">para agencias de viajes</span> que
            buscan ampliar su oferta hotelera con acceso a miles de proveedores internacionales
            desde un solo sistema.
          </p>

          <p class="text-justify">
            Nuestra tecnología
            <span class="font-extrabold text-white">
              permite consultar disponibilidad en tiempo real
            </span>,
            comparar tarifas y realizar reservas confirmadas de manera inmediata, facilitando a las
            agencias ofrecer mejores opciones a sus clientes.
          </p>

          <p class="text-justify font-extrabold text-white">
            Con ABC Travelling, tu agencia obtiene acceso a una red global de hoteles y proveedores
            sin necesidad de integraciones complejas.
          </p>
        </div>
      </div>

      <!-- derecha -->
      <div class="relative flex items-center justify-center">
        <div
          class="relative flex h-[280px] w-full items-center justify-center sm:h-[340px] md:h-[420px] lg:h-[520px] xl:h-[590px] 2xl:h-[630px]"
        >
          <!-- glow fuerte del mundo -->
          <div
            class="absolute h-[220px] w-[220px] rounded-full bg-cyan-400/18 blur-[60px] sm:h-[280px] sm:w-[280px] sm:blur-[70px] md:h-[340px] md:w-[340px] lg:h-[430px] lg:w-[430px] lg:blur-[80px]"
          />
          <div
            class="absolute h-[150px] w-[150px] rounded-full bg-cyan-300/16 blur-[40px] sm:h-[190px] sm:w-[190px] md:h-[250px] md:w-[250px] lg:h-[310px] lg:w-[310px] lg:blur-[50px]"
          />
          <div
            class="absolute h-[380px] w-[380px] rounded-full bg-cyan-300/6 blur-[90px] sm:h-[460px] sm:w-[460px] md:h-[560px] md:w-[560px] lg:h-[680px] lg:w-[680px] lg:blur-[120px]"
          />

          <img
            :src="mundoImg"
            alt="Red global hotelera"
            class="relative z-10 max-h-full w-auto scale-[1.02] object-contain drop-shadow-[0_0_44px_rgba(34,211,238,0.35)] sm:scale-[1.03] lg:scale-[1.06]"
          />
        </div>
      </div>
    </div>
  </section>
</template>
