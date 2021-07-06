<!-- ----- début viewAdd -->
<?php 
require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCovidMenu.html';
      include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
   
     
    ?> 
    <h3>Ajout d'une injection dans la base de données patient</h3>
    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='dossiersAdded1'>
        
   
    
                <label for="producteur_id">Quel patient ? </label>
        <select class="form-control" id='patient_id' name='patient_id' style="width: 600px">
            <?php
          
       
        
        while ($row = $results1->fetch())
        {
      
            for ($counter = 0; $counter < $results1->columnCount(); $counter +=3) 
            {
                $c = $counter + 1;
                $d = $counter + 2;
              
                
                echo ("<option value =$row[$counter] >$row[$counter] $row[$c] $row[$d]  .</option>");
            
            }
           
            }
            ?>
        </select>


      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Ajouter</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

    <!-- ----- fin viewAdd -->