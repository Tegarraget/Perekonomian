<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="{{ asset('storage/logo/Perekonomian2.png') }}" type="image/png">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            animation: colorSlide 5s infinite alternate;
            background: linear-gradient(90deg, #1e3c72,rgb(97, 163, 255), #1e3c72);
            background-size: 300% 100%;
        }
        @keyframes colorSlide {
            0% {
                background-position: 100% 0;
            }

            100% {
                background-position: 0% 0;
            }
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 280px;
            backdrop-filter: blur(10px);
        }

        .login-container h2 {
            margin-bottom: 20px;
            color:rgb(0, 0, 0);
            text-align: center;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: calc(100% - 24px);
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #4a90e2;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        .login-container button:hover {
            background-color: #357ab8;
            transform: translateY(-2px);
        }

        .register-link {
            display: block;
            margin-top: 15px;
            text-align: center;
            color: #4a90e2;
            text-decoration: none;
            font-size: 0.9em;
        }

        .register-link:hover {
            text-decoration: underline;
        }

        .alert {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        @if ($errors->has('login'))
        <div class="alert">
            {{ $errors->first('login') }}
        </div>
        @endif
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required autocomplete="email">
            <input type="password" name="password" placeholder="Password" required autocomplete="current-password">
            
            <button type="submit">Login</button>
        </form>
        <a href="{{ route('register') }}" class="register-link">Tambah Akun</a>
    </div>
</body>

</html>