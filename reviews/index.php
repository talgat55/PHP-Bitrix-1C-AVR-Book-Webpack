<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");
?>

<div class="container">
	<h1 class="main-title">
		Отзывы
	</h1>
	<!-- start reviews widget -->
	<div id="tl-reviews-widget"></div>
	<script type="text/javascript">
        (function(w){
            var q=[
                ['setContext', 'TL-INT-avrora-lightxdesign', 'ru'],
                ['embed', 'reviews-widget', {container: 'tl-reviews-widget'}]
            ];
            var t=w.travelline=(w.travelline||{}),ti=t.integration=(t.integration||{});ti.__cq=ti.__cq?ti.__cq.concat(q):q;
            if (!ti.__loader){ti.__loader=true;var d=w.document,p=d.location.protocol,s=d.createElement('script');s.type='text/javascript';s.async=true;s.src=(p=='https:'?p:'http:')+'//ibe.tlintegration.com/integration/loader.js'; (d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(s);}
        })(window);
	</script>
	<!-- end reviews widget -->
</div>

<?

//  include  modal success send
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/modal-review.php",
    Array(),
    Array("MODE" => "html")
);

//  include  modal success send
$APPLICATION->IncludeFile(
    SITE_DIR . "/include/modal-success.php",
    Array(),
    Array("MODE" => "html")
);
?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>