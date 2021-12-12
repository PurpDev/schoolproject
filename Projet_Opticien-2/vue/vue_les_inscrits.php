<h2> Liste des Inscrits </h2>

<form method = "post" action = "">
    Mot de recherche : <input type = "text" name = "mot">
    <input type = "submit" name = "Rechercher" value = "Rechercher">
</form>
<br>

<table border = "1">
    <tr>
        <td> Id Client </td> <td> Nom</td> <td> Prenom</td>
        <td> Adresse</td> <td>Email</td> <td> typerole </td>
    </tr>

    <?php
        foreach($lesPersonnes as $unePersonne)
        {
            echo "<tr>";

            echo "  <td> ".$unePersonne['idPersonne']."</td>
                    <td> ".$unePersonne['p_nom']."</td>
                    <td> ".$unePersonne['p_prenom']."</td>
                    <td> ".$unePersonne['p_adresse']."</td>
                    <td> ".$unePersonne['p_email']."</td>
                    <td> ".$unePersonne['p_typerole']."</td>"
                
            ;

            echo "
				<td> <a href='index.php?page=1&action=del&p_idPersonne=".$unePersonne['p_idPersonne']."'><img src='image/del.png' heigth='30' width='30'></a>
				 

					<a href='index.php?page=1&action=edit&p_idPersonne=".$unePersonne['p_idPersonne']."'><img src='image/edit.png' heigth='30' width='30'></a>
				</td>"
            ;

			echo "</tr>";

        }
    ?>


</table>
