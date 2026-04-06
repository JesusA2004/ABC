<script setup lang="ts">
const socialLinks = [
  {
    name: 'WhatsApp',
    href: '#',
    icon: 'whatsapp',
  },
  {
    name: 'Instagram',
    href: '#',
    icon: 'instagram',
  },
  {
    name: 'Facebook',
    href: '#',
    icon: 'facebook',
  },
  {
    name: 'YouTube',
    href: '#',
    icon: 'youtube',
  },
  {
    name: 'TikTok',
    href: '#',
    icon: 'tiktok',
  },
]

const leftStars = [
  'left-[24px] top-[26px]',
  'left-[18px] top-[48px]',
  'left-[34px] top-[68px]',
  'left-[14px] top-[86px]',
  'left-[30px] top-[102px]',
]

const rightStars = [
  'right-[26px] top-[34px]',
  'right-[18px] top-[56px]',
  'right-[34px] top-[76px]',
]
</script>

<template>
  <footer
    class="relative overflow-hidden border-t border-white/25 bg-[#020816] px-4 py-8 sm:px-6 lg:px-8"
  >
    <!-- fondo -->
    <div class="absolute inset-0 bg-[linear-gradient(180deg,#020816_0%,#010711_55%,#01040c_100%)]" />
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(20,80,180,0.14),transparent_36%)]" />

    <!-- estrellas -->
    <div
      v-for="(item, index) in leftStars"
      :key="`left-${index}`"
      class="absolute h-[3px] w-[3px] rounded-full bg-[#167dff] shadow-[0_0_8px_rgba(22,125,255,1),0_0_18px_rgba(22,125,255,0.95)]"
      :class="item"
    />
    <div
      v-for="(item, index) in rightStars"
      :key="`right-${index}`"
      class="absolute h-[3px] w-[3px] rounded-full bg-[#167dff] shadow-[0_0_8px_rgba(22,125,255,1),0_0_18px_rgba(22,125,255,0.95)]"
      :class="item"
    />

    <div class="relative mx-auto flex max-w-[980px] flex-col items-center justify-center">
      <!-- redes -->
      <div class="flex flex-wrap items-center justify-center gap-5 sm:gap-6">
        <a
          v-for="item in socialLinks"
          :key="item.name"
          :href="item.href"
          :aria-label="item.name"
          class="text-white/90 transition hover:scale-105 hover:text-white"
        >
          <!-- whatsapp -->
          <svg
            v-if="item.icon === 'whatsapp'"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
            class="h-7 w-7 drop-shadow-[0_0_6px_rgba(255,255,255,0.45)] sm:h-8 sm:w-8"
          >
            <path d="M20 11.5A8.5 8.5 0 0 1 7.5 19L4 20l1.1-3.3A8.5 8.5 0 1 1 20 11.5Z" />
            <path d="M9 8.8c.2-.5.5-.5.7-.5h.6c.2 0 .4 0 .6.5.2.4.7 1.6.8 1.7.1.2.1.4 0 .6l-.4.5c-.1.1-.2.3-.1.5.1.2.5.9 1.1 1.5.7.6 1.4 1 1.6 1.1.2.1.4.1.5-.1l.6-.7c.2-.2.3-.2.6-.1.2.1 1.5.7 1.7.8.2.1.4.2.4.3 0 .2 0 1-.4 1.4-.4.4-.9.6-1.3.7-.3.1-.8.1-1.3 0-.6-.1-1.4-.4-2.5-1-.9-.5-1.8-1.3-2.5-2.1-.7-.7-1.3-1.6-1.7-2.4-.5-.9-.8-1.8-.7-2.5.1-.5.3-1 .6-1.4Z" />
          </svg>

          <!-- instagram -->
          <svg
            v-else-if="item.icon === 'instagram'"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
            class="h-7 w-7 drop-shadow-[0_0_6px_rgba(255,255,255,0.45)] sm:h-8 sm:w-8"
          >
            <rect x="3.5" y="3.5" width="17" height="17" rx="4.5" />
            <circle cx="12" cy="12" r="4.2" />
            <circle cx="17.3" cy="6.7" r="1" fill="currentColor" stroke="none" />
          </svg>

          <!-- facebook -->
          <svg
            v-else-if="item.icon === 'facebook'"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-7 w-7 drop-shadow-[0_0_6px_rgba(255,255,255,0.45)] sm:h-8 sm:w-8"
          >
            <path d="M13.5 21v-7h2.3l.4-2.8h-2.7V9.4c0-.8.2-1.4 1.4-1.4H16V5.6c-.2 0-.9-.1-1.8-.1-1.8 0-3 1.1-3 3.2v2.5H9v2.8h2.4v7h2.1Z" />
          </svg>

          <!-- youtube -->
          <svg
            v-else-if="item.icon === 'youtube'"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
            class="h-7 w-7 drop-shadow-[0_0_6px_rgba(255,255,255,0.45)] sm:h-8 sm:w-8"
          >
            <rect x="3" y="6.5" width="18" height="11" rx="3" />
            <path d="m10 9.5 5 2.5-5 2.5v-5Z" fill="currentColor" stroke="none" />
          </svg>

          <!-- tiktok -->
          <svg
            v-else
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-7 w-7 drop-shadow-[0_0_6px_rgba(255,255,255,0.45)] sm:h-8 sm:w-8"
          >
            <path d="M14.7 3c.3 2.1 1.5 3.4 3.4 4 .5.2 1.1.3 1.7.3v2.7c-1 0-2-.2-2.9-.6-.6-.2-1.1-.6-1.6-1v6.1c0 3.1-2.2 5.3-5.3 5.3-1.2 0-2.2-.3-3.1-.9-1.3-.9-2.2-2.4-2.2-4.4 0-3.1 2.2-5.3 5.3-5.3.2 0 .4 0 .6.1v2.8c-.2-.1-.4-.1-.6-.1-1.5 0-2.5 1-2.5 2.5 0 1 .4 1.7 1.1 2.1.4.2.8.3 1.4.3 1.4 0 2.4-1 2.4-2.5V3h2.3Z" />
          </svg>
        </a>
      </div>

      <!-- texto -->
      <p class="mt-5 text-center text-[11px] leading-none text-white/90 sm:text-[12px]">
        © Copyright 2026 ABC Travelling - Todos los derechos reservados
      </p>

      <!-- logo -->
      <div class="mt-4">
        <img
          src="/favicon.png"
          alt="ABC Travelling"
          class="h-[24px] w-auto object-contain opacity-95"
        />
      </div>
    </div>
  </footer>
</template>
