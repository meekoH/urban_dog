<?php
    //INSTAGRAM
    // Supply a user id and an access token
    $userid = "c0cca8ab942344718e16b7dfeef271b7";
    $accessToken = "abc010cc7efd444fae66efdfd0f86ef9";
    
    //\(([^()]*+|(?R))*\)

    // Gets our data
    function fetchData($url){
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         curl_setopt($ch, CURLOPT_TIMEOUT, 20);
         $result = curl_exec($ch);
         curl_close($ch); 
         return $result;
    }

    // Pulls and parses data.
    $result = fetchData("https://api.instagram.com/v1/users/1414114676/media/recent?client_id=c0cca8ab942344718e16b7dfeef271b7");
    $result = json_decode($result);
?>