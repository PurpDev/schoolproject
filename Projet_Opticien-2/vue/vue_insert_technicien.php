<h2> Insertion des Techniciens </h2>

<form method = "post" action = "">
    <table border = "0">
        <tr>
            <td> Nom </td>
            <td> <input type = "text" name ="nom" value =" <?php if($leTechnicien!= null) echo $leTechnicien['nom'];?>"></td>
        </tr>

        <tr>
            <td> Prenom </td>
            <td> <input type = "text" name ="prenom" value =" <?php if($leTechnicien!= null) echo $leTechnicien['prenom'];?>"></td>
        </tr>

        <tr>
            <td> Adresse </td>
            <td> <input type = "text" name ="adresse" value =" <?php if($leTechnicien!= null) echo $leTechnicien['adresse'];?>"></td>
        </tr>

        <tr>
            <td> Email</td>
            <td> <input type = "text" name ="email" value =" <?php if($leTechnicien!= null) echo $leTechnicien['email'];?>"></td>
        </tr>

        <tr>
            <td> Role </td>
            <td> <input type = "text" name ="typerole" value =" <?php if($leTechnicien!= null) echo $leTechnicien['typerole'];?>"></td>
        </tr>

        <tr>
            <td> Diplome</td>
            <td> <input type = "text" name ="diplome" value =" <?php if($leTechnicien!= null) echo $leTechnicien['diplome'];?>"></td>
        </tr>

        <tr>
            <td> <input type = "reset" name = "Annuler" value = "Annuler"></td>
            <td> <input type="submit" 

				    <?php if($leTechnicien!=null) echo ' name = "Modifier" value ="Modifier"';
				    else echo 'name = "Valider" value ="Valider"'; ?>
                
                ></td>
        </tr>


    </table>
</form>