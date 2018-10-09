<?php

$server = "localhost"; // change according to your server

$username = "root"; // change according to your username

$password = "Shop_2539"; // change according to your password

$db_name = "linebot"; // replace something in your database name

// $ db = mysql_connect ($ server, $ username, $ password) or DIE ('connection to database failed !!');

// mysql_select_db ($ db_name, $ db) or DIE ('no database name !!');

$conn = mysqli_connect ($server, $username, $password, $db_name);

// Check connection

if (mysqli_connect_errno ())

  {

  echo "Failed to connect to MySQL:". mysqli_connect_error ();

  }
  ?>
