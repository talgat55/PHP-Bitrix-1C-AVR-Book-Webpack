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
$this->addExternalCss("/local/templates/avrora/assets/build/css/slick.css");
$this->addExternalCss("/local/templates/avrora/assets/build/css/slick-theme.css");
$this->addExternalCss("/local/templates/avrora/assets/build/css/lightbox.min.css");

$this->addExternalJS("/local/templates/avrora/assets/build/js/slick.min.js");
$this->addExternalJS("/local/templates/avrora/assets/build/js/lightbox.min.js");

$APPLICATION->SetPageProperty("MainClass", "conference-page-detail");

?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-dm-12">
            <div class="conference-detail">
                <h1 class="main-title">
                    <?= $arResult["NAME"] ?>
                </h1>

                <div class="pre-describe">
                    <?= $arResult["DISPLAY_PROPERTIES"]["TEXT_DESCRIBE"]["DISPLAY_VALUE"]; ?>
                </div>
                <section class="slider">
                    <ul class="slider-list">
                        <? foreach ($arResult["DISPLAY_PROPERTIES"]["SLIDES_DETAIL_PAGE"]["FILE_VALUE"] as $arItem): ?>
                            <li class="slider-item">
                                <a href="<?= $arItem['SRC']; ?>"  data-lightbox="image">
                                    <img src="<?= $arItem['SRC']; ?>" alt="Слайд"/>
                                </a>
                            </li>
                        <? endforeach; ?>
                    </ul>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="item col-lg-4 col-md-6 col-sm-12">
                            <h2 class="sub-title-conference">
                                Схемы рассаcдки
                            </h2>
                            <p class="description">
                                В зависимости от масштаба
                                мероприятия Вы можете
                                выбрать наиболее удобную для
                                Вас расстановку мебели в конференц-зале
                            </p>
                            <ul class="list-seat">
                                <li class="d-flex  align-items-center  ">
                                    <img src="/images/seat1.jpg" alt="иконка"/>
                                    <p>
                                        <?= $arResult["DISPLAY_PROPERTIES"]["SCHEMA_SEAT_TEATR"]["VALUE"]; ?> человек
                                    </p>
                                </li>
                                <li class="d-flex  align-items-center ">
                                    <img src="/images/seat2.jpg" alt="иконка"/>
                                    <p>
                                        <?= $arResult["DISPLAY_PROPERTIES"]["SCHEMA_SEAT_CLASS"]["VALUE"]; ?> человек
                                    </p>
                                </li>
                                <li class="d-flex  align-items-center ">
                                    <img src="/images/seat3.jpg" alt="иконка"/>
                                    <p>
                                        <?= $arResult["DISPLAY_PROPERTIES"]["SCHEMA_SEAT_ROUND"]["VALUE"]; ?> человек
                                    </p>
                                </li>
                                <li class="d-flex  align-items-center  ">
                                    <img src="/images/seat4.jpg" alt="иконка"/>
                                    <p>
                                        <?= $arResult["DISPLAY_PROPERTIES"]["SCHEMA_SEAT_P"]["VALUE"]; ?> человек
                                    </p>
                                </li>

                            </ul>

                        </div>

                        <div class="item col-lg-4 col-md-6 col-sm-12">
                            <h2 class="sub-title-conference">
                                Стоимость аренды
                            </h2>
                            <p class="description">
                                Стоимость аренды по прейскуранту <b>пакет Эконом</b>
                                (без оборудования)
                            </p>
                            <ul class="list-prices">
                                <li>
                                    <p>
                                        <span>
                                          <?= $arResult["DISPLAY_PROPERTIES"]["COST_RENT_ECONOM_HOUR"]["VALUE"]; ?>   рублей
                                        </span>
                                        (за час)
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span>
                                         <?= $arResult["DISPLAY_PROPERTIES"]["COST_RENT_ECONOM_DAY"]["VALUE"]; ?>    рублей
                                        </span>
                                        (за день, от 7 часов)
                                    </p>
                                </li>
                            </ul>
                            <div class="border-conference"></div>
                            <p class="description">
                                Стоимость аренды по прейскуранту <b>пакет Бизнес</b>
                                (с оборудованием)
                            </p>
                            <ul class="list-prices">
                                <li>
                                    <p>
                                        <span>
                                          <?= $arResult["DISPLAY_PROPERTIES"]["COST_RENT_BUSINES_HOUR"]["VALUE"]; ?>   рублей
                                        </span>
                                        (за час)
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span>
                                         <?= $arResult["DISPLAY_PROPERTIES"]["COST_RENT_BUSINES_DAY"]["VALUE"]; ?>    рублей
                                        </span>
                                        (за день, от 7 часов)
                                    </p>
                                </li>
                            </ul>
                        </div>

                        <div class="item col-lg-4 col-md-6 col-sm-12">
                            <h2 class="sub-title-conference">
                                Дополнительное
                                оборудование
                            </h2>
                            <p class="description">
                                Тарифы указаны в рублях РФ,
                                НДС не облагаются
                            </p>
                            <h4 class="title-devide">
                                Оборудование:
                            </h4>
                            <div class="equipmentt">

                                <?= $arResult["DISPLAY_PROPERTIES"]["EQUIPMENT"]["DISPLAY_VALUE"]; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="last-block">
                    <div class="col-md-12 col-xs-12 d-flex justify-content-center">
                        <a href="#" class="link-more  create-order  ">
                            Оформить заявку
                        </a>
                    </div>
                    <p class="description text-center">
                        В качестве приятного дополнения любого делового мероприятия ресторан «Аврора» предлагает широкий
                        выбор меню кофе-пауз, бизнес-ланчей, фуршетов, банкетов.
                    </p>
                    <div class="text-info d-flex align-items-center justify-content-center w-100">
                        <div class="text">
                            Персональный менеджер
                        </div>
                        <div class="text">
                            <a href="tel:8-904-320-35-67">8-904-320-35-67</a>
                            / <a href="tel:8 (3812) 55-73-52">8 (3812) 55-73-52</a>
                        </div>
                    </div>
                    <div class="text-info d-flex align-items-center justify-content-center w-100">
                        <div class="text">
                            Почта
                        </div>
                        <div class="text">
                            <a href="mailto:sales1@avrorahotel55.ru">sales1@avrorahotel55.ru</a>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </div>
</div>