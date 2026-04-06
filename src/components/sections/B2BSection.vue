<script setup lang="ts">
    import b2bImg from '@/assets/pc.png'
    import puntosImg from '@/assets/puntos.png'
</script>

<template>
    <section id="plataforma-b2b" class="relative overflow-hidden
    border-y border-cyan-300/20 bg-[#000814] px-4 py-10 sm:px-6
    sm:py-12 lg:px-8 lg:py-14">
        <!-- fondo -->
        <div class="absolute inset-0 bg-[#000814]" />
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_left,rgba(0,120,255,0.10),transparent_28%),radial-gradient(circle_at_right,rgba(0,120,255,0.08),transparent_24%)]"/>

        <!-- línea superior -->
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-[linear-gradient(90deg,rgba(0,180,255,0)_0%,rgba(0,180,255,0.35)_26%,rgba(0,180,255,0.85)_50%,rgba(255,191,73,0.35)_78%,rgba(255,191,73,0)_100%)]"/>

        <!-- glow inferior dorado -->
        <div class="pointer-events-none absolute bottom-0 left-1/2 h-[10px] w-[280px] -translate-x-1/2 bg-[radial-gradient(ellipse_at_center,rgba(255,191,73,1)_0%,rgba(255,191,73,0.60)_24%,rgba(255,191,73,0.16)_48%,rgba(255,191,73,0)_75%)] blur-[4px] sm:w-[360px] lg:h-[12px] lg:w-[460px]"/>

        <!-- puntitos -->
        <div class="pointer-events-none absolute left-0 bottom-0 z-0">
            <img :src="puntosImg" aria-hidden="true"
            class="w-[120px] opacity-100 mix-blend-screen [filter:brightness(0)_saturate(100%)_invert(50%)_sepia(100%)_saturate(5000%)_hue-rotate(191deg)_brightness(120%)_contrast(110%)] sm:w-[150px] lg:w-[180px]"/>
        </div>

        <div class="pointer-events-none absolute right-0 top-0 z-0">
            <img :src="puntosImg" aria-hidden="true"
            class="w-[90px] rotate-180 opacity-100 mix-blend-screen [filter:brightness(0)_saturate(100%)_invert(50%)_sepia(100%)_saturate(5000%)_hue-rotate(191deg)_brightness(120%)_contrast(110%)] sm:w-[110px] lg:w-[130px]"/>
        </div>

        <div class="relative z-10 mx-auto grid max-w-[1280px]
        items-center gap-8 lg:grid-cols-[0.92fr_1.08fr] lg:gap-10">
            <!-- imagen -->
            <div class="flex justify-center lg:justify-start">
                <img :src="b2bImg" class="h-auto w-full max-w-[360px]
                object-contain drop-shadow-[0_0_22px_rgba(0,174,255,0.10)] sm:max-w-[460px] md:max-w-[520px] lg:max-w-[560px] xl:max-w-[620px]"/>
            </div>

            <!-- texto -->
            <div class="mx-auto flex w-full max-w-[760px] flex-col items-center text-center lg:mx-0 lg:items-end lg:text-right">
                <div class="max-w-[760px]">
                    <h2 class="text-[34px] font-black uppercase leading-[0.95] tracking-[-0.04em] text-white sm:text-[46px] md:text-[56px] lg:text-[62px] xl:text-[72px]">
                        <span class="block">PLATAFORMA B2B</span>
                        <span class="block text-[0.68em]">QUE CONECTA A TU AGENCIA</span>
                        <span class="block">CON EL MUNDO.</span>
                    </h2>

                    <p class="mx-auto mt-6 max-w-[560px] text-[16px] leading-[1.45] text-white/92 sm:text-[18px] md:text-[20px] lg:mx-0 lg:mt-7 lg:max-w-[620px] lg:text-[22px]">
                        Accede a más de 2 millones de hoteles en 32,000 destinos, con disponibilidad en tiempo real, confirmación inmediata y tarifas exclusivas para agencias de viajes.
                    </p>

                    <div class="mt-7 lg:mt-8">
                        <a href="#contacto"
                        class="inline-flex items-center justify-center rounded-full border border-[#b67a1f] bg-[linear-gradient(180deg,rgba(19,39,71,0.88)_0%,rgba(6,15,31,0.96)_100%)] px-7 py-3 text-[15px] font-bold text-white shadow-[0_0_16px_rgba(255,191,73,0.18)] transition duration-200 hover:scale-[1.02] hover:shadow-[0_0_22px_rgba(255,191,73,0.28)] sm:px-8 sm:py-3.5 sm:text-[16px]">
                            Acceso a Agencias
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
