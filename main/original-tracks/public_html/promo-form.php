<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){
        $to = 'info@original-tracks.ru'; //Почта получателя
        $subject = 'Заявка с первого экрана на бесплатную подарочную упаковку.'; //Заголовок сообщения
        $message = 'о
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
               			<p>Контактные данные отправителя:</p>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>
                    </body>
                </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: original-tracks.ru <info@original-tracks.ru>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers);
        echo("ok");
}
?>