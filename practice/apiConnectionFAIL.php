<?php

$curl = curl_init();
$apiURL = 'https://api.edamam.com/search?app_id=cfca78b9&app_key=79da0322fff417e5a405406191c0b605&q=';
//$searchField = $_POST['searchField'];
//$searchField = urlencode('searchField');
$searchField = urlencode($_POST['searchField']);


var_dump($apiURL);
echo '<br/><br/>';
var_dump($searchField);
echo '<br/><br/>';

curl_setopt_array(
    $curl,
    array(
        CURLOPT_URL => $apiURL,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $searchField,
        CURLOPT_RETURNTRANSFER => true
    )
);

$result = curl_exec ($curl); 
echo '<br/><br/>';
var_dump($result);
echo '<br/><br/>';

//curl_exec($curl);
curl_close($curl); // — Close the cURL session

?>