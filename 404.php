<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Страница не найдена");

?>
    <div class="container">
        <div class="row">
            <div class="page-wrap w-100">
                <div class="col-md-12 col-xs-12">
                    <h1 class="main-title">
                        404 Страница не найдена
                    </h1>

                </div>
            </div>
        </div>
    </div>
<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>