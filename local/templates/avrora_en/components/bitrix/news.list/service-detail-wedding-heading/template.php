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
?>
<li>
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <? if ($arItem['ID'] == $arParams['CURRENT_ID'])  : ?>
            <a href="#" data-id="<?= $arItem['ID']; ?>"  class="<?=  ($arParams['COUNTER'] == 0)  ?  'active' : ''; ?>">
                <?= $arItem["DISPLAY_PROPERTIES"]["TYPE_NAME"]["VALUE"]; ?>
            </a>

        <? endif; ?>

    <? endforeach; ?>
</li>

