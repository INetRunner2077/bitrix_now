<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth", Array(
	"FORGOT_PASSWORD_URL" => "/polzovatel/",	// Страница забытого пароля
		"PROFILE_URL" => "/polzovatel/profil.php",	// Страница профиля
		"REGISTER_URL" => "/polzovatel/registratsiya.php",	// Страница регистрации
		"SHOW_ERRORS" => "N",	// Показывать ошибки
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>