<?php
//Commentaire pour git
require_once("modele/modele.inc.php");
include("vues/v_entete.php") ;
session_start();
// on se connecte et création de la variable statique $pdo
$pdo = PdoExemple::getPdoExemple();
if(!isset($_REQUEST['do']) || (!isset($_SESSION['nom']) && !isset($_SESSION['prenom'])))
{
    // on n'est pas connecté  
     $_REQUEST['do'] = 'connexion';
}	 
$do = $_REQUEST['do'];
switch($do)
{
    case 'connexion':
    {
        include("controleurs/c_connexion.php");
        break;
    }
    case 'lesProjets':
    {
        include("controleurs/c_lesProjets.php");
        break;
    }
    case 'lesEmployes':
    {
        include("controleurs/c_lesEmployes.php");
        break;
    }
    case 'detailsProjet':
    {
        include("controleurs/c_lesProjets.php");
        break;
    }
}
?>