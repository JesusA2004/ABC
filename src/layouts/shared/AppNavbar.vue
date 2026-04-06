<script setup lang="ts">
import { ref } from 'vue'

const isOpen = ref(false)

const links = [
  { label: 'Nosotros', href: '#nosotros' },
  { label: 'Servicios', href: '#servicios' },
  { label: 'API', href: '#api' },
  { label: 'Contacto', href: '#contacto' },
]
</script>

<template>
  <header class="sticky top-0 z-50 w-full">
    <div class="relative bg-black">
      <!-- fondo oscuro azuloso -->
      <div
        class="absolute inset-0 bg-[linear-gradient(180deg,#020202_0%,#02040a_35%,#020714_100%)]"
      />

      <!-- brillo sutil del navbar -->
      <div
        class="pointer-events-none absolute inset-x-0 bottom-0 h-[2px] bg-[linear-gradient(90deg,rgba(0,70,255,0)_0%,rgba(25,95,255,0.75)_18%,rgba(40,120,255,1)_50%,rgba(25,95,255,0.75)_82%,rgba(0,70,255,0)_100%)] shadow-[0_0_16px_rgba(37,99,235,0.9)]"
      />

      <div
        class="relative mx-auto flex h-[78px] max-w-[1720px] items-center justify-between px-6 sm:px-10 lg:h-[92px] lg:px-14 xl:px-20"
      >
        <!-- logo -->
        <a href="#inicio" class="flex shrink-0 items-center">
          <img
            src="/favicon.png"
            alt="ABC Travelling"
            class="h-[48px] w-auto object-contain sm:h-[56px] lg:h-[70px] xl:h-[78px]"
          />
        </a>

        <!-- nav desktop -->
        <nav class="hidden items-center gap-12 lg:flex xl:gap-16">
          <a
            v-for="link in links"
            :key="link.label"
            :href="link.href"
            class="text-[18px] font-medium tracking-[0.01em] text-white transition duration-200 hover:text-white/80"
          >
            {{ link.label }}
          </a>
        </nav>

        <!-- botón desktop -->
        <div class="hidden lg:flex">
          <a
            href="#contacto"
            class="relative inline-flex items-center justify-center overflow-hidden rounded-full border border-[#9a6720] px-8 py-3 text-[18px] font-semibold text-white transition duration-200 hover:scale-[1.01]"
          >
            <span
              class="absolute inset-0 rounded-full bg-[linear-gradient(90deg,rgba(255,170,0,0.02)_0%,rgba(255,183,43,0.08)_20%,rgba(255,199,94,0.16)_50%,rgba(255,183,43,0.08)_80%,rgba(255,170,0,0.02)_100%)]"
            />
            <span
              class="pointer-events-none absolute -left-10 top-1/2 h-[140%] w-16 -translate-y-1/2 rotate-12 bg-[linear-gradient(90deg,rgba(255,255,255,0),rgba(255,220,150,0.9),rgba(255,255,255,0))] blur-[10px]"
            />
            <span
              class="pointer-events-none absolute -right-6 top-1/2 h-[150%] w-20 -translate-y-1/2 rounded-full bg-[radial-gradient(circle,rgba(255,189,64,0.95)_0%,rgba(255,189,64,0.35)_35%,rgba(255,189,64,0)_72%)]"
            />
            <span class="relative z-10">Acceso a Agencias</span>
          </a>
        </div>

        <!-- botón mobile -->
        <button
          type="button"
          class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/15 bg-white/5 text-white lg:hidden"
          @click="isOpen = !isOpen"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>

    <!-- menú mobile -->
    <Transition name="mobile-menu">
      <div
        v-if="isOpen"
        class="border-t border-white/10 border-b border-blue-500/30 bg-[#03050c] px-5 py-5 lg:hidden"
      >
        <nav class="flex flex-col gap-2">
          <a
            v-for="link in links"
            :key="link.label"
            :href="link.href"
            class="rounded-xl px-3 py-3 text-base font-medium text-white/90 transition hover:bg-white/5"
            @click="isOpen = false"
          >
            {{ link.label }}
          </a>

          <a
            href="#contacto"
            class="mt-3 inline-flex items-center justify-center rounded-full border border-[#9a6720] px-6 py-3 text-base font-semibold text-white"
            @click="isOpen = false"
          >
            Acceso a Agencias
          </a>
        </nav>
      </div>
    </Transition>
  </header>
</template>

<style scoped>
.mobile-menu-enter-active,
.mobile-menu-leave-active {
  transition: all 0.22s ease;
}
.mobile-menu-enter-from,
.mobile-menu-leave-to {
  opacity: 0;
  transform: translateY(-8px);
}
</style>
