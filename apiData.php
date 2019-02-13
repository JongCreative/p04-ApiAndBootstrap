<?php

$curl = curl_init();
$search_string = $_POST['search_string'];
$apiURL = 'https://api.edamam.com/search?app_id=cfca78b9&app_key=79da0322fff417e5a405406191c0b605&q=' . $search_string . '&to=3';

//echo '<br/><br/>';
//var_dump($apiURL);
echo '<hr/>';

curl_setopt($curl, CURLOPT_URL, $apiURL);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec ($curl); 


//echo '<br/><br/>';
//var_dump($result);
//echo '<br/><br/>';

//convert json value to string
$recipeObject = json_decode($result);
//array inception begins here!


//hits in this api means all recipes found
//within the hit [0]array (there is only one) 
//var_dump($recipeObject -> hits[0] -> recipe -> image);
//echo '<hr/>';

$ingredientLines = json_encode($recipeObject -> hits[0] -> recipe -> ingredientLines);
//echo '<article class="wrapper-apiCard">';
//echo '<h3> will this work? </h3>';
//var_dump ($ingredientLines);
//echo '<hr/>';
//echo '</article>';


/* 
for($i = 0; $i < count($recipeObject -> hits); $i++) {
    echo '<article class="apiCard-wrapper">';
    echo '<section>';
    echo '<img src="'. $recipeObject -> hits[$i] -> recipe -> image .'"/>';
    echo '<br /><br/>';
    echo '</section>';
    echo '</article>';
} */

//same as above but more neat & readable, 
//name each $recipeObject result as $recipe
foreach($recipeObject -> hits as $recipe){
    echo '<article class="wrapper-apiCard">';
    echo '<section class="apiCard card-head">';
    echo '<div class="card-head1 card-head1-2">';
    echo '<h3>' . $recipe -> recipe -> label . '</h3>';
    foreach($recipe -> recipe -> ingredientLines as $ingredientsALL){
        echo $ingredientsALL;
    };
    echo '<hr/></div>';
//    echo '<div class="card-head1 card-head2-2">';
//    echo '<h3>NEEDS TO BE dynamic: </h3>'. $ingredientLines;
//    echo '</div>';
    echo '</section>';
    echo '<section class="apiCard card-body">';
    echo '<img src="'. $recipe -> recipe -> image .'"/>';
    echo '</section>';
    echo '</article>';
}

curl_close($curl); // — Close the cURL session

?>