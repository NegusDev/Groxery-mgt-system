<?php
if (isset($_POST['update'])) {

    $data = array(
        'product_name' => $_POST['product_name'],
        'number_of_produt' => $_POST['nop'],
        'uom_id' => $_POST['unit'],
        'price_per_unit' => $_POST['price']
    );

    $result = $Product->updateProduct($data);
    if ($result) {
        $show = "<h5 class='text-center alert alert-success'>Product Added Successfully</h5>";

    } else {
        $show = "<h5 class='text-center alert alert-danger'>Failed</h5>";
        die($show);

    }

}
