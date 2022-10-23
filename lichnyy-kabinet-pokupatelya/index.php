<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет покупателя");
?><b style="color: #333333;">Личный кабинет покупателя<br>
 </b><br>
 <b style="color: #333333;"><?$APPLICATION->IncludeComponent(
	"bitrix:blog.user",
	"",
	Array(
		"BLOG_VAR" => "",
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
		"ID" => $id,
		"PAGE_VAR" => "",
		"PATH_TO_BLOG" => "",
		"PATH_TO_SEARCH" => "",
		"PATH_TO_USER" => "",
		"PATH_TO_USER_EDIT" => "",
		"SET_TITLE" => "Y",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USER_PROPERTY" => array(),
		"USER_VAR" => ""
	)
);?><br>
 </b><br>
 <b style="color: #333333;"><?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.form",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"PAGE" => "#SITE_DIR#about/subscr_edit.php",
		"SHOW_HIDDEN" => "N",
		"USE_PERSONALIZATION" => "Y"
	)
);?><br>
 </b><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>