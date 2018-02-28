$(document).ready(function(){
    $("#form").submit(function(event) { //устанавливаем событие отправки для формы с id=form
            var event = event|| window.event;
        event.preventDefault();
            var form_data = $(this).serialize(); //собераем все данные из формы
            $.ajax({
            type: "POST", //Метод отправки
            url: "anketa.php", //путь до php фаила отправителя
            data: form_data,
            success: function(data) {
                   //код в этом блоке выполняется при успешной отправке сообщения
                   alert("Ваше сообщение отправлено!");
           
              });
           
       });
   
    });


