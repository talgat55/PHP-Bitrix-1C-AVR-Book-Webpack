<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetPageProperty("description", "Гостиницы в Омске - гостиница Аврора Омск - официальный сайт. Аврора - это современная гостиница категории 3 звезды в городе Омске, отвечающая всем стандартам качества. Уникальное местоположение в 5 минутах езды от аэропорта, 10 минутах от центра и ЖД вокзала, изумительный вид на реку Иртыш, чистый воздух и самый большой парк Омска за окнами. 124 номера различной категории от экономичного стандарта до представительского люкса.");
$APPLICATION->SetTitle("Гостиница «Аврора», Омск - официальный сайт");
$APPLICATION->SetPageProperty("title","Главная");

?><h1 class="hide-main-title">
<? $APPLICATION->ShowTitle(); ?> </h1>
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
 <section class="first-section">
<div class="container">
	<div class="row d-flex align-items-center">
		<div class="first col-lg-7 col-xs-12">
			<h2 class="sub-title">
			Гостиница<br>
			 в городе Омск </h2>
			<div class="title-border">
			</div>
			<p>
				 Аврора – это современная комфортабельная гостиница, отвечающая всем стандартам качества и сертифицированная по категории 3 звезды. <br>
 <br>
				 Уникальное местоположение в 5 минутах езды от аэропорта, 10 минутах от центра и ЖД вокзала, изумительный вид на реку Иртыш, чистый воздух и самый большой парк Омска за окнами. <br>
 <br>
				 124 номера различной категории от экономичного стандарта до представительского люкса. <br>
 <br>
				 Панорамный ресторан гостиницы Аврора сочетает в себе европейскую, русскую и авторскую кухню в исполнении шеф-повара Виталия Митина. <br>
 <br>
				 В гостинице Аврора представлено 4 современных комфортабельных конференц-зала. А также тренажерный зал, финская сауна, где Вы можете отдохнуть после трудового дня.
			</p>
		</div>
		<div class="second col-lg-5 col-xs-12">
			<div id="home-banner">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"reception-slider",
	Array(
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
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "home_slider",
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
		"PROPERTY_CODE" => array(0=>"",1=>"LINK",2=>"",),
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
	)
);?>
			</div>
		</div>
	</div>
</div>
 </section> <section class="advantage-section">
<div class="container">
	<div class="row ">
		<div class="col-lg-7 col-xs-12">
			<div class="wrapper-block text-left">
				<h3 class="title">
				В гостинице: </h3>
				<div class="row">
					<div class="col-md-6 col-xs-12 ">
						<ul class="list-adv">
							<li class="item">
							<p>
								 124 номера
							</p>
 </li>
							<li class="item">
							<p>
								 бесплатная<br>
								 охраняемая парковка
							</p>
 </li>
							<li class="item">
							<p>
								 бесплатный wi-fi
							</p>
 </li>
							<li class="item">
							<p>
								 трансфер
							</p>
 </li>
							<li class="item">
							<p>
								 тренажерный зал
							</p>
 </li>
							<li class="item">
							<p>
								 сейфовые ячейки и<br>
								 камера хранения
							</p>
 </li>
						</ul>
					</div>
					<div class="col-md-6 col-xs-12 ">
						<ul class="list-adv">
							<li class="item">
							<p>
								 ресторан 24/7
							</p>
 </li>
							<li class="item">
							<p>
								 бар 24/7
							</p>
 </li>
							<li class="item">
							<p>
								 room service 24/7
							</p>
 </li>
							<li class="item">
							<p>
								 4 конференц-зала
							</p>
 </li>
							<li class="item">
							<p>
								 финская сауна
							</p>
 </li>
							<li class="item">
							<p>
								 прачечная
							</p>
 </li>
							<li class="item">
							<p>
								 летняя веранда
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
				В номере: </h3>
				<ul class="list-adv">
					<li class="item">
					<p>
						 холодильник
					</p>
 </li>
					<li class="item">
					<p>
						 фен
					</p>
 </li>
					<li class="item">
					<p>
						 телевизор
					</p>
 </li>
					<li class="item">
					<p>
						 балкон
					</p>
 </li>
					<li class="item">
					<p>
						 необходимые туалетные<br>
						 приналежности
					</p>
 </li>
					<li class="item">
					<p>
						 телефон
					</p>
 </li>
				</ul>
			</div>
		</div>
	</div>
</div>
 </section> <section class="services-section">
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<h2 class="sub-title text-center w-100">
			Наши услуги </h2>
			<div class="title-border center">
			</div>
			 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"services",
	Array(
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
		"COMPONENT_TEMPLATE" => "services",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
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
		"PROPERTY_CODE" => array(0=>"LINK",1=>"GALLERY",2=>"",),
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
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
		</div>
	</div>
</div>
 </section> <section class="news-section">
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-xs-12">
			<div class="row">
				<h2 class="sub-title text-center w-100">
				Новости </h2>
				<div class="title-border center">
				</div>
			</div>
		</div>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"news-block",
	Array(
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
		"COMPONENT_TEMPLATE" => "news-block",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "news",
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
		"PROPERTY_CODE" => array(0=>"",1=>"GALLERY",2=>"",),
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
	)
);?>
	</div>
</div>
 </section> <section class="feedback-section">
<div class="container">
	<div class="row">
		<div class="feedback-block w-100">
			<div class="top d-flex align-items-center">
				<div class="col-lg-6 col-md-12 col-xs-12">
					<h2 class="sub-title ">
					Обратная связь </h2>
					<div class="title-border ">
					</div>
					<p class="content">
						 Мы внимательно прочтем Ваше письмо и постараемся как можно скорее ответить на Ваш вопрос. <br>
 <br>
						 Отправляя сообщение, вы принимаете условия <a href="/policy"> политики конфиденциальности.</a>
					</p>
				</div>
				<div class="col-lg-6 col-md-12 col-xs-12">
 <img src="/images/notebook.png" alt="Изображение">
				</div>
			</div>
			<div class="bottom">
				 <?
                        $APPLICATION->IncludeFile(
                            SITE_DIR . "/include/form-index.php",
                            Array(),
                            Array("MODE" => "html")
                        );
                        ?>
			</div>
		</div>
	</div>
</div>
 </section> <section class="payments-section">
<div class="container">
	<div class="col-lg-12 col-xs-12">
		<div class="row">
			<h2 class="sub-title text-center w-100">
			Способы оплаты </h2>
			<div class="title-border center">
			</div>
		</div>
	</div>
	<div class="row">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"payments-block",
	Array(
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
		"COMPONENT_TEMPLATE" => "payments-block",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
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
		"PROPERTY_CODE" => array(0=>"",1=>"GALLERY",2=>"",),
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
	)
);?>
	</div>
</div>
 </section> <section class="footer-slider-section">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"footer-slider",
	Array(
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
		"COMPONENT_TEMPLATE" => "footer-slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "home_slider",
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
		"PROPERTY_CODE" => array(0=>"",1=>"GALLERY",2=>"",),
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
	)
);?> </section>
<?

//  include  modal success send
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/modal-success.php",
    Array(),
    Array("MODE" => "html")
);
?>
<div class="layer-overflow">
</div><?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>