<?php
error_reporting(0);
ob_start();
$TOKEN="BOT TOKEN";
define('API_KEY',$TOKEN); 
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
        return json_decode($res);}}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;$cid = $message->chat->id;$text=$message->text;$type=$message->chat->type;$mid=$message->message_id;
if($text=="/start"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🇺🇿<b>TikTok</b>Video LINKini Yuboring!",
'parse_mode'=>'html']);}
if(mb_stripos($text,"tiktok.com")!==false){
$wait=bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>🇺🇿Iltimos Kuting...</b>",
	'parse_mode'=>"html",
])->result->message_id;
$a=bot('sendvideo',[
'chat_id'=>$cid,
'video'=>file_get_contents("https://downapi.tk/api3/tiktok.php?url=".$text),
'caption'=>" <b>$text\n\n📥@TikTocksBot Orqali Yuklandi!</b>",
'parse_mode'=>"html"])->result->message_id;
$muzik=json_decode(file_get_contents("https://downapi.tk/allsaver.php?url=".$text),true)["url"][1]["url"];
file_put_contents("$cid.mp3",file_get_contents($muzik));
$ok1=bot('sendAudio',[
'chat_id'=>$cid,
'audio'=>new CURLFile("$cid.mp3"),
'title'=>"@TikTocksBot",
'performer'=>"🎵@TikTocksBot",
'caption'=>" <b>$text\n\n📥@TikTocksBot Orqali Yuklandi!</b>",
'parse_mode'=>"html",
'reply_to_message_id'=>$a,
]);
unlink("$cid.mp3");
bot('deleteMessage',[
'chat_id'=>$cid,'message_id'=>$wait,]);
}
?>