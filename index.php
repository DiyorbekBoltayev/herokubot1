<?php


include 'Telegram.php';
$telegram = new Telegram('5594871269:AAEiMFlohmqlRT1tlkRCkRYIFoxx3tMqJHs');

$content = array('chat_id' => '1490424185', 'text' => 'Alhamdulillah');
$result=$telegram->sendMessage($content);
echo "ishladi";
?>
