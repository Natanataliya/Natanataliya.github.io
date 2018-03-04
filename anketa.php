<?php

if ((isset($_POST['name-band'])&& $_POST['name1']&& $_POST['band_phone']&& $_POST['band-email']&& $_POST['address_str1']&& $_POST['address_str2']&& $_POST['city']&& $_POST['country']&& $_POST['participants_quantity']&& $_POST['girl_quant']&& $_POST['boys_quant']&& $_POST['arrive']&& $_POST['time1']&& $_POST['departure']&& $_POST['time2']&& $_POST['boys']&& $_POST['girls']&& $_POST['men']&& $_POST['women']&& $_POST['meal1']&& $_POST['brackfast1']&& $_POST['lanch1']&& $_POST['dinner1']&& $_POST['brackfast2']&& $_POST['lanch2']&& $_POST['dinner2']&& $_POST['brackfast3']&& $_POST['lanch3']&& $_POST['dinner3']&& $_POST['meal2']&& $_POST['name_man']&& $_POST['quant_man']&& $_POST['master']&& $_POST['phone1']&& $_POST['email2']&& $_POST['A_nom1']&& $_POST['A_nom2']&& $_POST['A_nom3']&& $_POST['A_nom4']&& $_POST['A_nom5']&& $_POST['A_nom6']&& $_POST['B_nom1']&& $_POST['B_nom2']&& $_POST['B_nom3']&& $_POST['B_nom4']&& $_POST['B_nom5']&& $_POST['B_nom6']&& $_POST['C_nom1']&& $_POST['C_nom2']&& $_POST['C_nom3']&& $_POST['C_nom4']&& $_POST['C_nom5']&& $_POST['C_nom6']&& $_POST['condition']&& $_POST['ps'] !='')&& (isset($_POST['name-band']) && $_POST['name1']&& $_POST['band_phone']&& $_POST['band-email']&& $_POST['address_str1']&& $_POST['address_str2']&& $_POST['city']&& $_POST['country']&& $_POST['participants_quantity']&& $_POST['girl_quant']&& $_POST['boys_quant']&& $_POST['arrive']&& $_POST['time1']&& $_POST['departure']&& $_POST['time2']&& $_POST['boys']&& $_POST['girls']&& $_POST['men']&& $_POST['women']&& $_POST['meal1']&& $_POST['brackfast1']&& $_POST['lanch1']&& $_POST['dinner1']&& $_POST['brackfast2']&& $_POST['lanch2']&& $_POST['dinner2']&& $_POST['brackfast3']&& $_POST['lanch3']&& $_POST['dinner3']&& $_POST['meal2']&& $_POST['name_man']&& $_POST['quant_man']&& $_POST['master'] && $_POST['phone1']&& $_POST['email2']&& $_POST['A_nom1']&& $_POST['A_nom2']&& $_POST['A_nom3']&& $_POST['A_nom4']&& $_POST['A_nom5']&& $_POST['A_nom6']&& $_POST['B_nom1']&& $_POST['B_nom2']&& $_POST['B_nom3']&& $_POST['B_nom4']&& $_POST['B_nom5']&& $_POST['B_nom6']&& $_POST['C_nom1']&& $_POST['C_nom2']&& $_POST['C_nom3']&& $_POST['C_nom4']&& $_POST['C_nom5']&& $_POST['C_nom6']&& $_POST['condition']&& $_POST['ps']!='')) {
    
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
   <p>E-mail:$band_email='.$_POST['band-email'].'</p>
   <p>Адреса-Вулиця1:$address_str1='.$_POST['address_str1'].'</p>
   <p>Адреса-Вулиця2:$address_str2='.$_POST['address_str2'].'</p>
   <p>Місто:$city='.$_POST['city'].'</p>  
   <p>Країна:$country='.$_POST['country'].'</p>
   <p>Кількість-участників:$participants_quantity='.$_POST['participants_quantity'].'</p>
   <p>Кількість дівчат:$girl_quant='.$_POST['girl_quant'].'</p>
   <p>Кількість хлопців:$boys_quant='.$_POST['boys_quant'].'</p>
   <p>Дата приїзду:$arrive='.$_POST['arrive'].' </p>
   <p>Час приїзду:$time1='.$_POST['time1'].' </p>
   <p>Дата відїзду:$departure='.$_POST['departure'].' </p>
   <p>Час відїзду:$time2='.$_POST['time2'].' </p> 
   <p>Кількість хлопців:$boys='.$_POST['boys'].' </p> 
   <p>Кількість дівчат:$girls='.$_POST['girls'].' </p> 
   <p>Кількість чоловіків:$men='.$_POST['men'].' </p> 
   <p>Кількість жінок:$girls='.$_POST['women'].' </p> 
   <p>Вечеря:$meal1='.$_POST['meal1'].'</p>
   <p>Сніданок:$breakfast1='.$_POST['brackfast1'].'</p>
   <p>Обід:$lanch1='.$_POST['lanch1'].'</p>
   <p>Вечеря:$dinner1='.$_POST['dinner1'].'</p>
   <p>Сніданок:$breakfast2='.$_POST['brackfast2'].'</p>
   <p>Обід:$lanch2='.$_POST['lanch2'].'</p>
   <p>Вечеря:$dinner2='.$_POST['dinner2'].'</p> 
    <p>Сніданок:$breakfast3='.$_POST['brackfast3'].'</p>
   <p>Обід:$lanch3='.$_POST['lanch3'].'</p>
   <p>Вечеря:$dinner3='.$_POST['dinner3'].'</p> 
   <p>Сніданок:$meal2='.$_POST['meal2'].'</p>    
   <p>Керівник колективу(ПІП):$name_man='.$_POST['name_man'].'</p>
   <p>Кількість керівників:$quant_man='.$_POST['quant_man'].'</p>
   <p>Звання:$master='.$_POST['master'].'</p>   
   <p>Телефон:$phone1='.$_POST['phone1'].'</p>
   <p>Email:$email2='.$_POST['email2'].'</p>
   <p>A_nom1:$A_nom1='.$_POST['A_nom1'].'</p>
   <p>A_nom2:$A_nom2='.$_POST['A_nom2'].'</p>
   <p>A_nom3:$A_nom3='.$_POST['A_nom3'].'</p>
   <p>A_nom4:$A_nom4='.$_POST['A_nom4'].'</p>
   <p>A_nom5:$A_nom5='.$_POST['A_nom5'].'</p>
   <p>A_nom6:$A_nom6='.$_POST['A_nom6'].'</p>
   <p>B_nom1:$B_nom1='.$_POST['B_nom1'].'</p>
   <p>B_nom2:$B_nom2='.$_POST['B_nom2'].'</p>
   <p>B_nom3:$B_nom3='.$_POST['B_nom3'].'</p>
   <p>B_nom4:$B_nom4='.$_POST['B_nom4'].'</p>
   <p>B_nom5:$B_nom5='.$_POST['B_nom5'].'</p>
   <p>B_nom6:$B_nom6='.$_POST['B_nom6'].'</p>
   <p>C_nom1:$C_nom1='.$_POST['C_nom1'].'</p>
   <p>C_nom2:$C_nom2='.$_POST['C_nom2'].'</p>
   <p>C_nom3:$C_nom3='.$_POST['C_nom3'].'</p>
   <p>C_nom4:$C_nom4='.$_POST['C_nom4'].'</p>
   <p>C_nom5:$C_nom5='.$_POST['C_nom5'].'</p>
   <p>C_nom6:$C_nom6='.$_POST['C_nom6'].'</p>      
   <p>Технічні умови:$condition='.$_POST['condition'].'</p>
   <p>Про коллектив:$about='.$_POST['about'].'</p>
   <p>Примітки:$additions='.$_POST['additions'].'</p>    
        </body>
       </html>';
    
       $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers.= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
   $a=  mail ($to, $subject, $message, $headers);
    if ($a) echo "1";
    else echo $a;
}

?>



