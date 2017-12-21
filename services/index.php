<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<div class="page-services">
    <div class="page-services-inner">
        <div class="page-services-text">
            <div class="page-services-text__caption">
                УСЛУГИ
            </div>
            <div class="page-services-text__text">
                
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="services-list">
        <?$ElementID = $APPLICATION->IncludeComponent(
            "bitrix:nordic.services",
            "def",
            Array(),
            false
        );?>
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>