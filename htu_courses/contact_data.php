<?php
session_start();
include './includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST' && empty($_POST))
    die('You are someone a bad guy trying to access our code directly!');

$_SESSION['error'] = null;

$user_name = isset($_POST['user_name']) ? $_POST['user_name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$description = isset($_POST['description']) ? $_POST['description'] : null;
$error = false;
$error_msg = '';

if (!empty($user_name) && !empty($email) && !empty($description)) {
    // Get all contact
    $contact_us = json_decode(file_get_contents('./api_data/contact_us.json'));

    // add the new course to all the contact_us array.
    $contact_us[] = (object) array(
        'User_name' => $User_name,
        'email' => $email,
        'description' => $description,
    );

    // covert the contact_us array to json string.
    $json_contact_us = json_encode($contact_us);
    // rewrite the contact_us.json file with the new updated inormation.
    file_put_contents('./api_data/contact_us.json', $json_contact_us);
} else {
    $error = true;
    $error_msg = 'You need to enter some information';
}

if ($error) {
    $_SESSION['error'] = $error_msg;
    htu_redirect('./create.php');
} 
