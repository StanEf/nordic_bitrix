<?

/*$arFilter = array (
    "IBLOCK_ID" => 2
);

$rsElement = CIBlockElement::GetList("", $arFilter, false, false, array("*"));
while($obElement = $rsElement->GetNextElement()) {
    $arItem = $obElement->GetFields();
        echo __LINE__ . ' $arItem <pre style="text-align: left;">';
        print_r($arItem);
        echo '</pre>';
    $categories_names[$arItem["CODE"]] = $arItem["NAME"];
}
$arResult["CATEGORIES_NAMES"] = $categories_names;*/
/*echo __LINE__ . ' $arParams <pre style="text-align: left;">';
print_r($arParams);
echo '</pre>';

echo __LINE__ . ' $arResult <pre style="text-align: left;">';
print_r($arResult);
echo '</pre>';*/



foreach($arResult["ITEMS"] as $item){
    if($item["CODE"] == $arParams["ELEMENT_CODE"]){
        $current_element_id = $item["ID"];
        break;
    }
}
/*echo '$current_element_id ' . $current_element_id . '<br>';*/
 $db_groups = CIBlockElement::GetElementGroups($current_element_id, false);
while($arGroup = $db_groups->Fetch()){
    /*echo __LINE__ . ' $arGroup <pre style="text-align: left;">';
    print_r($arGroup);
    echo '</pre>';*/
    $group = $arGroup;
}

/*$arFilter = array("CODE" => $arParams["ELEMENT_CODE"]);*/
$arFilter = array("IBLOCK_ID" => $arParams["IBLOCK_ID"],
                    "SECTION_ID" => $group["ID"],
                );
//$arFilter = array();
/*echo __LINE__ . ' $arFilter <pre style="text-align: left;">';
print_r($arFilter);
echo '</pre>';*/
$dbResult = CIBlockSection::GetMixedList(Array("SORT"=>"ASC"), $arFilter, false, false);
while($one = $dbResult->Fetch()){
    $all[] = $one;
}

/*echo __LINE__ . ' $all <pre style="text-align: left;">';
print_r($all);
echo '</pre>';*/

//echo '$current_category_code ' . $current_category_code;
$counter = 0;
foreach($arResult["ITEMS"] as $item){
    if($item["CODE"] != $arParams["ELEMENT_CODE"] && $item["PROPERTIES"]["CATEGORY"]["VALUE"] == $current_category_code){

        if($counter == 3 ){
            break;
        }

        $same_projects[] = $item;
        $counter++;
    }
}
$arResult["SAME_PROJECTS"] = $same_projects;

