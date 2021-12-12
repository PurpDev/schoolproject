<h2> Liste des Magasins</h2>

<table border="1">
		<tr>
			<td>Id Magasin </td> <td>Nom </td>
			<td> Adresse  </td> <td> Email </td>  <td> Telephone </td> <td> Operation </td> 
		</tr>

		<?php
			foreach ($lesMagasins as $unMagasin) {
				echo "<tr>";

				echo "  <td> ".$unMagasin['idMagasin']."</td>
						<td> ".$unMagasin['nom']."</td>
						<td> ".$unMagasin['adresse']."</td>
						<td> ".$unMagasin['email']."</td>
						<td> ".$unMagasin['telephone']."</td>

                ";

				echo "
				<td> <a href='index.php?page=3&action=del&idMagasin=".$unMagasin['idMagasin']."'><img src='image/del.png' heigth='30' width='30'></a>
				 

					<a href='index.php?page=3&action=edit&idMagasin=".$unMagasin['idMagasin']."'><img src='image/edit.png' heigth='30' width='30'></a>
				</td>";

				echo "</tr>";
			}
		?>

</table>