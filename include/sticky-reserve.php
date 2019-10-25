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
        <section class="reserve-section  ">
            <div class="reserve-block">
                <div class="row">
                    <div class="first col-xs-12">
                        <div class="info-block">
                            <h3 class="title">
                                Забронируйте здесь и сейчас!
                            </h3>

                            <div class="bottom-block d-flex align-items-top">
                                <img src="/images/phone-reserve.png" alt="Иконка" />
                                <div>
                                    <a href="tel:8-800-100-32-80" >
                                        8-800-100-32-80
                                    </a>
                                    <span> Звонок по России бесплатный  </span>
                                </div>

                            </div>

                            <div class="copyright d-flex align-items-center">
                                <img src="/images/visa.png" alt="Иконка" />
                                <a target="_blank" href="/visasupport">
                                    Получить визовое <br> приглашение
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="second col-xs-12">
                        <h3 class="title">
                            Бронирование номера: </h3>
                        <form id="reserve-form" class="sticky-reserve-form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <label>
                                            Дата заезда: </label>
                                        <div class=" position-relative">
                                            <input type="text" name="date_from" class="text-input date-input sf-datepicker" id="sf-date-from1"> <span
                                                    class="date-icon"> <img src="/images/date-icon.jpg"
                                                                            alt="иконка"> </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12 e">
                                        <label>
                                            Дата выезда:
                                        </label>
                                        <div class=" position-relative">
                                            <input type="text" name="date_to" class="text-input date-input sf-datepicker" id="sf-date-to1"> <span
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
                                            Гости:
                                        </label>
                                        <div class=" position-relative w--115">

                                            <input type="number" name="count" class="text-input " min="1" id="sf-adults1">
                                            <span class="date-icon person ">
                                            <img src="/images/person-icon.png" alt="иконка">
                                        </span>

                                        </div>
                                    </div>

                                    <div class="col-md-8 col-xs-12">
                                        <button class="main-link" id="button-form1">
                                            Найти номер
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <script>
                            var today = new Date();
                            var tomorrow = new Date;
                            tomorrow.setDate(tomorrow.getDate() + 1);
                            var selectedDate = today;
                            var selectedDate1 = tomorrow;
                            var btnSend = document.querySelector('.sticky-reserve-form');

                            function getDay(date) {
                                var dd = date.getDate();
                                if (dd < 10) dd = '0' + dd;
                                return dd;
                            }

                            function getMonth(date) {
                                var mm = date.getMonth() + 1;
                                if (mm < 10) mm = '0' + mm;
                                return mm;
                            }

                            function formatDate(date) {
                                return date.getFullYear() + '-' +  getMonth(date) + '-' +  getDay(date);
                            }

                            var datePicker = $('#sf-date-from1');

                            datePicker.datepicker({
                                language: 'ru',
                                minDate: today,
                                startDate: today,
                                autoClose: true,
                                onSelect: function (formattedDate, date) {
                                    selectedDate = date;
                                }
                            });

                            //указываем значение текущей даты
                            datePicker.data('datepicker').selectDate(today);

                            var datePicker1 = $('#sf-date-to1');

                            datePicker1.datepicker({
                                language: 'ru',
                                minDate: tomorrow,
                                startDate: tomorrow,
                                autoClose: true,
                                onSelect: function (formattedDate, date) {
                                    selectedDate1 = date;
                                }
                            });

                            //указываем значение текущей даты
                            datePicker1.data('datepicker').selectDate(tomorrow);

                            btnSend.addEventListener('submit', function (e) {
                                e.preventDefault();
                                var formDateFrom = new Date(selectedDate);
                                formDateFrom.setHours(0);
                                formDateFrom.setMinutes(0);
                                var formDateTo = new Date(selectedDate1);
                                formDateTo.setHours(0);
                                formDateTo.setMinutes(0);
                                var formatDateFrom = formatDate(formDateFrom);
                                var formatDateTo = formatDate(formDateTo);
                                var nights = (formDateTo - formDateFrom) / (1000 * 60 * 60 * 24);
                                if (nights < 1) {
                                    nights = 1;
                                } else {
                                    nights.toFixed();
                                }
                                var selectedAdults = document.querySelector('#sf-adults1');
                                var selectedAdultsVal = selectedAdults.value;
                                if (selectedAdultsVal === "") {
                                    selectedAdultsVal = 1;
                                }
                                var pathName = '/booking/?date=' + formatDateFrom + '&nights=' + nights + '&adults=' + selectedAdultsVal;
                                window.location.href = pathName;
                                return false;
                            });
                        </script>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>

