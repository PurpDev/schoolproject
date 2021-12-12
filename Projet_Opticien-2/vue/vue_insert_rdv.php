<h2> Insertion d'un RDV </h2>
<form method="post" action="">
	<table border="0"> 
		<tr>
			<td> motif </td> 
			<td> <input type="text" name="motif" value ="<?php if($leRDV!=null) echo $leRDV['motif'];?>"></td>
		</tr>

		<tr>
			<td> dateRDV </td> 
			<td> <input type="text" name="dateRDV" value ="<?php if($leRDV!=null) echo $leRDV['dateRDV'];?>"></td>
		</tr>

		<tr>
			<td> heuredebut </td> 
			<td> <input type="text" name="heuredebut" value ="<?php if($leRDV!=null) echo $leRDV['heuredebut'];?>"></td>
		</tr>
		<tr>
			<td> heurefin </td> 
			<td> <input type="text" name="heurefin" value ="<?php if($leRDV!=null) echo $leRDV['heurefin'];?>"></td>
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
			<td> Prenom Client </td> 
			<td> 
				<select name = "idPersonne"> 
					<?php
						foreach($lesPersonnes as $unePersonne) {
							echo "<option value ='".$unePersonne['idPersonne']."'>".$unePersonne['prenom']."</option>"; 
					}
					?>
				</select>
			</td>
		</tr>

		
		<tr>
			<td> Nom Magasin </td> 
			<td> 
				<select name = "idMagasin"> 
					<?php
						foreach($lesMagasins as $unMagasin) {
							echo "<option value ='".$unMagasin['idMagasin']."'>".$unMagasin['nom']."</option>"; 
					}
					?>
				</select>
			</td>
		</tr>

        <tr>
			<td> Tel Magasin </td> 
			<td> 
				<select name = "idMagasin"> 
					<?php
						foreach($lesMagasins as $unMagasin) {
							echo "<option value ='".$unMagasin['idMagasin']."'>".$unMagasin['telephone']."</option>"; 
					}
					?>
				</select>
			</td>
		</tr>


		

		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td> 
			<td> <input type="submit" 

				<?php if($leRDV!=null) echo ' name="Modifier" value="Modifier"';
				else echo ' name="Valider" value="Valider"'; ?>
			></td>

		</tr>
	</table>
</form>




