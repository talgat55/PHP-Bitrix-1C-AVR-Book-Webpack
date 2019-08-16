<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Rental Conference Hall in Omsk");
$APPLICATION->SetPageProperty("MainClass", "conference-page");
?>
    <section class="first-block">
        <div class="container">
            <div class="row">
                <h1 class="main-title">
                    <? $APPLICATION->ShowTitle(); ?>
                </h1>
            </div>
            <div class="row">
                <div class="col-lg-2 col-xs-12">
                </div>
                <div class="col-lg-8 col-xs-12">
                    <p class="text-center">
                        The Aurora Hotel is three modern comfortable conference rooms and a business center, which
                        ideal for training, seminars, press conferences, various business
                        meetings, web conferences. <br>
                        <br>
                        The rooms are equipped with air conditioning and have high-speed Internet access (Wi-Fi).
                    </p>
                    <div class="title-border">
                    </div>
                </div>
                <div class="col-lg-2 col-xs-12">
                </div>
            </div>
        </div>
    </section>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "conference",
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
        "COMPONENT_TEMPLATE" => "conference",
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
        "IBLOCK_ID" => "31",
        "IBLOCK_TYPE" => "services_en",
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
            0 => "SIZE",
            1 => "OPTIONS",
            2 => "SLIDERS",
            3 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    ),
    false
); ?>
    <section class="last-section">
        <div class="container">
            <div class="row">
                <h2 class="sub-title w-100 text-center">
                    Catering
                </h2>
            </div>
            <div class="row">
                <div class="content">
                    <p class="description text-center">
                        As a pleasant addition to any business event, the Aurora Restaurant offers a wide  choice of
                        coffee breaks, business lunches, receptions, banquets.
                    </p>
                    <div class="text-info d-flex align-items-center justify-content-center w-100">
                        <div class="text">
                            Personal manager
                        </div>
                        <div class="text">
                            <a href="tel:8-904-320-35-67">8-904-320-35-67</a>
                            / <a href="tel:8 (3812) 55-73-52">8 (3812) 55-73-52</a>
                        </div>
                    </div>
                    <div class="text-info d-flex align-items-center justify-content-center w-100">
                        <div class="text">
                            Mail
                        </div>
                        <div class="text">
                            <a href="mailto:sales1@avrorahotel55.ru">sales1@avrorahotel55.ru</a>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center ">
                        <div class="col-lg-6 col-sm-12">
                            <a  href="/images/sample.pdf"  target="_blank"  class="menu-section wrapper">
                                <div class="img-block">
                                    <img src="/images/coffee-break.jpg" alt="Изображение">
                                </div>
                                <div class="text">
                                    <h3 class="title">
                                        Coffee Break Menu
                                    </h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <a href="#" class="link-more order-price">
                                Make a request
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-sliders">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "service-slider",
                        array(
                            "CURRENT_ID" => "67",  // element id Need insert
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
                            "DISPLAY_BOTTOM_PAGER" => "Y",
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
                            "IBLOCK_ID" => "26",
                            "IBLOCK_TYPE" => "services_en",
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
                                0 => "",
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
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "service-slider"
                        ),
                        false
                    );
                    ?>
                    <div class="border-bottom"></div>
                </div>
            </div>
        </div>
    </section>
<?
//  include  form modal
$APPLICATION->IncludeFile(
    SITE_DIR . "../include/modal-form-en.php",
    Array(),
    Array("MODE" => "html")
);

//  include  modal success
$APPLICATION->IncludeFile(
    SITE_DIR . "../include/modal-success-en.php",
    Array(),
    Array("MODE" => "html")
);


?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>