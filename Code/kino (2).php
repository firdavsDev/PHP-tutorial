<?php
ob_start();
define("API_KEY","token"); //TOKEN
$admin = "1402280124"; //admin id
$adminuser = "xonxacker";   //admin useri @ shu belgisiz
$kinosoni = "30"; //kinolar soni

/*

Manba: @UZ_PHP_KODERLAR
Muallif: @xonxacker

*/

function addstat($id){
$check = file_get_contents("stat/azolar.txt");
$rd = explode("\n",$check);
if(!in_array($id,$rd)){
file_put_contents("stat/azolar.txt","\n".$id,FILE_APPEND);
}
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

$update = json_decode(file_get_contents('php://input'));
if(isset($update->message)){
$message = $update->message;
$type = $message->chat->type;
$mid = $message->message_id;
$idi = $message->from->id;
$cid = $message->chat->id;
$name = $message->from->first_name;
$tx = $message->text;
$user = $message->from->username;
}
if(isset($update->callback_query)){
$data = $update->callback_query->data;
$id = $update->callback_query->id;
$from_id = $update->callback_query->from->id;
$mes_idi = $update->callback_query->message->message_id;
}

$soat = date("H:i:s",strtotime("0 hour")); 
$sana = date("d-M, Y",strtotime("0 hour"));
mkdir("stat");
$userlar = file_get_contents("stat/azolar.txt");
$step = file_get_contents("stat/$idi.step");


$key = json_encode([
"resize_keyboard"=>true,
"keyboard"=>[
[["text"=>"🎥 Kinolar"]],
[["text"=>"📊 Statistika"],["text"=>"👨‍💻 Dasturchi"]],
]
]);

$orqaga = "🔙 Orqaga";
$key3 = json_encode([
"resize_keyboard"=>true,
"keyboard"=>[
[["text"=>$orqaga]],
]
]);


if(isset($message) and $type == "private"){
$g1 = bot("getChatMember",[
"chat_id"=>"@UZ_PHP_KODERLAR",
"user_id"=>$idi,
]);
$get1 = $g1->result->status;
$g2 = bot("getChatMember",[
"chat_id"=>"@AZOBL1HAYOT",
"user_id"=>$idi,
]);
$get2 = $g2->result->status;         
$g3 = bot("getChatMember",[
"chat_id"=>"@UZ_PHP_KODERLAR",
"user_id"=>$idi,
]);                
$get3 = $g3->result->status;
$g4 = bot("getChatMember",[
"chat_id"=>"@AZOBL1HAYOT",
"user_id"=>$idi,
]);                
$get4 = $g4->result->status;
if(($get1=="creator" or $get1=="administrator" or $get1=="member") and ($get2=="creator" or $get2=="administrator" or $get2=="member") and ($get3=="creator" or $get3=="administrator" or $get3=="member") and ($get4=="creator" or $get4=="administrator" or $get4=="member")){
}else{
bot("sendMessage",[
"chat_id"=>$idi,
"text"=>"*Quyidagi kanallarimizga obuna boʻling. Botni keyin toʻliq ishlatishingiz mumkin!*",
"parse_mode"=>"markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"➕ A‘zo bo‘lish","url"=>"https://t.me/UZ_PHP_KODERLAR"]],
[["text"=>"➕ A‘zo bo‘lish","url"=>"https://t.me/AZOBL1HAYOT"]],
[["text"=>"➕ A‘zo bo‘lish","url"=>"https://t.me/UZ_PHP_KODERLAR"]],
[["text"=>"➕ A‘zo bo‘lish","url"=>"https://t.me/AZOBL1HAYOT"]],
[["text"=>"✅ Tasdiqlash","callback_data"=>"result"]],
]
]),
]);  
return false;
}
}


$salom = "*✋ Assalomu alaykum botimizga xush kelibsiz.\n🎞 Bizning botimizdan xar xil kinolar topishingiz mumkin.\n\n🎛 Menyuni tanlang⬇️*";

if($data=="result"){
addstat($from_id);
$g1 = bot("getChatMember",[
"chat_id"=>"@UZ_PHP_KODERLAR",
"user_id"=>$from_id,
]);
$get1 = $g1->result->status;
$g2 = bot("getChatMember",[
"chat_id"=>"@AZOBL1HAYOT",
"user_id"=>$from_id,
]);
$get2 = $g2->result->status;         
$g3 = bot("getChatMember",[
"chat_id"=>"@UZ_PHP_KODERLAR",
"user_id"=>$from_id,
]);                
$get3 = $g3->result->status;
$g4 = bot("getChatMember",[
"chat_id"=>"@AZOBL1HAYOT",
"user_id"=>$from_id,
]);                
$get4 = $g4->result->status;
if(($get1=="creator" or $get1=="administrator" or $get1=="member") and ($get2=="creator" or $get2=="administrator" or $get2=="member") and ($get3=="creator" or $get3=="administrator" or $get3=="member") and ($get4=="creator" or $get4=="administrator" or $get4=="member")){
bot("deleteMessage",[
"chat_id"=>$from_id,
"message_id"=>$mes_idi,
]);
bot('sendMessage',[
'chat_id'=>$from_id,
'text'=>$salom,
'parse_mode'=>'markdown',
'reply_markup'=>$key,
]);
}else{
bot("answerCallbackQuery",[
"callback_query_id"=>$id,
"text"=>"Siz hali kanallarga aʼzo boʻlmadingiz ❗️",
"show_alert"=>true,
]);
}
}

/*

Manba: @UZ_PHP_KODERLAR
Muallif: @xonxacker

*/

$kinolar = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔴 Jangovor"],['text'=>"🌋 Hayotiy"]],
[['text'=>"🏠 Bosh Menu"]],
]
]);


$kinoxayot = json_encode([
"resize_keyboard"=>true,
"keyboard"=>[
[["text"=>"Malika almashdi"]],
[["text"=>"Panohimsan | Sen mening uyimsan"]],
[["text"=>"Kaputsinov bulvaridan kelgan odam"]],
[["text"=>"Kitlarni yaxshi ko'ramiz"]],
[["text"=>"O‘g‘ri oshiq"],["text"=>"Sarkarda"]],
[["text"=>"O'yinchoq"],["text"=>"Suv Iskanjasida"]],
[["text"=>"Janob Jangl"]],
[["text"=>$orqaga]],
]
]);


switch($tx){
case "/start":
bot('sendMessage',[
'chat_id'=>$idi,
'text'=>$salom,
'parse_mode'=>'markdown',
'reply_markup'=>$key,
]);
break;
case "🏠 Bosh Menu":
bot('sendMessage',[
'chat_id'=>$idi,
'text'=>"⌨ Menyulardan birini tanlang!",
'parse_mode'=>'markdown',
'reply_markup'=>$key,
]);
break;
case "🎥 Kinolar":
bot('sendMessage',[
'chat_id'=>$idi,
'text'=>"*📲 Kinolar bo'limi xoxlaganingizni tanlang!*",
'parse_mode'=>'markdown',
'reply_markup'=>$kinolar,
]);
break;
case $orqaga:
bot('sendMessage',[
'chat_id'=>$idi,
'text'=>"*📲 Xoxlaganingizni tanlang!*",
'parse_mode'=>'markdown',
'reply_markup'=>$kinolar,
]);
break;
case "📊 Statistika":
$member = substr_count($userlar,"\n");
$new = file_get_contents("stat/new.txt");
bot("sendMessage",[
"chat_id"=>$idi,
"text"=>"*👤Bot azolar soni:* $member\n*🎞 Botdagi kinolar soni:* $kinosoni\n\n$sana | $soat",
"parse_mode"=>"markdown",
"reply_markup"=>$key,
]);
break;
case "💌 Admin":
bot("sendMessage",[
"chat_id"=>$idi,
"text"=>"Nima haqida yozmoqchisiz? 😊\n\n*📞 Bot ADMINI:* [@$adminuser]",
"parse_mode"=>"markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"🗣 Bog'lanish","url"=>"https://t.me/$adminuser"]],
]
]),
]);
break;
case "🌋 Hayotiy":
bot("sendmessage",[
"chat_id"=>$idi,
"text"=>"*💠 Kinolarni birini tanlang!*",
"parse_mode"=>"markdown",
"reply_markup"=>$kinoxayot,
]);
break;
case "Malika almashdi":
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/18",
'caption'=>'*▷"Malika almashdi" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kinoxayot,
]);
break;
case "Panohimsan | Sen mening uyimsan":
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/19",
'caption'=>'*▷"Panohimsan | Sen mening uyimsan" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kinoxayot,
]);
break;
case "Kaputsinov bulvaridan kelgan odam":
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/22",
'caption'=>'*▷"Kaputsinov bulvaridan kelgan odam" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kinoxayot,
]);
break;
case "Kitlarni yaxshi ko'ramiz":
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/23",
'caption'=>'*▷"Kitlarni yaxshi ko‘ramiz" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kinoxayot,
]);
break;
case "O‘g‘ri oshiq":
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/24",
'caption'=>'*▷"O‘g‘ri oshiq" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kinoxayot,
]);
break;
case "Sarkarda":
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/27",
'caption'=>'*▷"Sarkarda" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kinoxayot,
]);
break;
case "O'yinchoq":
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/29",
'caption'=>'*▷"O‘yinchoq" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kinoxayot,
]);
break;
case "Suv Iskanjasida":
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/39",
'caption'=>'*▷"Suv Iskanjasida" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kinoxayot,
]);
break;
case "Janob Jangl":
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/26",
'caption'=>'*▷"Janob Jangl" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kinoxayot,
]);
break;
}


/*

Manba: @UZ_PHP_KODERLAR
Muallif: @xonxacker

*/

$kino = json_encode([
"resize_keyboard"=>true,
"keyboard"=>[
[["text"=>"Kunlarning Birida"],["text"=>"Imkon Ilinji"]],
[["text"=>"Bo'zqir"],["text"=>"O'lim Hududi"]],
[["text"=>"Asteriks va Obeliks: Olimpiya o'yinlarida"]],
[["text"=>"Oushenning sakkiz dugonasi"]],
[["text"=>"Yovuzlik qarorgohi 5 | Yomonlik maskani 5"]],
[["text"=>"Yovuzlik qarorgohi 6 | Yomonlik maskani 6"]],
[["text"=>"Maykl Kleyton"],["text"=>"Konstantin"]],
[["text"=>"G‘arbning zabt etilishi"]],
[["text"=>"Odam Yaratgan Maxluqlar"]],
[["text"=>"Universal Askar | Mukammal Soldat"]],
[["text"=>"Uchlik | 3 lik"],["text"=>"Kechikkan Qasos"]],
[["text"=>"Munna Maykl | Michael"]],
[["text"=>"Forsaj 1 (2001)"],["text"=>"Forsaj 2 (2003)"],["text"=>"Forsaj Diablo"]],
[["text"=>$orqaga]],
]
]);



if($tx=="🔴 Jangovor"){
bot("sendmessage",[
"chat_id"=>$idi,
"text"=>"*💠 Kinolarni birini tanlang!*",
"parse_mode"=>"markdown",
"reply_markup"=>$kino,
]);
}


if($tx=="Kunlarning Birida"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/13",
'caption'=>'*▷"Kunlarning Birida" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}


if($tx=="Imkon Ilinji"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/14",
'caption'=>'*▷"Imkon Ilinji" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}

if($tx=="Bo'zqir"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/15",
'caption'=>'*▷"Bo‘zqir" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}

/*

Manba: @UZ_PHP_KODERLAR
Muallif: @xonxacker

*/

if($tx=="Asteriks va Obeliks: Olimpiya o'yinlarida"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/16",
'caption'=>'*▷ "Asteriks va Obeliks: Olimpiya o‘yinlarida" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}

if($tx=="Oushenning sakkiz dugonasi"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/17",
'caption'=>'*▷"Oushenning sakkiz dugonasi" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}

if($tx=="Yovuzlik qarorgohi 6 | Yomonlik maskani 6"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/20",
'caption'=>'*▷"Yovuzlik qarorgohi 6 | Yomonlik maskani 6" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}

if($tx=="O'lim Hududi"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/21",
'caption'=>'*▷"O‘lim Hududi" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}

/*

Manba: @UZ_PHP_KODERLAR
Muallif: @xonxacker

*/

if($tx=="Kechikkan Qasos"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/25",
'caption'=>'*▷"Kechikkan Qasos" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}

if($tx=="Senturion"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/28",
'caption'=>'*▷"Senturion" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}


if($tx=="Maykl Kleyton"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/30",
'caption'=>'*▷"Maykl Kleyton" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}


if($tx=="G‘arbning zabt etilishi"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/31",
'caption'=>'*▷"G‘arbning zabt etilishi" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}


if($tx=="Odam Yaratgan Maxluqlar"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/32",
'caption'=>'*▷"Odam Yaratgan Maxluqlar" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}


if($tx=="Konstantin"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/33",
'caption'=>'*▷"Konstantin" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}


if($tx=="Asira"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/34",
'caption'=>'*▷"Asira" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}

/*

Manba: @UZ_PHP_KODERLAR
Muallif: @xonxacker

*/

if($tx=="Yovuzlik qarorgohi 5 | Yomonlik maskani 5"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/35",
'caption'=>'*▷"Yovuzlik qarorgohi 5 | Yomonlik maskani 5" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}

if($tx=="Universal Askar | Mukammal Soldat"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/36",
'caption'=>'*▷"Universal Askar | Mukammal Soldat" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}

if($tx=="Munna Maykl | Michael"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/37",
'caption'=>'*▷"Munna Maykl | Michael" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}

if($tx=="Uchlik | 3 lik"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/38",
'caption'=>'*▷"Uchlik | 3 lik" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}

if($tx=="Forsaj 1 (2001)"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/41",
'caption'=>'*▷"Forsaj 1 " filmi. (2001)

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}

if($tx=="Forsaj 2 (2003)"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/42",
'caption'=>'*▷"Forsaj 2" filmi. (2003)

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}

if($tx=="Forsaj Diablo"){
bot('SendVideo',[
'chat_id'=>$idi,
'video'=>"https://t.me/TARJlMA_KlNOLAR/43",
'caption'=>'*▷"Forsaj Diablo" filmi.

💿 Sifati:* 480p
🎞 *🔥Channel:* [@UZ_PHP_KODERLAR] ',
'parse_mode'=>'markdown',
'reply_markup'=>$kino,
]);
}


if($tx=="👨‍💻 Dasturchi"){
bot("sendmessage",[
"chat_id"=>$idi,
"text"=>"*Bot dasturchisi:* [@xonxacker](tg://user?id=1402280124)\n\n*Ish vaqti: 09:00 dan 23:00 gacha.*",
"parse_mode"=>"markdown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"♻️ Bogʻlanish","url"=>"https://t.me/xonxacker"]],
]
]),
]);
}


if($idi==$admin){
if($tx=="/forsend"){
file_put_contents("stat/$idi.step","forsend");
bot('sendMessage',[
'chat_id'=>$idi,
'text'=>"Forward yuboring!\n\nOtmen: /otmen",
]);
}

/*

Manba: @UZ_PHP_KODERLAR
Muallif: @xonxacker

*/

if($step=="forsend"){
if($tx=="/otmen" or $tx=="/start" or $tx=="🎥 Kinolar" or $tx=="💌 Admin" or $tx=="📊 Statistika" or $tx=="👨‍💻 Dasturchi" or $tx=="/stat" or $tx=="🔙 Orqaga"){
unlink("stat/$idi.step");
}else{
$im = explode("\n",$userlar);
foreach($im as $id){
$send = bot('forwardMessage',[
'chat_id'=>$id,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
}
unlink("stat/$idi.step");  
bot('sendMessage',[
'chat_id'=>$idi,
'text'=>"🆗 Xabaringiz xammaga yuborildi!",
]);
}
}
}


?>