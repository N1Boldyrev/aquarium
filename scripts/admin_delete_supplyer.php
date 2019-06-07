<?php
$id=$_GET["id"];

  $host='localhost';
  $port='3306';
  $dbname='aquarium';
  $charset='utf8';
  $dsn="mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";
  $options=[
      PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
  ];
  $pdo=new PDO($dsn,'root','',$options);
  $stmt=$pdo->query("DELETE FROM waybill where Supplyer_ID=".$id."");
  $stmt=$pdo->query("DELETE FROM supplyer where Supplyer_ID=".$id."");
?>