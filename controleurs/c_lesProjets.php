<?php
$action = $_REQUEST['action'];
switch($action)
{
    case 'noDetails':
    {
        include("vues/v_menu.php");
        $lesProjets=$pdo-> getLesProjets();
        include("vues/v_listeProjets.php");
        break;
    }
    case 'details':
    {
       include("vues/v_menu.php");
       $detailsProjets=$pdo->getDetailsProjets();
       include("vues/v_detailsProjets.php");
       break;
    }
}
?>