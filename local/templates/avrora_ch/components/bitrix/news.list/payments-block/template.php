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


<div class="payments-block w-100 position-relative">
    <ul class="list-payments d-flex justify-content-center">
        <li>
            <img src="/images/1_2.png" alt="Изображение"/>
        </li>
        <li>
            <img src="/images/2.png" alt="Изображение"/>
        </li>
        <li>
            <img src="/images/3.png" alt="Изображение"/>
        </li>
        <li>
            <img src="/images/4.png" alt="Изображение"/>
        </li>
        <li>
            <img src="/images/5.png" alt="Изображение"/>
        </li>
        <li>
            <img src="/images/6.png" alt="Изображение"/>
        </li>
        <li>
            <img src="/images/7.png" alt="Изображение"/>
        </li>
        <li>
            <img src="/images/8.png" alt="Изображение"/>
        </li>
        <li>
            <img src="/images/9.png" alt="Изображение"/>
        </li>
        <li>
            <img src="/images/10.png" alt="Изображение"/>
        </li>
        <li>
            <img src="/images/11.png" alt="Изображение"/>
        </li>
        <li>
            <img src="/images/12.png" alt="Изображение"/>
        </li>
        <li>
            <img src="/images/13.png" alt="Изображение"/>
        </li>

    </ul>
    <div class="payment-slide-arrows">
        <div class="container  position-relative ">
            <a class="prev" href="#">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a class="next" href="#">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>
</div>
<!--<ul class="news-list   row">-->
<!---->
<!--    --><? // foreach ($arResult["ITEMS"] as $arItem): ?>
<!--        --><? //
//        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
//        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
//
//        ?>
<!---->
<!--        <li class="news-item  col-lg-4  col-md-6 col-xs-12  " id="--><? //= $this->GetEditAreaId($arItem['ID']); ?><!--">-->
<!--            --><? //if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
<!--                --><? //if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
<!--                    <a class="blog-img" href="--><? //=$arItem["DETAIL_PAGE_URL"]?><!--"><img-->
<!--                                class="preview_picture"-->
<!--                                border="0"-->
<!--                                src="--><? //=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
<!--                                width="--><? //=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
<!--                                height="--><? //=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
<!--                                alt="--><? //=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
<!--                                title="--><? //=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
<!--                                style="float:left"-->
<!--                        /></a>-->
<!--                --><? //else:?>
<!--                    <img-->
<!--                            class="preview_picture"-->
<!--                            border="0"-->
<!--                            src="--><? //=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
<!--                            width="--><? //=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
<!--                            height="--><? //=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
<!--                            alt="--><? //=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
<!--                            title="--><? //=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
<!--                            style="float:left"-->
<!--                    />-->
<!--                --><? //endif;?>
<!--            --><? //endif?>
<!--            --><? //if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
<!--                <div class="news-date-time">--><? //echo $arItem["DISPLAY_ACTIVE_FROM"]?><!--</div>-->
<!--            --><? //endif?>
<!--            --><? //if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
<!--                --><? //if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
<!--                    <h3 class="title w-100"><a href="--><? //echo $arItem["DETAIL_PAGE_URL"]?><!--"> --><? //echo $arItem["NAME"]?><!-- </a></h3>-->
<!--                --><? //else:?>
<!--                    <b>--><? //echo $arItem["NAME"]?><!--</b><br />-->
<!--                --><? //endif;?>
<!--            --><? //endif;?>
<!--            --><? //if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
<!--                <div class="content"> --><? //echo $arItem["PREVIEW_TEXT"];?><!--</div>-->
<!--            --><? //endif;?>
<!--            <a class="link-more-alt" href="--><? //=$arItem["DETAIL_PAGE_URL"]?><!--">-->
<!--                Читать больше-->
<!---->
<!--            </a>-->
<!--            --><? //if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
<!--                <div style="clear:both"></div>-->
<!--            --><? //endif?>
<!--        </li>-->
<!---->
<!--    --><? // endforeach; ?>
<!--</ul>-->
<!--<div class="pagination-alt w-100">-->
<!--    <a href="#" class="link-more news-link" >-->
<!--        Открыть все новости-->
<!--    </a>-->
<!---->
<!--</div>-->
<!---->
