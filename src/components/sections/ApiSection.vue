<script setup lang="ts">
import apiImg from '@/assets/api.png'
</script>

<template>
  <section
    id="api"
    class="relative overflow-hidden border-y border-cyan-300/20 bg-[#000814] px-0 py-0"
  >
    <!-- fondo -->
    <div class="absolute inset-0 bg-[#000814]" />
    <div
      class="absolute inset-0 bg-[linear-gradient(90deg,rgba(13,40,74,0.55)_0%,rgba(3,15,32,0.28)_32%,rgba(0,8,20,0.08)_58%,rgba(16,44,78,0.38)_100%)]"
    />
    <div
      class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_left,rgba(95,170,255,0.12),transparent_34%),radial-gradient(circle_at_right,rgba(0,162,255,0.10),transparent_32%)]"
    />

    <!-- líneas -->
    <div
      class="pointer-events-none absolute inset-x-0 top-0 h-px bg-[linear-gradient(90deg,rgba(0,180,255,0)_0%,rgba(0,180,255,0.45)_26%,rgba(0,180,255,0.9)_52%,rgba(255,191,73,0.42)_80%,rgba(255,191,73,0)_100%)]"
    />
    <div class="pointer-events-none absolute inset-x-0 bottom-0 h-px bg-white/20" />

    <div
      class="relative mx-auto grid min-h-[350px] max-w-[1600px] items-center gap-8 px-6 py-8 sm:px-8 md:grid-cols-[0.9fr_1.1fr] md:px-10 lg:min-h-[410px] lg:px-14 xl:px-20"
    >
      <!-- texto -->
      <div class="max-w-[560px]">
        <h2
          class="text-[34px] font-black uppercase leading-[0.94] tracking-[-0.04em] text-white sm:text-[46px] md:text-[54px] lg:text-[64px] xl:text-[72px]"
        >
          <span class="block text-[0.68em]">API DE INTEGRACIÓN</span>
          <span class="block text-[0.68em]">PARA PLATAFORMAS</span>
          <span class="block text-[1em]">DE VIAJES</span>
        </h2>

        <div
          class="mt-7 max-w-[470px] space-y-5 text-[13px] leading-[1.55] text-white/82 sm:text-[14px] lg:text-[15px]"
        >
          <p class="text-justify">
            Integra el inventario global de ABC Travelling directamente en tu plataforma mediante
            nuestra API diseñada para desarrolladores y empresas del sector turístico.
          </p>

          <p class="text-justify">
            Nuestra API permite a agencias de viajes online, OTAs y plataformas tecnológicas
            acceder al inventario hotelero de ABC Travelling en tiempo real.
          </p>
        </div>
      </div>

      <!-- imagen -->
      <div class="relative flex items-center justify-center">
        <div
          class="relative flex h-[220px] w-full items-center justify-center sm:h-[270px] md:h-[310px] lg:h-[360px] xl:h-[390px]"
        >
          <!-- halos -->
          <div
            class="absolute h-[220px] w-[220px] rounded-full bg-cyan-400/8 blur-[55px] sm:h-[260px] sm:w-[260px] lg:h-[310px] lg:w-[310px]"
          />
          <div
            class="absolute h-[120px] w-[120px] rounded-full bg-cyan-300/10 blur-[35px] sm:h-[150px] sm:w-[150px] lg:h-[180px] lg:w-[180px]"
          />

          <img
            :src="apiImg"
            alt="API de integración"
            class="relative z-10 max-h-full w-auto object-contain drop-shadow-[0_0_22px_rgba(0,174,255,0.18)]"
          />
        </div>
      </div>
    </div>
  </section>
</template>
