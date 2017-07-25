<? /*echo 'news_on_detail';
echo __LINE__ . ' $arResult <pre style="text-align: left;">';
print_r($arResult);
echo '</pre>';

echo __LINE__ . ' $arParams <pre style="text-align: left;">';
print_r($arParams);
echo '</pre>';*/

?>
<style>
    /*.current_item {
        //position: relative;
        display: block;
        position: absolute;
        -webkit-transform: scale(1,1);
        top: 0;
        left: 25%;
        z-index: 100;
    }
    .current_item a {
        display: none;
        background-image: url(/local/templates/sitetest/img/scale.png);
        width: 70px;
        height: 70px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        margin: 0 auto;
        position: absolute;
        left: calc(50% - 35px);
        top: calc(50% - 35px);
    }*/
</style>
<div class="page-certificates-pictures">
<? $counter = 1;?>
<?foreach($arResult["ITEMS"] as $key => $item):?>
    <div class="current_item page-certificates-picture
    <?if($counter == 1):?>
        text-align-left
    <?elseif($counter == 2):?>
        text-align-center
    <?elseif($counter == 3):?>
        text-align-right
        <? $counter = 0;?>
    <?endif;?>
    ">
        <!--<img src="<?/*= CFile::GetPath($item["PROPERTIES"]["PHOTO"]["VALUE"]) */?>" alt="Сертификат" />
        <a href="<?/*= CFile::GetPath($item["PROPERTIES"]["PHOTO"]["VALUE"]) */?>" class="fancyimage" rel="reviews-gal">-->

            <a href="<?= CFile::GetPath($item["PREVIEW_PICTURE"]["ID"]) ?>" rel="group">
                <img src="<?= CFile::GetPath($item["PREVIEW_PICTURE"]["ID"]) ?>" alt=""/>
            </a>


    </div>
    <? $counter++;?>
<?endforeach;?>
</div>

<script type="text/javascript">
    jQuery(document).ready(function() {

        jQuery(".page-certificates-picture a").fancybox(
            {
                "padding" : 20, // отступ контента от краев окна
                "imageScale" : false, // Принимает значение true - контент(изображения) масштабируется по размеру окна, или false - окно вытягивается по размеру контента. По умолчанию - TRUE
                "zoomOpacity" : false,	// изменение прозрачности контента во время анимации (по умолчанию false)
                "zoomSpeedIn" : 1000,	// скорость анимации в мс при увеличении фото (по умолчанию 0)
                "zoomSpeedOut" : 1000,	// скорость анимации в мс при уменьшении фото (по умолчанию 0)
                "zoomSpeedChange" : 1000, // скорость анимации в мс при смене фото (по умолчанию 0)
                "frameWidth" : 700,	 // ширина окна, px (425px - по умолчанию)
                "frameHeight" : 600, // высота окна, px(355px - по умолчанию)
                "overlayShow" : true, // если true затеняят страницу под всплывающим окном. (по умолчанию true). Цвет задается в jquery.fancybox.css - div#fancy_overlay
                "overlayOpacity" : 0.8,	 // Прозрачность затенения 	(0.3 по умолчанию)
                "hideOnContentClick" :false, // Если TRUE  закрывает окно по клику по любой его точке (кроме элементов навигации). Поумолчанию TRUE
                "centerOnScroll" : false // Если TRUE окно центрируется на экране, когда пользователь прокручивает страницу

            }

        );

    });

    $(function() {

    });
</script>