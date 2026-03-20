<script setup lang="ts">
import bannerImg from '@/assets/banner.png'
</script>

<template>
  <section id="inicio" class="px-0 pt-0 pb-0">
    <div class="mx-auto w-full max-w-none">
      <div class="relative overflow-hidden rounded-none border-y border-cyan-400/30 bg-slate-950">
        <!-- glow exterior -->
        <div class="pointer-events-none absolute inset-0">
          <div class="absolute inset-0 shadow-[0_0_45px_rgba(34,211,238,0.22)]" />
          <div class="absolute inset-0 shadow-[0_0_65px_rgba(217,70,239,0.14)]" />
          <div
            class="absolute inset-0 border border-transparent [border-image:linear-gradient(90deg,rgba(34,211,238,0.85),rgba(217,70,239,0.85),rgba(34,211,238,0.85))_1]"
          />
        </div>

        <img
          :src="bannerImg"
          alt="ABC Travelling banner"
          class="h-[300px] w-full object-cover object-center sm:h-[360px] md:h-[440px] lg:h-[540px] xl:h-[620px]"
        />

        <!-- overlays para igualar look -->
        <div
          class="absolute inset-0 bg-[linear-gradient(to_top,rgba(2,6,23,0.90),rgba(2,6,23,0.28),rgba(2,6,23,0.06))]"
        />
        <div
          class="absolute inset-0 bg-[radial-gradient(circle_at_left,rgba(34,211,238,0.18),transparent_22%)]"
        />
        <div
          class="absolute inset-0 bg-[radial-gradient(circle_at_right,rgba(217,70,239,0.18),transparent_20%)]"
        />
        <div
          class="absolute inset-x-0 top-0 h-[2px] bg-[linear-gradient(90deg,rgba(34,211,238,0.0),rgba(34,211,238,0.9),rgba(217,70,239,0.9),rgba(34,211,238,0.0))] shadow-[0_0_18px_rgba(34,211,238,0.85)]"
        />
        <div
          class="absolute inset-x-0 bottom-0 h-[2px] bg-[linear-gradient(90deg,rgba(34,211,238,0.0),rgba(34,211,238,0.9),rgba(217,70,239,0.9),rgba(34,211,238,0.0))] shadow-[0_0_18px_rgba(217,70,239,0.75)]"
        />

        <!-- texto -->
        <div class="absolute inset-0 flex items-end">
          <div class="w-full px-6 pb-6 sm:px-8 sm:pb-8 md:px-10 md:pb-10 lg:px-14 lg:pb-12">
            <h1
              class="max-w-4xl text-xl font-black leading-[1.02] text-white drop-shadow-[0_0_10px_rgba(0,0,0,0.65)] sm:text-2xl md:text-3xl lg:text-4xl xl:text-[2.8rem]"
            >
              ABC TRAVELLING | IMPULSAMOS TU NEGOCIO, POTENCIAMOS TUS VENTAS!
            </h1>

            <p
              class="mt-2 max-w-3xl text-[11px] leading-4 text-slate-100 drop-shadow-[0_0_8px_rgba(0,0,0,0.6)] sm:text-xs md:text-sm"
            >
              Accede a un Motor de Reservas totalmente gratuito | tu aliado tecnológico en la distribución hotelera
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
