<?php

# Ushbu kod ni @Bordoniy tuzdi va @Personal_coders kanalida tarqatdi.


#===>[♡♡♡ALLAX♡♡♡]<===#
#===>[Tepada xudo ko'rib turibdi hammamizni iltimos tarqatsangiz manba bilan tarqating.]<===#
#===>[♡♡♡ALLAX♡♡♡]<===#

define("API_KEY","");
function put($fayl, $nima){
file_put_contents("$fayl", "$nima");
}
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
// Kodlovchi: @Bordoniy
$admin = "1112332213";
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$text = $message->text; 
$id = $message->from->id;
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$chatid = $update->callback_query->message->chat->id;
$nid = $update->callback_query->id;
$cty = $message->chat->type;
$userAPI = file_get_contents("user/user.list");
$scid = $update->message->text;
$cid = $update->message->chat->id;
if(isset($scid)){
$calc = urlencode($scid);
$url = file_get_contents("http://api.mathjs.org/v1/?expr=$calc");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"$url",
'parse_mode'=>"html",
]);
}
if(isset($scid)){
   $userAPI = file_get_contents("user/user.list");
   if(stripos($userAPI,"$cid")!==false){
    }else{
    file_put_contents("user/user.list","$userAPI\n$cid");
   }
  }
$ban = file_get_contents("ban/$cid.txt");
mkdir("ban");
$stp = file_get_contents("user/step");
mkdir("user");
$UZB = file_get_contents("user/UZB.txt");
$bot_version = file_get_contents("user/ADD1.txt");
if(!$bot_version){
$bot_version = "3.1";
};
$banAPI = file_get_contents("user/UZ_API.txt");
if(!$banAPI){
$banAPI = "Siz botdan bloklangansiz.";
};
$Qoida1 = file_get_contents("user/q1.txt");
$Qoida2 = file_get_contents("user/q2.txt");
$Qoida3 = file_get_contents("user/q3.txt");
if(!$Qoida1){
$Qoida1 = "`Hozircha qoida mavjud emas`";};
if(!$Qoida2){
$Qoida2 = "`Hozircha qoida mavjud emas`";};
if(!$Qoida3){
$Qoida3 = "`Hozircha qoida mavjud emas`";
};
$forward1 = file_get_contents("user/fwd.txt");
$xabarlar1 = file_get_contents("user/xbr.txt");

$www = file_get_contents("user/WWW.txt");
$xxx = file_get_contents("user/XXX.txt");

if(!$forward1){
$forward1= "Forward xabarlar tarixi topilmadi.";
};
if(!$xabarlar1){
$xabarlar1 = "Xabarlar tarixi topilmadi.";
};

$channel = file_get_contents("user/Channel.txt");

if(!$channel){
$channel= "[$channel]";
};
$menu1 = file_get_contents("user/k1.txt");
$menu2 = file_get_contents("user/k2.txt");
$menu3 = file_get_contents("user/k3.txt");
$menu4 = file_get_contents("user/k4.txt");
$menu5 = file_get_contents("user/k5.txt");
$menu6 = file_get_contents("user/k6.txt");

if(!$menu1){
$menu1 = "🔊 Ovozli habarlar";
};
if(!$menu2){
$menu2 = "🖨 Music habarlar";
};

$menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$menu1"],['text'=>"$menu2"],],
]
]);  
$meni = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$menu1"],['text'=>"$menu2"],],
[['text'=>"$menu3"],['text'=>"$menu4"],],
[['text'=>"ADMIN PANELI"],],
]
]);  
$qoyda = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"1⃣"],['text'=>"2⃣"],['text'=>"3⃣"],],
[['text'=>"Qoidalarni o'chirish"],['text'=>"⬅️ Orqaga qaytish"],],
]
]);
$PANEL = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Forward yuborish"],['text'=>"Xabar yuborish"],],
[['text'=>"New version"],['text'=>"Statistika"],],
[['text'=>"Botning kodi"],['text'=>"Bot version"],],
[['text'=>"Botni o'chirish"],['text'=>"Botni yoqish"],],
[['text'=>"Qoida qo'shish"],['text'=>"Bot qoidalari"],],
[['text'=>"Start habarlari"],['text'=>"Ban habarlari"],],
[['text'=>"Ban berish"],['text'=>"Bandan olish"],],
[['text'=>"Azoga forward"],['text'=>"Azoga habar"],],
[['text'=>"So'ngi forward"],['text'=>"So'ngi habar"],],
[['text'=>"Majburiy azolik"],['text'=>"Ulangan kanal"],],
[['text'=>"Userlar id raqami"],['text'=>"Guruhlar id raqami"],],
[['text'=>"Tugma sozlamasi"],['text'=>"tez kunda"],],
[['text'=>"⬅️ Orqaga qaytish"],],
]
]);  
$yuborish = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Xabarni yuborish"],['text'=>"⬅️ Orqaga qaytish"],],
]
]);
$yuborish1 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Forwardni yuborish"],['text'=>"⬅️ Orqaga qaytish"],],
]
]);
$kanal = bot('getChatmember',[
'chat_id'=>"@".$channel,
'user_id'=>$id,
 ]);
$kanals = bot('getChatmember',[
 'chat_id'=>"@".$channel,
 'user_id'=>$chatid,
 ]);  
$status = $kanal->result->status;
$status2 = $kanals->result->status;
if($data == "kanal" and $status2 != "left"){
$baza = file_get_contents("user/azo.dat");
if(mb_stripos($baza, $chatid) !== false){
}else{
file_put_contents("user/azo.dat", "$baza\n$chatid");
}
bot('Deletemessage',[   
'chat_id'=>$chatid,   
'parse_mode'=>'markdown',   
]);  
bot('sendmessage',[   
'chat_id'=>$chatid,   
'text'=>"Bosh menu",   
'parse_mode'=>'markdown',   
'reply_markup'=>$menu,
]);  
}elseif($data == "kanal" and $status2 == "left"){
bot('answercallbackquery', [
'callback_query_id'=>$update->callback_query->id,
'text'=>"Siz hali kanalga obuna bo'lmadingiz",
'show_alert'=>true
]);
}
$habar = file_get_contents("user/habar1.txt");
if(!$habar){
$habar = "🧩 *Assalomu alaykum botimizga xush kelibsiz.*

🔖 _Bizning bot orqali o'zingizning shaxsiy botingizni ochib olishingiz mumkin._";
};
if($status == "left"){
bot('sendMessage',[
'chat_id'=>$id,
'text'=>"Botdan foydalanish uchun kanalimizga obuna bo'lib tasdiqlash tugmasini bosing.",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'➕ A‘zo bo‘lish', 'url'=>"t.me/$channel"]],
[['text'=>"✅ Tasdiqlash", 'callback_data'=>"kanal"],],
]
]),
]);
}else{
if($text == "/start" or $text == "/Start" or $text == "⬅️ Orqaga qaytish" and $status2 != "left"){
if($UZB == "on" and $cid !=$admin and $ban==false){
$baza = file_get_contents("user/azo.dat");
if(mb_stripos($baza, $cid) !== false){
}else{
file_put_contents("user/azo.dat", "$baza\n$cid");
}
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$habar",
'parse_mode'=>'markdoWn',
'reply_markup'=>$menu,
]);
}
}}

if($text == "/start" or $text == "⬅️ Orqaga qaytish" or $text =="/Start"){
if($cid == $admin){
$baza = file_get_contents("user/azo.dat");
if(mb_stripos($baza, $cid) !== false){
}else{
file_put_contents("user/azo.dat", "$baza\n$cid");
}
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📢 *Bot buyruqlar toplami
/newpost - Obunachilarga xabar yuborish
/newforw - Obunachilarga forward yuborish
/subscribers - Qancha obunachi borligini ko'rish
/channels - Majburiy a'zolik kanalni ko'rish
/help - Barcha buyruqlar va admin paneli.*",
'parse_mode'=>'markdoWn',
'reply_markup'=>$meni,
]);
}
}
if($text=="ADMIN PANELI" or $text == "/help" and $cid == $admin){
 bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"📢 *Bot buyruqlar toplami
/newpost - Obunachilarga xabar yuborish
/newforw - Obunachilarga forward yuborish
/subscribers - Qancha obunachi borligini ko'rish
/channels - Majburiy a'zolik kanalni ko'rish
/help - Barcha buyruqlar va admin paneli.*",
'parse_mode'=>'markdoWn',
'reply_markup'=>$PANEL,
 ]);
 }
if($text == "Statistika" or $text == "/subscribers" and $cid == $admin){
$baza = file_get_contents("user/azo.dat");
$i_API = substr_count($baza,"\n");
     bot('sendMessage',[
     'chat_id'=>$cid,
     'text'=>"Bot foydalanuvchilari: $i_API",
     'parse_mode'=>'markdown',
     ]);
}
if($text == "Bot version"){
     bot('sendMessage',[
     'chat_id'=>$cid,
     'text'=>"$bot_version",
     'parse_mode'=>'markdown',
     ]);
}
$xabar = file_get_contents("send.txt");
if($text == "Forward yuborish" or $text == "/newforw"){
if($cid == $admin or $cid == $admin1){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Forward yuborish uchun xabaringizni kiriting.

Bekor qilish uchun /cancel ni bosing.*",
'parse_mode'=>"markdown",
]); file_put_contents("send.txt","user");
}}
if($xabar=="user"){
if($text=="/cancel"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bekor qilindi.",
'parse_mode'=>"html",
]);unlink("send.txt");
}else{
$lich = file_get_contents("user/azo.dat"); 
$azo = explode("\n",$lich);
foreach($azo as $azosend){
$send_API=bot("forwardMessage",[
'chat_id'=>$azosend,
'text'=>$text,
'message_id'=>$mid,
'from_chat_id'=>$cid,
'parse_mode'=>'html'
]);
}
}
}
if($send_API){
$noAPI = "0";
$lich = file_get_contents("user/azo.dat");
$sendsAPI=substr_count($lich,"\n");
bot("sendmessage",[
'chat_id'=>$cid,
'text'=>"<b>Forward tasdiqlandi.

Yuborildi: $sendsAPI
Yuborib bo'lmadi: $noAPI</b>",
'parse_mode'=>'html',
]);unlink("send.txt");
}
$xabar = file_get_contents("send.txt");
if($text == "Xabar yuborish" or $text == "/newpost"){
if($cid == $admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Xabar yuborish uchun xabaringizni kiriting.

Bekor qilish uchun /cancel ni bosing.*",
'parse_mode'=>"markdown",
]); file_put_contents("send.txt","SendAPI");
}}
if($xabar=="SendAPI"){
if($text=="/cancel"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bekor qilindi.",
'parse_mode'=>"html",
]);unlink("send.txt");
}else{
$lich = file_get_contents("user/azo.dat"); 
$azo = explode("\n",$lich);
foreach($azo as $azosend){
$send_AP=bot("sendMessage",[
'chat_id'=>$azosend,
'text'=>$text,
'message_id'=>$mid,
'from_chat_id'=>$cid,
'parse_mode'=>'html'
]);
}
}
}
if($send_AP){
$noAPI = "0";
$lich = file_get_contents("user/azo.dat");
$sendsAPI=substr_count($lich,"\n");
bot("sendmessage",[
'chat_id'=>$cid,
'text'=>"<b>Habaringiz tasdiqlandi.

Yuborildi: $sendsAPI
Yuborib bo'lmadi: $noAPI</b>",
'parse_mode'=>'html',
]);unlink("send.txt");
}
if($text=="Botning kodi" and $cid == $admin){
bot('sendDocument',[
'chat_id'=>"$admin",
'caption'=>"Botning $bot_version V kodi.",
'document'=>new CURLfile(__FILE__),
]);
}
if($text == "New version" and $cid == $admin){
		put("user/step","uzAPI");
	bot('sendMessage',[
	'chat_id'=>$cid,
        'text'=>"Botning xozirgi versiyasini yuboring.",
'parse_mode'=>"markdown",
     ]);	
}
if($stp == "uzAPI"){
if($text == "Bosh menyu"){
}else{
if($str == $str1){
put("user/ADD1.txt","$text");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bot versiyasi ro'yxtiga kiritildi.
----------------------------
1: $text",
'parse_mode'=>"markdown",
]);
unlink("user/step");
}
}
}
if($text=="Botni yoqish" and $cid == $admin){
file_put_contents("user/UZB.txt","on");
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"✅ Bot dam olish rejimidan chiqarildi.

🕖 24 soat ish faoliyatda bo'ladi.",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]);
}
if($text=="Botni o'chirish" and $cid == $admin){
file_put_contents("user/UZB.txt","off");
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"✅ Bot dam olish rejimiga tushirildi.",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]);
}
if($text and $UZB == "off" and $cid !=$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Bot admin tomonidan dam olish rejimiga tushirildi.

🕖 Tez orada ishga tushadi.",
'parse_mode'=>"markdown",
]);
}
if($text == "Bot qoidalari" and $cid == $admin){
bot('sendphoto',[
'chat_id'=>$cid,
'caption'=>"
------------------------------------------------
1. $Qoida1
------------------------------------------------
2. $Qoida2
------------------------------------------------
3. $Qoida3
------------------------------------------------",
'photo'=>"https://t.me/Bot_iSboti/54",
'parse_mode'=>'markdown',
]);
}
if($text=="Qoida qo'shish" and $cid == $admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Siz botda 3 ta qoida qo'shishingiz mumkin.",
'parse_mode'=>"markdown",
'reply_markup'=>$qoyda,
]);
}
if($text=="Qoidalarni o'chirish"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Qoidalarni o'chirish mumkin emas.",
'parse_mode'=>'markdown',
]);
}
if($text == "1⃣" and $cid == $admin){
put("user/step","qoyda1");
bot('sendMessage',[
	'chat_id'=>$cid,
        'text'=>"✅ Birinchi qoidani kiriting.

Eslatma: Qoidalar faqat yozuvda bo'lsin.",
'parse_mode'=>"markdown",
     ]);	
}
if($stp == "qoyda1"){
if($text == "Bosh menyu"){
}else{
if($str == $str1){
put("user/q1.txt","$text");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"📖 Birinchi qoida bazaga saqlandi.",
'parse_mode'=>"markdown",
]);
unlink("user/step");}}
}
if($text == "2⃣" and $cid == $admin){
put("user/step","qoyda2");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"✅ Ikkinchi qoidani kiriting.

Eslatma: Qoidalar faqat yozuvda bo'lsin.",
'parse_mode'=>"markdown",
     ]);	
}
if($stp == "qoyda2"){
if($tx == "Bosh menyu"){
}else{
if($str == $str1){
put("user/q2.txt","$text");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"📖 Ikkinchi qoida bazaga saqlandi.",
'parse_mode'=>"markdown",
]);
unlink("user/step");}}
}
if($text == "3⃣" and $cid == $admin){
		put("user/step","qoyda3");
	bot('sendMessage',[
	'chat_id'=>$cid,
        'text'=>"✅ Uchinchi qoidani kiriting.

Eslatma: Qoidalar faqat yozuvda bo'lsin.",
'parse_mode'=>"markdown",
     ]);	
}
if($stp == "qoyda3"){
if($text == "Bosh menyu"){
}else{
if($str == $str1){
put("user/q3.txt","$text");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"📖 Uchinchi qoida bazaga saqlandi.",
'parse_mode'=>"markdown",
]);
unlink("user/step");}}
}
if($text == "Start habarlari" && $cid == $admin){
		put("user/step","mess");
	bot('sendMessage',[
	'chat_id'=>$cid,
        'text'=>"Xabaringizni kiriting.",
'parse_mode'=>"markdown",
]);
}
if($stp == "mess"){
if($text == "⬅️ Orqaga qaytish"){
}else{
if($str == $str1){
put("user/habar1.txt","$text");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Xabaringiz saqalandi.",
'parse_mode'=>"markdown",
'reply_markup'=>$PANEL,
]);
unlink("user/step");
}
}
}
if($text == "Ban habarlari" && $cid == $admin){
		put("user/step","sAPI");
	bot('sendMessage',[
	'chat_id'=>$cid,
        'text'=>"Bloklash habaringizni kiriting.",
'parse_mode'=>"markdown",
]);
}
if($stp == "sAPI"){
if($text == "⬅️ Orqaga qaytish"){
}else{
if($str == $str1){
put("user/UZ_API.txt","$text");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bloklash habaringiz saqalandi.",
'parse_mode'=>"markdown",
'reply_markup'=>$PANEL,
]);
unlink("user/step");
}
}
}
if($text == "Ban berish" && $cid == $admin){
		put("user/step","mAPI");
	bot('sendMessage',[
	'chat_id'=>$cid,
        'text'=>"Bloklash uchun id raqam kiriting.",
'parse_mode'=>"markdown",
]);
}
if($stp == "mAPI"){
if($text == "⬅️ Orqaga qaytish"){
}else{
if($str == $str1){
file_put_contents("ban/$text.txt","ban");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Foydalanuvchi bloklandi.",
'parse_mode'=>"markdown",
'reply_markup'=>$PANEL,
]);
unlink("user/step");
}
}
}
if($text == "Bandan olish" && $cid == $admin){
		put("user/step","lAPI");
	bot('sendMessage',[
	'chat_id'=>$cid,
        'text'=>"Blokdan chiqarish uchun id raqam kiriting.",
'parse_mode'=>"markdown",
]);
}
if($stp == "lAPI"){
if($text == "⬅️ Orqaga qaytish"){
}else{
if($str == $str1){
unlink("ban/$text.txt");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Foydalanuvchi blokdan chiqarildi.",
'parse_mode'=>"markdown",
'reply_markup'=>$PANEL,
]);
unlink("user/step");
}
}
}
if($text and $ban==true){
bot('sendMessage',[
"chat_id"=>$cid,
"text"=>"$banAPI",
'reply_markup'=>json_encode([
'remove_keyboard'=>true,
]),
]);
}
if($text=="So'ngi forward" and $cid == $admin){
 bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"_______Forward xabarlar tarixi________\n1. $forward1",
 ]);
 }
if($text=="So'ngi habar" and $cid == $admin){
 bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"_______Send xabarlar tarixi________\n1. $xabarlar1",
 ]);
 }
if($text == "Azoga habar" and $cid == $admin){
put("user/step","change");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Xabar yubormoqchi bo'lgan foydalanuvchi id raqamini kiriting.",
'parse_mode'=>"markdown",
'reply_markup'=>$bekor,
]);
}
if($stp == "change"){
if($text == "Bosh menyu"){
}else{
if($str == $str1){
put("user/XXX.txt","$text");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Xabaringiz matnini kiriting.",
'parse_mode'=>"markdown",
'reply_markup'=>$bekor,
]);
put("user/step","click");
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Id raqami notog'ri kiritildi.",
'parse_mode'=>"markdown",
'reply_markup'=>$bekor,
]);
}
}
}
if($stp == "click"){
if($text == "Bosh menyu"){
}else{
if($str == $str1){
put("user/WWW.txt","$text");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Xabaringizni tekshirib xabarni yuborish tugmasini bosing.\n\n1-foydalanuvchi $xxx \n2-Yuboriladigan xabar $text",
'parse_mode'=>"markdown",
'reply_markup'=>$yuborish,
]);
unlink("user/step");
}
}}
if($text == "Xabarni yuborish" and $cid == $admin){
$www = file_get_contents("user/WWW.txt");
$xxx = file_get_contents("user/XXX.txt");
bot('sendmessage',[
'chat_id'=>$xxx,
'text'=>"$www",
'parse_mode'=>"markdown",
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Xabaringiz yuborildi.",
'parse_mode'=>"markdown",
'reply_markup'=>$meni,
]);
}
if($text == "Azoga forward" and $cid == $admin){
put("user/step","forwards");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Forward yubormoqchi bo'lgan foydalanuvchi id raqamini kiriting.",
'parse_mode'=>"markdown",
'reply_markup'=>$bekor,
]);
}
if($stp == "forwards"){
if($text == "Bosh menyu"){
}else{
if($str == $str1){
put("user/fwd.txt","$text");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Forwardingiz matnini kiriting.",
'parse_mode'=>"markdown",
'reply_markup'=>$bekor,
]);
put("user/step","texts");
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Id raqami notog'ri kiritildi.",
'parse_mode'=>"markdown",
'reply_markup'=>$bekor,
]);
}
}
}
if($stp == "texts"){
if($text == "Bosh menyu"){
}else{
if($str == $str1){
put("user/xbr.txt","$text");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Forwardingizni tekshirib xabarni yuborish tugmasini bosing.\n\n1-foydalanuvchi $xxx \n2-Yuboriladigan xabar $text",
'parse_mode'=>"markdown",
'reply_markup'=>$yuborish1,
]);
unlink("user/step");
}
}}
if($text == "Forwardni yuborish" and $cid == $admin){
$forward1 = file_get_contents("user/fwd.txt");
$xabarlar1 = file_get_contents("user/xbr.txt");
bot('sendmessage',[
'chat_id'=>$forward1,
'text'=>"$xabarlar1",
'parse_mode'=>"markdown",
]);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Forwardingiz yuborildi.",
'parse_mode'=>"markdown",
'reply_markup'=>$meni,
]);
}
if($text == "Ulangan kanal" or $text == "/channels" and $cid == $admin){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Ulangan kanal: [@$channel]",
'parse_mode'=>'markdown',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
              [['text'=>'Kanalga kirish','url'=>"t.me/$channel"]],
]
])
]);
}
if($text == "Majburiy azolik" and $cid == $admin){
		put("user/step","SAPI");
	bot('sendMessage',[
	'chat_id'=>$cid,
        'text'=>"Botga ulamoqchi bo'lgan kanal usernamesini @ qo'ymasdan yuboring.",
'parse_mode'=>"markdown",
     ]);	
}
if($stp == "SAPI"){
if($text == "Bosh menyu"){
}else{
if($str == $str1){
put("user/Channel.txt","$text");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Kanal ulandi majburiy azolik ishlashi uchun [@$text] kanaliga botimizni admin qiling.",
'parse_mode'=>"markdown",
]);
unlink("user/step");
}
}
}
if($text == "Userlar id raqami" and $cid ==$admin){
  bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>$userAPI,
  'parse_mode'=>'html',
]);
}
if($text == "Guruhlar id raqami" and $cid ==$admin){
  bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"Guruhlar topilmadi.",
  'parse_mode'=>'html',
]);
}
if($text == "$menu1" or $text == "$menu2"){
	bot('sendMessage',[
	'chat_id'=>$cid,
        'text'=>"<b>Natijalar 1-10 20 dan</b>

<b>1.</b> Mazzami sizlarga mazzami (5.8M 32k)
<b>2.</b> Kulishni udari (4.1M 22k)
<b>3.</b> Kecha ustimdan kulganlar (5.8M 17k)
<b>4.</b> Gucci Flip Flap O'zbekchasi (5.8M 900k)
<b>5.</b> Maqtov yorliq berilar (5.8M 2k)
<b>6.</b> Biz bilgandik kutgandik (5.8M 12k)
<b>7.</b> Yo'qoool (5.8M 3442k)
<b>8.</b> Uzr ketipqopt (5.8M 333k)
<b>9.</b> Assalomu alaykum (5.8M 38k)
<b>10.</b> Bo'ldi bas qil (2.6M 50k)",
'parse_mode'=>"html",
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'1','callback_data'=>'1'],['text'=>'2','callback_data'=>'2'],['text'=>'3','callback_data'=>'3'],['text'=>'4','callback_data'=>'4'],['text'=>'5','callback_data'=>'5']],
[['text'=>'6','callback_data'=>'6'],['text'=>'7','callback_data'=>'7'],['text'=>'8','callback_data'=>'8'],['text'=>'9','callback_data'=>'9'],['text'=>'10','callback_data'=>'10']],
[['text'=>'⬅️','callback_data'=>'boshi'],['text'=>'❌','callback_data'=>'net'],['text'=>'➡️','callback_data'=>'oldiga'],],
]
]),
]);
}
if($data=="oldiga"){
bot('editMessageText',[
'chat_id'=>$callcid,
'text'=>"<b>Natijalar 10-20 20 dan</b>

<b>1.</b>Tarqal tarqal (5.8M 3k)
<b>2.</b> Indan keyinchi (4.1M 229k)
<b>3.</b> Bayraming bilan megajin (5.8M 7k)
<b>4.</b> Aka yozme qo'yoring (5.8M 9k)
<b>5.</b> Pulni kuchi hammasi (5.8M 2k)
<b>6.</b> Erkak erkaak (5.8M 1m)
<b>7.</b> Dalbayoop (5.8M 3442k)
<b>8.</b> Bir qarich til kerakmi (5.8M 333k)
<b>9.</b> Futbol tamom bugundan (5.8M 38k)
<b>10.</b> Menga qara tasqara (2.6M 50k)",
'parse_mode'=>"html",
'message_id'=>$callmid,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'1','callback_data'=>'11'],['text'=>'2','callback_data'=>'12'],['text'=>'3','callback_data'=>'13'],['text'=>'4','callback_data'=>'14'],['text'=>'5','callback_data'=>'15']],
[['text'=>'6','callback_data'=>'16'],['text'=>'7','callback_data'=>'17'],['text'=>'8','callback_data'=>'18'],['text'=>'9','callback_data'=>'19'],['text'=>'10','callback_data'=>'20']],
[['text'=>'⬅️','callback_data'=>"vkmuz"],['text'=>'❌','callback_data'=>'net'],['text'=>'➡️','callback_data'=>"tamom"],],
]
]),
]);
}
if($data=="vkmuz"){
bot('editMessageText',[
'chat_id'=>$callcid,
'text'=>"<b>Natijalar 1-10 20 dan</b>

<b>1.</b> Mazzami sizlarga mazzami (5.8M 32k)
<b>2.</b> Kulishni udari (4.1M 22k)
<b>3.</b> Kecha ustimdan kulganlar (5.8M 17k)
<b>4.</b> Gucci Flip Flap O'zbekchasi (5.8M 900k)
<b>5.</b> Maqtov yorliq berilar (5.8M 2k)
<b>6.</b> Biz bilgandik kutgandik (5.8M 12k)
<b>7.</b> Yo'qoool (5.8M 3442k)
<b>8.</b> Uzr ketipqopt (5.8M 333k)
<b>9.</b> Assalomu alaykum (5.8M 38k)
<b>10.</b> Bo'ldi bas qil (2.6M 50k)",
'parse_mode'=>"html",
'message_id'=>$callmid,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'1','callback_data'=>'1'],['text'=>'2','callback_data'=>'2'],['text'=>'3','callback_data'=>'3'],['text'=>'4','callback_data'=>'4'],['text'=>'5','callback_data'=>'5']],
[['text'=>'6','callback_data'=>'6'],['text'=>'7','callback_data'=>'7'],['text'=>'8','callback_data'=>'8'],['text'=>'9','callback_data'=>'9'],['text'=>'10','callback_data'=>'10']],
[['text'=>'⬅️','callback_data'=>'boshi'],['text'=>'❌','callback_data'=>'net'],['text'=>'➡️','callback_data'=>'oldiga'],],
]
]),
]);
}
if($data=="boshi"){
bot('answercallbackquery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Siz bosh sahifadasiz.", 
'show_alert'=>false,
]);
}
if($data=="net"){
bot('deleteMessage',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
]);
}
if($data=="tamom"){
bot('answercallbackquery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"Boshqa topilmalar mavjud emas.", 
'show_alert'=>false,
]);
}
include ("API1.php"); // Qo'shiqlar ni $data ga o'ziz qo'shasiz
include ("API2.php");  // Qo'shiqlar ni $data ga o'ziz qo'shasiz