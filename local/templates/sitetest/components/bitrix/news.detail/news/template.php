<?
/*echo "news DETAIL";

echo __LINE__ . ' $arParams <pre style="text-align: left;">';
print_r($arParams);
echo '</pre>';
echo __LINE__ . ' $arResult <pre style="text-align: left;">';
print_r($arResult);
echo '</pre>';*/
?>
<div class="page-news-detail-one">
    <div class="page-news-detail-one-line"></div>
    <div class="page-news-detail-one-date">
        <? $date = explode(" ", $arResult["TIMESTAMP_X"]); ?>
        <?= $date[0] ?>
    </div>
    <div class="page-news-detail-one-title">
        <?= $arResult["NAME"] ?>
    </div>
    <div class="page-news-detail-one-picture">
        <img src="<?=CFile::GetPath($arResult['DETAIL_PICTURE']['ID'])?>" alt="Логотип" />
    </div>
    <div class="page-news-detail-one-text">
        <div class="page-news-detail-one-text-inner">
            <?= $arResult["DETAIL_TEXT"] ?>
        </div>
        <div class="page-news-detail-one-line-bottom"></div>
    </div>

</div>















