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
$this->addExternalJS("/local/templates/avrora/assets/build/js/slick.min.js");
?>
<ul class="services-list">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <? if ($arItem['ID'] == $arParams['CURRENT_ID'])  : ?>
            <? foreach ($arItem["DISPLAY_PROPERTIES"]["SLIDERS"]["FILE_VALUE"] as $fileItem): ?>
                <li class="service-item">
                    <img src="<?= $fileItem['SRC']; ?>"  alt="Слайд" />
                </li>
            <? endforeach; ?>
        <? endif; ?>
    <? endforeach; ?>
</ul>
