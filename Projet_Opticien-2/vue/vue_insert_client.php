<h2> Insertion des Clients </h2>

<form method = "post" action = "">
    <table border = "0">
        <tr>
            <td> Nom </td>
            <td> <input type = "text" name ="nom" value =" <?php if($leClient!= null) echo $leClient['nom'];?>"></td>
        </tr>

        <tr>
            <td> Prenom </td>
            <td> <input type = "text" name ="prenom" value =" <?php if($leClient!= null) echo $leClient['prenom'];?>"></td>
        </tr>

        <tr>
            <td> Adresse </td>
            <td> <input type = "text" name ="adresse" value =" <?php if($leClient!= null) echo $leClient['adresse'];?>"></td>
        </tr>

        <tr>
            <td> Email</td>
            <td> <input type = "text" name ="email" value =" <?php if($leClient!= null) echo $leClient['email'];?>"></td>
        </tr>

        <tr>
            <td> Role </td>
            <td> <input type = "text" name ="typerole" value =" <?php if($leClient!= null) echo $leClient['typerole'];?>"></td>
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
            <td> <input type = "reset" name = "Annuler" value = "Annuler"></td>
            <td> <input type="submit" 

				    <?php if($leClient!=null) echo ' name="Modifier" value="Modifier"';
				    else echo ' name="Valider" value="Valider"'; ?>
                
                ></td>
        </tr>


    </table>
</form>