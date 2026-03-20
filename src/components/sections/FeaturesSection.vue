<script setup lang="ts">
    import { ref } from 'vue'
    import SectionTitle from '@/components/ui/SectionTitle.vue'
    import FeatureCard from '@/components/cards/FeatureCard.vue'

    const activeCategory = ref<'servicios' | 'operacion' | 'diseno'>('servicios')

    const featureGroups = {
    servicios: [
        {
        title: 'Amplio inventario global',
        description: 'Cards para catálogo, módulos o servicios principales.',
        icon: '🌐',
        },
        {
        title: 'Confirmación inmediata',
        description: 'Bloques visuales que refuerzan rapidez y confianza.',
        icon: '⚡',
        },
        {
        title: 'Tarifas competitivas',
        description: 'Espacios listos para resaltar beneficios y diferenciadores.',
        icon: '📈',
        },
        {
        title: 'Plataforma fácil de usar',
        description: 'Diseño claro con jerarquía visual y navegación limpia.',
        icon: '🖥️',
        },
        {
        title: 'Disponibilidad en tiempo real',
        description: 'Elementos interactivos que simulan estados y actividad.',
        icon: '🕒',
        },
        {
        title: 'Múltiples proveedores',
        description: 'Layout ideal para mostrar conectividad y ecosistema.',
        icon: '🔗',
        },
    ],
    operacion: [
        {
        title: 'Módulos por sección',
        description: 'La estructura permite crecer sin rehacer toda la página.',
        icon: '🧩',
        },
        {
        title: 'Cards reutilizables',
        description: 'Botones, paneles y bloques se reutilizan en toda la UI.',
        icon: '🪄',
        },
        {
        title: 'Frontend desacoplado',
        description: 'Puedes conectar backend después sin rehacer la vista.',
        icon: '🔌',
        },
    ],
    diseno: [
        {
        title: 'Glassmorphism oscuro',
        description: 'Contenedores con blur, bordes suaves y fondo premium.',
        icon: '💎',
        },
        {
        title: 'Glow neón',
        description: 'Acentos cyan y fuchsia para un look tecnológico.',
        icon: '✨',
        },
        {
        title: 'Transiciones suaves',
        description: 'Hover, focus, reveal y cambios visuales agradables.',
        icon: '🎞️',
        },
    ],
    }
</script>

<template>
    <section id="servicios" class="px-4 py-12 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
        <SectionTitle
            eyebrow="¿Qué ofrecemos?"
            title="Secciones reutilizables para mostrar beneficios, módulos y ventajas"
            description="Aquí usaremos v-for, estados reactivos y cambio de categorías con Vue para que tu interfaz no solo se vea bien, sino que también se sienta viva."
        />

        <div class="mt-8 flex flex-wrap gap-3">
            <button
            type="button"
            class="rounded-full border px-4 py-2 text-sm transition"
            :class="
                activeCategory === 'servicios'
                ? 'border-cyan-400/40 bg-cyan-400/10 text-cyan-200'
                : 'border-white/10 text-slate-300 hover:border-cyan-400/30 hover:text-white'
            "
            @click="activeCategory = 'servicios'"
            >
            Servicios
            </button>

            <button
            type="button"
            class="rounded-full border px-4 py-2 text-sm transition"
            :class="
                activeCategory === 'operacion'
                ? 'border-fuchsia-400/40 bg-fuchsia-400/10 text-fuchsia-200'
                : 'border-white/10 text-slate-300 hover:border-fuchsia-400/30 hover:text-white'
            "
            @click="activeCategory = 'operacion'"
            >
            Operación
            </button>

            <button
            type="button"
            class="rounded-full border px-4 py-2 text-sm transition"
            :class="
                activeCategory === 'diseno'
                ? 'border-violet-400/40 bg-violet-400/10 text-violet-200'
                : 'border-white/10 text-slate-300 hover:border-violet-400/30 hover:text-white'
            "
            @click="activeCategory = 'diseno'"
            >
            Diseño
            </button>
        </div>

        <TransitionGroup
            name="feature-list"
            tag="div"
            class="mt-8 grid gap-4 md:grid-cols-2 xl:grid-cols-3"
        >
            <FeatureCard
            v-for="item in featureGroups[activeCategory]"
            :key="`${activeCategory}-${item.title}`"
            :title="item.title"
            :description="item.description"
            :icon="item.icon"
            />
        </TransitionGroup>
        </div>
    </section>
</template>

<style scoped>
.feature-list-enter-active,
.feature-list-leave-active {
  transition: all 0.35s ease;
}
.feature-list-enter-from,
.feature-list-leave-to {
  opacity: 0;
  transform: translateY(12px);
}
</style>
