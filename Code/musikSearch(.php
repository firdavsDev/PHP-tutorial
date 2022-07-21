<?php
/*
Ushbub kod @iNet_Hack tomonidan yozildi va @iNet_Coders kanalida tarqatildi
*/
ob_start();
$token = '1457309663:AAHajXyRt0D8t2cZTko9Ni17NNaLhE_Ws3A';
define('API_KEY',$token); 
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
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$text = $message->text;
$type = $message->chat->type;
$name = $message->from->first_name;
$uid = $message->from->id;
$user = $message->from->username;
$soat = date("H",strtotime("2 hour"));
$sana = date("d.m.Y",strtotime("2 hour"));
$kun = date("d",strtotime("2 hour"));
$audio = $message->audio;
$reply = $message->reply_to_message->text;
$step=file_get_contents("bot/$cid.step");
$stepp=file_get_contents("step/$cid.step");
mkdir("bot");
mkdir("step");
mkdir("vid");
$regi="[$name](tg://user?id=$uid)";
$yil = date("Y",strtotime("2 hour"));
$mid = $message->message_id;
$sreply = $message->reply_to_message->text;  
$sreplyd = $message->reply_to_message->document;


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

$ret1 = bot("getChatMember",[
         "chat_id"=>"@iNet_Coders", 
         "user_id"=>$uid,
         ]);
$stat1 = $ret1->result->status;

         if(($stat1=="creator" or $stat1=="administrator" or $stat1=="member")){
}else{
    bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Botdan foydalanish uchun kanalimizga obuna boling.",
         'disable_web_page_preview'=>true,
         'parse_mode'=>'html',
      'reply_markup'=>json_encode([
   'inline_keyboard'=>[
       [['text'=>"📢A'zo Bo'lish","url"=>"https://t.me/IT_PRO_CHANNEL"]],
]
    ])
    ]);
return false;
  }

$keys = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🎶Musiqa izlash"],],
]
]);

$get = file_get_contents("id.txt");
if(strpos($get,"$cid") !==false){
if(preg_match('/^\/([Ss]tart)/',$text)){
bot('sendMessage',[
   'chat_id'=>$cid,
    'message_id'=>$mid,
'text'=>"Assalomu alaykum botga xush kelibsiz.",
'parse_mode' => 'markdown',
'reply_markup'=>$keys, 
]);
}
/*
Ushbub kod @iNet_Hack tomonidan yozildi va @iNet_Coders kanalida tarqatildi
*/
if($text == "🎶Musiqa izlash"){
bot ('sendmessage', [
'chat_id'=>$cid,
'text'=>"🎵Musiqa Nomini kiriting",
'reply_markup'=>$rpl,
]);
    }
if($reply == "🎵Musiqa Nomini kiriting"){
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
Ushbub kod @iNet_Hack tomonidan yozildi va @iNet_Coders kanalida tarqatildi
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
Ushbub kod @iNet_Hack tomonidan yozildi va @iNet_Coders kanalida tarqatildi
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
/*
Ushbub kod @iNet_Hack tomonidan yozildi va @iNet_Coders kanalida tarqatildi
*/
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

Quyidagi tartib raqamlardan birini bosing bot sizga bu qo'shiqlarni yuboradi",
]);
file_put_contents("bot/$cid.txt","\nhttps://muzmo.org/get/$md\nhttps://muzmo.org/get/$md1\nhttps://muzmo.org/get/$md2\nhttps://muzmo.org/get/$md3\nhttps://muzmo.org/get/$md4\nhttps://muzmo.org/get/$md5\nhttps://muzmo.org/get/$md6\nhttps://muzmo.org/get/$md7\nhttps://muzmo.org/get/$md8\nhttps://muzmo.org/get/$md9");
file_put_contents("bot/$cid.step","music");
}else{
bot ('sendmessage',[
'chat_id'=>$cid,
'text'=>"Siz izlagan musiqa mavjud emas!",
'reply_markup'=>$keys,
]);
unlink("bot/$cid.step");
}
}
/*
Ushbub kod @iNet_Hack tomonidan yozildi va @iNet_Coders kanalida tarqatildi
*/
if($step == "music"){
if($text == "/1" or $text == "/2" or $text == "/3" or $text == "/4" or $text == "/5" or $text == "/6" or $text == "/7" or $text == "/8" or $text == "/9" or $text == "/10"){
$str = str_replace("/","",$text);
$exp = explode("\n",$txt)[$str];
if($exp == true){
bot ('sendaudio',[
'chat_id'=>$cid,
'audio'=>$exp,
'caption'=>"@$bot",
'reply_markup'=>$keys,
]);
unlink("bot/$cid.step");
unlink("bot/$cid.txt");
}else{
bot ('sendmessage',[
'chat_id'=>$cid,
'text'=>"Yuklashni imkoni bo'lmadi.",
'reply_markup'=>$keys,
]);
unlink("bot/$cid.step");
}
}else{
unlink("bot/$cid.step");
}
}
}