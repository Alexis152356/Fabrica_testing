<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manuales de Testing</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Incluyendo Font Awesome para los íconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #0078d4, #1e2a47);
        }

        .container {
            max-width: 1000px;
            width: 100%;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
            color: #00ffcc;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #0066cc; /* Azul */
            color: #fff;
            font-weight: bold;
        }

        table td {
            background-color: #f9f9f9;
            color: #333;
        }

        table tr:hover {
            background-color: #f1f1f1; /* Efecto hover sobre filas */
        }

        .btn {
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }

        /* Botón naranja */
        .btn-info {
            background-color: #ff6600; /* Naranja */
            color: white;
            border: none;
        }

        .btn-info:hover {
            background-color: #e65c00; /* Naranja más oscuro en hover */
        }

        .btn-info:focus {
            outline: none;
        }

        /* Estilo para el botón de regresar */
        .btn-back {
            font-size: 1.2rem;
            color: #fff;
            background: transparent;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn-back i {
            margin-right: 10px;
        }

        .btn-back:hover {
            color: #00ffcc;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Botón para regresar -->
        <a href="{{ url('/home') }}" class="btn-back">
            <i class="fas fa-arrow-left "></i> 
        </a>

        <h1>Manuales de Testing</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($manuales as $manual)
                    <tr>
                        <td>{{ $manual->titulo }}</td>
                        <td>{{ $manual->descripcion }}</td>
                        <td>
                            <a href="{{ Storage::url($manual->archivo_pdf) }}" target="_blank" class="btn btn-info">Ver PDF</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
