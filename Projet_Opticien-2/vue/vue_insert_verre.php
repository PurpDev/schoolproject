<h2> Insertion d'une paire de Verre </h2>
<form method="post" action="">
	<table border="0"> 
		<tr>
			<td> vision </td> 
			<td> <input type="text" name="vision" value ="<?php if($leVerre!=null) echo $leVerre['vision'];?>"></td>
		</tr>

        <tr>
			<td> couleur </td> 
			<td> <input type="text" name="couleur" value ="<?php if($leVerre!=null) echo $leVerre['couleur'];?>"></td>
		</tr>

        <tr>
			<td> matiere </td> 
			<td> <input type="text" name="matiere" value ="<?php if($leVerre!=null) echo $leVerre['matiere'];?>"></td>
		</tr>

		<tr>
			<td> laboratoire </td> 
			<td> <input type="text" name="laboratoire" value ="<?php if($leVerre!=null) echo $leVerre['laboratoire'];?>"></td>
		</tr>
		
		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td> 
			<td> <input type="submit" 

				<?php if($leVerre!=null) echo ' name="Modifier" value="Modifier"';
				else echo ' name="Valider" value="Valider"'; ?>
            ></td>
		</tr>
	</table>
</form>




