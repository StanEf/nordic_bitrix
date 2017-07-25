<?
/*echo __LINE__ . ' $arResult <pre style="text-align: left;">';
print_r($arResult);
echo '</pre>';*/
/*$categories = array();
foreach($arResult["ITEMS"] as $key => $item){
    $order = $item["PROPERTIES"]["ORDER"]["VALUE"];
    if($item["PROPERTIES"]["LEVEL"]["VALUE"] == 0) {
        $categories[$order]["ID"] = $item["ID"];
        $categories[$order]["NAME"] = $item["NAME"];
        $categories[$order]["CODE"] = $item["CODE"];
        $parent_order[$item["ID"]] = $order;
    }
}
foreach($arResult["ITEMS"] as $key => $item){
    $order = $item["PROPERTIES"]["ORDER"]["VALUE"];
    if($item["PROPERTIES"]["LEVEL"]["VALUE"] != 0) {
        $item_tmp["NAME"] = $item["NAME"];
        $item_tmp["CODE"] = $item["CODE"];
        $item_tmp["ID"] = $item["ID"];
        $parent_id = $item["PROPERTIES"]["PARENT"]["VALUE"];
        $categories[$parent_order[$parent_id]]["CHILDREN"][$order] = $item_tmp;
    }
}
ksort($categories);
foreach($categories as &$top_cat){
    ksort($top_cat["CHILDREN"]);
}
echo __LINE__ . ' $categories <pre style="text-align: left;">';
print_r($categories);
echo '</pre>';
$arResult["CATEGORIES"] = $categories;*/

$arFilter = Array('IBLOCK_ID'=>3, 'GLOBAL_ACTIVE'=>'Y');
$db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);

while($ar_result = $db_list->GetNext())
{
    $sections[] = $ar_result;
}
/*echo __LINE__ . ' $sections <pre style="text-align: left;">';
print_r($sections);
echo '</pre>';*/
unset($item);
foreach($sections as $section){
    if($section["IBLOCK_SECTION_ID"] == 0){

        $item["NAME"] = $section["NAME"];
        $item["CODE"] = $section["CODE"];
        $item["ID"] = $section["ID"];
        $item["SORT"] = $section["SORT"];
        $sort_sections[$section["ID"]] = $item;
    }
    unset($item);
}

foreach($sections as $section){
    if($section["IBLOCK_SECTION_ID"]){
        /*echo $section["NAME"];*/
        $item["NAME"] = $section["NAME"];
        $item["CODE"] = $section["CODE"];
        $item["ID"] = $section["ID"];
        $item["SORT"] = $section["SORT"];
        $sort_sections[$section["IBLOCK_SECTION_ID"]]["CHILDREN"][$section["SORT"]] = $item;
    }
    unset($item);
}

foreach($sort_sections as $id => $section){
    $sort_sections_top[$section["SORT"]] = $section;
    //unset($sort_sections[$id]);
}

ksort($sort_sections_top);
foreach($sort_sections_top as $sort => $val){
    ksort($sort_sections_top[$sort]["CHILDREN"]);
}
/*echo __LINE__ . ' $sort_sections <pre style="text-align: left;">';
print_r($sort_sections_top);
echo '</pre>';*/
$arResult["CATEGORIES"] = $sort_sections;