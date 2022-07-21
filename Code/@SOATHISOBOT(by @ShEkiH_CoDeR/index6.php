<?php
// @DaMaS_BaSS 
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

//kod @DaMaS_BaSS tegiwli va @sirojiddin6326 kanali orqali tarqaldi
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$timerus=date("H:i",strtotime("+0 hour"));

$buoy = date('t', strtotime('2 hour'));

$timeusa = date("H:i",strtotime("-2 hour"));

$timeqirgiz = date("H:i",strtotime("3 hour"));

$time=date("H:i",strtotime("2 hour"));

$kun=date("d.m.y",strtotime("2 hour"));

$haf = date('N',strtotime('2 hour'));
$haft="1🅓🅤🅢🅗🅐🅝🅑🅐1 2🅢🅔🅢🅗🅐🅝🅑🅐2 3🅒🅗🅞🅡🅢🅗🅐🅝🅑🅐3 4🅟🅐🅨🅢🅗🅐🅝🅑🅐4 5🅙🅤🅜🅐5 6🅢🅗🅐🅝🅑🅐6 7🅨🅐🅚🅢🅗🅐🅝🅑🅐7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";


$okun=date("n");
$oynoms = "1🅨🅐🅝🅥🅐🅡1 2🅕🅔🅥🅡🅐🅛2 3🅜🅐🅡🅣3 4🅐🅟🅡🅔🅛4 5🅜🅐🅨5 6🅘🅨🅤🅝6 7🅘🅨🅤🅛7 8🅐🅥🅖🅤🅢🅣8 9🅢🅔🅝🅣🅐🅑🅡9 10🅞🅚🅣🅐🅑🅡10 11🅝🅞🅨🅐🅑🅡11 12🅓🅔🅚🅐🅑🅡12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
//turi1
//soat
$soat = date("H",strtotime("2 hour"));
$s = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00"],["⓿","❶","❷","❸","❹","❺","❻","❼","❽","❾","❶⓿","❶❶","❶❷","❶❸","❶❹","❶❺","❶❻","❶❼","❶❽","❶❾","❷⓿","❷❶","❷❷","❷❸","⓿⓿"], $soat);
//minut
$sekund = date("i",strtotime("2 hour"));
$w = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","00"],["⓿","❶","❷","❸","❹","❺","❻","❼","❽","❾","❶⓿","❶❶","❶❷","❶❸","❶❹","❶❺","❶❻","❶❼","❶❽","❶❾","❷⓿","❷❶","❷❷","❷❸","❷❹","❷❺","❷❻","❷❼","❷❽","❷❾","❸⓿","❸❶","❸❷","❸❸","❸❹","❸❺","❸❻","❸❼","❸❽","❸❾","❹⓿","❹❶","❹❷","❹❸","❹❹","❹❺","❹❻","❹❼","❹❽","❹❾","❺⓿","❺❶","❺❷","❺❸","❺❹","❺❺","❺❻","❺❼","❺❽","❺❾","⓿⓿"], $sekund);
//turi2
//soat
$soate = date("H",strtotime("2 hour"));
$g = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00"],["⁰","¹","²","³","⁴","⁵","⁶","⁷","⁸","⁹","¹⁰","¹¹","¹²","¹³","¹⁴","¹⁵","¹⁶","¹⁷","¹⁸","¹⁹","²⁰","²¹","²²","²³","⁰⁰"], $soate);
//minut
$sekunde = date("i",strtotime("2 hour"));
$f = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","00"],["⁰","¹","²","³","⁴","⁵","⁶","⁷","⁸","⁹","¹⁰","¹¹","¹²","¹³","¹⁴","¹⁵","¹⁶","¹⁷","¹⁸","¹⁹","²⁰","²¹","²²","²³","²⁴","²⁵","²⁶","²⁷","²⁸","²⁹","³⁰","³¹","³²","³³","³⁴","³⁵","³⁶","³⁷","³⁸","³⁹","⁴⁰","⁴¹","⁴²","⁴³","⁴⁴","⁴⁵","⁴⁶","⁴⁷","⁴⁸","⁴⁹","⁵⁰","⁵¹","⁵²","⁵³","⁵⁴","⁵⁵","⁵⁶","⁵⁷","⁵⁸","⁵⁹","⁰⁰"], $sekunde);
//turi3
//soat
$hour = date("H",strtotime("2 hour"));
$h = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00"],["0️⃣","1⃣","2⃣","3️⃣","4️⃣","5️⃣","6️⃣","7️⃣","8️⃣","9️⃣","1️⃣0️⃣","1️⃣1️⃣","1️⃣2️⃣","1️⃣3️⃣","1️⃣4️⃣","1️⃣5️⃣","1️⃣6️⃣","1️⃣7️⃣","1️⃣8️⃣","1️⃣9️⃣","2️⃣0️⃣","2️⃣1️⃣","2️⃣2️⃣","2️⃣3️⃣","0️⃣0️⃣"], $hour);
//minut
$minut = date("i",strtotime("2 hour"));
$m = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","00"],["0️⃣","1️⃣","2⃣","3️⃣","4️⃣","5️⃣","6️⃣","7️⃣","8️⃣","9️⃣","1️⃣0️⃣","1️⃣1️⃣","1️⃣2️⃣","1️⃣3️⃣","1️⃣4️⃣","1️⃣5️⃣","1️⃣6️⃣","1️⃣7️⃣","1️⃣8️⃣","1️⃣9️⃣","2️⃣0️⃣","2️⃣1️⃣","2️⃣2️⃣","2️⃣3️⃣","2️⃣4️⃣","2️⃣5️⃣","2️⃣6️⃣","2️⃣7️⃣","2️⃣8️⃣","2️⃣9️⃣","2️⃣0️⃣","3️⃣1️⃣","3️⃣2️⃣","3️⃣3️⃣","3️⃣4️⃣","3️⃣5️⃣","3️⃣6️⃣","3️⃣7️⃣","3️⃣8️⃣","3️⃣9️⃣","4️⃣0️⃣","4️⃣1️⃣","4️⃣2️⃣","4️⃣3️⃣","4️⃣4️⃣","4️⃣5️⃣","4️⃣6️⃣","4️⃣7️⃣","4️⃣8️⃣","4️⃣9️⃣","5️⃣0️⃣","5️⃣1️⃣","5️⃣2️⃣","5️⃣3️⃣","5️⃣4️⃣","5️⃣5️⃣","5️⃣6️⃣","5️⃣7️⃣","5️⃣8️⃣","5️⃣9️⃣","0️⃣0️⃣"], $minut);
//turi4
//soat
$hou = date("H",strtotime("2 hour"));
$ho = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","00"],["⓪","①","②","③","④","⑤","⑥","⑦","⑧","⑨","①⓪","①①","①②","①③","①④","①⑤","①⑥","①⑦","①⑧","①⑨","②⓪","②①","②②","②③","⓪⓪"], $hou);
//minut
$minu = date("i",strtotime("2 hour"));
$mi = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","54","55","56","57","58","59","00"],["⓪","①","②","③","④","⑤","⑥","⑦","⑧","⑨","①⓪","①①","①②","①③","①④","①⑤","①⑥","①⑦","①⑧","①⑨","②⓪","②①","②②","②③","②④","②⑤","②⑥","②⑦","②⑧","②⑨","③⓪","③①","③②","③③","③④","③⑤","③⑥","③⑦","③⑧","③⑨","④⓪","④①","④②","④③","④④","④⑤","④⑥","④⑦","④⑧","④⑨","⑤⓪","⑤①","⑤②","⑤③","⑤④","⑤⑤","⑤⑥","⑤⑦","⑤⑧","⑤⑨","⓪⓪"], $minu);
//sana
//kun
$kunn = date("d",strtotime("2 hour"));
$ku = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0️⃣","1️⃣","2️⃣","3️⃣","4️⃣","5️⃣","6️⃣","7️⃣","8️⃣","9️⃣","1️⃣0️⃣","1️⃣1️⃣","1️⃣2️⃣","1️⃣3️⃣","1️⃣4️⃣","1️⃣5️⃣","1️⃣6️⃣","1️⃣7️⃣","1️⃣8️⃣","1️⃣9️⃣","2️⃣0️⃣","2️⃣1️⃣","2️⃣2️⃣","2️⃣3️⃣","2️⃣4️⃣","2️⃣5️⃣","2️⃣6️⃣","2️⃣7️⃣","2️⃣8️⃣","2️⃣9️⃣","3️⃣0️⃣","3️⃣1️⃣"], $kunn);
$kun = date("d",strtotime("3 hour"));
$k = str_replace(["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["❶","❷","❸","❹","❺","❻","❼","❽","❾","❶⓿","❶❶","❶❷","❶❸","❶❹","❶❺","❶❻","❶❼","❶❽","❶❾","❷⓿","❷❶","❷❷","❷❸","❷❹","❷❺","❷❻","❷❼","❷❽","❷❾","❸⓿","❸❶"], $kun);
//oy
$oys = date("m",strtotime("2 hour"));
$o = str_replace(["1","2","3","4","5","6","7","8","9","10","11","12"],
["❶","❷","❸","❹","❺","❻","❼","❽","❾","❶⓿","❶❶","❶❷"],$oys);
//yillar
$yil = date("Y",strtotime("2 hour"));
$y = str_replace(["2020","2021","2022","2023","2024","2025"],["2⃣0️⃣2⃣0️⃣","2️⃣0️⃣2️⃣1️⃣","2️⃣0️⃣2⃣2️⃣","2️⃣0️⃣2️⃣3️⃣","2️⃣0️⃣2️⃣4️⃣","2️⃣0️⃣2️⃣5️⃣"], $yil);

$yiil = date("Y",strtotime("2 hour"));
$yi = str_replace(["2020","2021","2022","2023","2024","2025"],["❷⓿❷⓿","❷⓿❷❶","❷⓿❷❷","❷⓿❷❹","❷⓿❷❺"], $yiil);

//kod @DaMaS_BaSS tomonidan tuzib chiqildi
//yilrandom
$yillist = ["$y","$yi"];
$yils = array_rand($yillist);
$yillar = "$yillist[$yils]";
//oyrandom
$oylist = ["$o","$oy"];
$oyy = array_rand($oylist);
$oylar = "$oylist[$oyy]";
//kunrandom
$kunlist = ["$k","$ku"];
$kuns = array_rand($kunlist);
$kunlar = "$kunlist[$kuns]";

//mana sizlar uchun ko'pchilik sotayotgan Super Profil soat kodi
//manba @KingsOfPhp | @Sirojiddin6326 


$raqamlist = ["$ho:$mi","$h:$m","$g:$f","$s:$w"];
$raqamm = array_rand($raqamlist);
$raqam = "$raqamlist[$raqamm]";

$yil = date("Y",strtotime("2 hour"));
$sana2 = date('z', strtotime('2 hour'));
$kunr = date('z',strtotime('2 hour')); 
$i = 206;
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
$a2 = 23;
$b2 = $a2-$kun2;
$a3 = 59;
$b3 = $a3-$kun3;
$a4 = 59;
$b4 = $a4-$kun4;


//ushbu kod @DaMaS_BaSS | @AdvakatUz  | GoDziLLaUz | @AkuLLa_0707 Tomonidan tuzilgan
//shu barcha userlar menga @DaMaS_BaSS ga tegishli
//kodni manba bilan oling
$input =["❄Yangi Yilga 📅$c2-Kun ☃️$c3-Soat 🎅$c1-Minut 🎁$d1-Sekund Qoldi! @SOATHISOBOT","🌝🌚Ertangi kunga: 🌠$b2-Soat, 🕚$b3-Minut, ⚡$b4-Sekund qoldi🌍","📆Bu Oy $buoy-Kundan Iborat","🇺🇿$time | 🇺🇸$timeusa | 🇷🇺$timerus | 🇰🇬$timeqirgiz @SOATHISOBOT 🎈","📅$kun-$oy, $yil-Yil","🗓Yilning $sana2-Kuni","🌐By @SOATHISOBOT"];
  $rand=array_rand($input);
  $text="$input[$rand]";
 $nik = ["api_api"];
  $nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]";   // @DaMaS_BaSS 
$MadelineProto->account->updateProfile(['first_name'=>"$raqam | $niktxt | $raqam",'about'=>"$text"]);
$MadelineProto->account->updateStatus(['offline' => false, ]);
//kodni  @DaMaS_BaSS tuzib chiqdi
$soatuzb=date("H:i",strtotime("2 hour"));
header('Content-type: image/jpg');
//kod @DaMaS_BaSS ga tegiwli
//manbasiz korsam xafa bolma mendan
$logonlist = ["88","338","357","99","86","528"];
$logon = array_rand($logonlist);
$logonomer = "$logonlist[$logon]";

$logolist = ["https://.xvest.ru./Ephoto360/Api.php?type=$logonomer&text=$soatuzb"];
$logos = array_rand($logolist);
$logo = "$logolist[$logos]";
file_put_contents("rasm.jpg",file_get_contents("$logo"));
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);
$MadelineProto->photos->uploadProfilePhoto(['file' => "rasm.jpg"]);
unlink("MadelineProto.log");
unlink("session.madeline");
?>