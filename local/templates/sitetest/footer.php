
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
                    <li class=""><a href="/services/engineering/">Инжиниринг</a></li>
                    <li class=""><a href="/services/projects/">Проэктирование</a></li>
                    <li class=""><a href="/services/consulting/">Консалтинг</a></li>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/slick/js/index.js"></script>
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

    $(".prev-slick.slick-arrow").on("click", function(){
        runCurrentVideoStopOther();
    });
    $(".next-slick.slick-arrow").on("click", function(){
        runCurrentVideoStopOther();
    });
    $(".prev-mobile.slick-arrow").on("click", function(){
        runCurrentVideoStopOther();
    });
    $(".next-mobile.slick-arrow").on("click", function(){
        runCurrentVideoStopOther();
    });

    function runCurrentVideoStopOther(){
        var current = $(".slider-for").find(".slick-active");
        console.log(current.data("slick-index"));
        if(current.find("video").length != 0) {
            current.find("video")[0].play();
        }
        $(".slider-for .slick-slide").each(function(index){
            var video = $(this).find("video");
            if(!$(this).hasClass("slick-active") && video.length != 0){
                console.log($(this).hasClass("slick-active"));
                console.log('index ' + index);
                video[0].pause();
                video[0].currentTime = 0.0;
            }
        });
    }
    $(function() {

        autoResizePictureOnPageEngineering();
        //autoResizePictureOnPageConsulting();
        setTimeout(autoResizePictureOnPageConsulting, 500);
        /*setTimeout(autoResizeVideoOnMain, 500);*/
    });
    $(window).resize(function() {
        autoResizeServicesOnMain();

        autoResizeVideoOnMain();

        autoResizePictureOnPageEngineering();
        autoResizePictureOnPageConsulting();
    });
    function autoResizeServicesOnMain(){
        if(location.pathname == '/' || location.pathname == '/index.php' || location.pathname == '/services/') {
            var services_img_height =  $(".services-list-item__background img").height();
            var services_list_item_height =  $(".services-list-item").height();
            $(".services-list-item").each(function(index){
                $(this).find(".services-list-item-inner").height(services_img_height);
                $(this).find(".services-list-item__background-opacity").height(services_img_height);
            });
        }
    }

    function autoResizeVideoOnMain(){
        var main_video_height = $(".main-video video").height();
        console.log("main_video_height " + main_video_height);
        if(main_video_height == null) {
            main_video_height = "0px";
        }
        $(".main-video").height(main_video_height);
    }

    function loadLastNews() {
        if(location.pathname == '/' || location.pathname == '/index.php') {
            var template;
            if(document.documentElement.clientWidth <= 960){
                template = 'mobile';
            } else {
                template = 'desktop';
            }
            $.post(
                "ajax/main_last_news.php",
                {
                    template: template
                },
                loadLastNewsSuccess
            );
        }
    }

    function loadLastNewsTest() {
        if(location.pathname == '/news_list_test.php') {
            var template;
            if(document.documentElement.clientWidth <= 960){
                template = 'mobile';
            } else {
                template = 'desktop';
            }
            $.post(
                "ajax/main_last_news_test.php",
                {
                    template: template
                },
                loadLastNewsSuccess
            );
        }
    }

    function loadLastNewsSuccess(data){
        $(".last_news_ajax").html(data);
        $(".last-news-list-item-inner").on("click", function () {
            var href = $(this).find(".last-news-list-item__link a").attr("href");
            window.open(href, "_self");
        });
    }
    function loadMainVideo(){
        console.log("load main video");
        if(location.pathname == '/' || location.pathname == '/index.php') {
            var template;
            if(document.documentElement.clientWidth < 415){
                template = 'mobile';
            } else {
                template = 'not_mobile';
            }
            $.post(
                "ajax/main_video.php",
                {
                    template: template
                },
                function(data) {
                    $(".main-video").html(data);
                }
            );
        }
    }

    function autoResizePictureOnPageEngineering(){
        if(location.pathname == '/services/engineering/') {
            var page_engineering_picture_height = $(".page-engineering__picture img").height();
            $(".page-engineering__picture").height(page_engineering_picture_height);
        }
    }
    function autoResizePictureOnPageConsulting(){
        if(location.pathname == '/services/consulting/') {
            var page_consulting_picture_height = $(".page-consulting__picture img").height();
            console.log('page_consulting_picture_height ' + page_consulting_picture_height);
            $(".page-consulting__picture").height(page_consulting_picture_height);
        }
    }

    if(location.pathname == '/' || location.pathname == '/index.php') {
        $(function() {
            /*autoResizeServicesOnMain();*/
            loadLastNews();
            loadMainVideo();
        });

        $(window).load(function () {
            console.log('after load');
            /*autoResizeVideoOnMain();*/
            setTimeout(autoResizeVideoOnMain, 500);
            setTimeout(autoResizeServicesOnMain, 500);
            /*autoResizeServicesOnMain();*/

        });
    }
    if(location.pathname == '/services/') {
        $(window).load(function () {
            console.log(location.pathname);
            setTimeout(autoResizeServicesOnMain, 500);
            /*autoResizeServicesOnMain();*/
        });
    }

    if(location.pathname == '/news_list_test.php') {
        $(function() {
            /*autoResizeServicesOnMain();*/
            loadLastNewsTest();
            loadMainVideo();
        });

        $(window).load(function () {
            console.log('after load');
            /*autoResizeVideoOnMain();*/
            setTimeout(autoResizeVideoOnMain, 500);
            setTimeout(autoResizeServicesOnMain, 500);
            /*autoResizeServicesOnMain();*/

        });
    }
    if(location.pathname == '/services/') {
        $(window).load(function () {
            console.log(location.pathname);
            setTimeout(autoResizeServicesOnMain, 500);
            /*autoResizeServicesOnMain();*/
        });
    }

</script>

</body>
</html>