<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fábrica de Testing</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Incluir Font Awesome para los íconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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
            max-width: 800px;
            width: 100%;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            position: relative;
        }

        h1 {
            font-size: 2.5rem;
            color: #00ffcc;
            margin-bottom: 20px;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 1.1rem;
        }

        .alert-success {
            background-color: #28a745; /* Verde (success) */
            color: #fff;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #fff;
        }

        input[type="text"], textarea, input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            background-color: #333;
            color: white;
        }

        input[type="text"]:focus, textarea:focus, input[type="file"]:focus {
            border-color: #ff6600; /* Naranja */
            outline: none;
        }

        button {
            padding: 12px 20px;
            background-color: #ff6600; /* Naranja */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #e65c00; /* Naranja más oscuro */
        }

        .form-group {
            margin-bottom: 20px;
        }

        /* Estilo para el botón de regresar */
        .btn-back {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: transparent;
            padding: 10px 15px;
            border-radius: 8px;
            font-size: 1.5rem;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #ff6600;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Botón para regresar -->
        <a href="{{ url('/inicio') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> <!-- Flecha para regresar -->
        </a>

        <h1>Subir Manual de Testing</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('manuales.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titulo">Título del Manual</label>
                <input type="text" name="titulo" id="titulo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="archivo_pdf">Archivo PDF</label>
                <input type="file" name="archivo_pdf" id="archivo_pdf" class="form-control" accept="application/pdf" required>
            </div>
            <button type="submit" class="btn btn-primary">Subir Manual</button>
        </form>
    </div>

</body>
</html>
