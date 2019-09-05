<?php
  require('mailchimpkey.tpl.php');

  $data = [
    'email'     => $_POST['email'],
    'status'    => 'subscribed',
    'firstname' => $_POST['fname'],
    'lastname'  => 'No found',
    'categoria' => $_POST['categoria'],
    'terminos'  => $_POST['terminos'],
  ];

  $apiKey = $keys['apiKey'];
  $listId = $keys['listId'];
  
  $httpCode = syncMailchimp($data,  $apiKey, $listId);
  print $httpCode;
  
  function syncMailchimp($data, $apiKey, $listId) {
    // $apiKey = $keys['apiKey'];
    // $listId = $keys['listId'];

    $memberId = md5(strtolower($data['email']));
    $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

    $json = json_encode([
        'email_address' => $data['email'],
        'status'        => $data['status'], // "subscribed","unsubscribed","cleaned","pending"
        'merge_fields'  => [
            'FNAME'     => $data['firstname'],
            'LNAME'     => $data['lastname'],
            'CATEGORIA'     => $data['categoria'],
            'TERMINOS'     => $data['terminos']
        ]
    ]);

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $httpCode;
  }

?>
