<?php
	$this->load->helper('url');
?>
<div id="contenu">
	<h2>Liste des fiches à traiter</h2>

	<?php if(!empty($notify)) echo '<p id="notify" >'.$notify.'</p>';?>

	<table class="listeLegere">
		<thead>
			<tr>
				<th >Mois</th>
				<th >Nom</th>
				<th >Prenom</th>
				<th >Montant</th>
				<th >Derniere date modif.</th>
				<th  colspan="4">Actions</th>
			</tr>
		</thead>
		<tbody>

		<?php
			foreach($mesFiches as $uneFiche)
			{
				$modLink = '';
				$valideLink = '';
				$refuseLink = '';

				$modLink = anchor('c_visiteur/modFiche/'.$uneFiche['mois'], 'modifier',  'title="Modifier la fiche"');
				$valideLink = anchor('c_visiteur/valideFiche/'.$uneFiche['mois'], 'valider',  'title="Valider la fiche"  onclick="return confirm(\'Voulez-vous vraiment valider cette fiche ?\');"');
				$refuseLink = anchor('c_visiteur/refuseFiche/'.$uneFiche['mois'], 'refuser',  'title="Refuser la fiche"  onclick="return confirm(\'Voulez-vous vraiment refuser cette fiche ?\');"');

				echo
				'<tr>
					<td class="date">'.anchor('c_visiteur/voirFiche/'.$uneFiche['mois'], $uneFiche['mois'],  'title="Consulter la fiche"').'</td>
					<td> </td>
					<td> </td>
					<td class="montant">'.$uneFiche['montantValide'].'</td>
					<td class="date">'.$uneFiche['dateModif'].'</td>
					<td class="action">'.$modLink.'</td>
					<td class="action">'.$valideLink.'</td>
					<td class="action">'.$refuseLink.'</td>
				</tr>';
			}
		?>
		</tbody>
    </table>

</div>
