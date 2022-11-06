<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(empty($arResult)) {
    return '';
}

$items = array();
foreach ($arResult as $item) {

    if($item == end($arResult)) {
        $items[] = '<strong class="text-white">' . htmlspecialchars($item['TITLE']) . '</strong>';
        $time =  htmlspecialchars($item['TITLE']);
    }
    else {

        $items[] = '<a href="'.$item['LINK'].'">'.htmlspecialchars($item['TITLE']).'</a>';
    }

}
$result = '<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('.SITE_TEMPLATE_PATH.'/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <h1 class="mb-2">'.$time.'</h1>' . implode('<span class="mx-2 text-white">&bullet;</span>', $items) . '</div>
        </div>
    </div>
</div>';

return $result;






?>




