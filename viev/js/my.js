$( document ).ready(function() {
    // тут по клику на кнопку запишем нового сотрудника в базу
    $("#btn").click(
       function(){
           sendAjaxForm('result_form', 'formAddUser', '/controller/addPeople.php');
           return false; 
       }
   );

   function sendAjaxForm(result_form, ajax_form, url) {
       $.ajax({
           url:     url, //url страницы (action_ajax_form.php)
           type:     "POST", //метод отправки
           dataType: "html", //формат данных
           data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
           success: function(response) { //Данные отправлены успешно
               alert(response);
               showAllUser();
           },
           error: function(response) { // Данные не отправлены
               alert('Ошибка. Данные не отправлены.');
           }
       });
   }
   /* ========================================= */

   /* Тут покажем всех сотрудников при старте */
   showAllUser();
   function showAllUser(){
       $.ajax({
       url:     "/controller/showPeople.php",
       type:     "POST", //метод отправки
       dataType: "json"})
       .done(function(j) {
           var str     = '',    // тут будем хранить строку которую вставим в документ
               name    = '',    // тут соберем имя до купы
               a       = 1;     // счетчик

           for(var i in j){
               name = j[i]['firstName'] + ' ' + j[i]['lastName'] + ' ' + j[i]['patronymic'];
               if(!j[i]['text']){
                   j[i]['text'] = '';
               }
               str += "<tr><th scope='row'>"+ a + "</th><td>" + j[i]['position'] + "</td><td>" + name + "</td><td>" + j[i]['birthday'] + "</td><td>" + j[i]['dateStart'] + "</td><td>" + j[i]['subdivision'] + "</td><td>" + j[i]['text'] + "</td></tr>";
               a++;
           }
           $('#json').html(str);
   });}
   /* ========================================================== */
   

   /* Метод для работы фильтра  */
    function filterUser(position,subdivision){
       $.ajax({
       url:     "/controller/showPeople.php",
       type:     "POST", 
       dataType: "json"})
       .done(function(j) {
           var str     = '', // тут будем хранить строку которую вставим в документ
               name    = '', // тут соберем имя до купы
               a       = 1;  // счетчик
           for(var i in j){

                /* если не передали должность, то пропускаем это условие */
               if(position !== 'none' ){
                /* если данный обьект не тот который мы ищем, то выпрыгиваем из итерации */
                   if( j[i]['position']    !== position)   { continue }                               // фильтр 
               }

                /* если не передали подразделение, то пропускаем это условие */
               if(subdivision !== 'none'){
                /* если данный обьект не тот который мы ищем, то выпрыгиваем из итерации */
                   if( j[i]['subdivision'] !== subdivision){ continue }                               // фильтр 
               }

               if(!j[i]['text']){ j[i]['text'] = ''; }                                                // заменяем на строку если null
               
               name = j[i]['lastName'] + ' ' + j[i]['firstName'] + ' ' + j[i]['patronymic'];   // собираем имя

               str += "<tr><th scope='row'>"+ a + "</th><td>" + j[i]['position'] + "</td><td>" + name + "</td><td>" + j[i]['birthday'] + "</td><td>" + j[i]['dateStart'] + "</td><td>" + j[i]['subdivision'] + "</td><td>" + j[i]['text'] + "</td></tr>";
               a++;
           }
           $('#json').html(str);
    })}
    /* ============================================  */

    /* вызываем фильтр */
    $('#sendFilter').on('click',function(){
       var position    = $('#formFilter #position').find('option:selected').val(),
           subdivision = $('#formFilter #subdivision').find('option:selected').val() ;
       console.log(position, subdivision);
       filterUser(position,subdivision);
    });
   
  
});
