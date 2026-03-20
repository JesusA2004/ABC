<script setup lang="ts">
import mundoFusionadoImg from '@/assets/mundoFusionado.svg'
</script>

<template>
    <section id="nosotros" class="px-0 py-0">
        <div class="mx-auto w-full max-w-none">
        <div
            class="relative overflow-hidden border-t border-cyan-400/20 border-b border-cyan-400/20 bg-[linear-gradient(90deg,rgba(2,6,23,1)_0%,rgba(3,9,22,1)_35%,rgba(3,7,18,1)_100%)]"
        >
            <!-- fondos y glow -->
            <div class="pointer-events-none absolute inset-0">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_18%_40%,rgba(34,211,238,0.12),transparent_20%),radial-gradient(circle_at_80%_50%,rgba(34,211,238,0.10),transparent_18%)]"
            />
            <div
                class="absolute inset-0 opacity-20 [background-image:radial-gradient(rgba(34,211,238,0.35)_1px,transparent_1px)] [background-size:22px_22px]"
            />
            <div class="absolute left-0 top-0 h-full w-full bg-[linear-gradient(to_right,transparent,rgba(34,211,238,0.03),transparent)]" />

            <div
                class="absolute inset-x-[8%] top-0 h-[2px] bg-[linear-gradient(90deg,rgba(34,211,238,0),rgba(34,211,238,0.95),rgba(250,204,21,0.8),rgba(34,211,238,0))] shadow-[0_0_14px_rgba(34,211,238,0.8)]"
            />
            <div
                class="absolute inset-x-[12%] bottom-0 h-[2px] bg-[linear-gradient(90deg,rgba(250,204,21,0),rgba(250,204,21,0.75),rgba(34,211,238,0.9),rgba(250,204,21,0))] shadow-[0_0_14px_rgba(250,204,21,0.45)]"
            />
            </div>

            <div
            class="relative mx-auto grid min-h-[420px] max-w-[1400px] gap-8 px-6 py-10 md:px-10 lg:min-h-[470px] lg:grid-cols-[1fr_0.95fr] lg:items-center lg:px-12 xl:px-14"
            >
            <!-- TEXTO IZQUIERDA -->
            <div class="max-w-[620px]">
                <div class="title-3d-wrap" aria-label="¿QUIÉNES SOMOS?">
                    <span class="about-title-3d depth-8">¿QUIÉNES SOMOS?</span>
                    <span class="about-title-3d depth-7">¿QUIÉNES SOMOS?</span>
                    <span class="about-title-3d depth-6">¿QUIÉNES SOMOS?</span>
                    <span class="about-title-3d depth-5">¿QUIÉNES SOMOS?</span>
                    <span class="about-title-3d depth-4">¿QUIÉNES SOMOS?</span>
                    <span class="about-title-3d depth-3">¿QUIÉNES SOMOS?</span>
                    <span class="about-title-3d depth-2">¿QUIÉNES SOMOS?</span>
                    <span class="about-title-3d depth-1">¿QUIÉNES SOMOS?</span>
                    <h2 class="about-title-3d face">¿QUIÉNES SOMOS?</h2>
                </div>

                <p class="mt-4 text-sm font-medium text-cyan-100 md:text-[15px]">
                Tu aliado tecnológico en la distribución hotelera
                </p>

                <div class="mt-5 space-y-4 text-sm leading-7 text-slate-200 md:text-[15px]">
                <p>
                    ABC Travelling es una plataforma B2B diseñada para agencias de viajes que buscan
                    una solución visual moderna, práctica y enfocada en mejorar su operación comercial.
                </p>

                <p>
                    Nuestra propuesta permite consultar disponibilidad en tiempo real, conectar
                    inventario, mostrar beneficios y gestionar la operación con una experiencia clara,
                    atractiva y profesional.
                </p>

                <p>
                    Con ABC Travelling es posible trabajar con una red global de hoteles y proveedores
                    sin necesidad de integraciones complejas, manteniendo una presentación premium y
                    moderna para tus clientes y socios comerciales.
                </p>
                </div>
            </div>

            <!-- MUNDO DERECHA -->
            <div class="flex items-center justify-center">
                <div class="relative flex h-[300px] w-full items-center justify-center md:h-[360px] lg:h-[420px]">
                <!-- glow general -->
                <div class="absolute h-56 w-56 rounded-full bg-cyan-400/12 blur-3xl md:h-72 md:w-72 lg:h-80 lg:w-80" />
                <div class="absolute h-40 w-40 rounded-full bg-cyan-300/10 blur-2xl md:h-52 md:w-52 lg:h-60 lg:w-60" />

                <!-- partículas -->
                <div class="absolute left-[12%] top-[14%] h-2.5 w-2.5 rounded-full bg-cyan-300 shadow-[0_0_14px_rgba(34,211,238,1)]" />
                <div class="absolute right-[16%] top-[18%] h-2 w-2 rounded-full bg-cyan-200 shadow-[0_0_14px_rgba(34,211,238,1)]" />
                <div class="absolute bottom-[20%] left-[20%] h-2 w-2 rounded-full bg-cyan-300 shadow-[0_0_14px_rgba(34,211,238,1)]" />
                <div class="absolute bottom-[12%] right-[22%] h-2.5 w-2.5 rounded-full bg-cyan-200 shadow-[0_0_14px_rgba(34,211,238,1)]" />
                <div class="absolute right-[10%] bottom-[35%] h-1.5 w-1.5 rounded-full bg-yellow-300 shadow-[0_0_12px_rgba(250,204,21,0.9)]" />

                <!-- líneas decorativas -->
                <div class="absolute left-[18%] top-[20%] h-px w-14 rotate-[18deg] bg-cyan-300/60" />
                <div class="absolute right-[16%] top-[26%] h-px w-12 -rotate-[25deg] bg-cyan-300/60" />
                <div class="absolute right-[18%] bottom-[24%] h-px w-16 rotate-[12deg] bg-cyan-300/60" />

                <img
                    :src="mundoFusionadoImg"
                    alt="Mundo tecnológico"
                    class="relative z-10 max-h-[240px] w-auto object-contain drop-shadow-[0_0_40px_rgba(34,211,238,0.35)] md:max-h-[300px] lg:max-h-[360px]"
                />
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
</template>

<style scoped>
.title-3d-wrap {
  position: relative;
  display: inline-block;
  isolation: isolate;
  margin-bottom: 0.4rem;
}

.about-title-3d {
  font-size: clamp(2.4rem, 5.4vw, 5.1rem);
  font-weight: 900;
  line-height: 0.9;
  text-transform: uppercase;
  letter-spacing: -0.05em;
  margin: 0;
  user-select: none;
  white-space: nowrap;
}

.face {
  position: relative;
  z-index: 20;
  color: #62e8ff;
  -webkit-text-stroke: 1.8px rgba(180, 245, 255, 0.95);
  text-shadow:
    0 0 8px rgba(34, 211, 238, 0.85),
    0 0 18px rgba(34, 211, 238, 0.55),
    0 0 34px rgba(34, 211, 238, 0.25),
    0 10px 18px rgba(0, 0, 0, 0.45);
  filter: drop-shadow(0 0 12px rgba(34, 211, 238, 0.45));
}

/* capas traseras visibles */
.depth-1,
.depth-2,
.depth-3,
.depth-4,
.depth-5,
.depth-6,
.depth-7,
.depth-8 {
  position: absolute;
  inset: 0;
  z-index: 1;
  color: #103c74;
  -webkit-text-stroke: 1.4px rgba(18, 86, 155, 0.95);
  text-shadow: 0 0 4px rgba(0, 0, 0, 0.35);
}

/* cada capa se va desplazando para que se vea el "grosor" */
.depth-1 { transform: translate(2px, 2px); }
.depth-2 { transform: translate(4px, 4px); }
.depth-3 { transform: translate(6px, 6px); }
.depth-4 { transform: translate(8px, 8px); }
.depth-5 { transform: translate(10px, 10px); }
.depth-6 { transform: translate(12px, 12px); }
.depth-7 { transform: translate(14px, 14px); }
.depth-8 { transform: translate(16px, 16px); }

/* degradado del cuerpo 3D */
.depth-1 { color: #1b5aa0; }
.depth-2 { color: #194f91; }
.depth-3 { color: #174783; }
.depth-4 { color: #143e75; }
.depth-5 { color: #123566; }
.depth-6 { color: #0f2d58; }
.depth-7 { color: #0d2549; }
.depth-8 { color: #0a1d3b; }

/* sombra global del bloque */
.title-3d-wrap::after {
  content: "";
  position: absolute;
  left: 12px;
  right: -10px;
  bottom: -8px;
  height: 28px;
  z-index: 0;
  background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.42), transparent 70%);
  filter: blur(8px);
}

/* responsive para que no se rompa */
@media (max-width: 640px) {
  .about-title-3d {
    white-space: normal;
    line-height: 0.95;
  }

  .depth-1 { transform: translate(3px, 1px); }
    .depth-2 { transform: translate(6px, 2px); }
    .depth-3 { transform: translate(9px, 3px); }
    .depth-4 { transform: translate(12px, 4px); }
    .depth-5 { transform: translate(15px, 5px); }
    .depth-6 { transform: translate(18px, 6px); }
    .depth-7 { transform: translate(21px, 7px); }
    .depth-8 { transform: translate(24px, 8px); }
}
</style>
