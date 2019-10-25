<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("簽證支持");
$APPLICATION->SetPageProperty("title","簽證支持");
$APPLICATION->SetPageProperty("MainClass", "visasupport");
?>


    <section class="first-block">
        <div class="container">
            <div class="row">
                <h1 class="main-title">
                    <? $APPLICATION->ShowTitle(); ?>
                </h1>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <!-- start TL Booking form script -->
                    <div id="tl-visa-form">&nbsp;</div>
                    <script type="text/javascript">
                        (function(w){
                            var q=[
                                ['setContext', 'TL-INT-avrora-lightxdesign', 'zh'],
                                ['embed', 'visa-support-form', {container: 'tl-visa-form'}]
                            ];
                            var t=w.travelline=(w.travelline||{}),ti=t.integration=(t.integration||{});ti.__cq=ti.__cq?ti.__cq.concat(q):q;
                            if (!ti.__loader){ti.__loader=true;var d=w.document,p=d.location.protocol,s=d.createElement('script');s.type='text/javascript';s.async=true;s.src=(p=='https:'?p:'http:')+'//ibe.tlintegration.com/integration/loader.js';(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(s);}
                        })(window);
                    </script>
                    <!-- end TL Booking form script -->
                </div>
            </div>
        </div>


    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>