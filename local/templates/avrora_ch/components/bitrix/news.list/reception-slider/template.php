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
<div class="home-banner">
    <ul class="reception-list">

        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <li class="item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

                <img
                        class="preview_picture"
                        border="0"
                        src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                        height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
                        alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                        style="float:left"
                />


            </li>
        <? endforeach; ?>

    </ul>
</div>
<div class="bottom d-flex  reception-slider-arrow">
    <ul class="list-arrow d-flex">
        <li><a href="#" class="prev"> <i class="fas fa-chevron-left"></i> </a></li>
        <li><a href="#" class="next"> <i class="fas fa-chevron-right"></i> </a></li>
    </ul>
    <h4 class="title">
        前台
    </h4>
</div>
