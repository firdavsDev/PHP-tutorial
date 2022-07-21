<?php
/*
@Fotagraf_bot ning 3.0 versiyasi | @AsrorDev ga tegishli

Ushbu kod @AsrorDev tomonidan 0 dan yozib chiqildi va @php_python_cod kanalida tarqatildi! 
Manbaga va mualliflik huquqiga tegilmasin :)
Manba: @Php_Python_Cod // Dasturchi: @AsrorDev 

Yaxshilikga buyursin :)
*/
ob_start();
define('API_KEY','botingiz_tokeni');
   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
   }
   
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
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
 $update = json_decode(file_get_contents('php://input'));
$admin = "1623413787";
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$type = $message->chat->type;
$botim = "@Fotagraf_Bot";
$kanal="-1001289823440";
$kanal1="-1001210623284";
$kanal2="-1001573231082";
$kanal3="-1001549867210";
$tx = $message->text;
$text= $message->text;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
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
$ism = file_get_contents("Bot/$cid.ism");
$step = file_get_contents("Bot/$cid.step");
$step2 = file_get_contents("Bot/2.step");
$step3 = file_get_contents("Bot/3.step");
$step1 = file_get_contents("Bot/$chat_id2.step");
$mid = $message->message_id;
$tx = $message->text;
$id1 = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repuser = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;
mkdir("Bot");
$name2 = $update->callback_query->from->first_name;
$username2 = $update->callback_query->from->username;
$about2 = $update->callback_query->from->about;
$lname2 = $update->callback_query->from->last_name;
$title = $message->chat->title;
$description = $message->chat->description;
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ismi = $message->new_chat_member->first_name;
$is_bot = $message->new_chat_member->is_bot;
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
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
$lichka = file_get_contents("lichka.db");
$chan  = $update->channel_post;
$ch_text = $chan->text;
$ch_photo = $chan->photo;
$ch_mid = $chan->message_id;
$ch_cid = $chan->chat->id;
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$calltext = $update->callback_query->message->text;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;
$cqid = $update->callback_query->id;
$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
$rasm =json_encode([
   'resize_keyboard'=>true,
   'keyboard'=>[
[["text"=>"🙋🏻‍♂️ Yigitlar uchun"],["text"=>"🙋🏻‍♀️ Qizlar uchun"],],
[["text"=>"👩‍❤️‍💋‍👨 Juftliklar uchun"],["text"=>"😎 PUBG Logo"],],
[["text"=>"🏠"],],
]
]);

$panel =json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"🤲 Namoz O'qish"],["text"=>"🏞 Rasm Yasash"],],
[["text"=>"🧠 Psixalogik Test"],["text"=>"🖌 Nik Yasash"],],
[["text"=>"📹 Xarfga Video"],["text"=>"📊 Statistika"],],
[["text"=>"👨‍💻 Dasturchi"],],
]
]);

$adminpanel = json_encode([
   'resize_keyboard'=>true,
   'keyboard'=>[
[['text'=>"✍️Foydalanuvchilarga Xabar Yuborish"]],
[['text'=>"✍️Foydalanuvchilarga Forward Yuborish"]],
[['text'=>"📊 Statistika"],['text'=>"🏠"]],
]
]);
$rtagi = json_encode([
'inline_keyboard'=>[
[['text'=>"🧑‍💻 Dasturchi","url"=>"https://t.me/AsrorDev"],['text'=>"🔴 Kanalimiz","url"=>"https://www.youtube.com/channel/UCRCyj6xKsosq1cwNDwtFmNg"]],
]
]);
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
$back = json_encode([
   'resize_keyboard'=>true,
   'keyboard'=>[
[['text'=>"🏠"]],
   ]
]);
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("lichka.db","$lichka\n$cid");
}
} 
if($tx=="/start" and $type=="private"){
$ret = bot("getChatMember",[
         "chat_id"=>"$kanal",
         "user_id"=>$cid,
         ]);
$stat = $ret->result->status;
$rets = bot("getChatMember",[
         "chat_id"=>"$kanal1",
         "user_id"=>$cid,
         ]);
$stats = $rets->result->status;
$retus = bot("getChatMember",[
         "chat_id"=>"$kanal2",
         "user_id"=>$cid,
         ]);

$status = $retus->result->status;

$retusim = bot("getChatMember",[
         "chat_id"=>"$kanal3",
         "user_id"=>$cid,
         ]);
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
$statusim = $retus->result->status;

         if((($stat=="creator" or $stat=="administrator" or $stat=="member") and ($stats=="creator" or $stats=="administrator" or $stats=="member") and ($status=="creator" or $status=="administrator" or $status=="member")  )){
bot("sendMessage",[
         "chat_id"=>$cid,
'text'=>"<b>👋Assalamu aleykum <a href='tg://user?id=$cid'>$name2</a>
Xush kelibsiz 
Kerakli boʻlimni tanlang

Dasturchi: @AsrorDev
</b>",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]);  
}else{
     bot('sendmessage',[
'chat_id'=>$cid,
"text"=>"<b>Quyidagi kanalimizga obuna boʻling. Botni keyin toʻliq ishlatishingiz mumkin!
Obuna bo'ling va Tekshirish tugmasini bosing</b>",
         "parse_mode"=>"html",
         "reply_to_message_id"=>$message_id,
"disable_web_page_preview"=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"➕ A‘zo bo‘lish","url"=>"https://t.me/AOP_Official"],],
[["text"=>"➕ A‘zo bo‘lish","url"=>"https://t.me/Yuregimdagi"],],
[["text"=>"➕ A‘zo bo‘lish","url"=>"https://t.me/PSIXALOGlYA"],],
[["text"=>"➕ A‘zo bo‘lish","url"=>"https://t.me/Asror_Ibrohimov"],],
[['text'=>"✅ Tekshirish",'callback_data'=>"result"]]
]
]),
]);
}   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
}
if ($data == "result"){
$ret = bot("getChatMember",[
         "chat_id"=>"$kanal",
         "user_id"=>$clid,
         ]);
$stat = $ret->result->status;
$rets = bot("getChatMember",[
         "chat_id"=>"$kanal1",
         "user_id"=>$clid,
         ]);
$stats = $rets->result->status;
$retus = bot("getChatMember",[
         "chat_id"=>"$kanal2",
         "user_id"=>$clid,
         ]);

$status = $retus->result->status;

$retusim = bot("getChatMember",[
         "chat_id"=>"$kanal3",
         "user_id"=>$clid,
         ]);

$statusim = $retus->result->status;

         if((($stat=="creator" or $stat=="administrator" or $stat=="member") and ($stats=="creator" or $stats=="administrator" or $stats=="member") and ($status=="creator" or $status=="administrator" or $status=="member")  )){
bot("sendMessage",[
         'chat_id'=>$callcid,
         'message_id'=> $callmid,
'text'=>"<b>👋Assalamu aleykum <a href='tg://user?id=$callcid'>$name2</a>

Xush kelibsiz 
Kerakli boʻlimni tanlang

Dasturchi: @AsrorDev
</b>",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]);  
	}else{
bot ('answerCallbackQuery', [
'callback_query_id'=> $qid,
'text'=>"📛 Siz  kanallarimizga a'zo bo'lmadingiz! Barcha kanallarimizga obuna bolib qayta urinib koring !",
'show_alert'=>true,
]);
}
}

if($tx=="📊 Statistika"){
$lich = substr_count($lichka,"\n");
bot('sendmessage',[
        'chat_id'=>$cid,

'text'=>"📊 Botimiz a'zolari soni: $lich Nafar",
]);
}
if($tx=="✍️Foydalanuvchilarga Xabar Yuborish" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Xabaringizni yozing",
]);
file_put_contents("Bot/$cid.step","xabar");
}

if($step=="xabar" and $cid==$admin){
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=bot('sendmessage',[
'chat_id'=>$users,
'text'=>$text,
]);
}   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($xabarok){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Xabar yetkazildi",
]);
file_put_contents("Bot/$cid.step","");
}
}

if($tx=="✍️Foydalanuvchilarga Forward Yuborish" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Xabaringizni Yozing.Men Uni Forward Qilib Hammaga yuboraman!!",
]);
file_put_contents("Bot/$cid.step","forward");
}

if($step=="forward" and $cid==$admin){
$userlar = explode("\n",$lichka);
foreach($userlar as $users){
$xabarok=bot('ForwardMessage',[
'chat_id'=>$users,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
}
if($xabarok){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Xabar yetkazildi",
]);
file_put_contents("Bot/$cid.step","");
}
}

if($tx=="/admin" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨🏻‍💻 Admin panelga xush kelibsiz!!",
'reply_markup'=>$adminpanel,
]);
} 

if($tx=="🏠"){
   bot('sendmessage',[
      'chat_id'=>$cid,
      'text'=>"🏠 Bosh Menyuga qaytdingiz. O'zingizga kerakli Menyuni tanlang.",
   'parse_mode'=>'html',
  'reply_markup'=>$panel,
   ]);
}
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\

if($tx=="🏞 Rasm Yasash"){
   bot('sendmessage',[
      'chat_id'=>$cid,
      'text'=>"Rasm Yasash Bo'limidasiz. O'zingizga kerakli Menyuni tanlang.

Dasturchi: @Asror_Ibrohimov",
   'parse_mode'=>'html',
  'reply_markup'=>$rasm,
   ]);
}

if($tx=="👨‍💻 Dasturchi"){
   bot('sendmessage',[
      'chat_id'=>$cid,
      'text'=>"@AsrorDev",
     'parse_mode'=>'html',
      'reply_markup'=>$back,
   ]);
}
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($tx=="🧠 Psixalogik Test"){
   bot('sendmessage',[
      'chat_id'=>$cid,
    'text'=>"Bu bo'lim orqali siz o'zingizni tug'ilgan faslingizni belgilagan holda o'z psixologiyangiz qanday ekanini bila olasiz

Qaysi faslda tug'ilgansiz tanlang!👇",
  'parse_mode'=>'html',
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🌄 Bahor","callback_data"=>"bahor"],['text'=>"🏖 Yoz","callback_data"=>"yoz"]],
[['text'=>"🌅 Kuz","callback_data"=>"kuz"],['text'=>"🌨 Qish","callback_data"=>"qish"]],
[['text'=>"🔙","callback_data"=>"back"]],
]
  ]),
   ]);
}
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\

// Bosh menyuga qaytish uchun

if($data=="back"){
    bot('sendmessage',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"🏠 Bosh Menyuga qaytdingiz. O'zingizga kerakli Menyuni tanlang.",
'parse_mode'=>'html',
'reply_markup' => $panel,
]);
}

// Bahor

if($data=="bahor"){
    bot('sendmessage',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"BAHOR 🌸
Bahor oshuftalari juda quvnoq va hayotga chanqoq insonlardir. Xushchaqchaqligi va hazilkashligi sabab dostlarining hamisha ardogida yuradilar. Hayotiy shiorlari: buncha gozal bu olam, bir qara! Jamoaning joni bolish bilan birga, turli hiyla-nayranglarni uyushtirishga ham usta. Bir joyda otirishlari qiyin, sayohat jonu dili. Tez oshiq bolib qoladilar, ammo ayriliqlarni hech qanday gazabu nafratsiz, engil otkazadilar. Ularni sodiq dost sifatida qabul qilmaslik kerak, chunki munosabatlari vaziyat taqozosiga kora ozgarib turadi. Istalgan daqiqada umuman kozdan goyib bolib, sizni unutib yuborishlari mumkin. Birovga boglanib qolish ular uchun qadriyat emas. Vujudida bir vaqtning ozida ehtiros, xudbinlik, romantika, talabchanlik va begamlik josh urgan bu insonlar vada berishga, ayniqsa, uni bajarmaslikka usta. Lekin ular bilan zeikmaysiz.",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
          [['text'=>'🔙','callback_data'=>'back']],
   ]
     ])
 ]);
}

// Yoz

if($data=="yoz"){
    bot('sendmessage',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"YOZ 🌻
Bu faslni yaxshi koradiganlar etakchilik, ilgorlik sifatlariga ega. Ozlari yonib, atrofdagilarni ham yondirib yurishadi. Ular bilan muloqot juda qiziqarli kechadi. Hech qachon tushkunlikka tushmaydilar va hamisha nekbin kayfiyatda yuradilar. Bunday kimsalar har doim yangidan-yangi goyalar oylab topib, amalga oshiradi. Yoz fasli ishtiyoqmandlarining ishdagi osishi ham tez suratda bolib, yuqori martabalarga erishadilar, yaxshi rahbarlik sifatlari bilan ajralib turishadi. Hayotiy shiorlari: qatiyat va mehnat. Ayni paytda etarli darajada murosasoz bolib, zarur orinda yon berishni ham bilishadi. Ularning shaxsiy hayotlari ham havas qilsa arzigulik. Chunki aqlni yoqotar darajada sevish va juftlariga bir umr sodiq qolishni biladilar. Atrofdagilarning kamchiliklariga nisbatan anchayin sabrli va ozlariga nisbatan talabchan bolgan bunday insonlardan yaxshi dost chiqadi. Chunki dostlarini shodlikda ham, gamda ham yolgiz qoldirmaydilar. Birgina kamchiliklari bor: haddan ortiq arazchi bolganlari holda kechimli emas.",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
          [['text'=>'🔙','callback_data'=>'back']],
   ]
     ])
 ]);
}

// Kuz
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($data=="kuz"){
    bot('sendmessage',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"KUZ 🍁
Kuzni sevadiganlar tinchlik, yolgizlik va osoyishtalikni xush koradi. Kopchilikni sevmaganlari holda odamlar orasida ozlarini noqulay his etmaydilar ham. Shunchaki jamoaning ular uchun ahamiyati yoq. Hayotiy shiori: meni tinch qoying! Kayfiyatlari juda beqaror: bir qarasangiz, xandon otib yuradi, bir qarasangiz, hech qanday sababsiz xomrayib oladi. Xuddi kuz havosiga oxshab. Begonalarning nekbinligiyu zafarlari kopincha gashlariga tegadi. Biroq kuzni yaxshi koradigan odamlar juda istedodli bolishadi. Tasviriy sanat, sheriyat va nasrda katta muvaffaqiyatlarga erishishlari mumkin. Fikrlashlari ham boshqalardan farq qiladi. Muhabbatda juda vafodor: faqat bir insonni sevib otadilar. Bir bora va butun umrga! Agar muhabbatiga etisha olmasa olguncha azoblanadi va bu azob ularga ilhom manbai bolib qoladi. Ular tabiat va jonzotlar bilan muloqot chogidagina ozlarini topadilar. Biroq muhabbatiga javob berib, sevib ardoqlaydigan insonni uchratsalar, haqiqiy oilaparvarga aylanadi.",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
          [['text'=>'🔙','callback_data'=>'back']],
   ]
     ])
 ]);
}

// Qish

if($data=="qish"){
    bot('sendmessage',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"QISH ❄️
Bu faslni sevadiganlar, odatda, oziga ishongan va mustaqil insonlardir. Hayotiy shiorlari: faqat ozingga ishon! Katta davralarni xush korishmaydi. Dostu tanishlari juda oz. Ammo shu ozgina odamlarga qattiq ishonishadi. Ishonmasa, ularni yaqin yolatmagan bolishardi. Juda qatiyatli bu kimsalar oz rejalarini birovga oshkor qilmay, yolgiz amalga oshirish yoki hayot oqimini maqsadlariga boysundirishni biladilar. Qishni yaxshi koradigan insonlar kamgap bolishadi. Sorasangiz, javob beradilar, ammo ozlari hech qachon birinchi bolib gap qotmaydilar. Pul ishlab topishni bilishadi, qulaylik va farovonlikni qadrlashadi. Ozlariga qadrli insonlar uchun kop narsadan voz kechishlari mumkin. Kamchiliklari: xasislik va pismiqlik. Shuningdek, bunday insonlar kechirishni bilmaydi.",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
          [['text'=>'🔙','callback_data'=>'back']],
   ]
     ])
 ]);
}   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\

$ism = file_get_contents("Bot/$cid.ism");
$step = file_get_contents("Bot/$cid.step");
$step2 = file_get_contents("Bot/2.step");
$step3 = file_get_contents("Bot/3.step");
$step1 = file_get_contents("Bot/$chat_id2.step");
mkdir("Bot");
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
//Nik boʻlimi
if($text=="🖌 Nik Yasash"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Ismingizni kiriting",
]);
file_put_contents("Bot/$cid.step","nik");
}

if($step=="nik"){
 if($text){
$text = str_replace('q', '🅠︎', $text);
   $text = str_replace('w', '🅦︎', $text);
   $text = str_replace('e', '🅔︎', $text);
   $text = str_replace('r', '🅡︎', $text);
   $text = str_replace('t', '🅣︎', $text);
   $text = str_replace('y', '🅨︎', $text);
   $text = str_replace('u', '🅤︎', $text);
   $text = str_replace('i', '🅘︎', $text);
   $text = str_replace('o', '🅞︎', $text);
   $text = str_replace('p', '🅟︎', $text);
   $text = str_replace('a', '🅐︎', $text);
   $text = str_replace('s', '🅢︎', $text);
   $text = str_replace('d', '🅓︎', $text);
   $text = str_replace('f', '🅕︎', $text);
   $text = str_replace('g', '🅖︎', $text);
   $text = str_replace('h', '🅗︎', $text);
   $text = str_replace('j', '🅙︎', $text);
   $text = str_replace('k', '🅙︎', $text);
   $text = str_replace('l', '🅛︎', $text);
   $text = str_replace('z', '🅩︎', $text);
   $text = str_replace('x', '🅧︎', $text);
   $text = str_replace('c', '🅒︎', $text);
   $text = str_replace('v', '🅥︎', $text);
   $text = str_replace('b', '🅑︎', $text);
   $text = str_replace('n', '🅝︎', $text);
   $text = str_replace('m', '🅜︎', $text);
   $text = str_replace('Q', '🅠︎', $text);
   $text = str_replace('W', '🅦︎', $text);
   $text = str_replace('E', '🅔︎', $text);
   $text = str_replace('R', '🅡︎', $text);
   $text = str_replace('T', '🅣︎', $text);
   $text = str_replace('Y', '🅨︎', $text);
   $text = str_replace('U', '🅤︎', $text);
   $text = str_replace('I', '🅘︎', $text);
   $text = str_replace('O', '🅞︎', $text);
   $text = str_replace('P', '🅟︎', $text);
   $text = str_replace('A', '🅐︎', $text);
   $text = str_replace('S', '🅢︎', $text);
   $text = str_replace('D', '🅓︎', $text);
   $text = str_replace('F', '🅕︎', $text);
   $text = str_replace('G', '🅖︎', $text);
   $text = str_replace('H', '🅗︎', $text);
   $text = str_replace('J', '🅙︎', $text);
   $text = str_replace('K', '🅚︎', $text);
   $text = str_replace('L', '🅛︎', $text);
   $text = str_replace('Z', '🅩︎', $text);
   $text = str_replace('X', '🅧︎', $text);
   $text = str_replace('C', '🅒︎', $text);
   $text = str_replace('V', '🅥︎', $text);
   $text = str_replace('B', '🅑︎', $text);
   $text = str_replace('N', '🅝︎', $text);   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
   $text = str_replace('M', '🅜︎', $text);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⚡Yuklanmoqda kuting ...",
'reply_markup'=>$orqa,
]);
file_put_contents("bot/$cid.ism","$text"); 
file_put_contents("Bot/$cid.step","");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Sizning nik tayyor!\n
Ustiga bosib nusxalab oling*

`$text`

*Botni do`stlaringizga xam ulashing\n
$caption*",
'reply_markup'=>$rtagi,
 'parse_mode'=>"markdown"
]);
}
}
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($tx=="📹 Xarfga Video"){
   bot('sendmessage',[
      'chat_id'=>$cid,
    'text'=>"Bu bo'lim orqali siz o'zingizni ismingizning bosh xarfi uchun videolar topishingiz mumkin.

Marxamat tanlang!👇",
  'parse_mode'=>'html',
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"A ❤️🔐","callback_data"=>"a"],['text'=>"B ❤️🔐","callback_data"=>"b"],['text'=>"D ❤️🔐","callback_data"=>"d"],['text'=>"E ❤️🔐","callback_data"=>"e"]],
[['text'=>"F ❤️🔐","callback_data"=>"f"],['text'=>"G ❤️🔐","callback_data"=>"g"],['text'=>"H ❤️🔐","callback_data"=>"h"],['text'=>"I ❤️🔐","callback_data"=>"i"]],
[['text'=>"J ❤️🔐","callback_data"=>"j"],['text'=>"K ❤️🔐","callback_data"=>"k"],['text'=>"L ❤️🔐","callback_data"=>"l"],['text'=>"M ❤️🔐","callback_data"=>"m"]],
[['text'=>"N ❤️🔐","callback_data"=>"n"],['text'=>"O ❤️🔐","callback_data"=>"o"],['text'=>"P ❤️🔐","callback_data"=>"p"],['text'=>"Q ❤️🔐","callback_data"=>"q"]],
[['text'=>"R ❤️🔐","callback_data"=>"r"],['text'=>"S ❤️🔐","callback_data"=>"s"],['text'=>"T ❤️🔐","callback_data"=>"t"],['text'=>"U ❤️🔐","callback_data"=>"u"]],
[['text'=>"V ❤️🔐","callback_data"=>"v"],['text'=>"X ❤️🔐","callback_data"=>"x"],['text'=>"Y ❤️🔐","callback_data"=>"y"],['text'=>"Z ❤️🔐","callback_data"=>"z"]],
[['text'=>"SH ❤️🔐","callback_data"=>"sh"],['text'=>"CH ❤️🔐","callback_data"=>"ch"],['text'=>"🏡","callback_data"=>"back"]],
]
  ]),
   ]);
}

// Videolar boshlandi
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($data=="a"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/277",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

    if($data=="b"){
        bot('sendvideo',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'video'=>"https://t.me/Mod_Gamer/278",
        'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
        'parse_mode'=>'html',
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
        ]]),
        ]);
        }

        if($data=="d"){
            bot('sendvideo',[
            'chat_id'=>$callcid,
            'message_id'=>$callmid,
            'video'=>"https://t.me/Mod_Gamer/279",
            'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
            'parse_mode'=>'html',
            'reply_markup' => json_encode([
            'inline_keyboard'=>[
            [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
            ]]),
            ]);
            }

            if($data=="e"){
                bot('sendvideo',[
                'chat_id'=>$callcid,
                'message_id'=>$callmid,
                'video'=>"https://t.me/Mod_Gamer/280",
                'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
                'parse_mode'=>'html',
                'reply_markup' => json_encode([
                'inline_keyboard'=>[
                [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
                ]]),
                ]);
                }

                if($data=="f"){
                    bot('sendvideo',[
                    'chat_id'=>$callcid,
                    'message_id'=>$callmid,
                    'video'=>"https://t.me/Mod_Gamer/281",
                    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
                    'parse_mode'=>'html',
                    'reply_markup' => json_encode([
                    'inline_keyboard'=>[
                    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
                    ]]),
                    ]);
                    }
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
                    if($data=="g"){
                        bot('sendvideo',[
                        'chat_id'=>$callcid,
                        'message_id'=>$callmid,
                        'video'=>"https://t.me/Mod_Gamer/282",
                        'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
                        'parse_mode'=>'html',
                        'reply_markup' => json_encode([
                        'inline_keyboard'=>[
                        [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
                        ]]),
                        ]);
                        }

                            if($data=="h"){
                             bot('sendvideo',[   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
                            'chat_id'=>$callcid,
                            'message_id'=>$callmid,
                            'video'=>"https://t.me/Mod_Gamer/283",
                            'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
                            'parse_mode'=>'html',
                            'reply_markup' => json_encode([
                            'inline_keyboard'=>[
                            [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
                            ]]),
                            ]);
                            }

if($data=="i"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/284",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

if($data=="j"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/285",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($data=="k"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/286",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

if($data=="l"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/287",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

if($data=="m"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/288",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

if($data=="n"){   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/289",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

if($data=="o"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/290",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

if($data=="p"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/291",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

if($data=="q"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/292",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
    if($data=="r"){
        bot('sendvideo',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'video'=>"https://t.me/Mod_Gamer/293",
        'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
        'parse_mode'=>'html',
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
        ]]),
        ]);
        }

if($data=="s"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/294",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

    if($data=="t"){
        bot('sendvideo',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'video'=>"https://t.me/Mod_Gamer/295",
        'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
        'parse_mode'=>'html',
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
        ]]),
        ]);
        }
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($data=="u"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/296",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

    if($data=="v"){
        bot('sendvideo',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'video'=>"https://t.me/Mod_Gamer/297",
        'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
        'parse_mode'=>'html',
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
        ]]),
        ]);
        }

if($data=="x"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/298",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

if($data=="y"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/299",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($data=="z"){
    bot('sendvideo',[
    'chat_id'=>$callcid,
    'message_id'=>$callmid,
    'video'=>"https://t.me/Mod_Gamer/300",
    'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
    'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
    ]]),
    ]);
    }

    if($data=="sh"){
        bot('sendvideo',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'video'=>"https://t.me/Mod_Gamer/301",
        'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
        'parse_mode'=>'html',
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
        ]]),
        ]);
        }

        if($data=="ch"){
            bot('sendvideo',[
            'chat_id'=>$callcid,
            'message_id'=>$callmid,
            'video'=>"https://t.me/Mod_Gamer/302",
            'caption'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
            'parse_mode'=>'html',
            'reply_markup' => json_encode([
            'inline_keyboard'=>[
            [['text'=>'🔹 Kanalimiz','url'=>'https://youtu.be/OSFm3L8Uu5w'],],
            ]]),
            ]);
            }
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($tx=="🤲 Namoz O'qish"){
  bot('sendPhoto',[
    'chat_id'=>$cid,
    'photo'=>"https://t.me/Mod_Gamer/349",
  'caption'=>"O'zingizga keraklisini tanlang!👇",
     'parse_mode'=>'html',
   'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>"👳🏻‍♂️ Erkaklar uchun","callback_data"=>"erkak"],['text'=>"🧕🏻 Ayollar uchun","callback_data"=>"ayol"]],
             ]
               ]),
                ]);
             }

  if($data=="erkak"){
    bot('sendMessage',[
       'chat_id'=>$callcid,
      'message_id'=>$callmid,
     'text'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
        'parse_mode'=>'html',   
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>"👳🏻‍♂️ Bomdod","callback_data"=>"bomdod"],['text'=>"👳🏻‍♂️ Peshin","callback_data"=>"peshin"],],
       [['text'=>"👳🏻‍♂️ Asr","callback_data"=>"asr"],['text'=>"👳🏻‍♂️ Shom","callback_data"=>"shom"],],
       [['text'=>"👳🏻‍♂️ Xufton","callback_data"=>"xufton"],['text'=>"👳🏻‍♂️ Duolar","callback_data"=>"duo"],],
       [['text'=>"👳🏻‍♂️ Janoza namozi","callback_data"=>"janoza"],['text'=>"🔙 Orqaga","callback_data"=>"orqa"],],
            ]]),
            ]);
            }

 if($data=="ayol"){
    bot('sendmessage',[
       'chat_id'=>$callcid,
      'message_id'=>$callmid,
     'text'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
        'parse_mode'=>'html',   
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>"🧕🏻 Bomdod","callback_data"=>"bomdod1"],['text'=>"🧕🏻 Peshin","callback_data"=>"peshin1"],],
       [['text'=>"🧕🏻 Asr","callback_data"=>"asr1"],['text'=>"🧕🏻 Shom","callback_data"=>"shom1"],],
       [['text'=>"🧕🏻 Xufton","callback_data"=>"xufton1"],['text'=>"🧕🏻 Duolar","callback_data"=>"duo"],],
      [['text'=>"🔙 Orqaga","callback_data"=>"orqa"],],
            ]]),
            ]);
            }
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
 if($data=="orqa"){
    bot('sendmessage',[
       'chat_id'=>$callcid,
      'message_id'=>$callmid,
     'text'=>"Ismingizni bosh harfiga video tayyor botni do'stlaringizga ulashing🥰",
        'parse_mode'=>'html',   
        'reply_markup' => json_encode([
        'inline_keyboard'=>[
        [['text'=>"👳🏻‍♂️ Erkaklar uchun","callback_data"=>"erkak"],['text'=>"🧕🏻 Ayollar uchun","callback_data"=>"ayol"]],
             ]
               ]),
                ]);
             }
// erkaklar uchun 

if($data=="bomdod"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/253",
'caption'=>"Bomdod namozi o‘qilish tartibi.(Erkaklar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'erkak'],],
    ]]),
    ]);
    }
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($data=="peshin"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/255",
'caption'=>"Peshin namozi o‘qilish tartibi.(Erkaklar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'erkak'],],
    ]]),
    ]);
    }

if($data=="asr"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/257",
'caption'=>"Asr namozi o‘qilish tartibi.(Erkaklar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'erkak'],],
    ]]),
    ]);
    }
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
    if($data=="shom"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/259",
'caption'=>"Shom namozi o‘qilish tartibi.(Erkaklar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'erkak'],],
    ]]),
    ]);
    }

    if($data=="xufton"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/261",
'caption'=>"Xufton namozi o‘qilish tartibi.(Erkaklar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'erkak'],],
    ]]),
    ]);
    }

    if($data=="duo"){
  bot('sendMessage',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
'text'=>"NAMOZDAN KEYINGI ZIKRLAR

Namoz salom bilan tugaydi. Salomdan keyingi amallar (tasbehotu duolar) majburiy emas, ammo nihoyatda savoblidir.
Farz namozlaridan keyin quyidagi duoni o‘qish sunnatdir:
Allohumma antas-salam va minkas-salam. Tabarokta ya zaljalali val ikrom.
Mazmuni:
Ey Allohim, Sen barcha ayb-nuqsonlardan poksan. Barcha salomatlik va rahmat Sendandir. Ey azamat va qudrat egasi bo‘lgan Allohim, Sening shoning ulug‘dir.
Umuman, har vaqt namozni tugatgandan so‘ng Oyatal kursi o‘qilsa, tasbehot qilinsa, savobi ulug‘ bo‘ladi.",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'back'],],
    ]]),
    ]);
    }
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
    if($data=="janoza"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/263",
'caption'=>"Janoza namozining o‘qilish tartibi.",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'erkak'],],
    ]]),
    ]);
    }

// Ayollar uchun 

if($data=="bomdod1"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/254",
'caption'=>"Bomdod namozi o‘qilish tartibi.(Ayollar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'ayol'],],
    ]]),
    ]);
    }

if($data=="peshin1"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/256",
'caption'=>"Peshin namozi o‘qilish tartibi.(Ayollar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'ayol'],],
    ]]),
    ]);
    }
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($data=="asr1"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/258",
'caption'=>"Asr namozi o‘qilish tartibi.(Ayollar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'ayol'],],
    ]]),
    ]);
    }

    if($data=="shom1"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/260",
'caption'=>"Bomdod namozi o‘qilish tartibi.(Ayollar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'ayol'],],
    ]]),
    ]);
    }

    if($data=="xufton1"){
  bot('sendvideo',[
   'chat_id'=>$callcid,
 'message_id'=>$callmid,
   'video'=>"https://t.me/BotlarimUchun/262",
'caption'=>"Xufton namozi o‘qilish tartibi.(Ayollar uchun)

$botim",
  'parse_mode'=>'html',
    'reply_markup' => json_encode([
    'inline_keyboard'=>[
    [['text'=>'🔙 Orqaga','callback_data'=>'ayol'],],
    ]]),
    ]);
    }

// Bollar uchun
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($tx=="🙋🏻‍♂️ Yigitlar uchun"){
   bot('sendmessage',[
      'chat_id'=>$cid,
    'text'=>"Yigitlar uchun logo bo'limiga xush kelibsiz 

Pastdagi raqamlarni birini tanlang! va o'zingizga ajoyib logolar tayyorlab olishingiz mumkin👇",
  'parse_mode'=>'html',
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"1️⃣","callback_data"=>"b1"],['text'=>"2️⃣","callback_data"=>"b2"]],
[['text'=>"3️⃣","callback_data"=>"b3"],['text'=>"4️⃣","callback_data"=>"b4"]],
[['text'=>"5️⃣","callback_data"=>"b5"],['text'=>"6️⃣","callback_data"=>"b6"]],
[['text'=>"🔙","callback_data"=>"back"]],
]
  ]),
   ]);
}

// Qizlar uchun

if($tx=="🙋🏻‍♀️ Qizlar uchun"){
   bot('sendmessage',[
      'chat_id'=>$cid,
    'text'=>"Qizlar uchun logo bo'limiga xush kelibsiz 

Pastdagi raqamlarni birini tanlang! va o'zingizga ajoyib logolar tayyorlab olishingiz mumkin👇",
  'parse_mode'=>'html',
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"1️⃣","callback_data"=>"q1"],['text'=>"2️⃣","callback_data"=>"q2"]],
[['text'=>"3️⃣","callback_data"=>"q3"],['text'=>"4️⃣","callback_data"=>"q4"]],
[['text'=>"5️⃣","callback_data"=>"q5"],['text'=>"6️⃣","callback_data"=>"q6"]],
[['text'=>"🔙","callback_data"=>"back"]],
]
  ]),
   ]);
}

// Juftliklar uchun

if($tx=="👩‍❤️‍💋‍👨 Juftliklar uchun"){
   bot('sendmessage',[
      'chat_id'=>$cid,
    'text'=>"Juftliklar uchun logo bo'limiga xush kelibsiz 

Pastdagi raqamlarni birini tanlang! va o'zingizga ajoyib logolar tayyorlab olishingiz mumkin👇",
  'parse_mode'=>'html',
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"1️⃣","callback_data"=>"j1"],['text'=>"2️⃣","callback_data"=>"j2"]],
[['text'=>"3️⃣","callback_data"=>"j3"],['text'=>"4️⃣","callback_data"=>"j4"]],
[['text'=>"🔙","callback_data"=>"back"]],
]
  ]),
   ]);
}

// Pubg logo

if($tx=="😎 PUBG Logo"){   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
   bot('sendmessage',[
      'chat_id'=>$cid,
    'text'=>"PUBG logo bo'limiga xush kelibsiz 

Pastdagi raqamlarni birini tanlang! va o'zingizga ajoyib logolar tayyorlab olishingiz mumkin👇",
  'parse_mode'=>'html',
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"1️⃣","callback_data"=>"p1"],['text'=>"2️⃣","callback_data"=>"p2"]],
[['text'=>"3️⃣","callback_data"=>"p3"],['text'=>"4️⃣","callback_data"=>"p4"]],
[['text'=>"🔙","callback_data"=>"back"]],
]
  ]),
   ]);
}
// --------------------Bollar uchun boshlandi-------------------- \\
if($data=="b1"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","boy1");
}

if($step2=="boy1"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/22.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="b2"){   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","boy2");
}

if($step2=="boy2"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/24.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="b3"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","boy3");
}

if($step2=="boy3"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/26.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="b4"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","boy4");
}
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($step2=="boy4"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/27.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="b5"){
bot('sendmessage',[
'chat_id'=>$callcid,   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","boy5");
}

if($step2=="boy5"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/28.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="b6"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]),    // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
]);
file_put_contents("Bot/2.step","boy6");
}

if($step2=="boy6"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/29.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\

// --------------------Qizlar uchun boshlandi-------------------- \\
if($data=="q1"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","qiz1");
}

if($step2=="qiz1"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/30.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="q2"){
bot('sendmessage',[   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","qiz2");
}

if($step2=="qiz2"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/32.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="q3"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","qiz3");
}

if($step2=="qiz3"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/33.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="q4"){
bot('sendmessage',[   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","qiz4");
}

if($step2=="qiz4"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/35.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="q5"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","qiz5");
}

if($step2=="qiz5"){
bot('sendmessage',[
'chat_id'=>$chat_id,   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/36.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="q6"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","qiz6");
}

if($step2=="qiz6"){   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/37.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
}

// --------------------Juftliklar uchun boshlandi-------------------- \\
if($data=="j1"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","juft1");
}

if($step2=="juft1"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/51.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="j2"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","juft2");
}
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($step2=="juft2"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/49.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="j3"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","juft3");
}
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($step2=="juft3"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/48.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}
   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
if($data=="j4"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","juft4");
}

if($step2=="juft4"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/47.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\

// --------------------PUBG Logo boshlandi-------------------- \\
if($data=="p1"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","pubg1");
}

if($step2=="pubg1"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/46.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="p2"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","pubg2");
}

if($step2=="pubg2"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/44.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}

if($data=="p3"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","pubg3");
}

if($step2=="pubg3"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/44.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);
}   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\

if($data=="p4"){
bot('sendmessage',[
'chat_id'=>$callcid,
        'message_id'=>$callmid,
'text'=>"📃 Ismingizni kiriting:

❗️ Diqqat siz yozgan ism rasmga yoziladi.",
'parse_mode'=>"html",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🏠 Bosh menyu",'callback_data'=>"back"]],
]
]), 
]);
file_put_contents("Bot/2.step","pubg4");
}

if($step2=="pubg4"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☇<b>Yuklanmoqda... Bir oz kutib turing ⏰</b>",
 'parse_mode'=>"HTML"
 ]);
bot('sendmessage',[
'chat_id'=>$cid,
       'text' => "Tayyor 🦋",
       'parse_mode'=>'html', 
'reply_markup'=>$back,
]);
file_put_contents("Bot/2.ism","$text"); 
file_put_contents("Bot/2.step","");
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://avtoapiuz.zooo.uz/AvtoApi/apilar/1623413787/43.php?text=$text",
'caption'=>"
📃 Buyurtmangiz tayyor bo'ldi 😉

🔥 @$botim - Do'stlaringizni taklif qiling !",
'parse_mode'=>'html',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
  [['text'=>"🧑‍💻 IT - Blog","url"=>"http://t.me/Asror_Ibrohimov"]],
 [['text'=>'🏠','callback_data'=>'back']],

]
])
]);   // Channel: @Php_Python_Cod --- Developer: @AsrorDev \\
}

/*
@Fotagraf_bot ning 3.0 versiyasi | @AsrorDev ga tegishli

Ushbu kod @AsrorDev tomonidan 0 dan yozib chiqildi va @php_python_cod kanalida tarqatildi! 
Manbaga va mualliflik huquqiga tegilmasin :)
Manba: @Php_Python_Cod // Dasturchi: @AsrorDev 

Yaxshilikga buyursin :)
*/

?>