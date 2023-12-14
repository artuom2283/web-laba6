<?php

$username = trim($_POST['username']);
$usersurname = trim($_POST['usersurname']);
$phone = $_POST['phone'];
$personality = isset($_POST['pick']) ? $_POST['pick'] : '';
$age = $_POST['age'];
$DOB = $_POST['DOB'];
$country = isset($_POST['countries']) ? $_POST['countries'] : '';
$email = $_POST['emailuser'];
$userpassword = $_POST['userpassword'];

$data = array($username, $usersurname);

$isEmpty = false;

foreach ($data as $value) {
    if ($value == "") {
        $isEmpty = true;
        break;
    }
}

if ($isEmpty) {
    echo "Input all data!";
}
else {
    // $file_data = "username, usersurname, age, DOB, personality, country, phone, emailuser, userpassword, \n";
    // file_put_contents("regform.txt", $file_data);
    $data = array($username, $usersurname, $age, $DOB, $personality, $country, $phone, $email, $userpassword, " \n ");
    file_put_contents("regform.txt", implode(", ",$data), FILE_APPEND);
    header('Location: fileRecord.html');
}
