<?php
        $url = "http://192.168.1.123:8080/api/messages/send";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $headers = array(
          "Accept: application/json",
          "Authorization: Bearer d268607d-841d-4cef-bbb9-166150d1bd23",
          "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $data = <<<DATA
        {
        "number":"6285702618xxx",
        "body":"$isipesan"  
        }
        DATA;
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        curl_close($curl);
        //var_dump($resp);
        header('Location: .');
?>

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://192.168.1.123:8080/api/messages/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('number' => '6285702618xxx','medias'=> new CURLFILE('http://192.168.1.123:3000/logo.png'),'body' => 'test'),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer d268607d-841d-4cef-bbb9-166150d1bd23'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>
