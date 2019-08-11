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

?>
<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <? if ($arItem['ID'] == $arParams['CURRENT_ID'])  : ?>
        <ul class="slider-items <?=  ($arParams['COUNTER'] == 0)  ?  'active' : ''; ?>  w-100  <?=$arItem['ID']; ?>"  >
            <? foreach ($arItem["DISPLAY_PROPERTIES"]['SLIDERS']['VALUE'] as $file_item): ?>
                <li>
                    <? $URL = CFile::GetPath($file_item); ?>
                    <a href="<?= $URL; ?>"  data-lightbox="image-<?=$arItem['ID'];?>">
                        <img src="<?= $URL; ?>"  alt="Изображение" />
                    </a>
                </li>
            <? endforeach; ?>
        </ul>
    <? endif; ?>

<? endforeach; ?>