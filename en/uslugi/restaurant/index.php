<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("A restaurant");
?>
    <div class="container">
        <div class="row">
            <div class="page-wrap w-100 service-detail-page">
                <div class="col-md-12 col-xs-12">

                    <div class="service-detail-wrapper">
                        <? $APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"service-restaurant", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
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
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "77",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => "29",
		"IBLOCK_TYPE" => "services_en",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(
			0 => "TEXT",
			1 => "MAIN_BANNER",
			2 => "ROME_BANNER",
			3 => "BANKET_BANNER",
			4 => "SUMMER_BANNER",
			5 => "BANKET_MENU",
			6 => "MAIN_MENU",
			7 => "BUSINES_MENU",
			8 => "SWEDES_MENU",
			9 => "FOOTER_SLIDER",
			10 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "service-restaurant"
	),
	false
); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>