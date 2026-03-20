<script setup lang="ts">
import { ref } from 'vue'
import GlowButton from '@/components/ui/GlowButton.vue'

const isOpen = ref(false)

const links = [
  { label: 'Inicio', href: '#inicio' },
  { label: 'Nosotros', href: '#nosotros' },
  { label: 'Servicios', href: '#servicios' },
  { label: 'API', href: '#api' },
  { label: 'Contacto', href: '#contacto' },
]
</script>

<template>
  <header class="sticky top-0 z-50 px-4 pt-4 sm:px-6 lg:px-8">
    <div
      class="mx-auto flex max-w-7xl items-center justify-between rounded-full border border-white/10 bg-slate-950/70 px-4 py-3 backdrop-blur-xl"
    >
      <a href="#inicio" class="flex items-center gap-3">
        <div
          class="flex h-11 w-11 items-center justify-center rounded-2xl border border-cyan-400/30 bg-cyan-400/10 text-cyan-300"
        >
          ✦
        </div>
        <div>
          <p class="text-sm font-bold tracking-[0.25em] text-cyan-300 uppercase">
            ABC
          </p>
          <p class="text-xs text-slate-400">Travelling UI</p>
        </div>
      </a>

      <nav class="hidden items-center gap-6 lg:flex">
        <a
          v-for="link in links"
          :key="link.label"
          :href="link.href"
          class="text-sm text-slate-300 transition hover:text-white"
        >
          {{ link.label }}
        </a>
      </nav>

      <div class="hidden lg:block">
        <GlowButton label="¡Registrarme ahora!" />
      </div>

      <button
        type="button"
        class="flex h-11 w-11 items-center justify-center rounded-2xl border border-white/10 bg-white/5 text-white lg:hidden"
        @click="isOpen = !isOpen"
      >
        ☰
      </button>
    </div>

    <Transition name="mobile-menu">
      <div
        v-if="isOpen"
        class="mx-auto mt-3 max-w-7xl rounded-[2rem] border border-white/10 bg-slate-950/90 p-4 backdrop-blur-xl lg:hidden"
      >
        <nav class="flex flex-col gap-3">
          <a
            v-for="link in links"
            :key="link.label"
            :href="link.href"
            class="rounded-xl px-3 py-3 text-slate-300 transition hover:bg-white/5 hover:text-white"
            @click="isOpen = false"
          >
            {{ link.label }}
          </a>
        </nav>

        <div class="mt-4">
          <GlowButton label="¡Registrarme ahora!" full-width />
        </div>
      </div>
    </Transition>
  </header>
</template>

<style scoped>
.mobile-menu-enter-active,
.mobile-menu-leave-active {
  transition: all 0.25s ease;
}
.mobile-menu-enter-from,
.mobile-menu-leave-to {
  opacity: 0;
  transform: translateY(-10px);
}
</style>
