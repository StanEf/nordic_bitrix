 $('.slider-for').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   fade: true,
   asNavFor: '.slider-nav',
     prevArrow: false,
     nextArrow: false,
    responsive: [
     {
         breakpoint: 766,
         asNavFor: false,
         settings: {
             arrows: true,
             prevArrow: $('.prev-mobile'),
             nextArrow: $('.next-mobile'),
         }
     }
    ]
 });
 $('.slider-nav').slick({
   slidesToShow: 3,
   slidesToScroll: 1,
   asNavFor: '.slider-for',
   dots: false,
   focusOnSelect: true,
     vertical: true,
     verticalSwiping: true,

     prevArrow: $('.prev-slick'),
     nextArrow: $('.next-slick'),
     responsive: [
         {
             breakpoint: 767,
             settings: {
                 slidesToShow: 1,
                 slidesToScroll: 1,
                 prevArrow: false,
                 nextArrow: false,
                 asNavFor: false,
             }
         }
     ]
 });

 $('a[data-slide]').click(function(e) {
   e.preventDefault();
   var slideno = $(this).data('slide');
   $('.slider-nav').slick('slickGoTo', slideno - 1);
 });