<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .header img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="header">
        <a href="dashboard.php">&lt; Back to Dashboard</a>
        <img src="path-to-your-image.jpg" alt="Logo">
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Login</h2>
                <!-- Tambahkan tombol atau tautan untuk login dengan Google -->
                <a href="auth/google-login.php" class="btn btn-primary">Login with Google</a>
                <hr>
                <form action="proses_login.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>