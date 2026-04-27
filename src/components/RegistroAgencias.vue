<script setup>
import '@/css/registro-agencias.css'
import logoFormulario from '@/assets/logoFormulario.png'
import { computed, reactive, ref } from 'vue'

const currentLang = ref('es')
const isSubmitting = ref(false)
const openHelp = ref(null)
const fileInputRef = ref(null)

const allowedExtensions = ['png', 'jpg', 'jpeg', 'webp', 'svg', 'pdf']
const maxFileSize = 8 * 1024 * 1024

const form = reactive({
	correo_principal: '',
	nombre_comercial: '',
	logotipo_empresa: null,
	owner_name: '',
	correo_contacto: '',
	telefono: '',
	mercados: '',
	modelo_negocio: [],
	usuario_principal_nombre: '',
	usuario_principal_correo: '',
	usuario_principal_telefono: '',
	promociones: '',
})

const errors = reactive({})
const formStatus = reactive({ text: '', type: '' })

const preview = reactive({
	show: false,
	name: '',
	type: '',
	url: '',
	isImage: false,
})

const i18n = {
	es: {
		pageTitle: 'FORMULARIO<br>DE REGISTRO',
		subtitleText:
			'Debe completar todo el formulario con la información original tal y como se encuentra reflejada en los documentos oficiales.',
		subtitleStrong: 'Todos los campos son obligatorios.',

		labels: {
			correo_principal: 'Correo*',
			nombre_comercial: 'Nombre comercial*',
			logotipo_empresa: 'Logotipo de empresa*',
			owner_name: 'Nombre del dueño o gerente*',
			correo_contacto: 'Correo de contacto*',
			telefono: 'Teléfono*',
			mercados: 'Mercados operados*',
			modelo_negocio: 'Modelo de negocio*',
			usuario_principal_nombre: 'Nombre y apellido del usuario principal*',
			usuario_principal_correo: 'Correo del usuario principal*',
			usuario_principal_telefono: 'Teléfono del usuario principal*',
			promociones: '¿Desea recibir promociones y ofertas vía correo electrónico?*',
		},

		uploadTitle: 'Subir archivo',
		uploadSubtitle: 'PNG, JPG, WEBP, SVG o PDF',
		uploadButton: 'Seleccionar',
		fileNone: 'Ningún archivo seleccionado',
		previewImage: 'Vista previa de imagen',
		previewPdf: 'Documento PDF',

		yes: 'Sí',
		no: 'No',
		submit: 'ENVIAR',

		errors: {
			required: 'Este campo es obligatorio.',
			email: 'Ingresa un correo válido.',
			phone: 'Debe tener entre 10 y 12 números.',
			fileRequired: 'Debes subir un archivo.',
			fileType: 'Solo se permiten PNG, JPG, JPEG, WEBP, SVG o PDF.',
			fileSize: 'El archivo supera el máximo permitido de 8MB.',
			modelRequired: 'Selecciona al menos un modelo de negocio.',
			radioRequired: 'Selecciona una opción.',
		},

		statusFix: 'Corrige los campos marcados antes de enviar.',
		statusSending: 'Enviando registro...',
		statusSuccess: 'Registro enviado correctamente.',
		statusError: 'Ocurrió un error al enviar.',

		help: {
			correo_principal: {
				title: 'Correo',
				text: 'Correo general del negocio o institución que se desea incorporar.',
			},
			nombre_comercial: {
				title: 'Nombre comercial',
				text: 'Es el nombre con el que el negocio, empresa o marca opera públicamente.',
			},
			logotipo_empresa: {
				title: 'Logotipo de empresa',
				text: 'Sube el logo oficial de la empresa o marca en imagen o PDF.',
			},
			owner_name: {
				title: 'Dueño o gerente',
				text: 'Persona responsable principal del negocio o institución.',
			},
			correo_contacto: {
				title: 'Correo de contacto',
				text: 'Correo específico de seguimiento o atención del negocio.',
			},
			telefono: {
				title: 'Teléfono',
				text: 'Número de contacto del negocio o institución. Solo 10 a 12 dígitos.',
			},
			mercados: {
				title: 'Mercados operados',
				text: 'Regiones, ciudades, segmentos o mercados donde opera el negocio.',
			},
			modelo_negocio: {
				title: 'Modelo de negocio',
				text: 'Selecciona uno o más modelos: B2C, B2B o B2C2B.',
			},
			usuario_principal_nombre: {
				title: 'Usuario principal',
				text: 'Datos de la persona principal que administrará o dará seguimiento a la cuenta.',
			},
			usuario_principal_correo: {
				title: 'Correo del usuario principal',
				text: 'Correo directo de la persona principal que gestionará la cuenta.',
			},
			usuario_principal_telefono: {
				title: 'Teléfono del usuario principal',
				text: 'Número directo del usuario principal. Solo 10 a 12 dígitos.',
			},
			promociones: {
				title: 'Promociones',
				text: 'Indica si desea recibir promociones y comunicaciones comerciales por correo.',
			},
		},
	},

	en: {
		pageTitle: 'REGISTRATION<br>FORM',
		subtitleText:
			'Please complete the form using the original information exactly as it appears in the official documents.',
		subtitleStrong: 'All fields are required.',

		labels: {
			correo_principal: 'Email*',
			nombre_comercial: 'Business name*',
			logotipo_empresa: 'Company logo*',
			owner_name: 'Owner or manager name*',
			correo_contacto: 'Contact email*',
			telefono: 'Phone*',
			mercados: 'Operated markets*',
			modelo_negocio: 'Business model*',
			usuario_principal_nombre: 'Main user full name*',
			usuario_principal_correo: 'Main user email*',
			usuario_principal_telefono: 'Main user phone*',
			promociones: 'Would you like to receive promotions and offers by email?*',
		},

		uploadTitle: 'Upload file',
		uploadSubtitle: 'PNG, JPG, WEBP, SVG or PDF',
		uploadButton: 'Select',
		fileNone: 'No file selected',
		previewImage: 'Image preview',
		previewPdf: 'PDF document',

		yes: 'Yes',
		no: 'No',
		submit: 'SUBMIT',

		errors: {
			required: 'This field is required.',
			email: 'Enter a valid email.',
			phone: 'It must contain between 10 and 12 digits.',
			fileRequired: 'You must upload a file.',
			fileType: 'Only PNG, JPG, JPEG, WEBP, SVG or PDF files are allowed.',
			fileSize: 'The file exceeds the maximum size of 8MB.',
			modelRequired: 'Select at least one business model.',
			radioRequired: 'Select an option.',
		},

		statusFix: 'Please correct the highlighted fields before submitting.',
		statusSending: 'Sending registration...',
		statusSuccess: 'Registration sent successfully.',
		statusError: 'An error occurred while sending.',

		help: {
			correo_principal: {
				title: 'Email',
				text: 'General email of the business or institution being incorporated.',
			},
			nombre_comercial: {
				title: 'Business name',
				text: 'This is the public name used by the business, company or brand.',
			},
			logotipo_empresa: {
				title: 'Company logo',
				text: 'Upload the official company or brand logo in image or PDF format.',
			},
			owner_name: {
				title: 'Owner or manager',
				text: 'Main responsible person of the business or institution.',
			},
			correo_contacto: {
				title: 'Contact email',
				text: 'Specific email for follow-up or business support.',
			},
			telefono: {
				title: 'Phone',
				text: 'Business or institution contact number. Only 10 to 12 digits.',
			},
			mercados: {
				title: 'Operated markets',
				text: 'Regions, cities, segments or markets where the business operates.',
			},
			modelo_negocio: {
				title: 'Business model',
				text: 'Select one or more models: B2C, B2B or B2C2B.',
			},
			usuario_principal_nombre: {
				title: 'Main user',
				text: 'Details of the main person who will manage or follow up the account.',
			},
			usuario_principal_correo: {
				title: 'Main user email',
				text: 'Direct email of the main person managing the account.',
			},
			usuario_principal_telefono: {
				title: 'Main user phone',
				text: 'Direct phone number of the main user. Only 10 to 12 digits.',
			},
			promociones: {
				title: 'Promotions',
				text: 'Indicates whether the user wants to receive promotional email communications.',
			},
		},
	},
}

const t = computed(() => i18n[currentLang.value])
const fileNameText = computed(() => form.logotipo_empresa?.name || t.value.fileNone)

function toggleLanguage() {
	currentLang.value = currentLang.value === 'es' ? 'en' : 'es'

	if (form.logotipo_empresa && preview.show) {
		preview.type = preview.isImage ? t.value.previewImage : t.value.previewPdf
	}
}

function toggleHelp(key) {
	openHelp.value = openHelp.value === key ? null : key
}

function closeHelp() {
	openHelp.value = null
}

function setError(key, message) {
	errors[key] = message
}

function clearError(key) {
	errors[key] = ''
}

function validateRequiredText(key) {
	if (!String(form[key] || '').trim()) {
		setError(key, t.value.errors.required)
		return false
	}

	clearError(key)
	return true
}

function validateEmail(key) {
	const value = String(form[key] || '').trim()
	const regex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/

	if (!value) {
		setError(key, t.value.errors.required)
		return false
	}

	if (!regex.test(value)) {
		setError(key, t.value.errors.email)
		return false
	}

	clearError(key)
	return true
}

function onlyNumbers(key) {
	form[key] = String(form[key] || '')
		.replace(/\D/g, '')
		.slice(0, 12)
}

function validatePhone(key) {
	const value = String(form[key] || '').trim()
	const regex = /^[0-9]{10,12}$/

	if (!value) {
		setError(key, t.value.errors.required)
		return false
	}

	if (!regex.test(value)) {
		setError(key, t.value.errors.phone)
		return false
	}

	clearError(key)
	return true
}

function getExtension(file) {
	return file?.name?.split('.').pop()?.toLowerCase() || ''
}

function clearPreview() {
	if (preview.url) URL.revokeObjectURL(preview.url)

	preview.show = false
	preview.name = ''
	preview.type = ''
	preview.url = ''
	preview.isImage = false
}

function removeFile() {
	form.logotipo_empresa = null
	clearPreview()
	clearError('logotipo_empresa')

	if (fileInputRef.value) {
		fileInputRef.value.value = ''
	}
}

function showPreview(file) {
	clearPreview()

	const ext = getExtension(file)
	const isImage = ['png', 'jpg', 'jpeg', 'webp', 'svg'].includes(ext)

	preview.show = true
	preview.name = file.name
	preview.type = isImage ? t.value.previewImage : t.value.previewPdf
	preview.isImage = isImage
	preview.url = isImage ? URL.createObjectURL(file) : ''
}

function validateSelectedFile(updatePreview = true) {
	clearError('logotipo_empresa')

	const file = form.logotipo_empresa

	if (!file) {
		setError('logotipo_empresa', t.value.errors.fileRequired)
		return false
	}

	const ext = getExtension(file)

	if (!allowedExtensions.includes(ext)) {
		setError('logotipo_empresa', t.value.errors.fileType)
		return false
	}

	if (file.size > maxFileSize) {
		setError('logotipo_empresa', t.value.errors.fileSize)
		return false
	}

	if (updatePreview) {
		showPreview(file)
	}

	clearError('logotipo_empresa')
	return true
}

function handleFileChange(event) {
	const file = event.target.files?.[0] || null
	form.logotipo_empresa = file

	if (file) {
		validateSelectedFile(true)
	} else {
		removeFile()
	}
}

function validateCheckboxGroup() {
	if (!form.modelo_negocio.length) {
		setError('modelo_negocio', t.value.errors.modelRequired)
		return false
	}

	clearError('modelo_negocio')
	return true
}

function validateRadioGroup() {
	if (!form.promociones) {
		setError('promociones', t.value.errors.radioRequired)
		return false
	}

	clearError('promociones')
	return true
}

function resetForm() {
	form.correo_principal = ''
	form.nombre_comercial = ''
	form.logotipo_empresa = null
	form.owner_name = ''
	form.correo_contacto = ''
	form.telefono = ''
	form.mercados = ''
	form.modelo_negocio = []
	form.usuario_principal_nombre = ''
	form.usuario_principal_correo = ''
	form.usuario_principal_telefono = ''
	form.promociones = ''

	Object.keys(errors).forEach((key) => clearError(key))
	clearPreview()
	closeHelp()

	if (fileInputRef.value) {
		fileInputRef.value.value = ''
	}
}

function validateForm() {
	let valid = true

	if (!validateEmail('correo_principal')) valid = false
	if (!validateRequiredText('nombre_comercial')) valid = false
	if (!validateSelectedFile(true)) valid = false
	if (!validateRequiredText('owner_name')) valid = false
	if (!validateEmail('correo_contacto')) valid = false
	if (!validatePhone('telefono')) valid = false
	if (!validateRequiredText('mercados')) valid = false
	if (!validateCheckboxGroup()) valid = false
	if (!validateRequiredText('usuario_principal_nombre')) valid = false
	if (!validateEmail('usuario_principal_correo')) valid = false
	if (!validatePhone('usuario_principal_telefono')) valid = false
	if (!validateRadioGroup()) valid = false

	return valid
}

async function submitForm() {
	formStatus.text = ''
	formStatus.type = ''

	if (!validateForm()) {
		formStatus.text = t.value.statusFix
		formStatus.type = 'error'
		return
	}

	try {
		isSubmitting.value = true
		formStatus.text = t.value.statusSending
		formStatus.type = 'success'

		const formData = new FormData()
		formData.append('correo_principal', form.correo_principal)
		formData.append('nombre_comercial', form.nombre_comercial)
		formData.append('logotipo_empresa', form.logotipo_empresa)
		formData.append('owner_name', form.owner_name)
		formData.append('correo_contacto', form.correo_contacto)
		formData.append('telefono', form.telefono)
		formData.append('mercados', form.mercados)
		form.modelo_negocio.forEach((item) => formData.append('modelo_negocio[]', item))
		formData.append('usuario_principal_nombre', form.usuario_principal_nombre)
		formData.append('usuario_principal_correo', form.usuario_principal_correo)
		formData.append('usuario_principal_telefono', form.usuario_principal_telefono)
		formData.append('promociones', form.promociones)

		const response = await fetch('/api/enviar-registro.php', {
			method: 'POST',
			body: formData,
		})

		let result = {}

		try {
			result = await response.json()
		} catch (error) {
			result = {}
		}

		if (!response.ok || result.ok === false) {
			throw new Error(result.message || t.value.statusError)
		}

		formStatus.text = t.value.statusSuccess
		formStatus.type = 'success'
		resetForm()
	} catch (error) {
		formStatus.text = error.message || t.value.statusError
		formStatus.type = 'error'
	} finally {
		isSubmitting.value = false
	}
}
</script>

<template>
	<div class="registro-page font-outfit text-navy" @click="closeHelp">
		<div class="page-overlay"></div>

		<main class="registro-main">
			<section class="registro-section">
				<div class="timeline" aria-hidden="true">
					<div class="timeline-line"></div>
					<span class="timeline-dot gold" style="top: 7%"></span>
					<span class="timeline-dot gold" style="top: 15%"></span>
					<span class="timeline-dot navy" style="top: 23%"></span>
					<span class="timeline-dot gold" style="top: 33%"></span>
					<span class="timeline-dot navy" style="top: 43%"></span>
					<span class="timeline-dot gold" style="top: 56%"></span>
					<span class="timeline-dot navy" style="top: 69%"></span>
					<span class="timeline-dot gold" style="top: 82%"></span>
					<span class="timeline-dot navy" style="top: 92%"></span>
				</div>

				<div class="registro-card">
					<div class="registro-top-gold-bar"></div>

					<div class="registro-lang-wrap">
						<button
							type="button"
							class="lang-toggle"
							:data-lang="currentLang"
							aria-label="Cambiar idioma"
							@click.stop="toggleLanguage"
						>
							<span
								class="lang-thumb"
								:class="{ 'is-en': currentLang === 'en' }"
							></span>

							<span class="lang-labels">
								<span
									:class="
										currentLang === 'es'
											? 'lang-text-active'
											: 'lang-text-inactive'
									"
								>
									ES
								</span>
								<span
									:class="
										currentLang === 'en'
											? 'lang-text-active'
											: 'lang-text-inactive'
									"
								>
									EN
								</span>
							</span>
						</button>
					</div>

					<div class="registro-content">
						<div class="registro-logo-card float-gentle">
							<a href="/">
								<img
									:src="logoFormulario"
									alt="ABC Travelling Logo"
									class="registro-logo-img"
								/>
							</a>
						</div>

						<div class="registro-hero">
							<h1 class="registro-title" v-html="t.pageTitle"></h1>

							<p class="registro-subtitle">
								<span>{{ t.subtitleText }} </span>
								<strong>{{ t.subtitleStrong }}</strong>
							</p>
						</div>

						<form
							novalidate
							enctype="multipart/form-data"
							class="registro-form"
							@submit.prevent="submitForm"
						>
							<div class="registro-row">
								<div class="label-wrap">
									<label for="correo_principal" class="field-label">
										{{ t.labels.correo_principal }}
									</label>
									<button
										type="button"
										class="help-btn"
										@click.stop="toggleHelp('correo_principal')"
									>
										?
									</button>
									<div
										v-if="openHelp === 'correo_principal'"
										class="help-popover"
										@click.stop
									>
										<span class="help-popover-title">{{
											t.help.correo_principal.title
										}}</span>
										<span class="help-popover-text">{{
											t.help.correo_principal.text
										}}</span>
									</div>
								</div>

								<div class="field-wrap">
									<input
										id="correo_principal"
										v-model="form.correo_principal"
										type="email"
										name="correo_principal"
										class="field-input"
										:class="{ 'input-error': errors.correo_principal }"
										@blur="validateEmail('correo_principal')"
									/>
									<small class="error-text">{{ errors.correo_principal }}</small>
								</div>
							</div>

							<div class="registro-row">
								<div class="label-wrap">
									<label for="nombre_comercial" class="field-label">
										{{ t.labels.nombre_comercial }}
									</label>
									<button
										type="button"
										class="help-btn"
										@click.stop="toggleHelp('nombre_comercial')"
									>
										?
									</button>
									<div
										v-if="openHelp === 'nombre_comercial'"
										class="help-popover"
										@click.stop
									>
										<span class="help-popover-title">{{
											t.help.nombre_comercial.title
										}}</span>
										<span class="help-popover-text">{{
											t.help.nombre_comercial.text
										}}</span>
									</div>
								</div>

								<div class="field-wrap">
									<input
										id="nombre_comercial"
										v-model="form.nombre_comercial"
										type="text"
										name="nombre_comercial"
										class="field-input"
										:class="{ 'input-error': errors.nombre_comercial }"
										@blur="validateRequiredText('nombre_comercial')"
									/>
									<small class="error-text">{{ errors.nombre_comercial }}</small>
								</div>
							</div>

							<div class="registro-row">
								<div class="label-wrap">
									<label for="logotipo_empresa" class="field-label">
										{{ t.labels.logotipo_empresa }}
									</label>
									<button
										type="button"
										class="help-btn"
										@click.stop="toggleHelp('logotipo_empresa')"
									>
										?
									</button>
									<div
										v-if="openHelp === 'logotipo_empresa'"
										class="help-popover"
										@click.stop
									>
										<span class="help-popover-title">{{
											t.help.logotipo_empresa.title
										}}</span>
										<span class="help-popover-text">{{
											t.help.logotipo_empresa.text
										}}</span>
									</div>
								</div>

								<div class="field-wrap">
									<div class="file-field">
										<input
											id="logotipo_empresa"
											ref="fileInputRef"
											type="file"
											name="logotipo_empresa"
											accept=".png,.jpg,.jpeg,.webp,.svg,.pdf"
											class="file-input-hidden"
											@change="handleFileChange"
										/>

										<label
											for="logotipo_empresa"
											class="upload-label-tailwind"
											:class="{ 'upload-error': errors.logotipo_empresa }"
										>
											<span class="upload-left">
												<span class="upload-icon">↑</span>

												<span class="upload-text">
													<strong>{{ t.uploadTitle }}</strong>
													<span>{{ t.uploadSubtitle }}</span>
												</span>
											</span>

											<span class="upload-button-tailwind">
												{{ t.uploadButton }}
											</span>
										</label>
									</div>

									<div v-if="preview.show" class="file-preview">
										<div
											class="preview-thumb"
											:class="
												preview.isImage
													? 'preview-image-bg'
													: 'preview-pdf-bg'
											"
										>
											<img
												v-if="preview.isImage"
												:src="preview.url"
												alt="Preview"
												class="preview-image"
											/>
											<span v-else>PDF</span>
										</div>

										<div class="preview-info">
											<strong>{{ preview.name }}</strong>
											<span>{{ preview.type }}</span>
										</div>

										<button
											type="button"
											class="remove-file-btn"
											@click="removeFile"
										>
											×
										</button>
									</div>

									<small class="file-name-text">{{ fileNameText }}</small>
									<small class="error-text">{{ errors.logotipo_empresa }}</small>
								</div>
							</div>

							<div class="registro-row">
								<div class="label-wrap">
									<label for="owner_name" class="field-label">
										{{ t.labels.owner_name }}
									</label>
									<button
										type="button"
										class="help-btn"
										@click.stop="toggleHelp('owner_name')"
									>
										?
									</button>
									<div
										v-if="openHelp === 'owner_name'"
										class="help-popover"
										@click.stop
									>
										<span class="help-popover-title">{{
											t.help.owner_name.title
										}}</span>
										<span class="help-popover-text">{{
											t.help.owner_name.text
										}}</span>
									</div>
								</div>

								<div class="field-wrap">
									<input
										id="owner_name"
										v-model="form.owner_name"
										type="text"
										name="owner_name"
										class="field-input"
										:class="{ 'input-error': errors.owner_name }"
										@blur="validateRequiredText('owner_name')"
									/>
									<small class="error-text">{{ errors.owner_name }}</small>
								</div>
							</div>

							<div class="registro-row">
								<div class="label-wrap">
									<label for="correo_contacto" class="field-label">
										{{ t.labels.correo_contacto }}
									</label>
									<button
										type="button"
										class="help-btn"
										@click.stop="toggleHelp('correo_contacto')"
									>
										?
									</button>
									<div
										v-if="openHelp === 'correo_contacto'"
										class="help-popover"
										@click.stop
									>
										<span class="help-popover-title">{{
											t.help.correo_contacto.title
										}}</span>
										<span class="help-popover-text">{{
											t.help.correo_contacto.text
										}}</span>
									</div>
								</div>

								<div class="field-wrap">
									<input
										id="correo_contacto"
										v-model="form.correo_contacto"
										type="email"
										name="correo_contacto"
										class="field-input"
										:class="{ 'input-error': errors.correo_contacto }"
										@blur="validateEmail('correo_contacto')"
									/>
									<small class="error-text">{{ errors.correo_contacto }}</small>
								</div>
							</div>

							<div class="registro-row">
								<div class="label-wrap">
									<label for="telefono" class="field-label">
										{{ t.labels.telefono }}
									</label>
									<button
										type="button"
										class="help-btn"
										@click.stop="toggleHelp('telefono')"
									>
										?
									</button>
									<div
										v-if="openHelp === 'telefono'"
										class="help-popover"
										@click.stop
									>
										<span class="help-popover-title">{{
											t.help.telefono.title
										}}</span>
										<span class="help-popover-text">{{
											t.help.telefono.text
										}}</span>
									</div>
								</div>

								<div class="field-wrap">
									<input
										id="telefono"
										v-model="form.telefono"
										type="text"
										name="telefono"
										maxlength="12"
										inputmode="numeric"
										pattern="[0-9]*"
										class="field-input"
										:class="{ 'input-error': errors.telefono }"
										@input="onlyNumbers('telefono')"
										@blur="validatePhone('telefono')"
									/>
									<small class="error-text">{{ errors.telefono }}</small>
								</div>
							</div>

							<div class="registro-row">
								<div class="label-wrap">
									<label for="mercados" class="field-label">
										{{ t.labels.mercados }}
									</label>
									<button
										type="button"
										class="help-btn"
										@click.stop="toggleHelp('mercados')"
									>
										?
									</button>
									<div
										v-if="openHelp === 'mercados'"
										class="help-popover"
										@click.stop
									>
										<span class="help-popover-title">{{
											t.help.mercados.title
										}}</span>
										<span class="help-popover-text">{{
											t.help.mercados.text
										}}</span>
									</div>
								</div>

								<div class="field-wrap">
									<input
										id="mercados"
										v-model="form.mercados"
										type="text"
										name="mercados"
										class="field-input"
										:class="{ 'input-error': errors.mercados }"
										@blur="validateRequiredText('mercados')"
									/>
									<small class="error-text">{{ errors.mercados }}</small>
								</div>
							</div>

							<div class="registro-row">
								<div class="label-wrap">
									<label class="field-label">
										{{ t.labels.modelo_negocio }}
									</label>
									<button
										type="button"
										class="help-btn"
										@click.stop="toggleHelp('modelo_negocio')"
									>
										?
									</button>
									<div
										v-if="openHelp === 'modelo_negocio'"
										class="help-popover"
										@click.stop
									>
										<span class="help-popover-title">{{
											t.help.modelo_negocio.title
										}}</span>
										<span class="help-popover-text">{{
											t.help.modelo_negocio.text
										}}</span>
									</div>
								</div>

								<div class="field-wrap">
									<div class="choice-group">
										<label class="choice-item">
											<input
												v-model="form.modelo_negocio"
												type="checkbox"
												name="modelo_negocio[]"
												value="B2C"
												class="choice-check"
												@change="validateCheckboxGroup"
											/>
											<span>B2C</span>
										</label>

										<label class="choice-item">
											<input
												v-model="form.modelo_negocio"
												type="checkbox"
												name="modelo_negocio[]"
												value="B2B"
												class="choice-check"
												@change="validateCheckboxGroup"
											/>
											<span>B2B</span>
										</label>

										<label class="choice-item">
											<input
												v-model="form.modelo_negocio"
												type="checkbox"
												name="modelo_negocio[]"
												value="B2C2B"
												class="choice-check"
												@change="validateCheckboxGroup"
											/>
											<span>B2C2B</span>
										</label>
									</div>

									<small class="error-text">{{ errors.modelo_negocio }}</small>
								</div>
							</div>

							<div class="registro-row-full">
								<div class="label-wrap">
									<label for="usuario_principal_nombre" class="field-label">
										{{ t.labels.usuario_principal_nombre }}
									</label>
									<button
										type="button"
										class="help-btn"
										@click.stop="toggleHelp('usuario_principal_nombre')"
									>
										?
									</button>
									<div
										v-if="openHelp === 'usuario_principal_nombre'"
										class="help-popover"
										@click.stop
									>
										<span class="help-popover-title">
											{{ t.help.usuario_principal_nombre.title }}
										</span>
										<span class="help-popover-text">
											{{ t.help.usuario_principal_nombre.text }}
										</span>
									</div>
								</div>

								<div class="field-wrap">
									<input
										id="usuario_principal_nombre"
										v-model="form.usuario_principal_nombre"
										type="text"
										name="usuario_principal_nombre"
										class="field-input"
										:class="{ 'input-error': errors.usuario_principal_nombre }"
										@blur="validateRequiredText('usuario_principal_nombre')"
									/>
									<small class="error-text">{{
										errors.usuario_principal_nombre
									}}</small>
								</div>
							</div>

							<div class="registro-row-full">
								<div class="label-wrap">
									<label for="usuario_principal_correo" class="field-label">
										{{ t.labels.usuario_principal_correo }}
									</label>
									<button
										type="button"
										class="help-btn"
										@click.stop="toggleHelp('usuario_principal_correo')"
									>
										?
									</button>
									<div
										v-if="openHelp === 'usuario_principal_correo'"
										class="help-popover"
										@click.stop
									>
										<span class="help-popover-title">
											{{ t.help.usuario_principal_correo.title }}
										</span>
										<span class="help-popover-text">
											{{ t.help.usuario_principal_correo.text }}
										</span>
									</div>
								</div>

								<div class="field-wrap">
									<input
										id="usuario_principal_correo"
										v-model="form.usuario_principal_correo"
										type="email"
										name="usuario_principal_correo"
										class="field-input"
										:class="{ 'input-error': errors.usuario_principal_correo }"
										@blur="validateEmail('usuario_principal_correo')"
									/>
									<small class="error-text">{{
										errors.usuario_principal_correo
									}}</small>
								</div>
							</div>

							<div class="registro-row-full">
								<div class="label-wrap">
									<label for="usuario_principal_telefono" class="field-label">
										{{ t.labels.usuario_principal_telefono }}
									</label>
									<button
										type="button"
										class="help-btn"
										@click.stop="toggleHelp('usuario_principal_telefono')"
									>
										?
									</button>
									<div
										v-if="openHelp === 'usuario_principal_telefono'"
										class="help-popover"
										@click.stop
									>
										<span class="help-popover-title">
											{{ t.help.usuario_principal_telefono.title }}
										</span>
										<span class="help-popover-text">
											{{ t.help.usuario_principal_telefono.text }}
										</span>
									</div>
								</div>

								<div class="field-wrap">
									<input
										id="usuario_principal_telefono"
										v-model="form.usuario_principal_telefono"
										type="text"
										name="usuario_principal_telefono"
										maxlength="12"
										inputmode="numeric"
										pattern="[0-9]*"
										class="field-input"
										:class="{
											'input-error': errors.usuario_principal_telefono,
										}"
										@input="onlyNumbers('usuario_principal_telefono')"
										@blur="validatePhone('usuario_principal_telefono')"
									/>
									<small class="error-text">{{
										errors.usuario_principal_telefono
									}}</small>
								</div>
							</div>

							<div class="registro-row-full">
								<div class="label-wrap">
									<label class="field-label">
										{{ t.labels.promociones }}
									</label>
									<button
										type="button"
										class="help-btn"
										@click.stop="toggleHelp('promociones')"
									>
										?
									</button>
									<div
										v-if="openHelp === 'promociones'"
										class="help-popover"
										@click.stop
									>
										<span class="help-popover-title">{{
											t.help.promociones.title
										}}</span>
										<span class="help-popover-text">{{
											t.help.promociones.text
										}}</span>
									</div>
								</div>

								<div class="field-wrap">
									<div class="choice-group">
										<label class="choice-item">
											<input
												v-model="form.promociones"
												type="radio"
												name="promociones"
												value="si"
												class="choice-check rounded-full"
												@change="validateRadioGroup"
											/>
											<span>{{ t.yes }}</span>
										</label>

										<label class="choice-item">
											<input
												v-model="form.promociones"
												type="radio"
												name="promociones"
												value="no"
												class="choice-check rounded-full"
												@change="validateRadioGroup"
											/>
											<span>{{ t.no }}</span>
										</label>
									</div>

									<small class="error-text">{{ errors.promociones }}</small>
								</div>
							</div>

							<div class="submit-wrap">
								<button type="submit" class="submit-btn" :disabled="isSubmitting">
									<span>{{ t.submit }}</span>
									<span v-if="isSubmitting" class="btn-loader"></span>
								</button>

								<div
									class="form-status"
									:class="{
										success: formStatus.type === 'success',
										error: formStatus.type === 'error',
									}"
								>
									{{ formStatus.text }}
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
		</main>
	</div>
</template>
