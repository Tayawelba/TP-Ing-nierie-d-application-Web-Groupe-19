<?php
 $db=new PDO('mysql:host=127.0.0.1;dbname=empirevoyagebd','root','',
  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ));
 ?>