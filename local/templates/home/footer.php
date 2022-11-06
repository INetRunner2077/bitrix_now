<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<footer class="site-footer">
      <div class="container">
        <div class="row">

            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/about_homespace.php"
                )
            );?>


            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "for",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "bottom_menu"
	),
	false
);?>




         

            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/follow_us.php"
                )
            );?>

          
        </div>



          <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/copyright.php"
              )
          );?>

      </div>
    </footer>

  </div>
<?php use Bitrix\Main\Page\Asset; ?>
 <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js"); ?>
 <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js"); ?>
 <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js"); ?>
 <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js"); ?>
 <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js"); ?>
 <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js"); ?>
 <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js"); ?>
 <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js"); ?>
 <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js"); ?>
 <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js"); ?>
 <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js"); ?>
 <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js"); ?>
 <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js"); ?>

    
  </body>
</html>