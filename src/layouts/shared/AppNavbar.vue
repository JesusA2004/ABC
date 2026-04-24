<script setup lang="ts">
import { ref } from 'vue'
import logoImg from '@/assets/LOGO.png'

const isOpen = ref(false)

const links = [
	{ label: 'Nosotros', href: '#nosotros' },
	{ label: 'Servicios', href: '#servicios' },
	{ label: 'API', href: '#api' },
	{ label: 'Contacto', href: '#contacto' },
]
</script>

<template>
	<header class="sticky top-0 z-50 w-full">
		<div class="relative bg-black">
			<!-- fondo oscuro azuloso -->
			<div
				class="absolute inset-0 bg-[linear-gradient(180deg,#020202_0%,#02040a_35%,#020714_100%)]"
			/>

			<!-- brillo sutil del navbar -->
			<div
				class="pointer-events-none absolute inset-x-0 bottom-0 h-[2px] bg-[linear-gradient(90deg,rgba(0,70,255,0)_0%,rgba(25,95,255,0.75)_18%,rgba(40,120,255,1)_50%,rgba(25,95,255,0.75)_82%,rgba(0,70,255,0)_100%)] shadow-[0_0_16px_rgba(37,99,235,0.9)]"
			/>

			<div
				class="relative mx-auto flex h-[78px] max-w-[1720px] items-center justify-between px-6 sm:px-10 lg:h-[92px] lg:px-14 xl:px-20"
			>
				<!-- logo -->
				<a href="#inicio" class="flex shrink-0 items-center">
					<img
						:src="logoImg"
						alt="ABC Travelling"
						class="h-[48px] w-auto object-contain sm:h-[56px] lg:h-[70px] xl:h-[78px]"
					/>
				</a>

				<!-- nav desktop -->
				<nav class="hidden items-center gap-12 lg:flex xl:gap-16">
					<a
						v-for="link in links"
						:key="link.label"
						:href="link.href"
						class="text-[18px] font-medium tracking-[0.01em] text-white transition duration-200 hover:text-white/80"
					>
						{{ link.label }}
					</a>
				</nav>

				<!-- botón desktop -->
				<div class="hidden lg:flex">
					<a
						href="#contacto"
						class="relative inline-flex items-center justify-center rounded-full border-2 border-[#b97825] bg-transparent px-8 py-2.5 text-[18px] font-semibold text-white shadow-[0_0_10px_rgba(255,174,55,0.45),inset_0_0_8px_rgba(255,174,55,0.18)] transition duration-200 hover:scale-[1.02] hover:border-[#f0a83a] hover:shadow-[0_0_16px_rgba(255,174,55,0.65),inset_0_0_10px_rgba(255,174,55,0.24)]"
					>
						<!-- brillo superior -->
						<span
							class="pointer-events-none absolute left-[18px] top-[-2px] h-[3px] w-[64px] rounded-full bg-[linear-gradient(90deg,rgba(255,183,56,0)_0%,rgba(255,211,121,1)_50%,rgba(255,183,56,0)_100%)] blur-[1px]"
						/>

						<!-- brillo inferior -->
						<span
							class="pointer-events-none absolute right-[22px] bottom-[-2px] h-[3px] w-[78px] rounded-full bg-[linear-gradient(90deg,rgba(255,183,56,0)_0%,rgba(255,211,121,1)_50%,rgba(255,183,56,0)_100%)] blur-[1px]"
						/>

						<span class="relative z-10">Acceso a Agencias</span>
					</a>
				</div>

				<!-- botón mobile -->
				<button
					type="button"
					class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/15 bg-white/5 text-white lg:hidden"
					@click="isOpen = !isOpen"
				>
					<svg
						xmlns="http://www.w3.org/2000/svg"
						class="h-6 w-6"
						fill="none"
						viewBox="0 0 24 24"
						stroke="currentColor"
						stroke-width="2"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M4 6h16M4 12h16M4 18h16"
						/>
					</svg>
				</button>
			</div>
		</div>

		<!-- menú mobile -->
		<Transition name="mobile-menu">
			<div
				v-if="isOpen"
				class="border-t border-white/10 border-b border-blue-500/30 bg-[#03050c] px-5 py-5 lg:hidden"
			>
				<nav class="flex flex-col gap-2">
					<a
						v-for="link in links"
						:key="link.label"
						:href="link.href"
						class="rounded-xl px-3 py-3 text-base font-medium text-white/90 transition hover:bg-white/5"
						@click="isOpen = false"
					>
						{{ link.label }}
					</a>

					<a
						href="#contacto"
						class="mt-3 inline-flex items-center justify-center rounded-full border border-[#9a6720] px-6 py-3 text-base font-semibold text-white"
						@click="isOpen = false"
					>
						Acceso a Agencias
					</a>
				</nav>
			</div>
		</Transition>
	</header>
</template>

<style scoped>
.mobile-menu-enter-active,
.mobile-menu-leave-active {
	transition: all 0.22s ease;
}
.mobile-menu-enter-from,
.mobile-menu-leave-to {
	opacity: 0;
	transform: translateY(-8px);
}
</style>
