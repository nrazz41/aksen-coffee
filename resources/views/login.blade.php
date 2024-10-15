<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Aksén Coffee</title>
    
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
        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            opacity: 0; /* Initially hidden */
            transform: translateY(-30px); /* Slide from above */
            transition: opacity 0.6s ease, transform 0.6s ease; /* Smooth transition */
        }
        .login-title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            font-size: 24px;
        }
        .form-group {
            position: relative;
            margin-bottom: 15px;
        }
        .form-label {
            position: absolute;
            left: 10px;
            top: 10px;
            transition: all 0.3s ease;
            color: #949C99;
        }
        .form-control {
            padding: 10px;
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
            left: 10px;
            font-size: 12px;
            color: #949C99; /* Change label color when focused */
        }
        .btn-login {
            background-color: #949C99;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth transition */
        }
        .btn-login:hover {
            background-color: #7f8984; /* Darker color on hover */
            transform: translateY(-2px); /* Slight lift effect on hover */
        }
        .login-icon {
            display: block;
            margin: 0 auto;
            margin-bottom: 20px;
            width: 100px; /* Adjust the size of the icon as needed */
            height: auto;
        }
        .show {
            opacity: 1; /* Show the container */
            transform: translateY(0); /* Move to original position */
        }
    </style>
</head>
<body>
    <div class="login-container" id="loginContainer">
        <h2 class="login-title">Login to Aksén Coffee</h2>

        @if (session('success'))
            <div class="alert alert-success" id="flashSuccess">
                {{ session('success') }}
            </div>
        @endif

        <img src="img/icon.png" alt="icon-aksen-coffee" class="login-icon">

        @if ($errors->any())
            <div class="alert alert-danger" id="flashErrors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder=" " value="{{ old('email') }}" required>
                <label for="email" class="form-label">Email address</label>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder=" " required>
                <label for="password" class="form-label">Password</label>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-login btn-block">Login</button>
            </div>
        </form>

        <div class="text-center mt-3">
            <p>Don't have an account? <a href="{{ route('halaman-regis') }}">Sign up</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Show the login container with animation
        window.onload = function() {
            const loginContainer = document.getElementById('loginContainer');
            loginContainer.classList.add('show');
        }

        // Hide flash messages after 3 seconds
        setTimeout(() => {
            const flashSuccess = document.getElementById('flashSuccess');
            const flashErrors = document.getElementById('flashErrors');

            if (flashSuccess) {
                flashSuccess.style.transition = "opacity 0.5s ease";
                flashSuccess.style.opacity = 0;
                setTimeout(() => {
                    flashSuccess.remove();
                }, 500); // Remove element after fade out
            }

            if (flashErrors) {
                flashErrors.style.transition = "opacity 0.5s ease";
                flashErrors.style.opacity = 0;
                setTimeout(() => {
                    flashErrors.remove();
                }, 500); // Remove element after fade out
            }
        }, 3000); // Delay before starting to fade out
    </script>
</body>