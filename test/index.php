<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>
<script>
    console.log("load");
    $(function() {
        $("body").on("click", ".services-list-item-inner", function(event){
            event.stopPropagation();
            console.log("link click");
            console.log($(this));
            var href = $(this).find(".services-list-item__link a").data("href");
            console.log(href);
            location.reload(href);
        });
        /*$("#logo").on("click", function(){
            console.log("logo click");
        });*/
    });

</script>
<div class="carousel">
    <div class="carousel-info">
        <div class="carousel-info-inner">
            <div class="carousel-info__text">
                Мировой лидер в производстве<br/>
                высокотехнологичных и инновационных судов
                в области арктического судоходства
            </div>
            <div class="carousel-info__button">
                Подробнее
            </div>
        </div>
    </div>
</div>

<div class="about-company">
    <div class="about-company-text">
        <div class="about-company-text__caption">
            О КОМПАНИИ
        </div>
        <div style="clear: both;"></div>
        <div class="about-company-text__logo">

        </div>
        <div style="clear: both;"></div>
        <div class="about-company-text__text">
            <div class="about-company-text__text-caption">
                Высокотехнологичное судостроение
            </div>
            <div style="clear: both;"></div>
            <div class="about-company-text__text-text">
                Являясь лидером в высокотехнологичном судостроении, «Нордик Ярдс» концентрируется на производстве судов специального назначения, таких как ледокольные и ледоходные суда, специализированные танкеры, паромы и оффшорные конструкции. Компания сочетает инновационное высокотехнологичное производство с неукоснительным соблюдением сроков поставки и отличается высочайшим качеством своих судов.
            </div>
            <div class="about-company-text__text-text">
                «Нордик Ярдс» располагает двумя верфями в Висмаре и Варнемюнде с прямым выходом в Балтийское море. Оба предприятия входят в число самых крупных, современных и эффективных верфей в мире. С момента их основания в 1946 году на верфях в Висмаре и Варнемюнде было построено более 900 судов в 74 различных конфигурациях. После успешного перепрофилирования «Нордик Ярдс» в долгосрочной перспективе обеспечит занятость до 1.600 высококвалифицированных сотрудников.
            </div>
        </div>
    </div>
    <div class="about-company-images">
        <div class="about-company-images__image">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/main_about_company_1.jpg" alt="Логотип" />
        </div>
        <div class="about-company-images__image">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/main_about_company_2.jpg" alt="Логотип" />
        </div>

    </div>
</div>
<div style="clear: both;"></div>
<div class="services">
    <div class="services__caption">
        Услуги
    </div>
    <div style="clear: both;"></div>
    <div class="services__text">
        Текстовый блок об услугах Текстовый блок об услугах Текстовый блок об услугах Текстовый блок об услугах
        Текстовый блок об услугах Текстовый блок об услугах
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
<div class="last-news">
    <div class="last-news__caption">
        Последние новости
    </div>
    <div style="clear: both;"></div>
    <div class="last-news-list">
        <div class="last-news-list-inner">
            <div class="last-news-list-centered">

                <div class="last-news-list-item">
                    <div class="last-news-list-item-inner">
                        <div class="last-news-list-item__background-opacity"></div>
                        <div class="last-news-list-item__picture">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/last_news_1.jpg" alt="Логотип" />
                        </div>
                        <div class="last-news-list-item__title">
                            Первый вылет: испытания МС-21 могут пройти через несколько недель‍
                        </div>
                        <div class="last-news-list-item__button">
                            Подробнее
                        </div>
                        <div class="last-news-list-item__cover-bg"></div>
                    </div>
                </div>

            </div>
            <div class="last-news-list-centered">

                <div class="last-news-list-item">
                    <div class="last-news-list-item-inner">
                        <div class="last-news-list-item__background-opacity"></div>
                        <div class="last-news-list-item__picture">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/last_news_2.jpg" alt="Логотип" />
                        </div>
                        <div class="last-news-list-item__title">
                            Пентагон назвал профессиональным полет российских самолетов у Аляски
                        </div>
                        <div class="last-news-list-item__button">
                            Подробнее
                        </div>
                        <div class="last-news-list-item__cover-bg"></div>
                    </div>
                </div>

            </div>
            <div class="last-news-list-centered last-news-list-centered-last">

                <div class="last-news-list-item">
                    <div class="last-news-list-item-inner">
                        <div class="last-news-list-item__background-opacity"></div>
                        <div class="last-news-list-item__picture">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/last_news_3.jpg" alt="Логотип" />
                        </div>
                        <div class="last-news-list-item__title">
                            Первый вылет: испытания МС-21 могут пройти через несколько недель‍
                        </div>
                        <div class="last-news-list-item__button">
                            Подробнее
                        </div>
                        <div class="last-news-list-item__cover-bg"></div>
                    </div>
                </div>

            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>