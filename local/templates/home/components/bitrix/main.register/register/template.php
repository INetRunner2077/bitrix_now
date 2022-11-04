<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if($arResult["SHOW_SMS_FIELD"] == true)
{
	CJSCore::Init('phone_auth');
}
?>

<div class="site-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-8 mb-5">

<?if($USER->IsAuthorized()):?>

<p><?echo GetMessage("MAIN_REGISTER_AUTH")?></p>

<?else:?>
<?
if (count($arResult["ERRORS"]) > 0):
	foreach ($arResult["ERRORS"] as $key => $error)
		if (intval($key) == 0 && $key !== 0)
			$arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;", $error);

	ShowError(implode("<br />", $arResult["ERRORS"]));


endif?>


<?if($arResult["SHOW_SMS_FIELD"] == false):?>

<form method="post" action="<?=POST_FORM_ACTION_URI?>" class="p-5 bg-white border" name="regform" enctype="multipart/form-data">
<?
if($arResult["BACKURL"] <> ''):
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
endif;
?>

	<thead>
		<tr>
			<td colspan="2"><b><?=GetMessage("AUTH_REGISTER")?></b></td>
		</tr>
	</thead>

<?foreach ($arResult["SHOW_FIELDS"] as $FIELD):?>
	<?if($FIELD == "AUTO_TIME_ZONE" && $arResult["TIME_ZONE_ENABLED"] == true):?>
		<tr>
			<td><?echo GetMessage("main_profile_time_zones_auto")?><?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><span class="starrequired">*</span><?endif?></td>
			<td>
				<select name="REGISTER[AUTO_TIME_ZONE]" onchange="this.form.elements['REGISTER[TIME_ZONE]'].disabled=(this.value != 'N')">
					<option value=""><?echo GetMessage("main_profile_time_zones_auto_def")?></option>
					<option value="Y"<?=$arResult["VALUES"][$FIELD] == "Y" ? " selected=\"selected\"" : ""?>><?echo GetMessage("main_profile_time_zones_auto_yes")?></option>
					<option value="N"<?=$arResult["VALUES"][$FIELD] == "N" ? " selected=\"selected\"" : ""?>><?echo GetMessage("main_profile_time_zones_auto_no")?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?echo GetMessage("main_profile_time_zones_zones")?></td>
			<td>
				<select name="REGISTER[TIME_ZONE]"<?if(!isset($_REQUEST["REGISTER"]["TIME_ZONE"])) echo 'disabled="disabled"'?>>
		<?foreach($arResult["TIME_ZONE_LIST"] as $tz=>$tz_name):?>
					<option value="<?=htmlspecialcharsbx($tz)?>"<?=$arResult["VALUES"]["TIME_ZONE"] == $tz ? " selected=\"selected\"" : ""?>><?=htmlspecialcharsbx($tz_name)?></option>
		<?endforeach?>
				</select>
			</td>
		</tr>
	<?else:?>
		<?
	switch ($FIELD)
	{
		case "PASSWORD":
			?>
            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Пароль*</label>
                    <input type="password" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" id="fullname" class="form-control bx-auth-inputl" placeholder="<?=$arResult["VALUES"][$FIELD]?>">
                </div>
            </div>
<?
			break;
		case "CONFIRM_PASSWORD":
			?>
            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Повторите пароль*</label>
                    <input  type="password" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" id="fullname" class="form-control" placeholder="<?=$arResult["VALUES"][$FIELD]?>">
                </div>
            </div>
            <?


			break;

		case "EMAIL":
			?>

            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Email*</label>
                    <input  type="text" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" id="fullname" class="form-control" placeholder="<?=$arResult["VALUES"][$FIELD]?>">
                </div>
            </div>

            <?
			break;

		case "LOGIN":
			?>
            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Логин*</label>
                    <input  type="text" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" id="fullname" class="form-control" placeholder="<?=$arResult["VALUES"][$FIELD]?>">
                </div>
            </div>
            <?

			break;

		default:
			if ($FIELD == "PERSONAL_BIRTHDAY"):?><small><?=$arResult["DATE_FORMAT"]?></small><br /><?endif;
			?><input size="30" type="text" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" /><?
				if ($FIELD == "PERSONAL_BIRTHDAY")
					$APPLICATION->IncludeComponent(
						'bitrix:main.calendar',
						'',
						array(
							'SHOW_INPUT' => 'N',
							'FORM_NAME' => 'regform',
							'INPUT_NAME' => 'REGISTER[PERSONAL_BIRTHDAY]',
							'SHOW_TIME' => 'N'
						),
						null,
						array("HIDE_ICONS"=>"Y")
					);
				?><?
	}?>
	<?endif?>
<?endforeach?>

<?// ********************* User properties ***************************************************?>
<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
	<tr><td colspan="2"><?=trim($arParams["USER_PROPERTY_NAME"]) <> '' ? $arParams["USER_PROPERTY_NAME"] : GetMessage("USER_TYPE_EDIT_TAB")?></td></tr>
	<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
	<tr><td><?=$arUserField["EDIT_FORM_LABEL"]?>:<?if ($arUserField["MANDATORY"]=="Y"):?><span class="starrequired">*</span><?endif;?></td><td>
			<?$APPLICATION->IncludeComponent(
				"bitrix:system.field.edit",
				$arUserField["USER_TYPE"]["USER_TYPE_ID"],
				array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField, "form_name" => "regform"), null, array("HIDE_ICONS"=>"Y"));?></td></tr>
	<?endforeach;?>
<?endif;?>
<?// ******************** /User properties ***************************************************?>
<?
/* CAPTCHA */
if ($arResult["USE_CAPTCHA"] == "Y")
{
	?>
		<tr>
			<td colspan="2"><b><?=GetMessage("REGISTER_CAPTCHA_TITLE")?></b></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
			</td>
		</tr>
		<tr>
			<td><?=GetMessage("REGISTER_CAPTCHA_PROMT")?>:<span class="starrequired">*</span></td>
			<td><input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" /></td>
		</tr>
	<?
}
/* !CAPTCHA */
?>

    <div class="row form-group">
        <div class="col-md-12">
            <input type="submit"  name="register_submit_button" value="<?=GetMessage("AUTH_REGISTER")?>" class="btn btn-primary  py-2 px-4 rounded-0">
        </div>
    </div>

</form>

<p><?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></p>

<?endif //$arResult["SHOW_SMS_FIELD"] == true ?>

<p><span class="starrequired">*</span><?=GetMessage("AUTH_REQ")?></p>

<?endif?>





           </div>
        </div>
    </div>
</div>