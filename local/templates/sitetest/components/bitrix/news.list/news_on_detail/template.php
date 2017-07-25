<?/* echo 'news_on_detail';
echo __LINE__ . ' $arResult <pre style="text-align: left;">';
print_r($arResult);
echo '</pre>';

echo __LINE__ . ' $arParams <pre style="text-align: left;">';
print_r($arParams);
echo '</pre>';
echo __LINE__ . ' $component <pre style="text-align: left;">';
print_r($component);
echo '</pre>';
*/?>

<div class="page-news-detail-list">
    <?foreach($arResult["ITEMS"] as $key => $item):?>
    <div class="page-news-detail-list-item">
        <div class="page-news-detail-list-item-picture">
            <img src="<?= $item["PREVIEW_PICTURE"]["SRC"] ?>" alt="Логотип" />
        </div>
        <div class="page-news-detail-list-item-text">
            <div class="page-news-detail-list-item-text-date">
                <? $date = explode(" ", $item["TIMESTAMP_X"]); ?>
                <?= $date[0] ?>
            </div>
            <div class="page-news-detail-list-item-text-title">
                <?= $item["NAME"] ?>
            </div>
            <div class="page-news-detail-list-item-text-text">
                <?= $item["PREVIEW_TEXT"] ?>
                &nbsp;&nbsp;<a href="<?= $item["DETAIL_PAGE_URL"] ?>"><img src="<?= SITE_TEMPLATE_PATH ?>/img/Rectangle-double.png"/></a>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <?endforeach;?>
</div>
