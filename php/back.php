<?php
header('Location: ../index.html');
htmlspecialchars($_POST['name']); 
$name = $_POST['name'];
htmlspecialchars($_POST['organisation']); 
$org = $_POST['organisation'];
htmlspecialchars($_POST['phone']); 
$phone = $_POST['phone'];
htmlspecialchars($_POST['email']); 
$email = $_POST['email'];
htmlspecialchars($_POST['theme']); 
$theme = $_POST['theme'];
htmlspecialchars($_POST['subject']); 
$subject = $_POST['subject'];
$probel ="\n";
$nameA ="Имя клиента: ";
$nameORG ="Организация: ";
$nameB ="Телефон: ";
$nameC ="Почта: ";
$nameD ="Тема: ";
$nameE ="Сообщение: ";
$answer_footage1 = "Добрый день!, " . $name;
$answer_footage2 = " .Ваша заявка принята. Ожидайте ответа. \n Группа компаний СПЕЦТРЕЙД 2017 \n";
$answer_footage = $answer_footage1 . $answer_footage2;

$message = $nameA . $name . $probel . $nameORG . $org . $probel.  $nameB . $phone . $probel . $nameC . $email . $probel . $nameD . $theme . $probel . $nameE . $subject;

	$result = mail('firemediaworks@gmail.com', $theme, $message);
	$answer = mail($email, $theme, $answer_footage);
if ($result) {
	echo "Форма принята. Спасибо за отправку!";
}else{
	$answer = mail($email, "Ошибка отправки формы", "Что-то пошло не так. Попробуйте связаться с нами другим способом. Или попробуйте ещё раз через некоторое время.");
}



?>

