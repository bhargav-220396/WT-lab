<?php
session_start();

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$client = new Google_Client();
$client->setClientId($_ENV['GOOGLE_CLIENT_ID']);
$client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
$client->setRedirectUri($_ENV['GOOGLE_REDIRECT_URI']);
$client->addScope("email");
$client->addScope("profile");

/*
|--------------------------------------------------------------------------
| If Google sent back a code
|--------------------------------------------------------------------------
*/
if (isset($_GET['code'])) {

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $oauth = new Google_Service_Oauth2($client);
    $user_info = $oauth->userinfo->get();

    $_SESSION['user_id'] = $user_info->id;
    $_SESSION['username'] = $user_info->name;
    $_SESSION['email'] = $user_info->email;

    header("Location: dashboard.php");
    exit();
}

/*
|--------------------------------------------------------------------------
| If user clicked login
|--------------------------------------------------------------------------
*/
else {
    $client->setPrompt('select_account');
    $client->addScope("email");
$client->addScope("profile");
$client->setPrompt('select_account');

    $login_url = $client->createAuthUrl();
    header("Location: " . $login_url);
    exit();
}