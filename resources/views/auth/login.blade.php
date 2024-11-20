<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fábrica de Testing</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #1a1a1a;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #0078d4, #1e2a47);
        }

        .login-container {
            text-align: center;
            max-width: 400px;
            width: 100%;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #00ffcc;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            background-color: #333;
            color: white;
        }

        input[type="submit"] {
            background-color: #ff6600;
            border: none;
            cursor: pointer;
            text-transform: uppercase;
            font-size: 1rem;
        }

        input[type="submit"]:hover {
            background-color: #e65c00;
        }

        .error {
            color: red;
            margin-top: 10px;
        }

        .register-link {
            margin-top: 20px;
            font-size: 1rem;
            color: #fff;
        }

        .register-link a {
            color: #00ffcc;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h1>Login - Fábrica de Testing</h1>

    <!-- Formulario de login -->
    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit" value="Ingresar">
    </form>

    <!-- Mostrar mensaje de error si no se pudo autenticar -->
    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <!-- Enlace a la página de registro -->
    <div class="register-link">
        <p>¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
    </div>
</div>

</body>
</html>
