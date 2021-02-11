// $( document ).ready(function() {
//     $("#btn").click(
//         function(){
//             sendAjaxForm('ajax_form');
//         }
//     );
// });
//
// function sendAjaxForm(ajax_form) {
//
//     $.ajax({
//         url: '/tables/update',
//         data: {qty: qty},
//         type: 'GET',
//         success: function(res){
//             if(!res) alert('Ощибка(');
//             // console.log(res);
//             showCart(res);
//         },
//         error: function(){
//             alert('Error)');
//         }
//     });




    // $.ajax({
    //     url:     '/tables/update', //url страницы (action_ajax_form.php)
    //     type:     "POST", //метод отправки
    //     dataType: "html", //формат данных
    //     data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
    //     success: function(response) { //Данные отправлены успешно
    //         result = $.parseJSON(response);
    //     },
    //     error: function(response) { // Данные не отправлены
    //         $('#result_form').html('Ошибка. Данные не отправлены.');
    //     }
    // });
}