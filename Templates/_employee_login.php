<section class="py-3">
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-12 col-md-6 bg-light  my-3">
                    <h5 class="text-center mt-4">Employee Login</h5>
                <form class="php-email-form"  method="post"">
                    <div class="form my-3 p-5">
                        <div class="mb-3 has-validation">
                            <label for=""  class="form-label">Username</label>
                            <input type="text" name="employee_name" class="form-control my-3 is-invalid" id="name" aria-describedby="validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter Your username.
                            </div>
                        </div>
                        <div class="mb-3 has-validation">
                            <label for=""  class="form-label">Password</label>
                            <input type="password" name="password" class="form-control is-invalid" id="project" aria-describedby="validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Password required to proceed.
                            </div>
                        </div>
                        <!-- button -->
                        <div class="mt-3">
                            <button type="submit" name="login" class="btn btn-success form-control">Login</button>
                        </div>
                </form>

            </div>
        </div>

    </div>

</section>

