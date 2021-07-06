<!-- ----- debut ModelStocks -->
<?php
require_once 'Model.php';

class ModelStocks{
    
    private $id, $label, $adresse;
    
     public function __construct($centre_id = NULL, $vaccin_id = NULL, $quantite = NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($centre_id)) {
   $this->centre_id = $centre_id;
   $this->vaccin_id = $vaccin_id;
   $this->quantite = $quantite;
  
  }
 }
 
  function setCentre_id($centre_id) {
  $this->centre_id = $centre_id;
 }
 
   function setVaccin_id($vaccin_id) {
  $this->vaccin_id = $vaccin_id;
 }
 
   function setQuantite($quantite) {
  $this->quantite = $quantite;
 }
 
  function getCentre_id() {
  return $this->centre_id;
 }
 
  function getVaccin_id() {
  return $this->vaccin_id;
 }
   function getQuantite() {
  return $this->quantite;
 }

  public static function getGlobal() {
  try {
   $database = Model::getInstance();
   $query = "select  c.label as nom_de_centre, sum(s.quantite) as total from stock as s  left join centre as c on c.id = s.centre_id group by c.label order by sum(s.quantite) DESC ";
   $statement = $database->prepare($query);
   $statement->execute();
   return $statement;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
   public static function getAll() {
  try {
   $database = Model::getInstance();
   $query = "select  s.quantite, v.label as nom_de_vaccin, c.label as nom_de_centre from vaccin as v  left join stock as s on v.id = s.vaccin_id left join centre as c on c.id = s.centre_id order by c.label";
   $statement = $database->prepare($query);
   $statement->execute();
   return $statement;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
    public static function getVaccins() {
  try {
   $database = Model::getInstance();
   $query = "select  v.id, v.label, v.doses as nom_de_vaccin from vaccin as v ";
   $statement = $database->prepare($query);
   $statement->execute();
   return $statement;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
   public static function getCentres() {
  try {
   $database = Model::getInstance();
   $query = "select  c.id, c.label, c.adresse from centre as c ";
   $statement = $database->prepare($query);
   $statement->execute();
   return $statement;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 

 
     
     public static function update($centre_id, $vaccin_id, $quantite) {
  

  try {
   $database = Model::getInstance();

   // ajout d'un nouveau tuple;
   $query = "UPDATE `saint_mk`.`stock` SET `quantite` = `quantite` + :quantite  WHERE `stock`.`centre_id` = :centre_id AND `stock`.`vaccin_id` = :vaccin_id; ";
   $statement = $database->prepare($query);
   $statement->execute([
     'vaccin_id' => $vaccin_id,
     'centre_id' => $centre_id,
     'quantite' => $quantite
   ]);
   return $vaccin_id;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }
    public static function insert($centre_id, $vaccin_id, $quantite) {
        try {
            $database = Model::getInstance();

            // ajout d'un nouveau tuple;
            $query = "insert into stock value (:centre_id, :vaccin_id, :quantite)";
            $statement = $database->prepare($query);
            $statement->execute([
              'centre_id' => $centre_id,
                'vaccin_id' => $vaccin_id,
              'quantite' => $quantite
            ]);
            return $vaccin_id;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return $e->getCode();
        }
    }
}


?>
<!-- ----- fin ModelStocks -->