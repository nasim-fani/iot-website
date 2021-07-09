<?php

if ($_REQUEST['functionName'] == 'login') {
    $password = $_REQUEST['password'];
    $username = $_REQUEST['username'];
    $api_url = 'http://185.211.58.230/api/login/' ;
    $data = array('username' => $username, 'password' => $password);

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($api_url, false, $context);
    echo(json_decode($result,TRUE)['message']);
}


if ($_REQUEST['functionName'] == 'profile') {
    $id = $_REQUEST['id'];
    $api_url = 'http://185.211.58.230/api/guard_profile/'.$id.'/' ;
    $json_data = file_get_contents($api_url);
    echo($json_data);
}

if ($_REQUEST['functionName'] == 'newGuard') {
    $d = date("Y-m-d")."T".date("h:m:s.ms");
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $api_url = 'http://185.211.58.230/api/create_guard/' ;
    $data = array('staff_id' => $id, 'name' => $name, 'date_joined' => $d);

    $options = array( 
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($api_url, false, $context);
    echo(json_decode($result,TRUE)['message']);
}

if ($_REQUEST['functionName'] == 'newBand') {
    $id = $_REQUEST['id'];
    $api_url = 'http://185.211.58.230/api/create_wristband/' ;
    $data = array('band_id' => $id);

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($api_url, false, $context);
    echo(json_decode($result,TRUE)['message']);
}

if ($_REQUEST['functionName'] == 'deleteBand') {
    $id = $_REQUEST['id'];
    $api_url = 'http://185.211.58.230/api/delete_band/' ;
    $data = array('band_id' => $id);
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'DELETE',
            'content' => json_encode($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($api_url, false, $context);
    echo(json_decode($result,TRUE)['message']);
}


if ($_REQUEST['functionName'] == 'deleteGuard') {
    $id = $_REQUEST['id'];
    $api_url = 'http://185.211.58.230/api/delete_guard/' ;
    $data = array('guard_id' => $id);
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($api_url, false, $context);
    echo(json_decode($result,TRUE)['message']);
}

if ($_REQUEST['functionName'] == 'reassign') {
    $band = $_REQUEST['band'];
    $guard = $_REQUEST['guard'];
    $api_url = 'http://185.211.58.230/api/edit_wristband_guard/' ;
    $data = array('band_id' => $band, 'staff_id' => $guard);

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($api_url, false, $context);
    echo(json_decode($result,TRUE)['message']);
}


if ($_REQUEST['functionName'] == 'map') {
    $api_url = 'http://185.211.58.230/api/active_guards/' ;
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'GET'
        )
    );
    $result = file_get_contents($api_url, false);
    echo($result);
}
if ($_REQUEST['functionName'] == 'guardLoc') {
    $id = $_REQUEST['id'];
    $api_url = 'http://185.211.58.230/api/guard_last_history/'.$id.'/' ;
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'GET'
        )
    );
    $result = file_get_contents($api_url, false);
    echo($result);
}

if ($_REQUEST['functionName'] == 'edit') {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $data = array('staff_id' => $id, 'name' => $name);
    $api_url = 'http://185.211.58.230/api/edit_guard/'.$id.'/' ;
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($api_url, false, $context);
    echo(json_decode($result,TRUE)['message']);
}
?>