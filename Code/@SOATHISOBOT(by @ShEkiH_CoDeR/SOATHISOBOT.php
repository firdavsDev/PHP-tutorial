<?php

/*Bu kod @ShEkiH_CoDeR tomonidan yozib 
chiqildi va @UZ_PHP_KODERLAR kanali orqali tarqatildi!
kot bo'lsang manbani olaver insofsizlar*/

define('SHEKIH_CODER','token');
$admin = "Admin id raqami";
$sayt = "soat bot fayllari turgan manzil (host floder)";
$bot = "botuseri";
$userR = "adminuseri";
function del($nomi){
array_map('unlink', glob("step/$nomi.*"));
}
function put($fayl, $nima){
file_put_contents("$fayl", "$nima");
}
function pstep($cid,$zn){
file_put_contents("step/$cid.step",$zn);
}
function step($cid){
$step = file_get_contents("step/$cid.step");
$step += 1;
file_put_contents("step/$cid.step",$step);
}

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".SHEKIH_CODER."/".$method;
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
//Oddiy metodlar
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$name = $message->chat->first_name;
$tx = $message->text;
$step = file_get_contents("step/$cid.step");
$mid = $message->message_id;
$type = $message->chat->type;
$text = $message->text;
$uid= $message->from->id;
$name = $message->from->first_name;
$familya = $message->from->last_name;
$bio = $message->from->about;
$username = $message->from->username;
$chat_id = $message->chat->id;
$reply = $message->reply_to_message->text;
$nameru = "<a href='tg://user?id=$uid'>$name $familya</a>";

//inline uchun metodlar
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$cid2 = $update->callback_query->message->chat->id;
$mid2 = $update->callback_query->message->message_id;
$callfrid = $update->callback_query->from->id;
$callname = $update->callback_query->from->first_name;
$calluser = $update->callback_query->from->username;
$surname = $update->callback_query->from->last_name;
$about = $update->callback_query->from->about;
$nameuz = "<a href='tg://user?id=$callfrid'>$callname $surname</a>";

/*Bu kod @ShEkiH_CoDeR tomonidan yozib 
chiqildi va @UZ_PHP_KODERLAR kanali orqali tarqatildi!
kot bo'lsang manbani olaver insofsizlar*/

$soni = file_get_contents("pul/$chat_id/$uid.db");
$chan = file_get_contents("pul/$chat_id.db");
$user = file_get_contents("Unknown_Blogger.ids");
$guruh = file_get_contents("pul/guruh.db");
$blocklar = file_get_contents("block.dat");
mkdir("bot");
mkdir("Bot");
if ($soni == false){$soni = 0;}
mkdir("baza");
mkdir("baza/$uid");
mkdir("cron");
mkdir("pul");
mkdir("odam");
mkdir("bonus");
$vaqt = date("d",strtotime("2 hour"));
$kalt = json_encode([
'inline_keyboard'=>[
[["text"=>'⏳ Sozlash', 'callback_data'=>"orqas"],["text"=>'♻ Cron', 'callback_data'=>"cron"]],
[["text"=>'🗑  Tozalash', 'callback_data'=>"delete"],["text"=>'🔗 Referal', 'callback_data'=>"referal"]],
[["text"=>'🔆 Olmos berish', 'callback_data'=>"transfer"],["text"=>'💎 Olmosim', 'callback_data'=>"olmos"]],
[["text"=>'📃 Yordam', 'callback_data'=>"help"],["text"=>'📊 Statistika', 'callback_data'=>"stat"]],
[["text"=>'📦 Kunlik bonus', 'callback_data'=>"bonus"],["text"=>'💳  Promokod', 'callback_data'=>"prom"]],
[["text"=>'🧑‍💻 Admin', 'url'=>"https://t.me/ShEkiH_CoDeR"]],
]
]);

$orqa = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔝 Bosh menu"]],
]
]);
//Admin panel
$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"↗️ Xabar yuborish"],['text'=>"🗞Forward xabar"]], 
[['text'=>"💎 Pul Berish"],['text'=>"📋 Userga Xabar"]],
[['text'=>"💎 Pul ayrish"],['text'=>"🔒 Bloklash"]],
[['text'=>"❌ OFF"],['text'=>"🔓 Blokdan olish"]],
[['text'=>"✅ ON"],['text'=>"🗳Bot Kodi"]],
[['text'=>"💳 Promokod yaratish"],['text'=>"📈 Statistika"]],
[['text'=>"💎 Olmos tarqatish"],['text'=>"🔝 Bosh menu"]],
]
]);

if($data=="orqa"){
   bot('editMessageText', [
   'chat_id'=>$cid2,
  'message_id'=>$mid2,
  'text'=>"<b>♻ Bosh menyuga xush kelibsiz</b>",
  'parse_mode'=>'html',
  'reply_markup'=>$kalt,
]);
}

if($data=="orqas"){
   bot('editMessageText',[
   'chat_id'=>$cid2,
  'message_id'=>$mid2,
  'text'=>"Sᴏᴀᴛ ᴛᴜʀɪɴɪ ᴛᴀɴʟᴀɴɢ ®",
  'parse_mode'=>'html',
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>'💟 Barcelona[logo]', 'callback_data'=>"barsa"],["text"=>'🏆 Real Madrid[logo]', 'callback_data'=>"real"]],
[["text"=>'💣 Super soat', 'callback_data'=>"super"],["text"=>'⚡ Rasmil soat', 'callback_data'=>"picture"]],
[["text"=>'🎲 Random soat', 'callback_data'=>"random"],["text"=>'2⃣4⃣ online', 'callback_data'=>"online"]],
[["text"=>'🗑  Tozalash', 'callback_data'=>"delete"],["text"=>'Ortga🔙', 'callback_data'=>"orqa"]],
]
]),
]);
}


if($text=="/start"){
$post = file_get_contents("Unknown_Blogger.ids");
$posti = explode("\n",$post);
file_put_contents("Unknown_Blogger.ids", "$post\n$cid");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul+0;
file_put_contents("pul/$cid.txt","$mm");
$odam = file_get_contents("odam/$cid.dat");
$kkd=$odam+1;
file_put_contents("odam/$cid.dat","$kkd");
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<b>👋 Assalomu alaykum</b> <a href = 'tg://user?id=$cid'>$name</a>!
<b>📌Quyidagi menyu orqali botdan foydalaning👇</b> ",
    'parse_mode'=>'html',
    'reply_markup'=>$kalt,
    ]);
}

if($text=="/panel" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Salom admin aka panelga xush kelibsiz</b>",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]);
}

if($text=="🔝 Bosh menu"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>♻ Bosh menyuga xush kelibsiz /start</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'remove_keyboard'=>true,
]),
]);
}

if($data == "bonus"){
$bonustime = file_get_contents("bonus/$cid2.txt");
$bonusrand = rand(1,10);
if($bonustime == $vaqt){
bot('anwersCallbackQuery',[
'callback_query_id'=>$qid,
'text'=>"📛Siz kunlik bonusni olib bo‘lgansiz! Keyingi bonusni 24 soatdan keyin olasiz",
'parse_mode'=>'html',
'reply_merkup'=>$kalt,
]);
}else{
$pul = file_get_contents("pul/$cid2");
$bonus=$pul+$bonusrand;
file_put_contents("pul/$cid2","$bonus");
file_put_contents("bonus/$cid2.txt","$vaqt");
bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<b>👏Tabriklaymiz sizga $bonusrand 💎olmos miqdorida 🎁 bonus taqdim etildi!</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Ortga🔙 ", 'callback_data'=>"orqa"]],
]
]),
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"<b>Bonus olindi
Miqdori $bonusrand ta olmos Useri: @$calluser akkaunt nomi $nameuz </b>",
' parse_mode'=>'html', 
]);
}
}

if($text=="💳 Promokod yaratish"){
bot("sendmessage",[
'chat_id'=>$admin,
'text'=>" Promo kod yasash uchun
/promo promokod
masalan
/promo 79j585h67ht",
]);
}
$promo = file_get_contents("ch1.txt");
$ball = file_get_contents("ch2.txt");
$aa = "-100kanalid";  //promokod yuboriladigan kanal id raqami
$ab = "-100kanalid"; //promokod ishlatilganligi haqida yuboriladigan kanalid raqami
if(mb_stripos($text, "/promo")!==false){
	$m1 = explode(" ",$text);
 $m2 = $m1[1];
 file_put_contents("ch1.txt","$m2");
 bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"Promokod $promo
qancha olmos berilsin
/ball olmos miqdori yozing
Masalan
/ball 40",
]);
}

if(mb_stripos($text, "/ball")!==false){
	$m1 = explode(" ",$text);
 $m2 = $m1[1];
 file_put_contents("ch2.txt","$m2");
 bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"promokod $promo
  Beriladigan olmos $ball
Foydalanuvchilar soni   1
kanalga yuborildi ",
 ]);
 bot("sendmessage",[
 'chat_id'=>$aa,
 'text'=>"<b>💳 Yangi Promo kod.
💎 Olmos miqdori-> $ball
🥇 Foydalanuvchilar soni 1ta
🔵 Botga kirish -> @SOATHISOBOT
👇 ishlatish uchun pastdagi tugmani bosing</b>",
 'parse_mode'=>'html',
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"🎈Promokodni ishlatish", "url"=>"https://t.me/SOATHISOBOT?start=$promo"]],
]
])
]);
}

if($text=="/start $promo"){
$pul= file_get_contents("pul/$cid.txt");
$plus = $pul + $ball;
file_put_contents("pul/$cid.txt","$plus");
bot("sendmessage",[
'chat_id'=>$cid,
'text'=>"<i>✅ Promo kod to'g'ri sizga $ball ta olmos berildi!</i>",
'parse_mode'=>"html",
]);
unlink("ch1.txt");
bot('sendmessage',[
'chat_id'=>$ab,
'text'=>"<i>⚠️👆 Diqqat tepadagi ptomokod ishlatildi 
endi undan qayta foydalanib bo'lmaydi ❎
Promokoddan $nameru foydalandi va 
unga $ball ta olmos taqdim etildi🎈</i>",
'parse_mode'=>'html',
]);
unlink("ch2.txt");
}

if($data =="referal"){
bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<b>🔗Referal Havolangiz🔗</b>

➡️ <code>https://t.me/$bot?start=$callfrid</code>  🔗

<b>Do'stingiz havola orqali botga kirsa sizga 10 ta olmos beriladi 💎</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Ulashish ♻", "url"=>"https://t.me/share/url?url=https://t.me/$bot?start=$callfrid"]],
[['text'=>"■ Ma'lumot ", 'callback_data'=>"malumot"]],
[['text'=>"Ortga🔙 ", 'callback_data'=>"orqa"]],
]
]),
]);
}

if($data == "malumot"){
bot('answerCallbackQuery', [
'callback_query_id'=>$qid,
'text'=>"Do'stlaringizga ulashing  do'stingiz havolangiz orqali ro'yxatdan o'tsa sizga 10ta olmos beriladi!",
'show_alert'=>true,
]);
}

if($data == "stat"){
$lichka=file_get_contents("shekih.db");
$lich=substr_count($lichka,"\n");
$time=date('H:i:s',strtotime('3 hour'));

bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
    'text'=> "<b>Bot statatistikasi:</b>    
├▶A'zolar: <b>$lich</b>
├▶Kanalimiz: <b>@SOATHISOBOT_NEWS</b>
",
'parse_mode'=>'html',
'reply_markup' =>json_encode([
      'inline_keyboard'=>[
[['text'=>"Ortga🔙 ", 'callback_data'=>"orqa"]],
]
])
]);
} 

if($data == "olmos"){
$pul = file_get_contents("pul/$cid2.txt");
$odam = file_get_contents("odam/$cid2.dat");
$baza = file_get_contents("Unknown_Blogger.ids");
$obsh = substr_count($baza,"\n");
$gruppa = substr_count($baza,"-");
$lichka = $obsh - $gruppa;
$time=date('H:i',strtotime('2 hour'));
$sana=date("d/m/y",strtotime("2 hour"));
     bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<b>Sizning olmosingiz: ¦ $pul ¦ ta💎 ¦ ⏰ $time  ¦  📆$sana</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Olmos sotib olish 💎",'callback_data'=>"getolmos"]],
[['text'=>"Ortga🔙 ", 'callback_data'=>"orqa"]],
]
])
]);
}

if($data == "getolmos"){
bot('editMessageText', [
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<b>Olmos sotib olish uchun adminga murojaat qiling </b>

<u>Yoki qiwi avto to'lovdan foydalaning</u>

📲 To'lov: <code>+998997777777</code>

✏️ izoh: <code>$callfrid</code>

<b>❗️ Eslatma: To'lov qilayotganda izohga ID raqamingizni yozishni unutmang</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>"Qiwi oplata ●", 'url'=>"https://qiwi.com/p/998994499673"]],
[['text'=>"● Admin ", 'url'=>"https://t.me/ShEkiH_CoDeR"]],
[['text'=>"Ortga🔙 ", 'callback_data'=>"orqa"]],
]
])
]);
}


if($data=="cron"){
bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<b>🔝Cron qilish uchun  havolani botga yuboring faqatgina @SOATHISOBOT dan olingan bo'lsa ishlaydi!</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
 [['text'=>"Ortga🔙 ", 'callback_data'=>"orqa"]],
]
]),
]);
}


if($data=="prom"){
bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<b>🔝Marhamat @SOATHISOBOT_NEWS kanalidan olingan promokodni yuboring !</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔝 Kanalga o'tish", "url"=>"https://t.me/SOATHISOBOT_NEWS"]],
[['text'=>"Ortga🔙 ", 'callback_data'=>"orqa"]],
]
])
]);
}


if($data == "transfer"){
bot ('answerCallbackQuery', [
'callback_query_id'=>$qid,
'text'=>"Szida do'stingizga o'tkazish uchun mablag' yetarli emas🔰",
'show_alert'=>true,
]);
}

if($data == "help"){
bot('editMessageText', [
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"[⚠ Qo'llanmani ko'rib chiqing.](https://telegra.ph/Qollanma-01-23)",
'parse_mode'=>'Markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Ortga🔙 ", 'callback_data'=>"orqa"]],
]
])
]);
}


if($data == "barsa"){
$pul = file_get_contents("pul/$cid2.txt");
$odam = file_get_contents("odam/$cid2.dat");
if($pul>=120){
$clone=file_get_contents("baza/$callfrid/index1.php");
    file_put_contents("baza/$callfrid/index1.php", file_get_contents("index1.php"));
    $savet =  str_replace("api_api", "$callname", file_get_contents("baza/$callfrid/index1.php"));
    file_put_contents("baza/$callfrid/index1.php", "$savet");
    $savea =  str_replace("api_bio", "$about", file_get_contents("baza/$callfrid/index1.php"));
    file_put_contents("baza/$callfrid/index1.php", "$savea");
$pul = file_get_contents("pul/$cid2.txt");
$mm=$pul-120;
file_put_contents("pul/$cid2.txt","$mm");
bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<i>OK! bazamizga qôshildingiz endi bu havolaga kirib rôyxatdan ôting!</i>
🔻🔻🔻🔻🔻
 - <u>havolaga kirib rôyxatdan ôting</u>
 - <a href = '$sayt/baza/$callfrid/index1.php'>▶USTIMGA BOSING◀️</a>
 - <u>havolaga kirib rôyxatdan ôting</u>
🔺️🔺️🔺️🔺️🔺️
<i>Ôtib bôlgandan sông bu 👇 havolani nusqalab olib Cron bôlimidan cronlab oling aks holda qôygan soatingiz yurmaydi!</i>
<b>Cron♻qilish uchun havola 👉</b> <code>$sayt/baza/$callfrid/index1.php</code>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔝 Havolaga o'tish", "url"=>"$sayt/baza/$callfrid/index1.php"]],
[["text"=>'♻ Cron qilish', 'callback_data'=>"cron"]],
[['text'=>"Ortga🔙 ", 'callback_data'=>"orqas"]],
]
])
]);
}else{
bot('answerCallbackQuery', [
'callback_query_id'=>$qid,
'text'=>"Hisobingizda 120 ta olmos mavjud emas ❌ olmos sotib oling yoki referalni bosib Pul ishlang!🔰",
'show_alert'=>true,
]);
}
}

if($data == "real"){
$pul = file_get_contents("pul/$cid2.txt");
$odam = file_get_contents("odam/$cid2.dat");
if($pul>=120){
$clone=file_get_contents("baza/$callfrid/index2.php");
    file_put_contents("baza/$callfrid/index2.php", file_get_contents("index2.php"));
    $savet =  str_replace("api_api", "$callname", file_get_contents("baza/$callfrid/index2.php"));
    file_put_contents("baza/$callfrid/index2.php", "$savet");
    $savea =  str_replace("api_bio", "$about", file_get_contents("baza/$callfrid/index2.php"));
    file_put_contents("baza/$callfrid/index2.php", "$savea");
$pul = file_get_contents("pul/$cid2.txt");
$mm=$pul-120;
file_put_contents("pul/$cid2.txt","$mm");
bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<i>OK! bazamizga qôshildingiz endi bu havolaga kirib rôyxatdan ôting!</i>
🔻🔻🔻🔻🔻
 - <u>havolaga kirib rôyxatdan ôting</u>
 - <a href = '$sayt/baza/$callfrid/index2.php'>▶USTIMGA BOSING◀️</a>
 - <u>havolaga kirib rôyxatdan ôting</u>
🔺️🔺️🔺️🔺️🔺️
<i>Ôtib bôlgandan sông bu 👇 havolani nusqalab olib Cron bôlimidan cronlab oling aks holda qôygan soatingiz yurmaydi!</i>
<b>Cron♻qilish uchun havola 👉</b> <code>$sayt/baza/$callfrid/index2.php</code>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔝 Havolaga o'tish", "url"=>"$sayt/baza/$callfrid/index2.php"]],
[["text"=>'♻ Cron qilish', 'callback_data'=>"cron"]],
[['text'=>"Ortga🔙 ", 'callback_data'=>"orqas"]],
]
])
]);
}else{
bot('answerCallbackQuery', [
'callback_query_id'=>$qid,
'text'=>"Hisobingizda 120 ta olmos mavjud emas ❌ olmos sotib oling yoki referalni bosib Pul ishlang!🔰",
'show_alert'=>true,
]);
}
}

if($data == "super"){
$pul = file_get_contents("pul/$cid2.txt");
$odam = file_get_contents("odam/$cid2.dat");
if($pul>=120){
$clone=file_get_contents("baza/$callfrid/index3.php");
    file_put_contents("baza/$callfrid/index3.php", file_get_contents("index3.php"));
    $savet =  str_replace("api_api", "$callname", file_get_contents("baza/$callfrid/index3.php"));
    file_put_contents("baza/$callfrid/index3.php", "$savet");
    $savea =  str_replace("api_bio", "$about", file_get_contents("baza/$callfrid/index3.php"));
    file_put_contents("baza/$callfrid/index3.php", "$savea");
$pul = file_get_contents("pul/$cid2.txt");
$mm=$pul-120;
file_put_contents("pul/$cid2.txt","$mm");
bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<i>OK! bazamizga qôshildingiz endi bu havolaga kirib rôyxatdan ôting!</i>
🔻🔻🔻🔻🔻
 - <u>havolaga kirib rôyxatdan ôting</u>
 - <a href = '$sayt/baza/$callfrid/index3.php'>▶¦ USTIMGA BOSING ¦◀️</a>
 - <u>havolaga kirib rôyxatdan ôting</u>
🔺️🔺️🔺️🔺️🔺️
<i>Ôtib bôlgandan sông bu 👇 havolani nusqalab olib Cron bôlimidan cronlab oling aks holda qôygan soatingiz yurmaydi!</i>
<b>Cron♻qilish uchun havola 👉</b> <code>$sayt/baza/$callfrid/index3.php</code>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔝 Havolaga o'tish", "url"=>"$sayt/baza/$callfrid/index3.php"]],
[["text"=>'♻ Cron qilish', 'callback_data'=>"cron"]],
[['text'=>"Ortga🔙 ", 'callback_data'=>"orqas"]],
]
])
]);
}else{
bot('answerCallbackQuery', [
'callback_query_id'=>$qid,
'text'=>"Hisobingizda 120 ta olmos mavjud emas ❌ olmos sotib oling yoki referalni bosib Pul ishlang!🔰",
'show_alert'=>true,
]);
}
}

if($data == "random"){
$pul = file_get_contents("pul/$cid2.txt");
$odam = file_get_contents("odam/$cid2.dat");
if($pul>=120){
$clone=file_get_contents("baza/$callfrid/index4.php");
    file_put_contents("baza/$callfrid/index4.php", file_get_contents("index4.php"));
    $savet =  str_replace("api_api", "$callname", file_get_contents("baza/$callfrid/index4.php"));
    file_put_contents("baza/$callfrid/index4.php", "$savet");
    $savea =  str_replace("api_bio", "$about", file_get_contents("baza/$callfrid/index4.php"));
    file_put_contents("baza/$callfrid/index4.php", "$savea");
$pul = file_get_contents("pul/$cid2.txt");
$mm=$pul-120;
file_put_contents("pul/$cid2.txt","$mm");
bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<i>OK! bazamizga qôshildingiz endi bu havolaga kirib rôyxatdan ôting!</i>
🔻🔻🔻🔻🔻
 - <u>havolaga kirib rôyxatdan ôting</u>
 - <a href = '$sayt/baza/$callfrid/index4.php'>▶USTIMGA BOSING◀️</a>
 - <u>havolaga kirib rôyxatdan ôting</u>
🔺️🔺️🔺️🔺️🔺️
<i>Ôtib bôlgandan sông bu 👇 havolani nusqalab olib Cron bôlimidan cronlab oling aks holda qôygan soatingiz yurmaydi!</i>
<b>Cron♻qilish uchun havola 👉</b> <code>$sayt/baza/$callfrid/index4.php</code>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔝 Havolaga o'tish", "url"=>"$sayt/baza/$callfrid/index4.php"]],
[["text"=>'♻ Cron qilish', 'callback_data'=>"cron"]],
[['text'=>"Ortga🔙 ", 'callback_data'=>"orqas"]],
]
])
]);
}else{
bot('answerCallbackQuery', [
'callback_query_id'=>$qid,
'text'=>"Hisobingizda 120 ta olmos mavjud emas ❌ olmos sotib oling yoki referalni bosib Pul ishlang!🔰",
'show_alert'=>true,
]);
}
}

if($data == "online"){
$pul = file_get_contents("pul/$cid2.txt");
$odam = file_get_contents("odam/$cid2.dat");
if($pul>=100){
$clone=file_get_contents("baza/$callfrid/index5.php");
    file_put_contents("baza/$callfrid/index5.php", file_get_contents("index5.php"));
    $savet =  str_replace("api_api", "$callname", file_get_contents("baza/$callfrid/index5.php"));
    file_put_contents("baza/$callfrid/index5.php", "$savet");
    $savea =  str_replace("api_bio", "$about", file_get_contents("baza/$callfrid/index5.php"));
    file_put_contents("baza/$callfrid/index5.php", "$savea");
$pul = file_get_contents("pul/$cid2.txt");
$mm=$pul-100;
file_put_contents("pul/$cid2.txt","$mm");
bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<i>OK! bazamizga qôshildingiz endi bu havolaga kirib rôyxatdan ôting!</i>
🔻🔻🔻🔻🔻
 - <u>havolaga kirib rôyxatdan ôting</u>
 - <a href = '$sayt/baza/$callfrid/index5.php'>▶USTIMGA BOSING◀️</a>
 - <u>havolaga kirib rôyxatdan ôting</u>
🔺️🔺️🔺️🔺️🔺️
<i>Ôtib bôlgandan sông bu 👇 havolani nusqalab olib Cron bôlimidan cronlab oling aks holda qôygan soatingiz yurmaydi!</i>
<b>Cron♻qilish uchun havola 👉</b> <code>$sayt/baza/$callfrid/index5.php</code>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔝 Havolaga o'tish", "url"=>"$sayt/baza/$callfrid/index5.php"]],
[["text"=>'♻ Cron qilish', 'callback_data'=>"cron"]],
[['text'=>"Ortga🔙 ", 'callback_data'=>"orqas"]],
]
])
]);
}else{
bot('answerCallbackQuery', [
'callback_query_id'=>$qid,
'text'=>"Hisobingizda 100 ta olmos mavjud emas ❌ olmos sotib oling yoki referalni bosib Pul ishlang!🔰",
'show_alert'=>true,
]);
}
}

if($data == "picture"){
$pul = file_get_contents("pul/$cid2.txt");
$odam = file_get_contents("odam/$cid2.dat");
if($pul>=120){
$clone=file_get_contents("baza/$callfrid/index6.php");
    file_put_contents("baza/$callfrid/index6.php", file_get_contents("index6.php"));
    $savet =  str_replace("api_api", "$callname", file_get_contents("baza/$callfrid/index6.php"));
    file_put_contents("baza/$callfrid/index6.php", "$savet");
    $savea =  str_replace("api_bio", "$about", file_get_contents("baza/$callfrid/index6.php"));
    file_put_contents("baza/$callfrid/index6.php", "$savea");
$pul = file_get_contents("pul/$cid2.txt");
$mm=$pul-120;
file_put_contents("pul/$cid2.txt","$mm");
bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>"<i>OK! bazamizga qôshildingiz endi bu havolaga kirib rôyxatdan ôting!</i>
🔻🔻🔻🔻🔻
 - <u>havolaga kirib rôyxatdan ôting</u>
 - <a href = '$sayt/baza/$callfrid/index6.php'>▶USTIMGA BOSING◀️</a>
 - <u>havolaga kirib rôyxatdan ôting</u>
🔺️🔺️🔺️🔺️🔺️
<i>Ôtib bôlgandan sông bu 👇 havolani nusqalab olib Cron bôlimidan cronlab oling aks holda qôygan soatingiz yurmaydi!</i>
<b>Cron♻qilish uchun havola 👉</b> <code>$sayt/baza/$callfrid/index6.php</code>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🔝 Havolaga o'tish", "url"=>"$sayt/baza/$callfrid/index6.php"]],
[["text"=>'♻ Cron qilish', 'callback_data'=>"cron"]],
[['text'=>"Ortga🔙 ", 'callback_data'=>"orqas"]],
]
])
]);
}else{
bot('answerCallbackQuery', [
'callback_query_id'=>$qid,
'text'=>"Hisobingizda 120 ta olmos mavjud emas ❌ olmos sotib oling yoki referalni bosib Pul ishlang!🔰",
'show_alert'=>true,
]);
}
}

if($data == "delete"){
bot ('answerCallbackQuery', [
'callback_query_id'=>$qid,
'text'=>"Barcha ma'lumotlar tozalandi 🗑 ",
'show_alert'=>false,
]);
}

if(mb_stripos($text,"$sayt")!==false){
file_put_contents("cron/$cid.txt","$text");
$cron=file_get_contents("cron/$cid.txt");
$pul = file_get_contents("pul/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($pul>=0){
file_get_contents("$sayt/Cron.php?link=$cron&time=1");
$pul = file_get_contents("pul/$cid.txt");
$mm=$pul-0;
file_put_contents("pul/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"✅ Cron ornatildi ! <b>- @SHEKIH_CODER </b>
🎩Admin: @Unknown_Blogger,
Cron♻ ishlashi uchun ssilkangizga 🔗 1 marta kiring!",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Diqqat <a href = 'tg://user?id=$cid'>$cid</a> cron qimoqchi!
Cron manzili: <b>$cron</b>
Taklif qilgan odamlari: <b>$odam</b> ta!
ID raqami: <code>$cid</code>",
'parse_mode'=>'html',
]);
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bu bo'limdan foydalanish uchun <b>100💎</b> kerak. Referalni bosing va Dostlaringizga botni ulashing va sizga 10💎 beriladi!",
'parse_mode'=>'html',
'reply_markup'=>$kalt,
]);
}
}
if(mb_stripos($text,"https://")!==false){

bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Boshqa ssilka bo'lsa cron ishlamidi faqat biz bergan ssilka ishlaydi.* *Admin: @Unknown_Blogger*",
'parse_mode'=>'markdown',
'reply_markup'=>$kalt,
]);
}

/*Bu kod @ShEkiH_CoDeR tomonidan yozib 
chiqildi va @UZ_PHP_KODERLAR kanali orqali tarqatildi!
kot bo'lsang manbani olaver insofsizlar*/

//Admin panel 
$rpl = json_encode([
  'resize_keyboard'=>false,
  'force_reply'=>true,
  'selective'=>true,
]);
//blockdan olish
 if($type=="private"){
if($text == "🔓 Blokdan olish" and $cid==$admin){
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "🚫Blockdan Olinadigan 🆔️ni Yozing!" ,
       'parse_mode'=>'markdown',  
       'reply_markup'=>$rpl,
       ]);
       }}
       if($reply == "🚫Blockdan Olinadigan 🆔️ni Yozing!"){  
$fayl = file_get_contents("block.db");
$fayl2 = "$text";
$fayl3 = str_replace($fayl2," ",$fayl);
file_put_contents("block.db","$fayl3");
$fayl = file_get_contents("block.db");
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "[$text](tg://user?id=$text)  Bandan olindi" ,
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

//Forward yuborish
if($text=="🗞Forward xabar" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Xabaringizni Yozing.Men Uni Forward Qilib Hammaga yuboraman!!",
'reply_markup'=>$orqa,
]);
file_put_contents("Bot/$cid.step","forward");
}
$step = file_get_contents("Bot/$cid.step");
if($step=="forward" and $cid==$admin and $text!="🗞Forward xabar"){
if($text == "/bekor"){
unlink("Bot/$cid.step");
}else{ 
$lichka=file_get_contents("shekih.db");
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=bot('ForwardMessage',[
'chat_id'=>$users,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
unlink("Bot/$cid.step");
}
if($xabarok){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Xabar yetkazildi",
]);
unlink("Bot/$cid.step");
}
}
}

$blocks=file_get_contents("block.db");
if(mb_stripos($blocks,"$uid")!==false){
bot('sendMessage', [
'chat_id'=>$cid,
'parse_mode'=>"html",
'text'=>"<b>🖐Salom <a href='tg:user?id=$cid'>$name</a> \nSiz ⛔️ Botimizdan foydalana olmaysiz, chunki Bot sizni bloklangan!!!\nBlokdan chiqish uchun ADMIN ga yozing! Blokdan chiqmaguncha bot siz uchun ishlamaydi!!!🚫!</b> " ,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Admin👨‍💻", "url"=>"https://t.me/ShEkiH_CoDer"]],
]
])
]);return false;}
//Blocklash
if($text=="🔒 Bloklash"){
if($cid==$admin){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Ban Qilinadigan 🆔ni Yuboring!",
'reply_markup'=>$rpl,
]);
}
}
if($reply=="Ban Qilinadigan 🆔ni Yuboring!"){
file_put_contents("block.db","$blocks\n$text");
bot('SendMessage',[
   'chat_id'=>$admin,
        'text'=>"✅[$text](tg://user?id=$text) *Banlandi!*", 
        'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
        ]);
        bot('SendMessage',[
   'chat_id'=>$text,
        'text'=>"<b>🚫😡Sizni ⛔️bu botda bloklashdi🚫. Endi botimizdan foydalana olmaysiz! Agar bu anglashilmovchilik bo'lda admin bilan bog'laning</b>", 
        'parse_mode'=>'html', 
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
   [["text"=>'Asminstrator', 'url'=>"https://t.me/ShEkiH_CoDeR"]],
]
]),
]);
}

//Bot kodi
if($text == "🗳Bot Kodi"){
if($cid == $admin){
bot('senddocument',[
'chat_id'=>$cid,
'document'=>new CURLfile(__FILE__),
]);
}
}

//Bitta userga xabar yuborish
if($text == "📋 Userga Xabar"){
if($cid == $admin){
bot('sendMessage', [
'chat_id'=>$admin,
'text'=>"✔ Userga Xabar yuborish uchun
/sms 🆔️ Xabar 
shu tarzda yuboring!

Admin: @$userR",
'reply_markup'=>$panel,
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men @$userR ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}
if(mb_stripos($text,"/sms") !== false){
if($cid == $admin){
$ex = explode(" ",$text);
$sms = str_replace("/sms $ex[1]","",$text);
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
'text'=>"📨 Admindan Yangi Habar

👤 [$ismi](tg://user?id=$uid)

💌Habar: $sms

📆 $vaqt 🔸  🕰 $time",
'parse_mode'=>"markdown", 
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"👤[Foydalanuvchi]($egasi)ga Habaringiz Yuborildi📩",
'parse_mode'=>"markdown", 
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men @$userR ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}
$lichka=file_get_contents("shekih.db");
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("shekih.db","$lichka\n$cid");
}
}
//statistika
if($text == "📈 Statistika"){
if($cid == $admin){
$lichka=file_get_contents("shekih.db");
$lich=substr_count($lichka,"\n");
$time=date('H:i:s',strtotime('3 hour'));

bot('sendmessage',[
'chat_id'=>$cid,
    'text'=> "<b>Bot statatistikasi:</b>    
├▶A'zolar: <b>$lich</b>
├▶Kanalimiz: <b>@SOATHISOBOT_NEWS</b>
",
'parse_mode'=>'html',
]);
}
}
//oddiy xabar yuborish
$xabar = file_get_contents("send.txt");
if($text == "↗️ Xabar yuborish"){
if($cid == $admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"*Userlarga yuboriladigan xabar matnini kiriting! Bekor qilish uchun /cancel ni bosing.*",
'parse_mode'=>"markdown",
]); file_put_contents("send.txt","user");
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men @$userR ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}
if($xabar=="user" and $cid==$admin){
if($text=="/cancel"){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Bekor qilindi!",
'parse_mode'=>"html",
]); unlink("send.txt");
}else{
$lich = file_get_contents("shekih.db");
$lichka = explode("\n",$lich);
foreach($lichka as $lichkalar){
$okuser=bot("sendmessage",[
'chat_id'=>$lichkalar,
'text'=>$text,
'parse_mode'=>'HTML'
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

//Xabar
if((mb_stripos($text, "/xabar")!==false) and $cid == $admin){
$id = explode(" ",$text);
$id1 = $id[1];
$id2 = $id[2];
$finish = bot('SendMessage', [
'chat_id'=>$id1,
'parse_mode'=>"markdown",
'text'=>"$id2

By: [@$bot]",
'disable_web_page_preview'=>true,
]);
}
if($finish){
bot('SendMessage', [
'chat_id'=>$admin,
'parse_mode'=>"markdown",
'text'=>"✔️ [$id1](tg://user?id=$id1) *Ga Xabar Yuborildi!✅*",
'reply_markup'=>$panel,
]);
}
//pul olib tashlash
if($text == "💎 Pul ayrish"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅Pul ayrish Uchun Quyidagi Buyruqni bajaring!
Bir qator pasga tushib id raqamni yozing, yana bur qator tushib pulni yozing!
Masalan:
/somban
$admin
1000</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
}elseif(mb_stripos($text, "/somban")!==false){
if($cid == $admin){
$id = explode("\n", $text);
$id1 = $id[1]; $id2 = $id[2];
$pul = file_get_contents("pul/$id1.txt");
$miqdor = $pul-$id2;
file_put_contents("pul/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅ $id1 🆔️ Raqamidan $id2 ta olmos ayrildi!\nTekshirib Ko'ring❗❗</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=> "*Hisobingizdan $id2 ta 💎 ayrildi tekshirib ko'ring😎.*",
'parse_mode'=>'Markdown',
]);
}else{
	bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men @Unknown_Blogger ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}

if(mb_stripos($tx,"/pulban100")!== false){
$ex = explode(" ",$tx);
$pul = file_get_contents("pul/$ex[1].txt");
$mm=$pul+100;
file_put_contents("pul/$ex[1].txt","$mm");
bot('sendMessage', [
'chat_id'=>$ex[1],
'text'=>"<b>Hisobingizdan -100 Olmos ayrildi!</b>❌💰",
'reply_markup'=>$key,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"$ex[1] Raqami ID egasidan 100 ta olmos ayrildi❌",
'parse_mode'=>'html',
]);
}
//pul berish
if($text == "💎 Pul Berish"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅Pul Berish Uchun Quyidagi Buyruqni bajaring!
Bir qator pasga tushib id raqamni yozing, yana bur qator tushib pulni yozing!
Masalan:
/pul
$admin
1000</b>",
'parse_mode'=>'html',
'reply_markup'=>$keys,
]);
}elseif(mb_stripos($text, "/pul")!==false){
if($cid == $admin){
$id = explode("\n", $text);
$id1 = $id[1]; $id2 = $id[2];
$pul = file_get_contents("pul/$id1.txt");
$miqdor = $pul+$id2;
file_put_contents("pul/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅ $id1 🆔️ Raqamiga $id2 ta olmos Berildi!\nTekshirib Ko'ring❗❗</b>",
'parse_mode'=>'html',
'reply_markup'=>$keys,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=>"*Hisobingizga $id2 ta 💎 qo'shildi tekshirib ko'ring😎.*",
'parse_mode'=>'Markdown',
]);
}else{
  bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men @Unknown_Blogger ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}
//hammaga olmos tarqatish
if($text=="💎 Olmos tarqatish" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Olmos tarqatish quyidagicha bajariladi!\n /tarqat
hammaga o'tqazmoqchi bo'lgan olmos miqdori masalan 100</b>",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]);
}

if(mb_stripos($text, "/tarqat")!==false){
if($cid == $admin){
$id = explode("\n", $text);
$cid = $id[1]; $id2 = $id[2];
$pul = file_get_contents("pul/$cid.txt");
$miqdor = $pul+$id2;
file_put_contents("pul/$cid.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>Foydalanuvchilarga  $id2 ta olmos Berildi!\nTekshirib Ko'ring❗❗</b>",
'parse_mode' => 'html',
'reply_markup'=>$keys,
]);
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "<b>Adminlar hisobingizga$id2 ta 💎 qo'shdi tekshirib ko'ring😎.</b>",
'parse_mode'=>'html',
]);
}else{
  bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "Bu tugma admin uchun!",
'parse_mode'=>'html',
]);
}
}

//On&Off botni o'chirish&yoqish
$on = file_get_contents("on.txt");
if ($on == "off" && $cid = "$admin"){
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>@SOATHISOBOT dam olish rejimida iltimos bezovta qilmang.📛</b>",
        'parse_mode'=>'html',
]);
}
//o'chirish
if($text == "❌ OFF" && $cid == $admin){
file_put_contents("on.txt","off");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>Ofline.</b>",
  'parse_mode'=>'html',
]);
}
//yoqish
if($text == "✅ ON" && $cid == $admin){
file_put_contents("on.txt","on");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>Online</b>",
  'parse_mode'=>'html',
]);
}
/*Bu kod @ShEkiH_CoDeR tomonidan yozib 
chiqildi va @UZ_PHP_KODERLAR kanali orqali tarqatildi!
kot bo'lsang manbani olaver insofsizlar*/
?>