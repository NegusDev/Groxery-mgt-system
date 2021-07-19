<section class="py-3 col-md-10">
    <div class="container bg-light">
        <div class="row">
            <div class="col-lg-3">
                <h5 class="my-2">Delete Product</h5>
            </div>
        </div>
        <hr class="m-0">
        <div class="row d-flex justify-content-end px-4 py-1">
            <div class="col-lg-3">
                <a href="./product.php" class="px-3 my-2 border-end border-start text-black btn btn-primary">Manage
                    Products</a>
            </div>
        </div>
        <hr class="m-0">
        <div class="row justify-content-center my-3">

            <div class="col-12 col-md-6 bg-light my-3">

                <form method="post" class="p-3 border">
                    <div class="py-2">
                        <div class="input-group mb-2">
                            <div class='input-group-text bg-warning'><i class='fas fa-shopping-cart'></i></div>
                            <input type="text" class="form-control" disabled name="del_id"
                                   value="<?= $product['product_id']; ?>">
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <div class='input-group-text bg-warning'><i class='fas fa-shopping-cart'></i></div>
                            <input type="text" class="form-control" disabled name="del_id"
                                   value="<?= $product['product_name']; ?>">
                        </div>
                    </div>
                    <input type="submit" class="form-control btn btn-danger w-25 my-3" id="delete"
                           value="Delete Product">
                </form>
            </div>

        </div>

    </div>

</section>


<!--<form method="post">-->
<!--    <input type="submit" value='.$product['product_id'].' name='.$product['product_id'].'>-->
<!--</form>-->