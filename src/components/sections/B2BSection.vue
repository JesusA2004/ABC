<script setup lang="ts">
import b2bImg from '@/assets/pc.png'

const topRightStars = [
	{ top: '18px', right: '56px', size: '3px', glow: '18px', opacity: 1 },
	{ top: '42px', right: '26px', size: '2px', glow: '12px', opacity: 0.92 },
	{ top: '54px', right: '96px', size: '2px', glow: '12px', opacity: 0.9 },
	{ top: '82px', right: '16px', size: '4px', glow: '24px', opacity: 1 },
	{ top: '96px', right: '74px', size: '2px', glow: '12px', opacity: 0.92 },
	{ top: '126px', right: '128px', size: '3px', glow: '16px', opacity: 0.94 },
	{ top: '146px', right: '42px', size: '2px', glow: '12px', opacity: 0.9 },
]

const bottomLeftStars = [
	{ bottom: '18px', left: '20px', size: '3px', glow: '18px', opacity: 0.96 },
	{ bottom: '42px', left: '66px', size: '4px', glow: '24px', opacity: 1 },
	{ bottom: '66px', left: '34px', size: '2px', glow: '12px', opacity: 0.92 },
	{ bottom: '92px', left: '104px', size: '2px', glow: '12px', opacity: 0.9 },
	{ bottom: '118px', left: '58px', size: '3px', glow: '16px', opacity: 0.94 },
	{ bottom: '142px', left: '14px', size: '2px', glow: '12px', opacity: 0.88 },
	{ bottom: '164px', left: '132px', size: '2px', glow: '12px', opacity: 0.9 },
]
</script>

<template>
	<section id="plataforma-b2b" class="b2b-section">
		<div class="b2b-bg-base" />
		<div class="b2b-bg-glow" />
		<div class="b2b-top-line" />

		<!-- estrellas superiores derecha -->
		<div class="stars-corner stars-corner-right" aria-hidden="true">
			<span
				v-for="(star, index) in topRightStars"
				:key="`tr-${index}`"
				class="corner-star"
				:style="{
					top: star.top,
					right: star.right,
					width: star.size,
					height: star.size,
					opacity: star.opacity,
					'--star-glow': star.glow,
				}"
			/>
		</div>

		<!-- estrellas inferiores izquierda -->
		<div class="stars-corner stars-corner-left" aria-hidden="true">
			<span
				v-for="(star, index) in bottomLeftStars"
				:key="`bl-${index}`"
				class="corner-star"
				:style="{
					bottom: star.bottom,
					left: star.left,
					width: star.size,
					height: star.size,
					opacity: star.opacity,
					'--star-glow': star.glow,
				}"
			/>
		</div>

		<!-- glow dorado inferior -->
		<div class="gold-glow gold-glow-main" />
		<div class="gold-glow gold-glow-soft" />
		<div class="gold-line" />

		<div class="b2b-container">
			<!-- imagen -->
			<div class="b2b-image-side">
				<img :src="b2bImg" alt="Plataforma B2B" class="b2b-image" />
			</div>

			<!-- texto -->
			<div class="b2b-copy">
				<h2 class="b2b-title">
					<span>PLATAFORMA B2B</span>
					<span class="b2b-title-small">QUE CONECTA A TU AGENCIA</span>
					<span>CON EL MUNDO.</span>
				</h2>

				<p class="b2b-description">
					Accede a más de 2 millones de hoteles en 32,000 destinos, con disponibilidad en
					tiempo real, confirmación inmediata y tarifas exclusivas para agencias de
					viajes.
				</p>

				<div class="b2b-action">
					<a href="#contacto" class="b2b-button">
						<span>Acceso a Agencias</span>
					</a>
				</div>
			</div>
		</div>
	</section>
</template>

<style scoped>
.b2b-section {
	position: relative;
	overflow: hidden;
	background: #000814;
	border-top: 1px solid rgba(34, 211, 238, 0.18);
	border-bottom: 1px solid rgba(34, 211, 238, 0.18);
}

.b2b-bg-base {
	position: absolute;
	inset: 0;
	background: #000814;
}

.b2b-bg-glow {
	position: absolute;
	inset: 0;
	background:
		radial-gradient(circle at 23% 48%, rgba(0, 118, 255, 0.1), transparent 24%),
		radial-gradient(circle at 76% 32%, rgba(0, 214, 255, 0.055), transparent 24%),
		radial-gradient(circle at 62% 100%, rgba(255, 191, 73, 0.04), transparent 32%),
		linear-gradient(180deg, rgba(0, 8, 20, 0.985), rgba(0, 8, 20, 1));
}

.b2b-top-line {
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

/* estrellas */
.stars-corner {
	position: absolute;
	z-index: 1;
	pointer-events: none;
}

.stars-corner-right {
	top: 0;
	right: 0;
	width: 250px;
	height: 190px;
}

.stars-corner-left {
	bottom: 0;
	left: 0;
	width: 230px;
	height: 190px;
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

/* dorado inferior */
.gold-glow {
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
	pointer-events: none;
	z-index: 1;
}

.gold-glow-main {
	bottom: -1px;
	width: 760px;
	height: 14px;
	background: radial-gradient(
		ellipse at center,
		rgba(255, 216, 132, 1) 0%,
		rgba(255, 191, 73, 0.96) 16%,
		rgba(255, 181, 48, 0.5) 42%,
		rgba(255, 181, 48, 0) 78%
	);
	filter: blur(5px);
}

.gold-glow-soft {
	bottom: -10px;
	width: 560px;
	height: 34px;
	background: radial-gradient(
		ellipse at center,
		rgba(255, 191, 73, 0.72) 0%,
		rgba(255, 191, 73, 0.26) 42%,
		rgba(255, 191, 73, 0) 82%
	);
	filter: blur(14px);
}

.gold-line {
	position: absolute;
	left: 50%;
	bottom: 0;
	z-index: 1;
	width: 52%;
	height: 1px;
	transform: translateX(-50%);
	background: linear-gradient(
		90deg,
		rgba(255, 191, 73, 0),
		rgba(255, 220, 144, 1),
		rgba(255, 191, 73, 0)
	);
	box-shadow:
		0 0 10px rgba(255, 191, 73, 0.9),
		0 0 24px rgba(255, 191, 73, 0.35);
}

/* layout */
.b2b-container {
	position: relative;
	z-index: 2;
	width: min(100%, 1560px);
	min-height: 720px;
	margin: 0 auto;
	padding: 72px 72px 82px;
	display: grid;
	grid-template-columns: minmax(0, 0.92fr) minmax(0, 1.08fr);
	align-items: center;
	gap: 54px;
}

.b2b-image-side {
	display: flex;
	align-items: center;
	justify-content: flex-start;
	min-width: 0;
}

.b2b-image {
	width: min(100%, 720px);
	height: auto;
	object-fit: contain;
	filter: drop-shadow(0 0 8px rgba(0, 253, 253, 0.16))
		drop-shadow(0 0 20px rgba(0, 174, 255, 0.12));
}

.b2b-copy {
	display: flex;
	flex-direction: column;
	align-items: center;
	text-align: center;
	justify-self: end;
	width: 100%;
	max-width: 780px;
}

.b2b-title {
	margin: 0;
	color: #ffffff;
	font-size: clamp(54px, 5vw, 92px);
	font-weight: 900;
	line-height: 0.92;
	letter-spacing: -0.055em;
	text-transform: uppercase;
	text-wrap: balance;
}

@media (min-width: 1025px) {
	.b2b-copy {
		justify-self: end;
		align-items: flex-end;
		text-align: right;
		max-width: 760px;
		transform: translateX(120px);
	}

	.b2b-title {
		width: 900px;
		max-width: none;
		text-align: right;
	}

	.b2b-description {
		width: 760px;
		max-width: none;
		margin-left: auto;
		margin-right: 0;
		text-align: right;
	}

	.b2b-action {
		justify-content: flex-end;
	}
}

.b2b-title span {
	display: block;
}

.b2b-title-small {
	font-size: 0.58em;
	letter-spacing: -0.045em;
}

.b2b-description {
	max-width: 720px;
	margin: 70px auto 0;
	color: rgba(255, 255, 255, 0.95);
	font-size: clamp(22px, 1.55vw, 30px);
	font-weight: 400;
	line-height: 1.28;
	letter-spacing: -0.018em;
	text-align: center;
}

.b2b-action {
	margin-top: 64px;
	display: flex;
	justify-content: center;
	width: 100%;
}

.b2b-button {
	position: relative;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	min-width: 290px;
	overflow: hidden;
	border-radius: 999px;
	border: 3px solid rgba(182, 122, 31, 0.9);
	background: linear-gradient(180deg, rgba(19, 39, 71, 0.86), rgba(6, 15, 31, 0.95));
	padding: 10px 32px;
	color: #ffffff;
	font-size: 26px;
	font-weight: 800;
	line-height: 1;
	box-shadow:
		0 0 16px rgba(255, 191, 73, 0.18),
		inset 0 0 16px rgba(255, 191, 73, 0.05);
	transition:
		transform 0.2s ease,
		box-shadow 0.2s ease,
		border-color 0.2s ease;
}

.b2b-button::before {
	content: '';
	position: absolute;
	inset: 0;
	border-radius: inherit;
	background: linear-gradient(
		90deg,
		rgba(255, 170, 0, 0) 0%,
		rgba(255, 209, 113, 0.16) 45%,
		rgba(255, 255, 255, 0.5) 52%,
		rgba(255, 209, 113, 0.14) 60%,
		rgba(255, 170, 0, 0) 100%
	);
	opacity: 0.65;
}

.b2b-button::after {
	content: '';
	position: absolute;
	right: 22px;
	bottom: -8px;
	width: 120px;
	height: 18px;
	border-radius: 999px;
	background: radial-gradient(
		ellipse at center,
		rgba(255, 191, 73, 1),
		rgba(255, 191, 73, 0.45),
		rgba(255, 191, 73, 0)
	);
	filter: blur(6px);
}

.b2b-button span {
	position: relative;
	z-index: 1;
}

.b2b-button:hover {
	transform: scale(1.025);
	border-color: rgba(255, 191, 73, 1);
	box-shadow:
		0 0 22px rgba(255, 191, 73, 0.3),
		inset 0 0 18px rgba(255, 191, 73, 0.08);
}

/* responsive */
@media (max-width: 1280px) {
	.b2b-container {
		min-height: 660px;
		padding: 64px 42px 76px;
		gap: 34px;
	}

	.b2b-image {
		width: min(100%, 620px);
	}

	.b2b-title {
		font-size: clamp(48px, 5vw, 74px);
	}

	.b2b-description {
		margin-top: 52px;
		font-size: 24px;
	}

	.b2b-action {
		margin-top: 48px;
	}

	.b2b-button {
		min-width: 260px;
		font-size: 23px;
	}
}

@media (max-width: 1024px) {
	.b2b-container {
		min-height: auto;
		padding: 58px 26px 70px;
		grid-template-columns: 1fr;
		gap: 42px;
	}

	.b2b-image-side {
		justify-content: center;
		order: 2;
	}

	.b2b-copy {
		justify-self: center;
		order: 1;
		max-width: 820px;
	}

	.b2b-image {
		width: min(100%, 560px);
	}

	.b2b-title {
		font-size: clamp(42px, 8vw, 68px);
	}

	.b2b-description {
		margin-top: 34px;
		font-size: 22px;
		line-height: 1.34;
	}

	.b2b-action {
		margin-top: 34px;
	}
}

@media (max-width: 768px) {
	.b2b-container {
		padding: 48px 18px 64px;
		gap: 34px;
	}

	.b2b-title {
		font-size: clamp(35px, 10vw, 52px);
	}

	.b2b-description {
		max-width: 560px;
		margin-top: 28px;
		font-size: 18px;
	}

	.b2b-button {
		min-width: 220px;
		border-width: 2px;
		padding: 10px 24px;
		font-size: 19px;
	}

	.b2b-image {
		width: min(100%, 430px);
	}

	.stars-corner-right {
		width: 180px;
		height: 150px;
	}

	.stars-corner-left {
		width: 180px;
		height: 150px;
	}

	.gold-glow-main {
		width: 420px;
	}

	.gold-glow-soft {
		width: 320px;
	}
}

@media (max-width: 520px) {
	.b2b-container {
		padding: 42px 14px 58px;
	}

	.b2b-title {
		font-size: clamp(31px, 11vw, 42px);
	}

	.b2b-description {
		font-size: 16px;
	}

	.b2b-button {
		min-width: 200px;
		font-size: 17px;
	}

	.b2b-image {
		width: min(100%, 340px);
	}
}
</style>
