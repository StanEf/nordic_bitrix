<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>
<div class="page-project">
    <div class="page-project-inner">
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "project",
    Array(
        "IBLOCK_ID" => 3,
        "PROJECT_ID" => $_GET["ID"],
        "PROPERTY_CODE" => array(1),
    ),
    ''
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
