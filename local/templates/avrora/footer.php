<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}


?>
<?php
$page_main_search = parse_url($_SERVER['REQUEST_URI']);
if (strpos($page_main_search["path"],"/booking") === false) :
// reserve block
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/sticky-reserve.php",
    Array(),
    Array("MODE" => "html")
);
endif;
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div id="logo-footer">
                    <a href="/" class="logo">
                        <img src="/images/logo.png" alt="Логотип"/>
                    </a>
                </div>
                <div class="footer-soc-links-block d-flex align-items-center  justify-content-center">
                    <ul class="footer-soc-links d-flex  align-items-center">
                        <li>
                            <a target="_blank" class="fb" href="https://www.facebook.com/avrora55">
<!--                                <i class="fab fa-facebook"></i>-->
                                <img width="34"  src="/images/Facebook-logo-png-qw.png" alt="Иконка"/>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" class="vk" href="https://vk.com/avrorahotel55">
<!--                                <i class="fab fa-vk"></i>-->
                                <img width="26" src="/images/vk-applied-01-01-1024x1024.png" alt="Иконка"/>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" class="inst" href="https://www.instagram.com/avrorahotel55/">
<!--                                <i class="fab fa-instagram"></i>-->
                                <img width="37" src="/images/instagram-icon-white-on-gradient.png" alt="Иконка"/>

                            </a>
                        </li>

                        <li>
                            <a target="_blank" class="odn" href="https://ok.ru/profile/576380255679">
<!--                                <i class="fab fa-odnoklassniki"></i>-->
                                <img width="26" src="/images/odnoklassniki_logo.png" alt="Иконка"/>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="mt-4  copyright-alt">
                    © Гостиница «Аврора», <?= date('Y'); ?><br>
                    Официальный сайт.
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12 d-flex align-items-center">
                <div>
                    <div id="phone-block-footer" class="d-flex align-items-start justify-content-end">
                        <div class="img-block">
                            <img src="/images/phone.png" alt="Иконка"/>
                        </div>
                        <a href="tel:8-800-100-32-80">
                            <p>
                                8-800-100-32-80
                            </p>
                            <span>
                                Звонок по России бесплатный
                            </span>
                        </a>
                    </div>
                    <div id="list-soc-phones-footer" class="d-flex align-items-center ">
                        <div class="img-block">
                            <img width="28" src="/images/viber-phone-wifi-logo-transparent-background-pictures-round-3-1024x1024.png" alt="Иконка"/>
                            <img width="28" src="/images/vatsap2-compressor.png" alt="Иконка"/>
                        </div>
                        <ul class="list-phones">
                            <li>
                                <a href="tel:8-951-416-04-44">
                                    8-951-416-04-44
                                </a>
                            </li>


                        </ul>

                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 col-xs-12 d-flex justify-content-center align-items-center">

                <div id="adr-lang-block-footer">
                    <div class="first  d-flex">
                        <div class="img-block">
                            <img height="39" src="/images/geo.png" alt="Иконка"/>
                        </div>
                        <div class="adress">
                            <a target="_blank"
                               href="https://www.google.com/maps/place/%D1%83%D0%BB.+%D0%9F%D0%BE%D0%B2%D0%BE%D1%80%D0%BE%D1%82%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2%D0%B0,+6,+%D0%9E%D0%BC%D1%81%D0%BA,+%D0%9E%D0%BC%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB.,+644015/@54.9442581,73.351403,17z/data=!3m1!4b1!4m5!3m4!1s0x43ab026a63214a55:0xe33794ae6c93fb4b!8m2!3d54.944255!4d73.353597?hl=ru-RU"
                               class="link-to-adress">
                                <div>
                                    г. Омск
                                </div>
                                <div>
                                    ул. Поворотникова, 6
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12   last-col-certs">

                <ul class="footer-certs-list d-flex">
                    <li>
                        <a target="_blank" href="/images/Scan.jpg">
                            <img width="108" src="/images/cert1.jpg" alt="Сертификат"/>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="/images/Svidetelstvo_Avrora_3_zvezdy.pdf">
                            <img width="60" src="/images/cert2.jpg" alt="Сертификат"/>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="/images/sertifikat-3.jpg">
                            <img width="55" src="/images/cert3.jpg"   alt="Сертификат"/>
                        </a>
                    </li>
                </ul>


                <ul class="list-add-links">
                    <li>
                        <a href="/policy">
                            Политика конфиденциальности
                        </a>
                    </li>
                    <li>
                        <a target="_blank" class="bootom-copyright" title="Перейти на сайт разработчика"
                           href="http://asmart-group.ru/">
                            Сайт разработан IT-Company Asmart
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
</main>
	<?/*<script type="text/javascript" src="//api.venyoo.ru/wnew.js?wc=venyoo/default/science&widget_id=6235328327843840"></script>*/?>
<a id="back_to_top" href="#">
    <div class="ba-block">
        <i class="fas fa-chevron-up"></i>
    </div>
</a>
<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/assets/build/css/fontawesome-all.min.css">

<? $APPLICATION->ShowProperty('FooterJS'); ?>
<? $APPLICATION->ShowProperty('BeforeBodyClose'); ?>
</body>
</html>