<script setup lang="ts">
import mundoImg from '@/assets/mundo.png'
import quienesSomosTitle from '@/assets/QUIENESSOMOS.png'

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
	{ bottom: '158px', right: '36px', size: '4px', glow: '24px', opacity: 1 },
	{ bottom: '146px', right: '86px', size: '3px', glow: '16px', opacity: 0.98 },
	{ bottom: '134px', right: '138px', size: '2px', glow: '12px', opacity: 0.9 },
	{ bottom: '118px', right: '16px', size: '2px', glow: '12px', opacity: 0.9 },
	{ bottom: '108px', right: '110px', size: '3px', glow: '16px', opacity: 0.95 },
	{ bottom: '92px', right: '62px', size: '5px', glow: '30px', opacity: 1 },
	{ bottom: '82px', right: '168px', size: '2px', glow: '12px', opacity: 0.9 },
	{ bottom: '66px', right: '24px', size: '3px', glow: '16px', opacity: 0.95 },
	{ bottom: '56px', right: '92px', size: '4px', glow: '24px', opacity: 1 },
	{ bottom: '42px', right: '142px', size: '3px', glow: '16px', opacity: 0.95 },
	{ bottom: '28px', right: '54px', size: '2px', glow: '12px', opacity: 0.92 },
	{ bottom: '16px', right: '112px', size: '2px', glow: '12px', opacity: 0.9 },
	{ bottom: '102px', right: '202px', size: '2px', glow: '12px', opacity: 0.88 },
	{ bottom: '58px', right: '196px', size: '2px', glow: '12px', opacity: 0.9 },
]

const worldSparkles = [
	{ top: '96px', left: '210px', size: '10px', glow: '42px', opacity: 1 },
	{ top: '172px', right: '58px', size: '9px', glow: '38px', opacity: 1 },
	{ bottom: '126px', left: '110px', size: '10px', glow: '42px', opacity: 1 },
	{ bottom: '76px', left: '258px', size: '9px', glow: '38px', opacity: 1 },
	{ top: '242px', left: '242px', size: '7px', glow: '28px', opacity: 0.96 },
	{ top: '84px', right: '166px', size: '7px', glow: '30px', opacity: 0.96 },
	{ bottom: '188px', left: '166px', size: '7px', glow: '30px', opacity: 0.95 },
]
</script>

<template>
	<section id="nosotros" class="about-section">
		<div class="about-bg-base" />
		<div class="about-bg-main-glow" />
		<div class="about-bg-left-glow" />
		<div class="about-bg-right-glow" />
		<div class="about-top-line" />

		<div class="stars-corner stars-corner-left" aria-hidden="true">
			<span
				v-for="(star, index) in topLeftStars"
				:key="`tl-${index}`"
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

		<div class="stars-corner stars-corner-right" aria-hidden="true">
			<span
				v-for="(star, index) in bottomRightStars"
				:key="`br-${index}`"
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

		<div class="gold-glow gold-glow-main" />
		<div class="gold-glow gold-glow-soft" />
		<div class="gold-line" />

		<div class="about-container">
			<div class="about-copy">
				<img :src="quienesSomosTitle" alt="¿Quiénes somos?" class="about-title-img" />

				<p class="about-subtitle">
					Tu aliado tecnológico en la <span>distribución hotelera</span>
				</p>

				<div class="about-text">
					<p>
						<strong>ABC Travelling</strong> es una plataforma B2B diseñada
						<strong>para agencias de viajes</strong> que buscan ampliar su oferta
						hotelera con acceso a miles de proveedores internacionales desde un solo
						sistema.
					</p>

					<p>
						Nuestra tecnología
						<strong>permite consultar disponibilidad en tiempo real</strong>, comparar
						tarifas y realizar reservas confirmadas de manera inmediata, facilitando a
						las agencias ofrecer mejores opciones a sus clientes.
					</p>

					<p class="about-final">
						Con ABC Travelling, tu agencia obtiene acceso a una red global de hoteles y
						proveedores sin necesidad de integraciones complejas.
					</p>
				</div>
			</div>

			<div class="world-side">
				<div class="world-wrap">
					<span
						v-for="(spark, index) in worldSparkles"
						:key="`ws-${index}`"
						class="world-spark"
						:style="{
							top: spark.top,
							left: spark.left,
							right: spark.right,
							bottom: spark.bottom,
							width: spark.size,
							height: spark.size,
							opacity: spark.opacity,
							'--spark-glow': spark.glow,
						}"
					/>

					<img :src="mundoImg" alt="Red global hotelera" class="world-img" />
				</div>
			</div>
		</div>
	</section>
</template>

<style scoped>
.about-section {
	position: relative;
	overflow: hidden;
	background: #000814;
	border-top: 1px solid rgba(34, 211, 238, 0.18);
	border-bottom: 1px solid rgba(34, 211, 238, 0.18);
}

.about-bg-base {
	position: absolute;
	inset: 0;
	background: #000814;
}

.about-bg-main-glow {
	position: absolute;
	inset: 0;
	background:
		radial-gradient(circle at 14% 18%, rgba(0, 110, 255, 0.08), transparent 18%),
		radial-gradient(circle at 74% 34%, rgba(0, 214, 255, 0.05), transparent 22%),
		linear-gradient(180deg, rgba(0, 8, 20, 0.985), rgba(0, 8, 20, 1));
}

.about-bg-left-glow {
	position: absolute;
	left: -120px;
	top: 20px;
	width: 300px;
	height: 300px;
	border-radius: 999px;
	background: rgba(0, 98, 255, 0.06);
	filter: blur(110px);
}

.about-bg-right-glow {
	position: absolute;
	right: 14%;
	top: 14%;
	width: 360px;
	height: 360px;
	border-radius: 999px;
	background: rgba(0, 214, 255, 0.045);
	filter: blur(120px);
}

.about-top-line {
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

.stars-corner-left {
	top: 0;
	left: 0;
	width: 240px;
	height: 200px;
}

.stars-corner-right {
	right: 0;
	bottom: 0;
	width: 280px;
	height: 220px;
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
.about-container {
	position: relative;
	z-index: 2;
	width: min(100%, 1720px);
	min-height: 730px;
	margin: 0 auto;
	padding: 22px 42px 52px;
	display: grid;
	grid-template-columns: minmax(0, 790px) minmax(0, 1fr);
	align-items: center;
	gap: 0;
}

.about-copy {
	width: 100%;
	max-width: 790px;
	justify-self: start;
	display: flex;
	flex-direction: column;
	justify-content: center;
}

.about-title-img {
	display: block;
	width: 860px;
	max-width: none;
	height: auto;
	margin: -42px 0 18px;
	object-fit: contain;
	position: relative;
	left: -44px;
	top: 0;
}

.about-subtitle {
	margin: 0;
	max-width: 730px;
	color: #ffffff;
	font-size: 31px;
	line-height: 1.16;
	font-weight: 400;
	letter-spacing: -0.025em;
	text-align: left;
}

.about-subtitle span {
	font-weight: 800;
}

.about-text {
	max-width: 730px;
	margin-top: 26px;
	color: rgba(255, 255, 255, 0.97);
	font-size: 20px;
	line-height: 1.74;
	font-weight: 400;
	letter-spacing: -0.015em;
}

.about-text p {
	margin: 0;
	text-align: justify;
	text-justify: inter-word;
}

.about-text p + p {
	margin-top: 30px;
}

.about-text strong {
	color: #ffffff;
	font-weight: 800;
}

.about-final {
	font-weight: 800;
	color: #ffffff;
}

/* mundo */
.world-side {
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
	min-width: 0;
	transform: translateX(-40px);
}

.world-wrap {
	position: relative;
	width: 730px;
	height: 730px;
	display: flex;
	align-items: center;
	justify-content: center;
}

.world-spark {
	position: absolute;
	z-index: 3;
	border-radius: 999px;
	background: #00fdfd;
	box-shadow:
		0 0 8px rgba(0, 253, 253, 1),
		0 0 var(--spark-glow) rgba(0, 253, 253, 0.95),
		0 0 calc(var(--spark-glow) * 1.8) rgba(0, 173, 255, 0.58);
}

.world-img {
	position: relative;
	z-index: 2;
	max-width: 100%;
	max-height: 100%;
	object-fit: contain;
	filter: drop-shadow(0 0 8px rgba(0, 253, 253, 0.26))
		drop-shadow(0 0 20px rgba(0, 174, 255, 0.14));
}

@media (min-width: 1281px) {
	.about-title-img {
		width: 880px;
		left: -58px;
		margin-top: -54px;
		margin-bottom: 18px;
	}

	.about-container {
		padding-top: 22px;
		padding-bottom: 52px;
	}

	.world-wrap {
		width: 760px;
		height: 760px;
	}
}

@media (max-width: 1280px) {
	.about-container {
		min-height: 700px;
		padding: 50px 28px;
		grid-template-columns: minmax(0, 670px) minmax(0, 1fr);
	}

	.about-title-img {
		width: 690px;
		max-width: none;
		left: -36px;
		margin-top: -14px;
		margin-bottom: 16px;
	}

	.about-subtitle {
		font-size: 29px;
	}

	.about-text {
		font-size: 18.5px;
	}

	.world-side {
		transform: translateX(-22px);
	}

	.world-wrap {
		width: 620px;
		height: 620px;
	}
}

@media (max-width: 1024px) {
	.about-container {
		min-height: auto;
		padding: 56px 24px;
		grid-template-columns: 1fr;
		gap: 36px;
	}

	.about-copy {
		max-width: 760px;
		margin: 0 auto;
		padding-left: 14px;
		padding-right: 6px;
	}

	.about-title-img,
	.about-subtitle,
	.about-text {
		max-width: 100%;
	}

	.about-title-img {
		width: min(100%, 620px);
		left: 0;
		margin: 0 0 18px;
	}

	.about-subtitle {
		font-size: 28px;
	}

	.about-text {
		font-size: 18px;
	}

	.world-side {
		justify-content: center;
		transform: none;
	}

	.world-wrap {
		width: 520px;
		height: 520px;
	}
}

@media (max-width: 768px) {
	.about-container {
		padding: 46px 18px;
	}

	.about-copy {
		padding-left: 16px;
		padding-right: 10px;
	}

	.about-title-img {
		width: min(100%, 460px);
		margin-bottom: 18px;
	}

	.about-subtitle {
		font-size: 22px;
		line-height: 1.18;
	}

	.about-text {
		margin-top: 20px;
		font-size: 16px;
		line-height: 1.68;
	}

	.world-wrap {
		width: 390px;
		height: 390px;
	}

	.gold-glow-main {
		width: 420px;
	}

	.gold-glow-soft {
		width: 320px;
	}

	.stars-corner-left {
		width: 180px;
		height: 160px;
	}

	.stars-corner-right {
		width: 200px;
		height: 170px;
	}
}

@media (max-width: 520px) {
	.about-container {
		padding: 40px 14px;
	}

	.about-copy {
		padding-left: 14px;
		padding-right: 8px;
	}

	.about-title-img {
		width: min(100%, 360px);
	}

	.about-subtitle {
		font-size: 20px;
	}

	.about-text {
		font-size: 15.5px;
		line-height: 1.64;
	}

	.world-wrap {
		width: 310px;
		height: 310px;
	}
}
</style>
