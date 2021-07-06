<!-- ----- fin ControllerPatients -->

<?php
require_once '../model/ModelPatients.php';

class ControllerPatients{
    
     public static function patientsReadAll() {
  $results = ModelPatients::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/patients/viewAll.php';
  if (DEBUG)
   echo ("ControllerCentres : patientsReadAll : vue = $vue");
  require ($vue);
 }
 
  public static function patientsCreate() {
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/patients/viewInsert.php';
  require ($vue);
 }

 // Affiche un formulaire pour récupérer les informations d'un nouveau vin.
 // La clé est gérée par le systeme et pas par l'internaute
 public static function patientsCreated() {
  // ajouter une validation des informations du formulaire
  $results = ModelPatients::insert(
      htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['prenom']), htmlspecialchars($_GET['adresse'])
  );
  
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/patients/viewInserted.php';
  require ($vue);
 }
}

?>
<!-- ----- fin ControllerPatients -->