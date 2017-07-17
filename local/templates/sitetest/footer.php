
</div>
</div>
</div>
<div class="footer">
    <div class="footer-inner">
        <div class="footer-inner-about-company">
            <div class="footer-title">
                О компании
            </div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "footer",
                array(
                    "ROOT_MENU_TYPE" => "top",
                    //"MAX_LEVEL" => "2",
                    //"CHILD_MENU_TYPE" => "top",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "Y",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "SHOW_LAST_LEVEL_BUTTONS" => "N",
                    "COMPONENT_TEMPLATE" => "header"
                ),
                false
            );?>
        </div>
        <div class="footer-inner-services">
            <div class="footer-title">
                Услуги
            </div>
            <div class="footer-text">
                <ul>
                    <li class=""><a href="/services/engineering.php">Инжиниринг</a></li>
                    <li class=""><a href="/services/projects/">Проэктирование</a></li>
                    <li class=""><a href="#">Консалтинг</a></li>
                    <li class=""><a href="#">Производство оборудования</a></li>
                    <li class=""><a href="#">Сопровождение строительства</a></li>
                    <li class=""><a href="#">Послегарантийное обслуживание</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-inner-social-network">
            <div class="footer-title">
                Соцсети
            </div>
            <div class="footer-text">
                <ul>
                    <li class="">
                        <a href="https://www.facebook.com">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <span>Facebook</span>
                        </a></li>
                    <li class="">
                        <a href="https://ввсабwww.instagram.com">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <span>Instagram</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-inner-about-contacts">
            <div class="footer-title">
                Контакты
            </div>
            <div class="footer-text">
                Тел: +7-(495)-287-35-00<br/>
                E-mail: info@nordiceng.ru
            </div>

            <div class="footer-title">
                наш адрес
            </div>
            <div class="footer-text">
                Москва, 119019<br/>
                Гоголевский б-р, д. 11
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>


<!--<script src="<?/*= SITE_TEMPLATE_PATH */?>/slider/js/gallery.js"></script>-->
<script>
    $(".page-projects-detail-item-text").on("click", function(){
        var href = $(this).find(".page-projects-detail-item__link a").attr("href");
        window.open(href, "_self");
    });
    $(".page-project-detail-item").on("click", function(){
        var href = $(this).find(".page-project-detail-item__link a").attr("href");
        //alert(href);
        window.open(href, "_self");
    });
    $(".page-project-top-nav").on("click", function(){
        var href = $(this).find(".page-project-top-nav__link a").attr("href");
        window.open(href, "_self");
    });
    $("body").on("click", ".services-list-item-inner", function(event){
        event.stopPropagation();
        var href = $(this).find(".services-list-item__link a").attr("href");
        window.open(href, "_self");
    });

    $(".carousel-info__button").on("click", function(){
        window.open("about.php", "_self");
    });

    $(".last-news-list-item-inner").on("click", function(){
        var href = $(this).find(".last-news-list-item__link a").attr("href");
        window.open(href, "_self");
    });
    $(".page-news-item-picture").on("click", function(){
        console.log('clickc');
        var href = $(this).closest(".page-news-item").find(".page-news-item__link").attr("href");
        //alert(href);
        window.open(href, "_self");
    });
    $(".page-news-item-text-title").on("click", function(){
        console.log('clickc3');
        var href = $(this).closest(".page-news-item").find(".page-news-item__link").attr("href");
        window.open(href, "_self");
    });
    $(".page-news-detail-list-item-text-title").on("click", function(){
        console.log('clickc3');
        var href = $(this).closest(".page-news-detail-list-item").find(".page-news-detail-list-item-text-text a").attr("href");
        window.open(href, "_self");
    });
    $(".page-news-detail-list-item-picture").on("click", function(){
        console.log('clickc3');
        var href = $(this).closest(".page-news-detail-list-item").find(".page-news-detail-list-item-text-text a").attr("href");
        window.open(href, "_self");
    });
    $(".menu-mobile__button").on("click", function(){
        $(".menu-list").toggle();
    });
    $(".menu-list li").on("click", function(){
        var href = $(this).find('a').attr("href");
        window.open(href, "_self");
    });

</script>

</body>
</html>