
</div>
</div>
</div>
<div class="footer"></div>
</div>
</div>
</div>


<script src="<?= SITE_TEMPLATE_PATH ?>/slider/js/gallery.js"></script>
<script>
    $(".page-projects-detail-item-text").on("click", function(){
        var href = $(this).find(".page-projects-detail-item__link a").attr("href");
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

    $(".last-news-list-item__button").on("click", function(){
        var href = $(this).find(".last-news-list-item__link a").attr("href");
        window.open(href, "_self");
    });
    $(".page-news-item-picture").on("click", function(){
        console.log('clickc');
        var href = $(this).closest(".page-news-item").find(".page-news-item__link").attr("href");
        window.open(href, "_self");
    });
    $(".page-news-item-text-title").on("click", function(){
        console.log('clickc3');
        var href = $(this).closest(".page-news-item").find(".page-news-item__link").attr("href");
        window.open(href, "_self");
    });


</script>

</body>
</html>