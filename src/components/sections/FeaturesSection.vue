<script setup lang="ts">
import ofrecemosTitle from '@/assets/ofrecemos.png'

import inventarioImg from '@/assets/inventario.png'
import confirmacionImg from '@/assets/confirmacion.png'
import plataformaImg from '@/assets/plataforma.png'
import tarifasImg from '@/assets/tarifas.png'
import disponibilidadImg from '@/assets/disponibilidad.png'

const features = [
	{
		title: 'Amplio inventario\nglobal',
		description:
			'Más de 2 millones de hoteles en más de 32,000 destinos, conectados a múltiples proveedores internacionales.',
		image: inventarioImg,
		alt: 'Amplio inventario global',
	},
	{
		title: 'Confirmación\nInmediata',
		description:
			'Realiza reservas con confirmación automática para brindar mayor seguridad a tus clientes.',
		image: confirmacionImg,
		alt: 'Confirmación inmediata',
	},
	{
		title: 'Plataforma fácil\nde usar',
		description:
			'Diseñada específicamente para agencias de viajes, con una interfaz clara y eficiente.',
		image: plataformaImg,
		alt: 'Plataforma fácil de usar',
	},
	{
		title: 'Tarifas\ncompetitivas',
		description:
			'Acceso a tarifas negociadas y consolidadas para maximizar la rentabilidad de tu agencia.',
		image: tarifasImg,
		alt: 'Tarifas competitivas',
	},
	{
		title: 'Disponibilidad en\ntiempo real',
		description:
			'Consulta tarifas y disponibilidad actualizadas directamente desde nuestra plataforma.',
		image: disponibilidadImg,
		alt: 'Disponibilidad en tiempo real',
	},
]

const topLeftStars = [
	{ top: '18px', left: '8px', size: '2px', glow: '12px', opacity: 0.95 },
	{ top: '30px', left: '42px', size: '4px', glow: '24px', opacity: 1 },
	{ top: '34px', left: '76px', size: '3px', glow: '16px', opacity: 0.98 },
	{ top: '52px', left: '22px', size: '2px', glow: '12px', opacity: 0.92 },
	{ top: '58px', left: '58px', size: '5px', glow: '28px', opacity: 1 },
	{ top: '74px', left: '92px', size: '3px', glow: '16px', opacity: 0.95 },
	{ top: '82px', left: '132px', size: '2px', glow: '12px', opacity: 0.92 },
	{ top: '96px', left: '44px', size: '3px', glow: '16px', opacity: 0.95 },
	{ top: '102px', left: '118px', size: '4px', glow: '24px', opacity: 1 },
	{ top: '118px', left: '162px', size: '2px', glow: '12px', opacity: 0.9 },
	{ top: '136px', left: '72px', size: '2px', glow: '12px', opacity: 0.9 },
	{ top: '150px', left: '146px', size: '3px', glow: '16px', opacity: 0.94 },
	{ top: '126px', left: '196px', size: '2px', glow: '12px', opacity: 0.9 },
	{ top: '62px', left: '188px', size: '2px', glow: '12px', opacity: 0.88 },
]

const bottomRightStars = [
	{ bottom: '188px', right: '40px', size: '4px', glow: '24px', opacity: 1 },
	{ bottom: '164px', right: '92px', size: '3px', glow: '16px', opacity: 0.98 },
	{ bottom: '138px', right: '148px', size: '2px', glow: '12px', opacity: 0.9 },
	{ bottom: '112px', right: '24px', size: '2px', glow: '12px', opacity: 0.9 },
	{ bottom: '98px', right: '112px', size: '3px', glow: '16px', opacity: 0.95 },
	{ bottom: '74px', right: '62px', size: '5px', glow: '30px', opacity: 1 },
	{ bottom: '54px', right: '172px', size: '2px', glow: '12px', opacity: 0.9 },
	{ bottom: '38px', right: '28px', size: '3px', glow: '16px', opacity: 0.95 },
	{ bottom: '24px', right: '98px', size: '4px', glow: '24px', opacity: 1 },
	{ bottom: '220px', right: '202px', size: '2px', glow: '12px', opacity: 0.88 },
	{ bottom: '260px', right: '156px', size: '3px', glow: '16px', opacity: 0.92 },
	{ bottom: '310px', right: '82px', size: '2px', glow: '12px', opacity: 0.86 },
	{ bottom: '350px', right: '38px', size: '3px', glow: '16px', opacity: 0.9 },
	{ bottom: '398px', right: '126px', size: '2px', glow: '12px', opacity: 0.88 },
]
</script>

<template>
	<section id="servicios" class="offers-section">
		<div class="offers-bg-base" />
		<div class="offers-bg-main-glow" />
		<div class="offers-bg-left-glow" />
		<div class="offers-bg-right-glow" />
		<div class="offers-top-line" />

		<!-- puntitos manuales izquierda -->
		<div class="stars-corner stars-corner-left" aria-hidden="true">
			<span
				v-for="(star, index) in topLeftStars"
				:key="`offers-left-${index}`"
				class="corner-star"
				:style="{
					top: star.top,
					left: star.left,
					width: star.size,
					height: star.size,
					opacity: star.opacity,
					'--star-glow': star.glow,
				}"
			/>
		</div>

		<!-- puntitos manuales derecha -->
		<div class="stars-corner stars-corner-right" aria-hidden="true">
			<span
				v-for="(star, index) in bottomRightStars"
				:key="`offers-right-${index}`"
				class="corner-star"
				:style="{
					bottom: star.bottom,
					right: star.right,
					width: star.size,
					height: star.size,
					opacity: star.opacity,
					'--star-glow': star.glow,
				}"
			/>
		</div>

		<div class="offers-container">
			<div class="offers-title-wrap">
				<img :src="ofrecemosTitle" alt="¿Qué ofrecemos?" class="offers-title-img" />
			</div>

			<div class="offers-grid">
				<article
					v-for="(item, index) in features"
					:key="item.title"
					:class="[
						'offer-card',
						index === 3 ? 'offer-card-four' : '',
						index === 4 ? 'offer-card-five' : '',
					]"
				>
					<div class="card-top-glow" />
					<div class="card-top-line" />
					<div class="card-inner-glow" />
					<div class="card-bottom-glow" />
					<div class="card-bottom-line" />

					<div class="offer-content">
						<div class="offer-icon-wrap">
							<img :src="item.image" :alt="item.alt" class="offer-icon" />
						</div>

						<h3 class="offer-title">
							{{ item.title }}
						</h3>

						<p class="offer-description">
							{{ item.description }}
						</p>
					</div>
				</article>
			</div>

			<div class="offers-final">
				<h3>
					<span>Empieza hoy a vender</span>
					<span>hoteles en todo el mundo</span>
				</h3>

				<p>
					Únete a ABC Travelling y ofrece a tus clientes miles de opciones de alojamiento
					con confirmación inmediata. Nuestra plataforma ofrece hoteles en destinos
					líderes del turismo internacional.
				</p>
			</div>
		</div>
	</section>
</template>

<style scoped>
.offers-section {
	position: relative;
	overflow: hidden;
	background: #000814;
	border-top: 1px solid rgba(34, 211, 238, 0.18);
	border-bottom: 1px solid rgba(34, 211, 238, 0.18);
}

.offers-bg-base {
	position: absolute;
	inset: 0;
	background: #000814;
}

.offers-bg-main-glow {
	position: absolute;
	inset: 0;
	background:
		radial-gradient(circle at 14% 18%, rgba(0, 110, 255, 0.08), transparent 18%),
		radial-gradient(circle at 74% 34%, rgba(0, 214, 255, 0.05), transparent 22%),
		linear-gradient(180deg, rgba(0, 8, 20, 0.985), rgba(0, 8, 20, 1));
}

.offers-bg-left-glow {
	position: absolute;
	left: -120px;
	top: 20px;
	width: 300px;
	height: 300px;
	border-radius: 999px;
	background: rgba(0, 98, 255, 0.06);
	filter: blur(110px);
}

.offers-bg-right-glow {
	position: absolute;
	right: 14%;
	top: 14%;
	width: 360px;
	height: 360px;
	border-radius: 999px;
	background: rgba(0, 214, 255, 0.045);
	filter: blur(120px);
}

.offers-top-line {
	position: absolute;
	inset-inline: 0;
	top: 0;
	height: 2px;
	background: linear-gradient(
		90deg,
		rgba(0, 150, 255, 0) 0%,
		rgba(0, 122, 255, 0.45) 22%,
		rgba(0, 182, 255, 1) 50%,
		rgba(255, 191, 73, 0.58) 78%,
		rgba(255, 191, 73, 0) 100%
	);
	box-shadow: 0 0 16px rgba(0, 162, 255, 0.42);
}

/* puntitos manuales */
.stars-corner {
	position: absolute;
	z-index: 1;
	pointer-events: none;
}

.stars-corner-left {
	top: 0;
	left: 0;
	width: 240px;
	height: 200px;
}

.stars-corner-right {
	right: 0;
	bottom: 0;
	width: 320px;
	height: 760px;
}

.corner-star {
	position: absolute;
	display: block;
	border-radius: 999px;
	background: radial-gradient(
		circle at center,
		#ffffff 0%,
		#c8f9ff 10%,
		#0468ff 34%,
		#004cff 66%,
		#002dba 100%
	);
	box-shadow:
		0 0 3px rgba(255, 255, 255, 1),
		0 0 8px rgba(4, 104, 255, 1),
		0 0 calc(var(--star-glow) * 0.85) rgba(4, 104, 255, 1),
		0 0 calc(var(--star-glow) * 1.4) rgba(0, 253, 253, 0.75),
		0 0 calc(var(--star-glow) * 2.4) rgba(0, 180, 255, 0.45);
}

/* layout */
.offers-container {
	position: relative;
	z-index: 2;
	width: min(100%, 1500px);
	margin: 0 auto;
	padding: 46px 48px 82px;
}

.offers-title-wrap {
	display: flex;
	justify-content: center;
	overflow: visible;
}

.offers-title-img {
	display: block;
	width: 1050px;
	max-width: none;
	height: auto;
	object-fit: contain;
	position: relative;
	filter: drop-shadow(0 0 8px rgba(0, 135, 255, 0.38))
		drop-shadow(0 0 18px rgba(0, 135, 255, 0.22));
}

/* cards */
.offers-grid {
	width: min(100%, 1180px);
	margin: 42px auto 0;
	display: grid;
	grid-template-columns: repeat(6, minmax(0, 1fr));
	gap: 68px 72px;
}

.offer-card {
	position: relative;
	grid-column: span 2;
	width: 100%;
	max-width: 335px;
	min-height: 395px;
	border-radius: 48px;
	overflow: hidden;
	border: 3px solid rgba(205, 225, 245, 0.95);
	background:
		radial-gradient(circle at 50% 100%, rgba(0, 103, 255, 0.18), transparent 34%),
		linear-gradient(
			145deg,
			rgba(2, 9, 24, 0.98) 0%,
			rgba(2, 10, 27, 0.98) 48%,
			rgba(5, 18, 42, 0.96) 100%
		);
	box-shadow:
		inset 0 0 24px rgba(0, 94, 255, 0.08),
		0 0 0 1px rgba(255, 255, 255, 0.035);
	transition:
		transform 0.25s ease,
		box-shadow 0.25s ease,
		border-color 0.25s ease;
}

.offer-card-four {
	grid-column: 2 / span 2;
}

.offer-card-five {
	grid-column: 4 / span 2;
}

.offer-card:hover {
	transform: translateY(-5px);
	border-color: rgba(232, 246, 255, 1);
	box-shadow:
		inset 0 0 36px rgba(0, 115, 255, 0.13),
		0 0 24px rgba(0, 174, 255, 0.15);
}

.card-top-glow {
	position: absolute;
	top: -10px;
	left: 42px;
	right: 42px;
	height: 18px;
	border-radius: 999px;
	background: radial-gradient(
		ellipse at center,
		rgba(255, 255, 255, 0.48) 0%,
		rgba(0, 253, 253, 0.28) 22%,
		rgba(4, 104, 255, 0.14) 52%,
		rgba(4, 104, 255, 0) 82%
	);
	filter: blur(9px);
	opacity: 0.65;
	pointer-events: none;
}

.card-top-line {
	position: absolute;
	top: 0;
	left: 24%;
	right: 24%;
	height: 1px;
	background: linear-gradient(
		90deg,
		rgba(255, 255, 255, 0),
		rgba(255, 255, 255, 0.36),
		rgba(0, 253, 253, 0.42),
		rgba(255, 255, 255, 0)
	);
	opacity: 0.7;
	pointer-events: none;
}

.card-inner-glow {
	position: absolute;
	inset: 0;
	background:
		radial-gradient(circle at 50% 104%, rgba(0, 122, 255, 0.24), transparent 34%),
		radial-gradient(circle at 86% 0%, rgba(0, 122, 255, 0.1), transparent 36%),
		linear-gradient(180deg, rgba(255, 255, 255, 0.012), rgba(255, 255, 255, 0));
	pointer-events: none;
}

.card-bottom-glow {
	position: absolute;
	left: 50%;
	bottom: -5px;
	width: 142px;
	height: 18px;
	transform: translateX(-50%);
	border-radius: 999px;
	background: radial-gradient(
		ellipse at center,
		rgba(255, 255, 255, 1) 0%,
		rgba(194, 255, 255, 1) 8%,
		rgba(0, 253, 253, 1) 20%,
		rgba(0, 120, 255, 0.92) 42%,
		rgba(0, 120, 255, 0.24) 66%,
		rgba(0, 120, 255, 0) 84%
	);
	filter: blur(4px);
	pointer-events: none;
}

.card-bottom-line {
	position: absolute;
	left: 50%;
	bottom: 0;
	width: 76%;
	height: 2px;
	transform: translateX(-50%);
	background: linear-gradient(
		90deg,
		rgba(0, 253, 253, 0),
		rgba(255, 255, 255, 0.58),
		rgba(0, 253, 253, 1),
		rgba(255, 255, 255, 0.58),
		rgba(0, 253, 253, 0)
	);
	box-shadow:
		0 0 8px rgba(255, 255, 255, 0.65),
		0 0 18px rgba(0, 253, 253, 0.95),
		0 0 34px rgba(0, 110, 255, 0.8);
	pointer-events: none;
}

.offer-content {
	position: relative;
	z-index: 2;
	min-height: 395px;
	display: flex;
	flex-direction: column;
	align-items: center;
	text-align: center;
	padding: 28px 36px 34px;
}

.offer-icon-wrap {
	height: 136px;
	display: flex;
	align-items: center;
	justify-content: center;
}

.offer-icon {
	width: auto;
	max-width: 126px;
	max-height: 116px;
	object-fit: contain;
	filter: drop-shadow(0 0 6px rgba(4, 104, 255, 0.42))
		drop-shadow(0 0 16px rgba(0, 253, 253, 0.12));
}

.offer-title {
	margin: 16px 0 0;
	white-space: pre-line;
	color: #ffffff;
	font-size: 29px;
	font-weight: 1000;
	line-height: 0.92;
	letter-spacing: -0.05em;
	text-wrap: balance;
	text-shadow:
		0 1px 0 rgba(255, 255, 255, 0.12),
		0 0 10px rgba(255, 255, 255, 0.08);
}

.offer-description {
	margin: 24px 0 0;
	color: rgba(255, 255, 255, 0.96);
	font-size: 18px;
	font-weight: 400;
	line-height: 1.58;
	letter-spacing: -0.018em;
	text-align: justify;
	text-align-last: center;
}

/* final */
.offers-final {
	width: min(100%, 1040px);
	margin: 92px auto 0;
	text-align: center;
}

.offers-final h3 {
	margin: 0;
	color: #ffffff;
	font-size: clamp(54px, 5.2vw, 88px);
	font-weight: 950;
	line-height: 0.96;
	letter-spacing: -0.055em;
}

.offers-final h3 span {
	display: block;
}

.offers-final p {
	max-width: 1000px;
	margin: 28px auto 0;
	color: rgba(255, 255, 255, 0.92);
	font-size: clamp(20px, 1.5vw, 26px);
	line-height: 1.36;
	letter-spacing: -0.018em;
}

/* responsive */
@media (max-width: 1280px) {
	.offers-container {
		padding: 48px 34px 76px;
	}

	.offers-title-img {
		width: 900px;
	}

	.offers-grid {
		width: min(100%, 1060px);
		gap: 54px 52px;
	}

	.offer-card {
		min-height: 370px;
		border-radius: 42px;
	}

	.offer-content {
		min-height: 370px;
		padding: 28px 32px 32px;
	}

	.offer-title {
		font-size: 28px;
	}

	.offer-description {
		font-size: 16.5px;
	}
}

@media (max-width: 1024px) {
	.offers-container {
		padding: 44px 24px 68px;
	}

	.offers-title-img {
		width: min(100%, 720px);
		max-width: 100%;
	}

	.offers-grid {
		margin-top: 42px;
		grid-template-columns: repeat(2, minmax(0, 1fr));
		gap: 34px;
	}

	.offer-card,
	.offer-card-four,
	.offer-card-five {
		grid-column: auto;
	}

	.offer-card {
		width: min(100%, 360px);
		justify-self: center;
	}

	.offer-card-five {
		grid-column: 1 / -1;
	}

	.offers-final {
		margin-top: 72px;
	}

	.offers-final h3 {
		font-size: clamp(42px, 7vw, 70px);
	}

	.offers-final p {
		font-size: 20px;
	}
}

@media (max-width: 768px) {
	.offers-container {
		padding: 38px 18px 58px;
	}

	.offers-title-img {
		width: min(100%, 520px);
		max-width: 100%;
	}

	.offers-grid {
		margin-top: 36px;
		grid-template-columns: 1fr;
		gap: 28px;
	}

	.offer-card,
	.offer-card-five {
		grid-column: auto;
		width: min(100%, 340px);
		min-height: 340px;
	}

	.offer-content {
		min-height: 340px;
		padding: 26px 28px 30px;
	}

	.offer-icon-wrap {
		height: 112px;
	}

	.offer-icon {
		max-width: 104px;
		max-height: 100px;
	}

	.offer-title {
		font-size: 25px;
	}

	.offer-description {
		font-size: 15px;
		line-height: 1.5;
	}

	.card-bottom-glow {
		width: 160px;
	}

	.offers-final {
		margin-top: 58px;
	}

	.offers-final h3 {
		font-size: clamp(36px, 10vw, 54px);
	}

	.offers-final p {
		margin-top: 20px;
		font-size: 16px;
		line-height: 1.48;
	}
}

@media (max-width: 520px) {
	.offers-container {
		padding: 34px 14px 52px;
	}

	.offers-title-img {
		width: min(100%, 420px);
		max-width: 100%;
	}

	.offer-card {
		border-radius: 34px;
	}

	.offer-title {
		font-size: 23px;
	}

	.offer-description {
		font-size: 14.5px;
	}

	.offers-final h3 {
		font-size: clamp(32px, 11vw, 44px);
	}

	.offers-final p {
		font-size: 15px;
	}
}
</style>
