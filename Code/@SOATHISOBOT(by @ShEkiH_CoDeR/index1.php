<?php
// 
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

//soat
$hour = date("H",strtotime("2 hour"));
$h = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00"],["ⓞ","❶","❷","❸","❹","❺","❻","❼","❽","❾","❶ⓞ","❶❶","❶❷","❶❸","❶❹","❶❺","❶❻","❶❼","❶❽","❶❾","❷ⓞ","❷❶","❷❷","❷❸","ⓞⓞ"], $hour);
//minut
$minut = date("i",strtotime("2 hour"));
$m = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","00"],["ⓞ","❶","❷","❸","❹","❺","❻","❼","❽","❾","❶ⓞ","❶❶","❶❷","❶❸","❶❹","❶❺","❶❻","❶❼","❶❽","❶❾","❷ⓞ","❷❶","❷❷","❷❸","❷❹","❷❺","❷❻","❷❼","❷❽","❷❾","❸ⓞ","❸❶","❸❷","❸❸","❸❹","❸❺","❸❻","❸❼","❸❽","❸❾","❹ⓞ","❹❶","❹❷","❹❸","❹❹","❹❺","❹❻","❹❼","❹❽","❹❾","❺ⓞ","❺❶","❺❷","❺❸","❺❹","❺❺","❺❻","❺❼","❺❽","❺❾","ⓞⓞ"], $minut);
//h sekund
$sekundk = date("s",strtotime("2 hour"));
$sss = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","00"],["ⓞ","❶","❷","❸","❹","❺","❻","❼","❽","❾","❶ⓞ","❶❶","❶❷","❶❸","❶❹","❶❺","❶❻","❶❼","❶❽","❶❾","❷ⓞ","❷❶","❷❷","❷❸","❷❹","❷❺","❷❻","❷❼","❷❽","❷❾","❸ⓞ","❸❶","❸❷","❸❸","❸❹","❸❺","❸❻","❸❼","❸❽","❸❾","❹ⓞ","❹❶","❹❷","❹❸","❹❹","❹❺","❹❻","❹❼","❹❽","❹❾","❺ⓞ","❺❶","❺❷","❺❸","❺❹","❺❺","❺❻","❺❼","❺❽","❺❾","ⓞⓞ"], $sekundk);

//xsoat
$hour = date("H",strtotime("2 hour"));
$xh = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00"],["ⓞ","①","②","③","④","⑤","⑥","⑦","⑧","⑨","①ⓞ","①①","①②","①③","①④","①⑤","①⑥","①⑦","①⑧","①⑨","②ⓞ","②①","②②","②③","ⓞⓞ"], $hour);
//xminut
$minut = date("i",strtotime("2 hour"));
$xm = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","00"],["ⓞ","①","②","③","④","⑤","⑥","⑦","⑧","⑨","①ⓞ","①①","①②","①③","①④","①⑤","①⑥","①⑦","①⑧","①⑨","②ⓞ","②①","②②","②③","②④","②⑤","②⑥","②⑦","②⑧","②⑨","③ⓞ","③①","③②","③③","③④","③⑤","③⑥","③⑦","③⑧","③⑨","④ⓞ","④①","④②","④③","④④","④⑤","④⑥","④⑦","④⑧","④⑨","⑤ⓞ","⑤①","⑤②","⑤③","⑤④","⑤⑤","⑤⑥","⑤⑦","⑤⑧","⑤⑨","ⓞⓞ"], $minut);
//xsekund
$seku = date("s",strtotime("2 hour"));
$xs = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","00"],["ⓞ","①","②","③","④","⑤","⑥","⑦","⑧","⑨","①ⓞ","①①","①②","①③","①④","①⑤","①⑥","①⑦","①⑧","①⑨","②ⓞ","②①","②②","②③","②④","②⑤","②⑥","②⑦","②⑧","②⑨","③ⓞ","③①","③②","③③","③④","③⑤","③⑥","③⑦","③⑧","③⑨","④ⓞ","④①","④②","④③","④④","④⑤","④⑥","④⑦","④⑧","④⑨","⑤ⓞ","⑤①","⑤②","⑤③","⑤④","⑤⑤","⑤⑥","⑤⑦","⑤⑧","⑤⑨","ⓞⓞ"], $seku);
// xxhours
$soate = date("H",strtotime("2 hour"));
$xxh = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00"],["⁰","¹","²","³","⁴","⁵","⁶","⁷","⁸","⁹","¹⁰","¹¹","¹²","¹³","¹⁴","¹⁵","¹⁶","¹⁷","¹⁸","¹⁹","²⁰","²¹","²²","²³","⁰⁰"], $soate);
//xxminut
$sekunde= date("i",strtotime("2 hour"));
$xxm = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","00"],["⁰","¹","²","³","⁴","⁵","⁶","⁷","⁸","⁹","¹⁰","¹¹","¹²","¹³","¹⁴","¹⁵","¹⁶","¹⁷","¹⁸","¹⁹","²⁰","²¹","²²","²³","²⁴","²⁵","²⁶","²⁷","²⁸","²⁹","³⁰","³¹","³²","³³","³⁴","³⁵","³⁶","³⁷","³⁸","³⁹","⁴⁰","⁴¹","⁴²","⁴³","⁴⁴","⁴⁵","⁴⁶","⁴⁷","⁴⁸","⁴⁹","⁵⁰","⁵¹","⁵²","⁵³","⁵⁴","⁵⁵","⁵⁶","⁵⁷","⁵⁸","⁵⁹","⁰⁰"], $sekunde);
//opshi sekundga 
$sekundeg = date("s",strtotime("2 hour"));
$xxs = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","00"],["⁰","¹","²","³","⁴","⁵","⁶","⁷","⁸","⁹","¹⁰","¹¹","¹²","¹³","¹⁴","¹⁵","¹⁶","¹⁷","¹⁸","¹⁹","²⁰","²¹","²²","²³","²⁴","²⁵","²⁶","²⁷","²⁸","²⁹","³⁰","³¹","³²","³³","³⁴","³⁵","³⁶","³⁷","³⁸","³⁹","⁴⁰","⁴¹","⁴²","⁴³","⁴⁴","⁴⁵","⁴⁶","⁴⁷","⁴⁸","⁴⁹","⁵⁰","⁵¹","⁵²","⁵³","⁵⁴","⁵⁵","⁵⁶","⁵⁷","⁵⁸","⁵⁹","⁰⁰"], $sekundeg);
$time=date("H:i:s",strtotime("2 hour"));
$kun=date("d.m.y",strtotime("2 hour"));
$haf = date('N',strtotime('2 hour'));
$haft="1Dⓤⓢⓗⓐⓝⓑⓐ1 2Sⓔⓢⓗⓐⓝⓑⓐ2 3Cⓗⓞⓡⓢⓗⓐⓝⓑⓐ3 4Pⓐⓨⓢⓗⓐⓝⓑⓐ4 5Jⓤⓜⓐ5 6Sⓗⓐⓝⓑⓐ6 7Yⓐⓚⓢⓗⓐⓝⓑⓐ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
$obh = file_get_contents('https://fa.weather.town/uz/forecast/uzbekistan/toshkent-viloyati/qibray');
$ex = explode('title="Havo harorati"',$obh);
$ex1 = explode('right-container',$ex[1]);
$ubk = str_replace($ex1[1],' ',$ex[1]);
$ubk1 = str_replace('dir="ltr">',' ',$ubk);
$ubk2 = str_replace('<div class="informer-main-page__container fleft right-container',' ',$ubk1);
$ubk3 = str_replace('&deg;C</div>',' ',$ubk2);
$ubk4 = str_replace('</div>',' ',$ubk3);
$obhavo = trim("$ubk4");
$kunr =date('z',strtotime('2 hour')); 
$i = 72;
$s2 = $i-$kunr;
$kun1 = date('z',strtotime('2 hour'));
$a = 364;
$c2 = $a-$kun1;
$kun2 = date('H',strtotime('2 hour'));
$b = 23;
$c3 = $b-$kun2;
$kun3 = date('i',strtotime('2 hour'));
$c = 59;
$c1 = $c-$kun3;
$kun4 = date('s',strtotime('2 hour'));
$d = 59;
$d1 = $d-$kun4;
$kun2 = date('H',strtotime('2 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i',strtotime('2 hour')); 
$a3 = 59;
$b3 = $a3-$kun3;
$kun4 = date('s',strtotime('2 hour'));
$a4 = 59;
$b4 = $a4-$kun4;
$sana2 = date("z",strtotime("2 hour"));
//soat random
$raqamlist = ["$h:$m","$xh:$xm:$xs","$xxh:$xxm"];
$raqamm = array_rand($raqamlist);
$raqam = "$raqamlist[$raqamm]";
$randoms = ["$xxh:$xxm:$xxs","$xh:$xm","$h:$m:$sss"];
$randomm = array_rand($randoms);
$random = "$randoms[$randomm]";

$input = ["⌚$raqam </> 📆$kun </> 📅$hafta <\> ⛅$obhavo °C🗓 𝓨𝓲𝓵𝓷𝓲𝓷𝓰 $sana2- 𝓴𝓾𝓷𝓲 ","🎁🎊 𝗧𝘂𝗴'𝗶𝗹𝗴𝗮𝗻 𝗸𝘂𝗻𝗶𝗺𝗴𝗮 $s2- 𝗸𝘂𝗻 𝗾𝗼𝗹𝗱𝗶
 𝐒𝐨𝐚𝐭:$random"," ⏳🌚𝕰𝖗𝖙𝖆𝖓𝖌𝖎 𝕶𝖚𝖓𝖌𝖆: ⏰$b2- 𝕾𝖔𝖆𝖙 ⏰,🌷$b3- 𝕸𝖎𝖓𝖚𝖙 🥀, $b4- 𝕾𝖊𝖐𝖚𝖓𝖉 𝖖𝖔𝖑𝖉𝖎 ⌛ ","⏳❄ 𝚈𝚊𝚗𝚐𝚒 𝚢𝚒𝚕𝚐𝚊 📅$c2 𝚔𝚞𝚗 ☃️$c3 𝚜𝚘𝚊𝚝 ⏰ 🎅$c1 𝚖𝚒𝚗𝚞𝚝 🎁$d1 𝚜𝚎𝚔𝚞𝚗𝚍 𝚚𝚘𝚕𝚍𝚒!⌛","𝕊𝕠𝕒𝕥:<$h:$m:$sss><$xh:$xm><$time><$xxh:$xxm>"];
  $rand=array_rand($input);
  $text="$input[$rand]";
 $nik = ["api_api"];
  $nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]"; 
$MadelineProto->account->updateProfile(['first_name'=>" ⏰$random<~>| $niktxt |<~> ⏰$raqam",'about'=>"$text"]);
$MadelineProto->account->updateStatus(['offline' => false, ]);
// 
$timy=date("H:i",strtotime("2 hour"));
header('Content-type: image/jpg');
//
$list = ["https://loginimyoq.myxost.ru/ndex.php"];
$tt = array_rand($list);
$text = "$list[$tt]";
file_put_contents("rasm.jpg",file_get_contents("$text"));

$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);
//
$MadelineProto->photos->uploadProfilePhoto(['file' => "rasm.jpg"]);
unlink("MadelineProto.log");
unlink("session.madeline");
$Bool=$MadelineProto->messages->hideReportSpam(['peer'=>725280025,]);
?>