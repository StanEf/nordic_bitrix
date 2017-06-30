
<html>
<head>
    <title>My Now Amazing Webpage</title>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
</head>
<body>
<style>
.slide1{
    border: 1px solid grey;
    width: 30px;
    height: 30px;
}
    .cont {
        width: 30px;
        height: 30px;
        border: 1px solid green;
    }

    </style>

<div class="button-before">
    before
</div>
<div class="your-class">

    <div class="slide1" ><div class="cont"></div></div>
    <div class="slide1"><div class="cont"></div></div>
    <div class="slide1"><div class="cont"></div></div>
    <div class="slide1"><div class="cont"></div></div>
    <div class="slide1"><div class="cont"></div></div>
    <div class="slide1"><div class="cont"></div></div>
    <div class="slide1"><div class="cont"></div></div>
    <div class="slide1"><div class="cont"></div></div>
    <div class="slide1"><div class="cont"></div></div>
    <div class="slide1"><div class="cont"></div></div>

</div>



<script type="text/javascript">
    $(document).ready(function(){
        $('.your-class').slick({
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            vertical: true,
            verticalSwiping: true,
            //variableWidth: true,
            //appendArrows: $(".button-before"),
    });
    });
</script>

</body>
</html>