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
<div id="home-slider">
    <div class="reputation-cont">
        <div class="container">
        <!-- start reputation form 2.0 -->
        <div id="tl-reputation-widget"></div>
        <script type="text/javascript">
            (function (w) {
                var q = [
                    ['setContext', 'TL-INT-avrora-lightxdesign', 'ru'],
                    ['embed', 'reputation-widget', {container: 'tl-reputation-widget'}]
                ];
                var t = w.travelline = (w.travelline || {}), ti = t.integration = (t.integration || {});
                ti.__cq = ti.__cq ? ti.__cq.concat(q) : q;
                if (!ti.__loader) {
                    ti.__loader = true;
                    var d = w.document, p = d.location.protocol, s = d.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = (p == 'https:' ? p : 'http:') + '//ibe.tlintegration.com/integration/loader.js';
                    (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(s);
                }
            })(window);
        </script>
        <!-- end reputation form 2.0 -->
        </div>
    </div>

    <ul class="slider-list">

        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <li class="news-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

                <img
                        class="preview_picture"
                        border="0"
                        src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"

                        style="float:left"
                />

            </li>
        <? endforeach; ?>

    </ul>

    <div class="home-slide-arrows">
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
