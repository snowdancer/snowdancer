<?php
public function test(Request $req)
{
    $server_ip = '';
    $client_ip = '';
    if (isset($_SERVER['SERVER_ADDR'])) {
        $server_ip = $_SERVER['SERVER_ADDR'];
        $client_ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
    }

    Log::error("Access IP Address:$client_ip");
    Log::error("Request Info:".json_encode($req->all()));
    return response(json_encode([]),200);
}
?>