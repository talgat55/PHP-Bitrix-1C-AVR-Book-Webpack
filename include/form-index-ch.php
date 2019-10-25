<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 14.08.19
 * Time: 21:38
 */
?>
<form id="feedback-form" method="post" action="/ajax/feedback">
    <div class="form-group d-flex w-100">
        <div class="col-lg-4 col-md-6 col-xs-12">
            <input type="text" name="name" placeholder="你的名字" class="text-input">
            <input type="text" name="phone" placeholder="你的手机 *"
                   class="text-input phone-input" required>


        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
                                    <textarea rows="4" name="comment" placeholder="输入您的消息"
                                              class="textarea-input"></textarea>
            <input type="hidden" name="event" value="FEEDBACK_FORM"/>
            <input type="hidden" name="siteid" value="s1"/>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
            <input type="email" name="email" placeholder="您的 email *" class="text-input" required>
            <button type="submit" form="feedback-form" class="main-link">
                发送请求
            </button>
        </div>
    </div>

</form>
