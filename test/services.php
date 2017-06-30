<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
    <script>
        console.log("load");
        $(function() {
            $("body").on("click", ".services-list-item-inner", function(event){
                event.stopPropagation();
                console.log("link click");
                console.log($(this));
                var href = $(this).find(".services-list-item__link a").data("href");
                console.log(href);
                window.open(location.origin + '/test/'+href, '_self');
                //alert(location.origin + '/test/'+href);
                //location.reload("http://new.nordic.ru/test/services/projects.php");
                //location.reload(location.origin + '/test/'+href);
            });
            /*$("#logo").on("click", function(){
             console.log("logo click");
             });*/
        });

    </script>
<div class="page-services">
    <div class="page-services-inner">
        <div class="page-services-text">
            <div class="page-services-text__caption">
                УСЛУГИ
            </div>
            <div class="page-services-text__text">
                Текстовый блок об услугах Текстовый блок об услугах Текстовый блок об услугах Текстовый блок об услугах
                Текстовый блок об услугах Текстовый блок об услугах
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="services-list">
            <div class="services-list-centered">
                <div class="services-list-items">
                    <div class="services-list-item">
                        <div class="services-list-item-inner">
                            <div class="services-list-item__link">
                                <a href="#" data-href="#"></a>
                            </div>
                            <div class="services-list-item__background-opacity"></div>
                            <div class="services-list-item__background">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/services-engineering.jpg" alt="Логотип" />
                            </div>
                            <div class="services-list-item__picture">
                                <div class="services-list-item__picture-inner">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon001.png" alt="Логотип" class="mod" />
                                </div>
                            </div>
                            <div class="services-list-item__title">
                                <div class="services-list-item__title-inner">
                                    Инжиниринг
                                </div>
                            </div>
                            <div class="services-list-item__text">
                                <div class="services-list-item__text-inner">
                                    Суда для арктического плавания. Офшорные сооружения. Паромы и пассажирские суда. Морские
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-list-item">
                        <div class="services-list-item-inner">
                            <div class="services-list-item__link">
                                <a href="#" data-href="services/projects.php"></a>
                            </div>
                            <div class="services-list-item__background-opacity"></div>
                            <div class="services-list-item__background">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/services-projecting.jpg" alt="Логотип" />
                            </div>
                            <div class="services-list-item__picture">
                                <div class="services-list-item__picture-inner">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon002.png" alt="Логотип" />
                                </div>
                            </div>
                            <div class="services-list-item__title">
                                <div class="services-list-item__title-inner">
                                    Проектирование
                                </div>
                            </div>
                            <div class="services-list-item__text">
                                <div class="services-list-item__text-inner">
                                    Суда для арктического плавания. Офшорные сооружения. Паромы и пассажирские суда. Морские
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-list-item services-list-item-right">
                        <div class="services-list-item-inner">
                            <div class="services-list-item__background-opacity"></div>
                            <div class="services-list-item__background">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/services-consulting.jpg" alt="Логотип" />
                            </div>
                            <div class="services-list-item__picture">
                                <div class="services-list-item__picture-inner">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon003.png" alt="Логотип" />
                                </div>
                            </div>
                            <div class="services-list-item__title">
                                <div class="services-list-item__title-inner">
                                    Консалтинг
                                </div>
                            </div>
                            <div class="services-list-item__text">
                                <div class="services-list-item__text-inner">
                                    Суда для арктического плавания. Офшорные сооружения. Паромы и пассажирские суда. Морские
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear: both;"></div>

                    <div class="services-list-item">
                        <div class="services-list-item-inner">
                            <div class="services-list-item__background-opacity"></div>
                            <div class="services-list-item__background">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/services-production.jpg" alt="Логотип" />
                            </div>
                            <div class="services-list-item__picture">
                                <div class="services-list-item__picture-inner">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon006.png" alt="Логотип" />
                                </div>
                            </div>
                            <div class="services-list-item__title">
                                <div class="services-list-item__title-inner">
                                    Сопровождение строительства
                                </div>
                            </div>
                            <div class="services-list-item__text">
                                <div class="services-list-item__text-inner">
                                    Суда для арктического плавания. Офшорные сооружения. Паромы и пассажирские суда. Морские
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-list-item">
                        <div class="services-list-item-inner">
                            <div class="services-list-item__background-opacity"></div>
                            <div class="services-list-item__background">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/services-support.jpg" alt="Логотип" />
                            </div>
                            <div class="services-list-item__picture">
                                <div class="services-list-item__picture-inner">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon005.png" alt="Логотип" />
                                </div>
                            </div>
                            <div class="services-list-item__title">
                                <div class="services-list-item__title-inner">
                                    Сопровождение строительства
                                </div>
                            </div>
                            <div class="services-list-item__text">
                                <div class="services-list-item__text-inner">
                                    Суда для арктического плавания. Офшорные сооружения. Паромы и пассажирские суда. Морские
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-list-item services-list-item-right">
                        <div class="services-list-item-inner">
                            <div class="services-list-item__background-opacity"></div>
                            <div class="services-list-item__background">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/services-post-warranty.jpg" alt="Логотип" />
                            </div>
                            <div class="services-list-item__picture">
                                <div class="services-list-item__picture-inner">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/icon004.png" alt="Логотип" />
                                </div>
                            </div>
                            <div class="services-list-item__title">
                                <div class="services-list-item__title-inner">
                                    Послегарантийное
                                    обслуживание
                                </div>
                            </div>
                            <div class="services-list-item__text">
                                <div class="services-list-item__text-inner">
                                    Суда для арктического плавания. Офшорные сооружения. Паромы и пассажирские суда. Морские
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>
</div>





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>