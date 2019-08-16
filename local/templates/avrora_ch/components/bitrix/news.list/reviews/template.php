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
<div class="container">
    <div class="row">
        <div class="page-wrap w-100">
            <div class="col-md-12 col-xs-12">
                <h1 class="main-title">
                    评测
                </h1>
                <div class="reviews-block  position-relative ">

                    <ul class="reviews-list d-flex  ">

                        <? foreach ($arResult["ITEMS"] as $arItem): ?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                            <li class="review-item text-center" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                <div class="wrapper-review-item">
                                    <div class="img-block  d-flex justify-content-center  align-items-center">
                                        <? $URL = CFile::GetPath($arItem["DISPLAY_PROPERTIES"]['IMAGE_ORG']['VALUE']); ?>
                                        <img src="<?= $URL; ?>" alt="Изображение"/>
                                    </div>
                                    <div class="content">
                                        <div class="text">
                                            <?= $arItem['PREVIEW_TEXT']; ?>
                                        </div>
                                        <div class="sep"></div>
                                        <div class="add-info">
                                            <div class="fio-info">
                                                <?= $arItem["DISPLAY_PROPERTIES"]['FIO']['VALUE']; ?>
                                            </div>
                                            <div class="from-site-info">
                                                <?= $arItem["DISPLAY_PROPERTIES"]['FROM_SITE']['VALUE']; ?>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </li>
                        <? endforeach; ?>

                    </ul>

                    <div class="bottom">
                        <a href="#" class="link-more create-review-link">
                            发表评论
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
