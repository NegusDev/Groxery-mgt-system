<section id="product" class="py-3 ">
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
                <div class="row justify-content-center ">
                <div class="col-md-4 mt-2 mb-4">
                <div class=" shadow-lg" style="border-radius:22px; background:linear-gradient(to right ,#c0cccc,#c0cccc); ">
                    <div class="row">
                        <div class="col-md-8 mt-5  px-4 ">
                            <h5 class="">UGX  <?php  $Order->ShowTotalBySession($_SESSION['salesman']); ?></h5>
                            <h5 class="pb-5 text-capitalize w-50" >Total Sales By you</h5>
                        </div>
                        <div class="col-md-4 mt-5">
                           <a href=""><i class="fas fa-money-bill fa-2x my-3 ad-icon"></i></a>
                        </div>
                    </div>
                </div>
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