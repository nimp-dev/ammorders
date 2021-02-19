// $('#contenent').on('onchange','.add_time' function () {
//     var id = $(this).data('id'),
//         time = $('#time').val();
//     alert(this.value);
// }


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

function clearCart(){
    $.ajax({
        url: '/tables/clear',
        type: 'GET',
        success: function(res){
            if(!res) alert('Ошибка!');
            $("#contenent").html(res);
        },
        error: function(){
            alert('Error!');
        }
    });
}

$('#contenent').on('click','.del-item',function (){
        var id = $(this).data('id');
        $.ajax({
            url: '/tables/del-item',
            data: {id: id},
            type: 'GET',
            success: function(res){
                if(!res) alert('Ошибка!');
                $("#contenent").html(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });

$( document ).ready(function() {
    $.ajax({
        url: '/tables/show',
        type: 'GET',
        success: function(res){
            if(!res) alert('Ошибка!');
            $("#contenent").html(res);
        },
        error: function(){
            alert('Error!');
        }
    });
});

$('#contenent').on( 'change','.add_time', function() {
    var id = $(this).data('id'),
    time = $(this).val();
    $.ajax({
        url: '/tables/time',
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