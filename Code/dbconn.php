<?php


function insert($fileid,$nomi){
if(stripos(users(),$fileid)!==false) {
    echo "Ushbu malumot avvaldan mavjud";
  }else {
  $connection = connect();
  $yoz=$connection->query("INSERT INTO kitob (fileid,nomi) VALUES ('$fileid','$nomi')");

if($yoz){
  return "ok";

  }else {
    return $connection->error;
}
$connection->close();
}
}
function show_users($soz,$table="kitob") {
$connection = connect();
$result = $connection -> query("SELECT * FROM $table ORDER BY RAND()");

 foreach($result as $in){
$savol =  $in['nomi'];
$javob = $in['fileid'];
similar_text($savol,$soz,$out);
if(round($out)>75){
  $text =  $javob;
  $foiz=$out;
break;
}
}
return $text;
}
    function users($table='kitob',$qator='fileid') {
$connection = connect();
$result = $connection -> query("SELECT * FROM $table");

 while($row[] = $result->fetch_array()) {
  $name = $row[$qator];
        
    return $name;
    }
      
    }

function connect() {
$connection = new mysqli("localhost", "root", "uzbek", "my_telegramuz");
if ($connection -> connect_error)
echo "Failed to connect to db: " . $connection->connect_error;
$connection -> query("SET NAMES utf8");
return $connection;
    }