<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}


?>

<?php
// reserve block
$APPLICATION->IncludeFile(
    SITE_DIR . "../include/sticky-reserve-en.php",
    Array(),
    Array("MODE" => "html")
);
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div id="logo-footer">
                    <a href="/en/" class="logo">
                        <img src="/images/logo-new-en.png" alt="Логотип"/>
                    </a>
                </div>
                <div class="footer-soc-links-block d-flex align-items-center">

                    <ul class="footer-soc-links d-flex  align-items-center">
                        <li>
                            <a target="_blank" class="vk" href="https://vk.com/avrorahotel55">
                                <i class="fab fa-vk"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" class="inst" href="https://www.instagram.com/avrorahotel55/">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" class="fb" href="https://www.facebook.com/avrora55">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" class="odn" href="https://ok.ru/profile/576380255679">
                                <i class="fab fa-odnoklassniki"></i>
                            </a>
                        </li>
                    </ul>
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
                                 Hotel hotline
                            </span>
                        </a>
                    </div>
                    <div id="list-soc-phones-footer" class="d-flex align-items-center ">
                        <div class="img-block">
                            <img src="/images/soc-phones.png" alt="Иконка"/>
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
            <div class="col-lg-3 col-md-6 col-xs-12  d-flex align-items-center">

                <div id="adr-lang-block-footer"
                     class="d-flex align-items-start justify-content-between align-items-end">
                    <div class="first  d-flex">
                        <div class="img-block">
                            <img src="/images/geo.png" alt="Иконка"/>
                        </div>
                        <div class="adress">
                            <a  target="_blank" href="https://www.google.com/maps/place/%D1%83%D0%BB.+%D0%9F%D0%BE%D0%B2%D0%BE%D1%80%D0%BE%D1%82%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2%D0%B0,+6,+%D0%9E%D0%BC%D1%81%D0%BA,+%D0%9E%D0%BC%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB.,+644015/@54.9442581,73.351403,17z/data=!3m1!4b1!4m5!3m4!1s0x43ab026a63214a55:0xe33794ae6c93fb4b!8m2!3d54.944255!4d73.353597?hl=en-US" class="link-to-adress">
                                <div>
                                    Omsk, st.
                                </div>
                                <div>
                                    Povorotnikova, 6
                                </div>

                            </a>

                        </div>
                    </div>
                </div>



            </div>
            <div class="col-lg-3 col-md-6 col-xs-12  last-col-certs">
                <ul class="footer-certs-list d-flex">
                    <li>
                        <a target="_blank" href="/images/Scan.jpg">
                            <img src="/images/cert1.jpg" alt="Сертификат"/>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="/images/Svidetelstvo_Avrora_3_zvezdy.pdf">
                            <img src="/images/cert2.jpg" alt="Сертификат"/>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="/images/sertifikat-3.jpg">
                            <img src="/images/cert3.jpg" style="width: 95px" alt="Сертификат"/>
                        </a>
                    </li>

                </ul>
                <ul class="list-add-links">
                    <li>
                        <a href="/en/policy/">
                            Privacy policy
                        </a>
                    </li>
                    <li>
                        <a target="_blank" class="bootom-copyright" title="Перейти на сайт разработчика"
                           href="http://asmart-group.ru/">
                            Website developed by IT-Company Asmart
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</footer>
</div>

</main>
<?php


?>
<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/assets/build/css/fontawesome-all.min.css">

<? $APPLICATION->ShowProperty('FooterJS'); ?>
<? $APPLICATION->ShowProperty('BeforeBodyClose'); ?>
</body>
</html>