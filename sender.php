<?php
    $name = $_GET['name'];
    $surname = $_GET['surname'];
	$phone = $_GET['phone'];
    $email = $_GET['email'];
    $text = $_GET['text'];

	$to = "libenko96@gmail.com";
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name
    Фамилия: $surname
    Телефон: $phone
    Почта: $email
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $to ");

?>

<p>Привет, форма отправлена</p>
