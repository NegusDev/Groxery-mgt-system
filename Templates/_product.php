<section id="product" class="py-3 col-md-10">
    <div class="container bg-light">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-3">
                        <h5 class="my-2">Manage Product</h5>
                    </div>
                </div>
                <hr class="m-0">
                <div class="row d-flex justify-content-end px-4 py-1">
                    <div class="col-lg-3">
                        <a href="addProduct.php" class="px-3 my-2 border-end border-start text-black btn btn-primary"
                           data-bs-toggle="modal" data-bs-target="#addProductModel">Add New Products</a>
                    </div>
                </div>

                <div class=" table-data">
                    <table class="table table-striped table-primary  table-bordered table-hover">
                        <thead class="thead-danger">
                        <tr>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Unit</th>
                            <th>Selling Price</th>
                            <th>Action</th>
                        </tr>

                        </thead>
                        <?=
                        $page['content'];
                        ?>
                    </table>
                    <!-- Button trigger modal -->

                    <!-- Modal add product -->
                    <div class="modal fade" id="addProductModel" tabindex="-1" aria-labelledby="addProductModel"
                         data-bs-backdrop="static" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row my-3">
                                        <div class="col-12  bg-light my-3">
                                            <?php
                                            if ($errors !== '') {
                                                echo '<div class="alert alert-danger text-center">' . $errors . '</div>';
                                            } else {
                                                echo '<div class="alert alert-success text-center">' . $errors . '</div>';
                                            }
                                            ?>
                                            <form action="" method="post" class="p-3 border">
                                                <div class="py-2">
                                                    <div class="input-group mb-2">
                                                        <div class='input-group-text bg-warning'><i
                                                                    class='fas fa-shopping-cart'></i></div>
                                                        <input type="text" class="form-control" name="product_name"
                                                               placeholder="Product Name">
                                                    </div>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="input-group mb-2">
                                                        <div class='input-group-text bg-warning'><i
                                                                    class='fas  fa-sort-numeric-down'></i></div>
                                                        <input type="number" class="form-control" name="nop"
                                                               placeholder="Number / Products">
                                                    </div>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="input-group mb-2">
                                                        <div class='input-group-text bg-warning'><i
                                                                    class='fas fa-balance-scale'></i></div>
                                                        <select name="unit" class="form-control">
                                                            <?= $show['content']; ?>

                                                        </select>


                                                    </div>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="input-group mb-2">
                                                        <div class='input-group-text bg-warning'><i
                                                                    class='fas fa-money-bill'></i></div>
                                                        <input type="number" class="form-control" name="price"
                                                               placeholder="Price Per Unit">
                                                    </div>
                                                </div>
                                                <button type="button" class="form-control btn btn-danger w-25"
                                                        data-bs-dismiss="modal">Close
                                                </button>
                                                <input type="submit"
                                                       class="form-control submit btn btn-success w-25 my-3"
                                                       value="Add Product" name="submit">

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- update product modal -->
                    <div class="modal fade" id="updateProductModel" tabindex="-1" aria-labelledby="updateProductModel"
                         data-bs-backdrop="static" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row  my-3">
                                        <div class="col-12  my-3">
                                            <form action="" method="post" class="p-3 border">
                                                <div class="py-2">
                                                    <div class="input-group mb-2">
                                                        <div class='input-group-text bg-warning'><i
                                                                    class='fas fa-shopping-cart'></i></div>
                                                        <input type="text" class="form-control" name="product_name"
                                                               value="<?= $update['product_name'] ?>">
                                                    </div>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="input-group mb-2">
                                                        <div class='input-group-text bg-warning'><i
                                                                    class='fas  fa-sort-numeric-down'></i></div>
                                                        <input type="number" class="form-control" name="nop"
                                                               value="<?= $update['number_of_produt'] ?>">
                                                    </div>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="input-group mb-2">
                                                        <div class='input-group-text bg-warning'><i
                                                                    class='fas fa-balance-scale'></i></div>
                                                        <select name="unit" class="form-control"
                                                                value="<?= $update['uom_id'] ?>">
                                                            <?= $page['content']; ?>
                                                        </select>


                                                    </div>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="input-group mb-2">
                                                        <div class='input-group-text bg-warning'><i
                                                                    class='fas fa-money-bill'></i></div>
                                                        <input type="number" class="form-control" name="price"
                                                               value="<?= $update['price_per_unit'] ?>">
                                                    </div>
                                                </div>
                                                <button type="button" class="form-control btn btn-danger w-25"
                                                        data-bs-dismiss="modal">Close
                                                </button>
                                                <input type="submit"
                                                       class="form-control submit btn btn-success w-50 my-3"
                                                       value="Update Product" name="update">

                                            </form>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>