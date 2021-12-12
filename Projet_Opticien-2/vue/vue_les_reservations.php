<h2> Liste des Reservations </h2>

<table border="1">
		<tr>
			<td>Id Reservation </td> <td> Horaire </td>  <td> Nom Client </td> <td> Email Client </td> <td> Libelle </td>
			<td> Marque </td> <td> Prix </td> <td> Disponibilite </td> <td> Operation </td> 
		</tr>

		<?php
			foreach ($lesReservations as $uneReservation) {
				echo "<tr>";

				echo "  <td> ".$uneReservation['idReservation']."</td>
						<td> ".$uneReservation['horaire']."</td>
                        <td> ".$uneReservation['nomClient']."</td>
						<td> ".$uneReservation['mailClient']."</td>
						<td> ".$uneReservation['designation']."</td>
                        <td> ".$uneReservation['marqueLunette']."</td>
						<td> ".$uneReservation['prixLunette']."</td>
						<td> ".$uneReservation['dispoLunette']."</td>
                ";

				echo "
				<td> <a href='index.php?page=8&action=del&idReservation=".$uneReservation['idReservation']."'><img src='image/del.png' heigth='30' width='30'></a>
				 

					<a href='index.php?page=8&action=edit&idReservation=".$uneReservation['idReservation']."'><img src='image/edit.png' heigth='30' width='30'></a>
				</td>";

				echo "</tr>";
			}
		?>

</table>