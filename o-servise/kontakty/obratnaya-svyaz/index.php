<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");?>
    <div class="site-section">
	<div class="container">
		<div class="row">

            <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"feedback", 
	array(
		"EMAIL_TO" => "danildro1999@gmail.com",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NONE",
			1 => "NAME",
			2 => "EMAIL",
			3 => "MESSAGE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => "feedback"
	),
	false
);?>

			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
	)
);?>
		</div>
	</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>