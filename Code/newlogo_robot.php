<?php
ob_start();
define('API_KEY', 'ʙ ᴏ ᴛ ᴛ ᴏ ᴋ ᴇ ɴ ɪ ');
$admin = "1402280124"; 

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
function put($fayl,$nima){  
file_put_contents("$fayl","$nima");  
}  
function get($fayl){  
$get = file_get_contents("$fayl");  
return $get;  
}  
   function ty($chat_id){ 
   return bot('sendChatAction', [
   'chat_id' => $chat_id,
   'action' => 'typing',
   ]);
   } 
   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }
          $replyc= json_encode([
           'resize_keyboard'=>false,
                'force_reply' => true,
                'selective' => true
            ]);
$efede = json_decode(file_get_contents('php://input'), true);

$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$tx = $message->text;
//callback
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

//user
$id = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repulogin = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$tx = $message->text;
$cid = $message->chat->id;
$ism = $message->from->first_name;
$inline = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$reply = $message->reply_to_message->text;  
$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");

if(isset($text1)){
$calc = urlencode($text1);
$url = file_get_contents("http://api.mathjs.org/v1/?expr=$calc");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$url",
'parse_mode'=>"html",
]);
}

$rpl = json_encode([
    'recize_keyboard'=>false,
    'force_reply'=>true,
    'selective'=>true
     ]);

mkdir("matn");
mkdir("stat");

$kid = 'Uz_PhP_KoDeRlaR'; $kkid = '@Uz_PhP_KoDeRlaR'; if(isset($update->message->text)){ $gett = bot('getChatMember',[ 'chat_id' =>$kkid, 'user_id' => $update->message->chat->id, ]); $gget = $gett->result->status; if($gget == "member" or $gget == "creator" or $gget == "administrator"){ } else{ bot('sendMessage',[ 'chat_id'=>$update->message->chat->id, 'message_id'=>$update->message->message_id, 'parse_mode'=>'markdown', 'text'=>"*👋┇ sᴀʟᴏᴍ ʙᴏᴛ xᴜsʜ ᴋᴇʟɪʙsɪᴢ

🌟┇ ʙᴏᴛᴅᴀɴ ꜰᴏʏᴅᴀʟᴀɴɪsʜ ᴜᴄʜᴜɴ ᴋᴀɴᴀʟɪᴍɪᴢɢᴀ ᴀ'ᴢᴏ ʙᴏʟɪɴɢ

📡┇ᴋᴀɴᴀʟɪᴍɪᴢ
@Uz_PhP_KoDeRlaR
👆👆👆

📌┇ ᴀ'ᴢᴏ ʙᴏʟɪʙ /start ɴɪ ʙᴏsɪɴ *",  'reply_markup'=>json_encode([  'inline_keyboard'=>[  [['text'=>"✨ᴀ'ᴢᴏ ʙᴏ'ʟɪsʜ✨",'url'=>'http://t.me/'.$kid.'']], 
] 

]) 

]);return true;
}
    
}
if(isset($tx)){
ty($cid);
}
$mid = $message->message_id;
$edname = $editm ->from->first_name;
$forward2 = $update->message->forward_from;
$editm = $update->edited_message;
mkdir("data");
mkdir("data/$fadmin");
$starttx = "👋* sᴀʟᴏᴍ!* ʙᴏᴛɪᴍɪᴢɢᴀ xᴜsʜ ᴋᴇʟɪʙsɪᴢ ʙᴜ ʙᴏᴛ ᴏʀǫᴀʟɪ sᴜᴘᴇʀ ʀᴀsᴍʟᴀʀ ᴛᴀʏᴏʀʟᴀsʜɪɴɢɪᴢ ᴍᴜᴍᴋᴜɴ

ʙᴜɴɪɴɢ ᴜᴄʜᴜɴ ᴘᴀsᴛᴅᴀɢɪ ᴍᴇɴᴜʟᴀʀᴅᴀɴ ғᴏʏᴅᴀʟᴀɴɪɴɢ❗
 
📚ʙɪᴢɴɪɴɢ ᴊᴀᴍᴏᴀᴍɪᴢ - @LiderCoderlar 📚";

if(mb_stripos($tx,"/start")!==false){

   $baza=file_get_contents("data/users.txt");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="\n$chat_id";
   $file=fopen("data/users.txt","a");
   fwrite($file,$txt);
   fclose($file);
   }
}

    if(stripos($tx,"/start") !== false){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$starttx,
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
   'inline_keyboard'=>[
    [['text'=>'👨‍💻ᴅᴀsᴛᴜʀᴄʜɪ👨‍💻 ','callback_data'=>'sup'],['text'=>'📸ʀᴀsᴍ ʏᴀsᴀsʜ📸 ','callback_data'=>'logoy']],
    [['text'=>'⚡️ǫɪᴢɪǫᴀʀʟɪ ʙᴏʟɪᴍ⚡️','callback_data'=>'qiziq']],
[['text'=>'📊sᴛᴀᴛɪsᴛɪᴋᴀ📊','callback_data'=>'alik'],['text'=>'❗️ᴍᴀʟᴜᴍᴏᴛ❗️','callback_data'=>'info']],
       ]
    ])
  ]);
}



if($data=="info"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"✨sɪᴢ ʙᴜ ʙᴏᴛ ᴏʀǫᴀʟɪ ɪsᴍɪɴɢɪᴢɢᴀ ᴜᴅᴀʀ ʀᴀsᴍʟᴀʀ ʏᴀsᴀʏ ᴏʟᴀsɪᴢ 🌸

🌴ʀᴀsᴍʟᴀʀ ǫᴏsʜɪʟɪsʜᴅᴀ ᴅᴀᴠᴏᴍ ᴇᴛᴀᴅɪ 🌌

 💫ʙᴏᴛɪᴍɪᴢɴɪ ᴅᴏsᴛʟᴀʀɪɴɢɪᴢɢᴀ ᴜʟᴀsʜɪɴɢ🕊

📡 ᴋᴀɴᴀʟ - @uz_php_koderlar ⏳

👨‍💻ᴅᴀsᴛᴜʀᴄʜɪ - @xonxacker 👨‍💻

",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🔙ᴏʀǫᴀɢᴀ", 'callback_data'=>"back"]]
           ]
        ])
    ]);
}
if($data=="sup"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"👨‍💻ᴅᴀsᴛᴜʀᴄʜɪ - @KoderNetUz
📡ᴋᴀɴᴀʟɪᴍɪᴢ - @Uz_PhP_KoDeRlaR
👥 ɢᴜʀᴜʜɪᴍɪᴢ - @Xon_PhP_ChaT

",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🔙ᴏʀǫᴀɢᴀ", 'callback_data'=>"back"]]
           ]
        ])
    ]);
}
if($data=="back"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"$starttx",
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>'👨‍💻ᴅᴀsᴛᴜʀᴄʜɪ👨‍💻 ','callback_data'=>'sup'],['text'=>'📸ʀᴀsᴍ ʏᴀsᴀsʜ📸 ','callback_data'=>'logoy']],
                [['text'=>'⚡️ǫɪᴢɪǫᴀʀʟɪ ʙᴏʟɪᴍ⚡️','callback_data'=>'qiziq']],
[['text'=>'📊sᴛᴀᴛɪsᴛɪᴋᴀ📊','callback_data'=>'alik'],['text'=>'❗️ᴍᴀʟᴜᴍᴏᴛ❗️','callback_data'=>'info']],
           ]
        ])
    ]);
}
if($data=="logoy"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=> "ʀᴀsᴍʟᴀʀᴅᴀɴ ʙɪʀɪɴɪ ᴛᴀɴʟᴀɴɢ🔥",
'parse_mode' => 'html',
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🤴ʏɪɢɪᴛʟᴀʀ ᴜᴄʜᴜɴ🤴','callback_data'=>"yigit"],['text'=>'👸ǫɪᴢʟᴀʀ ᴜᴄʜᴜɴ👸', 'callback_data' => "qiz"]],
[['text'=>'🌹ᴊᴜᴍᴀ ᴍᴜʙᴏʀᴀᴋ🌹','callback_data'=>"juma"]],
[['text'=>'🔙ᴏʀǫᴀɢᴀ', 'callback_data'=>"back"]],
]
]),
]);
}
if($data=="yigit"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=> "ʀᴀsᴍʟᴀʀᴅᴀɴ ʙɪʀɪɴɪ ᴛᴀɴʟᴀɴɢ🔥",
'parse_mode' => 'html',
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'1⃣','callback_data'=>"1"],['text'=>'2⃣', 'callback_data' => "2"],['text'=>'3⃣','callback_data'=>"3"]],
[['text'=>'4⃣','callback_data'=>"4"],['text'=>'5⃣', 'callback_data' => "5"],['text'=>'6⃣','callback_data'=>"6"]],
[['text'=>'🔙ᴏʀǫᴀɢᴀ', 'callback_data'=>"logoy"]],
]
])
]);
}
if($data=="qiz"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=> "ʀᴀsᴍʟᴀʀᴅᴀɴ ʙɪʀɪɴɪ ᴛᴀɴʟᴀɴɢ🔥",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'1⃣','callback_data'=>"qiz1"],['text'=>'2⃣', 'callback_data' => "qiz2"],['text'=>'3⃣','callback_data'=>"qiz3"]],
[['text'=>'4⃣', 'callback_data' => "qiz4"],['text'=>'5⃣', 'callback_data' => "qiz5"],['text'=>'6⃣', 'callback_data' => "qiz6"]],
[['text'=>'🔙ᴏʀǫᴀɢᴀ', 'callback_data'=>"logoy"]],
]
])
]);
}
if($data=="alik"){
$baza=file_get_contents("data/users.txt");
      $all=substr_count($baza,"\n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
bot('editMessageText',[
  'chat_id'=>$callcid,
        'message_id'=>$callmid,
    'text'=> "
<b>📊sᴛᴀᴛɪsᴛɪᴋᴀ📊:</b>    
👤ᴀ'ᴢᴏʟᴀʀ: <b>$us</b>  

👨‍💻ᴅᴀsᴛᴜʀᴄʜɪ - @xonxacker 👨‍💻
",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'♻️ʏᴀɴɢɪʟᴀsʜ♻️', 'callback_data' => "alik"]],
[['text'=>'🔙ᴏʀǫᴀɢᴀ','callback_data'=>'back']],
]
]),
]);
}
if($data=="qiziq"){
   bot('editMessageText',[
   'chat_id'=>$callcid,
        'message_id'=>$callmid,
    'text'=> "<b>ǫɪᴢɪǫᴀʀʟɪ ᴍᴇɴᴜ⤵️</b>",
'parse_mode' => 'html',
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🌹sᴇᴠɢɪ ᴛᴇsᴛ🌹','callback_data'=>"sevgi"],['text'=>'⏳sᴀɴᴀ & sᴏᴀᴛ⏰', 'callback_data' => "sanav"]],
[['text'=>'🖼ʜᴅ ғᴏɴʟᴀʀ🎆','callback_data'=>"fon"],['text'=>'🇺🇿ᴛᴇʟᴇɢʀᴀᴍ ᴛɪʟʟᴀʀ🇺🇸', 'callback_data' => "til"]],
[['text'=>'📰ʏᴀɴɢɪʟɪᴋʟᴀʀ', 'callback_data' => "yangilik"],['text' => "🌥ᴏʙ-ʜᴀᴠᴏ🌥",'callback_data'=>'ohavo']],
[['text'=>"🕋ɴᴏᴍᴏᴢ ᴏʏᴀᴛʟᴀʀɪ🕋", 'callback_data' => "namoy"],['text'=>"🎅🏻ʏᴀɴɢɪ ʏɪʟ🎅🏻", 'callback_data'=>"newyear"]],
[['text'=>"📸ʜᴀʀғɢᴀ ᴠɪᴅᴇᴏ♨️", 'callback_data' => "video"],['text'=>"🗃ᴅᴀsᴛᴜʀ & ᴏʏɪɴʟᴀʀ🗃", 'callback_data' => "oyinm"]],
[['text'=>'🚀ʙᴏᴛ ᴛᴇᴢʟɪɢɪ🚀','callback_data' => "tezlik"]],
[['text'=>'🔙ᴏʀǫᴀɢᴀ', 'callback_data'=>"back"]],
]
]),
]);
}
if(mb_stripos($tx,"stat")!==false){
      $baza=file_get_contents("data/users.txt");
      $all=substr_count($baza,"\n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      $text = "<b>📡 ʙᴏᴛ ғᴏʏᴅᴀʟᴀɴᴜᴠᴄʜɪʟᴀʀɪ
👤 ᴜsᴇʀʟᴀʀ: $us
🏆</b> @Xon_PhP_ChaT
📣 @Uz_PhP_KoDeRlaR";
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'parse_mode'=>'html',
   'text'=>$text,
  ]);
}
if($data=="tezlik"){
$start_time = round(microtime(true) * 1000);
$send=  bot('editMessageText',[
   'chat_id'=>$callcid,
        'message_id'=>$callmid,
 'text' =>"✈ʙᴏᴛ ᴛᴇᴢʟɪɢɪ:",
])->result->message_id;
$end_time = round(microtime(true) * 1000);
$time_taken = $end_time - $start_time;
bot('editMessageText',[
   'chat_id'=>$callcid,
        'message_id'=>$callmid,
"message_id" => $send,
"text" => "✈ʙᴏᴛ ᴛᴇᴢʟɪɢɪ: *" . $time_taken .  "* ᴍs

",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙ᴏʀǫᴀɢᴀ','callback_data'=>'qiziq']],
],'resize_keyboard'=>true
        ])
    ]);
}

if($data=="sanav"){
bot('editMessageText',[
   'chat_id'=>$callcid,
        'message_id'=>$callmid,
    'text'=>"*📆Bugun: $sana1-yil
⌚sᴏᴀᴛ: $soat1
📅ᴏʏ ɴᴏᴍɪ: $oynomi
📅ʏɪʟɴɪɴɢ: $sana2-kuni
⏳ᴠᴀǫᴛ ᴍɪɴᴛᴀǫᴀsɪ: $gmt
📅ʙᴜ ᴏʏ $buoy ᴏʏᴅᴀɴ ɪʙᴏʀᴀᴛ*",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙ᴏʀǫᴀɢᴀ','callback_data'=>'qiziq']],
],'resize_keyboard'=>true
        ])
    ]);
}

if($data=="sevgi"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"❤️ *sᴇᴠɢɪ ᴛᴇsᴛ 😍

❤️ ᴏ'ᴢ sᴇᴠɢɪɴɢɪᴢɴɪ ʙɪᴢɴɪɴɢ ʙᴏᴛᴅᴀ ᴛᴇsᴛ ǫɪʟɪʙ ᴋ'ᴏʀɪɴɢ 🤩

📝 ɪsʜʟᴀᴛɪsʜ: ( ᴍᴀsᴀʟᴀɴ 👇)*

👉  `/sevgi Abdulloh Malika`  👈

😁 *sʜᴜ ᴜsᴜʟᴅᴀ* 😊",
'parse_mode'=>'markdown',
'reply_markup'=>$back1,
]);
}

if(mb_stripos($text,"/sevgi") !== false){
$loop = explode(" ", $text); 
$suz = $loop[1]; 
$javob = $loop[2]; 
$input = array("%25","%83","%41","%82","%62","%52","%95","%23","%77","%27","%32","%75","%36","%11","%41","%97","%99","%100","%53","%29","%88","%37","%64","%90","%72","%33","%81","%7","%60","%62","%71","%23","%93","%95","%71","%98","%31");
$rand=rand(0,7);
$soz="$input[$rand]";
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🤵 - *$suz*
👰 - *$javob*

😍 ᴏʀᴀɴɢɪᴢᴅᴀɢɪ  sᴇᴠɢɪ *$soz* 😊",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙ᴏʀǫᴀɢᴀ','callback_data'=>'qiziq']],
]
   ]), 
   ]);
}

if($data=="oyinm"){
bot('editMessageText',[
   'chat_id'=>$callcid,
        'message_id'=>$callmid,
    'text'=>"<b>ᴏᴢɪɴɢɪᴢɢᴀ ᴋᴇʀᴀᴋʟɪ ᴏʏɪɴ ʏᴏᴋɪ ᴘʀᴀɢʀᴀᴍᴍᴀɴɪ ᴛᴀɴʟᴀɴɢ🙃
ᴘʀᴀɢʀᴀᴍᴍᴀʟᴀʀ ǫᴏsʜɪʟɪsʜᴅᴀ ᴅᴀᴠᴏᴍ ᴇᴛᴀᴅɪ</b>",
'parse_mode' => 'html',
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'ᴘʜᴏᴛᴏ ʟᴀʙ ᴘʀᴏ📲','callback_data'=>"photo"],['text'=>'ʟᴜᴄᴋʏ ᴘᴀᴛᴄʜᴇʀ🌝','callback_data'=>"luciy"]],
[['text'=>'ᴀɴᴏɴʏ ᴛᴜɴ 🌐','callback_data'=>"anony"],['text'=>'sᴛɪʟ ᴛᴇxᴛ ᴘʀᴏ💫','callback_data'=>"stiltext"]],
[['text'=>'ᴠɪᴅᴇᴏ sʜᴏᴜ ᴘʀᴇᴍɪᴜᴍ📲','callback_data'=>"vsh"],['text'=>'MX ᴘʟᴀʏᴇʀ🎬','callback_data'=>"mxplayer"]],
[['text'=>'ᴍᴜsʟɪᴍ ᴘʀᴏ🕋','callback_data'=>"muslimp"],['text'=>'ᴠɪᴠᴀ ᴠɪᴅᴇᴏ ᴘʀᴏ📺','callback_data'=>"vivavideo"]],
[['text'=>'ᴘɪxᴇʟʟᴀʙ ᴘʀᴏ📲','callback_data'=>"pixelab"],['text'=>'ᴄʟᴇᴀɴ ᴍᴀsᴛᴇʀ ᴘʀᴏ📳','callback_data'=>"cleanmaster"]],
[['text'=>'ᴄʟᴀsʜ ᴏғ ᴄʟᴀɴs ᴍᴏᴅ📥','callback_data'=>"clash"],['text'=>'ᴄʟᴀsʜ ʀᴏʏᴀʟ🔫','callback_data'=>"clashh"]],
[['text'=>'ɪɴsᴛᴀɢʀᴀᴍ ᴍᴏᴅ📲','callback_data'=>"instamod"],['text'=>'ғᴀᴄᴇ ᴀᴘᴘ🌚','callback_data'=>"faceapp"]],
[['text'=>'ᴍɪɴᴇᴄʀᴀғᴛ ᴘᴇ ᴍᴏᴅ🔐','callback_data'=>"minecraft"],['text'=>'ᴛᴇxᴛ ᴀʀᴛ💫','callback_data'=>"textart"]],
[['text'=>'🔙ᴏʀǫᴀɢᴀ', 'callback_data'=>"qiziq"]],
   ]
   ]), 
   ]);
}
if($data == "luciy"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/27",
        'caption'=>"ʟᴜᴄᴋʏ ᴘᴀᴛᴄʜᴇʀ🌝
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "photo"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/26",
        'caption'=>"ᴘʜᴏᴛᴏ ʟᴀʙ ғᴏᴛᴏʟᴀʀɢᴀ ᴇғᴇᴄᴛ ʙᴇʀᴜᴠᴄʜɪ ᴀᴘᴋ
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "stiltext"){
    bot('senddocument',[
    'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/29",
        'caption'=>"ʜᴀʀ ʜɪʟ sʜʀɪғᴛᴀ ʏᴏᴢᴜᴠᴄʜɪ ᴀᴘᴋ
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "anony"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/28",
        'caption'=>"ᴛʀᴀғɪᴋ ᴍʙ sɪɴɪ ᴛᴇᴊᴀᴠᴄʜɪ ᴀᴘᴋ
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "mxplayer"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/31",
        'caption'=>"ᴍᴜsɪǫᴀ ᴠᴀ ᴠɪᴅᴇᴏ ᴋᴏʀɪᴠᴄʜɪ ᴀᴘᴋ
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "muslimp"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/32",
        'caption'=>"ǫᴜʀᴏɴʟᴀʀ ᴛᴏᴘʟᴀᴍɪ
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "pixelab"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/34",
        'caption'=>"ʜᴀʀʜɪʟ ʟᴏɢᴏᴛɪᴘ ᴘᴇᴄʜᴀᴛʟᴀ ɪsʜʟɪᴅɪɢᴀɴ ᴀᴘᴋ
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "vivavideo"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/33",
        'caption'=>"ᴠɪᴅᴇᴏ ᴍᴏɴᴛᴀᴊ ǫɪʟᴀᴅɪɢᴀɴ ᴀᴘᴋ
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "cleanmaster"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/35",
        'caption'=>"ᴛᴇʟᴇғᴏɴᴅᴀɢɪ ᴠɪʀᴜsʟᴀʀɴɪ ᴏᴄʜɪʀᴀᴅɪɢᴀɴ ᴀᴘᴋ
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "clash"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/36",
        'caption'=>"ᴄʟᴀsʜ ᴏғ ᴄʟᴀɴs ᴏʏɪɴɪɴɪ ᴠᴢʟᴏᴍɪ
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "clashh"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/37",
        'caption'=>"ᴄʟᴀsʜ ʀᴏʏᴀʟ ᴏʏɪɴɪ
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "textart"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/41",
        'caption'=>"ᴄʜɪʀᴏʏʟɪ sʜʀɪғᴛʟᴀʀ ᴛᴏᴘʟᴀᴍɪ
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "faceapp"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/39",
        'caption'=>"ᴘʜᴏᴛᴏ ᴍᴀɴᴛᴀᴊ ǫɪʟᴜᴠᴄʜɪ ᴀᴘᴋ
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "vsh"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/30",
        'caption'=>"ᴠɪᴅᴇᴏ ᴍᴏɴᴛᴀᴊ ǫɪʟᴀᴅɪɢᴀɴ ᴀᴘᴋ
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "instamod"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/38",
        'caption'=>"ɪɴsᴛᴀɢʀᴀᴍ ɴɪ ᴍᴏᴅ ᴠᴇʀsɪʏᴀsɪ
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "minecraft"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/40",
        'caption'=>"ᴍɪɴᴇᴄʀᴀғᴛ ᴏʏɪɴɪɪ ᴍᴏᴅ ᴠᴇʀsɪʏᴀsɪ
🖤ᴋᴀɴᴀʟɪᴍɪᴢ  @Uz_PhP_KoDeRlaR",
        ]);
}

if($data=="video"){
   bot('editMessageText',[
   'chat_id'=>$callcid,
        'message_id'=>$callmid,
    'text'=> "<b>ᴋᴇʀᴀᴋʟɪ ғᴏɴɴɪ ᴛᴀɴʟᴀɴɢ:⤵️</b>",
'parse_mode' => 'html',
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'ᴀ🖤','callback_data'=>"a"],['text'=>'ʙ💜','callback_data'=>"b"]],
 [['text'=>'ᴅ💔','callback_data'=>"d"],['text'=>'ᴇ💟','callback_data'=>"e"]],
  [['text'=>'ғ💕','callback_data'=>"f"],['text'=>'ɢ💞','callback_data'=>"g"]],
[['text'=>'ʜ💓','callback_data'=>"h"],['text'=>'ɪ💗','callback_data'=>"i"]],
[['text'=>'ᴊ💖','callback_data'=>"j"],['text'=>'ᴋ💝','callback_data'=>"k"]],
[['text'=>'ʟ💘','callback_data'=>"l"],['text'=>'ᴍ💌','callback_data'=>"m"]],
[['text'=>'ɴ💚','callback_data'=>"n"],['text'=>'ᴏ💋','callback_data'=>"o"]],
[['text'=>'ᴘ💛','callback_data'=>"p"],['text'=>'ǫ💥','callback_data'=>"q"]],
[['text'=>'ʀ💦','callback_data'=>"r"],['text'=>'s💙','callback_data'=>"s"]],
[['text'=>'ᴛ💣','callback_data'=>"t"],['text'=>'ᴜ💨','callback_data'=>"u"]],
[['text'=>'ᴠ🐼','callback_data'=>"v"],['text'=>'x🍃','callback_data'=>"x"]],
[['text'=>'ʏ🍂','callback_data'=>"y"],['text'=>'ᴢ🥀','callback_data'=>"z"]],
[['text'=>'sʜ🌸','callback_data'=>"sh"],['text'=>'ᴄʜ🦋','callback_data'=>"ch"]],
[['text'=>'🔙ᴏʀǫᴀɢᴀ', 'callback_data'=>"qiziq"]],
   ]
   ]), 
   ]);
}
if($data == "b"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/3",
        'caption'=>"ʙ💜
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "a"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/2",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "e"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/5",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "d"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/4",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "g"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/7",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "h"){
    bot('senddocument',[
       'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/8",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "j"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/10",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "i"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/9",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "k"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/11",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "l"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/12",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "m"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/13",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "q"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/17",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "o"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/15",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "f"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/6",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "n"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/14",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "p"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/16",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "s"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/53",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "r"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/52",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "u"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/18",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "u"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/19",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "v"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/20",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}
if($data == "x"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/21",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}
if($data == "y"){
    bot('senddocument',[
      'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/22",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}
if($data == "z"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/23",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}
if($data == "sh"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/24",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}

if($data == "ch"){
    bot('senddocument',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'document'=>"https://t.me/xonhackbot/25",
        'caption'=>"ᴠɪᴅᴇᴏ ᴛᴀʏᴏʀ ʏᴏǫᴀɴ ʙᴏsᴀ xᴜʀsᴀɴᴅᴍᴀɴ🙃
😈ᴋᴀɴᴀʟɪᴍɪᴢ @Uz_PhP_KoDeRlaR",
        ]);
}
if($data=="fon"){
   bot('editMessageText',[
   'chat_id'=>$callcid,
        'message_id'=>$callmid,
    'text'=> "<b>ᴋᴇʀᴀᴋʟɪ ғᴏɴɴɪ ᴛᴀɴʟᴀɴɢ:⤵️</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🖼ʜᴅ ғᴏɴ', 'url'=>"https://t.me/bg/JzHJF0HUAFIBAAAAYqIF-a2x4DY"],['text'=>'🗽ʜᴅ ғᴏɴ','url'=>"https://t.me/bg/G87eMCd6-FEBAAAApSBi5CBqx0c"]], 
[['text'=>'🌋ʜᴅ ғᴏɴ', 'url'=>"https://t.me/bg/Yd1Rl3CKiUkBAAAAJQbVxmElXcw"],['text'=>'🗼ʜᴅ ғᴏɴ','url'=>"https://t.me/bg/sp-xMi7A-VEBAAAABRn6rGsUKFs"]],
[['text'=>'🌁ʜᴅ ғᴏɴ', 'url'=>"https://t.me/bg/pATdUMGs-FEBAAAA0r1Q5aJbg2w"],['text'=>'⛪ʜᴅ ғᴏɴ','url'=>"https://t.me/bg/Yd1Rl3CKiUkBAAAAJQbVxmElXcw"]],
[['text'=>'🏖ʜᴅ ғᴏɴ', 'url'=>"https://t.me/bg/pATdUMGs-FEBAAAA0r1Q5aJbg2w"],['text'=>'🌋ʜᴅ ғᴏɴ','url'=>"https://t.me/bg/I9m3arXQiFIBAAAAyYGQ6povw_E"]],
[['text'=>'🔙ᴏʀǫᴀɢᴀ', 'callback_data'=>"qiziq"]],
]
]),
]);
}
if($data=="newyear"){
  $kun1 = date('z ',strtotime('2 hour')); 
  $a = 365;
  $c2 = $a-$kun1;
  $d = date('L ',strtotime('2 hour'));
  $b = $c2+$d;
  $f = $b+81;
  $e = $b+240;
  $kun2 = date('H ',strtotime('2 hour')); 
  $a2 = 23;
  $b2 = $a2-$kun2;
  $kun3 = date('i ',strtotime('2 hour')); 
  $a3 = 59;
  $b3 = $a3-$kun3;
  $kun4 = date('s ',strtotime('2 hour')); 
  $a4 = 60;
  $b4 = $a4-$kun4;
   bot('editMessageText',[
   'chat_id'=>$callcid,
        'message_id'=>$callmid,
    'text'=> "🎅🏻 ʏᴀɴɢɪ ʏɪʟɢᴀ:
<b>
$b ᴋᴜɴ📆
$b2 sᴏᴀᴛ⏰
$b3 ᴍɪɴᴜᴛ⏲
$b4 sᴇᴋᴜɴᴅ⏱
</b>
ǫᴏʟᴅɪ🌹

😊ᴋᴇʟᴀʏᴏᴛɢᴀɴ ʏᴀɴɢɪ ʏɪʟɪɴɢɪᴢ ʙɪʟᴀɴ❕",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙ᴏʀǫᴀɢᴀ','callback_data'=>'qiziq']],
]
]),
]);
}
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
$url = file_get_contents("https://obhavo.uz/tashkent", false, stream_context_create($arrContextOptions));

$ex=explode("\n",$url);

$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));

$sana=str_replace('<div class="current-day">'," ",$ex[61]);
$sana=str_replace("</div>"," ",$sana);
$sana=trim($sana);
//kodni @xonxacker tomonidan tuzib chiqilgan!
//kanalimiz: @uz_php_koderlar
//managa tekgan 3 harf 
$kun=str_replace("<span><strong>"," ",$ex[67]);
$kun=str_replace("</strong></span>"," ",$kun);
$kun=trim($kun);
//kodni @xonxacker tomonidan tuzib chiqilgan!
//kanalimiz: @uz_php_koderlar
//managa tekgan 3 harf 
$nam=str_replace("<p>"," ",$ex[75]);
$nam=str_replace("</p>"," ",$nam);
$nam=trim($nam);

$shamol=str_replace("<p>"," ",$ex[76]);
$shamol=str_replace("</p>"," ",$shamol);
$shamol=trim($shamol);

$havo=str_replace('<div class="current-forecast-desc">'," ",$ex[71]);
$havo=str_replace("</div>"," ",$havo);
$havo=trim($havo);

$gr1=str_replace('<span><strong>',' ',$ex[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);

$gr2=str_replace('<span>',' ',$ex[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);

$bosim=str_replace("<p>"," ",$ex[77]);
$bosim=str_replace("</p>"," ",$bosim);
$bosim=trim($bosim);

$oy=str_replace("<p>"," ",$ex[80]);
$oy=str_replace("</p>"," ",$oy);
$oy=trim($oy);

$quyoshchiqiwi=str_replace("<p>"," ",$ex[81]);
$quyoshchiqiwi=str_replace("</p>"," ",$quyoshchiqiwi);
$quyoshchiqiwi=trim($quyoshchiqiwi);

$quyoshbotiwi=str_replace("<p>"," ",$ex[82]);
$quyoshbotiwi=str_replace("</p>"," ",$quyoshbotiwi);
$quyoshbotiwi=trim($quyoshbotiwi);

$kungr=str_replace('<p class="forecast">',' ',$ex[98]);
$kungr=str_replace('</p>',' ',$kungr);

$oqgr=str_replace('<p class="forecast">',' ',$ex[103]);
$oqgr=str_replace('</p>',' ',$oqgr);

$tongr=str_replace('<p class="forecast">',' ',$ex[93]);
$tongr=str_replace('</p>',' ',$tongr);

$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 

$rasm = str_replace('<span>',' ',$ex[65]);
$rasm = str_replace('</span>',' ',$rasm);
$rasm = trim($rasm);

$obhavov = "🌞ᴏʙ-ʜᴀᴠᴏ ʜᴀʀᴏʀᴀᴛɪ:

▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️
🌙 $oy
⏰ sᴏᴀᴛ $soat
🌄 ᴋᴜɴ: $kungr
🌇 ᴏǫsʜᴏᴍ: $oqgr
🌞 $quyoshbotiwi

▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️
⛔ ᴇsʟᴀᴛᴍᴀ: ʙᴜ ᴏʙ-ʜᴀᴠᴏ - 'ᴛᴀsʜᴋᴇɴᴛ' ʜᴀʀᴏʀᴀᴛɪɢᴀ ᴋᴏ'ʀᴀ ᴏʙ-ʜᴀᴠᴏ ᴍᴀʟᴜᴍᴏᴛʟᴀʀɪ!
▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️
🥀 @xonxacker ᴛᴏᴍᴏɴɪᴅᴀɴ ᴛᴜᴢɪʟᴅɪ!
";
if($data == "ohavo"){
bot('editMessageText',[
   'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"*$obhavov

➖➖➖➖➖➖➖➖➖➖➖➖
$sana

*",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙ᴏʀǫᴀɢᴀ','callback_data'=>'qiziq']],
],'resize_keyboard'=>true
        ])
    ]);
}
if($data=="til"){
   bot('editMessageText',[
   'chat_id'=>$callcid,
        'message_id'=>$callmid,
    'text'=> "⚜️ᴛᴇʟᴇɢʀᴀᴍᴅᴀ ᴏᴢɪɴɢɪᴢɢᴀ ǫᴜʟᴀʏ ᴛɪʟɴɪ ᴛᴀɴʟᴀɴɢ👇",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"🇺🇿Узбек тили",'url'=>"tg://setlanguage?lang=uzbekcyr"]],
[['text'=>"🇺🇿ᴏ'ᴢʙᴇᴋ ᴛɪʟɪ",'url'=>"tg://setlanguage?lang=uz-beta"]],
[['text'=>"🇷🇺ʀᴜss ᴛɪʟɪ",'url'=>"tg://setlanguage?lang=ru"]],
[['text'=>"🇺🇸Eɴɢʟɪsʜ Lᴀɴɢᴜɢᴇ",'url'=>"tg://setlanguage?lang=en"]],
[['text'=>'🔙ᴏʀǫᴀɢᴀ','callback_data'=>'qiziq']],
]
]),
]);
}
$url = 'https://daryo.uz/feed/';
  $rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item){
  $line = $item->title;
  break;
}  
if($data=="yangilik"){
  $soat = date('H:i', strtotime('2 hour'));
  bot('answerCallbackQuery',[
    'callback_query_id'=>$cqid,
    'chat_id'=>$ccid, 
    'text'=>"📰 $line

⏰ sᴏᴀᴛ: $soat",
   'show_alert'=>true,
   'parse_mode'=>'html',
  ]);
}
if($data=="quron"){
   bot('editMessageText',[
   'chat_id'=>$callcid,
        'message_id'=>$callmid,
    'text'=> "🌸🌸ǫᴜʀᴏɴ ʜᴀǫɪᴅᴀ🌸🌸
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
Islom ulamolari Qurʼonning 30 xil nom va sifatlarini sanab oʻtganlar.*
➖➖➖➖➖➖➖➖➖➖➖➖
Quroning tuzulishi
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
➖➖➖➖➖➖➖➖➖➖➖➖

👮ᴅᴀsᴛᴜʀᴄʜɪ: @xonxacker",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 🔙ᴏʀǫᴀɢᴀ', 'callback_data' => "namoy"]],
]
]),
]);
}
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/');
//bobdod | KOD @xonxacker (Abdulloh) GA TEGISHLI
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh | KOD @xonxacker (Abdulloh) GA TEGISHLI
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin | KOD @xonxacker (Abdulloh) GA TEGISHLI
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr | KOD @xonxacker (Abdulloh) GA TEGISHLI
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom | KOD @xonxacker (Abdulloh) GA TEGISHLI
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton | KOD @xonxacker (Abdulloh) GA TEGISHLI
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");

 
$namozv = "ɴᴀᴍᴏᴢ ᴠᴀǫᴛʟᴀʀɪ:

▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️

🕋 ʙᴏᴍᴅᴏᴅ: $bobdod        
🕋 ᴘᴇsʜɪɴ: $pеshin             
🕋 ᴀsʀ: $asr                         
🕋 sʜᴏᴍ: $shom                
🕋 xᴜғᴛᴏɴ: $xufton             

🕋ʏᴀʀᴀᴛᴜᴠᴄʜɪ : @xonxacker 

▪️▪️▪️▪️▪️▪️▪️▪️▪️▪️

⛔ 🕌ᴇsʟᴀᴛᴍᴀ: ʙᴜ ᴠᴀǫᴛʟᴀʀ - 'ᴛᴀsʜᴋᴇɴᴛ' ᴠᴀǫᴛɪɢᴀ ᴋᴏ'ʀᴀ ɴᴀᴍᴏᴢ ᴠᴀǫᴛʟᴀʀɪ!


";

if($data == "namozv"){
bot('editMessageText',[
   'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"*$namozv

➖➖➖➖➖➖➖➖➖➖➖➖
$sana

*",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙ᴏʀǫᴀɢᴀ','callback_data'=>'namoy']],
],'resize_keyboard'=>true
        ])
    ]);
}

if($data=="namoy"){
   bot('editMessageText',[
   'chat_id'=>$callcid,
        'message_id'=>$callmid,
    'text'=> "➖➖➖➖➖➖➖➖➖➖
Assᴀʟᴀᴜᴍᴜ Aʟʏᴋᴜᴍ Vᴀ
ʀᴀʜᴍᴀᴛᴜʟʟᴏʜɪ ʙᴀʀᴀᴋᴀᴛᴜʜ
 ➖➖➖➖➖➖➖➖➖➖
ᴅᴏsᴛʟᴀʀ ᴜᴄʜʙʏ ǫᴜʀᴏɴ ᴏʏᴀᴛʟᴀʀɪ
ʙᴀʀᴄʜᴀᴍɪᴢɴɪ ᴅɪʟɪᴍɪᴢɴɪ ᴏᴄʜᴀᴅɪ ❀
➖➖➖➖➖➖➖➖➖➖
🙏🏻ɪᴍᴏɴɪᴍɪᴢ ᴍᴜsᴛᴀʜᴋᴀᴍ ʙᴏʟsɪɴ
☺️ǫᴀʟʙɪᴍɪᴢ ᴘᴏᴋ ʙᴏʟsɪɴ ʙᴀʀᴄʜᴀᴍɪᴢɴɪ
➖➖➖➖➖➖➖➖➖➖",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
           [['text'=>"🌸ʀᴏᴢᴀ ᴅᴜᴏsɪ🌸",'callback_data'=>"Rozad"],['text'=>"🌹ǫᴜʀᴏɴ ʜᴀǫɪᴅᴀ🕋",'callback_data'=>"quron"]],
           [['text'=>"🕋ɴᴀᴍᴏᴢ ᴠᴀǫᴛʟᴀʀɪ🕋",'callback_data'=>"namozv"]],
           [['text'=>'🔙ᴏʀǫᴀɢᴀ','callback_data'=>'qiziq']],
            ],'resize_keyboard'=>true
        ])
    ]);
}
//=============================================================//
if($data == "Rozad"){
   bot('editMessageText',[
   'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"
——————————————————————
ʀᴏᴢᴀᴅᴀ ᴏɢ'ɪᴢ ᴏᴄʜɪsʜ ᴠᴀ ʏᴏᴘɪsʜ ᴅᴜᴏʟᴀʀɪ

ʀᴏᴢᴀ ᴛᴜᴛɪsʜ (ᴏɢ'ɪᴢ ʏᴏᴘɪsʜ)
ᴅᴜᴏsɪ. ɴᴀᴠᴀʏᴛᴜ ᴀɴ ᴀsᴜᴍᴀ
ᴄᴀᴠᴍᴀ sʜᴀxʀɪ ʀᴀᴍᴀᴢᴏɴᴀ
ᴍɪɴᴀʟ ғᴀᴊʀɪʏ ɪʟʟᴀʟ
ᴍᴀɢ'ʀɪʙɪʏ xᴏʟɪsᴀɴ
ʟɪʟʟᴏxᴜ ᴛᴀᴏʟʟᴏ ᴀʟʟᴏʜᴜ ᴀᴋʙᴀʀ. ᴀᴍɪɴ.
Rᴏᴢᴀ (ᴏɢ'ɪᴢ ᴏᴄʜɪsʜ) ᴅᴜᴏsɪ.
ᴀʟʟᴀʜᴜᴍᴀ ʟᴀᴋᴀ ᴄᴜᴍᴛᴜ ᴠᴀ
ʙɪᴋᴀ ᴀɴᴀɴᴛᴜ ᴠᴀʟᴀʏᴋᴀ
ᴛᴀᴠᴀᴋᴀʟᴛᴜ ᴠᴀ ᴀʟʟᴀ
ʀɪᴢɪᴋᴀ ɪғᴛᴏʀᴜ ғᴀɢ'ғɪʀʟɪ ʟᴀ ɢᴀғᴜʀʏ ᴍᴀ
ᴋᴀᴅᴀᴍᴛᴜ ᴠᴀ ᴍᴏ ᴀxᴀʀᴛᴜ.
ɪʟᴏxɪᴍ Aʟʟᴏʜɪᴍ ǫᴀʟᴜʙ
ᴀʏʟᴀsᴜʙ ʀᴜᴢᴀɴɢɪᴢɴɪ.
ᴀᴍɪɴ
————————————————————————",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙ᴏʀǫᴀɢᴀ','callback_data'=>'namoy']],
]
]),
]);
}
if($inline=="qiz1"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"ᴍᴀᴛɴɴɪ ʏᴜʙᴏʀɪɴɢ👸",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="ᴍᴀᴛɴɴɪ ʏᴜʙᴏʀɪɴɢ👸"){
 file_put_contents("matn/$cid.txt", $tx);
 $matn = file_get_contents("matn/$cid.txt");
 bot('sendphoto',[
 'chat_id'=>$cid,
 'photo'=>"http://xonxacker.tenxost.ru/api7/index.php?text=$matn",
 'caption'=>"ʙᴜʏᴜʀᴛᴍᴀɴɢɪᴢ ᴛᴀʏʏᴏʀ!!!

sɪᴢ ʏᴏᴢɢᴀɴ sᴏ'ᴢ - $matn.",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/Uz_PhP_KoDeRlaR'],['text'=>'👨🏻‍💻','url'=>'https://telegram.me/xonxacker']]
]
])
]);
}
 if($inline=="qiz2"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"2-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ👸",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="2-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ👸"){
 file_put_contents("matn/$cid.txt", $tx);
 $matn = file_get_contents("matn/$cid.txt");
 bot('sendphoto',[
 'chat_id'=>$cid,
 'photo'=>"http://xonxacker.tenxost.ru/api8/index.php?text=$matn",
 'caption'=>"ʙᴜʏᴜʀᴛᴍᴀɴɢɪᴢ ᴛᴀʏʏᴏʀ!!!

sɪᴢ ʏᴏᴢɢᴀɴ sᴏ'ᴢ - $matn.",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/Uz_PhP_KoDeRlaR'],['text'=>'👨🏻‍💻','url'=>'https://telegram.me/xonxacker']]
]
])
]);
}
if($inline=="qiz3"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"3-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ👸",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="3-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ👸"){
 file_put_contents("matn/$cid.txt", $tx);
 $matn = file_get_contents("matn/$cid.txt");
 bot('sendphoto',[
 'chat_id'=>$cid,
 'photo'=>"http://xonxacker.tenxost.ru/api9/index.php?text=$matn",
 'caption'=>"ʙᴜʏᴜʀᴛᴍᴀɴɢɪᴢ ᴛᴀʏʏᴏʀ!!!

sɪᴢ ʏᴏᴢɢᴀɴ sᴏ'ᴢ - $matn.",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/Uz_PhP_KoDeRlaR'],['text'=>'👨🏻‍💻','url'=>'https://telegram.me/xonxacker']]
]
])
]);
}
if($inline=="qiz4"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"4-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ👸",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="4-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ👸"){
 file_put_contents("matn/$cid.txt", $tx);
 $matn = file_get_contents("matn/$cid.txt");
 bot('sendphoto',[
 'chat_id'=>$cid,
 'photo'=>"http://xonxacker.tenxost.ru/api10/index.php?text=$matn",
 'caption'=>"ʙᴜʏᴜʀᴛᴍᴀɴɢɪᴢ ᴛᴀʏʏᴏʀ!!!

sɪᴢ ʏᴏᴢɢᴀɴ sᴏ'ᴢ - $matn.",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/Uz_PhP_KoDeRlaR'],['text'=>'👨🏻‍💻','url'=>'https://telegram.me/xonxacker']]
]
])
]);
}
 if($inline=="qiz5"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"5-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ👸",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="5-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ👸"){
 file_put_contents("matn/$cid.txt", $tx);
 $matn = file_get_contents("matn/$cid.txt");
 bot('sendphoto',[
 'chat_id'=>$cid,
 'photo'=>"http://xonxacker.tenxost.ru/api15/index.php?text=$matn",
 'caption'=>"ʙᴜʏᴜʀᴛᴍᴀɴɢɪᴢ ᴛᴀʏʏᴏʀ!!!

sɪᴢ ʏᴏᴢɢᴀɴ sᴏ'ᴢ - $matn.",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/Uz_PhP_KoDeRlaR'],['text'=>'👨🏻‍💻','url'=>'https://telegram.me/xonxacker']]
]
])
]);
}
if($inline=="qiz6"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"6-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ👸",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="6-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ👸"){
 file_put_contents("matn/$cid.txt", $tx);
 $matn = file_get_contents("matn/$cid.txt");
 bot('sendphoto',[
 'chat_id'=>$cid,
 'photo'=>"http://xonxacker.tenxost.ru/api16/index.php?text=$matn",
 'caption'=>"ʙᴜʏᴜʀᴛᴍᴀɴɢɪᴢ ᴛᴀʏʏᴏʀ!!!

sɪᴢ ʏᴏᴢɢᴀɴ sᴏ'ᴢ - $matn.",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/Uz_PhP_KoDeRlaR'],['text'=>'👨🏻‍💻','url'=>'https://telegram.me/xonxacker']]
]
])
]);
}
 
if($inline=="1"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"ᴍᴀᴛɴɴɪ ʏᴜʙᴏʀɪɴɢ🤴",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="ᴍᴀᴛɴɴɪ ʏᴜʙᴏʀɪɴɢ🤴"){
 file_put_contents("matn/$cid.txt", $tx);
 $matn = file_get_contents("matn/$cid.txt");
 bot('sendphoto',[
 'chat_id'=>$cid,
 'photo'=>"http://xonxacker.tenxost.ru/api6/index.php?text=$matn",
 'caption'=>"ʙᴜʏᴜʀᴛᴍᴀɴɢɪᴢ ᴛᴀʏʏᴏʀ!!!

sɪᴢ ʏᴏᴢɢᴀɴ sᴏ'ᴢ - $matn.",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/Uz_PhP_KoDeRlaR'],['text'=>'👨🏻‍💻','url'=>'https://telegram.me/xonxacker']]
]
])
]);
}
 if($inline=="2"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"2-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ🤴",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="2-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ🤴"){
 file_put_contents("matn/$cid.txt", $tx);
 $matn = file_get_contents("matn/$cid.txt");
 bot('sendphoto',[
 'chat_id'=>$cid,
 'photo'=>"http://xonxacker.tenxost.ru/api5/index.php?text=$matn",
 'caption'=>"ʙᴜʏᴜʀᴛᴍᴀɴɢɪᴢ ᴛᴀʏʏᴏʀ!!!

sɪᴢ ʏᴏᴢɢᴀɴ sᴏ'ᴢ - $matn.",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/Uz_PhP_KoDeRlaR'],['text'=>'👨🏻‍💻','url'=>'https://telegram.me/xonxacker']]
]
])
]);
}
if($inline=="3"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"3-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ🤴",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="3-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ🤴"){
 file_put_contents("matn/$cid.txt", $tx);
 $matn = file_get_contents("matn/$cid.txt");
 bot('sendphoto',[
 'chat_id'=>$cid,
 'photo'=>"http://xonxacker.tenxost.ru/api12/index.php?text=$matn",
 'caption'=>"ʙᴜʏᴜʀᴛᴍᴀɴɢɪᴢ ᴛᴀʏʏᴏʀ!!!

sɪᴢ ʏᴏᴢɢᴀɴ sᴏ'ᴢ - $matn.",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/Uz_PhP_KoDeRlaR'],['text'=>'👨🏻‍💻','url'=>'https://telegram.me/xonxacker']]
]
])
]);
}
if($inline=="4"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"4-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ🤴",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="4-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ🤴"){
 file_put_contents("matn/$cid.txt", $tx);
 $matn = file_get_contents("matn/$cid.txt");
 bot('sendphoto',[
 'chat_id'=>$cid,
 'photo'=>"http://xonxacker.tenxost.ru/api11/index.php?text=$matn",
 'caption'=>"ʙᴜʏᴜʀᴛᴍᴀɴɢɪᴢ ᴛᴀʏʏᴏʀ!!!

sɪᴢ ʏᴏᴢɢᴀɴ sᴏ'ᴢ - $matn.",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/Uz_PhP_KoDeRlaR'],['text'=>'👨🏻‍💻','url'=>'https://telegram.me/xonxacker']]
]
])
]);
}
if($inline=="5"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"5-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ🤴",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="5-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ🤴"){
 file_put_contents("matn/$cid.txt", $tx);
 $matn = file_get_contents("matn/$cid.txt");
 bot('sendphoto',[
 'chat_id'=>$cid,
 'photo'=>"http://xonxacker.tenxost.ru/api14/index.php?text=$matn",
 'caption'=>"ʙᴜʏᴜʀᴛᴍᴀɴɢɪᴢ ᴛᴀʏʏᴏʀ!!!

sɪᴢ ʏᴏᴢɢᴀɴ sᴏ'ᴢ - $matn.",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/Uz_PhP_KoDeRlaR'],['text'=>'👨🏻‍💻','url'=>'https://telegram.me/xonxacker']]
]
])
]);
}
if($inline=="6"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"6-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ🤴",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="6-ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ🤴"){
 file_put_contents("matn/$cid.txt", $tx);
 $matn = file_get_contents("matn/$cid.txt");
 bot('sendphoto',[
 'chat_id'=>$cid,
 'photo'=>"http://xonxacker.tenxost.ru/api13/index.php?text=$matn",
 'caption'=>"ʙᴜʏᴜʀᴛᴍᴀɴɢɪᴢ ᴛᴀʏʏᴏʀ!!!

sɪᴢ ʏᴏᴢɢᴀɴ sᴏ'ᴢ - $matn.",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/Uz_PhP_KoDeRlaR'],['text'=>'👨🏻‍💻','url'=>'https://telegram.me/xonxacker']]
]
])
]);
}

if($inline=="juma"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ🌹",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="ʀᴀsᴍɢᴀ ᴍᴀᴛɴ ʏᴜʙᴏʀɪɴɢ🌹"){
 file_put_contents("matn/$cid.txt", $tx);
 $matn = file_get_contents("matn/$cid.txt");
 bot('sendphoto',[
 'chat_id'=>$cid,
 'photo'=>"http://xonxacker.tenxost.ru/api17/index.php?text=$matn",
 'caption'=>"ʙᴜʏᴜʀᴛᴍᴀɴɢɪᴢ ᴛᴀʏʏᴏʀ!!!

sɪᴢ ʏᴏᴢɢᴀɴ ɪsᴍ - $matn.",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'📡','url'=>'https://telegram.me/Uz_PhP_KoDeRlaR'],['text'=>'👨🏻‍💻','url'=>'https://telegram.me/xonxacker']]
]
])
]);
}
?>