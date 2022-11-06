<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>HomeSpace &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH ?>/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH ?>/fonts/flaticon/font/flaticon.css">
    <?php use Bitrix\Main\Page\Asset; ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/bootstrap.min.css"); ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/magnific-popup.css"); ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/jquery-ui.css"); ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/owl.carousel.min.css"); ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/owl.theme.default.min.css"); ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/bootstrap-datepicker.css"); ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/mediaelementplayer.css"); ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/animate.css"); ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/fl-bigmug-line.css"); ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/aos.css"); ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/style.css"); ?>

</head>
<body>
<?$APPLICATION->ShowHead();?>
<?$APPLICATION->ShowPanel()?>
<div class="site-loader"></div>



<?if($APPLICATION->GetCurPage()!='/'):?>
                    <?
                    $APPLICATION->IncludeComponent(
                        "bitrix:breadcrumb",
                        "breadcrumbs",
                        array(
                            "PATH" => "",
                            "SITE_ID" => "s1",
                            "START_FROM" => "0",
                            "COMPONENT_TEMPLATE" => "breadcrumbs"
                        ),
                        false
                    );?>
<?endif;?>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-md-6">
                    <p class="mb-0">
                        <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span class="d-none d-md-inline-block ml-2">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/phone.php"
                                    )
                                );?>
                            </span></a>
                        <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span class="d-none d-md-inline-block ml-2">
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/email.php"
                                    )
                                );?></span></a>
                    </p>
                </div>
                <div class="col-6 col-md-6 text-right">

                    <?
                    global $USER;
                    if ($USER->IsAuthorized()){

                        $groupID_pokup = 6; # ID группы покупателя
                        $groupID_prodav = 7; # ID группы продавца

                        if (in_array($groupID_pokup,$USER->GetUserGroupArray())){
                            echo '<h5> <a href="/lichnyy-kabinet-pokupatelya">'.$USER->GetLogin().'</a> </h5>';
                            ?>
                            <a href="/?logout=yes&<?=bitrix_sessid_get()?>">
                                Выйти
                            </a>
                           <?
                        }

                        if (in_array($groupID_prodav,$USER->GetUserGroupArray())){
                            echo '<h5> <a href="/lichnyy-kabinet-prodavtsa">'.$USER->GetLogin().'</a> </h5>';
                            ?>
                            <a href="/?logout=yes&<?=bitrix_sessid_get()?>">
                                Выйти
                            </a>
                            <?
                        }
                    }
                    else{
                        echo '<h4> <a href="/test.php">Войти</a> </h4>';
                    }
                    ?>

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/icons.php"
                        )
                    );?>
                </div>
            </div>
        </div>

    </div>

    <div class="site-navbar">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-8 col-md-8 col-lg-4">
                    <h1 class=""><a href="/" class="h5 text-uppercase text-black"><strong>HomeSpace<span class="text-danger">.</span></strong></a></h1>
                </div>
                <div class="col-4 col-md-4 col-lg-8">
                    <nav class="site-navigation text-right text-md-right" role="navigation">

                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                        <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
                            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                            "DELAY" => "N",	// Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "3",	// Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                            "ROOT_MENU_TYPE" => "for",	// Тип меню для первого уровня
                            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                            "COMPONENT_TEMPLATE" => "horizontal_multilevel"
                        ),
                            false
                        );?>

                    </nav>
                </div>
            </div>
        </div>
    </div>


</div>