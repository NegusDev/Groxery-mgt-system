<section class="py-3">
    <div class="container bg-light">
        <div class="row">
            <div class="col-lg-3">
                <h5 class="my-2">Update Product</h5>
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
                <form action="" method="post" class="p-3 border">
                            <input type="hidden" class="form-control" name="id"
                                   value="<?= $update['product_id'] ?>">
                       
                    <div class="py-2">
                        <div class="input-group mb-2">
                            <div class='input-group-text bg-warning'><i class='fas fa-shopping-cart'></i></div>
                            <input type="text" class="form-control" name="product_name"
                                   value="<?= $update['product_name'] ?>">
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <div class='input-group-text bg-warning'><i class='fas  fa-sort-numeric-down'></i></div>
                            <input type="number" class="form-control" name="nop"
                                   value="<?= $update['number_of_produt'] ?>">
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <div class='input-group-text bg-warning'><i class='fas fa-balance-scale'></i></div>
                            <select name="unit" class="form-control" value="<?= $update['uom_id'] ?>">
                                <?= $page['content']; ?>
                            </select>


                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="input-group mb-2">
                            <div class='input-group-text bg-warning'><i class='fas fa-money-bill'></i></div>
                            <input type="number" class="form-control" name="price"
                                   value="<?= $update['price_per_unit'] ?>">
                        </div>
                    </div>

                    <input type="submit" class="form-control submit btn btn-success w-25 my-3" value="Update Product"
                           name="update">

                </form>

            </div>
        </div>

    </div>

</section>

