<?php
session_start();

require __DIR__ . '/vendor/autoload.php';
require "db.php";   // connect MongoDB

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$client = new Google_Client();
$client->setClientId($_ENV['GOOGLE_CLIENT_ID']);
$client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
$client->setRedirectUri($_ENV['GOOGLE_REDIRECT_URI']);
$client->addScope("email");
$client->addScope("profile");

if (isset($_GET['code'])) {

    // Exchange code for token
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $oauth = new Google_Service_Oauth2($client);
    $user_info = $oauth->userinfo->get();

    $email = $user_info->email;
    $name  = $user_info->name;

    // 🔍 Check if user already exists in MongoDB
    $existingUser = $users->findOne(['email' => $email]);

    if (!$existingUser) {

        // Insert new Google user
        $insertResult = $users->insertOne([
            'username'   => $name,
            'email'      => $email,
            'password'   => null, // Google users don’t need password
            'service'    => null,
            'budget'     => null,
            'provider'   => 'google',
            'createdAt'  => new MongoDB\BSON\UTCDateTime()
        ]);

        $mongoUserId = (string) $insertResult->getInsertedId();

    } else {

        $mongoUserId = (string) $existingUser['_id'];
    }

    // Set session using MongoDB _id
    $_SESSION['user_id'] = $mongoUserId;
    $_SESSION['username'] = $name;
    $_SESSION['email'] = $email;

    header("Location: dashboard.php");
    exit();
}

else {

    $client->setPrompt('select_account');
    $login_url = $client->createAuthUrl();
    header("Location: " . $login_url);
    exit();
}