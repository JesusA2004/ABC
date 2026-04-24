<script setup lang="ts">
import apiImg from '@/assets/api.png'
</script>

<template>
	<section id="api" class="api-section">
		<div class="api-bg-base" />
		<div class="api-bg-overlay" />
		<div class="api-top-line" />
		<div class="api-bottom-line" />

		<div class="api-container">
			<!-- izquierda -->
			<div class="api-copy">
				<h2 class="api-title">
					<span class="api-title-line">API DE INTEGRACIÓN</span>
					<span class="api-title-line">PARA PLATAFORMAS</span>
					<span class="api-title-line api-title-large">DE VIAJES</span>
				</h2>

				<div class="api-text">
					<p>
						Integra el inventario global de ABC Travelling directamente en tu plataforma
						mediante nuestra API diseñada para desarrolladores y empresas del sector
						turístico.
					</p>

					<p>
						Nuestra API permite a agencias de viajes online, OTAs y plataformas
						tecnológicas acceder al inventario hotelero de ABC Travelling en tiempo
						real.
					</p>
				</div>
			</div>

			<!-- derecha -->
			<div class="api-visual">
				<div class="api-visual-wrap">
					<div class="api-visual-glow" />
					<img :src="apiImg" alt="API de integración" class="api-image" />
				</div>
			</div>
		</div>
	</section>
</template>

<style scoped>
.api-section {
	position: relative;
	overflow: hidden;
	background: #000814;
	border-top: 1px solid rgba(34, 211, 238, 0.18);
	border-bottom: 1px solid rgba(34, 211, 238, 0.18);
}

.api-bg-base {
	position: absolute;
	inset: 0;
	background: #000814;
}

.api-bg-overlay {
	position: absolute;
	inset: 0;
	background:
		radial-gradient(
			circle at 0% 100%,
			rgba(255, 255, 255, 0.18) 0%,
			rgba(180, 220, 255, 0.14) 10%,
			rgba(78, 141, 214, 0.16) 22%,
			rgba(15, 54, 100, 0.14) 34%,
			rgba(0, 8, 20, 0) 48%
		),
		linear-gradient(
			112deg,
			rgba(20, 49, 84, 0.58) 0%,
			rgba(7, 22, 44, 0.34) 22%,
			rgba(0, 8, 20, 0.08) 45%,
			rgba(8, 24, 44, 0.16) 70%,
			rgba(20, 54, 90, 0.26) 100%
		),
		radial-gradient(circle at 92% 12%, rgba(41, 126, 215, 0.11), transparent 28%);
}

.api-top-line {
	position: absolute;
	inset-inline: 0;
	top: 0;
	height: 2px;
	background: linear-gradient(
		90deg,
		rgba(0, 150, 255, 0) 0%,
		rgba(0, 122, 255, 0.42) 22%,
		rgba(0, 182, 255, 1) 50%,
		rgba(255, 191, 73, 0.56) 78%,
		rgba(255, 191, 73, 0) 100%
	);
	box-shadow: 0 0 16px rgba(0, 162, 255, 0.36);
}

.api-bottom-line {
	position: absolute;
	inset-inline: 0;
	bottom: 0;
	height: 1px;
	background: linear-gradient(
		90deg,
		rgba(255, 255, 255, 0),
		rgba(255, 255, 255, 0.14),
		rgba(255, 255, 255, 0)
	);
}

/* layout */
.api-container {
	position: relative;
	z-index: 2;
	width: min(100%, 1600px);
	min-height: 720px;
	margin: 0 auto;
	padding: 48px 48px;
	display: grid;
	grid-template-columns: minmax(0, 0.94fr) minmax(0, 1.06fr);
	align-items: center;
	gap: 12px;
}

.api-copy {
	width: 100%;
	max-width: 720px;
	align-self: center;
	justify-self: start;
	margin-left: 0;
}

.api-title {
	margin: 0;
	color: #ffffff;
	font-weight: 900;
	text-transform: uppercase;
	letter-spacing: -0.055em;
	line-height: 0.9;
	text-align: left;
}

.api-title-line {
	display: block;
	white-space: nowrap;
	font-size: clamp(44px, 4.15vw, 78px);
}

.api-title-large {
	font-size: clamp(64px, 5.35vw, 106px);
	line-height: 0.84;
}

.api-text {
	max-width: 720px;
	margin-top: 76px;
	margin-left: 0;
	color: rgba(255, 255, 255, 0.96);
	font-size: clamp(20px, 1.5vw, 27px);
	font-weight: 400;
	line-height: 1.46;
	letter-spacing: -0.012em;
}

.api-text p {
	margin: 0;
	text-align: justify;
	text-justify: inter-word;
}

.api-text p + p {
	margin-top: 28px;
}

/* visual */
.api-visual {
	display: flex;
	justify-content: flex-end;
	align-items: center;
	min-width: 0;
}

.api-visual-wrap {
	position: relative;
	width: min(100%, 760px);
	height: 620px;
	display: flex;
	align-items: center;
	justify-content: center;
	overflow: hidden;
}

.api-visual-glow {
	position: absolute;
	inset: 10% 8% 10% 8%;
	background:
		radial-gradient(circle at 56% 42%, rgba(0, 253, 253, 0.18), transparent 14%),
		radial-gradient(circle at 56% 42%, rgba(4, 104, 255, 0.2), transparent 26%),
		radial-gradient(circle at 56% 42%, rgba(255, 255, 255, 0.06), transparent 10%);
	filter: blur(24px);
	pointer-events: none;
}

.api-image {
	position: relative;
	z-index: 2;
	width: auto;
	height: 100%;
	max-width: none;
	object-fit: contain;
	opacity: 1;
	transform: translateX(55px);
	transform-origin: center center;

	/*
		Difuminado del PNG:
		- mantiene el centro fuerte
		- desaparece suavemente hacia orillas
		- evita que se vea el cuadro/corte de la imagen
	*/
	-webkit-mask-image: radial-gradient(
		ellipse at center,
		rgba(0, 0, 0, 1) 0%,
		rgba(0, 0, 0, 1) 54%,
		rgba(0, 0, 0, 0.92) 66%,
		rgba(0, 0, 0, 0.52) 78%,
		rgba(0, 0, 0, 0.18) 90%,
		rgba(0, 0, 0, 0.04) 96%,
		transparent 100%
	);
	mask-image: radial-gradient(
		ellipse at center,
		rgba(0, 0, 0, 1) 0%,
		rgba(0, 0, 0, 1) 54%,
		rgba(0, 0, 0, 0.92) 66%,
		rgba(0, 0, 0, 0.52) 78%,
		rgba(0, 0, 0, 0.18) 90%,
		rgba(0, 0, 0, 0.04) 96%,
		transparent 100%
	);

	filter: hue-rotate(6deg) saturate(2.05) contrast(1.24) brightness(1.08)
		drop-shadow(0 0 3px rgba(255, 255, 255, 0.18)) drop-shadow(0 0 10px rgba(0, 170, 255, 0.3))
		drop-shadow(0 0 24px rgba(4, 104, 255, 0.26));
}

/* desktop grande */
@media (min-width: 1400px) {
	.api-container {
		padding: 52px 68px;
		grid-template-columns: minmax(0, 0.95fr) minmax(0, 1.05fr);
	}

	.api-visual {
		transform: translateX(160px);
	}

	.api-copy {
		max-width: 820px;
	}

	.api-title-line {
		font-size: 72px;
	}

	.api-title-large {
		font-size: 102px;
	}

	.api-text {
		max-width: 760px;
		font-size: 25px;
		margin-top: 86px;
		line-height: 1.46;
	}

	.api-visual-wrap {
		width: min(100%, 790px);
		height: 640px;
	}

	.api-image {
		width: auto;
		height: 100%;
		transform: translateX(65px);
	}
}

@media (max-width: 1280px) {
	.api-container {
		min-height: 620px;
		padding: 42px 34px 44px;
		grid-template-columns: minmax(0, 0.96fr) minmax(0, 1.04fr);
		gap: 18px;
	}

	.api-title-line {
		font-size: clamp(40px, 4.45vw, 62px);
	}

	.api-title-large {
		font-size: clamp(56px, 5.7vw, 84px);
	}

	.api-text {
		max-width: 590px;
		margin-top: 54px;
		font-size: 18.5px;
	}

	.api-visual-wrap {
		width: min(100%, 640px);
		height: 520px;
	}

	.api-image {
		width: auto;
		height: 100%;
		transform: translateX(38px);
	}
}

@media (max-width: 1024px) {
	.api-container {
		min-height: auto;
		padding: 50px 24px 58px;
		grid-template-columns: 1fr;
		gap: 34px;
	}

	.api-copy {
		max-width: 760px;
		margin: 0 auto;
		padding-top: 0;
	}

	.api-title-line {
		white-space: normal;
		font-size: clamp(38px, 8vw, 64px);
	}

	.api-title-large {
		font-size: clamp(52px, 10vw, 82px);
	}

	.api-text {
		max-width: 100%;
		margin-top: 30px;
		font-size: 18px;
	}

	.api-visual {
		justify-content: center;
		transform: none;
	}

	.api-visual-wrap {
		width: min(100%, 680px);
		height: auto;
		overflow: visible;
	}

	.api-image {
		width: min(100%, 680px);
		height: auto;
		transform: none;
		-webkit-mask-image: none;
		mask-image: none;
	}
}

@media (max-width: 768px) {
	.api-container {
		padding: 44px 18px 54px;
	}

	.api-title-line {
		font-size: clamp(32px, 10vw, 52px);
	}

	.api-title-large {
		font-size: clamp(46px, 13vw, 72px);
	}

	.api-text {
		margin-top: 24px;
		font-size: 16px;
		line-height: 1.48;
	}

	.api-image {
		width: min(100%, 520px);
	}
}

@media (max-width: 520px) {
	.api-container {
		padding: 38px 14px 50px;
	}

	.api-title-line {
		font-size: clamp(28px, 10.5vw, 40px);
	}

	.api-title-large {
		font-size: clamp(38px, 13vw, 56px);
	}

	.api-text {
		font-size: 15px;
	}
}
</style>
