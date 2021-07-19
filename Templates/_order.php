<section id="product" class="py-3 col-md-10">
    <div class="container bg-light">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-3">
                        <h5 class="my-2">Grocery Store System</h5>
                    </div>
                </div>
                <hr class="m-0">
                <div class="row d-flex justify-content-end px-4 py-1">
                    <div class="col-lg-4">
                        <a href="product.php"
                           class="px-3 my-2 d-inlne border-end border-start text-black btn btn-primary">Manage
                            Products</a>
                        <a href="order.php"
                           class="px-3 my-2 d-inline border-end border-start text-black btn btn-primary">New Order</a>
                    </div>
                </div>

                <div class="table-data">
                    <table class="table table-striped table-primary  table-bordered table-hover">
                        <thead class="thead-danger">
                        <tr>
                            <th>Date</th>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Total Cost</th>
                        </tr>

                        </thead>
                        <?=
                        $page['content'];
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>