
<?php include 'components/header.php'; ?>

<section class="py-5" style="background: var(--light-color, #f8f9fa); min-height: 100vh;">
	<div class="container" style="max-width: 800px; background: #fff; border-radius: 12px; box-shadow: 0 2px 16px rgba(0,0,0,0.07); padding: 40px 30px;">
		<h1 class="section-title" style="color: var(--primary-color); text-align:center; margin-bottom: 2rem;">Horaires des Messes</h1>
		<div class="table-responsive">
			<table class="table table-bordered text-center align-middle" style="background: #fff;">
				<thead class="table-primary">
					<tr>
						<th>Jour</th>
						<th>Heure</th>
						<th>Lieu</th>
						<th>Type de messe</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Lundi - Samedi</td>
						<td>7h20</td>
						<td>Chapelle du séminaire</td>
						<td>Messe basse</td>
					</tr>
					<tr>
						<td rowspan="3">Dimanche et fêtes</td>
						<td>7h20</td>
						<td>Chapelle du séminaire</td>
						<td>Messe basse</td>
					</tr>
					<tr>
						<td>10h30</td>
						<td>Église paroissiale Saint-François Xavier</td>
						<td>Messe solennelle</td>
					</tr>
					<tr>
						<td>18h30</td>
						<td>Chapelle du séminaire</td>
						<td>Messe basse</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="alert alert-info mt-4" style="background: var(--secondary-color, #c19a6b); color: #fff; border: none;">
			<strong>Pendant les vacances</strong> (fin juin à mi-septembre, et deux semaines après Noël et Pâques), les messes dominicales de 7h20 et 18h30 ne sont pas assurées.
		</div>
		<div class="mt-4" style="font-size: 1.1rem; color: var(--dark-color);">
			<p>Pour toute question sur les horaires ou les célébrations particulières, n'hésitez pas à <a href="contact.php" style="color: var(--primary-color); text-decoration: underline;">nous contacter</a>.</p>
		</div>
	</div>
</section>

<style>
.table-primary th {
	background: var(--primary-color, #1a3d5d) !important;
	color: #fff !important;
	font-weight: 600;
}
.table-bordered td, .table-bordered th {
	border-color: var(--secondary-color, #c19a6b) !important;
}
.alert-info {
	background: var(--secondary-color, #c19a6b) !important;
	color: #fff !important;
	border: none !important;
}
</style>

<?php include 'components/footer.php'; ?>
