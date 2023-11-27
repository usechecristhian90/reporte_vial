<?php 
    # Performing DB Connection
    include("public/config/db_connect.php");
    
    # Getting news HTMl
    $newsQuery = "SELECT * FROM noticias";
    $result    = mysqli_query($conn, $newsQuery);
    $htmlNews  = "";
    $news      = empty($result) ? "" : mysqli_fetch_all($result, MYSQLI_ASSOC);
    if (!empty($news)) {
        foreach($news as $new) {
            $htmlNews .= "
            <div class='card'>
                <img src='{$new['imagen']}' alt='news-img' class='news-img'>
                <div class='news-content'>
                    <h4 class='news-title card-title'>{$new['titulo']}:</h4>
                    <p class='news-text'>{$new['descripcion']}</p>
                </div>
            </div>";
        }
    }

    # Rendering Contact-us data
    $socialMediaArr = [
        "instagram" => [
            "icon" => "public/img/instagram.png", 
            "text" => "@RoadStatusHelper"],
        "gmail"    => [
            "icon" => "public/img/gmail.png", 
            "text" => "RoadStatusHelper@gmail.com"],
        "whatsapp" => [
                "icon" => "public/img/whatsapp.png", 
                "text" => "Hidden Number"],
        "facebook" => [
            "icon" => "public/img/facebook.png", 
            "text" => "RoadStatusHelper"]
    ];
    $socialMediaHTML = "";

    foreach($socialMediaArr as $key => $socialMedia) {
        $socialMediaHTML .= "
        <div class='social-media-info'>
            <img src='{$socialMedia['icon']}' alt='{$key}-icon' class='social-media-icon'>
            <p class='icon-info'>
                {$socialMedia['text']}
            </p>
        </div>";
    }

?>
<!DOCTYPE html>
<html lang="en">
        <?php include("public/header.php"); ?>
        <main>
        <?php include("public/modal-create.php"); ?>
            <section id="news">
                <div class="section-header">
                    <h2 class="card-title">
                        Noticias y Novedades
                    </h2>
                    <p>
                        Mantente informado de los diferentes proyectos viales desarrollados o planeados en la ciudad.
                    </p>
                </div>
                <?= $htmlNews ?>
            </section>
            <section id="contact">
                <div class="section-header">
                    <h2 class="card-title">
                        Contáctanos:
                    </h2>
                </div>
                <div class="contact-content">
                    <?= $socialMediaHTML ?>
                </div>
            </section>
        </main>
        <?php include("public/footer.php"); ?>
</html>
