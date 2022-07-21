<?php

define('API_KEY','753874499:AAHgnp8Hrr6q5KBqojAjCxQMtmFlvmoQ5RQ');
//-------------------------------//
$admin = 886742473;  
$kanal = Adabiyot_va_ona_tili;
//-------------------------------//
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$text = $update->message->text;
$chat_id = $update->message->chat->id;
$message_id = $update->message->message_id;
$panel = file_get_contents("panel.txt");
$name = $message->from->first_name;
$lastname = $message->from->last_name;
$username = $message->from->username;
$from_id = $message->from->id;


if($text == '/start'){
$user = file_get_contents('users.txt');
$members = explode("\n",$user);
if (!in_array($chat_id,$members)){
$add_user = file_get_contents('Member.txt');
$add_user .= $chat_id."\n";
file_put_contents('Member.txt',$add_user);
}
bot('sendMessage', [
'chat_id' => $chat_id,
'text'=>"SALOM DO'STIM
XULAS BU BOTNI QILISHIMDAN MAQSAD
KINOLARNI OSSONGINA TELEGRAMDAN 
IZLASH! BIZDA HAMMASI ISHONCHLI.
Kanalimiz:@$kanal
Admin: @Telba_554",
              'parse_mode'=>$mode,
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
['text'=>"🔎Izlash"],['text'=>"📄Yordam"]
]
],
"resize_keyboard"=>true,
            ])
        ]);
}
if($text == '🔎Izlash'){
$user = file_get_contents('users.txt');
$members = explode("\n",$user);
if (!in_array($chat_id,$members)){
$add_user = file_get_contents('Member.txt');
$add_user .= $chat_id."\n";
file_put_contents('Member.txt',$add_user);
}
bot('sendMessage', [
'chat_id' => $chat_id,
'text'=>"SALOM DO'STIM
XULAS BU BOTNI QILISHIMDAN MAQSAD
KINOLARNI OSSONGINA TELEGRAMDAN 
IZLASH. BIZDA HAMMaSI ISHONCHLI
Kanalimiz:@$kanal
Admin: @Telba_554",
              'parse_mode'=>$mode,
])
]);
        if($text == '/panel'){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"Panel Menyusiga Xush kelipsiz",
 'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"BoT Azolari"],['text'=>"Xabar Yollash"]
]
],
"resize_keyboard"=>true,
])
]);
}
if($text == 'BoT Azolari' && $from_id == $admin){
$user = file_get_contents("m.txt");
$member_id = explode("\n",$user);
$odam_soni = count($member_id);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"AzoLar Soni: $odam_soni",
 'parse_mode'=>"markdown",
 ]);
}

if($text == 'Xabar Y�llash' && $from_id == $admin){
file_put_contents("panel.txt","Send");
bot('sendMessage',[
'chat_id' => $chat_id,
'text' => "Xabaringizni Yozing admin janoblari
bu xabarni hamma mendagi azolar koradi",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"BoT Azolari"],['text'=>"Xabar Y�llash"]
],
]
])
]);
}
elseif($panel == "Send" && $from_id == $admin){
file_put_contents("panel.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Yozgan So'zingiz a'zolarga Yuborildi",
'parse_mode' => 'html'
]);
$all_member = fopen( "users.txt", "r");
while( !feof( $all_member)) {
$user = fgets( $all_member);
SendMessage($user,$text,'html');
 }
}    
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 'text'=>"Sayt buyicha qidiruv natijalari:",
'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	             [
                 ['text'=>"1-natija",'url'=>"https://www.ivi.tv/search/?q=$text"]
             ],
             [
                 ['text'=>"2-natija",'url'=>"https://www.ivi.tv/search/?q=$text"]
             ],
             [
                 ['text'=>"3-natija",'url'=>"https://www.ivi.tv/search/?q=$text"]
             ],
             [
                  ['text'=>"4-natija",'url'=>"https://www.ivi.tv/search/?q=$text"]               
             ],
             [
                  ['text'=>"ADMIN",'url'=>"https://T.me/"]
             ]
         ]
     ])
 ]);
}   
?>