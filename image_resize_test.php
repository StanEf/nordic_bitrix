<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>
<?

function mbStringToArray($string, $encoding = 'UTF-8')
{
    $strlen = mb_strlen($string);
    while ($strlen) {
        $array[] = mb_substr($string, 0, 1, $encoding);
        $string = mb_substr($string, 1, $strlen, $encoding);
        $strlen = mb_strlen($string, $encoding);
    }
    return ($array);
}
$str = '
Array
(
    [ID] => 29
    [TIMESTAMP_X] => 2017-07-14 11:41:19
    [IBLOCK_ID] => 3
    [NAME] => Картинка
[ACTIVE] => Y
[SORT] => 9
    [CODE] => PICTURE
[DEFAULT_VALUE] =>
    [PROPERTY_TYPE] => F
[ROW_COUNT] => 1
    [COL_COUNT] => 30
    [LIST_TYPE] => L
[MULTIPLE] => N
[XML_ID] =>
    [FILE_TYPE] =>
    [MULTIPLE_CNT] => 5
    [TMP_ID] =>
    [LINK_IBLOCK_ID] => 0
    [WITH_DESCRIPTION] => N
[SEARCHABLE] => N
[FILTRABLE] => N
[IS_REQUIRED] => N
[VERSION] => 1
    [USER_TYPE] =>
    [USER_TYPE_SETTINGS] =>
    [HINT] =>
    [PROPERTY_VALUE_ID] => 989
    [VALUE] => 250
    [DESCRIPTION] =>
    [VALUE_ENUM] =>
    [VALUE_XML_ID] =>
    [VALUE_SORT] =>
    [~VALUE] => 250
    [~DESCRIPTION] =>
    [~NAME] => Картинка
[~DEFAULT_VALUE] =>
)
';
echo $str;
$arr = mbStringToArray($str);
/*echo '<br/> $arr '. __LINE__.'* ' .  __FILE__ . ' <pre>';
print_r($arr);
echo '</pre>';*/
$key_name = 0;
$value_name = 0;
$key_name_complete = 0;
$value_name_complete = 0;
 $new_arr = array();

foreach($arr as $num => $symbol){
    //echo $symbol . ' ' . ord($symbol) . '<br/>';

    if(ord($symbol) == 93){ //]
        $key_name = 0;
        $key_name_complete = 1;
        $new_array_element_key = $key_name_value;
    }

    if($key_name == 1){
        $key_name_value = $key_name_value . $symbol;
    }

    if(ord($symbol) == 91){ // [
        $key_name = 1;
        $key_name_value = '';
    }

    if($value_name == 1){
        $value_name_value = $value_name_value . $symbol;
    }

    if(ord($symbol) == 62){ // >
        $value_name = 1;
        $value_name_value = '';
    }

    if(ord($symbol) == 13 && ord($arr[$num - 1]) != 40){
        $value_name = 0;
        $value_name_complete = 1;
        $new_array_element_value = $value_name_value;
    }
    if($key_name_complete == 1 && $value_name_complete == 1){
        $new_arr[$new_array_element_key] = $new_array_element_value;
    }
}
echo '<br/> $new_arr '. __LINE__.'* ' .  __FILE__ . ' <pre>';
print_r($new_arr);
echo '</pre>';




$newWidth = 200;
$newHeight = 130;
$renderImage = CFile::ResizeImage($new_arr, Array("width" => $newWidth, "height" => $newHeight), BX_RESIZE_IMAGE_EXACT);
echo $renderImage;
echo '<br/> $renderImage '. __LINE__.'* ' .  __FILE__ . ' <pre>';
print_r($renderImage);
echo '</pre>';

$renderImage = CFile::ResizeImageGet($new_arr, Array("width" => $newWidth, "height" => $newHeight));
echo CFile::ShowImage($renderImage['src'], $newWidth, $newHeight, "border=0", "", true);

?>
<img src="<?=$renderImage?>" alt="" />
<img src="<?=CFile::GetPath(250)?>" alt="" />
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>
