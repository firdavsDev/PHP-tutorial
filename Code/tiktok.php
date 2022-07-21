<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#000000">
<link rel="apple-touch-icon-precomposed" href="/inc/style/img/app-icon.png">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/inc/style/style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Хостинг, Посуточный оплата,  Мобильный Хостинг,Мобильный Хостинг,, php 7, ffmpeg, GD,(pdo) MySQL(i), sqlite, Curl,IonCube, выбор версии php"/>
<meta name="description" content="Хостинг от  – качественный веб hosting сайтов c круглосуточной поддержкой. Надежный linux хостинг в Азие []"/> 
<meta name="author" content=""/>
<meta name="copyright" content="!"/>
<meta http-equiv="content-language" content="ru"/>
<title>Менеджер Файлов</title></head><body><header>
         <table>
            <tr>
               <td class="l_bar">
<a href="/"><img src="/inc/style/img/home.png" width="23"  alt="home"></a>
               </td>
               <td class="c_bar">
                  <h1 id="logo"><b>MyXvest.Ru - Менеджер сайтов</b></h1>
               </td>
               <td class="r_bar">
<a href="https://MyXvest.Ru/user/menu" title="Кабинет"><img width="25" src="/img/us2.png" alt="Кабинет"></a>
</td> </tr>
         </table>
      </header><div class="mOm"><div class="block first"><?php
$text = $_GET["url"];
header("Content-Type: application/json; charset=UTF-8");

    $headers = array();
    $headers[] = 'content-type: application/x-www-form-urlencoded; charset=UTF-8';
    $headers[] = 'origin: https://tikmate.app';
    $headers[] = 'referer: https://tikmate.app/';
    $headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36';

    $auther = "https://api.tikmate.app/api/lookup";

    $data = 'url='.$text;
    $method = curl_init();

    curl_setopt($method, CURLOPT_URL, $auther);
    curl_setopt($method, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($method, CURLOPT_POST, true);
    curl_setopt($method, CURLOPT_POSTFIELDS, $data);
    curl_setopt($method, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($method);
    curl_close($method);
$response = json_decode($response,1);
    if($text != null and $response["token"]){
        echo json_encode([
            "url"=>["url"=>"https://tikmate.app/download/".$response["token"]."/".$response["id"].".mp4","author_id"=>$response["author_id"],"author_name"=>$response["author_name"],"comment_count"=>$response["comment_count"],"create_time"=>$response["create_time"],"like_count"=>$response["like_count"],"share_count"=>$response["share_count"]],
            'by'=>"@KingsOfPhp",
        
        ],JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    else{
        echo "null";
    }