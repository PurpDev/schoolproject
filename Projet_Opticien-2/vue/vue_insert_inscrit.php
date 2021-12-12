<h2> Insertion des Inscrits </h2>

<form method = "post" action = "">
    <table border = "0">
        <tr>
            <td> Nom </td>
            <td> <input type = "text" name ="p_nom" value =" <?php if($laPersonne!= null) echo $laPersonne['p_nom'];?>"></td>
        </tr>

        <tr>
            <td> Prenom </td>
            <td> <input type = "text" name ="p_prenom" value =" <?php if($laPersonne!= null) echo $laPersonne['p_prenom'];?>"></td>
        </tr>

        <tr>
            <td> Adresse </td>
            <td> <input type = "text" name ="p_adresse" value =" <?php if($laPersonne!= null) echo $laPersonne['p_adresse'];?>"></td>
        </tr>

        <tr>
            <td> Email</td>
            <td> <input type = "text" name ="p_email" value =" <?php if($laPersonne!= null) echo $laPersonne['p_email'];?>"></td>
        </tr>


        <tr>
            <td> <input type = "reset" name = "Annuler" value = "Annuler"></td>
            <td> <input type="submit" 

				    <?php if($laPersonne!=null) echo ' name="Modifier" value="Modifier"';
				    else echo ' name="Valider" value="Valider"'; ?>
                
                ></td>
        </tr>


    </table>
</form>