<script setup lang="ts">
import { reactive, ref } from 'vue'
import Swal from 'sweetalert2'
import contactoTitle from '@/assets/contacto.png'

const CONTACT_ENDPOINT = import.meta.env.VITE_CONTACT_ENDPOINT as string | undefined

const contactInfo = [
	{
		title: 'Teléfono',
		value: '+52 777 137 5437',
	},
	{
		title: 'Correo',
		value: 'atencion@abctravelling.com',
	},
	{
		title: 'Dirección',
		value: 'Subida del Club 114 zona 1, Reforma\n62260 Cuernavaca, Mor.',
	},
	{
		title: 'Horario',
		value: 'Lunes a viernes: 9:00 a.m. - 18:00 p.m.',
	},
]

const form = reactive({
	nombre: '',
	correo: '',
	empresa: '',
	mensaje: '',
})

const loading = ref(false)

const isValidEmail = (email: string) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)

const resetForm = () => {
	form.nombre = ''
	form.correo = ''
	form.empresa = ''
	form.mensaje = ''
}

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
]

const bottomLeftStars = [
	{ bottom: '18px', left: '14px', size: '3px', glow: '18px', opacity: 0.96 },
	{ bottom: '42px', left: '66px', size: '4px', glow: '24px', opacity: 1 },
	{ bottom: '66px', left: '34px', size: '2px', glow: '12px', opacity: 0.92 },
	{ bottom: '92px', left: '104px', size: '2px', glow: '12px', opacity: 0.9 },
	{ bottom: '118px', left: '58px', size: '3px', glow: '16px', opacity: 0.94 },
	{ bottom: '142px', left: '14px', size: '2px', glow: '12px', opacity: 0.88 },
	{ bottom: '166px', left: '132px', size: '2px', glow: '12px', opacity: 0.9 },
]

const topRightStars = [
	{ top: '86px', right: '52px', size: '4px', glow: '24px', opacity: 1 },
	{ top: '112px', right: '112px', size: '3px', glow: '16px', opacity: 0.98 },
	{ top: '138px', right: '26px', size: '2px', glow: '12px', opacity: 0.92 },
	{ top: '176px', right: '78px', size: '3px', glow: '16px', opacity: 0.95 },
	{ top: '220px', right: '16px', size: '2px', glow: '12px', opacity: 0.9 },
]

const submitForm = async () => {
	if (
		!form.nombre.trim() ||
		!form.correo.trim() ||
		!form.empresa.trim() ||
		!form.mensaje.trim()
	) {
		await Swal.fire({
			icon: 'warning',
			title: 'Campos incompletos',
			text: 'Por favor completa todos los campos antes de enviar.',
			confirmButtonText: 'Entendido',
			background: '#000814',
			color: '#ffffff',
			confirmButtonColor: '#0468ff',
		})
		return
	}

	if (!isValidEmail(form.correo)) {
		await Swal.fire({
			icon: 'error',
			title: 'Correo inválido',
			text: 'Escribe un correo electrónico válido.',
			confirmButtonText: 'Corregir',
			background: '#000814',
			color: '#ffffff',
			confirmButtonColor: '#0468ff',
		})
		return
	}

	if (!CONTACT_ENDPOINT) {
		await Swal.fire({
			icon: 'info',
			title: 'Formulario pendiente de conexión',
			text: 'Configura VITE_CONTACT_ENDPOINT en el archivo .env para enviar los mensajes.',
			confirmButtonText: 'Entendido',
			background: '#000814',
			color: '#ffffff',
			confirmButtonColor: '#0468ff',
		})
		return
	}

	loading.value = true

	Swal.fire({
		title: 'Enviando mensaje...',
		text: 'Por favor espera un momento.',
		allowOutsideClick: false,
		allowEscapeKey: false,
		showConfirmButton: false,
		background: '#000814',
		color: '#ffffff',
		didOpen: () => {
			Swal.showLoading()
		},
	})

	try {
		const response = await fetch(CONTACT_ENDPOINT, {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json',
				Accept: 'application/json',
			},
			body: JSON.stringify({
				nombre: form.nombre.trim(),
				correo: form.correo.trim(),
				empresa: form.empresa.trim(),
				mensaje: form.mensaje.trim(),
				origen: 'ABC Travelling',
			}),
		})

		if (!response.ok) {
			throw new Error('Error al enviar el formulario')
		}

		Swal.close()

		await Swal.fire({
			icon: 'success',
			title: 'Mensaje enviado',
			text: 'Tu mensaje se envió correctamente. Pronto nos pondremos en contacto contigo.',
			confirmButtonText: 'Aceptar',
			background: '#000814',
			color: '#ffffff',
			confirmButtonColor: '#0468ff',
		})

		resetForm()
	} catch {
		Swal.close()

		await Swal.fire({
			icon: 'error',
			title: 'No se pudo enviar',
			text: 'Ocurrió un problema al enviar el mensaje. Inténtalo de nuevo.',
			confirmButtonText: 'Reintentar',
			background: '#000814',
			color: '#ffffff',
			confirmButtonColor: '#0468ff',
		})
	} finally {
		loading.value = false
	}
}
</script>

<template>
	<section id="contacto" class="contact-section">
		<div class="contact-bg-base" />
		<div class="contact-bg-main-glow" />
		<div class="contact-bg-left-glow" />
		<div class="contact-bg-right-glow" />
		<div class="contact-top-line" />

		<!-- puntitos manuales -->
		<div class="stars-corner stars-corner-top-left" aria-hidden="true">
			<span
				v-for="(star, index) in topLeftStars"
				:key="`contact-tl-${index}`"
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

		<div class="stars-corner stars-corner-bottom-left" aria-hidden="true">
			<span
				v-for="(star, index) in bottomLeftStars"
				:key="`contact-bl-${index}`"
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

		<div class="stars-corner stars-corner-top-right" aria-hidden="true">
			<span
				v-for="(star, index) in topRightStars"
				:key="`contact-tr-${index}`"
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

		<div class="contact-container">
			<div class="contact-title-wrap">
				<img :src="contactoTitle" alt="Contacto" class="contact-title-img" />
			</div>

			<div class="contact-layout">
				<!-- izquierda -->
				<div class="contact-info-list">
					<article
						v-for="item in contactInfo"
						:key="item.title"
						class="contact-info-card"
					>
						<div class="card-top-glow" />
						<div class="card-top-line" />

						<h3>{{ item.title }}</h3>
						<p>{{ item.value }}</p>
					</article>
				</div>

				<!-- formulario -->
				<div class="contact-form-card">
					<div class="form-top-glow" />
					<div class="form-top-line" />

					<form class="contact-form" @submit.prevent="submitForm">
						<div class="form-grid-two">
							<div class="field-group">
								<label for="nombre">Nombre</label>
								<input
									id="nombre"
									v-model="form.nombre"
									type="text"
									autocomplete="name"
									:disabled="loading"
								/>
							</div>

							<div class="field-group">
								<label for="correo">Correo</label>
								<input
									id="correo"
									v-model="form.correo"
									type="email"
									autocomplete="email"
									:disabled="loading"
								/>
							</div>
						</div>

						<div class="field-group">
							<label for="empresa">Empresa</label>
							<input
								id="empresa"
								v-model="form.empresa"
								type="text"
								autocomplete="organization"
								:disabled="loading"
							/>
						</div>

						<div class="field-group">
							<label for="mensaje">Mensaje</label>
							<textarea
								id="mensaje"
								v-model="form.mensaje"
								rows="5"
								:disabled="loading"
							/>
						</div>

						<div class="form-actions">
							<button type="submit" :disabled="loading">
								<span v-if="loading" class="spinner" />
								<span>{{ loading ? 'Enviando...' : 'Enviar mensaje' }}</span>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</template>

<style scoped>
.contact-section {
	position: relative;
	overflow: hidden;
	background: #000814;
	border-top: 1px solid rgba(34, 211, 238, 0.18);
	border-bottom: 1px solid rgba(34, 211, 238, 0.18);
}

.contact-bg-base {
	position: absolute;
	inset: 0;
	background: #000814;
}

.contact-bg-main-glow {
	position: absolute;
	inset: 0;
	background:
		radial-gradient(circle at 14% 18%, rgba(0, 110, 255, 0.08), transparent 18%),
		radial-gradient(circle at 74% 34%, rgba(0, 214, 255, 0.05), transparent 22%),
		linear-gradient(180deg, rgba(0, 8, 20, 0.985), rgba(0, 8, 20, 1));
}

.contact-bg-left-glow {
	position: absolute;
	left: -120px;
	top: 20px;
	width: 300px;
	height: 300px;
	border-radius: 999px;
	background: rgba(0, 98, 255, 0.06);
	filter: blur(110px);
}

.contact-bg-right-glow {
	position: absolute;
	right: 14%;
	top: 14%;
	width: 360px;
	height: 360px;
	border-radius: 999px;
	background: rgba(0, 214, 255, 0.045);
	filter: blur(120px);
}

.contact-top-line {
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

/* puntitos */
.stars-corner {
	position: absolute;
	z-index: 1;
	pointer-events: none;
}

.stars-corner-top-left {
	top: 0;
	left: 0;
	width: 240px;
	height: 190px;
}

.stars-corner-bottom-left {
	left: 0;
	bottom: 0;
	width: 190px;
	height: 190px;
}

.stars-corner-top-right {
	top: 0;
	right: 0;
	width: 210px;
	height: 260px;
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
.contact-container {
	position: relative;
	z-index: 2;
	width: min(100%, 1300px);
	min-height: 760px;
	margin: 0 auto;
	padding: 58px 54px 78px;
}

.contact-title-wrap {
	display: flex;
	justify-content: center;
}

.contact-title-img {
	display: block;
	width: 540px;
	max-width: none;
	height: auto;
	object-fit: contain;
	filter: drop-shadow(0 0 8px rgba(0, 135, 255, 0.38))
		drop-shadow(0 0 18px rgba(0, 135, 255, 0.22));
}

.contact-layout {
	width: min(100%, 1130px);
	margin: 76px auto 0;
	display: grid;
	grid-template-columns: 330px 1fr;
	gap: 62px;
	align-items: center;
}

.contact-info-list {
	display: grid;
	gap: 14px;
}

/* cards limpias sin brillo inferior fuerte */
.contact-info-card,
.contact-form-card {
	position: relative;
	overflow: hidden;
	border: 2px solid rgba(205, 225, 245, 0.92);
	background:
		radial-gradient(circle at 88% 0%, rgba(28, 85, 150, 0.2), transparent 34%),
		radial-gradient(circle at 0% 100%, rgba(16, 73, 132, 0.2), transparent 38%),
		linear-gradient(
			145deg,
			rgba(2, 9, 24, 0.98) 0%,
			rgba(2, 10, 27, 0.98) 58%,
			rgba(5, 18, 42, 0.96) 100%
		);
	box-shadow:
		inset 0 0 26px rgba(0, 94, 255, 0.055),
		inset 0 0 42px rgba(255, 255, 255, 0.015),
		0 0 0 1px rgba(255, 255, 255, 0.025);
	transition:
		transform 0.25s ease,
		border-color 0.25s ease,
		box-shadow 0.25s ease;
}

.contact-info-card:hover,
.contact-form-card:hover {
	transform: translateY(-2px);
	border-color: rgba(232, 246, 255, 0.98);
	box-shadow:
		inset 0 0 32px rgba(0, 115, 255, 0.095),
		inset 0 0 46px rgba(255, 255, 255, 0.02),
		0 0 22px rgba(0, 174, 255, 0.12);
}

.contact-info-card {
	min-height: 100px;
	border-radius: 30px;
	padding: 20px 30px 18px;
}

.contact-info-card h3 {
	position: relative;
	z-index: 2;
	margin: 0;
	color: #ffffff;
	font-size: 34px;
	font-weight: 950;
	line-height: 0.92;
	letter-spacing: -0.045em;
	text-shadow:
		0 1px 0 rgba(255, 255, 255, 0.12),
		0 0 10px rgba(255, 255, 255, 0.08);
}

.contact-info-card p {
	position: relative;
	z-index: 2;
	margin: 10px 0 0;
	white-space: pre-line;
	color: rgba(255, 255, 255, 0.92);
	font-size: 13px;
	line-height: 1.28;
	letter-spacing: -0.01em;
}

.contact-form-card {
	border-radius: 34px;
	padding: 38px 40px 36px;
}

/* efecto superior limpio */
.card-top-glow,
.form-top-glow {
	position: absolute;
	top: -12px;
	left: 48px;
	right: 48px;
	height: 18px;
	border-radius: 999px;
	background: radial-gradient(
		ellipse at center,
		rgba(255, 255, 255, 0.3) 0%,
		rgba(0, 145, 255, 0.18) 32%,
		rgba(4, 104, 255, 0.08) 58%,
		rgba(4, 104, 255, 0) 84%
	);
	filter: blur(10px);
	opacity: 0.7;
	pointer-events: none;
}

.card-top-line,
.form-top-line {
	position: absolute;
	top: 0;
	left: 24%;
	right: 24%;
	height: 1px;
	background: linear-gradient(
		90deg,
		rgba(255, 255, 255, 0),
		rgba(190, 225, 255, 0.34),
		rgba(0, 132, 255, 0.32),
		rgba(255, 255, 255, 0)
	);
	opacity: 0.65;
	pointer-events: none;
}

/* formulario */
.contact-form {
	position: relative;
	z-index: 2;
	display: grid;
	gap: 30px;
}

.form-grid-two {
	display: grid;
	grid-template-columns: 1fr 1fr;
	gap: 64px;
}

.field-group label {
	display: block;
	margin: 0 0 8px;
	color: #ffffff;
	font-size: 22px;
	font-weight: 850;
	line-height: 1;
	letter-spacing: -0.035em;
}

.field-group input,
.field-group textarea {
	display: block;
	width: 100%;
	border: 1.5px solid rgba(205, 225, 245, 0.75);
	background: rgba(0, 8, 20, 0.55);
	color: #ffffff;
	outline: none;
	font-family: inherit;
	font-size: 16px;
	line-height: 1.3;
	box-shadow:
		inset 0 0 12px rgba(0, 94, 255, 0.04),
		0 0 0 rgba(0, 0, 0, 0);
	transition:
		border-color 0.2s ease,
		box-shadow 0.2s ease,
		background 0.2s ease;
}

.field-group input {
	height: 44px;
	border-radius: 12px;
	padding: 0 16px;
}

.field-group textarea {
	min-height: 138px;
	resize: none;
	border-radius: 14px;
	padding: 14px 16px;
}

.field-group input:focus,
.field-group textarea:focus {
	border-color: rgba(0, 253, 253, 0.95);
	background: rgba(0, 8, 20, 0.72);
	box-shadow:
		0 0 10px rgba(0, 253, 253, 0.18),
		0 0 24px rgba(4, 104, 255, 0.14);
}

.field-group input:disabled,
.field-group textarea:disabled {
	cursor: not-allowed;
	opacity: 0.72;
}

.form-actions {
	display: flex;
	justify-content: flex-end;
	margin-top: -6px;
}

.form-actions button {
	position: relative;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	gap: 10px;
	min-width: 210px;
	min-height: 48px;
	border: 2px solid rgba(205, 225, 245, 0.88);
	border-radius: 999px;
	background:
		radial-gradient(ellipse at center, rgba(0, 253, 253, 0.14), transparent 62%),
		linear-gradient(180deg, rgba(2, 18, 46, 0.96), rgba(1, 9, 25, 0.98));
	color: #ffffff;
	font-family: inherit;
	font-size: 17px;
	font-weight: 850;
	letter-spacing: -0.018em;
	cursor: pointer;
	box-shadow:
		0 0 10px rgba(255, 255, 255, 0.18),
		0 0 22px rgba(0, 253, 253, 0.18),
		inset 0 0 16px rgba(0, 94, 255, 0.08);
	transition:
		transform 0.2s ease,
		border-color 0.2s ease,
		box-shadow 0.2s ease;
}

.form-actions button:hover {
	transform: translateY(-2px);
	border-color: rgba(255, 255, 255, 1);
	box-shadow:
		0 0 14px rgba(255, 255, 255, 0.24),
		0 0 28px rgba(0, 253, 253, 0.32),
		inset 0 0 20px rgba(0, 94, 255, 0.12);
}

.form-actions button:disabled {
	cursor: not-allowed;
	opacity: 0.7;
	transform: none;
}

.spinner {
	width: 18px;
	height: 18px;
	border-radius: 999px;
	border: 2px solid rgba(255, 255, 255, 0.35);
	border-top-color: #ffffff;
	animation: spin 0.75s linear infinite;
}

@keyframes spin {
	to {
		transform: rotate(360deg);
	}
}

/* responsive */
@media (max-width: 1280px) {
	.contact-container {
		padding: 52px 36px 72px;
	}

	.contact-layout {
		gap: 44px;
		grid-template-columns: 310px 1fr;
	}

	.contact-info-card h3 {
		font-size: 31px;
	}

	.form-grid-two {
		gap: 42px;
	}
}

@media (max-width: 1024px) {
	.contact-container {
		min-height: auto;
		padding: 48px 24px 64px;
	}

	.contact-title-img {
		width: min(100%, 480px);
		max-width: 100%;
	}

	.contact-layout {
		margin-top: 52px;
		grid-template-columns: 1fr;
		gap: 34px;
	}

	.contact-info-list {
		grid-template-columns: repeat(2, minmax(0, 1fr));
	}

	.contact-info-card {
		min-height: 110px;
	}

	.contact-form-card {
		padding: 32px 30px;
	}
}

@media (max-width: 768px) {
	.contact-container {
		padding: 42px 18px 58px;
	}

	.contact-title-img {
		width: min(100%, 390px);
	}

	.contact-layout {
		margin-top: 42px;
	}

	.contact-info-list {
		grid-template-columns: 1fr;
	}

	.contact-info-card {
		min-height: 96px;
		border-radius: 26px;
	}

	.contact-info-card h3 {
		font-size: 29px;
	}

	.form-grid-two {
		grid-template-columns: 1fr;
		gap: 28px;
	}

	.contact-form {
		gap: 26px;
	}

	.field-group label {
		font-size: 20px;
	}

	.form-actions {
		justify-content: center;
	}

	.form-actions button {
		width: 100%;
	}
}

@media (max-width: 520px) {
	.contact-container {
		padding: 38px 14px 52px;
	}

	.contact-title-img {
		width: min(100%, 330px);
	}

	.contact-form-card {
		padding: 28px 22px;
		border-radius: 28px;
	}

	.contact-info-card {
		padding: 18px 24px 17px;
	}

	.contact-info-card h3 {
		font-size: 27px;
	}

	.contact-info-card p {
		font-size: 12px;
	}

	.field-group label {
		font-size: 19px;
	}
}
</style>
