<?php

ob_start();
define('API_KEY', '1931255596:AAF2FyHZdMG3xSfd9w6LhXq7SCb3AQY1GVA');
$admin = "1687595445"; 
$kanali = "@Jizzax";
$botim = "ADVAKAT_PROBOT";

function ty($ch){ 
return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
} 

//Mana yana 1ta mashenik @king_koder ni kodini tarqatib  yuribdi useri @GOLD_Bloggeruz yiban hudodan top bildingmi qoʻtobosh enang omiga ske Allohdan top


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
$token = "1931255596:AAF2FyHZdMG3xSfd9w6LhXq7SCb3AQY1GVA";
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$name = $message->from->first_name;
$username = $message->from->username;
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$ch_user2 = $update->callback_query->message->chat->username;
$message_id2 = $update->callback_query->message->message_id;
$fadmin2 = $update->callback_query->from->id;
$fadmin = $message->from->id;
$cty = $message->chat->type;

$id1 = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repuser = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;

$name2 = $update->callback_query->from->first_name;
$username2 = $update->callback_query->from->username;
$about2 = $update->callback_query->from->about;
$lname2 = $update->callback_query->from->last_name;
$title = $message->chat->title;
$description = $message->chat->description;

$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ismi = $message->new_chat_member->first_name;
$is_bot = $message->new_chat_member->is_bot;

$name = $message->from->first_name;
$user = $message->from->username;
$uid = $message->from->id;
$reply = $message->reply_to_message->text;
$mid = $message->message_id;
$id = $message->reply_to_message->from->id;
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$sreply = $message->reply_to_message->text;

$sticker = $message->sticker;
$audio = $message->audio;
$voice = $message->voice;
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

$chan  = $update->channel_post;
$ch_text = $chan->text;
$ch_photo = $chan->photo;
$ch_mid = $chan->message_id;
$ch_cid = $chan->chat->id;

//Mana yana 1ta mashenik @king_koder ni kodini tarqatib  yuribdi useri @GOLD_Bloggeruz yiban hudodan top bildingmi qoʻtobosh enang omiga ske Allohdan top

$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 

$data = $update->callback_query->data;
$cmid = $update->callback_query->message->message_id;
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$qid = $update->callback_query->id; 

$ctext = $update->callback_query->message->text; 
$callfrid = $update->callback_query->from->id; 
$callfname = $update->callback_query->from->first_name;  
$calltitle = $update->callback_query->message->chat->title; 
$calluser = $update->callback_query->message->chat->username; 
 
$channel = $update->channel_post; 
$channel_text = $channel->text;
$channel_mid = $channel->message_id; 
$channel_id = $channel->chat->id; 
$channel_user = $channel->chat->username; 

$chanel_doc = $channel->document; 
$chanel_vid = $channel->video; 
$chanel_mus = $channel->audio; 
$chanel_voi = $channel->voice; 
$chanel_gif = $channel->animation; 
$chanel_fot = $channel->photo; 
$caption=$channel->caption;
$cap=file_get_contents("baza/$channel_id.txt");
mkdir("like");
mkdir("baza");

$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;

$reply = $message->reply_to_message->text;
$rid = $message->reply_to_message->forward_from->id;
$fid =  $message->from->id;
$uname =  $message->from->first_name;
$ufname =  $message->from->last_name;
$usname =  $message->from->username;
$data = $update->callback_query->data;
$qid = $update->callback_query->id;

$rpl = json_encode([
    'recize_keyboard'=>false,
    'force_reply'=>true,
    'selective'=>true
     ]);

function  getUserProfilePhotos($token,$fadmin){
  @$url = "https://api.telegram.org/bot$token/getUserProfilePhotos?user_id=$fadmin";
  @$result = file_get_contents($url);
  @$result = json_decode ($result);
  @$result = $result->result;
  return $result;
}

$soata = date('H:i', strtotime('2 hour'));

$editm = $update->edited_message;
$edname = $editm ->from->first_name;

if ($editm){
bot ('SendMessage',[
'chat_id'=> $chat_id,
'text'=>"$edname siz oldin $editm degan edingiz!",
]);
}

function reyting(){
$tx = $message->text;
$ex=explode("_",$tx);
    $text = "<b>🛡TOP 20 ta Obroga ega A'zolar:</b>\n\n";
    $daten = [];
    $rev = [];
    $fayllar = glob("*obro/$ex[1]/*.*");
    foreach($fayllar as $file){
        if(mb_stripos($file,".txt")!==false){
        $value = file_get_contents($file);
        $id = str_replace(["obro/$ex[1]/",".txt"],["",""],$file);
        $daten[$value] = $id;
        $rev[$id] = $value;
        }
        echo $file;
    }

    asort($rev);
    $reversed = array_reverse($rev);
    for($i=0;$i<20;$i+=1){
        $order = $i+1;
        $id = $daten["$reversed[$i]"];
        $text.= "<b>{$order}</b>. <a href='tg://user?id={$id}'>{$id}</a> - "."<b>".$reversed[$i]."</b>"." <i>ta!</i>"."\n";
    }
    return $text;
}
///obro///
mkdir("obro");
if(isset($sreply) and $text1=="raxmat" and $uid!==$id){
$obro = file_get_contents("obro/$id.txt");
$miqdor = $obro+=1;
$son=file_put_contents("obro/$id.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "[$repname](tg://user?id=$id) Sinning Obroingiz [$name](tg://user?id=$uid) Tomonidan oshirildi!\nSizning Oboringiz soni: *$obro* ta❗",
'parse_mode' => 'markdown',
]);
}
if(isset($sreply) and $text1=="mashka" and $uid!==$id){
$obro = file_get_contents("obro/$id.txt");
$miqdor = $obro-=1;
$son=file_put_contents("obro/$id.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "[$repname](tg://user?id=$id) Sinning Obroingiz [$name](tg://user?id=$uid) Tomonidan tushurildi!\nSizning *Oboringiz* soni: *$obro* ta❗",
'parse_mode' => 'markdown',
]);
}

if(isset($sreply) and $text1=="Ok" and $uid!==$id){
$obro = file_get_contents("obro/$id.txt");
$miqdor = $obro+=1;
$son=file_put_contents("obro/$id.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "[$repname](tg://user?id=$id) Sinning Obroingiz [$name](tg://user?id=$uid) Tomonidan oshirildi!\nSizning Oboringiz soni: *$obro* ta❗",
'parse_mode' => 'markdown',
]);
}
if(isset($sreply) and $text1=="mashenik" and $uid!==$id){
$obro = file_get_contents("obro/$id.txt");
$miqdor = $obro-=1;
$son=file_put_contents("obro/$id.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "[$repname](tg://user?id=$id) Sinning Obroingiz [$name](tg://user?id=$uid) Tomonidan tushurildi!\nSizning *Oboringiz* soni: *$obro* ta❗",
'parse_mode' => 'markdown',
]);
}

if(isset($sreply) and $text1=="Raxmat" and $uid!==$id){
$obro = file_get_contents("obro/$id.txt");
$miqdor = $obro+=1;
$son=file_put_contents("obro/$id.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "[$repname](tg://user?id=$id) Sinning Obroingiz [$name](tg://user?id=$uid) Tomonidan oshirildi!\nSizning Oboringiz soni: *$obro* ta❗",
'parse_mode' => 'markdown',
]);
}
if(isset($sreply) and $text1=="Aldoqchi" and $uid!==$id){
$obro = file_get_contents("obro/$id.txt");
$miqdor = $obro-=1;
$son=file_put_contents("obro/$id.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "[$repname](tg://user?id=$id) Sinning Obroingiz [$name](tg://user?id=$uid) Tomonidan tushurildi!\nSizning *Oboringiz* soni: *$obro* ta❗",
'parse_mode' => 'markdown',
]);
}

//*Mana yana 1ta mashenik @king_koder ni kodini tarqatib  yuribdi useri @GOLD_Bloggeruz yiban hudodan top bildingmi qoʻtobosh enang omiga ske Allohdan top*//

if(isset($sreply) and $text1=="Mashka" and $uid!==$id){
$obro = file_get_contents("obro/$id.txt");
$miqdor = $obro-=1;
$son=file_put_contents("obro/$id.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "[$repname](tg://user?id=$id) Sinning Obroingiz [$name](tg://user?id=$uid) Tomonidan tushurildi!\nSizning *Oboringiz* soni: *$obro* ta❗",
'parse_mode' => 'markdown',
]);
}

if(isset($sreply) and $text1=="Mashenik" and $uid!==$id){
$obro = file_get_contents("obro/$id.txt");
$miqdor = $obro-=1;
$son=file_put_contents("obro/$id.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "[$repname](tg://user?id=$id) Sinning Obroingiz [$name](tg://user?id=$uid) Tomonidan tushurildi!\nSizning *Oboringiz* soni: *$obro* ta❗",
'parse_mode' => 'markdown',
]);
}

if(isset($sreply) and $text1=="aldoqchi" and $uid!==$id){
$obro = file_get_contents("obro/$id.txt");
$miqdor = $obro-=1;
$son=file_put_contents("obro/$id.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "[$repname](tg://user?id=$id) Sinning Obroingiz [$name](tg://user?id=$uid) Tomonidan tushurildi!\nSizning *Oboringiz* soni: *$obro* ta❗",
'parse_mode' => 'markdown',
]);
}

if(isset($sreply) and $text1=="ok" and $uid!==$id){
$obro = file_get_contents("obro/$id.txt");
$miqdor = $obro+=1;
$son=file_put_contents("obro/$id.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "[$repname](tg://user?id=$id) Sinning Obroingiz [$name](tg://user?id=$uid) Tomonidan oshirildi!\nSizning Oboringiz soni: *$obro* ta❗",
'parse_mode' => 'markdown',
]);
}

if(isset($sreply) and $text1=="Rahmat" and $uid!==$id){
$obro = file_get_contents("obro/$id.txt");
$miqdor = $obro+=1;
$son=file_put_contents("obro/$id.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "[$repname](tg://user?id=$id) Sinning Obroingiz [$name](tg://user?id=$uid) Tomonidan oshirildi!\nSizning Oboringiz soni: *$obro* ta❗",
'parse_mode' => 'markdown',
]);
}
if(isset($sreply) and $text1=="Aldadi" and $uid!==$id){
$obro = file_get_contents("obro/$id.txt");
$miqdor = $obro-=1;
$son=file_put_contents("obro/$id.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "[$repname](tg://user?id=$id) Sinning Obroingiz [$name](tg://user?id=$uid) Tomonidan tushurildi!\nSizning *Oboringiz* soni: *$obro* ta❗",
'parse_mode' => 'markdown',
]);
}

if(isset($sreply) and $text1=="rahmat" and $uid!==$id){
$obro = file_get_contents("obro/$id.txt");
$miqdor = $obro+=1;
$son=file_put_contents("obro/$id.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "[$repname](tg://user?id=$id) Sinning Obroingiz [$name](tg://user?id=$uid) Tomonidan oshirildi!\nSizning Oboringiz soni: *$obro* ta❗",
'parse_mode' => 'markdown',
]);
}
if(isset($sreply) and $text1=="aldadi" and $uid!==$id){
$obro = file_get_contents("obro/$id.txt");
$miqdor = $obro-=1;
$son=file_put_contents("obro/$id.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "[$repname](tg://user?id=$id) Sinning Obroingiz [$name](tg://user?id=$uid) Tomonidan tushurildi!\nSizning *Oboringiz* soni: *$obro* ta❗",
'parse_mode' => 'markdown',
]);
}
if($text1=="/myrep"){
$obro=file_get_contents("obro/$uid.txt");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"[$name](tg://user?id=$uid) Sizning Obroingiz soni: *$obro* ta",
'parse_mode'=>'markdown',
]);
}

if($text1=="/yourep"){
$obro=file_get_contents("obro/$id.txt");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"[$repname](tg://user?id=$id) ning Obrosi soni: *$obro* ta",
'parse_mode'=>'markdown',
]);
}
if($text1=="/toprep"){
$reyting = reyting();
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$reyting",
'reply_to_message_id'=>$mid,
'parse_mode'=>'html',
]);
}
if ((stripos($text1,"/put")!==false) and $fadmin == $admin){
$baza = file_get_contents("viki/xotira.txt");
$str = explode("\n", $baza);
foreach($str as $uz){
}
$ex = explode("|",$text1);
$savol = $ex[1];
$javob = $ex[2];
if ("$savol|$javob" == $uz){
bot ('SendMessage', [
'chat_id'=> $chat_id, 
'text'=>"Botda mavjud!",
'reply_to_message_id'=> $mid,
]);
}else{
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"📎 Savol javob qo'shildi
🔒 Savol: $savol
🔑 Javob: $javob",
'reply_to_message_id'=> $mid,
]);
file_put_contents("viki/xotira.txt","$baza\n$savol|$javob");
}
}

if ($data == "kanal"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"Salom <b>$name</b>, bu bot kanallardagi postlaringizga ulashish va like tugmalarini qo'yib beradi. Buning uchun botni kanalingizga qo'shib administratorlik huquqlarini berib qo'yishingiz kerak!.

<code>#comment</code> va so'z - Har bir postingizga #comment so'zidan keyingi yozgan so'zingiz qo'shiladi
<code>#text</code> - #comment ga yozlilgan matningiz
<code>#clear</code> - #comment matnini o'chirib yuborish

<b>Yuqorida keltirilgan buyruqlar faqat kanallarda ishlaydi!</b>

iltimos Bosh menyuga qaytish uchun /start tugmasini bosing✔︎",
   'parse_mode' => 'html'
  ]);
}

if(isset($chanel_doc) or isset($chanel_vid) or isset($chanel_mus) or isset($chanel_voi) or isset($chanel_gif) or isset($chanel_fot)){

   bot('editmessagecaption',[
        'chat_id'=>$channel_id,
        'message_id'=>$channel_mid,
        'caption'=>"$caption

$cap",
        'parse_mode'=>'html',
      ]);
  
    $tokenn=uniqid("true");

    bot('editMessageReplyMarkup',[
        'chat_id'=>$channel_id,
        'message_id'=>$channel_mid,
        'inline_query_id'=>$qid, 
        'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"😍𝓨𝓸𝓺𝓭𝓲", 'callback_data'=>"$tokenn=👍"],['text'=>"🙄𝓨𝓸𝓺𝓶𝓪𝓭𝓲",'callback_data'=>"$tokenn=👎"]],[['text'=>"☘︎𝐎𝐯𝐨𝐳 𝐁𝐞𝐫𝐠𝐚𝐧𝐥𝐚𝐫☘︎","url"=>"t.me/$botim"]],
       [['text'=>"𑁍ᗪO'ՏTᒪᗩᖇᘜᗩ ᑌᒪᗩՏᕼIՏᕼ𑁍", "url"=>"https://telegram.me/share/url?url=https://telegram.me/$channel_user/$channel_mid"]], 
       ] 
       ]) 
       ]);
}


if(mb_stripos($data,"=")!==false){ 
$ex=explode("=",$data); 
$calltok=$ex[0]; 
$emoj=$ex[1]; 
$mylike=file_get_contents("like/$calltok.dat"); 
if(mb_stripos($mylike,"$callfrid")!==false){ 
      bot('answerCallbackQuery',[ 
        'callback_query_id'=>$qid, 
        'text'=>"Kechirasiz siz ovoz berib bo'lgansiz!", 
        'show_alert'=>false, 
    ]); 
}else{ 
file_put_contents("like/$calltok.dat","$mylike\n$callfrid=$emoj"); 
$value=file_get_contents("like/$calltok.dat"); 
$lik=substr_count($value,"👍"); 
$des=substr_count($value,"👎"); 
     bot('editMessageReplyMarkup',[ 
        'chat_id'=>$ccid, 
        'message_id'=>$cmid,
        'inline_query_id'=>$qid,
        'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"😍𝓨𝓸𝓺𝓭𝓲-$lik", 'callback_data'=>"$calltok=👍"],['text'=>"🙄𝓨𝓸𝓺𝓶𝓪𝓭𝓲-$des",'callback_data'=>"$calltok=👎"]],[['text'=>"☘︎𝐎𝐯𝐨𝐳 𝐁𝐞𝐫𝐠𝐚𝐧𝐥𝐚𝐫☘︎","url"=>"t.me/$botim"]],
       [['text'=>"𑁍ᗪO'ՏTᒪᗩᖇᘜᗩ ᑌᒪᗩՏᕼIՏᕼ𑁍", "url"=>"https://telegram.me/share/url?url=https://telegram.me/$channel_user/$channel_mid"]], 
       ] 
       ]) 
       ]);
       bot('answerCallbackQuery',[ 
        'callback_query_id'=>$qid, 
        'text'=>"Ovozingiz qabul qilindi!", 
        'show_alert'=>false, 
    ]);  
  }
}

if(mb_stripos($channel_text,"#comment")!==false){
  $ex=explode("#comment", $channel_text);
  $exe=$ex[1];
  file_put_contents("baza/$channel_id.txt", "$exe");
  bot('deletemessage',[
    'chat_id'=>$channel_id,
    'message_id'=>$channel_mid,
  ]);
}

if($channel_text=="#text"){
  bot('deletemessage',[
    'chat_id'=>$channel_id,
    'message_id'=>$channel_mid,
  ]);
  bot('sendmessage',[
    'chat_id'=>$channel_id,
    'text'=>$cap,
    'parse_mode'=>'html',
  ]);
}

if($channel_text=="#clear"){
  unlink("baza/$channel_id.txt");
  bot('deletemessage',[
    'chat_id'=>$channel_id,
    'message_id'=>$channel_mid,
  ]);
}

if ((stripos($text1,"/del")!==false) and $fadmin == $admin){
$baza = file_get_contents("viki/xotira.txt");
$ex = explode("|", $text1);
if (stripos($baza, $ex[1])!==false){
$str = str_replace("$ex[1]|$ex[2]","",$baza);
file_put_contents("viki/xotira.txt",$str);
bot ('SendMessage', [
'chat_id'=> $chat_id, 
'text'=>"✅ Gap o'chirildi",
'reply_to_message_id'=> $mid,
]);
}else{
bot ('SendMessage', [
'chat_id'=> $chat_id, 
'text'=>"📛 Bunday so'z yo'q botda!",
'reply_to_message_id'=> $mid,
]);
}
}

if ($cty == "supergroup"){
$baza = file_get_contents("viki/xotira.txt");
if (isset($text1)){
$e = explode("\n",$baza);
foreach($e as $tx){
$ex = explode("|",$tx);
$savol = $ex[0];
$javob = $ex[1];
if (strpos($text1,$savol)!==false){
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>$javob,
'reply_to_message_id'=> $mid,
]);
}
}
}
}

if ($text1 == "/msg" or $text1=="/msg@$botim"){
$gett = bot ('GetChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
if ($get == "administrator" or $get == "creator"){
$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;
$mid1 = $mid/$count;
$ro = round($mid1);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>$title</b> guruhida hammasi bo'lib <b>$mid</b>ta xabar yozilgan
💁‍♂️Shunda <b>$count</b>ta odam o'rtacha <b>$ro</b>tadan xabar yozishgan!",
'parse_mode'=>"html",
'reply_to_message_id'=> $mid,
]);
}
}

function kurs(){
       $response = "";
       $xml = file_get_contents("http://cbu.uz/uzc/arkhiv-kursov-valyut/xml/");
       $m = new SimpleXMLElement($xml);
       foreach ($m as $val) {
           if($val->Ccy == 'USD'){
               $response .= "Aqsh dollori - " . $val->Rate . " sum\n\n";
           }
           if($val->Ccy == 'AED'){
               $response .= "BAA dirhami - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'AFN'){
               $response .= "Afgoniston Afgoni - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'AMD'){
               $response .= "Armaniston drami - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'ARS'){
               $response .= "Argentika pesosi - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'AUD'){
               $response .= "Avstraliya dollori - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'AZN'){
               $response .= "Ozarbayjon manati - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'BDT'){
               $response .= "Bangladesh Takasi - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'BGN'){
               $response .= "Bolgariya levi - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'BDH'){
               $response .= "Bahrayn dinori - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'BND'){
               $response .= "Bruney dollori - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'BRL'){
               $response .= "Braziliya reali - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'BYN'){
               $response .= "Belorus rubli - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'ZAR'){
               $response .= "Songgi Yangilanishlar: " . $val->date."\n";
           }
           if($val->Ccy == 'JPY'){
               $response .= "Yaponiya - " . $val->Rate . " sum\n";
           }  if($val->Ccy == 'RUB'){
               $response .= "Rossiya rubli - " . $val->Rate . " sum\n";
           }
       }
      return $response;
   }
   
if ($text1 == "/kurs" or $text1=="/kurs@ADVAKAT_PROBOT"){
$gett = bot ('GetChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
if ($get == "administrator" or $get == "creator"){
$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>kurs()."",
'parse_mode'=>"html",
'reply_to_message_id'=> $mid,
]);
}
}
if ($new_chat_members == "6478488483383"){
bot ('SendMessage', [
'chat_id'=> $chat_id2,
'text'=>"🙋‍♂Salom barchaga endi men <b>$title</b> guruhi uchun xizmat qilaman
🤖Meni guruhingizga sozlash uchun /sozlama buyrug'ini yuboring!
💎Bosh homiy: @Jizzaxlikllar",
'parse_mode'=>"html",
'reply_to_message_id'=> $mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💎UzBot News",'url'=>"t.me/Jizzaxlikllar"]]
]
])
]);
}

if(mb_stripos($text1,"/getpro")!==false){
$ex = explode(" ", $text1);
$rasm = $ex[1];
$getuserprofile = getUserProfilePhotos($token,$fadmin);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[$rasm - 1][0]->file_id;
bot ('SendPhoto', [
'chat_id'=> $chat_id,
'photo'=>$getuserphoto,
'caption'=>"🗂Sizning profilingizdagi *$rasm*-raqamli rasmingiz. Profilingizda umumiy  *$cuphoto*ta rasm mavjud.",
'parse_mode'=>"markdown",
]);
}

if (mb_stripos($text1,"/welcome")!==false){
$wel = str_replace("/welcome","", $text1);
bot ('deleteMessage', [
'chat_id'=> $chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"✅Salomlashish matni o'zgardi",
]);
file_put_contents("viki/$chat_id.wel",$wel);
}

if (isset($text1)){
$calc = urlencode($text1);
$rs = file_get_contents
('http://api.mathjs.org/v1/?expr='.$calc);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$rs",
'reply_to_message_id'=> $mid,
]);
}



if(isset($text1)){
$avto = file_get_contents("avto/$chat_id");
if($avto){
}else{
$avtob = ["avto"=>"true",];
file_put_contents("avto/$chat_id",json_encode($avtob));
}
}

$avtob = json_decode(file_get_contents("avto/$chat_id"),true);
$Savto = $avtob["avto"];


if ($data == "avto"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id2,
'user_id' => $fadmin2,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$avtob = json_decode(file_get_contents("avto/$chat_id2"),true);
$avtoa = $avtob["avto"];
if($avtoa == "false"){
$avtoa = "☑️O'chirilgan";
}else{
$avtoa = "✅Yoqilgan";
}
bot ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"<b>Avto admin tizimiga xush kelibsiz bu tizim orqali siz guruhga yangi a'zo qo'shgan foydalanuvchini guruhga avtomatik admin qilishingiz mumkin nechta foydalanuvchi qo'shsa admin bo'lishini ham albatta siz belgilaysiz</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👨🏻‍💻Avto tizim",'callback_data'=>"null"],['text'=>"$avtoa",'callback_data'=>"V()avto"],],
[['text'=>"🔏Sozlash",'callback_data'=>"avtoset"],['text'=>"🔙Orqaga",'callback_data'=>"panel_back"]]
]
])
]);
}
}

mkdir("avto");

$callback = $update->callback_query;
$dataa = $callback->data;
$dataa = explode("()",$dataa);
if($dataa[0] == "V"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id2,
'user_id' => $fadmin2,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$gets = bot("getChat",[
"chat_id"=>"$chat_id2",
]);
$title = $gets->result->title;
$avtob = json_decode(file_get_contents("avto/$chat_id2"),true);
if($avtob["$dataa[1]"] == "true"){
$input = "false";
}else{
$input = "true";
}
$avtob["$dataa[1]"] = $input;
file_put_contents("avto/$chat_id2",json_encode($avtob));
$avtob = json_decode(file_get_contents("avto/$chat_id2"),true);
$avtoa = $avtob["avto"];
if($avtoa == "false"){
$avtoa = "☑️O'chirilgan";
}else{
$avtoa = "✅Yoqilgan";
}
bot('editMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"<b>Avto admin tizimiga xush kelibsiz bu tizim orqali siz guruhga yangi a'zo qo'shgan foydalanuvchini guruhga avtomatik admin qilishingiz mumkin nechta foydalanuvchi qo'shsa admin bo'lishini ham albatta siz belgilaysiz</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👨🏻‍💻Avto tizim",'callback_data'=>"null"],['text'=>"$avtoa",'callback_data'=>"V()avto"],],
[['text'=>"🔏Sozlash",'callback_data'=>"avtoset"],['text'=>"🔙Orqaga",'callback_data'=>"panel_back"]]
]
])
]);
}
}

if ($data == "avtoset"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id2,
'user_id' => $fadmin2,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
bot ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"<b>Nechta odam qo'shsa avtomatik admin qilishni xoxlaysiz:</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"50",'callback_data'=>"son_50"],['text'=>"100",'callback_data'=>"son_100"],],
[['text'=>"150",'callback_data'=>"son_150"],['text'=>"200",'callback_data'=>"son_200"],],
[['text'=>"250",'callback_data'=>"son_250"],['text'=>"300",'callback_data'=>"son_300"],],
[['text'=>"350",'callback_data'=>"son_350"],['text'=>"400",'callback_data'=>"son_400"],],
[['text'=>"450",'callback_data'=>"son_450"],['text'=>"500",'callback_data'=>"son_500"],],
[['text'=>"🔙Orqaga",'callback_data'=>"avto"],['text'=>"🗑Menu yopish",'callback_data'=>"exit"],],
]
])
]);
}
}

if ($data == "null"){
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=> "❎Bu bo'lim o'zgarmaydi.!",
'show_alert'=>false,
]);
}

if (mb_stripos($data,"son")!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id2,
'user_id' => $fadmin2,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$ex = explode("_", $data);
$son = $ex[1];
file_put_contents("panel/$chat_id2.son","$son");
$soni = file_get_contents("panel/$chat_id2.son");
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=> "Avto tizim sozlandi guruhga $soni odam qo'shgan admin bo'ladi",
       'show_alert'=>true,
        ]);
bot ('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=> $message_id2,
'text'=>"<b>Salom,</b> <a href='tg://user?id=$fadmin2'>$name2</a> <b>quyidagi tugmalar yordamida botni boshqaring!</b>",
'parse_mode'=>"html",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🛡Media sozlash",'callback_data'=>"sozlash"],['text'=>"📄Guruh haqida",'callback_data'=>"haqida"]],
[['text'=>"👨🏻‍💻Adminlar",'callback_data'=>"adminlar"],['text'=>"⛓Guruh havolasi",'callback_data'=>"havola"]],
[['text'=>"🤖Avto admin",'callback_data'=>"avto"],['text'=>"Majburiy azolik",'callback_data'=>"setchannel"]],[['text'=>"🗑Menu yopish",'callback_data'=>"exit"]]
]
])
]);
}
}

if(isset($text1)){
$get = file_get_contents("panel/$chat_id");
if($get){
}else{
$baza = [
"salom"=>"true",
"link"=>"true",
"chats"=>"true",
"stiker"=>"true",
"audio"=>"true",
"voice"=>"true",
"photo"=>"true",
"user"=>"true",
"arab"=>"true",
"soz"=>"true",
"lih"=>"true",
"video"=>"true",
"fayl"=>"true",
"kirish"=>"true",
"game"=>"true",
"location"=>"true",
"kontakt"=>"true",
"giflar"=>"true",
"bots"=>"true",
"forward"=>"true",
"selfi"=>"true",
];
file_put_contents("panel/$chat_id",json_encode($baza));
}
}

$baza = json_decode(file_get_contents("panel/$chat_id"),true);
$Ssalom = $baza["salom"];
$Slink = $baza["link"];
$Schats = $baza["chats"];
$Sstiker = $baza["stiker"];
$Saudio  = $baza["audio"];
$Svoice = $baza["voice"];
$Svideo = $baza["video"];
$Slocation = $baza["location"];
$Sgame  = $baza["game"];
$Skontakt = $baza["kontakt"];
$Skirish = $baza["kirish"];
$Sphoto = $baza["photo"];
$Suser = $baza["user"];
$Sarab = $baza["arab"];
$Ssoz = $baza["soz"];
$Slih = $baza["lih"];
$Sfayl = $baza["fayl"];
$Sgif = $baza["giflar"];
$Sbots = $baza["bots"];
$Sforward = $baza["forward"];
$Sselfi = $baza["selfi"];

$adminlist = file_get_contents("viki/adminlar/$chat_id");
$sons = file_get_contents("panel/$chat_id.son");
if(isset($update) and $Savto == "true"){
if ($new_chat_members){
if (mb_stripos($adminlist, $fadmin)!==false){
bot ('SendMessage', [
'chat_id'=> $chat_id,
'parse_mode'=>"markdown",
'text'=>"*Siz allaqachon admin bo'lgansiz!*",
]);
}else{
$war=file_get_contents("warn.dat");
$jazo="$war\n$chat_id=$fadmin";
file_put_contents("warn.dat",$jazo);
$war=file_get_contents("warn.dat");
$soni="$chat_id=$fadmin";
 $str=substr_count($war,"$soni");
if($str=="$sons"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn.dat",$rep);
file_put_contents("viki/adminlar/$chat_id", $fadmin);
bot('promoteChatmember',[
      'chat_id'=>$chat_id,
      'user_id'=>$fadmin,
      'can_change_info'=>true,
      'can_post_messages'=>false,
      'can_edit_messages'=>false,
      'can_delete_messages'=>true,
      'can_invite_users'=>true,
      'can_restrict_members'=>true,
      'can_pin_messages'=>true,
      'can_promote_members'=>false
   ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"<a href='tg://user?id=$fadmin'>$name</a> <b>guruhga $sons ta a'zo qo'shdi va guruh adminga aylandi</b>",
        'parse_mode'=>'html',
    ]);
}elseif($str<"$sons"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"👍<a href='tg://user?id=$fadmin'>$name</a> <b>guruhga yangi a'zo taklif qildi va +1ballga ega bo'ldi agar ballar soni $sons taga yetsa avtomatik adminlik huquqi beriladi.
ℹJami ballar soni: $str</b>",
        'parse_mode'=>'html',
    ]);
}
}
}
}

mkdir("panel");

$fadmin2 = $update->callback_query->from->id;
$imid = $callback->inline_message_id;
if($data == "media"){
$gett2 = bot('getChatMember', [
'chat_id'=> $chat_id2,
'user_id'=> $fadmin2,
]);
$get2 = $gett2->result->status;
if($get2 =="administrator" or $get2 == "creator"){
$baza = json_decode(file_get_contents("panel/$chat_id2"),true);
$gets = bot("getChat",[
"chat_id"=>"$chat_id2",
]);
$title = $gets->result->title;
$username = $gets->username;
$salom = $baza["salom"];
if($salom == "false"){
$salom = "☑️Taqiqlangan";
}else{
$salom = "✅Ruhsat etilgan";
}
$link = $baza["link"];
if($link == "false"){
$link = "☑️Taqiqlangan";
}else{
$link = "✅Ruhsat etilgan";
}
$chats = $baza["chats"];
if($chats == "false"){
$chats = "☑️Taqiqlangan";
}else{
$chats = "✅Ruhsat etilgan";
}
$stiker = $baza["stiker"];
if($stiker == "false"){
$stiker = "☑️Taqiqlangan";
}else{
$stiker = "✅Ruhsat etilgan";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑️Taqiqlangan";
}else{
$audio = "✅Ruhsat etilgan";
}
$voice = $baza["voice"];
if($voice == "false"){
$voice = "☑️Taqiqlangan";
}else{
$voice = "✅Ruhsat etilgan";
}
$photo = $baza["photo"];
if($photo == "false"){
$photo = "☑️Taqiqlangan";
}else{
$photo = "✅Ruhsat etilgan";
}
$user = $baza["user"];
if($user == "false"){
$user = "☑️Taqiqlangan";
}else{
$user = "✅Ruhsat etilgan";
}
$arab = $baza["arab"];
if($arab == "false"){
$arab = "☑️Taqiqlangan";
}else{
$arab = "✅Ruhsat etilgan";
}
$soz = $baza["soz"];
if($soz == "false"){
$soz = "☑️Taqiqlangan";
}else{
$soz = "✅Ruhsat etilgan";
}
$lih = $baza["lih"];
if($lih == "false"){
$lih = "☑️Taqiqlangan";
}else{
$lih = "✅Ruhsat etilgan";
}
$video = $baza["video"];
if($video == "false"){
$video = "☑️Taqiqlangan";
}else{
$video = "✅Ruhsat etilgan";
}
$fayl = $baza["fayl"];
if($fayl == "false"){
$fayl = "☑️Taqiqlangan";
}else{
$fayl = "✅Ruhsat etilgan";
}
$kirish = $baza["kirish"];
if($kirish == "false"){
$kirish = "☑️Taqiqlangan";
}else{
$kirish = "✅Ruhsat etilgan";
}
$location = $baza["location"];
if($location == "false"){
$location = "☑️Taqiqlangan";
}else{
$location = "✅Ruhsat etilgan";
}
$game = $baza["game"];
if($game == "false"){
$game = "☑️Taqiqlangan";
}else{
$game = "✅Ruhsat etilgan";
}
$kontakt = $baza["kontakt"];
if($kontakt == "false"){
$kontakt = "☑️Taqiqlangan";
}else{
$kontakt = "✅Ruhsat etilgan";
}
$gif = $baza["giflar"];
if($gif == "false"){
$gif = "☑️Taqiqlangan";
}else{
$gif = "✅Ruhsat etilgan";
}
$bots = $baza["bots"];
if($bots == "false"){
$bots = "☑️Taqiqlangan";
}else{
$bots = "✅Ruhsat etilgan";
}
$forward = $baza["forward"];
if($forward == "false"){
$forward = "☑️Taqiqlangan";
}else{
$forward = "✅Ruhsat etilgan";
}
$selfi = $baza["selfi"];
if($selfi == "false"){
$selfi = "☑️Taqiqlangan";
}else{
$selfi = "✅Ruhsat etilgan";
}
bot('editmessagetext', [
'chat_id'=>$chat_id2,
'message_id'=> $message_id2,
'text'=>"<a href='https://t.me/$username'>$title</a> <b>guruhini sozlash uchun quyidagi tugmalardan foydalaning:👇</b>
✅<b>Ruhsat etilgan
☑Taqiqlangan</b>",
'parse_mode'=>'html',
'inline_message_id'=>$imid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"null","text"=>"📂Fayllar"],["callback_data"=>"M()fayl","text"=>"$fayl"],],
[["callback_data"=>"null","text"=>"😊Salomlashish"],["callback_data"=>"M()salom","text"=>"$salom"],],
[["callback_data"=>"null","text"=>"ℹLinklar"],["callback_data"=>"M()link","text"=>"$link"],],
[["callback_data"=>"null","text"=>"📧Userlar"],["callback_data"=>"M()user","text"=>"$user"],],
[["callback_data"=>"null","text"=>"📢Suhbatlashish"],["callback_data"=>"M()chats","text"=>"$chats"],],
[["callback_data"=>"null","text"=>"✨Rasmlar"],["callback_data"=>"M()photo","text"=>"$photo"],],
[["callback_data"=>"null","text"=>"⛺Giflar"],["callback_data"=>"M()giflar","text"=>"$gif"],],
[["callback_data"=>"null","text"=>"🎧Musiqalar"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"null","text"=>"🎤Goloslar"],["callback_data"=>"M()voice","text"=>"$voice"],],
[["callback_data"=>"null","text"=>"🎥Videolar"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"null","text"=>"❎ Qopol Sozlar 🔞"],["callback_data"=>"M()soz","text"=>"$soz"],],
[["callback_data"=>"null","text"=>"🎭Stickerlar"],["callback_data"=>"M()stiker","text"=>"$stiker"],],
[["callback_data"=>"null","text"=>"🤓Lichga o‘tish"],["callback_data"=>"M()lih","text"=>"$lih"],],
[["callback_data"=>"null","text"=>"🎮O'yinlar"],["callback_data"=>"M()game","text"=>"$game"],],
[["callback_data"=>"null","text"=>"📵Arab Xariflari⚠️"],["callback_data"=>"M()arab","text"=>"$arab"],],
[["callback_data"=>"null","text"=>"🏠Manzillar"],["callback_data"=>"M()location","text"=>"$location"],],
[["callback_data"=>"null","text"=>"👤Kontaktlar"],["callback_data"=>"M()kontakt","text"=>"$kontakt"],],
[["callback_data"=>"null","text"=>"📄Servis xabarlar"],["callback_data"=>"M()kirish","text"=>"$kirish"],],
[["callback_data"=>"null","text"=>"👷Botlar"],["callback_data"=>"M()bots","text"=>"$bots"],],
[["callback_data"=>"null","text"=>"➡Forwardlar"],["callback_data"=>"M()forward","text"=>"$forward"],],
[["callback_data"=>"null","text"=>"📹Video selfi"],["callback_data"=>"M()selfi","text"=>"$selfi"],],
[["callback_data"=>"panel_plus","text"=>"↗ Qo'shimcha sozlamalar"],],
[["callback_data"=>"panel_back","text"=>"🔙Orqaga"],],
]
]),
]);
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"👷Faqat adminlar uchun",
'show_alert'=>true,
]);
}
}

$callback = $update->callback_query;
$dataa = $callback->data;
$dataa = explode("()",$dataa);
if($dataa[0] == "M"){
$cid = $callback->from->id;
$mid = $callback->message->message_id;
$imid = $callback->inline_message_id;
$gett2 = bot('getChatMember', [
'chat_id'=> $chat_id2,
'user_id'=> $fadmin2,
]);
$get2 = $gett2->result->status;
if($get2 =="administrator" or $get2 == "creator"){
$gets = bot("getChat",[
"chat_id"=>"$chat_id2",
]);
$title = $gets->result->title;
$baza = json_decode(file_get_contents("panel/$chat_id2"),true);
if($baza["$dataa[1]"] == "true"){
$input = "false";
}else{
$input = "true";
}
$baza["$dataa[1]"] = $input;
file_put_contents("panel/$chat_id2",json_encode($baza));
$baza = json_decode(file_get_contents("panel/$chat_id2"),true);
$salom = $baza["salom"];
if($salom == "false"){
$salom = "☑️Taqiqlangan";
}else{
$salom = "✅Ruhsat etilgan";
}
$link = $baza["link"];
if($link == "false"){
$link = "☑️Taqiqlangan";
}else{
$link = "✅Ruhsat etilgan";
}
$chats = $baza["chats"];
if($chats == "false"){
$chats = "☑️Taqiqlangan";
}else{
$chats = "✅Ruhsat etilgan";
}
$stiker = $baza["stiker"];
if($stiker == "false"){
$stiker = "☑️Taqiqlangan";
}else{
$stiker = "✅Ruhsat etilgan";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑️Taqiqlangan";
}else{
$audio = "✅Ruhsat etilgan";
}
$voice = $baza["voice"];
if($voice == "false"){
$voice = "☑️Taqiqlangan";
}else{
$voice = "✅Ruhsat etilgan";
}
$photo = $baza["photo"];
if($photo == "false"){
$photo = "☑️Taqiqlangan";
}else{
$photo = "✅Ruhsat etilgan";
}
$user = $baza["user"];
if($user == "false"){
$user = "☑️Taqiqlangan";
}else{
$user = "✅Ruhsat etilgan";
}
$arab = $baza["arab"];
if($arab == "false"){
$arab = "☑️Taqiqlangan";
}else{
$arab = "✅Ruhsat etilgan";
}
$soz = $baza["soz"];
if($soz == "false"){
$soz = "☑️Taqiqlangan";
}else{
$soz = "✅Ruhsat etilgan";
}
$lih = $baza["lih"];
if($lih == "false"){
$lih = "☑️Taqiqlangan";
}else{
$lih = "✅Ruhsat etilgan";
}
$video = $baza["video"];
if($video == "false"){
$video = "☑️Taqiqlangan";
}else{
$video = "✅Ruhsat etilgan";
}
$fayl = $baza["fayl"];
if($fayl == "false"){
$fayl = "☑️Taqiqlangan";
}else{
$fayl = "✅Ruhsat etilgan";
}
$kirish = $baza["kirish"];
if($kirish == "false"){
$kirish = "☑️Taqiqlangan";
}else{
$kirish = "✅Ruhsat etilgan";
}
$location = $baza["location"];
if($location == "false"){
$location = "☑️Taqiqlangan";
}else{
$location = "✅Ruhsat etilgan";
}
$game = $baza["game"];
if($game == "false"){
$game = "☑️Taqiqlangan";
}else{
$game = "✅Ruhsat etilgan";
}
$kontakt = $baza["kontakt"];
if($kontakt == "false"){
$kontakt = "☑️Taqiqlangan";
}else{
$kontakt = "✅Ruhsat etilgan";
}
$gif = $baza["giflar"];
if($gif == "false"){
$gif = "☑️Taqiqlangan";
}else{
$gif = "✅Ruhsat etilgan";
}
$bots = $baza["bots"];
if($bots == "false"){
$bots = "☑️Taqiqlangan";
}else{
$bots = "✅Ruhsat etilgan";
}
$forward = $baza["forward"];
if($forward == "false"){
$forward = "☑️Taqiqlangan";
}else{
$forward = "✅Ruhsat etilgan";
}
$selfi = $baza["selfi"];
if($selfi == "false"){
$selfi = "☑️Taqiqlangan";
}else{
$selfi = "✅Ruhsat etilgan";
}
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"<a href='https://t.me/$username'>$title</a> <b>guruhini sozlash uchun quyidagi tugmalardan foydalaning:👇</b>
✅<b>Ruhsat etilgan
☑Taqiqlangan</b>",
'parse_mode'=>'html',
'inline_message_id'=>$imid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"null","text"=>"📂Fayllar"],["callback_data"=>"M()fayl","text"=>"$fayl"],],
[["callback_data"=>"null","text"=>"😊Salomlashish"],["callback_data"=>"M()salom","text"=>"$salom"],],
[["callback_data"=>"null","text"=>"ℹLinklar"],["callback_data"=>"M()link","text"=>"$link"],],
[["callback_data"=>"null","text"=>"📧Userlar"],["callback_data"=>"M()user","text"=>"$user"],],
[["callback_data"=>"null","text"=>"📢Suhbatlashish"],["callback_data"=>"M()chats","text"=>"$chats"],],
[["callback_data"=>"null","text"=>"✨Rasmlar"],["callback_data"=>"M()photo","text"=>"$photo"],],
[["callback_data"=>"null","text"=>"⛺Giflar"],["callback_data"=>"M()giflar","text"=>"$gif"],],
[["callback_data"=>"null","text"=>"🎧Musiqalar"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"null","text"=>"🎤Goloslar"],["callback_data"=>"M()voice","text"=>"$voice"],],
[["callback_data"=>"null","text"=>"🎥Videolar"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"null","text"=>"❎ Qopol Sozlar 🔞"],["callback_data"=>"M()soz","text"=>"$soz"],],
[["callback_data"=>"null","text"=>"🎭Stickerlar"],["callback_data"=>"M()stiker","text"=>"$stiker"],],
[["callback_data"=>"null","text"=>"🤓Lichga o‘tish"],["callback_data"=>"M()lih","text"=>"$lih"],],
[["callback_data"=>"null","text"=>"🎮O'yinlar"],["callback_data"=>"M()game","text"=>"$game"],],
[["callback_data"=>"null","text"=>"📵Arab Xariflari⚠️"],["callback_data"=>"M()arab","text"=>"$arab"],],
[["callback_data"=>"null","text"=>"🏠Manzillar"],["callback_data"=>"M()location","text"=>"$location"],],
[["callback_data"=>"null","text"=>"👤Kontaktlar"],["callback_data"=>"M()kontakt","text"=>"$kontakt"],],
[["callback_data"=>"null","text"=>"📑Servis xabarlar"],["callback_data"=>"M()kirish","text"=>"$kirish"],],
[["callback_data"=>"null","text"=>"👷Botlar"],["callback_data"=>"M()bots","text"=>"$bots"],],
[["callback_data"=>"null","text"=>"➡Forwardlar"],["callback_data"=>"M()forward","text"=>"$forward"],],
[["callback_data"=>"null","text"=>"📹Video selfi"],["callback_data"=>"M()selfi","text"=>"$selfi"],],
[["callback_data"=>"panel_plus","text"=>"↗ Qo'shimcha sozlamalar"],],
[["callback_data"=>"panel_back","text"=>"🔙Orqaga"],],
]
]),
]);
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"👷Faqat adminlar uchun",
'show_alert'=>true,
]);
}
}

if ($text1 == "/sozlama" or $text1 == "/sozlama@ADVAKAT_PROBOT"){
if ($cty == "group" or $cty == "supergroup"){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;
if ($count >= 30){
bot ('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"<b>Salom,</b> <a href='tg://user?id=$fadmin'>$name</a> <b>quyidagi tugmalar yordamida botni boshqaring!</b>",
'parse_mode'=>"html",
'reply_to_message_id'=> $mid,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🛡Media sozlash",'callback_data'=>"sozlash"],['text'=>"📄Guruh haqida",'callback_data'=>"haqida"]],
[['text'=>"👨🏻‍💻Adminlar",'callback_data'=>"adminlar"],['text'=>"⛓Guruh havolasi",'callback_data'=>"havola"]],
[['text'=>"🤖Avto admin",'callback_data'=>"avto"],['text'=>"Majburiy azolik",'callback_data'=>"chan"]],[['text'=>"🗑Menu yopish",'callback_data'=>"exit"]]
]
])
]);
}else{
bot ('deleteMessage', [
'chat_id'=> $chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"*📛Kechirasiz ushbu buyruqdan foydalanish uchun guruhda kamida 30ta a'zo bo'lishi kerak iltimos xatoni to'g'irlab qayta urunib ko'ring!*",
'parse_mode'=>"markdown",
]);
}
}
}
}

if ($data == "sozlash"){
$gett1 = bot('getChatMember', [
'chat_id'=> $chat_id2,
'user_id'=> $fadmin2,
]);
$get1 = $gett1->result->status;
if($get1 =="administrator" or $get1 == "creator"){
bot ('editmessagetext', [
'chat_id'=>$chat_id2,
'message_id'=> $message_id2,
'text'=>"<b>Kerakli bo'limni tanlang:</b>",
'parse_mode'=>"html",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"💾Media sozlamalari",'callback_data'=>"media"]],
[['text'=>"➡Qo'shimcha sozlamalar",'callback_data'=>"qoshimcha"]],
[['text'=>"🔙 Orqaga",'callback_data'=>"panel_back"], ['text'=>"🗑Menu yopish",'callback_data'=>"exit"]]
]
])
]);
}
}


if ($data == "panel_back"){
$gett1 = bot('getChatMember', [
'chat_id'=> $chat_id2,
'user_id'=> $fadmin2,
]);
$get1 = $gett1->result->status;
if($get1 =="administrator" or $get1 == "creator"){
bot ('editmessagetext', [
'chat_id'=>$chat_id2,
'message_id'=> $message_id2,
'text'=>"<b>Salom,</b> <a href='tg://user?id=$fadmin2'>$name2</a> <b>quyidagi tugmalar yordamida botni boshqaring!</b>",
'parse_mode'=>"html",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🛡Media sozlash",'callback_data'=>"sozlash"],['text'=>"📄Guruh haqida",'callback_data'=>"haqida"]],
[['text'=>"👨🏻‍💻Adminlar",'callback_data'=>"adminlar"],['text'=>"⛓Guruh havolasi",'callback_data'=>"havola"]],
[['text'=>"🤖Avto admin",'callback_data'=>"avto"],['text'=>"🗑Menu yopish",'callback_data'=>"exit"]]
]
])
]);
}
}

if ($data == "haqida"){
$gett1 = bot('getChatMember', [
'chat_id'=> $chat_id2,
'user_id'=> $fadmin2,
]);
$get1 = $gett1->result->status;
if($get1 =="administrator" or $get1 == "creator"){
$user = bot("getchat",[
'chat_id'=>$chat_id2,
]);
$type = $user->result->type;
$id = $user->result->id;
$description1 = $user->result->description;
$title1 = $user->result->title;
$username1 = $user->result->username;
$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id2,
]);
$count = $us->result;
bot ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'parse_mode'=>"markdown",
'text'=>"*Guruh nomi:* `$title1`
*Guruh useri:* [@$username1]
*A'zolar soni:* `$count`
*Guruh ID:* `$id`
*Guruh infosi:* `$description1`",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🛡Media sozlash",'callback_data'=>"sozlash"],['text'=>"📄Guruh haqida",'callback_data'=>"haqida"]],
[['text'=>"👨🏻‍💻Adminlar",'callback_data'=>"adminlar"],['text'=>"⛓Guruh havolasi",'callback_data'=>"havola"]],
[['text'=>"🤖Avto admin",'callback_data'=>"avto"],['text'=>"🗑Menu yopish",'callback_data'=>"exit"]]
]
])
]);
}
}

if($data=="havola"){
$gett1 = bot('getChatMember', [
'chat_id'=> $chat_id2,
'user_id'=> $fadmin2,
]);
$get1 = $gett1->result->status;
if($get1 =="administrator" or $get1 == "creator"){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id2");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('editmessagetext',[
   'chat_id'=>$chat_id2,
  'message_id'=> $message_id2,
  'parse_mode'=>"markdown",
   'text'=>"🔖*Guruh rasmiy havolasi:*
[$getlinkde]",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🛡Media sozlash",'callback_data'=>"sozlash"],['text'=>"📄Guruh haqida",'callback_data'=>"haqida"]],
[['text'=>"👨🏻‍💻Adminlar",'callback_data'=>"adminlar"],['text'=>"⛓Guruh havolasi",'callback_data'=>"havola"]],
[['text'=>"🤖Avto admin",'callback_data'=>"avto"],['text'=>"🗑Menu yopish",'callback_data'=>"exit"]]
]
])
]);
}
}

if($text1 == "/silent" or $text1 == "silent" or $text1 == "/silent@ADVAKAT_PROBOT"){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
 bot('restrictChatMember',[
   'user_id'=>$id1,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
         ]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$repname <code>$title</code><b> guruhida butun umrga yozishdan mahrum qilindi
👤Foydalanuvchi haqida ma'lumot:</b>
🔸<b>Nomi:</b> $repname
🔹<b>Useri:</b> @$repuser
💥<b>ID:</b> $id1",
'parse_mode'=>"html",
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [['text'=>"$repname", 'url'=>"https://telegram.me/$repuser"]],
[['text'=>"🚀Kanalimiz",'url'=>"https://telegram.me/Jizzaxlikllar"]]
    ]
    ])
]);
}
}

if($text1  == "/unsilent" or $text1 == "unsilent" or $text1  == "/unsilent@ADVAKAT_PROBOT"){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
 bot('restrictChatMember',[
   'user_id'=>$id1,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$repname <code>$title</code><b> jazo olib tashlandi endi guruhda yozishi mumkin.
👤Foydalanuvchi haqida ma'lumot:</b>
🔸<b>Nomi:</b> $repname
🔹<b>Useri:</b> @$repuser
💥<b>ID:</b> $id1",
'parse_mode'=>"html",
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
[['text'=>"$repname", 'url'=>"https://telegram.me/$repuser"]],
[['text'=>"🚀Kanalimiz",'url'=>"https://telegram.me/Jizzaxlikllar"]]
    ]
    ])
]);
}
}

if ($data == "adminlar"){
$up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id2),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['first_name'];
    }
if($found == "administrator"){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$idilar = $result[$key]['user']['id'];
$msg1 = "$msg1"."\n 👨🏻‍💻 <a href='tg://user?id=$idilar'>$innames</a>";
  }
		 }
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=> $message_id2,
'text'=>"🛠<b>Yaratuvchi:</b> <a href='tg://user?id=$owner'>$owner2</a>
👥<b>Guruh adminlari :</b> $msg1",
'parse_mode'=>"html",
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🛡Media sozlash",'callback_data'=>"sozlash"],['text'=>"📄Guruh haqida",'callback_data'=>"haqida"]],
[['text'=>"👨🏻‍💻Adminlar",'callback_data'=>"adminlar"],['text'=>"⛓Guruh havolasi",'callback_data'=>"havola"]],
[['text'=>"🤖Avto admin",'callback_data'=>"avto"],['text'=>"🗑Menu yopish",'callback_data'=>"exit"]]
]
])
 ]);
}

if($text1=="/adminlar" or $text1 == "/adminlar@ADVAKAT_PROBOT"){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['first_name'];
    }
if($found == "administrator"){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$idilar = $result[$key]['user']['id'];
$msg1 = "$msg1"."\n👨🏻‍💻<a href='tg://user?id=$idilar'>$innames</a>";
  }
		 }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💻<b>Guruh yaratuvchisi:</b> <a href='tg://user?id=$owner'>$owner2</a>
👥<b>Guruh adminlari:</b> $msg1",
'parse_mode'=>"html",
'reply_to_message_id'=>$mid,
 ]);
}

if($text1 == '/code' and $chat_id == $admin){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile(__FILE__),
'caption'=>"@ADVAKAT_PROBOT *code*",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$mid,
]);
}

if(isset($update) and $Skirish == "true"){
if($update->message->new_chat_member or $update->message->new_chat_photo or $update->message->new_chat_title or $update->message->left_chat_member or $update->message->pinned_message){
    bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
}
}

if(isset($update) and $Sbots == "false"){
    if (($new_chat_members != NUll)&&($is_bot!=false)) {
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
   $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
  ]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "👷Guruhga faqat adminlar bot qo'shishi mumkin!",
      'parse_mode' => 'html',
  ]);
}
}
}

if(isset($update) and $Slink == "false"){
if ((mb_stripos($text1,"http")!==false) or (mb_stripos($caption,"http")!==false) or (mb_stripos($performer,"http")!==false) or (mb_stripos($text1,"t.me")!==false) or (mb_stripos($text1,"telegram.me")!==false)){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida Link Tashlash mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}


if(isset($update) and $Slih == "false"){
if ((mb_stripos($text1,"Lic")!==false) or (mb_stripos($text1,"lic")!==false) or (mb_stripos($text1,"Lichka")!==false) or (mb_stripos($text1,"lichka")!==false) or (mb_stripos($text1,"lich")!==false)){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida Lich O’tish mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}


if(isset($update) and $Slih == "false"){
if ((mb_stripos($text1,"Lich")!==false) or (mb_stripos($text1,"Licga")!==false) or (mb_stripos($text1,"licga")!==false) or (mb_stripos($text1,"Lickaga")!==false) or (mb_stripos($text1,"lickaga")!==false)){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida Lichkaga O’tish mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}

if(isset($update) and $Sforward == "false"){
if ((isset($forward)!==false) or (isset($forward_ch)!==false)){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida Forward Tashlash mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}

if(isset($update) and $Sselfi == "false"){
if (isset($selfi1)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida Video Selfi Tashlash mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}

if(isset($update) and $Saudio == "false"){
if (isset($audio)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida Musiqa Tashlash mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}

if(isset($update) and $Svoice == "false"){
if (isset($voice)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhisda Ovozli xabar Tashlash mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}

if(isset($update) and $Svideo == "false"){
if (isset($video)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida Video Tashlash mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}

if(isset($update) and $Sstiker == "false"){
if (isset($sticker)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida Stiker Tashlash mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}

if(isset($update) and $Sgif == "false"){
if (isset($gif)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida gif Tashlash mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}

if(isset($update) and $Sarab == "false"){
if(stristr($text1,"ض") or stristr($text1, 'ص') or stristr($text1, 'ث') or stristr($text1, 'ق') or stristr($text1, 'ف') or stristr($text1, 'غ') or stristr($text1, 'ع') or stristr($text1, 'ه') or stristr($text1, 'خ') or stristr($text1, 'ح') or stristr($text1, 'ج') or stristr($text1, 'ش') or stristr($text1, 'س') or stristr($text1, 'ي') or stristr($text1, 'ب') or stristr($text1, 'ل') or stristr($text1, 'ا') or stristr($text1, 'ت') or stristr($text1, 'ن') or stristr($text1, 'م') or stristr($text1, 'ك') or stristr($text1, 'ط') or stristr($text1, 'ذ') or stristr($text1, 'ء') or stristr($text1, 'ؤ') or stristr($text1, 'ر') or stristr($text1, 'ى') or stristr($text1, 'ئ') or stristr($text1, 'ة') or stristr($text1, 'و') or stristr($text1, 'ز') or stristr($text1, 'ظ') or stristr($text1, 'د') or stristr($text1, 'أ') or stristr($text1, 'إ') or stristr($text1, 'آ')){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida Arab Xarf Tashlash mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}

if(isset($update) and $Ssoz == "false"){
    if((stripos($text1,"Skaman")!==false)  or (mb_stripos($text1,"skaman")!==false)  or (mb_stripos($text1,"cumo")!==false) or (mb_stripos($text1,"Cumo")!==false) or (mb_stripos($text1,"Jalab")!==false) or (mb_stripos($text1,"jalab")!==false)  or  (mb_stripos($text1,"Seks")!==false) or  (mb_stripos($text1,"seks")!==false) or (stripos($text1,"🔞")!==false) or (mb_stripos($text1,"🖕")!==false) or (mb_stripos($text1,"🖕🏿")!==false) or (mb_stripos($text1,"👙")!==false) or (stripos($text1,"👅")!==false) or (stripos($text1,"👄")!==false) or (stripos($text1,"💋")!==false)  or  (stripos($text1,"🤰")!==false) or  (stripos($text1,"💑")!==false) or (stripos($text1,"💏")!==false) or (stripos($text1,"🚷")!==false) or (mb_stripos($text1,"Fuck")!==false) or (mb_stripos($text1,"fuck")!==false) or (mb_stripos($text1,"xarom")!==false) or (mb_stripos($text1,"Xarom")!==false) or (mb_stripos($text1,"🖕🏼")!==false) or  (mb_stripos($text1,"🖕🏽")!==false)  or  (mb_stripos($text1,"🖕🏾")!==false) or  (mb_stripos($text1,"Naxxuy")!==false) or (mb_stripos($text1,"naxxuy")!==false) or (mb_stripos($text1,"sikaman")!==false) or (mb_stripos($text1,"Sikaman")!==false) or (mb_stripos($text1,"itvatcha")!==false) or (mb_stripos($text1,"Itvatcha")!==false) or  (stripos($text1,"👗")!==false)  or  (stripos($text1,"💏")!==false) or  (mb_stripos($text1,"San Amsan")!==false) or (mb_stripos($text1,"san amsan")!==false) or (mb_stripos($text1,"omingni")!==false) or (mb_stripos($text1,"pidaraz")!==false) or (mb_stripos($text1,"Pidaraz")!==false)){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida Xaqoratli So’z yozish mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}

if(isset($update) and $Suser == "false"){
if ((mb_stripos($text1,"@")!==false) or (mb_stripos($caption,"@")!==false) or (mb_stripos($performer,"@")!==false)){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida User Tashlash mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}

if(isset($update) and $Sfayl == "false"){
if (isset($doc)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida Fayl Tashlash mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}

if(isset($update) and $Skontakt == "false"){
if (isset($contact)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida kontakt Tashlash mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}

if(isset($update) and $Slocation == "false"){
if (isset($location)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida manzil tashlash Tashlash mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}

if(isset($update) and $Sphoto == "false"){
if(isset($message->photo)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida Rasm Tashlash mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}

if(isset($update) and $Sgame == "false"){
if (isset($game)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
  if($get =="member"){
 $minut = strtotime("+10 minutes");
bot('restrictChatMember', [
    'chat_id' => $chat_id,
    'user_id' => $fadmin,
    'until_date' => $minut,
    'can_send_messages' => false,
    'can_send_media_messages' => false,
    'can_send_other_messages' => false,
    'can_add_web_page_previews' => false
]);
bot('deleteMessage', [
   'chat_id' => $chat_id,
   'message_id' => $mid
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"<b>⚠ <a href='tg://user?id=$fadmin'>$name</a> Siz 10 minut vaqtinchalik yozish cheklandingiz chunki $title Guruhida O’yin o’ynash mumkin emas❗</b>",
'parse_mode'=>"html",
]);
}
}
}



if(isset($chpmesid) and (strtolower($chuser) == strtolower(str_replace("@","",$kanali)))){
unlink("news.dat");
file_put_contents("news.txt",$chpmesid);
$chm = file_get_contents("news.txt");
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$kanali,
'message_id'=>$chm,
]);
}

$soat = date('H:i:s', strtotime('2 hour'));
$bugun = date('d.m.y',strtotime('2 hour'));

$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/vagroup.list");
$userlar = file_get_contents("stat/vauser.list");
$kanallar = file_get_contents("stat/vakanal.list");
mkdir("warn");
mkdir("stat");

$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;

if(mb_stripos($text1,"/setinfo")!== false){
$newdec = str_replace("/setinfo","",$text1);
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
bot('setChatDescription',[
'chat_id'=>$chat_id,
'description'=>$newdec,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✅Guruh sharhi o'zgartirildi hozirgi sharh:
`$newdec`",
'parse_mode'=>'markdown',
]);
}
}

$yangilar = file_get_contents("viki/yangilar.txt");



if(isset($update) and $Ssalom == "true"){
if ($new_chat_members) {
$wel = file_get_contents("viki/$chat_id.wel");
if (isset($wel) and !empty($wel)){
$ism = str_replace("{name}", $ismi, $wel);
$uid = str_replace("{id}", $new_chat_members, $ism);
$chatm = str_replace("{title}", $title, $uid);
$test = "$chatm";
       bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$test,
       'parse_mode'=>'html',
     ]);
}else{
bot ('SendMessage', [
'chat_id'=> $chat_id,
'parse_mode'=>"html",
'text'=>"<b>Salom, </b> <a href='tg://user?id=$new_chat_members'>$ismi</a> <code>$title</code> <b>guruhiga xush kelibsiz</b>",
]);
    }
}
    }

if(isset($text1)){
  if($cty == "group" or $cty == "supergroup"){
    if(stripos($guruhlar,"$chat_id")!==false){
    }else{
 file_put_contents("stat/vagroup.list","$guruhlar\n$chat_id");
    }
  }else{
   $userlar = file_get_contents("stat/vauser.list");
   if(stripos($userlar,"$chat_id")!==false){
    }else{
 file_put_contents("stat/vauser.list","$userlar\n$chat_id");
   }
  }
}

if ($text1 == "/start" or $text1 == "/start@ADVAKAT_PROBOT" or $text1 == "/sozlama" or $text1 == "/sozlama@ADVAKAT_PROBOT"){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
if($get == "member"){
bot ('deleteMessage', [
'chat_id'=> $chat_id, 
'message_id'=> $mid,
]);
}
}

if ($text1 == "/start" or $text1 == "/start@ADVAKAT_PROBOT" and $cty =="private"){
$chm = file_get_contents("news.txt");
bot('forwardMessage', [
'chat_id'=>$chat_id,
'from_chat_id'=>$kanali,
'message_id'=>$chm,
]);
bot  ('SendMessage', [
'chat_id'=> $chat_id,
'parse_mode'=>"html",
	'text'=>"👋<b>Salom,</b> $name botdan to'liq foydalanish uchun <b>ro'yxatdan o'tishingiz</b> kerak.

📆<b>Jinsingizni tasdiqlang:</b>",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' => [
[['text'=>"👨🏻‍💼Erkak",'callback_data'=>"jins_Erkak"],['text'=>"👩🏻‍💼Ayol",'callback_data'=>"jins_Ayol"]]
]
]),
]);
}

mkdir("viki");

if (mb_stripos($data,"jins")!==false){
$ex = explode("_", $data);
file_put_contents("viki/$chat_id.jins","$ex[1]");
bot ('EditMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'parse_mode'=>"html",
'text'=>"📆<b>Yoshingizni kiriting:</b>",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' => [
[['text'=>"10-13",'callback_data'=>"viloyat_10-13"],['text'=>"14-18",'callback_data'=>"viloyat_14-18"]],
[['text'=>"19-23",'callback_data'=>"viloyat_19-23"],['text'=>"24-28",'callback_data'=>"viloyat_24-28"]],[['text'=>"29-33",'callback_data'=>"viloyat_29-33"],['text'=>"34-38",'callback_data'=>"viloyat_34-38"]],[['text'=>"39-43",'callback_data'=>"viloyat_39-43"],['text'=>"44-47",'callback_data'=>"viloyat_44-47"]],[['text'=>"50+",'callback_data'=>"viloyat_50+"]]
]
]),
]);
}

if (mb_stripos($data,"viloyat")!==false){
$ex = explode("_", $data);
file_put_contents("viki/$chat_id.viloyat","$ex[1]");
bot ('EditMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'parse_mode'=>"html",
'text'=>"🗺<b>Iktimos Viloyatingizni kiriting:</b>",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' => [
[['text'=>"🏠Andijon",'callback_data'=>"yosh_Andijon"],['text'=>"🏠Namangan",'callback_data'=>"yosh_Namangan"],
['text'=>"🏠Toshkent",'callback_data'=>"yosh_Toshkent"]],[['text'=>"🏠Farg‘ona",'callback_data'=>"yosh_Farg‘ona"],['text'=>"🏠Samarqand",'callback_data'=>"yosh_Samarqand"],['text'=>"🏠Urganch",'callback_data'=>"yosh_Urganch"]],
[['text'=>"🏠Buxoro",'callback_data'=>"yosh_Buxoro"],['text'=>"🏠Guliston",'callback_data'=>"yosh_Guliston"],['text'=>"🏠Zarafshon",'callback_data'=>"yosh_Zarafshon"]],[['text'=>"🏠Navoiy",'callback_data'=>"yosh_Navoiy"],['text'=>"🏠Nukus",'callback_data'=>"yosh_Nukus"],['text'=>"🏠Jizzax",'callback_data'=>"yosh_Jizzax"]],
[['text'=>"🏠Qarshi",'callback_data'=>"yosh_Qarshi"],['text'=>"🏠Termiz",'callback_data'=>"yosh_Termiz"],['text'=>"🏠Xiva",'callback_data'=>"yosh_Xiva"]]
]
]),
]);
}

if (mb_stripos($data,"yosh")!==false){
$ex = explode("_", $data);
file_put_contents("viki/$chat_id.yosh","$ex[1]");
$jins = file_get_contents("viki/$chat_id.jins");
$viloyat = file_get_contents("viki/$chat_id.viloyat");
$yosh = file_get_contents("viki/$chat_id.yosh");
  if($lname2 == null){
  $lname2 = "▶️Mavjud emas";
  }
$user = "@$username2";
  if($user == null){
  $user = "▶️Mavjud emas";
  }
bot('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"🤖Assalomu alaykum <b>$name2</b>  siz bosh sahifadasiz.

Bizni botimiz kanalingiz va guruhingizni boshqarishga yordam beradi.

Botni guruhingizga qo'shib to'liq admin qilib keyin /sozlama sozini guruhingizga yuborib guruhingizni sozlab olishingiz mumkin.

 O‘zingizga kerakli Menyuni tanlang.",
'parse_mode'=>"html",
'inline_message_id'=>$imid,
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"Bot 👮🏻‍♂️ Buyruqlari",'callback_data'=>"bolim"]],
[['text'=>"⚡Qiziqarli Bolim",'callback_data'=>"qiziq"],['text'=>"📊Statistika",'callback_data'=>"stat1"]],[['text'=>"➕️Izoh Bo‘lim",'callback_data'=>"coments"],['text'=>"⚙️Bog‘lanish",'callback_data'=>"boglanish"]],[['text'=>"📈Reklama Xizmati",'callback_data'=>"rek"],['text'=>"🤖Bot Yasash",'callback_data'=>"botlar"]],[['text'=>"🔄Restart🔄",'callback_data'=>"restart"]],[['text'=>"👷Kanalimiz",'url'=>"https://t.me/Jizzaxlikllar"],['text'=>"🎓Admin",'callback_data'=>"admin2"]],
[['text'=>"🚀Guruhga qo'shish➕",'url'=>"telegram.me/ADVAKAT_PROBOT?startgroup=new"]]
]
]),
]);
bot('SendMessage', [
'chat_id'=>"-1001278547913",
'text'=>"📆<b>Yoshi:</b> $viloyat 
👫<b>Jinsi:</b> $jins
🗺<b>Viloyat:</b> $yosh
📚<b>Ismi:</b>  <a href='tg://user?id=$chat_id2'>$name2</a>
📒<b>Familiyasi:</b> $lname2
🏷<b>Username:</b> @$username2
🆔️<b>ID:</b> $chat_id2",
'parse_mode'=>"html",
]);
}

if($data=="exit" ){
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
 ]);
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"ðŸ—‘Menu yopildi",
]);
}

if ($data == "back"){
bot ('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>" 🤖Assalomu alaykum <b>$name2</b>  siz bosh sahifadasiz.

Bizni botimiz kanalingiz va guruhingizni boshqarishga yordam beradi.

Botni guruhingizga qo'shib to'liq admin qilib keyin /sozlama sozini guruhingizga yuborib guruhingizni sozlab olishingiz mumkin.

 O‘zingizga kerakli Menyuni tanlang.",
'parse_mode'=>"html",
'inline_message_id'=>$imid,
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"Bot 👮🏻‍♂️ Buyruqlari",'callback_data'=>"bolim"]],
[['text'=>"⚡Qiziqarli Bolim",'callback_data'=>"qiziq"],['text'=>"📊statistika",'callback_data'=>"stat1"]],[['text'=>"➕️Izoh Bo‘lim",'callback_data'=>"coments"],['text'=>"⚙️Bog‘lanish",'callback_data'=>"boglanish"]],[['text'=>"📈Reklama Xizmati",'callback_data'=>"rek"],['text'=>"🤖Bot Yasash",'callback_data'=>"botlar"]],[['text'=>"🔄Restart🔄",'callback_data'=>"restart"]],[['text'=>"👷Kanalimiz",'url'=>"https://t.me/Jizzaxlikllar"],['text'=>"🎓Admin",'callback_data'=>"admin2"]],
[['text'=>"🚀Guruhga qo'shish➕",'url'=>"telegram.me/ADVAKAT_PROBOT?startgroup=new"]]
]
]),
]);
}

if ($data == "buyruq"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"[👮🏻‍♂️ADVAKAT_PROBOT](https://t.me/$botim) *ning Guruh Buyruqlari!*

1) `/ro` - *Reply qilingan foydalanuvchini ovozsiz rejimiga tushirish*
➖➖➖➖➖➖➖➖➖➖➖
2) `/unro` - *Reply qilingan foydalanuvcgini ovozsiz rejimdan olish*
➖➖➖➖➖➖➖➖➖➖➖
3) `/kick` - *Guruh a'zosini guruhdan chiqarib yuborish*
➖➖➖➖➖➖➖➖➖➖➖
4) `/ban` - *Foydalanuvchini guruhdan chiqarib yuborish bu bilan u guruhga qaytib kirolmaydi*
➖➖➖➖➖➖➖➖➖➖➖
5) `/unban` - *Guruh a'zosini bandan olish*
➖➖➖➖➖➖➖➖➖➖➖
6) `/warn` - *Foydalanuvchiga jazo berish*
➖➖➖➖➖➖➖➖➖➖➖
7) `/nowarn` - *Barcha jazolarni olib tashlash*
➖➖➖➖➖➖➖➖➖➖➖
8) `/mywarn` - *Jazolar sonini bilish*
➖➖➖➖➖➖➖➖➖➖➖
9) `/text` - *Xabaringizni tahrirlab beraman*
➖➖➖➖➖➖➖➖➖➖➖
10) `/admins` - *Foydalanuvchini guruhda admin qilaman*
➖➖➖➖➖➖➖➖➖➖➖
11) `/setinfo va so'z` - *Guruh sharhini o'zgartiraman*
➖➖➖➖➖➖➖➖➖➖➖
12) `/adminlar` - *Guruhdagi adminlar ro'yxati*
➖➖➖➖➖➖➖➖➖➖➖
13) `/silent` - *Guruhda yozishdan bir umrga maxrum qilish*
➖➖➖➖➖➖➖➖➖➖➖
14) `/unsilent` - *Bir umrga yozishdan maxrum qilingan jazoni olib tashlash*
➖➖➖➖➖➖➖➖➖➖➖
15) `/sozlama` - *Botni turli tugmalar yordamida boshqarish va guruhga sozlash faqat adminda ishlaydi*
➖➖➖➖➖➖➖➖➖➖➖
16) `/welcome va matn` - *Guruhga yangi kirganlar bilan salomlashish matnini o'rnatish*

*Salomlashish uchun kalit so'zlar:* 
`{name}` - Yangi a'zo ismi bilan salomlashadi
`{id}` - Yangi a'zo id raqamini oladi
`{title}` - Guruh nomini oladi

*Namuna:* `Salom, {name} bo'tam qalesan`
➖➖➖➖➖➖➖➖➖➖➖
17) `/leave` - *Botni guruhdan chiqarib yuborish faqat adminda ishlaydi*
➖➖➖➖➖➖➖➖➖➖➖
18) `/delphoto` - *Guruh rasmini olib tashlash*
➖➖➖➖➖➖➖➖➖➖➖
19) `/msg` - *Guruhda yozilgan barcha xabarlar sonini bilish*
➖➖➖➖➖➖➖➖➖➖➖
20) `/myrep` - *Guruhdagi sizning Obroʻ ingiz*
➖➖➖➖➖➖➖➖➖➖➖
21) `/yourep` - *Reply qilingan odamni guruhdagi Obroʻ si*
➖➖➖➖➖➖➖➖➖➖➖
22) `/toprep` - *Guruhda top 20ta Obroʻ ga ega foydalanuvchilar*
➖➖➖➖➖➖➖➖➖➖➖
23) `/mymembers` - *Siz qo'shgan odamlar sonini aytadi*
➖➖➖➖➖➖➖➖➖➖➖
24) `/mymembers` - *Reply qilingan odam qo'shgan odamlari sonini aytadi*
➖➖➖➖➖➖➖➖➖➖➖
25) `/top` - *Eng ko'p odam qo'shgan foydalanuvchilar reytingini chiqaradi*
➖➖➖➖➖➖➖➖➖➖➖
26) `/setchannel` - *Guruhga kanalni bog'laydi, ya'ni bog'langan kanalga a'zo bo'lmaguncha guruh a'zolari yozolmaydigan bo'ladi*
➖➖➖➖➖➖➖➖➖➖➖
27) `/delchannel` - *Guruhga ulangan kanalni uzadi*
➖➖➖➖➖➖➖➖➖➖➖
28) `/channel` - *Guruhga sozlangan kanalni ko'rish*
➖➖➖➖➖➖➖➖➖➖➖
29) `/yodla` - *Botga so'z yodlatish*
➖➖➖➖➖➖➖➖➖➖➖
30) `/baza` - *Guruhda Botga yodlatgan so‘zingizni Tashlab beradi*
➖➖➖➖➖➖➖➖➖➖➖
31) `/delyodla` - *Yodlagan So‘zlarni O‘chirish*
➖➖➖➖➖➖➖➖➖➖➖
*Qo'llab-quvvatlash markazi:* [@JAMSHID3164]",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"🔙Orqaga",'callback_data'=>"bolim"]]
]
]),
]);
}

if ($data == "bolim"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"*🚦𝖮'𝗓𝗂𝗇𝗀𝗂𝗓𝗀𝖺 𝗄𝖾𝗋𝖺𝗄𝗅𝗂 𝖻𝗈'𝗅𝗂𝗆𝗇𝗂 𝗍𝖺𝗇𝗅𝖺𝗇𝗀*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"👮🏻‍♂️𝖦𝗎𝗋𝗎𝗁",'callback_data'=>"buyruq"],['text'=>"📡Kanal",'callback_data'=>"kanal"]],[['text'=>"📲Universal Bo‘lim",'callback_data'=>"dost"]],[['text'=>"🔙𝖮𝗋𝗊𝖺𝗀𝖺 𝗊𝖺𝗒𝗍𝗂𝗌𝗁",'callback_data'=>"back"]]
]
]),
]);
}

//boglanish 
if($data=="boglanish"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
]);
bot('sendMessage',[
'chat_id'=>$chat_id2,
'text'=>"♏Admin Uchun Xabaringizni Yozing!",
'reply_markup'=>$rpl, 
]);
}
if($reply=="♏Admin Uchun Xabaringizni Yozing!"){ 
bot('Sendmessage',[
      'chat_id'=>$admin,
      'text'=>"🎗️Admin Aka Xabar keldi!
      
👤Yuboruvchi: <a href='tg://user?id=$id'>$name</a>

♏UserName: <a>@$username2</a>

🆔️Raqami: <code>$chat_id2</code>
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
💭Xabar: <b>$text</b>",
'parse_mode'=>"html",
]);
  bot('sendMessage',[
'chat_id'=>$chat_id2,
    'text'=>"<b>📬Xabaringiz Adminga Yuborildi!
👨‍💻Admin 24soat ichida o'qib chiqadi!</b>!",
    'parse_mode'=>'html',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"🔙Orqaga",'callback_data'=>"back"]]
]
]),
]);
}

$yangilash = json_decode(file_get_contents('php://input'));
$uzkmm = $yangilash->message;
$data = $yangilash->callback_query->data;
$mmid = $yangilash->callback_query->message->message_id;
$ccid = $yangilash->callback_query->message->chat->id;

//RESTART
if($data=="restart"){
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>"
 <b> 🕓Ma'lumotlar Yangilanmoqda </b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(0.2);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'⬜️'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'⬛️'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'🟪'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'🟦'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'🟩'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'🟨'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'🟧'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'🟫'
 ]); 
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'🟥'
]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'✔️'
 ]);
 sleep(0.3);
bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>'✅'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.4);
    bot('editMessageText',[
'message_id'=>$mmid,
'chat_id'=>$ccid,
'text'=>"🚀Barcha Ma'lumotlar Yangilandi!",
       'parse_mode'=>'html',  
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"🔙Orqaga",'callback_data'=>"back"]]
]
]),
]);
}

if ($data == "rek"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"*📈Reklama bo'limiga xush kelibsiz✔︎

1kunlik reklama ➪ 30rubl💸
3kunlik reklama ➪ 80rubl💸
7kunlik reklama ➪ 170rubl💸

1Kunda 3 vaqt reklama tashlanadi༒︎

📊Admin: @JAMSHID3164 ga yozilar*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"🔙Orqaga",'callback_data'=>"back"]]
]
]),
]);
}

$php_codes = json_decode(file_get_contents('php://input'));
$n1_bezori = $php_codes->message;
$n1_bezori_text = $n1_bezori->text;
$n1_bezori_chat_id = $n1_bezori->chat->id;
$n1_bezori_user = $n1_bezori->from->username;


$coments = file_get_contents("coment/1.txt");
$comn = substr_count($coments,"\n");

$com = "$comn" + "1";



$prosmotr = file_get_contents("coment/2.txt");
$prm = substr_count($prosmotr,"\n");



if($data =="coments"){ 
 bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=> "👀Bolimga kirganlar soni: $prm
✏️Izohlar soni: $comn
--------------------------
$coments",
'parse_mode' => 'html',
  'reply_markup'=>json_encode([
   'inline_keyboard'=>[
[['text'=>'➕Izoh qoshish','callback_data'=>"coments+"],['text'=>'♻️Yangilash','callback_data'=>"coments"]],     
[['text'=>'🔙Orqaga','callback_data'=>"back"]],
]
]),
]);
file_put_contents("coment/2.txt","$prosmotr\n$n1_bezori_user"); 
}
$n1_bezori_reply = $message->reply_to_message->text;
$n1_bezori_rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);
if($data=="coments+"){ 
 bot('SendMessage',[
   'chat_id'=>$chat_id2,
'text'=>"Izoh yozing...",
  'reply_markup'=>$rpl
]);
}


if($reply=="Izoh yozing..."){
file_put_contents("coment/1.txt","$coments\n$n1_bezori_text-[@$n1_bezori_user]");
  bot("sendmessage",[
    'chat_id'=>$n1_bezori_chat_id,
    'text'=>"Izohingiz muafaqiyatli qoshildi ✅
 ✏️Izoh Bolimiga oting !",
'reply_markup'=>json_encode([
   'inline_keyboard'=>[
   [['text'=>'✏️Izohlar Bolimi','callback_data' => "coments"]],
]
]),
]);
}
       
$sayt =file_get_contents("https://namaz.today/city/Tashkent");
$namoz =explode('<span class="text-center rb">', $sayt);
$namoz1 =explode('</span>',$namoz[1]);
echo "🕋Tong ".$namoz1[0]."<br>";
$namoz00="🕋Tong ".$namoz1[0];
$namoz =explode('<span class="text-center rb">', $sayt);
$namoz1 =explode('</span>',$namoz[2]);
echo "🕋Quyosh ".$namoz1[0]."<br>";
$namoz11="🕋Quyosh ".$namoz1[0];
$namoz =explode('<span class="text-center rb">', $sayt);
$namoz1 =explode('</span>',$namoz[3]);
echo "🕋Peshin ".$namoz1[0]."<br>";
$namoz22="🕋Peshin ".$namoz1[0];
$namoz =explode('<span class="text-center rb">', $sayt);
$namoz1 =explode('</span>',$namoz[4]);
echo "🕋Asr ".$namoz1[0]."<br>";
$namoz33="🕋Asr ".$namoz1[0];
$namoz =explode('<span class="text-center rb">', $sayt);
$namoz1 =explode('</span>',$namoz[5]);
echo "🕋Shom ".$namoz1[0]."<br>";
$namoz44="🕋Shom ".$namoz1[0];
$namoz =explode('<span class="text-center rb">', $sayt);
$namoz1 =explode('</span>',$namoz[6]);
echo "🕋Xufton ".$namoz1[0]."<br>";
$namoz55="🕋Xufton ".$namoz1[0];
$namozvaqti1 =$namoz00."\n".$namoz11."\n".$namoz22."\n".$namoz33."\n".$namoz44."\n".$namoz55."\n";

if ($data == "vaqt"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"*🌙Namoz Vaqtlari:
$namozvaqti1
ESLATMA: BU TOSHKENT NAMOZ VAQTLARI!*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"🔙Orqaga",'callback_data'=>"qiziq"]]
]
]),
]);
}


if($data=="fon"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
        'text'=>"🌐Telegram fonlar uzingizga yoqqanini tanlang.",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
 [['text'=>'🏖 FON','url'=>'https://t.me/bg/sp-xMi7A-VEBAAAABRn6rGsUKFs'],['text'=>'🏝FON','url'=>'https://t.me/bg/CiwwsoTP-VEBAAAAmDYEizr71BQ'], 
   ['text'=>'🏰 FON','url'=>'https://t.me/bg/MzLRSHubAVIBAAAAqKgYQTObnhw']],[['text'=>'🏠FON','url'=>'https://t.me/bg/Br6nNA9WAVIBAAAAe6AHvL7eOMM'], 
     ['text'=>'🏤FON','url'=>'https://t.me/bg/MiE64ER4AFIBAAAAHQZRZyDCfu0'],['text'=>'🏩 FON','url'=>'https://t.me/bg/CiwwsoTP-VEBAAAAmDYEizr71BQ']],
      [['text'=>'🏝 FON','url'=>'https://t.me/bg/7wznfgBk-VEBAAAAncxYg0vokZY'],['text'=>'🗽 FON','url'=>'https://t.me/bg/EhCMFgys-FEBAAAA04qJyrs1G6M'], 
         ['text'=>'⛲ FON','url'=>'https://t.me/bg/7wznfgBk-VEBAAAAncxYg0vokZY']],[['text'=>'🏭 FON','url'=>'https://t.me/bg/7wznfgBk-VEBAAAAncxYg0vokZY'], 
         ['text'=>'⛲FON','url'=>'https://t.me/bg/FJIYygt_iVIBAAAA8tzV8Ju0QvM'],['text'=>'⛪FON','url'=>'https://t.me/bg/Qe9IiLLfiVIBAAAAn_BDUKSYaCs']],
       [['text'=>' 🔙Orqaga qaytish','callback_data'=>'qiziq']]
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
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "😃 Yangi Yilga:
<b>
$b KUN📆
$b2 SOAT⏰
$b3 MINUT⏲
$b4 SEKUND⏱
</b>
Qoldi🎊

😊Kelayotgan Yangi Yilingiz Bilan❕",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Orqaga','callback_data'=>'qiziq']],
]
]),
]);
}

if ($data == "havo"){
bot ('EditMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
   'text'=> "Bugungi *Ob-Havo* ma’lumoti bilan tanishish uchun quyidagi menulardan birini tanlang👇:",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
 [['text'=>"⛅ Andijon🌸",'url'=>"https://obhavo.uz/andijan"],
 ['text'=>"⛅ Namangan🌸",'url'=>"https://obhavo.uz/namangan"]],
 [['text'=>"⛅ Toshkent🌸",'url'=>"https://obhavo.uz/tashkent"],
 ['text'=>"⛅ Farg'ona🌸",'url'=>"https://obhavo.uz/ferghana"]],
 [['text'=>"⛅ Samarqand🌸",'url'=>"https://obhavo.uz/samarkand"],
 ['text'=>"⛅ Urganch🌸",'url'=>"https://obhavo.uz/urgench"]],
 [['text'=>"⛅ Buxoro🌸",'url'=>"https://obhavo.uz/bukhara"],
 ['text'=>"⛅ Guliston🌸",'url'=>"https://obhavo.uz/gulistan"]],
 [['text'=>"⛅ Zarafshon🌸",'url'=>"https://obhavo.uz/zarafshan"],
 ['text'=>"⛅ Navoiy🌸",'url'=>"https://obhavo.uz/navoi"]],
 [['text'=>"⛅ Nukus🌸",'url'=>"https://obhavo.uz/nukus"],
 ['text'=>"⛅ Jizzax🌸",'url'=>"https://obhavo.uz/jizzakh"]],  
[['text'=>"⛅ Qarshi🌸",'url'=>"https://obhavo.uz/karshi"],
['text'=>"⛅ Termiz 🌸",'url'=>"https://obhavo.uz/termez"]],
[['text'=>"⛅Xiva🌸",'url'=>"https://obhavo.uz/khiva"],
['text'=>"🔙Orqaga",'callback_data'=>"qiziq"]]
]
]),
]);
}

if($text1 == "Lg"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$guruhlar,
    ]);
}


if($text1 == "Lu"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$userlar,
    ]);
}

if($data=="stat1"){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
 $soat = date('H:i', strtotime('2 hour'));
$bugun = date('d-M Y',strtotime('0 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "[𝖫𝖤𝖳𝖨𝖭𝖠𝖭𝖳-𝖡𝖮𝖳](t.me/ADVAKAT_PROBOT) STATISTIKASI.📊

┌➪ A'ZOLAR: $us
├➪ GURUHLAR: $gr
└➪ BARCHASI: $obsh

📆𝖲𝖺𝗇𝖺 : $bugun
⏱️𝖵𝖺𝗊𝗍 : $soat",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'🔄YANGILASH','callback_data' => "stat2"],['text'=>'➕GURUH QOSHISH','url'=>'telegram.me/ADVAKAT_PROBOT?startgroup=new']],
[['text'=>'🔙Orqaga qaytish','callback_data' => "back"]],
]
]),
]);
}
if($data=="stat2"){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
 $soat = date('H:i', strtotime('2 hour'));
$bugun = date('d-M Y',strtotime('0 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "[ADVAKAT_PROBOT](t.me/ADVAKAT_PROBOT) STATISTIKASI.📊

┌ ➪ A'ZOLAR: $us
├➪ GURUHLAR: $gr
└➪ BARCHASI: $obsh

📆𝖲𝖺𝗇𝖺 : $bugun
⏱️𝖵𝖺𝗊𝗍 : $soat",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'🔄YANGILASH','callback_data' => "stat1"],['text'=>'➕GURUH QOSHISH','url'=>'telegram.me/ADVAKAT_PROBOT?startgroup=new']],
[['text'=>'🔙Orqaga qaytish','callback_data' => "back"]],
]
]),
]);
}

if ($data == "Lotin_kiril"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"*Assalomu alakum siz 🔄Lotin/Kirel Bo'limidasi bu bo'lim orqali Lotin so'zini Kirel va Kirel So'zini Lotin qilib olishingiz mumkin*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"Lotin➡️Kirel",'callback_data'=>"kiril"],['text'=>"Kirel➡️Lotin",'callback_data'=>"lotin"]],[['text'=>"🔙Orqaga",'callback_data'=>"qiziq"]]
]
]),
]);
} 

if($data =="kiril"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"✅ Matnni kiriting.",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="✅ Matnni kiriting."){
if($text){
 	$iNet_Hack = $text;
$iNet_Hack = str_replace('q', ' к', $iNet_Hack);
   $iNet_Hack = str_replace('e', 'э', $iNet_Hack);
   $iNet_Hack = str_replace('r', 'р', $iNet_Hack);
   $iNet_Hack = str_replace('t', 'т', $iNet_Hack);
   $iNet_Hack = str_replace('y', 'ю', $iNet_Hack);
   $iNet_Hack = str_replace('u', 'у', $iNet_Hack);
   $iNet_Hack = str_replace('i', 'и', $iNet_Hack);
   $iNet_Hack = str_replace('o', 'о', $iNet_Hack);
   $iNet_Hack = str_replace('p', 'п', $iNet_Hack);
   $iNet_Hack = str_replace('a', 'а', $iNet_Hack);
   $iNet_Hack = str_replace('s', 'с', $iNet_Hack);
   $iNet_Hack = str_replace('d', 'д', $iNet_Hack);
   $iNet_Hack = str_replace('f', 'ф', $iNet_Hack);
   $iNet_Hack = str_replace('g', 'г', $iNet_Hack);
   $iNet_Hack = str_replace('ch', 'ч', $iNet_Hack);
   $iNet_Hack = str_replace('j', 'ж', $iNet_Hack);
   $iNet_Hack = str_replace('k', 'к', $iNet_Hack);
   $iNet_Hack = str_replace('l', 'л', $iNet_Hack);
   $iNet_Hack = str_replace('z', 'з', $iNet_Hack);
   $iNet_Hack = str_replace('x', 'х', $iNet_Hack);
   $iNet_Hack = str_replace('v', 'в', $iNet_Hack);
   $iNet_Hack = str_replace('b', 'б', $iNet_Hack);
   $iNet_Hack = str_replace('n', 'н', $iNet_Hack);
 $iNet_Hack = str_replace('sh', 'ш', $iNet_Hack);
  $iNet_Hack = str_replace('m', 'м', $iNet_Hack);
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"<b>●●○○○○○○○○20%</b>",
 'parse_mode'=>"html"
 ]);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○40%'
 ]);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60'
 ]);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○80%'
 ]);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(1);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Buyurtmangiz muvaffaqiyatli bajarildi.
Ustini bosib nusxalab olishingiz mumkin.

Buyurtma➡️: `$iNet_Hack`
",
'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🔙Ortga qaytish",'callback_data'=>"Lotin_kiril"]]
    ]
    ]),
 ]);
 }
}

if($data =="lotin"){
 bot('sendmessage',[
 'chat_id'=>$cid2,
 'message_id'=>$mid2,
 'text'=>"✅ Matnni kiriting.",
 'reply_markup'=>$rpl,
 ]);
 }
if($reply=="✅  Matnni kiriting."){
if($text){
 	$iNet_Hack = $text;
$iNet_Hack = str_replace('к', ' q', $iNet_Hack);
   $iNet_Hack = str_replace('э', 'e', $iNet_Hack);
   $iNet_Hack = str_replace('р', 'r', $iNet_Hack);
   $iNet_Hack = str_replace('т', 't', $iNet_Hack);
   $iNet_Hack = str_replace('ю', 'y', $iNet_Hack);
   $iNet_Hack = str_replace('у', 'u', $iNet_Hack);
   $iNet_Hack = str_replace('и', 'i', $iNet_Hack);
   $iNet_Hack = str_replace('о', 'o', $iNet_Hack);
   $iNet_Hack = str_replace('п', 'p', $iNet_Hack);
   $iNet_Hack = str_replace('а', 'a', $iNet_Hack);
   $iNet_Hack = str_replace('с', 's', $iNet_Hack);
   $iNet_Hack = str_replace('д', 'd', $iNet_Hack);
   $iNet_Hack = str_replace('ф', 'f', $iNet_Hack);
   $iNet_Hack = str_replace('г', 'g', $iNet_Hack);
   $iNet_Hack = str_replace('ч', 'ch', $iNet_Hack);
   $iNet_Hack = str_replace('ж', 'j', $iNet_Hack);
   $iNet_Hack = str_replace('к', 'k', $iNet_Hack);
   $iNet_Hack = str_replace('л', 'l', $iNet_Hack);
   $iNet_Hack = str_replace('з', 'z', $iNet_Hack);
   $iNet_Hack = str_replace('х', 'х', $iNet_Hack);
   $iNet_Hack = str_replace('в', 'v', $iNet_Hack);
   $iNet_Hack = str_replace('б', 'b', $iNet_Hack);
   $iNet_Hack = str_replace('н', 'n', $iNet_Hack);
 $iNet_Hack = str_replace('ш', 'sh', $iNet_Hack);
  $iNet_Hack = str_replace('м', 'm', $iNet_Hack);
bot('sendMessage',[
 'chat_id'=>$cid,
 'text'=>"<b>●●○○○○○○○○20%</b>",
 'parse_mode'=>"html"
 ]);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●○○○○○○40%'
 ]);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●○○○○60'
 ]);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●○○80%'
 ]);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'●●●●●●●●●●100%'
 ]);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(1);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Buyurtmangiz muvaffaqiyatli bajarildi.
Ustini bosib nusxalab olishingiz mumkin.

Buyurtma➡️: `$iNet_Hack`
",
'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🔙Ortga qaytish",'callback_data'=>"Lotin_kiril"]]
    ]
    ]),
 ]);
 }
}

if($data=="botez"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> $start_time = round(microtime(true) * 1000),
      $send=  bot('sendmessage', [
                'chat_id' => $chat_id2,
                'text' =>"🤖Bot Ulangan Hosting Sayt xvest.ru
Tezligi:",
            ])->result->message_id,
        
                    $end_time = round(microtime(true) * 1000),
                    $time_taken = $end_time - $start_time,
                    bot('editMessagetext',[
                        "chat_id" => $chat_id2,
                        "message_id" => $send,
                        "text" => "🤖Bot Ulangan Hosting Sayt xvest.ru
Tezligi:" . $time_taken .  "Ms",
                    ]),
]);
}

if($data=="qiziq"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "⏳ Qiziqarli Bo'lim orqali bemalol o'zingizga kerakli narsalarni bilib olishingiz mumkin⚡",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🌦️Ob havo', 'callback_data'=>"havo"],['text'=>'🚩Tillar','callback_data'=>"Til"]], 
[['text'=>'🕋Nomoz Vaqtlari','callback_data'=>"vaqt"],['text'=>'🗼Fon HD','callback_data'=>"fon"]],
[['text'=>'🎄Yangi Yil', 'callback_data'=>"newyear"],['text'=>'🗞Yangilik','callback_data'=>"yangilik"]],
[['text'=>'😷Covid-19','callback_data'=>"covid"],['text'=>'🕹️Messenger','callback_data'=>"messenge"]],[['text'=>'🔄Lotin/Kiril','callback_data'=>'Lotin_kiril'],['text'=>'🔱NIKLAR','callback_data'=>'nick']],[['text'=>'⏱️Dunyo Soatlari','callback_data'=>'soatlar'],['text'=>'🚀Bot Tezligi','callback_data'=>'botez']],[['text'=>'🔥Logotip','callback_data'=>'Yangilogo'],['text'=>'😍Sherlar','callback_data'=>'sevgi']],[['text'=>'📖Quron Karim','callback_data'=>'quroni_karim'],['text'=>'🤲Ro‘za Duosi','callback_data'=>'roza']],[['text'=>'📲Telegram tema','callback_data'=>'tema'],['text'=>'🅰️Harflar Bo‘limi','callback_data'=>'Harflar_bolim']],[['text'=>'🔄Teskari so‘z','callback_data'=>'musiqa'],['text'=>'🔙Orqaga','callback_data'=>'back']]
]
]),
]);
}


if($data=="Harflar_bolim"){
   $bugun = date('d-M Y',strtotime('0 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "
✏️Yaratuvchi: [@$botim]",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'😍A', 'callback_data'=>"A"],['text'=>'🥀B', 'callback_data'=>"B"],['text'=>'🌺D', 'callback_data'=>"D"],['text'=>'🌹E', 'callback_data'=>"E"]],[['text'=>'🏵F', 'callback_data'=>"F"],['text'=>'🌿G', 'callback_data'=>"G"],['text'=>'🦄I', 'callback_data'=>"I"],['text'=>'😘J', 'callback_data'=>"J"]],[['text'=>'🤓K', 'callback_data'=>"K"],['text'=>'🐱L', 'callback_data'=>"L"],['text'=>'🐇M', 'callback_data'=>"M"],['text'=>'🦈N', 'callback_data'=>"N"]],[['text'=>'🦋O', 'callback_data'=>"O"],['text'=>'🌴P', 'callback_data'=>"P"],['text'=>'🍁Q', 'callback_data'=>"Q"],['text'=>'🌷R', 'callback_data'=>"R"]],[['text'=>'🌼S', 'callback_data'=>"S"],['text'=>'☘️T🔉', 'callback_data'=>"T"],['text'=>'🐝U', 'callback_data'=>"U"],['text'=>'😍V', 'callback_data'=>"V"]],[['text'=>'🥀X', 'callback_data'=>"X"],['text'=>'🌸Sh', 'callback_data'=>"SH"],['text'=>'💐Y', 'callback_data'=>"Y"],['text'=>'🍂Z🔉', 'callback_data'=>"Z"]],[['text'=>'☘️Ch🔉', 'callback_data'=>"CH"],['text'=>'🔙Orqaga Qaytish', 'callback_data'=>"qiziq"]]
]
]),
]);
}

if($data=="quroni_karim"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "✅Kerakli tugmalaradan foydalaning✅",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'☪Qur‘oni karim haqida🤲','callback_data'=>'quroni_karim_haqida']],[['text'=>'☪Qur‘oni karim tarixi📝','callback_data'=>'quroni_karim_tarixi']],[['text'=>'🎙30 pora audio formatda🎶','callback_data'=>'pora']],[['text'=>'🔙Orqaga','callback_data'=>'qiziq']]
]
]),
]);
}

if($data=="quroni_karim_haqida"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Qurʼon (arabcha: القرآن oʻqimoq, qiroat qilmoq) — musulmonlarning asosiy muqaddas kitobi. Islom eʼtiqodiga koʻra, Qurʼon vahiy orqali Muhammad paygʻambarga 610—632 yillar davomida nozil qilingan Allohning kalomi (Kalomulloh). Qurʼon „Kitob“ (yozuv), „Furqon“ (haq bilan botilning orasini ayiruvchi), „Zikr“ (eslatma), „Tanzil“ (nozil qilingan) kabi nomlar bilan atalib, „Nur“ (yorugʻlik), „Hudo“ (hidoyat), „Muborak“ (barakotli), „Mubin“ (ochiq-ravshan), „Bushro“ (xushxabar), „Aziz“ (eʼzozlanuvchi), „Majid“ (ulugʻ), „Bashir“ (bashorat beruvchi), „Nazir“ (ogohlantiruvchi) kabi soʻzlar bilan sifatlangan. Islom olamida Qurʼon musʼhaf nomi bilan ham mashhur. Islom ulamolari Qurʼonning 30 xil nom va sifatlarini sanab oʻtganlar.

🚀Yaratuvchi: [@$botim]",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Orqaga','callback_data'=>'quroni_karim']]
]
]),
]);
}

if($data=="quroni_karim_tarixi"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Islom tarixiga oid manbalarda keltirilishicha, Qurʼon nozil boʻlishi milodiy 610-yil boshlangan. Muhammad paygʻambar 40 yoshda Makka shahri yaqinidagi Hiro gʻorida chuqur tafakkurga berilib oʻtirgan bir paytda Jabroil farishta „Iqroʼ“ („Oʻqi“) deb boshlanuvchi „Alaq“ surasining avvalgi 5 oyatini keltirdi. Bu jarayon Makkada 13 yil, Madinada 10 yil, hammasi boʻlib 23 yil davom etgan. Qurʼonning nozil qilinishi islom aqidasi boʻyicha ramazon oyining 27-kuniga oʻtar kechasi yuz bergan. Shuning uchun ham bu oy muqaddas hisoblanib, roʻza tutilgan kunning 27-kechasi laylatul-qadr, yaʼni qadrli, ilohiy qudrat namoyon boʻladigan, bandalarning bir yillik taqdiri hal qilinadigan (qadr — taqdir, oʻlchov) tabarruk kecha deb ulugʻlanadi.

Qurʼonning boʻlimlari sura deyiladi, uni shartli ravishda bob bilan taqqoslash mumkin. Har sura oyatlarga boʻlingan. Qurʼon 114 sura, 6236 oyatdan iborat. Har bir suraning oʻz nomi bor. Oyatlar esa tartib raqami bilan berilgan. Suralarning nomlari uning boshida kelgan soʻzdan olingan yoki zikri koʻproq kelgan narsalar, voqealar yohud asosiy qahramon nomi bilan atalgan. Keyinchalik oʻqish va yodlash oson boʻlishi uchun Iroq hokimi Hajjoj ibn Yusuf (hukmronlik yillari 694—714) koʻrsatmasiga binoan Qurʼon 30 qism (arabcha: juz, forscha: pora)ga boʻlingan. Qurʼonda birinchi kelgan „Fotiha“ surasidan keyingi suralar katta, oʻrtacha va kichik suralar tartibida joylashgan. 2-Baqara surasi 286 oyatdan, eng qisqa Kavsar surasi 3 oyatdan iborat. Eng qisqa oyatlar „Toho“ va „Yosin“, eng uzun oyat „Baqara“ surasining 282-oyatidir. Suralar nozil boʻlish vaqti va joyiga koʻra 2 ga: hijradan oldin nozil boʻlgan suralar — „Makka suralari“ (610—622 yillar, 86 sura) va hijradan keyin nozil boʻlgan suralar — „Madina suralari“ (622-yildan, 28 sura) ga ajratiladi.

Qurʼon matnining koʻp qismi Alloh bilan soʻzlashish, islom dushmanlari yoki undan ikkilanuvchilar bilan munozara qilish shaklida berilgan.

🚀Yaratuvchi: [@$botim]",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Orqaga','callback_data'=>'quroni_karim']]
]
]),
]);
}

if($data=="musiqa"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/Jarico_Bass/14",
'caption'=>"Sarlavha: Mazzami sizlarga mazzami\nYuklab olindi: 86k",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'❌','callback_data'=>'qiziq']]
]
])
]);
}

if($data=="pora"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "✅Kerakli tugmalaradan foydalaning✅",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🎙1-pora🔉','callback_data'=>'pora1'],['text'=>'🎙2-pora🔉','callback_data'=>'pora2'],['text'=>'🎙3-pora🔉','callback_data'=>'pora3']],[['text'=>'🎙4-pora🔉','callback_data'=>'pora4'],['text'=>'🎙5-pora🔉','callback_data'=>'pora5'],['text'=>'🎙6-pora🔉','callback_data'=>'pora6']],[['text'=>'🎙7-pora🔉','callback_data'=>'pora7'],['text'=>'🎙8-pora🔉','callback_data'=>'pora8'],['text'=>'🎙9-pora🔉','callback_data'=>'pora9']],[['text'=>'🎙10-pora🔉','callback_data'=>'pora10'],['text'=>'🎙11-pora🔉','callback_data'=>'pora11'],['text'=>'🎙12-pora🔉','callback_data'=>'pora12']],[['text'=>'🎙13-pora🔉','callback_data'=>'pora13'],['text'=>'🎙14-pora🔉','callback_data'=>'pora14'],['text'=>'🎙15-pora🔉','callback_data'=>'pora15']],[['text'=>'🎙16-pora🔉','callback_data'=>'pora16'],['text'=>'🎙17-pora🔉','callback_data'=>'pora17'],['text'=>'🎙18-pora🔉','callback_data'=>'pora18']],[['text'=>'🎙19-pora🔉','callback_data'=>'pora19'],['text'=>'🎙20-pora🔉','callback_data'=>'pora20'],['text'=>'🎙21-pora🔉','callback_data'=>'pora21']],[['text'=>'🎙22-pora🔉','callback_data'=>'pora22'],['text'=>'🎙23-pora🔉','callback_data'=>'pora23'],['text'=>'🎙24-pora🔉','callback_data'=>'pora24']],[['text'=>'🎙25-pora🔉','callback_data'=>'pora25'],['text'=>'🎙25-pora🔉','callback_data'=>'pora26'],['text'=>'🎙27-pora🔉','callback_data'=>'pora27']],[['text'=>'🎙28-pora🔉','callback_data'=>'pora28'],['text'=>'🎙29-pora🔉','callback_data'=>'pora29'],['text'=>'🎙30-pora🔉','callback_data'=>'pora30']],[['text'=>'🔙Orqaga','callback_data'=>'quroni_karim']]
]
]),
]);
}

if($data=="pora1"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/549",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora2"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/550",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora3"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/551",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora4"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/552",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora5"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/553",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora6"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/554",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora7"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/555",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora8"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/556",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora9"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/557",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora10"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/558",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora11"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/559",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora12"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/560",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora13"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/561",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora14"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/562",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora15"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/563",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora16"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/564",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora17"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/565",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora18"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/566",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora19"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/567",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora20"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/568",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora21"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/569",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora22"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/570",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora23"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/571",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora24"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/572",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora25"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/573",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora26"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/574",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora27"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/575",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora28"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/576",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora29"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/577",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="pora30"){
bot('sendvoice',[
'chat_id'=>$chat_id2,
'message_id'=>$messange_id2,
'voice'=>"https://t.me/ikandaroff/578",
'caption'=>"🔊Yaratuvchi: [@$botim]",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
'inline_keyboard'=>[
[['text'=>'🚀Botimiz','url'=>"t.me/$botim"]]
]
])
]);
}

if($data=="tema"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "😋Salom siz Telegram Temalar bo‘limidasiz marhamat o‘zingizga kerakli temani tanlang💎",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'💎Tema','url'=>'https://t.me/addtheme/Q9kwaZ6FqRAeL12L'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/Lgf6MazwKwbPOnhD'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/P6WBVQ6xNaHMQydW']],[['text'=>'💎Tema','url'=>'https://t.me/addtheme/lZP4eHgTlyS3svob'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/ajpgde8FC9o6VV6V'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/dL6giK0lljwnVx0U']],[['text'=>'💎Tema','url'=>'https://t.me/addtheme/yNPtUF4it0p9gSoS'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/Ghe2j48tKHJ5uGe9'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/QqaQ4dkuP8hrdNBF']],[['text'=>'💎Tema','url'=>'https://t.me/addtheme/Itrs6H1PDi4GyxoT'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/miqlTDzszxoNejMD'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/YU9ibxKTIdivO3Jo']],[['text'=>'💎Tema','url'=>'https://t.me/addtheme/WaterFall'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/b9vgXuyhbNIFddGY'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/N2zCVdSh8BVIKO1Z']],[['text'=>'💎Tema','url'=>'https://t.me/addtheme/L2r3j4oPH7eSnXRB'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/NuFUPptfFmNPK54T'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/H9TRYKNKr5XHjAOa']],[['text'=>'💎Tema','url'=>'https://t.me/addtheme/mello'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/nYbAGQ7DVyHaYOZ0'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/iXk5OTUnNJTNchaj']],[['text'=>'💎Tema','url'=>'https://t.me/addtheme/Neon_Forest'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/BlackCity_Toptemi'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/x9hiF3XwJlQq3IEB']],[['text'=>'💎Tema','url'=>'https://t.me/addtheme/Wolf1'],['text'=>'💎Tema','url'=>'https://t.me/addtheme/Ideal_Coder'],['text'=>'🔙Orqaga','callback_data'=>'qiziq']]
]
]),
]);
}

if ($data == "Til"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"⚜️Telegramingiz tilini osongina o'zgartirish uchun quyidagi tillardan birini tanlang👇

Shu telegram tillari bolimini yana biror botda ko‘rsam o‘sha bot admini mandan hafa bo‘lmasin😡",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[ 
[['text'=>"🇺🇿Узбек тили",'url'=>"tg://setlanguage?lang=uzbekcyr"]],
[['text'=>"🇺🇿O'zbek tili",'url'=>"tg://setlanguage?lang=uz-beta"]],
[['text'=>"🇷🇺Руский язик",'url'=>"tg://setlanguage?lang=ru"]],
[['text'=>"🇺🇸English Languge",'url'=>"tg://setlanguage?lang=en"]],[['text'=>"🇸🇦اللغة العربية",'url'=>"tg://setlanguage?lang=ar"]],
[['text'=>"🇹🇷Türk Dili",'url'=>"tg://setlanguage?lang=tr"]],
[['text'=>"🇫🇷Français",'url'=>"tg://setlanguage?lang=fr"]],[['text'=>"🇪🇸Gaztelania",'url'=>"tg://setlanguage?lang=spanish"]],[['text'=>"🇵🇹português",'url'=>"tg://setlanguage?lang=portu"]],[['text'=>"🇳🇱Nederlands",'url'=>"tg://setlanguage?lang=nederland"]],[['text'=>"🇩🇪deutsche Sprache",'url'=>"tg://setlanguage?lang=de"]],[['text'=>"🔙Orqaga",'callback_data'=>"qiziq"]]
]
]),
]);
}

if($data=="roza"){
   $bugun = date('d-M Y',strtotime('0 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "————————————————————————
Рузада огиз очиш ва йопиш дуолари

Руза тутиш (огиз епиш)
дуоси. Навайту ан асума
совма шахри ромазона
миннал фажри иллал
магриби холисал
лиллоху таолло Аллоху акбар. Амин.
РУЗА (огиз очиш) дуоси.
Аллохума лака сумту ва
бика аманту валайка
тавакалту ва алла
ризика ифтору фагфирли ла гафуру ма
кадамту ва мо ахарту.
Илохим Аллохим кабул
айласин рузангизни.
Амин
————————————————————————
",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Orqaga qaytish', 'callback_data'=>"qiziq"]]
]
]),
]);
}

if($data=="sevgi"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "✅Kerakli tugmalaradan foydalaning✅",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'✏️Sher  1','callback_data'=>'sevgi1'],['text'=>'✏️Sher  2','callback_data'=>'sevgi2']],[['text'=>'✏️Sher  3','callback_data'=>'sevgi3'],['text'=>'✏️Sher  4','callback_data'=>'sevgi4']],[['text'=>'✏️Sher  5','callback_data'=>'sevgi5'],['text'=>'🔙Orqaga','callback_data'=>'qiziq']]
]
]),
]);
}

if($data=="sevgi1"){
   $bugun = date('d-M Y',strtotime('0 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "💦SEVGI HAQIDA SHER😍

​ Qizlar sevsa nozlanadi 😌
 Yigit sevsa qizgonadi 😠
 Yuraklarga olov yoqib 😍
 Sevgi shunday boshlanadi 💘

 Kalovini topsak muz yonadi ❄️
 Ko'nglini topsak qiz yonadi 😘
 Yuraklarga olov yoqib 😍
 Sevgi shunday boshlanadi 💘

 Sevib qolgach rashki bo'lar 😱
 Yahshi ko'rsa yahshi bo'lar 👻
 Muhabbat chin bo'lsa agar 💏
 Arazni ham gashti bo'lar 😃

 Dardsiz bo'lmas chin muhabbat 😞
 Bahtsiz bo'lmas chin muhabbat 😊
 Sevib hazil qiling mayli 💑
 Hazllashib sevmang faqаt...☝️

✏️Yaratuvchi: [@$botim]
",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Orqaga qaytish', 'callback_data'=>"sevgi"]]
]
]),
]);
}

if($data=="sevgi2"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "
💦SEVGI HAQIDA SHER😍

Sevishganlar, sevganlar, 😘
Yetishmagan, yetganlar.😢
Biri kulib, biri kuyib,😓
Bir bir oʻtib ketganlar.😖

Muxabbatning azobidan,☺
Bemavrid soch oqargan.🤗
Kulsangiz xam, kuysangiz xam,😍
Chidaganga chiqargan.😎

Xayot oʻzi bir tomosha,😝
Derlar tomosha koʻrniki.🤓
Muxabbat ham unda oʻyin,😤
Bir boyniki, bir zoʻrniki.😓

Togʻda oʻsgan bu lolalar,🤑
Oyogʻingiz qayiradi.😜
Dushman emas doʻstlaringiz, 🤩
Yoringizdan ayiradi.😍

✏️Yaratuvchi: [@$botim]",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Orqaga','callback_data'=>'sevgi']]
]
]),
]);
}

if($data=="sevgi3"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "
💦SEVGI HAQIDA SHER😍

Ishqdan qurdim BUYUK QASR,🤩
Ammo unda O'ZIM ASIR,😘
Saqlanmaydi bundayin SIR,🤗
Seni doim SeVaMaN.🙂

Oshkor etmoq istar KO'NGLIM,☺
Ammo ayro tushar YO'LIM.😍
Sensiz yashash asli O'LIM,😎
Seni doim SeVaMaN.🤓

Qalb olovi o'chganda ham,😢
DARD vujudim quchganda ham,🤤
RUXIM ko'kka uchganda ham,🤑
Seni doim SeVaMaN...😍

✏️Yaratuvchi: [@$botim] ",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Orqaga','callback_data'=>'sevgi']]
]
]),
]);
}

if($data=="sevgi4"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "💦SEVGI HAQIDA SHER😍

Hayol qo'ymas yugurib haryon 😉
Tinchlan desam tinmay yig'laydi.🤗
Unga shuncha so'zlarim bekor.🙄
Yana eslab sira tinmaydi.😋

Kuylaydimi senga atab goh😘
Sher yozadi senga bittalab🤩
Sovg'a bitar yuragin nogoh😍
Faqat senga go'zal baxt tilab🤪

Hayol qo'ymas chopaveradi😻
Seni izlab topaveradi💦
Dil so'zidan guldasta yasab💋
Senga noma bitaveradi.💞

Na kunda bor,na tun halovat😲
Isming Bot bot takrorlab jimmas😢
Eslamayin qolsa yuragim🤑
Xayol uchun yurak hechkimmas😜

Emishdirki hayol Malika😙
Go'yo unda sen mag'rur shoxsan🤩
Shoir yurak sherin bitmasa😍
Yurak ketar o'rnida dog'san.😎

✏️Yaratuvchi: [@$botim] ",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Orqaga','callback_data'=>'sevgi']]
]
]),
]);
}

if($data=="sevgi5"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "💦SEVGI HAQIDA SHER😍

Tonda tongi yulduzga qarab,😘
Yulduzlardan yor vaslin so'rab,😍🤫
Aytar edim hikoya so'zlab,😹
Indamasdan jimgina sevdim..!🙀

Yorim vaslin so'ylasam sizga,😿
U bir zuxro yulduzi kabi,😻
Sochilardi yog'du misoli,🤩
Indamasdan jimgina sevdim..!😂

O'qir edik u bilan birga,😘
Bitta maktab bitta sinfda,😍
Xatto berdim ko'nglimni unga,🤠
Indamasdan jimgina sevdim..!😓

Mening ko'nglim undaligini,😫
Bilar edi balkim o'zi ham,😪
Bizni endi kimlar ayirdi,🙂
Indamasdan jimgina sevdim..!😘

Xozir endi oramiz yiroq,🤩
Boray deyman borolmam biroq,😏
Sevarmikan xanuz shu firoq,😍
Indamasdan jimgina sevdim.😎


✏️Yaratuvchi: [@$botim]",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Orqaga','callback_data'=>'sevgi']]
]
]),
]);
}

$ARSLON_1707 = json_decode(file_get_contents('php://input'));
$callcid = $ARSLON_1707->callback_query->message->chat->id;
$callmid = $ARSLON_1707->callback_query->message->message_id;
$data = $ARSLON_1707->callback_query->data;
if ($data == "soatlar"){
$timerus=date("H:i",strtotime("0 hour"));
$timeusa = date("H:i",strtotime("-11 hour"));
$timemexico = date("H:i",strtotime("-6 hour"));
$timeitaliya = date("H:i",strtotime("-7 hour"));
$timeturk = date("H:i",strtotime("0 hour"));
$timeuzb = date("H:i", strtotime("2 hour"));
$timeqirgiz = date("H:i", strtotime("3 hour"));
$timedubay = date("H:i", strtotime("1 hour"));
$timelondon = date("H:i", strtotime("-2 hour"));
$timeparij = date("H:i", strtotime("-1 hour"));
$timeuxan = date("H:i", strtotime("5 hour"));
$timeqozoq= date("H:i", strtotime("3 hour"));
bot ('editmessagetext', [
'chat_id'=> $callcid,
'message_id'=> $callmid,
'parse_mode'=>"html",
'text'=>"Turli Davlat Soatlari⬇️
➖➖➖➖➖➖➖➖➖➖➖
🇷🇺𝖱OSSIYA:
⏱️soat : $timerus
- - - - - - - - - - - - - - -|- - - - - - - - - - - - - -
🇺🇸AMERIKA:
⏱️soat : $timeusa
- - - - - - - - - - - - - - -|- - - - - - - - - - - - - -
🇺🇿UZBEKISTON:
⏱️soat :  $timeuzb
- - - - - - - - - - - - - - -|- - - - - - - - - - - - - -
🇵🇼QOZOG‘ISTON:
⏱️soat :  $timeqozoq
- - - - - - - - - - - - - - -|- - - - - - - - - - - - - -
🇰🇬QIRG‘IZISTON:
⏱️soat :  $timeqirgiz
- - - - - - - - - - - - - - -|- - - - - - - - - - - - - -
🇹🇷T͟URKIYA:
⏱️soat : $timeturk
- - - - - - - - - - - - - - -|- - - - - - - - - - - - - -
M͟EKSIKA:
⏱️soat :  $timemexico
- - - - - - - - - - - - - - -|- - - - - - - - - - - - - -
🇦🇪DUBAY:
⏱️ soat $timedubay
- - - - - - - - - - - - - - -|- - - - - - - - - - - - - -
LONDON:
⏱️soat : $timelondon
- - - - - - - - - - - - - - -|- - - - - - - - - - - - - -
🇨🇳UXAN:
⏱️soat :  $timeuxan
- - - - - - - - - - - - - - -|- - - - - - - - - - - - - -
🇲🇫P͟ARIJ:
⏱️soat : $timeparij
- - - - - - - - - - - - - - -|- - - - - - - - - - - - - -
🇭🇺ITALIYA:
⏱️soat : $timeitaliya
➖➖➖➖➖➖➖➖➖➖➖
Ma'lumotlar @JAMSHID3164  Tomonidan Taqdim Etildi!",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
 'inline_keyboard'=>[
[['text'=>"🔙Orqaga", 'callback_data'=>"qiziq"]],
] 
]) 
]);
}

$ism = file_get_contents("Bot/$cid.ism");
$step = file_get_contents("Bot/$cid.step");
$step2 = file_get_contents("Bot/2.step");
$step3 = file_get_contents("Bot/3.step");
$step1 = file_get_contents("Bot/$chat_id2.step");
mkdir("Bot");

if($data=="nick"){
bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"<b><u>Iltimos Ismingizni kiriting</u></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️ Orqaga",'callback_data'=>"qiziq"]],
]
]), 
]);
file_put_contents("Bot/$callcid.step","nik");
}
if($step=="nik"){
 if($text){
 	if($text != "/start"){
$nik1 = $text;
$nik1 = str_replace('a', 'Á', $nik1);
$nik1 = str_replace('b', 'ß', $nik1);
$nik1 = str_replace('c', 'Č', $nik1);
$nik1 = str_replace('d', 'Ď', $nik1);
$nik1 = str_replace('e', 'Ĕ', $nik1);
$nik1 = str_replace('f', 'Ŧ', $nik1);
$nik1 = str_replace('g', 'Ğ', $nik1);
$nik1 = str_replace('h', 'Ĥ', $nik1);
$nik1 = str_replace('i', 'Ĩ', $nik1);
$nik1 = str_replace('j', 'Ĵ', $nik1);
$nik1 = str_replace('k', 'Ķ', $nik1);
$nik1 = str_replace('l', 'Ĺ', $nik1);
$nik1 = str_replace('m', 'M', $nik1);
$nik1 = str_replace('n', 'Ń', $nik1);
$nik1 = str_replace('o', 'Ő', $nik1);
$nik1 = str_replace('p', 'P', $nik1);
$nik1 = str_replace('q', 'Q', $nik1);
$nik1 = str_replace('r', 'Ŕ', $nik1);
$nik1 = str_replace('s', 'Ś', $nik1);
$nik1 = str_replace('t', 'Ť', $nik1);
$nik1 = str_replace('u', 'Ú', $nik1);
$nik1 = str_replace('v', 'V', $nik1);
$nik1 = str_replace('w', 'Ŵ', $nik1);
$nik1 = str_replace('x', 'Ж', $nik1);
$nik1 = str_replace('y', 'Ŷ', $nik1);
$nik1 = str_replace('z', 'Ź', $nik1);
$nik1 = str_replace('A', 'Á', $nik1);
$nik1 = str_replace('B', 'ß', $nik1);
$nik1 = str_replace('C', 'Č', $nik1);
$nik1 = str_replace('D', 'Ď', $nik1);
$nik1 = str_replace('E', 'Ĕ', $nik1);
$nik1 = str_replace('F', 'Ŧ', $nik1);
$nik1 = str_replace('G', 'Ğ', $nik1);
$nik1 = str_replace('H', 'Ĥ', $nik1);
$nik1 = str_replace('I', 'Ĩ', $nik1);
$nik1 = str_replace('J', 'Ĵ', $nik1);
$nik1 = str_replace('K', 'Ķ', $nik1);
$nik1 = str_replace('L', 'Ĺ', $nik1);
$nik1 = str_replace('M', 'M', $nik1);
$nik1 = str_replace('N', 'Ń', $nik1);
$nik1 = str_replace('O', 'Ő', $nik1);
$nik1 = str_replace('P', 'P', $nik1);
$nik1 = str_replace('Q', 'Q', $nik1);
$nik1 = str_replace('R', 'Ŕ', $nik1);
$nik1 = str_replace('S', 'Ś', $nik1);
$nik1 = str_replace('T', 'Ť', $nik1);
$nik1 = str_replace('U', 'Ú', $nik1);
$nik1 = str_replace('V', 'V', $nik1);
$nik1 = str_replace('W', 'Ŵ', $nik1);
$nik1 = str_replace('X', 'Ж', $nik1);
$nik1 = str_replace('Y', 'Ŷ', $nik1);
$nik1 = str_replace('Z', 'Ź', $nik1);

 	$nik2 = $text;
$nik2 = str_replace('q', 'ϙᷭ', $nik2);
   $nik2 = str_replace('w', 'ᴡᷱ', $nik2);
   $nik2 = str_replace('e', 'ᴇⷷ', $nik2);
   $nik2 = str_replace('r', 'ʀᷢ', $nik2);
   $nik2 = str_replace('t', 'ᴛͭ', $nik2);
   $nik2 = str_replace('y', 'ʏꙷ', $nik2);
   $nik2 = str_replace('u', 'ᴜͧ', $nik2);
   $nik2 = str_replace('i', 'ɪͥ', $nik2);
   $nik2 = str_replace('o', 'ᴏⷪ', $nik2);
   $nik2 = str_replace('p', 'ᴘᷮ', $nik2);
   $nik2 = str_replace('a', 'ᴀⷽ', $nik2);
   $nik2 = str_replace('s', 'sᷤ', $nik2);
   $nik2 = str_replace('d', 'ᴅͩ', $nik2);
   $nik2 = str_replace('f', 'ғᷫ', $nik2);
   $nik2 = str_replace('g', 'ɢᷛ', $nik2);
   $nik2 = str_replace('h', 'ʜⷩ', $nik2);
   $nik2 = str_replace('j', 'ᴊᷯ', $nik2);
   $nik2 = str_replace('k', 'ᴋⷦ', $nik2);
   $nik2 = str_replace('l', 'ʟᷞ', $nik2);
   $nik2 = str_replace('z', 'ᴢᷦ', $nik2);
   $nik2 = str_replace('x', 'xͯ', $nik2);
   $nik2 = str_replace('c', 'ᴄⷭ', $nik2);
   $nik2 = str_replace('v', 'ᴠͮ', $nik2);
   $nik2 = str_replace('b', 'ʙⷡ', $nik2);
   $nik2 = str_replace('n', 'ɴᷡ', $nik2);
   $nik2 = str_replace('m', 'ᴍᷟ', $nik2);
   $nik2 = str_replace('Q', 'ϙᷭ', $nik2);
   $nik2 = str_replace('W', 'ᴡᷱ', $nik2);
   $nik2 = str_replace('E', 'ᴇⷷ', $nik2);
   $nik2 = str_replace('R', 'ʀᷢ', $nik2);
   $nik2 = str_replace('T', 'ᴛͭ', $nik2);
   $nik2 = str_replace('Y', 'ʏꙷ', $nik2);
   $nik2 = str_replace('U', 'ᴜͧ', $nik2);
   $nik2 = str_replace('I', 'ɪͥ', $nik2);
   $nik2 = str_replace('O', 'ᴏⷪ', $nik2);
   $nik2 = str_replace('P', 'ᴘᷮ', $nik2);
   $nik2 = str_replace('A', 'ᴀⷽ', $nik2);
   $nik2 = str_replace('S', 'sᷤ', $nik2);
   $nik2 = str_replace('D', 'ᴅͩ', $nik2);
   $nik2 = str_replace('F', 'ғᷫ', $nik2);
   $nik2 = str_replace('G', 'ɢᷛ', $nik2);
   $nik2 = str_replace('H', 'ʜⷩ', $nik2);
   $nik2 = str_replace('J', 'ᴊᷯ', $nik2);
   $nik2 = str_replace('K', 'ᴋⷦ', $nik2);
   $nik2 = str_replace('L', 'ʟᷞ', $nik2);
   $nik2 = str_replace('Z', 'ᴢᷦ', $nik2);
   $nik2 = str_replace('X', 'xͯ', $nik2);
   $nik2 = str_replace('C', 'ᴄⷭ', $nik2);
   $nik2 = str_replace('V', 'ᴠͮ', $nik2);
   $nik2 = str_replace('B', 'ʙⷡ', $nik2);
   $nik2 = str_replace('N', 'ɴᷡ', $nik2);
   $nik2 = str_replace('M', 'ᴍᷟ', $nik2);

$nik3 = $text;
$nik3 = str_replace('a', 'α', $nik3);
$nik3 = str_replace('b', 'в', $nik3);
$nik3 = str_replace('c', '¢', $nik3);
$nik3 = str_replace('d', '∂', $nik3);
$nik3 = str_replace('e', 'є', $nik3);
$nik3 = str_replace('f', 'ƒ', $nik3);
$nik3 = str_replace('g', 'g', $nik3);
$nik3 = str_replace('h', 'н', $nik3);
$nik3 = str_replace('i', 'ι', $nik3);
$nik3 = str_replace('j', 'נ', $nik3);
$nik3 = str_replace('k', 'к', $nik3);
$nik3 = str_replace('l', 'ℓ', $nik3);
$nik3 = str_replace('m', 'м', $nik3);
$nik3 = str_replace('n', 'η', $nik3);
$nik3 = str_replace('o', 'σ', $nik3);
$nik3 = str_replace('p', 'ρ', $nik3);
$nik3 = str_replace('q', 'q', $nik3);
$nik3 = str_replace('r', 'я', $nik3);
$nik3 = str_replace('s', 'ѕ', $nik3);
$nik3 = str_replace('t', 'т', $nik3);
$nik3 = str_replace('u', 'υ', $nik3);
$nik3 = str_replace('v', 'ν', $nik3);
$nik3 = str_replace('w', 'ω', $nik3);
$nik3 = str_replace('x', 'χ', $nik3);
$nik3 = str_replace('y', 'у', $nik3);
$nik3 = str_replace('z', 'z', $nik3);
$nik3 = str_replace('A', 'α', $nik3);
$nik3 = str_replace('B', 'в', $nik3);
$nik3 = str_replace('C', '¢', $nik3);
$nik3 = str_replace('D', '∂', $nik3);
$nik3 = str_replace('E', 'є', $nik3);
$nik3 = str_replace('F', 'ƒ', $nik3);
$nik3 = str_replace('G', 'g', $nik3);
$nik3 = str_replace('H', 'н', $nik3);
$nik3 = str_replace('I', 'ι', $nik3);
$nik3 = str_replace('J', 'נ', $nik3);
$nik3 = str_replace('K', 'к', $nik3);
$nik3 = str_replace('L', 'ℓ', $nik3);
$nik3 = str_replace('M', 'м', $nik3);
$nik3 = str_replace('N', 'η', $nik3);
$nik3 = str_replace('O', 'σ', $nik3);
$nik3 = str_replace('P', 'ρ', $nik3);
$nik3 = str_replace('Q', 'q', $nik3);
$nik3 = str_replace('R', 'я', $nik3);
$nik3 = str_replace('S', 'ѕ', $nik3);
$nik3 = str_replace('T', 'т', $nik3);
$nik3 = str_replace('U', 'υ', $nik3);
$nik3 = str_replace('V', 'ν', $nik3);
$nik3 = str_replace('W', 'ω', $nik3);
$nik3 = str_replace('X', 'χ', $nik3);
$nik3 = str_replace('Y', 'у', $nik3);
$nik3 = str_replace('Z', 'z', $nik3);

$nik4 = $text;
$nik4 = str_replace('a', 'ค', $nik4);
$nik4 = str_replace('b', '๒', $nik4);
$nik4 = str_replace('c', 'ς', $nik4);
$nik4 = str_replace('d', '๔', $nik4);
$nik4 = str_replace('e', 'є', $nik4);
$nik4 = str_replace('f', 'Ŧ', $nik4);
$nik4 = str_replace('g', 'g', $nik4);
$nik4 = str_replace('h', 'ђ', $nik4);
$nik4 = str_replace('i', 'เ', $nik4);
$nik4 = str_replace('j', 'ן', $nik4);
$nik4 = str_replace('k', 'к', $nik4);
$nik4 = str_replace('l', 'l', $nik4);
$nik4 = str_replace('m', '๓', $nik4);
$nik4 = str_replace('n', 'ภ', $nik4);
$nik4 = str_replace('o', '๏', $nik4);
$nik4 = str_replace('p', 'ק', $nik4);
$nik4 = str_replace('q', 'ợ', $nik4);
$nik4 = str_replace('r', 'г', $nik4);
$nik4 = str_replace('s', 'ร', $nik4);
$nik4 = str_replace('t', 't', $nik4);
$nik4 = str_replace('u', 'ย', $nik4);
$nik4 = str_replace('v', 'ש', $nik4);
$nik4 = str_replace('w', 'ฬ', $nik4);
$nik4 = str_replace('x', 'א', $nik4);
$nik4 = str_replace('y', 'ץ', $nik4);
$nik4 = str_replace('z', 'z', $nik4);

$nik4 = str_replace('A', 'ค', $nik4);
$nik4 = str_replace('B', '๒', $nik4);
$nik4 = str_replace('C', 'ς', $nik4);
$nik4 = str_replace('D', '๔', $nik4);
$nik4 = str_replace('E', 'є', $nik4);
$nik4 = str_replace('F', 'Ŧ', $nik4);
$nik4 = str_replace('G', 'g', $nik4);
$nik4 = str_replace('H', 'ђ', $nik4);
$nik4 = str_replace('I', 'เ', $nik4);
$nik4 = str_replace('J', 'ן', $nik4);
$nik4 = str_replace('K', 'к', $nik4);
$nik4 = str_replace('L', 'l', $nik4);
$nik4 = str_replace('M', '๓', $nik4);
$nik4 = str_replace('N', 'ภ', $nik4);
$nik4 = str_replace('O', '๏', $nik4);
$nik4 = str_replace('P', 'ק', $nik4);
$nik4 = str_replace('Q', 'ợ', $nik4);
$nik4 = str_replace('R', 'г', $nik4);
$nik4 = str_replace('S', 'ร', $nik4);
$nik4 = str_replace('T', 't', $nik4);
$nik4 = str_replace('U', 'ย', $nik4);
$nik4 = str_replace('V', 'ש', $nik4);
$nik4 = str_replace('W', 'ฬ', $nik4);
$nik4 = str_replace('X', 'א', $nik4);
$nik4 = str_replace('Y', 'ץ', $nik4);
$nik4 = str_replace('Z', 'z', $nik4);

$nik5 = $text;
$nik5 = str_replace('a', 'ä', $nik5);
$nik5 = str_replace('b', 'b', $nik5);
$nik5 = str_replace('c', 'ċ', $nik5);
$nik5 = str_replace('d', 'd', $nik5);
$nik5 = str_replace('e', 'ë', $nik5);
$nik5 = str_replace('f', 'f', $nik5);
$nik5 = str_replace('g', 'ġ', $nik5);
$nik5 = str_replace('h', 'h', $nik5);
$nik5 = str_replace('i', 'ï', $nik5);
$nik5 = str_replace('j', 'j', $nik5);
$nik5 = str_replace('k', 'k', $nik5);
$nik5 = str_replace('l', 'l', $nik5);
$nik5 = str_replace('m', 'm', $nik5);
$nik5 = str_replace('n', 'n', $nik5);
$nik5 = str_replace('o', 'ö', $nik5);
$nik5 = str_replace('p', 'p', $nik5);
$nik5 = str_replace('q', 'q', $nik5);
$nik5 = str_replace('r', 'r', $nik5);
$nik5 = str_replace('s', 's', $nik5);
$nik5 = str_replace('t', 't', $nik5);
$nik5 = str_replace('u', 'ü', $nik5);
$nik5 = str_replace('v', 'v', $nik5);
$nik5 = str_replace('w', 'w', $nik5);
$nik5 = str_replace('x', 'x', $nik5);
$nik5 = str_replace('y', 'ÿ', $nik5);
$nik5 = str_replace('z', 'ż', $nik5);

$nik5 = str_replace('A', 'ä', $nik5);
$nik5 = str_replace('B', 'b', $nik5);
$nik5 = str_replace('C', 'ċ', $nik5);
$nik5 = str_replace('D', 'd', $nik5);
$nik5 = str_replace('E', 'ë', $nik5);
$nik5 = str_replace('F', 'f', $nik5);
$nik5 = str_replace('G', 'ġ', $nik5);
$nik5 = str_replace('H', 'h', $nik5);
$nik5 = str_replace('I', 'ï', $nik5);
$nik5 = str_replace('J', 'j', $nik5);
$nik5 = str_replace('K', 'k', $nik5);
$nik5 = str_replace('L', 'l', $nik5);
$nik5 = str_replace('M', 'm', $nik5);
$nik5 = str_replace('N', 'n', $nik5);
$nik5 = str_replace('O', 'ö', $nik5);
$nik5 = str_replace('P', 'p', $nik5);
$nik5 = str_replace('Q', 'q', $nik5);
$nik5 = str_replace('R', 'r', $nik5);
$nik5 = str_replace('S', 's', $nik5);
$nik5 = str_replace('T', 't', $nik5);
$nik5 = str_replace('U', 'ü', $nik5);
$nik5 = str_replace('V', 'v', $nik5);
$nik5 = str_replace('W', 'w', $nik5);
$nik5 = str_replace('X', 'x', $nik5);
$nik5 = str_replace('Y', 'ÿ', $nik5);
$nik5 = str_replace('Z', 'ż', $nik5);

$nik6 = $text;
$nik6 = str_replace('a', 'ⓐ', $nik6);
$nik6 = str_replace('b', 'ⓑ', $nik6);
$nik6 = str_replace('c', 'ⓒ', $nik6);
$nik6 = str_replace('d', 'ⓓ', $nik6);
$nik6 = str_replace('e', 'ⓔ', $nik6);
$nik6 = str_replace('f', 'ⓕ', $nik6);
$nik6 = str_replace('g', 'ⓖ', $nik6);
$nik6 = str_replace('h', 'ⓗ', $nik6);
$nik6 = str_replace('i', 'ⓘ', $nik6);
$nik6 = str_replace('j', 'ⓙ', $nik6);
$nik6 = str_replace('k', 'ⓚ', $nik6);
$nik6 = str_replace('l', 'ⓛ', $nik6);
$nik6 = str_replace('m', 'ⓜ', $nik6);
$nik6 = str_replace('n', 'ⓝ', $nik6);
$nik6 = str_replace('o', 'ⓞ', $nik6);
$nik6 = str_replace('p', 'ⓟ', $nik6);
$nik6 = str_replace('q', 'ⓠ', $nik6);
$nik6 = str_replace('r', 'ⓡ', $nik6);
$nik6 = str_replace('s', 'ⓢ', $nik6);
$nik6 = str_replace('t', 'ⓣ', $nik6);
$nik6 = str_replace('u', 'ⓤ', $nik6);
$nik6 = str_replace('v', 'ⓥ', $nik6);
$nik6 = str_replace('w', 'ⓦ', $nik6);
$nik6 = str_replace('x', 'ⓧ', $nik6);
$nik6 = str_replace('y', 'ⓨ', $nik6);
$nik6 = str_replace('z', 'ⓩ', $nik6);

$nik6 = str_replace('A', 'Ⓐ', $nik6);
$nik6 = str_replace('B', 'Ⓑ', $nik6);
$nik6 = str_replace('C', 'Ⓒ', $nik6);
$nik6 = str_replace('D', 'Ⓓ', $nik6);
$nik6 = str_replace('E', 'Ⓔ', $nik6);
$nik6 = str_replace('F', 'Ⓕ', $nik6);
$nik6 = str_replace('G', 'Ⓖ', $nik6);
$nik6 = str_replace('H', 'Ⓗ', $nik6);
$nik6 = str_replace('I', 'Ⓘ', $nik6);
$nik6 = str_replace('J', 'Ⓙ', $nik6);
$nik6 = str_replace('K', 'Ⓚ', $nik6);
$nik6 = str_replace('L', 'Ⓛ', $nik6);
$nik6 = str_replace('M', 'Ⓜ', $nik6);
$nik6 = str_replace('N', 'Ⓝ', $nik6);
$nik6 = str_replace('O', 'Ⓞ', $nik6);
$nik6 = str_replace('P', 'Ⓟ', $nik6);
$nik6 = str_replace('Q', 'Ⓠ', $nik6);
$nik6 = str_replace('R', 'Ⓡ', $nik6);
$nik6 = str_replace('S', 'Ⓢ', $nik6);
$nik6 = str_replace('T', 'Ⓣ', $nik6);
$nik6 = str_replace('U', 'Ⓤ', $nik6);
$nik6 = str_replace('V', 'Ⓥ', $nik6);
$nik6 = str_replace('W', 'Ⓦ', $nik6);
$nik6 = str_replace('X', 'Ⓧ', $nik6);
$nik6 = str_replace('Y', 'Ⓨ', $nik6);
$nik6 = str_replace('Z', 'Ⓩ', $nik6);

$nik7 = $text;
$nik7 = str_replace('a', 'ᴬ', $nik7);
$nik7 = str_replace('b', 'ᴮ', $nik7);
$nik7 = str_replace('c', 'ᶜ', $nik7);
$nik7 = str_replace('d', 'ᴰ', $nik7);
$nik7 = str_replace('e', 'ᴱ', $nik7);
$nik7 = str_replace('f', 'ᶠ', $nik7);
$nik7 = str_replace('g', 'ᴳ', $nik7);
$nik7 = str_replace('h', 'ᴴ', $nik7);
$nik7 = str_replace('i', 'ᴵ', $nik7);
$nik7 = str_replace('j', 'ᴶ', $nik7);
$nik7 = str_replace('k', 'ᴷ', $nik7);
$nik7 = str_replace('l', 'ᴸ', $nik7);
$nik7 = str_replace('m', 'ᴹ', $nik7);
$nik7 = str_replace('n', 'ᴺ', $nik7);
$nik7 = str_replace('o', 'ᴼ', $nik7);
$nik7 = str_replace('p', 'ᴾ', $nik7);
$nik7 = str_replace('q', 'ᵠ', $nik7);
$nik7 = str_replace('r', 'ᴿ', $nik7);
$nik7 = str_replace('s', 'ˁ', $nik7);
$nik7 = str_replace('t', 'ᵀ', $nik7);
$nik7 = str_replace('u', 'ᵁ', $nik7);
$nik7 = str_replace('v', 'ᵛ', $nik7);
$nik7 = str_replace('w', 'ᵂ', $nik7);
$nik7 = str_replace('x', 'ˣ', $nik7);
$nik7 = str_replace('y', 'ʸ', $nik7);
$nik7 = str_replace('z', 'ᶻ', $nik7);
$nik7 = str_replace('A', 'ᴬ', $nik7);
$nik7 = str_replace('B', 'ᴮ', $nik7);
$nik7 = str_replace('C', 'ᶜ', $nik7);
$nik7 = str_replace('D', 'ᴰ', $nik7);
$nik7 = str_replace('E', 'ᴱ', $nik7);
$nik7 = str_replace('F', 'ᶠ', $nik7);
$nik7 = str_replace('G', 'ᴳ', $nik7);
$nik7 = str_replace('H', 'ᴴ', $nik7);
$nik7 = str_replace('I', 'ᴵ', $nik7);
$nik7 = str_replace('J', 'ᴶ', $nik7);
$nik7 = str_replace('K', 'ᴷ', $nik7);
$nik7 = str_replace('L', 'ᴸ', $nik7);
$nik7 = str_replace('M', 'ᴹ', $nik7);
$nik7 = str_replace('N', 'ᴺ', $nik7);
$nik7 = str_replace('O', 'ᴼ', $nik7);
$nik7 = str_replace('P', 'ᴾ', $nik7);
$nik7 = str_replace('Q', 'ᵠ', $nik7);
$nik7 = str_replace('R', 'ᴿ', $nik7);
$nik7 = str_replace('S', 'ˁ', $nik7);
$nik7 = str_replace('T', 'ᵀ', $nik7);
$nik7 = str_replace('U', 'ᵁ', $nik7);
$nik7 = str_replace('V', 'ᵛ', $nik7);
$nik7 = str_replace('W', 'ᵂ', $nik7);
$nik7 = str_replace('X', 'ˣ', $nik7);
$nik7 = str_replace('Y', 'ʸ', $nik7);
$nik7 = str_replace('Z', 'ᶻ', $nik7);

$nik8 = $text;
$nik8 = str_replace('a', 'a̷', $nik8);
$nik8 = str_replace('b', 'b̷', $nik8);
$nik8 = str_replace('c', 'c̷', $nik8);
$nik8 = str_replace('d', 'd̷', $nik8);
$nik8 = str_replace('e', 'e̷', $nik8);
$nik8 = str_replace('f', 'f̷', $nik8);
$nik8 = str_replace('g', 'g̷', $nik8);
$nik8 = str_replace('h', 'h̷', $nik8);
$nik8 = str_replace('i', 'i̷', $nik8);
$nik8 = str_replace('j', 'j̷', $nik8);
$nik8 = str_replace('k', 'k̷', $nik8);
$nik8 = str_replace('l', 'l̷', $nik8);
$nik8 = str_replace('m', 'm̷', $nik8);
$nik8 = str_replace('n', 'n̷', $nik8);
$nik8 = str_replace('o', 'o̷', $nik8);
$nik8 = str_replace('p', 'p̷', $nik8);
$nik8 = str_replace('q', 'q̷', $nik8);
$nik8 = str_replace('r', 'r̷', $nik8);
$nik8 = str_replace('s', 's̷', $nik8);
$nik8 = str_replace('t', 't̷', $nik8);
$nik8 = str_replace('u', 'u̷', $nik8);
$nik8 = str_replace('v', 'v̷', $nik8);
$nik8 = str_replace('w', 'w̷', $nik8);
$nik8 = str_replace('x', 'x̷', $nik8);
$nik8 = str_replace('y', 'y̷', $nik8);
$nik8 = str_replace('z', 'z̷', $nik8);
$nik8 = str_replace('A', 'a̷', $nik8);
$nik8 = str_replace('B', 'b̷', $nik8);
$nik8 = str_replace('C', 'c̷', $nik8);
$nik8 = str_replace('D', 'd̷', $nik8);
$nik8 = str_replace('E', 'e̷', $nik8);
$nik8 = str_replace('F', 'f̷', $nik8);
$nik8 = str_replace('G', 'g̷', $nik8);
$nik8 = str_replace('H', 'h̷', $nik8);
$nik8 = str_replace('I', 'i̷', $nik8);
$nik8 = str_replace('J', 'j̷', $nik8);
$nik8 = str_replace('K', 'k̷', $nik8);
$nik8 = str_replace('L', 'l̷', $nik8);
$nik8 = str_replace('M', 'm̷', $nik8);
$nik8 = str_replace('N', 'n̷', $nik8);
$nik8 = str_replace('O', 'o̷', $nik8);
$nik8 = str_replace('P', 'p̷', $nik8);
$nik8 = str_replace('Q', 'q̷', $nik8);
$nik8 = str_replace('R', 'r̷', $nik8);
$nik8 = str_replace('S', 's̷', $nik8);
$nik8 = str_replace('T', 't̷', $nik8);
$nik8 = str_replace('U', 'u̷', $nik8);
$nik8 = str_replace('V', 'v̷', $nik8);
$nik8 = str_replace('W', 'w̷', $nik8);
$nik8 = str_replace('X', 'x̷', $nik8);
$nik8 = str_replace('Y', 'y̷', $nik8);
$nik8 = str_replace('Z', 'z̷', $nik8);

$nik9 = $text;
$nik9 = str_replace('q', 'Ǫ' , $nik9);
  	 $nik9 = str_replace('w', 'Ш' , $nik9);
	 $nik9 = str_replace('e', 'Ξ' , $nik9);
  	 $nik9 = str_replace('r', 'Я' , $nik9);
	 $nik9 = str_replace('t', '₮' , $nik9);
  	 $nik9 = str_replace('y', 'Џ' , $nik9);
	 $nik9 = str_replace('u', 'Ǚ' , $nik9);
  	 $nik9 = str_replace('i', 'ł' , $nik9);
	 $nik9 = str_replace('o', 'Ф' , $nik9);
  	 $nik9 = str_replace('p', 'ק' , $nik9);
	 $nik9 = str_replace('a', 'Λ' , $nik9);
  	 $nik9 = str_replace('s', 'Ŝ' , $nik9);
	 $nik9 = str_replace('d', 'Ð' , $nik9);
  	 $nik9 = str_replace('f', 'Ŧ' , $nik9);
	 $nik9 = str_replace('g', '₲' , $nik9);
  	 $nik9 = str_replace('h', 'Ḧ' , $nik9);
	 $nik9 = str_replace('j', 'J' , $nik9);
  	 $nik9 = str_replace('k', 'К' , $nik9);
	 $nik9 = str_replace('l', 'Ł' , $nik9);
  	 $nik9 = str_replace('z', 'Ꙃ' , $nik9);
	 $nik9 = str_replace('x', 'Ж' , $nik9);
  	 $nik9 = str_replace('c', 'Ͼ' , $nik9);
	 $nik9 = str_replace('v', 'Ṽ' , $nik9);
  	 $nik9 = str_replace('b', 'Б' , $nik9);
  	 $nik9 = str_replace('n', 'Л' , $nik9);
	 $nik9 = str_replace('m', 'Ɱ' , $nik9);
	
	$nik9 = str_replace('Q', 'Ǫ' , $nik9);
  	 $nik9 = str_replace('W', 'Ш' , $nik9);
	 $nik9 = str_replace('E', 'Ξ' , $nik9);
  	 $nik9 = str_replace('R', 'Я' , $nik9);
	 $nik9 = str_replace('T', '₮' , $nik9);
  	 $nik9 = str_replace('Y', 'Џ' , $nik9);
	 $nik9 = str_replace('U', 'Ǚ' , $nik9);
  	 $nik9 = str_replace('I', 'ł' , $nik9);
	 $nik9 = str_replace('O', 'Ф' , $nik9);
  	 $nik9 = str_replace('P', 'ק' , $nik9);
	 $nik9 = str_replace('A', 'Λ' , $nik9);
  	 $nik9 = str_replace('S', 'Ŝ' , $nik9);
	 $nik9 = str_replace('D', 'Ð' , $nik9);
  	 $nik9 = str_replace('F', 'Ŧ' , $nik9);
	 $nik9 = str_replace('G', '₲' , $nik9);
  	 $nik9 = str_replace('H', 'Ḧ' , $nik9);
	 $nik9 = str_replace('J', 'J' , $nik9);
  	 $nik9 = str_replace('K', 'К' , $nik9);
	 $nik9 = str_replace('L', 'Ł' , $nik9);
  	 $nik9 = str_replace('Z', 'Ꙃ' , $nik9);
	 $nik9 = str_replace('X', 'Ж' , $nik9);
  	 $nik9 = str_replace('C', 'Ͼ' , $nik9);
	 $nik9 = str_replace('V', 'Ṽ' , $nik9);
  	 $nik9 = str_replace('B', 'Б' , $nik9);
  	 $nik9 = str_replace('N', 'Л' , $nik9);
	 $nik9 = str_replace('M', 'Ɱ' , $nik9);
	
$nik10 = $text;
 $nik10 = str_replace('q', 'Ｑ' , $nik10);
  	 $nik10 = str_replace('w', 'Ｗ' , $nik10);
	 $nik10 = str_replace('e', 'Ｅ' , $nik10);
  	 $nik10 = str_replace('r', 'Ｒ' , $nik10);
	 $nik10 = str_replace('t', 'Ｔ' , $nik10);
  	 $nik10 = str_replace('y', 'Ｙ' , $nik10);
	 $nik10 = str_replace('u', 'Ｕ' , $nik10);
  	 $nik10 = str_replace('i', 'Ｉ' , $nik10);
	 $nik10 = str_replace('o', 'Ｏ' , $nik10);
  	 $nik10 = str_replace('p', 'Ｐ' , $nik10);
	 $nik10 = str_replace('a', 'Ａ' , $nik10);
  	 $nik10 = str_replace('s', 'Ｓ' , $nik10);
	 $nik10 = str_replace('d', 'Ｄ' , $nik10);
  	 $nik10 = str_replace('f', 'Բ' , $nik10);
	 $nik10 = str_replace('g', 'Ｇ' , $nik10);
  	 $nik10 = str_replace('h', 'Ｈ' , $nik10);
	 $nik10 = str_replace('j', 'Ｊ' , $nik10);
  	 $nik10 = str_replace('k', 'Ｋ' , $nik10);
	 $nik10 = str_replace('l', 'Ｌ' , $nik10);
  	 $nik10 = str_replace('z', 'Ｚ' , $nik10);
	 $nik10 = str_replace('x', 'Ｘ' , $nik10);
  	 $nik10 = str_replace('c', 'С' , $nik10);
	 $nik10 = str_replace('v', 'Ｖ' , $nik10);
  	 $nik10 = str_replace('b', 'Ｂ' , $nik10);
  	 $nik10 = str_replace('n', 'Ｎ' , $nik10);
	 $nik10 = str_replace('m', 'Ⅿ' , $nik10);
	
	$nik10 = str_replace('Q', 'Ｑ' , $nik10);
  	 $nik10 = str_replace('W', 'Ｗ' , $nik10);
	 $nik10 = str_replace('E', 'Ｅ' , $nik10);
  	 $nik10 = str_replace('R', 'Ｒ' , $nik10);
	 $nik10 = str_replace('T', 'Ｔ' , $nik10);
  	 $nik10 = str_replace('Y', 'Ｙ' , $nik10);
	 $nik10 = str_replace('U', 'Ｕ' , $nik10);
  	 $nik10 = str_replace('I', 'Ｉ' , $nik10);
	 $nik10 = str_replace('O', 'Ｏ' , $nik10);
  	 $nik10 = str_replace('P', 'Ｐ' , $nik10);
	 $nik10 = str_replace('A', 'Ａ' , $nik10);
  	 $nik10 = str_replace('S', 'Ｓ' , $nik10);
	 $nik10 = str_replace('D', 'Ｄ' , $nik10);
  	 $nik10 = str_replace('F', 'Բ' , $nik10);
	 $nik10 = str_replace('G', 'Ｇ' , $nik10);
  	 $nik10 = str_replace('H', 'Ｈ' , $nik10);
	 $nik10 = str_replace('J', 'Ｊ' , $nik10);
  	 $nik10 = str_replace('K', 'Ｋ' , $nik10);
	 $nik10 = str_replace('L', 'Ｌ' , $nik10);
  	 $nik10 = str_replace('Z', 'Ｚ' , $nik10);
	 $nik10 = str_replace('X', 'Ｘ' , $nik10);
  	 $nik10 = str_replace('C', 'С' , $nik10);
	 $nik10 = str_replace('V', 'Ｖ' , $nik10);
  	 $nik10 = str_replace('B', 'Ｂ' , $nik10);
  	 $nik10 = str_replace('N', 'Ｎ' , $nik10);
	 $nik10 = str_replace('M', 'Ⅿ' , $nik10);
	
$nik11 = $text;
$nik11 = str_replace('a', 'ɑ̝̚', $nik11);
$nik11 = str_replace('b', 'в̝̚', $nik11);
$nik11 = str_replace('c', 'c̝̚', $nik11);
$nik11 = str_replace('d', 'd̝̚', $nik11);
$nik11 = str_replace('e', 'ǝ̝̚', $nik11);
$nik11 = str_replace('f', 'г̵̵', $nik11);
$nik11 = str_replace('g', 'G̝̚', $nik11);
$nik11 = str_replace('h', 'н̝̚', $nik11);
$nik11 = str_replace('i', 'ı̝̚', $nik11);
$nik11 = str_replace('j', 'τ', $nik11);
$nik11 = str_replace('k', 'к̝', $nik11);
$nik11 = str_replace('l', 'l̝̚', $nik11);
$nik11 = str_replace('m', 'м̝̚', $nik11);
$nik11 = str_replace('n', 'и̝̚', $nik11);
$nik11 = str_replace('o', 'σ̝̚', $nik11);
$nik11 = str_replace('p', 'ρ̝̚', $nik11);
$nik11 = str_replace('q', 'Q̝̚', $nik11);
$nik11 = str_replace('r', 'я̝̚', $nik11);
$nik11 = str_replace('s', 'ƨ̝̚', $nik11);
$nik11 = str_replace('t', 'т̝̚', $nik11);
$nik11 = str_replace('u', 'υ̝̚', $nik11);
$nik11 = str_replace('v', 'ν̝̚', $nik11);
$nik11 = str_replace('w', 'ω̝̚', $nik11);
$nik11 = str_replace('x', 'x̝̚', $nik11);
$nik11 = str_replace('y', 'ч̝̚', $nik11);
$nik11 = str_replace('z', 'z̝̚', $nik11);

$nik11 = str_replace('A', 'ɑ̝̚', $nik11);
$nik11 = str_replace('B', 'в̝̚', $nik11);
$nik11 = str_replace('C', 'c̝̚', $nik11);
$nik11 = str_replace('D', 'd̝̚', $nik11);
$nik11 = str_replace('E', 'ǝ̝̚', $nik11);
$nik11 = str_replace('F', 'г̵̵', $nik11);
$nik11 = str_replace('G', 'G̝̚', $nik11);
$nik11 = str_replace('H', 'н̝̚', $nik11);
$nik11 = str_replace('I', 'ı̝̚', $nik11);
$nik11 = str_replace('J', 'τ', $nik11);
$nik11 = str_replace('K', 'к̝', $nik11);
$nik11 = str_replace('L', 'l̝̚', $nik11);
$nik11 = str_replace('M', 'м̝̚', $nik11);
$nik11 = str_replace('N', 'и̝̚', $nik11);
$nik11 = str_replace('O', 'σ̝̚', $nik11);
$nik11 = str_replace('P', 'ρ̝̚', $nik11);
$nik11 = str_replace('Q', 'Q̝̚', $nik11);
$nik11 = str_replace('R', 'я̝̚', $nik11);
$nik11 = str_replace('S', 'ƨ̝̚', $nik11);
$nik11 = str_replace('T', 'т̝̚', $nik11);
$nik11 = str_replace('U', 'υ̝̚', $nik11);
$nik11 = str_replace('V', 'ν̝̚', $nik11);
$nik11 = str_replace('W', 'ω̝̚', $nik11);
$nik11 = str_replace('X', 'x̝̚', $nik11);
$nik11 = str_replace('Y', 'ч̝̚', $nik11);
$nik11 = str_replace('Z', 'z̝̚', $nik11);


$nik12 = $text;
$nik12 = str_replace('a', 'ɑ̃̾', $nik12);
$nik12 = str_replace('b', 'в̃̾', $nik12);
$nik12 = str_replace('c', 'c̃̾', $nik12);
$nik12 = str_replace('d', 'd̃̾', $nik12);
$nik12 = str_replace('e', 'ǝ̃̾', $nik12);
$nik12 = str_replace('f', 'г̵̵', $nik12);
$nik12 = str_replace('g', 'G̃̾', $nik12);
$nik12 = str_replace('h', 'н̃̾', $nik12);
$nik12 = str_replace('i', 'ı̃̾', $nik12);
$nik12 = str_replace('j', 'τ̃̾', $nik12);
$nik12 = str_replace('k', 'к̃̾', $nik12);
$nik12 = str_replace('l', 'l̃̾', $nik12);
$nik12 = str_replace('m', 'м̃̾', $nik12);
$nik12 = str_replace('n', 'и̃̾', $nik12);
$nik12 = str_replace('o', 'σ̃̾', $nik12);
$nik12 = str_replace('p', 'ρ̃̾', $nik12);
$nik12 = str_replace('q', 'Q̃̾', $nik12);
$nik12 = str_replace('r', 'я̃̾', $nik12);
$nik12 = str_replace('s', 'ƨ̃̾', $nik12);
$nik12 = str_replace('t', 'т̃̾', $nik12);
$nik12 = str_replace('u', 'υ̃̾', $nik12);
$nik12 = str_replace('v', 'ν̃̾', $nik12);
$nik12 = str_replace('w', 'ω̃̾', $nik12);
$nik12 = str_replace('x', 'x̃̾', $nik12);
$nik12 = str_replace('y', 'ч̃̾', $nik12);
$nik12 = str_replace('z', 'z̃̾', $nik12);

$nik12 = str_replace('A', 'ɑ̃̾', $nik12);
$nik12 = str_replace('B', 'в̃̾', $nik12);
$nik12 = str_replace('C', 'c̃̾', $nik12);
$nik12 = str_replace('D', 'd̃̾', $nik12);
$nik12 = str_replace('E', 'ǝ̃̾', $nik12);
$nik12 = str_replace('F', 'г̵̵', $nik12);
$nik12 = str_replace('G', 'G̃̾', $nik12);
$nik12 = str_replace('H', 'н̃̾', $nik12);
$nik12 = str_replace('I', 'ı̃̾', $nik12);
$nik12 = str_replace('J', 'τ̃̾', $nik12);
$nik12 = str_replace('K', 'к̃̾', $nik12);
$nik12 = str_replace('L', 'l̃̾', $nik12);
$nik12 = str_replace('M', 'м̃̾', $nik12);
$nik12 = str_replace('N', 'и̃̾', $nik12);
$nik12 = str_replace('O', 'σ̃̾', $nik12);
$nik12 = str_replace('P', 'ρ̃̾', $nik12);
$nik12 = str_replace('Q', 'Q̃̾', $nik12);
$nik12 = str_replace('R', 'я̃̾', $nik12);
$nik12 = str_replace('S', 'ƨ̃̾', $nik12);
$nik12 = str_replace('T', 'т̃̾', $nik12);
$nik12 = str_replace('U', 'υ̃̾', $nik12);
$nik12 = str_replace('V', 'ν̃̾', $nik12);
$nik12 = str_replace('W', 'ω̃̾', $nik12);
$nik12 = str_replace('X', 'x̃̾', $nik12);
$nik12 = str_replace('Y', 'ч̃̾', $nik12);
$nik12 = str_replace('Z', 'z̃̾', $nik12);


$nik13 = $text;
$nik13 = str_replace('a', '̅α', $nik13);
$nik13 = str_replace('b', '̅в', $nik13);
$nik13 = str_replace('c', '̅c', $nik13);
$nik13 = str_replace('d', '̅ɒ', $nik13);
$nik13 = str_replace('e', '̅є', $nik13);
$nik13 = str_replace('f', '̅f', $nik13);
$nik13 = str_replace('g', '̅ɢ', $nik13);
$nik13 = str_replace('h', '̅н', $nik13);
$nik13 = str_replace('i', '̅ɪ', $nik13);
$nik13 = str_replace('j', '̅ᴊ', $nik13);
$nik13 = str_replace('k', '̅ĸ', $nik13);
$nik13 = str_replace('l', '̅ℓ', $nik13);
$nik13 = str_replace('m', '̅м', $nik13);
$nik13 = str_replace('n', '̅и', $nik13);
$nik13 = str_replace('o', '̅σ', $nik13);
$nik13 = str_replace('p', '̅ρ', $nik13);
$nik13 = str_replace('q', '̅q', $nik13);
$nik13 = str_replace('r', '̅я', $nik13);
$nik13 = str_replace('s', '̅s', $nik13);
$nik13 = str_replace('t', '̅τ', $nik13);
$nik13 = str_replace('u', '̅υ', $nik13);
$nik13 = str_replace('v', '̅v', $nik13);
$nik13 = str_replace('w', '̅ω', $nik13);
$nik13 = str_replace('x', '̅x', $nik13);
$nik13 = str_replace('y', '̅y', $nik13);
$nik13 = str_replace('z', '̅z', $nik13);
$nik13 = str_replace('A', '̅α', $nik13);
$nik13 = str_replace('B', '̅в', $nik13);
$nik13 = str_replace('C', '̅c', $nik13);
$nik13 = str_replace('D', '̅ɒ', $nik13);
$nik13 = str_replace('E', '̅є', $nik13);
$nik13 = str_replace('F', '̅f', $nik13);
$nik13 = str_replace('G', '̅ɢ', $nik13);
$nik13 = str_replace('H', '̅н', $nik13);
$nik13 = str_replace('I', '̅ɪ', $nik13);
$nik13 = str_replace('J', '̅ᴊ', $nik13);
$nik13 = str_replace('K', '̅ĸ', $nik13);
$nik13 = str_replace('L', '̅ℓ', $nik13);
$nik13 = str_replace('M', '̅м', $nik13);
$nik13 = str_replace('N', '̅и', $nik13);
$nik13 = str_replace('O', '̅σ', $nik13);
$nik13 = str_replace('P', '̅ρ', $nik13);
$nik13 = str_replace('Q', '̅q', $nik13);
$nik13 = str_replace('R', '̅я', $nik13);
$nik13 = str_replace('S', '̅s', $nik13);
$nik13 = str_replace('T', '̅τ', $nik13);
$nik13 = str_replace('U', '̅υ', $nik13);
$nik13 = str_replace('V', '̅v', $nik13);
$nik13 = str_replace('W', '̅ω', $nik13);
$nik13 = str_replace('X', '̅x', $nik13);
$nik13 = str_replace('Y', '̅y', $nik13);
$nik13 = str_replace('Z', '̅z', $nik13);


$nik14 = $text;
$nik14 = str_replace('a', 'ɐ', $nik14);
$nik14 = str_replace('b', 'q', $nik14);
$nik14 = str_replace('c', 'ɔ', $nik14);
$nik14 = str_replace('d', 'p', $nik14);
$nik14 = str_replace('e', 'ǝ', $nik14);
$nik14 = str_replace('f', 'ɟ', $nik14);
$nik14 = str_replace('g', 'ƃ', $nik14);
$nik14 = str_replace('h', 'ɥ', $nik14);
$nik14 = str_replace('i', 'ı', $nik14);
$nik14 = str_replace('j', 'ſ', $nik14);
$nik14 = str_replace('k', 'ʞ', $nik14);
$nik14 = str_replace('l', 'ן', $nik14);
$nik14 = str_replace('m', 'ɯ', $nik14);
$nik14 = str_replace('n', 'u', $nik14);
$nik14 = str_replace('o', 'o', $nik14);
$nik14 = str_replace('p', 'd', $nik14);
$nik14 = str_replace('q', 'b', $nik14);
$nik14 = str_replace('r', 'ɹ', $nik14);
$nik14 = str_replace('s', 's', $nik14);
$nik14 = str_replace('t', 'ʇ', $nik14);
$nik14 = str_replace('u', 'n', $nik14);
$nik14 = str_replace('v', 'ʌ', $nik14);
$nik14 = str_replace('w', 'ʍ', $nik14);
$nik14 = str_replace('x', 'x', $nik14);
$nik14 = str_replace('y', 'ʎ', $nik14);
$nik14 = str_replace('z', 'z', $nik14);

$nik14 = str_replace('A', 'ɐ', $nik14);
$nik14 = str_replace('B', 'q', $nik14);
$nik14 = str_replace('C', 'ɔ', $nik14);
$nik14 = str_replace('D', 'p', $nik14);
$nik14 = str_replace('E', 'ǝ', $nik14);
$nik14 = str_replace('F', 'ɟ', $nik14);
$nik14 = str_replace('G', 'ƃ', $nik14);
$nik14 = str_replace('H', 'ɥ', $nik14);
$nik14 = str_replace('I', 'ı', $nik14);
$nik14 = str_replace('J', 'ſ', $nik14);
$nik14 = str_replace('K', 'ʞ', $nik14);
$nik14 = str_replace('L', 'ן', $nik14);
$nik14 = str_replace('M', 'ɯ', $nik14);
$nik14 = str_replace('N', 'u', $nik14);
$nik14 = str_replace('O', 'o', $nik14);
$nik14 = str_replace('P', 'd', $nik14);
$nik14 = str_replace('Q', 'b', $nik14);
$nik14 = str_replace('R', 'ɹ', $nik14);
$nik14 = str_replace('S', 's', $nik14);
$nik14 = str_replace('T', 'ʇ', $nik14);
$nik14 = str_replace('U', 'n', $nik14);
$nik14 = str_replace('V', 'ʌ', $nik14);
$nik14 = str_replace('W', 'ʍ', $nik14);
$nik14 = str_replace('X', 'x', $nik14);
$nik14 = str_replace('Y', 'ʎ', $nik14);
$nik14 = str_replace('Z', 'z', $nik14);


$nik15 = $text;
$nik15 = str_replace('a', 'Ā', $nik15);
$nik15 = str_replace('b', '乃', $nik15);
$nik15 = str_replace('c', 'Ċ', $nik15);
$nik15 = str_replace('d', 'Ɖ', $nik15);
$nik15 = str_replace('e', 'Ē', $nik15);
$nik15 = str_replace('f', '₣', $nik15);
$nik15 = str_replace('g', 'Ǥ', $nik15);
$nik15 = str_replace('h', 'Ħ', $nik15);
$nik15 = str_replace('i', 'Ī', $nik15);
$nik15 = str_replace('j', 'J', $nik15);
$nik15 = str_replace('k', '₭', $nik15);
$nik15 = str_replace('l', 'Ŀ', $nik15);
$nik15 = str_replace('m', 'M', $nik15);
$nik15 = str_replace('n', '₦', $nik15);
$nik15 = str_replace('o', 'Ō', $nik15);
$nik15 = str_replace('p', 'P', $nik15);
$nik15 = str_replace('q', 'Ǭ', $nik15);
$nik15 = str_replace('r', 'Ṝ', $nik15);
$nik15 = str_replace('s', 'Ƨ', $nik15);
$nik15 = str_replace('t', 'Ŧ', $nik15);
$nik15 = str_replace('u', 'Ū', $nik15);
$nik15 = str_replace('v', '∀', $nik15);
$nik15 = str_replace('w', 'ฬ', $nik15);
$nik15 = str_replace('x', 'Ж', $nik15);
$nik15 = str_replace('y', 'Ȳ', $nik15);
$nik15 = str_replace('z', 'Ƶ', $nik15);

$nik15 = str_replace('A', 'Ā', $nik15);
$nik15 = str_replace('B', '乃', $nik15);
$nik15 = str_replace('C', 'Ċ', $nik15);
$nik15 = str_replace('D', 'Ɖ', $nik15);
$nik15 = str_replace('E', 'Ē', $nik15);
$nik15 = str_replace('F', '₣', $nik15);
$nik15 = str_replace('G', 'Ǥ', $nik15);
$nik15 = str_replace('H', 'Ħ', $nik15);
$nik15 = str_replace('I', 'Ī', $nik15);
$nik15 = str_replace('J', 'J', $nik15);
$nik15 = str_replace('K', '₭', $nik15);
$nik15 = str_replace('L', 'Ŀ', $nik15);
$nik15 = str_replace('M', 'M', $nik15);
$nik15 = str_replace('N', '₦', $nik15);
$nik15 = str_replace('O', 'Ō', $nik15);
$nik15 = str_replace('P', 'P', $nik15);
$nik15 = str_replace('Q', 'Ǭ', $nik15);
$nik15 = str_replace('R', 'Ṝ', $nik15);
$nik15 = str_replace('S', 'Ƨ', $nik15);
$nik15 = str_replace('T', 'Ŧ', $nik15);
$nik15 = str_replace('U', 'Ū', $nik15);
$nik15 = str_replace('V', '∀', $nik15);
$nik15 = str_replace('W', 'ฬ', $nik15);
$nik15 = str_replace('X', 'Ж', $nik15);
$nik15 = str_replace('Y', 'Ȳ', $nik15);
$nik15 = str_replace('Z', 'Ƶ', $nik15);


$nik16 = $text;
$nik16 = str_replace('a', 'ᾋ', $nik16);
$nik16 = str_replace('b', 'ϐ', $nik16);
$nik16 = str_replace('c', 'Ƈ', $nik16);
$nik16 = str_replace('d', 'Ɖ', $nik16);
$nik16 = str_replace('e', 'Ἕ', $nik16);
$nik16 = str_replace('f', 'Ғ', $nik16);
$nik16 = str_replace('g', 'Ɠ', $nik16);
$nik16 = str_replace('h', 'Ἤ', $nik16);
$nik16 = str_replace('i', 'Ἷ', $nik16);
$nik16 = str_replace('j', 'Ј', $nik16);
$nik16 = str_replace('k', 'Ḱ', $nik16);
$nik16 = str_replace('l', 'Ŀ', $nik16);
$nik16 = str_replace('m', 'Ṃ', $nik16);
$nik16 = str_replace('n', 'Ɲ', $nik16);
$nik16 = str_replace('o', 'Ὃ', $nik16);
$nik16 = str_replace('p', 'Ƥ', $nik16);
$nik16 = str_replace('q', 'Q', $nik16);
$nik16 = str_replace('r', 'Ȓ', $nik16);
$nik16 = str_replace('s', 'Ṩ', $nik16);
$nik16 = str_replace('t', 'Ҭ', $nik16);
$nik16 = str_replace('u', 'Ȗ', $nik16);
$nik16 = str_replace('v', 'V', $nik16);
$nik16 = str_replace('w', 'Ẃ', $nik16);
$nik16 = str_replace('x', 'Ẋ', $nik16);
$nik16 = str_replace('y', 'Ὓ', $nik16);
$nik16 = str_replace('z', 'Ẕ', $nik16);

$nik16 = str_replace('A', 'ᾋ', $nik16);
$nik16 = str_replace('B', 'ϐ', $nik16);
$nik16 = str_replace('C', 'Ƈ', $nik16);
$nik16 = str_replace('D', 'Ɖ', $nik16);
$nik16 = str_replace('E', 'Ἕ', $nik16);
$nik16 = str_replace('F', 'Ғ', $nik16);
$nik16 = str_replace('G', 'Ɠ', $nik16);
$nik16 = str_replace('H', 'Ἤ', $nik16);
$nik16 = str_replace('I', 'Ἷ', $nik16);
$nik16 = str_replace('J', 'Ј', $nik16);
$nik16 = str_replace('K', 'Ḱ', $nik16);
$nik16 = str_replace('L', 'Ŀ', $nik16);
$nik16 = str_replace('M', 'Ṃ', $nik16);
$nik16 = str_replace('N', 'Ɲ', $nik16);
$nik16 = str_replace('O', 'Ὃ', $nik16);
$nik16 = str_replace('P', 'Ƥ', $nik16);
$nik16 = str_replace('Q', 'Q', $nik16);
$nik16 = str_replace('R', 'Ȓ', $nik16);
$nik16 = str_replace('S', 'Ṩ', $nik16);
$nik16 = str_replace('T', 'Ҭ', $nik16);
$nik16 = str_replace('U', 'Ȗ', $nik16);
$nik16 = str_replace('V', 'V', $nik16);
$nik16 = str_replace('W', 'Ẃ', $nik16);
$nik16 = str_replace('X', 'Ẋ', $nik16);
$nik16 = str_replace('Y', 'Ὓ', $nik16);
$nik16 = str_replace('Z', 'Ẕ', $nik16);


$nik17 = $text;
$nik17 = str_replace('a', 'მ', $nik17);
$nik17 = str_replace('b', 'ჩ', $nik17);
$nik17 = str_replace('c', 'ƈ', $nik17);
$nik17 = str_replace('d', 'ძ', $nik17);
$nik17 = str_replace('e', 'ε', $nik17);
$nik17 = str_replace('f', 'բ', $nik17);
$nik17 = str_replace('g', 'ց', $nik17);
$nik17 = str_replace('h', 'հ', $nik17);
$nik17 = str_replace('i', 'ἶ', $nik17);
$nik17 = str_replace('j', 'ʝ', $nik17);
$nik17 = str_replace('k', 'ƙ', $nik17);
$nik17 = str_replace('l', 'l', $nik17);
$nik17 = str_replace('m', 'ო', $nik17);
$nik17 = str_replace('n', 'ղ', $nik17);
$nik17 = str_replace('o', 'օ', $nik17);
$nik17 = str_replace('p', 'ր', $nik17);
$nik17 = str_replace('q', 'գ', $nik17);
$nik17 = str_replace('r', 'ɾ', $nik17);
$nik17 = str_replace('s', 'ʂ', $nik17);
$nik17 = str_replace('t', 'է', $nik17);
$nik17 = str_replace('u', 'մ', $nik17);
$nik17 = str_replace('v', 'ν', $nik17);
$nik17 = str_replace('w', 'ω', $nik17);
$nik17 = str_replace('x', 'ჯ', $nik17);
$nik17 = str_replace('y', 'ყ', $nik17);
$nik17 = str_replace('z', 'z', $nik17);

$nik17 = str_replace('A', 'მ', $nik17);
$nik17 = str_replace('B', 'ჩ', $nik17);
$nik17 = str_replace('C', 'ƈ', $nik17);
$nik17 = str_replace('D', 'ძ', $nik17);
$nik17 = str_replace('E', 'ε', $nik17);
$nik17 = str_replace('F', 'բ', $nik17);
$nik17 = str_replace('G', 'ց', $nik17);
$nik17 = str_replace('H', 'հ', $nik17);
$nik17 = str_replace('I', 'ἶ', $nik17);
$nik17 = str_replace('J', 'ʝ', $nik17);
$nik17 = str_replace('K', 'ƙ', $nik17);
$nik17 = str_replace('L', 'l', $nik17);
$nik17 = str_replace('M', 'ო', $nik17);
$nik17 = str_replace('N', 'ղ', $nik17);
$nik17 = str_replace('O', 'օ', $nik17);
$nik17 = str_replace('P', 'ր', $nik17);
$nik17 = str_replace('Q', 'գ', $nik17);
$nik17 = str_replace('R', 'ɾ', $nik17);
$nik17 = str_replace('S', 'ʂ', $nik17);
$nik17 = str_replace('T', 'է', $nik17);
$nik17 = str_replace('U', 'մ', $nik17);
$nik17 = str_replace('V', 'ν', $nik17);
$nik17 = str_replace('W', 'ω', $nik17);
$nik17 = str_replace('X', 'ჯ', $nik17);
$nik17 = str_replace('Y', 'ყ', $nik17);
$nik17 = str_replace('Z', 'z', $nik17);


$nik18 = $text;
$nik18 = str_replace('a', 'λ', $nik18);
$nik18 = str_replace('b', 'ß', $nik18);
$nik18 = str_replace('c', 'Ȼ', $nik18);
$nik18 = str_replace('d', 'ɖ', $nik18);
$nik18 = str_replace('e', 'ε', $nik18);
$nik18 = str_replace('f', 'ʃ', $nik18);
$nik18 = str_replace('g', 'Ģ', $nik18);
$nik18 = str_replace('h', 'ħ', $nik18);
$nik18 = str_replace('i', 'ί', $nik18);
$nik18 = str_replace('j', 'ĵ', $nik18);
$nik18 = str_replace('k', 'κ', $nik18);
$nik18 = str_replace('l', 'ι', $nik18);
$nik18 = str_replace('m', 'ɱ', $nik18);
$nik18 = str_replace('n', 'ɴ', $nik18);
$nik18 = str_replace('o', 'Θ', $nik18);
$nik18 = str_replace('p', 'ρ', $nik18);
$nik18 = str_replace('q', 'ƣ', $nik18);
$nik18 = str_replace('r', 'ર', $nik18);
$nik18 = str_replace('s', 'Ș', $nik18);
$nik18 = str_replace('t', 'τ', $nik18);
$nik18 = str_replace('u', 'Ʋ', $nik18);
$nik18 = str_replace('v', 'ν', $nik18);
$nik18 = str_replace('w', 'ώ', $nik18);
$nik18 = str_replace('x', 'Χ', $nik18);
$nik18 = str_replace('y', 'ϓ', $nik18);
$nik18 = str_replace('z', 'Հ', $nik18);

$nik18 = str_replace('A', 'λ', $nik18);
$nik18 = str_replace('B', 'ß', $nik18);
$nik18 = str_replace('C', 'Ȼ', $nik18);
$nik18 = str_replace('D', 'ɖ', $nik18);
$nik18 = str_replace('E', 'ε', $nik18);
$nik18 = str_replace('F', 'ʃ', $nik18);
$nik18 = str_replace('G', 'Ģ', $nik18);
$nik18 = str_replace('H', 'ħ', $nik18);
$nik18 = str_replace('I', 'ί', $nik18);
$nik18 = str_replace('J', 'ĵ', $nik18);
$nik18 = str_replace('K', 'κ', $nik18);
$nik18 = str_replace('L', 'ι', $nik18);
$nik18 = str_replace('M', 'ɱ', $nik18);
$nik18 = str_replace('N', 'ɴ', $nik18);
$nik18 = str_replace('O', 'Θ', $nik18);
$nik18 = str_replace('P', 'ρ', $nik18);
$nik18 = str_replace('Q', 'ƣ', $nik18);
$nik18 = str_replace('R', 'ર', $nik18);
$nik18 = str_replace('S', 'Ș', $nik18);
$nik18 = str_replace('T', 'τ', $nik18);
$nik18 = str_replace('U', 'Ʋ', $nik18);
$nik18 = str_replace('V', 'ν', $nik18);
$nik18 = str_replace('W', 'ώ', $nik18);
$nik18 = str_replace('X', 'Χ', $nik18);
$nik18 = str_replace('Y', 'ϓ', $nik18);
$nik18 = str_replace('Z', 'Հ', $nik18);


$nik19 = $text;
$nik19 = str_replace('a', '🅐', $nik19);
$nik19 = str_replace('b', '🅑', $nik19);
$nik19 = str_replace('c', '🅒', $nik19);
$nik19 = str_replace('d', '🅓', $nik19);
$nik19 = str_replace('e', '🅔', $nik19);
$nik19 = str_replace('f', '🅕', $nik19);
$nik19 = str_replace('g', '🅖', $nik19);
$nik19 = str_replace('h', '🅗', $nik19);
$nik19 = str_replace('i', '🅘', $nik19);
$nik19 = str_replace('j', '🅙', $nik19);
$nik19 = str_replace('k', '🅚', $nik19);
$nik19 = str_replace('l', '🅛', $nik19);
$nik19 = str_replace('m', '🅜', $nik19);
$nik19 = str_replace('n', '🅝', $nik19);
$nik19 = str_replace('o', '🅞', $nik19);
$nik19 = str_replace('p', '🅟', $nik19);
$nik19 = str_replace('q', '🅠', $nik19);
$nik19 = str_replace('r', '🅡', $nik19);
$nik19 = str_replace('s', '🅢', $nik19);
$nik19 = str_replace('t', '🅣', $nik19);
$nik19 = str_replace('u', '🅤', $nik19);
$nik19 = str_replace('v', '🅥', $nik19);
$nik19 = str_replace('w', '🅦', $nik19);
$nik19 = str_replace('x', '🅧', $nik19);
$nik19 = str_replace('y', '🅨', $nik19);
$nik19 = str_replace('z', '🅩', $nik19);

$nik19 = str_replace('A', '🅐', $nik19);
$nik19 = str_replace('B', '🅑', $nik19);
$nik19 = str_replace('C', '🅒', $nik19);
$nik19 = str_replace('D', '🅓', $nik19);
$nik19 = str_replace('E', '🅔', $nik19);
$nik19 = str_replace('F', '🅕', $nik19);
$nik19 = str_replace('G', '🅖', $nik19);
$nik19 = str_replace('H', '🅗', $nik19);
$nik19 = str_replace('I', '🅘', $nik19);
$nik19 = str_replace('J', '🅙', $nik19);
$nik19 = str_replace('K', '🅚', $nik19);
$nik19 = str_replace('L', '🅛', $nik19);
$nik19 = str_replace('M', '🅜', $nik19);
$nik19 = str_replace('N', '🅝', $nik19);
$nik19 = str_replace('O', '🅞', $nik19);
$nik19 = str_replace('P', '🅟', $nik19);
$nik19 = str_replace('Q', '🅠', $nik19);
$nik19 = str_replace('R', '🅡', $nik19);
$nik19 = str_replace('S', '🅢', $nik19);
$nik19 = str_replace('T', '🅣', $nik19);
$nik19 = str_replace('U', '🅤', $nik19);
$nik19 = str_replace('V', '🅥', $nik19);
$nik19 = str_replace('W', '🅦', $nik19);
$nik19 = str_replace('X', '🅧', $nik19);
$nik19 = str_replace('Y', '🅨', $nik19);
$nik19 = str_replace('Z', '🅩', $nik19);


$nik20 = $text;
$nik20 = str_replace('a', '۰۪۫A۪۫۰', $nik20);
$nik20 = str_replace('b', '۰۪۫B۪۫۰', $nik20);
$nik20 = str_replace('c', '۰۪۫C۪۫۰', $nik20);
$nik20 = str_replace('d', '۰۪۫D۪۫۰', $nik20);
$nik20 = str_replace('e', '۰۪۫E۪۫۰', $nik20);
$nik20 = str_replace('f', '۰۪۫F۪۫۰', $nik20);
$nik20 = str_replace('g', '۰۪۫G۪۫۰', $nik20);
$nik20 = str_replace('h', '۰۪۫H۪۫۰', $nik20);
$nik20 = str_replace('i', '۰۪۫I۪۫۰', $nik20);
$nik20 = str_replace('j', '۰۪۫J۪۫۰', $nik20);
$nik20 = str_replace('k', '۰۪۫K۪۫۰', $nik20);
$nik20 = str_replace('l', '۰۪۫L۪۫۰', $nik20);
$nik20 = str_replace('m', '۰۪۫M۪۫۰', $nik20);
$nik20 = str_replace('n', '۰۪۫N۪۫۰', $nik20);
$nik20 = str_replace('o', '۰۪۫O۪۫۰', $nik20);
$nik20 = str_replace('p', '۰۪۫P۪۫۰', $nik20);
$nik20 = str_replace('q', '۰۪۫Q۪۫۰', $nik20);
$nik20 = str_replace('r', '۰۪۫R۪۫۰', $nik20);
$nik20 = str_replace('s', '۰۪۫S۪۫۰', $nik20);
$nik20 = str_replace('t', '۰۪۫T۪۫۰', $nik20);
$nik20 = str_replace('u', '۰۪۫U۪۫۰', $nik20);
$nik20 = str_replace('v', '۰۪۫V۪۫۰', $nik20);
$nik20 = str_replace('w', '۰۪۫W۪۫۰', $nik20);
$nik20 = str_replace('x', '۰۪۫X۪۫۰', $nik20);
$nik20 = str_replace('y', '۰۪۫Y۪۫۰', $nik20);
$nik20 = str_replace('z', '۰۪۫Z۪۫۰', $nik20);
$nik20 = str_replace('A', '۰۪۫A۪۫۰', $nik20);
$nik20 = str_replace('B', '۰۪۫B۪۫۰', $nik20);
$nik20 = str_replace('C', '۰۪۫C۪۫۰', $nik20);
$nik20 = str_replace('D', '۰۪۫D۪۫۰', $nik20);
$nik20 = str_replace('E', '۰۪۫E۪۫۰', $nik20);
$nik20 = str_replace('F', '۰۪۫F۪۫۰', $nik20);
$nik20 = str_replace('G', '۰۪۫G۪۫۰', $nik20);
$nik20 = str_replace('H', '۰۪۫H۪۫۰', $nik20);
$nik20 = str_replace('I', '۰۪۫I۪۫۰', $nik20);
$nik20 = str_replace('J', '۰۪۫J۪۫۰', $nik20);
$nik20 = str_replace('K', '۰۪۫K۪۫۰', $nik20);
$nik20 = str_replace('L', '۰۪۫L۪۫۰', $nik20);
$nik20 = str_replace('M', '۰۪۫M۪۫۰', $nik20);
$nik20 = str_replace('N', '۰۪۫N۪۫۰', $nik20);
$nik20 = str_replace('O', '۰۪۫O۪۫۰', $nik20);
$nik20 = str_replace('P', '۰۪۫P۪۫۰', $nik20);
$nik20 = str_replace('Q', '۰۪۫Q۪۫۰', $nik20);
$nik20 = str_replace('R', '۰۪۫R۪۫۰', $nik20);
$nik20 = str_replace('S', '۰۪۫S۪۫۰', $nik20);
$nik20 = str_replace('T', '۰۪۫T۪۫۰', $nik20);
$nik20 = str_replace('U', '۰۪۫U۪۫۰', $nik20);
$nik20 = str_replace('V', '۰۪۫V۪۫۰', $nik20);
$nik20 = str_replace('W', '۰۪۫W۪۫۰', $nik20);
$nik20 = str_replace('X', '۰۪۫X۪۫۰', $nik20);
$nik20 = str_replace('Y', '۰۪۫Y۪۫۰', $nik20);
$nik20 = str_replace('Z', '۰۪۫Z۪۫۰', $nik20);

file_put_contents("Bot/$cid.ism34","$nik34"); 
file_put_contents("Bot/$cid.ism33","$nik33"); 
file_put_contents("Bot/$cid.ism32","$nik32"); 
file_put_contents("Bot/$cid.ism31","$nik31"); 
file_put_contents("Bot/$cid.ism30","$nik30"); 
file_put_contents("Bot/$cid.ism29","$nik29"); 
file_put_contents("Bot/$cid.ism28","$nik28"); 
file_put_contents("Bot/$cid.ism27","$nik27"); 
file_put_contents("Bot/$cid.ism26","$nik26"); 
file_put_contents("Bot/$cid.ism25","$nik25"); 
file_put_contents("Bot/$cid.ism24","$nik24"); 
file_put_contents("Bot/$cid.ism23","$nik23"); 
file_put_contents("Bot/$cid.ism22","$nik22"); 
file_put_contents("Bot/$cid.ism21","$nik21"); 
file_put_contents("Bot/$cid.ism20","$nik20"); 
file_put_contents("Bot/$cid.ism19","$nik19"); 
file_put_contents("Bot/$cid.ism18","$nik18"); 
file_put_contents("Bot/$cid.ism17","$nik17"); 
file_put_contents("Bot/$cid.ism16","$nik16"); 
file_put_contents("Bot/$cid.ism15","$nik15"); 
file_put_contents("Bot/$cid.ism14","$nik14"); 
file_put_contents("Bot/$cid.ism13","$nik13"); 
file_put_contents("Bot/$cid.ism12","$nik12"); 
file_put_contents("Bot/$cid.ism11","$nik11"); 
file_put_contents("Bot/$cid.ism10","$nik10"); 
file_put_contents("Bot/$cid.ism9","$nik9"); 
file_put_contents("Bot/$cid.ism8","$nik8"); 
file_put_contents("Bot/$cid.ism7","$nik7"); 
file_put_contents("Bot/$cid.ism6","$nik6"); 
file_put_contents("Bot/$cid.ism5","$nik5"); 
file_put_contents("Bot/$cid.ism4","$nik4"); 
file_put_contents("Bot/$cid.ism3","$nik3"); 
file_put_contents("Bot/$cid.ism2","$nik1"); 
file_put_contents("Bot/$cid.ism","$nik2"); 
file_put_contents("Bot/$cid.step","");

bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nik1\n\nNusxalash uchun bosing: <code>$nik1</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"no"],['text'=>"1/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik2"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}
}
}

if($data == "no"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "Ushbu tugma o`zgarmaydi",
       'show_alert'=>false,
        ]);
    }

if($data=="nik1"){
	$nikim1=file_get_contents("Bot/$callcid.ism2"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim1\n\nNusxalash uchun bosing: <code>$nikim1</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"no"],['text'=>"1/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik2"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik2"){
	$nikim2=file_get_contents("Bot/$callcid.ism"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim2\n\nNusxalash uchun bosing: <code>$3 nikim2</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik1"],['text'=>"2/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik3"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}     

if($data=="nik3"){
	$nikim3=file_get_contents("Bot/$callcid.ism3"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim3\n\nNusxalash uchun bosing: <code>$nikim3</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik2"],['text'=>"3/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik4"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik4"){
	$nikim4=file_get_contents("Bot/$callcid.ism4"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim4\n\nNusxalash uchun bosing: <code>$nikim4</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik3"],['text'=>"4/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik5"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik5"){
	$nikim5=file_get_contents("Bot/$callcid.ism5"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim5\n\nNusxalash uchun bosing: <code>$nikim5</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik4"],['text'=>"5/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik6"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik6"){
	$nikim6=file_get_contents("Bot/$callcid.ism6"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim6\n\nNusxalash uchun bosing: <code>$nikim6</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik5"],['text'=>"6/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik7"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik7"){
	$nikim7=file_get_contents("Bot/$callcid.ism7"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim7\n\nNusxalash uchun bosing: <code>$nikim7</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik6"],['text'=>"7/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik8"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik8"){
	$nikim8=file_get_contents("Bot/$callcid.ism8"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim8\n\nNusxalash uchun bosing: <code>$nikim8</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik7"],['text'=>"8/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik9"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik9"){
	$nikim9=file_get_contents("Bot/$callcid.ism9"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim9\n\nNusxalash uchun bosing: <code>$nikim9</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik8"],['text'=>"9/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik10"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik10"){
	$nikim10=file_get_contents("Bot/$callcid.ism10"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim10\n\nNusxalash uchun bosing: <code>$nikim10</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik9"],['text'=>"10/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik11"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}


if($data=="nik11"){
	$nikim11=file_get_contents("Bot/$callcid.ism11"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim11\n\nNusxalash uchun bosing: <code>$nikim11</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik10"],['text'=>"11/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik12"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik12"){
	$nikim12=file_get_contents("Bot/$callcid.ism12"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim12\n\nNusxalash uchun bosing: <code>$nikim12</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik11"],['text'=>"12/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik13"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik13"){
	$nikim13=file_get_contents("Bot/$callcid.ism13"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim13\n\nNusxalash uchun bosing: <code>$nikim13</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik12"],['text'=>"13/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik14"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik14"){
	$nikim14=file_get_contents("Bot/$callcid.ism14"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim14\n\nNusxalash uchun bosing: <code>$nikim14</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik13"],['text'=>"14/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik15"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik15"){
	$nikim15=file_get_contents("Bot/$callcid.ism15"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim15\n\nNusxalash uchun bosing: <code>$nikim15</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik14"],['text'=>"15/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik16"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik16"){
	$nikim16=file_get_contents("Bot/$callcid.ism16"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim16\n\nNusxalash uchun bosing: <code>$nikim16</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik15"],['text'=>"16/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik17"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik17"){
	$nikim17=file_get_contents("Bot/$callcid.ism17"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim17\n\nNusxalash uchun bosing: <code>$nikim17</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik16"],['text'=>"17/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik18"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik18"){
	$nikim18=file_get_contents("Bot/$callcid.ism18"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim18\n\nNusxalash uchun bosing: <code>$nikim18</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik17"],['text'=>"18/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik19"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik19"){
	$nikim19=file_get_contents("Bot/$callcid.ism19"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim19\n\nNusxalash uchun bosing: <code>$nikim19</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik18"],['text'=>"19/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"nik20"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if($data=="nik20"){
	$nikim20=file_get_contents("Bot/$callcid.ism20"); 
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"<b><u><a href='tg://user?id=$uid'>$name</a></u>\n\n<i>Sizning nikingiz tayyor boʻldi!!</i>\n\nSizning nikingiz: $nikim20\n\nNusxalash uchun bosing: <code>$nikim20</code></b>",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"⬅️Avvalgi",'callback_data'=>"nik19"],['text'=>"20/20",'callback_data'=>"noo"],['text'=>"Keyingi➡️",'callback_data'=>"no"]],
[['text'=>"🗑️Bosh Menu",'callback_data'=>"qiziq"]],
]
]),
]);
}

if ($data == "covid"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"*Assalomu alaykum siz O'zbekistondagi 😷Koronavirus ni bilmoqchimisiz unda siz saytga kirib bilib olishingiz mumkin..*

[😷COVID-19](https://coronavirus.uz/uz) ",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"🔙Orqaga",'callback_data'=>"qiziq"]]
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

⏱️ Soat: $soat",
   'show_alert'=>true,
   'parse_mode'=>'html',
 'reply_to_message_id'=> $mid,
]);
}

if ($data == "dost"){
bot ('EditMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*🚀Universal Bolim buyruqlari*
➖➖➖➖➖➖➖➖➖➖➖
*/ism va ism* - Ismingiz ma'nosini aytib beraman
➖➖➖➖➖➖➖➖➖➖➖
*/logo1 ........ /logo86* - Ko'plab LOGOlar yasayman
Masalan: */logo35 Sirojiddin*
➖➖➖➖➖➖➖➖➖➖➖
*/url va matn* - Share ssilka tayyorlash
➖➖➖➖➖➖➖➖➖➖➖
*/getpro va raqam* - Belgilangan raqamdagi profilingiz rasmini olib beradi 
➖➖➖➖➖➖➖➖➖➖➖
*/rasm va matn* - Siz izlaga rasmni jonatadi
➖➖➖➖➖➖➖➖➖➖➖
*/keep va matn* - rasmga habar yozish.
➖➖➖➖➖➖➖➖➖➖➖
*/love va matn* - Yurakchaga habar yozish.
➖➖➖➖➖➖➖➖➖➖➖
*/QR va matn* - QR kod tayyorlash.
➖➖➖➖➖➖➖➖➖➖➖
*/screen va sayt * - Saytni rasmga olib yuboradi
➖➖➖➖➖➖➖➖➖➖➖
*/mark va matn* - Matnni markdown rejimiga o'zgartirish
➖➖➖➖➖➖➖➖➖➖➖
*/sms ID HABARINGIZ* - ID ostidagi foydalanuvchiga Habar jo'natish va foydalanuvchi ustiga bossangiz akauntga kirasiz.
➖➖➖➖➖➖➖➖➖➖➖
*/test va matn* - sevgan insoningiz bilan o‘rtangizdagi sevgini aniqlab beradi.

Namuna : */test muhammad nargiza*
➖➖➖➖➖➖➖➖➖➖➖
*/kurs* - Valyuta kursini aniqlab beradi.
➖➖➖➖➖➖➖➖➖➖➖
*/musiqa va matn* - kerakli musiqani topib beradi.
➖➖➖➖➖➖➖➖➖➖➖
*/sana* - O‘zbekiston sanasini ko‘rsatadi.
➖➖➖➖➖➖➖➖➖➖➖
*/soat* - O‘zbekiston soatini ko‘rsatadi.
➖➖➖➖➖➖➖➖➖➖➖
*/id* - ID raqamingizni ko‘rsatadi.
➖➖➖➖➖➖➖➖➖➖➖
*/gid* - Guruh ID Raqamini ko‘rsatadi.
➖➖➖➖➖➖➖➖➖➖➖
*/html va matn* - Matnni html rejimiga o'tkazish
➖➖➖➖➖➖➖➖➖➖➖
*/ovoz va matn* - Yozuvingizni ovoz shaklida taylab beradi.
➖➖➖➖➖➖➖➖➖➖➖
*/status* - 1000ta statusdan birini tashlab beradi
➖➖➖➖➖➖➖➖➖➖➖
*/ru va matn* - Matnni rus tiliga tarjima qilish
➖➖➖➖➖➖➖➖➖➖➖
*/en va matn* - Matnni ingliz tiliga tarjima qilish
➖➖➖➖➖➖➖➖➖➖➖
*/uz va matn* - Matnni uzbek tiliga tarjima qilish
➖➖➖➖➖➖➖➖➖➖➖
Bot matematik amallarni ham bajara oladi namuna: 2+2

*Dasturchi Admin:* [@JAMSHID3164] ",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"🔙Orqaga Qaytish",'callback_data'=>"bolim"]]
]
]),
]);
}

if ($data == "messenge"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"*🕹Messenger Bolimiga Xush Kelibsiz Bemalol bu bo‘limdan foydalanishingiz mumkin.*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"🔴Instagram",'callback_data'=>"instagram"],['text'=>"🔵Telegram",'callback_data'=>"Telegram"]],[['text'=>"⚫TikTok",'callback_data'=>"tiktok"],['text'=>"🔴Likee",'callback_data'=>"Like"]],[['text'=>"🔴YouTube",'callback_data'=>"youtube"],['text'=>"🔙Orqaga",'callback_data'=>"back"]]
]
]),
]);
}  

if ($data == "instagram"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"*🔴instagram Bolimiga Xush Kelibsiz.*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"📲Instagram apk",'url'=>"https://play.google.com/store/apps/details?id=com.instagram.android"],['text'=>"🔴instagram follow",'url'=>"https://play.google.com/store/apps/details?id=get.instagram.followers.unfollowers"]],[['text'=>"🔙Orqaga",'callback_data'=>"game"]]
]
]),
]);
}

if ($data == "Telegram"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"*🔵Telegram Bolimiga Xush Kelibsiz.*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"📲Telegram Apk",'url'=>"https://play.google.com/store/apps/details?id=org.telegram.messenger"],['text'=>"🔵Telegram Nak",'url'=>"https://play.google.com/store/apps/details?id=gram.members.android"]],[['text'=>"🔙Orqaga",'callback_data'=>"game"]]
]
]),
]);
}

if ($data == "tiktok"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"*⚫TikTok Bolimiga Xush Kelibsiz.*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"📲Tiktok apk",'url'=>"https://play.google.com/store/apps/details?id=com.zhiliaoapp.musically"],['text'=>"📥TikTok Downloader",'url'=>"https://play.google.com/store/apps/details?id=com.smartapps.videodownloaderfortiktok"]],[['text'=>"⚫TikTok Follow",'url'=>"https://play.google.com/store/apps/details?id=com.tik.tok.tiktok.follower.fans.fan.like.analysis.app"],['text'=>"🔙Orqaga",'callback_data'=>"game"]]
]
]),
]);
}

if ($data == "Like"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"*🔴Likee Bolimiga Xush Kelibsiz.*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"📲Likee apk",'url'=>"https://play.google.com/store/apps/details?id=video.like"],['text'=>"📥Likee Downloader",'url'=>"https://play.google.com/store/apps/details?id=like.likee"]],[['text'=>"🔴Likee Follow",'url'=>"https://play.google.com/store/apps/details?id=com.aadevelopers.likee"],['text'=>"🔙Orqaga",'callback_data'=>"game"]]
]
]),
]);
}

if ($data == "youtube"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"*🔴Youtube Bolimiga Xush Kelibsiz.*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"📲YouTube apk",'url'=>"https://play.google.com/store/apps/details?id=com.google.android.youtube"],['text'=>"📥Youtube Downloader",'url'=>"https://play.google.com/store/apps/details?id=video.downloader.videodownloader"]],[['text'=>"🔴Youtube Nakrutka",'url'=>"https://play.google.com/store/apps/details?id=cptstudio.sub4sub"],['text'=>"🔙Orqaga",'callback_data'=>"game"]]
]
]),
]);
}

if ($data == "admin2"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"*
☺️ Bizning loyihalarimiz sal bo'lsada sizning yuzingizga tabasum olib kelsa juda ham hursand bo'lardik!
➖➖➖➖➖➖
📈 Bizdan uzoqlash mang bu xali boshlanishi tez orada yana yangi qaynoq yangiliklar siz azizlarga taqdim etamiz.*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"👨🏻‍💻Admin",'url'=>"t.me/JAMSHID3164"],['text'=>"🚀Spamlar",'url'=>"t.me/JAMSHID3164"]],[['text'=>"🔙Orqaga qaytish",'callback_data'=>"back"]]
]
]),
]);
}

if ($data == "botlar"){
bot  ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=> $message_id2,
'text'=>"🇺🇿Assalomu alaykum aziz yurtdoshlar sizga telegram bot kerakmi unda manzilda adashmadingiz biz sizga sifatli va ishonarli bot yasab beramiz botingiz har kuni ishlaydi.

🤖𝖸𝖺𝗌𝖺𝗒𝖽𝗂𝗀𝖺𝗇 𝖡𝗈𝗍𝗅𝖺𝗋𝗂𝗆𝗂𝗓👇
 
➪ 𝖰𝗈𝗋𝗈𝗏𝗎𝗅 𝖡𝗈𝗍
➪ 𝖫𝗂𝗄𝖾 𝖡𝗈𝗍
➪ 𝖴𝗓𝗆𝗈𝖻𝗂𝗅𝖾 𝗎𝗌𝗌𝖽 𝖡𝗈𝗍
➪ 𝖵𝗂𝗉 𝖫𝗂𝗄𝖾 𝖡𝗈𝗍
➪ 𝖨𝗌𝗆𝗀𝖺 𝗋𝗂𝗇𝗀𝗍𝗈𝗇𝗀 𝖡𝗈𝗍
➪ 𝖶𝖾𝖻𝗁𝗈𝗌𝗍𝗂𝗇𝗀 𝖡𝗈𝗍
➪ 𝖬𝖾𝗆𝖻𝖾𝗋𝗀𝗋𝖺𝗆 𝖡𝗈𝗍
➪ 𝖲𝗎𝗑𝖻𝖺𝗍𝖽𝗈𝗌𝗁 𝖡𝗈𝗍
➪ 𝖲𝗈'𝗓 𝗒𝗈𝖽𝗅𝖺𝗒𝖽𝗂𝗀𝖺𝗇 𝖡𝗈𝗍
➪ 𝖯𝖺𝗒𝗇𝖾𝗍 𝖡𝗈𝗍
➪ 𝖮𝗅𝖽𝗂 𝖲𝗈𝗍𝖽𝗂 𝖡𝗈𝗍
➪ 𝖫𝗂𝖼𝗁𝗄𝖺 𝖡𝗈𝗍
➪ 𝖭𝗂𝗄 𝗒𝖺𝗌𝗈𝗏𝖼𝗁𝗂 𝖡𝗈𝗍
➪ 𝖬𝖾𝗀𝖺 𝖲𝗁𝖺𝗋𝖾 𝖡𝗈𝗍
➪ 𝖬𝖺𝗃𝖻𝗎𝗋 𝖡𝗈𝗍
➪ 𝖷/𝖮 𝖦𝖺𝗆𝖾 𝖡𝗈𝗍
➪ 𝖯𝗈𝗌𝗍𝖡𝗈𝗍
➪ 𝖯𝗌𝗂𝗑𝗈𝗅𝗈𝗀 𝖡𝗈𝗍
➪ 𝖬𝗉3 𝖤𝖽𝗂𝗍𝗈𝗋 𝖡𝗈𝗍

  𑁍𝖵𝖺 𝖧𝗈𝗄𝗈𝗓𝗈•••𑁍

Bot yasashning Boshlang‘ich To'lov Narhlari👇

▶️𝖢𝗅𝗂𝖢𝖪 𝖪𝖺𝗋𝗍𝖺 - 20 000 𝗌𝗈'𝗆
▶️𝖴𝖹𝖬𝖮𝖡𝖨𝖫𝖤 𝖯𝖾𝗋𝖾𝗐𝗈𝖽 - 3GB
▶️𝖰𝗂𝖶𝖤 𝖪𝖺𝗋𝗍𝖺 - 150 𝖱𝗎𝖻𝗅
▶️𝖯𝖠𝖸𝖭𝖤𝖳- 24 990 𝗌𝗈'𝗆

Hozirda 30% chegirmamiz bor shoshiling tezroq yasab olinglar.

➖➖➖➖➖➖➖➖➖➖➖

@ADVAKAT_PROBOT yasab beraman narhi lichkada to‘lov faqat click orqali amalga oshiriladi.
Shoshiling arzon narxlarda.",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
[['text'=>"👨🏻‍💻Admin",'url'=>"t.me/ADVAKAT_PROBOT"],['text'=>"🚀Spamlar",'url'=>"t.me/JAMSHID3164"]],[['text'=>"🔙Orqaga",'callback_data'=>"back"]]
]
]),
]);
}  

if($data=="Yangilogo"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,      
      'text'=>"🏝Ozingizga yoqgan Logotip bolimini Tanlang",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
[['text'=>'⚽Sport logotip', 'callback_data' => "superl"],['text'=>'🌀QR Cod', 'callback_data' => "QcKod"]],
  [['text'=>'🔥Epic logotip', 'callback_data' => "epic"],['text'=>'🎻Music logotip', 'callback_data' => "mysos"]],
    [['text'=>'✨Erkak & Ayol', 'callback_data' => "ErkakAyol"],['text'=>'🔆Crazy logotip', 'callback_data' => "Quyoshhs"]],
      [['text'=>'🚗Moshin logotip', 'callback_data' => "Moshinaa"],['text'=>'🎤DJ logotip', 'callback_data' => "djlogo"]],
        [['text'=>'🎉Best logotip', 'callback_data' => "bestLogo"],['text'=>'🔙Orqaga', 'callback_data' => "qiziq"]]
]
]),
]);
}

if($data=="epic"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Epic logotiplar yasaw uchun comandalarni yozing
epic1 va text
epic2 va text
epic3 va text
epic4 va text
epic5 va text
epic6 va text
epic7 va text
epic8 va text
epic9 vatext
epicX va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 🔙Orqaga ', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="djlogo"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "DJ logotiplar yasaw uchun comandalarni yozing
dj1 va text
dj2 va text
dj3 va text
dj4 va text
dj5 va text
dj6 va text
dj7 va text
dj8 va text
dj9 vatext
djX va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 🔙Orqaga ', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="Moshinaa"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Moshin logotiplar yasaw uchun comandalarni yozing
tach1 va text
tach2 va text
tach3 va text
tach4 va text
tach5 va text
tach6 va text
tach7 va text
tach8 va text
tach9 vatext
tachX va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 🔙Orqaga ', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="bestLogo"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Bayram logotiplar yasaw uchun comandalarni yozing
rok va text
idea va text
cars2 va text
cars1 va text
moto va text
game1 va text
game2 va text
st1 va text
st2 va text
para va text
btf va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 🔙Orqaga ', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="Quyoshhs"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Crazy logotiplar yasaw uchun comandalarni yozing
crazy1 va text
crazy2 va text
crazy3 va text
crazy4 va text
crazy5 va text
crazy6 va text
crazy7 va text
crazy8 va text
crazy9 vatext
crazyX va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 🔙Orqaga ', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="ErkakAyol"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Bayramlar  logolar  yasaw uchun comandalarni yozing
girl1 va text
8martch va text
girl2 va text
girl3 va text
girl4 va text 
men1 va text
men2 va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'🔙Orqaga ', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="mysos"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Musics logotiplar yasaw uchun comandalarni yozing
msc1 va text
msc2 va text
msc3 va text
msc4 va text
msc5 va text
msc6 va text
msc7 va text
msc8 va text
msc9 va text
mscX va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 🔙Orqaga ', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="superl"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Sport logotiplar yasaw uchun comandalarni yozing
sport1 va text
sport2 va text
sport3 va text
sport4 va text
sport5 va text
sport6 va text
sport7 va text
sport8 va text
sport9 vatext
sportX va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 🔙Orqaga ', 'callback_data' => "Yangilogo"]],
]
]),
]);
}

if($data=="QcKod"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "Siz ozingiz QR code yasawingiz mumkin
QR va text",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>' 🔙Orqaga ', 'callback_data' => "Yangilogo"]],
]
]),
]);
}


if(mb_stripos($text1,"sport1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/4b4b23e4-f3d3-42b1-9c5d-615ac62ef5ac/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @$botim
You write $ex[1]",
]);
} 
if(mb_stripos($text1,"sport2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/08e30364-b0cf-48df-80f2-964bfe5547e4/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sport3") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2aeefb25-2d78-4058-8cc7-74e2b4083e50/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sport4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/fc3c8bc5-a48c-47f0-b034-b258b3abce68/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sport5") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/79ff2b19-667e-43c4-9164-332330dc6f1b/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sport6") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e33c12b4-1128-4129-b31f-2c31cb0878c7/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"st1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/d1d5e766-8cd8-424f-aa4d-fbc07908a8d2/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
} 
if(mb_stripos($text1,"st2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/99e9e246-fca4-4fbb-a7b2-a2ff497d85b3/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"QR") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://qr-code.ir/api/qr-code?s=5&e=M&t=P&d=$ex[1] ",
'caption'=>"QR CODE by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"para") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/fa5b9460-2773-4c4d-a3d6-1f733bc42dba/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"test4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://away-dev.000webhostapp.com/api/api.php?type=356&text1=$ex[1]&text2=dhurgham ",
'caption'=>"Epic logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sport7") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/bd00f834-d5f9-475a-ad48-0c6126f077c6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sport8") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/1b1869b4-e487-474b-b0e3-7f3bf8194194/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sport9") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/48125ab7-a743-4f54-8da8-b2c6230e710f/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Sport logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}

if(mb_stripos($text1,"crazy1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2a23b1f8-1793-46ee-993b-d6c83b8df0dd/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/87ea7fe8-4e10-4819-8814-60d63ce8f9b8/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy3") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/f8d2306a-8987-40a0-9de8-d448a6f2b048/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/5e47943d-4857-474d-b7ca-009652b9e52d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy5") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/55829798-84dd-428f-871f-0a83955e2d49/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy6") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ef89e50c-2d4e-42da-a6bb-90af099b66fa/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy7") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ab03a446-9f79-4278-aebf-141d6baa5e79/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy8") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/bf0b8391-41e4-4f60-ace9-a18a114306e1/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazy9") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/cddaf4c3-5ab9-4957-9da0-437cd56d7a6c/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"crazyX") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/297c288d-4c21-4f1d-958b-e617feaef9be/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Crazy logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2368b276-9678-4611-8d9f-232f858ffc5a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/95e81a44-d412-49cf-a492-bf9530c0bcf2/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc3") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ea44541f-995f-4525-89d4-17739b855a2e/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/1bfbead8-fd97-43f7-8e10-020578e6c349/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc5") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/85c09ff0-40bb-40c3-8c0c-802cc19a2297/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc6") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2a97a62b-9851-42c0-96c8-8afe40f57e0a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc7") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b43f1777-660c-482c-bacd-2e1642baf003/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc8") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/11a70f98-24bf-41ff-8470-b9b096af31dd/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"msc9") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ae3a80f0-5fd7-4fe6-bde8-a1ae017e33c1/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"mscX") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/f05edb5b-c016-4d31-955f-73a3e082e1c2/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Music logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/8d70e3bd-71b3-46e0-9dc8-7dfe3389e7e5/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/72b97da3-2e87-4e4b-889d-04c8711e805d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic3") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/0b55f069-103e-459b-bd33-6dbdfc7ca811/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/93857f38-1788-47e3-9560-0220b88ac94e/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic5") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b1c634dd-aacc-4190-986c-7ace14ed3ec6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic6") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e18e8c65-b2aa-49e6-8a07-ef2464ff25ae/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic7") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e0e7aaf6-f3e6-457f-99ed-dc3487e29912/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic8") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/23eaaf26-a0f8-41f4-9ef5-468dc8b5bde3/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @Nazoratchi_ASBot
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epic9") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/45218131-8405-40a4-bb04-24d1710eff0d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"epicX") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b6d2d7ef-e4cb-44cd-9979-12068b09ec47/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Epic logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"rok") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/4a2ea46d-5501-48a5-9d8d-8110f9420b85/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"sp") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2de6d448-afc7-425a-b51f-903fb0bc9340/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"sport logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"game1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b54cb74a-f0c5-4071-934b-019257430e4b/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"game logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"game2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/a9a8ca01-e658-4339-917d-0010ddeaa0b6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"game logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"men1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/163f89d3-60a5-40ac-9325-0299844d5d67/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"men logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"men2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/983dc163-be5a-406d-848e-9cc4e2b60109/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"men logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"girl1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://away-dev.000webhostapp.com/api/api.php?type=372&text1=$ex[1]&text2=dhurgham ",
'caption'=>"girl logotip by @ADVAKAT_PROBOT 
You write $ex[1]",
]);
}
if(mb_stripos($text1,"girl2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/8d3db074-52eb-4888-8a35-f683ec1cef0f/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"girl logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"girl3") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/9988e891-579c-47f5-bfaf-959c3a2d8e25/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"girl logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"girl4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/dff12af1-28d3-4645-aba0-b209b6ee8ed7/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"girl logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text1,"idea") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/2085a114-720f-4f81-bfeb-778ea5ac2052/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Fest logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"cars1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/1d774b95-f479-4380-a92b-51fe4c821129/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Fest logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"8martch") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/fbff98fe-0132-4346-aa2b-af4488ebb4fd/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Fest logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"cars2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/b3236a76-dc4b-4605-a7a3-6649fb2da488/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"moto") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/45c72bf1-5935-4eee-a65e-e8dd850e37b8/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"moto logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"btf") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/a3defcce-fb2e-4a44-b654-4e3246141f94/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Best logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/707a772e-87ac-4225-be00-5715df731443/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/be26c778-4cbd-4a14-b8b1-4b8b1fe07952/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach3") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/4e78e518-91c8-40ea-bbc9-eba385c6d796/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/28ebcaf7-2371-43e9-8e1a-da980a834b1a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach5") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/0a676c20-7b98-4bea-8652-dc0ad06f6c54/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach6") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/0d556a87-9ade-426a-b60a-e7575aa3edeb/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach7") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/e05bef29-964a-4a57-b6c2-128266b9c2c3/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach8") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/5223e7c6-3cc7-41b2-bb43-9ca4fc8b2d99/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tach9") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/7d1a812d-9e8b-4451-a38c-d384ab1ed98e/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"tachX") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/127564ac-8114-43ce-9686-2f6befb8b14a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"Cars logotip by @ADVAKAT_PROBOT
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj1") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/9bd9f7b0-971d-460b-9f35-b30091cc32f6/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj2") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/dde89710-82d1-4d2a-8752-42bebc9b9a05/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj3") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/7229c0d6-cc4f-4e47-87b2-3b01285f502d/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj4") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ad38bcc8-b76b-483c-88cb-41af5218d9ac/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj5") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/3f607d24-e269-4fd0-8ad1-34d315a51558/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj6") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/5275891b-6017-49a1-86cf-def79699e926/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj7") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/27a7162f-f00f-4d64-82aa-d77561298f14/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj8") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ce7f825f-150c-46a0-842a-7235bc0442af/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text1,"dj9") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/7c8b9cd6-4636-4230-bd82-d083b414c141/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}
if(mb_stripos($text1,"djX") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ea509e1b-89eb-457b-810b-2f3d42cc6841/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"DJ logotip by @$botim
You write $ex[1]",
]);
}



if (mb_stripos($text1,"/uz")!==false){
$uz= str_replace("/uz","",$text1);
$uzb=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=uz&text=".urlencode($uz)))->text[0];
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"🇺🇿Uzbek: *$uzb*\n\n🔁Tarjimon: [@$botim]",
'parse_mode'=>"markdown",
'reply_to_message_id'=> $mid,
]);
}

if (mb_stripos($text1,"/en")!==false){
$en= str_replace("/en","",$text1);
$english=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=en&text=".urlencode($en)))->text[0];
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"🇺🇸English: *$english*\n\n🔁Translate: [@$botim]",
'parse_mode'=>"markdown",
'reply_to_message_id'=> $mid,
]);
}

if (mb_stripos($text1,"/screen")!==false){
$ex = explode(" ", $text1);
$uzkod = $ex[1];
bot ('SendPhoto', [
'chat_id'=> $chat_id,
'photo'=>"https://api.site-shot.com/?url=$uzkod",
'caption'=>"*📲Yaratuvchi:* @$botim ",
'parse_mode'=>"markdown",
'reply_to_message_id'=> $mid,
]);
}

if(mb_stripos($text1,"/sms") !== false){
$ex = explode(" ",$text1);
$sms = str_replace("/yubor $ex[1]","",$text1);
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
'text'=>"📨 Yangi Habar Keldi

👤Kimdan: [$ismi](tg://user?id=$uid)

💌Habar: $sms

📆Sana : $sana 
⏱️Vaqt :  $soat ",
'parse_mode'=>"markdown", 
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤[Foydalanuvchi]($egasi)ga Habaringiz Yuborildi!📩",
'parse_mode'=>"markdown", 
]);
}	

if(mb_stripos($text1,"/status") !== false){ 
$input = array("😎😏ᴼˢᴹᴼᴺᴰᴬᴳᴬ ᴼᵞ ᴮᴼˢᴱᴺᴬᴹ ᴱᴿᴷᴬᴷ ᴷᴵˢᴴᴵᴺᴵ ᵀᴬᴳᴵᴰᴬ ᵞᴼᵀᴬˢᴬᴺ ᴰᴱᵀᴷᴬ💪👊","ᴍᵉˣʳ ᵇᵉʳᵍᵃⁿˡᵃʳⁱᵐⁱᶻ ᵇⁱᶻᵍᵃ ⁱᵏᵏⁱ ᵇᵃʳᵒᵇᵃʳ ᵃᶻᵒᵇ ᵇᵉʳᵃᵈⁱᵍᵃⁿ ᶻᵃᵐᵒⁿᵈᵃ ʸᵃˢʰᵃʸᵃᵖᵐⁱᶻ🔗🥀🥀","ᴊɪᴍ ᴛᴜʀʙ ᴋᴜᴢᴀᴛᴀᴍᴀɴ☝🏻
  ϙᴀʏᴇʀɢᴀᴄʜᴀ ʙᴏʀᴡɪɴɢ ☝🏻
                            ϙɪᴢɪϙ😔🤐","ᴋᴍᴅʀ ᴜᴄʜᴜɴ ʏᴏᴍᴏɴ
ɪɴsᴏɴ ʙᴏʟᴅᴍ???
ᴅᴇᴍᴀᴋ ᴜᴜᴜ ɪɴsᴏɴ ᴜᴄᴜɴ 
xᴀᴍᴍᴀ ʏᴀʜsʜʟɪᴋɴ ϙʟʙ ʙᴏʟᴅᴍ😔☝🏻🍃","ᴋᴇᴄʜᴀ ᴋᴜʟɪʙ ʏᴏ'ϙᴏᴛɢᴀɴɪɴɢɴɪ ʙᴜɢᴜɴ ʏᴇɢ'ʟᴀʙ ʜᴀᴍ ᴛᴏᴘᴀ ᴏʟᴍᴀʏsᴀɴ ","ʜᴀʏᴏᴛᴛᴀ sʜᴜɴᴅᴀʏ ᴋᴜɴʟᴀʀ ʙᴏʻʟᴀᴅɪᴋɪ ʏᴀsʜɢᴀɴɪɴɢ ᴋᴇʟᴀᴅɪ😊.ʙᴀᴢɪᴅᴀ sʜᴜɴᴅᴀʏ ᴋᴜɴ ʙᴏʻʟᴀᴅɪᴋᴜ ᴏʟɢɪɴɢ ᴋᴇʟᴀʀᴋᴀɴ☹️","ᴍᴀᴋᴛᴀᴍᴅᴀ ᴏϙɪʙ ᴋᴏᴄʜᴀ ʙᴏʟᴀ ʙᴏᴍɪsᴀɴ ᴋᴏᴄʜᴀᴅᴀ ʏᴜʀɪʙ ᴏʟɪʏ ᴍᴀʟᴜᴍᴏᴛʟɪ ʙᴏʙ ϙᴏᴍɪsᴀɴ👊","ᴏ'ᴢɪɢᴀ ʙɪɴᴏ ϙᴏʏɢᴀɴʟᴀɢᴀ ϙᴏ'ᴛᴏɢ'ɪᴍɪ ϙᴏʏɢᴀɴᴍᴀɴ","......sᴀʟ ᴘᴀsʀᴏ ᴛᴜsʜ ᴅɪᴍᴀɢɪɴ ᴋᴇʀᴀᴋ ʙᴏsᴀ ᴏ'ᴢɪɴɢ ᴛᴇᴘᴀɢᴀ ᴄʜɪϙ☝😎","sʜᴜɴᴅᴀʏ ᴋɪʏɪᴍʟᴀɴɪ ᴋᴏʀᴅɪᴍ ɪᴄʜɪᴅᴀ ᴏᴅᴀᴍɪ ʏᴏ sʜᴜɴᴅᴀʏ ᴏᴅᴀᴍʟᴀɴɪ ᴋᴏʀᴅɪᴍ ᴜsᴛɪᴅᴀ ᴋɪʏɪᴍɪ ʏᴏ","ᴀɢᴀʀ ɢᴜʟɪɴɢɪᴢ ʙᴏ‘ʟsᴀ, ϙᴜʀɪsʜɪᴅᴀɴ ᴀᴠᴠᴀʟ ᴍᴇʜʀ ʙᴇʀɪsʜɢᴀ ᴜʟɢᴜʀɪʙ ϙᴏʟɪɴɢ 🔗🥀 ","ʜᴀʏᴏᴛ ᴋᴜᴛɪʟᴍᴀɢᴀɴᴅᴀ ᴢᴀʀʙᴀ ʙᴇʀᴀᴅɪ ᴏsʜᴀ ᴢᴀʀʙᴀɢᴀ ᴛᴀʏʏᴏʀ ᴛᴜʀᴍᴏϙ ᴋᴇʀᴀᴋ","xᴀʏᴏᴛᴀ sᴇᴠɢᴀɴɪᴢ ɢᴀ ϙᴀᴛᴛɪϙ ʙᴏɢʻʟᴀɴɪʙ ϙᴏʟᴍᴀɴɢ ᴜ ᴋᴇᴛᴋᴀɴᴅᴀɴ ᴋᴇʏɪɴ ϙɪʏɴᴀʟᴀsɪᴢ🖤💔🥀","ɪᴄʜɪᴍᴅᴀ ᴅᴀʀᴅʟᴀʀɪᴍ ʙᴏʀʟɪɢɪɴɪ ʙɪᴛᴀ ᴏʟʟᴏʜᴅᴀɴ ʙᴏsʜϙᴀsɪ ʙɪʟᴍᴀᴅɪ☝️💔","ᴍᴀʜᴋᴀᴍ  ϙᴜᴄʜɪɴɢ  ᴏɴᴀᴊᴏɴ🤗🥺
ᴀxᴏʙ  ᴅɪʟɪᴍ  ᴛɪʟʏᴀʙᴛɪ💔
ᴅᴜɴʏᴏʟᴀʀᴅᴀɴ  ᴄʜᴀʀᴄʜᴀᴅᴍ🌪
ᴏʟɪʙ  ᴋᴇᴛɢɪᴍ  ᴋᴇʟʏᴀʙᴛɪ...🥀","sᴇɴɪɴɢ ᴋᴏᴢʟᴀʀɪɴɢ ᴍᴇxʀɪɴɢ ᴛᴀʙᴀssᴜᴍɪɴɢ xᴀᴍᴀsɪ sᴏxᴛᴀ ᴇᴋᴀɴ ʟᴋ ᴍᴀɴ ʙᴜɴɪ ᴋᴇᴄʜ ʙɪʟᴅɪᴍ💔🥀","ɪɴsᴏɴɴɪ ᴋᴇᴄʜɪʀɪsʜ ϙɪʏɪɴᴍɪ?  ʏᴏ'ϙ, ᴀʟʙᴀᴛᴛᴀ ᴜɴɢᴀ ʏᴀɴᴀ ɪsʜᴏɴɪsʜ ϙɪʏɪɴ.✊","ϙɪᴢʟᴀʀ ʟɪᴄʜᴋᴀᴍɢᴀ ʏᴏᴢᴍᴀɴɢʟᴀʀ sᴇᴠɢᴀɴɪᴍ ʙᴏʀ😒#sʜᴀxᴢᴏᴅʙᴇᴋ","ᴄʜɪʀᴏʏ ʙɪʟᴀɴ ᴇᴍᴀs ɪɴsᴏɴ ʙɪʟᴀɴ ʏᴀsʜᴀʏᴍɪᴢ ᴏᴅᴀᴍʟᴀʀ🖤","ʙᴜ ʏᴏʟɢ'ᴏɴᴄʜɪ ᴅᴜɴʏᴏᴅᴀ ʜᴇᴄʜᴋɪᴍ sɪᴢᴅᴇᴋ ʙᴏ'ʟᴏʟᴍᴀʏᴅɪ ᴏɴᴀᴊᴏɴ","sᴇɴɪ ʏᴏʟɢʻᴏɴʟᴀʀɪɴɢ ᴅᴇɢᴀɴ ᴋɪᴛᴏʙ ʏᴏᴢsᴀᴍ ᴜɴɪ ᴏʻϙɪsʜ ᴜᴄʜᴜɴ 1⁰0⁰ ᴠᴀϙᴛ ᴋᴇᴛᴀᴅɪ","sɪʟᴀʀɢᴀ ᴍᴀsʟᴀʜᴀᴛ ʜᴇᴄʜ ϙᴀᴄʜᴏɴ ᴏʻᴢ sɪɴғᴅᴏsʜɪɴɢɪᴢɴɪ sᴇᴠᴍᴀɴɢ ᴜʟᴀʀ sᴇᴠɢɪɢᴀ ᴀʀᴢɪᴍᴀʏᴅɪ💔🥀","💞💞ʙᴀxᴛʟɪ ϙɪʟɪsʜ ϙᴏʟɪɴɢᴅᴀɴ ᴋᴇʟᴍᴀsᴀ ᴏʏᴏɢɪᴍ ᴛᴀɢɪᴅᴀ ᴏʀᴀʟᴀsʜᴍᴀ🚶🖤💔🥀","ɢᴜʟɪ ʏᴏϙ🌹 ʙᴏʻsᴛᴏɴᴅᴀɴ ʏᴀᴘʀᴏϙ 🍃 ʏᴀxsʜɪ ғᴏʏᴅᴀsɪ ʏᴏϙ ʏᴏʻʟᴅᴏsʜᴅᴀɴ🧑‍🦯 ᴛᴀʏᴏϙ 🦯 ʏᴀxsʜɪ","۞ʙɪʀ ʙᴏʀ ᴇᴋᴀɴ ʙɪʀ ʏᴏϙ ᴇᴋᴀɴ sᴇᴠɢɪ ᴇʀᴛᴀᴋ ᴇᴋᴀɴ sᴇᴠɢᴀɴ ᴛᴇɴᴛᴀᴋ ᴇᴋᴀɴ۞","ϙᴀʟʙ — ᴀʟʟᴏʜ ᴛᴀᴏʟᴏɴɪ sᴇᴠɪsʜ ᴜᴄʜᴜɴ ʏᴀʀᴀᴛɪʟɢᴀɴ⛓🍃","ʙᴀxᴛʟɪᴍᴀɴ ɴɪᴍᴀɴᴀᴅɪʀ.ᴋᴇᴄʜɪʙ ɴɪᴍᴀʟᴀʀɢᴀ ᴇʀɪsʜɢᴀɴɪᴍᴅᴀᴍ ʜᴜʀsᴀɴᴅᴍᴀɴ","ʏᴜʀᴀɢɪᴍ ᴇᴛʙ xᴀsᴛᴀ 😌🎈
      ᴛᴀsʜʟᴀᴘ ᴋᴇᴛɢᴀɴᴅɪɴ ᴀsᴛᴀ😞🍃
 ʏᴀɴᴀ ϙᴀʏᴛɪʙ ᴋᴇʟɪʙsᴀɴ 😟💔
      sᴏɢɪɴᴅɪɴɢᴍɪ ʙʀ ᴘᴀsᴛᴀ😫😭","sᴀɴɪ ʏᴀxsʜɪ ᴋᴏʻʀɢᴀɴ ɪɴsᴏɴ 99% xᴀᴛᴏʟᴀʀɪɴɢ ʙɴ ʜᴀᴍ ʏᴀxsʜɪ ᴋᴏʻʀᴀᴅɪ
ʏᴏᴍᴏɴ ᴋᴏʻʀɢᴀɴ ɪɴsᴏɴ 1% ᴀʏʙɪɴɢ ʙɴ sᴇɴᴅᴀɴ ᴋᴇᴄʜɪʙ ᴋᴇᴛᴀᴅɪ💦🎈🧸","ϙᴀʏsᴀʀ ϙɪᴢ ʙɪʟᴀɴ ɢ'ᴜʀᴜʀʟɪ ʏɪɢɪᴛ ʜᴇᴄʜ ϙᴀᴄʜᴏɴ ʙɪʀɢᴀ ʙᴏ'ʟᴀ ᴏʟᴍᴀʏᴅɪ.
ᴄʜᴜɴᴋɪ ϙɪᴢ sᴇᴠɢɪɴɪ ʀᴀᴅ ᴇᴛᴀᴅɪ ʏɪɢɪᴛ ᴇsᴀ ʙᴏsʜϙᴀ sᴇᴠɢɪ ɪᴢʜᴏʀ ϙɪʟᴍᴀʏᴅɪ🎭","ᴏ́ᴢʙᴇᴋ ϙɪᴢʟᴀʀɪɴɪ  xᴀғᴀ  ϙɪʟɪsʜ 
ᴍᴜᴍᴋɪɴ ᴇᴍᴀs  ᴄʜᴜɴᴋɪ ᴜʟᴀʀɴɪ 
ᴏʀϙᴀsɪᴅᴀ  ᴛᴏɢ'ᴅᴇᴋ  ᴛᴜʀᴀᴅɪɢᴀɴ
ᴏ́ᴢʙᴇᴋ ʏɪɢɪᴛʟᴀʀɪ  ʙᴏʀ 💪✊","xᴀʏᴏᴛ ϙɪᴢɪϙ😊🔥
  ᴠᴀϙᴛɪɴᴄʜᴀʟɪᴋ ɪɴsᴏɴʟᴀʀ😒🥀
     ʙɪʀ ᴜᴍɪʀʟɪᴋ ᴅᴀʀs ʙᴇʀɪʙ.                 ᴋᴇᴛɪᴡᴀᴅɪ 😒😔💔","ᴛᴇʟᴇɢʀᴀᴍᴅᴀ ᴏᴛʀᴀᴠᴇʀʙ😞ʜᴀᴍᴀɴɪ ᴋᴏᴢɪɢᴀ ʏᴀᴍᴏɴ ᴋᴏʀɪɴʏᴀᴘᴍᴀ☘ᴇɴᴅɪ ғᴀϙᴀᴛ ᴅᴜᴡᴀɴᴍᴀ🌸sᴇsʜᴀɴʙᴀ🌛ᴄʜᴏʀsʜᴀɴʙᴀ🌺ᴘᴀʏᴡᴀɴʙᴀ🍃ᴊᴜᴍᴀ sʜᴀɴʙᴀ🌦ᴠᴀ ʏᴀᴋsʜᴀɴʙᴀ🌝ᴋᴜɴʟᴀʀɪ ᴍᴀɴɪ ᴛᴇʟᴇɢʀᴀᴍᴅᴀ ᴋᴏʀᴀsᴢ ","ʜᴏᴛɪʀᴀ ʜᴇᴄʜ💦 ϙᴀᴄʜᴏɴ ᴜɴᴜᴛɪʟᴍᴀʏᴅɪ😞 ᴀʏɴɪϙsᴀ ᴜ😭 ʏᴜʀᴀɢɪɴɢᴀ ʏᴀϙɪɴ ɪɴsᴏɴ❤️ ʙɪʟᴀɴ ʙᴏɢ'ʟɪϙ ʙᴏ'ʟsᴀ.🥀😞","#sᴀɴɪ_ᴋᴇᴛɢᴀɴɪɴᴅᴀɴ_ᴋᴇʏɪɴ_ᴍᴇɴɪ_ʏᴜʀᴀɢɪᴍɪ_ғᴀϙᴀᴛ_xᴏᴛɪʀᴀʟᴀʀ_ᴇɢᴀʟᴀᴅɪ","ᴜᴢᴏϙʟᴀsʜᴅɪɴɢᴍɪ ʏᴀϙɪɴʟᴀsʜᴍᴀ ᴋᴇᴛᴅɪɴɢᴍɪ ϙᴀʏᴛᴍᴀ ᴜɴᴜᴛᴅɪɴɢᴍɪ ᴇsʟᴀᴍᴀ","#ᴜʀɢᴀɴɪʙ_ϙᴏʟᴅɪᴋ_ᴅᴀʀᴅɪᴍɪᴢɢᴀ_ᴍᴜsɪϙᴀᴛᴀɴ_ᴅᴀᴠᴏ_ᴛᴏᴘɪsʜɢᴀ🥀💔","#sᴇɴɪ_ᴜᴢɪɴ_ʏᴜϙ_ʙᴜʟsᴀɴɢᴀᴍ_ʏᴜϙ_ʙᴜʟᴍᴀʏᴅɪɢᴀɴ_ᴅᴀʀᴅʟᴀʀ_ʙᴏʀ🍂💔","#ᴋᴜɴ_ᴋᴇʟᴀᴅɪ_ᴍᴇɴɪ_ᴍᴇɴᴅᴀɴ_ᴛᴏᴘᴏʟᴍᴀʏsᴀɴ🥀💔","ʏᴏᴍᴏɴ #ᴋᴜɴɪᴅᴀ ʙɪʀɢᴀ ʙᴏ'ʟɢᴀɴʟᴀʀɪᴍ,
ʏᴏᴍᴏɴ #ᴋᴜɴɪᴍᴅᴀ ʙɪʀɢᴀ ʙᴏ'ʟɪsʜᴍᴀᴅɪ!😏","ᴏʀᴀᴍɪᴢᴅᴀɢɪ ᴍᴀsᴏғᴀ😔✋
   ᴏʀᴀᴍɪᴢᴅᴀɢɪ ɪɴsᴏɴʟᴀ😒☝️
      ʙɪᴢᴀɴɪ ᴀᴊʀᴀᴛᴏᴍᴇᴅ
         ɢᴜʟɪᴍ🥰😍","#ᴋᴜʟɢᴜ ᴠᴀϙᴛɪ
   ᴀᴠᴛᴏᴍᴏʙɪʟɴɪ ᴋᴀᴛᴛᴀ ᴛᴇᴢʟɪᴋᴅᴀ😕🏎🚀
    ʙᴏᴡϙᴀʀɪʙ ᴋᴇᴛᴀʏᴏᴛɢᴀɴ ᴠᴀϙᴛɪɴɢɪᴢᴅᴀ😌🕊
    3 ᴘᴇᴅᴀʟɴɪ ʙɪʀᴅᴀɴɪɢᴀ ʙᴏssᴀɴɢɪᴢ ᴀᴠᴛᴏᴍᴏʙɪʟ ᴜᴢɪɴɪ ᴜᴢɪ sᴄʀᴇᴇɴᴡᴏᴛ ϙɪʟᴀʀᴋᴀɴ🌚😆","#sᴏxᴛᴀ ᴍᴜɴᴏsᴀʙᴀᴛʟᴀʀɪɴᴅᴀɴ ᴄʜᴀʀᴄʜᴀᴅɪ ʙᴜ #ϙᴀʟʙ","ᴀɢᴀʀ ʙᴀxᴛʟɪ ʙᴏ'ʟɪsʜɴɪ ɪsᴛᴀsᴀɴɢ sᴇɴɪ ʙᴀxᴛsɪᴢ ϙɪʟᴀʏᴏᴛɢᴀɴ ɪɴsᴏɴᴅᴀɴ ᴠᴏᴢ ᴋᴇᴄʜ","ɪᴋᴋɪʟᴀɴɪsʜ - ʙᴜ ʙᴏ'ʟᴀᴊᴀᴋ ᴍᴀɢ'ʟᴜʙɪʏᴀᴛ.☝️🔗🥀 ","【✪➣ ᴍεη xαϙιᴍᴅα ᴏᴢιᴍᴅαη sᴏʀαηɢ ϙᴏɢαηʟαʀ ιsᴍιᴍηι βιʟαᴅι xᴏʟᴏs..🌚🥀","ϙɪᴢʟᴀʀ ϙᴜʟᴏɢɪ ʙɪʟᴀɴ sᴇᴠᴀᴅɪ ʏɪɢɪᴛʟᴀʀ ᴋᴏᴢɪ ʙɪʟᴀɴ ʜᴏᴢʀɢɪ ʏɪɢɪᴛʟᴀʀɴɪ ᴋᴏᴢɪᴅᴀ ᴀᴄʜᴋɪ ϙɪᴢʟᴀʀɴɪ ϙᴜʟᴏɢɪᴅᴀ ɴᴀᴜsʜɴɪᴋ ᴏʀᴛᴀᴅᴀ sᴇᴠɢɪ sᴀʀsᴏɴ","ʜᴀʏᴏᴛ ϙɪᴢɪɢ'ᴀ:
ʙɪʀ ᴋᴜɴ ᴏ'ʟɪsʜ ᴜᴄʜᴜɴ,
ʜᴀʀ ᴋᴜɴɪ ʏᴀsʜᴀʏᴍɪᴢ.","#ʏᴜʀᴀɢɪᴍ ᴀʟᴅᴀᴅɪᴍ ᴜ ᴏ'ʟɢᴀɴ ᴅᴇʏᴀ 🙁🥀
ᴜɴɪ ᴏᴠᴜᴛᴅɪᴍ ᴜ ᴇɴᴅɪ ʏᴏ'ϙ ᴅᴇʏᴀ ... 🍃","xᴀ ɪᴋᴋɪᴍɪᴢ ʜᴀᴍ ʙᴀᴢɪᴅᴀ ᴏʏɢᴀ ᴛᴜʀᴀᴍɪᴢ ϙᴀʀᴀʙ ғᴀϙᴀᴛ sᴇɴ ᴇsᴀ #xᴜʀsᴀɴᴅ ᴍᴀɴ ᴇsᴀ #ᴇsʟᴀʙ💔","🌙ɢ'ᴜʀᴜʀʟᴀɴᴍᴀɴɢ🕷 ʏᴏ'ϙʟɪɢɪᴍɢᴀ ᴄʜɪᴅᴏʟᴍᴀʏsɪᴢ🙁🎈","🌝✨ᴇNG QɪZɪG'ɪ NɪMᴀ🦚 BɪLᴀSɪZMɪ QᴀLBɪMɪZ ᴏG'RɪGᴀNɪNɪ 🦟QᴀLBɪMɪZDᴀGɪLᴀR BɪLɪSʜMᴀYDɪ🕷🕸","🦁BɪZDᴀ QᴏLMᴀYDɪGᴀN DᴜNYᴏ🦋 ᴜCʜᴜN BɪZDᴀ🌸 QᴏLᴀDɪGᴀN GᴜNᴏHLᴀR Tᴏ'PLᴀDɪK🙁🎈","🖇Kᴏ'NGLɪMɪZDᴀN QᴏLGᴀNLᴀRGᴀ🍁 Kᴏ'NGɪLSɪZLɪK MᴜBᴏRᴀK🦁✊🏿","🌿HᴀMMᴀGᴀ Vᴀ HᴀMMᴀSɪGᴀ😸🐾 KᴜLɪB Qᴏ'YDɪM😈✌️🏿","Ey robbim zinodan qo'rqadigan xaromdan xazar qiladigan yor uchrasin. ☺️🤲","ᴀɢᴀʀ ʙᴜ ᴅᴜɴʏᴏᴅᴀ { ᴋᴀᴋᴛᴜs } ʙᴜʟᴘ ϙᴏsᴇɴ ᴏɴᴇɴᴅᴀɴ ʙᴏᴡϙᴀ xᴄ ᴋᴍ ϙᴜᴄᴏʟᴀᴍᴇᴅɪ ᴜɴᴜᴛᴍᴇʟᴀ ᴀᴋᴀ ᴜᴋᴀ ᴏᴘᴀ sɪɴɢɪʟʟᴀᴀᴀᴀ  xᴀʏᴏᴛ ϙᴏɴᴜɴɪ ✌️✊.","ᴀʙᴀᴅɪʏ ʙᴏ'ʟᴍᴀᴅɪ ʙɪᴢɴɪɴɢ sᴇᴠɢɪᴍɪᴢ 🥺💔 
ᴜᴄʜɪʙ ᴋᴇᴛᴅɪ ᴏsᴍᴏɴʟᴀʀɢᴀ 🥺💔
sᴇɴɪ ᴅᴇʙ ᴀᴊʀᴀʟᴅɪᴋ ᴍᴀɴᴀ ɪᴋᴋɪᴍɪᴢ ʏᴇɴɢɪʟᴅɪᴍ ʏᴏʟɢ'ᴏɴʟᴀʀɢᴀ 🥺💔
ʙᴀxᴛɢᴀ ϙᴏʟɢᴀɴɪ ғᴀϙᴀᴛ ʙɪʀ ϙᴀᴅᴀᴍ ᴏʀᴛɢᴀ ϙᴀʏᴛɪᴍ ᴍᴀᴊʙᴜʀ sᴇɴ sᴀʙᴀʙ 🥺💔
ᴜᴍɪᴅɪᴍɴɪ ᴜᴢᴏʟᴍᴀsᴀᴍ ɴᴇ ϙɪʟᴀʏ ᴀʜɪʀ ᴋᴇᴛᴋᴀɴsᴀɴ ᴀʟᴅᴀʙ 🥺💔","ᴅᴜɴʏᴏᴅᴀ ᴀᴄʜɪϙ ʙᴏ'ʟᴍᴀsᴀ sʜɪʀɪɴɴɪ ϙᴀᴅʀɪ ʏᴏ'ϙ","ʏᴏʟɢ'ɪᴢʟɪᴋ ᴊᴜᴅᴀ ᴀᴊᴏʏɪʙ ᴇᴋᴀɴ ᴜɴᴅᴀ ɴᴀ ʏᴏʟɢ'ᴏɴ ɴᴀ xᴀϙɪϙᴀᴛ ʙᴏʀ
ᴇɴɢ ᴍᴜʜɪᴍɪ ʜᴇᴄʜ ᴋɪᴍ ʏᴜʀᴀɢɪɴɢɢᴀ ᴅᴀʀᴅ ɪᴢᴛɪʀᴏʙ ʙᴇʀᴍᴀʏᴅɪ","ᴏ'ʏʟᴀᴘ ϙᴀʀᴀsᴀᴍ😶🧍‍♀ 
ᴍᴇɴɪ ᴀʏʙɪᴍ🤐🌱
ᴏʻᴢ ϙᴀᴅʀɪɴɪ ʙɪʟᴍᴀɢᴀɴᴅᴀɴ🌚🐾
ϙᴀᴅʀ sᴏʻʀᴀɢᴀɴɪᴍᴅᴀ ᴇᴋᴀɴ😕🥀
","ᴏ'ʏʟᴀᴘ ϙᴀʀᴀsᴀᴍ😶🧍‍♀ 
ᴍᴇɴɪ ᴀʏʙɪᴍ🤐🌱
ᴏʻᴢ ϙᴀᴅʀɪɴɪ ʙɪʟᴍᴀɢᴀɴᴅᴀɴ🌚🐾
ϙᴀᴅʀ sᴏʻʀᴀɢᴀɴɪᴍᴅᴀ ᴇᴋᴀɴ😕🥀
","ᴋᴜɴ ᴋᴇʟᴀᴅɪ ᴜᴢɪɴɪ ᴏsᴍᴏɴ ᴅʙ ʙɪʟɢᴀɴʟᴀ ᴍᴀɴɢᴀ ᴛɪᴢ ᴄᴜᴋᴀᴅɪ ☝☝☝💪","sᴇᴠɢɪ ᴋᴏ‘ʀ ʙᴏ‘ʟɪsʜ ᴜᴄʜᴜɴ ᴛᴜɢ‘ɪʟᴅɪ. 
ᴋɪᴄʜɪᴋ ᴋᴀᴍᴄʜɪʟɪᴋʟᴀʀ ᴋᴏ‘ᴢɢᴀ ᴋᴏ‘ʀɪɴɪsʜɴɪ ʙᴏsʜʟᴀᴅɪᴍɪ, ᴅᴇᴍᴀᴋ, ᴜ ᴄʜᴀᴍᴀᴅᴏɴɪɴɪ ʏɪɢ‘ɪsʜᴛɪʀᴀ ʙᴏsʜʟᴀʙᴅɪ","- ᴏ'QɪYᴀPSᴀNMɪ🧸
 - Hᴀ ᴏ'QɪYᴀPMᴀN🖇
 - QᴀYᴏQQᴀ HᴀRᴀKᴀT🙁🎈
 - JᴀNNᴀTGᴀ🌝💫","🖇🕊SʜᴜNDᴀY KᴜNLᴀRNɪ Kᴏ'RDɪMKɪ 🌳BᴜLᴀR FᴀQᴀT RᴏBBɪMGᴀ ᴀYᴏN🖤🧸","🌙DᴜNYᴏNɪ 3Tᴀ Sᴏ'Z BɪLᴀN🕷 TᴜSʜᴜNTɪR DɪYɪSʜSᴀ HᴀMMᴀ🖇 NᴀRSA ᴏ'TKɪNCʜɪ DᴇRDɪM🙁🌸","Kamida 500 harfli xabarni birovga yozganingizda Hm deb javob qaytarsa alam qilsa kerak...","ChuQuR BiR NaFaS oL😕☝️
  TaShQaRiGa SeKiN ChiQaR🧐🔥
    Va ShU IwNi QiLa OLGaNiNGGa WuKuR QiL🌝🖇😊",".Hozirgi zamon yoshlarining sevgisi San boshqachasan😍 bilan boshlanib 
Hammang bir gorsan😡 
bilan tugayapti🤣🤣🤣🤣

Qanday zamonlarga qoldik😉","🌿QᴀCʜᴏNKɪ Kᴏ CʜᴀDᴀ🕷 NᴏMᴀXRᴀMNɪ KᴏRSANGɪZ ᴏYᴏQ KɪYɪMɪZGᴀ QᴀRᴀNG🚶‍♂ ᴜ JᴜDᴀ HᴀM CʜɪRᴏYLɪ🙁🎈'","☞ᴅᴜɴʏᴏ ᴜᴄʜᴜɴ ʏɪɢʻʟᴀᴍᴀɴɢ ᴅᴜɴʏᴏ sɪᴢɢᴀ ʜᴇᴄʜ ɴᴀʀsᴀɴɪ ᴠᴀʼᴅᴀ ʙᴇʀᴍᴀɢᴀɴ☜","𝐤𝐥𝐚𝐯𝐞𝐚𝐭𝐮𝐫𝐚𝐧𝛊 𝐨𝐫𝐭𝛊𝐝𝐚 𝕢𝕦𝕪𝕠𝕟
 𝐱𝐚𝐦 ,
𝕊𝕙𝕖𝕣 𝐛𝐨𝐥𝐚𝐫𝐤𝐚𝐧🙂","ʙᴏ'ʀɪ sʜᴇʀᴅᴀɴ ᴠᴀ ϙᴏᴘʟᴏɴᴅᴀɴ ᴢᴀɪғʀᴏϙ.. ʟᴇᴋɪɴ ʙᴏ'ʀɪ sɪʀᴋᴅᴀ ɪsʜʟᴀᴍᴀʏᴅɪ 😈
","🖇BᴏYLɪKNɪ BᴀXT DᴇB ᴏ'YLᴀYSɪZLᴀRKᴜ💔
🌸BᴏRɪNG ᴇNDɪ BᴀXTɪ Kᴏ'PLᴀRGᴀ🙁✌️🏿","🎈KᴜN KᴇLɪB HᴇCʜ🌳 KɪMNɪ QɪZɪG'ɪ🌸 QᴏLMᴀYDɪ DᴇGᴀNDɪMKᴜ HᴏZɪR😑🚩 Sʜᴜ QɪSMɪGᴀ KᴇLDɪK🙁🏴‍☠","🌙SᴏG'ɪNMᴏQ 8Tᴀ HᴀRF 3Tᴀ🐚 Bᴏ'G'ɪN Vᴀ HᴀR BɪR KᴇCʜᴀ ᴀZᴏB🙁💔","【⓳➣ oynι qιzι вυѕenaм вoynι qιzι вoѕenaм мenga poхυy qιzalo 😹🧤","тυrι ѕнayтon yυldan υrad🙁🌿
  leĸn qυlιndan υwaв υѕнa yυlga opĸιrв qυyмed😕☝️","rozιмѕa мanѕιzlιĸĸa🌿
  rozι мanaм ѕanѕzlιĸĸa🙁","【⓳➣ хayoт jιgarla вιlan qιzιq 🙁✌️🏻","Uni KuTiB yaShaYmaN, u Yo'QliGiN BiLsAm hAm😕","SiZni SeVaMaN DeD. BoShQaSini bAg'riDa Bo'lish SiZgA yArAshAdi BiZgA eMaS☝️😕","HaLi SiZni Do'sT BilDiMmi 
OdaM qUriB KeTgAnDaY😏✊🏻","Qalbimda Olloh, yonimda esa sen bo'lsang hammasi go'zal bo'ladi🌸☝️","ʙᴀ'ᴢɪ ɪɴsᴏɴʟᴀʀɴɪ ᴋᴇᴄʜɪʀɪsʜᴅᴀɴ ᴋᴏ'ʀᴀ ᴜɴᴜᴛɪsʜ ᴏsᴏɴʀᴏϙ.😕🎈","ϙᴀʟʙ sɪᴢʟᴀʀɢᴀ ᴇsʜɪᴋ ᴇᴍᴀs xᴏxʟᴀsᴀ ᴏᴄʜɪʙ xᴏxʟᴀsᴀ ʏᴏᴘɪʟᴀᴅɪɢᴏɴ...🚪😕🧸","🙎‍♀️ᴊᴏɴɪᴍ ᴍᴇɴɪ sᴇᴠᴀsɪᴢᴍɪ? 🤦‍♂️-ᴘᴜʟɪᴍ ʏᴏ’ϙ.
🤷‍♀️-ᴍᴇɴ ᴋᴏ’ɴɢɪʟ ᴜᴄʜᴜɴ sᴏ’ʀᴀʏᴀʙᴍᴀɴ, sɪᴢ ᴇsᴀ ᴅᴀʀʀᴏᴠ ʙᴏsʜϙᴀᴄʜᴀ ᴛᴜsʜᴜɴᴀsɪᴢ.  
🙆‍♂️-ʜᴀ, sᴇᴠᴀᴍᴀɴ, ᴊᴏɴɪᴍᴅᴀɴ ᴏʀᴛɪϙ. 
🤦‍♀️-ʙᴏ’ʟᴅɪ ᴇɴᴅɪ ϙɪᴢɢ’ɪ ʏᴏ’ϙ ᴘᴜʟɪᴢ ʙᴏ’ᴍᴀsᴀ","ᴛᴇʟғᴏɴ xᴀᴍ ϙɪʟᴍᴀʏᴅɪ sᴍs xᴀᴍ ʏᴏᴢᴍᴀʏᴅɪ😐 
😣ʙɪʀᴏɴ ɴᴀʀsᴀ ʙᴏ́ʟᴅɪᴍɪ ᴇᴋᴀɴ ? 😯  ʏᴏɢ'ᴇ ʏᴏᴍᴏɴ
🍁 xᴀʏᴏʟɢᴀ ʙᴏʀᴍᴀʏ😌+
 ʙᴀʟᴋɪᴍ ᴏ́ʟɪʙ  ϙᴏʟɢᴀɴᴅᴜʀ ᴀ 😄😂😉","
Topqon qizingo gap yo'q 
o'kcha balant chizib olomon vini ruchka bilan 😕😎");
  $rand=rand(0,8);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(mb_stripos($text1,"/ovoz") !== false){ 
$ex = explode(" ",$text1);
$ovoz = str_replace("/ovoz","",$text1);
$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text='.urlencode($ovoz));
file_put_contents('vo.ogg',$vo);
bot('SendVoice',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'voice'=>new CURLFile('vo.ogg'),
'caption'=>"📲Yaratuvchi: @$botim 

ZAKAZ so‘z: $ovoz",
]);
}

if(mb_stripos($text1,"/test") !== false){
$loop = explode(" ", $text1); 
$suz = $loop[1]; 
$javob = $loop[2]; 
$input = array("25%","83%","41%","82%","62%","52%","95%","23%","77%","27%","32%","75%","36%","11%","41%","97%","99%","100%","53%","29%","88%","37%","64%","90%","72%","33%","81%","7%","60%","62%","71%","23%","93%","95%","71%","98%","31%");
$rand=rand(0,7);
$soz="$input[$rand]";
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"❤Test Javoblari Tayyor👇

🤵Og‘il - *$suz*
❤SEVGI - *$soz* ❤
👰Qiz - *$javob*

😍 ilohim sevgingizlarga ko‘z tegmasin baxtli bo‘linglar💖",
'parse_mode'=>'markdown',
'reply_markup'=>$back,
]);
}

if (mb_stripos($text1,"/rasm")!==false){
$ex = explode(" ", $text1);
$uzkod = $ex[1];
bot ('SendPhoto', [
'chat_id'=> $chat_id,
'photo'=>"https://yandex.ru/images/search?text=$uzkod",
'caption'=>"*📲Yaratuvchi:* [@$botim]",
'parse_mode'=>"markdown",
'reply_to_message_id'=> $mid,
]);
}

if (mb_stripos($text1,"/ru")!==false){
$ru= str_replace("/ru","",$text1);
$rus=json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=ru&text=".urlencode($ru)))->text[0];
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"🇷🇺Русский: *$rus*\n\n🔁Переводчик: [@$botim]",
'parse_mode'=>"markdown",
'reply_to_message_id'=> $mid,
]);
}

	if(stripos($text1,"/soat") !== false){
		$soat = date('H:i', strtotime('2 hour'));
  $text = "⏰ Hozir soat: *$soat*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode' => 'markdown'
  ]));
}

		if(stripos($text1,"/sana") !== false){
        $bugun = date('d-M Y',strtotime('0 hour'));
  $text = "📆 Bugungi sana: *$bugun*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($text1,"/id") !== false){
  $text = "*🆔️ Sizning idngiz:* `$fadmin`";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($text1,"/gid") !== false){
  $text = "*🆔️ Guruh idsi:* `$chat_id`";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}


if(mb_stripos($text1,"/url") !== false){ 
$ex = explode(" ",$text1);
$uzkod = $ex[1];
bot('SendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"markdown",
'text'=>"📲*Marhamat siz uchun share ssilka tayyor*

➡ `http://telegram.me/share/url?$uzkod`

📲*Yaratuvchi:* @$botim",
   ]);
 }


if (mb_stripos($text1,"/mark")!==false){
$mark= str_replace("/mark","",$text1);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=> $mark,
'parse_mode'=>"markdown",
'reply_to_message_id'=> $mid,
]);
}


//Keep ga yozish
if(mb_stripos($text1,"/keep")  !== false){ 
$soz = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'photo'=>"http://www.keepcalmstudio.com/-/p.php?t=%EE%BB%AA%0D%0AKEEP%0D%0ACALM%0D%0A$soz[1]%0D%0A$soz[2]%0D%0A$soz[3]&bc=000000&tc=FFFFFF&cc=FFFFFF&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by @$botim",
]);
}

//Love ga yozish
if(mb_stripos($text1,"/love") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$cid, 
'reply_to_message_id'=>$mid,
'photo'=>"http://www.iloveheartstudio.com/-/p.php?t=$ex[1]%EE%BB%AE$ex[2]%20$ex[3]%0A$ex[4]%0D%0A%20%20&bc=000000&tc=ffffff&hc=FF0000&f=n&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by @$botim",
]);
}


//Logo yasash bo'limi
## QR yaratish! ##
if(mb_stripos($text1,"QR") !== false){ 
$kod = str_replace("QR","",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://qr-code.ir/api/qr-code?s=5&e=M&t=P&d=$kod",
'caption'=>"🚀Yaratuvchi: @$botim
You write $kod",
]);}


if(mb_stripos($text1,"/musiqa") !== false){
$ex=explode(" ",$text1);
$music = str_replace("/musiqa","",$text1);
$v = file_get_contents("https://www.musixmatch.com/search/$ex[1]");
$vk = 'Master'.$v.'
<div class="mp3">
                <i class="fa fa-play-circle-o"></i>                <a"/musiqa/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a>             </div>
<div class="mp3">
                <i class="fa fa-play-circle-o"></i>                <a"/musiqa/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a>             </div>
<div class="mp3">
                <i class="fa fa-play-circle-o"></i>                <a"/muz/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a>             </div>
<div class="mp3">
                <i class="fa fa-play-circle-o"></i>                <a"/muz/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a>             </div>
<div class="mp3">
                <i class="fa fa-play-circle-o"></i>                <a"/muz/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a>             </div>
<div class="mp3">
                <i class="fa fa-play-circle-o"></i>                <a"/musiqa/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a>             </div>
<div class="mp3">
                <i class="fa fa-play-circle-o"></i>                <a"/musiqa/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a>             </div>
<div class="mp3"> <i class="fa fa-play-circle-o"></i> <a"/musiqa/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a> </div>
<div class="mp3"> <i class="fa fa-play-circle-o"></i> <a"/musiqa/6312_Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos.html">Ummon guruhi - So&#039;ngi Bor So&#039;ngi Iltimos</a> </div>';
file_put_contents("$uid.get.txt",$vk);
$zb = file_get_contents("$uid.get.txt");
$ex1 = explode("fa fa-play-circle-o",$zb);
$ex12 = explode("</div>",$ex1[1]);
$ex22 = explode("</div>",$ex1[2]);
$ex32 = explode("</div>",$ex1[3]);
$ex42 = explode("</div>",$ex1[4]);
$ex52 = explode("</div>",$ex1[5]);
$ex62 = explode("</div>",$ex1[6]);
$ex72 = explode("</div>",$ex1[7]);
$ex82 = explode("</div>",$ex1[8]);
$ex92 = explode("</div>",$ex1[9]);
$ex102 = explode("</div>",$ex1[10]);
if(mb_stripos($ex12[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex12[0]);
$t = str_replace('&#039;','`',$t);
$m1 = trim($t);
$m1 = "
🎶 <b>Qidiruv natijalari:</b>

/1 . $m1";
}else{
$m1 = "Siz qidirayotgan musiqa topilmadi 😔";
}
if(mb_stripos($ex22[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex22[0]);
$t = str_replace('&#039;','`',$t);
$m2 = trim($t);
$m2 = "2️⃣ $m2";
}else{
$m2 = "";
}

if(mb_stripos($ex32[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex32[0]);
$t = str_replace('&#039;','`',$t);
$m3 = trim($t);
$m3 = "3️⃣ $m3";
}else{
$m3 = "";
}

if(mb_stripos($ex42[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex42[0]);
$t = str_replace('&#039;','`',$t);
$m4 = trim($t);
$m4 = "4️⃣ $m4";
}else{
$m4 = "";
}
if(mb_stripos($ex52[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex52[0]);
$t = str_replace('&#039;','`',$t);
$m5 = trim($t);
$m5 = "5️⃣ $m5";
}else{
$m5 = "";
}
if(mb_stripos($ex62[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex62[0]);
$t = str_replace('&#039;','`',$t);
$m6 = trim($t);
$m6 = "6️⃣ $m6";
}else{
$m6 = "";
}
if(mb_stripos($ex72[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex72[0]);
$t = str_replace('&#039;','`',$t);
$m7 = trim($t);
$m7 = "7️⃣ $m7";
}else{
$m7 = "";
}
if(mb_stripos($ex82[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex82[0]);
$t = str_replace('&#039;','`',$t);
$m8 = trim($t);
$m8 = "8️⃣ $m8";
}else{
$m8 = "";
}
if(mb_stripos($ex92[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex92[0]);
$t = str_replace('&#039;','`',$t);
$m9 = trim($t);
$m9 = "9️⃣ $m9";
}else{
$m9 = "";
}
if(mb_stripos($ex102[0],"<a href") !== false){
$t = str_replace('"></i>',' ',$ex102[0]);
$t = str_replace('&#039;','`',$t);
$m10 = trim($t);
$m10 = "🔟 $m10";
}else{
$m10 = "";
}
file_put_contents("mp3.txt","
$m1
$m2
$m3
$m4
$m5
$m6
$m7
$m8
$m9
$m10");
 bot('sendmessage',[
   'chat_id'=>$cid,
   'user_id'=>$uid,
   'message_id'=>$mid,
   'text'=>"$m1
$m2
$m3
$m4
$m5
$m6
$m7
$m8
$m9
$m10",
   'parse_mode'=>'html',
  ]);
    sleep("1");
unlink("$uid.get.txt");
   }
if($text1 == "/1" or $text1 == "/2" or $text1 == "/3" or $text1 == "/4" or $text1 == "/5" or $text1 == "/6" or $text1 == "/7" or $text1 == "/8" or $text1 == "/9" or $text1 == "/10"){
bot('editmessagetext',[
   'chat_id'=>$cid,
   'user_id'=>$uid,
   'message_id'=>$mid - 1,
   'text'=>"<b>Qayta musiqa qidirishingiz uchun: </b> <code>/musiqa qo'shiq nomi</code> <b>ni yuboring!</b>",
   'parse_mode'=>'html',
  ]);
$get = file_get_contents("$uid.txt");
if($text1 == "/1"){
$ex = explode("n",$get);
$a = explode(">",$ex[3]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/1 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[3]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://www.musixmatch.com/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text1 == "/2"){
$ex = explode("n",$get);
$a = explode(">",$ex[4]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/2 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[4]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://www.musixmatch.com/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text1 == "/3"){
$ex = explode("n",$get);
$a = explode(">",$ex[5]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/3 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[5]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://www.musixmatch.com/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text1 == "/4"){
$ex = explode("n",$get);
$a = explode(">",$ex[6]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/4 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[6]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://www.musixmatch.com/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text1 == "/5"){
$ex = explode("n",$get);
$a = explode(">",$ex[7]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/5 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[7]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://www.musixmatch.com/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text1 == "/6"){
$ex = explode("n",$get);
$a = explode(">",$ex[8]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/6 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[8]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://www.musixmatch.com/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text1 == "/7"){
$ex = explode("n",$get);
$a = explode(">",$ex[9]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/7 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[9]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://www.musixmatch.com/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text1 == "/8"){
$ex = explode("n",$get);
$a = explode(">",$ex[10]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/8 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[10]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://www.musixmatch.com/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text1 == "/9"){
$ex = explode("n",$get);
$a = explode(">",$ex[11]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/9 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[11]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://www.musixmatch.com/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
if($text1 == "/10"){
$ex = explode("n",$get);
$a = explode(">",$ex[12]);
$m = str_replace("</a","",$a[1]);
$m = str_replace("/10 .","",$m);
$m = trim($m);
$b = explode('/musiqa/',$ex[12]);
$d = explode('_',$b[1]);
$r = trim($d[0]);
$url = "https://www.musixmatch.com/download/$r";
file_put_contents("$uid.mp3",file_get_contents($url));
}
$url = "https://www.musixmatch.com/download/$r";
  bot('sendmessage',[
   'chat_id'=>$cid,
   'user_id'=>$uid,
   'message_id'=>$mid,
   'text'=>"📥 Yuklanmoqda...

█▒▒▒▒▒▒▒▒▒ 0%",
   'parse_mode'=>'html',
  ]);
    sleep("1");
     $du = explode(':', $url->result->info->duration);
     $duration = ((int)$du[0] * 60) + (int)$du[1]; 
  bot('editmessagetext',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'message_id'=>$mid + 1,
    'text'=>"📥 Yuklanmoqda...

██████████ 100%",
    'parse_mode'=>'html',
  ]);
  bot('deletemessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'message_id'=>$mid + 1,
  ]);
  bot('sendaudio',[
       'chat_id'=>$cid,
       'audio'=>new CURLFile($uid.'.mp3'),
       'performer'=>"@ADVAKAT_PROBOT",
       'title'=>$m,
       'duration'=> $duration ,
       'caption'=>"@ADVAKAT_PROBOT",
  ]);
    sleep("1");
unlink("$uid.txt");
unlink("$uid.mp3");
}

if (mb_stripos($text1,"/html")!==false){
$htm= str_replace("/html","",$text1);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=> $htm,
'parse_mode'=>"html",
'reply_to_message_id'=> $mid,
]);
}


if (mb_stripos($text1,"/keep")!==false){
$ex = explode(" ", $text1);
$uzkod = $ex[1];
bot ('SendPhoto', [
'chat_id'=> $chat_id,
'photo'=>"http://www.keepcalmstudio.com/-/p.php?t=%EE%BB%AA%0D%0A$uzkod%0D%0A%0D%0A%EE%BB%AE%20%20And%20%20%EE%BB%AE%0D%0A%0D%0A%EE%BB%AAby: @ADVAKAT_PROBOT&bc=000000&tc=FFFFFF&cc=FF0000&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"📲*Yaratuvchi:* @$botim",
'parse_mode'=>"markdown",
'reply_to_message_id'=> $mid,
]);
}

if($text=="/versiya"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Bot ".zend_version()." versiyada ishlamoqda.",
]);}

if (mb_stripos($text1,"/love")!==false){
$ex = explode(" ", $text1);
$uzkod = $ex[1];
bot ('SendPhoto', [
'chat_id'=> $chat_id,
'photo'=>"http://www.iloveheartstudio.com/-/p.php?t=%EE%BB%AE$Uz_Master1%EE%BB%AE%20%0A%0D%0A%0D%0A%EE%BB%AA%20%20Onam%20%20%EE%BB%AA&bc=000000&tc=ffffff&hc=FF0000&f=n&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"*📲Yaratuvchi:* @$botim",
'parse_mode'=>"markdown",
'reply_to_message_id'=> $mid,
]);
}

$koder = "1893930519";
$text = $update->message->text;
$chat_id = $update->message->chat->id;

if($text == '/file' and $chat_id == $koder){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile(__FILE__)
]);
} 
?>

if(mb_stripos($text1,"/ism") !== false){ 
  $ex=explode(" ",$text1);
  $ism = file_get_contents("https://ismlar.com/search/$ex[1]");
  $exp = explode('<p class="text-size-5">',$ism);
  $expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
  $im = str_replace($expl[1],' ',$exp[1]);
  $ims = str_replace('</p>',' ',$im);
  $isms = str_replace('</div>',' ',$ims);
  $ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
  $ismk = str_replace('','`',$ismn);
  $ismm = trim("$ismk");
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>"<b>📚 ISMLAR MA'NOSI 📚

🔍 $ex[1]

📑 Manosi:</b> <i>$ismm</i>!
",
    'parse_mode'=>'html',
  ]);
  }
 
if($photo){
$cid = $message->chat->id;
$uid = $message->from->id;
$mid = $message->message_id;
$input = array("%25","%83","%41","%82","%62","%52","%95","%23","%77","%27","%32","%75","%36","%11","%41","%97","%99","%100","%53","%29","%88","%37","%64","%90","%72","%33","%81","%7","%60","%62","%71","%23","%93","%95","%71","%98","%31");
$rand=rand(0,7);
$soz="$input[$rand]";
$file_id = $message->photo[0]->file_id;
bot('sendphoto',[
    'chat_id'=>$chat_id,
   'photo'=>$file_id,
'caption'=> "😇Gozzalik darajasi: $soz",
'parse_mode'=>'html',
]);
}

if($text1 == "/setphoto" or $text1 == "/setphoto@ADVAKAT_PROBOT"){
$gett = bot('getChatMember', [
'chat_id'=>$chat_id,
'user_id'=>$fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$photo = $update->message->reply_to_message->photo;
$file = $photo[count($photo)-1]->file_id;
$get = bot('getfile',[
'file_id'=>$file,
]);
$getchat = json_decode($get, true);
$patch = $getchat["result"]["file_path"];
file_put_contents("viki/photogp.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
bot('setChatPhoto',[
'chat_id'=>$chat_id,
'photo'=>new CURLFile("viki/photogp.png")
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"html",
 'text'=>"✅<code>$title</code> <b>guruhidagi rasm o'zgartirildi. Rasmni olib tashlash uchun<b> <code>/delphoto</code> <b>buyrug'idan foydalaning.</b>",
'reply_to_message_id'=>$mid,
]);
unlink("viki/photogp.png");
}
}

if($text1 == "/delphoto" or $text1 == "/delphoto@ADVAKAT_PROBOT"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
bot('deleteChatPhoto',[
'chat_id'=>$chat_id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"html",
'text'=>"✅<code>$title</code> <b>guruhidagi rasm olib tashlandi. Yangi rasmni o'rnatish uchun</b> <code>/setphoto</code> <b>buyrug'idan foydalaning</b>",
'reply_to_message_id'=>$mid,
]);
}
}

if($text1 == "/leave"  or $text1 == "/leave@ADVAKAT_PROBOT"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"html",
'text'=>"📛@$botim'<b>ning guruhdagi faoliyati to'xtatildi:</b>

🔹<b>Guruh ID:</b> $chat_id
🔸<b>Guruh nomi:</b> $title
🔵 <b>Guruh admini:</b> <a href='tg://user?id=$fadmin'>$name</a>",
'reply_to_message_id'=>$mid,
]);
bot('LeaveChat',[
'chat_id'=>$chat_id,
]);
}
}

if ($text1 == "/admins" or $text1 == "/admins@ADVAKAT_PROBOT"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"👨‍💻*Foydalanuvchini admin qilmoqchimisiz yoki adminlikdan olmoqchimisiz:*",
    'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' => [
[['text'=>"☑️Admin qilish",'callback_data'=>"addadmin_$id1"]],
[['text'=>"🗑Adminlikdan olish",'callback_data'=>"deladmin_$id1"]]
]
]),
]);
}
}

if (mb_stripos($data,"addadmin")!==false){
$ex = explode("_",$data);
$gett2 = bot('getChatMember', [
'chat_id' => $chat_id2,
'user_id' => $fadmin2,
]);
$get2 = $gett2->result->status;
if($get2 =="administrator" or $get2 == "creator"){
      bot('promoteChatmember',[
      'chat_id'=>$chat_id2,
      'user_id'=>$ex[1],
      'can_change_info'=>true,
      'can_post_messages'=>false,
      'can_edit_messages'=>false,
      'can_delete_messages'=>true,
      'can_invite_users'=>true,
      'can_restrict_members'=>true,
      'can_pin_messages'=>true,
      'can_promote_members'=>false
      ]);
bot ('EditMessageText', [
'chat_id'=> $chat_id2,
'message_id'=>$message_id2,
'parse_mode'=>"markdown",
'text'=>"☑️*Yaxshi endi u bu guruh admini*",
]);
}
}

if (mb_stripos($data,"deladmin")!==false){
$ex = explode("_",$data);
$gett2 = bot('getChatMember', [
'chat_id' => $chat_id2,
'user_id' => $fadmin2,
]);
$get2 = $gett2->result->status;
if($get2 =="administrator" or $get2 == "creator"){
      bot('promoteChatmember',[
      'chat_id'=>$chat_id2,
      'user_id'=>$ex[1],
      'can_change_info'=>false,
      'can_post_messages'=>false,
      'can_edit_messages'=>false,
      'can_delete_messages'=>false,
      'can_invite_users'=>false,
      'can_restrict_members'=>false,
      'can_pin_messages'=>false,
      'can_promote_members'=>false
   ]);
    bot('EditMessageText',[
        'chat_id'=>$chat_id2,
     'message_id'=> $message_id2,
        'text'=>"☑*Yaxshi u guruhda adminlar qatoridan olindi*",
        'parse_mode'=>'markdown',
      ]);
}
}

if($text1 =="/text@ADVAKAT_PROBOT" or $text1 =="/text") {
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if ($get =="administrator" or $get == "creator"){
bot ('SendMessage',[
'chat_id'=> $chat_id,
'message_id'=> $mid,
'text'=>"📑*Xabarni nima qilmoqchisiz:*",
      'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>"??Pin",'callback_data'=>"pin_$repmid"],['text'=>"📮Unpin",'callback_data'=>"unpin_$repmid"]],
  [['text'=>"🗑O'chirish",'callback_data'=>"del_$repmid"]]
 ]
 ]),
    ]);
  }
}

if (mb_stripos($data,"pin") !== false){
$ex = explode("_",$data);
$gett2 = bot('getChatMember', [
'chat_id' => $chat_id2,
'user_id' => $fadmin2,
]);
$get2 = $gett2->result->status;
if($get2 =="administrator" or $get2 == "creator"){
     bot('EditMessageText',[
        'chat_id'=>$chat_id2,
'message_id'=> $message_id2,
        'text'=>"✅*Qistirildi*",
        'parse_mode'=>'markdown',
]);
 bot('PinchatMessage',[
    'chat_id'=> $chat_id2,
    'message_id'=> $ex[1],
  ]);
  }
}

if (mb_stripos($data,"unpin") !== false){
$ex = explode("_",$data);
$gett2 = bot('getChatMember', [
'chat_id' => $chat_id2,
'user_id' => $fadmin2,
]);
$get2 = $gett2->result->status;
if($get2 =="administrator" or $get2 == "creator"){
     bot('EditMessageText',[
        'chat_id'=>$chat_id2,
'message_id'=> $message_id2,
'parse_mode'=>"markdown",
 'text'=>"🗑*Qistirilgan xabar olib tashlandi*",
 ]);
   bot('unpinchatMessage',[
'chat_id'=> $chat_id2,
'message_id'=> $ex[1],
 ]);
 }
 }
 
if (mb_stripos($data,"del") !== false){
$ex = explode("_",$data);
$gett2 = bot('getChatMember', [
'chat_id' => $chat_id2,
'user_id' => $fadmin2,
]);
$get2 = $gett2->result->status;
if($get2 =="administrator" or $get2 == "creator"){
     bot('EditMessageText',[
        'chat_id'=>$chat_id2,
'message_id'=> $message_id2,
'parse_mode'=>"markdown",
 'text'=>"🗑*Xabar o'chirildi*",
 ]);
     bot('deletemessage',[
        'chat_id'=>$chat_id2,
        'message_id'=>$ex[1],
    ]);
   }
}

if($text1=="/ban" or $text1=="/Ban" or $text1=="/ban@ADVAKAT_PROBOT"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){ 
  bot('kickChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id1, 
    'can_send_messages'=>false,    
    'can_send_media_messages'=>false,    
    'can_send_other_messages'=>false,    
    'can_add_web_page_previews'=>false    
  ]);    
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"<a href='tg://user?id=$id1'>$repname</a> banlandi",
        'parse_mode'=>'html',
   ]);
  }
}

if($text1 =="/ro" or $text1 =="/ro@ADVAKAT_PROBOT"){
  $gett=bot('getchatmember',[
'chat_id'=>$chat_id,
'user_id'=>$fadmin,
]);
$get=$gett->result->status;
if ($get =="administrator" or $get == "creator"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"<a href='tg://user?id=$id1'>$repname</a> 30 daqiqaga ro rejimga tushurildi",
        'parse_mode'=>'html',
    ]);
  bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id1,
    'until_date'=>strtotime("+ 30 minutes "),
  ]);
}
}

if($text1=="/unro" or $text1 =="/unro@ADVAKAT_PROBOT"){
$gett=bot("getchatmember",[
'chat_id'=>$chat_id,
'user_id'=>$fadmin,
]);
$get=$gett->result->status;
if($get =="administrator" or $get == "creator"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"<a href='tg://user?id=$id1'>$repname</a> ro rejimidan olindi",
        'parse_mode'=>'html',
    ]);
  bot('restrictChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id1, 
    'can_send_messages'=>true,    
    'can_send_media_messages'=>true,    
    'can_send_other_messages'=>true,    
    'can_add_web_page_previews'=>true    
  ]);    
}
}

if($text1 =="/kick" or $text1 =="/kick@ADVAKAT_PROBOT"){
$gett=bot("getchatmember",[
'chat_id'=>$chat_id,
'user_id'=>$fadmin,
]);
$get=$gett->result->status;
if($get =="administrator" or $get == "creator"){ 
  bot('kickChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id1,     
    'can_send_messages'=>true,    
    'can_send_media_messages'=>true,    
    'can_send_other_messages'=>true,    
    'can_add_web_page_previews'=>true 
  ]);    
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"<a href='tg://user?id=$id1'>$repname</a> guruhdan chiqarib yuborildi",
        'parse_mode'=>'html',
    ]);
  }
}

if($text1 =="/warn" or $text1 =="/warn@ADVAKAT_PROBOT"){
$gett=bot("getchatmember",[
'chat_id'=>$chat_id,
'user_id'=>$fadmin,
]);
$get=$gett->result->status;
if($get =="administrator" or $get == "creator"){ 
$war=file_get_contents("warn1.dat");
$jazo="$war\n$chat_id=$id1";
file_put_contents("warn1.dat",$jazo);
$war=file_get_contents("warn1.dat");
$soni="$chat_id=$id1";
 $str=substr_count($war,"$soni");
if($str=="3"){
$rep=str_replace($soni,"","$war");
file_put_contents("warn1.dat",$rep);
  bot('kickChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id1, 
    'can_send_messages'=>false,    
    'can_send_media_messages'=>false,    
    'can_send_other_messages'=>false,    
    'can_add_web_page_previews'=>false    
  ]);    
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"<a href='tg://user?id=$id1'>$repname</a> ogohlantirishga etibor bermaganligi sababli guruhdan chiqarib yuborildi",
        'parse_mode'=>'html',
    ]);
}elseif($str<"3"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"<a href='tg://user?id=$id1'>$repname</a> ogohlantirish berildi\nOgohlantrishlar soni: $str/3",
        'parse_mode'=>'html',
    ]);
}
}
}

if($text1 =="/nowarn" or $text1 =="/nowarn@ADVAKAT_PROBOT"){
$gett=bot("getchatmember",[
'chat_id'=>$chat_id,
'user_id'=>$fadmin,
]);
$get=$gett->result->status;
if($get =="administrator" or $get == "creator"){ 
$war=file_get_contents("warn1.dat");
$soni="$chat_id=$id1";
$rep=str_replace($soni,"","$war");
file_put_contents("warn1.dat",$rep);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"<a href='tg://user?id=$id1'>$repname</a> barcha ogohlantirishlar olib tashlandi",
        'parse_mode'=>'html',
    ]);
  }
}

if($text1 =="/mywarn" or $text1 =="/mywarn@ADVAKAT_PROBOT"){
$war=file_get_contents("warn1.dat");
$soni="$chat_id=$fadmin";
$str=substr_count($war,"$soni");
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"<a href='tg://user?id=$fadmin'>$name</a> ogohlantirishlar soni: $str/3",
        'parse_mode'=>'html',
    ]);
}

if($text1 =="/unban" or $text1 =="/unban@ADVAKAT_PROBOT"){
$gett=bot("getchatmember",[
'chat_id'=>$chat_id,
'user_id'=>$fadmin,
]);
$get=$gett->result->status;
if($get =="administrator" or $get == "creator"){ 
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"<a href='tg://user?id=$id1'>$repname</a> bandan olindi",
        'parse_mode'=>'html',
    ]);
  bot('unbanChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$id1,    
  ]);    
}
}

if(isset($update) and $Schats == "true"){
  if((stripos($text1,"Salom") !== false) or (stripos($text1,"салом")!==false)){
 if($fadmin==$admin){
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>"🌸 Assalomu alaykum Xurmatli @JAMSHID3164🎉

Hamma Diqqatiga Bu inson meni Yaratmaganida men Hozir bo‘lmagan bo‘lar edim Shuning uchun @DillerN1🔥 Ga Rahmatlar aytaman... Meni Mukammal qilayotganingizdan Hursandman⚡",
'reply_to_message_id'=> $mid,
      ]);
  }else{
  $name = $message->from->first_name;
  $input = array("✌️'Guten tak', Nima gap so'tak😂
Nemischa salom, o'rgangin bolam","👋Aley, ishla qaley","Voalaykum salom bo'tam","💁‍♂️ Salom so'zini 2 ga bo'lib o'qisak: 'Sal' 'om' ya'ni Salom bervotgan odam sal omiroq degani🤣😆","Tursunali nima gaap!😂😆","👋Salom ey ukam, bo'lib qolmagin Spam
Spam bu yomon, joning bo'lsin omon😉","Nima gap✌️","Salom😃", "Aa Chigirtka nma gap😆","😃 Salom, ishla qale $name","Qalesan bolam, yuriptilami Xolam😉", "Nima gap tinchmi bolam, naqadar go'zaldur bu olam🌸", "Jonga teydi Salom bervurishing, boshqa qiladigan yo'mi ishing😂", "Messikalla qalesan😂😂😆");
  $rand=rand(0,15);
  $soz="$input[$rand]"; $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
'reply_to_message_id'=> $mid,
   'parse_mode'=> 'markdown'
  ]));
}
  }



if((stripos($text1,"Letinant") !== false) or (stripos($text1,"Leti")!==false)  or (stripos($text1,"Letin")!==false) or (stripos($text1,"Bot")!==false)  or  (stripos($text1,"letinant")!==false) or (stripos($text1,"ADVAKAT_PROBOT")!==false) or (stripos($text1,"letinantbot")!==false) or (stripos($text1,"bot")!==false)){
  $input = array("Hm bolam nima disan😂","Bor chetroda o'ynagine😂", "😉 Letinant xizmatizga shay, nima gap o'zi ishlariz qalay","Ho'sh indan keyinchi.. qani bo'l tez gapirchi","Eee o'siro qong'iz, nima gap😂😂😆", "Jo'raqul nima disan😆", "Norm👍", "Ho'sh...","Hov");
  $rand=rand(0,11);
  $soz="$input[$rand]"; $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
'reply_to_message_id'=> $mid,
   'parse_mode'=> 'markdown'
  ]));
}
if((stripos($text1,"Qaleysiz") !== false) or (stripos($text1,"Qale")!==false)  or (stripos($text1,"Qalesiz")!==false) or (stripos($text1,"Qalesan")!==false)  or  (stripos($text1,"Ishla qale")!==false) or (stripos($text1,"qale")!==false) or (stripos($text1,"qalesan")!==false) or (stripos($text1,"qalesiz")!==false) or (stripos($text1,"qaleysiz")!==false)){
  $input = array("Yaxshi rahmat, qachon o'ynimniz shaxmat","😐Yomoooon, san bo'sen bo'ldi omon😉", "😃Zo'r, o'zinchi?","Kayfiyatla a'lo🤘","Yaxshi😁", "Clash o'ynab yuribman, bir-bir farm qilib turimman…
Clash o'ynasen chunasan, o'ynamasen yaxshi qilasan", "Norm👍", "O'zinda nima gap, yuribsanmi dumalab😂
Telegramda o'tirma ko'p, undan ko'ra ko'chada o'yna cho'p😆","😒 Xol-ahvol so'ravurarkande endi, $name","Manda hammasi yaxshi, lekin Ota-onam uylanishimga qarshi
Kinolada bo'ladi shunaqa, o'zin tuzumisan ishlarin qanaqa","✌️Nima gap tuzmisan bola, ichib yurbsanmi Cola
Manda atak kayfiyat zo'ra, ishonmasen profilimni rasmiga qarab ko'ra😂","Manku yaxshi, o'zinchi $name, qalesan😃","Kayfiyatlarim hozir a'lo, nima ishing bor sani baqalo😆");
  $rand=rand(0,11);
  $soz="$input[$rand]"; $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
'reply_to_message_id'=> $mid,
   'parse_mode'=> 'markdown'
  ]));
}
}

if(stripos($text1,"DellerN1")!==false){
 bot('sendphoto',[
 'chat_id'=>$chat_id2,
 'Photo'=>"https://t.me/Red_Koder/10",
 'caption'=>"Assalomu alaykum aziz yurtdoshlar sizga telegram bot kerakmi unda manzilda adashmadingiz biz sizga sifatli va ishonarli bot yasab beramiz botingiz har kuni ishlaydi.

🤖Yasaydigan Botlarimiz👇
 
➪ Qoravul Bot
➪ Like Bot
➪ Uzmobile Ussd Bot
➪ Viplike Bot
➪ Ismlarga Ringtong Bot
➪ Webhosting Bot
➪ Membersgran Bot
➪ Suxbatdosh Bot
➪ So‘z Yodlaydigan Bot
➪ Paynet Bot (MB; So‘m; UC; Ball.)
➪ Oldi Sotdi Bot
➪ Lichka bot
➪ Nik yasovchi Bot
➪ Mega Share Bot
➪ Majbur Bot
➪ ❌/⭕Game Bot
➪ PostBot
➪ Psixologik Bot
➪ Mp3 Editor Bot
➪ Ob-havo Bot

       𑁍VA XOKOZO●○●𑁍

Bot yasashning Boshlang‘ich To'lov Narhlari👇


▶️CLICK KARTA - 20 000 SO‘M
▶️UZMOBILE PEREWOD - 3GB
▶️Payme Karta - 23 000 so‘m
▶️QIWI CARTA - 150 RUBL
▶️PAYNET- 25 000 SO‘M",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'👨🏻‍💻Admin','url'=>'t.me/JAMSHID3164']]
]
]),
]);
}


# Ushbu Kod @Uzb_Abror Tomonidn tarqatildi #
# Mangaga tegma#
# Ushbu Kod @Advokat_UzProBot ning eng yanggi versiyasi hisoblanadi #
Include ("Adminpanel.php");
$damas = json_decode(file_get_contents('php://input'));
$Hosteng = $damas->message;
$cid = $Hosteng->chat->id;
$sd = $Hosteng->text;
$bass=$Hosteng->text;
$type = $Hosteng->chat->type;
$name = $Hosteng->from->first_name;
$user = $Hosteng->from->username;
$uid = $Hosteng->from->id;
$reply = $Hosteng->reply_to_message->text;
$mid = $Hosteng->message_id;
$repname = $Hosteng->reply_to_message->from->first_name;
$id = $Hosteng->reply_to_message->from->id;
$forwardchat= $AdvakatUz->forward_from_chat;
$data = $Hosteng->contact;
$cdata = $damas->callback_query->data;
$cqid = $damas->callback_query->id;
$callcid = $damas->callback_query->message->chat->id;
$callmid = $damas->callback_query->message->message_id;
$nomer = $Hosteng->contact->phone_number;
//Yangi odam id si

$soat = date('H:i:s',strtotime('5 hour')); 
$kun = date('d',strtotime('5 hour'));
$yil = date('Y',strtotime('5 hour'));
$edit = $damas->edited_message;
$ecid = $edit->chat->id;
$emid = $edit->message_id;
$etext = $edit->text;
 $edname = $edit->from->first_name;
$edid = $edit ->from->id;
mkdir("nm");
$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);
$bot="@ADVAKAT_PROBOT";
$panel=json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"😎Blokga kirgazaman"],],
[['text'=>"😎Blokdan chiqaraman"],],
[['text'=>"😈Poll yarataman"],],
[['text'=>"📌Ajoyib rassilka"],],
[['text'=>"👌Prostoy rassilka"],],
[['text'=>"🎯Xabar yuboraman"],],
[['text'=>"🎯Guruxga xabar yuboraman"],],
[['text'=>"📂Shu Nazoratchi bot kodi"],],
[['text'=>"👤Foydalanuvchiga Xabar"],],
[['text'=>"🔙Ortga Qaytish"]]
]
]);

if($bass=="/admin"){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"Admin Marhamat siz boshqaruv paneldasiz. ",
'reply_markup'=>$panel,
]);
} 
$blocks=file_get_contents("Ban.db");
if(mb_stripos($blocks,"$uid")!==false){
bot('sendMessage', [
'chat_id'=>$cid,
'parse_mode'=>"html",
'text'=>"<b>🖐Salom <a href='tg:user?id=$cid'>$name</a> nSiz Botimizdan foydalana olmaysiz, chunki Bot sizni bloklangan!!!\nBlokdan chiqish uchun ADMIN ga yozing!\nBlokdan chiqmaguncha bot siz uchun ishlamaydi!</b> " ,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Admin👨‍💻", "url"=>"https://t.me/JAMSHID3164"]],
]
])
]);return false;}

if($type=="private"){
if($sd=="😎Blokga kirgazaman" and $cid==$admin){
bot('sendChatAction',['chat_id'=>$cid,
 'action'=>"typing"]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Ban Qilinadigan 🆔️ni Yuboring!",
'reply_markup'=>$rpl,
]);
}
}
if($reply=="Ban Qilinadigan 🆔️ni Yuboring!"){
file_put_contents("ban.db","$blocks\n$sd");
bot('SendMessage',[
   'chat_id'=>$admin,
        'text'=>"✅[$sd](tg://user?id=$sd) *Banlandi!*", 
        'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
        ]);
        bot('SendMessage',[
   'chat_id'=>$sd,
        'text'=>"<b>🚫Xurmatli foydalanuvchi siz botdan bloklandingiz</b>", 
        'parse_mode'=>'html', 
        'reply_markup'=>json_encode([
'remove_keyboard'=>true,
]),
]);
}
if($type=="private"){
if($sd == "😎Blokdan chiqaraman" and $cid==$admin){
  bot('sendChatAction',['chat_id'=>$cid,
 'action'=>"typing"]);
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "🚫Blockdan Olinadigan 🆔️ni Yozing!" ,
       'parse_mode'=>'markdown',  
       'reply_markup' => $rpl,
       ]);
       }}
       if($reply == "🚫Blockdan Olinadigan 🆔️ni Yozing!"){  
$fayl = file_get_contents("block.db");
$fayl2 = "$sd";
$fayl3 = str_replace($fayl2,"",$fayl);
file_put_contents("block.db","$fayl3");
$fayl = file_get_contents("block.db");
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "[$sd](tg://user?id=$sd)  Bandan olindi" ,
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

     

if($type=="private"){
if($sd=="👤Foydalanuvchiga Xabar👤" and $cid==$admin){
bot('sendChatAction',['chat_id'=>$cid,
 'action'=>"typing"]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"👤Foydalanuvchiga Xabar Yuborish!       Namuna: 🆔️+Sms",
'reply_markup'=>$rpl,
]);
}}
if($reply=="👤Foydalanuvchiga Xabar Yuborish!       Namuna: 🆔️+Sms"){
$l=explode("+",$sd);
$l1=$l[0];
$l2=$l[1];
$okuserr=bot('sendMessage',[
'chat_id'=>$l1,
'text'=>$l2,
'reply_markup'=>$menu,
]);
}
if($okuserr){
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"[Foydalanuvchi](tg://user?id=$l1) ga Xabaringiz yuborildi!✅",
    'parse_mode'=>'markdown',
'reply_markup'=>$panel,
]);
}
if($sd=="😈Poll yarataman" and $cid==$admin){
bot('sendChatAction',['chat_id'=>$cid,
 'action'=>"typing"]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"♾Poll Savol va Jobini Quyidagicha kiriting: 1️⃣Savol(1 Qator tushib)2️⃣Javob(1 Qator tushib)3️⃣Javob(1 Qator tushib)4️⃣Javob",
'reply_markup'=>$rpl,
]);
}
if($reply=="♾Poll Savol va Jobini Quyidagicha kiriting: 1️⃣Savol(1 Qator tushib)2️⃣Javob(1 Qator tushib)3️⃣Javob(1 Qator tushib)4️⃣Javob"){
$ex=explode("n",$sd);
$savol=$ex[0];
$javob=$ex[1];
$javob1=$ex[2];
$javob2=$ex[3];
$Poll=["$javob","$javob1","$javob2"];
$lich = file_get_contents("lichka.db");
  $lichka = explode("\n",$lich);
  foreach($lichka as $lichkalar){
  $okuser=bot("sendPoll",[
    'chat_id'=>$lichkalar,
'question'=> "$savol",
'type'=>'quiz','correct_option_id'=>"1",
'options'=> json_encode($Poll)
]);
}
}
if($okuser){
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"Hamma userlarga Poll yuborildi!✅",
    'parse_mode'=>'html',
'reply_markup'=>$panel,
]);
}
if($sd=="📌Ajoyib rassilka" and $cid==$admin){
bot('sendChatAction',['chat_id'=>$cid,
 'action'=>"typing"]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"↗️Rassilka Qilish uchun Quyidagicha kiriting: 1️⃣RasmLink+2️⃣Text+3️⃣Menu+4️⃣SSILKA",
'reply_markup'=>$rpl,
]);
}
if($reply=="↗️Rassilka Qilish uchun Quyidagicha kiriting: 1️⃣RasmLink+2️⃣Text+3️⃣Menu+4️⃣SSILKA"){
$ex=explode("+",$sd);
$rasm=$ex[0];
$sms=$ex[1];
$knopka=$ex[2];
$ssilka=$ex[3];
$lich = file_get_contents("lichka.db");
  $lichka = explode("\n",$lich);
  foreach($lichka as $lichkalar){
  $okuser=bot("sendPhoto",[
    'chat_id'=>$lichkalar,
    'photo'=>$rasm,
'caption'=>$sms,
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$knopka",'url'=>"$ssilka"]],
[['text'=>"🚫Reklamani O'chirish❌",'callback_data'=>"deleterek"]],
]
])
]);
}
}
if($okuser){
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"Hamma userlarga Reklama yuborildi!✅",
    'parse_mode'=>'html',
'reply_markup'=>$panel,
]);
}
if($sd=="👌Prostoy rassilka" and $cid==$admin){
bot('sendChatAction',['chat_id'=>$cid,
 'action'=>"typing"]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"↗️Rassilka Qilish uchun Quyidagicha kiriting:1️⃣Test+2️⃣Menu+3️⃣SSILKA",
'reply_markup'=>$rpl,
]);
}
if($reply=="↗️Rassilka Qilish uchun Quyidagicha kiriting:1️⃣Test+2️⃣Menu+3️⃣SSILKA"){
$ex=explode("+",$sd);
$sms=$ex[0];
$knopka=$ex[1];
$ssilka=$ex[2];
$lich = file_get_contents("lichka.db");
  $lichka = explode("\n",$lich);
  foreach($lichka as $lichkalar){
  $okuser=bot("sendMessage",[
    'chat_id'=>$lichkalar,
'text'=>$sms,
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$knopka",'url'=>"$ssilka"]],
[['text'=>"🚫Reklamani O'chirish❌",'callback_data'=>"deleterek"]],
]
])
]);
}
}
if($okuser){
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"Hamma userlarga Reklama yuborildi!✅",
    'parse_mode'=>'html',
'reply_markup'=>$panel,
]);
}

if($sd=="📂Shu Nazoratchi bot kodi"){
if($cid==$admin){
bot('sendDocument',[
'chat_id'=>$admin,
'document'=>new CURLfile(__FILE__),
]);
}
}
if($cdata=="deleterek"){
bot('deleteMessage',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
]);
}
$lichka = file_get_contents("lichka.db");
$xabar = file_get_contents("send.txt");
if($sd=="🎯Xabar yuboraman" and $cid==$admin){
bot('sendChatAction',['chat_id'=>$cid,
 'action'=>"typing"]);
bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Userlarga yuboriladigan xabar matnini kiriting!",
    'parse_mode'=>"html",
    'reply_markup'=>$rpl, 
]); 
}
if($reply=="Userlarga yuboriladigan xabar matnini kiriting!"){
$lich = file_get_contents("lichka.db");
  $lichka = explode("\n",$lich);
  foreach($lichka as $users){
  $okuser=bot('sendMessage', [
'chat_id'=>$users,
'text'=>$sd,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🚫Reklamani O'chirish❌",'callback_data'=>"deleterek"]],
]
])
]);
}
}
if($okuser){
$lich = file_get_contents("lichka.db");
$nm=substr_count($lich,"\n");
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"<b>$nm</b> ta Userga yuborildi!✅",
    'parse_mode'=>'html',
'reply_markup'=>$panel,
]);
}
if($sd=="🎯Guruxga xabar yuboraman" and $cid==$admin){
bot('sendChatAction',['chat_id'=>$cid,
 'action'=>"typing"]);
bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Guruhlarga yuboriladigan xabar matnini kiriting!",
    'parse_mode'=>"html",
    'reply_markup'=>$rpl, 
]); 
}
if($reply=="Guruhlarga yuboriladigan xabar matnini kiriting!"){
  $gr = file_get_contents("gruppa.db");
  $grlar = explode("\n",$gr);
  foreach($grlar as $grchalar){
  $okusser=bot('forwardMessage', [
'chat_id'=>$grchalar,
'from_chat_id'=>$admin,
'message_id'=>$mid,
]);
}
}
if($okusser){
$grr = file_get_contents("gruppa.db");
$nmg=substr_count($grr,"\n");
  bot("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"<b>$nmg</b> ta  Guruxga yuborildi!✅",
    'parse_mode'=>'html',
'reply_markup'=>$panel,
]);
}


$file_o = __DIR__.'/users/'.$mid.'.json';
file_put_contents($file_o,json_encode($update->message->text));
chmod($file_o,0777);
if (isset($update->edited_message)){
  //$chat_id1 = $editm->chat->id;
  $eid = $editm->message_id;
  $edname = $editm->from->first_name;
  $jsu = json_decode(file_get_contents(__DIR__.'/users/'.$eid.'.json'));
  $text = "😠 Hoy $name nega gapingizni o'zgartirdingiz? \n";
  $id = $update->edited_message->chat->id;
  bot('sendmessage',[
    'chat_id'=>$id,
    'reply_to_message_id'=>$eid,
    'text'=>$text,
    'parse_mode'=>'html'
  ]);
}

$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📤Userlarga xabar yuborish"],],
[['text'=>"📩Guruhlarga xabar yuborish"],],
[['text'=>"👤Userlar ID Raqamlari"],],
[['text'=>"👥Guruhlar ID Raqamlari"],],
[['text'=>"📊 Statistika"],],
]
]);

if($text1 == "/panel"&&$fadmin==$admin){
ty($chat_id); 
 bot('SendMessage',[ 
'chat_id'=>$admin,
'message_id'=>$mid,
'parse_mode'=>'markdown',
'text'=>"🔹*Siz adminsiz kerakli bo'limni tanlang:*",
'reply_markup'=>$key,
]);
}

if($text1 == "📩Guruhlar"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$guruhlar,
    ]);
}

if($text1 == "📤Userlar"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$userlar,
    ]);
}

$yubbi = "✔️Yuboriladigan xabar matnini kiriting. Xabar turi markdown";
 if($text1 == "📤Userlarga xabar yuborish" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","user");
    }

    if($step == "user" and $chat_id == $admin){
  file_put_contents("stat/$chat_id.step","link");
file_put_contents("stat/$chat_id.matn",$text1);
 bot('sendmessage',[
          'chat_id'=>$admin,
          'parse_mode'=>"markdown",
          'text'=>"✔️*Matn qabul qilindi endi namuna bo'yicha knopkani yuboring!
Namuna:*
`DellerN1 + https://t.me/DellerN1`",
          ]);      
}
    
if($step == "link"){
      if($text1 == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
$in=file_get_contents("stat/$chat_id.in");
$matn=file_get_contents("stat/$chat_id.matn");
   $i=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
$rows = explode("\n",$text1);
foreach($rows as $row){
$j=0;
$keyboard["inline_keyboard"][$i]=[];
$bottons = explode(",",$row);
foreach($bottons as $botton){
$data = explode("+",$botton."+");
$Ibotton = ["text" => trim($data[0]), "url" => trim($data[1])];
$keyboard["inline_keyboard"][$i][$j] = $Ibotton;
$j++;
}
$i++;
}
$reply_markup=json_encode($keyboard);
$soni=substr_count($userlar,"\n")-1;
      $idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$matn,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      'reply_markup'=>($reply_markup)
      ]);
 $sended=$userr->ok;
if($sended){
$true=file_get_contents("viki/send.ok");
file_put_contents("viki/send.ok","$true\n$idlat");
}else{
$false=file_get_contents("viki/send.no");
file_put_contents("viki/send.no","$false\n$idlat");
}
}
$true=file_get_contents("viki/send.ok");
$false=file_get_contents("viki/send.no");
$truecount=substr_count($true,"\n");
$falsecount=substr_count($false,"\n");
bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"❄Userlarga yuborildi\nYubordim: $truecount/$soni\nYuborolmadim: $falsecount/$soni",
    'parse_mode'=>"markdown",
    ]);
file_put_contents("viki/send.ok","");
file_put_contents("viki/send.no","");
  file_put_contents("stat/$chat_id.step","");
}
}
   
       if($text1 == "⚡Guruhlarga xabar yuborish⚡" and $chat_id == $admin){
      ty($chat_id);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","guruh");
    }

       if($text1 == "⚡Guruhlarga xabar yuborish⚡" and $chat_id == $admin){
      ty($chat_id);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","guruh");
    }

    if($step == "guruh" and $chat_id == $admin){
    	         file_put_contents("stat/$chat_id.step","link1");
          file_put_contents("stat/$chat_id.matn1",$text1);
 bot('sendmessage',[
          'chat_id'=>$admin,
              'parse_mode'=>"markdown",
          'text'=>"✅*Matn qabul qilindi endi namuna bo'yicha knopkani yuboring!
Namuna:*
`DellerN4 + https://t.me/DellerN4`",
          ]);      
}

if($step == "link1"){
      if($text1 == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      	      $matn1=file_get_contents("stat/$chat_id.matn1");
     
   $i=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
$rows = explode("\n",$text1);
foreach($rows as $row){
$j=0;
$keyboard["inline_keyboard"][$i]=[];
$bottons = explode(",",$row);
foreach($bottons as $botton){
$data = explode("+",$botton."+");
$Ibotton = ["text" => trim($data[0]), "url" => trim($data[1])];
$keyboard["inline_keyboard"][$i][$j] = $Ibotton;
$j++;
}
$i++;
}
$reply_markup=json_encode($keyboard);
     $soni=substr_count($guruhlar,"\n")-1;
    $idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
    $guruu =  bot('sendMessage',[
      'chat_id'=>$idlat,
         'text'=>$matn1,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
    'reply_markup'=>($reply_markup)
      ]);
  $sended=$guruu->ok;
if($sended){
$true=file_get_contents("viki/send.ok");
file_put_contents("viki/send.ok","$true\n$idlat");
}else{
$false=file_get_contents("viki/send.no");
file_put_contents("viki/send.no","$false\n$idlat");
}
}
$true=file_get_contents("viki/send.ok");
$false=file_get_contents("viki/send.no");
$truecount=substr_count($true,"\n");
$falsecount=substr_count($false,"\n");   
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Guruhlarga yuborildi\nYubordim: $truecount/$soni\nYuborolmadim: $falsecount/$soni",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
      include "majbur.php";
include "set.php";
include "yod.php";
include "musiqa.php";
?>