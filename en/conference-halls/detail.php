<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"conference-detail", 
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
		"ELEMENT_ID" => $_REQUEST["ID"],
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => "31",
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
			0 => "SIZE",
			1 => "EQUIPMENT",
			2 => "OPTIONS",
			3 => "COST_RENT_BUSINES_DAY",
			4 => "COST_RENT_BUSINES_HOUR",
			5 => "COST_RENT_ECONOM_DAY",
			6 => "COST_RENT_ECONOM_HOUR",
			7 => "SCHEMA_SEAT_CLASS",
			8 => "SCHEMA_SEAT_ROUND",
			9 => "SCHEMA_SEAT_P",
			10 => "SCHEMA_SEAT_TEATR",
			11 => "TEXT_DESCRIBE",
			12 => "SLIDES_DETAIL_PAGE",
			13 => "",
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
		"COMPONENT_TEMPLATE" => "conference-detail"
	),
	false
);?>
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>