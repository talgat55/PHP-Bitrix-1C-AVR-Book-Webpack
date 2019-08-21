<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("奥罗拉鄂木斯克酒店");
?>

    <h1 class="hide-main-title">
        <? $APPLICATION->ShowTitle(); ?>
    </h1>

<?

//  include home slider
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/home-slider-ch.php",
    Array(),
    Array("MODE" => "html")
);
?>
    <div class="reserve-wrapper">
        <?php
        //  include reserve block
        $APPLICATION->IncludeFile(
            SITE_DIR . "/include/reserve-block-ch.php",
            Array(),
            Array("MODE" => "html")
        );
        ?>
    </div>

    <section class="first-section">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="first col-lg-7 col-xs-12">
                    <h2 class="sub-title">
                        旅馆<br>
                        在鄂木斯克市
                        <div class="title-border">
                        </div>
                        <p>

                            Aurora是一家现代化的舒适酒店，符合所有质量标准，并获得3星级认证。
                            <br>
                            <br>
                            独特的位置距离机场5分钟，距离中心和火车站10分钟，享有额尔齐斯河的美景，清新的空气和窗外最大的鄂木斯克公园。
                            <br>
                            <br>
                            各种类型的124间客房，从经济标准到行政套房。
                            <br>
                            <br>
                            Aurora酒店的全景餐厅结合了由主厨Vitaly Mitin执行的欧洲，俄罗斯和原创美食。
                            <br>
                            <br>
                            Aurora酒店提供4间现代舒适的会议室。除了健身房，芬兰桑拿浴室和 之外，您还可以在度过辛苦的一天后放松身心

                        </p>
                </div>
                <div class="second col-lg-5 col-xs-12">
                    <div id="home-banner">

                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "reception-slider",
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
                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(
                                    0 => "PREVIEW_PICTURE",
                                    1 => "",
                                ),
                                "FILTER_NAME" => "",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "14",
                                "IBLOCK_TYPE" => "home_slider_ch",
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
                                    1 => "LINK",
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
                                "COMPONENT_TEMPLATE" => "reception-slider"
                            ),
                            false
                        ); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantage-section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7 col-xs-12">
                    <div class="wrapper-block text-left">
                        <h3 class="title">
                            在酒店：
                        </h3>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 ">
                                <ul class="list-adv">
                                    <li class="item">
                                        <p>
                                            124间客房
                                        </p>
                                    </li>
                                    <li class="item">
                                        <p>
                                            免费<br>
                                            安全停车
                                        </p>
                                    </li>
                                    <li class="item">
                                        <p>
                                            免费wifi上网
                                        </p>
                                    </li>
                                    <li class="item">
                                        <p>
                                            转让
                                        </p>
                                    </li>
                                    <li class="item">
                                        <p>
                                            健身房
                                        </p>
                                    </li>
                                    <li class="item">
                                        <p>
                                            保险箱和<br>
                                            左行李寄存处
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xs-12 ">
                                <ul class="list-adv">
                                    <li class="item">
                                        <p>
                                            餐厅24/7
                                        </p>
                                    </li>
                                    <li class="item">
                                        <p>
                                            24/7吧
                                        </p>
                                    </li>
                                    <li class="item">
                                        <p>
                                            全天候客房服务
                                        </p>
                                    </li>
                                    <li class="item">
                                        <p>
                                            4间会议室
                                        </p>
                                    </li>
                                    <li class="item">
                                        <p>
                                            芬兰桑拿
                                        </p>
                                    </li>

                                    <li class="item">
                                        <p>
                                            洗衣房
                                        </p>
                                    </li>
                                    <li class="item">
                                        <p>
                                            夏季露台
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xs-12 text-center">
                    <div class="wrapper-block text-left">
                        <h3 class="title">
                            在房间里：
                        </h3>
                        <ul class="list-adv">
                            <li class="item">
                                <p>
                                    冰箱
                                </p>
                            </li>
                            <li class="item">
                                <p>
                                    吹风机
                                </p>
                            </li>
                            <li class="item">
                                <p>
                                    电视机
                                </p>
                            </li>
                            <li class="item">
                                <p>
                                    阳台
                                </p>
                            </li>
                            <li class="item">
                                <p>
                                    基本化妆品<br>
                                    唯一的一次
                                </p>
                            </li>
                            <li class="item">
                                <p>
                                    电话
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">

                    <h2 class="sub-title text-center w-100">
                        我们的服务
                    </h2>
                    <div class="title-border center">
                    </div>

                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "services",
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
                            "IBLOCK_ID" => "16",
                            "IBLOCK_TYPE" => "services_ch",
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
                                0 => "LINK",
                                1 => "GALLERY",
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
                            "COMPONENT_TEMPLATE" => "services"
                        ),
                        false
                    ); ?>

                </div>
            </div>
        </div>

    </section>
    <section class="news-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="row">
                        <h2 class="sub-title text-center w-100">
                            新闻
                        </h2>
                        <div class="title-border center">
                        </div>
                    </div>
                </div>

                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "news-block",
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
                        "IBLOCK_ID" => "18",
                        "IBLOCK_TYPE" => "news_ch",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "3",
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
                            1 => "GALLERY",
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
                        "COMPONENT_TEMPLATE" => "news-block"
                    ),
                    false
                ); ?>

            </div>
        </div>

    </section>

    <section class="feedback-section">
        <div class="container">
            <div class="row">
                <div class="feedback-block w-100">
                    <div class="top d-flex align-items-center">
                        <div class="col-lg-6  col-md-12 col-xs-12">
                            <h2 class="sub-title  ">
                                反馈
                            </h2>
                            <div class="title-border  "></div>

                            <p class="content">
                                我们会仔细阅读您的来信，并尽快回答您的问题。
                                <a href="/policy"> 隐私政策。</a>
                            </p>

                        </div>
                        <div class="col-lg-6  col-md-12 col-xs-12">

                            <img src="/images/notebook.png" alt="Изображение">

                        </div>
                    </div>
                    <div class="bottom">
                        <?
                        $APPLICATION->IncludeFile(
                            SITE_DIR . "/include/form-index-ch.php",
                            Array(),
                            Array("MODE" => "html")
                        );
                        ?>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <section class="payments-section">
        <div class="container">
            <div class="col-lg-12 col-xs-12">
                <div class="row">

                    <h2 class="sub-title text-center w-100">
                        付款方式
                    </h2>

                    <div class="title-border center"></div>

                </div>
            </div>
            <div class="row">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "payments-block",
                    array(
                        "ACTIVE_DATE_FORMAT" => "j F Y",
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
                        "IBLOCK_ID" => "4",
                        "IBLOCK_TYPE" => "payments",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "12",
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
                            1 => "GALLERY",
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
                        "COMPONENT_TEMPLATE" => "payments-block"
                    ),
                    false
                ); ?>
            </div>
        </div>
    </section>
    <section class="footer-slider-section">
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "footer-slider",
            array(
                "ACTIVE_DATE_FORMAT" => "j F Y",
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
                "IBLOCK_ID" => "22",
                "IBLOCK_TYPE" => "home_slider_ch",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "12",
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
                    1 => "GALLERY",
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
                "COMPONENT_TEMPLATE" => "footer-slider"
            ),
            false
        ); ?>
    </section>
<?

//  include  modal success send
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/modal-success-ch.php",
    Array(),
    Array("MODE" => "html")
);
?>
    <div class="layer-overflow"></div>
<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>