<?php include 'components/header.php'; ?>
<section class="py-5" style="background: var(--light-color, #f8f9fa); min-height: 100vh;">
    <div class="container" style="max-width: 800px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0 mb-4" style="margin: 0 auto;">
                    <div class="card-body">
                        <h5 class="card-title mb-3" style="color: var(--primary-color); text-align:center;">Formulaire de parrainage</h5>
                        <form>
                            <fieldset class="mb-4 p-3 rounded" style="background: #f8f9fa; border: 1px solid #eee;">
                                <legend class="fs-6 mb-3" style="color: var(--primary-color); font-weight: 600;">Informations du parrain / de la marraine</legend>
                                <div class="mb-3">
                                    <label for="nom" class="form-label">Nom et prénom</label>
                                    <input type="text" class="form-control" id="nom" name="nom" required placeholder="Ex : Jean Kabila">
                                </div>
                                <div class="mb-3">
                                    <label for="telephone" class="form-label">Téléphone</label>
                                    <input type="tel" class="form-control" id="telephone" name="telephone" pattern="[0-9+ ]{6,}" required placeholder="Ex : +243 900 000 001">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Adresse email</label>
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="Ex : jean@email.com">
                                </div>
                            </fieldset>
                            <fieldset class="mb-4 p-3 rounded" style="background: #f8f9fa; border: 1px solid #eee;">
                                <legend class="fs-6 mb-3" style="color: var(--primary-color); font-weight: 600;">Informations du séminariste</legend>
                                <div class="mb-3">
                                    <label for="seminariste" class="form-label">Nom complet du séminariste</label>
                                    <input type="text" class="form-control" id="seminariste" name="seminariste" required placeholder="Ex : Paul Ilunga">
                                </div>
                            </fieldset>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message (optionnel)</label>
                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Votre message (optionnel)"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Devenir parrain / marraine</button>
                        </form>
                        <p class="mt-3 mb-0 text-muted" style="font-size:0.95rem; text-align:center;">Nous vous contacterons pour vous présenter un séminariste à parrainer et vous expliquer la démarche.</p>
                    </div>
                </div>
                <div class="alert alert-info text-center" style="background: var(--secondary-color, #c19a6b); color: #fff; border: none;">
                    Pour toute question sur le parrainage, écrivez-nous à <a href="mailto:contact@sem-francois-xavier.cd" style="color: #fff; text-decoration: underline;">contact@sem-francois-xavier.cd</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php  include 'components/footer.php'; ?>