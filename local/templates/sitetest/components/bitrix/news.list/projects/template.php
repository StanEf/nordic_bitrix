<?

/*echo 'template projects';
echo __LINE__ . ' $arParams <pre style="text-align: left;">';
print_r($arParams);
echo '</pre>';
echo __LINE__ . ' $arResult <pre style="text-align: left;">';
print_r($arResult);
echo '</pre>';
CFile::GetPath($item['PROPERTIES']['PICTURE']['VALUE']);*/
?>
<style>
    .page-projects-detail-item__picture{
        position: static;
        overflow: hidden;
    }
    .page-projects-detail-item__picture img {

        position: static;
        //width: auto;
    }
    .page-projects-detail-item__picture img .picture_height_small{
        width: auto;
    }
</style>

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
            <div class="page-projects-detail-item__picture"

                >
               
                <!--<img src="<?/*=CFile::GetPath($item['PROPERTIES']['PICTURE']['VALUE'])*/?>" alt="" />-->
                <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt=""

                    <?
                    $pictureArr =  CFile::GetFileArray($item['PREVIEW_PICTURE']['ID']);
                    /*echo '<br/> $pictureArr '. __LINE__.'* ' .  __FILE__ . ' <pre>';
                    print_r($pictureArr);
                    echo '</pre>';*/
                    if($pictureArr['WIDTH'] < 250){
                        //echo ' lala';
                        /*$val =
                        echo 'style="margin-left=-'.$val.'px"';*/
                        /*echo '<br/> $pictureArr '. __LINE__.'* ' .  __FILE__ . ' <pre>';
                                            print_r($pictureArr);
                                            echo '</pre>';*/
                        $val = (((1 - 250/$pictureArr['WIDTH'])*$pictureArr['HEIGHT']))/2;
                        echo ' style="margin-top:'.$val.'px"';
                    }elseif($pictureArr['HEIGHT'] < 130){
                        /*echo '<br/> $pictureArr '. __LINE__.'* ' .  __FILE__ . ' <pre>';
                                            print_r($pictureArr);
                                            echo '</pre>';
                        $val = -(((130/$pictureArr['HEIGHT'])*$pictureArr['WIDTH'])-$pictureArr['WIDTH'])/2;
                        echo ' style="margin-left:'.$val.'px"';*/
                    }
                    ?>
                />
            </div>
        </div>
        <?endforeach;?>
    </div>
</div>
