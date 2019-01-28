<?php
$msg_box = ""; // в этой переменной будем хранить сообщения формы
$errors = array(); // контейнер для ошибок
// проверяем корректность полей
if($_POST['form_email'] == "")   $errors[] = "Поле <span>Ваш e-mail</span> не заполнено";
   if($_POST['form_name'] == "")    $errors[] = "Поле <span>Ваше имя</span> не заполнено";
   if($_POST['form_message'] == "") $errors[] = "Поле <span>Текст сообщения</span> не заполнено";

   // если форма без ошибок
   if(empty($errors)){
       // собираем данные из формы
       $message  = "Имя пользователя: " . $_POST['form_name'] . "<br>";
       $message .= "E-mail пользователя: " . $_POST['form_email'] . "<br><br>";
       $message .= "Текст письма: " . $_POST['form_message'];
       send_mail($message); // отправим письмо
       // выведем сообщение об успехе
       $msg_box = "<span>Спасибо за обращение, сообщение успешно отправлено! <br> В течении 24 часов я Вам отвечу!<br></span><br>";

   }else{
       // если были ошибки, то выводим их
       $msg_box = "";
       foreach($errors as $one_error){
           $msg_box .= "<style>.messages{margin-bottom: 20px;}</style><span>$one_error</span><br>";
       }
   }

   // делаем ответ на клиентскую часть в формате JSON
   echo json_encode(array(
       'result' => $msg_box
   ));


   // функция отправки письма
   function send_mail($message){
       // почта, на которую придет письмо
       $mail_to = "maksimisgreat@gmail.com";
       // тема письма
       $subject = "Письмо с обратной связи";

       // заголовок письма
       $headers= "MIME-Version: 1.0\r\n";
       $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
       $headers .= "From: maksimisgreat@php-site.zzz.com.ua \r\n"; // от кого письмо

       // отправляем письмо
       mail($mail_to, $subject, $message, $headers);
   }