<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}


?><!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID; ?>" lang="<?= LANGUAGE_ID; ?>" class="<? $APPLICATION->ShowProperty('HtmlClass'); ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon"/>
    <title><? $APPLICATION->ShowTitle(false); ?></title>


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

    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/build/app.css"); ?>
	<?  if (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) : ?>
        <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/build/css/ie-fix.css"); ?>
    <?  endif; ?>

    <script src="<?= SITE_TEMPLATE_PATH; ?>/assets/build/global.js"></script>
    <? $APPLICATION->ShowHeadScripts() ?>

    <?php

    $APPLICATION->AddHeadScript("/local/templates/avrora/assets/build/js/jquery.lazy.min.js");
    $APPLICATION->AddHeadScript("/local/templates/avrora/assets/build/js/jquery.mask.min.js");
    $APPLICATION->AddHeadScript("/local/templates/avrora/assets/build/app.js");

    ?>
    <!-- start TL head script -->
    <script type="text/javascript">
        (function(w){
            var q=[
                ['setContext', 'TL-INT-avrora-lightxdesign', 'zh']
            ];
            var t=w.travelline=(w.travelline||{}),ti=t.integration=(t.integration||{});ti.__cq=ti.__cq?ti.__cq.concat(q):q;
            if (!ti.__loader){ti.__loader=true;var d=w.document,p=d.location.protocol,s=d.createElement('script');s.type='text/javascript';s.async=true;s.src=(p=='https:'?p:'http:')+'//ibe.tlintegration.com/integration/loader.js';(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(s);}
        })(window);
    </script>
    <!-- end TL head script -->
    <script type="text/javascript">
        (function(w){
            var q=[
                ['setContext', 'TL-INT-avrora-lightxdesign', 'zh'],
                ['embed', 'booking-button-widget', {}]
                ];
            var t=w.travelline=(w.travelline||{}),ti=t.integration=(t.integration||{});ti.__cq=ti.__cq?ti.__cq.concat(q):q;
            if (!ti.__loader){ti.__loader=true;var d=w.document,p=d.location.protocol,s=d.createElement('script');s.type='text/javascript';s.async=true;s.src=(p=='https:'?p:'http:')+'//ibe.tlintegration.com/integration/loader.js'; (d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(s);}
        })(window);
    </script>
    <link rel="stylesheet" href="/local/templates/avrora_ch/assets/src/css/travelline-style.css">
    <link rel="stylesheet" href="/local/templates/avrora_ch/assets/src/css/datepicker.min.css">
    <script type="text/javascript" src="/local/templates/avrora_ch/assets/src/js/datepicker.min.js"></script>
    <script type="text/javascript" src="/local/templates/avrora_ch/assets/src/js/datepicker.zh.js"></script>
    <!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
	
	   ym(13395118, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true,
			ecommerce:"dataLayer"
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/13395118" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<script type="text/javascript">
	window.dataLayer = window.dataLayer || [];
	</script>
</head>

<body class="<? $APPLICATION->ShowProperty('BodyClass'); ?>  ch-version" <? $APPLICATION->ShowProperty('BodyTag'); ?> >
<?
$APPLICATION->ShowPanel();
?>
<main class="<? $APPLICATION->ShowProperty('MainClass'); ?> main-wrapper">
    <div class="mobile-bar d-flex justify-content-center">
        <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "mobile-menu",
            array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "mobile",
                "USE_EXT" => "N",
                "COMPONENT_TEMPLATE" => "mobile-menu"
            ),
            false
        ); ?>
    </div>
    <header>
        <div class="header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <a id="mobile-toggle" href="#menu"
                           class="mobile-toggle hamburger hamburger--collapse hamburger--3dx  ">
                                 <span class="hamburger-box">
                                     <span class="hamburger-inner"></span>
                                 </span>
                        </a>
                        <div id="logo">
                            <a href="/ch/" class="logo">
                                <img src="/images/logo-new-en.png" alt="Логотип"/>
                            </a>
                        </div>
                    </div>

                    <div class="second col-md-9  col-6">
                        <div class="top-header">
                            <div class="row d-flex align-items-center">
                                <div class="item col-lg-4 col-xs-12">
                                    <div id="phone-block" class="d-flex align-items-start">
                                        <div class="img-block">
                                            <img width="38" src="/images/phone-top.png" alt="Иконка"/>
                                        </div>
                                        <a href="tel:8-800-100-32-80">
                                            <p>
                                                8-800-100-32-80
                                            </p>
                                        <span>
                                          (电话服务中心)
                                            昼夜预定
                                        </span>

                                        </a>

                                    </div>
                                </div>
                                <div class="item col-lg-4 col-xs-12">
                                    <div id="list-soc-phones" class="d-flex align-items-center  ">
                                        <div class="img-block">
                                            <img width="35" src="/images/viber.png" alt="Иконка"/>
                                            <img width="35" src="/images/whatsup.png" alt="Иконка"/>
                                        </div>
                                        <ul class="list-phones">
                                            <li>
                                                <a href="tel: 8-951-416-04-44">
                                                    8-951-416-04-44
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
                                                <a target="_blank"
                                                   href="https://www.google.com/maps/place/%D1%83%D0%BB.+%D0%9F%D0%BE%D0%B2%D0%BE%D1%80%D0%BE%D1%82%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2%D0%B0,+6,+%D0%9E%D0%BC%D1%81%D0%BA,+%D0%9E%D0%BC%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB.,+644015/@54.9442581,73.351403,17z/data=!3m1!4b1!4m5!3m4!1s0x43ab026a63214a55:0xe33794ae6c93fb4b!8m2!3d54.944255!4d73.353597?hl=en-US"
                                                   class="link-to-adress">
                                                    <div>
                                                        鄂木斯克
                                                    </div>
                                                    <div>
                                                        Povorotnikova，6岁
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
                                            <span style="min-width: 40px;">
                                            <? getTemperatureCity(); ?> C
                                            </span>

                                        </div>
                                        <div class="clock-block  d-flex  align-items-center">
                                            <div class="img-block">
                                                <img src="/images/clock.png" alt="Иконка"/>
                                            </div>
                                            <span>
                                            鄂木斯克  <? getTimeCity(); ?>
                                        </span>

                                        </div>
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


