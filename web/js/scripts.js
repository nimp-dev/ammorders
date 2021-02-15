
$('.add-to-cart').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id');

    $.ajax({
        url: '/tables/update',
        data: {id: id},
        type: 'GET',
        success: function(res){
            //if(!res) alert('Ощибка(');
             console.log(res);
            //showCart(res);
        },
        error: function(){
            alert('Error)');
        }
    });
});