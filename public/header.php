<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Road Status' Helper</title>
    <link rel="stylesheet" href="public/css/highway-report.css">
</head>
<body>
    <header class="main-header">
        <div class="header-content">
            <?php include("public/navbar.php"); ?>
            <h2 class="welcome-title">
                ¡Bienvenido a Road Status Helper! <br>
                Tu App de confianza para conocer el estado de las vías
            </h2>
            <img id="welcome-image" src="public/img/grone-main.png" alt="welcome-image">
            <button type="button" id="reports" class="btn-create-report" onclick="openModal();">
                Crea tu propio Reporte
            </button>
            <a href="#news" class="see-more-btn">
                Ver más
                <br>↓
            </a>
            </div>
        </div>
    </header>