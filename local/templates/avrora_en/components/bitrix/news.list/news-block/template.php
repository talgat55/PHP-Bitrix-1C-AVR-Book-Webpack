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

<ul class="news-list   row">

    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

        ?>

        <li class="news-item  col-lg-4  col-md-6 col-xs-12  " id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <a class="blog-img" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
                                class="preview_picture"
                                border="0"
                                src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                                height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                                alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                                style="float:left"
                        /></a>
                <?else:?>
                    <img
                            class="preview_picture"
                            border="0"
                            src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                            width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                            height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                            alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                            title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                            style="float:left"
                    />
                <?endif;?>
            <?endif?>
            <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                <div class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
            <?endif?>
            <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <h3 class="title w-100"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"> <?echo $arItem["NAME"]?> </a></h3>
                <?else:?>
                    <b><?echo $arItem["NAME"]?></b><br />
                <?endif;?>
            <?endif;?>
            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                <div class="content"> <?echo $arItem["PREVIEW_TEXT"];?></div>
            <?endif;?>
            <a class="link-more-alt" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                Read more

            </a>
            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                <div style="clear:both"></div>
            <?endif?>
        </li>

    <? endforeach; ?>
</ul>
<div class="pagination-alt w-100">
    <a href="/en/news/" class="link-more news-link" >
        Open all news
    </a>

</div>

