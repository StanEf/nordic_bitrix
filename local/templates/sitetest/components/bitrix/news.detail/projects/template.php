
<div class="page-news-detail-one">
    <div class="page-news-detail-one-line"></div>
    <div class="page-news-detail-one-date">
        <? $date = explode(" ", $item["TIMESTAMP_X"]); ?>
        <?= $date[0] ?>
    </div>
    <div class="page-news-detail-one-title">
        <?= $arResult["NAME"] ?>
    </div>
    <div class="page-news-detail-one-picture">
        <img src="<?=CFile::GetPath($arResult['PROPERTIES']['PHOTOS']['VALUE'][0])?>" alt="Логотип" />
    </div>
    <div class="page-news-detail-one-text">
        <?= $arResult["DETAIL_TEXT"] ?>
    </div>
    <div class="page-news-detail-one-line-bottom"></div>
</div>















