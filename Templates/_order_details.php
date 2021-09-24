<section id="product" class="py-3">
    <div class="container bg-light">
        <div class="row">
            <div class="col-12 col-sm-12">
                <form action="" method="post" class="table-data">
                    <div class="row">
                        <div class="col-lg-3">
                            <h5 class="my-2">Make Order</h5>
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-3 justify-content-end">
                            <div class="my-2">
                                <label><strong>Customer Name</strong></label>
                                    <div class="input-group mb-2">
                                        <input type="text" name="customer" class="form-control" required>
                                        <input type="hidden" name="order_id" class="form-control">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <hr class="m-0">
                    <table class="table table-striped table-primary  table-bordered table-hover mt-2">
                        <thead class="thead-danger">
                        <tr>
                            <th><label for="">Name</label></th>
                            <th><label for="">Quantity</label></th>
                            <th><label for="">Price</label></th>
                            <th><label for="">Total Amount</label></th>
        

                        </tr>

                        </thead>
                        <tbody class="product-box-extra"></tbody>
                        <tbody id="tbody" class="product-box hidden">
                        <tr class="">
                            <td class="my-1 product_name">
                                <select name="product_name" id="product-item" class="form-select text-center ">
                                    <?= $show['content']; ?>
                                </select>
                            </td>
                            <td class="my-1  product-qty">
                                <input id="product-qty" type="number" name="product-qty"  value="1" data-id="" class="form-control">
                            </td>
                            <td class="my-1  product-price"><input type="number" id="product_price"  name="product-price"class="form-control price" 
                            value=""></td>
                            <td class="my-1 product-total">
                                <div class="input-group w-50 float-start">
                                    <input type="number" name="product-total" id="product-total" class="form-control total" value="">
                                    <div class="input-group-text">UGX</div>
                                </div>
                                <!-- remove row -->
                                <button id="product-add-btn" type="button" class="btn btn-primary ms-2 w-25 float-end">
                                    Add
                                </button>
                            </td>
                        </tr>
                        </tbody>
                       

                    </table>
                    <div class="table-responsive d-flex">
                    <table id="shopping-cart" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>Product</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th>Remove from cart</th>
                            </tr>
                        </thead>
                        <tbody id="tbody"></tbody>
                       
                    </table>
                    
                </div>
                <div class="row d-flex align-items-end justify-content-end">
                    <div class="col-6 mb-2">
                    <div class="input-group w-50 float-start">
                    <input type="number" name="grand_total" id="grand-total" class="form-control " value="0" readonly>
                    <div class="input-group-text">UGX</div>
                    </div>
                    <input type="submit" class="btn btn-success ms-2 d-inline form-control w-25" value="Make sale"
                    name="save">
                    </div>
                    </div>
                </div>
                </form>
                
                
            </div>
        </div>
    </div>
</section>



