<?php
/*
Bu kodni faqatgina namuna korsatish maqsadida yangicha talqinga o'tkazdim
Menga xech kimni  kodi va mualliflik xuquqi kerakmas😃
*/
ob_start();
define('API_KEY','token');

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
// Keyboard yaratadigan funksiya
function replyKeyboard($keyboard) {
return json_encode([
'resize_keyboard'=>true,
'keyboard'=> $keyboard
]);
}

// Keyboard yaratadigan funksiya
function inlineKeyboard($keyboard) {
    return json_encode([
        'inline_keyboard'=> $keyboard
    ]);
}

function del(){
global $chat_id;
global $message_id;
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);  
}

function editmessagetext($text,$key){
global $chat_id;
global $message_id;
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>$text,
'reply_markup'=>$key,
'parse_mode'=>'html',
]);  
}

function sendmessage($matn,$key){
global $chat_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>$matn,
'reply_markup'=>$key,
'parse_mode'=>'html',
]);  
}

function sendphoto($url,$caption,$key){
global $chat_id;
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$url,
'caption'=>$caption,
'raply_markup'=>$key,
'parse_mode'=>"html",
]);  
}

function sendvideo($url,$caption,$key){
global $chat_id;
bot('sendvideo',[
'chat_id'=>$chat_id,
'photo'=>$url,
'caption'=>$caption,
'raply_markup'=>$key,
'parse_mode'=>"html",
]);  
}

function joinchat($from){
    global $message_id;
    $gett = bot('getChatMember',[
 'chat_id' =>"-1001326230894",
 'user_id' => $from,
 ]);
 $stat = $gett->result->status;
$rets = bot("getChatMember",[
        "chat_id"=>"-1001326230894",
        "user_id"=>$from,
        ]);
$stats = $rets->result->status;
if((($stat=="creator" or $stat=="administrator" or $stat=="member") and ($stats=="creator" or $stats=="administrator" or $stats=="member"))){
     return true;
        }else{
del();
sendmessage("<b>
Kanallarimizga obuna bo'lib <u>✅ Tasdiqlash</u> tugmasini bosing
</b>",$azolik);  
return false;
}
}

$update = json_decode(file_get_contents('php://input'));
if($update){
$message = $update->message;
$message_id = $message->message_id;
$chat_id = $message->chat->id;
$type = $message->chat->type;
$text= $message->text;
$first_name = $message->from->first_name;
$username = $message->from->username;
$from_id = $update->message->from->id;

if(isset($update->callback_query)){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id; 
$id = $update->callback_query->id;
$from_id = $update->callback_query->from->id;
$message_id = $update->callback_query->message->message_id;
}

$ism = file_get_contents("Bot/$chat_id.ism");
$step = file_get_contents("Bot/$chat_id.step");
$step2 = file_get_contents("Bot/2.step");
$step3 = file_get_contents("Bot/3.step");
$admin = "1623413787";//Admin id raqam
$botim = "Fotagraf_bot"; // bot user
$lichka = file_get_contents("lichka.db");
mkdir("Bot");

// Keyboard yaratish
$rasm = replyKeyboard([
[['text'=>"📸 Foto effect"],],
[['text'=>"🎁 Syurpriz"],["text"=>"👕 Futbolkaga ism"],],
[["text"=>"✍🏻 Status yozish"],["text"=>"🟡 Humans logo"],],
[["text"=>"🙋🏻‍♂️ Yigitlar uchun"],["text"=>"🙋🏻‍♀️ Qizlar uchun"],],
[["text"=>"👩‍❤️‍💋‍👨 Juftliklar uchun"],["text"=>"😎 PUBG Logo"],],
[["text"=>"🏠"],],
]);

$panel = replyKeyboard([
[["text"=>"🤲 Namoz O'qish"],["text"=>"📷 Rasm Yasash"],],
[["text"=>"🧠 Psixalogik Test"],["text"=>"🖌 Nik Yasash"],],
[["text"=>"📹 Videolar"],["text"=>"👨‍💻 Dasturchi"],],
]);
    
$effect = replyKeyboard([
[["text"=>"1️⃣"],["text"=>"2️⃣"],["text"=>"3️⃣"],["text"=>"4️⃣"],],
[["text"=>"5️⃣"],["text"=>"6️⃣"],["text"=>"7️⃣"],["text"=>"8️⃣"],],
[["text"=>"🏠"],],
]);

$adminpanel = replyKeyboard([
[['text'=>"✍️Foydalanuvchilarga Xabar Yuborish"]],
[['text'=>"✍️Foydalanuvchilarga Forward Yuborish"]],
[['text'=>"📊 Statistika"],['text'=>"🏠"]],
]);

$back = replyKeyboard([
[['text'=>"🏠"]],
]);

$azolik = inlineKeyboard([
[["text"=>"💌 Obuna bo'lish","url"=>"https://t.me/Phpdevelopersuz"],],
[["text"=>"💌 Obuna bo'lish","url"=>"https://t.me/my_partfolios"],],
[["text"=>"✅ Tasdiqlash","callback_data"=>"join"]],
]);

$psixologik = inlineKeyboard([
[['text'=>"🌄 Bahor","callback_data"=>"bahor"],['text'=>"🏖 Yoz","callback_data"=>"yoz"]],
[['text'=>"🌅 Kuz","callback_data"=>"kuz"],['text'=>"🌨 Qish","callback_data"=>"qish"]],
[['text'=>"🔙","callback_data"=>"back"]],
]);

$back1 = inlineKeyboard([
[['text'=>'🔙','callback_data'=>'back']],
]);

$videos = inlineKeyboard([
[['text'=>"A ❤️🔐","callback_data"=>"a"],['text'=>"B ❤️🔐","callback_data"=>"b"],['text'=>"D ❤️🔐","callback_data"=>"d"],['text'=>"E ❤️🔐","callback_data"=>"e"]],
[['text'=>"F ❤️🔐","callback_data"=>"f"],['text'=>"G ❤️🔐","callback_data"=>"g"],['text'=>"H ❤️🔐","callback_data"=>"h"],['text'=>"I ❤️🔐","callback_data"=>"i"]],
[['text'=>"J ❤️🔐","callback_data"=>"j"],['text'=>"K ❤️🔐","callback_data"=>"k"],['text'=>"L ❤️🔐","callback_data"=>"l"],['text'=>"M ❤️🔐","callback_data"=>"m"]],
[['text'=>"N ❤️🔐","callback_data"=>"n"],['text'=>"O ❤️🔐","callback_data"=>"o"],['text'=>"P ❤️🔐","callback_data"=>"p"],['text'=>"Q ❤️🔐","callback_data"=>"q"]],
[['text'=>"R ❤️🔐","callback_data"=>"r"],['text'=>"S ❤️🔐","callback_data"=>"s"],['text'=>"T ❤️🔐","callback_data"=>"t"],['text'=>"U ❤️🔐","callback_data"=>"u"]],
[['text'=>"V ❤️🔐","callback_data"=>"v"],['text'=>"X ❤️🔐","callback_data"=>"x"],['text'=>"Y ❤️🔐","callback_data"=>"y"],['text'=>"Z ❤️🔐","callback_data"=>"z"]],
[['text'=>"SH ❤️🔐","callback_data"=>"sh"],['text'=>"CH ❤️🔐","callback_data"=>"ch"]],
[['text'=>"💞 Love videolar","callback_data"=>"love"],['text'=>"🏡","callback_data"=>"back"]],
]);

$love = inlineKeyboard([
[['text'=>"A❤️S ","callback_data"=>"as"],['text'=>"Y❤️E","callback_data"=>"ye"],['text'=>"M❤️A","callback_data"=>"ma"],['text'=>"Л❤️Д","callback_data"=>"ld"]],
[['text'=>"A❤️K","callback_data"=>"ak"],['text'=>"O❤️K","callback_data"=>"ok"],['text'=>"Ш❤️Г","callback_data"=>"wg"],['text'=>"A❤️B","callback_data"=>"ab"]],
[['text'=>"A❤️P","callback_data"=>"ap"],['text'=>"C❤️M","callback_data"=>"cm"],['text'=>"X❤️3","callback_data"=>"x3"],['text'=>"A❤️A","callback_data"=>"aaa"]],
[['text'=>"E❤️П","callback_data"=>"ep"],['text'=>"🔙 Orqaga","callback_data"=>"back"]],
]);

$erkak = inlineKeyboard([
[['text'=>"👳🏻‍♂️ Bomdod","callback_data"=>"bomdod"],['text'=>"👳🏻‍♂️ Peshin","callback_data"=>"peshin"],],
[['text'=>"👳🏻‍♂️ Asr","callback_data"=>"asr"],['text'=>"👳🏻‍♂️ Shom","callback_data"=>"shom"],],
[['text'=>"👳🏻‍♂️ Xufton","callback_data"=>"xufton"],['text'=>"👳🏻‍♂️ Duolar","callback_data"=>"duo"],],
[['text'=>"👳🏻‍♂️ Janoza namozi","callback_data"=>"janoza"],['text'=>"🔙 Orqaga","callback_data"=>"orqa"],],
]);

$ayol = inlineKeyboard([
[['text'=>"🧕🏻 Bomdod","callback_data"=>"bomdod1"],['text'=>"🧕🏻 Peshin","callback_data"=>"peshin1"],],
[['text'=>"🧕🏻 Asr","callback_data"=>"asr1"],['text'=>"🧕🏻 Shom","callback_data"=>"shom1"],],
[['text'=>"🧕🏻 Xufton","callback_data"=>"xufton1"],['text'=>"🧕🏻 Duolar","callback_data"=>"duo"],],
[['text'=>"🔙 Orqaga","callback_data"=>"orqa"],],
]);
    

//statistika saqlash //
$lichka = file_get_contents("azo.dat");
if($type=="private"){
if(stripos($lichka,"$chat_id") !==false){
}else{
file_put_contents("azo.dat","$lichka\n$chat_id");
}
}

if ($data == "result"){
$ret = bot("getChatMember",[
"chat_id"=>"-1001326230894",
"user_id"=>$chat_id,
]);
$stat = $ret->result->status;
$rets = bot("getChatMember",[
"chat_id"=>"-1001326230894",
"user_id"=>$chat_id,
]);
$stats = $rets->result->status;

if((($stat=="creator" or $stat=="administrator" or $stat=="member") and ($stats=="creator" or $stats=="administrator" or $stats=="member"))){
sendmessage("<b>
🇺🇿 UZ Yangiliklar @phpdevelopersuz

Assalomu Alaykum kerakli boʻlimni tanlang ✅
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🇷🇺 RUS Новости @phpdevelopersuz

Здравствуйте, Выберите раздел в соответствии  ✅
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🇺🇸 EN News @phpdevelopersuz

Hello choose the section depending✅
</b>",$panel);
}else{
bot ('answerCallbackQuery', [
'callback_query_id'=>$id,
'text'=>"📛 Barcha kanallarimizga obuna bo'ling!",
'show_alert'=>true,
]);
}
}

if($text == "/start"){
sendmessage("<b>
🇺🇿 UZ Yangiliklar @phpdevelopersuz

Assalomu Alaykum kerakli boʻlimni tanlang ✅
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🇷🇺 RUS Новости @phpdevelopersuz

Здравствуйте, Выберите раздел в соответствии  ✅
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🇺🇸 EN News @phpdevelopersuz

Hello choose the section depending✅
</b>",$panel);
}

if($text == "📊 Statistika"){
$baza=file_get_contents("azo.dat");
$all=substr_count($baza,"\n");
sendmessage("
┌ 📊 STATISTIKA
├ 👥 Jami obunachilar: $all nafar
├ 👤 Foydalanayotganlar: $us  nafar
└ 🕊 Rasmiy sahifamiz: @phpdevelopersuz",null);
}

if($text=="📸 Foto effect"){
sendphoto("https://t.me/Mod_Gamer/370","O'zingizga yoqgan effectni tanlang 🥰",$effect);
}

if($text=="🏠"){
sendmessage("🏠 Bosh Menyuga qaytdingiz. O'zingizga kerakli Menyuni tanlang.",$panel);
}

if($text=="📷 Rasm Yasash"){
sendmessage("📷 Rasm Yasash Bo'limidasiz. O'zingizga kerakli Menyuni tanlang.

👨‍💻 Dasturchi: @liderkoder",$rasm);
}

if($text=="🧠 Psixalogik Test"){
sendmessage("Bu bo'lim orqali siz o'zingizni tug'ilgan faslingizni belgilagan holda o'z psixologiyangiz qanday ekanini bila olasiz

Qaysi faslda tug'ilgansiz tanlang!👇

@PSIXALOGlYA - Kanalidan turli xil psixalogik faktlar va maslahatlarni topishingiz mumkin!",$psixologik);
}

if($data=="back"){
editmessagetext("🏠 Bosh Menyuga qaytdingiz. O'zingizga kerakli Menyuni tanlang.",$panel);
}

if($data=="bahor"){
editmessagetext("BAHOR 🌸
Bahor oshuftalari juda quvnoq va hayotga chanqoq insonlardir. Xushchaqchaqligi va hazilkashligi sabab dostlarining hamisha ardogida yuradilar. Hayotiy shiorlari: buncha gozal bu olam, bir qara! Jamoaning joni bolish bilan birga, turli hiyla-nayranglarni uyushtirishga ham usta. Bir joyda otirishlari qiyin, sayohat jonu dili. Tez oshiq bolib qoladilar, ammo ayriliqlarni hech qanday gazabu nafratsiz, engil otkazadilar. Ularni sodiq dost sifatida qabul qilmaslik kerak, chunki munosabatlari vaziyat taqozosiga kora ozgarib turadi. Istalgan daqiqada umuman kozdan goyib bolib, sizni unutib yuborishlari mumkin. Birovga boglanib qolish ular uchun qadriyat emas. Vujudida bir vaqtning ozida ehtiros, xudbinlik, romantika, talabchanlik va begamlik josh urgan bu insonlar vada berishga, ayniqsa, uni bajarmaslikka usta. Lekin ular bilan zeikmaysiz.

@PSIXALOGlYA - Kanalidan turli xil psixalogik faktlar va maslahatlarni topishingiz mumkin!",$back1);
}

if($data=="yoz"){
editmessagetext("YOZ 🌻
Bu faslni yaxshi koradiganlar etakchilik, ilgorlik sifatlariga ega. Ozlari yonib, atrofdagilarni ham yondirib yurishadi. Ular bilan muloqot juda qiziqarli kechadi. Hech qachon tushkunlikka tushmaydilar va hamisha nekbin kayfiyatda yuradilar. Bunday kimsalar har doim yangidan-yangi goyalar oylab topib, amalga oshiradi. Yoz fasli ishtiyoqmandlarining ishdagi osishi ham tez suratda bolib, yuqori martabalarga erishadilar, yaxshi rahbarlik sifatlari bilan ajralib turishadi. Hayotiy shiorlari: qatiyat va mehnat. Ayni paytda etarli darajada murosasoz bolib, zarur orinda yon berishni ham bilishadi. Ularning shaxsiy hayotlari ham havas qilsa arzigulik. Chunki aqlni yoqotar darajada sevish va juftlariga bir umr sodiq qolishni biladilar. Atrofdagilarning kamchiliklariga nisbatan anchayin sabrli va ozlariga nisbatan talabchan bolgan bunday insonlardan yaxshi dost chiqadi. Chunki dostlarini shodlikda ham, gamda ham yolgiz qoldirmaydilar. Birgina kamchiliklari bor: haddan ortiq arazchi bolganlari holda kechimli emas.

@PSIXALOGlYA - Kanalidan turli xil psixalogik faktlar va maslahatlarni topishingiz mumkin!",$back1);
}

if($data=="kuz"){
editmessagetext("KUZ 🍁
Kuzni sevadiganlar tinchlik, yolgizlik va osoyishtalikni xush koradi. Kopchilikni sevmaganlari holda odamlar orasida ozlarini noqulay his etmaydilar ham. Shunchaki jamoaning ular uchun ahamiyati yoq. Hayotiy shiori: meni tinch qoying! Kayfiyatlari juda beqaror: bir qarasangiz, xandon otib yuradi, bir qarasangiz, hech qanday sababsiz xomrayib oladi. Xuddi kuz havosiga oxshab. Begonalarning nekbinligiyu zafarlari kopincha gashlariga tegadi. Biroq kuzni yaxshi koradigan odamlar juda istedodli bolishadi. Tasviriy sanat, sheriyat va nasrda katta muvaffaqiyatlarga erishishlari mumkin. Fikrlashlari ham boshqalardan farq qiladi. Muhabbatda juda vafodor: faqat bir insonni sevib otadilar. Bir bora va butun umrga! Agar muhabbatiga etisha olmasa olguncha azoblanadi va bu azob ularga ilhom manbai bolib qoladi. Ular tabiat va jonzotlar bilan muloqot chogidagina ozlarini topadilar. Biroq muhabbatiga javob berib, sevib ardoqlaydigan insonni uchratsalar, haqiqiy oilaparvarga aylanadi.

@PSIXALOGlYA - Kanalidan turli xil psixalogik faktlar va maslahatlarni topishingiz mumkin!",$back1);
}

if($data=="qish"){
editmessagetext("QISH ❄️
Bu faslni sevadiganlar, odatda, oziga ishongan va mustaqil insonlardir. Hayotiy shiorlari: faqat ozingga ishon! Katta davralarni xush korishmaydi. Dostu tanishlari juda oz. Ammo shu ozgina odamlarga qattiq ishonishadi. Ishonmasa, ularni yaqin yolatmagan bolishardi. Juda qatiyatli bu kimsalar oz rejalarini birovga oshkor qilmay, yolgiz amalga oshirish yoki hayot oqimini maqsadlariga boysundirishni biladilar. Qishni yaxshi koradigan insonlar kamgap bolishadi. Sorasangiz, javob beradilar, ammo ozlari hech qachon birinchi bolib gap qotmaydilar. Pul ishlab topishni bilishadi, qulaylik va farovonlikni qadrlashadi. Ozlariga qadrli insonlar uchun kop narsadan voz kechishlari mumkin. Kamchiliklari: xasislik va pismiqlik. Shuningdek, bunday insonlar kechirishni bilmaydi.

@PSIXALOGlYA - Kanalidan turli xil psixalogik faktlar va maslahatlarni topishingiz mumkin!",$back1);
}
//Videolar
if($tx=="📹 Videolar"){
sendmessage("Bu bo'lim orqali siz o'zingizni ismingizning bosh xarfi uchun videolar topishingiz mumkin.
 
Marxamat tanlang!👇",$videos);
}

if($data=="love"){
editmessagetext("Bu bo'lim orqali siz o'zingizni ismingizning bosh xarfi uchun videolar topishingiz mumkin.

Marxamat tanlang!👇",$love);
}
// Videolar boshlandi
if($data=="a"){
sendvideo("https://t.me/Mod_Gamer/277","Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",$back1);
}
//Bunaqa qilib bittalab qoshishga toqatim yetmedi😂
//PS: File id va baza bilan ishlang shunda xar birini kiritib chiqmaysiz!
// bu boyicha xam namunalar chiqaramiz) @liderkoder
//@phpdevelopersuz obuna boling!

if($data=="erkak"){
sendmessage("O'zingizga keraklisini tanlang!👇",$erkak);
}

if($data=="ayol"){
sendmessage("O'zingizga keraklisini tanlang!👇",$ayol);
}

//admin panel

if($text=="/admin" and $cid==$admin){
sendmessage("Admin panelga xush kelibsiz",$adminpanel);
}
//1k dan koplariga jonata olmasa kerak 😂

if($text=="✍️Foydalanuvchilarga Xabar Yuborish" and $chat_id==$admin){
sendmessage("Xabaringizni yuboring!"null);
file_put_contents("Bot/$chat_id.step","xabar");
}

if($step=="xabar" and $chat_id==$admin){
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=bot('sendmessage',[
'chat_id'=>$users,
'text'=>$text,
]);
}
if($xabarok){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Xabar yetkazildi",
]);
file_put_contents("Bot/$chat_id.step","");
}
}

if($text=="✍️Foydalanuvchilarga Forward Yuborish" and $chat_id==$admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Xabaringizni Yozing.Men Uni Forward Qilib Hammaga yuboraman!!",
]);
file_put_contents("Bot/$chat_id.step","forward");
}

if($step=="forward" and $chat_id==$admin){
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=bot('ForwardMessage',[
'chat_id'=>$users,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
}
if($xabarok){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Xabar yetkazildi",
]);
file_put_contents("Bot/$char_id.step","");
}
}

/*
Davomin ozingiz yozib chiqasiz
Bu ishdan maqsad faqatgina sizlarni chiroyliroq va mukammalroq (men mukammal yozaman deyolmayman) kod yozishga orgatish
@phpdevelopersuz obuna bo'ling
Kodni qaytadan @liderkoder yozdi!
https://t.me/KingsOfPhp/4041 ikkala kodni solishtrib ozingizga maqulini tanlang
*/

}