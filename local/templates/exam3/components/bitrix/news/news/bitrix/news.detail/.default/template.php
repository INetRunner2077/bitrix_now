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
<?
if (isset($arResult["DETAIL_PICTURE"]["SRC"]))
  $img =   $arResult["DETAIL_PICTURE"]["SRC"];
else
    $img = SITE_TEMPLATE_PATH.'/img/no_photo.jpg';
    ?>


<hr>
<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
            <?=$arResult["DETAIL_TEXT"];?>
        </div>
        <div class="review-autor">
            <?= $arResult['NAME'] ?>, <?=$arResult["DISPLAY_ACTIVE_FROM"]?> г., <?=$arResult["DISPLAY_PROPERTIES"]['POSITION']['VALUE'] ?>, <?=$arResult["DISPLAY_PROPERTIES"]['COMPANY']['VALUE'] ?>.
        </div>
    </div>
    <div style="clear: both;" class="review-img-wrap"><img src="<?=$img?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"></div>
</div>

<? if($arResult['PROPERTIES']['FILE']['VALUE'] > 0): ?>

    <div class="exam-review-doc">
        <p>Документы:</p>

        <? if($arResult["DISPLAY_PROPERTIES"]['FILE']['FILE_VALUE']['SRC'] != null): ?>
            <div
                    class="exam-review-item-doc"><img class="rew-doc-ico" src="<?= SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png"><a href="<?=$arResult["DISPLAY_PROPERTIES"]['FILE']['FILE_VALUE']['SRC'];?>" download><?=$arResult["DISPLAY_PROPERTIES"]['FILE']['FILE_VALUE']['ORIGINAL_NAME']?></a>
            </div>

        <? else: ?>

            <?foreach($arResult["DISPLAY_PROPERTIES"]['FILE']['FILE_VALUE'] as $pid=>$arProperty):?>
                <div
                        ччс  class="exam-review-item-doc"><img class="rew-doc-ico" src="<?= SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png"><a href="<?=$arProperty['SRC'];?>" download><?=$arProperty['ORIGINAL_NAME']?></a>
                </div>

            <?endforeach?>

        <? endif; ?>



    </div>

<? endif; ?>


<hr>