<?

echo 'template projects';
echo __LINE__ . ' $arParams <pre style="text-align: left;">';
print_r($arParams);
echo '</pre>';
echo __LINE__ . ' $arResult <pre style="text-align: left;">';
print_r($arResult);
echo '</pre>';
CFile::GetPath($item['PROPERTIES']['PICTURE']['VALUE']);
?>


<div class="page-projects-detail-list">
    <div class="page-projects-detail-list-inner">
        <?foreach($arResult["ITEMS"] as $item):?>
        <div class="page-projects-detail-item">
            <div class="page-projects-detail-item-text">
                <div class="page-projects-detail-item-text-inner">
                    <div class="page-projects-detail-item-text-small">
                        <?= $item["PROPERTIES"]["NAME_1"]["VALUE"]?>
                    </div>
                    <div class="page-projects-detail-item-text-big">
                        <?= $item["PROPERTIES"]["NAME_2"]["VALUE"]?>
                    </div>
                </div>
                <div class="page-projects-detail-item__link">
                    <a href="/services/project/<?= $item["CODE"] ?>/"></a>
                </div>
            </div>
            <div class="page-projects-detail-item__picture">
                <!--<img src="<?/*=CFile::GetPath($item['PROPERTIES']['PICTURE']['VALUE'])*/?>" alt="" />-->
                <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="" />
            </div>
        </div>
        <?endforeach;?>
    </div>
</div>
