<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Hotel «Aurora», Omsk - official site");
$APPLICATION->SetPageProperty("title","Home");

?><h1 class="hide-main-title">
<? $APPLICATION->ShowTitle(); ?> </h1>
 <?

//  include home slider
$APPLICATION->IncludeFile(
    SITE_DIR . "../include/home-slider-en.php",
    Array(),
    Array("MODE" => "html")
);
?>
<div class="reserve-wrapper">
	 <?php
        //  include reserve block
        $APPLICATION->IncludeFile(
            SITE_DIR . "../include/reserve-block-en.php",
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
			Hotel<br>
			 in the city of Omsk </h2>
			<div class="title-border">
			</div>
			<p>
				 Location<br>
 <br>
				 Avrora hotel is in the close proximity to downtown Omsk. The hotel location allows easily reaching any place in Omsk city. The panorama of the city and a stunning river view opens through the room windows. <br>
 <br>
				 In the hotel <br>
 <br>
				 A 24/7 accommodation service, free guarded parking, free Wi-Fi, a 24/7 restaurant, a 24/7 lobby bar, an event hall, 24/7 room service, 4 conference halls, a sauna, a gym, the laundry, safe boxes and a locker. Accommodation<br>
 <br>
				 The hotel has 124 spacious European-class rooms and offers a 24/7 room service. Every room has all the necessities for work and leisure. Each room has Wi-Fi, a phone, a fridge, a hair dryer and a balcony. There are rooms for non-smokers. The price of accommodation includes a buffet breakfast. <br>
 <br>
				 Additional services: transfer, booking air and train tickets to a needed direction, sightseeing tours and turn-key ready events arrangement.
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
		"COMPONENT_TEMPLATE" => "reception-slider",
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
				At the hotel: </h3>
				<div class="row">
					<div class="col-md-6 col-xs-12 ">
						<ul class="list-adv">
							<li class="item">
							<p>
								 124 rooms
							</p>
 </li>
							<li class="item">
							<p>
								 free <br>
								 secure parking
							</p>
 </li>
							<li class="item">
							<p>
								 free wi-fi
							</p>
 </li>
							<li class="item">
							<p>
								 transfer
							</p>
 </li>
							<li class="item">
							<p>
								 gym
							</p>
 </li>
							<li class="item">
							<p>
								 safe boxes and <br>
								 luggage storage
							</p>
 </li>
						</ul>
					</div>
					<div class="col-md-6 col-xs-12 ">
						<ul class="list-adv">
							<li class="item">
							<p>
								 restaurant 24/7
							</p>
 </li>
							<li class="item">
							<p>
								 24/7 bar
							</p>
 </li>
							<li class="item">
							<p>
								 room service 24/7
							</p>
 </li>
							<li class="item">
							<p>
								 4 conference rooms
							</p>
 </li>
							<li class="item">
							<p>
								 Finnish sauna
							</p>
 </li>
							<li class="item">
							<p>
								 laundry
							</p>
 </li>
							<li class="item">
							<p>
								 summer terrace
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
				In the room: </h3>
				<ul class="list-adv">
					<li class="item">
					<p>
						 fridge
					</p>
 </li>
					<li class="item">
					<p>
						 hair dryer
					</p>
 </li>
					<li class="item">
					<p>
						 TV
					</p>
 </li>
					<li class="item">
					<p>
						 balcony
					</p>
 </li>
					<li class="item">
					<p>
						 Essential Toiletries <br>
						 belonging
					</p>
 </li>
					<li class="item">
					<p>
						 phone
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
			Our services </h2>
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
		"IBLOCK_ID" => "15",
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
		"PROPERTY_CODE" => array(0=>"",1=>"GALLERY",2=>"",),
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
				News </h2>
				<div class="title-border center">
				</div>
			</div>
		</div>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"news-block",
	Array(
		"ACTIVE_DATE_FORMAT" => "m.d.Y",
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
		"IBLOCK_ID" => "17",
		"IBLOCK_TYPE" => "news_en",
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
					Feedback </h2>
					<div class="title-border ">
					</div>
					<p class="content">
						 We will carefully read your letter and try to answer your question as soon as possible.<br>
 <br>
						 You accept the terms of the <a href="/en/policy/"> policy private</a>&nbsp;by sending a message.
					</p>
				</div>
				<div class="col-lg-6 col-md-12 col-xs-12">
 <img src="/images/notebook.png" alt="Изображение">
				</div>
			</div>
			<div class="bottom">
				<div class="bottom">
					 <?
                            $APPLICATION->IncludeFile(
                                SITE_DIR . "../include/form-index-en.php",
                                Array(),
                                Array("MODE" => "html")
                            );
                            ?>
				</div>
			</div>
		</div>
	</div>
</div>
 </section> <section class="payments-section">
<div class="container">
	<div class="col-lg-12 col-xs-12">
		<div class="row">
			<h2 class="sub-title text-center w-100">
			Payment Methods </h2>
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
    SITE_DIR . "../include/modal-success-en.php",
    Array(),
    Array("MODE" => "html")
);
?>
<div class="layer-overflow">
</div>
 <br><?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>