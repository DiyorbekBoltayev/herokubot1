<?php


include 'Telegram.php';
$telegram = new Telegram('5594871269:AAEiMFlohmqlRT1tlkRCkRYIFoxx3tMqJHs');
$chat_id=$telegram->ChatID();
$text=$telegram->Text();
if($text=='/start'){
    $option=[
      [$telegram->buildKeyboardButton('📜 Biz haqimizda')],
      [$telegram->buildKeyboardButton('🚛 Buyurtma berish')],
    ];
    $keyboard=$telegram->buildKeyBoard($option, $onetime=false , $resize=true);
    $content=[
        'chat_id'=>$chat_id,
        'reply_markup'=>$keyboard,
        'text'=>"Assalomu alaykum, Botimizga xush kelibsiz !  Bot orqali masofadan turib 🍯 asal buyurtma qilishingiz mumkin !"

    ];
    $telegram->sendMessage($content);

}elseif ($text=='📜 Biz haqimizda'){
    $content=[
        'chat_id'=>$chat_id,
        'text'=>"Biz haqimizda bilib oling <a href='https://telegra.ph/Biz-haqimizda-08-10'>Link</a> "
        ,'parse_mode'=>'html'
    ];
    $telegram->sendMessage($content);
}elseif ($text=='🚛 Buyurtma berish'){

    $option=[
      [$telegram->buildKeyboardButton('0.5 kilogramm - 💵 50 000 so`m')],
      [$telegram->buildKeyboardButton('1 kilogramm - 💵 90 000 so`m')],
      [$telegram->buildKeyboardButton('2 kilogramm - 💵 170 000 so`m')],
      [$telegram->buildKeyboardButton('3 kilogramm - 💵 250 000 so`m')],
      [$telegram->buildKeyboardButton('5 kilogramm - 💵 400 000 so`m')],
      [$telegram->buildKeyboardButton('10 kilogramm - 💵 750 000 so`m')],
    ];
    $keyboard=$telegram->buildKeyBoard($option,$onetime=true,$resize=true);
    $content=[
        'chat_id'=>$chat_id,
        'reply_markup'=>$keyboard,
        'text'=>"Kerakli miqdorni tanlang : "

    ];
    $telegram->sendMessage($content);
}elseif ($text=='0.5 kilogramm - 💵 50 000 so`m'
    || $text=='1 kilogramm - 💵 90 000 so`m'
    || $text=='2 kilogramm - 💵 170 000 so`m'
    || $text=='3 kilogramm - 💵 250 000 so`m'
    || $text=='5 kilogramm - 💵 400 000 so`m'
    || $text=='10 kilogramm - 💵 750 000 so`m'
){
    $option=[
      [$telegram->buildKeyboardButton('📱 Telefon raqamni yuborish',$request=true)]
    ];
    $keyboard=$telegram->buildKeyBoard($option,$onetime=true,$resize=true);
    $content=[
        'chat_id'=>$chat_id,
        'reply_markup'=>$keyboard,
        'text'=>"✅ Kerakli miqdor tanlandi . Telefon raqamingizni yuboring 👇"
    ];
    $telegram->sendMessage($content);
}


