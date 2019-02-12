$apiUrl = https://api.edamam.com/search?app_id=cfca78b9&app_key=79da0322fff417e5a405406191c0b605&q=;


<?php 
// Create cURL resource = with the cURL initialize function
$curl = curl_init();

$search_string = "chicken"; //to be changed to dynamically get info from search or filter
$url = "https://api.edamam.com/search?app_id=cfca78b9&app_key=79da0322fff417e5a405406191c0b605&q=";

$results = curl_exec($url);

$curl_setopt($curl, CURLOPT_URL, 'https://api.edamam.com/search?app_id=cfca78b9&app_key=79da0322fff417e5a405406191c0b605&q=');

// Run cURL (execute http request)
curl_exec($curl);






// Close cUR L resource, to free up the resources
curl_close($curl);
?>