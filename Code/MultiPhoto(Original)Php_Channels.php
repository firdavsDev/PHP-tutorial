<?php
//Ushbu kod @UzPhpCoder @php_channels va @KingsOfPhp kanalari orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani

$admin = '863358902'; // Admin ID
$token = '1196932721:AAF2RmPOqEUii6cGH3wPQJRjY0sAIuANghc';  //Bot token
$userR = "UzCoder_Cik"; //admin user
$kanalimz ="@Php_Channels"; //kanal useri

function bot($method,$datas=[]){
global $token;
$url = "https://api.telegram.org/bot".$token."/".$method;
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

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$message = $update->message;
$cid = $message->chat->id;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$name = $message->chat->first_name;
$user1 = $message->from->username;
$tx = $message->text;
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$mes = $callback->message;
$mid = $mes->message_id;
$cmtx = $mes->text;
$mmid = $callback->inline_message_id;
$idd = $callback->message->chat->id;
$cbid = $callback->from->id;
$cbuser = $callback->from->username;
$data = $callback->data;
$ida = $callback->id;
$cqid = $update->callback_query->id;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;
$step = file_get_contents("step/$cid.step");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$bio = $messenge->from->about;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;

$photo = $message->photo;
$gif = $message->animation;
$video = $message->video;
$music = $message->audio;
$voice = $message->voice;
$sticker = $message->sticker;
$document = $message->document;
$for = $message->forward_from;
$forc = $message->forward_from_chat;
$name = $message->from->first_name;
$UzWebDev = file_get_contents("data/$from_id/ali.txt");
$Uzb = file_get_contents("data/$from_id/uzb.txt");
$Uzb1 = file_get_contents("data/$from_id/uzb1.txt");
$Uzb2 = file_get_contents("data/$from_id/uzb2.txt");
$Uzb3 = file_get_contents("data/$from_id/uzb3.txt");
$Uzb4 = file_get_contents("data/$from_id/uzb4.txt");
$Uzb5 = file_get_contents("data/$from_id/uzb5.txt");
$Uzb6 = file_get_contents("data/$from_id/uzb6.txt");
$Uzb7= file_get_contents("data/$from_id/uzb7.txt");
$Uzb8= file_get_contents("data/$from_id/uzb8.txt");
$Uzb9= file_get_contents("data/$from_id/uzb9.txt");
$Uzb10= file_get_contents("data/$from_id/uzb10.txt");
$Uzb11= file_get_contents("data/$from_id/uzb11.txt");
$Uzb12= file_get_contents("data/$from_id/uzb12.txt");
$Uzb13= file_get_contents("data/$from_id/uzb13.txt");
$Uzb14= file_get_contents("data/$from_id/uzb14.txt");
$Uzb15= file_get_contents("data/$from_id/uzb15.txt");
$Uzb16= file_get_contents("data/$from_id/uzb16.txt");
$Uzb17= file_get_contents("data/$from_id/uzb17.txt");
$Uzb18= file_get_contents("data/$from_id/uzb18.txt");
$Uzb19 = file_get_contents("data/$from_id/uzb19.txt");
$Uzb20 = file_get_contents("data/$from_id/uzb20.txt");
$Uzb21 = file_get_contents("data/$from_id/uzb21.txt");
$Uzb22 = file_get_contents("data/$from_id/uzb22.txt");
$Uzb23 = file_get_contents("data/$from_id/uzb23.txt");
$Uzb24 = file_get_contents("data/$from_id/uzb24.txt");
$Uzb25= file_get_contents("data/$from_id/uzb25.txt");
$Uzb26= file_get_contents("data/$from_id/uzb26.txt");
$Uzb27= file_get_contents("data/$from_id/uzb27.txt");
$Uzb28= file_get_contents("data/$from_id/uzb28.txt");
$to =  file_get_contents("data/$from_id/token.txt");
$url =  file_get_contents("data/$from_id/url.txt");

$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔄Restart🎯"]],
[['text'=>"📸Photo Bo'lim"],['text'=>"🗃Foydali Bo'lim"]],
[['text'=>"📅Ramazon Taqvimi"],['text'=>"📖Quron Haqida"]], 
[['text'=>"📡Kanallarimiz"],['text' =>"👨‍💻 Bot Yaratuvchi"]],
[['text'=>"🖊️Support🖋️"]],
]
]);

$fkey = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🎅Yangi Yil"],
['text'=>"📰Yangiliklar"],],
[['text'=>"🗞Fudbol yangiliklari⚽️"],],
[['text'=>"⛅Ob-havo🌧"],['text'=>"💱Valyuta kursi💲"],],
[['text'=>"💰Dollar Kursi"],['text'=>"🦠Covid-19"],],
[['text'=>"🔝Bosh menyu🔝"],]]
]);
$keyseis = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⭕Taklifim Bor"],],
[['text'=>"❓Savolim Bor"],['text'=>"➕Buyurtma Berish"],], 
[['text'=>"⭐Ishimizni Baholash"],['text'=>"🔝Bosh menyu🔝"],],
]
]);
$keys = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🤴Yigitlar uchun🤴"],['text'=>"👸Qizlar uchun👸"]],
[['text'=>"🕋Ramazon Tabrigi"],['text'=>"📷 Logo 🖼️"]],
[['text'=>"🏡Uyda Qoling"],['text'=>"🕋Juma Muborak"]],
[['text'=>"🔝Bosh menyu🔝"]],
]
]);
$key1 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"1️⃣"],['text'=>"2️⃣"],['text'=>"3️⃣"]],
[['text'=>"4️⃣"],['text'=>"5️⃣"],['text'=>"6️⃣"]],
[['text'=>"7️⃣"],['text'=>"8️⃣"],['text'=>"9️⃣"]],
[['text'=>"🔟"],['text'=>"1️⃣1️⃣"],['text'=>"1️⃣2️⃣"]],
[['text'=>"1️⃣3️⃣"],['text'=>"1️⃣4️⃣"]],
[['text'=>"⬅️Orqaga"],['text'=>"🏠Bosh Menu🏠"]], 
]
]);
$key2 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"1️⃣RASM"],['text'=>"2️⃣RASM"]],
 [['text' =>"3️⃣RASM"]],
[['text'=>"⬅️Orqaga"],['text'=>"🏠Bosh Menu🏠"]], 
]
]);
$keyaa2 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"1️⃣-STIL"],['text'=>"2️⃣-STIL"],],
[['text'=>"3️⃣-STIL"],['text'=>"4️⃣-STIL"],],
[['text'=>"5️⃣-STIL"],['text'=>"6️⃣-STIL"],],
[['text'=>"7️⃣-STIL"],['text'=>"8️⃣-STIL"],],
[['text'=>"9️⃣-STIL"],['text'=>"🔟-STIL"],],
[['text'=>"⬅️Orqaga"]]]
]);

$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📄Xabar Jo'natish"],],
[['text'=>"📊Statistika"],['text'=>"🗳Bot Kodi🗳"],],
[['text'=>"🚫Ban🚫"],['text'=>"🚫Bandan Olish✅"],],
[['text'=>"❇Userga Xabar❇"],],
[['text'=>"🔝Bosh menyu🔝"],],
]
]);

$havo = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⛅ Farg'ona"],['text'=>"⛅ Xiva"],],
 [['text'=>"⛅ Andijon"],['text'=>"⛅ Namangan"],],
 [['text'=>"⛅ Buxoro"],['text'=>"⛅ Guliston"],],
 [['text'=>"⛅ Jizzax"],['text'=>"⛅ Zarafshon"],],
 [['text'=>"⛅ Qarshi"],['text'=>"⛅ Navoiy"],],
 [['text'=>"⛅ Nukus"],['text'=>"⛅ Samarqand"],],
 [['text'=>"⛅ Termiz"],['text'=>"⛅ Urganch"],],
 [['text'=>"⛅ Toshkent"],],
[['text'=>"↩Orqaga↩"],['text'=>"🔝Bosh menyu🔝"],],
]
]);
//Ushbu kod @UzPhpCoder @php_channels va @KingsOfPhp kanalari orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani
$ret1 = bot("getChatMember",[
         "chat_id"=>"-1001376707209", // secretius
         "user_id"=>$uid
         ]);
     $ret2 = bot("getChatMember",[
         "chat_id"=>"-1001462392438", // shokvideo
         "user_id"=>$uid
         ]);
     $ret3 = bot("getChatMember",[
         "chat_id"=>"-1001199843939", // shokvideo
         "user_id"=>$uid
         ]);
$stat1 = $ret1->result->status;
$stat2 = $ret2->result->status;
$stat3 = $ret3->result->status;

         if(($stat1=="creator" or $stat1=="administrator" or $stat1=="member") and ($stat2=="creator" or $stat2=="administrator" or $stat2=="member") and ($stat3=="creator" or $stat3=="administrator" or $stat3=="member")){}else{
     bot("sendmessage",[
         "chat_id"=>$uid,
         "text"=>"<b>Quyidagi kanallarimizga obuna boʻling. A'zo bo'lib qayta /start bosing! Botni keyin toʻliq ishlatishingiz mumkin!</b>",
         'disable_web_page_preview'=>true,
         'parse_mode'=>'html',
         "reply_to_message_id"=>$mid,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"➕ Azo bo'lish","url"=>"https://t.me/PHP_Channels"],],
[["text"=>"➕ Azo bo'lish","url"=>"https://t.me/UzBizness_shop"],],
[["text"=>"➕ Azo bo'lish","url"=>"https://t.me/UzMegaXit"],],
]
]),
]); 
return false;
}



if($text=="1️⃣-STIL"){
file_put_contents("data/$from_id/uzb19.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb19 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/EPhoto360/?act=writeText&output=image&effect=https://en.ephoto360.com/paint-splatter-text-effect-338.html&text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb19.txt");
exit();
}
if($text=="2️⃣-STIL"){
file_put_contents("data/$from_id/uzb20.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb20 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/EPhoto360/?act=writeText&output=image&effect=https://en.ephoto360.com/paint-splatter-text-effect-84.html&text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb20.txt");
exit();
}
//Ushbu kod @UzPhpCoder @php_channels va @KingsOfPhp kanalari orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani
if($text=="3️⃣-STIL"){
file_put_contents("data/$from_id/uzb21.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb21 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/EPhoto360/?act=writeText&output=image&effect=https://en.ephoto360.com/paint-splatter-text-effect-438.html&text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb21.txt");
exit();
}
if($text=="4️⃣-STIL"){
file_put_contents("data/$from_id/uzb22.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb22 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/EPhoto360/?act=writeText&output=image&effect=https://en.ephoto360.com/paint-splatter-text-effect-72.html&text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb22.txt");
exit();
}
//Ushbu kod @UzPhpCoder @php_channels va @KingsOfPhp kanalari orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani
if($text=="5️⃣-STIL"){
file_put_contents("data/$from_id/uzb23.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb23 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/EPhoto360/?act=writeText&output=image&effect=https://en.ephoto360.com/paint-splatter-text-effect-208.html&text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb23.txt");
exit();
}
if($text=="6️⃣-STIL"){
file_put_contents("data/$from_id/uzb24.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb24 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/EPhoto360/?act=writeText&output=image&effect=https://en.ephoto360.com/paint-splatter-text-effect-180.html&text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb24.txt");
exit();
}
//Ushbu kod @UzPhpCoder @php_channels va @KingsOfPhp kanalari orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani
if($text=="7️⃣-STIL"){
file_put_contents("data/$from_id/uzb25.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb25 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/EPhoto360/?act=writeText&output=image&effect=https://en.ephoto360.com/paint-splatter-text-effect-347.html&text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb25.txt");
exit();
}
if($text=="8️⃣-STIL"){
file_put_contents("data/$from_id/uzb26.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb26 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/EPhoto360/?act=writeText&output=image&effect=https://en.ephoto360.com/paint-splatter-text-effect-108.html&text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb26.txt");
exit();
}
//Ushbu kod @UzPhpCoder @php_channels va @KingsOfPhp kanalari orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani
if($text=="9️⃣-STIL"){
file_put_contents("data/$from_id/uzb27.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb27 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/EPhoto360/?act=writeText&output=image&effect=https://en.ephoto360.com/paint-splatter-text-effect-212.html&text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb27.txt");
exit();
}
if($text=="🔟-STIL"){
file_put_contents("data/$from_id/uzb28.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb28 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/EPhoto360/?act=writeText&output=image&effect=https://en.ephoto360.com/paint-splatter-text-effect-122.html&text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb28.txt");
exit();
}

//Ushbu kod @UzPhpCoder @php_channels va @KingsOfPhp kanalari orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani


$DaMaS_BaSS = json_decode(file_get_contents('php://input'));
$AdvakatUz = $DaMaS_BaSS->message;
$cid = $AdvakatUz->chat->id;
$text=$AdvakatUz->text;
$type = $AdvakatUz->chat->type;
$reply = $AdvakatUz->reply_to_message->text;
$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);
 if($type=="private"){
if($text == "🚫Bandan Olish✅" and $cid==$admin){
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "🚫Blockdan Olinadigan 🆔️ni Yozing!" ,
       'parse_mode'=>'markdown',  
       'reply_markup' => $rpl,
       ]);
       }}
       if($reply == "🚫Blockdan Olinadigan 🆔️ni Yozing!"){  
$fayl = file_get_contents("block.db");
$fayl2 = "$text";
$fayl3 = str_replace($fayl2,"",$fayl);
file_put_contents("block.db","$fayl3");
$fayl = file_get_contents("block.db");
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "[$text](tg://user?id=$text)  Bandan olindi" ,
       'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
      ]); 
      bot('sendmessage', [
      'chat_id' =>$sd,
       'text' => "*Salom*  [$name](tg://user?id=$uid)  Sizga Xush Xabar Bor!
Siz [Adminimiz](tg://user?id=$admin) Tomonidan Bandan Olindingiz!
Endi Botni Ishlatishingiz mumkin!
Qayta /start Bosing!" ,
       'parse_mode'=>'markdown', 
       ]);
}



$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$bass = $message->text;
$uid = $message->from->id;
$reply = $message->reply_to_message->text;

$replymenu = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

$blocks=file_get_contents("block.db");
if(mb_stripos($blocks,"$uid")!==false){
bot('sendMessage', [
'chat_id'=>$cid,
'parse_mode'=>"html",
'text'=>"<b>🖐Salom <a href='tg:user?id=$cid'>$name</a> \nSiz ⛔️ Botimizdan foydalana olmaysiz, chunki Bot sizni bloklangan!!!\nBlokdan chiqish uchun ADMIN ga yozing! Blokdan chiqmaguncha bot siz uchun ishlamaydi!!!🚫!</b> " ,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Admin👨‍💻", "url"=>"https://t.me/UzPhpCoder"]],
]
])
]);return false;}

if($bass=="🚫Ban🚫"){
if($cid==$admin){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Ban Qilinadigan 🆔️ni Yuboring!",
'reply_markup'=>$replymenu,
]);//manbasiz korsam sikilasan
}
}
if($reply=="Ban Qilinadigan 🆔️ni Yuboring!"){
file_put_contents("block.db","$blocks\n$bass");
bot('SendMessage',[
   'chat_id'=>$admin,
        'text'=>"✅[$bass](tg://user?id=$bass) *Banlandi!*", 
        'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
        ]);//kodni manba bn ol inson bolsen
        bot('SendMessage',[
   'chat_id'=>$bass,
        'text'=>"<b>🚫😡Sizni ⛔bu botda bloklashdi🚫. Endi botimizdan foydalana olmaysiz!</b>", 
        'parse_mode'=>'html', 
        'reply_markup'=>json_encode([
'remove_keyboard'=>true,
]),
]);
}



if($text=="⬅️Orqaga⬅️"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Siz 📸Photo Bo'lim menyudasiz.</b>",
'parse_mode'=>'html',
'reply_markup'=>$keys
]);
}
if($text=="⬅️Orqaga"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Siz 📸Photo Bo'lim menyudasiz.</b>",
'parse_mode'=>'html',
'reply_markup'=>$keys
]);
}
if($text=="⬅️Orqaga↩"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Siz 📸Photo Bo'lim menyudasiz.</b>",
'parse_mode'=>'html',
'reply_markup'=>$key2
]);
}
if($tx == "🗳Bot Kodi🗳"){
if($cid == $admin){
bot('senddocument',[
'chat_id'=>$cid,
'document'=>new CURLfile(__FILE__),
]);
}
}
if($text=="📸Photo Bo'lim"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>🔳Rasm Yasash Bo'limiga 🍃Xush Kelibsiz Do'stm Siz qanday rasmga buyurtma bermoqchisiz?

➖➖➖➖➖➖➖➖➖➖
Iltimos turini tanlang!
🖤Dasturchi: @UzCoder_Cik</b>",
'parse_mode'=>'html',
'reply_markup'=>$keys
]);
}

if($text=="📷 Logo 🖼️"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>📷 Logo 🖼️ Yasash Bo'limiga 🍃Xush Kelibsiz!

➖➖➖➖➖➖➖➖➖➖
Iltimos turini tanlang!
🖤Dasturchi: @UzCoder_Cik</b>",
'parse_mode'=>'html',
'reply_markup'=>$keyaa2
]);
}
if($text=="🗃Foydali Bo'lim"){
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"
Assalomu Aleykum
 
🗃Foydali Bo'limga Xush Kelibsiz!",
'parse_mode'=>'markdown',
'reply_markup'=> $fkey,
     ]);
}
if($text=="🤴Yigitlar uchun🤴"){
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/ikandaroff/629",
'caption'=>"<b>🖤Dasturchi: @UzCoder_Cik 
O‘zingizga yoqqan rasmga ism yozish uchun bittasini tanlang☟ </b>",
'parse_mode'=>'html',
]);
}
if($text=="🤴Yigitlar uchun🤴"){
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/ikandaroff/628",
'caption'=>"<b>🖤Dasturchi: @UzCoder_Cik 
O‘zingizga yoqqan rasmga ism yozish uchun bittasini tanlang☟ </b>",
'parse_mode'=>'html',
'reply_markup'=>$key1
]);
}
if($text=="👸Qizlar uchun👸"){
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/ikandaroff/627",
'caption'=>"<b>🖤Dasturchi: @UzCoder_Cik
O‘zingizga yoqqan rasmga ism yozish uchun bittasini tanlang☟</b>",
'parse_mode'=>'html',
'reply_markup'=>$key2
]);
}
if($text == "🖊️Support🖋️"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<a href='tg:user?id=$cid'>$name</a> Assalomu Alaykum biz bilan aloqa qilmoqchimisiz? Yoki savoliz bormi, Biz barchasiga javob beramiz. Biz Haqimizda O'z Fikringizni Bildiring

Dasturchi👉 <a href = 'tg://user?id=863358902'>UzPhpCoder</a>

@Php_Channels - Dasturlashni Biz Bilan Birga O'rganing!",
'parse_mode'=>"html",
'reply_markup'=>$keyseis,
]);
}
//Dollar kursi
if($text=="💰Dollar Kursi"){
$kurs = file_get_contents("https://dollaruz.pw/");
$ex1=explode("\n",$kurs);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$tosholish=str_replace('<td class="ari-tbl-col-1 buy col_c4ca4238">',' ',$ex1[168]);  
$tosholish=str_replace('</td>',' ',$tosholish);
$tosholish = trim($tosholish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$toshsotish=str_replace('<td class="ari-tbl-col-2 sell col_c81e728d">',' ',$ex1[169]);  
$toshsotish=str_replace('</td>',' ',$toshsotish);
$toshsotish = trim($toshsotish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$samolish=str_replace('<td class="ari-tbl-col-1  col_c4ca4238">',' ',$ex1[180]);  
$samolish=str_replace('</td>',' ',$samolish);
$samolish = trim($samolish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$samsotish=str_replace('<td class="ari-tbl-col-2  col_c81e728d">',' ',$ex1[181]);  
$samsotish=str_replace('</td>',' ',$samsotish);
$samsotish = trim($samsotish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$buxolish=str_replace('<td class="ari-tbl-col-1  col_c4ca4238">',' ',$ex1[186]);  
$buxolish=str_replace('</td>',' ',$buxolish);
$buxolish = trim($buxolish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$buxsotish=str_replace('<td class="ari-tbl-col-2  col_c81e728d">',' ',$ex1[187]);  
$buxsotish=str_replace('</td>',' ',$buxsotish);
$buxsotish = trim($buxsotish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$jizolish=str_replace('<td class="ari-tbl-col-1  col_c4ca4238">',' ',$ex1[174]);  
$jizolish=str_replace('</td>',' ',$jizolish);
$jizolish = trim($jizolish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$jizsotish=str_replace('<td class="ari-tbl-col-2  col_c81e728d">',' ',$ex1[175]);  
$jizsotish=str_replace('</td>',' ',$jizsotish);
$jizsotish = trim($jizsotish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$qoqolish=str_replace('<td class="ari-tbl-col-1  col_c4ca4238">',' ',$ex1[192]);  
$qoqolish=str_replace('</td>',' ',$qoqolish);
$qoqolish = trim($qoqolish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$qoqsotish=str_replace('<td class="ari-tbl-col-2  col_c81e728d">',' ',$ex1[193]);  
$qoqsotish=str_replace('</td>',' ',$qoqsotish);
$qoqsotish = trim($qoqsotish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$namolish=str_replace('<td class="ari-tbl-col-1  col_c4ca4238">',' ',$ex1[198]);  
$namolish=str_replace('</td>',' ',$namolish);
$namolish = trim($namolish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$namsotish=str_replace('<td class="ari-tbl-col-2  col_c81e728d">',' ',$ex1[199]);  
$namsotish=str_replace('</td>',' ',$namsotish);
$namsotish = trim($namsotish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$farolish=str_replace('<td class="ari-tbl-col-1  col_c4ca4238">',' ',$ex1[204]);  
$farolish=str_replace('</td>',' ',$farolish);
$farolish = trim($farolish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$farsotish=str_replace('<td class="ari-tbl-col-2  col_c81e728d">',' ',$ex1[205]);  
$farsotish=str_replace('</td>',' ',$farsotish);
$farsotish = trim($farsotish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$marolish=str_replace('<td class="ari-tbl-col-1  col_c4ca4238">',' ',$ex1[210]);  
$marolish=str_replace('</td>',' ',$marolish);
$marolish = trim($marolish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$marsotish=str_replace('<td class="ari-tbl-col-2  col_c81e728d">',' ',$ex1[211]);  
$marsotish=str_replace('</td>',' ',$marsotish);
$marsotish = trim($marsotish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$andolish=str_replace('<td class="ari-tbl-col-1  col_c4ca4238">',' ',$ex1[216]);  
$andolish=str_replace('</td>',' ',$andolish);
$andolish = trim($andolish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$andsotish=str_replace('<td class="ari-tbl-col-2  col_c81e728d">',' ',$ex1[217]);  
$andsotish=str_replace('</td>',' ',$andsotish);
$andsotish = trim($andsotish);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

$yangilandi=str_replace('<td class="ari-tbl-col-3 date col_eccbc87e">',' ',$ex1[212]);  
$yangilandi=str_replace('</td>',' ',$yangilandi);
$yangilandi = trim($yangilandi);

//Iltimos manba bilan oling!
//Bot Developer: 
//< @ShaKhz0dKhan </> @DaMaS_BaSS >
//Channel: 
//< @Shax_Blogs </> @Kingsofphp > 
//Iltimos manba bilan oling!

bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"*
➖➖➖Dollar Bozor kursi➖➖➖
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
Olish ║ Sotish  🏰Shaxar
■■■■■■■■■■■■■■■■■■■

$samolish  ║  $samsotish     Samarqand
$buxolish  ║  $buxsotish     Buxoro
$jizolish  ║  $jizsotish     Jizzax
$qoqolish  ║  $qoqsotish     Qo'qon
$namolish  ║  $namsotish     Namangan
$farolish  ║  $farsotish     Farg'ona
$marolish  ║  $marsotish     Marg'ilon
$andolish  ║  $andsotish     Andijon

■■■■■■■■■■■■■■■■■■■* 
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
",
'parse_mode'=>'markdown',
]);
}

if($text=="👨‍💻 Bot Yaratuvchi"){
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/ikandaroff/620",
'caption'=>" 👋Assalomu Aleykum

👷 Bot ixtrochi: @UzPhpCoder

🧨Sizgaham Shunaqa Va Boshqa
Turdagi Botlar Kerak Bo'lsa
👷 Bot ixtrochiga Murojat Qiling",
'parse_mode'=>'html'
]);
}
$back = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
]);

//Ushbu kod @UzPhpCoder @php_channels va @KingsOfPhp kanalari orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani

if($type=="private"){
if($text=="/start"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Assalomu Alaykum $name</b>\n\n🤖: Men orqali ismingizni ajoyib rasmga joylashingiz mumkin

◾Marxamat Pastdagi Menyulardan
⚠️O'zingizga Kerakligini Bosing.
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
Dasturchi: @UzCoder_Cik tomonidan yaratildi! ",
'parse_mode'=>'html',
'reply_markup'=>$key,
]);
}}
if($tx == "🔝Bosh menyu🔝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"<b>🏠Bosh Menyuga Qaytdik
➖➖➖➖➖➖➖➖➖➖
▪️O'zizga kerakli
▫️Menyuni Tanlang
➖➖➖➖➖➖➖➖➖➖</b>",
'parse_mode'=>'html',
'reply_markup'=>$key,
]);
}
if($tx == "↩Orqaga↩"){
bot('sendmessage', [
'chat_id'=>$cid,
'text'=>"Orqaga muvafaqiyatli qaytdingiz✔.😊
Marhamat kerakli  bo‘limni tanlang.",
'reply_markup'=>$fkey,
]);
}
if($tx == "/panel"){
if($cid == $admin){
bot('sendmessage', [
'chat_id'=>$admin,
'text'=>"😁Assalomu Aleykum

👨‍💻 @UzPhpCoder
😎Admin Paneliga Xush Kelibsiz

◾Marxamat Pastdagi Menyulardan
⚠️O'zingizga Kerakligini Bosing",
'reply_markup'=>$panel,
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*Panel Menusi faqat Admin uchun Ochiladi!*",
'parse_mode'=>'Markdown',
]);
}
}
if($tx == "❇Userga Xabar❇"){
if($cid == $admin){
bot('sendMessage', [
'chat_id'=>$admin,
'text'=>"✔ Userga Xabar yuborish uchun
/sms 🆔️ Xabar 
shu tarzda yuboring!

Admin: @$userR",
'reply_markup'=>$panel,
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men @$userR ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}
if(mb_stripos($text,"/sms") !== false){
if($cid == $admin){
$ex = explode(" ",$text);
$sms = str_replace("/sms $ex[1]","",$text);
$ismi = $message->from->first_name;

if(mb_stripos($ex[1],"@") !== false){
$ssl = str_replace("@","",$ex[1]);
$egasi = "t.me/$ssl";
}else{
$egasi = "tg://user?id=$ex[1]";
$eegasi = "$ex[1]";
}
bot('sendmessage',[
'chat_id'=>$ex[1],
'text'=>"📨 Admindan Yangi Habar

👤 [$ismi](tg://user?id=$uid)

💌Habar: $sms

📆 $vaqt 🔸  🕰 $time",
'parse_mode'=>"markdown", 
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"👤[Foydalanuvchi]($egasi)ga Habaringiz Yuborildi📩",
'parse_mode'=>"markdown", 
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men @$userR ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}

//Ushbu kod @UzPhpCoder @php_channels va @KingsOfPhp kanalari orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani

if(mb_stripos($text,"🔄Restart🎯") !== false){ 
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 <b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○ 60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
    bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "🌐Sizning Ma'lumotlaringiz Yangilandi!!!✅",
       'parse_mode'=>'html',  
       'reply_markup'=>$key,
]);
}

   $baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$cid) !==false){
   }else{
   $txt="\n$cid";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
if(mb_stripos($tx,"📊Statistika")!==false){
if($cid == $admin){
$time=date('H:i:s',strtotime('2 hour'));
$sana=date("d-F, Y-\y\i\l",strtotime("2 hour"));
      $baza=file_get_contents("azo.dat");
      $all=substr_count($baza,"\n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      $txx = "
🌎 Hammasi: $all
├👤: $us
└👥: $gr

👤 - <b>Foydalanuvchilar</b>
👥 - <b>Guruhlar</b>

📆$sana ⏰$time";
  bot('sendmessage',[
   'chat_id'=>$cid,
   'parse_mode'=>'html',
   'text'=>$txx,
  ]);
}
}

$tex = $message->text;
$lichka = file_get_contents("azo.dat");
$xabar = file_get_contents("send.txt");

if($tex=="📄Xabar Jo'natish" and $cid==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"
👥Userlarga Yuboriladigan 
📄Xabar Matnini Kiriting! 
🚫Bekor qilish uchun /cancel ni bosing.",
    'parse_mode'=>"html",
]); file_put_contents("send.txt","user");
}
if($xabar=="user" and $cid==$admin){
if($tx=="/cancel"){
   bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Bekor qilindi!",
    'parse_mode'=>"html",
]);
  file_put_contents("send.txt","");
}else{
  $lich = file_get_contents("azo.dat");
  $lichka = explode("\n",$lich);
  foreach($lichka as $lichkalar){
  $okuser=bot("sendmessage",[
    'chat_id'=>$lichkalar,
    'text'=>$tex,
    'parse_mode'=>'html'
]);
}
if($okuser){
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"
👨‍💻Siz Yozgan Xabaringiz
👥Hamma Userlarga Yuborildi!",
    'parse_mode'=>'html',
]);
  file_put_contents("send.txt","");
}
}
}



if((mb_stripos($text, "/xabar")!==false) and $cid == $admin){
$id = explode("\n",$text);
$id1 = $id[1];
$id2 = $id[2];
$finish = bot('SendMessage', [
'chat_id' => $id1,
'parse_mode' => "markdown",
'text' => "$id2

By: [@$bot]",
'disable_web_page_preview' => true,
]);
}
if($finish){
bot('SendMessage', [
'chat_id' => $admin,
'parse_mode' => "markdown",
'text' => "✔️ [$id1](tg://user?id=$id1) *Ga Xabar Yuborildi!✅*",
]);
}
if($tx == "📰Yangiliklar📊"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Marhamat quyidagi bo‘limlardan birini tanlang..!",
'parse_mode'=>'html',
'reply_markup'=>$yan,
]);
}
if($tx == "🗞Fudbol yangiliklari⚽️"){
$url = "https://m.stadion.uz/news/rss";
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
$line = $item->title;
$link = $item->link;
}  
bot ('sendmessage', [
'chat_id'=> $cid,
'text'=>"🆕️[$line]($link)",
'parse_mode' =>"markdown",
]);
}

function kurs(){
       $response = "";
       $xml = file_get_contents("http://cbu.uz/uzc/arkhiv-kursov-valyut/xml/");
       $m = new SimpleXMLElement($xml);
       foreach ($m as $val) {
           if($val->Ccy == 'USD'){
               $response .= "1 USD - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'AED'){
               $response .= "Markaziy bank valyuta kursi:\n\n1 AED - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'AFN'){
               $response .= "1 AFN - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'AMD'){
               $response .= "1 AMD - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'ARS'){
               $response .= "1 ARS - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'AUD'){
               $response .= "1 AUD - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'AZN'){
               $response .= "1 AZN - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BDT'){
               $response .= "1 BDT - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BGN'){
               $response .= "1 BGN - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BDH'){
               $response .= "1 BDH - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BND'){
               $response .= "1 BND - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BRL'){
               $response .= "1 BRL - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BYN'){
               $response .= "1 BYN - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'ZAR'){
               $response .= "🔁Yangilandi: " . $val->date."\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'JPY'){
               $response .= "1 JPY - " . $val->Rate . " som\n-----------------------------------------------\n";
           }  if($val->Ccy == 'RUB'){
               $response .= "1 RUB - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
       }
      return $response;
   }
$soat = date('H:i:s',strtotime('0 hour'));
   if($text == '💱Valyuta kursi💲'){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>kurs()."\nHozir soat⌚: $soat",
    'parse_mode'=>'html',
]);
    }

if($tx == "📅Ramazon Taqvimi"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/taqvimsarvar/4",
'caption'=>"Ushbu Ramazon Taqvimi 2020 yil uchun Tuzib chiqilgan bu yerda og'iz ochish yopish duolari ham kiritilgan Bu taqvim Rasmiy Saytlardan olingan",
'parse_mode'=>"html"
]);
}

//Ushbu kod @UzPhpCoder @php_channels va @KingsOfPhp kanalari orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani

if($tx == "👨‍✈️Admin👨‍💻"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"
*Creator ga murojat qilish uchun pastdagi tugamni bosing!
Kanal: @UzBizness_shop*",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👨‍✈️Creator👨‍✈️","url"=>"https://t.me/$userR"],],
[['text'=>"👤Aloqa✡","url"=>"https://t.me/IskandarUz_Bot"],],
]
])
]);
}
if($text=="3️⃣RASM"){
file_put_contents("data/$from_id/ali.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👸<b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga↩"]],

]
])
]);
}
elseif($UzWebDev == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Qizlar/3/index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga↩"]],
]
])
]);
unlink("data/$from_id/ali.txt");
exit();
}
if($text=="🕋Ramazon Tabrigi"){
file_put_contents("data/$from_id/uzb.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🕋 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga"]],

]
])
]);
}
elseif($Uzb == "to"){
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Ramozon/index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga"]],
]
])
]);
unlink("data/$from_id/uzb.txt");
exit();
}
if($text=="2️⃣RASM"){
file_put_contents("data/$from_id/uzb1.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👸<b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga↩"]],

]
])
]);
}
elseif($Uzb1 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Qizlar/2/index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga↩"]],
]
])
]);
unlink("data/$from_id/uzb1.txt");
exit();
}
if($text=="1️⃣RASM"){
file_put_contents("data/$from_id/uzb2.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👸<b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga↩"]],

]
])
]);
}
elseif($Uzb2 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Qizlar/1/index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga↩"]],
]
])
]);
unlink("data/$from_id/uzb2.txt");
exit();
}
//Ushbu kod @UzPhpCoder @php_channels va @KingsOfPhp kanalari orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani


if($text=="🏡Uyda Qoling"){
file_put_contents("data/$from_id/uzb5.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🏠 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga"]],

]
])
]);
}
elseif($Uzb5 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Covid/index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga"]],
]
])
]);
unlink("data/$from_id/uzb5.txt");
exit();
}
if($text=="🕋Juma Muborak"){
file_put_contents("data/$from_id/uzb6.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🕋 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga"]],

]
])
]);
}
elseif($Uzb6 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"http://uzcodercik.xvest.ru/apilar/Logo/Juma/index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga"]],
]
])
]);
unlink("data/$from_id/uzb6.txt");
exit();
}

if($text=="📅Ramazon Taqvimi"){
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/taqvimsarvar/3",
'caption'=>" Ramazon Taqvimi 2020 Ro'za tutish (og'iz yopish) hamda Iftorlik (og'iz ochish) vaqtlari hamda duolari (Toshkent vaqti bilan). Barcha musulmonlarga ULASHING. SAVOBGA SHERIK BO'LING!

🛠️Yaratuvchi: Iskandar Hamroyev",
'parse_mode'=>"html"
]);
}
if($tx=="📖Quron Haqida"){
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"
📖Quron haqida
➖➖➖➖➖➖➖➖➖➖➖➖
Qurʼon (arab. القرآن oʻqimoq, qiroat qilmoq) — musulmonlarning asosiy muqaddas kitobi. Islom eʼtiqodiga koʻra,
Qurʼon vahiy orqali Muhammad paygʻambarga 610—632 yillar davomida nozil qilingan Allohning kalomi (Kalomulloh). Qurʼon „Kitob“ (yozuv), 
„Furqon“ (haq bilan botilning orasini ayiruvchi), 
„Zikr“ (eslatma), „Tanzil“ (nozil qilingan) kabi nomlar bilan atalib, „Nur“ (yorugʻlik), 
„Hudo“ (hidoyat), „Muborak“ (barakotli),
 „Mubin“ (ochiq-ravshan), „Bushro“ (xushxabar), 
„Aziz“ (eʼzozlanuvchi), „Majid“ (ulugʻ), 
„Bashir“ (bashorat beruvchi), 
„Nazir“ (ogohlantiruvchi) kabi soʻzlar bilan sifatlangan. 
Islom olamida Qurʼon musʼhaf nomi bilan ham mashhur. 
Islom ulamolari Qurʼonning 30 xil nom va sifatlarini sanab oʻtganlar.
➖➖➖➖➖➖➖➖➖➖➖➖
✍Quroning tuzulishi
➖➖➖➖➖➖➖➖➖➖➖➖
Qurʼonning boʻlimlari sura deyiladi,
uni shartli ravishda bob bilan taqqoslash mumkin.
Har sura oyatlarga boʻlingan. 
Qurʼon 114 sura, 6236 oyatdan iborat.
Har bir suraning oʻz nomi bor. Oyatlar esa tartib raqami bilan berilgan. 
Suralarning nomlari uning boshida kelgan soʻzdan olingan yoki zikri koʻproq kelgan narsalar,
voqealar yohud asosiy qahramon nomi bilan atalgan. 
Keyinchalik oʻqish va yodlash oson boʻlishi uchun Iroq hokimi Hajjoj ibn Yusuf (hukmronlik yillari 694—714) koʻrsatmasiga binoan Qurʼon 30 qism (arab.juz, fors. pora)ga boʻlingan.
Qurʼonda birinchi kelgan „Fotiha“ surasidan keyingi suralar katta, 
oʻrtacha va kichik suralar tartibida joylashgan. 2-Baqara surasi 286 oyatdan, eng qisqa Kavsar surasi 3 oyatdan iborat. 
Eng qisqa oyatlar „Toho“ va „Yosin“, eng uzun oyat „Baqara“ surasining 282-oyatidir. Suralar nozil boʻlish vaqti va joyiga koʻra 2 ga: hijradan oldin nozil boʻlgan suralar —
„Makka suralari“ (610—622 yillar, 90 sura) va hijradan keyin nozil boʻlgan suralar — „Madina suralari“ (622-yildan, 24 sura) ga ajratiladi.
Qurʼon matnining koʻp qismi Alloh bilan soʻzlashish, islom dushmanlari yoki undan ikkilanuvchilar bilan munozara qilish shaklida berilgan.
➖➖➖➖➖➖➖➖➖➖➖➖"
]);
}

if($tx=="📡Kanallarimiz"){
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"
🙋‍♂️Assalomu Aleykum👋🏻
➖➖➖➖➖➖➖➖➖➖➖
📡Kanalimizga Obuna Bo'ling

©️ @Pho_Channels
©️ @UzMegaXit
©️ @UzBizness_shop
➖➖➖➖➖➖➖➖➖➖➖ 
❤Quyidagi Kanallarga 👤Azo Bo'ling
🧨Va Eng Sara
1️⃣. 🔳 Php kodlarlar 
2️⃣. 🎶Muzikalar
3️⃣. 🛒Tavarlar sotishi yoki sotib olishdan
😇Bahramand bo'ling😉",
'parse_mode'=>'html',
'reply_markup'=>$key
]);
}

if($text=="🏠Bosh Menu🏠"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Assalomu Alaykum $name</b>\n\n🤖: Men orqali ismingiz ajoyib rasmga joylashingiz mumkin

Buning uchun pastdagi bo‘limlarni birini tanlang👇.
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
Dasturchi: @UzCoder_Cik tomonidan yaratildi! ",
'parse_mode'=>'html',
'reply_markup'=>$key
]);
}
$lichka = file_get_contents("lichka.txt");
mkdir("data");
mkdir("data/$cid");
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("lichka.txt","$lichka\n$cid");
}
}
$reply = $message->reply_to_message->text;
$rpl = json_encode([
'resize_keyboard'=>false,
'force_reply' => true,
'selective' => true
]);


if($text=="/send" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Yuboriladigan xabar matnini kiriting!",'parse_mode'=>"html",'reply_markup'=>$rpl
]);
}
if($reply=="Yuboriladigan xabar matnini kiriting!"){
$lich = file_get_contents("lichka.txt");
$lichka = explode("\n",$lich);
foreach($lichka as $uid){
bot("sendmessage",[
'chat_id'=>$uid,
'text'=>"$text",
'reply_markup'=>$key]);
}
}
if($text=="/stat" and $cid==$admin){
$lich = substr_count($lichka,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bot foydalanuvchilari soni $lich ta.",
'parse_mode'=>"html"
]);
}

//BOSHLANDI--------------------‐-----------BOSHLANDI-----------------BOSHLANDI

if($text=="1️⃣"){
file_put_contents("data/$from_id/uzb3.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb3 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Bollar/1/index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb3.txt");
exit();
}
if($text=="2️⃣"){
file_put_contents("data/$from_id/uzb4.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb4 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Bollar/2/index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb4.txt");
exit();
}
if($text=="3️⃣"){
file_put_contents("data/$from_id/uzb7.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb7 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Bollar/3/index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb7.txt");
exit();
}
if($text=="4️⃣"){
file_put_contents("data/$from_id/uzb8.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb8 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Bollar/api1/Index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb8.txt");
exit();
}
if($text=="5️⃣"){
file_put_contents("data/$from_id/uzb9.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb9 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Bollar/api6/Index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb9.txt");
exit();
}
if($text=="6️⃣"){
file_put_contents("data/$from_id/uzb10.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb10 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Bollar/api5/Index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb10.txt");
exit();
}
if($text=="7️⃣"){
file_put_contents("data/$from_id/uzb11.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb11 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Bollar/api2/Index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb11.txt");
exit();
}
if($text=="8️⃣"){
file_put_contents("data/$from_id/uzb12.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb12 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Bollar/api3/Index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb12.txt");
exit();
}
if($text=="9️⃣"){
file_put_contents("data/$from_id/uzb13.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb13 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Bollar/api4/Index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb13.txt");
exit();
}
if($text=="🔟"){
file_put_contents("data/$from_id/uzb14.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb14 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Bollar/api7/Index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb14.txt");
exit();
}
if($text=="1️⃣1️⃣"){
file_put_contents("data/$from_id/uzb15.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb15 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Bollar/api8/Index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb15.txt");
exit();
}
if($text=="1️⃣2️⃣"){
file_put_contents("data/$from_id/uzb16.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb16 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Bollar/api9/Index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb16.txt");
exit();
}
if($text=="1️⃣3️⃣"){
file_put_contents("data/$from_id/uzb17.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb17 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Bollar/api10/Index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb17.txt");
exit();
}
if($text=="1️⃣4️⃣"){
file_put_contents("data/$from_id/uzb18.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨‍💼 <b>Ismingizni yozing:
📄Ism yozish:

(Eslatma: ism yozayotganingizda imlo xatolarga yoʻl qoʻymang yozing, siz yozayotgan ism rasmga kiritiladi❗️)</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],

]
])
]);
}
elseif($Uzb18 == "to"){
$ex=$text;
$ex=$text;
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 ☇<b>Yuklanmoqda... ⚡</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'○○○○○○○○○○ 0%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'●○○○○○○○○○○ 10%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●○○○○○○○○ 20%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●○○○○○○○ 30%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○ 40%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●○○○○○ 50%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●○○○ 70%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○ 80%'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●○ 90%'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://uzcodercik.xvest.ru/apilar/Logo/Bollar/api11/Index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>☞ Ismingiz: $ex

🖤Buyurtmangiz tayyor bo‘ldi.

👨🏻‍💻 Developer: @UzCoder_Cik </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅️Orqaga⬅️"]],
]
])
]);
unlink("data/$from_id/uzb18.txt");
exit();
}


//Tugadi----------------------Tugadi----------------------------Tugadi

if($tx == "⛅Ob-havo🌧"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/ikandaroff/622",
'caption'=>"Marhamat o‘zingizga kerakli Shaharni tanlang..!",
'parse_mode'=>'html',
'reply_markup'=>$havo,
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($tx == "⛅ Toshkent"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/tashkent", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2020","2021","2022"],["2020","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Toshkent


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($tx == "⛅ Farg'ona"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/ferghana", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2020","2021","2022"],["2020","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Farg'ona


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($tx == "⛅ Xiva"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/khiva", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2020","2021","2022"],["2020","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Xiva


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($tx == "⛅ Andijon"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/andijan", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2020","2021","2022"],["2020","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Andijon


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($tx == "⛅ Namangan"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/namangan", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2020","2021","2022"],["2020","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Namangan


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($tx == "⛅ Buxoro"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/bukhara", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2020","2021","2022"],["2020","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Buxoro


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($tx == "⛅ Guliston"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/gulistan", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2020","2021","2022"],["2020","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Guliston


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($tx == "⛅ Jizzax"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/jizzakh", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2020","2021","2022"],["2020","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Jizzax


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($tx == "⛅ Zarafshon"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/zarafshan", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2020","2021","2022"],["2020","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Zarafshon


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($tx == "⛅ Qarshi"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/karshi", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2020","2021","2022"],["2020","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Qarshi


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($tx == "⛅ Navoiy"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/navoi", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2020","2021","2022"],["2020","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Navoiy


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($tx == "⛅ Nukus"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/nukus", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2020","2021","2022"],["2020","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Nukus


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($tx == "⛅ Samarqand"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/samarkand", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2020","2021","2022"],["2020","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Samarqand


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($tx == "⛅ Termiz"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/termez", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2020","2021","2022"],["2020","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Termiz


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($tx == "⛅ Urganch"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/urgench", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2020","2021","2022"],["2020","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Urganch


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}
if($tx == "🦠Covid-19"){
$soat=date("H:i",strtotime("2 hour"));

$sana=date("d/m/Y",strtotime("2 hour"));
$pgn_uz = file_get_contents("https://m.aniq.uz/statistika/coronavirus/");
$pgn=explode("\n",$pgn_uz);

$kasal=str_replace('<td',' ',$pgn[2083]);  
$kasal=str_replace('</td>',' ',$kasal);
$kasal = trim($kasal);

$kasalplus=str_replace('<td',' ',$pgn[2086]);  
$kasalplus=str_replace('</td>',' ',$kasalplus);
$kasalplus = trim($kasalplus);

$sog=str_replace('<td',' ',$pgn[2095]);  
$sog=str_replace('</td>',' ',$sog);
$sog = trim($sog);

$olim=str_replace('<td',' ',$pgn[2089]);  
$olim=str_replace('</td>',' ',$olim);
$olim = trim($olim);

$olimplus=str_replace('<td',' ',$pgn[2092]);  
$olimplus=str_replace('</td>',' ',$olimplus);
$olimplus = trim($olimplus);

$test=str_replace('<td',' ',$pgn[2098]);  
$test=str_replace('</td>',' ',$test);
$test = trim($test);

$davo=str_replace('<td class="treated head-data">',' ',$pgn[185]);  
$davo=str_replace('</td>',' ',$davo);
$davod = trim($davo);
$kun=date("d.m.Y",strtotime("2 hour"));
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Covid-19 haqida
📰Tezkor ma'lumotlar 
🔁$kun y. holatiga
➖➖➖➖➖➖➖➖➖➖➖
🌐O‘zbekiston bo‘yicha
➖➖➖➖➖➖➖➖➖➖➖
🤮·Kasallar: $kasal 
---------------------------------------------
🤧Bugungi Kasallar: $kasalplus 
---------------------------------------------
🎉Tuzalganlar: $sog
---------------------------------------------
⚰Vafot etgan: $olim $olimplus 
---------------------------------------------
😷Testdan o'tganlar: $test
---------------------------------------------",
'parse_mode'=>'html',
]);
}
if($tx == "🎅Yangi Yil") {   
$kun1 = date('z',strtotime('3 hour')); 
$c2 = 364-$kun1;
$d = date('L',strtotime('3 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H',strtotime('3 hour')); 
$b2 = 23-$kun2;
$kun3 = date('i',strtotime('3 hour')); 
$b3 = 59-$kun3;
$kun4 = date('s',strtotime('3 hour')); 
$b4 = 60-$kun4;
bot('sendmessage',[   
'chat_id'=>$cid,
'text'=>"
🎄Yangi yilga
├📆Kun *$b* 
├⏰Soat *$b2* 
├⌛Minut *$b3*  
└⏱Sekund *$b4* 🎅Qoldi

📆Hozir: $Sana ⏰$soat",
'parse_mode'=>"markdown",
'reply_to_message_id'=> $mid, 
]);   
}
if ($tx == "📰Yangiliklar"){
$url = "https://daryo.uz/feed/";
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
$line = $item->title;
$link = $item->link;
}  
bot ('sendmessage', [
'chat_id'=> $cid,
'text'=>"
🔔Eng So'ngi 📰Yangiliklar

🆕️[$line]($link)

🍃Batafsil O'qish Uchun Bosing",
'parse_mode' =>"markdown",
]);
}
$reply = $message->reply_to_message->text;
if (!file_exists($folder.'/test.fd3')) {
  mkdir($folder);
  file_put_contents($folder.'/test.fd3', 'by ');
}

if (!file_exists($folder2.'/test.fd3')) {
  mkdir($folder2);
  file_put_contents($folder2.'/test.fd3', 'by ');
}

if (file_exists($filee)) {
  $step = file_get_contents($filee);
}


$tx = $message->text;
$name = $message->chat->first_name;
$user = $message->from->username;
$kun1 = date('z', strtotime('2 hour'));

$rpl = json_encode([
           'resize_keyboard'=>false,
            'force_reply' => true,
            'selective' => true
        ]);
        
$date = date('d-M Y',strtotime('2 hour'));
$time = date('H:i', strtotime('2 hour')); 
if($text == "⭕Taklifim Bor"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"Taklifingizni kiriting!",
	'reply_markup'=>$rpl,
		]);
		}
		if($reply=="Taklifingizni kiriting!"){
			bot('sendmessage',[
			'chat_id'=>$admin,
			'text'=>"<b>Taklif keldi!</b>
      
🧒Yuboruvchi: $name

🔷Login: @$user

🔢Id raqami: <code>$cid</code>

🗒️Taklif: <i>$tx</i>

⌚Soat-<b>$time</b> Bugun-<b>$date</b>",
'parse_mode'=>"html",
]);
sleep(2);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Yaxshi adminga xabar yetkazildi!*\nTaklifingiz adminlarga yoqsa 24 soat ichida siz bilan bog'lanishadi.",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);
}
    
    if($text == "❓Savolim Bor"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"Savolingizni kiriting!",
	'reply_markup'=>$rpl,
		]);
		}
		if($reply=="Savolingizni kiriting!"){
			bot('sendmessage',[
			'chat_id'=>$admin,
			'text'=>"<b>Savol keldi!</b>
      
🧒Yuboruvchi: $name

🔷Login: @$user

🔢Id raqami: <code>$cid</code>

🗒️Savol: <i>$tx</i>

⌚Soat-<b>$time</b> Bugun-<b>$date</b>",
'parse_mode'=>"html",
]);
sleep(2);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Yaxshi adminga xabar yetkazildi!*\nSavolingiz adminlarga yoqsa 24 soat ichida kanalda javobini yozib yuboradilar!",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);
}
    if($text == "➕Buyurtma Berish"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"Buyurtmangizni Yozing!",
	'reply_markup'=>$rpl,
		]);
		}
		if($reply=="Buyurtmangizni Yozing!"){
			bot('sendmessage',[
			'chat_id'=>$admin,
			'text'=>"<b>Buyurtma keldi!</b>
      
🧒Yuboruvchi: $name

🔷Login: @$user

🔢Id raqami: <code>$cid</code>

🗒️Buyurtma: <i>$tx</i>

⌚Soat-<b>$time</b> Bugun-<b>$date</b>",
'parse_mode'=>"html",
]);
sleep(2);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Yaxshi adminga xabar yetkazildi!*\nBuyurtmangiz adminlarga yoqsa 24 soat ichida kanalga tashlab yuboradilar!",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);
}
    
		if($text=="⭐Ishimizni Baholash"){
	bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Bizning $kanalimz Ni Baholang!</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
                        [['text'=>'⭐']],
                        [['text'=>'⭐⭐']],
                        [['text'=>'⭐⭐⭐']],
                        [['text'=>'⭐⭐⭐⭐']],
                        [['text'=>'⭐⭐⭐⭐⭐']]
]
]), 
]);
}
if($tx == "⭐"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>@Php_Channels Jamoamizga Qoygan Ballingiz Uchun Rahmat!</b>",
'parse_mode'=>"html",
'reply_markup'=>$key,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>" $name Kanalimizni Baholadi
Baholashi ⭐
Useri @$user",
]);
}
if($tx == "⭐⭐"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>@Php_Channels Jamoamizga Qoygan Ballingiz Uchun Rahmat!</b>",
'parse_mode'=>"html",
'reply_markup'=>$key,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>" $name Kanalimizni Baholadi
Baholashi ⭐⭐
Useri @$user",
]);
}
if($tx == "⭐⭐⭐"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>@Php_Channels Jamoamizga Qoygan Ballingiz Uchun Rahmat!</b>",
'parse_mode'=>"html",
'reply_markup'=>$key,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>" $name Kanalimizni Baholadi
Baholashi ⭐⭐⭐
Useri @$user",
]);
}
if($tx == "⭐⭐⭐⭐"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>@Php_Channels Jamoamizga Qoygan Ballingiz Uchun Rahmat!</b>",
'parse_mode'=>"html",
'reply_markup'=>$key,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>" $name Kanalimizni Baholadi
Baholashi ⭐⭐⭐⭐
Useri @$user",
]);
}
if($tx == "⭐⭐⭐⭐⭐"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>@Php_Channels Jamoamizga Qoygan Ballingiz Uchun Rahmat!</b>",
'parse_mode'=>"html",
'reply_markup'=>$key,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>" $name Kanalimizni Baholadi
Baholashi ⭐⭐⭐⭐⭐
Useri @$user",
]);
}

//Ushbu kod @UzPhpCoder @php_channels va @KingsOfPhp kanalari orqali tarqatdi manba qolsin 3_harf boʻlsang olayver manbani


?>