<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

/*
|--------------------------------------------------------------------------
| Rutas
|--------------------------------------------------------------------------
| Este archivo está en: public/api/enviar-registro.php
| vendor y .env están en la raíz del proyecto.
*/
require __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->safeLoad();

function responseJson(bool $ok, string $message, array $extra = []): void
{
	echo json_encode(array_merge([
		'ok' => $ok,
		'message' => $message,
	], $extra), JSON_UNESCAPED_UNICODE);

	exit;
}

function envValue(string $key, ?string $default = null): ?string
{
	$value = $_ENV[$key] ?? $_SERVER[$key] ?? $default;

	if (is_string($value)) {
		return trim($value);
	}

	return $value;
}

function h(string $value): string
{
	return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function cleanText(string $value, int $max = 500): string
{
	$value = trim($value);
	$value = preg_replace('/[\x00-\x1F\x7F]/u', ' ', $value);
	$value = preg_replace('/\s+/', ' ', $value);

	return mb_substr($value, 0, $max, 'UTF-8');
}

function buildEmailHtml(array $data): string
{
	$rows = [
		'Correo principal' => $data['correo_principal'],
		'Nombre comercial' => $data['nombre_comercial'],
		'Logotipo adjunto' => $data['logotipo_adj'],
		'Nombre del dueño o gerente' => $data['owner_name'],
		'Correo de contacto' => $data['correo_contacto'],
		'Teléfono' => $data['telefono'],
		'Mercados operados' => $data['mercados'],
		'Modelo de negocio' => $data['modelos_texto'],
		'Usuario principal' => $data['usuario_principal_nombre'],
		'Correo del usuario principal' => $data['usuario_principal_correo'],
		'Teléfono del usuario principal' => $data['usuario_principal_telefono'],
		'Promociones' => $data['promociones'],
	];

	$tableRows = '';

	foreach ($rows as $label => $value) {
		$tableRows .= '
			<tr>
				<td style="padding:12px 14px;border-bottom:1px solid #e5e7eb;background:#f8fafc;font-weight:700;color:#1c2636;width:260px;">
					' . h((string) $label) . '
				</td>
				<td style="padding:12px 14px;border-bottom:1px solid #e5e7eb;color:#334155;background:#ffffff;">
					' . h((string) $value) . '
				</td>
			</tr>
		';
	}

	return '
	<div style="margin:0;padding:24px;background:#f1f5f9;font-family:Arial,Helvetica,sans-serif;">
		<div style="max-width:840px;margin:0 auto;background:#ffffff;border-radius:20px;overflow:hidden;box-shadow:0 18px 45px rgba(0,0,0,0.08);">
			<div style="background:linear-gradient(90deg,#1c2636 0%,#243248 100%);padding:28px 30px;">
				<div style="font-size:12px;letter-spacing:1.6px;text-transform:uppercase;color:#cbd5e1;font-weight:700;">
					ABC Travelling
				</div>

				<h1 style="margin:8px 0 0 0;font-size:28px;line-height:1.15;color:#ffffff;">
					Nuevo registro recibido
				</h1>

				<p style="margin:10px 0 0 0;font-size:14px;line-height:1.5;color:#dbe4ee;">
					Se ha enviado un nuevo formulario desde el sitio web.
				</p>
			</div>

			<div style="padding:28px 30px 10px 30px;">
				<div style="display:inline-block;background:#f8f5ee;color:#8c7547;border:1px solid #eadfca;border-radius:999px;padding:8px 14px;font-size:12px;font-weight:700;letter-spacing:.4px;">
					Registro de negocio y usuario principal
				</div>

				<p style="margin:18px 0 22px 0;color:#475569;font-size:14px;line-height:1.6;">
					A continuación se muestran los datos capturados en el formulario:
				</p>

				<table style="width:100%;border-collapse:collapse;border:1px solid #e5e7eb;border-radius:16px;overflow:hidden;">
					' . $tableRows . '
				</table>
			</div>

			<div style="padding:20px 30px 28px 30px;">
				<div style="background:#f8fafc;border:1px solid #e5e7eb;border-radius:14px;padding:14px 16px;color:#64748b;font-size:13px;line-height:1.5;">
					Este correo fue generado automáticamente por el formulario de registro de ABC Travelling.
				</div>
			</div>
		</div>
	</div>';
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	responseJson(false, 'Método no permitido.');
}

/*
|--------------------------------------------------------------------------
| Honeypot opcional contra bots
|--------------------------------------------------------------------------
| Si algún bot llena este campo oculto, se rechaza.
*/
$honeypot = trim((string) ($_POST['website'] ?? ''));

if ($honeypot !== '') {
	responseJson(false, 'Solicitud no válida.');
}

/*
|--------------------------------------------------------------------------
| Validar variables del .env
|--------------------------------------------------------------------------
*/
$requiredEnv = [
	'MAIL_HOST',
	'MAIL_PORT',
	'MAIL_USERNAME',
	'MAIL_PASSWORD',
	'MAIL_ENCRYPTION',
	'MAIL_FROM_ADDRESS',
	'MAIL_FROM_NAME',
	'MAIL_TO_REGISTER',
	'MAIL_TO_REGISTER_NAME',
];

foreach ($requiredEnv as $envKey) {
	if (envValue($envKey) === null || envValue($envKey) === '') {
		responseJson(false, "Falta la variable de entorno {$envKey} en el .env.");
	}
}

/*
|--------------------------------------------------------------------------
| Recibir datos del formulario
|--------------------------------------------------------------------------
*/
$correo_principal = cleanText((string) ($_POST['correo_principal'] ?? ''), 180);
$nombre_comercial = cleanText((string) ($_POST['nombre_comercial'] ?? ''), 180);
$owner_name = cleanText((string) ($_POST['owner_name'] ?? ''), 180);
$correo_contacto = cleanText((string) ($_POST['correo_contacto'] ?? ''), 180);
$telefono = cleanText((string) ($_POST['telefono'] ?? ''), 20);
$mercados = cleanText((string) ($_POST['mercados'] ?? ''), 500);
$usuario_principal_nombre = cleanText((string) ($_POST['usuario_principal_nombre'] ?? ''), 180);
$usuario_principal_correo = cleanText((string) ($_POST['usuario_principal_correo'] ?? ''), 180);
$usuario_principal_telefono = cleanText((string) ($_POST['usuario_principal_telefono'] ?? ''), 20);
$promociones = cleanText((string) ($_POST['promociones'] ?? ''), 20);

$modelos = $_POST['modelo_negocio'] ?? [];

if (!is_array($modelos)) {
	$modelos = [];
}

$modelos = array_values(array_filter(array_map(
	static fn($value) => cleanText((string) $value, 20),
	$modelos
), static fn($value) => $value !== ''));

$modelosPermitidos = ['B2C', 'B2B', 'B2C2B'];

foreach ($modelos as $modelo) {
	if (!in_array($modelo, $modelosPermitidos, true)) {
		responseJson(false, 'Se recibió un modelo de negocio no válido.');
	}
}

$modelos_texto = implode(', ', $modelos);

/*
|--------------------------------------------------------------------------
| Validaciones
|--------------------------------------------------------------------------
*/
$requiredFields = [
	'correo_principal' => $correo_principal,
	'nombre_comercial' => $nombre_comercial,
	'owner_name' => $owner_name,
	'correo_contacto' => $correo_contacto,
	'telefono' => $telefono,
	'mercados' => $mercados,
	'usuario_principal_nombre' => $usuario_principal_nombre,
	'usuario_principal_correo' => $usuario_principal_correo,
	'usuario_principal_telefono' => $usuario_principal_telefono,
	'promociones' => $promociones,
];

foreach ($requiredFields as $fieldName => $fieldValue) {
	if ($fieldValue === '') {
		responseJson(false, "Falta el campo obligatorio: {$fieldName}.");
	}
}

if (!filter_var($correo_principal, FILTER_VALIDATE_EMAIL)) {
	responseJson(false, 'El correo principal no es válido.');
}

if (!filter_var($correo_contacto, FILTER_VALIDATE_EMAIL)) {
	responseJson(false, 'El correo de contacto no es válido.');
}

if (!filter_var($usuario_principal_correo, FILTER_VALIDATE_EMAIL)) {
	responseJson(false, 'El correo del usuario principal no es válido.');
}

if (!preg_match('/^[0-9]{10,12}$/', $telefono)) {
	responseJson(false, 'El teléfono principal debe contener entre 10 y 12 dígitos.');
}

if (!preg_match('/^[0-9]{10,12}$/', $usuario_principal_telefono)) {
	responseJson(false, 'El teléfono del usuario principal debe contener entre 10 y 12 dígitos.');
}

if (count($modelos) === 0) {
	responseJson(false, 'Debes seleccionar al menos un modelo de negocio.');
}

$promocionNormalizada = mb_strtolower($promociones, 'UTF-8');

if (!in_array($promocionNormalizada, ['si', 'sí', 'no', 'yes'], true)) {
	responseJson(false, 'La opción de promociones no es válida.');
}

/*
|--------------------------------------------------------------------------
| Validar archivo adjunto
|--------------------------------------------------------------------------
*/
if (
	!isset($_FILES['logotipo_empresa']) ||
	!is_array($_FILES['logotipo_empresa']) ||
	(int) ($_FILES['logotipo_empresa']['error'] ?? UPLOAD_ERR_NO_FILE) === UPLOAD_ERR_NO_FILE
) {
	responseJson(false, 'Debes subir el logotipo de la empresa.');
}

$file = $_FILES['logotipo_empresa'];

if ((int) ($file['error'] ?? UPLOAD_ERR_OK) !== UPLOAD_ERR_OK) {
	responseJson(false, 'Hubo un problema al subir el archivo.');
}

$archivoTmp = (string) ($file['tmp_name'] ?? '');
$archivoNombre = (string) ($file['name'] ?? '');
$archivoSize = (int) ($file['size'] ?? 0);

if ($archivoTmp === '' || !is_uploaded_file($archivoTmp)) {
	responseJson(false, 'El archivo subido no es válido.');
}

$maxFileSize = 8 * 1024 * 1024;

if ($archivoSize > $maxFileSize) {
	responseJson(false, 'El archivo supera el tamaño máximo permitido de 8MB.');
}

$extension = strtolower((string) pathinfo($archivoNombre, PATHINFO_EXTENSION));
$allowedExtensions = ['png', 'jpg', 'jpeg', 'webp', 'svg', 'pdf'];

if (!in_array($extension, $allowedExtensions, true)) {
	responseJson(false, 'Formato de archivo no permitido. Solo PNG, JPG, JPEG, WEBP, SVG o PDF.');
}

/*
|--------------------------------------------------------------------------
| Validación real del MIME
|--------------------------------------------------------------------------
*/
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime = (string) $finfo->file($archivoTmp);

$allowedMimes = [
	'image/png',
	'image/jpeg',
	'image/webp',
	'image/svg+xml',
	'application/pdf',
];

if (!in_array($mime, $allowedMimes, true)) {
	responseJson(false, 'El tipo real del archivo no está permitido.');
}

/*
|--------------------------------------------------------------------------
| Configurar PHPMailer con .env
|--------------------------------------------------------------------------
*/
$mailHost = (string) envValue('MAIL_HOST');
$mailPort = (int) envValue('MAIL_PORT');
$mailUsername = (string) envValue('MAIL_USERNAME');
$mailPassword = (string) envValue('MAIL_PASSWORD');
$mailEncryption = strtolower((string) envValue('MAIL_ENCRYPTION'));
$mailFromAddress = (string) envValue('MAIL_FROM_ADDRESS');
$mailFromName = (string) envValue('MAIL_FROM_NAME');
$mailToAddress = (string) envValue('MAIL_TO_REGISTER');
$mailToName = (string) envValue('MAIL_TO_REGISTER_NAME');

if (!filter_var($mailFromAddress, FILTER_VALIDATE_EMAIL)) {
	responseJson(false, 'MAIL_FROM_ADDRESS no es un correo válido.');
}

if (!filter_var($mailToAddress, FILTER_VALIDATE_EMAIL)) {
	responseJson(false, 'MAIL_TO_REGISTER no es un correo válido.');
}

$smtpSecure = PHPMailer::ENCRYPTION_STARTTLS;

if ($mailEncryption === 'ssl' || $mailEncryption === 'smtps') {
	$smtpSecure = PHPMailer::ENCRYPTION_SMTPS;
}

/*
|--------------------------------------------------------------------------
| Enviar correo
|--------------------------------------------------------------------------
*/
$mail = new PHPMailer(true);

try {
	$mail->isSMTP();
	$mail->Host = $mailHost;
	$mail->SMTPAuth = true;
	$mail->Username = $mailUsername;
	$mail->Password = $mailPassword;
	$mail->SMTPSecure = $smtpSecure;
	$mail->Port = $mailPort;
	$mail->CharSet = 'UTF-8';

	$mail->setFrom($mailFromAddress, $mailFromName);
	$mail->addAddress($mailToAddress, $mailToName);

	$mail->addReplyTo(
		$correo_principal,
		$nombre_comercial !== '' ? $nombre_comercial : 'Contacto de registro'
	);

	$mail->addAttachment($archivoTmp, $archivoNombre);

	$mail->isHTML(true);
	$mail->Subject = 'Nuevo registro ABC Travelling - ' . $nombre_comercial;

	$mail->Body = buildEmailHtml([
		'correo_principal' => $correo_principal,
		'nombre_comercial' => $nombre_comercial,
		'logotipo_adj' => 'Sí',
		'owner_name' => $owner_name,
		'correo_contacto' => $correo_contacto,
		'telefono' => $telefono,
		'mercados' => $mercados,
		'modelos_texto' => $modelos_texto,
		'usuario_principal_nombre' => $usuario_principal_nombre,
		'usuario_principal_correo' => $usuario_principal_correo,
		'usuario_principal_telefono' => $usuario_principal_telefono,
		'promociones' => $promocionNormalizada,
	]);

	$mail->AltBody =
		"Nuevo registro recibido\n\n" .
		"Correo principal: {$correo_principal}\n" .
		"Nombre comercial: {$nombre_comercial}\n" .
		"Logotipo adjunto: Sí\n" .
		"Nombre del dueño o gerente: {$owner_name}\n" .
		"Correo de contacto: {$correo_contacto}\n" .
		"Teléfono: {$telefono}\n" .
		"Mercados operados: {$mercados}\n" .
		"Modelo de negocio: {$modelos_texto}\n" .
		"Usuario principal: {$usuario_principal_nombre}\n" .
		"Correo del usuario principal: {$usuario_principal_correo}\n" .
		"Teléfono del usuario principal: {$usuario_principal_telefono}\n" .
		"Promociones: {$promociones}\n";

	$mail->send();

	responseJson(true, 'Registro enviado correctamente.');
} catch (Exception $e) {
	responseJson(false, 'No se pudo enviar el registro. Verifica la configuración SMTP.');
} catch (Throwable $e) {
	responseJson(false, 'Error interno del servidor.');
}