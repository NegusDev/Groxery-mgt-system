<section id="product" class="py-3">
    <div class="container bg-light">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-3">
                        <h5 class="my-2">Manage UOM</h5>
                    </div>
                </div>
                <hr class="m-0">
                <div class="row d-flex justify-content-end px-4 py-1">
                    <div class="col-lg-3">
                        <a href="addProduct.php" class="px-3 my-2 border-end border-start text-black btn btn-primary"
                           data-bs-toggle="modal" data-bs-target="#addProductModel">Add New Uom</a>
                    </div>
                </div>

                <div class=" table-data">
                    <table class="table table-striped table-primary  table-bordered table-hover">
                        <thead class="thead-danger">
                        <tr>
                            <th>UOM ID</th>
                            <th>UOM Name</th>
                            <th>Actions</th>
                        </tr>

                        </thead>
                        <tbody id="tbody">
                            <?php foreach ( $getuoms as $uom) { ?>
                                <tr>
                                    <td class="text-capitalize"><?= $uom['uom_id'] ?></td>
                                    <td class="text-capitalize"><?= $uom['uom_name'] ?></td>
                                    <td class="">
                                        <a href="./update_uom.php?id=<?= $uom['uom_id'] ?>" class="btn btn-success d-inline-block"
                                        >Edit</a>
                                        <form action="" method="post" class="d-inline-block">
                                            <input type="hidden" name="del_id" value="<?= $uom['uom_id'] ?>">
                                            <input type="submit" class="btn btn-danger" value="Delete">
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
                                    <h5 class="modal-title" id="exampleModalLabel">Add UOM</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row my-3">
                                        <div class="col-12  bg-light my-3">
                                            <form action="" method="post" class="p-3 border">
                                                <div class="py-2">
                                                    <div class="input-group mb-2">
                                                        <input type="text" class="form-control" name="uom_name"
                                                               placeholder="Unit OF Measurement">
                                                    </div>
                                                </div>
                                                <input type="submit"
                                                       class="form-control submit btn btn-success w-50 my-3"
                                                       value="Add UOM" name="submit">

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