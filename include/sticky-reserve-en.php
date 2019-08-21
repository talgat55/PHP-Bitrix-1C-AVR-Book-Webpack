<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 21.08.19
 * Time: 9:33
 */
?>
<div id="sticky-reserve-block">
    <div class="button">
        <i class="fas fa-bed"></i>
    </div>
    <div class="content">
        <?php
        $APPLICATION->IncludeFile(
            SITE_DIR . "../include/reserve-block-en.php",
            Array(),
            Array("MODE" => "html")
        );
        ?>
    </div>
</div>

