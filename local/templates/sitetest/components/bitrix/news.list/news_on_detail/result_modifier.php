<?
$counter = 0;
foreach($arResult["ITEMS"] as $key => $item) {
    if($counter < 3 && $item["CODE"] != $arParams["ELEMENT_CODE_MAIN"]){
        $counter++;
    }else{
        unset($arResult["ITEMS"][$key]);
    }

}