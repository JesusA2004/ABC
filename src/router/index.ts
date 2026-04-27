import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '@/views/HomeView.vue'
import RegistroAgenciasView from '@/views/RegistroAgenciasView.vue'

const router = createRouter({
	history: createWebHistory(import.meta.env.BASE_URL),
	routes: [
		{
			path: '/',
			name: 'home',
			component: HomeView,
		},
		{
			path: '/registro-agencias',
			name: 'registro-agencias',
			component: RegistroAgenciasView,
		},
	],
})

export default router
