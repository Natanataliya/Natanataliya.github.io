<?php

if ((isset($_POST['name-band'])&& $_POST['name1']&& $_POST['band_phone']&& $_POST['ps']!='')) {
    
      $to  = 'nataliabalabonkina@gmail.com';
        $subject = 'Вам отправили запрос';
        $message = '
    <html>
        <head>
        <title>'.$Subject.'</title>
        </head>
        <body>
   <p>Назва колективу :$name-band ='.$_POST['name-band'].'</p> 
   <p>Назва закладу:$name1 ='.$_POST['name1'].'</p>
   <p>Телефон:$band_phone='.$_POST['band_phone'].'</p>
   
        </body>
       </html>';
    
       $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers.= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
   $a=  mail ($to, $subject, $message, $headers);
    if ($a) echo "1";
    else echo $a;
}

?>



