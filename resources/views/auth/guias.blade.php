<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Guía</title>
    <link rel="stylesheet" href="{{ asset('css/guias.css') }}">

    <style>
        
    </style>
</head>
<body>

    <div class="consulta-box">
        <img src="{{ asset('images/envi.png') }}" alt="EnviExpress" style="max-height:60px; margin-bottom:1rem;">
        
        <h2>Consultar Guía</h2>
        <p>Consulta el estado de tus envíos ingresando el número de guía. Mantente informado en todo momento sobre la ubicación y estado de tu paquete.</p>
        
        <form id="trackForm">
            <div class="form-group">
                <label for="guia">Número de Guía</label>
                <input type="text" id="guia" class="form-control" placeholder="Ej: ENVX123456789" required>
            </div>
            <button type="submit" class="btn">Consultar Estado</button>
        </form>

        <div id="trackResult">
            <h3>Estado del Envío</h3>
            <div id="trackInfo"></div>
        </div>
    </div>

    <script>
        // Demo JS para mostrar resultado ficticio
        document.getElementById('trackForm').addEventListener('submit', function(e) {
            e.preventDefault();
            document.getElementById('trackInfo').innerHTML =
                "<p><strong>Número:</strong> " + document.getElementById('guia').value + "</p>" +
                "<p><strong>Estado:</strong> En tránsito</p>";
            document.getElementById('trackResult').style.display = 'block';
        });
    </script>
</body>
</html>
