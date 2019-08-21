<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 10.08.19
 * Time: 23:14
 */
?>
<section class="reserve-section  ">
    <div class="reserve-block">
        <div class="row">
            <div class="first col-xs-12">
                <div class="info-block">
                    <h3 class="title">
                        Reserve rooms
                        with discount!!
                    </h3>
                    <div class="bottom-block d-flex align-items-top">
                        <img src="/images/phone-reserve.png" alt="Иконка" />
                        <div>
                            <a href="tel:8-800-100-32-80" >
                                8-800-100-32-80
                            </a><br>
                            <span> Free call in Russia  </span>
                        </div>
                    </div>
                    <div class="copyright d-flex align-items-center">
                        <img src="/images/visa.png" alt="Иконка" />
                        <a target="_blank" href="https://ivisa.ru/">
                            Get a visa <br> invitation
                        </a>
                    </div>
                </div>
            </div>
            <div class="second col-xs-12">
                <h3 class="title">
                    Room reservation:
                </h3>
                <form id="reserve-form" method="post" action="/ajax/reserve">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <label>
                                    Arrival date: </label>
                                <div class=" position-relative">
                                    <input type="text" name="date_from" class="text-input date-input"> <span
                                        class="date-icon"> <img src="/images/date-icon.jpg"
                                                                alt="иконка"> </span>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 e">
                                <label>
                                    Date out:
                                </label>
                                <div class=" position-relative">
                                    <input type="text" name="date_to" class="text-input date-input"> <span
                                        class="date-icon"> <img src="/images/date-icon.jpg"
                                                                alt="иконка"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <label>
                                    Guests:
                                </label>
                                <div class=" position-relative w--115">

                                    <input type="number" name="count" class="text-input "  min="1">
                                    <span class="date-icon person ">
                                            <img src="/images/person-icon.png" alt="иконка">
                                        </span>

                                </div>
                            </div>
                            <div class="col-md-8 col-xs-12">
                                <button type="submit" form="reserve-form" class="main-link">
                                    Find a number
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
