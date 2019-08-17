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
                                座位方案
                            </h2>
                            <p class="description">
                                根据不同的规模 你可以做的事 选择最方便的  你在会议室安排家具
                            </p>
                            <ul class="list-seat">
                                <li class="d-flex  align-items-center  ">
                                    <img src="/images/seat1.jpg" alt="иконка"/>
                                    <p>
                                        <?= $arResult["DISPLAY_PROPERTIES"]["SCHEMA_SEAT_TEATR"]["VALUE"]; ?> 这个人
                                    </p>
                                </li>
                                <li class="d-flex  align-items-center ">
                                    <img src="/images/seat2.jpg" alt="иконка"/>
                                    <p>
                                        <?= $arResult["DISPLAY_PROPERTIES"]["SCHEMA_SEAT_CLASS"]["VALUE"]; ?> 这个人
                                    </p>
                                </li>
                                <li class="d-flex  align-items-center ">
                                    <img src="/images/seat3.jpg" alt="иконка"/>
                                    <p>
                                        <?= $arResult["DISPLAY_PROPERTIES"]["SCHEMA_SEAT_ROUND"]["VALUE"]; ?> 这个人
                                    </p>
                                </li>
                                <li class="d-flex  align-items-center  ">
                                    <img src="/images/seat4.jpg" alt="иконка"/>
                                    <p>
                                        <?= $arResult["DISPLAY_PROPERTIES"]["SCHEMA_SEAT_P"]["VALUE"]; ?> 这个人
                                    </p>
                                </li>

                            </ul>

                        </div>

                        <div class="item col-lg-4 col-md-6 col-sm-12">
                            <h2 class="sub-title-conference">
                                租金价格
                            </h2>
                            <p class="description">
                                租赁价格根据价格表<b>经济套餐</b> 没有设备）
                            </p>
                            <ul class="list-prices">
                                <li>
                                    <p>
                                        <span>
                                          <?= $arResult["DISPLAY_PROPERTIES"]["COST_RENT_ECONOM_HOUR"]["VALUE"]; ?>   卢布
                                        </span>
                                        （每小时）
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span>
                                         <?= $arResult["DISPLAY_PROPERTIES"]["COST_RENT_ECONOM_DAY"]["VALUE"]; ?>    卢布
                                        </span>
                                        （每天7小时）
                                    </p>
                                </li>
                            </ul>
                            <div class="border-conference"></div>
                            <p class="description">
                                租赁价格根据价格表<b>商务套餐</b> （带设备）
                            </p>
                            <ul class="list-prices">
                                <li>
                                    <p>
                                        <span>
                                          <?= $arResult["DISPLAY_PROPERTIES"]["COST_RENT_BUSINES_HOUR"]["VALUE"]; ?>   卢布
                                        </span>
                                        （每小时）
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span>
                                         <?= $arResult["DISPLAY_PROPERTIES"]["COST_RENT_BUSINES_DAY"]["VALUE"]; ?>    卢布
                                        </span>
                                        （每天7小时）
                                    </p>
                                </li>
                            </ul>
                        </div>

                        <div class="item col-lg-4 col-md-6 col-sm-12">
                            <h2 class="sub-title-conference">
                                补充 设备
                            </h2>
                            <p class="description">
                                关税用俄罗斯卢布表示， 免征增值税
                            </p>
                            <h4 class="title-devide">
                                设备:
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
                            提出要求
                        </a>
                    </div>
                    <p class="description text-center">
                        作为任何商务活动的愉快补充，Aurora餐厅提供宽敞的服务 选择咖啡休息，商务午餐，招待会，宴会。
                    </p>
                    <div class="text-info d-flex align-items-center justify-content-center w-100">
                        <div class="text">
                            个人经理
                        </div>
                        <div class="text">
                            <a href="tel:8-904-320-35-67">8-904-320-35-67</a>
                            / <a href="tel:8 (3812) 55-73-52">8 (3812) 55-73-52</a>
                        </div>
                    </div>
                    <div class="text-info d-flex align-items-center justify-content-center w-100">
                        <div class="text">
                            邮件
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