<!--<div style="text-align: left;">-->
<?
/*echo $_SERVER['PHP_SELF'] . '<br>';
echo __LINE__ . ' $arResult <pre>';
print_r($arResult);
echo '</pre>';*/

?>
    <div class="footer-menu">
        <ul style="margin-bottom: 0px;">
            <!--<li class=""><a href="/">Главная</a></li>-->
            <?foreach($arResult as $item):?>
                <li class=""><a href="<?= $item["LINK"]?>"><?= $item["TEXT"]?></a></li>
            <?endforeach;?>
        </ul>
    </div>
    <div style="clear: both;"></div>


<!--</div>-->
