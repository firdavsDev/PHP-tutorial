<?php

$admin="1713743891";
ob_start();
define('API_KEY','token'); 
$bot="InstagramDown_UzBot";
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


//Manba @Uz_PhP_KoDeRlaR  @XonXacker Dan//

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$text=$message->text;
$uid=$message->from->id;
$type=$message->chat->type;
$user=$message->from->username;
$mid=$message->message_id;

$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;

//call_back
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$calltext = $update->callback_query->message->text;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;

Mkdir("mp3");

if($user){
$info="@".$user;
}else{
$info="<a href='tg://user?id=$uid'>$uid</a>";
}



//Manba @Uz_PhP_KoDeRlaR  @XonXacker Dan//
//Manba @Uz_PhP_KoDeRlaR  @XonXacker Dan//
//Manba @Uz_PhP_KoDeRlaR  @XonXacker Dan//
//Manba @Uz_PhP_KoDeRlaR  @XonXacker Dan//


if($text=="/start"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Salom!
<u>Instagram</u>dan <b>Video</b> Yuklab Beruvchi Botdasiz.
Video yuklash uchun LINK Yuboring!

Namuna: 
https://www.instagram.com/p/CHwblV_BUFq/?utm_medium=copy_link",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
]);
}


$geturl=file_get_contents("videolar.txt");

if(mb_stripos($text,"instagram.com/")!==false){
$udid3=bot('sendMessage',['chat_id'=>$cid,
'text'=>"🎥Iltimos kuting...",
])->result->message_id;
$vidurl=file_get_contents("https://s.zooo.uz/API/instagram/?url=".$text);
$sended=bot('sendvideo',[
'chat_id'=>$cid,
'video'=>$vidurl,
'caption'=>"$text

@$bot Tomonidan Yuklab Berildi!",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
]);
$videoid=bot('deleteMessage',[
'chat_id'=>$cid,'message_id'=>$udid3,
]);
}



if($sended){
$count=file_get_contents("videos.txt");
$count1=$count+1;
file_put_contents("videos.txt","$count1");
}



$lichka=file_get_contents("mp3/lichka.db");
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("mp3/lichka.db","$lichka\n$cid");
}
}
if($text=="/stat"){
$lichka=file_get_contents("mp3/lichka.db");
$lich=substr_count($lichka,"\n");
$vid=file_get_contents("videos.txt");
$um=$lich + $gr;
bot('sendMessage',[
'chat_id'=>$cid,
    'text'=> "
┌<b>📊Bot Statistikasi:</b>    

├▶👤A'zolar: <b>$lich</b> ta

└▶📥Yuklangan Videolar Soni: <b>$vid</b> ta

",
'parse_mode' => 'html',
]);
}
$lichka=file_get_contents("mp3/lichka.db");
$xabar = file_get_contents("lichka.txt");
if($text=="/send" and $cid==1337242713){
  bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Userlarga yuboriladigan xabar matnini kiriting!",
    'parse_mode'=>"html",
]);file_put_contents("lichka.txt","send");
}
if($xabar=="send" and $cid==1337242713){
if($text=="/otmen"){
}else{
  $lich = file_get_contents("mp3/lichka.db");
  $lichka = explode("\n",$lich);
  foreach($lichka as $lichkalar){
  $okuser=bot("ForwardMessage",[
  'from_chat_id'=>$admin,
    'chat_id'=>$lichkalar,
    'message_id'=>$mid,
    'parse_mode'=>'html',
]);
}
}

//Manba @Uz_PhP_KoDeRlaR  @XonXacker Dan//
if($okuser){
  bot("sendmessage",[
    'chat_id'=>$cid,
    'text'=>"✅Hamma userlarga yuborildi!✅",
    'parse_mode'=>'html',
]);
unlink("lichka.txt");
}
}







?>
