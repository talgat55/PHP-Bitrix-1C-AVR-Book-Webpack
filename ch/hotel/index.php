<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("房间和价格");
$APPLICATION->SetPageProperty("MainClass", "hotel-page");
?>
<?
//  include home slider
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/home-slider-ch.php",
    Array(),
    Array("MODE" => "html")
);
//  include reserve block
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/reserve-block-ch.php",
    Array(),
    Array("MODE" => "html")
);
?>
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
                        Hotel Aurora酒店是鄂木斯克最宽敞的酒店之一。房间数量是 124间客房，从经济标准到行政套房。友善的员工 高水平 我们为您提供各种服务和优质的服务。
                        <br>
                        <br>
                        在官方网站预订房间时，我们保证为您提供最优惠的价格。
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
		"IBLOCK_ID" => "34",
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
		"SORT_BY1" => "ACTIVE_FROM",
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
                    退房时间
                </h2>
                <div class="d-flex call-block w-100 position-relative">
                    <div class="first  col-lg-6 col-md-12">
                        <div class="item">
                            <h3 class="black heading text-center">
                                从12:00办理入住手续
                            </h3>
                            <div class="content">
                                <h3 class="red sub-heading text-center">
                                    提前入住
                                </h3>
                                <ul class="list">
                                    <li class="d-flex align-items-start">
                                        <div class="img-block">
                                            <img src="/images/hotel/hotel-cap-1.png" alt="иконка">
                                        </div>
                                        <p>
                                            直到12:00 + 0.5的费用
                                            每日费率
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <div class="img-block">
                                            <img src="/images/hotel/hotel-cap-2.png" alt="иконка">
                                        </div>
                                        <p>
                                            从早上9点到早上12点 免费（视情况而定）  可用房间）
                                        </p>
                                    </li>

                                </ul>
                            </div>

                        </div>


                    </div>
                    <div class="second col-lg-6 col-md-12">
                        <div class="item">
                            <h3 class="black heading text-center">
                                请在12:00之前退房。
                            </h3>
                            <div class="content">
                                <h3 class="red sub-heading text-center">
                                    延迟退房
                                </h3>
                                <ul class="list">
                                    <li class="d-flex align-items-start">
                                        <div class="img-block">
                                            <img src="/images/hotel/hotel-cap-3.png" alt="иконка">
                                        </div>
                                        <p>
                                            直到18:00 +每小时付款
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <div class="img-block">
                                            <img class="rotate" src="/images/hotel/hotel-cap-3.png" alt="иконка">
                                        </div>
                                        <p>
                                            18:00后+ 0.5的费用  每日费率
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
    SITE_DIR . "/include/modal-form-ch.php",
    Array(),
    Array("MODE" => "html")
);

//  include  modal success
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/modal-success-ch.php",
    Array(),
    Array("MODE" => "html")
);


?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>