<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Номера и цены");
$APPLICATION->SetPageProperty("MainClass", "hotel-page");
?>
<?
//  include home slider
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/home-slider.php",
    Array(),
    Array("MODE" => "html")
);
//  include reserve block
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/reserve-block.php",
    Array(),
    Array("MODE" => "html")
);
?>
    <section class="first-block">
        <div class="container">
            <div class="row">
                <h1 class="main-title">
                    <? $APPLICATION->ShowTitle(); ?>
                </h1>
            </div>
            <div class="row">
                <div class="col-lg-2 col-xs-12"></div>
                <div class="col-lg-8 col-xs-12">
                    <p class="text-center">
                        Гостиница Аврора одна из самых вместительных гостиниц в Омске. Номерной фонд составляет
                        124 номера от экономичного стандарта до представительского люкса. Гостеприимный персонал,
                        высокий уровень
                        сервиса и широкий спектр услуг сделает Ваше пребывание в Авроре максимально комфортным.
                        <br>
                        <br>
                        При бронировании номера на официальном сайте мы гарантируем Вам самую выгодную цену.
                    </p>
                    <div class="title-border"></div>
                </div>
                <div class="col-lg-2 col-xs-12"></div>
            </div>
        </div>


    </section>
<? $APPLICATION->IncludeComponent("bitrix:news.list", "hotel-numbers", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
    "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
    "AJAX_MODE" => "N",    // Включить режим AJAX
    "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
    "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
    "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
    "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",    // Учитывать права доступа
    "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
    "CACHE_TYPE" => "A",    // Тип кеширования
    "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
    "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
    "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
    "DISPLAY_DATE" => "Y",    // Выводить дату элемента
    "DISPLAY_NAME" => "Y",    // Выводить название элемента
    "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
    "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
    "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
    "FIELD_CODE" => array(    // Поля
        0 => "",
        1 => "",
    ),
    "FILTER_NAME" => "",    // Фильтр
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
    "IBLOCK_ID" => "11",    // Код информационного блока
    "IBLOCK_TYPE" => "services",    // Тип информационного блока (используется только для проверки)
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
    "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
    "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
    "NEWS_COUNT" => "20",    // Количество новостей на странице
    "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
    "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
    "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
    "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
    "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
    "PAGER_TITLE" => "Новости",    // Название категорий
    "PARENT_SECTION" => "",    // ID раздела
    "PARENT_SECTION_CODE" => "",    // Код раздела
    "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
    "PROPERTY_CODE" => array(    // Свойства
        0 => "OPTIONS",
        1 => "SLIDERS",
        2 => "",
    ),
    "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
    "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
    "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
    "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
    "SET_STATUS_404" => "N",    // Устанавливать статус 404
    "SET_TITLE" => "N",    // Устанавливать заголовок страницы
    "SHOW_404" => "N",    // Показ специальной страницы
    "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
    "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
    "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
    "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
    "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
),
    false
); ?>
    <section class="last-section">
        <div class="container">
            <div class="row">
                <h2 class="text-center w-100">
                    Расчетный час
                </h2>
                <div class="d-flex call-block w-100 position-relative">
                    <div class="first  col-lg-6 col-md-12">
                        <div class="item">
                            <h3 class="black heading text-center">
                                Заезд с 12:00
                            </h3>
                            <div class="content">
                                <h3 class="red sub-heading text-center">
                                    Ранний заезд
                                </h3>
                                <ul class="list">
                                    <li class="d-flex align-items-start">
                                        <div class="img-block">
                                            <img src="/images/hotel/hotel-cap-1.png" alt="иконка">
                                        </div>
                                        <p>
                                            До 12:00 + 0,5 от стоимости
                                            суточного тарифа
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <div class="img-block">
                                            <img src="/images/hotel/hotel-cap-2.png" alt="иконка">
                                        </div>
                                        <p>
                                            С 9:00 до 12:00 плата за ранний
                                            заезд не взимается (при наличии
                                            свободных номеров)
                                        </p>
                                    </li>

                                </ul>
                            </div>

                        </div>


                    </div>
                    <div class="second col-lg-6 col-md-12">
                        <div class="item">
                            <h3 class="black heading text-center">
                                Выезд  до 12:00
                            </h3>
                            <div class="content">
                                <h3 class="red sub-heading text-center">
                                    Поздний выезд
                                </h3>
                                <ul class="list">
                                    <li class="d-flex align-items-start">
                                        <div class="img-block">
                                            <img src="/images/hotel/hotel-cap-3.png" alt="иконка">
                                        </div>
                                        <p>
                                            До 18:00 + почасовая оплата
                                        </p>
                                    </li>
                                    <li class="d-flex align-items-start">
                                        <div class="img-block">
                                            <img class="rotate" src="/images/hotel/hotel-cap-3.png" alt="иконка">
                                        </div>
                                        <p>
                                            После 18:00 + 0,5 от стоимости
                                            суточного тарифа
                                        </p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="border-bottom"></div>
        </div>

    </section>
<?
//  include  form modal
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/modal-form.php",
    Array(),
    Array("MODE" => "html")
);

//  include  modal success
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/modal-success.php",
    Array(),
    Array("MODE" => "html")
);



?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>