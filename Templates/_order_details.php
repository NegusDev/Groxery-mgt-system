<section id="product" class="py-3">
    <div class="container bg-light">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-3">
                        <h5 class="my-2">Make Order</h5>
                    </div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3 justify-content-end">
                        <form action="" method="post" class="table-data">
                            <div class="my-2">
                                <label><strong>Customer Name</strong></label>
                                <div class="input-group mb-2">
                                    <input type="text" name="customer" class="form-control">
                                    <input type="hidden" name="order_id" class="form-control">
                                </div>
                            </div>

                    </div>
                </div>
                <hr class="m-0">
                <!-- <form action="" method="post" class="table-data"> -->
                <table class="table table-striped table-primary  table-bordered table-hover">
                    <thead class="thead-danger">
                    <tr>
                        <th><label for="">Name</label></th>
                        <th><label for="">Quantity</label></th>
                        <th><label for="">Price</label></th>
                        <th><label for="">Total Amount</label></th>
                        <div class="d-flex justify-content-end my-2">
                            <button type="button" class="btn btn-primary" id="addMore">Add More</button>
                        </div>

                    </tr>

                    </thead>
                    <tbody class="product-box-extra"></tbody>
                    <tbody id="tbody" class="product-box hidden">
                    <tr class="">
                        <td class="my-1 product_name">
                            <select name="product_name" id="product" class="form-control text-center ">
                                <?= $show['content']; ?>
                            </select>
                        </td>
                        <td class="my-1  product-qty"><input type="number" name="product-qty" data-id="" class="form-control" value=""></td>
                        <td class="my-1  product-price"><input type="number" id="price"  name="product-price"class="form-control price" 
                        value=""></td>
                        <td class="my-1 product-total">
                            <input type="number" name="product-total" id="total_price" class="d-inline form-control w-50 total"
                            value="">Shs
                            <!-- remove row -->
                            <button type="button" class="btn btn-danger ms-2 d-inline form-control w-25 remove-trow">
                                Remove
                            </button>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <strong>Total</strong>
                            <input type="number" name="grand_total" id="grand_total" class="d-inline form-control w-50"
                            value="">Shs
                            <input type="submit" class="btn btn-success ms-2 d-inline form-control w-25" value="Save"
                                name="save">

                        </td>
                    </tr>
                    </tfoot>

                </table>

                </form>
            </div>
        </div>
    </div>
</section>

<!-- 
<-- <?= $price ?> --> 