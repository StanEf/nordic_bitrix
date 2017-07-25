<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/*echo "project DETAIL212";

echo __LINE__ . ' $arParams <pre style="text-align: left;">';
print_r($arParams);
echo '</pre>';
echo __LINE__ . ' $arResult <pre style="text-align: left;">';
print_r($arResult);
echo '</pre>';*/

?>


<? $APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "project",
    Array(

        "IBLOCK_TYPE" => "site_information",
        "IBLOCK_ID" => "3",
        "ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
        "PROPERTY_CODE" => array(1),
    ),
    ''
);?>



<?
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "same_projects",
    Array(
        "IBLOCK_TYPE" => "site_information",
        "IBLOCK_ID" => 3,
        "ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
        "PROPERTY_CODE" => array(1),
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
       /*"PARENT_SECTION" => 1,*/
       /* "NEWS_COUNT" => 3,
        "SORT_BY1" => "TIMESTAMP_X",
        "SORT_ORDER1" => "DESC",*/
    ),
    false
);?>
