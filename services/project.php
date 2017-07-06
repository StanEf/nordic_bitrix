<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>
<div class="page-project">
   <!-- <div class="page-project-top-nav">
        <div class="page-project-top-nav-inner">
            <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/logo_background.jpg" alt="Логотип" />
        </div>
    </div>-->
    <div class="page-project-inner">
        <div class="page-project-top-nav">
            <div class="page-project-top-nav-img">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/chevron_left.png" alt="Логотип" />
            </div>
            <div class="page-project-top-nav-text">
                все проэкты
            </div>
        </div>
        <div class="page-project-title">
            <div class="page-project-title-small">
                Аварийно-спасательное судно
            </div>
            <div class="page-project-title-big">
                Проект «Rescuer»
            </div>
        </div>
        <div style="clear: both;"></div>

        <div class="page-project-slider">
            <div id="container">
                <div id="slideshow" class="">
                    <!-- Below are the images in the gallery -->
                    <div id="img-1" data-img-id="1" class="img-wrapper active" style="background-color: white;">
                        <video class="yt_video video-first"  controls loop preload="auto" muted width="784px" height="440px">
                            <source src="<?= SITE_TEMPLATE_PATH ?>/video/nordic.mp4" type='video/mp4'>
                        </video>
                    </div>
                    <div id="img-2" data-img-id="2" class="img-wrapper">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/project-big-001.jpg" alt="Логотип" />
                    </div>
                    <div id="img-3" data-img-id="3" class="img-wrapper">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/slider/images/services-support.jpg" alt="Логотип" />
                    </div>
                    <div id="img-4" data-img-id="4" class="img-wrapper">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/slider/images/img1.jpg" alt="Логотип" />
                    </div>
                    <div id="img-5" data-img-id="5" class="img-wrapper">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/slider/images/img2.jpg" alt="Логотип" />
                    </div>
                    <div id="img-6" data-img-id="6" class="img-wrapper" style="background-color: white;">
                        <video class="yt_video" controls loop preload="auto" muted width="784px" height="440px">
                            <source src="<?= SITE_TEMPLATE_PATH ?>/video/nordic.mp4" type='video/mp4'>
                        </video>
                    </div>
                    <!-- Below are the thumbnails of above images -->
                    <div class="thumbs-container bottom">
                        <div class="thumbs-inner">
                            <div id="prev-btn" class="prev">
                                <i class="fa fa-chevron-up fa-2x"></i>
                            </div>
                          <!--  <div class="thumbs-container-inner">-->
                                <ul class="thumbs">
                                    <li data-thumb-id="1" class="thumb active">
                                        <!--<img src="<?/*= SITE_TEMPLATE_PATH */?>/img/play.png" alt="Логотип" />-->
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/project-big-001.jpg" alt="Логотип" />
                                    </li>
                                    <li data-thumb-id="2" class="thumb">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/project-big-001.jpg" alt="Логотип" />
                                    </li>
                                    <li data-thumb-id="3" class="thumb" >
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/slider/images/services-support.jpg" alt="Логотип" />
                                    </li>
                                    <li data-thumb-id="4" class="thumb">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/slider/images/img1-thumb.jpg" alt="Логотип" />
                                    </li>
                                    <li data-thumb-id="5" class="thumb" >
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/slider/images/img2-thumb.jpg" alt="Логотип" />
                                    </li>
                                    <li data-thumb-id="6" class="thumb" >
                                       <!-- <img src="<?/*= SITE_TEMPLATE_PATH */?>/img/play.png" alt="Логотип" />-->
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/project-big-001.jpg" alt="Логотип" />
                                    </li>
                                </ul>
                           <!-- </div>-->
                            <div id="next-btn" class="next">
                                <i class="fa fa-chevron-down fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-project-underline"></div>
        <div class="page-project-description">
            <div class="page-project-appointment">
                <div class="page-project-appointment-title project-title">
                    НАЗНАЧЕНИЕ
                </div>
                <div class="page-project-appointment-text project-text">
                    Судно предназначено для обеспечения проведения аварийно-спасательных работ, а также транспортировки и снабжения маломерных поисково-спасательных плавсредств.
                </div>
            </div>
            <div class="page-project-features">
                <div class="page-project-features-title project-title">
                    ФУНКЦИОНАЛЬНЫЕ ОСОБЕННОСТИ
                </div>
                <div class="page-project-features-text project-text">
                    <ul>
                        <li>Функции снабжения морских платформ с береговых баз;</li>
                        <li>Контроль за ледовой обстановкой;</li>
                        <li>Проводка судов и контроль за ледовой обстановкой;</li>
                        <li>Оборудование для аварийно-спасательных операций; </li>
                        <li>Размещение 150 эвакуированных / спасенных; </li>
                        <li>Усовершенствованный и апробированный проект корпуса; </li>
                        <li>Соответствие положениям IMO Tier III; </li>
                        <li>Высокая степень резервирования мощности; </li>
                        <li>Система динамического позиционирования DPII; </li>
                        <li>Водолазная шахта.</li>
                    </ul>
                </div>

            </div>
            <div class="page-project-characteristics">
                <div class="page-project-characteristics-title project-title">
                    ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ
                </div>
                <div class="page-project-characteristics-text project-text">
                    <div class="page-project-characteristics-text-table">
                        <div class="page-project-characteristics-row">
                            <div class="page-project-characteristics-cell-name">
                                Длина наибольшая
                            </div>
                            <div class="page-project-characteristics-cell-value">
                                104,25 м
                            </div>
                        </div>
                        <div class="page-project-characteristics-row">
                            <div class="page-project-characteristics-cell-name">
                                Ширина
                            </div>
                            <div class="page-project-characteristics-cell-value">
                                20,80 м
                            </div>
                        </div>
                        <div class="page-project-characteristics-row">
                            <div class="page-project-characteristics-cell-name">
                                Осадка
                            </div>
                            <div class="page-project-characteristics-cell-value">
                                8,00 / 8,50 м
                            </div>
                        </div>
                        <div class="page-project-characteristics-row">
                            <div class="page-project-characteristics-cell-name">
                                Скорость
                            </div>
                            <div class="page-project-characteristics-cell-value">
                                16 узлов
                            </div>
                        </div>
                        <div class="page-project-characteristics-row">
                            <div class="page-project-characteristics-cell-name">
                                Вместимость палубы
                            </div>
                            <div class="page-project-characteristics-cell-value">
                                800 м2 / 10 т/м2
                            </div>
                        </div>
                        <div class="page-project-characteristics-row">
                            <div class="page-project-characteristics-cell-name">
                                Грузоподъемность крана
                            </div>
                            <div class="page-project-characteristics-cell-value">
                                20 т
                            </div>
                        </div>
                        <div class="page-project-characteristics-row">
                            <div class="page-project-characteristics-cell-name">
                                Вместимость цистерн
                            </div>
                            <div class="page-project-characteristics-cell-value">
                                3 000 м3
                            </div>
                        </div>
                        <div class="page-project-characteristics-row">
                            <div class="page-project-characteristics-cell-name">
                                Экипаж
                            </div>
                            <div class="page-project-characteristics-cell-value">
                                70 чел.
                            </div>
                        </div>
                        <div class="page-project-characteristics-row">
                            <div class="page-project-characteristics-cell-name">
                                Лёдопроходимость
                            </div>
                            <div class="page-project-characteristics-cell-value">
                                1,5 м в ров. льду
                            </div>
                        </div>
                        <div class="page-project-characteristics-row">
                            <div class="page-project-characteristics-cell-name">
                                Дедвейт
                            </div>
                            <div class="page-project-characteristics-cell-value">
                                3 000 тонн
                            </div>
                        </div>
                        <div class="page-project-characteristics-row last">
                            <div class="page-project-characteristics-cell-name"></div>
                            <div class="page-project-characteristics-cell-value"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-project-underline"></div>








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
