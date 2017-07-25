<!--<div style="text-align: left;">-->
<?
/*echo $_SERVER['PHP_SELF'] . '<br>';
echo __LINE__ . ' $arResult <pre>';
print_r($arResult);
echo '</pre>';*/

?>
<div class="menu">
    <div class="menu-mobile-line">
        <div class="menu-mobile__button">
            <i class="fa fa-bars fa-3x"></i>
        </div>
    </div>
    <div class="menu-list">
        <ul style="margin-bottom: 0px;">
            <?foreach($arResult as $item):?>
                <li class="<?if(strpos($_SERVER['PHP_SELF'], $item["LINK"]) || $_SERVER['PHP_SELF'] == $item["LINK"] || $item['SELECTED'] == 1):?>menu-current<?endif;?>">
                    <?= $item["TEXT"]?>
                    <a href="<?= $item["LINK"]?>"></a>
                </li>
            <?endforeach;?>
        </ul>
    </div>
</div>
<div style="clear: both;"></div>
<div class="menu-bottom-line"></div>

<!--</div>-->
