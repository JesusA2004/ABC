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
    <div
      class="relative border-b border-cyan-400/20 bg-[linear-gradient(to_right,rgba(2,6,23,0.96),rgba(6,18,40,0.82),rgba(20,10,35,0.82),rgba(2,6,23,0.96))] backdrop-blur-xl"
    >
      <!-- glow superior/inferior -->
      <div
        class="pointer-events-none absolute inset-x-0 top-0 h-px bg-[linear-gradient(90deg,rgba(34,211,238,0),rgba(34,211,238,0.95),rgba(217,70,239,0.95),rgba(34,211,238,0))] shadow-[0_0_14px_rgba(34,211,238,0.85)]"
      />
      <div
        class="pointer-events-none absolute inset-x-0 bottom-0 h-px bg-[linear-gradient(90deg,rgba(34,211,238,0),rgba(34,211,238,0.9),rgba(217,70,239,0.8),rgba(34,211,238,0))] shadow-[0_0_14px_rgba(217,70,239,0.75)]"
      />

      <div
        class="mx-auto flex h-[54px] max-w-[1400px] items-center justify-between px-4 sm:px-6 lg:px-8"
      >
        <!-- logo -->
        <a href="#inicio" class="flex items-center gap-2">
          <img
            src="/favicon.png"
            alt="ABC Travelling"
            class="h-8 w-8 object-contain drop-shadow-[0_0_10px_rgba(34,211,238,0.45)]"
          />
          <div class="leading-none">
            <p class="text-[15px] font-bold tracking-[0.08em] text-cyan-100">ABC</p>
            <p class="mt-0.5 text-[11px] text-slate-300">TRAVELLING</p>
          </div>
        </a>

        <!-- nav desktop -->
        <nav class="hidden items-center gap-8 lg:flex">
          <a
            v-for="link in links"
            :key="link.label"
            :href="link.href"
            class="text-[13px] font-medium text-slate-100 transition hover:text-cyan-300"
          >
            {{ link.label }}
          </a>
        </nav>

        <!-- cta desktop -->
        <div class="hidden lg:flex">
          <a
            href="#contacto"
            class="inline-flex items-center rounded-full border border-fuchsia-400/40 bg-[linear-gradient(to_right,rgba(34,211,238,0.12),rgba(217,70,239,0.20))] px-5 py-2 text-[12px] font-semibold text-white shadow-[0_0_18px_rgba(217,70,239,0.28)] transition hover:border-cyan-300/60 hover:shadow-[0_0_24px_rgba(34,211,238,0.28)]">
            ¡Regístrarme ahora!
          </a>
        </div>

        <!-- menu mobile -->
        <button
          type="button"
          class="flex h-9 w-9 items-center justify-center rounded-full border border-white/10 bg-white/5 text-white lg:hidden"
          @click="isOpen = !isOpen"
        >
          ☰
        </button>
      </div>
    </div>

    <!-- mobile menu -->
    <Transition name="mobile-menu">
      <div
        v-if="isOpen"
        class="border-b border-cyan-400/20 bg-slate-950/95 px-4 py-4 backdrop-blur-xl lg:hidden"
      >
        <nav class="flex flex-col gap-2">
          <a
            v-for="link in links"
            :key="link.label"
            :href="link.href"
            class="rounded-xl px-3 py-2 text-sm text-slate-200 transition hover:bg-white/5 hover:text-cyan-300"
            @click="isOpen = false"
          >
            {{ link.label }}
          </a>

          <a
            href="#contacto"
            class="mt-2 inline-flex items-center justify-center rounded-full border border-fuchsia-400/40 bg-[linear-gradient(to_right,rgba(34,211,238,0.12),rgba(217,70,239,0.20))] px-4 py-2 text-sm font-semibold text-white shadow-[0_0_18px_rgba(217,70,239,0.28)]"
            @click="isOpen = false"
          >
            ¡Regístrarme ahora!
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
