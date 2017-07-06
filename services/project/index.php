<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>
<div class="page-project">
    <div class="page-project-inner">
        <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"project", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "BUILD_YEAR",
			2 => "SERVICE_TYPE",
			3 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "site_information",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "99",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/services/project/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "project",
		"STRICT_SECTION_CHECK" => "N",
		"SEF_URL_TEMPLATES" => array(
			"news" => "/",
			"section" => "#SECTION_CODE#/",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>

        <div class="page-projects-detail-list align-centered">
            <div class="page-project-same-projects">
                Похожие проэкты
            </div>
            <div class="page-projects-detail-list-inner page-project-detail-list-inner-mod">

                <div class="page-projects-detail-item page-project-detail-item-mod">
                    <div class="page-projects-detail-item-text">
                        <div class="page-projects-detail-item-text-inner">
                            <div class="page-projects-detail-item-text-small">
                                Арктический контейнеровоз
                            </div>
                            <div class="page-projects-detail-item-text-big">
                                Проект «Nordic»
                            </div>
                        </div>
                    </div>
                    <div class="page-projects-detail-item__link">
                        <a href="#"></a>
                    </div>
                    <div class="page-projects-detail-item__picture page-project-detail-item__picture-mod">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/projects-detail.jpg" alt="" />
                    </div>
                </div>
                <div class="page-projects-detail-item page-project-detail-item-mod">
                    <div class="page-projects-detail-item-text">
                        <div class="page-projects-detail-item-text-inner">
                            <div class="page-projects-detail-item-text-small">
                                Арктический контейнеровоз
                            </div>
                            <div class="page-projects-detail-item-text-big">
                                Проект «Nordic»
                            </div>
                        </div>
                    </div>
                    <div class="page-projects-detail-item__link">
                        <a href="#"></a>
                    </div>
                    <div class="page-projects-detail-item__picture page-project-detail-item__picture-mod">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/projects-detail.jpg" alt="" />
                    </div>
                </div>
                <div class="page-projects-detail-item page-project-detail-item-mod">
                    <div class="page-projects-detail-item-text">
                        <div class="page-projects-detail-item-text-inner">
                            <div class="page-projects-detail-item-text-small">
                                Арктический контейнеровоз
                            </div>
                            <div class="page-projects-detail-item-text-big">
                                Проект «Nordic»
                            </div>
                        </div>
                    </div>
                    <div class="page-projects-detail-item__link">
                        <a href="#"></a>
                    </div>
                    <div class="page-projects-detail-item__picture page-project-detail-item__picture-mod">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/projects-detail.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
