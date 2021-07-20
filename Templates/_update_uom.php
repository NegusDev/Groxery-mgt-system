<section class="py-3 col-md-10">
    <div class="container bg-light w-75">
        <div class="row">
            <div class="col-lg-3">
                <h5 class="my-2">Update UOM</h5>
            </div>
        </div>
        <hr class="m-0">
        <div class="row d-flex justify-content-end px-4 py-1">
            <div class="col-lg-3">
                <a href="./index.php" class="px-3 my-2 border-end border-start text-black btn btn-primary">Dashboard</a>
            </div>
        </div>
        <hr class="m-0">
        <div class="row justify-content-center my-3">
            <div class="col-12 col-md-6 bg-light my-3">
            <form action="" method="post" class="p-3 border">
            <input type="hidden" class="form-control" name="id"
             value="<?= $id['uom_id'] ?>">
                <div class="py-2">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" name="uom_name"
                           value="<?= $id['uom_name']  ?>"     placeholder="Uom Name">
                    </div>
                </div>
                <input type="submit"
                        class="form-control submit btn btn-success w-50 my-3"
                        value="Update Uom" name="update">

            </form>

            </div>
        </div>

    </div>

</section>

