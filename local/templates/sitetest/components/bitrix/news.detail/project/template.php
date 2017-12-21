<?
/*
echo "project DETAIL";

echo __LINE__ . ' $arParams <pre style="text-align: left;">';
print_r($arParams);
echo '</pre>';
echo __LINE__ . ' $arResult <pre style="text-align: left;">';
print_r($arResult);
echo '</pre>';*/



?>
<div class="page-project-top-nav">
    <div class="page-project-top-nav-img">
        <img src="<?= SITE_TEMPLATE_PATH ?>/img/chevron_left.png" alt="Логотип" />
    </div>
    <div class="page-project-top-nav-text">
        все проeкты
    </div>
    <div class="page-project-top-nav__link">
        <a href="/services/projects/<?=$arResult["ITEM"]["PROPERTIES"]["CATEGORY"]["VALUE"] ?>/"></a>
    </div>
</div>
<div class="page-project-title">
    <div class="page-project-title-small">
        <?= $arResult["PROPERTIES"]["NAME_1"]["VALUE"] ?>
    </div>
    <div class="page-project-title-big">
        <?= $arResult["PROPERTIES"]["NAME_2"]["VALUE"] ?>
    </div>
</div>
<div style="clear: both;"></div>



<div class="page-project-slider">
    <div class="slider-for-outer">
        <div class="prev-mobile"><span><i class="fa fa-chevron-left fa-2x"></i></span></div>
        <div class="slider-for-outer-inner">
            <div class="slider slider-for">
                <?if(!empty($arResult["PROPERTIES"]["PHOTO"]["VALUE"])):?>
                    <?foreach($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $photo_id):?>
                        <div>
                            <img src="<?= CFile::GetPath($photo_id); ?>" alt="image" class="image"/>
                        </div>
                    <?endforeach;?>
                <?endif;?>
                <?if(!empty($arResult["PROPERTIES"]["VIDEO"]["VALUE"])):?>
                    <?foreach($arResult["VIDEO"] as $video):?>
                        <div>
                            <video class="<!--yt_video video-first-->"  controls loop preload="auto" width="784px" height="440px" muted autoplay>
                                <source src="<?= CFile::GetPath($video["PROPERTY_VIDEO_VALUE"]); ?>" type='video/mp4'>
                            </video>
                        </div>
                    <?endforeach;?>
                <?endif;?>
            </div>
        </div>
        <div class="next-mobile"><span><i class="fa fa-chevron-right fa-2x"></i></span></div>
    </div>
    <div class="slider-nav-outer">
        <div class="prev-slick"><span><i class="fa fa-chevron-up fa-2x"></i></span></div>
        <div class="slider-nav-outer-inner">
            <div class="slider slider-nav">
                <?if(!empty($arResult["PROPERTIES"]["PHOTO"]["VALUE"])):?>
                    <?foreach($arResult["PROPERTIES"]["PHOTO"]["VALUE"] as $photo_id):?>
                        <div><img src="<?= CFile::GetPath($photo_id); ?>" alt="" class="image" /></div>
                    <?endforeach;?>
                <?endif;?>
                <?if(!empty($arResult["PROPERTIES"]["VIDEO"]["VALUE"])):?>
                    <?foreach($arResult["VIDEO"] as $video):?>
                        <div><img src="<?= SITE_TEMPLATE_PATH ?>/img/play-button2.jpg" alt="" class="image" /></div>
                    <?endforeach;?>
                <?endif;?>
            </div>
        </div>
        <div class="next-slick"><span><i class="fa fa-chevron-down fa-2x"></i></span></div>
    </div>
</div>

<div class="page-project-underline"></div>
<div class="page-project-description">
    <? if(!empty($arResult["PROPERTIES"]["PURPOSE"]["VALUE"])):?>
    <div class="page-project-appointment">
        <div class="page-project-appointment-title project-title">
            НАЗНАЧЕНИЕ
        </div>
        <div class="page-project-appointment-text project-text">
            <?= $arResult["PROPERTIES"]["PURPOSE"]["VALUE"] ?>
        </div>
    </div>
    <?endif;?>
	<?if(!empty($arResult["PROPERTIES"]["FEATURES"]["VALUE"])):?>
    <div class="page-project-features">
        <div class="page-project-features-title project-title">
            ФУНКЦИОНАЛЬНЫЕ ОСОБЕННОСТИ
        </div>
        <div class="page-project-features-text project-text">
            <ul>
				<?foreach($arResult["PROPERTIES"]["FEATURES"]["VALUE"] as $feature):?>
					<li><?= $feature ?></li>
				<?endforeach;?>
            </ul>
        </div>
    </div>
	<?endif;?>
    <div class="page-project-characteristics">
        <div class="page-project-characteristics-title project-title">
            ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ
        </div>
        <div class="page-project-characteristics-text project-text">
            <div class="page-project-characteristics-text-table">
                <?if(isset($arResult["PROPERTIES"]["CHARACTERISTICS"]["VALUE"])):?>
                    <?foreach($arResult["PROPERTIES"]["CHARACTERISTICS"]["VALUE"] as $one):?>
                        <? $oneArr = explode(":", $one); ?>
                <div class="page-project-characteristics-row">
                    <div class="page-project-characteristics-cell-name">
                        <?= trim($oneArr[0]) ?>
                    </div>
                    <div class="page-project-characteristics-cell-value">
                        <?= trim($oneArr[1]) ?>
                    </div>
                </div>
                    <?endforeach;?>
                <?endif;?>

                <div class="page-project-characteristics-row last">
                    <div class="page-project-characteristics-cell-name"></div>
                    <div class="page-project-characteristics-cell-value"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-project-underline"></div>

<script src="<?= SITE_TEMPLATE_PATH ?>/slider/js/gallery.js"></script>