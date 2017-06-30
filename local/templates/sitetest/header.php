<!DOCTYPE html>
<html lang="en" data-ng-app="website">

<head>
    <meta charset="utf-8">
    <title>nordic</title>
    <?$APPLICATION->ShowHead()?>
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/img/f_logo.ico" type="image/x-icon">
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/styles.css" type="text/css" rel="stylesheet" />

<!--для подключения карусели слайдера-->
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/slider/css/slideshow.css">
    <link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/slider/example.css">

    <!--<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
    <script src="<?/*= SITE_TEMPLATE_PATH */?>/slider/js/gallery.js"></script>
    <script type="text/javascript"></script>-->
</head>

<body>
<?$APPLICATION->ShowPanel();?>

<div class="all-screen">
    <div class="all-body">
        <div class="header-and-main">
            <div class="header-and-main-limited">
                <div class="header">

                    <div id="logo">
                        <a href="index.php"><img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.jpg" alt="Логотип" /></a>
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
