<?php

$username = trim($_POST['username']);
$usersurname = trim($_POST['usersurname']);
$age = $_POST['age'];
$email = $_POST['emailuser'];

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
    $data = array('Ім`я: ' , $username, 'Тема повідомлення: ', $usersurname, 'Текст повідомлення: ', $age, 'Пошта: ', $email, " \n ");
    file_put_contents("regform.txt", implode(", ",$data), FILE_APPEND);
    header('Location: fileRecord.html');
}
