<?php
// Получение данных с формы:
$user = [
    'name' => '',
    'email' => '',
    'phone' => '',
];
    $name = '';
    $email = '';
    $phone = '';

    if(isset($_POST['name'])){
        $name = htmlspecialchars($_POST['name']);
        array_push($user, $name);
    }
    if(isset($_POST['email'])){
        $email = htmlspecialchars($_POST['email']);
        array_push($user, $email);
    }
    if(isset($_POST['phone'])){
        $phone = htmlspecialchars($_POST['phone']);
        array_push($user, $phone);
    }

    // Параметры для функции mail:
    $source = getenv('HTTP_REFERER');
    $subject = 'Тема письма клиенту';
    $message = "Текст письма:
        <br><br>
        Имя: $name<br>
        E-mail: $email<br>
        Телефон: $phone<br>
        Источник (ссылка): $source
    ";
    // $headers = "From: $email\r\nReply-To: $email\r\nContent-type: text/html; charset=utf-8\r\n";

    // Отправка данных на почту:
    // $success = mail("j5nql@wimsg.com", $subject, $message, $headers);
    //echo $user;
?>