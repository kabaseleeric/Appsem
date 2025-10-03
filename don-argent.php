<?php include 'components/header.php'; ?>

<section class="py-5" style="background: var(--light-color, #f8f9fa); min-height: 100vh;">
    <div class="container" style="max-width: 800px; background: #fff; border-radius: 12px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 40px 30px;">
        <h1 class="section-title" style="color: var(--primary-color); text-align:center; margin-bottom: 2rem;">Faire un don financier</h1>
        <p class="lead text-center mb-4">Soutenez la mission du Séminaire Saint François Xavier par un don en argent. Votre générosité permet de former les prêtres de demain et de soutenir nos projets éducatifs et pastoraux.</p>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3" style="color: var(--primary-color);">Faire un don en ligne</h5>
                        <form>
                            <div class="mb-3">
                                <label for="montant" class="form-label">Montant du don ($)</label>
                                <input type="number" class="form-control" id="montant" name="montant" min="1" required placeholder="Ex : 50">
                            </div>
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom et prénom</label>
                                <input type="text" class="form-control" id="nom" name="nom" required placeholder="Ex : Jean Mutombo">
                            </div>
                            <div class="mb-3">
                                <label for="telephone" class="form-label">Téléphone</label>
                                <input type="tel" class="form-control" id="telephone" name="telephone" pattern="[0-9+ ]{6,}" required placeholder="Ex : +243 900 000 001">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse email</label>
                                <input type="email" class="form-control" id="email" name="email" required placeholder="Ex : jean@email.com">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Faire un don</button>
                        </form>
                        <p class="mt-3 mb-0 text-muted" style="font-size:0.95rem;">Vos dons sont utilisés exclusivement pour les besoins du séminaire. Merci pour votre soutien !</p>
                    </div>
                </div>
                <div class="alert alert-info text-center" style="background: var(--secondary-color, #c19a6b); color: #fff; border: none;">
                    Pour un don par virement bancaire ou chèque, contactez-nous à <a href="mailto:contact@sem-francois-xavier.cd" style="color: #fff; text-decoration: underline;">contact@sem-francois-xavier.cd</a>
                </div>
            </div>
        </div>

        <!-- Section Mobile Money -->
        <div class="mt-5">
            <h2 class="h4 mb-3" style="color: var(--primary-color); text-align:center;">Faire un don par Mobile Money (RDC)</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            <div class="mb-2 d-flex align-items-center" style="gap: 0; min-height: 40px;">
                                <div style="width: 56px; display: flex; justify-content: center;">
                                    <img src="/appsem/images/airtel-money-logo.png" alt="Airtel" style="height: 40px; background: #fff; border-radius: 6px; display: block;">
                                </div>
                                <div style="display: flex; align-items: center; height: 40px; padding-left: 12px;">
                                    <strong>Airtel Money :</strong> <span style="color: var(--primary-color);">+243 900 000 001</span>
                                </div>
                            </div>
                            <div class="mb-2 d-flex align-items-center" style="gap: 0; min-height: 40px;">
                                <div style="width: 56px; display: flex; justify-content: center;">
                                    <img src="/appsem/images/m-pesa-logo.png" alt="M-Pesa" style="height: 40px; background: #fff; border-radius: 6px; display: block;">
                                </div>
                                <div style="display: flex; align-items: center; height: 40px; padding-left: 12px;">
                                    <strong>M-Pesa :</strong> <span style="color: var(--primary-color);">+243 800 000 002</span>
                                </div>
                            </div>
                            <div class="mb-2 d-flex align-items-center" style="gap: 0; min-height: 40px;">
                                <div style="width: 56px; display: flex; justify-content: center;">
                                    <img src="/appsem/images/orange-money-logo.png" alt="Orange Money" style="height: 40px; background: #fff; border-radius: 6px; display: block;">
                                </div>
                                <div style="display: flex; align-items: center; height: 40px; padding-left: 12px;">
                                    <strong>Orange Money :</strong> <span style="color: var(--primary-color);">+243 700 000 003</span>
                                </div>
                            </div>
                            <p class="text-muted mt-3" style="font-size:0.95rem;">Merci d'indiquer votre nom en référence lors du paiement. Pour toute question ou pour recevoir un reçu, contactez-nous à <a href="mailto:contact@sem-francois-xavier.cd" style="color: var(--primary-color); text-decoration: underline;">contact@sem-francois-xavier.cd</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php  include 'components/footer.php'; ?>