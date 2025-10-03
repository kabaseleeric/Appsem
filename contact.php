
<?php include 'components/header.php'; ?>

<div class="contact-section" style="background: var(--light-color, #f8f9fa); min-height: 100vh; padding: 60px 0 40px 0;">
	<div class="container" style="max-width: 900px; background: #fff; border-radius: 12px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 40px 30px;">
		<h1 class="section-title" style="color: var(--primary-color); text-align:center; margin-bottom: 2rem;">Nous contacter</h1>
		<div class="row" style="display: flex; flex-wrap: wrap; gap: 40px;">
			<div class="col-md-6" style="flex:1; min-width: 280px;">
				<form method="post" action="" class="contact-form">
					<div class="mb-3">
						<label for="nom" class="form-label">Nom et Prénom *</label>
						<input type="text" class="form-control" id="nom" name="nom" required>
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Adresse mail de contact *</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>
					<div class="mb-3">
						<label for="message" class="form-label">Votre message ou commentaire *</label>
						<textarea class="form-control" id="message" name="message" rows="5" required></textarea>
					</div>
					<div class="form-check mb-3">
						<input class="form-check-input" type="checkbox" id="rgpd" name="rgpd" required>
						<label class="form-check-label" for="rgpd">
							J'accepte que le séminaire enregistre mes données personnelles ci-dessus afin qu'il puisse répondre à ma demande. *
						</label>
					</div>
					<button type="submit" class="btn btn-primary w-100" style="background: var(--primary-color); border:none;">Envoyer</button>
				</form>
			</div>
			<div class="col-md-6" style="flex:1; min-width: 280px; display: flex; flex-direction: column; justify-content: center;">
				<div class="contact-infos" style="font-size: 1.1rem; color: var(--dark-color);">
					<p><strong>Nous appeler :</strong><br><a href="tel:+243123456789" style="color: var(--primary-color); text-decoration: none;">+243 12 34 56 789</a></p>
					<p><strong>Nous envoyer un courrier :</strong><br>Séminaire Saint François Xavier<br>Adresse complète ici<br>Kinshasa, RDC</p>
					<p><strong>Nous écrire un email :</strong><br><a href="mailto:contact@sem-francois-xavier.cd" style="color: var(--primary-color); text-decoration: none;">contact@sem-francois-xavier.cd</a></p>
				</div>
				<div class="contact-map" style="margin-top: 2rem;">
					<!-- Optionnel : intégrer une carte Google Maps ici -->
				</div>
			</div>
		</div>
	</div>
</div>

<style>
.contact-section .form-label {
	font-weight: 600;
	color: var(--primary-color);
}
.contact-section .form-control, .contact-section textarea {
	border-radius: 6px;
	border: 1px solid #ccc;
	margin-bottom: 10px;
}
.contact-section .btn-primary {
	background: var(--primary-color);
	border: none;
	font-weight: 600;
	border-radius: 6px;
	transition: background 0.2s;
}
.contact-section .btn-primary:hover {
	background: var(--secondary-color);
	color: var(--primary-color);
}
.contact-infos a:hover {
	text-decoration: underline;
}
@media (max-width: 768px) {
	.contact-section .row { flex-direction: column; gap: 0; }
	.contact-section .col-md-6 { margin-bottom: 2rem; }
}
</style>

<?php include 'components/footer.php'; ?>