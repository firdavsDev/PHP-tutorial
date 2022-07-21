##bismillahir_rohmanir_rohim##
<?php
ob_start();
define('API_KEY','1864358806:AAF-4Blqlto2TOqHiyN5rI2yTMq8DGqjqeU');
$admins = array("1636870506");
$kanal = "-1001252897870";
$kanal2 = "-1001288529579";
$sql=mysqli_connect("localhost","ephoto","I7b9Z7p7","ephoto");

function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/$method";
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

function sendAll() {
set_time_limit(0);
ignore_user_abort(true);
ob_end_clean();
header("Connection: close", true);
header("Content-Length: 0");
flush();
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
$mid2 = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$cid2 = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$photo = $message->photo;
$photoid = $message->photo[0]->file_id;
$id = $update->callback_query->id;
$fromid = $message->from->id;
$from_id = $update->callback_query->from->id;
$firstname = $message->from->first_name;
$first_name = $update->callback_query->from->first_name;
$lastname = $message->from->last_name;
$message_id = $update->callback_query->message->message_id;
$step = file_get_contents("step/$cid.step");
mkdir("step");

$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🌌 Logo Yasash 🌌"],['text'=>"👨🏻‍💻Dasturchi👨🏻‍💻"]],
]
]);

function joinchat($id){
     global $message_id,$firstname;
$ret = bot("getChatMember",[
         "chat_id"=>"-1001447345484",
         "user_id"=>$id,
         ]);
$stat = $ret->result->status;
         if(($stat =="creator" or $stat =="administrator" or $stat =="member")){
      return true;
         }else{
     bot("sendMessage",[
         "chat_id"=>$id,
         "text"=>"<i>🕊️ Quyidagi kanallarimizga obuna boʻling. Botni keyin toʻliq ishlatishingiz mumkin!\n\nUlanib boʻlgach</i> <b>✅ Tasdiqlash </b> <i> tugmasini bosing!! ✅</i>",
         "parse_mode"=>"html",
         "reply_to_message_id"=>$message_id,
"disable_web_page_preview"=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"➕ Azo Boʻlish","url"=>"https://t.me/Sevg1Shahri"],],
[["text"=>"✅ Tasdiqlash","callback_data"=>"result"],],
]
]),
]);
}
}

if($data == "result"){
if(joinchat($from_id)=="true"){
	bot('deletemessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
]);
	bot('sendphoto',[
        'photo'=>"https://t.me/EphotoUz/16",
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	'caption'=>"<b>Assalomu alaykum <a href='tg://user?id=$uid'>$name</a>
Ushbu bot orqalik oʻz ismingizga  ajoyib logolar tayorlashingiz mumkin!\n\nDasturchi: @PyCoders_Uz\n\nBot yangiliklari : @EPhoto_Uz</b>",
	'parse_mode'=>"html",
	'reply_markup'=>$key,
]);
$con=mysqli_query($sql,"SELECT user_id FROM users WHERE user_id='$uid' LIMIT 1");
foreach($con as $uz){
$id=$uz["user_id"];
}
if($id){
}else{
mysqli_query($sql,"INSERT INTO users (user_id) VALUES  ('$uid')");
}
}
}


if($text == "/start" or $text == "♻️ Orqaga ♻️"){
if(joinchat($fromid)=="true"){
unlink("step/$cid.step");
	bot('sendphoto',[
        'photo'=>"https://t.me/EphotoUz/16",
	'chat_id'=>$cid,
	'caption'=>"<b>Assalomu alaykum <a href='tg://user?id=$uid'>$name</a>
Ushbu bot orqalik oʻz ismingizga  ajoyib logolar tayorlashingiz mumkin!\n\nDasturchi: @PyCoders_Uz\n\nBot yangiliklari : @EPhoto_Uz</b>",
	'parse_mode'=>"html",
	'reply_markup'=>$key,
]);
$con=mysqli_query($sql,"SELECT user_id FROM users WHERE user_id='$uid' LIMIT 1");
foreach($con as $uz){
$id=$uz["user_id"];
}
if($id){
}else{
mysqli_query($sql,"INSERT INTO users (user_id) VALUES  ('$uid')");
}
}
}



if($text == "👨🏻‍💻Dasturchi👨🏻‍💻"){
if(joinchat($fromid)=="true"){
unlink("step/$cid.step");
  bot('sendphoto',[
    'chat_id'=>$cid,
    'message_id'=>$mid,
    'photo'=>"https://t.me/EphotoUz/14",
    'caption'=>"<b>Dasturchi: @PyCoders_Uz\n\nBot yangiliklari : @EPhoto_Uz</b>",
    'parse_mode'=>"html",
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
[["text"=>'👨🏻‍💻Dasturchi👨🏻‍💻','url'=>"https://t.me/PyCoders_Uz"]],
]
]),
]);
}
}

if($text == "🌌 Logo Yasash 🌌"){
if(joinchat($fromid)=="true"){
unlink("step/$cid.step");
  bot('sendphoto',[
    'chat_id'=>$cid,
    'message_id'=>$mid,
    'photo'=>"https://t.me/EphotoUz/2",
    'caption'=>"<b>O`zingizga kerakli bo'lgan logoni tanlang:</b>",
    'parse_mode'=>"html",
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
[["text"=>'Tanlash✅','callback_data'=>"1t"]],
[["text"=>'⬅️Avvalgi','callback_data'=>"null"],["text"=>'1/10','callback_data'=>"null"],["text"=>'Keyingi➡️','callback_data'=>"k1"],],
]
]),
]);
}
}

if($data == "kb"){
	bot('deletemessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
]);
  bot('sendphoto',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
    'photo'=>"https://t.me/EphotoUz/2",
    'caption'=>"<b>O`zingizga kerakli bo'lgan logoni tanlang:</b>",
    'parse_mode'=>"html",
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
[["text"=>'Tanlash✅','callback_data'=>"1t"]],
[["text"=>'⬅️Avvalgi','callback_data'=>"null"],["text"=>'1/10','callback_data'=>"null"],["text"=>'Keyingi➡️','callback_data'=>"k1"],],
]
]),
]);
}

if($data == "1t"){
    bot('deletemessage',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
]);
    bot('sendmessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	'text'=>"<i><b>Marhamat, ismingizni yuboring..</b></i>\n\n<i>Agar rasm yuborilmasa qayta urining!</i>",
	'parse_mode'=>"html",
]);
file_put_contents("step/$cid2.step",'1t');
}


if($step == "1t"){
if($text != "/start" and $text != "🌌 Logo Yasash 🌌" and $text != "👨🏻‍💻Dasturchi👨🏻‍💻" and $text != "👨🏻‍💻 Admin Panel👨🏻‍💻" and $text != "🚫Tozalash🚫" and $text != "📊 Statistika 📊" and $text != "♻️ Orqaga ♻️" and $text != "👤 Userga Forward 👤" and $text != "👤 Userga Xabar 👤" and $text != "/panel"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>✅ Tayyorlanmoqda biroz kuting...</b>",
	'parse_mode'=>"html",
	'reply_to_message_id'=>$mid,
]);
sleep(2);
$ephoto = json_decode(file_get_contents("https://api.codebazan.ir/ephoto/writeText?output=json&effect=https://en.ephoto360.com/write-text-on-wet-glass-online-589.html&text=$text"),true);
$rasm =$ephoto['image_url'];
    bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid +1,
]);
bot('sendmessage',[
    'chat_id'=>$kanal2,
    'text'=>$rasm,
    'parse_mode'=>"html",
]);
   bot('sendmessage',[
    'chat_id'=>$kanal,
    'text'=>"<b>EPhoto foydalanildi!\n\nIsmni yuborgan foydalanuvchi:</b>\n\n<i><a href='tg://user?id=$uid'>$name</a></i>\n\n<b>Ism quyidagicha kiritildi:</b>\n\n<i><a href='$rasm'>$text</a></i>",
    'parse_mode'=>"html",
]);
   bot('sendphoto',[
   'chat_id'=>$cid,
   'photo'=>$rasm,
   'caption'=>"<b>Sizning rasmingiz tayyor!\n\n@EPhotoUzBot | Do'stlarga xam ulashing!!</b>",
   'parse_mode'=>"html",
   'reply_to_message_id'=>$mid,
]);
unlink("step/$cid.step");
}
}

if($data == "k1"){
	bot('deletemessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
]);
  bot('sendphoto',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
    'photo'=>"https://t.me/EphotoUz/4",
    'caption'=>"<b>O`zingizga kerakli bo'lgan logoni tanlang:</b>",
    'parse_mode'=>"html",
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
[["text"=>'Tanlash✅','callback_data'=>"2t"]],
[["text"=>'⬅️Avvalgi','callback_data'=>"kb"],["text"=>'2/10','callback_data'=>"null"],["text"=>'Keyingi➡️','callback_data'=>"k2"],],
]
]),
]);
}

if($data == "2t"){
    bot('deletemessage',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
]);
    bot('sendmessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	'text'=>"<i><b>Marhamat, ismingizni yuboring..</b></i>\n\n<i>Agar rasm yuborilmasa qayta urining!</i>",
	'parse_mode'=>"html",
]);
file_put_contents("step/$cid2.step",'2t');
}

if($step == "2t"){
if($text != "/start" and $text != "🌌 Logo Yasash 🌌" and $text != "👨🏻‍💻Dasturchi👨🏻‍💻" and $text != "👨🏻‍💻 Admin Panel👨🏻‍💻" and $text != "🚫Tozalash🚫" and $text != "📊 Statistika 📊" and $text != "♻️ Orqaga ♻️" and $text != "👤 Userga Forward 👤" and $text != "👤 Userga Xabar 👤" and $text != "/panel"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>✅ Tayyorlanmoqda biroz kuting...</b>",
	'parse_mode'=>"html",
	'reply_to_message_id'=>$mid,
]);
$ephoto = json_decode(file_get_contents("https://api.codebazan.ir/ephoto/writeText?output=json&effect=https://en.ephoto360.com/create-a-3d-shiny-metallic-text-effect-online-685.html&text=$text"),true);
$rasm =$ephoto['image_url'];
    bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid +1,
]);
bot('sendmessage',[
    'chat_id'=>$kanal2,
    'text'=>$rasm,
    'parse_mode'=>"html",
]);
   bot('sendmessage',[
    'chat_id'=>$kanal,
    'text'=>"<b>EPhoto foydalanildi!\n\nIsmni yuborgan foydalanuvchi:</b>\n\n<i><a href='tg://user?id=$uid'>$name</a></i>\n\n<b>Ism quyidagicha kiritildi:</b>\n\n<i><a href='$rasm'>$text</a></i>",
    'parse_mode'=>"html",
]);
   bot('sendphoto',[
   'chat_id'=>$cid,
   'photo'=>$rasm,
   'caption'=>"<b>Sizning rasmingiz tayyor!\n\n@EPhotoUzBot | Do'stlarga xam ulashing!!</b>",
   'parse_mode'=>"html",
   'reply_to_message_id'=>$mid,
]);
unlink("step/$cid.step");
}
}

if($data == "k2"){
	bot('deletemessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
]);
  bot('sendphoto',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
    'photo'=>"https://t.me/EphotoUz/5",
    'caption'=>"<b>O`zingizga kerakli bo'lgan logoni tanlang:</b>",
    'parse_mode'=>"html",
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
[["text"=>'Tanlash✅','callback_data'=>"3t"]],
[["text"=>'⬅️Avvalgi','callback_data'=>"k1"],["text"=>'3/10','callback_data'=>"null"],["text"=>'Keyingi➡️','callback_data'=>"k3"],],
]
]),
]);
}

if($data == "3t"){
    bot('deletemessage',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
]);
    bot('sendmessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	'text'=>"<i><b>Marhamat, ismingizni yuboring..</b></i>\n\n<i>Agar rasm yuborilmasa qayta urining!</i>",
	'parse_mode'=>"html",
]);
file_put_contents("step/$cid2.step",'3t');
}

if($step == "3t"){
if($text != "/start" and $text != "🌌 Logo Yasash 🌌" and $text != "👨🏻‍💻Dasturchi👨🏻‍💻" and $text != "👨🏻‍💻 Admin Panel👨🏻‍💻" and $text != "🚫Tozalash🚫" and $text != "📊 Statistika 📊" and $text != "♻️ Orqaga ♻️" and $text != "👤 Userga Forward 👤" and $text != "👤 Userga Xabar 👤" and $text != "/panel"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>✅ Tayyorlanmoqda biroz kuting...</b>",
	'parse_mode'=>"html",
	'reply_to_message_id'=>$mid,
]);
$ephoto = json_decode(file_get_contents("https://api.codebazan.ir/ephoto/writeText?output=json&effect=https://en.ephoto360.com/neon-devil-wings-text-effect-online-683.html&text=$text"),true);
$rasm =$ephoto['image_url'];
    bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid +1,
]);
bot('sendmessage',[
    'chat_id'=>$kanal2,
    'text'=>$rasm,
    'parse_mode'=>"html",
]);
   bot('sendmessage',[
    'chat_id'=>$kanal,
    'text'=>"<b>EPhoto foydalanildi!\n\nIsmni yuborgan foydalanuvchi:</b>\n\n<i><a href='tg://user?id=$uid'>$name</a></i>\n\n<b>Ism quyidagicha kiritildi:</b>\n\n<i><a href='$rasm'>$text</a></i>",
    'parse_mode'=>"html",
]);
   bot('sendphoto',[
   'chat_id'=>$cid,
   'photo'=>$rasm,
   'caption'=>"<b>Sizning rasmingiz tayyor!\n\n@EPhotoUzBot | Do'stlarga xam ulashing!!</b>",
   'parse_mode'=>"html",
   'reply_to_message_id'=>$mid,
]);
unlink("step/$cid.step");
}
}

if($data == "k3"){
	bot('deletemessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
]);
  bot('sendphoto',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
    'photo'=>"https://t.me/EphotoUz/6",
    'caption'=>"<b>O`zingizga kerakli bo'lgan logoni tanlang:</b>",
    'parse_mode'=>"html",
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
[["text"=>'Tanlash✅','callback_data'=>"4t"]],
[["text"=>'⬅️Avvalgi','callback_data'=>"k2"],["text"=>'4/10','callback_data'=>"null"],["text"=>'Keyingi➡️','callback_data'=>"k4"],],
]
]),
]);
}

if($data == "4t"){
    bot('deletemessage',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
]);
    bot('sendmessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	'text'=>"<i><b>Marhamat, ismingizni yuboring..</b></i>\n\n<i>Agar rasm yuborilmasa qayta urining!</i>",
	'parse_mode'=>"html",
]);
file_put_contents("step/$cid2.step",'4t');
}

if($step == "4t"){
if($text != "/start" and $text != "🌌 Logo Yasash 🌌" and $text != "👨🏻‍💻Dasturchi👨🏻‍💻" and $text != "👨🏻‍💻 Admin Panel👨🏻‍💻" and $text != "🚫Tozalash🚫" and $text != "📊 Statistika 📊" and $text != "♻️ Orqaga ♻️" and $text != "👤 Userga Forward 👤" and $text != "👤 Userga Xabar 👤" and $text != "/panel"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>✅ Tayyorlanmoqda biroz kuting...</b>",
	'parse_mode'=>"html",
	'reply_to_message_id'=>$mid,
]);
$ephoto = json_decode(file_get_contents("https://api.codebazan.ir/ephoto/writeText?output=json&effect=https://en.ephoto360.com/create-a-realistic-embroidery-text-effect-online-662.html&text=$text"),true);
$rasm =$ephoto['image_url'];
    bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid +1,
]);
bot('sendmessage',[
    'chat_id'=>$kanal2,
    'text'=>$rasm,
    'parse_mode'=>"html",
]);
   bot('sendmessage',[
    'chat_id'=>$kanal,
    'text'=>"<b>EPhoto foydalanildi!\n\nIsmni yuborgan foydalanuvchi:</b>\n\n<i><a href='tg://user?id=$uid'>$name</a></i>\n\n<b>Ism quyidagicha kiritildi:</b>\n\n<i><a href='$rasm'>$text</a></i>",
    'parse_mode'=>"html",
]);
   bot('sendphoto',[
   'chat_id'=>$cid,
   'photo'=>$rasm,
   'caption'=>"<b>Sizning rasmingiz tayyor!\n\n@EPhotoUzBot | Do'stlarga xam ulashing!!</b>",
   'parse_mode'=>"html",
   'reply_to_message_id'=>$mid,
]);
unlink("step/$cid.step");
}
}

if($data == "k4"){
	bot('deletemessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
]);
  bot('sendphoto',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
    'photo'=>"https://t.me/EphotoUz/8",
    'caption'=>"<b>O`zingizga kerakli bo'lgan logoni tanlang:</b>",
    'parse_mode'=>"html",
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
[["text"=>'Tanlash✅','callback_data'=>"5t"]],
[["text"=>'⬅️Avvalgi','callback_data'=>"k3"],["text"=>'5/10','callback_data'=>"null"],["text"=>'Keyingi➡️','callback_data'=>"k5"],],
]
]),
]);
}

if($data == "5t"){
    bot('deletemessage',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
]);
    bot('sendmessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	'text'=>"<i><b>Marhamat, ismingizni yuboring..</b></i>\n\n<i>Agar rasm yuborilmasa qayta urining!</i>",
	'parse_mode'=>"html",
]);
file_put_contents("step/$cid2.step",'5t');
}

if($step == "5t"){
if($text != "/start" and $text != "🌌 Logo Yasash 🌌" and $text != "👨🏻‍💻Dasturchi👨🏻‍💻" and $text != "👨🏻‍💻 Admin Panel👨🏻‍💻" and $text != "🚫Tozalash🚫" and $text != "📊 Statistika 📊" and $text != "♻️ Orqaga ♻️" and $text != "👤 Userga Forward 👤" and $text != "👤 Userga Xabar 👤" and $text != "/panel"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>✅ Tayyorlanmoqda biroz kuting...</b>",
	'parse_mode'=>"html",
	'reply_to_message_id'=>$mid,
]);
$ephoto = json_decode(file_get_contents("https://api.codebazan.ir/ephoto/writeText?output=json&effect=https://en.ephoto360.com/write-text-effect-clouds-in-the-sky-online-619.html&text=$text"),true);
$rasm =$ephoto['image_url'];
    bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid +1,
]);
bot('sendmessage',[
    'chat_id'=>$kanal2,
    'text'=>$rasm,
    'parse_mode'=>"html",
]);
   bot('sendmessage',[
    'chat_id'=>$kanal,
    'text'=>"<b>EPhoto foydalanildi!\n\nIsmni yuborgan foydalanuvchi:</b>\n\n<i><a href='tg://user?id=$uid'>$name</a></i>\n\n<b>Ism quyidagicha kiritildi:</b>\n\n<i><a href='$rasm'>$text</a></i>",
    'parse_mode'=>"html",
]);
   bot('sendphoto',[
   'chat_id'=>$cid,
   'photo'=>$rasm,
   'caption'=>"<b>Sizning rasmingiz tayyor!\n\n@EPhotoUzBot | Do'stlarga xam ulashing!!</b>",
   'parse_mode'=>"html",
   'reply_to_message_id'=>$mid,
]);
unlink("step/$cid.step");
}
}

if($data == "k5"){
	bot('deletemessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
]);
  bot('sendphoto',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
    'photo'=>"https://t.me/EphotoUz/9",
    'caption'=>"<b>O`zingizga kerakli bo'lgan logoni tanlang:</b>",
    'parse_mode'=>"html",
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
[["text"=>'Tanlash✅','callback_data'=>"6t"]],
[["text"=>'⬅️Avvalgi','callback_data'=>"k4"],["text"=>'6/10','callback_data'=>"null"],["text"=>'Keyingi➡️','callback_data'=>"k6"],],
]
]),
]);
}

if($data == "6t"){
    bot('deletemessage',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
]);
    bot('sendmessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	'text'=>"<i><b>Marhamat, ismingizni yuboring..</b></i>\n\n<i>Agar rasm yuborilmasa qayta urining!</i>",
	'parse_mode'=>"html",
]);
file_put_contents("step/$cid2.step",'6t');
}

if($step == "6t"){
if($text != "/start" and $text != "🌌 Logo Yasash 🌌" and $text != "👨🏻‍💻Dasturchi👨🏻‍💻" and $text != "👨🏻‍💻 Admin Panel👨🏻‍💻" and $text != "🚫Tozalash🚫" and $text != "📊 Statistika 📊" and $text != "♻️ Orqaga ♻️" and $text != "👤 Userga Forward 👤" and $text != "👤 Userga Xabar 👤" and $text != "/panel"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>✅ Tayyorlanmoqda biroz kuting...</b>",
	'parse_mode'=>"html",
	'reply_to_message_id'=>$mid,
]);
$ephoto = json_decode(file_get_contents("https://api.codebazan.ir/ephoto/writeText?output=json&effect=https://en.ephoto360.com/write-in-sand-summer-beach-online-free-595.html&text=$text"),true);
$rasm =$ephoto['image_url'];
    bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid +1,
]);
bot('sendmessage',[
    'chat_id'=>$kanal2,
    'text'=>$rasm,
    'parse_mode'=>"html",
]);
   bot('sendmessage',[
    'chat_id'=>$kanal,
    'text'=>"<b>EPhoto foydalanildi!\n\nIsmni yuborgan foydalanuvchi:</b>\n\n<i><a href='tg://user?id=$uid'>$name</a></i>\n\n<b>Ism quyidagicha kiritildi:</b>\n\n<i><a href='$rasm'>$text</a></i>",
    'parse_mode'=>"html",
]);
   bot('sendphoto',[
   'chat_id'=>$cid,
   'photo'=>$rasm,
   'caption'=>"<b>Sizning rasmingiz tayyor!\n\n@EPhotoUzBot | Do'stlarga xam ulashing!!</b>",
   'parse_mode'=>"html",
   'reply_to_message_id'=>$mid,
]);
unlink("step/$cid.step");
}
}

if($data == "k6"){
	bot('deletemessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
]);
  bot('sendphoto',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
    'photo'=>"https://t.me/EphotoUz/10",
    'caption'=>"<b>O`zingizga kerakli bo'lgan logoni tanlang:</b>",
    'parse_mode'=>"html",
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
[["text"=>'Tanlash✅','callback_data'=>"7t"]],
[["text"=>'⬅️Avvalgi','callback_data'=>"k5"],["text"=>'7/10','callback_data'=>"null"],["text"=>'Keyingi➡️','callback_data'=>"k7"],],
]
]),
]);
}

if($data == "7t"){
    bot('deletemessage',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
]);
    bot('sendmessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	'text'=>"<i><b>Marhamat, ismingizni yuboring..</b></i>\n\n<i>Agar rasm yuborilmasa qayta urining!</i>",
	'parse_mode'=>"html",
]);
file_put_contents("step/$cid2.step",'7t');
}

if($step == "7t"){
if($text != "/start" and $text != "🌌 Logo Yasash 🌌" and $text != "👨🏻‍💻Dasturchi👨🏻‍💻" and $text != "👨🏻‍💻 Admin Panel👨🏻‍💻" and $text != "🚫Tozalash🚫" and $text != "📊 Statistika 📊" and $text != "♻️ Orqaga ♻️" and $text != "👤 Userga Forward 👤" and $text != "👤 Userga Xabar 👤" and $text != "/panel"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>✅ Tayyorlanmoqda biroz kuting...</b>",
	'parse_mode'=>"html",
	'reply_to_message_id'=>$mid,
]);
$ephoto = json_decode(file_get_contents("https://api.codebazan.ir/ephoto/writeText?output=json&effect=https://en.ephoto360.com/making-neon-light-text-effect-with-galaxy-style-521.html&text=$text"),true);
$rasm =$ephoto['image_url'];
    bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid +1,
]);
bot('sendmessage',[
    'chat_id'=>$kanal2,
    'text'=>$rasm,
    'parse_mode'=>"html",
]);
   bot('sendmessage',[
    'chat_id'=>$kanal,
    'text'=>"<b>EPhoto foydalanildi!\n\nIsmni yuborgan foydalanuvchi:</b>\n\n<i><a href='tg://user?id=$uid'>$name</a></i>\n\n<b>Ism quyidagicha kiritildi:</b>\n\n<i><a href='$rasm'>$text</a></i>",
    'parse_mode'=>"html",
]);
   bot('sendphoto',[
   'chat_id'=>$cid,
   'photo'=>$rasm,
   'caption'=>"<b>Sizning rasmingiz tayyor!\n\n@EPhotoUzBot | Do'stlarga xam ulashing!!</b>",
   'parse_mode'=>"html",
   'reply_to_message_id'=>$mid,
]);
unlink("step/$cid.step");
}
}

if($data == "k7"){
	bot('deletemessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
]);
  bot('sendphoto',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
    'photo'=>"https://t.me/EphotoUz/11",
    'caption'=>"<b>O`zingizga kerakli bo'lgan logoni tanlang:</b>",
    'parse_mode'=>"html",
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
[["text"=>'Tanlash✅','callback_data'=>"8t"]],
[["text"=>'⬅️Avvalgi','callback_data'=>"k6"],["text"=>'8/10','callback_data'=>"null"],["text"=>'Keyingi➡️','callback_data'=>"k8"],],
]
]),
]);
}

if($data == "8t"){
    bot('deletemessage',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
]);
    bot('sendmessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	'text'=>"<i><b>Marhamat, ismingizni yuboring..</b></i>\n\n<i>Agar rasm yuborilmasa qayta urining!</i>",
	'parse_mode'=>"html",
]);
file_put_contents("step/$cid2.step",'8t');
}

if($step == "8t"){
if($text != "/start" and $text != "🌌 Logo Yasash 🌌" and $text != "👨🏻‍💻Dasturchi👨🏻‍💻" and $text != "👨🏻‍💻 Admin Panel👨🏻‍💻" and $text != "🚫Tozalash🚫" and $text != "📊 Statistika 📊" and $text != "♻️ Orqaga ♻️" and $text != "👤 Userga Forward 👤" and $text != "👤 Userga Xabar 👤" and $text != "/panel"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>✅ Tayyorlanmoqda biroz kuting...</b>",
	'parse_mode'=>"html",
	'reply_to_message_id'=>$mid,
]);
$ephoto = json_decode(file_get_contents("https://api.codebazan.ir/ephoto/writeText?output=json&effect=https://en.ephoto360.com/free-create-a-3d-hologram-text-effect-441.html&text=$text"),true);
$rasm =$ephoto['image_url'];
    bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid +1,
]);
bot('sendmessage',[
    'chat_id'=>$kanal2,
    'text'=>$rasm,
    'parse_mode'=>"html",
]);
   bot('sendmessage',[
    'chat_id'=>$kanal,
    'text'=>"<b>EPhoto foydalanildi!\n\nIsmni yuborgan foydalanuvchi:</b>\n\n<i><a href='tg://user?id=$uid'>$name</a></i>\n\n<b>Ism quyidagicha kiritildi:</b>\n\n<i><a href='$rasm'>$text</a></i>",
    'parse_mode'=>"html",
]);
   bot('sendphoto',[
   'chat_id'=>$cid,
   'photo'=>$rasm,
   'caption'=>"<b>Sizning rasmingiz tayyor!\n\n@EPhotoUzBot | Do'stlarga xam ulashing!!</b>",
   'parse_mode'=>"html",
   'reply_to_message_id'=>$mid,
]);
unlink("step/$cid.step");
}
}

if($data == "k8"){
	bot('deletemessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
]);
  bot('sendphoto',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
    'photo'=>"https://t.me/EphotoUz/12",
    'caption'=>"<b>O`zingizga kerakli bo'lgan logoni tanlang:</b>",
    'parse_mode'=>"html",
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
[["text"=>'Tanlash✅','callback_data'=>"9t"]],
[["text"=>'⬅️Avvalgi','callback_data'=>"k7"],["text"=>'9/10','callback_data'=>"null"],["text"=>'Keyingi➡️','callback_data'=>"k9"],],
]
]),
]);
}

if($data == "9t"){
    bot('deletemessage',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
]);
    bot('sendmessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	'text'=>"<i><b>Marhamat, ismingizni yuboring..</b></i>\n\n<i>Agar rasm yuborilmasa qayta urining!</i>",
	'parse_mode'=>"html",
]);
file_put_contents("step/$cid2.step",'9t');
}

if($step == "9t"){
if($text != "/start" and $text != "🌌 Logo Yasash 🌌" and $text != "👨🏻‍💻Dasturchi👨🏻‍💻" and $text != "👨🏻‍💻 Admin Panel👨🏻‍💻" and $text != "🚫Tozalash🚫" and $text != "📊 Statistika 📊" and $text != "♻️ Orqaga ♻️" and $text != "👤 Userga Forward 👤" and $text != "👤 Userga Xabar 👤" and $text != "/panel"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>✅ Tayyorlanmoqda biroz kuting...</b>",
	'parse_mode'=>"html",
	'reply_to_message_id'=>$mid,
]);
$ephoto = json_decode(file_get_contents("https://api.codebazan.ir/ephoto/writeText?output=json&effect=https://en.ephoto360.com/create-galaxy-style-free-name-logo-438.html&text=$text"),true);
$rasm =$ephoto['image_url'];
    bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid +1,
]);
bot('sendmessage',[
    'chat_id'=>$kanal2,
    'text'=>$rasm,
    'parse_mode'=>"html",
]);
   bot('sendmessage',[
    'chat_id'=>$kanal,
    'text'=>"<b>EPhoto foydalanildi!\n\nIsmni yuborgan foydalanuvchi:</b>\n\n<i><a href='tg://user?id=$uid'>$name</a></i>\n\n<b>Ism quyidagicha kiritildi:</b>\n\n<i><a href='$rasm'>$text</a></i>",
    'parse_mode'=>"html",
]);
   bot('sendphoto',[
   'chat_id'=>$cid,
   'photo'=>$rasm,
   'caption'=>"<b>Sizning rasmingiz tayyor!\n\n@EPhotoUzBot | Do'stlarga xam ulashing!!</b>",
   'parse_mode'=>"html",
   'reply_to_message_id'=>$mid,
]);
unlink("step/$cid.step");
}
}

if($data == "k9"){
	bot('deletemessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
]);
  bot('sendphoto',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
    'photo'=>"https://t.me/EphotoUz/13",
    'caption'=>"<b>O`zingizga kerakli bo'lgan logoni tanlang:</b>",
    'parse_mode'=>"html",
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
[["text"=>'Tanlash✅','callback_data'=>"10t"]],
[["text"=>'⬅️Avvalgi','callback_data'=>"k8"],["text"=>'10/10','callback_data'=>"null"],["text"=>'Keyingi➡️','callback_data'=>"null"],],
]
]),
]);
}

if($data == "10t"){
    bot('deletemessage',[
    'chat_id'=>$cid2,
    'message_id'=>$mid2,
]);
    bot('sendmessage',[
	'chat_id'=>$cid2,
	'message_id'=>$mid2,
	'text'=>"<i><b>Marhamat, ismingizni yuboring..</b></i>\n\n<i>Agar rasm yuborilmasa qayta urining!</i>",
	'parse_mode'=>"html",
]);
file_put_contents("step/$cid2.step",'10t');
}

if($step == "10t"){
if($text != "/start" and $text != "🌌 Logo Yasash 🌌" and $text != "👨🏻‍💻Dasturchi👨🏻‍💻" and $text != "👨🏻‍💻 Admin Panel👨🏻‍💻" and $text != "🚫Tozalash🚫" and $text != "📊 Statistika 📊" and $text != "♻️ Orqaga ♻️" and $text != "👤 Userga Forward 👤" and $text != "👤 Userga Xabar 👤" and $text != "/panel"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>✅ Tayyorlanmoqda biroz kuting...</b>",
	'parse_mode'=>"html",
	'reply_to_message_id'=>$mid,
]);
$ephoto = json_decode(file_get_contents("https://api.codebazan.ir/ephoto/writeText?output=json&effect=https://en.ephoto360.com/create-light-effects-green-neon-online-429.html&text=$text"),true);
$rasm =$ephoto['image_url'];
    bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid +1,
]);
bot('sendmessage',[
    'chat_id'=>$kanal2,
    'text'=>$rasm,
    'parse_mode'=>"html",
]);
   bot('sendmessage',[
    'chat_id'=>$kanal,
    'text'=>"<b>EPhoto foydalanildi!\n\nIsmni yuborgan foydalanuvchi:</b>\n\n<i><a href='tg://user?id=$uid'>$name</a></i>\n\n<b>Ism quyidagicha kiritildi:</b>\n\n<i><a href='$rasm'>$text</a></i>",
    'parse_mode'=>"html",
]);
   bot('sendphoto',[
   'chat_id'=>$cid,
   'photo'=>$rasm,
   'caption'=>"<b>Sizning rasmingiz tayyor!\n\n@EPhotoUzBot | Do'stlarga xam ulashing!!</b>",
   'parse_mode'=>"html",
   'reply_to_message_id'=>$mid,
]);
unlink("step/$cid.step");
}
}


//admin uchun

$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🚫Tozalash🚫"],['text'=>"📊 Statistika 📊"]],
[['text'=>"👤 Userga Xabar 👤"],['text'=>"👤 Userga Forward 👤"]],
[['text'=>"♻️ Orqaga ♻️"]],
]
]);


if($text == "/panel" or $text == "👨🏻‍💻 Admin Panel👨🏻‍💻"){
if(joinchat($fromid)=="true"){
if(in_array($uid, $admins)){
           bot('sendmessage',[
           'chat_id'=>$cid,
           'text'=>"<i><b>Siz adminsiz kerakli tugmani tanlang!!</b></i>",
           'parse_mode'=>"html",
           'reply_markup'=>$panel,
]);
}else{
if($text == "/panel" and $cid){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Siz bot adminstratori emas siz!!</b>",
	'parse_mode'=>"html",
	'reply_to_message_id'=>$mid,
	'reply_markup'=>$key,
]);
}
}
}
}


if($text == "🚫Tozalash🚫"){
if(in_array($uid, $admins)){
unlink("step/$cid.step");
unlink("step/$cid2.step");
           bot('sendmessage',[
           'chat_id'=>$cid,
           'text'=>"<i><b>Kesh tozalandi!!</b></i>",
           'parse_mode'=>"html",
           'reply_markup'=>$panel,
]);
rmdir("step");
}
}



if($text == "📊 Statistika 📊"){
if(in_array($uid, $admins)){
if(joinchat($fromid)=="true"){
$odam=mysqli_query($sql,"SELECT `user_id` FROM `users`");
$onomer=mysqli_num_rows($odam);
$odamm=mysqli_query($sql,"SELECT `group_id` FROM `groups`");
$gnomer=mysqli_num_rows($odamm);
$umumiy=$onomer+$gnomer;
           bot('sendmessage',[
           'chat_id'=>$cid,
           'text'=>"<b>👭 Barcha Foydalanuvchilar:</b> <i>$umumiy</i>\n\n<b>🙋🏻‍♂️ Foydalanuvchilar:</b> <i>$onomer</i>\n\n<b>👨‍👨‍👧 Guruhlar:</b> <i>$gnomer</i>\n\n<b>Dasturchi: @PyCoders_Uz\n\nBot yangiliklari : @EPhoto_Uz</b>",
           'parse_mode'=>"html",
            'reply_markup'=> json_encode([
            'inline_keyboard'=>[
[["text"=>'👨🏻‍💻Dasturchi👨🏻‍💻','url'=>"https://t.me/PyCoders_Uz"]],
]
]),
]);
}
}
}

//Send Function

$text = $message->text;
$step1 = file_get_contents("step.dat");

if($text == "👤 Userga Xabar 👤"){
if(in_array($uid, $admins)){
$content = ['chat_id' => $cid, 'text' =>"*Yuboriladigan Habarni kiriting!*", 'parse_mode' => "markdown"];
bot('sendMessage',$content);
file_put_contents("step.dat", "send");
exit;
}
}

if($step1 == "send"){
if(in_array($uid, $admins)){
if($text != "/start" and $text != "🌌 Logo Yasash 🌌" and $text != "👨🏻‍💻Dasturchi👨🏻‍💻" and $text != "👨🏻‍💻 Admin Panel👨🏻‍💻" and $text != "🚫Tozalash🚫" and $text != "📊 Statistika 📊" and $text != "♻️ Orqaga ♻️" and $text != "👤 Userga Forward 👤" and $text != "👤 Userga Xabar 👤"){
if($message->caption == false and $text == false){
if($message->photo){
file_put_contents("send.dat", "photo~".$message->photo[1]->file_id."~false");
}elseif ($message->video) {
file_put_contents("send.dat", "video~".$message->video->file_id."~false");
}elseif ($message->audio) {
file_put_contents("send.dat", "audio~".$message->audio->file_id."~false");
}elseif ($message->voice) {
file_put_contents("send.dat", "voice~".$message->voice->file_id."~false");
}
}elseif($message->caption and $text == false){
if($message->photo){
file_put_contents("send.dat", "photo~".$message->photo[1]->file_id."~".$message->caption);
}elseif ($message->video) {
file_put_contents("send.dat", "video~".$message->video->file_id."~".$message->caption);
}elseif ($message->audio) {
file_put_contents("send.dat", "audio~".$message->audio->file_id."~".$message->caption);
}elseif ($message->voice) {

file_put_contents("send.dat", "voice~".$message->voice->file_id."~".$message->caption);
}
}elseif ($message->caption == false and $text) {
file_put_contents("send.dat", "text~".$text);
}
$get = file_get_contents("send.dat");
$arr = explode("~", $get);
if($arr[0] != "text"){
  if($arr[2] == "false") $cap = ""; else $cap = $arr[2];
sendAll();
$i = 1;
$result = mysqli_query($sql,"SELECT * FROM users WHERE id >= 1 ORDER BY id DESC;");
while ($value = mysqli_fetch_assoc($result)["user_id"]) {
$content = ['chat_id' => $value, "$arr[0]" => $arr[1], 'caption' => $cap, 'parse_mode' => "html"];
$ok = bot("send".$arr[0],$content)->ok;
if($ok){
$i+=1;
}
unlink("step.dat");
}
$txt = "*Umumiy* $i *foydalanuvchiga xabar yuborildi ✅*";
$content = ['chat_id' => $cid, 'text' => $txt, 'parse_mode' => "markdown"];
bot('sendMessage',$content);
unlink("send.dat");
exit;
}else{
sendAll();
$i = 1;
$result = mysqli_query($sql,"SELECT * FROM users WHERE id >= 1 ORDER BY id DESC;");
while ($value = mysqli_fetch_assoc($result)["user_id"]) {
$content = ['chat_id' => $value, 'text' => $arr[1], 'parse_mode' => "html"];
$ok = bot('sendMessage',$content)->ok;
if($ok){
$i+=1;
}
unlink("step.dat");
}
$txt = "*Umumiy* $i *foydalanuvchiga xabar yuborildi ✅*";
$content = ['chat_id' => $cid, 'text' => $txt, 'parse_mode' => "markdown"];
bot('sendMessage',$content);
unlink("send.dat");
exit;
}
}
}
}


if($text == "👤 Userga Forward 👤"){
if(in_array($uid, $admins)){
$content = ['chat_id' => $cid, 'text' =>"*Yuboriladigan Habarni kiriting!*", 'parse_mode' => "markdown"];
bot('sendMessage',$content);
file_put_contents("step.dat", "sendfor");
exit;
}
}

if($step1 == "sendfor"){
if(in_array($uid, $admins)){
if($text != "/start" and $text != "🌌 Logo Yasash 🌌" and $text != "👨🏻‍💻Dasturchi👨🏻‍💻" and $text != "👨🏻‍💻 Admin Panel👨🏻‍💻" and $text != "🚫Tozalash🚫" and $text != "📊 Statistika 📊" and $text != "♻️ Orqaga ♻️" and $text != "👤 Userga Forward 👤" and $text != "👤 Userga Xabar 👤"){
sendAll();
$i = 1;
$result = mysqli_query($sql,"SELECT * FROM users WHERE id >= 1 ORDER BY id DESC;");
while ($value = mysqli_fetch_assoc($result)["user_id"]) {
$content = ['chat_id' => $value, 'from_chat_id' => $cid, 'message_id' => $mid];
$ok = bot('forwardMessage',$content)->ok;
if($ok){
$i+=1;
}
unlink("step.dat");
}
$txt = "*Umumiy* $i *foydalanuvchiga xabar yuborildi ✅*";
$content = ['chat_id' => $cid, 'text' => $txt, 'parse_mode' => "markdown"];
bot('sendMessage',$content);
}
}
}

?>