<!-- Start Account Login Area -->
<div class="account-login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                <form name="loginform" id="loginform" class="card login-form" action="wp-login.php" method="post">
                    <div class="card-body">
                        <div class="title">
                            <h3>Login Now</h3>
                            <p>You can login using your email address.</p>
                        </div>
                        <div class="form-group input-group">
                            <label for="reg-fn">Email</label>
                            <input class="form-control" type="text" name="log" id="user_login" required>
                        </div>
                        <div class="form-group input-group">
                            <label for="reg-fn">Password</label>
                            <input class="form-control" type="password" name="pwd" id="user_pass" required>
                        </div>
                        <div class="d-flex flex-wrap justify-content-between bottom-content">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                                <label class="form-check-label">Remember me</label>
                            </div>
                            <a class="lost-pass" href="account-password-recovery.html">Forgot password?</a>
                        </div>
                        <div class="button">
                            <button class="btn" name="wp-submit" id="wp-submit" type="submit">Login</button>
                            <input type="hidden" name="redirect_to" value="http://localhost/wordpress/">
                        </div>
                        <p class="outer-link">Don't have an account? <a href="register.html">Register here </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Account Login Area -->