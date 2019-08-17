<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>
    <div>

        <a href="/ch/" class="logo">
            <img src="/images/logo-new-en.png" alt="Логотип"/>
        </a>
        <ul class="mobile-menu ">

            <?
            foreach ($arResult as $arItem):
                if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
                ?>
                <? if ($arItem["SELECTED"]): ?>
                <li><a href="<?= $arItem["LINK"] ?>" class="selected"><?= $arItem["TEXT"] ?></a></li>
            <? else: ?>
                <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
            <? endif ?>

            <? endforeach ?>

        </ul>
        <ul class="list-lang  d-flex  align-items-center justify-content-center">
            <li>
                <a href="#" class="lang-item d-flex" data-lang="ru">
                    <img src="/images/ru-lng.jpg" alt="Иконка"/>
                </a>
            </li>
            <li>
                <a href="#" class="lang-item d-flex" data-lang="en">
                    <img src="/images/eng-lng.jpg" alt="Иконка"/>
                </a>
            </li>
            <li>
                <a href="#" class="lang-item d-flex" data-lang="ch">
                    <img src="/images/ch-lng.jpg" alt="Иконка"/>
                </a>
            </li>
        </ul>
    </div>
<? endif ?>