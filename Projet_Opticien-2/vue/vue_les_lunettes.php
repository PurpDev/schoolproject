<h2> Liste des Lunettes</h2>

<table border="1">
		<tr>
			<td>Id Lunette </td> <td> Libelle </td>  <td> Couleur </td> <td> Genre </td> <td> Marque </td>
			<td> Prix </td> <td> Quantite </td> <td> Disponibilite </td> <td> Type de Verre </td> <td> Monture </td> <td> Operation </td> 
		</tr>

		<?php
			foreach ($lesLunettes as $uneLunette) {
				echo "<tr>";

				echo "  <td> ".$uneLunette['idLunette']."</td>
						<td> ".$uneLunette['libelle']."</td>
                        <td> ".$uneLunette['couleur']."</td>
						<td> ".$uneLunette['genre']."</td>
						<td> ".$uneLunette['marque']."</td>
                        <td> ".$uneLunette['prix']."</td>
						<td> ".$uneLunette['quantite']."</td>
						<td> ".$uneLunette['disponibilite']."</td>
                        <td> ".$uneLunette['visionClient']."</td>
                        <td> ".$uneLunette['matiereMonture']."</td>

                ";

				echo "
				<td> <a href='index.php?page=6&action=del&idLunette=".$uneLunette['idLunette']."'><img src='image/del.png' heigth='30' width='30'></a>
				 

					<a href='index.php?page=6&action=edit&idLunette=".$uneLunette['idLunette']."'><img src='image/edit.png' heigth='30' width='30'></a>
				</td>";

				echo "</tr>";
			}
		?>

</table>