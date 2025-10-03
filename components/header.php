<!-- Header -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Séminaire Saint François Xavier - Mbuji Mayi</title>
    <link rel="stylesheet" href="/appsem/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    
</head>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <a class="navbar-brand me-4 d-flex align-items-center" href="/appsem/index.php">
                <i class="fas fa-cross me-2"></i>
                <span>Séminaire Saint François Xavier</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php $current = basename($_SERVER['PHP_SELF']); ?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link<?php if($current == 'index.php') echo ' active'; ?>" href="/appsem/index.php">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="formationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Formation
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end animate__animated animate__fadeIn" aria-labelledby="formationDropdown">
                            <li><a class="dropdown-item" href="/appsem/vocation.php">Le Séminaire Saint François Xavier de Mbuji-Mayi</a></li>
                            <li><a class="dropdown-item" href="/appsem/cursus.php">Le cursus de formation</a></li>
                            <li><a class="dropdown-item" href="/appsem/vocation-sacerdotale.php">Une vocation sacerdotale ?</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="vieDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Vie du séminaire
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end animate__animated animate__fadeIn" aria-labelledby="vieDropdown">
                            <li><a class="dropdown-item" href="/appsem/horaires.php">Horaires d'une journée-type</a></li>
                            <li><a class="dropdown-item" href="/appsem/corps-professoral.php">Le corps professoral</a></li>
                            <li><a class="dropdown-item" href="/appsem/seminaristes.php">Les séminaristes 2024-2025</a></li>
                            <li><a class="dropdown-item" href="/appsem/archives.php">Archives photos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if($current == 'actualites.php') echo ' active'; ?>" href="/appsem/actualites.php">Nos actualités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if($current == 'messes.php') echo ' active'; ?>" href="/appsem/messes.php">Horaires des Messes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php if($current == 'contact.php') echo ' active'; ?>" href="/appsem/contact.php">Contacts</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="soutienDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nous soutenir
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end animate__animated animate__fadeIn" aria-labelledby="soutienDropdown">
                            <li><a class="dropdown-item" href="/appsem/don-argent.php">Donner en argent</a></li>
                            <li><a class="dropdown-item" href="/appsem/parrainage.php">Parrainez la formation des séminaristes</a></li>
                            <li><a class="dropdown-item" href="/appsem/don-nature.php">Donner en nature</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Animate.css for dropdown animation -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
            <script>
                // Dropdown animation on show/hide
                document.querySelectorAll('.dropdown').forEach(function(drop){
                    drop.addEventListener('show.bs.dropdown', function(e){
                        const menu = this.querySelector('.dropdown-menu');
                        menu.classList.add('animate__animated', 'animate__fadeIn');
                        menu.classList.remove('animate__fadeOut');
                    });
                    drop.addEventListener('hide.bs.dropdown', function(e){
                        const menu = this.querySelector('.dropdown-menu');
                        menu.classList.remove('animate__fadeIn');
                        menu.classList.add('animate__fadeOut');
                    });
                });
                
            </script>
                
        </div>
    </nav>


</body>
</html>