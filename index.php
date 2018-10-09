<?php
require_once __DIR__ . '/linebot.php';
require_once __DIR__ . '/chopper.php';
$bot = new linebot();
$text = $bot->getMessageText();
$query = mysqli_query ($conn, "select ans from replay where keyword = '". $text. "'");
if (mysqli_num_rows ($query)> 0) {
      while ($has = mysqli_fetch_row ($query)) {

            $ans = $has ['0'];

      }

} else {

      $ans = "sorry, I do not know what you mean";

}

$bot->reply('เหลือ '.$ans.' หน่วย');


?>
