<?php

ob_start();
define('Bordoniy',"×××"); //Botning tokeni
$admin = "×××"; //Admin id raqami
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".Bordoniy."/".$method;
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
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$cid = $update->message->chat->id;
$cty = $message->chat->type;
$name = $update->message->from->first_name;
$fadmin = $update->message->from->id;
$mid = $message->message_id;

$soat = date('H:i:s', strtotime('2 hour'));
$bugun = date('d-M Y',strtotime('2 hour'));
$users = file_get_contents("statistika/azo.dat");
$group = file_get_contents("statistika/group.dat");
$is_bot = $message->new_chat_member->is_bot;
$title = $message->chat->title;
$new_chat_members = $message->new_chat_member->id;
$capt = $message->caption;

$lang_code = $message->new_chat_member->language_code;
$firs_name = $message->new_chat_member->first_name;
$edit_text = $update->edited_message;
$edit_id = $edit_text->chat->id;
$edit_mid = $edit_text->message_id;

Mkdir("statistika");
if(($new_chat_members != NUll)&&($is_bot!=true)) {
if((stripos($lang_code,"fa")!== false) or (stripos($lang_code,"ar")!==false)){
$vaqti = strtotime("+999999999999 minutes");
bot('kickChatMember', [
'chat_id'=>$cid,
'user_id'=>$new_chat_members,
'until_date'=>$vaqti,
]);
    }else{
      $private_text = "Assalomu alaykum <a href='tg://user?id=$new_chat_members'>$firs_name</a> guruhimizga xush kelibsiz.";
       bot('sendmessage',[
       'chat_id'=>$cid,
       'text'=>$private_text,
       'parse_mode'=>'html'
     ]);
     }
     }
   if($text == "/start"){
   if($cty == "private"){
   bot('deleteMessage', [
   'chat_id' => $cid,
   'message_id' => $mid,
    ]);
    bot('sendmessage',[
    'chat_id'=>$cid, 
    'text'=>"🤖 Men *o'zbekcha* va *arabcha* reklamalarni, ssilkalarni guruhlarda o'chirib beraman.
-----------------------------------------------------
Men ishlashim uchun guruhingizga qo'shib admin etib tayinlashingiz kerak.
-----------------------------------------------------
📃 Bizning kanal: [Kitoblar](t.me/IQTISODIYOT_ARM)", 
     'parse_mode'=>'markdown', 
     'reply_markup'=>json_encode([   
     'inline_keyboard'=>[
      [['text'=>"Reklama bo'yicha",'url'=>"t.me/Bordoniy"],['text'=>"Guruhga qo'shish",'url'=>"t.me/IQTISODIYOT_ARM"]], 
    ]   
    ]),
    ]);
    }
    }
   if(isset($text)){
   if($cty=="private"){ 
   $baza=file_get_contents("statistika/azo.dat");
   if(mb_stripos($baza,$cid) !==false){
   }else{
   $txt="\n$cid";
   $file=fopen("statistika/azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
   }
   if($cty=="supergroup" or $cty=="group"){ 
   $baza=file_get_contents("statistika/group.dat");
   if(mb_stripos($baza,$cid) !==false){
   }else{
   $txt="\n$cid";
   $file=fopen("statistika/group.dat","a");
   fwrite($file,$txt);
   fclose($file);
  }
  }
  }
$gett = bot('getChatMember', [
'chat_id'=>$cid,
'user_id'=>$fadmin,
]);
$get = $gett->result->status;
if($cty=="group" or $cty=="supergroup"){ 
if(($new_chat_members != NUll)&&($is_bot!=false)){
if($get =="member"){
$vaqti = strtotime("+999999999999 minutes");
bot('kickChatMember', [
      'chat_id'=>$cid,
      'user_id'=>$new_chat_members,
      'until_date'=>$vaqti,
      ]);
      bot('sendmessage', [
      'chat_id' => $cid,
      'text' => "<b> <a href='tg://user?id=$fadmin'>$name</a></b> - [<code>$fadmin</code>] Guruhga faqat guruh adminlari bot qo'shishi mumkin.",
      'parse_mode' => 'html',
      'disable_web_page_preview'=>true,
      ]);
      }
      }
if(isset($message->forward_from) or isset($message->forward_from_chat)!==false or stripos($text,".uz")!==false or stripos($text,".com")!==false or stripos($text,".ru")!==false or stripos($text,".dog")!==false or stripos($text,"://")!==false or stripos($text,"http")!==false or stripos($text,"@")!==false or stripos($text,".me")!==false or stripos($capt,"://")!==false or stripos($capt,"http")!==false or stripos($capt,"@")!==false or stripos($capt,".me")!==false){
  if($get =="member"){
bot('deletemessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
bot('SendMessage',[
"chat_id"=> $cid,
'text'=>"<b> <a href='tg://user?id=$fadmin'>$name</a></b> - [<code>$fadmin</code>] Guruhda reklama tarqatish mumkin emas.",
'parse_mode'=>"html",
]);
}
}
if(stripos($text,"ض") or stripos($text, 'ص') or stripos($text, 'ث') or stripos($text, 'ق') or stripos($text, 'ف') or stripos($text, 'غ') or stripos($text, 'ع') or stripos($text, 'ه') or stripos($text, 'خ') or stripos($text, 'ح') or stripos($text, 'ج') or stripos($text, 'ش') or stripos($text, 'س') or stripos($text, 'ي') or stripos($text, 'ب') or stripos($text, 'ل') or stripos($text, 'ا') or stripos($text, 'ت') or stripos($text, 'ن') or stripos($text, 'م') or stripos($text, 'ك') or stripos($text, 'ط') or stripos($text, 'ذ') or stripos($text, 'ء') or stripos($text, 'ؤ') or stripos($text, 'ر') or stripos($text, 'ى') or stripos($text, 'ئ') or stripos($text, 'ة') or stripos($text, 'و') or stripos($text, 'ز') or stripos($text, 'ظ') or stripos($text, 'د') or stripos($tx, 'أ') or stripos($text, 'إ') or stripos($text, 'آ')){
  if($get =="member"){
bot('deletemessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
bot ('SendMessage',[
"chat_id"=> $cid,
'text'=>"<b> <a href='tg://user?id=$fadmin'>$name</a></b> - [<code>$fadmin</code>] Guruhda arab harfda yozish mumkin emas.",
'parse_mode'=>"html",
]);
}
}
}
if((mb_stripos($edit_text,"@")!==false) or (mb_stripos($edit_text,"bot?start")!==false) or (mb_stripos($edit_text,".uz")!==false) or (mb_stripos($edit_text,".ru")!==false) or (mb_stripos($edit_text,".com")!==false) or (mb_stripos($edit_text,"http")!==false) or (mb_stripos($edit_text,".https")!==false) or (mb_stripos($edit_text,"t.me")!==false) or (mb_stripos($edit_text,"joinchat")!==false) or (mb_stripos($edit_text,"startgroup")!==false)){
bot('deleteMessage',[
'chat_id'=>$edit_id,
'message_id'=>$edit_mid,
]);
}
if($update->message->new_chat_member or $update->message->new_chat_photo or $update->message->new_chat_title or $update->message->left_chat_member or $update->message->pinned_message){
 bot('deleteMessage',[
 'chat_id'=>$cid,
 'message_id'=>$mid,
]);
}

?>