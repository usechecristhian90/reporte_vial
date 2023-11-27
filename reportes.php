<?php
    # Performing DB Connection
    include("public/config/db_connect.php");

    # Getting news HTMl
    $reportsQuery = "SELECT * FROM reporte";
    $result    = mysqli_query($conn, $reportsQuery);
    $htmlReports  = "";
    if (!empty($result)) {
        $reports     = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if (!empty($reports)) {
            foreach($reports as $report) {
                $htmlReports .= "
                <div class='card'>
                    <img src='public/img/hueco_{$report['id_reporte']}.png' alt='report-img' class='news-img'>
                    <div class='news-content'>
                        <h4 class='news-title card-title'>{$report['titulo']}.</h4>
                        <p><strong>Autor:</strong>{$report['autor']}</p>
                        <p><strong>Ciudad:</strong>{$report['ciudad']}</p>
                        <p><strong>Departamento:</strong>{$report['departamento']}</p>
                        <p class='news-text'>{$report['descripcion']}</p>
                    </div>
                </div>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Road Status' Helper</title>
        <link rel="stylesheet" href="public/css/highway-report.css">
    </head>
    <body>
        <header class="reports-header">
            <div class="header-content">
                <?php include("public/navbar.php") ?>
            </div>
        </header>
        <section id="reports">
                <div class="section-header">
                    <h2 class="card-title">
                        Reportes
                    </h2>
                    <p>
                        A continuación, podrás ver todos los reportes compartidos por nuestros usuarios:
                    </p>
                </div>
                <?= $htmlReports ?>
            </section>
        <?php include("public/footer.php") ?>
</html>