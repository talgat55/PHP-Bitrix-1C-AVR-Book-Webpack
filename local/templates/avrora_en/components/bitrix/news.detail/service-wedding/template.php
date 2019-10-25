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

$APPLICATION->SetPageProperty("MainClass", "service-page-wedding");  // add class in body tag


//var_dump($arResult['DISPLAY_PROPERTIES']['HAL_SLIDERS']['LINK_ELEMENT_VALUE']);
//var_dump($arResult['DISPLAY_PROPERTIES']['HAL_SLIDERS']);


foreach ($arResult['DISPLAY_PROPERTIES']['FISRT_SLIDER']['LINK_ELEMENT_VALUE'] as $first_value) {

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
}
?>

<section class="features">
    <div class="col-md-12 col-xs-12">
        <h2 class="sub-title text-center w-100">
            Features:
        </h2>

    </div>
    <div class="w-100 d-flex align-items-center">
        <div class="col">
            <div class="item d-flex align-items-center justify-content-center">
                <img src="/images/sun.png" alt="иконка">
                <p>
                    By the river
                </p>

            </div>
        </div>
        <div class="col">
            <div class="item d-flex align-items-center justify-content-center">
                <img src="/images/check-in.png" alt="иконка">
                <p>
                    Outside registration
                </p>

            </div>
        </div>
        <div class="col">
            <div class="item d-flex align-items-center justify-content-center">
                <img src="/images/garden.png" alt="иконка">
                <p>
                    Park zone
                </p>

            </div>
        </div>
        <div class="col">
            <div class="item d-flex align-items-center justify-content-center">
                <img src="/images/Forma-1.png" alt="иконка">
                <p>
                    Wi-fi
                </p>

            </div>
        </div>
        <div class="col">
            <div class="item d-flex align-items-center justify-content-center">
                <img src="/images/parking2.png" alt="иконка">
                <p>
                    Parking
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2 col-xs-12">

        </div>
        <div class="col-md-8 col-xs-12">
            <div class="w-100 d-flex align-items-center">
                <div class="col">
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/manager.png" alt="иконка">
                        <p class="text-nowrap">
                            Personal manager
                        </p>

                    </div>
                </div>
                <div class="col">
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/projector.png" alt="иконка">
                        <p>
                            Projector
                        </p>

                    </div>
                </div>
                <div class="col">
                    <div class="item d-flex align-items-center justify-content-center">
                        <img src="/images/spotlights.png" alt="иконка">
                        <p>
                            Wellcome Zone
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-xs-12">

        </div>
    </div>

</section>

<section class="gift">
    <div class="row align-items-center">
        <div class="col-lg-6 col-xs-12">
            <h2 class="sub-title text-left w-100">
                We give gifts <br>
               for your wedding
            </h2>
            <ul class="list">
                <li class="d-flex align-items-center">
                    <img src="/images/gift-img.png" alt="иконка"/>
                    <p>
                        Honeymoon Room
                    </p>
                </li>
                <li class="d-flex align-items-center">
                    <img src="/images/gift-img.png" alt="иконка"/>
                    <p>
                        Bride morning at a special rate
                    </p>
                </li>
                <li class="d-flex align-items-center">
                    <img src="/images/gift-img.png" alt="иконка"/>
                    <p>
                        Photosession in our park area
                    </p>
                </li>
                <li class="d-flex align-items-center">
                    <img src="/images/gift-img.png" alt="иконка"/>
                    <p>
                        Rooms for wedding guests with a 20% discount
                    </p>
                </li>
                <li class="d-flex align-items-center">
                    <img src="/images/gift-img.png" alt="иконка"/>
                    <p>
                        2 hours of Finnish sauna
                    </p>
                </li>
            </ul>
        </div>
        <div class="col-lg-6 col-xs-12">
            <img class="gift-image" src="/images/gift-large.jpg" alt="Изображение"/>
        </div>
    </div>

</section>
<section class="hal-sliders">
    <ul class="list-hal-heading d-flex justify-content-center">
        <?php

        $i = 0;
        foreach ($arResult['DISPLAY_PROPERTIES']['HAL_SLIDERS']['LINK_ELEMENT_VALUE'] as $second_value) {

            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "service-detail-wedding-heading",
                array(
                    "COUNTER" => $i,
                    "CURRENT_ID" => $second_value['ID'],
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
                    "IBLOCK_ID" => $second_value["IBLOCK_ID"],
                    "IBLOCK_TYPE" => $second_value["IBLOCK_TYPE_ID"],
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
                        1 => "TYPE_NAME",
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
                    "COMPONENT_TEMPLATE" => "service-detail-wedding-heading"
                ),
                false
            );

            $i++;

        }
        ?>
    </ul>
    <div class="list-hal-slides  position-relative">
        <div class="d-flex position-relative">


            <?php

            $i = 0;
            foreach ($arResult['DISPLAY_PROPERTIES']['HAL_SLIDERS']['LINK_ELEMENT_VALUE'] as $third_value) {

                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "service-detail-wedding-sliders",
                    array(
                        "COUNTER" => $i,
                        "CURRENT_ID" => $third_value['ID'],
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
                        "IBLOCK_ID" => $third_value["IBLOCK_ID"],
                        "IBLOCK_TYPE" => $third_value["IBLOCK_TYPE_ID"],
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
                            2 => "PRICE",
                            3 => "CAPACITY",
                            4 => "SERVICE",
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
                        "COMPONENT_TEMPLATE" => "service-detail-wedding-sliders"
                    ),
                    false
                );

                $i++;

            }
            ?>
        </div>
        <ul class="sliders-arrows">
            <li>
                <a class="prev" href="#">
                    <i class="fas fa-chevron-left"></i>
                </a>
            </li>
            <li>
                <a class="next" href="#">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </li>

        </ul>
    </div>
</section>
<section class="last-block">
    <div class="row">
        <div class="item-walp first  col-lg-4 col-md-6 col-xs-12">
            <div class="bg-item">
                <div class="item d-flex align-items-center">
                    <div class="img-block">
                        <img src="/images/group.png" alt="Иконка"/>
                    </div>

                    <p class="capacity">
                        Capacity - 250 people.
                    </p>
                </div>

                <div class="item d-flex align-items-center">
                    <div class="img-block">
                        <img src="/images/wallet.png" alt="Иконка"/>
                    </div>
                    <p class="price">
                        Cost - from 1500 rubles / person.
                    </p>
                </div>
                <div class="wrap special-block d-none">
                    <div class="item  d-flex align-items-center ">
                        <div class="img-block">
                            <img src="/images/waiter.png" alt="Иконка"/>
                        </div>
                        <p class="waiter">
                            10% service charge
                        </p>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="item-walp    col-lg-4 col-md-6 col-xs-12">
            <div class="item">
                <div class="img-block w-100  d-flex align-items-center">
                    <img src="/images/phone.jpg" alt="Иконка">
                    <h3 class="title">
                        Restaurant Director
                    </h3>
                </div>
                <div class="content">
                    <div class="heading">
                        Tatyana Boltaeva
                    </div>
                    <a href="tel:8-913-635-42-56">
                        8-913-635-42-56
                    </a>
                </div>
            </div>
        </div>
        <div class="item-walp    col-lg-4 col-md-6 col-xs-12">
            <div class="item">
                <div class="img-block w-100  d-flex align-items-center">
                    <img src="/images/phone.jpg" alt="Иконка">
                    <h3 class="title">
                        Restaurant Manager
                    </h3>
                </div>
                <div class="content">
                    <a href="tel:8-900-670-35-36">
                        8-900-670-35-36
                    </a>
                    <a href="tel:8 (3812) 55-32-80">
                        8 (3812) 55-32-80
                    </a>

                </div>
            </div>
            <div class="item-e d-flex align-items-center">
                <div class="img-block-e">
                    <img src="/images/email.jpg" alt="Иконка"/>
                </div>

                <p>
                    <a class="mail-link" href="mailto:restoran@avrorahotel55.ru">
                        restoran@avrorahotel55.ru
                    </a>
                </p>
            </div>
        </div>


    </div>

</section>


