<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$arEventFields = array (
    "USER_NAME" => htmlspecialcharsbx($_POST["NAME"]),
    "USER_PHONE" => htmlspecialcharsbx($_POST["PHONE"]),
);

if (CEvent::Send('Callback', id:'s1', $arEventFields, Duplicate:"N", message_id:"")) {
    echo 1;
} else {
    echo 0;
}
?>