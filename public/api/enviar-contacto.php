<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

/*
|--------------------------------------------------------------------------
| Este archivo está en: public/api/enviar-contacto.php
| vendor y .env están en la raíz del proyecto.
|--------------------------------------------------------------------------
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

function cleanMessage(string $value, int $max = 3000): string
{
	$value = trim($value);
	$value = str_replace(["\r\n", "\r"], "\n", $value);
	$value = preg_replace('/[^\P{C}\n\t]/u', '', $value);

	return mb_substr($value, 0, $max, 'UTF-8');
}

function buildEmailHtml(array $data): string
{
	$rows = [
		'Nombre' => $data['nombre'],
		'Correo' => $data['correo'],
		'Empresa' => $data['empresa'],
		'Mensaje' => $data['mensaje'],
		'Origen' => $data['origen'],
	];

	$tableRows = '';

	foreach ($rows as $label => $value) {
		$tableRows .= '
			<tr>
				<td style="padding:12px 14px;border-bottom:1px solid #e5e7eb;background:#f8fafc;font-weight:700;color:#1c2636;width:220px;">
					' . h((string) $label) . '
				</td>
				<td style="padding:12px 14px;border-bottom:1px solid #e5e7eb;color:#334155;background:#ffffff;">
					' . nl2br(h((string) $value)) . '
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
					Nuevo mensaje de contacto
				</h1>

				<p style="margin:10px 0 0 0;font-size:14px;line-height:1.5;color:#dbe4ee;">
					Se ha enviado un nuevo mensaje desde el formulario de contacto del sitio web.
				</p>
			</div>

			<div style="padding:28px 30px 10px 30px;">
				<div style="display:inline-block;background:#f8f5ee;color:#8c7547;border:1px solid #eadfca;border-radius:999px;padding:8px 14px;font-size:12px;font-weight:700;letter-spacing:.4px;">
					Formulario de contacto
				</div>

				<p style="margin:18px 0 22px 0;color:#475569;font-size:14px;line-height:1.6;">
					A continuación se muestran los datos capturados:
				</p>

				<table style="width:100%;border-collapse:collapse;border:1px solid #e5e7eb;border-radius:16px;overflow:hidden;">
					' . $tableRows . '
				</table>
			</div>

			<div style="padding:20px 30px 28px 30px;">
				<div style="background:#f8fafc;border:1px solid #e5e7eb;border-radius:14px;padding:14px 16px;color:#64748b;font-size:13px;line-height:1.5;">
					Este correo fue generado automáticamente por el formulario de contacto de ABC Travelling.
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
	'MAIL_TO_CONTACT',
	'MAIL_TO_CONTACT_NAME',
];

foreach ($requiredEnv as $envKey) {
	if (envValue($envKey) === null || envValue($envKey) === '') {
		responseJson(false, "Falta la variable de entorno {$envKey} en el .env.");
	}
}

/*
|--------------------------------------------------------------------------
| Recibir JSON desde Vue
|--------------------------------------------------------------------------
*/
$rawBody = file_get_contents('php://input');
$payload = json_decode($rawBody ?: '', true);

if (!is_array($payload)) {
	responseJson(false, 'Solicitud no válida.');
}

/*
|--------------------------------------------------------------------------
| Honeypot opcional
|--------------------------------------------------------------------------
*/
$honeypot = cleanText((string) ($payload['website'] ?? ''), 100);

if ($honeypot !== '') {
	responseJson(false, 'Solicitud no válida.');
}

/*
|--------------------------------------------------------------------------
| Recibir y limpiar campos
|--------------------------------------------------------------------------
*/
$nombre = cleanText((string) ($payload['nombre'] ?? ''), 150);
$correo = cleanText((string) ($payload['correo'] ?? ''), 180);
$empresa = cleanText((string) ($payload['empresa'] ?? ''), 180);
$mensaje = cleanMessage((string) ($payload['mensaje'] ?? ''), 3000);
$origen = cleanText((string) ($payload['origen'] ?? 'ABC Travelling'), 120);

/*
|--------------------------------------------------------------------------
| Validaciones
|--------------------------------------------------------------------------
*/
if ($nombre === '' || $correo === '' || $empresa === '' || $mensaje === '') {
	responseJson(false, 'Completa todos los campos del formulario de contacto.');
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
	responseJson(false, 'El correo no es válido.');
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

$mailToAddress = (string) envValue('MAIL_TO_CONTACT');
$mailToName = (string) envValue('MAIL_TO_CONTACT_NAME');

if (!filter_var($mailFromAddress, FILTER_VALIDATE_EMAIL)) {
	responseJson(false, 'MAIL_FROM_ADDRESS no es un correo válido.');
}

if (!filter_var($mailToAddress, FILTER_VALIDATE_EMAIL)) {
	responseJson(false, 'MAIL_TO_CONTACT no es un correo válido.');
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
	$mail->addReplyTo($correo, $nombre);

	$mail->isHTML(true);
	$mail->Subject = 'Nuevo mensaje de contacto ABC Travelling - ' . $nombre;

	$mail->Body = buildEmailHtml([
		'nombre' => $nombre,
		'correo' => $correo,
		'empresa' => $empresa,
		'mensaje' => $mensaje,
		'origen' => $origen,
	]);

	$mail->AltBody =
		"Nuevo mensaje de contacto\n\n" .
		"Nombre: {$nombre}\n" .
		"Correo: {$correo}\n" .
		"Empresa: {$empresa}\n" .
		"Mensaje:\n{$mensaje}\n" .
		"Origen: {$origen}\n";

	$mail->send();

	responseJson(true, 'Mensaje enviado correctamente.');
} catch (Exception $e) {
	responseJson(false, 'No se pudo enviar el mensaje. Verifica la configuración SMTP.');
} catch (Throwable $e) {
	responseJson(false, 'Error interno del servidor.');
}