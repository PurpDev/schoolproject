<h2> Liste des Techniciens </h2>

<table border = "1">
    <tr>
        <td> Id Technicien </td> <td> Nom</td> <td> Prenom</td>
        <td> Adresse</td> <td>Email</td>  <td>Role</td>  <td> Diplome</td> <td> Operation </td> 
    </tr>

    <?php
        foreach($lesTechniciens as $unTechnicien)
        {
            echo "<tr>";

            echo "  <td> ".$unTechnicien['idPersonne']."</td>
                    <td> ".$unTechnicien['nom']."</td>
                    <td> ".$unTechnicien['prenom']."</td>
                    <td> ".$unTechnicien['adresse']."</td>
                    <td> ".$unTechnicien['email']."</td> 
                    <td> ".$unTechnicien['typerole']."</td>   
                    <td> ".$unTechnicien['diplome']."</td>"
            ;

            echo "
				<td> <a href='index.php?page=1&action=del&idPersonne=".$unTechnicien['idPersonne']."'><img src='image/del.png' heigth='30' width='30'></a>
			        <a href='index.php?page=1&action=edit&idPersonne=".$unTechnicien['idPersonne']."'><img src='image/edit.png' heigth='30' width='30'></a>
				</td>"
            ;

			echo "</tr>";

        }
    ?>


</table>
