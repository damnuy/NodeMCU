<?php
$access_token = 'FZObdqSRWM+lxTWD/Z4ux7huvNxNsJrn0b/g+qhzlypZ398DSDxzFfQfCPIMdhASVa4Mq8VsBHDn4WDinQpKNL3L7zER+pQ0yNp00j7n1BQoSPkKWWJGd9eEnBTnoUetHaIFW7Iohvrj0C2Yec1OywdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
