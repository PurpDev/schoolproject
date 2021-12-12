
<?php
    require_once("vue/vue_modele_site.php");

    
?>

<center>
<h2>Inscription</h2>
<form method="post" action="">
    <table border="0">
        <tr>
            <td>Nom </td>
            <td><input type="text" name="nom"></td>
        </tr>
        <tr>
            <td>Prenom</td>
            <td><input type="text" name="prenom"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>

        <tr>
            <td>mdp</td>
            <td><input type="text" name="mdp"></td>
        </tr>

        <tr>
        <td>role</td>
			<td>
				<select name="role">
					<?php
					// foreach ($lesUsers as $uneSalle) {
						// echo "<option value= '".$uneSalle['role']."'>".$uneSalle['role']."</option>";
                        echo "<option value='user'>user</option>";
					// }
					?>
				</select>
			</td>
		</tr>
       
        <tr>
            <td><input type="reset" name="annuler"></td>
            <td><input type="submit"  name="Valider" value="Valider"; ></td>
        </tr>




    </table>
 


</form>
</center>