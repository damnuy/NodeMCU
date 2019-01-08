 <?php
  

function send_LINE($msg){
 $access_token = 'FZObdqSRWM+lxTWD/Z4ux7huvNxNsJrn0b/g+qhzlypZ398DSDxzFfQfCPIMdhASVa4Mq8VsBHDn4WDinQpKNL3L7zER+pQ0yNp00j7n1BQoSPkKWWJGd9eEnBTnoUetHaIFW7Iohvrj0C2Yec1OywdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ub06e91662c4267a3d8be71ccb63b7c61',
       // 'to' => 'Ue77a191627f6ac91899e75d92264310c',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
