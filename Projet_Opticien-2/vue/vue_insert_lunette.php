<h2> Insertion d'une paire de lunette </h2>
<form method="post" action="">
	<table border="0"> 
		<tr>
			<td> Libelle </td> 
			<td> <input type="text" name="libelle" value ="<?php if($laLunette!=null) echo $laLunette['libelle'];?>"></td>
		</tr>

		<tr>
			<td> Couleur </td> 
			<td> <input type="text" name="couleur" value ="<?php if($laLunette!=null) echo $laLunette['couleur'];?>"></td>
		</tr>

		<tr>
			<td> Genre </td> 
			<td> <input type="text" name="genre" value ="<?php if($laLunette!=null) echo $laLunette['genre'];?>"></td>
		</tr>
		<tr>
			<td> Marque </td> 
			<td> <input type="text" name="marque" value ="<?php if($laLunette!=null) echo $laLunette['marque'];?>"></td>
		</tr>

		<tr>
			<td> Prix </td> 
			<td> <input type="text" name="prix" value ="<?php if($laLunette!=null) echo $laLunette['prix'];?>"></td>
		</tr>

        <tr>
			<td> Quantite </td> 
			<td> <input type="text" name="quantite" value ="<?php if($laLunette!=null) echo $laLunette['quantite'];?>"></td>
		</tr>

        <tr>
			<td> Disponibilite </td> 
			<td> <input type="text" name="disponibilite" value ="<?php if($laLunette!=null) echo $laLunette['disponibilite'];?>"></td>
		</tr>

	

		<tr>
			<td> Type de verre </td> 
			<td> 
				<select name = "idVerre"> 
					<?php
						foreach($lesVerres as $unVerre) {
							echo "<option value ='".$unVerre['idVerre']."'>".$unVerre['vision']."</option>"; 
					}
					?>
				</select>
			</td>
		</tr>

		
		<tr>
			<td> La Monture </td> 
			<td> 
				<select name = "idMonture"> 
					<?php
						foreach($lesMontures as $uneMonture) {
							echo "<option value ='".$uneMonture['idMonture']."'>".$uneMonture['matiere']."</option>"; 
					}
					?>
				</select>
			</td>
		</tr>


		

		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td> 
			<td> <input type="submit" 

				<?php if($laLunette!=null) echo ' name="Modifier" value="Modifier"';
				else echo ' name="Valider" value="Valider"'; ?>
			></td>

		</tr>
	</table>
</form>




