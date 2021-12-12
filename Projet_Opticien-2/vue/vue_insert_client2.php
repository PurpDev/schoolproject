<h2> Insertion d'un Client</h2>
<form method="post" action="">
	<table border="0"> 
	
		<tr>
			<td> Nom </td> 
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
			<td> Prenom </td> 
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
			<td> Adresse </td> 
			<td> 
				<select name = "idPersonne"> 
					<?php
						foreach($lesPersonnes as $unePersonne) {
							echo "<option value ='".$unePersonne['idPersonne']."'>".$unePersonne['adresse']."</option>"; 
					}
					?>
				</select>
			</td>
		</tr>

        <tr>
			<td> Email </td> 
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
            <td> Age </td>
            <td> <input type = "text" name ="age" value =" <?php if($leClient!= null) echo $leClient['age'];?>"></td>
        </tr>

        <tr>
            <td> Telephone </td>
            <td> <input type = "text" name ="telephone" value =" <?php if($leClient!= null) echo $leClient['telephone'];?>"></td>
        </tr>



		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td> 
			<td> <input type="submit" 

				<?php if($leClient!=null) echo ' name="Modifier" value="Modifier"';
				else echo ' name="Valider" value="Valider"'; ?>
                ></td>
		</tr>
	</table>
</form>




