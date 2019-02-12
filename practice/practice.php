<?php

$curl = curl_init();
$search_string = $_POST['search_string'];
$apiURL = 'https://api.edamam.com/search?app_id=cfca78b9&app_key=79da0322fff417e5a405406191c0b605&q=' . $search_string . '&to=3&ingr=3';

echo '<br/><br/>';
var_dump($apiURL);
echo '<br/><br/>';

curl_setopt($curl, CURLOPT_URL, $apiURL);
/* curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); */
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec ($curl); 


echo '<br/><br/>';
//var_dump($result);
echo '<br/><br/>';

//convert json value to string
$recipeObject = json_decode($result);


echo '<br/><br/>';
var_dump($recipeObject -> hits[0] -> recipe -> image);
echo '<br/><br/>';

for($i = 0; $i < count($recipeObject -> hits); $i++) {
    echo '<article class="apiCard-wrapper">';
    echo '<section><p>'. $recipeObject -> hits[$i] -> recipe -> image .'</p></section>';
    echo '</article>';
}

foreach($recipeObject -> hits as $recipe){
    echo '<article class="apiCard-wrapper">';
    echo '<section><p>'. $recipe -> recipe -> image .'</p></section>';
    echo '</article>';
}


// function to match all search namens preg_match_all ('! !')
// match any character but the space [^\s]*?

// find all search results matchings,  using $results, and store it inside var matches
//preg_match_all ('/$search_string/', $result, $matches);
//preg_match_all ('!https://api.edamam.com/search?app_id=cfca78b9&app_key=79da0322fff417e5a405406191c0b605&q=[^\s]*?&to=3&ingr=3!', $result, $matches); 

/* $recipeResults = array_unique($matches[0]); */
/* print_r($matches[0]); */

/* var_dump($results);
echo '<br/><br/>';
var_dump($matches);
echo '<br/><br/>'; */



/* $apiResults = array_values(array_unique($matches[0]));
echo '<br/><br/>';
var_dump($apiResult);
echo '<br/><br/>'; */


/* 
if($i= 0; $i < count($apiResults); $i++) {
    echo '<article class="apiCard-wrapper">';
    echo '<section><p>'. $apiResults .'</p></section>';
    echo '</article>';
}
 */



curl_close($curl); // — Close the cURL session

?>