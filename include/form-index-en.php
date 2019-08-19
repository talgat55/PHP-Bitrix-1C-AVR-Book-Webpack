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
            <input type="text" name="name" placeholder="Name" class="text-input">
            <input type="text" name="phone" placeholder="Phone *"
                   class="text-input phone-input" required>


        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
                                    <textarea rows="4" name="comment" placeholder="Comment"
                                              class="textarea-input"></textarea>
            <input type="hidden" name="event" value="FEEDBACK_EVENT"/>
            <input type="hidden" name="siteid" value="s2"/>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
            <input type="email" name="email" placeholder="Email *" class="text-input" required>
            <button type="submit" form="feedback-form" class="main-link">
                Send
            </button>
        </div>
    </div>

</form>
