<div id="contenu">
      <h2>Liste des employés informaticiens </h2>
      <div class="corpsForm">
     <table>
       <caption>Informaticiens
       </caption>
             <tr>
                <th >Nom</th>  
                <th >Prénom</th>                
             </tr>
          
    <?php    
	   foreach ($lesEmployes as $unEmploye) 
           {
                $nom = $unEmploye['nom'];
                $prenom = $unEmploye['prenom'];
		?>		
        <tr> <td><?php echo $nom ?></td>
            <td><?php echo $prenom ?></td>
    <?php		 
          
           }
?>	                                      
    </table>
      </div>
</div>