<section class="py-3">
    <div class="container bg-light">
        <div class="row">
            <div class="col-lg-3">
                <h5 class="my-2">Update Employee</h5>
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
                <div class="py-2">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" name="employee_name"
                           value="<?= $id['salesman_name']  ?>"     placeholder="Employee Name">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <input type="number" class="form-control" name="salary"
                        value="<?= $id['salary']  ?>"     placeholder="Employee Salary">
                    </div>
                </div>
                <div class="pt-2">
                    <div class="input-group mb-2">
                        <input type="file" class="form-control" name="image"
                        value="<?= $id['profile']  ?>"   >
                    </div>
                </div>
                <input type="submit"
                        class="form-control submit btn btn-success w-50 my-3"
                        value="Update Employee" name="update">

            </form>

            </div>
        </div>

    </div>

</section>

