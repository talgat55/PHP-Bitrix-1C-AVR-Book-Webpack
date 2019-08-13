<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}


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
                <div class="footer-soc-links-block d-flex align-items-center">
                    <h5 class="title">
                        Мы в соц. сетях:
                    </h5>
                    <ul class="footer-soc-links d-flex">
                        <li>
                            <a target="_blank" class="vk" href="#">
                                <i class="fab fa-vk"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" class="inst" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" class="fb" href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" class="odn" href="#">
                                <i class="fab fa-odnoklassniki"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div id="phone-block-footer" class="d-flex align-items-start">
                    <div class="img-block">
                        <img src="/images/phone.png" alt="Иконка"/>
                    </div>
                    <a href="tel:8-800-100-32-80">
                                        <span>
                                            Звонок по России бесплатный
                                        </span>
                        <p>
                            8-800-100-32-80
                        </p>
                    </a>

                </div>
                <div id="list-soc-phones-footer" class="d-flex align-items-start ">
                    <div class="img-block">
                        <img src="/images/soc-phones.png" alt="Иконка"/>
                    </div>
                    <ul class="list-phones">
                        <li>
                            <a href="#">
                                8-951-416-04-44
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                8 (3812) 55-73-52
                            </a>
                        </li>


                    </ul>

                </div>

            </div>

            <div class="col-lg-3 col-md-6 col-xs-12">

                <div id="adr-lang-block-footer"
                     class="d-flex align-items-start justify-content-between align-items-end">
                    <div class="first  d-flex">
                        <div class="img-block">
                            <img src="/images/geo.png" alt="Иконка"/>
                        </div>
                        <div class="adress">
                            <a href="#" class="link-to-adress">
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
                <ul class="list-add-links">
                    <li>
                        <a href="#">
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
            <div class="col-lg-3 col-md-6 col-xs-12 d-flex align-items-center  last-col-certs">
                <ul class="footer-certs-list d-flex">
                    <li>
                        <a href="#">
                            <img src="/images/cert1.jpg" alt="Сертификат"/>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/images/cert2.jpg" alt="Сертификат"/>
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