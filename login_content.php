<div class="login-container">
    <div class="login-form">
        <a href="dashboard.php" class="btn btn-link"> Back to Dashboard</a>
        <div>
            <div class="h2">Sig In</div>
            <div class="h6"> Enter your email and password to sign in!</div>
        </div>
        <div class="container mt-5">
            <div class="d-flex justify-content-between">
            </div>
            <button type="button" class="btn btn-google"><img src="icons8-google-16.png" class="imgiggl" alt="google"> Sig in with Google </button>
            <br>
            <br>
            <div class="divider">
                <span>or</span>
            </div>
            <form action="proses_login.php" method="post">
                <!-- Gantilah "proses_login.php" sesuai dengan aksi login yang sesuai dengan aplikasi Anda. -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email*</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="mail@simmmple.com" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password*</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Min. 8 characters" required>
                        <button type="button" id="showPassword" class="btn btn-outline-secondary">
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="keepLoggedIn">
                    <label class="form-check-label" for="keepLoggedIn">Keep me logged in</label>
                    <a href="forgot_password.php" class="btn btn-forgot">Forgot password</a>
                </div>
                <button type="submit" class="btn btn-login">Sign In</button>
            </form>
            <div class="p">Not register yet? <a href="forgot_password.php" class="btn btn-reg">Create an Account</a> </div>
        </div>
    </div>
    <div class="login-content">
        <img style="width: 100%; height: 100%; border-bottom-left-radius: 100.51px" src="Background.png" />
    </div>
</div>
<script>
    const passwordInput = document.getElementById('password');
    const showPasswordButton = document.getElementById('showPassword');

    showPasswordButton.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            showPasswordButton.innerHTML = '<i class="far fa-eye-slash"></i>';
        } else {
            passwordInput.type = 'password';
            showPasswordButton.innerHTML = '<i class="far fa-eye"></i>';
        }
    });
</script>