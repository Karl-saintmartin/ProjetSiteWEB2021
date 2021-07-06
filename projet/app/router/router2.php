
<!-- ----- debut Router2 -->
<?php
require ('../controller/ControllerCovid.php');
require ('../controller/ControllerVaccins.php');
require ('../controller/ControllerCentres.php');
require ('../controller/ControllerPatients.php');
require ('../controller/ControllerStocks.php');
require ('../controller/ControllerDossiers.php');
require ('../controller/ControllerInnovations.php');

// --- récupération de l'action passée dans l'URL
// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

// --- On supprime l'élement action de la structure
unset($param['action']);
// --- Tout ce qui reste sont des arguments
$args = $param;

// --- Liste des méthodes autorisées
switch ($action) {
    
    case "vaccinsReadAll";
    case "vaccinsCreate";
    case "vaccinsCreated";
    case "vaccinsUpdate";
    case "vaccinsUpdated";
        ControllerVaccins::$action($args);
        break;
     case "centresReadAll";
    case "centresCreate";
    case "centresCreated";
          ControllerCentres::$action($args);
        break;
      case "patientsReadAll";
    case "patientsCreate";
    case "patientsCreated";
          ControllerPatients::$action($args);
        break;
    
    
      case "stocksReadAll";
          case "stocksReadGlobal";
                 case "stocksAdd";
    case "stocksAdded";
          ControllerStocks::$action($args);
        break;
    
    
    case "dossiersAdd";
    case "dossiersAdded";
    case "dossiersAdded1";
    case "dossiersAdded2";
    case "dossiersAdded3";
    case "dossiersReadAll";
          ControllerDossiers::$action($args);
        break;
    case "innovationsReadCentre";
         case "innovationsReadCentreVaccin";
    case "innovationsReadCentreAdress";
         
         ControllerInnovations::$action($args);
  break;

 // Tache par défaut
 default:

  $action = "covidAccueil";
     ControllerCovid::$action();
}
?>
<!-- ----- Fin Router2 -->

