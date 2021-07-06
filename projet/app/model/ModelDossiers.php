<!-- ----- debut ModelDossiers -->
<?php
require_once 'Model.php';

class ModelDossiers{
    
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
 
 function setPatient_id($patient_id) {
  $this->patient_id = $patient_id;
 }
 
 function setInjection($injection) {
  $this->injection = $injection;
 }
   function setVaccin_id($vaccin_id) {
  $this->vaccin_id = $vaccin_id;
 }
    
   
 
 
  function getCentre_id() {
  return $this->centre_id;
 }
 
 function getPatient_id() {
  return $this->patient_id;
 }
 
 function getInjection() {
  return $this->injection;
 }
 
  function getVaccin_id() {
  return $this->vaccin_id;
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
   $query = "select r.centre_id,c.label, r.patient_id,p.nom, r.injection, r.vaccin_id,v.label from rendezvous as r, patient as p, vaccin as v, centre as c WHERE r.centre_id = c.id and r.patient_id = p.id and r.vaccin_id = v.id  ";
   $statement = $database->prepare($query);
   $statement->execute();
   return $statement;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
    public static function getPatients() {
  try {
   $database = Model::getInstance();
   $query = "select  p.id, p.nom, p.prenom from patient as p ";
   $statement = $database->prepare($query);
   $statement->execute();
   return $statement;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
  public static function getNumber($patient_id) {
  try {
   $database = Model::getInstance();
   $query = "select  COUNT(r.injection) from rendezvous as r where r.patient_id = :patient_id  ";
   $statement = $database->prepare($query);
   $statement->execute(
           [
               'patient_id' => $patient_id
               
           ]
           
           );
     $results = $statement->fetch();
     $results2 = $results['0'];
   return $results2;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
   public static function getNumber2($patient_id) {
  try {
   $database = Model::getInstance();
   $query = "select r.vaccin_id from rendezvous as r where r.patient_id = :patient_id  ";
   $statement = $database->prepare($query);
   $statement->execute(
           [
               'patient_id' => $patient_id
               
           ]
           
           );
     $results = $statement->fetch();
     $results2B = $results['0'];
   return $results2B;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
   public static function getNumber3($resultats3) {
  try {
   $database = Model::getInstance();
   $query = "select v.doses from vaccin as v left join rendezvous as r on r.vaccin_id = :vac and v.id = r.vaccin_id  ";
   $statement = $database->prepare($query);
   $statement->execute(
           [
               'vac' => $resultats3
               
           ]
           
           );
     $results = $statement->fetch();
     $results2C = $results['0'];
   return $results2C;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
  
    public static function getListe($results2, $results3) {
  try {
   $database = Model::getInstance();
   
   $query = "select c.id, c.label, s.quantite from centre as c , stock as s where s.quantite >= :inject and  s.vaccin_id = :vac and c.id = s.centre_id  group by c.label order by s.quantite DESC  ";
    $statement = $database->prepare($query);
   $statement->execute(
           [
               'inject' => $results2,
               'vac' => $results3
           ]
           );
   

      
        
   
   return $statement;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
     public static function getListe2() {
  try {
   $database = Model::getInstance();
   
         $query = "select c.id, c.label from centre as c left join stock as s on c.id = s.centre_id left join vaccin as v on s.quantite >= v.doses and v.id = s.vaccin_id group by c.label";
          $statement = $database->prepare($query);
   $statement->execute();
   
   return $statement;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
      public static function getListe3($centre_id) {
  try {
   $database = Model::getInstance();
   
         $query = "select v.id from vaccin as v, centre as c ,stock as s where c.id = :centre_id and s.centre_id = c.id and v.id = s.vaccin_id and NOT EXISTS(select v2.id, v2.label from vaccin as v2, centre as c2 , stock as s2 where c2.id = :centre_id and s2.centre_id = c2.id and v2.id = s2.vaccin_id and s2.quantite > s.quantite )  ";
          $statement = $database->prepare($query);
   $statement->execute(
           [
           'centre_id' => $centre_id
           ]
           );
  $results = $statement->fetch();
     $results2C = $results['0'];
   return  $results2C;
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
 

 
     
     public static function update($centre_id, $vaccin_id) {
  

  try {
   $database = Model::getInstance();

   // ajout d'un nouveau tuple;
   $query = "UPDATE `saint_mk`.`stock` SET `quantite` = `quantite` - 1  WHERE `stock`.`centre_id` = :centre_id AND `stock`.`vaccin_id` = :vaccin_id; ";
   $statement = $database->prepare($query);
   $statement->execute([
     'vaccin_id' => $vaccin_id,
     'centre_id' => $centre_id
   ]);
   return $centre_id;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }
    public static function insert($patient_id, $doses ,$vaccin_id,$centre_id ) {
        try {
            $database = Model::getInstance();

            // ajout d'un nouveau tuple;
            $resultsA = $doses + 1 ;
            $query = "insert into rendezvous value (:centre_id, :patient_id, :injection,  :vaccin_id)";
            $statement = $database->prepare($query);
            $statement->execute([
              'centre_id' => $centre_id,
                'vaccin_id' => $vaccin_id,  
              'injection' => $resultsA,
                'patient_id' => $patient_id
            
            ]);
            return $vaccin_id;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return $e->getCode();
        }
    }
}

?>
<!-- ----- fin ModelDossiers -->