<?php

// include("./vendor/eleirbag89/telegrambotphp/Telegram.php");
// include("./vendor/eleirbag89/telegrambotphp/TelegramErrorLogger.php");

// class MyBot
// {
//     const BOT_TOKEN = "2016260844:AAGwWwI6ZLA7cLUNNcAbbFz2W84wkJebZyo";
//     const TELEGRAM_API_URL = "https://api.telegram.org/bot";

//     public $url;

//     public function __construct()
//     {
//         $this->url = SELF::TELEGRAM_API_URL . SELF::BOT_TOKEN;
//     }

//     private function runScript($method)
//     {
//         return file_get_contents($this->url . '/'. $method);
//     }

//     public function getUpdates()
//     {
//         return $this->runScript('getupdates');
//     }

//     public function sendMessage($chatId, $text)
//     {
//         $url = "sendmessage?text=$text&chat_id=$chatId";
//         return $this->runScript($url);
//     }
// }

// $obj = new MyBot();
// $updatesJson = $obj->getUpdates();
// $updatesJson2Array = json_decode($updatesJson, true);
// $chatId = $updatesJson2Array['result'][0]['message']['chat']['id'];
// $obj->sendMessage($chatId, 'Hi');


// $result = file_get_contents("https://api.telegram.org/bot2016260844:AAGwWwI6ZLA7cLUNNcAbbFz2W84wkJebZyo/sendMessage?chat_id=137444694&text=hello");
// echo $result;



//   set_time_limit();
//   ob_start();
//   const token = "2016260844:AAGwWwI6ZLA7cLUNNcAbbFz2W84wkJebZyo";
  
//   function sendMessage($chat_id, $text) {
//     bot('send_message', [
//       'chat_id' => $chat_id,
//       'text' => $text,
//        'parse_mode' => 'MarkDown'
//     ]);
//   }

//   function bot($method, $dates = []) {
//    $url = "https://api.telegram.org/bot" . token . "/" . $method;
//    $ch = curl_init();
   
//    curl_setopt($ch, CURLOPT_URL, $url);
//    curl_setopt($ch, CURLOPT_RETURNTRASNSFER, true);
//    curl_setopt($ch, CURLOPT_POSTFIELD, $dates);
  
//    $res = curl_exec($ch);

//    if(curl_error($ch)) {
//      var_dump(curl_error($ch));
//    } else {
//     return json_decode($ch);
//    }
//   }

//   $update = file_get_contents("php://input");
  
 
//   file_put_contents("data.json", $update);
 
//   $update = json_decode($update);
//   $chat_id = $update->message->from->id;
 
//   if($update->message->text == '/start') {
//     sendMessage($chat_id, 'salam');
//   } else {
//     sendMessage($chat_id, 'chi?');
//   }
  
// $handle = curl_init("https://api.telegram.org/bot1112247097:AAGa4iaP8HPVd6oBvmpKiPrKoY2dp1gg7mE/sendMessage");
// $parameters = [
//     "chat_id" => 275488860,
//     "text"    => "سلام"
// ];
// curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode($parameters));
// curl_setopt($handle, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
// $result = curl_exec($handle);
// echo $result;

// $parameters = [
//     "chat_id" => 275488860,
//     "text"    => "سلام"
// ];

// $args = array(
//    'bot_token'	=> "2016260844:AAGwWwI6ZLA7cLUNNcAbbFz2W84wkJebZyo",
//    'method'	=> "sendMessage",
//    'args' => json_encode($parameters)
// );
// // $handle = curl_init("https://script.google.com/macros/s/AKfycbxIFY5Sig0peecmH_hay-XveOkqtl6Gq9srDikTIWQ8n5ZDhivJ/exec");
// // curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
// // curl_setopt($handle, CURLOPT_POSTFIELDS, $args);
// // curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, 0);
// // curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, 0);
// // curl_setopt($handle, CURLOPT_FOLLOWLOCATION, true);
// // $result = curl_exec($handle);
// echo $args;

// $handle = curl_init("https://api.telegram.org/bot2016260844:AAGwWwI6ZLA7cLUNNcAbbFz2W84wkJebZyo/sendMessage");
// $parameters = [
//     "chat_id" => 275488860,
//     "text"    => "سلام"
// ];
// curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode($parameters));
// curl_setopt($handle, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
// $result = curl_exec($handle);
// echo $result;

// $content = file_get_contents("php://input");
// if($content){
//     $token = '2016260844:AAGwWwI6ZLA7cLUNNcAbbFz2W84wkJebZyo';
    
//     $apiLink = "https://api.telegram.org/bot$token/";
    
//     echo '<pre>content = '; print_r($content); echo '</pre>';
//     $update = json_decode($content, true);
//     if(!@$update["message"]) $val = $update['callback_query'];
//     else $val = $update;
    
//     $chat_id = $val['message']['chat']['id'];
//     $text = $val['message']['text'];
//     $update_id = $val['update_id'];
//     $sender = $val['message']['from'];
//     ?>
//     <b>There is a message :</b>
//     <br /><br />
//     <b>Username : </b> <?php echo $sender['username']; ?> <br />
//     <b>Sender's Name : </b> <?php echo $sender['first_name'].' '.$sender['last_name']; ?> <br />
//     <b>Text Message : </b> <?php echo $text; ?> <br /><br />
//     <?php 
    
//     file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$text);
//     echo 'Response sent.<br /><br />';
// } else echo 'Only telegram can access this url1.';

require_once('./core.php');
// require_once('./db.php');

$content = file_get_contents("php://input");
$update = json_decode($content, true);
$chat_id = $update["message"]["chat"]["id"];
$text = $update["message"]["text"];

switch($text) {
    case '/start':
        // $table = "joke";
        // $db = DB::getInstance();
        // $text = $db->query("SELECT * FROM {$table} ORDER BY RAND() LIMIT 1");
        $text = "hello";
    break;

    case '/end':
        $text = "b";
    break;

    default: 
        $text = "eshtebah ast";
    break;
}

messageRequestJson('sendMessage', array('chat_id' => $chat_id, 'text' => $text));

/**
 * برای ذخیره شکلک در دیتابیس ابتدا اول
 * encode
 * کنید و در دیتابیس ذخیره کنید سبس
 * برای واکشی کنید و برای نمایش دادن آن
 * decode
 * کنید
 */