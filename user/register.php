<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - PDONOR</title>
    <!-- Bootstrap CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts - Lexend -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #B31312;
            --secondary-color: #2B2A4C;
        }
        
        * {
            font-family: 'Lexend', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html, body {
            height: 100%;
            width: 100%;
            overflow-x: hidden;
        }

        body {
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
        }
        
        .register-container {
            flex: 1;
            width: 100%;
            display: flex;
            flex-direction: column;
            background: white;
        }

        .register-header {
            padding: 8px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
            background: #F8F2DE;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }

        .logo-text {
            color: var(--primary-color);
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .register-header .nav-buttons {
            display: flex;
            gap: 15px;
        }

        .btn-register {
            background: var(--primary-color);
            color: white;
            padding: 6px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            border: 2px solid var(--primary-color);
            transition: all 0.3s ease;
        }

        .btn-register:hover {
            background: transparent;
            color: var(--primary-color);
        }

        .btn-login {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            padding: 6px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: var(--primary-color);
            color: white;
        }

        .register-content {
            display: flex;
            flex: 1;
            overflow: hidden;
            background-color: var(--primary-color);
            padding: 40px;
        }

        .register-image {
            flex: 1.2;
            display: none;
        }

        .register-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            max-height: 500px;
        }

        .register-form {
            flex: 1;
            background: white;
            padding: 20px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            max-height: calc(100vh - 57px);
            max-width: 500px;
            margin: auto;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .register-form h2 {
            text-align: center;
            margin-bottom: 25px;
            color: var(--secondary-color);
            font-weight: 600;
            font-size: 28px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            color: var(--secondary-color);
            font-weight: 500;
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 2px solid #e1e1e1;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: none;
            outline: none;
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            margin-top: 15px;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background: #8f0f0e;
        }

        .register-footer {
            text-align: center;
            margin-top: 20px;
        }

        .register-footer p {
            color: #666;
            font-size: 13px;
        }

        .register-footer a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .register-footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 992px) {
            .register-content {
                flex-direction: column;
            }

            .register-image {
                padding: 30px 40px;
                flex: none;
            }

            .register-image img {
                max-width: 70%;
                max-height: 300px;
            }

            .register-form {
                padding: 30px;
            }
        }

        @media (max-width: 576px) {
            .register-header {
                padding: 10px 20px;
            }

            .logo {
                height: 30px;
            }

            .btn-register, .btn-login {
                padding: 5px 15px;
                font-size: 13px;
            }

            .register-image {
                padding: 20px;
            }

            .register-form {
                padding: 20px;
            }

            .register-form h2 {
                font-size: 22px;
                margin-bottom: 20px;
            }

            .form-group {
                margin-bottom: 15px;
            }

            .form-control {
                padding: 8px 12px;
            }

            .btn-submit {
                padding: 10px;
                font-size: 14px;
            }
        }

        @media (min-width: 992px) {
            .register-image {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 20px;
            }

            .register-form {
                margin-right: 40px;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-header">
            <div class="logo-container">
                <img src="/PDONOR/assets/img/PDONOR.png" alt="PDONOR Logo" class="logo-icon">
                <div class="logo-text">PDONOR</div>
            </div>
            <div class="nav-buttons">
                <a href="register.php" class="btn-register">REGISTER</a>
                <a href="login.php" class="btn-login">LOGIN</a>
            </div>
        </div>
        
        <div class="register-content">
            <div class="register-image">
                <img src="/PDONOR/assets/img/pana.png" alt="Register Illustration">
            </div>
            
            <div class="register-form">
                <h2>REGISTER</h2>
                <form action="process_register.php" method="POST">
                    <div class="form-group">
                        <label for="fullName">Nama Lengkap:</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">Konfirmasi Password:</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                    </div>
                    
                    <button type="submit" class="btn-submit">REGISTER</button>
                    
                    <div class="register-footer">
                        <p>Sudah punya akun? <a href="login.php">Login disini</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html> 