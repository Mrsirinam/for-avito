<?php 
 
$sendto   = "igorgordilov22@gmail.com"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usersubject = $_POST['subject']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$usermessage = $_POST['message'];
 
// Формирование заголовка письма
$subject  = "Тема: " . strip_tags($usersubject) . "\r\n";
$headers  = "ВОДОГОН";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Сайт:</strong> ".$usermessage."</p>\r\n";
$msg .= "</body></html>";
 
// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
    header('Location: /thank.html ');
} else {
    echo "Ошибка";
}
 
?>