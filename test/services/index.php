
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<div class="your-class">
    <div>your content</div>
    <div>your content</div>
    <div>your content</div>
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?= SITE_TEMPLATE_PATH ?>/slick/slick.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.your-class').slick({
            setting-name: setting-value
    });
    });
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>