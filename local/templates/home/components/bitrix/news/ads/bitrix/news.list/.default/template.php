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

<div class="site-section site-section-sm bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="site-section-title">
                    <h2>New Properties for You</h2>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <? foreach($arResult["ITEMS"] as $arItem):?>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block">
                    <figure>
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid">
                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded"><?=$arItem['DISPLAY_PROPERTIES']['PRICE']['DISPLAY_VALUE'];?></span>
                            <h3 class="title"><?=$arItem["NAME"] ?></h3>
                            <p class="location">Воронеж</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong><?=$arItem['DISPLAY_PROPERTIES']['AREA']['DISPLAY_VALUE'];?>m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Beds:</span>
                                    <strong><?=$arItem['DISPLAY_PROPERTIES']['BEDS']['DISPLAY_VALUE'];?></strong>
                                </div>
                                <div class="col">
                                    <span>Baths:</span>
                                    <strong><?=$arItem['DISPLAY_PROPERTIES']['BATHS']['DISPLAY_VALUE'];?></strong>
                                </div>
                                <div class="col">
                                    <span>Garages:</span>
                                    <strong><?=$arItem['DISPLAY_PROPERTIES']['GARAGE']['DISPLAY_VALUE'];?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <? endforeach; ?>
        </div>

        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
            <br /><?=$arResult["NAV_STRING"]?>
        <?endif;?>

        

    </div>
</div>