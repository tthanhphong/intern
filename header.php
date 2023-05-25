<!DOCTYPE html>
<html lang="en">
<head>
    <!-- required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- sweet alert -->
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   <!-- slick -->
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
      />

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">

     <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Website Responsive</title>
    <?php wp_head(); ?>
</head>

<body>
    


<nav class="custom-navbar navbar navbar navbar-expand-md sticky-top">
    <div class="container">
        <a class="navbar-brand" href="http://localhost/wordpress/">Singular</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarsFurni">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'conatainer' => 'false',
                        'menu_id' => 'header-menu',
                        'menu_class' => 'custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0 ml-auto bg-white'
                    )
                    );
                ?>
                     
                    
        </div>
        
    </div>
</nav>

