<?
if(!empty($arResult["PROPERTIES"]["VIDEO"]["VALUE"])) {

    $arFilter = array(
        "IBLOCK_LID" => SITE_ID,
        "IBLOCK_TYPE" => "site_information",
        "IBLOCK_ID" => 5,
        "ID" => $arResult["PROPERTIES"]["VIDEO"]["VALUE"],
    );
    
    $arSelect = array("ID", "IBLOCK_ID", "PROPERTY_VIDEO", "PROPERTY_PREVIEW");
    $rsElement = CIBlockElement::GetList( array(), $arFilter , false, array(), $arSelect);

    while($obElement = $rsElement->GetNextElement())
    {
        $res[] = $obElement->GetFields();
    }
/*    echo __LINE__ . ' $res232323 <pre style="text-align: left;">';
    print_r($res);
    echo '</pre>';*/
    $arResult["VIDEO"] = $res;
}
