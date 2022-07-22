<?php


$access_token = '4uSfwkeFBaSmEoRdsABiJlL5l8jHYcYU/p+6pGwly6szAcQNzB/GtUOnKtnpC4shzdJ+c8A30qTS3sF576t0pJR16Qv/o6LeLJgRVBxdS3c6a/A+FTwqWqWKMsLRNPWjwo8v1KOQCJqH0fHFwgDgYwdB04t89/1O/w1cDnyilFU=';


$userId = 'Ue8397db755c9256de543ed18d01dff28';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

