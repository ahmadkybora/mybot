<?php

require_once('./core.php');

$content = file_get_contents("php://input");
$update = json_decode($content, true);
$chat_id = $update["message"]["chat"]["id"];
$text = $update["message"]["text"];
$message_id = $update['message']['message_id'];

switch($text) {
    case '/start':
        $myKeyboard = array(
            array(array(text => 'شماره موبایل', request_contact => true))
        );
        // $table = "joke";
        // $db = DB::getInstance();
        // $text = $db->query("SELECT * FROM {$table} ORDER BY RAND() LIMIT 1");
        // $text = "hello";
    break;

    case '/سیاه' || '/سیاه':
        $myKeyboard = array(
            array('سیاه', 'سفید'), 
        );
        // messageRequestJson('sendMessage', array('chat_id' => $chat_id, 'text' => $text, 'reply_to_message_id' => $message_id, 'reply_markup' => array("resize_keyboard "=> true, 
        //     "keyboard" => array(
        //         array('سیاه', 'سفید'), 
        //         array('آبی', 'قرمز')
        //     )
        // )));
    break;

    case '/سفید' || 'سفید':
        $text = "c";
    break;

    default: 
        $text = "eshtebah ast";
    break;
}

/**
 * با بارامتر ریبلی مارک اب میتوان
 * دکمه شیشه ای ساخت
 * 
 */
messageRequestJson('sendMessage', array('chat_id' => $chat_id, 'text' => $text, 'reply_to_message_id' => $message_id, 'reply_markup' => array("resize_keyboard" => true, 
"keyboard" => $myKeyboard
)));

/**
 * بطور مثال متد 
 * request_contact
 * ارسال شماره از سمت کاربر
 * request_location
 * ارسال موقعیت از سمت کاربر
 */
/**
 * برای ذخیره شکلک در دیتابیس ابتدا اول
 * encode
 * کنید و در دیتابیس ذخیره کنید سبس
 * برای واکشی کنید و برای نمایش دادن آن
 * decode
 * کنید
 */