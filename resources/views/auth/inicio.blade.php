<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fábrica de Testing</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1a1a1a;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #0078d4, #1e2a47);
            position: relative;
        }

        .container {
            text-align: center;
            max-width: 900px;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: 3.5rem;
            font-weight: bold;
            color: #00ffcc;
            margin-bottom: 30px;
        }

        h2 {
            font-size: 1.5rem;
            margin-bottom: 28px;
            color: #fff;
        }

        .button {
            background-color: #ff6600;
            padding: 15px 30px;
            border-radius: 8px;
            font-size: 1.2rem;
            text-transform: uppercase;
            color: white;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #e65c00;
        }

        .button:focus {
            outline: none;
        }

        .image-container {
            margin-bottom: 40px;
        }

        .image-container img {
            max-width: 30%;
            height: auto;
        }

        /* Estilo para el botón de cerrar sesión */
        .logout-button {
            position: absolute;
            top: 1px;
            right: 140px;
            background-color: #ff6600;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 1rem;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .logout-button:hover {
            background-color: #e65c00;
        }
    </style>
</head>
<body>

    <!-- Botón de Cerrar sesión -->
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="logout-button">Cerrar sesión</button>
    </form>

    <div class="container">
        <h1>Fábrica de Testing</h1>
        <h2>Bienvenido a nuestra plataforma para la carga de manuales de testing.</h2>

        <div class="image-container">
            <img src="{{ asset('img/img1.jpg') }}" alt="Fábrica de Testing" />
        </div>

        <a href="{{ route('manuales.create') }}" class="button">Subir Manual de Testing</a>
    </div>

</body>
</html>
