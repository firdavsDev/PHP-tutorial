<?php
ob_start();
define('DoniyorSoft','TOKENBEK');//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi 
$botim = "GrantTalabaBot";
$admin = "1829011441";// Manbaga tekganni ota-onasini Hudo ursin

   function del($nomi){
   array_map('unlink', glob("$nomi"));//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
   }// Manbaga tekganni ota-onasini Hudo ursin
          $replyc= json_encode([
           'resize_keyboard'=>false,
                'force_reply' => true,
                'selective' => true
            ]);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".DoniyorSoft."/".$method;//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi
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
}// Manbaga tekganni ota-onasini Hudo ursin

$update = json_decode(file_get_contents('php://input'));//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$type = $message->chat->type;
$tx = $message->text;
$text= $message->text;
$ism = file_get_contents("AsrorDev/$cid.ism");
$guruhlar = file_get_contents("Stat/guruh.dat");
$step = file_get_contents("Bot/$cid.step");
$step2 = file_get_contents("Bot/2.step");
$step3 = file_get_contents("Bot/3.step");
$step1 = file_get_contents("Bot/$chat_id2.step");
$name = $message->chat->first_name;
$user = $message->from->username;

$update = json_decode(file_get_contents('php://input'));//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi
$edname = $editm ->from->first_name;
$message = $update->message;
$mid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$uid= $message->from->id;
$chat_id = $message->chat->id;
$tx = $message->text;
$name = $message->from->first_name;
$username = $message->from->username;
$fadmin = $message->from->id;
$cty = $message->chat->type;

$mid = $message->message_id;
$tx = $message->text;
$id1 = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repuser = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;

$sticker = $message->sticker;
$audio = $message->audio;
$audio = $message->audio;
$video = $message->video;
$caption = $message->caption;
$performer = $message->performer;
$gif = $message->animation;
$doc = $message->document;
$contact = $message->contact;
$game = $message->game;
$location = $message->location;
$forward_ch = $message->forward_from_chat;
$forward = $message->forward_from;
$selfi1 = $message->video_note;

mkdir("AsrorDev");//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi
mkdir("Stat");
mkdir("Bot");
$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🏫 Universitetlar sertifikati"]],//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi
[['text'=>"☎️  Qo'llab-quvvatlash"]],
]
]);
$shaxar = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Toshkent"],['text'=>"Farg'ona"]],//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi
[['text'=>"Buxoro"],['text'=>"Andijon"]],
[['text'=>"Jizzax"],['text'=>"Namangan"]],
[['text'=>"Navoiy"],['text'=>"Samarqand"]],
[['text'=>"Sirdaryo"],['text'=>"Xorazm"]],
[['text'=>"Qoraqalpog'iston"],['text'=>"Qashqadaryo"]],
[['text'=>"Xorijiy OTM"],['text'=>"✅Bosh menu"]],
]
]);

$orqa = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"✅Bosh menu"]]//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi
]
]);

$adminpanel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Forward Yuborish"]],
[['text'=>"📊 Statistika"],['text'=>"📂Bot kodi"]],
[['text'=>"✅Bosh menu"]],//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi
]
]);

$ret1 = bot("getChatMember",[
         "chat_id"=>"@uzbwolfs", // secretius
         "user_id"=>$uid
         ]);
$ret2 = bot("getChatMember",[
         "chat_id"=>"@kalbimizdatg", // secretius
         "user_id"=>$uid
         ]);
/*$ret3 = bot("getChatMember",[
         "chat_id"=>"@kalbimizdatg", // secretius
         "user_id"=>$uid
         ]);*/


$stat1 = $ret1->result->status;
$stat2 = $ret2->result->status;
/*$stat3 = $ret3->result->status;*/

         if(($stat1=="creator" or $stat1=="administrator" or $stat1=="member") and ($stat2=="creator" or $stat2=="administrator" or $stat2=="member")/* and ($stat3=="creator" or $stat3=="administrator" or $stat3=="member")*/){}else{
     bot("sendmessage",[
         "chat_id"=>$uid,
         "text"=>"<b>Quyidagi kanallarimizga obuna boʻling. A'zo bo'lib qayta /start bosing! Botni keyin toʻliq ishlatishingiz mumkin!</b>",
         'disable_web_page_preview'=>true,
         'parse_mode'=>'html',
         "reply_to_message_id"=>$mid,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"➕ Azo bo'lish","url"=>"https://t.me/kalbimizdatg"],],
[["text"=>"➕ Azo bo'lish","url"=>"https://t.me/uzbwolfs"],],
/*[["text"=>"➕ Azo bo'lish","url"=>"https://t.me/kalbimizdatg"],],*/

]//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi
]),
]); 
return false;
}


if($tx=="/start" or $tx=="/start@$botim"){
	bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Assalomu alaykum $name !
Siz bizning botimizda Talabalar sertifikatini yasab olishingiz mumkin
Pastdagi kerakli tugmani bosing👇</b>",
'parse_mode'=>'html',
'reply_markup'=>$key,
]);
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

if($tx=="/panel" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨🏻‍💻Admin panelga xush kelibsiz xo'jayin!!",
'reply_markup'=>$adminpanel,
]);
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

if($tx=="✅Bosh menu"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bosh Menudasiz! Xo'sh nima qilamiz???!!",
'reply_markup'=>$key,
]);
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

$lichka = file_get_contents("salom.php");
if($type=="private"){
if(stripos($lichka,"$cid") !==false){
}else{
file_put_contents("salom.php","$lichka\n$cid");
}
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

if($tx=="📊 Statistika"){
$lich = substr_count($lichka,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"
*📊Botimiz a'zolari: $lich ta*",
'parse_mode'=>'markdown',
]);
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

if($tx=="Forward Yuborish" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Xabaringizni Yozing.Men Uni Forward Qilib Hammaga yuboraman!!",
]);
file_put_contents("Bot/$cid.step","forward");
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

if($step=="forward" and $cid==$admin){
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=bot('ForwardMessage',[
'chat_id'=>$users,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
}
if($xabarok){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Xabar yetkazildi",
]);
file_put_contents("Bot/$cid.step","");
}
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

if($tx=="📂Bot kodi"){
if($cid==$admin){
bot('sendDocument',[
'chat_id'=>$admin,
'document'=>new CURLfile(__FILE__),
]);
}
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

// Qashqadaryo
if($text=="Qashqadaryo"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"Ismingizni kiriting", 
]); 
file_put_contents("Bot/$cid.step","kashkadarya"); 
} 
if($step=="kashkadarya"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/25.php?text=$text"], 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/26.php?text=$text"], 
/*["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"],*/ 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

// Qoraqalpog'iston
if($text=="Qoraqalpog'iston"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"Ismingizni kiriting", 
]); 
file_put_contents("Bot/$cid.step","karakalpakstan"); 
} 
if($step=="karakalpakstan"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/23.php?text=$text"], 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/24.php?text=$text"], 
/*["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"],*/ 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

// Xorazm
if($text=="Xorazm"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"Ismingizni kiriting", 
]); 
file_put_contents("Bot/$cid.step","khorezm"); 
} 
if($step=="khorezm"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/21.php?text=$text"], 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/22.php?text=$text"], 
/*["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"],*/ 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

// Sirdaryo
if($text=="Sirdaryo"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"Ismingizni kiriting", 
]); 
file_put_contents("Bot/$cid.step","sirdaryo"); 
} 
if($step=="sirdaryo"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/19.php?text=$text"], 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/20.php?text=$text"], 
/*["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"],*/ 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

// Samarqand
if($text=="Samarqand"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"Ismingizni kiriting", 
]); 
file_put_contents("Bot/$cid.step","samarkand"); 
} 
if($step=="samarkand"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/16.php?text=$text"], 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/17.php?text=$text"], 
/*["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"],*/ 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

// Navoiy
if($text=="Navoiy"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"Ismingizni kiriting", 
]); 
file_put_contents("Bot/$cid.step","navoi"); 
} 
if($step=="navoi"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/14.php?text=$text"], 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/15.php?text=$text"], 
/*["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"],*/ 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}
//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

// Namangan
if($text=="Namangan"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"Ismingizni kiriting", 
]); 
file_put_contents("Bot/$cid.step","namangan"); 
} 
if($step=="namangan"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/12.php?text=$text"], 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/13.php?text=$text"], 
/*["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"],*/ 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

// Jizzakh
if($text=="Jizzax"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"Ismingizni kiriting", 
]); 
file_put_contents("Bot/$cid.step","jizzakh"); 
} 
if($step=="jizzakh"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/10.php?text=$text"], 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/11.php?text=$text"], 
/*["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"],*/ 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

// Fergana
if($text=="Farg'ona"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"Ismingizni kiriting", 
]); 
file_put_contents("Bot/$cid.step","fergana"); 
} 
if($step=="fergana"){ 
 bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1754187375/6.php?text=$text"], 
["type"=>"photo", 
"media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1754187375/7.php?text=$text"], 
/*["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"], 
["type"=>"photo", 
"media" => "api?text=$text"],*/ 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
}//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi
// Tashkent
if($text=="Toshkent"){ 
bot('sendmessage',[ 
'chat_id'=>$cid, 
'text'=>"Ismingizni kiriting", 
]); 
 file_put_contents("Bot/$cid.step","tashkent"); 
 } 
if($step=="tashkent"){ 
bot("sendMediaGroup",[ 
"chat_id"=>$cid, 
"media"=>json_encode([ 
["type"=>"photo", 
    "media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/5.php?text=$text"], 
["type"=>"photo", 
    "media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1754187375/2.php?text=$text"], 
["type"=>"photo", 
    "media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1754187375/3.php?text=$text"], 
 ["type"=>"photo", 
    "media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1754187375/4.php?text=$text"], 
 ["type"=>"photo", 
    "media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1754187375/5.php?text=$text"], 
]), 
]);
file_put_contents("Bot/$cid.step",""); 
 }//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi


// Buxoro
if($text=="Buxoro"){ 
    bot('sendmessage',[ 
    'chat_id'=>$cid, 
    'text'=>"Ismingizni kiriting", 
    ]); 
    file_put_contents("Bot/$cid.step","buxara"); 
    } 
    if($step=="buxara"){ 
     bot("sendMediaGroup",[ 
    "chat_id"=>$cid, 
    "media"=>json_encode([ 
    ["type"=>"photo", 
    "media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1754187375/8.php?text=$text"], 
    ["type"=>"photo", 
    "media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1754187375/9.php?text=$text"], 
    /*["type"=>"photo", 
    "media" => "api?text=$text"], 
    ["type"=>"photo", 
    "media" => "api?text=$text"], 
    ["type"=>"photo", 
    "media" => "api?text=$text"], */
    ]), 
    ]);
    file_put_contents("Bot/$cid.step",""); 
    }//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi
    // Andijon
    if($text=="Andijon"){ 
    bot('sendmessage',[ 
    'chat_id'=>$cid, 
    'text'=>"Ismingizni kiriting", 
    ]); 
     file_put_contents("Bot/$cid.step","andijan"); 
     } 
    if($step=="andijan"){ 
    bot("sendMediaGroup",[ 
    "chat_id"=>$cid, 
    "media"=>json_encode([ 
    ["type"=>"photo", 
        "media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1754187375/10.php?text=$text"], 
    ["type"=>"photo", 
        "media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/6.php?text=$text"], 
   /* ["type"=>"photo", 
        "media" => "api?text=$text"], 
     ["type"=>"photo", 
        "media" => "api?text=$text"], 
     ["type"=>"photo", 
        "media" => "api?text=$text"], */
    ]), 
    ]);
    file_put_contents("Bot/$cid.step",""); 
     }//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi

// Xorijiy otm

     if($text=="Xorijiy OTM"){ 
        bot('sendmessage',[ 
        'chat_id'=>$cid, 
        'text'=>"Ismingizni kiriting", 
        ]); 
         file_put_contents("Bot/$cid.step","otm"); 
         } 
        if($step=="otm"){ 
        bot("sendMediaGroup",[ 
        "chat_id"=>$cid, 
        "media"=>json_encode([ 
        ["type"=>"photo", 
            "media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/7.php?text=$text"], 
        ["type"=>"photo", 
            "media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/8.php?text=$text"], 
        ["type"=>"photo", 
            "media" => "https://avtoapiuz.zooo.uz/AvtoApi/apilar/1829011441/9.php?text=$text"], 
         /*["type"=>"photo", 
            "media" => "api?text=$text"], 
         ["type"=>"photo", 
            "media" => "api?text=$text"], */
        ]), 
        ]);
        file_put_contents("Bot/$cid.step",""); 
         }//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi
        
if($text=="🏫 Universitetlar sertifikati"){
  bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Yaxshi!!
    Siz bizning botimizda Talabalar sertifikatini yasab olishingiz mumkin. Shaxringizni tanlang👇",
    'parse_mode'=>'html',
    'reply_markup'=>$shaxar,
  ]);
}

/*if($text=="🏫 Universitetlar sertifikati"){
    bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Nega viloyat va shaxarlar kam deb xafa bo'lmang🥺
      Tez kunda barcha shaxar va viloyatlarni qo'shamiz va ozimiz bot orqali sizga xabar beramiz!
      
Kanalimiz: @Asror_Ibrohimov
Dasturchilar: @UzbWolfs",
      'parse_mode'=>'html',
      'reply_markup'=>$shaxar,
    ]);//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi
  }*/

  if($text=="☎️  Qo'llab-quvvatlash"){
    bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"💡 Bizning qo'llab-quvvatlash chatimizga kirib o'zingizni qiziqtirgan savollaringizni berishingiz mumkin.
   
      💡 Yoki botdan qanday foydalanishni bilmayotga bo'lsangiz chatimizga kirib yordam so'rang.
      
      💡 Agar botdagi tugmachalar chiqmay qolayotgan bo'lsa botga /start buyrug'ini yuboring va bot ishlayveradi.
      
      ",
      'parse_mode'=>'html',
      'reply_markup'=>$orqa,
    ]);//BU KOD @ASRORDEV va @DoniyorSoft tomonidan tuzilib @kingsofphp va @php_python_cod kanalida tarqatildi
  }









    