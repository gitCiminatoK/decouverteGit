<div id="contenu">
      <h2>Liste des projets </h2>
      <div class="corpsForm">
     <table >
  	   <caption>Descriptif des projets
       </caption>
             <tr>
                <th >Code projet</th>  
                <th >Libellé</th>
                <th>Durée prévue</th>
                <th>Nom employé</th>
                <th>Prénom employé</th>
             </tr>
    <?php    
	   foreach ($detailsProjets as $unDetails) 
           {
                $codeProjet = $unDetails['codeprojet'];
                $nomProjet = $unDetails['nomprojet'];
                $dureeProjet = $unDetails['dureeprevue'];
                $nomEmploye = $unDetails['nom'];
                $prenomEmploye = $unDetails['prenom'];
		?>		
        <tr> <td><?php echo $codeProjet ?></td>
            <td><?php echo $nomProjet ?></td>
            <td><?php echo $dureeProjet ?></td>
            <td><?php echo $nomEmploye ?></td>
            <td><?php echo $prenomEmploye ?></td>
    <?php		      
           }
    ?>	                                      
    </table>
      </div>
</div>