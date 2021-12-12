<h2> Liste des Client </h2>

<form method = "post" action = "">
    Mot de recherche : <input type = "text" name = "mot">
    <input type = "submit" name = "Rechercher" value = "Rechercher">
</form>
<br>

<table border = "1">
    <tr>
        <td> Id Client </td> <td> Nom</td> <td> Prenom</td>
        <td> Adresse</td> <td>Email</td>  <td> Role </td>  <td> Age</td> <td> Telephone</td>  <td> Operation </td> 
    </tr>

    <?php
        foreach($lesClients as $unClient)
        {
            echo "<tr>";

            echo "  <td> ".$unClient['idPersonne']."</td>
                    <td> ".$unClient['nom']."</td>
                    <td> ".$unClient['prenom']."</td>
                    <td> ".$unClient['adresse']."</td>
                    <td> ".$unClient['email']."</td>
                    <td> ".$unClient['typerole']."</td>
                    <td> ".$unClient['telephone']."</td>    
                    <td> ".$unClient['age']."</td>"
            ;

            echo "
				<td> <a href='index.php?page=2&action=del&idPersonne=".$unClient['idPersonne']."'><img src='image/del.png' heigth='30' width='30'></a>
				 

					<a href='index.php?page=2&action=edit&idPersonne=".$unClient['idPersonne']."'><img src='image/edit.png' heigth='30' width='30'></a>
				</td>"
            ;

			echo "</tr>";

        }
    ?>


</table>
