<?php

$curl = curl_init();
$apiURL = 'https://api.edamam.com/search?app_id=cfca78b9&app_key=79da0322fff417e5a405406191c0b605&q=';
echo '<br/><br/>';
var_dump($apiURL);
echo '<br/><br/>';

curl_setopt($curl, CURLOPT_URL, $apiURL);
$result = curl_exec ($curl); 

//var_dump($result);
//curl_exec($curl);

?>