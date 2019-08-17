<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 11.08.19
 * Time: 19:02
 */
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if(isset($_POST)  && !empty($_POST)){
    echo 'true';
}else{
    LocalRedirect("/404.php", "404未找到");
}

?>

