<?php

if(isset($_POST['okbutton']))
   {    echo "<script language='JavaScript'>window.location.href = 'thanks.html'</script>"; 
        $to = 'info@spb-irinanails.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'ЗАКАЗ ЗВОНКА!!!'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p> 
                    </body>
                </html>'; //Текст сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Потенциальный клиент <info@spb-irinanails.ru>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail        
   };

?>



