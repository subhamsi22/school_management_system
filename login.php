<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - School Management System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        <?php
 session_start();

?>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            
        }

        .bannerlogin {
            width: 100%;
            min-height: 100vh;
            overfollow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, rgba(253, 8, 171, 0.1) 0%, rgba(16, 18, 99, 0.1) 100%), 
                        url('pics/steptodown.com355019.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 20px;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 50px;
            width: 100%;
            max-width: 450px;
            backdrop-filter: blur(10px);
            animation: slideUp 0.6s ease;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .login-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, rgba(253, 8, 171, 0.89), rgba(16, 18, 99, 0.89));
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 40px;
            color: white;
            box-shadow: 0 10px 30px rgba(253, 8, 171, 0.3);
        }

        .login-header h1 {
            color: #1a1a1a;
            font-size: 28px;
            margin: 0 0 10px 0;
            font-weight: 700;
        }

        .login-header p {
            color: #999;
            font-size: 14px;
            margin: 0;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            color: #333;
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 14px;
            text-transform: capitalize;
        }

        .form-group .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .form-group .input-wrapper i {
            position: absolute;
            left: 15px;
            color: rgba(253, 8, 171, 0.89);
            font-size: 18px;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .form-group input:focus {
            outline: none;
            border-color: rgba(253, 8, 171, 0.89);
            box-shadow: 0 0 15px rgba(253, 8, 171, 0.2);
        }

        .form-group input::placeholder {
            color: #ccc;
        }

        .forgot-password {
            text-align: right;
            margin-bottom: 30px;
        }

        .forgot-password a {
            color: rgba(253, 8, 171, 0.89);
            font-size: 13px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .forgot-password a:hover {
            color: rgba(16, 18, 99, 0.89);
        }

        .login-btn {
            width: 100%;
            padding: 13px;
            background: linear-gradient(135deg, rgba(253, 8, 171, 0.89) 0%, rgba(16, 18, 99, 0.89) 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 10px 30px rgba(253, 8, 171, 0.3);
            font-family: 'Poppins', sans-serif;
        }

        .login-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(253, 8, 171, 0.4);
        }

        .login-btn:active {
            transform: translateY(-1px);
        }

        .signup-link {
            text-align: center;
            margin-top: 25px;
            color: #666;
            font-size: 14px;
        }

        .signup-link a {
            color: rgba(253, 8, 171, 0.89);
            text-decoration: none;
            font-weight: 600;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        .alert-message {
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            display: none;
        }

        .alert-message.show {
            display: block;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .bannerlogin {
                padding: 10px;
                min-height: auto;
            }

            .login-container {
                padding: 35px;
                max-width: 100%;
            }

            .login-header h1 {
                font-size: 24px;
            }

            .login-icon {
                width: 70px;
                height: 70px;
                font-size: 35px;
            }
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 25px;
                border-radius: 15px;
            }

            .login-header {
                margin-bottom: 30px;
            }

            .login-header h1 {
                font-size: 22px;
            }

            .login-header p {
                font-size: 12px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-group input {
                padding: 10px 15px 10px 40px;
                font-size: 13px;
            }

            .login-btn {
                padding: 11px;
                font-size: 14px;
            }

            .login-icon {
                width: 60px;
                height: 60px;
                font-size: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="bannerlogin">
        <div class="login-container">
            <div class="login-header">
                <div class="login-icon">
                    <i class="fas fa-lock"></i>
                </div>
                <h1>Admin Login</h1>
                <p>School Management System</p>
            </div>

            <?php
               
              include 'db.php';


                $error_message = '';
                $success_message = '';

                $sql = "SELECT * FROM signup";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    if ($username == $row['username'] && $password == $row['pass']) {
                        $_SESSION['admin'] = $username;
                        $success_message = "Login successful! Redirecting...";
                        echo "<script>
                            setTimeout(function() {
                                window.location.href = 'admin.php';
                            }, 1500);
                        </script>";
                    } else {
                        $error_message = "Invalid username or password!";
                    }
                }
            ?>

            <div id="alertBox" class="alert-message"></div>

            <form method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user"></i>
                        <input type="text" id="username" name="username" placeholder="Enter your username" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <i class="fas fa-key"></i>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                </div>

                <div class="forgot-password">  
                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit" class="login-btn">Login</button>
            </form>

            <div class="signup-link">
                Don't have an account? <a href="singup.php">Sign Up</a>
            </div>
        </div>
    </div>

    <script>
        <?php if (!empty($error_message)): ?>
            const alertBox = document.getElementById('alertBox');
            alertBox.textContent = '<?php echo $error_message; ?>';
            alertBox.className = 'alert-message show alert-error';
            setTimeout(() => {
                alertBox.classList.remove('show');
            }, 4000);
        <?php endif; ?>

        <?php if (!empty($success_message)): ?>
            const alertBox = document.getElementById('alertBox');
            alertBox.textContent = '<?php echo $success_message; ?>';
            alertBox.className = 'alert-message show alert-success';
        <?php endif; ?>
    </script>
</body>
</html>