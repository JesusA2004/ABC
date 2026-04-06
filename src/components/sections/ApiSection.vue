<script setup lang="ts">
const circuitLines = [
  'left-[6%] top-[12%] w-[18%] rotate-0',
  'left-[10%] top-[20%] w-[16%] rotate-6',
  'left-[8%] top-[31%] w-[20%] rotate-[2deg]',
  'left-[12%] top-[44%] w-[17%] -rotate-[4deg]',
  'left-[7%] top-[56%] w-[21%] rotate-[1deg]',
  'left-[13%] top-[68%] w-[16%] rotate-[5deg]',
  'left-[18%] top-[15%] h-[16%] w-px',
  'left-[24%] top-[10%] h-[18%] w-px',
  'left-[26%] top-[58%] h-[16%] w-px',

  'right-[6%] top-[12%] w-[18%] rotate-180',
  'right-[10%] top-[20%] w-[16%] rotate-[174deg]',
  'right-[8%] top-[31%] w-[20%] rotate-[178deg]',
  'right-[12%] top-[44%] w-[17%] rotate-[184deg]',
  'right-[7%] top-[56%] w-[21%] rotate-[179deg]',
  'right-[13%] top-[68%] w-[16%] rotate-[175deg]',
  'right-[18%] top-[15%] h-[16%] w-px',
  'right-[24%] top-[10%] h-[18%] w-px',
  'right-[26%] top-[58%] h-[16%] w-px',

  'left-[30%] top-[6%] h-[16%] w-px',
  'left-[35%] top-[9%] h-[12%] w-px',
  'left-[40%] top-[13%] h-[10%] w-px',
  'right-[30%] top-[6%] h-[16%] w-px',
  'right-[35%] top-[9%] h-[12%] w-px',
  'right-[40%] top-[13%] h-[10%] w-px',

  'left-[30%] bottom-[8%] h-[12%] w-px',
  'left-[36%] bottom-[10%] h-[10%] w-px',
  'right-[30%] bottom-[8%] h-[12%] w-px',
  'right-[36%] bottom-[10%] h-[10%] w-px',
]
</script>

<template>
  <section id="api" class="px-0 py-0">
    <div class="relative overflow-hidden border-y border-white/30 bg-[#03101f]">
      <!-- fondo -->
      <div class="absolute inset-0 bg-[linear-gradient(90deg,#071a2d_0%,#07111d_42%,#030b17_100%)]" />
      <div
        class="absolute inset-0 bg-[radial-gradient(circle_at_left,rgba(57,134,255,0.16),transparent_34%)]"
      />
      <div
        class="absolute inset-0 bg-[radial-gradient(circle_at_right,rgba(0,140,255,0.13),transparent_34%)]"
      />

      <div
        class="relative mx-auto grid min-h-[235px] max-w-[1600px] items-center gap-8 px-6 py-8 sm:px-8 md:grid-cols-[0.95fr_1.05fr] md:px-10 lg:min-h-[320px] lg:px-14 xl:px-20"
      >
        <!-- columna izquierda -->
        <div class="max-w-[520px]">
          <h2
            class="text-[28px] font-extrabold uppercase leading-[0.98] tracking-[-0.03em] text-white sm:text-[36px] md:text-[42px] lg:text-[52px]"
          >
            <span class="block text-[0.78em]">API DE INTEGRACIÓN</span>
            <span class="block text-[0.78em]">PARA PLATAFORMAS</span>
            <span class="block text-[1em]">DE VIAJES</span>
          </h2>

          <div class="mt-6 max-w-[430px] space-y-4 text-[11px] leading-[1.55] text-white/78 sm:text-[12px] lg:text-[13px]">
            <p>
              Integra el inventario global de ABC Travelling directamente en tu plataforma
              mediante nuestra API diseñada para desarrolladores y empresas del sector turístico.
            </p>

            <p>
              Nuestra API permite a agencias de viajes online, OTAs y plataformas tecnológicas
              acceder al inventario hotelero de ABC Travelling en tiempo real.
            </p>
          </div>
        </div>

        <!-- columna derecha -->
        <div class="relative flex min-h-[180px] items-center justify-center md:min-h-[250px] lg:min-h-[300px]">
          <!-- circuitos -->
          <div class="absolute inset-0">
            <!-- horizontales -->
            <div
              v-for="(line, index) in circuitLines"
              :key="index"
              class="absolute rounded-full bg-[linear-gradient(90deg,rgba(0,140,255,0),rgba(0,153,255,0.95),rgba(0,140,255,0))] shadow-[0_0_8px_rgba(0,157,255,0.75)]"
              :class="line.includes('w-px') ? 'w-px bg-[linear-gradient(180deg,rgba(0,140,255,0),rgba(0,153,255,0.95),rgba(0,140,255,0))]' : 'h-px'"
            />
          </div>

          <!-- líneas diagonales extras -->
          <div class="absolute left-1/2 top-1/2 h-px w-[38%] -translate-x-[86%] -translate-y-[86px] rotate-[-28deg] bg-[linear-gradient(90deg,rgba(0,140,255,0),rgba(0,153,255,0.95),rgba(0,140,255,0))] shadow-[0_0_8px_rgba(0,157,255,0.8)]" />
          <div class="absolute left-1/2 top-1/2 h-px w-[36%] -translate-x-[88%] -translate-y-[48px] rotate-[-14deg] bg-[linear-gradient(90deg,rgba(0,140,255,0),rgba(0,153,255,0.95),rgba(0,140,255,0))] shadow-[0_0_8px_rgba(0,157,255,0.8)]" />
          <div class="absolute left-1/2 top-1/2 h-px w-[37%] -translate-x-[88%] translate-y-[38px] rotate-[14deg] bg-[linear-gradient(90deg,rgba(0,140,255,0),rgba(0,153,255,0.95),rgba(0,140,255,0))] shadow-[0_0_8px_rgba(0,157,255,0.8)]" />
          <div class="absolute left-1/2 top-1/2 h-px w-[39%] -translate-x-[86%] translate-y-[84px] rotate-[28deg] bg-[linear-gradient(90deg,rgba(0,140,255,0),rgba(0,153,255,0.95),rgba(0,140,255,0))] shadow-[0_0_8px_rgba(0,157,255,0.8)]" />

          <div class="absolute left-1/2 top-1/2 h-px w-[38%] translate-x-[2%] -translate-y-[86px] rotate-[28deg] bg-[linear-gradient(90deg,rgba(0,140,255,0),rgba(0,153,255,0.95),rgba(0,140,255,0))] shadow-[0_0_8px_rgba(0,157,255,0.8)]" />
          <div class="absolute left-1/2 top-1/2 h-px w-[36%] translate-x-[4%] -translate-y-[48px] rotate-[14deg] bg-[linear-gradient(90deg,rgba(0,140,255,0),rgba(0,153,255,0.95),rgba(0,140,255,0))] shadow-[0_0_8px_rgba(0,157,255,0.8)]" />
          <div class="absolute left-1/2 top-1/2 h-px w-[37%] translate-x-[4%] translate-y-[38px] rotate-[-14deg] bg-[linear-gradient(90deg,rgba(0,140,255,0),rgba(0,153,255,0.95),rgba(0,140,255,0))] shadow-[0_0_8px_rgba(0,157,255,0.8)]" />
          <div class="absolute left-1/2 top-1/2 h-px w-[39%] translate-x-[2%] translate-y-[84px] rotate-[-28deg] bg-[linear-gradient(90deg,rgba(0,140,255,0),rgba(0,153,255,0.95),rgba(0,140,255,0))] shadow-[0_0_8px_rgba(0,157,255,0.8)]" />

          <!-- puntos -->
          <div class="absolute left-1/2 top-1/2 h-[6px] w-[6px] -translate-x-[132px] -translate-y-[84px] rounded-full bg-[#26c5ff] shadow-[0_0_10px_rgba(38,197,255,1)]" />
          <div class="absolute left-1/2 top-1/2 h-[6px] w-[6px] -translate-x-[150px] rounded-full bg-[#26c5ff] shadow-[0_0_10px_rgba(38,197,255,1)]" />
          <div class="absolute left-1/2 top-1/2 h-[6px] w-[6px] -translate-x-[124px] translate-y-[92px] rounded-full bg-[#26c5ff] shadow-[0_0_10px_rgba(38,197,255,1)]" />
          <div class="absolute left-1/2 top-1/2 h-[6px] w-[6px] translate-x-[132px] -translate-y-[84px] rounded-full bg-[#26c5ff] shadow-[0_0_10px_rgba(38,197,255,1)]" />
          <div class="absolute left-1/2 top-1/2 h-[6px] w-[6px] translate-x-[150px] rounded-full bg-[#26c5ff] shadow-[0_0_10px_rgba(38,197,255,1)]" />
          <div class="absolute left-1/2 top-1/2 h-[6px] w-[6px] translate-x-[124px] translate-y-[92px] rounded-full bg-[#26c5ff] shadow-[0_0_10px_rgba(38,197,255,1)]" />
          <div class="absolute left-1/2 top-1/2 h-[8px] w-[8px] translate-x-[56px] -translate-y-[92px] rounded-full bg-white shadow-[0_0_14px_rgba(255,255,255,1)]" />

          <!-- núcleo -->
          <div class="relative flex h-[108px] w-[108px] items-center justify-center rounded-full border border-cyan-300/70 bg-[#041a30] shadow-[0_0_0_3px_rgba(0,229,255,0.15),0_0_26px_rgba(0,183,255,0.55)] sm:h-[120px] sm:w-[120px] lg:h-[136px] lg:w-[136px]">
            <div class="absolute inset-[8px] rounded-full border border-cyan-300/50" />
            <div class="absolute inset-[16px] rounded-full border border-cyan-300/30" />

            <div class="flex h-[62px] w-[62px] items-center justify-center rounded-full border border-cyan-200/60 bg-[radial-gradient(circle,rgba(31,196,255,0.36),rgba(4,26,48,0.95)_68%)] shadow-[0_0_22px_rgba(34,211,238,0.65)] sm:h-[70px] sm:w-[70px] lg:h-[82px] lg:w-[82px]">
              <div class="text-center leading-none text-cyan-200">
                <div class="text-[11px] lg:text-[12px]">⚙</div>
                <div class="mt-1 text-[20px] font-bold lg:text-[24px]">API</div>
                <div class="mt-1 text-[9px] tracking-[0.22em] lg:text-[10px]">•••</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
