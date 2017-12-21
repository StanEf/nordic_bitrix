<?/*
echo 'template news_on_main';
*/?><!--
--><? 
/*
echo 'news_on_detail';
echo __LINE__ . ' $arResult <pre style="text-align: left;">';
print_r($arResult);
echo '</pre>';
/*
echo __LINE__ . ' $arParams <pre style="text-align: left;">';
print_r($arParams);
echo '</pre>';
echo __LINE__ . ' $component <pre style="text-align: left;">';
print_r($component);
echo '</pre>';*/
?>
<div class="last-news">
    <div class="last-news__caption">
        Последние новости
    </div>
    <div style="clear: both;"></div>
    <div class="last-news-list">
        <div class="last-news-list-inner">
<?foreach($arResult["ITEMS"] as $key => $item):?>
            <div class="last-news-list-centered <?if($key+1 == $arParams["NEWS_COUNT"]):?> last-news-list-centered-last <?endif;?>">
                <div class="last-news-list-item">
                    <div class="last-news-list-item-inner">
                        <div class="last-news-list-item__background-opacity"></div>
                        <div class="last-news-list-item__picture">
                            <img src="<?= $item["PREVIEW_PICTURE"]["SRC"] ?>" alt="Логотип" />
                        </div>
                        <div class="last-news-list-item__title">
                            <?= $item["NAME"] ?>
                        </div>
                        <div class="last-news-list-item__button">
                            Подробнее
                            <div class="last-news-list-item__link">
                                <a href="<?= $item["DETAIL_PAGE_URL"] ?>"></a>
                            </div>
                        </div>
                        <div class="last-news-list-item__cover-bg"></div>
                    </div>
                </div>
            </div>
<?endforeach;?>
            <div style="clear: both;"></div>
        </div>
    </div>
</div>