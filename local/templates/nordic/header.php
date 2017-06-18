<!DOCTYPE html>
<html lang="en" data-ng-app="website">

<head>
    <meta charset="utf-8">
    <title>nordic</title>
    <?$APPLICATION->ShowHead()?>
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/img/f_logo.ico" type="image/x-icon">
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/styles.css" type="text/css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?$APPLICATION->ShowPanel();?>

<div class="all-screen">
    <div class="all-body">
        <div class="header-and-main">
            <div class="header-and-main-limited">
                <div class="header">

                    <div id="logo">
                        <a href="index.php"><img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png" alt="Логотип" /></a>
                    </div>
                    <div class="menu">
                        <ul style="margin-bottom: 0px;">

                            <li class="<?if($_SERVER['PHP_SELF'] == "/index.php"):?>menu-current<?endif;?>"><a href="/index.php">Главная</a></li>
                            <li class="<?if($_SERVER['PHP_SELF'] == "/contacts.php"):?>menu-current<?endif;?>"><a href="/contacts.php">Контакты</a></li>
                        </ul>
                    </div>
                    <div style="clear: both;"></div>
                    <div style="height: 13px; background-color:#105576;"></div>
                </div>
                <div class="main" style="display: block;">
