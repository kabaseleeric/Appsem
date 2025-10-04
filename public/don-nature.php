<?php include 'components/header.php'; ?>

<section class="py-5" style="background: var(--light-color, #f8f9fa); min-height: 100vh;">
    <div class="container" style="max-width: 800px; background: #fff; border-radius: 12px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 40px 30px;">
        <h1 class="section-title" style="color: var(--primary-color); text-align:center; margin-bottom: 2rem;">Donner en nature</h1>
        <p class="lead text-center mb-4">Vous pouvez soutenir le séminaire en offrant du matériel, des denrées alimentaires, des livres, ou tout autre bien utile à la vie et à la formation des séminaristes.</p>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3" style="color: var(--primary-color);">Proposer un don en nature</h5>
                        <form>
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom et prénom</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>
                            <div class="mb-3">
                                <label for="telephone" class="form-label">Téléphone</label>
                                <input type="tel" class="form-control" id="telephone" name="telephone" pattern="[0-9+ ]{6,}" required placeholder="Ex : +243 900 000 001">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="objet" class="form-label">Nature du don</label>
                                <input type="text" class="form-control" id="objet" name="objet" required placeholder="Ex : livres, riz, matériel informatique...">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message (optionnel)</label>
                                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Proposer mon don</button>
                        </form>
                        <p class="mt-3 mb-0 text-muted" style="font-size:0.95rem;">Nous vous recontacterons rapidement pour organiser la réception de votre don.</p>
                    </div>
                </div>
                <div class="alert alert-info text-center" style="background: var(--secondary-color, #c19a6b); color: #fff; border: none;">
                    Pour toute question sur les dons en nature, contactez-nous à <a href="mailto:contact@sem-francois-xavier.cd" style="color: #fff; text-decoration: underline;">contact@sem-francois-xavier.cd</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php  include 'components/footer.php'; ?>