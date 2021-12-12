<h2> Insertion d'un Magasin </h2>
<form method="post" action="">
	<table border="0"> 
		<tr>
			<td> Nom </td> 
			<td> <input type="text" name="nom" value ="<?php if($leMagasin!=null) echo $leMagasin['nom'];?>"></td>
		</tr>
		<tr>
			<td> Adresse </td> 
			<td> <input type="text" name="adresse" value ="<?php if($leMagasin!=null) echo $leMagasin['adresse'];?>"></td>
		</tr>
		<tr>
			<td> Email </td> 
			<td> <input type="text" name="email" value ="<?php if($leMagasin!=null) echo $leMagasin['email'];?>"></td>
		</tr>
        <tr>
			<td> Telephone </td> 
			<td> <input type="text" name="telephone" value ="<?php if($leMagasin!=null) echo $leMagasin['telephone'];?>"></td>
		</tr>
		
	

		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td> 
			<td> <input type="submit" 

				<?php if($leMagasin!=null) echo ' name="Modifier" value="Modifier"';
				else echo ' name="Valider" value="Valider"'; ?>
            ></td>
		</tr>
	</table>
</form>




