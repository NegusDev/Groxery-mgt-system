function calculateValue() {
    let total = 0;
    $("#product").each(function (index) {
        let qty = parseFloat($(this).find('#qty').val());
        let price = parseFloat($(this).find('#show_price').val());
        item_price = qty * price;
        $(this).find('#total_price').val(item_price.toFixed(2));
        total += item_price;
    });
    $('#grand_total').val(total.toFixed(2));
}


$(document).ready(function () {
    
    $("#addMore").click(function () {
        let trows = $(".product-box").html();
        $(".product-box-extra").append(trows);
        $(".product-box-extra .remove-trow").last().removeClass('hideit');
        $(".product-box-extra .product-qty").last();
        $(".product-box-extra .product-price").last();
        $(".product-box-extra .product-total").last();
    });
    
    $(document).on("click", ".remove-trow", function () {
        $(this).closest('tr').remove();
        calculateValue();
    })
    
    
    $('form #delete').click(function(){
        confirm("Are you sure");
    });

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
            let product = $('#product-item option:selected').text();
            let quantity = $('#product-qty').val();
            let price =  $('#product_price').val();
            let total =  $('#product-total').val();

            let entry = '<tr><td>' + product + '</td><td>' + quantity + '</td><td>' + price + '</td><td>' + total + '</td></tr>';

            $("#shopping-cart tbody").append(entry);
        });

    
        // function displayPrice(e){
            
        //     let product_price = 0;
        //     const tdPrice = $("product_price");
        //     let textValue = [];
    
        //     for (const value of tdPrice){
        //         if(value.dataset.price == e.target.dataset.price){
        //            textvalue[product_price++] = value.textContent;
        //         }
        //      } return textValue;
        // }
    
    
    
    // $("#product").click(function(selectProduct){
    // 	let x = document.getElementById("product").Value;
    // 	$.ajax({
    // 		url:"",
    // 		method:"POST",
    // 		data:{
    // 			id : x
    // 		},
    // 		success:function(data){
    
    // 		}
    // 	})
    // })
    
             
});

