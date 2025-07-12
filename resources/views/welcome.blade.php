<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to College Management System</title>
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Styles -->
    <style>
        body {
            background-image: url('/images/bg.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .welcome-container {
            background-color: rgba(39, 64, 147, 0.9); /* Dark navy overlay */
            padding: 50px;
            border-radius: 15px;
            text-align: center;
            color: white;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 0 20px rgba(10, 7, 7, 0.7);
        }

        .welcome-container h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .btn-custom {
            margin: 10px;
            padding: 12px 25px;
            font-size: 1.1rem;
            border-radius: 10px;
        }

        .btn-login {
            background-color:rgb(14, 165, 247);
            border: none;
            color: white;
        }

        .btn-register {
            background-color:rgb(29, 151, 10);
            border: none;
            color: white;
        }

        .btn-login:hover,
        .btn-register:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>College Management System</h1>
        <p>Please login or register to continue</p>
        <div>
            <a href="{{ route('login') }}" class="btn btn-custom btn-login">Login</a>
            <a href="{{ route('register') }}" class="btn btn-custom btn-register">Register</a>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
