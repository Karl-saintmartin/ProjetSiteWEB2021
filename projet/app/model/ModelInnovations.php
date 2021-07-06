<?php
require_once 'Model.php';

class ModelInnovations{
    
    private $id, $label, $adresse;
    
     public function __construct($centre_id = NULL, $patient_id = NULL, $injection = NULL, $vaccin_id = NULL ) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($centre_id)) {
   $this->centre_id = $centre_id;
   $this->patient_id = $patient_id;
   $this->injection = $injection;
     $this->vaccin_id = $vaccin_id;
  
  }
 }
 
  function setCentre_id($centre_id) {
  $this->centre_id = $centre_id;
 }
 
   function setVaccin_id($vaccin_id) {
  $this->vaccin_id = $vaccin_id;
 }
    function setPatient_id($patient_id) {
  $this->patient_id = $patient_id;
 }
   function setInjection($injection) {
  $this->injection = $injection;
 }
 
  function getCentre_id() {
  return $this->centre_id;
 }
 
  function getVaccin_id() {
  return $this->vaccin_id;
 }
 
   function getPatient_id() {
  return $this->patient_id;
 }
 
   function getInjection() {
  return $this->injection;
 }


    public static function getCentre() {
  try {
   $database = Model::getInstance();
   $query = "select c.id, c.label,c.adresse from centre as c";
   $statement = $database->prepare($query);
   $statement->execute();
   return $statement;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
   public static function getCentreVaccin($centre_id) {
  try {
   $database = Model::getInstance();
   $query = "select v.label, s.quantite from vaccin as v left join stock as s on s.centre_id =:centre_id and v.id = s.vaccin_id group by s.vaccin_id ";
   $statement = $database->prepare($query);
   $statement->execute(
           [
               'centre_id' => $centre_id
           ]);
   return $statement;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 public static function getCentresAdress() {
  try {
   $database = Model::getInstance();
   $query = "select  c.label, c.adresse from centre as c ";
   $statement = $database->prepare($query);
   $statement->execute();
   return $statement;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
}
?>