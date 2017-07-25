<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
global $APPLICATION;
if(isset($_POST["template"])) {
    if($_POST["template"] == "mobile"){
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "news_on_news",
            Array(
                "IBLOCK_ID" => 1,
                "IBLOCK_TYPE" => "site_information",
                "NEWS_COUNT" => 3,
                "SORT_BY1" => "TIMESTAMP_X",
                "SORT_ORDER1" => "DESC"
            ),
            $component
        );
    } else {
        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "news_on_main",
            Array(
                "IBLOCK_ID" => 1,
                "IBLOCK_TYPE" => "site_information",
                "NEWS_COUNT" => 3,
                "SORT_BY1" => "TIMESTAMP_X",
                "SORT_ORDER1" => "DESC"
            ),
            $component
        );
    }
}

