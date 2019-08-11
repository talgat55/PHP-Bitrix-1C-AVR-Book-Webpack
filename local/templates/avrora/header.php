<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}


?><!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID; ?>" lang="<?= LANGUAGE_ID; ?>" class="<? $APPLICATION->ShowProperty('HtmlClass'); ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><? $APPLICATION->ShowTitle(); ?></title>


    <? $APPLICATION->ShowMeta("keywords") ?>
    <? $APPLICATION->ShowMeta("description") ?>
    <? $APPLICATION->ShowHeadStrings() ?>
    <? $APPLICATION->ShowCSS(); ?>

    <?php
    //    $APPLICATION->AddHeadScript('/bitrix/templates/.default/additional.js');
    //    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/build/css/bootstrap.min.css");

    //    $this->getTemplate()->addExternalJs("/local/addcss.css");
    ?>
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/assets/build/css/bootstrap.min.css">

    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/assets/build/app.css"); ?>


    <script src="<?= SITE_TEMPLATE_PATH; ?>/assets/build/global.js"></script>
    <? $APPLICATION->ShowHeadScripts() ?>

    <?php

    $APPLICATION->AddHeadScript("/local/templates/avrora/assets/build/js/jquery.lazy.min.js");
    $APPLICATION->AddHeadScript("/local/templates/avrora/assets/build/app.js");

    ?>

</head>

<body class="<? $APPLICATION->ShowProperty('BodyClass'); ?>  " <? $APPLICATION->ShowProperty('BodyTag'); ?> >
<?
$APPLICATION->ShowPanel();
?>
<main class="<? $APPLICATION->ShowProperty('MainClass'); ?> main-wrapper">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-4">
                    <div id="logo">
                        <a href="/" class="logo">
                            <img src="/images/logo.png" alt="Логотип"/>
                        </a>
                    </div>
                </div>

                <div class="col-md-9  col-8">
                    <div class="top-header">
                        <div class="row d-flex align-items-center">
                            <div class="item col-lg-4 col-xs-12">
                                <div id="phone-block" class="d-flex align-items-start">
                                    <div class="img-block">
                                        <img src="/images/phone.png" alt="Иконка"/>
                                    </div>
                                    <a href="tel:8-800-100-32-80">
                                        <span>
                                            Звонок по России бесплатный
                                        </span>
                                        <p>
                                            8-800-100-32-80
                                        </p>
                                    </a>

                                </div>
                            </div>
                            <div class="item col-lg-4 col-xs-12">
                                <div id="list-soc-phones" class="d-flex align-items-start ">
                                    <div class="img-block">
                                        <img src="/images/soc-phones.png" alt="Иконка"/>
                                    </div>
                                    <ul class="list-phones">
                                        <li>
                                            <a href="#">
                                                8-951-416-04-44
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                8 (3812) 55-73-52
                                            </a>
                                        </li>


                                    </ul>

                                </div>
                            </div>

                            <div class="item col-lg-4 col-xs-12">
                                <div id="adr-lang-block"
                                     class="d-flex align-items-start justify-content-between align-items-end">
                                    <div class="first  d-flex">
                                        <div class="img-block">
                                            <img src="/images/geo.png" alt="Иконка"/>
                                        </div>
                                        <div class="adress">
                                            <a href="#" class="link-to-adress">
                                                <div>
                                                    г. Омск
                                                </div>
                                                <div>
                                                    ул. Поворотникова, 6
                                                </div>

                                            </a>

                                        </div>
                                    </div>

                                    <div class="second">
                                        <ul class="list-lang">
                                            <li>
                                                <a href="#" class="lang-item d-flex" data-lang="ru">
                                                    <img src="/images/ru-lng.jpg" alt="Иконка"/>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="lang-item d-flex" data-lang="en">
                                                    <img src="/images/eng-lng.jpg" alt="Иконка"/>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="lang-item d-flex" data-lang="ch">
                                                    <img src="/images/ch-lng.jpg" alt="Иконка"/>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-header">
                        <div class="row">
                            <div class="first col-xl-9  col-md-12 col-xs-12">
                                <? $APPLICATION->IncludeComponent("bitrix:menu", "mian-menu", Array(
                                    "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                                    "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                                    "DELAY" => "N",    // Откладывать выполнение шаблона меню
                                    "MAX_LEVEL" => "1",    // Уровень вложенности меню
                                    "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                                        0 => "",
                                    ),
                                    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                                    "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                                    "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                                    "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                                    "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                                ),
                                    false
                                ); ?>
                            </div>
                            <div class="second col-xl-3 col-xs-12 d-flex align-items-center">
                                <div id="special-block" class="d-flex">
                                    <div class="temperature-block d-flex  align-items-center">
                                        <div class="img-block">
                                            <img src="/images/thermometer.png" alt="Иконка"/>
                                        </div>
                                        <span>
                                            +19 C
                                        </span>

                                    </div>
                                    <div class="clock-block  d-flex  align-items-center">
                                        <div class="img-block">
                                            <img src="/images/clock.png" alt="Иконка"/>
                                        </div>
                                        <span>
                                           Омск  <?=  date('h:i'); ?>
                                        </span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>


    </header>
    <div id="primary">


