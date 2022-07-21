<?php
ob_start(/*Befarosat manbaga tegma*/);

/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/

define('Asrorbekk','tokencha'); 
$admin = "1283919628"; // admin IDsi
$bot= "BOT_USER";
$kanalimz = "@Php_Python_Cod";

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".Asrorbekk."/".$method;
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
function put($fayl, $nima)
{
file_put_contents("$fayl", "$nima");
}

function get($fayl)
{
$get = file_get_contents("$fayl");
return $get;
}
function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/
$AsrorDev = json_decode(file_get_contents('php://input'));
$AsrorDeveloper = $AsrorDev->message;
$cid = $AsrorDeveloper->chat->id;
$text = $AsrorDeveloper->text;
$type = $AsrorDeveloper->chat->type;
$name = $AsrorDeveloper->from->first_name;
$uid = $AsrorDeveloper->from->id;
$user = $AsrorDeveloper->from->username;
$audio = $AsrorDeveloper->audio;
$reply = $AsrorDeveloper->reply_to_message->text;
$step=file_get_contents("bot/$cid.step");
$stepp=file_get_contents("step/$cid.step");
$nazad="≼≼Orqaga";
$regi="[$name](tg://user?id=$uid)";
$mid = $AsrorDeveloper->message_id;
$sreply = $AsrorDeveloper->reply_to_message->text;  
$sreplyd = $AsrorDeveloper->reply_to_message->document;
$contact = $AsrorDeveloper->contact;
$game = $AsrorDeveloper->game;
$location = $AsrorDeveloper->location;
$forward_ch = $AsrorDeveloper->forward_from_chat;
$forward = $AsrorDeveloper->forward_from;

$soni = file_get_contents("pul/$from_id/$uid.db");
$chan = file_get_contents("pul/$from_id.db");
$user = file_get_contents("AsrorDev.ids");
// Kod 101% ishlidi agar ishlamasa qayerinidur buzib qo'ygansan ishonaver :)
mkdir("baza");
mkdir("baza/$uid");
mkdir("bot");
mkdir("step");
mkdir("vid");
mkdir("Asror");
mkdir("Stat");

$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

$back = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$nazad"],],
]
]);
/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/
$Asror_Ibrokhimov = bot("getChatMember",[
"chat_id"=>"@Php_Python_Cod", // @Php_Python_Cod
"user_id"=>$uid,
]);
$Ibroh1mov = bot("getChatMember",[
"chat_id"=>"@Asror_Ibrohimov",  // @Asror_Ibrohimov
"user_id"=>$uid,
]);
$Asrorbeks = $Asror_Ibrokhimov->result->status;
$IbrohimovAsrorbekk = $Ibroh1mov->result->status;

         if(($Asrorbeks=="creator" or $Asrorbeks=="administrator" or $Asrorbeks=="member") and ($IbrohimovAsrorbekk=="creator" or $IbrohimovAsrorbekk=="administrator" or $IbrohimovAsrorbekk=="member")){
         }else{
    bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"
<b>Assalomu Aleykum <a href='tg://user?id=$uid'>$name</a> Botdan Foydalanish uchun
Quyidagi Kanallarimizga Obuna bo'lishingiz kerak!
A'zo bo'lib 📢Obuna boldim tugmasini bosing!
Botni keyin toʻliq ishlatishingiz mumkin!</b>",
         'disable_web_page_preview'=>true,
         'parse_mode'=>'html',
      'reply_markup'=>json_encode([
   'inline_keyboard'=>[
[['text'=>"○Obuna bolish","url"=>"https://t.me/Php_Python_Cod"],['text'=>"○Obuna bolish","url"=>"https://t.me/Asror_Ibrohimov"]],
[['text'=>"📢Obuna boldim","url"=>"https://t.me/$bot?start="]],
]
])
]);
return false;
}

$Asrorbek = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📈Statistika📉"],['text'=>"🌌Logo yasash"],['text'=>"♻️Fayl taxrirlash"],],
[['text'=>"🔎Musiqa izlash"],['text'=>"📚Ismlar manosi"],['text'=>"👨‍💻Dasturchi"],],
[['text'=>"🔄Convertor"],['text'=>"✍Nik yasash"],['text'=>"❤Sevgi testi"],],
[['text'=>"📝Malumot"],['text'=>"🕋Namoz Vaqtlari"],['text'=>"📝WebHook Sozlamalar"],],
]
]);

$konvert = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🎯Sticker->Rasm"],['text'=>"🎯Rasm->Sticker"],],
[['text'=>"🎵MP3->Voice 🎙"],['text'=>"Voice 🎙->MP3"],],
[['text'=>"✏Text->Voice🎙"],['text'=>"🎵MP3 edit"],],
[['text'=>"🎥Video ➔ 🎵MP3"],['text'=>"🎥Video ➔ Zaps"],],
[['text'=>"🎥𝐕𝐢𝐝𝐞𝐨 ➔ ⭕𝐕𝐢𝐝𝐞𝐨"],['text'=>"$nazad"],],
]
]);

$webhook = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📝WebHook"],['text'=>"🚫Webhookni ochirish"],],
[['text'=>"🗂Webhook malumot"],],
[['text'=>"$nazad"],],
]
]);

if($text=="/start"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Xush kelibsiz $name 
Siz bosh menyudasiz!
    
 Marhamat Kerakli Menuni Tanlab 
 botimizdan foydalaning!*⬇️",
'parse_mode'=>'markdown',
'reply_markup'=>$Asrorbek,
]);
} 
/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/
if($text=="🔄Convertor"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*🔄Konvertor Menusiga O'tdingiz!

Marhamat Kerakli Menuni Tanlab 
Konvert Qiling!*⬇️",
'parse_mode'=>'markdown',
'reply_markup'=>$konvert,
]);
} 

if($text=="📝Malumot"){
$getp = file_get_contents("https://api.telegram.org/bot".Asrorbekk."/getUserProfilePhotos?user_id=$uid&limit=1");
$json = json_decode($getp);
$photo = $json->result->photos[0][0]->file_id;
$user=$message->from->username;
$bio=$message->from->about;
if($bio == null){
$bio = "❌Mavjud emas";
}else{
$bio = "@$bio";
}
if($user == null){
$user = "❌Mavjud emas";
}else{
$user = "@$user";
}
bot('sendPhoto',[ 
'chat_id'=>$cid, 
'photo'=>$photo,
'caption'=>"
<b>👤 Ismingiz:</b> <a href = 'tg://user?id=$cid'>$name</a>
<b>🆔️R͞͞a͞͞q͞͞a͞͞m͞͞ingiz</b>: <i>$cid</i>
<b>💫 Usernameingiz</b>: <i>$user</i>
<b>🔰Bioingiz:</b>  <i>$bio</i>
",
'parse_mode'=>'html',
'reply_markup'=>$Asrorbek,
]);
}

$raqaa=["158","18","274","429","179","206","111","438","259","109","104","184","171","340","281","272","258","74","247","108","357","295","276","146","506","117","97","76","73","77","79","74","70","71","72","75","81","83","94","91","90","95","96","98","99","102","101"]; 
$raqamm=array_rand($raqaa); 
$ibrokhimovAsror="$raqaa[$raqamm]"; 
if($text=="🌌Logo yasash"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>" Logo Menusiga Xush Kelibsiz

Logo Yasash Uchun Menga So'z Yuboring!

➖➖➖➖➖➖
@$bot
",
'parse_mode'=>'markdown',
]);put("step/$cid.step","asror");
}
if($stepp=="asror"){
if($text=="/cancel"){
}else{
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"
 <b>🌌Tayyorlayapman!
Iltimos Biroz Kuting!</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(4);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://xvestuzru.xvest.ru/EPhoto360/api.php?type=$ibrokhimovAsror&text=$text",
'caption'=>"🌌Logo Tayyor✅
📝Logo So'zi: *$text*

➖➖➖➖➖
*@$bot Tomonidan Logo Yasab Berildi!*
",
'parse_mode'=>'markdown',
'reply_markup'=>$Asrorbek,
]);file_put_contents("step/$cid.step","no");
}
}

if($text=="📚Ismlar manosi"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"👤Ismingizni Yozing!",
'reply_markup'=>$rpl,
]);
}
if($reply=="👤Ismingizni Yozing!"){ 
$nom = file_get_contents("https://ismlar.com/search/$text");
  $exp = explode('<p class="text-size-5">',$nom);
  $expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
  $im = str_replace($expl[1],' ',$exp[1]);
  $ims = str_replace('</p>',' ',$im);
  $isms = str_replace('</div>',' ',$ims);
  $ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
  $ismk = str_replace('&#039;','`',$ismn);
  $ismm = trim("$ismk");
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>"<b>📚Ismingiz Ma'nosi</b>

<b>🔍Ismingiz:</b>  <i>$text</i>

📑 <b>Manosi:</b> <i>$ismm</i>!

Web-Sayt: AsrorDev.tk
Telegram kanal: @Asror_Ibrohimov",
    'parse_mode'=>'html',
 'reply_markup'=>$Asrorbek,
	]);
}
/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/
mkdir("edit");
$doc=$message->document;
 $doc=$message->document;
$doc_id=$sreplyd->file_id;       
 if(isset($sreplyd)){
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.Asrorbekk.'/getFile?file_id='.$doc_id),true);
$path=$url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.Asrorbekk.'/'.$path;
$type = strtolower(strrchr($file,'.')); 
$type=str_replace('.','',$type);
$okey = file_put_contents("edit/$text.$type",file_get_contents($file));
if($okey){
bot('sendChatAction', [
'chat_id'=>$cid,
'action'=>"upload_document",
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"✅Fayl Nomi tahrirlandi✅
Jo'natyapman....

Web-Sayt: AsrorDev.tk
Telegram kanal: @Asror_Ibrohimov",
'parse_mode'=>markdown,
]);  bot('sendDocument',[
'chat_id'=>$cid,        
'document'=>new CURLFile("edit/$text.$type"),
'thumb'=>$fileid,
'caption'=>"#By @$bot
Web-Sayt: AsrorDev.tk
Telegram kanal: @Asror_Ibrohimov"
]);
unlink("edit/$text.$type");
}
}
if($text == "🔎Musiqa izlash"){
bot ('sendmessage', [
'chat_id'=>$cid,
'text'=>"🎵Musiqa Nomini yozing!",
'reply_markup'=>$rpl,
]);
}

if($reply == "🎵Musiqa Nomini yozing!"){
$str1 = str_replace(" ","%20",$text);
$get = file_get_contents("https://muzmo.org/search?q=$str1");
$m = explode('<a class="block" href="/get_new?', $get)[1];
$mk = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m);
$mn = trim(explode("\n",$mk)[0]);
$mf = trim(explode("\n",$mk)[1]);
if ($mf == true){
$mr = file_get_contents("https://muzmo.org/get_new?$mn");
$mb = trim(explode('href="/get/',$mr)[1]);
$md = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb))[0];
$mf = str_replace("&#039;","'",$mf);
$n.= "/1) $mf";
}else{
$n.= "";
}
/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/
$m1 = explode('<a class="block" href="/get_new?', $get)[2];
$mk1 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m1);
$mn1 = trim(explode("\n",$mk1)[0]);
$mf1 = trim(explode("\n",$mk1)[1]);
if ($mf1 == true){
$mr1 = file_get_contents("https://muzmo.org/get_new?$mn1");
$mb1 = trim(explode('href="/get/',$mr1)[1]);
$md1 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb1))[0];
$mf1 = str_replace("&#039;","'",$mf1);
$n1.= "/2) $mf1";
}else{
$n1.= "";
}

$m2 = explode('<a class="block" href="/get_new?', $get)[3];
$mk2 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m2);
$mn2 = trim(explode("\n",$mk2)[0]);
$mf2 = trim(explode("\n",$mk2)[1]);
if ($mf2 == true){
$mr2 = file_get_contents("https://muzmo.org/get_new?$mn2");
$mb2 = trim(explode('href="/get/',$mr2)[1]);
$md2 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb3))[0];
$mf2 = str_replace("&#039;","'",$mf2);
$n2.= "/3) $mf2";
}else{
$mn2.= "";
}
/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/
$m3 = explode('<a class="block" href="/get_new?', $get)[4];
$mk3 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m3);
$mn3 = trim(explode("\n",$mk3)[0]);
$mf3 = trim(explode("\n",$mk3)[1]);
if ($mf3 == true){
$mr3 = file_get_contents("https://muzmo.org/get_new?$mn3");
$mb3 = trim(explode('href="/get/',$mr3)[1]);
$md3 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb3))[0];
$mf3 = str_replace("&#039;","'",$mf3);
$n3.= "/4) $mf3";
}else{
$n3.= "";
}

$m4 = explode('<a class="block" href="/get_new?', $get)[5];
$mk4 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m4);
$mn4 = trim(explode("\n",$mk4)[0]);
$mf4 = trim(explode("\n",$mk4)[1]);
if ($mf4 == true){
$mr4 = file_get_contents("https://muzmo.org/get_new?$mn4");
$mb4 = trim(explode('href="/get/',$mr4)[1]);
$md4 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb4))[0];
$mf4 = str_replace("&#039;","'",$mf4);
$n4.= "/5) $mf4";
}else{
$n4.= "";
}

$m5 = explode('<a class="block" href="/get_new?', $get)[6];
$mk5 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m5);
$mn5 = trim(explode("\n",$mk5)[0]);
$mf5 = trim(explode("\n",$mk5)[1]);
if ($mf5 == true){
$mr5 = file_get_contents("https://muzmo.org/get_new?$mn5");
$mb5 = trim(explode('href="/get/',$mr5)[1]);
$md5 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb5))[0];
$mf5 = str_replace("&#039;","'",$mf5);
$n5.= "/6) $mf5";
}else{
$n5.= "";
}
/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/
$m6 = explode('<a class="block" href="/get_new?', $get)[7];
$mk6 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m6);
$mn6 = trim(explode("\n",$mk6)[0]);
$mf6 = trim(explode("\n",$mk6)[1]);
if ($mf6 == true){
$mr6 = file_get_contents("https://muzmo.org/get_new?$mn6");
$mb6 = trim(explode('href="/get/',$mr6)[1]);
$md6 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb6))[0];
$mf6 = str_replace("&#039;","'",$mf6);
$n6.= "/7) $mf6";
}else{
$n6.= "";
}

$m7 = explode('<a class="block" href="/get_new?', $get)[8];
$mk7 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m7);
$mn7 = trim(explode("\n",$mk7)[0]);
$mf7 = trim(explode("\n",$mk7)[1]);
if ($mf7 == true){
$mr7 = file_get_contents("https://muzmo.org/get_new?$mn7");
$mb7 = trim(explode('href="/get/',$mr7)[1]);
$md7 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb7))[0];
$mf7 = str_replace("&#039;","'",$mf7);
$n7.= "/8) $mf7";
}else{
$n7.= "";
}

$m8 = explode('<a class="block" href="/get_new?', $get)[9];
$mk8 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m8);
$mn8 = trim(explode("\n",$mk8)[0]);
$mf8 = trim(explode("\n",$mk8)[1]);
if ($mf8 == true){
$mr8 = file_get_contents("https://muzmo.org/get_new?$mn8");
$mb8 = trim(explode('href="/get/',$mr8)[1]);
$md8 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb8))[0];
$mf8 = str_replace("&#039;","'",$mf8);
$n8.= "/9) $mf8";
}else{
$n8.= "";
}
/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/
$m9 = explode('<a class="block" href="/get_new?', $get)[10];
$mk9 = str_replace(['"><img class="i_block" src="/static/images/16x16/kompoziciya.gif" alt=" " />','</a>','</div>'],['','',''],$m9);
$mn9 = trim(explode("\n",$mk9)[0]);
$mf9 = trim(explode("\n",$mk9)[1]);
if ($mf9 == true){
$mr9 = file_get_contents("https://muzmo.org/get_new?$mn9");
$mb9 = trim(explode('href="/get/',$mr9)[1]);
$md9 = explode("\n",str_replace('">                    <img src="/static/images/16x16/zagruzki.gif" alt=" " /> Скачать оригинал','',$mb9))[0];
$mf9 = str_replace("&#039;","'",$mf9);
$n9.= "/10) $mf9";
}else{
$n9.= "";
}
if($mf!=false){
bot ('sendmessage',[
'chat_id'=>$cid,
'text'=>"🎶 $text bo'yicha qidiruv natijalari:

$n
$n1
$n2
$n3
$n4
$n5
$n6
$n7
$n8
$n9

Quyidagi tartib raqamlardan birini bosing bot sizga bu qo'shiqlarni yuboradi

Web-Sayt: AsrorDev.tk
Telegram kanal: @Asror_Ibrohimov",
]);
file_put_contents("bot/$cid.txt","\nhttps://muzmo.org/get/$md\nhttps://muzmo.org/get/$md1\nhttps://muzmo.org/get/$md2\nhttps://muzmo.org/get/$md3\nhttps://muzmo.org/get/$md4\nhttps://muzmo.org/get/$md5\nhttps://muzmo.org/get/$md6\nhttps://muzmo.org/get/$md7\nhttps://muzmo.org/get/$md8\nhttps://muzmo.org/get/$md9");
file_put_contents("bot/$cid.step","music");
}else{
bot ('sendmessage',[
'chat_id'=>$cid,
'text'=>"Siz izlagan musiqa mavjud emas!

Web-Sayt: AsrorDev.tk
Telegram kanal: @Asror_Ibrohimov",
'reply_markup'=>$Asrorbek,
]);
unlink("bot/$cid.step");
}
}

if($step == "music"){
if($text == "/1" or $text == "/2" or $text == "/3" or $text == "/4" or $text == "/5" or $text == "/6" or $text == "/7" or $text == "/8" or $text == "/9" or $text == "/10"){
$str = str_replace("/","",$text);
$exp = explode("\n",$txt)[$str];
if($exp == true){
bot ('sendaudio',[
'chat_id'=>$cid,
'audio'=>$exp,
'caption'=>"@$bot",
'reply_markup'=>$Asrorbek,
]);
unlink("bot/$cid.step");
unlink("bot/$cid.txt");
}else{
bot ('sendmessage',[
'chat_id'=>$cid,
'text'=>"Yuklashni imkoni bo'lmadi.",
'reply_markup'=>$Asrorbek,
]);
unlink("bot/$cid.step");
}
}else{
unlink("bot/$cid.step");
}
}
if($text=="$nazad"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🏠Bosh Menu ga qaytdingiz✅",
'parse_mode'=>'html',
'reply_markup'=>$Asrorbek,
]);
}

//nik yasash menyusi
if($text == "✍Nik yasash"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"✏*Nick Yasash Uchun Menga So'z Yuboring*


Botimiz: @$bot

Web-Sayt: AsrorDev.tk
Telegram kanal: @Asror_Ibrohimov ",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","nik");
}
if($stepp=="nik"){ 
if($text=="/cancel"){
}else{
$Ibrokhimov = $text;
$Ibrokhimov = str_replace('a', 'ⓐ', $Ibrokhimov);
$Ibrokhimov = str_replace('b', 'ⓑ', $Ibrokhimov);
$Ibrokhimov = str_replace('c', '©', $Ibrokhimov);
$Ibrokhimov = str_replace('d', 'ⓓ', $Ibrokhimov);
$Ibrokhimov = str_replace('e', 'ⓔ', $Ibrokhimov);
$Ibrokhimov = str_replace('f', 'ⓕ', $Ibrokhimov);
$Ibrokhimov = str_replace('g', 'ⓖ', $Ibrokhimov);
$Ibrokhimov = str_replace('h', 'ⓗ', $Ibrokhimov);
$Ibrokhimov = str_replace('i', 'ⓘ', $Ibrokhimov);
$Ibrokhimov = str_replace('j', 'ⓙ', $Ibrokhimov);
$Ibrokhimov = str_replace('k', 'ⓚ', $Ibrokhimov);
$Ibrokhimov = str_replace('l', 'ⓛ', $Ibrokhimov);
$Ibrokhimov = str_replace('m', 'ⓜ', $Ibrokhimov);
$Ibrokhimov = str_replace('n', 'ⓝ', $Ibrokhimov);
$Ibrokhimov = str_replace('o', 'ⓞ', $Ibrokhimov);
$Ibrokhimov = str_replace('p', 'ⓟ', $Ibrokhimov);
$Ibrokhimov = str_replace('q', 'ⓠ', $Ibrokhimov);
$Ibrokhimov = str_replace('r', 'ⓡ', $Ibrokhimov);
$Ibrokhimov = str_replace('s', 'ⓢ', $Ibrokhimov);
$Ibrokhimov = str_replace('t', 'ⓣ', $Ibrokhimov);
$Ibrokhimov = str_replace('u', 'ⓤ', $Ibrokhimov);
$Ibrokhimov = str_replace('v', 'ⓥ', $Ibrokhimov);
$Ibrokhimov = str_replace('w', 'ⓦ', $Ibrokhimov);
$Ibrokhimov = str_replace('x', 'ⓧ', $Ibrokhimov);
$Ibrokhimov = str_replace('y', 'ⓨ', $Ibrokhimov);
$Ibrokhimov = str_replace('z', 'ⓩ', $Ibrokhimov);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$Ibrokhimov",
'reply_markup'=>$nicks, 
]);
}
}
//2 nick
if($stepp=="nik"){ 
if($text=="/cancel"){
}else{
$Ibrohimov = $text;
$Ibrohimov = str_replace('a', 'Ā', $Ibrohimov);
$Ibrohimov = str_replace('b', '乃', $Ibrohimov);
$Ibrohimov = str_replace('c', 'Ċ', $Ibrohimov);
$Ibrohimov = str_replace('d', 'Ɖ', $Ibrohimov);
$Ibrohimov = str_replace('e', 'Ē', $Ibrohimov);
$Ibrohimov = str_replace('f', '₣', $Ibrohimov);
$Ibrohimov = str_replace('g', 'Ǥ', $Ibrohimov);
$Ibrohimov = str_replace('h', 'Ħ', $Ibrohimov);
$Ibrohimov = str_replace('i', 'Ī', $Ibrohimov);
$Ibrohimov = str_replace('j', 'J', $Ibrohimov);
$Ibrohimov = str_replace('k', '₭', $Ibrohimov);
$Ibrohimov = str_replace('l', 'Ŀ', $Ibrohimov);
$Ibrohimov = str_replace('m', 'M', $Ibrohimov);
$Ibrohimov = str_replace('n', '₦', $Ibrohimov);
$Ibrohimov = str_replace('o', 'Ō', $Ibrohimov);
$Ibrohimov = str_replace('p', 'P', $Ibrohimov);
$Ibrohimov = str_replace('q', 'Ǭ', $Ibrohimov);
$Ibrohimov = str_replace('r', 'Ṝ', $Ibrohimov);
$Ibrohimov = str_replace('s', 'Ƨ', $Ibrohimov);
$Ibrohimov = str_replace('t', 'Ŧ', $Ibrohimov);
$Ibrohimov = str_replace('u', 'Ū', $Ibrohimov);
$Ibrohimov = str_replace('v', '∀', $Ibrohimov);
$Ibrohimov = str_replace('w', 'ฬ', $Ibrohimov);
$Ibrohimov = str_replace('x', 'Ж', $Ibrohimov);
$Ibrohimov = str_replace('y', 'Ȳ', $Ibrohimov);
$Ibrohimov = str_replace('z', 'Ƶ', $Ibrohimov);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$Ibrohimov",
'reply_markup'=>$nicks, 
]);
}}
//3 nick
if($stepp=="nik"){ 
if($text=="/cancel"){
}else{
$Ibrohimov = $text;
$Ibrohimov = str_replace('a', 'მ', $Ibrohimov);
$Ibrohimov = str_replace('b', 'ჩ', $Ibrohimov);
$Ibrohimov = str_replace('c', 'ƈ', $Ibrohimov);
$Ibrohimov = str_replace('d', 'ძ', $Ibrohimov);
$Ibrohimov = str_replace('e', 'ε', $Ibrohimov);
$Ibrohimov = str_replace('f', 'բ', $Ibrohimov);
$Ibrohimov = str_replace('g', 'ց', $Ibrohimov);
$Ibrohimov = str_replace('h', 'հ', $Ibrohimov);
$Ibrohimov = str_replace('i', 'ἶ', $Ibrohimov);
$Ibrohimov = str_replace('j', 'ʝ', $Ibrohimov);
$Ibrohimov = str_replace('k', 'ƙ', $Ibrohimov);
$Ibrohimov = str_replace('l', 'l', $Ibrohimov);
$Ibrohimov = str_replace('m', 'ო', $Ibrohimov);
$Ibrohimov = str_replace('n', 'ղ', $Ibrohimov);
$Ibrohimov = str_replace('o', 'օ', $Ibrohimov);
$Ibrohimov = str_replace('p', 'ր', $Ibrohimov);
$Ibrohimov = str_replace('q', 'գ', $Ibrohimov);
$Ibrohimov = str_replace('r', 'ɾ', $Ibrohimov);
$Ibrohimov = str_replace('s', 'ʂ', $Ibrohimov);
$Ibrohimov = str_replace('t', 'է', $Ibrohimov);
$Ibrohimov = str_replace('u', 'մ', $Ibrohimov);
$Ibrohimov = str_replace('v', 'ν', $Ibrohimov);
$Ibrohimov = str_replace('w', 'ω', $Ibrohimov);
$Ibrohimov = str_replace('x', 'ჯ', $Ibrohimov);
$Ibrohimov = str_replace('y', 'ყ', $Ibrohimov);
$Ibrohimov = str_replace('z', 'z', $Ibrohimov);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$Ibrohimov",
'reply_markup'=>$nicks, 
]);
}}
//4 nick
if($stepp=="nik"){ 
if($text=="/cancel"){
}else{
$Ibrohimov = $text;
$Ibrohimov = str_replace('a', 'ᴬ', $Ibrohimov);
$Ibrohimov = str_replace('b', 'ᴮ', $Ibrohimov);
$Ibrohimov = str_replace('c', 'ᶜ', $Ibrohimov);
$Ibrohimov = str_replace('d', 'ᴰ', $Ibrohimov);
$Ibrohimov = str_replace('e', 'ᴱ', $Ibrohimov);
$Ibrohimov = str_replace('f', 'ᶠ', $Ibrohimov);
$Ibrohimov = str_replace('g', 'ᴳ', $Ibrohimov);
$Ibrohimov = str_replace('h', 'ᴴ', $Ibrohimov);
$Ibrohimov = str_replace('i', 'ᴵ', $Ibrohimov);
$Ibrohimov = str_replace('j', 'ᴶ', $Ibrohimov);
$Ibrohimov = str_replace('k', 'ᴷ', $Ibrohimov);
$Ibrohimov = str_replace('l', 'ᴸ', $Ibrohimov);
$Ibrohimov = str_replace('m', 'ᴹ', $Ibrohimov);
$Ibrohimov = str_replace('n', 'ᴺ', $Ibrohimov);
$Ibrohimov = str_replace('o', 'ᴼ', $Ibrohimov);
$Ibrohimov = str_replace('p', 'ᴾ', $Ibrohimov);
$Ibrohimov = str_replace('q', 'ᵠ', $Ibrohimov);
$Ibrohimov = str_replace('r', 'ᴿ', $Ibrohimov);
$Ibrohimov = str_replace('s', 'ˁ', $Ibrohimov);
$Ibrohimov = str_replace('t', 'ᵀ', $Ibrohimov);
$Ibrohimov = str_replace('u', 'ᵁ', $Ibrohimov);
$Ibrohimov = str_replace('v', 'ᵛ', $Ibrohimov);
$Ibrohimov = str_replace('w', 'ᵂ', $Ibrohimov);
$Ibrohimov = str_replace('x', 'ˣ', $Ibrohimov);
$Ibrohimov = str_replace('y', 'ʸ', $Ibrohimov);
$Ibrohimov = str_replace('z', 'ᶻ', $Ibrohimov);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$Ibrohimov",
'reply_markup'=>$nicks, 
]);
}}
//5 nick
if($stepp=="nik"){ 
if($text=="/cancel"){
}else{
$Ibrohimov = $text;
$Ibrohimov = str_replace('a', '🅐', $Ibrohimov);
$Ibrohimov = str_replace('b', '🅑', $Ibrohimov);
$Ibrohimov = str_replace('c', '🅒', $Ibrohimov);
$Ibrohimov = str_replace('d', '🅓', $Ibrohimov);
$Ibrohimov = str_replace('e', '🅔', $Ibrohimov);
$Ibrohimov = str_replace('f', '🅕', $Ibrohimov);
$Ibrohimov = str_replace('g', '🅖', $Ibrohimov);
$Ibrohimov = str_replace('h', '🅗', $Ibrohimov);
$Ibrohimov = str_replace('i', '🅘', $Ibrohimov);
$Ibrohimov = str_replace('j', '🅙', $Ibrohimov);
$Ibrohimov = str_replace('k', '🅚', $Ibrohimov);
$Ibrohimov = str_replace('l', '🅛', $Ibrohimov);
$Ibrohimov = str_replace('m', '🅜', $Ibrohimov);
$Ibrohimov = str_replace('n', '🅝', $Ibrohimov);
$Ibrohimov = str_replace('o', '🅞', $Ibrohimov);
$Ibrohimov = str_replace('p', '🅟', $Ibrohimov);
$Ibrohimov = str_replace('q', '🅠', $Ibrohimov);
$Ibrohimov = str_replace('r', '🅡', $Ibrohimov);
$Ibrohimov = str_replace('s', '🅢', $Ibrohimov);
$Ibrohimov = str_replace('t', '🅣', $Ibrohimov);
$Ibrohimov = str_replace('u', '🅤', $Ibrohimov);
$Ibrohimov = str_replace('v', '🅥', $Ibrohimov);
$Ibrohimov = str_replace('w', '🅦', $Ibrohimov);
$Ibrohimov = str_replace('x', '🅧', $Ibrohimov);
$Ibrohimov = str_replace('y', '🅨', $Ibrohimov);
$Ibrohimov = str_replace('z', '🅩', $Ibrohimov);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$Ibrohimov",
'reply_markup'=>$nicks, 
]);
}}
//6 nick
if($stepp=="nik"){ 
if($text=="/cancel"){
}else{
$Ibrohimov = $text;
$Ibrohimov = str_replace('a', '🄰', $Ibrohimov);
$Ibrohimov = str_replace('b', '🄱', $Ibrohimov);
$Ibrohimov = str_replace('c', '🄲', $Ibrohimov);
$Ibrohimov = str_replace('d', '🄳', $Ibrohimov);
$Ibrohimov = str_replace('e', '🄴', $Ibrohimov);
$Ibrohimov = str_replace('f', '🄵', $Ibrohimov);
$Ibrohimov = str_replace('g', '🄶', $Ibrohimov);
$Ibrohimov = str_replace('h', '🄷', $Ibrohimov);
$Ibrohimov = str_replace('i', '🄸', $Ibrohimov);// Bu yerlarga tegmay qoyaver agar tegsang buzib qoyasan!
$Ibrohimov = str_replace('j', '🄹', $Ibrohimov);// <__Manba: @php_python_cod__> \\
$Ibrohimov = str_replace('k', '🄺', $Ibrohimov);
$Ibrohimov = str_replace('l', '🄻', $Ibrohimov);
$Ibrohimov = str_replace('m', '🄼', $Ibrohimov);
$Ibrohimov = str_replace('n', '🄽', $Ibrohimov);
$Ibrohimov = str_replace('o', '🄾', $Ibrohimov);
$Ibrohimov = str_replace('p', '🄿', $Ibrohimov);
$Ibrohimov = str_replace('q', '🅀', $Ibrohimov);
$Ibrohimov = str_replace('r', '🅁', $Ibrohimov);
$Ibrohimov = str_replace('s', '🅂', $Ibrohimov);
$Ibrohimov = str_replace('t', '🅃', $Ibrohimov);
$Ibrohimov = str_replace('u', '🅄', $Ibrohimov);
$Ibrohimov = str_replace('v', '🅅', $Ibrohimov);
$Ibrohimov = str_replace('w', '🅆', $Ibrohimov);
$Ibrohimov = str_replace('x', '🅇', $Ibrohimov);
$Ibrohimov = str_replace('y', '🅈', $Ibrohimov);
$Ibrohimov = str_replace('z', '🅉', $Ibrohimov);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$Ibrohimov",
'reply_markup'=>$nicks, 
]);
}}
if($stepp=="nik"){ 
if($text=="/cancel"){
}else{
$Ibrohimov = $text;
$Ibrohimov = str_replace('a', '🅰', $Ibrohimov);
$Ibrohimov = str_replace('b', '🅱', $Ibrohimov);
$Ibrohimov = str_replace('c', '🅲', $Ibrohimov);
$Ibrohimov = str_replace('d', '🅳', $Ibrohimov);
$Ibrohimov = str_replace('e', '🅴', $Ibrohimov);
$Ibrohimov = str_replace('f', '🅵', $Ibrohimov);
$Ibrohimov = str_replace('g', '🅶', $Ibrohimov);
$Ibrohimov = str_replace('h', '🅷', $Ibrohimov);
$Ibrohimov = str_replace('i', '🅸', $Ibrohimov);
$Ibrohimov = str_replace('j', '🅹', $Ibrohimov);
$Ibrohimov = str_replace('k', '🅺', $Ibrohimov);
$Ibrohimov = str_replace('l', '🅻', $Ibrohimov);
$Ibrohimov = str_replace('m', '🅼', $Ibrohimov);
$Ibrohimov = str_replace('n', '🅽', $Ibrohimov);
$Ibrohimov = str_replace('o', '🅾', $Ibrohimov);
$Ibrohimov = str_replace('p', '🅿', $Ibrohimov);
$Ibrohimov = str_replace('q', '🆀', $Ibrohimov);
$Ibrohimov = str_replace('r', '🆁', $Ibrohimov);
$Ibrohimov = str_replace('s', '🆂', $Ibrohimov);
$Ibrohimov = str_replace('t', '🆃', $Ibrohimov);
$Ibrohimov = str_replace('u', '🆄', $Ibrohimov);
$Ibrohimov = str_replace('v', '🆅', $Ibrohimov);
$Ibrohimov = str_replace('w', '🆆', $Ibrohimov);
$Ibrohimov = str_replace('x', '🆇', $Ibrohimov);
$Ibrohimov = str_replace('y', '🆈', $Ibrohimov);
$Ibrohimov = str_replace('z', '🆉', $Ibrohimov);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$Ibrohimov",
'reply_markup'=>$nicks, 
]);file_put_contents("step/$cid.step","otmen");
}}
if($text=="♻️Fayl taxrirlash"){
bot('sendPhoto', [
'photo'=>"https://t.me/music_mp3_bass/143",
'chat_id'=>$cid,
'caption'=>"Faylingizni Nomini O'zgartirish uchun Rasmni ko'ring!⬆️

Kanalimiz: @SirojiddiN6326",
'parse_mode'=>'html',
'reply_markup'=>$Asrorbek,
]);
}
/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/
$lichka=file_get_contents("azo.db");
$gruppa=file_get_contents("gr.db");
if($type=="group" or $type=="supergroup"){
if(strpos($gruppa,"$cid") !==false){
}else{
file_put_contents("gr.db","$gruppa\n$cid");
}
}
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("azo.db","$lichka\n$cid");
}
}
if($text=="📈Statistika📉"){
$lichka=file_get_contents("azo.db");
$lich=substr_count($lichka,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
    'text'=> "<b>Bot statatistikasi:</b>    
├▶A'zolar: <b>$lich</b>
├▶Guruxlar: <b>$gro</b>
└▶⭕Umumuy: <b>$um</b>

👨‍💻Dasturchi: @DaMaS_BaSS",
'parse_mode' => 'html',
'reply_markup'=>$Asrorbek, 
]);
}

mkdir("mp3");
if($text=="🎵MP3 edit"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Mp3* Tahrirlash uchun

Menga Mp3 Yuboring!",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","mp3edit");
} 
if($stepp=="mp3edit"){
if($text=="/cancel"){
}else{
$afile_id=$audio->file_id;
$audio=$message->audio;					file_put_contents("mp3/one.txt","null");
		$url = json_decode(file_get_contents('https://api.telegram.org/bot'.Asrorbekk.'/getFile?file_id='.$afile_id),true);
					$path=$url['result']['file_path'];
 $file = 'https://api.telegram.org/file/bot'.Asrorbekk.'/'.$path;
		file_put_contents("mp3/$name.mp3",file_get_contents($file));
		bot('sendAudio',[
		'chat_id'=>$cid,
		'audio'=>new CURLFile("mp3/$name.mp3"),
		'performer'=>"@$user",
		'caption'=>"@$bot Tomonidan O'zgartirib Berildi!",
		'reply_markup'=>$konvert,
		]);file_put_contents("step/$cid.step","noo");
		}
}
	/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/
if($text=="🎵MP3->Voice 🎙"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Musiqa*ni *Voice* Ga Aylantirish uchun

Menga Musiqa Yuboring!",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","voice");
} 
if($stepp=="voice"){
if($text=="/cancel"){
}else{
$audio = $message->audio;
$file = $audio->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('mp3/voice.ogg',file_get_contents('https://api.telegram.org/file/bot'.Asrorbekk.'/'.$patch));
    bot('sendVoice',[
'chat_id'=>$cid ,
'voice'=>new CURLFile('mp3/voice.ogg'),
'caption'=>"@$bot
Tomonidan *Mp3* ➖➡️ *Voice* ga O'zgartirildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$konvert,
]);
    }
    }
    //voice->mp3
//if(isset($message->voice)){
if($text=="Voice 🎙->MP3🎵"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Voice*ni *Mp3* Ga Aylantirish uchun

Menga Voice(Golos) Yuboring!",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","mp3");
} 
if($stepp=="mp3"){
if($text=="/cancel"){
}else{
$voice = $message->voice;
$file = $voice->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('mp3/mp3.mp3',file_get_contents('https://api.telegram.org/file/bot'.Asrorbekk.'/'.$patch));
    bot('sendAudio',[
'chat_id'=>$cid,
'audio'=> new CURLFile('mp3/mp3.mp3'),
'title'=>$name,
'performer'=>"@$user",
'caption'=>"@$bot
Tomonidan *Voice* ➖➡️ *Mp3* ga O'zgartirildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$konvert,
]);file_put_contents("step/$cid.step","noo");
    }
    }
//text->voice 
if($text=="✏Text->Voice🎙"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"✏Matningizni Yuboring!",
'reply_markup'=>$rpl,
]);
}
if($reply=="✏Matningizni Yuboring!"){
$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text='.urlencode($text));
 file_put_contents('mp3/voicee.ogg',$vo);
		   bot('sendvoice',[
'chat_id'=>$cid,
'voice'=>new CURLFile('mp3/voicee.ogg'),
'caption'=>"@$bot
Tomonidan *Text* ➖➡️ *Voice* ga O'zgartirildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$konvert,
]);
}
//sticker 
//if(isset($message->photo)){
if($text=="🎯Rasm->Sticker"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Rasm*ni *Sticker* Ga Aylantirish uchun

Menga Rasm Yuboring!",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","photo");
} 
if($stepp=="photo"){
if($text=="/cancel"){
}else{
$photo = $message->photo;
$filee = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$filee]);
      $patch = $get->result->file_path;
      file_put_contents('vid/stick.png',file_get_contents('https://api.telegram.org/file/bot'.Asrorbekk.'/'.$patch));
    bot('sendsticker',[
'chat_id'=>$cid,
'sticker'=>new CURLFile('vid/stick.png'),
'reply_markup'=>$konvert, 
]);file_put_contents("step/$cid.step","noo");
    }
    }
//rasm
//if(isset($message->sticker)){
if($text=="🎯Sticker->Rasm"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Sticker*ni *Rasm* Ga Aylantirish uchun

Menga Rasm Yuboring!",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","stick");
} 
if($stepp=="stick"){
if($text=="/cancel"){
}else{
$sticker = $message->sticker;
$file = $sticker->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('vid/photo.png',file_get_contents('https://api.telegram.org/file/bot'.Asrorbekk.'/'.$patch));
    bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>new CURLFile('vid/photo.png'),
'caption'=>"@$bot
Tomonidan *Sticker*➖➡️*Rasm* ga Aylantirildi!",
'parse_mode'=>'markdown',
'reply_markup'=>$konvert,
]); file_put_contents("step/$cid.step","noo");
    }
    }/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/
if($text == "🎥Video ➔ 🎵MP3"){
	bot('sendMessage',[
		'chat_id'=>$cid,
		'text'=>"🎥*Video* ni *Mp3🎵* ga Aylantirish uchun

Menga Video Yuboring!
",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","vidmp3");
}
if($stepp =="vidmp3"){
$file = "https://api.telegram.org/file/bot".Asrorbekk."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
file_put_contents("vid/$cid.mp3",file_get_contents($file));
	    bot('sendaudio',[
	    	'chat_id'=>$cid,
	    	'audio'=>new CURLFile("vid/$cid.mp3")
	    ]);file_put_contents("step/$cid.step","otmen");
}
if($text =="🎥Video ➔ Zaps") {
	bot('sendMessage',[
		'chat_id'=>$cid,
		'text'=>"🎥*Video* ni  *Golos*🎙 ga Aylantirish uchun

Menga Video Yuboring!",
'parse_mode'=>'markdown',
	]);file_put_contents("step/$cid.step","vidgolos");
}
if($stepp == "vidgolos"){
$file = "https://api.telegram.org/file/bot".Asrorbekk."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
file_put_contents("vid/$cid.ogg",file_get_contents($file));
	    bot('sendvoice',[
	    	'chat_id'=>$cid,
	    	'voice'=>new CURLFile("vid/$cid.ogg")
	    ]);file_put_contents("step/$cid.step","otmen");
}
if($text =="🎥𝐕𝐢𝐝𝐞𝐨 ➔ ⭕𝐕𝐢𝐝𝐞𝐨"){
	bot('sendMessage',[
		'chat_id'=>$cid,
		'text'=>"🎥*Oddiy Video* ni ⭕*Yumaloq Video*  ga Aylantirish uchun
		
		Menga Oddiy Video Yuboring!",
		'parse_mode'=>'markdown',
		]);file_put_contents("step/$cid.step","vidnot");
		}
if($stepp =="vidnot"){
	$file = "https://api.telegram.org/file/bot".Asrorbekk."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
file_put_contents("vid/$cid.mp4",file_get_contents($file));
	    bot('sendVideoNote',[
	    	'chat_id'=>$cid,
	    	'video_note'=>new CURLFile("vid/$cid.mp4")
	    ]);
}
/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/
mkdir("webhook");
if($text=="📝WebHook"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📝WebHook Qilinadigon
Bot  TOKEN ni yuboring!",
]);file_put_contents("step/$cid.step","token");
}
if($stepp=="token"){
if($text=="/cancel"){
}else{
file_put_contents("webhook/$cid.token","$text");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🤖Endi Bot Manzilini Yuboring!
➖➖
Eslatma:
*https://* Siz Manzil Yuboring!
Aks Xolda Bot ishlamasligi mumkin!",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","weburl");
}
}
if($stepp=="weburl"){
if($text=="/cancel"){
}else{
file_put_contents("webhook/$cid.url","$text");
$tokenc=file_get_contents("webhook/$cid.token");
$ali1 = json_decode(file_get_contents("https://api.telegram.org/bot" . $tokenc . "/getwebhookinfo"));
$ali2 = json_decode(file_get_contents("https://api.telegram.org/bot" . $tokenc . "/getme"));
        //==================
    $tik2 = objectToArrays($ali1);
    $ur = $tik2["result"]["url"];
    $ok2 = $tik2["ok"];
    $tik1 = objectToArrays($ali2);
    $un = $tik1["result"]["username"];
    $fr = $tik1["result"]["first_name"];
    $id = $tik1["result"]["id"];
    $ok = $tik1["ok"];
file_put_contents("webhook/$cid.user","@$un");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
Ma'lumotlarni Tekshiring!
➖➖➖➖➖➖
Bot Name: [$fr](https://t.me/$un)
Bot Username: @$un
Bot Id: [$id](https://t.me/$un)
Bot Token: $tokenc
➖➖➖➖➖➖
To'g'ri bo'lsa *📝SetWebHook⚙* ni Bosing!",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📝SetWebHook⚙"],],
]
]),
]);file_put_contents("step/$cid.step","noo");
}
}
if($text=="📝SetWebHook⚙"){
$un=file_get_contents("webhook/$cid.user");
$tokenc=file_get_contents("webhook/$cid.token");
$urlcha=file_get_contents("webhook/$cid.url");
file_get_contents("https://api.telegram.org/bot$tokenc/setwebhook?url=$urlcha");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
*$un* - Botingiz 

*Tokeni*: `$tokenc`

➖➖➖➖➖➖➖➖➖➖➖
*@$bot*
Tomonidan Toliq *WebHook* Qilindi!🔧
➖➖➖➖➖➖➖➖➖➖➖
",
'parse_mode'=>'markdown',
'reply_markup'=>$webhook, 
]);
}

if($text=="📝WebHook Sozlamalar"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Botingizni *WebHook* Qilish Menusidasiz!
👇Menulardan Foydalanib Botingizni *Ish*ga Tushuring!
➖➖➖➖➖➖
*@$bot
Tomonidan Taqdim Etildi!*
",
'parse_mode'=>'markdown',
'reply_markup'=>$webhook,
]);
}
if($text=="🚫Webhookni ochirish"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📝WebHook O'chiriladigon
Bot  TOKEN ni yuboring!",
]);file_put_contents("step/$cid.step","delweb");
}
if($stepp=="delweb"){
if($text=="/cancel"){
}else{
file_get_contents("https://api.telegram.org/bot$text/deletewebhook");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"`$text`
Tokeni *WebHook* dan Uzildi
➖➖➖
@$bot
Tomonidan WebHook O'chirildi
",
'parse_mode'=>'markdown',
'reply_markup'=>$webhook, 
]);file_put_contents("step/$cid.step","noo");
}
}
if($text=="🗂Webhook malumot"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Qaysi *Token*  Xaqida Ma'lumot Olmoqchisiz?
Menga *Token*ini Yuboring!",
'parse_mode'=>'markdown',
]);file_put_contents("step/$cid.step","infoweb");
}
if($stepp=="infoweb"){
if($text=="/cancel"){
}else{
$ali2 = json_decode(file_get_contents("https://api.telegram.org/bot" . $text . "/getme"));
    $tik1 = objectToArrays($ali2);
    $un = $tik1["result"]["username"];
    $fr = $tik1["result"]["first_name"];
    $id = $tik1["result"]["id"];
    $ok = $tik1["ok"];
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"
`$text` ➖ *Token*i Xaqida Ma'lumotlar❗
➖➖➖➖➖➖
Bot Name: [$fr](https://t.me/$un)
Bot Username: @$un
Bot Id: [$id](https://t.me/$un)
Bot Token: $text

➖➖➖➖➖➖
@$bot
Tomonidan Ma'lumot Berildi!
",
'parse_mode'=>'markdown',
'reply_markup'=>$webhook, 
]);file_put_contents("step/$cid.step","noo");
}
}
/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/
$sevgitest = ["1","67","83","96","82","62","02","90","99","98","97","90","70","80","99","41","97","99","100","99","89","88","37","64","90","72","33","81","7","60","62","71","1","93","90","71","98","99","0"];
$sevgirand = array_rand($sevgitest);
$sevgi = "$sevgitest[$sevgirand]";
if($text=="❤Sevgi testi"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"❤️ *Sevgi Test *😍

❤️ Botimizda Siz O'z Sevgingizni Test Qilib Ko'ring 🤩

➖➖➖➖➖➖
*O'z Ismingizni Yozing!*",
'parse_mode'=>'markdown',
]);put("step/$cid.step","ism1");
}
if($stepp=="ism1"){
if($text=="/cancel"){
}else{
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"💞Endi Sevgan Insoningizni
Ismini Yuboring!
",
]);put("step/$cid.step","ism2");
}put("sevgi/$cid.ism1","$text");
}
/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/
if($stepp=="ism2"){
if($text=="/cancel"){
}else{
put("sevgi/$cid.ism2","$text");
$ism1=get("sevgi/$cid.ism1");
$ism2=get("sevgi/$cid.ism2");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📌Tekshiryapman!
",
]);
sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'text'=>'💞💕❤'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid +1,
 'text'=>'💕❤💞'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'❤💞💕'
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"❤Ismingiz: *$ism1*
❤Sevganingizni Ismi: *$ism2*
➖
💞Orangizdagi Sevgi💞: *$sevgi %*

➖➖➖➖➖
*@$bot Tomonidan Test Qilindi!*
",
'parse_mode'=>'markdown',
'reply_markup'=>$Asrorbek, 
]);file_put_contents("step/$cid.step","noo");
}
}

// Admin paneli

$Asror_Ibroh1mov = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
[['text'=>"Forward yuborish"],['text'=>"Xabar"],],
[['text'=>"Bot kodi"],['text'=>"📈Statistika📉"],],
[['text'=>"$nazad"],],
]
]);
    
/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/ 

if($tx=="/panel" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨🏻‍💻Admin paneliga xush kelibsiz Asror aka !!
Marxamat foydalanuvchilaringizga xabar yuborish uchun tugmalardan birini tanlang!!!",
'reply_markup'=>$Asror_Ibroh1mov,
]); 
}


if($text=="Forward Yuborish" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Asror Aka forward qilib yubormoqchi bolgan xabaringizni menga yuboring
Men siz jo'natgan xabarni xamma foydalanuvchilaringizga yuboraman!",
]);
file_put_contents("Bot/$cid.step","forward");
}
    
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
'text'=>"Xabaringiz barcha foydalanuvchilaringizga bexato yuborildi...!",
]);
file_put_contents("Bot/$cid.step","");
}
}

if($text=="Bot kodi" and $cid==$admin){
  bot('sendDocument',[
  'chat_id'=>$cid,
  'document'=>new CURLfile(__FILE__),
  ])
}
    
$xabar = file_get_contents("send.txt");
if($text == "Xabar"){
if($cid == $admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"*Userlarga yuboriladigan xabar matnini kiriting! Bekor qilish uchun /cancel ni bosing.*",
'parse_mode'=>"markdown",
]); file_put_contents("send.txt","user");
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*Bu tugma admin uchun!*",
'parse_mode'=>'Markdown',
]);
}
}/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/
if($xabar=="user" and $cid==$admin){
if($text=="/cancel"){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Bekor qilindi!",
'parse_mode'=>"html",
]); unlink("send.txt");
}else{
$lich = file_get_contents("azo.dat");
$lichka = explode("\n",$lich);
foreach($lichka as $lichkalar){
$okuser=bot("sendmessage",[
'chat_id'=>$lichkalar,
'text'=>$text,
'parse_mode'=>'html'
]);
}
}
}
if($okuser){
bot("sendmessage",[
'chat_id'=>$admin,
'text'=>"Hamma userlarga yuborildi!",
'parse_mode'=>'html',
]); unlink("send.txt");
}

/*

Ushbu kod @AsrorDev tomonidan tuzildi! Va @PHP_PYTHON_COD & @KingsOfPHP kanallarida tarqatildi!
Ushbu botni tuzishda @UzFordBot ning ayrim funksiyalaridan foydalanildi :)
Manbaga tekganingni s*****n )

Yaxshilikga xizmat qilsin @AsrorDev dan sovg'a ... !!! 

*/

if($text=="👨‍💻Dasturchi"){
   bot('sendMessage',[
   'chat_id'=>$cid,
   'text'=>"@AsrorDev",
   'parse_mode'=>'html'
   'reply_markup'=>$back,
   ]);
}

?>