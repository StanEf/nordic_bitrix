<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "news_on_main",
    Array(
        "IBLOCK_TYPE" => "site_information",
        "IBLOCK_ID" => 1,
        "NEWS_COUNT" => 3,
        "SORT_BY1" => "TIMESTAMP_X",
        "SORT_ORDER1" => "DESC",
    ),
    $component
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
