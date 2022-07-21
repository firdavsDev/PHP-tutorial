<?php
ob_start();
define('API_KEY','TOKEN'); 
$admin = "ID"; // admin IDsi
$bot="AvtoApiBot";
$apikanal="-KANAL";
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/
$xosty="https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
$xost=str_replace("/AvoApiBot.php","",$xosy);
echo "https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];

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



/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$uid = $message->from->id;
$mid=$message->message_id;
$text=$message->text;
$type = $message->chat->type;
$name = $message->chat->first_name;
$surname = $message->chat->last_name;
$namee="<a href='tg://user?id=$uid'>$name $surname</a>";
$user = $message->from->username;
$soat = date("H:i:s",strtotime("2 hour"));
$sana = date("d\m\Y",strtotime("2 hour"));
$mid2 = $update->callback_query->message->message_id;
$cid2 = $update->callback_query->message->chat->id;
$uid2 = $update->callback_query->from->id;
$name2 = $update->callback_query->from->first_name;
$surname = $update->callback_query->from->last_name;
$cuser = $update->callback_query->from->username;
$namee2="<a href='tg://user?id=$uid2'>$name2 $surname2</a>";
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$photo = $message->photo;
$document=$message->document;
$docname=$document->file_name;
$limite=get("panel/limite.txt");

$reklama="➖➖➖➖
@QRtekshirBot- Orqali QR kodlarni Oson O'qing.";






function put($con,$put){
file_put_contents("$con","$put");
}
function get($get){
return file_get_contents($get);
}

function del($mid2){
global $cid2;
bot('deleteMessage',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
]);
}

function delm(){
global $mid2;
del($mid2);
}
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/
$step=get("step/$cid.step");
$step2=get("step/$uid2.step");
Mkdir("step");
Mkdir("apilar");
mkdir("settings");
mkdir("settings/$uid");
mkdir("apison");

$bck = "🔙Orqaga";
$chat='$type=="private"';

function step($file){
global $uid2;
file_put_contents("step/$uid2.step",$file);
}

function Sms($sms,$menu){
global $cid;
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>$sms,
'parse_mode'=>'html',
'reply_markup'=>$menu,
]);
}

function Sms2($sms,$menu){
global $cid2;
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>$sms,
'parse_mode'=>'html',
'reply_markup'=>$menu,
]);
}


/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/


$back = json_encode([
'inline_keyboard'=>[
[['text'=>"$bck",'callback_data'=>"goback"]],
]
]);

$menu=json_encode([
'inline_keyboard'=>[
[['text'=>"⚙Api Yasash",'callback_data'=>"create"],['text'=>"👤Mening APIlarim📁",'callback_data'=>"myapi"]],
[['text'=>"📝API Kodlarni Yuklab Olish📥",'callback_data'=>"apidown"]],
[['text'=>"👨‍🔧Qo'llab-Quvvatlash",'callback_data'=>"support"],['text'=>"⚠️Qoida❗",'callback_data'=>"rule"]],
[['text'=>"👥Rasmiy Guruximiz",'url'=>"https://t.me/joinchat/y5BHmOYRG3Q0ZWEy"]],
[['text'=>"📽Foydalanish Videosi",'url'=>"https://youtu.be/dWoq6_08b4Q"]],
]
]);
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/

$adminmenu=json_encode([
'inline_keyboard'=>[
[['text'=>"⚙Api Yasash",'callback_data'=>"create"],['text'=>"👤Mening APIlarim📁",'callback_data'=>"myapi"]],
[['text'=>"📝API Kodlarni Yuklab Olish📥",'callback_data'=>"apidown"]],
[['text'=>"👨‍🔧Qo'llab-Quvvatlash",'callback_data'=>"support"],['text'=>"⚠️Qoida❗",'callback_data'=>"rule"]],
[['text'=>"👨‍💻Administrator Paneli👨‍🔧",'callback_data'=>"panel"]],
[['text'=>"📽Foydalanish Videosi",'url'=>"https://youtu.be/dWoq6_08b4Q"]],
]
]);

$blocklar=get("admin/blok.list");
if(mb_stripos($blocklar,"$uid")!==false){
bot('sendMessage', [
'chat_id'=>$uid,
'parse_mode'=>"html",
'text'=>"<b>⛔️ BLOCKDASAN!!!🚫!</b> 

$reklama" ,
]);return false;
}




/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/


if($text=="/start" and $type=="private"){
if($cid==$admin){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
<b>Assalomu Aleykum $namee</b>
Botimiz Orqali Tez, Oson va Qulay Rasm Api yasashingiz mumkin.
Boshlash uchun ⤵️Tugmalardan Foydalaning.

$reklama
",
'parse_mode'=>'html',
'reply_markup'=>$adminmenu,
]);
}else{
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
<b>Assalomu Aleykum $namee</b>
Botimiz Orqali Tez, Oson va Qulay Rasm Api yasashingiz mumkin.
Boshlash uchun ⤵️Tugmalardan Foydalaning.

$reklama
",
'parse_mode'=>'html',
'reply_markup'=>$menu,
]);
}
}


$max=file_get_contents("apison/$uid2.max");
if($data=="create"){
if($max>=$limite){
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"❌Botda API Yasash Limiti $limite ta",'show_alert'=>true,
]);
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"⚠️1 ta APIni qayta-qayta yasagan odam.
Blocklanadi❗",'show_alert'=>true,
]);
del($mid2);
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>⚙API</b> Yasash uchun <b>RASM</b> Yuboring:

⚠️Rasm Soni: <b>1 ta</b>

$reklama",
'parse_mode'=>'html',
'reply_markup'=>$back
]);
step("rasm");
}
}
if($step=="rasm" and $photo){
mkdir("apilar/$uid");
mkdir("apilar/$uid/img");
$son1=get("apison/".$uid.".txt");
$son=$son1+1;
put("apison/".$uid.".txt",$son);
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path; file_put_contents('apilar/'.$uid.'/img/'.$son.'.jpg',file_get_contents('https://api.telegram.org/file/bot'.API_KEY.'/'.$patch));
$midttf=bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
Endi <b>⚙API</b> uchun <b>TTF Shrift</b> Yuboring:

⚠️Shrift Soni: <b>1 ta</b>

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$bck",'callback_data'=>"bekorapi"]],
]
]),
])->result->message_id;
put("step/$cid.step","ttf");
}
if((mb_stripos($docname,".ttf")!==false) or (mb_stripos($docname,".TTF")!==false)){
bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$midttf,
]);
}

if($step=="ttf" and $document){
if((mb_stripos($docname,".ttf")!==false) or (mb_stripos($docname,".TTF")!==false)){
mkdir("apilar/".$uid."/ttf");
$son=get("apison/".$uid.".txt");
mkdir("settings/".$uid."/$son");
$doc_id=$message->document->file_id;
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$doc_id),true);
$path=$url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$okey = file_put_contents("apilar/$uid/ttf/$son.ttf",file_get_contents($file));
bot('sendMessage',['chat_id'=>$cid,
'text'=>"❗<b>API TEXT</b>ni <b>RANG</b>ini Tanlang.
➖➖➖➖
O'ylanib Tugmani bosing. Keyin API Rangini o'zgartira olmaysiz!

$reklama",'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔴Qizil",'callback_data'=>"color=255, 1, 0"],['text'=>"🟠To'q Sariq",'callback_data'=>"color=255, 127, 3"]],
[['text'=>"🟡Sariq",'callback_data'=>"color=255, 245, 1"],['text'=>"🔵Ko'k",'callback_data'=>"color=6, 22, 255"]],
[['text'=>"🟢Yashil",'callback_data'=>"color=2, 255, 3"],['text'=>"🟣Siyoh Rang",'callback_data'=>"color=160, 0, 255"]],
[['text'=>"🟤Jigar Rang",'callback_data'=>"color=139, 58, 0"],['text'=>"⚪Oq",'callback_data'=>"color=255, 255, 255"]],
[['text'=>"⚫Qora",'callback_data'=>"color=0, 0, 0"],['text'=>"⏺Havo Rang",'callback_data'=>"color=90, 186, 255"]],
[['text'=>"$bck",'callback_data'=>"bekorapi"]],
]
]),
]);
put("step/$cid.step","colori_$son");
}else{
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
Ushbu FAYL <b>TTF Shrift</b> emas!

Faqat <b>TTF Shrift</b> Yuboring. 
Aks xolda <b>API</b> Ishlamaydi!

$reklama",
'parse_mode'=>'html',
]);
}
}

/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/
if(mb_stripos($data,"color=")!==false){
del($mid2);
$rang=explode("color=",$data)[1]; 
$id=explode("colori_",$step2)[1];
put("settings/".$uid2."/".$id."/color.txt",$rang);
bot('sendMessage',['chat_id'=>$cid2,
'text'=>"❗<b>API TEXT</b>ni <b>O'LCHAM</b>ini Tanlang!

$reklama",'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"2️⃣0️⃣",'callback_data'=>"size=20"],['text'=>"3️⃣0️⃣",'callback_data'=>"size=30"]],
[['text'=>"4️⃣0️⃣",'callback_data'=>"size=40"],['text'=>"5️⃣0️⃣",'callback_data'=>"size=50"]],
[['text'=>"6️⃣0️⃣",'callback_data'=>"size=60"],['text'=>"7️⃣0️⃣",'callback_data'=>"size=70"]],
[['text'=>"8️⃣0️⃣",'callback_data'=>"size=80"],['text'=>"9️⃣0️⃣",'callback_data'=>"size=90"]],
[['text'=>"1️⃣0️⃣0️⃣",'callback_data'=>"size=100"],['text'=>"1️⃣5️⃣0️⃣",'callback_data'=>"size=150"]],
[['text'=>"$bck",'callback_data'=>"bekorapi"]],
]
]),
]);
step("sizees=$id");
}
if(mb_stripos($data,"size=")!==false){
del($mid2);
$size=explode("size=",$data)[1]; 
$id=str_replace("sizees=","",$step2);
put("settings/".$uid2."/$id/size.txt",$size);
put("settings/".$uid2."/$id/x.txt","2");
put("settings/".$uid2."/$id/y.txt","2");
$rangi1=get("settings/".$uid2."/".$id."/color.txt");
$son=get("apison/".$uid2.".txt");
mkdir("settings/$uid2/$son");
$getapi2=file_get_contents("CreateAPI.php");
file_put_contents("apilar/".$uid2."/".$son.".php",$getapi2);
$apiget=str_replace("[*APISON*]",$son,$getapi2);
$apiget=str_replace("[*UID*]",$uid2,$apiget);
$apiget=str_replace("[*COLOR*]",$rangi1,$apiget);
$trueapi=file_put_contents("apilar/".$uid2."/".$son.".php",$apiget);
$getmid=bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>⚙API</b> Tuzilmoqda. <b>Iltimos</b> kuting...

$reklama",
'parse_mode'=>'html',
])->result->message_id;
unlink("step/$uid2.step");
}

if($trueapi){
$son=get("apison/".$uid2.".txt");
bot('deleteMessage',['chat_id'=>$cid2,'message_id'=>$getmid]);
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
✅Sizning <b>API</b>inyiz Tayyor❗

<b>$xost/apilar/".$uid2."/$son.php?text=AvtoApiBot</b>


Botimizni Do'stlaringizga xam Ulashing!
Ze'ro Ularga xam Yordamimiz tegsin.

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🛠Sozlash",'callback_data'=>"editapi_$son"]],
[['text'=>"$bck",'callback_data'=>"mainmenu"]],
]
]),
]);
$myapi1=get("myapi/$uid2.txt");
put("myapi/$uid2.txt",$myapi1."\n".$son.": - ".$xost."/apilar/".$uid2."/$son.php?text=AvtoApiBot");
$max1=get("apison/$uid2.max");
$max2=$max1+1;
put("apison/$uid2.max",$max2);
bot('sendMessage',[
'chat_id'=>$apikanal,
'text'=>"
✅Yangi <b>API</b> Tayyorlandi❗
👤 $namee2
〽️ @$cuser
🆔️ $uid2

<b>$xost/apilar/".$uid2."/$son.php?text=AvtoApiBot</b>
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🚫Bloklash",'callback_data'=>"addblok=$uid2"]],
[['text'=>"🔓Blokdan Olish",'callback_data'=>"unblok=$uid2"]],
]
]),
]);
}
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/
if(mb_stripos($data,"addblok=")!==false){
$bloklist=get("admin/blok.list");
$id=str_replace("addblok=","",$data);
put("admin/blok.list",$bloklist."\n".$id);
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"$id - Bloklandi",
'show_alert'=>true,
]);
bot('editMessageText',['chat_id'=>$update->channel_post->message->chat->id,
'message_id'=>$update->channel_post->message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔓Blokdan Olish",'callback_data'=>"unblok=$uid2"]],
]
]),
]);
}

if(mb_stripos($data,"unblok=")!==false){
$bloklist=get("admin/blok.list");
$id=str_replace("unblok=","",$data);
$unblok=str_replace("\n$id","",$bloklist);
put("admin/blok.list",$unblok);
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"$id - Blokdan Olindi",
'show_alert'=>true,
]);
}


if($data=="bekorapi"){
del($mid2);
Sms2("❗<b>API YASASH</b> Bekor Qilindi✅

$reklama",$menu);
unlink("step/$uid2.step");
$son1=get("apison/$uid2.txt");
$son=$son1-1;
put("apison/$uid2.txt",$son);
}


mkdir("myapi");
if($data=="myapi"){
if(file_get_contents("myapi/$uid2.txt")){
$myapis=get("myapi/$uid2.txt");
$myapi=explode("\n",$myapis);
$uz = array();
for($s=1;$s<count($myapi);$s++){
$ss=str_replace('1','1️⃣',$s);
$ss=str_replace('2','2️⃣',$ss);
$ss=str_replace('3','3️⃣',$ss);
$ss=str_replace('4','4️⃣',$ss);
$ss=str_replace('5','5️⃣',$ss);
$ss=str_replace('6','6️⃣',$ss);
$ss=str_replace('7','7️⃣',$ss);
$ss=str_replace('8','8️⃣',$ss);
$ss=str_replace('9','9️⃣',$ss);
$ss=str_replace('10','🔟',$ss);
$uz[]=["text"=>$ss,"callback_data"=>"editapi_$s"];
}
$key=array_chunk($uz, 5);
$key[]=[['text'=>$bck,'callback_data'=>"goback"]];
$keyboard=json_encode([
'inline_keyboard'=>$key,
]);
print_r($keyboard);
del($mid2);
unlink("step/$uid2.step");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>Sizning Bot Orqali Yasagan APIlaringiz</b>:

<i>$myapis</i>

$reklama",
'parse_mode'=>'html',
'reply_markup'=>$keyboard,
'disable_web_page_preview'=>true,
]);
}else{
bot('answerCallbackQuery',['callback_query_id'=>$qid,
'text'=>"❌Siz Yasagan APIlar mavjud emas",
'show_alert'=>true,
]);
}
}

/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/
#APILARNI YUKLAB OLISH 

if($data=="apidown"){
if(file_get_contents("myapi/$uid2.txt")){
$myapis=get("myapi/$uid2.txt");
$myapi=explode("\n",$myapis);
$uz = array();
for($s=1;$s<count($myapi);$s++){
$ss=str_replace('1','1️⃣',$s);
$ss=str_replace('2','2️⃣',$ss);
$ss=str_replace('3','3️⃣',$ss);
$ss=str_replace('4','4️⃣',$ss);
$ss=str_replace('5','5️⃣',$ss);
$ss=str_replace('6','6️⃣',$ss);
$ss=str_replace('7','7️⃣',$ss);
$ss=str_replace('8','8️⃣',$ss);
$ss=str_replace('9','9️⃣',$ss);
$ss=str_replace('10','🔟',$ss);
$uz[]=["text"=>$ss,"callback_data"=>"down_$s"];
}
$key=array_chunk($uz, 5);
$key[]=[['text'=>$bck,'callback_data'=>"goback"]];
$keyboard=json_encode([
'inline_keyboard'=>$key,
]);
print_r($keyboard);
del($mid2);
unlink("step/$uid2.step");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>Yuklab olmoqchi bo'lgan API Raqamini tanlang</b>:

<i>$myapis</i>

$reklama",
'parse_mode'=>'html',
'reply_markup'=>$keyboard,
'disable_web_page_preview'=>true,
]);
}else{
bot('answerCallbackQuery',['callback_query_id'=>$qid,
'text'=>"❌Siz API Yasamagansiz",
'show_alert'=>true,
]);
}
}

if(mb_stripos($data,"down_")!==false){
$id=str_replace("down_","",$data);
$ss=str_replace('1','1️⃣',$id);
$ss=str_replace('2','2️⃣',$ss);
$ss=str_replace('3','3️⃣',$ss);
$ss=str_replace('4','4️⃣',$ss);
$ss=str_replace('5','5️⃣',$ss);
$ss=str_replace('6','6️⃣',$ss);
$ss=str_replace('7','7️⃣',$ss);
$ss=str_replace('8','8️⃣',$ss);
$ss=str_replace('9','9️⃣',$ss);
$ss=str_replace('10','🔟',$ss);
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"《 $ss 》 - Raqamdagi API Fayllari Yuborilmoqda...🔄",
'show_alert'=>true,
]);
bot('sendDocument',['chat_id'=>$uid2,
'document'=>new CURLFile("apilar/$uid2/$id.php"),
'caption'=>"<b>$id</b> - Raqamdagi API Kodi!

Botimizdan Foydalanganingiz uchun Raxmat

$reklama",'parse_mode'=>'html',
]);
bot('sendPhoto',['chat_id'=>$uid2,
'photo'=>new CURLFile("apilar/$uid2/img/$id.jpg"),
'caption'=>"<b>$id</b> - Raqamdagi API Rasmi!

@$bot - Tomonidan Berildi

$reklama",'parse_mode'=>'html',
]);
bot('sendDocument',['chat_id'=>$uid2,
'document'=>new CURLFile("apilar/$uid2/ttf/$id.ttf"),
'caption'=>"<b>$id</b> - Raqamdagi API Kod TTF Shrift!

@$bot - Tomonidan Berildi

$reklama",'parse_mode'=>'html',
]);
}
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/


#      APILARNI O'ZGARTIRISH.  #

if(mb_stripos($data,"editapi_")!==false){
$id=str_replace("editapi_","",$data);
bot('answerCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"API raqami: 《 $id 》",
'show_alert'=>true,
]);
$ss=str_replace('1','1️⃣',$id);
$ss=str_replace('2','2️⃣',$ss);
$ss=str_replace('3','3️⃣',$ss);
$ss=str_replace('4','4️⃣',$ss);
$ss=str_replace('5','5️⃣',$ss);
$ss=str_replace('6','6️⃣',$ss);
$ss=str_replace('7','7️⃣',$ss);
$ss=str_replace('8','8️⃣',$ss);
$ss=str_replace('9','9️⃣',$ss);
$ss=str_replace('10','🔟',$ss);
delm();
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$ss - API</b>ning qaysi <b>🛠Sozlama</b>sini o'zgartirmoqchisiz?

<b>Tanlang⤵️</b>

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🎨Rang",'callback_data'=>"rang_$id"],['text'=>"🖼Rasm",'callback_data'=>"rasmi_$id"]],
[['text'=>"🗂TTF Shrift",'callback_data'=>"ttfshrift_$id"],['text'=>"📏Tekst Hajmi",'callback_data'=>"hajm_$id"]],
[['text'=>"🛠Joylashuv",'callback_data'=>"loc_$id"]],
[['text'=>$bck,'callback_data'=>"myapi"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
]);
}
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/
if(mb_stripos($data,"rang_")!==false){
$id=explode("rang_",$data)[1];
$ss=str_replace('1','1️⃣',$id);
$ss=str_replace('2','2️⃣',$ss);
$ss=str_replace('3','3️⃣',$ss);
$ss=str_replace('4','4️⃣',$ss);
$ss=str_replace('5','5️⃣',$ss);
$ss=str_replace('6','6️⃣',$ss);
$ss=str_replace('7','7️⃣',$ss);
$ss=str_replace('8','8️⃣',$ss);
$ss=str_replace('9','9️⃣',$ss);
$ss=str_replace('10','🔟',$ss);
$rangi1=get("settings/".$uid2."/".$id."/color.txt");
$apiget=file_get_contents("apilar/".$uid2."/".$id.".php");
$apiget=str_replace($rangi1,"[*COLOR*]",$apiget);
$trueapi=file_put_contents("apilar/".$uid2."/".$id.".php",$apiget);
delm();
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$ss - API</b> <b>🎨Rangini </b>Tanlang⤵️

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔴Qizil",'callback_data'=>"svet=255, 1, 0"],['text'=>"🟠To'q Sariq",'callback_data'=>"svet=255, 127, 3"]],
[['text'=>"🟡Sariq",'callback_data'=>"svet=255, 245, 1"],['text'=>"🔵Ko'k",'callback_data'=>"svet=6, 22, 255"]],
[['text'=>"🟢Yashil",'callback_data'=>"svet=2, 255, 3"],['text'=>"🟣Siyoh Rang",'callback_data'=>"svet=160, 0, 255"]],
[['text'=>"🟤Jigar Rang",'callback_data'=>"svet=139, 58, 0"],['text'=>"⚪Oq",'callback_data'=>"svet=255, 255, 255"]],
[['text'=>"⚫Qora",'callback_data'=>"svet=0, 0, 0"],['text'=>"⏺Havo Rang",'callback_data'=>"svet=90, 186, 255"]],
]
]),
]);
step("svet=$id");
}

if(mb_stripos($data,"svet=")!==false){
del($mid2);
$rang=explode("svet=",$data)[1]; 
$id=explode("svet=",$step2)[1];
put("settings/".$uid2."/".$id."/color.txt",$rang);
$ss=str_replace('1','1️⃣',$id);
$ss=str_replace('2','2️⃣',$ss);
$ss=str_replace('3','3️⃣',$ss);
$ss=str_replace('4','4️⃣',$ss);
$ss=str_replace('5','5️⃣',$ss);
$ss=str_replace('6','6️⃣',$ss);
$ss=str_replace('7','7️⃣',$ss);
$ss=str_replace('8','8️⃣',$ss);
$ss=str_replace('9','9️⃣',$ss);
$ss=str_replace('10','🔟',$ss);
$apiget=file_get_contents("apilar/".$uid2."/".$id.".php");
$apiget=str_replace("[*COLOR*]",$rang,$apiget);
$trueapi=file_put_contents("apilar/".$uid2."/".$id.".php",$apiget);
delm();
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$ss - API</b> 🎨Rangi O'zgardi✅


$ss - $xost/apilar/$uid2/$id.php?text=AvtoApiBot

$reklama",
'disable_web_page_preview'=>true,
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$bck,'callback_data'=>"editapi_$id"]],
]
]),
]);
}

/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/

if(mb_stripos($data,"ttfshrift_")!==false){
$id=explode("ttfshrift_",$data)[1];
$ss=str_replace('1','1️⃣',$id);
$ss=str_replace('2','2️⃣',$ss);
$ss=str_replace('3','3️⃣',$ss);
$ss=str_replace('4','4️⃣',$ss);
$ss=str_replace('5','5️⃣',$ss);
$ss=str_replace('6','6️⃣',$ss);
$ss=str_replace('7','7️⃣',$ss);
$ss=str_replace('8','8️⃣',$ss);
$ss=str_replace('9','9️⃣',$ss);
$ss=str_replace('10','🔟',$ss);
delm();
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$ss - API</b> <b>🗂TTF Shrift </b>O'zgartirish uchun 
Iltimos Boshqa TTF yuboring❕

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$bck",'callback_data'=>"editapi_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
]);
step("shrift_$id");
}


if((mb_stripos($step,"shrift_")!==false) and $document){
if((mb_stripos($docname,".ttf")!==false) or (mb_stripos($docname,".TTF")!==false)){
$son=explode("shrift_",$step)[1];
unlink("apilar/".$uid."/ttf/".$son.".ttf");
$doc_id=$message->document->file_id;
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$doc_id),true);
$path=$url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$okey = file_put_contents("apilar/".$uid."/ttf/".$son.".ttf",file_get_contents($file));
$ss=str_replace('1','1️⃣',$son);
$ss=str_replace('2','2️⃣',$ss);
$ss=str_replace('3','3️⃣',$ss);
$ss=str_replace('4','4️⃣',$ss);
$ss=str_replace('5','5️⃣',$ss);
$ss=str_replace('6','6️⃣',$ss);
$ss=str_replace('7','7️⃣',$ss);
$ss=str_replace('8','8️⃣',$ss);
$ss=str_replace('9','9️⃣',$ss);
$ss=str_replace('10','🔟',$ss);
bot('sendMessage',['chat_id'=>$cid,
'text'=>"❗<b>$ss - API </b> <b>🗂TTF Shrift</b>i O'zgardi✅


$ss - $xost/apilar/$uid2/$id.php?text=AvtoApiBot

$reklama",
'disable_web_page_preview'=>true,
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$bck",'callback_data'=>"editapi_$son"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
]);
unlink("step/$cid.step");
}
}
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/
if(mb_stripos($data,"rasmi_")!==false){
$id=explode("rasmi_",$data)[1];
$ss=str_replace('1','1️⃣',$id);
$ss=str_replace('2','2️⃣',$ss);
$ss=str_replace('3','3️⃣',$ss);
$ss=str_replace('4','4️⃣',$ss);
$ss=str_replace('5','5️⃣',$ss);
$ss=str_replace('6','6️⃣',$ss);
$ss=str_replace('7','7️⃣',$ss);
$ss=str_replace('8','8️⃣',$ss);
$ss=str_replace('9','9️⃣',$ss);
$ss=str_replace('10','🔟',$ss);
delm();
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$ss - API</b> <b>🖼Rasmini </b>O'zgartirish uchun 
Iltimos Yangi Rasm yuboring❕

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$bck",'callback_data'=>"editapi_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
]);
step("rasmi_$id");
}


if((mb_stripos($step,"rasmi_")!==false) and $photo){
$son=explode("rasmi_",$step)[1];
unlink("apilar/".$uid."/img/".$son.".jpg");
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path; file_put_contents('apilar/'.$uid.'/img/'.$son.'.jpg',file_get_contents('https://api.telegram.org/file/bot'.API_KEY.'/'.$patch));
$ss=str_replace('1','1️⃣',$son);
$ss=str_replace('2','2️⃣',$ss);
$ss=str_replace('3','3️⃣',$ss);
$ss=str_replace('4','4️⃣',$ss);
$ss=str_replace('5','5️⃣',$ss);
$ss=str_replace('6','6️⃣',$ss);
$ss=str_replace('7','7️⃣',$ss);
$ss=str_replace('8','8️⃣',$ss);
$ss=str_replace('9','9️⃣',$ss);
$ss=str_replace('10','🔟',$ss);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
❗<b>$ss - API </b> <b>🖼Rasmi</b> O'zgardi✅


$ss - $xost/apilar/$uid/$son.php?text=AvtoApiBot

$reklama",
'disable_web_page_preview'=>true,
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$bck",'callback_data'=>"editapi_$son"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
]);
unlink("step/$cid.step");
}


if(mb_stripos($data,"hajm_")!==false){
$ids=explode("hajm_",$data)[1];
$ss=str_replace('1','1️⃣',$ids);
$ss=str_replace('2','2️⃣',$ss);
$ss=str_replace('3','3️⃣',$ss);
$ss=str_replace('4','4️⃣',$ss);
$ss=str_replace('5','5️⃣',$ss);
$ss=str_replace('6','6️⃣',$ss);
$ss=str_replace('7','7️⃣',$ss);
$ss=str_replace('8','8️⃣',$ss);
$ss=str_replace('9','9️⃣',$ss);
$ss=str_replace('10','🔟',$ss);
delm();
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$ss - API</b> <b>📏Razmerini </b> Tanlang ❕

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"2️⃣0️⃣",'callback_data'=>"razmer=20"],['text'=>"3️⃣0️⃣",'callback_data'=>"razmer=30"]],
[['text'=>"4️⃣0️⃣",'callback_data'=>"razmer=40"],['text'=>"5️⃣0️⃣",'callback_data'=>"razmer=50"]],
[['text'=>"6️⃣0️⃣",'callback_data'=>"razmer=60"],['text'=>"7️⃣0️⃣",'callback_data'=>"razmer=70"]],
[['text'=>"8️⃣0️⃣",'callback_data'=>"razmer=80"],['text'=>"9️⃣0️⃣",'callback_data'=>"razmer=90"]],
[['text'=>"1️⃣0️⃣0️⃣",'callback_data'=>"razmer=100"],['text'=>"1️⃣5️⃣0️⃣",'callback_data'=>"razmer=150"]],
[['text'=>"$bck",'callback_data'=>"editapi_$ids"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
]);
step("razmer_$ids");
}



/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/



if(mb_stripos($data,"razmer=")!==false){
$hajm=explode("razmer=",$data)[1]; 
$id=explode("razmer_",$step2)[1];
put("settings/".$uid2."/".$id."/size.txt",$hajm);
$ss=str_replace('1','1️⃣',$id);
$ss=str_replace('2','2️⃣',$ss);
$ss=str_replace('3','3️⃣',$ss);
$ss=str_replace('4','4️⃣',$ss);
$ss=str_replace('5','5️⃣',$ss);
$ss=str_replace('6','6️⃣',$ss);
$ss=str_replace('7','7️⃣',$ss);
$ss=str_replace('8','8️⃣',$ss);
$ss=str_replace('9','9️⃣',$ss);
$ss=str_replace('10','🔟',$ss);
delm();
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$ss - API</b> 📏Hajmi O'zgardi✅



$ss - $xost/apilar/$uid2/$id.php?text=AvtoApiBot

$reklama",
'disable_web_page_preview'=>true,
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$bck",'callback_data'=>"editapi_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
]);
}

/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/

if(mb_stripos($data,"loc_")!==false){
$id=explode("loc_",$data)[1];
del($mid2);
unlink("step/$uid2.step");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$id - API</b>ning Qaysi kordinatasini o'zgartirmoqchisiz?:

<u>X</u> =》 ⬅️➡️  | |  <u>Y</u> =》 ⬆️⬇️  | |  <u>𒊹︎︎︎</u> =》 ⏺Centre

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🅧︎",'callback_data'=>"kordinataX_$id"],['text'=>"🅨︎",'callback_data'=>"kordinataY_$id"]],
[['text'=>"𒊹︎︎︎",'callback_data'=>"Centre_$id"]],
[['text'=>"$bck",'callback_data'=>"editapi_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
'disable_web_page_preview'=>true,
]);
}


if(mb_stripos($data,"Centre_")!==false){
$id=explode("Centre_",$data)[1];
file_put_contents("settings/".$uid2."/".$id."/x.txt","2");
file_put_contents("settings/".$uid2."/".$id."/y.txt","2");
del($mid2);
unlink("step/$uid2.step");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$id - API</b> Tekst Kordinatasi: <u>Centre</u>

$xost/apilar/$uid2/$id.php?text=AvtoApiBot

$reklama
",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$bck",'callback_data'=>"editapi_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
'disable_web_page_preview'=>true,
]);
}
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/

if(mb_stripos($data,"kordinataX_")!==false){
$id=explode("_",$data)[1];
del($mid2);
unlink("step/$uid2.step");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$id - API</b> <u>X</u> Kordinata Joylashuvini o'zgartiring⤵️:

⏪⏩ - 0.5 dan O'zgaradi.
⏮⏭ - 1 dan O'zgaradi.


$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⏪",'callback_data'=>"editX0_$id"],['text'=>"⏩",'callback_data'=>"editX1_$id"]],
[['text'=>"⏮",'callback_data'=>"editX00_$id"],['text'=>"⏭",'callback_data'=>"editX11_$id"]],
[['text'=>"$bck",'callback_data'=>"loc_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
'disable_web_page_preview'=>true,
]);
}


if(mb_stripos($data,"editX0_")!==false){
$id=explode("_",$data)[1];
$get=get("settings/".$uid2."/".$id."/x.txt");
$get2=$get+0.05;
put("settings/".$uid2."/".$id."/x.txt",$get2);
del($mid2);
unlink("step/$uid2.step");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$id - API</b> <u>X</u> Kordinata Joylashuvini O'zgardi✅
⏪ - Tarafga.

$xost/apilar/$uid2/$id.php?text=AvtoApiBot

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⏪",'callback_data'=>"editX0_$id"],['text'=>"⏩",'callback_data'=>"editX1_$id"]],
[['text'=>"⏮",'callback_data'=>"editX00_$id"],['text'=>"⏭",'callback_data'=>"editX11_$id"]],
[['text'=>"$bck",'callback_data'=>"loc_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
'disable_web_page_preview'=>true,
]);
}

if(mb_stripos($data,"editX1_")!==false){
$id=explode("_",$data)[1];
$get=get("settings/".$uid2."/".$id."/x.txt");
$get2=$get-0.05;
put("settings/".$uid2."/".$id."/x.txt",$get2);
del($mid2);
unlink("step/$uid2.step");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$id - API</b> <u>X</u> Kordinata Joylashuvini O'zgardi✅
⏩ - Tarafga.

$xost/apilar/$uid2/$id.php?text=AvtoApiBot

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⏪",'callback_data'=>"editX0_$id"],['text'=>"⏩",'callback_data'=>"editX1_$id"]],
[['text'=>"⏮",'callback_data'=>"editX00_$id"],['text'=>"⏭",'callback_data'=>"editX11_$id"]],
[['text'=>"$bck",'callback_data'=>"loc_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
'disable_web_page_preview'=>true,
]);
}

/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/


if(mb_stripos($data,"editX00_")!==false){
$id=explode("_",$data)[1];
$get=get("settings/".$uid2."/".$id."/x.txt");
$get2=$get+0.10;
put("settings/".$uid2."/".$id."/x.txt",$get2);
del($mid2);
unlink("step/$uid2.step");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$id - API</b> <u>X</u> Kordinata Joylashuvini O'zgardi✅
⏮ - Tarafga.

$xost/apilar/$uid2/$id.php?text=AvtoApiBot

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⏪",'callback_data'=>"editX0_$id"],['text'=>"⏩",'callback_data'=>"editX1_$id"]],
[['text'=>"⏮",'callback_data'=>"editX00_$id"],['text'=>"⏭",'callback_data'=>"editX11_$id"]],
[['text'=>"$bck",'callback_data'=>"loc_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
'disable_web_page_preview'=>true,
]);
}

if(mb_stripos($data,"editX11_")!==false){
$id=explode("_",$data)[1];
$get=get("settings/".$uid2."/".$id."/x.txt");
$get2=$get-0.10;
put("settings/".$uid2."/".$id."/x.txt",$get2);
del($mid2);
unlink("step/$uid2.step");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$id - API</b> <u>X</u> Kordinata Joylashuvini O'zgardi✅
⏭ - Tarafga.


$xost/apilar/$uid2/$id.php?text=AvtoApiBot

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⏪",'callback_data'=>"editX0_$id"],['text'=>"⏩",'callback_data'=>"editX1_$id"]],
[['text'=>"⏮",'callback_data'=>"editX00_$id"],['text'=>"⏭",'callback_data'=>"editX11_$id"]],
[['text'=>"$bck",'callback_data'=>"loc_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
'disable_web_page_preview'=>true,
]);
}


////   KORDINATA 《 Y 》


if(mb_stripos($data,"kordinataY_")!==false){
$id=explode("_",$data)[1];
del($mid2);
unlink("step/$uid2.step");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$id - API</b> <u>Y</u> Kordinata Joylashuvini o'zgartiring⤵️:
⏫⏬ - 0.5 dan O'zgaradi.
🔼🔽 - 1 dan O'zgaradi.


$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⏫",'callback_data'=>"editY0_$id"],['text'=>"⏬",'callback_data'=>"editY1_$id"]],
[['text'=>"🔼",'callback_data'=>"editY00_$id"],['text'=>"🔽",'callback_data'=>"editY11_$id"]],
[['text'=>"$bck",'callback_data'=>"loc_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
'disable_web_page_preview'=>true,
]);
}

/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/
if(mb_stripos($data,"editY0_")!==false){
$id=explode("_",$data)[1];
$get=get("settings/".$uid2."/".$id."/y.txt");
$get2=$get+0.05;
put("settings/".$uid2."/".$id."/y.txt",$get2);
del($mid2);
unlink("step/$uid2.step");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$id - API</b> <u>Y</u> Kordinata Joylashuvini O'zgardi✅
⏫ - Tarafga.

$xost/apilar/$uid2/$id.php?text=AvtoApiBot

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⏫",'callback_data'=>"editY0_$id"],['text'=>"⏬",'callback_data'=>"editY1_$id"]],
[['text'=>"🔼",'callback_data'=>"editY00_$id"],['text'=>"🔽",'callback_data'=>"editY11_$id"]],
[['text'=>"$bck",'callback_data'=>"loc_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
'disable_web_page_preview'=>true,
]);
}

if(mb_stripos($data,"editY1_")!==false){
$id=explode("_",$data)[1];
$get=get("settings/".$uid2."/".$id."/y.txt");
$get2=$get-0.05;
put("settings/".$uid2."/".$id."/y.txt",$get2);
del($mid2);
unlink("step/$uid2.step");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$id - API</b> <u>Y</u> Kordinata Joylashuvini O'zgardi✅
⏬ - Tarafga.

$xost/apilar/$uid2/$id.php?text=AvtoApiBot

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⏫",'callback_data'=>"editY0_$id"],['text'=>"⏬",'callback_data'=>"editY1_$id"]],
[['text'=>"🔼",'callback_data'=>"editY00_$id"],['text'=>"🔽",'callback_data'=>"editY11_$id"]],
[['text'=>"$bck",'callback_data'=>"loc_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
'disable_web_page_preview'=>true,
]);
}




if(mb_stripos($data,"editY00_")!==false){
$id=explode("_",$data)[1];
$get=get("settings/".$uid2."/".$id."/y.txt");
$get2=$get+0.10;
put("settings/".$uid2."/".$id."/y.txt",$get2);
del($mid2);
unlink("step/$uid2.step");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$id - API</b> <u>Y</u> Kordinata Joylashuvini O'zgardi✅
🔼 - Tarafga.

$xost/apilar/$uid2/$id.php?text=AvtoApiBot

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⏫",'callback_data'=>"editY0_$id"],['text'=>"⏬",'callback_data'=>"editY1_$id"]],
[['text'=>"🔼",'callback_data'=>"editY00_$id"],['text'=>"🔽",'callback_data'=>"editY11_$id"]],
[['text'=>"$bck",'callback_data'=>"loc_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
'disable_web_page_preview'=>true,
]);
}
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/
if(mb_stripos($data,"editY11_")!==false){
$id=explode("_",$data)[1];
$get=get("settings/".$uid2."/".$id."/y.txt");
$get2=$get-0.10;
put("settings/".$uid2."/".$id."/y.txt",$get2);
del($mid2);
unlink("step/$uid2.step");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>$id - API</b> <u>Y</u> Kordinata Joylashuvini O'zgardi✅
🔽 - Tarafga.

$xost/apilar/$uid2/$id.php?text=AvtoApiBot

$reklama",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⏫",'callback_data'=>"editY0_$id"],['text'=>"⏬",'callback_data'=>"editY1_$id"]],
[['text'=>"🔼",'callback_data'=>"editY00_$id"],['text'=>"🔽",'callback_data'=>"editY11_$id"]],
[['text'=>"$bck",'callback_data'=>"loc_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
'disable_web_page_preview'=>true,
]);
}





/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/




if($data=="goback" or $data=="mainmenu"){
if($uid2==$admin){
del($mid2);
unlink("step/$uid2.step");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>Assalomu Aleykum $namee</b>
Botimiz Orqali Tez, Oson va Qulay Rasm Api yasashingiz mumkin.
Boshlash uchun ⤵️Tugmalardan Foydalaning.

$reklama
",
'parse_mode'=>'html',
'reply_markup'=>$adminmenu
]);
}else{
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<b>Assalomu Aleykum $namee</b>
Botimiz Orqali Tez, Oson va Qulay Rasm Api yasashingiz mumkin.
Boshlash uchun ⤵️Tugmalardan Foydalaning.

$reklama
",
'parse_mode'=>'html',
'reply_markup'=>$menu
]);
}
}


/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/




//////SUPPORT 

mkdir("admin");
if($data=="support"){
del($mid2);
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"❗@$bot - <b>Qo'llab-Quvvatlash Bo'limidasiz❗</b>
📨Har Qanday Savolingizga Javob olasiz!
🤖❌Botga Taluqsiz Savollarga Javob Berilmaydi!
➖➖➖➖
Marhamat Savolingizni Batafsil Yozing.

$reklama
",
'parse_mode'=>'html',
'reply_markup'=>$back
]);
step("question");
}



if($step=="question"){
if($text=="/start" or $text=="/update"){
unlink("step/$cid.step");
}else{
$midre=bot('copyMessage',[
'from_chat_id'=>$cid,
'chat_id'=>$admin,
'message_id'=>$mid,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📝Javob Berish",'callback_data'=>"answer_$uid"]],
]
]),
])->result->message_id;
unlink("step/$cid.step");
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"Xabar Yuboruvchi: 
👤<a href='tg://user?id=$uid'>$name</a>
🔰 @$user
🆔️ $uid
",
'parse_mode'=>'html',
'reply_to_message_id'=>$midre,
]);
Sms("Xabaringiz Qo'llab-Quvvatlash Markaziga Yuborildi!
Tez Orada Javob Olasiz!",$back);
}
}
/////ANSWER
if(mb_stripos($data,"answer_")!==false){
$id=str_replace("answer_","",$data);
put("admin/answer.txt",$id);
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"Marhamat Javobingizni Batafsil Yozing.

$reklama
",
'parse_mode'=>'html',
'reply_markup'=>$back
]);
step("answer");
}
if($step=="answer"){
if($text=="/start" or $text=="/update"){
unlink("step/$cid.step");
}else{
$id=get("admin/answer.txt");
bot('copyMessage',[
'from_chat_id'=>$admin,
'chat_id'=>$id,
'message_id'=>$mid,
'reply_markup'=>$back
]);
unlink("step/$cid.step");
Sms("Xabaringiz  Yuborildi!",$back);
}
}

if($data=="rule"){
del($mid2);
Sms2("
❗Api Yasash Qoidasi:

1️⃣ 🔞➕ ❌Taqiqlanadi.
2️⃣ Siyosatga Oid ❌Taqiqlanadi.
3️⃣ 🤬Haqorat qilingan ❌Taqiqlanadi. 
4️⃣ <b>👨‍💻Qo'llab-Quvvatlash</b>ga Haqorat, 18+ so'zlar va ortiqcha Gaplar yozish ❌Taqiqlanadi.

⚠️Qoidalarni Buzsangiz Botdan Bloklanasiz.

$reklama",$back);
}
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/

//STATICS
$directs=get("admin/directs.txt");
$groups=get("admin/group.txt");
if($type=="private"){
if(strpos($directs,"$cid") !==false){
}else{
file_put_contents("admin/directs.txt","$directs \n$cid");
}
} 
if($type=="supergroup" or $type=="group"){
if(strpos($groups,"$cid") !==false){
}else{
file_put_contents("admin/group.txt","$groups \n$cid");
}
}



/*



ADMINISTRATOR PANELI



*/

/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/


mkdir("panel");



$panel=json_encode([
'inline_keyboard'=>[
[['text'=>"📊Statistika",'callback_data'=>"stat"],['text'=>"📄Xabar Yuborish",'callback_data'=>"send"]],
[['text'=>"📁Foydalanuvchi Kodini Olish",'callback_data'=>"give"]],
[['text'=>"🏷Reklama Qilish",'callback_data'=>"rek"],['text'=>"📌API Limit",'callback_data'=>"limite"]],
[['text'=>$bck,'callback_data'=>"goback"]],
]
]);

$backpanel=json_encode([
'inline_keyboard'=>[
[['text'=>"$bck",'callback_data'=>"panel"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]);
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/

if($data=="panel"){
delm();
Sms2("🎯Administrator Panelidasiz.",$panel);
unlink("panel/send.txt");
unlink("panel/set.txt");
}

////STATISTIKA 

if($data=="stat"){
delm();

$stat=substr_count($directs,"\n");
$stat2=substr_count($groups,"\n");
Sms2("📊<b>┌ STATISTIKA
👤└  A`zolar: <code>$stat</code> ta

",$backpanel);
}

///// SEND

if($data=="send"){
delm();
Sms2("📝 A'zolarga Yuboriladigan Xabar Matnini Kiriting 📝",$backpanel);
put("panel/send.txt","send");
}

if(file_get_contents("panel/send.txt")=="send" and $cid==$admin and $text!="/start"){
  $lichka = explode("\n",$directs);
  foreach($lichka as $lichkalar){
  $okuser=bot("copyMessage",[
    'chat_id'=>$lichkalar,
'from_chat_id'=>$admin,
    'message_id'=>$mid,
]);
unlink("panel/send.txt");
}
}
if($okuser){
  bot("sendmessage",[
    'chat_id'=>$cid,
    'text'=>"✅ A'zolarga Xabar Yuborildi",
    'parse_mode'=>'html','reply_markup'=>$backpanel,
]);
unlink("panel/send.txt");
}

/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/
///// API LIMITE

if($data=="limite"){
delm();
Sms2("⚙Foydalanuvchilar Maksimal <b>API</b> Yasash Sonini kiriting:",$backpanel);
put("panel/set.txt","limite");
}

if(file_get_contents("panel/set.txt")=="limite" and $cid==$admin and $text!="/start"){
if(preg_match('/[0-9]/', $text)){
put("panel/limite.txt",$text);
Sms("✅Bajarildi. <b>API</b> Yasash Limiti <u>$text</u> ga o'zgardi.",$backpanel);
unlink("panel/set.txt");
}else{
Sms("❌Faqat <b>RAQAM</b> Kiriting:",$backpanel);
}
}

/////// REKLAMA

if($data=="rek"){
delm();
Sms2("🏷Reklama Tugmasini kiriting!",$backpanel);
put("panel/set.txt","key");
exit();
}


if(file_get_contents("panel/set.txt")=="key" and $cid==$admin){
$tes=str_replace(["]","["],"",$text);
file_put_contents("panel/key.txt",$tes);
Sms("<b>✅POST Qabul qilindi.</b>
Endi <b>POST</b> Yuboring!

❗Namuna: [Matn + manzil] yoki 
[Matn + manzil]
[Matn + manzil]",$backpanel);
put("panel/set.txt","rekpost");
exit();
}
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/

if(file_get_contents("panel/set.txt")=="rekpost" and $uid==$admin){
$get2=file_get_contents("panel/key.txt");
$keyb=explode("\n",$get2);
$uz = array();
for($s=1; $s<count($keyb); $s++){
$ext=explode("\n",$keyb)[$s];
$knopka=explode("+",$ext)[0];
$url=explode("+",$ext)[1];
$uz[]=["text"=>$knopka,"url"=>"$url"];
}
$keyy=array_chunk($uz, 1);
$mykey=json_encode([
'inline_keyboard'=>$keyy,
]);
$postmid=get("panel/rekpost.mid");
//$lichka = explode("\n",$directs);
//  foreach($lichka as $id){
$sendedd=bot('copyMessage',[
        'chat_id'=>$admin,
        'from_chat_id'=>$admin,
        'message_id'=>$postmid,
        'reply_markup'=>$mykey,
            ]);
unlink("panel/set.txt");
unlink("panel/rekpost.mid");
}
//}
if($sendedd){
Sms("<b>🏷Reklama Yuborildi✅</b>
",$backpanel);
exit();
}
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/

if($data=="give"){
Sms2("👤Foydalanuvchi 🆔️sini Yuboring:",$backpanel);
put("panel/set.txt","give");
}

if(file_get_contents("panel/set.txt")=="give"){
if(preg_match('/[0-9]/', $text)){
if(file_get_contents("myapi/$text.txt")){
$myapis=get("myapi/$text.txt");
$myapi=explode("\n",$myapis);
$uz = array();
for($s=1;$s<count($myapi);$s++){
$ss=str_replace('1','1️⃣',$s);
$ss=str_replace('2','2️⃣',$ss);
$ss=str_replace('3','3️⃣',$ss);
$ss=str_replace('4','4️⃣',$ss);
$ss=str_replace('5','5️⃣',$ss);
$ss=str_replace('6','6️⃣',$ss);
$ss=str_replace('7','7️⃣',$ss);
$ss=str_replace('8','8️⃣',$ss);
$ss=str_replace('9','9️⃣',$ss);
$ss=str_replace('10','🔟',$ss);
$uz[]=["text"=>$ss,"callback_data"=>"take=$s=$text"];
}
$key=array_chunk($uz, 5);
$key[]=[['text'=>"$bck",'callback_data'=>"panel"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]];
$keyboard=json_encode([
'inline_keyboard'=>$key,
]);
print_r($keyboard);
del($mid2);
unlink("panel/set.txt");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
<a href='tg://user?id=$text'>Foydalanuvchi</a> <b>API</b>lari

<i>$myapis</i>",
'parse_mode'=>'html',
'reply_markup'=>$keyboard,
'disable_web_page_preview'=>true,
]);
}else{
bot('answerCallbackQuery',['callback_query_id'=>$qid,
'text'=>"❌Foydalanuvchi APIlari mavjud emas",
'show_alert'=>true,
]);
}
}else{
Sms("❌Faqat <b>RAQAM</b> Kiriting:",$backpanel);
}
}
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/
if(mb_stripos($data,"get_")!==false){
$id=str_replace("get_","",$data);
$myapis=get("myapi/$id.txt");
$myapi=explode("\n",$myapis);
$uz = array();
for($s=1;$s<count($myapi);$s++){
$ss=str_replace('1','1️⃣',$s);
$ss=str_replace('2','2️⃣',$ss);
$ss=str_replace('3','3️⃣',$ss);
$ss=str_replace('4','4️⃣',$ss);
$ss=str_replace('5','5️⃣',$ss);
$ss=str_replace('6','6️⃣',$ss);
$ss=str_replace('7','7️⃣',$ss);
$ss=str_replace('8','8️⃣',$ss);
$ss=str_replace('9','9️⃣',$ss);
$ss=str_replace('10','🔟',$ss);
$uz[]=["text"=>$ss,"callback_data"=>"take=$s=$id"];
}
$key=array_chunk($uz, 5);
$key[]=[['text'=>"$bck",'callback_data'=>"panel"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]];
$keyboard=json_encode([
'inline_keyboard'=>$key,
]);
print_r($keyboard);
del($mid2);
unlink("panel/set.txt");
bot('sendMessage',[
'chat_id'=>$cid2,
'text'=>"
<a href='tg://user?id=$text'>Foydalanuvchi</a> <b>API</b>lari

<i>$myapis</i>",
'parse_mode'=>'html',
'reply_markup'=>$keyboard,
'disable_web_page_preview'=>true,
]);
}
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/
if(mb_stripos($data,"take")!==false){
$id=explode("=",$data)[2];
$son=explode("=",$data)[1];
delm();
bot('sendMessage',['chat_id'=>$cid2,
'text'=>"🔧Qaysi <b>FAYL</b>ni yuklab olmoqchisiz?",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🗂TTF",'callback_data'=>"ttfs|$id|$son"],['text'=>"🖼Rasm",'callback_data'=>"foto|$id|$son"]],
[['text'=>"📝PHP KOD",'callback_data'=>"php|$id|$son"]],
[['text'=>$bck,'callback_data'=>"get_$id"],['text'=>"🏠Bosh Menu",'callback_data'=>"goback"]],
]
]),
]);
}
/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/
if(mb_stripos($data,"php|")!==false){
$id=explode("|",$data)[1];
$son=explode("|",$data)[2];
bot('sendDocument',['chat_id'=>$cid2,
'document'=>new CURLFile("apilar/$id/$son.php"),
'caption'=>"<a href='tg://user?id=$id'>Foydalanuvchi</a> 《 $son 》 - Raqamdagi API Kodi!",'parse_mode'=>'html',
]);
Sms2("🔙Panelga Qaytish",$backpanel);
}
if(mb_stripos($data,"foto|")!==false){
$id=explode("|",$data)[1];
$son=explode("|",$data)[2];
bot('sendPhoto',['chat_id'=>$cid2,
'photo'=>new CURLFile("apilar/$id/img/$son.jpg"),
'caption'=>"<a href='tg://user?id=$id'>Foydalanuvchi</a> 《 $son 》 - Raqamdagi API Rasmi!

@$bot - Tomonidan Berildi",'parse_mode'=>'html',
]);
Sms2("🔙Panelga Qaytish",$backpanel);
}
if(mb_stripos($data,"ttfs|")!==false){
$id=explode("|",$data)[1];
$son=explode("|",$data)[2];
bot('sendDocument',['chat_id'=>$cid2,
'document'=>new CURLFile("apilar/$id/ttf/$son.ttf"),
'caption'=>"<a href='tg://user?id=$id'>Foydalanuvchi</a> 《 $son 》 - Raqamdagi API TTF Shrifti!

@$bot - Tomonidan Berildi",'parse_mode'=>'html',
]);
Sms2("🔙Panelga Qaytish",$backpanel);
}



/*
@AvtoApiBot kodini Men @DaMaS_BaSS Sirojiddin Faxriddinov 《0》 dan yozib chiqganman
va @KingsOfPhp kanalida tarqatdim.
Manba Tegma dalbayob o'g'rilar.

Kodni sotayotganlar Amingga kirish endi naxxuy
Sikdim Sanlani xammeni.

Tarqalgan sana: 23.07.2021
Soat: 19:54
*/



?>