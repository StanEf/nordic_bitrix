<?
$obParser = new CTextParser;
if($arParams["NAME_TRUNCATE_LEN"] > 0) {
    foreach ($arResult["ITEMS"] as $key => $item) {
        $arResult["ITEMS"][$key]["NAME"] = $obParser->html_cut($item["NAME"], $arParams["NAME_TRUNCATE_LEN"]);
    }
}