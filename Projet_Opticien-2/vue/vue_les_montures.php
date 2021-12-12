<h2> Liste des Montures</h2>

<table border="1">
		<tr>
			<td>Id Monture </td>
			<td> Forme </td> <td> Matiere </td>  <td> Operation </td>
		</tr>

		<?php
			foreach ($lesMontures as $uneMonture) {
				echo "<tr>";

				echo "  <td> ".$uneMonture['idMonture']."</td>
						<td> ".$uneMonture['forme']."</td>
						<td> ".$uneMonture['matiere']."</td>
                ";

				echo "
				<td> <a href='index.php?page=5&action=del&idMonture=".$uneMonture['idMonture']."'><img src='image/del.png' heigth='30' width='30'></a>
				 

					<a href='index.php?page=5&action=edit&idMonture=".$uneMonture['idMonture']."'><img src='image/edit.png' heigth='30' width='30'></a>
				</td>";

				echo "</tr>";
			}
		?>

</table>