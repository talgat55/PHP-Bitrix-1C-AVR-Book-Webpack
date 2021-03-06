<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$APPLICATION->SetPageProperty("MainClass", "service-page-restaurant");  // add class in body tag


//var_dump($arResult['DISPLAY_PROPERTIES']['HAL_SLIDERS']['LINK_ELEMENT_VALUE']);
//var_dump($arResult['DISPLAY_PROPERTIES']['HAL_SLIDERS']);
//var_dump($arResult['DISPLAY_PROPERTIES']['TEXT']);

?>
<h1 class="main-title">
    A restaurant
</h1>
<section class="main-slider">
    <img src="<?= $arResult['DISPLAY_PROPERTIES']['MAIN_BANNER']['FILE_VALUE']['SRC']; ?>" alt="баннер"/>
</section>

<section class="text-section">
    <?= stripcslashes($arResult['DISPLAY_PROPERTIES']['TEXT']['DISPLAY_VALUE']); ?>

</section>
<section class="halls-section">
    <ul class="list  row">
        <li class="item col-lg-4 col-md-6 col-xs-12">
            <div class="img-block">
                <img src="<?= $arResult['DISPLAY_PROPERTIES']['ROME_BANNER']['FILE_VALUE']['SRC']; ?>"
                     alt="Изображение"/>
            </div>
            <div class="content text-center">
                <h2 class="title">
                    Roman hall
                </h2>
                <div class="text d-flex  justify-content-center">
                    <img src="/images/family.jpg" alt="иконка"/>
                    <p>
                        up to 250 people
                    </p>
                </div>

            </div>
        </li>
        <li class="item col-lg-4 col-md-6 col-xs-12">
            <div class="img-block">
                <img src="<?= $arResult['DISPLAY_PROPERTIES']['BANKET_BANNER']['FILE_VALUE']['SRC']; ?>"
                     alt="Изображение"/>
            </div>
            <div class="content">
                <h2 class="title text-center">
                    Banqueting hall
                </h2>
                <div class="text d-flex  justify-content-center">
                    <img src="/images/family.jpg" alt="иконка"/>
                    <p>
                        up to 150 people
                    </p>
                </div>

            </div>
        </li>
        <li class="item col-lg-4 col-md-6 col-xs-12">
            <div class="img-block">
                <img src="<?= $arResult['DISPLAY_PROPERTIES']['SUMMER_BANNER']['FILE_VALUE']['SRC']; ?>"
                     alt="Изображение"/>
            </div>
            <div class="content">
                <h2 class="title text-center">
                    Summer terrace
                </h2>
                <div class="text d-flex  justify-content-center">
                    <img src="/images/family.jpg" alt="иконка"/>
                    <p>
                        up to 350 people
                    </p>
                </div>

            </div>
        </li>


    </ul>

</section>
<section class="menu-section">
    <div class="row">
        <div class="item col">
            <a href="<?= $arResult['DISPLAY_PROPERTIES']['BANKET_MENU']['FILE_VALUE']['SRC']; ?>" target="_blank"
               class="wrapper">
                <div class="img-block">
                    <img src="/images/menu-1.jpg" alt="Изображение">
                </div>
                <div class="text">
                    <h3 class="title">
                        Banquet menu
                    </h3>
                </div>
            </a>
        </div>
        <div class="item col">
            <a href="<?= $arResult['DISPLAY_PROPERTIES']['MAIN_MENU']['FILE_VALUE']['SRC']; ?>" target="_blank"
               class="wrapper">
                <div class="img-block">
                    <img src="/images/menu-2.jpg" alt="Изображение">
                </div>
                <div class="text">
                    <h3 class="title">
                        Main menu
                    </h3>
                </div>
            </a>
        </div>
        <div class="item col">
            <a href="<?= $arResult['DISPLAY_PROPERTIES']['BUSINES_MENU']['FILE_VALUE']['SRC']; ?>" target="_blank"
               class="wrapper">
                <div class="img-block">
                    <img src="/images/menu-3.jpg" alt="Изображение">
                </div>
                <div class="text">
                    <h3 class="title">
                        Business Lunch Menu
                    </h3>
                </div>
            </a>
        </div>
        <div class="item col">
            <a href="<?= $arResult['DISPLAY_PROPERTIES']['SWEDES_MENU']['FILE_VALUE']['SRC']; ?>" target="_blank"
               class="wrapper">
                <div class="img-block">
                    <img src="/images/menu-4.jpg" alt="Изображение">
                </div>
                <div class="text">
                    <h3 class="title">
                        Buffet Breakfast
                    </h3>
                </div>
            </a>
        </div>


    </div>

</section>

<section class="info-section">
    <div class="row">
        <div class="first item col-lg-5 col-md-6 col-xs-12">
            <div class="heading d-flex align-items-center">
                <img src="/images/clock-service.png" alt="иконка"/>
                <h2 class="title">
                    Restaurant Hours:
                </h2>

            </div>
            <div class="text">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-xs-12">
                        <div class="block">
                            Buffet Breakfast <br>
                            from 06:00 to 10:00
                        </div>
                        <div class="block">

                            Business Lunch <br>
                            from 12:00 to 16:00
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-xs-12">
                        <div class="block">
                            Lobby Bar: <br>
                            <span> around the clock </span>
                        </div>

                        <div class="block">
                            Lobby Bar <br>
                            and restaurant bar: <br>
                            <span> around the clock </span>
                        </div>


                    </div>
                </div>
            </div>

        </div>
        <div class="second item col-lg-7 col-md-6 col-xs-12">
            <div class="heading d-flex align-items-center">
                <img src="/images/phone.jpg" alt="иконка"/>
                <h2 class="title ">
                    Contacts:
                </h2>
            </div>
            <div class="info-row row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="info-block">
                            <span>
                               Restaurant Phone
                            </span>
                        <a href="tel:8 (3812) 55-32-80">
                            8 (3812) 55-32-80
                        </a>
                    </div>
                    <div class="info-block">
                            <span>
                               Call center
                            </span>
                        <a href="tel:8-800-100-32-80">
                            8-800-100-32-80
                        </a>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="info-block">
                            <span>
                                Restaurant Director:
                            </span>
                        <a href="tel:8-913-635-42-56">
                            8-913-635-42-56
                        </a>
                    </div>
                    <div class="info-block">
                            <span>
                                Restaurant Manager:
                            </span>
                        <a href="tel:8-900-670-35-36">
                            8-900-670-35-36
                        </a>
                        <a href="mailto:restoran@avrorahotel55.ru">
                            restoran@avrorahotel55.ru
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12 d-flex justify-content-center">
            <a href="#" class="link-more  link-reserve  ">
                Reserve
            </a>
        </div>

    </div>
</section>
<section class="footer-sliders">
    <? foreach ($arResult['DISPLAY_PROPERTIES']['FOOTER_SLIDER']['LINK_ELEMENT_VALUE'] as $first_value) {

        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "service-slider",
            array(
                "CURRENT_ID" => $first_value['ID'],
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
                "IBLOCK_ID" => $first_value["IBLOCK_ID"],
                "IBLOCK_TYPE" => $first_value["IBLOCK_TYPE_ID"],
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
                    0 => "SLIDERS",
                    1 => "",
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
    };
    ?>
</section>


