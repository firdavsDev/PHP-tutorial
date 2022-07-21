<?php
//Api tuzuvchi @KoDeNeT_Uz iltimos manbaga tegmang!!!
$soat=date("H:i",strtotime("2 hour"));
//Api tuzuvchi @KoDeNeT_Uz iltimos manbaga tegmang!!!
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2022"],["2020","2021","2022"],  $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1ʏᴀɴᴠᴀʀ​1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
//Api tuzuvchi @KoDeNeT_Uz iltimos manbaga tegmang!!!
$sana=date("d/m/Y",strtotime("2 hour"));
$site = file_get_contents("https://namozvaqti.uz/shahar/toshkent");
$ex1=explode("\n",$site);
//Api tuzuvchi @KoDeNeT_Uz iltimos manbaga tegmang!!!
$bomdod=str_replace('<p class="time" id="bomdod">',' ',$ex1[780]);  
$bomdod=str_replace('</p>',' ',$bomdod);
$bomdod = trim($bomdod);
//Api tuzuvchi @KoDeNeT_Uz iltimos manbaga tegmang!!!
$quyosh=str_replace('<p class="time" id="quyosh">',' ',$ex1[786]);  
$quyosh=str_replace('</p>',' ',$quyosh);
$quyosh = trim($quyosh);
//Api tuzuvchi @KoDeNeT_Uz iltimos manbaga tegmang!!!
$peshin=str_replace('<p class="time" id="peshin">',' ',$ex1[792]);  
$peshin=str_replace('</p>',' ',$peshin);
$peshin = trim($peshin);
//Api tuzuvchi @KoDeNeT_Uz iltimos manbaga tegmang!!!
$asr=str_replace('<p class="time" id="asr">',' ',$ex1[798]);  
$asr=str_replace('</p>',' ',$asr);
$asr = trim($asr);
//Api tuzuvchi @KoDeNeT_Uz iltimos manbaga tegmang!!!
$shom=str_replace('<p class="time" id="shom">',' ',$ex1[807]);  
$shom=str_replace('</p>',' ',$shom);
$shom = trim($shom);
//Api tuzuvchi @KoDeNeT_Uz iltimos manbaga tegmang!!!
$xufton=str_replace('<p class="time" id="hufton">',' ',$ex1[813]);  
$xufton=str_replace('</p>',' ',$xufton);
$xufton = trim($xufton);
echo "
🕌ʙᴜɢᴜɴɢɪ ɴᴀᴍᴏᴢ ᴠᴀǫᴛʟᴀʀɪ🕌<br>

🏙ʙᴏᴍᴅᴏᴅ ɴᴀᴍᴏᴢɪ: : $bomdod<br>
🌄ǫᴜʏᴏsʜ ᴄʜɪǫɪsʜɪ : $quyosh<br>
🌅ᴘᴇsʜɪɴ ɴᴀᴍᴏᴢɪ : $peshin<br>
🌆ᴀsʀ ɴᴀᴍᴏᴢɪ : $asr<br>
🌌sʜᴏᴍ ɴᴀᴍᴏᴢɪ : $shom<br>
🌃xᴜғᴛᴏɴ ɴᴀᴍᴏᴢɪ : $xufton<br><br>
📆2021 ʏɪʟ​ $d $oy<br><br>
🔖ɪᴢᴏʜ: ⏰ʙᴀʀᴄʜᴀ ᴠᴀǫᴛʟᴀʀ ᴛᴏsʜᴋᴇɴᴛ sʜᴀʜᴀʀ ᴍɪǫʏᴏsɪᴅᴀ ʙᴇʀɪʟɢᴀɴ!
";
//Api tuzuvchi @KoDeNeT_Uz iltimos manbaga tegmang!!!
       /*-------------------------------*/
/*-----------------------------------------------------*/
/*--------------Azizbek Komiljonov--------------------*/
/*---------------------------------------------------*/
       /*-------------------------------*/
?>