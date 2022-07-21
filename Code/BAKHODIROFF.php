<?php
ob_start();
define('API_KEY', 'TOKEN_ZONE');
$admin = "1694724656";


//  13.06.2021 | Soat : 15:40:33 da tarqatildi !

// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !

function bot($method,$datas=[])
{    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
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

$bakhodir_off = json_decode(file_get_contents('php://input'));
$okun=date("n");
$oynoms = "1Yanvar1 2Fevral2 3Mart3 4Aprel4 5May5 6Iyun6 7Iyul7 8Avgust8 9Sentabr9 10Oktabr10 11Noyabr11 12Dekabr12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$kun = date("d",strtotime("2 hour"));
$soat = date("H:i",strtotime("2 hour"));
$yil = date('Y',strtotime('2 hour'));
$message = $bakhodir_off->message;
$chat_id = $message->chat->id;
$mid = $message->message_id;
$bakhodiroff_uz = $message->text;
$user1 = $message->from->username;
$id = $message->from->id; //mana shu
$name = $message->from->first_name;
$last_name = $message->from->last_name;
$fadmin = $message->from->id;
$cty = $message->chat->type;

mkdir("BAKHODIROFF");
$step = file_get_contents("BAKHODIROFF/$chat_id.step");
$userlar=file_get_contents("BAKHODIROFF/userlar.txt");
$guruhlar=file_get_contents("BAKHODIROFF/guruhlar.txt");

if(isset($bakhodiroff_uz)){
if($cty == "group" or $cty == "supergroup"){
    if(stripos($guruhlar,"$chat_id")!==false){
    }else{
 file_put_contents("BAKHODIROFF/guruhlar.txt","$guruhlar\n$chat_id");
 }
  }else{
   if($cty =="private"){
   if(stripos($userlar,"$chat_id")!==false){
    }else{
 file_put_contents("BAKHODIROFF/userlar.txt","$userlar\n$chat_id");
   }
  }
}



// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !


$lang_menu=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🇷🇺Русский"],],
[['text'=>"🇺🇿O`zbekcha"],],
[['text'=>"🇺🇸English"]],
]
]);



// rus tili boshlanadi
if($bakhodiroff_uz=="/start" or $bakhodiroff_uz=="⚙️Sozlamalar" or $bakhodiroff_uz=="⚙Настройки"){
bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"

🇷🇺Выберите язык
--------
🇺🇿Tilni tanlang
--------
🇺🇸Choose language:

 ",'parse_mode'=>'html',
'reply_markup'=>$lang_menu,
]);
}

if($bakhodiroff_uz=="⚙Settings"){
bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"

🇷🇺Выберите язык
--------
🇺🇿Tilni tanlang
--------
🇺🇸Choose language:

 ",'parse_mode'=>'html',
'reply_markup'=>$lang_menu,
]);
}

if($bakhodiroff_uz=="🇷🇺Русский"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>Ассаламу алейкум !</b>

<i>В этом боте <a href="https://t.me/bakhodiroffuz">BAKHODIROFF</a>из можете посмотреть работы портфолио ! </i>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"📂Портфолио"]],
	[['text'=>"📑Биография"],['text'=>"📞Коммуникация"]],
	[['text'=>"⚙Настройки"]],
	]
	])
]);
} 



// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !


// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !

// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !


if($bakhodiroff_uz=="📂Портфолио"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'

<i>😉 Выберите нужный раздел : </i>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"🌎 Веб-сайт"],['text'=>"🤖 Бот"]],
		[['text'=>"🔙 Назад"]],
	]
	])
]);
}


if($bakhodiroff_uz=="🌎 Веб-сайт"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>Portfoliodagi Web-Sitelar : </b>

<b>1)<a href="https://bakhodiroff.uz">BakhodirOff.Uz</a></b> - <i>Портфолио Веб-сайт ; </i>

<b>2)<a href="https://terrabayt.ru">Terrabayt.Ru</a></b> - <i>Интернет-сайт технологических новостей ; </i>

<b>3)<a href="https://cloudhost.uz">CloudHost.Uz</a></b> - <i>Мобильный хостинг веб-сайта ; </i>

<b>4)<a href="https://farmuzon.uz">FarMuzOn.Uz</a></b> - <i>Почувствуйте музыкальный мир ; </i>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"🌎 Веб-сайт"],['text'=>"🤖 Бот"]],
		[['text'=>"🔙 Назад"]],
	]
	])
]);
}

if($bakhodiroff_uz=="🤖 Бот"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>Portfoliodagi Botlar : </b>

<b>1) @ITDarslari_Bot</b> - <i>Изучите ИТ сейчас легко ; </i>

<b>2) @UzPhotoPic_Bot</b> - <i>Мир цвета ; </i>

<b>3) @UzIslam_Bot</b> - <i>Собрание Коранических Сура ; </i>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"🌎 Веб-сайт"],['text'=>"🤖 Бот"]],
		[['text'=>"🔙 Назад"]],
	]
	])
]);
}



if($bakhodiroff_uz=="📑Биография"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>Bahodir Shavkatov</b>

<b>Любопытство:</b>  <i>Programming ;</i>
<b>Возраст:</b>  <i>16 ;</i>
<b>Направление:</b>  <i>Html & Css & Js & Php & MySql ;</i>
<b>Коммуникация:</b>  <i>996801822 ;</i>
<b>Email:</b>  <i>bakhodiroffuz@gmail.com ;</i>
<b>Резиденция:</b>  <i>Navoiy обл. Zarafshon гор ;</i>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"🔙 Назад"]],
	]
	])
]);
}



// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !

// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !

// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !


if($bakhodiroff_uz=="📞Коммуникация"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>Вы можете связаться с нами по следующим адресам :</b>

',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
		[['text' => "BAKHODIROFF",'url'=>"https://t.me/bakhodiroff"],['text' => "Kanal",'url'=>"https://t.me/terrabayt_ru"]],
	]
	])
]);
}



if($bakhodiroff_uz=="🔙 Назад"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>You are in the Main Menu !</b>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"📂Портфолио"]],
	[['text'=>"📑Биография"],['text'=>"📞Коммуникация"]],
	[['text'=>"⚙Настройки"]],
	]
	])
]);
}










// o`zbek tili boshlanadi:

if($bakhodiroff_uz=="🇺🇿O`zbekcha"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>Assalom Aleykum !</b>

<i>Ushbu botda <a href="https://t.me/bakhodiroffuz">BAKHODIROFF</a>ning Portfolio ishlarini ko`rishingiz mumkin ! </i>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"📂Portfolio"]],
	[['text'=>"📑Ma`lumot"],['text'=>"📞Bog`lanish"]],
	[['text'=>"⚙️Sozlamalar"]],
	]
	])
]);
} 

if($bakhodiroff_uz=="📂Portfolio"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'

<i>😉 Kerakli Bo`limni Tanlang : </i>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"🌎 Web-Site"],['text'=>"🤖 Bot"]],
		[['text'=>"🔙 Ortga"]],
	]
	])
]);
}
}

if($bakhodiroff_uz=="🌎 Web-Site"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>Portfoliodagi Web-Sitelar : </b>

<b>1)<a href="https://bakhodiroff.uz">BakhodirOff.Uz</a></b> - <i>Portfolio Web-Site ; </i>

<b>2)<a href="https://terrabayt.ru">Terrabayt.Ru</a></b> - <i>Texnologik Yangiliklar Web-Site ; </i>

<b>3)<a href="https://cloudhost.uz">CloudHost.Uz</a></b> - <i>Mobil Hosting Web-Site ; </i>

<b>4)<a href="https://farmuzon.uz">FarMuzOn.Uz</a></b> - <i>Musiqiy olamni his et ; </i>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"🌎 Web-Site"],['text'=>"🤖 Bot"]],
		[['text'=>"🔙 Ortga"]],
	]
	])
]);
}



// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !


// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !


// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !


if($bakhodiroff_uz=="🤖 Bot"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>Portfoliodagi Botlar : </b>

<b>1) @ITDarslari_Bot</b> - <i>Endilikda IT ni oson o`rganing ; </i>

<b>2) @UzPhotoPic_Bot</b> - <i>Rang-barang olam ; </i>

<b>3) @UzIslam_Bot</b> - <i>Qur`on Suralari To`plami ; </i>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"🌎 Web-Site"],['text'=>"🤖 Bot"]],
		[['text'=>"🔙 Ortga"]],
	]
	])
]);
}



if($bakhodiroff_uz=="📑Ma`lumot"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>Bahodir Shavkatov</b>

<b>Qiziqishi:</b>  <i>Dasturchilik ;</i>
<b>Yoshi:</b>  <i>16-yosh ;</i>
<b>Yo`nalishi:</b>  <i>Html & Css & Js & Php & MySql ;</i>
<b>Aloqa:</b>  <i>996801822 ;</i>
<b>Email:</b>  <i>bakhodiroffuz@gmail.com ;</i>
<b>Yashash Joyi:</b>  <i>Navoiy vil. Zarafshon shahri ;</i>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"🔙 Ortga"]],
	]
	])
]);
}


if($bakhodiroff_uz=="📞Bog`lanish"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>Biz bilan quyidagi manzillar orqali bog`lanishingiz mumkin :</b>

',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
		[['text' => "BAKHODIROFF",'url'=>"https://t.me/bakhodiroff"],['text' => "Kanal",'url'=>"https://t.me/terrabayt_ru"]],
	]
	])
]);
}


if($bakhodiroff_uz=="🔙 Ortga"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>Bosh Menyudasiz !</b>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"📂Portfolio"]],
	[['text'=>"📑Ma`lumot"],['text'=>"📞Bog`lanish"]],
	[['text'=>"⚙️Sozlamalar"]],
	]
	])
]);
}




// ingliz tili boshlanadi:
if($bakhodiroff_uz=="🇺🇸English"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>Hello !</b>

<i>In this bot <a href="https://t.me/bakhodiroffuz">BAKHODIROFF</a> of  can see the work of the portfolio ! </i>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"🧰Portfolio"]],
	[['text'=>"📑Biography"],['text'=>"📞Connection"]],
	[['text'=>"⚙Settings"]],
	]
	])
]);
} 

if($bakhodiroff_uz=="🧰Portfolio"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'

<i>😉 Select the desired section : </i>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"⚒ Web-Site"],['text'=>"🧳 Bot"]],
		[['text'=>"🔙 Back"]],
	]
	])
]);
}


if($bakhodiroff_uz=="⚒ Web-Site"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>Portfoliodagi Web-Sitelar : </b>

<b>1)<a href="https://bakhodiroff.uz">BakhodirOff.Uz</a></b> - <i>Portfolio Web-Site ; </i>

<b>2)<a href="https://terrabayt.ru">Terrabayt.Ru</a></b> - <i>Technological News Web-Site ; </i>

<b>3)<a href="https://cloudhost.uz">CloudHost.Uz</a></b> - <i>Mobile Hosting Web-Site ; </i>

<b>4)<a href="https://farmuzon.uz">FarMuzOn.Uz</a></b> - <i>Feel the music world ; </i>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"⚒ Web-Site"],['text'=>"🧳 Bot"]],
		[['text'=>"🔙 Back"]],
	]
	])
]);
}



// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !

// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !

// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !

if($bakhodiroff_uz=="🧳 Bot"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>Portfoliodagi Botlar : </b>

<b>1) @ITDarslari_Bot</b> - <i>Learn IT easily now ; </i>

<b>2) @UzPhotoPic_Bot</b> - <i>The world of color ; </i>

<b>3) @UzIslam_Bot</b> - <i>Collection of Qur`anic Surahs ; </i>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"⚒ Web-Site"],['text'=>"🧳 Bot"]],
		[['text'=>"🔙 Back"]],
	]
	])
]);
}



if($bakhodiroff_uz=="📑Biography"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>Bahodir Shavkatov</b>

<b>Curiosity:</b>  <i>Programming ;</i>
<b>Young:</b>  <i>16-young ;</i>
<b>Direction:</b>  <i>Html & Css & Js & Php & MySql ;</i>
<b>Communication:</b>  <i>996801822 ;</i>
<b>Email:</b>  <i>bakhodiroffuz@gmail.com ;</i>
<b>Residence:</b>  <i>Navoiy reg. Zarafshon city ;</i>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"🔙 Back"]],
	]
	])
]);
}


if($bakhodiroff_uz=="📞Connection"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>You can contact us at the following addresses :</b>

',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
		[['text' => "BAKHODIROFF",'url'=>"https://t.me/bakhodiroff"],['text' => "Kanal",'url'=>"https://t.me/terrabayt_ru"]],
	]
	])
]);
}

// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !

// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !


if($bakhodiroff_uz=="🔙 Back"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'
<b>You are in the Main Menu !</b>
',
'parse_mode' => 'html',
    'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
		'keyboard'=>[
	[['text'=>"🧰Portfolio"]],
	[['text'=>"📑Biography"],['text'=>"📞Connection"]],
	[['text'=>"⚙Settings"]],
	]
	])
]);
}


// admin panel 
if($bakhodiroff_uz=="/panel" && $chat_id==$admin){
 bot('SendMessage',[ 
 'chat_id'=>$chat_id,
  'text'=>"<b>😎 Akajon siz uchun buyruqlar tayyor :</b>

  <b>/send_user</b> - <i>Userlarga habar ; </i>
   <b>/send_gr</b> - <i>Guruhlarga habar ; </i>",
'parse_mode'=>"html",
  ]);
} 

if($bakhodiroff_uz =="/stat" && $chat_id==$admin){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
 bot('SendMessage',[ 
 'chat_id'=>$chat_id,
 'text'=>"

┌ <b>Robotimiz Natijasi</b>
├ <b>A'zolar Soni:</b> $us
├ <b>Guruhlar Soni:</b> $gr
├ <b>Hammasi Bo'lib:</b> $obsh
├ <b>Bugun:</b> $kun-$oy $yil-Yil
└ <b>Hozirgi Soat Millari:</b> $soat
",
 'parse_mode'=>"html",
  ]);
}

if($bakhodiroff_uz=="/send_user" && $chat_id==$admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"<b>🤠 Akajon, foydalanuvchilarga qanday buyrug`izni yetkazay :</b>",
'parse_mode'=>'html',
]);
file_put_contents("BAKHODIROFF/$chat_id.step","forward");
}

if($step=="forward" and $chat_id==$admin){
$idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
  $okuser=bot("forwardMessage",[
    'chat_id'=>$idlat,
   'from_chat_id'=>$admin,
    'message_id'=>$mid,
    ]);
}
if($okuser){
  bot("sendmessage",[
    'chat_id'=>$chat_id,
    'text'=>"<b>🤠 Akajon, bitta xam odam qolmadi xammasi xabarizni o`qidi ;</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$admin_panel,
]);
  unlink("BAKHODIROFF/$chat_id.step");
}
}


// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !

// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !

if($bakhodiroff_uz=="/send_gr" && $chat_id==$admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"<b>👮‍♀️ Akajon, guruhlarga nima gapizni yetkazay </b>",
'parse_mode'=>'html',
'reply_markup'=>$admin_panel,
]);
file_put_contents("BAKHODIROFF/$chat_id.step","grforward");
}

if($step=="grforward" and $chat_id==$admin){
$idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
  $grfor=bot("forwardMessage",[
    'chat_id'=>$idlat,
   'from_chat_id'=>$admin,
    'message_id'=>$mid,
    ]);
}
if($grfor){
  bot("sendmessage",[
    'chat_id'=>$chat_id,
    'text'=>"<b>☢️ Birorta guruh qolmadi xabarizni o`qimagan ;</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$admin_panel,
]);
unlink("BAKHODIROFF/$chat_id.step");
}
}

// Ushbu kod @BAKHODIROFF tomonidan @source_coders  kanalida tarqatildi !
// 3-ta xarf bo`lsang olaver manbaa ni !
// Manbaasiz ko`rmay boshqa kanallarda !


// Sizga foydasi tegadi degan umiddaman !


?>