<script setup lang="ts">
    import AppNavbar from '@/layouts/shared/AppNavbar.vue'
    import AppFooter from '@/layouts/shared/AppFooter.vue'
</script>

<template>
    <div class="min-h-screen bg-slate-950 text-white">
        <div class="relative">
            <div class="absolute inset-0 bg-[linear-gradient(to_bottom,rgba(2,6,23,1),rgba(3,7,18,1))]" />
            <div class="absolute inset-0 opacity-40 [background-image:radial-gradient(circle_at_top,rgba(34,211,238,0.12),transparent_25%),radial-gradient(circle_at_bottom_right,rgba(217,70,239,0.10),transparent_22%)]" />

            <div class="relative">
                <AppNavbar />
                <main>
                <slot />
                </main>
                <AppFooter />
            </div>
        </div>
    </div>
</template>
