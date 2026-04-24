<script setup lang="ts">
import bannerImg from '@/assets/banner.png'
</script>

<template>
	<section id="inicio" class="p-0">
		<div class="relative w-full overflow-hidden bg-black">
			<!-- imagen -->
			<img
				:src="bannerImg"
				alt="ABC Travelling banner"
				class="h-[420px] w-full object-cover object-center sm:h-[520px] md:h-[620px] lg:h-[710px] xl:h-[760px]"
			/>

			<!-- overlays -->
			<div
				class="absolute inset-0 bg-[linear-gradient(180deg,rgba(0,0,0,0.06)_0%,rgba(0,0,0,0.08)_22%,rgba(0,0,0,0.14)_45%,rgba(0,0,0,0.22)_70%,rgba(0,0,0,0.28)_100%)]"
			/>
			<div
				class="absolute inset-0 bg-[linear-gradient(90deg,rgba(0,0,0,0.08)_0%,rgba(0,0,0,0.03)_24%,rgba(0,0,0,0)_50%,rgba(0,0,0,0.06)_78%,rgba(0,0,0,0.12)_100%)]"
			/>
			<div
				class="absolute inset-x-0 top-0 h-[2px] bg-[linear-gradient(90deg,rgba(0,90,255,0)_0%,rgba(35,110,255,0.75)_18%,rgba(49,114,255,1)_50%,rgba(35,110,255,0.75)_82%,rgba(0,90,255,0)_100%)] shadow-[0_0_14px_rgba(37,99,235,0.95)]"
			/>

			<!-- texto centrado -->
			<div class="absolute inset-0 flex items-center justify-center">
				<div class="mx-auto flex w-full max-w-[1400px] justify-center px-6 text-center">
					<div class="max-w-[1280px]">
						<h1
							class="text-[42px] font-black leading-none tracking-[-0.03em] text-white drop-shadow-[0_4px_7px_rgba(0,0,0,0.75)] [text-shadow:0_2px_3px_rgba(0,0,0,0.85),0_6px_14px_rgba(0,0,0,0.65)] sm:text-[56px] md:text-[72px] lg:text-[84px] xl:text-[92px]"
						>
							ABC Travelling
						</h1>

						<p
							class="mt-3 text-[24px] font-semibold leading-tight text-white drop-shadow-[0_4px_7px_rgba(0,0,0,0.75)] [text-shadow:0_2px_3px_rgba(0,0,0,0.85),0_6px_14px_rgba(0,0,0,0.65)] sm:text-[30px] md:text-[38px] lg:whitespace-nowrap lg:text-[44px] xl:text-[50px]"
						>
							¡Impulsamos tu negocio, potenciamos tus ventas!
						</p>

						<p
							class="mt-8 max-w-[980px] text-[18px] font-light leading-snug text-white/95 drop-shadow-[0_4px_7px_rgba(0,0,0,0.72)] [text-shadow:0_2px_3px_rgba(0,0,0,0.78),0_6px_14px_rgba(0,0,0,0.58)] sm:text-[22px] md:text-[28px] lg:whitespace-nowrap lg:text-[30px] xl:text-[34px]"
						>
							Accede a un Motor de Reservas totalmente gratuito
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>
