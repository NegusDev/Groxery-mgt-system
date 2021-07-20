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

$('#product').change( e =>{
    let textvalues = displayData(e);
    console.log(textvalues);
})

function displayData(e) {

    let product_id = 0;
    const td = $('tr .price,.total');
    let textvalues = [];

    for (const values of td) {
        
        if (values.dataset.id == e.target.dataset.id) {
            textvalues[product_id++] = value.textContent;
        }
    }
    
}

$('form #delete').click(function(){
    confirm("Are you sure");
});
// select box to fill price
$(document).ready(function () {
    $("#product").change(function () {
        let product_id = $(this).val();
        $.ajax({
            url: "./Controllers/Add_To_Cart.php",
            method: "POST",
            data: {
                product_id: product_id},
            success: function (data) {
                $("#show_price").html(data);
                $("#total_price").html(data);
            }
        });
    });
});


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

         

