<!DOCTYPE html>
<html lang="en" data-ng-app="website">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Дозор</title>
</head>
<style>
    @font-face {
        font-family: "RobotoLight";
        src: url("/dozor_fonts/RobotoLight/RobotoLight.eot");
        src: url("/dozor_fonts/RobotoLight/RobotoLight.eot?#iefix")format("embedded-opentype"),
        url("/dozor_fonts/RobotoLight/RobotoLight.woff") format("woff"),
        url("/dozor_fonts/RobotoLight/RobotoLight.ttf") format("truetype");
        font-style: normal;
        font-weight: normal;
    }
    @font-face {
        font-family: "RobotoRegular";
        src: url("/dozor_fonts/RobotoRegular/RobotoRegular.eot");
        src: url("/dozor_fonts/RobotoRegular/RobotoRegular.eot?#iefix")format("embedded-opentype"),
        url("/dozor_fonts/RobotoRegular/RobotoRegular.woff") format("woff"),
        url("/dozor_fonts/RobotoRegular/RobotoRegular.ttf") format("truetype");
        font-style: normal;
        font-weight: normal;
    }
    @font-face {
        font-family: "RobotoMedium";
        src: url("/dozor_fonts/RobotoMedium/RobotoMedium.eot");
        src: url("/dozor_fonts/RobotoMedium/RobotoMedium.eot?#iefix")format("embedded-opentype"),
        url("/dozor_fonts/RobotoMedium/RobotoMedium.woff") format("woff"),
        url("/dozor_fonts/RobotoMedium/RobotoMedium.ttf") format("truetype");
        font-style: normal;
        font-weight: normal;
    }
    body {
        margin: 0px;
    }
   .dozor-main-inner {
       /*margin-left: 12%;
       margin-right: 12%;
       border: 1px solid black;*/
       height: 100vh;
       background: #d9d9d9;
       font-family: "RobotoLight";
   }
    .col-left{
       width: 23%;
        display: inline-block;
        height: 100%;
        background: #003e63;
        float: left;
    }
    .col-left-logo {
       width: 100%;
        height: 140px;
        color: white;

        display: table;
    }
    .col-left-logo-inner-pre {
        display: inline-block;
    }
    .col-left-logo-inner {
       /*margin-top: 10px;
       margin-bottom: 10px;*/
       padding-left: 15%;
       padding-right: 15%;

       text-align: center;
       display: table-cell;
       vertical-align: middle;
       font-size: 40px;
   }

    .col-left-logo-text{
        border: 1px solid white;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    .col-left-menu{
        padding-right: 15%;
        font-family: "RobotoLight";
        font-style: semibold;
        font-size: 24px;
    }
    .menu-item-top{
        background: white;
        height: 60px;
        margin-top: 10px;
        //background: green;
        padding-left: 40px;
        padding-top: 10px;
        padding-bottom: 10px;
        color: #003e63;
    }
    .menu-item-top-top {
        margin-top: 0px;
    }
   .menu-item-top2{
       //background: #00a070;
       height: -webkit-fill-available;
   }
   .menu-item-top-inner {
        /*margin-top: 3px;
       margin-bottom: 3px;*/
      /* border: 1px solid #00a070;*/
       height: inherit;
       text-align: center;
       width: 100%;
       display: table;
       background: white;
   }
    .menu-item-top-inner-text{
        display: table-cell;
        vertical-align: middle;
    }
    .menu-item-indicator-cell{
        display: table-cell;
        vertical-align: middle;

    }
    .menu-item-indicator{
        height: 100%;
        float: right;
        width: 12px;
        float: right;
        padding-top: 8px;
        padding-bottom: 8px;
    }
    .menu-item-indicator-half {
        width: 100%;
        height: 50%;
        background: #00a070;
    }




    .menu-item-v1-top{

        height: 90px;
        //  margin-top: 10px;
        background: #003e63;
        padding-left: 15%;
       /* padding-top: 10px;
        padding-bottom: 10px;*/

    }
    .menu-item-v1-top2{
        height: 80px;

    //background: #00a070;
        color: #003e63;
        /*height: -webkit-fill-available;*/
    }
    .menu-item-v1-top-inner {
        /*margin-top: 3px;
       margin-bottom: 3px;*/
        /* border: 1px solid #00a070;*/
        height: inherit;
        text-align: center;
        width: 100%;
        display: table;
        background: #d9d9d9;
    }
    .menu-item-v1-top-inner-text{
        display: table-cell;
        vertical-align: middle;
    }
    .menu-item-v1-indicator-cell{
        display: table-cell;
        vertical-align: middle;
        width: 12px;

    }
    .menu-item-v1-indicator{
        height: 100%;
        float: right;
        width: 100%;
        float: right;
        padding-top: 18px;
        padding-bottom: 18px;
    }
    .menu-item-v1-indicator-half {
        width: 100%;
        height: 50%;
        background: #00a070;
    }




    .menu-item-sub {
        height: 70px;
        margin-left: 40px;
        color: #003e63;
        font-size: 18px;
    }
    .line-delimiter{
        height: 10px;
        background: white;
        margin-left: 48.5%;
        margin-right: 48.5%;
    }
    .menu-item-sub2 {
        height: 60px;
        background: lightgray;
        display: table;
        width: 100%;
    }
    .menu-item-sub-inner-text {
        display: table-cell;
        vertical-align: middle;
    }
   .cube-outer-left {
       width: 20%;
       float: left;
   }
   .cube-outer-right {
       width: 20%;
       float: right;
   }
    .cube-left {
        float: left;
        width: 20px;
        height: 20px;
        //background: red;

    }

    .menu-item-sub-indicator{
        height: 100%;
        float: right;
        width: 12px;
        float: right;
        padding-top: 8px;
        padding-bottom: 8px;
    }
    .menu-item-sub-indicator-half {
        width: 100%;
        height: 50%;
        background: #00a070;
    }

   .cube-right {
       float: right;
       width: 20px;
       height: 20px;
       background: #00a070;

   }
    .text-center {
        width: 60%;
        display: inline-block;
        text-align: center;
    }
    .col-right {
        width: 77%;
        display: block;
        height: 100%;
        vertical-align:top;
        float: right;
    }
    .col-right-inner{
        /*width: 100%;*/
    }
    .info-status-block {
        width: 100%;
        height: 140px;

    }
   .items-block {
       width: 100%;
       height: calc(100vh - 140px);
       font-size: 18px;
   }
    .item-engineering-complex {
        width: 32.7%;
        height: 100%;
        float: left;
        display: inline-block;
        /*padding-left: 10px;
        padding-right: 10px;*/
        padding-left: 3%;
        box-sizing: border-box;
        vertical-align:top;
    }
    .item-engineering-complex-inner {
        border: 1px solid black;
        height: 100%;
    }
    .item-engineering-complex-inner-title,
    .item-pt-tha1-inner-title {
        text-align: center;
        color: #003e63;
        font-size: 18px;
        padding-top: 5px;
        padding-bottom: 20px;
        height: 48px;
    }
    .item-pt-tha {
        width: 67.3%;
        height: 100%;
        display: inline-block;
        float: right;
        padding-left: 3%;
        padding-right: 3%;
        box-sizing: border-box;
        vertical-align:top;
    }
   .item-pt-tha1-inner {
       border: 1px solid black;
       height: 100%;

   }

    .col-right-item {
        width: 94%;
        height: 70px;
        padding-left: 3%;
        padding-right: 3%;
        margin-bottom: 10px;
   }
    .col-right-item-pic {
        width: 70px;
        float: left;
    }
    .col-right-item-pic-icon {
        float: left;
        //display: inline-block;
        height: 70px;
        width: 70px;
        background: #00a070;
        -webkit-border-radius: 35px;
        display: table;
        //width: 100%;
        text-align: center;
    }
    .col-right-item-pic-icon div {
        display: table-cell;
        vertical-align: middle;
    }
    .col-right-item-pic-icon img{
        max-width: 35px;
        max-height: 35px;
        vertical-align: middle;
        align-self: center;
    }

    .col-right-item-title {
        width: calc(100% - 70px);
        height: 70px;
        float: left;

        text-align: center;

    }
    .col-right-item-title-inner {
        float: right;
        background: #bfbfbf;
        width: 90%;
        display: table;
        font-weight: 500;
        height: 100%;
    }
    .col-right-item-title-inner div {

        display: table-cell;
        vertical-align: middle;

    }
    .col-right-item-pic-line {
        float: left;
        height: 70px;
        width: 10%;
        position: relative;
    }
    .col-right-item-pic-line div{
        height: 1px;
        position: absolute;
        top: 50%;
        background: #003e63;
        width: 100%;
    }

    .col-right-double {
        width: 100%;
        height: calc(100% - 73px);
    }
    .col-right-double-left {
        width: 50%;
        height: 100%;
        float: left;
        border-right: 1px solid black;
        box-sizing: border-box;
    }
    .col-right-double-right {
        width: 50%;
        height: 100%;
        float: right;
    }

    .col-right-double-left-item{
        width: 91%;
        height: 70px;
        padding-left: 3%;
        padding-right: 6%;
        margin-bottom: 10px;
    }

    .col-right-double-right-item{
        width: 91%;
        height: 70px;
        padding-left: 6%;
        padding-right: 3%;
        margin-bottom: 10px;
    }



    @media (max-width: 1400px) {
        .items-block {
            font-size: 16px;
        }
    }
    @media (max-width: 1280px) {
        .items-block {
            font-size: 15px;
        }
    }
    @media (max-width: 1024px) {
        .col-left-menu{
            font-size: 20px;
        }
        .items-block {
            font-size: 13px;
        }

        .col-right-item {
            width: 94%;
            height: 50px;
            padding-left: 3%;
            padding-right: 3%;
            margin-bottom: 10px;
        }
        .col-right-item-pic {
            width: 50px;
            float: left;
        }
        .col-right-item-pic-icon {
            float: left;
            height: 50px;
            width: 50px;
            background: #00a070;
            -webkit-border-radius: 25px;
            display: table;

            text-align: center;
        }
        .col-right-item-pic-icon div {
            display: table-cell;
            vertical-align: middle;
        }
        .col-right-item-pic-icon img{
            max-width: 25px;
            max-height: 25px;
            vertical-align: middle;
            align-self: center;
        }

        .col-right-item-title {
            width: calc(100% - 50px);
            height: 50px;
            float: left;

            text-align: center;

        }
        .col-right-item-title-inner {
            float: right;
            background: #bfbfbf;
            width: 90%;
            display: table;
            font-weight: 500;
            height: 100%;
        }
        .col-right-item-title-inner div {

            display: table-cell;
            vertical-align: middle;

        }
        .col-right-item-pic-line {
            float: left;
            height: 50px;
            width: 10%;
            position: relative;
        }
    }
</style>
<body>
<div class="dozor-main-inner">
    <div class="col-left">

        <div class="col-left-logo">
            <!--<div class="col-left-logo-inner-pre">-->
                <div class="col-left-logo-inner">
                    <div class="col-left-logo-text">
                        ДОЗОР
                    </div>
                </div>
            <!--</div>-->
        </div>

        <div class="col-left-menu">

            <div class="menu-item-top menu-item-top-top">
                <div class="menu-item-top2">
                    <div class="menu-item-top-inner">
                        <div class="menu-item-top-inner-text">
                            Инженерный<br>комплекс
                        </div>
                        <div class="menu-item-indicator-cell">
                            <div class="menu-item-indicator">
                                <div class="menu-item-indicator-half">
                                </div>
                                <div class="menu-item-indicator-half">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item-top">
                <div class="menu-item-top2">
                    <div class="menu-item-top-inner">
                        <div class="menu-item-top-inner-text">
                            THA - 1500
                        </div>
                        <div class="menu-item-indicator-cell">
                            <div class="menu-item-indicator">
                                <div class="menu-item-indicator-half">
                                </div>
                                <div class="menu-item-indicator-half">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="menu-item-top">
                <div class="menu-item-top2">
                    <div class="menu-item-top-inner">
                        <div class="menu-item-top-inner-text">
                            THA - 1500
                        </div>
                    </div>
                </div>
            </div>-->


            <div class="menu-item-v1-top">
                <div class="line-delimiter"></div>
                <div class="menu-item-v1-top2">
                    <div class="menu-item-v1-top-inner">
                        <div class="menu-item-v1-top-inner-text">
                            PT THA
                        </div>
                        <div class="menu-item-v1-indicator-cell">
                            <div class="menu-item-v1-indicator">
                                <div class="menu-item-v1-indicator-half">
                                </div>
                                <div class="menu-item-v1-indicator-half">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item-v1-top">
                <div class="line-delimiter"></div>
                <div class="menu-item-v1-top2">
                    <div class="menu-item-v1-top-inner">
                        <div class="menu-item-v1-top-inner-text">
                            Щитовая №2
                        </div>
                        <div class="menu-item-v1-indicator-cell">
                            <div class="menu-item-v1-indicator">
                                <div class="menu-item-v1-indicator-half">
                                </div>
                                <div class="menu-item-v1-indicator-half">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item-v1-top">
                <div class="line-delimiter"></div>
                <div class="menu-item-v1-top2">
                    <div class="menu-item-v1-top-inner">
                        <div class="menu-item-v1-top-inner-text">
                            Щитовая №3
                        </div>
                        <div class="menu-item-v1-indicator-cell">
                            <div class="menu-item-v1-indicator">
                                <div class="menu-item-v1-indicator-half">
                                </div>
                                <div class="menu-item-v1-indicator-half">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="menu-item-sub">
                <div class="line-delimiter"></div>
                <div class="menu-item-sub2"
                <div class="menu-item-sub-inner">
                    <div class="menu-item-sub-inner-text">
                        <div class="cube-outer-left">
                            <div class="cube-left"></div>
                        </div>
                        <div class="text-center">PT THA</div>

                        <div class="menu-item-sub-indicator">
                            <div class="menu-item-sub-indicator-half">
                            </div>
                            <div class="menu-item-sub-indicator-half">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-item-sub">
                <div class="line-delimiter"></div>
                <div class="menu-item-sub2"
                <div class="menu-item-sub-inner">
                    <div class="menu-item-sub-inner-text">
                        <div class="cube-outer-left">
                            <div class="cube-left"></div>
                        </div>
                        <div class="text-center">PT THA</div>

                        <div class="menu-item-sub-indicator">
                            <div class="menu-item-sub-indicator-half">
                            </div>
                            <div class="menu-item-sub-indicator-half">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-item-sub">
                <div class="line-delimiter"></div>
                <div class="menu-item-sub2"
                <div class="menu-item-sub-inner">
                    <div class="menu-item-sub-inner-text">
                        <div class="cube-outer-left">
                            <div class="cube-left"></div>
                        </div>
                        <div class="text-center">Щитовая №2</div>
                        <div class="cube-outer-right">
                            <div class="cube-right"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-item-sub">
                <div class="line-delimiter"></div>
                <div class="menu-item-sub2"
                <div class="menu-item-sub-inner">
                    <div class="menu-item-sub-inner-text">
                        <div class="cube-outer-left">
                            <div class="cube-left"></div>
                        </div>
                        <div class="text-center">Щитовая №3</div>
                        <div class="cube-outer-right">
                            <div class="cube-right"></div>
                        </div>
                    </div>
                </div>
            </div>-->

        </div>
    </div>
    <div class="col-right">
        <div class="col-right-inner">
            <div class="info-status-block">
            </div>
            <div class="items-block">
                <div class="item-engineering-complex">
                    <div class="item-engineering-complex-inner">
                        <div class="item-engineering-complex-inner-title">
                            Инженерный<br/>комплекс
                        </div>
                        <div class="col-right-item">
                            <div class="col-right-item-pic">
                                <div class="col-right-item-pic-icon">
                                    <div>
                                    <img src="/dozor_images/system_water.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-right-item-title">
                                <div class="col-right-item-pic-line">
                                    <div>
                                    </div>
                                </div>
                                <div class="col-right-item-title-inner">
                                    <div>
                                        Система<br/>ВОДОСНАБЖЕНИЯ
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-right-item">
                            <div class="col-right-item-pic">
                                <div class="col-right-item-pic-icon">
                                    <div>
                                        <img src="/dozor_images/system_energy.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-right-item-title">
                                <div class="col-right-item-pic-line">
                                    <div>
                                    </div>
                                </div>
                                <div class="col-right-item-title-inner">
                                    <div>
                                        Система<br/>ЭНЕРГОСНАБЖЕНИЯ
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-right-item">
                            <div class="col-right-item-pic">
                                <div class="col-right-item-pic-icon">
                                    <div>
                                        <img src="/dozor_images/system_fire_alarm.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-right-item-title">
                                <div class="col-right-item-pic-line">
                                    <div>
                                    </div>
                                </div>
                                <div class="col-right-item-title-inner">
                                    <div>
                                        Система<br/>ПОЖАРНОЙ<br/>СИГНАЛИЗАЦИИ
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-right-item">
                            <div class="col-right-item-pic">
                                <div class="col-right-item-pic-icon">
                                    <div>
                                        <img src="/dozor_images/system_conditioning.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-right-item-title">
                                <div class="col-right-item-pic-line">
                                    <div>
                                    </div>
                                </div>
                                <div class="col-right-item-title-inner">
                                    <div>
                                        Система<br/>КОНДИЦИОНИРОВАНИЯ
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-right-item">
                            <div class="col-right-item-pic">
                                <div class="col-right-item-pic-icon">
                                    <div>
                                        <img src="/dozor_images/system_fire_fighting.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-right-item-title">
                                <div class="col-right-item-pic-line">
                                    <div>
                                    </div>
                                </div>
                                <div class="col-right-item-title-inner">
                                    <div>
                                        Система<br/>ПОЖАРОТУШЕНИЯ
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-right-item">
                            <div class="col-right-item-pic">
                                <div class="col-right-item-pic-icon">
                                    <div>
                                        <img src="/dozor_images/system_supervision.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-right-item-title">
                                <div class="col-right-item-pic-line">
                                    <div>
                                    </div>
                                </div>
                                <div class="col-right-item-title-inner">
                                    <div>
                                        Система<br/>ВИДЕОНАБЛЮДЕНИЯ
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-right-item">
                            <div class="col-right-item-pic">
                                <div class="col-right-item-pic-icon">
                                    <div>
                                        <img src="/dozor_images/system_remote_access_control.png"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-right-item-title">
                                <div class="col-right-item-pic-line">
                                    <div>
                                    </div>
                                </div>
                                <div class="col-right-item-title-inner">
                                    <div>
                                        СКУД
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-pt-tha">
                    <div class="item-pt-tha1-inner">
                        <div class="item-pt-tha1-inner-title">
                            PT THA
                        </div>
                        <div class="col-right-double">
                            <div class="col-right-double-left">
                                <div class="col-right-double-left-inner">

                                    <div class="col-right-double-left-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_remote_access_control.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    СКУД
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-right-double-left-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_remote_access_control.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    СКУД
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-right-double-right">
                                <div class="col-right-double-left-inner">

                                    <div class="col-right-double-right-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_remote_access_control.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    СКУД
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-right-double-right-item">
                                        <div class="col-right-item-pic">
                                            <div class="col-right-item-pic-icon">
                                                <div>
                                                    <img src="/dozor_images/system_remote_access_control.png"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-right-item-title">
                                            <div class="col-right-item-pic-line">
                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-right-item-title-inner">
                                                <div>
                                                    СКУД
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</body>