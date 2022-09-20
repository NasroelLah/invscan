<div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-center">
    <!-- <div class="app-auth-background">

    </div> -->
    <div class="app-auth-container">
        <div class="logo">
            <a href="<?= base_url() ?>">Inventory Scanner</a>
        </div>
        <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="<?= base_url('auth') ?>">Sign In</a></p>

        <form class="row g-3 needs-validation" method="POST" action="<?= base_url('auth/reg_check') ?>" novalidate>
            <div class="col-12">
                <label for="validationCustom01" class="form-label">ID Number</label>
                <input type="text" class="form-control" id="validationCustom01" name="id_number" required>
                <div class="invalid-feedback">
                    Please enter valid ID Number
                </div>
            </div>
            <div class="col-12">
                <label for="validationCustom02" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Fulan bin Fulan" name="name" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-12">
                <label for="validationCustomUsername" class="form-label">Email</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="example@email.com" name="email" required>
                    <div class="invalid-feedback">
                        Please enter email
                    </div>
                </div>
            </div>
            <div class="col-12">
                <label for="validationCustom03" class="form-label">Password</label>
                <input type="password" class="form-control" id="validationCustom03" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password" required>
                <div class="invalid-feedback">
                    Please enter password
                </div>
            </div>
            <div class="col-12">
                <label for="validationCustom03" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="validationCustom03" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password2" required>
                <div class="invalid-feedback">
                    Password didn't match
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Register</button>
            </div>
        </form>
    </div>
</div>