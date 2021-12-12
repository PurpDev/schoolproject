<h2> Insertion d'une Reservation  </h2>
<form method="post" action="">
	<table border="0"> 
		<tr>
			<td> horaire </td> 
			<td> <input type="text" name="horaire" value ="<?php if($laReservation!=null) echo $laReservation['horaire'];?>"></td>
		</tr>

		<tr>
			<td> Nom Client </td> 
			<td> 
				<select name = "idPersonne"> 
					<?php
						foreach($lesPersonnes as $unePersonne) {
							echo "<option value ='".$unePersonne['idPersonne']."'>".$unePersonne['nom']."</option>"; 
					}
					?>
				</select>
			</td>
		</tr>

        <tr>
			<td> Email Client </td> 
			<td> 
				<select name = "idPersonne"> 
					<?php
						foreach($lesPersonnes as $unePersonne) {
							echo "<option value ='".$unePersonne['idPersonne']."'>".$unePersonne['email']."</option>"; 
					}
					?>
				</select>
			</td>
		</tr>
		
		<tr>
			<td> Libelle </td> 
			<td> 
				<select name = "idLunette"> 
					<?php
						foreach($lesLunettes as $uneLunette) {
							echo "<option value ='".$uneLunette['idLunette']."'>".$uneLunette['libelle']."</option>"; 
					}
					?>
				</select>
			</td>
		</tr>

        <tr>
			<td> Marque </td> 
			<td> 
				<select name = "idLunette"> 
					<?php
						foreach($lesLunettes as $uneLunette) {
							echo "<option value ='".$uneLunette['idLunette']."'>".$uneLunette['marque']."</option>"; 
					}
					?>
				</select>
			</td>
		</tr>

        <tr>
			<td> Prix </td> 
			<td> 
				<select name = "idLunette"> 
					<?php
						foreach($lesLunettes as $uneLunette) {
							echo "<option value ='".$uneLunette['idLunette']."'>".$uneLunette['prix']."</option>"; 
					}
					?>
				</select>
			</td>
		</tr>

        <tr>
			<td> Disponibilite </td> 
			<td> 
				<select name = "idLunette"> 
					<?php
						foreach($lesLunettes as $uneLunette) {
							echo "<option value ='".$uneLunette['idLunette']."'>".$uneLunette['disponibilite']."</option>"; 
					}
					?>
				</select>
			</td>
		</tr>		

	
		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td> 
			<td> <input type="submit" 

				<?php if($laReservation!=null) echo ' name="Modifier" value="Modifier"';
				else echo ' name="Valider" value="Valider"'; ?>
			></td>

		</tr>
	</table>
</form>




