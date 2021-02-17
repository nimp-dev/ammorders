
$('.add-to-cart').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id'),
        time = $('#time').val();

    $.ajax({
        url: '/tables/update',
        data: {id: id, time: time},
        type: 'GET',
        success: function(res){
            //if(!res) alert('Ощибка(');
            // console.log(res);
            $("#contenent").html(res);
            //showCart(res);
        },
        error: function(){
            alert('Error)');
        }
    });
});



$(document).ready(function(){

    $('#btn1').click(function(){
        $.ajax({
            url: "/views/tables/time-modal",
            cache: false,
            success: function(html){
                $("#contenent").html(html);
            }
        });
    });


});