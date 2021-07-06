<?php

if ($_REQUEST['functionName'] == 'login') {
    $email = $_REQUEST['email'];
    $api_url = '/api/v1/employee/'.$email ;
    $json_data = file_get_contents($api_url);
    $response_data = json_decode($json_data,true);
    echo($response_data['data']['password']);
}


if ($_REQUEST['functionName'] == 'profile') {
    $name = $_REQUEST['name'];
    $api_url = '/api/v1/employee/'.$name ;
    $json_data = file_get_contents($api_url);
    $response_data = json_decode($json_data,true);
    echo($response_data['data']);
}
?>