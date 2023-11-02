<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .login-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            flex: 1;
            padding: 20px;
        }

        .login-content {
            flex: 1;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <div class="login-form">
                <a href="dashboard.php">Back to Dashboard</a>
                <h2>Login</h2>
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
                <p>Or Login with Google:</p>
                <!-- Add your Google login button or integration here. -->
            </div>
            <div class="login-content">
                <img src="your-image.jpg" alt="Image">
                <!-- Replace 'your-image.jpg' with the path to your image. -->
            </div>
        </div>
    </div>
</body>

</html>