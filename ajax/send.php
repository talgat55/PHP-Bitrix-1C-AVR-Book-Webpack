<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 11.08.19
 * Time: 19:02
 */
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if(isset($_POST)  && !empty($_POST)){

    $EVENT = ($_POST['event']);

    if($EVENT == 'FEEDBACK_EVENT') {
        $USER_NAME = htmlspecialcharsbx($_POST['name']);
        $USER_EMAIL = htmlspecialcharsbx($_POST['email']);
        $USER_PHONE = htmlspecialcharsbx($_POST['phone']);
        $USER_MESSAGE = htmlspecialcharsbx($_POST['comment']);

        $arEventFields = array (
            "USER_NAME" => $USER_NAME,
            "USER_EMAIL" => $USER_EMAIL,
            "USER_PHONE" => $USER_PHONE,
            "USER_MESSAGE" => $USER_MESSAGE,
        );
    }elseif ($EVENT == 'REVIEW_EVENT'){
        $USER_NAME = htmlspecialcharsbx($_POST['name']);
        $USER_MESSAGE = htmlspecialcharsbx($_POST['comment']);

        $arEventFields = array (
            "USER_NAME" => $USER_NAME,
            "USER_MESSAGE" => $USER_MESSAGE,
        );
    }
    CEvent::Send($EVENT,   's1' , $arEventFields, "N", "", "");

    echo 'true';

}else{
    LocalRedirect("/404.php", "404 страница не найдена");
}

?>

