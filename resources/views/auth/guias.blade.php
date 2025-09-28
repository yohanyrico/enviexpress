<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Guía</title>
    
    <link rel="stylesheet" href="{{ asset('css/guias.css') }}"> 

    </head>
<body>

    <div class="consulta-box">
        <img src="{{ asset('images/envi.png') }}" alt="EnviExpress" style="max-height:60px; margin-bottom:1rem;">
        
        <h2>Consultar Guía</h2>
        <p>Consulta el estado de tus envíos ingresando el número de guía. Mantente informado en todo momento sobre el estado de tu paquete.</p>
        
        <form id="trackForm">
            <div class="form-group">
                <label for="guia">Número de Guía</label>
                <input type="text" id="guia" class="form-control" placeholder="Ej: ENVX123456789" required>
            </div>
            <button type="submit" class="btn">Consultar Estado</button>
        </form>

        <div id="trackResult" style="display: none; margin-top: 20px;"> 
            <div id="trackInfo">
                <div class="tracking-container">
                    
                    <button class="close-btn" id="closeResults">&times;</button>
                    
                    <div class="header-info">
                        <div class="info-item">
                            <p class="label">Número de guía:</p>
                            <p class="data-tracking">12345678</p>
                        </div>
                        <div class="info-item">
                            <p class="label">Estado de la guía:</p>
                            <p class="data-status">Entregado</p>
                        </div>
                        <div class="info-item">
                            <a href="#" class="btn-digital-guide">Visualizar Guía Digital</a>
                            <a href="#" class="link-delivery-time">Conocer Tiempos de Entrega →</a>
                        </div>
                    </div>

                    <hr class="separator">

                    <div class="location-info">
                        <div class="location-item">
                            <p class="label">Origen:</p>
                            <p class="data-location">BOGOTA (C/MARCA)</p>
                        </div>
                        <div class="location-item">
                            <p class="label">Destino:</p>
                            <p class="data-location">BUCARAMANGA (SAN)</p>
                        </div>
                    </div>
                    
                    <div class="timeline">
                        
                        <div class="timeline-step">
                            <div class="icon-circle active">🏢</div>
                            <p class="date">2025/09/20 15:43 PM</p>
                            <p class="status-label">En terminal origen</p>
                        </div>
                        <div class="timeline-step">
                            <div class="icon-circle active">🚚</div>
                            <p class="date">2025/09/21 07:37 PM</p>
                            <p class="status-label">En transporte</p>
                        </div>
                        <div class="timeline-step">
                            <div class="icon-circle active">🏢</div>
                            <p class="date">2025/09/22 10:01 AM</p>
                            <p class="status-label">En terminal destino</p>
                        </div>
                        <div class="timeline-step">
                            <div class="icon-circle active">🚚</div>
                            <p class="date">2025/09/23 01:23 PM</p>
                            <p class="status-label">En reparto</p>
                        </div>
                        <div class="timeline-step final-step">
                            <div class="icon-circle delivered">✔️</div>
                            <p class="date">2025/09/23 04:01 PM</p>
                            <p class="status-label">Entregado</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const trackForm = document.getElementById('trackForm');
        const trackResult = document.getElementById('trackResult');
        const closeBtn = document.getElementById('closeResults');
        
        // Muestra la sección de resultados al enviar el formulario (DEMO)
        trackForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simula la consulta exitosa mostrando el resultado
            trackResult.style.display = 'block';
            
            // Opcional: Desplazar la vista al resultado
            trackResult.scrollIntoView({ behavior: 'smooth' });
        });

        // Oculta la sección de resultados al hacer clic en 'X'
        closeBtn.addEventListener('click', function() {
            trackResult.style.display = 'none';
        });
    </script>
</body>
</html>