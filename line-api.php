<?php

include ('php/LineBotLibrary.php');

// Line Setting
$channelSecret = 'e78e282aa50c53add17dfce723437db';
$access_token  = 'lQEpywj7NKX17POuq1GDX386sqLd9k6IAvjaY7exFeUa3squNkgBlbVkcT8JKW8C/9iURIFdFZXkiSjyJci2CSPEInaGwYjvBUtVff5dlJ+Wq5QXU5c7Lskqo73euTU2Yxa+VCYN5JZqeCtMjwVyXgdB04t89/1O/w1cDnyilFU=';

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