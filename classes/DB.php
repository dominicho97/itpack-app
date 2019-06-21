<?php

class DB {
  private static function connect(){
    $pdo = new PDO('mysql:host=localhost;dbname=itpack;charset=utf8', 'root','' );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}