<?php
$wd=$_GET["wd"];

$data = file_get_contents("words.json");
$json = json_decode($data);
$wd=" ".$wd;
$contador=false;

if(!empty($wd)){

  foreach($json->badWords as $item)
  {
    if(!empty(stripos($wd,$item->word))){
        $contador=true;
      }

  }
}
if($contador){
   echo "[1]";
}else {
  echo "[0]";
}




?>