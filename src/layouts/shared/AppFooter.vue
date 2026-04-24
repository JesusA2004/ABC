<script setup lang="ts">
import logoImg from '@/assets/LOGO.png'

const socialLinks = [
	{
		name: 'WhatsApp',
		href: '#',
		icon: 'whatsapp',
	},
	{
		name: 'Instagram',
		href: '#',
		icon: 'instagram',
	},
	{
		name: 'Facebook',
		href: '#',
		icon: 'facebook',
	},
	{
		name: 'YouTube',
		href: '#',
		icon: 'youtube',
	},
	{
		name: 'TikTok',
		href: '#',
		icon: 'tiktok',
	},
]

const leftStars = [
	{ bottom: '40px', left: '10px', size: '2px', glow: '12px', opacity: 0.9 },
	{ bottom: '72px', left: '52px', size: '4px', glow: '24px', opacity: 1 },
	{ bottom: '96px', left: '36px', size: '3px', glow: '16px', opacity: 0.95 },
	{ bottom: '116px', left: '88px', size: '2px', glow: '12px', opacity: 0.9 },
	{ bottom: '142px', left: '70px', size: '3px', glow: '16px', opacity: 0.95 },
	{ bottom: '174px', left: '126px', size: '2px', glow: '12px', opacity: 0.88 },
]

const rightStars = [
	{ top: '38px', right: '54px', size: '4px', glow: '24px', opacity: 1 },
	{ top: '62px', right: '96px', size: '3px', glow: '16px', opacity: 0.95 },
	{ top: '84px', right: '28px', size: '2px', glow: '12px', opacity: 0.9 },
	{ top: '116px', right: '72px', size: '3px', glow: '16px', opacity: 0.94 },
	{ top: '148px', right: '16px', size: '2px', glow: '12px', opacity: 0.88 },
]
</script>

<template>
	<footer class="footer-section">
		<div class="footer-bg-base" />
		<div class="footer-bg-glow" />

		<!-- puntitos manuales izquierda -->
		<div class="stars-corner stars-corner-left" aria-hidden="true">
			<span
				v-for="(star, index) in leftStars"
				:key="`footer-left-${index}`"
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

		<!-- puntitos manuales derecha -->
		<div class="stars-corner stars-corner-right" aria-hidden="true">
			<span
				v-for="(star, index) in rightStars"
				:key="`footer-right-${index}`"
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

		<div class="footer-container">
			<div class="social-links">
				<a
					v-for="item in socialLinks"
					:key="item.name"
					:href="item.href"
					:aria-label="item.name"
					class="social-link"
				>
					<!-- whatsapp -->
					<svg
						v-if="item.icon === 'whatsapp'"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 24 24"
						fill="none"
						stroke="currentColor"
						stroke-width="1.8"
						class="social-icon"
					>
						<path
							d="M20 11.5A8.5 8.5 0 0 1 7.5 19L4 20l1.1-3.3A8.5 8.5 0 1 1 20 11.5Z"
						/>
						<path
							d="M9 8.8c.2-.5.5-.5.7-.5h.6c.2 0 .4 0 .6.5.2.4.7 1.6.8 1.7.1.2.1.4 0 .6l-.4.5c-.1.1-.2.3-.1.5.1.2.5.9 1.1 1.5.7.6 1.4 1 1.6 1.1.2.1.4.1.5-.1l.6-.7c.2-.2.3-.2.6-.1.2.1 1.5.7 1.7.8.2.1.4.2.4.3 0 .2 0 1-.4 1.4-.4.4-.9.6-1.3.7-.3.1-.8.1-1.3 0-.6-.1-1.4-.4-2.5-1-.9-.5-1.8-1.3-2.5-2.1-.7-.7-1.3-1.6-1.7-2.4-.5-.9-.8-1.8-.7-2.5.1-.5.3-1 .6-1.4Z"
						/>
					</svg>

					<!-- instagram -->
					<svg
						v-else-if="item.icon === 'instagram'"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 24 24"
						fill="none"
						stroke="currentColor"
						stroke-width="1.8"
						class="social-icon"
					>
						<rect x="3.5" y="3.5" width="17" height="17" rx="4.5" />
						<circle cx="12" cy="12" r="4.2" />
						<circle cx="17.3" cy="6.7" r="1" fill="currentColor" stroke="none" />
					</svg>

					<!-- facebook -->
					<svg
						v-else-if="item.icon === 'facebook'"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 24 24"
						fill="currentColor"
						class="social-icon"
					>
						<path
							d="M13.5 21v-7h2.3l.4-2.8h-2.7V9.4c0-.8.2-1.4 1.4-1.4H16V5.6c-.2 0-.9-.1-1.8-.1-1.8 0-3 1.1-3 3.2v2.5H9v2.8h2.4v7h2.1Z"
						/>
					</svg>

					<!-- youtube -->
					<svg
						v-else-if="item.icon === 'youtube'"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 24 24"
						fill="none"
						stroke="currentColor"
						stroke-width="1.8"
						class="social-icon"
					>
						<rect x="3" y="6.5" width="18" height="11" rx="3" />
						<path d="m10 9.5 5 2.5-5 2.5v-5Z" fill="currentColor" stroke="none" />
					</svg>

					<!-- tiktok -->
					<svg
						v-else
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 24 24"
						fill="currentColor"
						class="social-icon"
					>
						<path
							d="M14.7 3c.3 2.1 1.5 3.4 3.4 4 .5.2 1.1.3 1.7.3v2.7c-1 0-2-.2-2.9-.6-.6-.2-1.1-.6-1.6-1v6.1c0 3.1-2.2 5.3-5.3 5.3-1.2 0-2.2-.3-3.1-.9-1.3-.9-2.2-2.4-2.2-4.4 0-3.1 2.2-5.3 5.3-5.3.2 0 .4 0 .6.1v2.8c-.2-.1-.4-.1-.6-.1-1.5 0-2.5 1-2.5 2.5 0 1 .4 1.7 1.1 2.1.4.2.8.3 1.4.3 1.4 0 2.4-1 2.4-2.5V3h2.3Z"
						/>
					</svg>
				</a>
			</div>

			<p class="copyright">© Copyright 2026 ABC Travelling - Todos los derechos reservados</p>

			<div class="footer-logo-wrap">
				<img :src="logoImg" alt="ABC Travelling" class="footer-logo" />
			</div>
		</div>
	</footer>
</template>

<style scoped>
.footer-section {
	position: relative;
	overflow: hidden;
	background: #000814;
	padding: 64px 18px 54px;
}

.footer-bg-base {
	position: absolute;
	inset: 0;
	background: #000814;
}

.footer-bg-glow {
	position: absolute;
	inset: 0;
	background:
		radial-gradient(circle at 12% 8%, rgba(0, 110, 255, 0.055), transparent 18%),
		radial-gradient(circle at 86% 12%, rgba(0, 214, 255, 0.045), transparent 20%),
		radial-gradient(circle at 50% 100%, rgba(0, 122, 255, 0.045), transparent 24%),
		linear-gradient(180deg, rgba(0, 8, 20, 1), rgba(0, 8, 20, 1));
}

/* puntitos */
.stars-corner {
	position: absolute;
	z-index: 1;
	pointer-events: none;
}

.stars-corner-left {
	left: 0;
	bottom: 0;
	width: 180px;
	height: 230px;
}

.stars-corner-right {
	top: 0;
	right: 0;
	width: 180px;
	height: 210px;
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

.footer-container {
	position: relative;
	z-index: 2;
	width: min(100%, 1100px);
	margin: 0 auto;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}

.social-links {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	justify-content: center;
	gap: 30px;
}

.social-link {
	display: inline-flex;
	align-items: center;
	justify-content: center;
	width: 72px;
	height: 72px;
	color: rgba(255, 255, 255, 0.92);
	text-decoration: none;
	filter: drop-shadow(0 0 4px rgba(255, 255, 255, 0.75))
		drop-shadow(0 0 12px rgba(255, 255, 255, 0.28))
		drop-shadow(0 0 18px rgba(0, 162, 255, 0.16));
	transition:
		transform 0.22s ease,
		color 0.22s ease,
		filter 0.22s ease;
}

.social-link:hover {
	transform: translateY(-4px) scale(1.06);
	color: #ffffff;
	filter: drop-shadow(0 0 6px rgba(255, 255, 255, 0.95))
		drop-shadow(0 0 16px rgba(255, 255, 255, 0.38))
		drop-shadow(0 0 28px rgba(0, 162, 255, 0.25));
}

.social-icon {
	width: 58px;
	height: 58px;
}

.copyright {
	margin: 26px 0 0;
	color: rgba(255, 255, 255, 0.94);
	font-size: 22px;
	font-weight: 400;
	line-height: 1.2;
	letter-spacing: -0.02em;
	text-align: center;
}

.footer-logo-wrap {
	margin-top: 22px;
	display: flex;
	justify-content: center;
}

.footer-logo {
	display: block;
	width: 180px;
	height: auto;
	object-fit: contain;
	opacity: 1;
	filter: drop-shadow(0 0 4px rgba(255, 255, 255, 0.35))
		drop-shadow(0 0 14px rgba(0, 162, 255, 0.12));
}

@media (max-width: 768px) {
	.footer-section {
		padding: 54px 16px 46px;
	}

	.social-links {
		gap: 22px;
	}

	.social-link {
		width: 60px;
		height: 60px;
	}

	.social-icon {
		width: 48px;
		height: 48px;
	}

	.copyright {
		font-size: 18px;
	}

	.footer-logo {
		width: 150px;
	}
}

@media (max-width: 520px) {
	.footer-section {
		padding: 46px 14px 42px;
	}

	.social-links {
		gap: 16px;
	}

	.social-link {
		width: 52px;
		height: 52px;
	}

	.social-icon {
		width: 42px;
		height: 42px;
	}

	.copyright {
		margin-top: 22px;
		font-size: 16px;
	}

	.footer-logo {
		width: 130px;
	}
}
</style>
