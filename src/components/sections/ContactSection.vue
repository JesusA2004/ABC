<script setup lang="ts">
import { computed, reactive } from 'vue'
import SectionTitle from '@/components/ui/SectionTitle.vue'
import GlassCard from '@/components/ui/GlassCard.vue'
import GlowButton from '@/components/ui/GlowButton.vue'
import ContactInfoCard from '@/components/cards/ContactInfoCard.vue'

const form = reactive({
  name: '',
  email: '',
  company: '',
  message: '',
})

const isValid = computed(() => {
  return (
    form.name.trim().length > 0 &&
    form.email.trim().length > 0 &&
    form.message.trim().length > 0
  )
})

function handleSubmit() {
  if (!isValid.value) return

  alert(
    `Formulario demo enviado:\n\nNombre: ${form.name}\nCorreo: ${form.email}\nEmpresa: ${form.company}\nMensaje: ${form.message}`,
  )
}
</script>

<template>
  <section id="contacto" class="px-4 py-12 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-7xl">
      <SectionTitle
        eyebrow="Contacto"
        title="Formulario con v-model, validación simple y estado reactivo"
        description="Aquí ya empezamos a exprimir Vue de forma práctica. No hay backend, pero sí experiencia interactiva: inputs reactivos, estado de botón y estructura lista para conectar después."
      />

      <div class="mt-8 grid gap-6 lg:grid-cols-[0.8fr_1.2fr]">
        <div class="space-y-4">
          <ContactInfoCard title="Teléfono" value="+52 777 000 0000" icon="📞" />
          <ContactInfoCard title="Correo" value="contacto@tuempresa.com" icon="✉️" />
          <ContactInfoCard title="Ubicación" value="Cuernavaca, Morelos" icon="📍" />
          <ContactInfoCard title="Horario" value="Lunes a viernes · 9:00 a.m. a 6:00 p.m." icon="🕒" />
        </div>

        <GlassCard glow="cyan">
          <form class="space-y-4" @submit.prevent="handleSubmit">
            <div class="grid gap-4 md:grid-cols-2">
              <div>
                <label class="mb-2 block text-sm text-slate-300">Nombre</label>
                <input
                  v-model="form.name"
                  type="text"
                  placeholder="Tu nombre"
                  class="w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-white outline-none transition placeholder:text-slate-500 focus:border-cyan-400/40 focus:bg-cyan-400/5"
                />
              </div>

              <div>
                <label class="mb-2 block text-sm text-slate-300">Correo</label>
                <input
                  v-model="form.email"
                  type="email"
                  placeholder="tu@correo.com"
                  class="w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-white outline-none transition placeholder:text-slate-500 focus:border-cyan-400/40 focus:bg-cyan-400/5"
                />
              </div>
            </div>

            <div>
              <label class="mb-2 block text-sm text-slate-300">Empresa</label>
              <input
                v-model="form.company"
                type="text"
                placeholder="Nombre de tu empresa"
                class="w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-white outline-none transition placeholder:text-slate-500 focus:border-fuchsia-400/40 focus:bg-fuchsia-400/5"
              />
            </div>

            <div>
              <label class="mb-2 block text-sm text-slate-300">Mensaje</label>
              <textarea
                v-model="form.message"
                rows="5"
                placeholder="Cuéntanos qué necesitas"
                class="w-full resize-none rounded-2xl border border-white/10 bg-white/5 px-4 py-3 text-white outline-none transition placeholder:text-slate-500 focus:border-violet-400/40 focus:bg-violet-400/5"
              />
            </div>

            <div class="flex flex-wrap items-center justify-between gap-4">
              <p class="text-sm" :class="isValid ? 'text-cyan-300' : 'text-slate-500'">
                {{ isValid ? 'Formulario listo para enviar' : 'Completa nombre, correo y mensaje' }}
              </p>

              <GlowButton
                label="Enviar mensaje"
                :disabled="!isValid"
              />
            </div>
          </form>
        </GlassCard>
      </div>
    </div>
  </section>
</template>
