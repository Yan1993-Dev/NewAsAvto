<?php
require_once 'PHPMailer/PHPMailerAutoload.php';

$admin_email = array();
if(isset($files) && is_array($files)) foreach ( $_POST["admin_email"] as $key => $value ) {
	array_push($admin_email, $value);
}

$form_subject = trim($_POST["form_subject"]);

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';



$c = true;
$message = '';
if(isset($files) && is_array($files)) foreach ( $_POST as $key => $value ) {
	if ( $value != ""  && $key != "admin_email" && $key != "form_subject" ) {
		if (is_array($value)) {
			$val_text = '';
			foreach ($value as $val) {
				if ($val && $val != '') {
					$val_text .= ($val_text==''?'':', ').$val;
				}
			}
			$value = $val_text;
		}
		$message .= "
		" . ( ($c = !$c) ? '<tr>':'<tr>' ) . "
		<td style='padding: 10px; max-width: auto;'><b>$key:</b></td>
		<td style='padding: 10px; max-width: 100%;'>$value</td>
		</tr>
		";
	}
}
$message = "<table style='max-width: 50%;'>$message</table>";


// От кого
$mail->setFrom('adm@' . $_SERVER['HTTP_HOST'], 'Your best site');
 
// Кому
if(isset($files) && is_array($files)) foreach ( $admin_email as $key => $value ) {
	$mail->addAddress($value);
}
// Тема письма
$mail->Subject = $form_subject;
 
// Тело письма
$body = $message;
// $mail->isHTML(true);  это если прям верстка
$mail->msgHTML($body);

// Приложения
if ($_FILES){
	if(isset($files) && is_array($files)) foreach ( $_FILES['file']['tmp_name'] as $key => $value ) {
		$mail->addAttachment($value, $_FILES['file']['name'][$key]);
	}
}
$mail->send();
?>