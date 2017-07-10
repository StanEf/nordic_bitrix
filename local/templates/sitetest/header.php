<!DOCTYPE html>
<html lang="en" data-ng-app="website">

<head>
    <meta charset="utf-8">
    <title>Нордик инжиниринг</title>
    <?$APPLICATION->ShowHead()?>
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/img/f_logo.ico" type="image/x-icon">
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/styles.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/vendor/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/slider/css/slideshow.css">
    <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/slider/example.css">

    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--<link href='http://fonts.googleapis.com/css?family=Open Sans:300' rel='stylesheet' type='text/css'>-->
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/jquery-1.11.2.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/vendor/fancybox/jquery.fancybox.js"></script>

    <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/vendor/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/vendor/fancybox/jquery.easing.1.3.min.js"></script>
    <!--<script type="text/javascript" src="/fancybox/jquery.easing-1.4.pack.js"></script>
    <script type="text/javascript" src="/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>-->
   <!-- <link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />-->

</head>

<body>
<?$APPLICATION->ShowPanel();?>

<div class="all-screen">
    <div class="all-body">
        <div class="header-and-main">
            <div class="header-and-main-limited">
                <div class="header">

                    <div id="logo">
                        <a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.jpg" alt="Логотип" /></a>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "header",
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
                <div class="main" style="display: block;">
