<?php include 'components/header.php'; ?>
<section class="py-5" style="background: var(--light-color, #f8f9fa); min-height: 100vh;">
    <div class="container" style="max-width: 900px; background: #fff; border-radius: 12px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 40px 30px;">
        <h1 class="section-title" style="color: var(--primary-color); text-align:center; margin-bottom: 2rem;">Le cursus de formation</h1>
        <p class="lead text-center mb-4">Le séminaire propose un parcours complet, alliant formation humaine, spirituelle, intellectuelle et pastorale, pour préparer les séminaristes à leur mission de prêtres.</p>
        <!-- Liens vers les pages des formations -->
        <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
            <a href="/appsem/formation-humaine.php" class="btn btn-outline-primary">Formation Humaine</a>
            <a href="/appsem/formation-spirituelle.php" class="btn btn-outline-primary">Formation Spirituelle</a>
            <a href="/appsem/formation-intellectuelle.php" class="btn btn-outline-primary">Formation Intellectuelle</a>
            <a href="/appsem/formation-pastorale.php" class="btn btn-outline-primary">Formation Pastorale</a>
        </div>
        <div class="mb-4" style="font-size:1.1rem;">
            <ul style="list-style: disc inside;">
                <li><strong>Philosophie</strong> : 2 ans pour acquérir les bases de la pensée chrétienne et de la réflexion morale.</li>
                <li><strong>Théologie</strong> : 4 ans pour approfondir la doctrine catholique, la liturgie, l’Écriture Sainte et la pastorale.</li>
                <li><strong>Vie spirituelle</strong> : retraites, accompagnement, prière quotidienne, sacrements.</li>
                <li><strong>Vie communautaire</strong> : fraternité, services, activités sportives et culturelles.</li>
                <li><strong>Stages pastoraux</strong> : immersion dans les paroisses, missions, apostolat.</li>
            </ul>
            <p>Le cursus est rythmé par des temps forts : conférences, sessions, pèlerinages, et la préparation aux ordinations diaconale et sacerdotale.</p>
        </div>
        <div class="text-center mt-4">
            <a href="/appsem/contact.php" class="btn btn-primary">Demander le programme détaillé</a>
        </div>
    </div>
</section>
<?php include 'components/footer.php'; ?>
