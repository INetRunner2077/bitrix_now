<?
AddEventHandler("main", "OnAfterUserAdd", "OnAfterUserAddHandler");
define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/log.txt");
function OnAfterUserAddHandler($arFields)
{
    if($arFields["ID"] > 0)
    {
        AddMessage2Log($arFields);
        if($arFields["UF_BAZA"] == 1)  //Если поле UF_BAZA заполнено
        {
            $arGroups = CUser::GetUserGroup($arFields["ID"]);
            $arGroups[] = 7; //То добаляем пользователя в группу c ID15
            CUser::SetUserGroup($arFields["ID"], $arGroups);
        }
        if($arFields["UF_BAZA"] == 0)
        {
            $arGroups = CUser::GetUserGroup($arFields["ID"]);
            $arGroups[] = 6; //Иначе в группу c ID5
            CUser::SetUserGroup($arFields["ID"], $arGroups);
        }
    }
}


?>