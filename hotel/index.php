<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Номера и цены");
$APPLICATION->SetPageProperty("MainClass", "hotel-page");
?>
<?
//  include home slider
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/home-slider.php",
    Array(),
    Array("MODE" => "html")
);
?>
    <div class="reserve-wrapper">
        <?php
        //  include reserve block
        $APPLICATION->IncludeFile(
            SITE_DIR . "/include/reserve-block.php",
            Array(),
            Array("MODE" => "html")
        );
        ?>
    </div>

    <section class="first-block">
        <div class="container">
            <div class="row">
                <h1 class="main-title">
                    <? $APPLICATION->ShowTitle(); ?>
                </h1>
            </div>
            <div class="row">
                <div class="col-lg-2 col-xs-12"></div>
                <div class="col-lg-8 col-xs-12">
                    <p class="text-center">
                        Гостиница Аврора одна из самых вместительных гостиниц в Омске. Номерной фонд составляет
                        124 номера от экономичного стандарта до представительского люкса. Гостеприимный персонал,
                        высокий уровень
                        сервиса и широкий спектр услуг сделает Ваше пребывание в Авроре максимально комфортным.
                        <br>
                        <br>
                        При бронировании номера на официальном сайте мы гарантируем Вам самую выгодную цену.
                    </p>
                    <div class="title-border"></div>
                </div>
                <div class="col-lg-2 col-xs-12"></div>
            </div>
        </div>


    </section>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "hotel-numbers",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "11",
        "IBLOCK_TYPE" => "services",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "20",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "OPTIONS",
            1 => "SLIDERS",
            2 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "COMPONENT_TEMPLATE" => "hotel-numbers"
    ),
    false
); ?>
    <section class="last-section">
        <div class="container">
            <div class="row">
                <h2 class="text-center w-100">
                    Расчетный час
                </h2>
                <div class="d-flex call-block w-100 position-relative">
                    <div class="first  col-lg-6 col-md-12">
                        <div class="item">
                            <h3 class="black heading text-center">
                                Заезд с 12:00
                            </h3>
                            <div class="content">
                                <h3 class="red sub-heading text-center">
                                    Ранний заезд
                                </h3>
                                <ul class="list">
                                    <li class="d-flex align-items-start">
                                        <div class="img-block">
                                            <img src="/images/hotel/hotel-cap-1.png" alt="иконка">
                                        </div>
                                        <p>
                                            До 12:00 + 0,5 от стоимости
                                            суточного тарифа
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <div class="img-block">
                                            <img src="/images/hotel/hotel-cap-2.png" alt="иконка">
                                        </div>
                                        <p>
                                            С 9:00 до 12:00 плата за ранний
                                            заезд не взимается (при наличии
                                            свободных номеров)
                                        </p>
                                    </li>

                                </ul>
                            </div>

                        </div>


                    </div>
                    <div class="second col-lg-6 col-md-12">
                        <div class="item">
                            <h3 class="black heading text-center">
                                Выезд до 12:00
                            </h3>
                            <div class="content">
                                <h3 class="red sub-heading text-center">
                                    Поздний выезд
                                </h3>
                                <ul class="list">
                                    <li class="d-flex align-items-start">
                                        <div class="img-block">
                                            <img src="/images/hotel/hotel-cap-3.png" alt="иконка">
                                        </div>
                                        <p>
                                            До 18:00 + почасовая оплата
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <div class="img-block">
                                            <img class="rotate" src="/images/hotel/hotel-cap-3.png" alt="иконка">
                                        </div>
                                        <p>
                                            После 18:00 + 0,5 от стоимости
                                            суточного тарифа
                                        </p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="border-bottom"></div>
        </div>

    </section>
<?
//  include  form modal
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/modal-form.php",
    Array(),
    Array("MODE" => "html")
);

//  include  modal success
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/modal-success.php",
    Array(),
    Array("MODE" => "html")
);


?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>