<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="icon" type="image/jpeg" href="{{ asset('/images/pizza.jpeg') }}">
    <title>MyResTO - Login</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to bottom right, #e9effa, #c9d6ff);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .container {
            display: flex;
            flex-direction: row;
            width: 80%;
            max-width: 900px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
            background: #ffffff;
        }
        .left-panel {
            background: linear-gradient(to bottom right, #3498db, #2c3e50);
            color: #ffffff;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .left-panel img {
            margin-top: 20px;
            max-width: 80%;
            height: auto;
            border-radius: 5px;
        }
        .right-panel {
            padding: 40px;
            width: 100%;
            max-width: 450px;
        }
        .right-panel h2 {
            color: #333;
            font-weight: 500;
            margin-bottom: 20px;
            font-size: 1.8rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .password-wrapper {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #3498db;
        }
        .btn-primary-custom {
            background-color: #3498db;
            border: none;
            padding: 0.75rem;
            font-weight: 500;
            transition: background 0.3s;
        }
        .btn-primary-custom:hover {
            background-color: #2c3e50;
        }
        .sign-in-link a {
            color: #3498db;
            text-decoration: none;
            font-weight: 500;
        }
        .sign-in-link a:hover {
            color: #2c3e50;
        }
        .alert {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <h1>Selamat Datang di Restoran D,Rizz Pizza</h1>
            <p>Silahkan login terlebih dahulu untuk masuk.</p>
            <img alt="Login Images" src="{{ asset('images/pizza.jpeg') }}" />
        </div>
        <div class="right-panel">
            <h2>Login</h2>

            <!-- Error Messages -->
            @if ($errors->has('username'))
                <div class="alert alert-danger">{{ $errors->first('username') }}</div>
            @endif
            @if ($errors->has('password'))
                <div class="alert alert-danger">{{ $errors->first('password') }}</div>
            @endif

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required autofocus />
                </div>
                <div class="form-group password-wrapper">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                        <i class="fas fa-eye" id="toggleIcon"></i>
                    </span>
                </div>
                <button type="submit" class="btn btn-primary-custom w-100 text-white">Sign In</button>
            </form>

            <!-- Sign Up Link -->
            <div class="text-center my-3 sign-in-link">
                <p>New here? <a href="#sign-up">Create an Account</a></p>
            </div>
        </div>
    </div>

    <!-- Toggle Password Visibility Script -->
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("password");
            const toggleIcon = document.getElementById("toggleIcon");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.replace("fa-eye", "fa-eye-slash");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.replace("fa-eye-slash", "fa-eye");
            }
        }
    </script>
</body>
</html>
