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
$this->setFrameMode(true); ?>

<div class="slide-one-item home-slider owl-carousel">
        <? foreach($arResult["ITEMS"] as $arItem):?>
        <div class="site-blocks-cover" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="text">
                <h2><?=$arResult['DISPLAY_PROPERTIES']['PRICE']['DISPLAY_VALUE'];?></h2>
                <p class="location">
                    <span class="property-icon icon-room"></span> <?=$arItem["NAME"] ?>
                </p>
                <p class="mb-2">
                    <strong>Воронеж</strong>
                </p>
                <p class="mb-0">
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a>
                </p>
            </div>
        </div>
    <?  endforeach; ?>
    </div>


