<?
$count_in_left_col = ceil(count($arResult["CATEGORIES"]) / 2);
$counter = 1;
?>
<? for($i=1;$i<=2;$i++): ?>
    <div class="page-projects-list-col">
        <div class="page-projects-list-col-inner">
            <?foreach($arResult["CATEGORIES"] as $order => $cat_top):?>
                <?if(($i == 1 && $counter <= $count_in_left_col) || ($i == 2 && $counter > $count_in_left_col)):?>
                    <div class="page-projects-list-group">
                        <div class="page-projects-list-caption">
                            <?= $cat_top["NAME"] ?>
                        </div>
                        <div class="page-projects-list-items">
                            <?foreach($cat_top["CHILDREN"] as $cat_lower):?>
                                <div class="page-projects-list-item">
                                    <a href="/services/projects/<?= mb_strtolower($cat_lower["CODE"]) ?>/"><?=$cat_lower["NAME"]?></a>
                                </div>
                            <?endforeach;?>
                        </div>
                    </div>
                <?endif;?>
                <?$counter++;?>
            <?endforeach;?>
        </div>
    </div>
    <? $counter = 1;?>
<?endfor;?>

