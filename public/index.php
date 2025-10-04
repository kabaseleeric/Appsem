<?php include 'components/header.php'; ?>


<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/appsem/public/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    </head>
<body>


    <!-- Hero Section -->

   
    <section class="hero-section p-0">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="hero-slide d-flex flex-column justify-content-center align-items-center" style="min-height: 450px; background: linear-gradient(rgba(26, 61, 93, 0.85), rgba(26, 61, 93, 0.7)), url('/appsem/le palais à Kinshasa photo John Bompengo (12).JPG') center center / cover no-repeat;">
                        <div class="container">
                            <h1 class="display-4 mb-4">Séminaire Saint François Xavier</h1>
                            <p class="lead mb-4">Former les futurs prêtres du diocèse de Mbuji Mayi dans la tradition et l'esprit de saint François Xavier</p>
                            <a href="#presentation" class="btn btn-light btn-lg me-3">Découvrir notre séminaire</a>
                            <a href="/appsem/contact.php" class="btn btn-outline-light btn-lg">Nous contacter</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="hero-slide d-flex flex-column justify-content-center align-items-center" style="min-height: 450px; background: linear-gradient(rgba(26, 61, 93, 0.85), rgba(26, 61, 93, 0.7)), url('/appsem/imageDioc.png') center center / cover no-repeat;">
                        <div class="container">
                            <h1 class="display-4 mb-4">Bienvenue au Séminaire</h1>
                            <p class="lead mb-4">Un lieu d'espérance, de prière et de fraternité pour bâtir l'Église de demain. Rejoignez-nous dans cette belle aventure humaine et spirituelle !</p>
                            <a href="#formation" class="btn btn-light btn-lg me-3">Notre formation</a>
                            <a href="#soutien" class="btn btn-outline-light btn-lg">Nous soutenir</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div></div>
    </section>

    <!-- Présentation -->
    <section id="presentation" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                    <h2 class="section-title text-start">Notre Histoire</h2>
                    <p>Fondé en 1965, le Séminaire Saint François Xavier de Mbuji Mayi a pour mission de former les futurs prêtres du diocèse selon les principes de l'Évangile et dans l'esprit missionnaire de saint François Xavier.</p>
                    <p>Notre séminaire accueille des jeunes hommes désireux de répondre à l'appel du Seigneur et de se préparer au sacerdoce ministériel. Nous offrons une formation intégrale qui comprend la formation humaine, spirituelle, intellectuelle et pastorale.</p>
                    <p>Au cœur de la région du Kasaï, notre établissement s'efforce d'être un lieu de croissance humaine et spirituelle, ouvert aux défis de notre temps tout en restant fidèle à la tradition de l'Église.</p>
                    <a href="/appsem/vocation.php" class="btn btn-primary">En savoir plus</a>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <img src="../public/images/musique.png" alt="Musique au séminaire" class="img-fluid rounded shadow" style="object-fit:cover; width:100%; height:160px;">
                        </div>
                        <div class="col-6 mb-4">
                            <img src="../public/images/batiment.png" alt="Bâtiment du séminaire" class="img-fluid rounded shadow" style="object-fit:cover; width:100%; height:160px;">
                        </div>
                        <div class="col-6">
                            <img src="../public/images/foret.png" alt="Forêt autour du séminaire" class="img-fluid rounded shadow" style="object-fit:cover; width:100%; height:160px;">
                        </div>
                        <div class="col-6">
                            <img src="../public/images/court.png" alt="Cour du séminaire" class="img-fluid rounded shadow" style="object-fit:cover; width:100%; height:160px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formation -->
    <section id="formation" class="py-5">
        <div class="container">
            <h2 class="section-title">Notre Formation</h2>
            <p class="text-center mb-5">Nous proposons une formation complète qui prépare les séminaristes à leur future mission sacerdotale.</p>
            
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="card-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4>Formation Spirituelle</h4>
                        <p>Vie de prière, sacrements, accompagnement spirituel, retraites et formation à la spiritualité sacerdotale.</p>
                        <a href="/appsem/formation-spirituelle.php" class="btn btn-outline-primary btn-sm mt-3">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="card-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h4>Formation Intellectuelle</h4>
                        <p>Étude de la philosophie, théologie, Écriture Sainte, droit canonique et sciences humaines.</p>
                        <a href="/appsem/formation-intellectuelle.php" class="btn btn-outline-primary btn-sm mt-3">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="card-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h4>Formation Pastorale</h4>
                        <p>Stages en paroisses, catéchèse, accompagnement des jeunes, visites pastorales et liturgie.</p>
                        <a href="/appsem/formation-pastorale.php" class="btn btn-outline-primary btn-sm mt-3">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box">
                        <div class="card-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Formation Humaine</h4>
                        <p>Développement personnel, vie communautaire, responsabilités et éducation aux vertus humaines.</p>
                        <a href="/appsem/formation-humaine.php" class="btn btn-outline-primary btn-sm mt-3">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Actualités -->
    <section id="actualites" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Actualités</h2>
            
            <div class="row">
                <div class="col-lg-8">
                    <div class="news-item">
                        <h4>Ordinations diaconales 2023</h4>
                        <p class="news-date"><i class="far fa-calendar-alt me-2"></i>15 juin 2023</p>
                        <p>Le Séminaire Saint François Xavier a eu la joie de célébrer les ordinations diaconales de cinq séminaristes en fin de formation. La cérémonie a été présidée par Mgr Oscar Nkolo, évêque du diocèse de Mbuji Mayi.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Lire la suite</a>
                    </div>
                    
                    <div class="news-item">
                        <h4>Retraite spirituelle de Carême</h4>
                        <p class="news-date"><i class="far fa-calendar-alt me-2"></i>5 mars 2023</p>
                        <p>Comme chaque année, les séminaristes ont vécu une retraite spirituelle de cinq jours durant le Carême. Cette année, le thème était "À la suite du Christ serviteur".</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Lire la suite</a>
                    </div>
                    
                    <div class="news-item">
                        <h4>Visite du Nonce Apostolique</h4>
                        <p class="news-date"><i class="far fa-calendar-alt me-2"></i>20 janvier 2023</p>
                        <p>Le Séminaire a eu l'honneur d'accueillir Mgr Ettore Balestrero, Nonce Apostolique en République Démocratique du Congo, pour une visite pastorale et un temps d'échange avec les séminaristes.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Lire la suite</a>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Événements à venir</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <strong>Journée Portes Ouvertes</strong><br>
                                    <small class="text-muted"><i class="far fa-calendar me-1"></i>10 septembre 2023</small>
                                </li>
                                <li class="mb-3">
                                    <strong>Rentrée académique 2023-2024</strong><br>
                                    <small class="text-muted"><i class="far fa-calendar me-1"></i>15 septembre 2023</small>
                                </li>
                                <li class="mb-3">
                                    <strong>Pèlerinage annuel</strong><br>
                                    <small class="text-muted"><i class="far fa-calendar me-1"></i>5 octobre 2023</small>
                                </li>
                                <li class="mb-3">
                                    <strong>Célébration de la Toussaint</strong><br>
                                    <small class="text-muted"><i class="far fa-calendar me-1"></i>1 novembre 2023</small>
                                </li>
                            </ul>
                            <a href="/appsem/actualites.php" class="btn btn-primary w-100">Voir tous les événements</a>
                        </div>
                    </div>
                    
                    <div class="mass-schedule mt-4">
                        <h5>Horaires des Messes</h5>
                        <div class="mass-time">
                            <span>Dimanche</span>
                            <span>10:00</span>
                        </div>
                        <div class="mass-time">
                            <span>Mardi - Vendredi</span>
                            <span>07:00</span>
                        </div>
                        <div class="mass-time">
                            <span>Samedi</span>
                            <span>08:00</span>
                        </div>
                        <a href="/appsem/messes.php" class="btn btn-outline-primary btn-sm w-100 mt-3">Voir tous les horaires</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <!-- Dashboard Statistiques -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center text-center gy-4">
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm border-0 py-4 h-100">
                        <div class="mb-2" style="font-size:2.2rem; color:var(--primary-color);"><i class="fas fa-user-tie"></i></div>
                        <div style="font-size:2.1rem; font-weight:700; color:var(--primary-color);">67</div>
                        <div class="text-muted">Prêtres déjà formés</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm border-0 py-4 h-100">
                        <div class="mb-2" style="font-size:2.2rem; color:var(--secondary-color);"><i class="fas fa-users"></i></div>
                        <div style="font-size:2.1rem; font-weight:700; color:var(--secondary-color);">44</div>
                        <div class="text-muted">Séminaristes actuels</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card shadow-sm border-0 py-4 h-100">
                        <div class="mb-2" style="font-size:2.2rem; color:#8b4513;"><i class="fas fa-church"></i></div>
                        <div style="font-size:2.1rem; font-weight:700; color:#8b4513;">4</div>
                        <div class="text-muted">Diacres</div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Galerie -->
    <section id="galerie" class="py-5">
        <div class="container">
            <h2 class="section-title">Galerie</h2>
            <p class="text-center mb-5">Quelques moments de la vie de notre séminaire</p>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="/appsem/images/messe.png" alt="Messe" class="img-fluid">
                        <div class="gallery-overlay">
                            <h5 class="text-white">Messe</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="/appsem/images/ensemble.png" alt="Ensemble" class="img-fluid">
                        <div class="gallery-overlay">
                            <h5 class="text-white">Ensemble</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="/appsem/images/foret.png" alt="Forêt" class="img-fluid">
                        <div class="gallery-overlay">
                            <h5 class="text-white">Forêt</h5>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="/appsem/archives.php" class="btn btn-primary">Voir toute la galerie</a>
            </div>
        </div>
    </section>

    <!-- Nous soutenir -->
    <section id="soutien" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Nous Soutenir</h2>
            <p class="text-center mb-5">Votre soutien est essentiel pour la formation des futurs prêtres de l'Église</p>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="support-option">
                        <div class="support-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <h4>Dons financiers</h4>
                        <p>Soutenez financièrement la formation des séminaristes et les projets du séminaire.</p>
                        <a href="/appsem/don-argent.php" class="btn btn-outline-primary btn-sm mt-3">Faire un don</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="support-option">
                        <div class="support-icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <h4>Don en nature</h4>
                        <p>Contribuez en offrant des biens matériels utiles à la vie du séminaire (aliments, fournitures, équipements...)</p>
                        <a href="/appsem/don-nature.php" class="btn btn-outline-primary btn-sm mt-3">Faire un don en nature</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="support-option">
                        <div class="support-icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <h4>Parrainage</h4>
                        <p>Parrainez la formation d’un séminariste et accompagnez-le sur le chemin du sacerdoce.</p>
                        <a href="/appsem/parrainage.php" class="btn btn-outline-primary btn-sm mt-3">Parrainer un séminariste</a>
                    </div>
                </div>
            </div>
            
         
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-5">
        <div class="container bg-white rounded shadow p-5">
            <h2 class="section-title text-center mb-4">
            <i class="fas fa-address-book me-2 text-primary"></i>Informations de contact
            </h2>
            <div class="row justify-content-center align-items-stretch">
            <div class="col-lg-6 mb-4">
                <div class="contact-info mb-4 p-4 bg-light rounded shadow-sm">
                <p class="mb-3">
                    <i class="fas fa-map-marker-alt text-primary me-2"></i>
                    <strong>Adresse :</strong> Avenue de la Cathédrale, Mbuji Mayi, République Démocratique du Congo
                </p>
                <p class="mb-3">
                    <i class="fas fa-phone text-primary me-2"></i>
                    <strong>Téléphone :</strong> +243 123 456 789
                </p>
                <p>
                    <i class="fas fa-envelope text-primary me-2"></i>
                    <strong>Email :</strong> <a href="mailto:info@seminairesaintfrancoisxavier.cd" class="text-decoration-none text-dark">info@seminairesaintfrancoisxavier.cd</a>
                </p>
                </div>
                <div class="opening-hours mb-4 p-4 bg-light rounded shadow-sm">
                <h4 class="mb-3"><i class="fas fa-clock text-primary me-2"></i>Heures d'ouverture</h4>
                <ul class="list-unstyled mb-0">
                    <li><strong>Lundi - Vendredi :</strong> 8h00 - 17h00</li>
                    <li><strong>Samedi :</strong> 8h00 - 12h00</li>
                    <li><strong>Dimanche :</strong> Fermé <span class="text-muted">(sauf pour les célébrations)</span></li>
                </ul>
                </div>
                <div class="social-icons mt-4 text-center">
                    <a href="#" class="btn btn-outline-primary btn-circle me-2" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-outline-primary btn-circle me-2" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-outline-primary btn-circle me-2" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="btn btn-outline-primary btn-circle" title="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>

    <!-- Back to top button -->
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

 
    <!-- Custom JavaScript -->
    <script>
        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.querySelector('.navbar').classList.add('scrolled');
            } else {
                document.querySelector('.navbar').classList.remove('scrolled');
            }
            
            // Back to top button
            if (window.scrollY > 300) {
                document.querySelector('.back-to-top').classList.add('show');
            } else {
                document.querySelector('.back-to-top').classList.remove('show');
            }
        });
        
        // Back to top functionality
        document.querySelector('.back-to-top').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                if (this.getAttribute('href') !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });
        
        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Merci pour votre message. Nous vous répondrons dans les plus brefs délais.');
            this.reset();
        });
        
        // Active nav link based on scroll position
        window.addEventListener('scroll', function() {
            let current = '';
            const sections = document.querySelectorAll('section');
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 100)) {
                    current = section.getAttribute('id');
                }
            });
            
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
