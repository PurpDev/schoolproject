<h2> Insertion d'une Monture </h2>
<form method="post" action="">
	<table border="0"> 
		
		<tr>
			<td> Forme Monture </td> 
			<td> <input type="text" name="forme" value ="<?php if($laMonture!=null) echo $laMonture['forme'];?>"></td>
		</tr>
	
        <tr>
			<td> Matiere Monture </td> 
			<td> <input type="text" name="matiere" value ="<?php if($laMonture!=null) echo $laMonture['matiere'];?>"></td>
		</tr>
		
	

		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td> 
			<td> <input type="submit" 

				<?php if($laMonture!=null) echo ' name="Modifier" value="Modifier"';
				else echo ' name="Valider" value="Valider"'; ?>
            ></td>
		</tr>
	</table>
</form>




