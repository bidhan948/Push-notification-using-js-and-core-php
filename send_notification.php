<?php
function sendNotification()
{
    $url = "https://fcm.googleapis.com/fcm/send";

    $fields = array(
        "to" => $_REQUEST['token'],
        "notification" => array(
            "body" => $_REQUEST['message'],
            "title" => $_REQUEST['title'],
            "icon" => 'https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-bell-512.png',
            "click_action" => "https://google.com"
        )
    );

    $headers = array(
        'Authorization: key=AAAAXXJaBbU:APA91bFGe2bAlmGZBuPuL5tMst3OrQO-tcrzoOGqeMyPa5exUkggIfsOEhcsQc4AN3X7WetXAlRBtpBDcEeF__Oow1WIIV5YgEzynGVbkZMPZj3otJY2u3ro_uJx2lhf2fcsS8HKumLv',
        'Content-Type:application/json'
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    print_r($result);
    curl_close($ch);
}
sendNotification();
