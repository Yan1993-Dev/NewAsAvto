<?php
$form_data = array();
function generateMessage($arItems)
{

	if (!is_array($arItems)) return "";

	$message = "";
	foreach ($arItems as $key => $value) {
		if ($value) {
			$message .= "<p><b>$key</b>: $value</p>\n";
		}
	}
	return $message;
}


if ($_POST) {
	$inputText = [
		"Name" => htmlspecialchars($_POST["name"]),
		"Phone" => htmlspecialchars($_POST["phone"]),
	];
	if (isset($_POST['model']))
		$inputText['Марка вашего автомобиля'] = htmlspecialchars($_POST["model"]);
	if (isset($_POST['schedule']))
		$inputText['Date'] = htmlspecialchars($_POST["schedule"]);
	if (isset($_POST['equipment']))
		$inputText['First-pay'] = htmlspecialchars($_POST["first-pay"]);
	if (isset($_POST['message']))
		$inputText['Message'] = htmlspecialchars($_POST["message"]);
	if (isset($_POST['select-model']))
		$inputText['Модель вашего автомобиля'] = htmlspecialchars($_POST["select-model"]);
	if (isset($_POST['select-order']))
		$inputText['Способ оплаты'] = htmlspecialchars($_POST["select-order"]);
	if (isset($_POST['td-model']))
		$inputText['Марка автомобиля'] = htmlspecialchars($_POST["td-model"]);
	if (isset($_POST['select-tradein']))
		$inputText['Модель автомобиля'] = htmlspecialchars($_POST["select-tradein"]);
	if (isset($_POST['select-credit']))
		$inputText['Первый взнос'] = htmlspecialchars($_POST["select-credit"]);
	if (isset($_POST['credit-time']))
		$inputText['Срок Кредита'] = htmlspecialchars($_POST["credit-time"]);
	if (isset($_POST['mounth_pay']))
		$inputText['Комфортный ежемесячный платёж'] = htmlspecialchars($_POST["mounth_pay"]);
	if (isset($_POST['datepicker']))
		$inputText['Желаемая дата записи'] = htmlspecialchars($_POST["datepicker"]);
	if (isset($_POST['time-picker']))
		$inputText['Желаемое время записи'] = htmlspecialchars($_POST["time-picker"]);
	if (isset($_POST['marka-to']))
		$inputText['Марка авто ТО'] = htmlspecialchars($_POST["marka-to"]);
	if (isset($_POST['model-to']))
		$inputText['Модель авто ТО'] = htmlspecialchars($_POST["model-to"]);
	if (isset($_POST['location-picker']))
		$inputText['Место ТО'] = htmlspecialchars($_POST["location-picker"]);
	if (isset($_POST['marka-re']))
		$inputText['Марка авто Ремонт'] = htmlspecialchars($_POST["marka-re"]);
	if (isset($_POST['model-re']))
		$inputText['Модель авто Ремонт'] = htmlspecialchars($_POST["model-re"]);
	if (isset($_POST['choose_test']))
		$inputText['Автомобиль'] = htmlspecialchars($_POST["choose_test"]);
	if (isset($_POST['input-text']))
		$inputText['Сообщение от пользователя'] = htmlspecialchars($_POST["input-text"]);
	if (isset($_POST['choose_marka']))
		$inputText['Марка автомобиля'] = htmlspecialchars($_POST["choose_marka"]);
	if (isset($_POST['choose_model']))
		$inputText['Модель'] = htmlspecialchars($_POST["choose_model"]);
	if (isset($_POST['choose_time']))
		$inputText['Время тест-драйва'] = htmlspecialchars($_POST["choose_time"]);
	if (isset($_POST['choose_dc']))
		$inputText['Дилерский центр'] = htmlspecialchars($_POST["choose_dc"]);



	$message = generateMessage($inputText);


	$subject = 'КИТАЙСКИЕАВТО.РФ. ';
	if (isset($_POST["SUBJECT"]))
		$subject .= $_POST['SUBJECT'];

	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";


	if (isset($_POST['message'])) {
		if ((!preg_match("/href|url|http|https|www|.ru|.com|.net|.info|.org/i", $_POST["name"])) &&
			(!preg_match("/href|url|http|https|www|.ru|.com|.net|.info|.org/i", $_POST["phone"])) &&
			(!preg_match("/href|url|http|https|www|.ru|.com|.net|.info|.org/i", $_POST["message"]))
		) {

			$to = 'taur.game@yandex.ru';
			//$to = 'kirill@sabit.ru,parfenov83@.ya.ru'; 
			mail($to, $subject, $message, $headers);
			$form_data['success'] = 1;
		} else {
			$form_data['success'] = 0;
		}
	} else {
		if ((!preg_match("/href|url|http|https|www|.ru|.com|.net|.info|.org/i", $_POST["name"])) &&
			(!preg_match("/href|url|http|https|www|.ru|.com|.net|.info|.org/i", $_POST["phone"]))
		) {

			$to = 'taur.game@yandex.ru';
			//$to = 'kirill@sabit.ru,parfenov83@.ya.ru,parfyonov@sabit.ru'; 
			mail($to, $subject, $message, $headers);
			$form_data['success'] = 1;
		} else {
			$form_data['success'] = 0;
		}
	}

	echo $form_data['success'];
}
