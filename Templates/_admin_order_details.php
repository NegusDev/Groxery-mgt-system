<section id="product" class="py-3 col-md-10">
    <div class="container bg-light">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-3">
                        <h5 class="my-2">View Orders</h5>
                    </div>
                </div>
                <hr class="m-0">
                <div class="row d-flex justify-content-end px-4 py-1">
                    <div class="col-lg-3">
                        <a href="./index.php" class="px-3 my-2 border-end border-start text-black btn btn-primary">Dashboard</a>
                    </div>
                </div>

                <div class=" table-data">
                    <table class="table table-striped table-primary  table-bordered table-hover">
                        <thead class="thead-danger">
                        <tr>
                            <th>Order ID</th>
                            <th>Product ID</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>

                        </thead>
                        <tbody id="tbody">
                            <?php foreach ($orders as $order) { ?>
                                <tr>
                                    <td class="text-capitalize"><?= $order['order_id'] ?></td>
                                    <td class="text-capitalize"><?= $order['product_id'] ?></td>
                                    <td class="text-capitalize"><?= $order['quantity'] ?></td>
                                    <td class="text-capitalize"><?= $order['total_price']?> Ugx</td>
                                    <td class="">
                                        <form action="" method="post" class="d-inline-block">
                                            <input type="hidden" name="del_id" value="<?= $order['order_id'] ?>">
                                            <input type="submit" class="btn btn-danger" value="Clear">
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <!-- Button trigger modal -->

                    <!-- Modal add product -->
                    <div class="modal fade" id="addProductModel" tabindex="-1" aria-labelledby="addProductModel"
                         data-bs-backdrop="static" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row my-3">
                                        <div class="col-12  bg-light my-3">
                                            <form action="" method="post" class="p-3 border">
                                                <div class="py-2">
                                                    <div class="input-group mb-2">
                                                        <input type="text" class="form-control" name="employee_name"
                                                               placeholder="Employee Name">
                                                    </div>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="input-group mb-2">
                                                        <input type="number" class="form-control" name="salary"
                                                               placeholder="Employee Salary">
                                                    </div>
                                                </div>
                                                <div class="pt-2">
                                                    <div class="input-group mb-2">
                                                        <input type="file" class="form-control" name="image"
                                                               >
                                                    </div>
                                                </div>
                                                <input type="submit"
                                                       class="form-control submit btn btn-success w-50 my-3"
                                                       value="Add Employee" name="submit">

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