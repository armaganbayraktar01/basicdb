<?php

// class file
require '../src/BasicDB.php';

// connection
$db = new Erbilen\Database\BasicDB('localhost', 'testdb', 'testuser', 'password');

// select
$query = $db->from('post')
            ->orderby('post_id', 'desc')
            ->limit(0, 10)
            ->all();
   
if ( $query ){
  foreach ( $query as $row ){
    print_r($row);
  }
}


// select where ve or_where kullanımı (SELECT * FROM user WHERE user_id = $id || user_name = $name  )
$query = $db->from('user')
            ->where('user_id', $id)
            ->or_where('user_name', $name)
            ->first();
   
if ( $query ){
  foreach ( $query as $row ){
    print_r($row);
  }
}


?>
