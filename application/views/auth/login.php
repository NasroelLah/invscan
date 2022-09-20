<div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-center">
    <div class="app-auth-background">

    </div>
    <div class="app-auth-container">
        <div class="logo">
            <a href="<?= base_url() ?>">Inventory Scanner</a>
        </div>
        <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="<?= base_url('auth/') ?>register">Sign Up</a></p>

        <form class="row g-3 needs-validation" method="POST" action="<?= base_url('auth/login_check') ?>" novalidate>
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
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>