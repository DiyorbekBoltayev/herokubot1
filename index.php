<?php


include 'Telegram.php';
$telegram = new Telegram('5594871269:AAEiMFlohmqlRT1tlkRCkRYIFoxx3tMqJHs');
$chat_id=$telegram->ChatID();
$text=$telegram->Text();

if($text=="/start"){
    $option=[
      [$telegram->buildKeyboardButton('📜 Biz haqimizda')],
      [$telegram->buildKeyboardButton('🚛 Buyurtma berish')],
    ];
    $keyboard=$telegram->buildKeyBoard($option,'false','true');
    $content=[
        'chat_id'=>$chat_id,
        'text'=>"Assalomu alaykum, Botimizga xush kelibsiz !  Bot orqali masofadan turib 🍯 asal buyurtma qilishingiz mumkin !",
        'reply_markup'=>$keyboard
    ];
    $telegram->sendMessage($content);
}elseif ($text=="📜 Biz haqimizda"){
    $content=[
        'chat_id'=>$chat_id,
        'text'=>"Biz haqimizda bilib oling"
    ];
    $telegram->sendMessage($content);
}
$content=[
    'chat_id'=>$chat_id,
    'text'=>"$text"
];
$telegram->sendMessage($content);


