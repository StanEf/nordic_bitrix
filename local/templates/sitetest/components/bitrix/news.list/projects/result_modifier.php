<?
/*$arParams["ELEMENT_CODE"]
$arResult["ITEMS"][]["CODE"]*/
foreach($arResult["ITEMS"] as $item){
    if($item["PROPERTIES"]["CATEGORY"]["VALUE"] == $arParams["ELEMENT_CODE"]){
        $category_items[] = $item;
    }
}
$arResult["CATEGORY_ITEMS"] = $category_items;