<script setup lang="ts">
import { reactive, ref } from 'vue'
import Swal from 'sweetalert2'
import contactoTitle from '@/assets/contacto.png'
import puntosImg from '@/assets/puntos.png'

const contactInfo = [
  {
    title: 'Teléfono',
    value: '+52 777 157 5437',
  },
  {
    title: 'Correo',
    value: 'atencion@abctravelling.com',
  },
  {
    title: 'Dirección',
    value: 'Subida al Club 114 zona 1, Reforma\n62260 Cuernavaca, Mor.',
  },
  {
    title: 'Horario',
    value: 'Lunes a Viernes: 9:00 a.m. - 18:00 p.m.',
  },
]

const form = reactive({
  nombre: '',
  correo: '',
  empresa: '',
  mensaje: '',
})

const loading = ref(false)

const isValidEmail = (email: string) => {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
}

const resetForm = () => {
  form.nombre = ''
  form.correo = ''
  form.empresa = ''
  form.mensaje = ''
}

const submitForm = async () => {
  if (!form.nombre.trim() || !form.correo.trim() || !form.empresa.trim() || !form.mensaje.trim()) {
    await Swal.fire({
      icon: 'warning',
      title: 'Campos incompletos',
      text: 'Por favor completa todos los campos antes de enviar.',
      confirmButtonText: 'Entendido',
      background: '#000814',
      color: '#ffffff',
      confirmButtonColor: '#1f7bff',
    })
    return
  }

  if (!isValidEmail(form.correo)) {
    await Swal.fire({
      icon: 'error',
      title: 'Correo inválido',
      text: 'Escribe un correo electrónico válido.',
      confirmButtonText: 'Corregir',
      background: '#000814',
      color: '#ffffff',
      confirmButtonColor: '#1f7bff',
    })
    return
  }

  loading.value = true

  Swal.fire({
    title: 'Enviando...',
    text: 'Espera un momento mientras procesamos tu mensaje.',
    allowOutsideClick: false,
    allowEscapeKey: false,
    showConfirmButton: false,
    background: '#000814',
    color: '#ffffff',
    didOpen: () => {
      Swal.showLoading()
    },
  })

  try {
    // Simulación temporal.
    // Después aquí conectamos axios/fetch al backend.
    await new Promise((resolve) => setTimeout(resolve, 1800))

    Swal.close()

    await Swal.fire({
      icon: 'success',
      title: 'Mensaje enviado',
      text: 'Tu mensaje se envió correctamente. Pronto nos pondremos en contacto contigo.',
      confirmButtonText: 'Aceptar',
      background: '#000814',
      color: '#ffffff',
      confirmButtonColor: '#1f7bff',
    })

    resetForm()
  } catch {
    Swal.close()

    await Swal.fire({
      icon: 'error',
      title: 'Error al enviar',
      text: 'Ocurrió un problema al enviar el mensaje. Inténtalo de nuevo.',
      confirmButtonText: 'Reintentar',
      background: '#000814',
      color: '#ffffff',
      confirmButtonColor: '#1f7bff',
    })
  } finally {
    loading.value = false
  }
}
</script>

<template>
  <section
    id="contacto"
    class="relative overflow-hidden border-y border-cyan-300/20 bg-[#000814] px-4 py-10 sm:px-6 sm:py-12 lg:px-8 lg:py-14"
  >
    <!-- fondo -->
    <div class="absolute inset-0 bg-[#000814]" />
    <div
      class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(0,120,255,0.10),transparent_34%),radial-gradient(circle_at_bottom_right,rgba(0,120,255,0.08),transparent_26%)]"
    />

    <!-- líneas -->
    <div
      class="pointer-events-none absolute inset-x-0 top-0 h-px bg-[linear-gradient(90deg,rgba(0,180,255,0)_0%,rgba(0,180,255,0.35)_26%,rgba(0,180,255,0.85)_50%,rgba(255,191,73,0.35)_78%,rgba(255,191,73,0)_100%)]"
    />
    <div class="pointer-events-none absolute inset-x-0 bottom-0 h-px bg-white/18" />

    <!-- puntitos -->
    <div class="pointer-events-none absolute left-0 top-0 z-0">
      <img
        :src="puntosImg"
        alt=""
        aria-hidden="true"
        class="w-[170px] opacity-100 mix-blend-screen [filter:brightness(0)_saturate(100%)_invert(50%)_sepia(100%)_saturate(5000%)_hue-rotate(191deg)_brightness(120%)_contrast(110%)] sm:w-[210px] lg:w-[240px]"
      />
    </div>

    <div class="pointer-events-none absolute bottom-0 left-0 z-0">
      <img
        :src="puntosImg"
        alt=""
        aria-hidden="true"
        class="w-[130px] opacity-100 mix-blend-screen [filter:brightness(0)_saturate(100%)_invert(50%)_sepia(100%)_saturate(5000%)_hue-rotate(191deg)_brightness(120%)_contrast(110%)] sm:w-[160px] lg:w-[180px]"
      />
    </div>

    <div class="pointer-events-none absolute right-0 top-0 z-0">
      <img
        :src="puntosImg"
        alt=""
        aria-hidden="true"
        class="w-[120px] rotate-180 opacity-100 mix-blend-screen [filter:brightness(0)_saturate(100%)_invert(50%)_sepia(100%)_saturate(5000%)_hue-rotate(191deg)_brightness(120%)_contrast(110%)] sm:w-[150px] lg:w-[170px]"
      />
    </div>

    <div class="relative mx-auto max-w-[1260px]">
      <!-- título -->
      <div class="flex justify-center">
        <img
          :src="contactoTitle"
          alt="Contacto"
          class="w-full max-w-[360px] object-contain sm:max-w-[430px] lg:max-w-[500px]"
        />
      </div>

      <!-- contenido -->
      <div
        class="mx-auto mt-10 grid max-w-[1120px] gap-7 lg:grid-cols-[220px_minmax(0,1fr)] lg:items-start lg:gap-9"
      >
        <!-- izquierda -->
        <div class="grid gap-3">
          <article
            v-for="item in contactInfo"
            :key="item.title"
            class="relative overflow-hidden rounded-[20px] border border-white/80 bg-[linear-gradient(180deg,rgba(6,18,37,0.98)_0%,rgba(2,10,24,0.98)_100%)] px-4 py-3 shadow-[inset_0_0_24px_rgba(20,90,180,0.06)]"
          >
            <div
              class="pointer-events-none absolute right-[-10px] top-[-10px] h-[54px] w-[54px] rounded-full bg-[radial-gradient(circle,rgba(46,144,255,0.55),rgba(46,144,255,0)_68%)] blur-[6px]"
            />
            <div
              class="pointer-events-none absolute bottom-[-2px] left-1/2 h-[9px] w-[62%] -translate-x-1/2 rounded-full bg-[#2495ff] blur-[7px]"
            />

            <h3 class="text-[18px] font-extrabold leading-none tracking-[-0.02em] text-white">
              {{ item.title }}
            </h3>

            <p class="mt-2 whitespace-pre-line text-[11px] leading-[1.35] text-white/88">
              {{ item.value }}
            </p>
          </article>
        </div>

        <!-- derecha -->
        <div
          class="relative overflow-hidden rounded-[24px] border border-white/80 bg-[linear-gradient(180deg,rgba(6,18,37,0.98)_0%,rgba(2,10,24,0.98)_100%)] px-5 py-5 shadow-[inset_0_0_28px_rgba(20,90,180,0.06)] sm:px-6 sm:py-6 lg:px-6 lg:py-6"
        >
          <form class="grid gap-5" @submit.prevent="submitForm">
            <div class="grid gap-4 md:grid-cols-2">
              <div>
                <label for="nombre" class="mb-2 block text-[14px] font-semibold text-white">
                  Nombre
                </label>
                <input
                  id="nombre"
                  v-model="form.nombre"
                  type="text"
                  class="h-[42px] w-full rounded-[10px] border border-white/30 bg-[#021224] px-4 text-[14px] text-white outline-none placeholder:text-white/20 focus:border-[#2c8fff] focus:ring-0"
                />
              </div>

              <div>
                <label for="correo" class="mb-2 block text-[14px] font-semibold text-white">
                  Correo
                </label>
                <input
                  id="correo"
                  v-model="form.correo"
                  type="email"
                  class="h-[42px] w-full rounded-[10px] border border-white/30 bg-[#021224] px-4 text-[14px] text-white outline-none placeholder:text-white/20 focus:border-[#2c8fff] focus:ring-0"
                />
              </div>
            </div>

            <div>
              <label for="empresa" class="mb-2 block text-[14px] font-semibold text-white">
                Empresa
              </label>
              <input
                id="empresa"
                v-model="form.empresa"
                type="text"
                class="h-[42px] w-full rounded-[10px] border border-white/30 bg-[#021224] px-4 text-[14px] text-white outline-none placeholder:text-white/20 focus:border-[#2c8fff] focus:ring-0"
              />
            </div>

            <div>
              <label for="mensaje" class="mb-2 block text-[14px] font-semibold text-white">
                Mensaje
              </label>
              <textarea
                id="mensaje"
                v-model="form.mensaje"
                rows="5"
                class="min-h-[150px] w-full resize-none rounded-[12px] border border-white/30 bg-[#021224] px-4 py-3 text-[14px] text-white outline-none placeholder:text-white/20 focus:border-[#2c8fff] focus:ring-0"
              />
            </div>

            <div class="flex justify-end pt-1">
              <button
                type="submit"
                :disabled="loading"
                class="inline-flex min-w-[170px] items-center justify-center rounded-full border border-cyan-300/55 bg-[linear-gradient(180deg,rgba(36,149,255,0.22)_0%,rgba(10,56,120,0.24)_100%)] px-6 py-3 text-[14px] font-bold tracking-[0.02em] text-white shadow-[0_0_18px_rgba(36,149,255,0.24)] transition duration-200 hover:scale-[1.02] hover:border-cyan-300/80 hover:shadow-[0_0_24px_rgba(36,149,255,0.34)] disabled:cursor-not-allowed disabled:opacity-70"
              >
                <svg
                  v-if="loading"
                  class="mr-2 h-4 w-4 animate-spin"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <circle
                    class="opacity-25"
                    cx="12"
                    cy="12"
                    r="10"
                    stroke="currentColor"
                    stroke-width="4"
                  />
                  <path
                    class="opacity-75"
                    fill="currentColor"
                    d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"
                  />
                </svg>

                {{ loading ? 'Enviando...' : 'Enviar mensaje' }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>
