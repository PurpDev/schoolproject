<h2> Liste des RDVS </h2>

<table border="1">
		<tr>
			<td>Id RDV </td> <td> motif </td>  <td> dateRDV </td> <td> heuredebut </td> <td> heurefin </td>
			<td> nomClient </td> <td> prenomClient </td> <td> nomMagasin </td> <td> Tel Magasin </td>  <td> Operation </td> 
		</tr>

		<?php
			foreach ($lesRDVs as $unRDV) {
				echo "<tr>";

				echo "  <td> ".$unRDV['idRDV']."</td>
						<td> ".$unRDV['motif']."</td>
                        <td> ".$unRDV['dateRDV']."</td>
						<td> ".$unRDV['heuredebut']."</td>
						<td> ".$unRDV['heurefin']."</td>
                        <td> ".$unRDV['nomClient']."</td>
						<td> ".$unRDV['prenomClient']."</td>
						<td> ".$unRDV['nomMagasin']."</td>
                        <td> ".$unRDV['telMagasin']."</td>
                ";

				echo "
				<td> <a href='index.php?page=7&action=del&idRDV=".$unRDV['idRDV']."'><img src='image/del.png' heigth='30' width='30'></a>
				 

					<a href='index.php?page=7&action=edit&idRDV=".$unRDV['idRDV']."'><img src='image/edit.png' heigth='30' width='30'></a>
				</td>";

				echo "</tr>";
			}
		?>

</table>