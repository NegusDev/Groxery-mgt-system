function calculateValue() {
    let total = 0;
    $('.subtotal').each(function (i, elm){
          
            if ($(elm).text().length !==0) {
                total += parseFloat($(elm).text());
            } else {
                alert('empty');
            }
            
        });
        
    $('#grand-total').val(total);
}


$(document).ready(function () {
    
    // $("#addMore").click(function () {
    //     let trows = $(".product-box").html();
    //     $(".product-box-extra").append(trows);
    //     $(".product-box-extra .remove-trow").last().removeClass('hideit');
    //     $(".product-box-extra .product-qty").last();
    //     $(".product-box-extra .product-price").last();
    //     $(".product-box-extra .product-total").last();
    // });
    
    // $(document).on("click", ".remove-trow", function () {
    //     $(this).closest('tr').remove();
    //     calculateValue();
    // })
    
    
    $('body')
        .on('change', '#product-item', function() {
            // let textValue = displayPrice(e);
            let price = $('#product-item option:selected').data('price');
            $('#product_price').val(price);

            $('#product-qty').trigger("change");
        })
        .on('change', '#product-qty', function() {
            let quantity = $('#product-qty').val();
            let price =  $('#product_price').val();
            $("#product-total").val( quantity * price);
        })
        .on('click', '#product-add-btn', function() {
            let tbody = $("#tbody");
            if (tbody == 0) {
                console.log('empty');
            } 
            else {
        
                let product = $('#product-item option:selected').text();
                let product_id = $('#product-item option:selected').val();
                let quantity = $('#product-qty').val();
                let price =  $('#product_price').val();
                let total =  $('.total').val();

                let input = '<input type="hidden" name="products['+ product_id +'][qty]" value="'+ quantity +'"">' +
                '<input type="hidden" name="products['+ product_id +'][price]" value="'+ price +'"">' +
                '<input type="hidden" name="products['+ product_id +'][total_price]" value="'+ total +'"">'
                
                let entry = '<tr><td>' + product + input +'</td><td>' + quantity + '</td><td>' + price + '</td><td class="subtotal">' + total + '</td><td><button type="button" id="remove" class="btn btn-danger text-center"><i class="fas fa-trash "></i></button></td></tr>';
                $("#shopping-cart tbody").append(entry);
                $(document).on("click", "#remove", function () {
                    $(this).closest('tr').remove();
                    calculateValue();
                });
                calculateValue();

            }
        
        });
  
});

