<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST))
    die('You are someone a bad guy trying to access our code directly!');

$first_name= isset($_POST['first_name']) ? $_POST['first_name'] : null;
$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : null;
$Summary = isset($_POST['Summary']) ? $_POST['Summary'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$city_name  = isset($_POST['city_name']) ? $_POST['city_name'] : null;
$skils = isset($_POST['skils']) ? $_POST['skils'] : null;
$education = isset($_POST['education']) ? $_POST['education'] : null;
$experiences = isset($_POST['experiences']) ? $_POST['experiences'] : null;
$personel_profile = isset($_POST['personel_profile']) ? $_POST['personel_profile'] : null;


$cvs = json_decode(file_get_contents('./cvs.josn'));
$id = count($cvs) + 1;

$cvs[] = array(
    'id' => $id,
    'first_name' => $first_name,
    'last_name' => $last_name,
    'Summary' => $Summary,
    'phone' => $phone,
    'email' => $email,
    'city_name ' => $city_name  ,
    'skils' => $skils,
    'experiences'=>$experiences,
    'education' => $education,
    'personel_profile' => $personel_profile
);

file_put_contents('./cvs.json', json_encode($cvs));

header("Location: ./template.php?id=$id");
