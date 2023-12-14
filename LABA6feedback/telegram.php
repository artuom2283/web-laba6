
<?php

$name = $_POST['username'];
$usersurname = $_POST['usersurname'];
$age = $_POST['age'];
$email = $_POST['emailuser'];

$token = "6905630435:AAGqFlfYoM1X-d1Qppn91LYIaVaGKNlt9Qs";
$chat_id = "-4033699488";
$arr = array(
    'Ім\'я: ' => $name,
    'Тема повідомлення: ' => $usersurname,
    'Повідомлення: ' => $age,
    'Email: ' => $email,
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