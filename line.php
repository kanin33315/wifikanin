 <?php
  

function send_LINE($msg){
 $access_token = 'cFA+riE5hYmhplYKQxZ6/rBfNwG9CIDZAkc9Z46EOD4CVNfdNIM1sn/cQOeHraWhohM5btThrkz/pKELciGMEhEYabBAD4b9eC08Ri9D0LCN9IM9fKMLQbRHSWRBkZmRB4Ku+LJitrn/dPjTK0fQjAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U15ebd1aed51a453c4c6f2d431c63ae8c', 
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
