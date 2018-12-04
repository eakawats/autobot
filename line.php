<?php
  
function send_LINE($msg){
 $access_token = 'UOeO9ZUwN4dTOpFqTnduO6vtbNy2+4+dpPbggF6b/fXpN5KQJunVpHLbbR8kSzOlKvbceXmLJREc2uSSkRFmvR2MfEkZnlG/vy4vxg9ptFjK2+NpPcKH4RkGV1TyMdHV1+gCjrsrs5CwGNjgwQuxKgdB04t89/1O/w1cDnyilFU='; 
  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];
      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => 'U325a5a0d6e5788d5576ccb37d69fbf92',
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