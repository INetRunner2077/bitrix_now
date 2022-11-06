<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7">
                <div class="site-section-title text-center">
                    <h2>Our Agents</h2>
                </div>
            </div>
        </div>

        <div class="row block-13">
            <div class="nonloop-block-13 owl-carousel">
                <? foreach($arResult["ITEMS"] as $arItem):?>
                <div class="slide-item">
                    <div class="team-member text-center">
                        <img alt="Image" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4"><?=$arItem['NAME']?></h2>
                            <span class="d-block mb-3 text-white-opacity-05"><?=$arItem['DISPLAY_PROPERTIES']['ACTIVITY']['VALUE'];?></span>
                            <p class="mb-5">
                                <?=$arItem['DISPLAY_PROPERTIES']['DESCRIPTION']['VALUE'];?>
                            </p>
                            <p>
                                <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a> <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a> <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <?  endforeach; ?>
            </div>
        </div>
    </div>
</div>
