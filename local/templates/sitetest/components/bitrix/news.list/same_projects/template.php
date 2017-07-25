<?
/*echo 'template project';
echo __LINE__ . ' $arResult["ITEM"] <pre style="text-align: left;">';
print_r($arResult["ITEM"]);
echo '</pre>';*/
/*echo 'template project';
echo __LINE__ . ' $arResult["SAME_PROJECTS"] <pre style="text-align: left;">';
print_r($arResult["SAME_PROJECTS"]);
echo '</pre>';*/


?>

<div class="page-project-detail-list <!--align-centered-->">
    <div class="page-project-same-projects">
        Похожие проэкты
    </div>
    <div class="page-project-detail-list-inner page-project-detail-list-inner-mod">
<?foreach($arResult["SAME_PROJECTS"] as $item):?>
        <div class="page-project-detail-item page-project-detail-item-mod">
            <div class="page-project-detail-item-text">
                <div class="page-project-detail-item-text-inner">
                    <div class="page-project-detail-item-text-small">
                        <?= $item["PROPERTIES"]["NAME_1"]["VALUE"]?>
                    </div>
                    <div class="page-project-detail-item-text-big">
                        <?= $item["PROPERTIES"]["NAME_2"]["VALUE"]?>
                    </div>
                </div>
            </div>
            <div class="page-project-detail-item__link">
                <a href="<?= $item["DETAIL_PAGE_URL"]?>"></a>
            </div>
            <div class="page-project-detail-item__picture page-project-detail-item__picture-mod">
                <img src="<?= CFile::GetPath($item["PROPERTIES"]["PICTURE"]["VALUE"]); ?>" alt="" />
            </div>
        </div>
<?endforeach;?>
    </div>
</div>
