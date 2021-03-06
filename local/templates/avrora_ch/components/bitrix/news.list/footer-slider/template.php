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
<div class="footer-slider">


    <ul class="footer-slider-list">

        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <li class="slider-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

                <img
                        class="preview_picture"
                        src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                        alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                        style="float:left"
                />

            </li>
        <? endforeach; ?>

    </ul>
    <div class="container  position-relative ">
        <div class="footer-slide-arrows">

            <a class="prev" href="#">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a class="next" href="#">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>
</div>
