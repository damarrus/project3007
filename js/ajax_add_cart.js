$(document).ready(function (){
    var add = $('.goods-add-to-cart-button');
    $('add').click(function (){
        $.post('../controllers/add_to_cart.php', {id: $(this).attr('id')} );

    }); 
});
