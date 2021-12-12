<h2> Liste des Montures</h2>

<table border="1">
		<tr>
			<td>Id Monture </td> <td>vision </td>
			<td> Couleur  </td> <td> Matiere </td> <td> Laboratoire </td> <td> Operation </td> 
		</tr>

		<?php
			foreach ($lesVerres as $unVerre) {
				echo "<tr>";

				echo "  <td> ".$unVerre['idVerre']."</td>
						<td> ".$unVerre['vision']."</td>
						<td> ".$unVerre['couleur']."</td>
						<td> ".$unVerre['matiere']."</td>
                        <td> ".$unVerre['laboratoire']."</td>

                ";

				echo "
				<td> <a href='index.php?page=4&action=del&idVerre=".$unVerre['idVerre']."'><img src='image/del.png' heigth='30' width='30'></a>
				 

					<a href='index.php?page=4&action=edit&idVerre=".$unVerre['idVerre']."'><img src='image/edit.png' heigth='30' width='30'></a>
				</td>";

				echo "</tr>";
			}
		?>

</table>