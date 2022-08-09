<?php


include 'Telegram.php';
$telegram = new Telegram('5594871269:AAEiMFlohmqlRT1tlkRCkRYIFoxx3tMqJHs');

$content = array('chat_id' => '1490424185', 'text' => 'Alhamdulillah');
$telegram->sendMessage($content);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Heroku 1
</body>
</html>
