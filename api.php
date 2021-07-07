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

if ($_REQUEST['functionName'] == 'insert') {
    //
}

if ($_REQUEST['functionName'] == 'newGuard') {
    $name = $_REQUEST['name'];
    $id = $_REQUEST['id'];
    $api_url = '/api/v1/employee/' ;
    $data = array('name' => $name, 'id' =>$id);

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($api_url, false, $context);
    if ($result === FALSE) { /* Handle error */ }
    var_dump($result);
}

if ($_REQUEST['functionName'] == 'newBand') {
    //
}

if ($_REQUEST['functionName'] == 'delete') {
    //delete a row in map page
    //params = band=band1&name=guard1 
}
?>