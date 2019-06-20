<?php
$host='localhost';
$dbname='aquarium';
$charset='utf8';
$dsn="mysql:host=$host;dbname=$dbname;charset=$charset";
$options=[
   PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
   PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
         ];
$pdo=new PDO($dsn,'root','',$options);