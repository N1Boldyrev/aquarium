<?php
$host='172.23.64.64';
$dbname='db_2222756';
$charset='utf8';
$dsn="mysql:host=$host;dbname=$dbname;charset=$charset";
$options=[
   PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
   PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
         ];
$pdo=new PDO($dsn,'2222756','1597534568',$options);