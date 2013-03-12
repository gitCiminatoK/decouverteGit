 <!-- Division pour le menu -->
    <div id="menuGauche">
        <ul id="menuList">
            <li >
                 Bienvenu(e) : <?php echo $_SESSION['nom']." ".$_SESSION['prenom'];?>	
            </li>
            <li>
              les projets
                <ul>
                    <li >
                       <a href="index.php?do=lesProjets&action=noDetails" title="Les projets">Sans détails</a>
                    </li>
                    <li>
                       <a href="index.php?do=lesProjets&action=details" title="Les projets">Avec détails</a>
                    </li>  
                </ul>
           </li>
           <li >
              <a href="index.php?do=lesEmployes" title="Les employés">Les employés</a>
           </li>
           <li >
              <a href="index.php?do=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
        </ul>
    </div> 