<?php
$access_token = 'unqJ9cm/JwmXZboh5IdlpSWJCEyKGJtML92b/4lfl69uW3QvNhedlt2BQF+7ZpQkzdJ+c8A30qTS3sF576t0pJR16Qv/o6LeLJgRVBxdS3dTeeM9zEMyLUAjrxgbniifLHSTO1NLZYu9k4pWgfDZmgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
