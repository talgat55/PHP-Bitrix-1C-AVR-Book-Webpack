<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 11.08.19
 * Time: 18:31
 */
?>
<div class="modal-cutom d-flex align-items-center  justify-content-center">
    <div class="modal-content position-relative">
        <a href="#" class="close-icon">
            <i class="fas fa-times"></i>
        </a>
        <form id="feedback-form" method="post" action="ajax/send.php">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <label>
                            Как вас зовут?
                        </label>
                        <input type="text" name="name" placeholder="Ваше имя"
                               class="text-input" required>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <label>
                            Телефон
                        </label>
                        <input type="text" name="phone" placeholder="Телефон"
                               class="text-input phone-input" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row d-flex align-items-center">
                    <div class="col-md-5 col-xs-12">
                        <button type="submit" form="feedback-form" class="main-link">
                            Отправить
                        </button>
                        <input type="hidden" name="event" value="FEEDBACK_EVENT"/>
                    </div>
                    <div class="policy-block col-md-7 col-xs-12">
                        Нажимая кнопку «Отправить» вы даете свое согласие на <a href="/policy">
                            обработку персональных данных.</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="layer-overflow"></div>
