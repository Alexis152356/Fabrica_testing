<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Fábrica de Testing</title>
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

        .register-container {
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

        .status-message {
            color: green;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h1>Registro - Fábrica de Testing</h1>

    <!-- Mostrar mensaje de éxito si el registro fue exitoso -->
    @if(session('status'))
        <div class="status-message">{{ session('status') }}</div>
    @endif

    <!-- Formulario de registro -->
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

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

        <div class="form-group">
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <input type="submit" value="Registrar">
    </form>

    <!-- Mostrar mensaje de error si no se pudo registrar -->
    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif
</div>

</body>
</html>
