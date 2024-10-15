<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Aksén Coffee</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        a {
            text-decoration: none;
            color: #283933;
        }
        body {
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .register-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            opacity: 0; /* Initially hidden */
            transform: translateY(-20px); /* Slide from above */
            transition: opacity 0.5s ease, transform 0.5s ease; /* Smooth transition */
        }
        .register-title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            font-size: 24px;
        }
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }
        .form-label {
            position: absolute;
            left: 10px;
            top: 15px;
            transition: all 0.2s ease; /* Smooth transition */
            pointer-events: none; /* Prevent interaction */
            color: #949C99;
        }
        .form-control {
            padding: 10px 10px 10px 10px; /* Extra padding for better look */
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease; /* Smooth border color transition */
        }
        .form-control:focus {
            border-color: #949C99; /* Change border color on focus */
            box-shadow: 0 0 5px rgba(148, 156, 153, 0.5); /* Shadow effect on focus */
        }
        .form-control:focus + .form-label,
        .form-control:not(:placeholder-shown) + .form-label {
            top: -10px; /* Move label up */
            font-size: 12px; /* Shrink label */
            color: #949C99; /* Color when focused */
        }
        .btn-register {
            background-color: #949C99;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s ease; /* Smooth background color transition */
        }
        .btn-register:hover {
            background-color: #7f8984; /* Darker color on hover */
        }
        .show {
            opacity: 1; /* Show the container */
            transform: translateY(0); /* Move to original position */
        }
    </style>
</head>
<body>

    <div class="register-container" id="registerContainer">
        <h2 class="register-title">Register to Aksén Coffee</h2>
                
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('regis') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder=" " value="{{ old('username') }}" required>
                <label for="username" class="form-label">Username</label>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder=" " value="{{ old('email') }}" required>
                <label for="email" class="form-label">Email address</label>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder=" " required>
                <label for="password" class="form-label">Password</label>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder=" " required>
                <label for="confirm-password" class="form-label">Confirm Password</label>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-register btn-block">Register</button>
            </div>
        </form>

        <div class="text-center mt-3">
            <p>Already have an account? <a href="{{ route('halaman-login') }}">Login</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Show the register container with animation
        window.onload = function() {
            const registerContainer = document.getElementById('registerContainer');
            registerContainer.classList.add('show');
        }
    </script>
</body>
</html>
