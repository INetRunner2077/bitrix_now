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
<div class="site-blocks-cover overlay" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Property Details of</span>
                <h1 class="mb-2"><?=$arResult['NAME']?></h1>
                <p class="mb-5"><strong class="h2 text-success font-weight-bold"><?=$arResult['DISPLAY_PROPERTIES']['PRICE']['VALUE']?></strong></p>
            </div>
        </div>
    </div>
</div>

<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="margin-top: -150px;">
                <div class="mb-5">
                    <div class="slide-one-item home-slider owl-carousel">

                        <?  if($arResult["DISPLAY_PROPERTIES"]['GALLERY']['FILE_VALUE'] [1] == null && $arResult["DISPLAY_PROPERTIES"]['GALLERY']['FILE_VALUE'] ['SRC'] != null):?>

                            <div><img src="<?=$arResult["DISPLAY_PROPERTIES"]['GALLERY']['FILE_VALUE'] ['SRC']?>" alt="Image" class="img-fluid"></div>

                       <? elseif($arResult["DISPLAY_PROPERTIES"]['GALLERY']['FILE_VALUE'] [1] != null):?>

                        <?foreach($arResult["DISPLAY_PROPERTIES"]['GALLERY']['FILE_VALUE'] as $pid=>$arProperty):?>

                            <div><img src="<?=$arProperty['SRC']?>" alt="Image" class="img-fluid"></div>

                        <? endforeach?>

                        <? else: ?>

                            <div><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid"></div>

                        <? endif; ?>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <strong class="text-success h1 mb-3"><?=$arResult['DISPLAY_PROPERTIES']['PRICE']['VALUE']?> рублей</strong>
                        </div>
                        <div class="col-md-6">
                            <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number"><?=$arResult['DISPLAY_PROPERTIES']['BEDS']['VALUE']?> <sup>+</sup></span>

                                </li>
                                <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number"><?=$arResult['DISPLAY_PROPERTIES']['BATHS']['VALUE']?></span>

                                </li>
                                <li>
                                    <span class="property-specs">SQ FT</span>
                                    <span class="property-specs-number">7,000</span>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Home Type</span>
                            <strong class="d-block">Condo</strong>
                        </div>
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Year Built</span>
                            <strong class="d-block">2018</strong>
                        </div>
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text">Price/Sqft</span>
                            <strong class="d-block">$520</strong>
                        </div>
                    </div>
                    <h2 class="h4 text-black">More Info</h2>
                    <?=$arResult['DETAIL_TEXT']?>

                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="h4 text-black mb-3">Property Gallery</h2>
                        </div>

                        <?  if($arResult["DISPLAY_PROPERTIES"]['GALLERY']['FILE_VALUE'] [1] == null && $arResult["DISPLAY_PROPERTIES"]['GALLERY']['FILE_VALUE'] ['SRC'] != null): ?>

                            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <a href="<?=$arResult["DISPLAY_PROPERTIES"]['GALLERY']['FILE_VALUE'] ['SRC']?>" class="image-popup gal-item">
                                    <img src="<?=$arResult["DISPLAY_PROPERTIES"]['GALLERY']['FILE_VALUE'] ['SRC']?>" alt="Image" class="img-fluid">
                                </a>
                            </div>

                         <? elseif($arResult["DISPLAY_PROPERTIES"]['GALLERY']['FILE_VALUE'] [1] != null):?>

                        <?foreach($arResult["DISPLAY_PROPERTIES"]['GALLERY']['FILE_VALUE'] as $pid=>$arProperty):?>

                            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <a href="<?=$arProperty['SRC']?>" class="image-popup gal-item">
                                    <img src="<?=$arProperty['SRC']?>" alt="Image" class="img-fluid">
                                </a>
                            </div>

                           <? endforeach?>

                        <? else: ?>

                            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <a href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="image-popup gal-item">
                                    <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid">
                                </a>
                            </div>

                        <? endif; ?>
                    </div>


                    <? if($arResult["DISPLAY_PROPERTIES"]['DOP'] != null): ?>

                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="h4 text-black mb-3">Дополнительные материалы</h2>
                        </div>

                        <?  if($arResult["DISPLAY_PROPERTIES"]['DOP']['FILE_VALUE'] [1] == null): ?>

                            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <a href="<?=$arResult["DISPLAY_PROPERTIES"]['DOP']['FILE_VALUE'] ['SRC']?>" class="image-popup gal-item"><?=$arResult["DISPLAY_PROPERTIES"]['DOP']['FILE_VALUE'] ['ORIGINAL_NAME']?></a>
                            </div>

                        <? else:
                            ?>

                            <?foreach($arResult["DISPLAY_PROPERTIES"]['DOP']['FILE_VALUE'] as $pid=>$arProperty):?>

                            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <a href="<?=$arProperty['SRC']?>"> <?=$arProperty['ORIGINAL_NAME']?> </a>
                            </div>

                        <? endforeach?>
                        <? endif; ?>
                    </div>

                    <? endif; ?>


                    <? if($arResult["DISPLAY_PROPERTIES"]['LINK'] != null): ?>

                    <h2 class="h4 text-black">Ссылки</h2>
                    <?foreach($arResult["DISPLAY_PROPERTIES"]['LINK']['VALUE'] as $value):?>
                        <p> <a href="<?=$value?>"> <?= $value ?> </a> </p>
                    <? endforeach?>

                    <? endif; ?>

                </div>
            </div>
            <div class="col-lg-4 pl-md-5">

                <div class="bg-white widget border rounded">

                    <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
                    <form action="" class="form-contact-agent">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                        </div>
                    </form>
                </div>

                <div class="bg-white widget border rounded">
                    <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
                </div>

            </div>

        </div>
    </div>
</div>


