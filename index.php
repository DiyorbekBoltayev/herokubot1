<?php


include 'Telegram.php';
$telegram = new Telegram('5594871269:AAEiMFlohmqlRT1tlkRCkRYIFoxx3tMqJHs');
$chat_id=$telegram->ChatID();
$text=$telegram->Text();
$content = array('chat_id' => $chat_id, 'text' => 'Bot ishlab chiqarilish jarayonida 
iltimos keyinroq qayta urinib ko\'ring. Siz yuborgan matn :'.$text);
$result=$telegram->sendMessage($content);
echo "ishladi";
?>
