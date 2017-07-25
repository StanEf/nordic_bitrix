<?
/*echo 'template news';*/
/*echo __LINE__ . ' $arResult <pre style="text-align: left;">';
print_r($arResult);
echo '</pre>';*/

/*echo __LINE__ . ' $arParams <pre style="text-align: left;">';
print_r($arParams);
echo '</pre>';*/
?>
<div class="page-news">
        <div class="page-news-inner">
            <div class="page-news-title">
                НОВОСТИ
            </div>
            <div style="clear: both;"></div>
            <div class="page-news-list">
            <? foreach($arResult["ITEMS"] as $item):?>
            <div class="page-news-item">
                <div class="page-news-item-picture">
                    <img src="<?= $item["PREVIEW_PICTURE"]["SRC"] ?>" />
                </div>
                <div class="page-news-item-text">
                    <div class="page-news-item-text-date">
                        <? $date = explode(" ", $item["TIMESTAMP_X"]); ?>
                        <?= $date[0] ?>
                    </div>
                    <div class="page-news-item-text-title">
                        <?= $item["NAME"] ?>
                    </div>
                    <div class="page-news-item-text-text">
                        <?= $item["PREVIEW_TEXT"] ?> &nbsp;&nbsp;

                            <a href="<?=$item['DETAIL_PAGE_URL']?>" class="page-news-item__link">

                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/Rectangle-double.png"/>

                            </a>

                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>
            <? endforeach;?>
            </div>
        </div>
    </div>