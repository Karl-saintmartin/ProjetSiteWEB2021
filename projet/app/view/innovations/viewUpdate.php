<?php 
require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCovidMenu.html';
      include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
   
   
    ?> 
    <h3>Ajout d'une récolte dans la base de données</h3>
    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='vaccinsUpdated'>
        
   
    
                <label for="id">vaccin à modifier : </label>
        <select class="form-control" id='producteur_id' name='id' style="width: 600px">
            
            <?php
          
       
        
        while ($row = $results->fetch())
        {
      
            for ($counter = 0; $counter < $results->columnCount(); $counter +=3) 
            {
                $c = $counter + 1;
                $d = $counter + 2;
              
                
                echo ("<option value =$row[$counter] >$row[$counter] $row[$c] $row[$d] </option>");
                
            
            }
           
            }
            ?>
        </select>
          

        <label for="doses">doses : </label><input type="number" class="form-control" name='doses' placeholder='400' required>
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Ajouter</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>