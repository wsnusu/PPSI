<div class="login-container">
    <div class="login-form">
        <a href="dashboard.php" class="btn btn-link"> Back to Dashboard</a>
        <div>
            <div class ="h2">Sig In</div>
            <div class="h6"> Enter your email and password to sign in!</div>
        </div>
        <div class="container mt-5">
            <div class="d-flex justify-content-between">
            </div>
            <form action="proses_login.php" method="post">
                <!-- Gantilah "proses_login.php" sesuai dengan aksi login yang sesuai dengan aplikasi Anda. -->
                <div class="mb-3">
                    <label for="username" class="form-label">Email*</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password*</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
    <div class="login-content">
        <img style="width: 100%; height: 100%; border-bottom-left-radius: 100.51px" src="Background.png" />
    </div>
</div>