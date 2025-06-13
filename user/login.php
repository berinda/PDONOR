<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PDONOR</title>
    <!-- Bootstrap CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #B31312;
            --secondary-color: #2B2A4C;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        
        .login-container {
            max-width: 1000px;
            margin: 50px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .login-header {
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
        }

        .logo {
            height: 50px;
        }

        .login-header .nav-buttons {
            display: flex;
            gap: 10px;
        }

        .btn-register {
            background: transparent;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-login {
            background: var(--primary-color);
            color: white;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .login-content {
            display: flex;
            padding: 40px;
            background-color: var(--primary-color);
            min-height: 500px;
        }

        .login-image {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-image img {
            max-width: 80%;
            height: auto;
        }

        .login-form {
            flex: 1;
            background: white;
            padding: 40px;
            border-radius: 10px;
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 30px;
            color: var(--secondary-color);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: var(--secondary-color);
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            background-color: white;
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .login-footer {
            text-align: center;
            margin-top: 20px;
        }

        .login-footer a {
            color: var(--primary-color);
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <img src="assets/img/logo.png" alt="PDONOR" class="logo">
            <div class="nav-buttons">
                <a href="register.php" class="btn-register">REGISTER</a>
                <a href="login.php" class="btn-login">LOGIN</a>
            </div>
        </div>
        
        <div class="login-content">
            <div class="login-image">
                <img src="assets/img/login-illustration.png" alt="Login Illustration">
            </div>
            
            <div class="login-form">
                <h2>LOGIN!</h2>
                <form action="process_login.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="role">Role:</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="">Role</option>
                            <option value="donor">Donor</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn-submit">LOGIN</button>
                    
                    <div class="login-footer">
                        <p>Anda belum punya akun? <a href="register.php">Daftar dahulu</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html> 