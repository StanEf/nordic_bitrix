<?


$arFilter = Array('IBLOCK_ID'=>3, "CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"]);
$db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);

while($ar_result = $db_list->GetNext())
{
    /*echo __LINE__ . ' $ar_result <pre style="text-align: left;">';
    print_r($ar_result);
    echo '</pre>';*/
   // echo $ar_result['ID'].' '.$ar_result['NAME'].': '.$ar_result['ELEMENT_CNT'].'<br>';
    $arResult["CATEGORY_NAME"] = $ar_result["NAME"];
}




