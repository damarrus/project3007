$(document).ready(function () {

    var size_id = 0;
    var add = $('.goods-add-to-cart-button');
    add.click(function () {
        if (size_id != 0) {
            $.post('../controllers/add_to_cart.php', { 
                product_id: $(this).data('id'), 
                count: 1,
                size_id: size_id
            });
        }   
        else {
            alert ('Укажите размер');
        }   
        console.log(add);
    }); 

    var size = $('.goods-size-item');
    size.click(function() {
        console.log(size);
        size_id = $(this).data('id');
    });
});
