<?php
/*
 * Файл local/templates/.default/components/bitrix/system.pagenavigation/pager/template.php
 */
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$this->setFrameMode(true);

// ссылка на первую страницу
$firstPageUrl = $arResult['sUrlPath'];
if (!empty($arResult['NavQueryString'])) {
    $firstPageUrl = $firstPageUrl.'?'.$arResult['NavQueryString'];
}
// ссылка на последнюю страницу
$lastPageUrl = $arResult['sUrlPath'];
if (!empty($arResult['NavQueryString'])) {
    $lastPageUrl = $lastPageUrl.'?'.$arResult['NavQueryString']
        .'&amp;PAGEN_'.$arResult['NavNum'].'='.$arResult['NavPageCount'];
} else {
    $lastPageUrl = $lastPageUrl.'?PAGEN_'.$arResult['NavNum'].'='.$arResult['NavPageCount'];
}
?>

<div class="row">
    <div class="col-md-12 text-center">
        <div class="site-pagination">

    <? $mass = array(); ?>
    <?php for ($i = $arResult['nStartPage']; $i <= $arResult['nEndPage']; $i++): ?>
        <?php

        // ссылка на очередную страницу
        $pageUrl = $arResult['sUrlPath'];
        if (!empty($arResult['NavQueryString'])) {
            $pageUrl = $pageUrl.'?'.$arResult['NavQueryString'].'&amp;PAGEN_'.$arResult['NavNum'].'='.$i;
        } else {
            $pageUrl = $pageUrl.'?PAGEN_'.$arResult['NavNum'].'='.$i;
        }
        $mass[] = $i;
        ?>
        <?php if ($arResult['NavPageNomer'] == $i): /* если это текущая страница */ ?>

            <a class = 'active' href="#"><?= $i ?></a>

        <?php else: ?>

            <a href="<?= $pageUrl; ?>"><?= $i ?></a>
        <?php endif; ?>
    <?php endfor; ?>


            <?
            $href = true;
            foreach ($mass as $key => $value) {

             if( $value == $arResult['NavPageCount'])
             {
                 $href = false;
             }

            }
                ?>

            <? if($arResult['NavPageNomer'] != $arResult['NavPageCount'] && $href ): ?>
            <?php if ($arResult['NavPageNomer'] < $arResult['NavPageCount']): /* ссылка на последнюю страницу */ ?>
                <span>...</span>
                    <a href="<?= $lastPageUrl; ?>" title="Последняя"><?=$arResult['NavPageCount']?></a>

            <?php endif; ?>
               <? endif; ?>
        </div>
    </div>
</div>