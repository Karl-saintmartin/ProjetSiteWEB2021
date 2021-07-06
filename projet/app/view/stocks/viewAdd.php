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
    <h3>Attribution d'un vaccin à un centre</h3>
    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='stocksAdded'>
        
   
    
                <label for="producteur_id">Quel vaccin ajouter ? </label>
        <select class="form-control" id='vaccin_id' name='vaccin_id' style="width: 600px">
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
                   <label for="producteur_id">Quel centre ajouter ? </label>
                       <select class="form-control" id='centre_id' name='centre_id' style="width: 600px">
            <?php
          
       
        
        while ($row = $results2->fetch())
        {
      
            for ($counter = 0; $counter < $results2->columnCount(); $counter +=3) 
            {
                $c = $counter + 1;
                $d = $counter + 2;
              
                
                echo ("<option value =$row[$counter] >$row[$counter] $row[$c] $row[$d]  .</option>");
            
            }
           
            }
            ?>
        </select>
                          

        
        <label for="id">Quantité à ajouter : </label><input type="number" class="form-control" name='quantite' placeholder='400' required>
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Ajouter</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>