<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<div class="page-certificates">
    <div class="page-certificates-inner">
        <div class="page-certificates-text">
            <div class="page-certificates-text-inner">
                <div class="page-certificates-text-title">
                    Сертификаты
                </div>
                <div class="page-certificates-text-text">

                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
<!--        <div class="page-certificates-pictures">

                <div class="page-certificates-picture text-align-left">
                    <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/certificates_01.jpg" alt="Логотип" />
                </div>
                <div class="page-certificates-picture text-align-center">
                    <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/certificates_02.jpg" alt="Логотип" />
                </div>
                <div class="page-certificates-picture text-align-right">
                    <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/certificates_03.jpg" alt="Логотип" />
                </div>

                <div class="page-certificates-picture text-align-left">
                    <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/certificates_04.jpg" alt="Логотип" />
                </div>
                <div class="page-certificates-picture text-align-center">
                    <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/certificates_05.jpg" alt="Логотип" />
                </div>


        </div>-->

        <?$APPLICATION->IncludeComponent("bitrix:news.list","certificates",Array(
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_MODE" => "Y",
            "IBLOCK_TYPE" => "news",
            "IBLOCK_ID" => "4",
            "NEWS_COUNT" => "6",
           /* "SORT_BY1" => "ORDER",
            "SORT_ORDER1" => "ASC",*/
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => Array("ID"),
            "PROPERTY_CODE" => Array("DESCRIPTION"),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "Y",
            "SET_BROWSER_TITLE" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_META_DESCRIPTION" => "Y",
            "SET_LAST_MODIFIED" => "Y",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",
            "DISPLAY_TOP_PAGER" => "Y",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "Y",
            "PAGER_TEMPLATE" => "",
            "PAGER_DESC_NUMBERING" => "Y",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "Y",
            "PAGER_BASE_LINK_ENABLE" => "Y",
            "SET_STATUS_404" => "Y",
            "SHOW_404" => "Y",
            "MESSAGE_404" => "",
            "PAGER_BASE_LINK" => "",
            "PAGER_PARAMS_NAME" => "arrPager",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => ""
        )); ?>

    </div>

</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>