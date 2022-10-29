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

          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Buy</a></li>
                  <li><a href="#">Rent</a></li>
                  <li><a href="#">Properties</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Terms</a></li>
                </ul>
              </div>
            </div>


          </div>

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