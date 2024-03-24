<?php
    $env_file = __DIR__ . '/.env';
    $env_vars = parse_ini_file($env_file);

    $API_KEY = $env_vars['API_KEY'];
    $BASE_URL='https://apiv3.apifootball.com/';
    $league = isset($league) ? $league : '';

    $url = "$BASE_URL?action=get_standings&league_id=$league&APIkey=$API_KEY";
    $data = file_get_contents($url);
    $response = json_decode($data, true);

?>