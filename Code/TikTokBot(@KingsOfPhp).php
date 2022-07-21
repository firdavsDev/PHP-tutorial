<?php
ob_start();
error_reporting(0);
/*
Ushbu TikTok Bot Kodi 31.12.2021 sanasida Sirojiddin Faxriddinov Tomonidan tarqatildi

Kod sotilmasin.
Manba: @KingsOfPhp 
Bizdan uzoqlashmang

*/
define('Sirojiddin','TOKEN');
$admin = "admin id";
$bot="bot user";

$db = mysqli_connect("localhost","BAZA USER","BAZA PASS","BAZA USER");

$XafaBolishYoq=mysqli_query($db," create table users(
id int(20) auto_increment primary key,
user_id varchar(100),
lang varchar(200)
)");
/*
Ushbu TikTok Bot Kodi 31.12.2021 sanasida Sirojiddin Faxriddinov Tomonidan tarqatildi

Kod sotilmasin.
Manba: @KingsOfPhp 
Bizdan uzoqlashmang

*/
if($XafaBolishYoq){
    echo "Ulandi!";
}else{
    echo "Ulanmadi $db->error";
}
function KingsOfPhp($method,$datas=[]){
$url = "https://api.telegram.org/bot".Sirojiddin."/$method";
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
/*
Ushbu TikTok Bot Kodi 31.12.2021 sanasida Sirojiddin Faxriddinov Tomonidan tarqatildi

Kod sotilmasin.
Manba: @KingsOfPhp 
Bizdan uzoqlashmang

*/
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$cid = $message->chat->id;
$chat_id = $message->chat->id;
$uid = $message->from->id;
$mid = $message->message_id;
$type = $message->chat->type;
$text = $message->text;
$name = $message->chat->first_name."  ".$message->chat->last_name;
$user = $message->chat->username;
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id;
$uid2 = $update->callback_query->from->id;
$mid2 = $update->callback_query->message->message_id;

/*
Ushbu TikTok Bot Kodi 31.12.2021 sanasida Sirojiddin Faxriddinov Tomonidan tarqatildi

Kod sotilmasin.
Manba: @KingsOfPhp 
Bizdan uzoqlashmang

*/


$result = mysqli_query($db,"SELECT * FROM users WHERE user_id = '$cid'");
    $row = mysqli_fetch_assoc($result);
$lang=$row["lang"];


$til = json_encode([
'inline_keyboard'=>[
[['text'=>"English 🏴󠁧󠁢󠁥󠁮󠁧󠁿",'callback_data'=>"lang_en"],['text'=>"Русский 🇷🇺",'callback_data'=>"lang_ru"]],
[['text'=>"O'zbekcha 🇺🇿",'callback_data'=>"lang_uz"],['text'=>"Türkçe 🇹🇷",'callback_data'=>"lang_turk"]],
]
]);


/*
Ushbu TikTok Bot Kodi 31.12.2021 sanasida Sirojiddin Faxriddinov Tomonidan tarqatildi

Kod sotilmasin.
Manba: @KingsOfPhp 
Bizdan uzoqlashmang

*/




if($type == "private"){
$result = mysqli_query($db, "SELECT * FROM users WHERE user_id = '$cid'");
$row = mysqli_fetch_assoc($result);
if($row){
}else{
mysqli_query($db, "INSERT INTO users(user_id, lang) VALUES ('$cid','NULL')");
}
}


/*
Ushbu TikTok Bot Kodi 31.12.2021 sanasida Sirojiddin Faxriddinov Tomonidan tarqatildi

Kod sotilmasin.
Manba: @KingsOfPhp 
Bizdan uzoqlashmang

*/



if($text == "/start" and $type == "private"){ 
if($lang ==null){
	KingsOfPhp('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>🇷🇺 Выберите язык
🏴󠁧󠁢󠁥󠁮󠁧󠁿 Choose language
🇺🇿 Tilni tanlang
🇹🇷 Bir dil seç</b>",
	'parse_mode'=>"html",
	'reply_markup'=>$til,
]);
exit();
}elseif($lang == "uz"){
	KingsOfPhp('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Salom, ushbu bot TikTok va Likee dan videoni suv belgisiz va audio holda yuklab olishi mumkin. Boshlash uchun video yoki audio havolani yuboring.</b>",
	'parse_mode'=>"html",
]);
exit();
}elseif($lang == "ru"){
	KingsOfPhp('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Привет, этот бот может скачивать видео без водяного знака с TikTok. Для начала, отправь ссылку на видео.</b>",
	'parse_mode'=>"html",
	'disable_web_page_preview'=>true,
]);
exit();
}elseif($lang == "turk"){
	KingsOfPhp('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Merhaba, bu bot TikTok'tan filigran ve ses olmadan video indirebilir. Başlamak için bir video veya ses bağlantısı gönderin.</b>",
	'parse_mode'=>"html",
	'disable_web_page_preview'=>true,
]);
exit();
}elseif($lang == "en"){
	KingsOfPhp('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Hello, this bot can download videos without watermark and audios from TikTok . Just send link to video or audio.</b>",
	'parse_mode'=>"html",
	'disable_web_page_preview'=>true,
]);
exit();
}
}
/*
Ushbu TikTok Bot Kodi 31.12.2021 sanasida Sirojiddin Faxriddinov Tomonidan tarqatildi

Kod sotilmasin.
Manba: @KingsOfPhp 
Bizdan uzoqlashmang

*/

if($text=="/language" and $type == "private"){
KingsOfPhp('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>🇷🇺 Выберите язык
🏴󠁧󠁢󠁥󠁮󠁧󠁿 Choose language
🇺🇿 Tilni tanlang
🇹🇷 Bir dil seç</b>",
	'parse_mode'=>"html",
	'reply_markup'=>$til,
]);
exit();
}
/*
Ushbu TikTok Bot Kodi 31.12.2021 sanasida Sirojiddin Faxriddinov Tomonidan tarqatildi

Kod sotilmasin.
Manba: @KingsOfPhp 
Bizdan uzoqlashmang

*/
if(mb_stripos($data,"lang")!==false){
$lang=explode("_",$data)[1];
mysqli_query($db, "UPDATE users SET lang='$lang' WHERE user_id='$uid2'");
bot('deleteMessage',[
'chat_id'=>$cid2,'message_id'=>$mid2,
]);
if($lang == "uz"){
	KingsOfPhp('sendmessage',[
	'chat_id'=>$cid2,
	'text'=>"<b>Salom, ushbu bot TikTok va Likee dan videoni suv belgisiz va audio holda yuklab olishi mumkin. Boshlash uchun video yoki audio havolani yuboring.</b>",
	'parse_mode'=>"html",
'disable_web_page_preview'=>true,
]);
exit();
}elseif($lang == "ru"){
	KingsOfPhp('sendmessage',[
	'chat_id'=>$cid2,
	'text'=>"<b>Привет, этот бот может скачивать видео без водяного знака с TikTok. Для начала, отправь ссылку на видео.</b>",
	'parse_mode'=>"html",
	'disable_web_page_preview'=>true,
]);
exit();
}elseif($lang == "turk"){
	KingsOfPhp('sendmessage',[
	'chat_id'=>$cid2,
	'text'=>"<b>Merhaba, bu bot TikTok'tan filigran ve ses olmadan video indirebilir. Başlamak için bir video veya ses bağlantısı gönderin.</b>",
	'parse_mode'=>"html",
	'disable_web_page_preview'=>true,
]);
exit();
}elseif($lang == "en"){
	KingsOfPhp('sendmessage',[
	'chat_id'=>$cid2,
	'text'=>"<b>Hello, this bot can download videos without watermark and audios from TikTok . Just send link to video or audio.</b>",
	'parse_mode'=>"html",
	'disable_web_page_preview'=>true,
]);
exit();
}
}

/*
Ushbu TikTok Bot Kodi 31.12.2021 sanasida Sirojiddin Faxriddinov Tomonidan tarqatildi

Kod sotilmasin.
Manba: @KingsOfPhp 
Bizdan uzoqlashmang

*/


if(mb_stripos($text,"vm.tiktok.com/")!==false){
$info=str_replace("uz","Iltimos kuting...",$lang);
$info=str_replace("ru","Пожалуйста подождите...",$info);
$info=str_replace("en","Wait, please ...",$info);
$info=str_replace("turk","Lütfen bekle...",$info);
$wait=KingsOfPhp('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>".$info."</b>",
	'parse_mode'=>"html",
	'disable_web_page_preview'=>true,
])->result->message_id;
$videou=file_get_contents("https://api.uzxost.ru/down_allbot/tiktok.php?url=".$text);
$info1=str_replace("uz","Yuklab olindi @$bot",$lang);
$info1=str_replace("ru","Скачано с @$bot",$info1);
$info1=str_replace("en","Downloaded @$bot",$info1);
$info1=str_replace("turk","İndirildi @$bot",$info1);
KingsOfPhp('sendvideo',[
'chat_id'=>$cid,
'video'=>$videou,
'caption'=>" <b>$text

$info1</b>",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
]);
KingsOfPhp('deleteMessage',[
'chat_id'=>$cid,'message_id'=>$wait,
]);
}

/*
Ushbu TikTok Bot Kodi 31.12.2021 sanasida Sirojiddin Faxriddinov Tomonidan tarqatildi

Kod sotilmasin.
Manba: @KingsOfPhp 
Bizdan uzoqlashmang

*/

if($text){
if($text!="/start" and $text!="/language"){
if(mb_stripos($text,"tiktok.com/")!==false){
}else{
$result = mysqli_query($db,"SELECT * FROM users WHERE user_id = '$uid'");
    $row = mysqli_fetch_assoc($result);
$lang=$row["lang"];
if($lang=="en"){
$text1="Invalid link, please submit the correct link. 
Example: https://vm.tiktok.com/XXXXXXX/";
}elseif($lang=="uz"){
$text1="Havola noto‘g‘ri, to‘g‘ri havolani yuboring.

Misol: https://vm.tiktok.com/XXXXXXX/";
}elseif($lang=="ru"){
$text1="Неверная ссылка, пожалуйста, отправьте правильную ссылку. 
Пример: https://vm.tiktok.com/XXXXXXX/";
}elseif($lang=="turk"){
$text1="Bağlantı yanlış, lütfen doğru bağlantıyı gönderin.
Örneğin: https://vm.tiktok.com/XXXXXXX/";
}
KingsOfPhp('deleteMessage',['chat_id'=>$cid,'message_id'=>$mid]);
KingsOfPhp('sendMessage',[
'chat_id'=>$cid,
'text'=>$text1,
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
]);
}}}

/*
Ushbu TikTok Bot Kodi 31.12.2021 sanasida Sirojiddin Faxriddinov Tomonidan tarqatildi

Kod sotilmasin.
Manba: @KingsOfPhp 
Bizdan uzoqlashmang

*/








?>