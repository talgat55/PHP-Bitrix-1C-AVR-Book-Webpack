<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>
    <h1 class="hide-main-title">
        <? $APPLICATION->ShowTitle(); ?>
    </h1>

<? $APPLICATION->IncludeComponent("bitrix:news.list", "home-slider", Array(
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
    "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
    "DISPLAY_DATE" => "Y",    // Выводить дату элемента
    "DISPLAY_NAME" => "Y",    // Выводить название элемента
    "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
    "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
    "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
    "FIELD_CODE" => array(    // Поля
        0 => "PREVIEW_PICTURE",
        1 => "",
    ),
    "FILTER_NAME" => "",    // Фильтр
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
    "IBLOCK_ID" => "1",    // Код информационного блока
    "IBLOCK_TYPE" => "home_slider",    // Тип информационного блока (используется только для проверки)
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
        0 => "LINK",
        1 => "",
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
    <section class="reserve-section">
        <div class="reserve-block">
            <div class="row">
                <div class="first   col-xs-12">
                    <div class="info-block">
                        <h3 class="title">
                            Забронируйте номера<br>
                            со скидкой!
                        </h3>
                        <div class="bottom-block">
                            <ul class="list-advantages d-flex">
                                <li class="item d-flex">
                                    <img src="/images/banner-icon.png" alt="иконка"/>
                                    <p>
                                        Завтрак
                                        шведский
                                        стол
                                    </p>
                                </li>

                                <li class="item d-flex">
                                    <img src="/images/banner-icon2.png" alt="иконка"/>
                                    <p>
                                        Номера,
                                        в которых
                                        хочется жить!
                                    </p>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
                <div class="second   col-xs-12">
                    <h3 class="title">
                        Бронирование номера:
                    </h3>
                    <form id="reserve-form" method="post" action="/ajax/reserve">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <label>
                                        Дата заезда:
                                    </label>
                                    <div class=" position-relative">
                                        <input type="text" name="date_from" class="text-input date-input">
                                        <span class="date-icon">
                                    <img src="/images/date-icon.jpg" alt="иконка"/>
                                </span>
                                    </div>

                                </div>
                                <div class="col-md-6 col-xs-12  e">
                                    <label>
                                        Дата выезда:
                                    </label>
                                    <div class=" position-relative">
                                        <input type="text" name="date_to" class="text-input date-input">
                                        <span class="date-icon">
                                         <img src="/images/date-icon.jpg" alt="иконка"/>
                                </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 col-xs-12">
                                    <label>
                                        Гости:
                                    </label>
                                    <input type="number" name="сщгте" class="text-input  ">
                                </div>
                                <div class="col-md-9 col-xs-12">
                                    <button type="submit" form="reserve-form" class="main-link">
                                        Найти номер
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="first-section">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="first col-lg-7 col-xs-12">
                    <h2 class="sub-title">
                        Гостиница<br>
                        в городе Омск
                    </h2>
                    <div class="title-border"></div>
                    <p>
                        Аврора – это современная комфортабельная гостиница, отвечающая всем стандартам качества и
                        сертифицированная по категории 3 звезды.
                        <br>
                        Уникальное местоположение в 5 минутах езды от аэропорта, 10 минутах от центра и ЖД вокзала,
                        изумительный вид на реку Иртыш, чистый воздух и самый большой парк Омска за окнами.
                        <br>
                        124 номера различной категории от экономичного стандарта до представительского люкса.
                        <br>
                        Панорамный ресторан гостиницы Аврора сочетает в себе европейскую, русскую и авторскую кухню в
                        исполнении шеф-повара Виталия Митина.
                        <br>
                        В гостинице Аврора представлено 4 современных комфортабельных конференц-зала. А также
                        тренажерный зал, финская сауна и русский бильярд, где Вы можете отдохнуть после трудового дня.
                    </p>
                </div>
                <div class="second col-lg-5 col-xs-12">
                    <div id="home-banner">
                        <div class="home-banner">

                        </div>
                        <div class="bottom d-flex">
                            <ul class="list-arrow">
                                <li>
                                   <a href="#" class="prev">
                                       <i class="fas fa-chevron-left"></i>
                                   </a>
                                </li>
                                <li>
                                    <a href="#" class="next">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <h4 class="title">
                                Ресепшен
                            </h4>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="advantage-section">

    </section>

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>