<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<div class="page-projects">
    <div class="page-projects-inner">
        <div class="page-projects-text">
            <div class="page-projects-text__caption">
                ПРОЕКТЫ
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="page-projects-list">
            <div class="page-projects-list-inner">
                <div class="page-projects-list-centered">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "categories",
                                    Array(
                                       /* "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],*/
                                        "IBLOCK_ID" => 2,
                                       "PARENT_CATEGORY" => 7,
                                        "PROPERTY_CODE" => array(1),
                                    ),
                                   ''
                                );?>
                </div>
            </div>
        </div>
    </div>
</div>





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>