<?php

include ('line-bot-api-php/php/LineBotLibrary.php');

// Line Setting
$channelSecret = '551ec4feee0.....43cff0';
$access_token  = '2og9ogezC8k.......5ZUEQQdB04t89/1O/w1cDnyilFU=';

// Enable verify Only
// LineBotLibrary::verify($access_token);

// New Method
$bot = new LineBotLibrary($channelSecret, $access_token);
    
// Chcek Events
if (!empty($bot->isEvents)) {
        
    // Reply
    $bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

    // Succeeded
    if ($bot->isSuccess()) { echo 'Succeeded!'; exit(); }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); exit();

}
