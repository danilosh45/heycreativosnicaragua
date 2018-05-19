<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Envío de Formulario Home',
	'heading' => 'Envío de nuevo formulario',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Marcada',
		'checkbox_unchecked' => 'No marcada',
		'submitted_from' => 'Formulario enviado desde el sitio web: %s',
		'submitted_by' => 'Dirección IP del visitante: %s',
		'too_many_submissions' => 'Se han realizado recientemente demasiados envíos a través de esta IP',
		'failed_to_send_email' => 'Error al enviar el correo electrónico',
		'invalid_reCAPTCHA_private_key' => 'Clave privada de reCAPTCHA no válida.',
		'invalid_reCAPTCHA2_private_key' => 'Clave privada de reCAPTCHA 2.0 no válida.',
		'invalid_reCAPTCHA2_server_response' => 'Respuesta de servidor de reCAPTCHA 2.0 no válida.',
		'invalid_field_type' => 'Tipo de campo desconocido: %s.',
		'invalid_form_config' => 'El campo \'%s\' contiene una configuración no válida.',
		'unknown_method' => 'Método de solicitud de servidor desconocido'
	),
	'email' => array(
		'from' => 'youremail@website.com',
		'to' => 'youremail@website.com'
	),
	'fields' => array(
		'custom_U15067' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'NAME',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'NAME\' es obligatorio.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'EMAIL',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'EMAIL\' es obligatorio.',
				'format' => 'El campo \'EMAIL\' contiene un correo electrónico no válido.'
			)
		),
		'custom_U15063' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'CELULAR',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'CELULAR\' es obligatorio.'
			)
		)
	)
);

process_form($form);
?>
