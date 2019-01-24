<?php
$access_token = 'GRWBwhmVWihDmi61pv+QkJNHi9qrNIk4NMgIQVVcjaHaytUtu+RDHNrTRxET8caBM6muW1g+0c3J0hz3C1v4gDeIvMzSLHgyCCbisurv515cbyg84FhnT4JsvNvAe3bdg4LHgpc7FMd5K/MgGRsMHAdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
