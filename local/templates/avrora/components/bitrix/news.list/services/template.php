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

<ul class="services-list">
    <? $i = 1; ?>
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

        $text =
            '<div class="content-wrap">' .
            '<h3 class="title">' . $arItem["NAME"] . '</h3>' .
            '<div class="content">' . $arItem["PREVIEW_TEXT"] . '</div>' .
            '<a href="' . $arItem["DETAIL_PAGE_URL"] . '"  class="link-more">Подробнее</a>' .
            '</div>';

        $slider =
            '<ul class="list-sliders ">';
            foreach ($arItem['PROPERTIES']['GALLERY']['VALUE'] as $value) {
                $img = CFile::GetPath($value);
                $slider .= '<li> <img src="' . $img . '"  alt="Изображение"/> </li>';
            }
        $slider .= '
            </ul>
            <ul class="services-slide-arrows  d-flex">
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
            ';

        if ($i == 1 || $i == 3) {
            $secondBlock = $text;

            $firstBlock = $slider;
            $firstClass = 'slider-wrapper  left';
            $secondClass = 'left';
        } else {
            $firstBlock = $text;
            $secondBlock = $slider;
            $firstClass = 'right';
            $secondClass = 'slider-wrapper  right';
        }

        ?>

        <li class="service-item row d-flex align-items-center   count-<?= $i; ?>"
            id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

            <div class="  col-lg-6 col-xs-12 position-relative <?= $firstClass; ?>  mobile-block">
                <?= $slider; ?>
            </div>
             <div class="  col-lg-6 col-xs-12 position-relative <?= $firstClass; ?>">
                <?= $firstBlock; ?>
            </div>

            <div class="col-lg-6 col-xs-12  position-relative  <?= $secondClass; ?>  desktop-block">
                <?= $secondBlock; ?>

            </div>
        </li>

        <? $i++; ?>
    <? endforeach; ?>
</ul>

