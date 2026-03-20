<script setup lang="ts">
    // Importamos todos los componentes de secciones
    import MainLayout from '@/layouts/MainLayout.vue'
    import HeroSection from '@/components/sections/HeroSection.vue'
    import AboutSection from '@/components/sections/AboutSection.vue'
    import FeaturesSection from '@/components/sections/FeaturesSection.vue'
    import ApiSection from '@/components/sections/ApiSection.vue'
    import ContactSection from '@/components/sections/ContactSection.vue'
</script>

<template>
    <MainLayout>
        <HeroSection />
        <AboutSection />
        <FeaturesSection />
        <ApiSection />
        <ContactSection />
    </MainLayout>
</template>
