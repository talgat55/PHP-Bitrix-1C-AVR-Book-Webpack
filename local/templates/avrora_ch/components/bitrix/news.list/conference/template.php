<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->addExternalJS("/local/templates/avrora/assets/build/js/jquery.mask.min.js");
$this->addExternalJS("/local/templates/avrora/assets/build/js/lightbox.min.js");



?>
<div class="container">
    <div class="row">


        <ul class="numbers-list w-100">
            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <!--    --><? // var_dump($arItem["DISPLAY_PROPERTIES"]["OPTIONS"]); ?>
                <li class="number-item d-flex align-items-center">
                    <div class="slider col-lg-5 col-md-12  col-sm-12 position-relative">
                        <ul class="sliders d-flex">
                            <? foreach ($arItem["DISPLAY_PROPERTIES"]["SLIDERS"]["FILE_VALUE"] as $fileItem): ?>
                                <li class="slider-item">
                                    <a href="<?= $fileItem['SRC']; ?>"  data-lightbox="image-<?=$arItem["ID"]; ?>">
                                        <img src="<?= $fileItem['SRC']; ?>" alt="Слайд"/>
                                    </a>
                                </li>
                            <? endforeach; ?>

                        </ul>
                        <ul class=" slide-arrows d-flex">
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
                    <div class="content  col-lg-7 col-md-12 col-sm-12">
                        <h2 class="sub-title">
                            <?= $arItem['NAME']; ?>
                        </h2>
                        <div class="description">
                            <ul>
                                <li class="position-relative">
                                    <?= $arItem["DISPLAY_PROPERTIES"]["SIZE"]["VALUE"]; ?>
                                </li>
                            </ul>

                        </div>
                        <div class="options">
                            <ul class="list-options  ">
                                <? foreach ($arItem["DISPLAY_PROPERTIES"]["OPTIONS"]["VALUE"] as $key => $fileItem): ?>
                                    <li class="slider-item ">
                                        <div class="d-flex align-items-center">
                                            <div class="img-block">
                                                <img src="/images/conference/<?= $arItem["DISPLAY_PROPERTIES"]["OPTIONS"]["VALUE_XML_ID"][$key]; ?>.jpg"
                                                     alt="иконка"/>
                                            </div>
                                            <h4>
                                                <?  showNameConferenceOption($arItem["DISPLAY_PROPERTIES"]["OPTIONS"]["VALUE_XML_ID"][$key], 'ch');  ?>
                                            </h4>
                                        </div>
                                    </li>
                                <? endforeach; ?>
                                <li class="slider-item  ">
                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="last-link">
                                        更多细节
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="link-more order-price">
                            提出要求
                        </a>

                    </div>

                </li>
            <? endforeach; ?>
        </ul>

    </div>
</div>
