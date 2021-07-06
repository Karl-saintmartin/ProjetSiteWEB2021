<?php 
require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCovidMenu.html';
      include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
   
     
    ?> 
    <h3>Choix du centre pour voir ses doses de vaccins : </h3>
    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='innovationsReadCentreVaccin'>
        
   
    
                <label for="centre_id"> Choisissez votre centre</label>
        <select class="form-control" id='centre_id' name='centre_id' style="width: 600px">
            <?php
          
       
        
        while ($row = $results->fetch())
        {
      
            for ($counter = 0; $counter < $results->columnCount(); $counter +=4) 
            {
                $c = $counter + 1;
                $d = $counter + 2;
                $e = $counter + 3;
              
                
                echo ("<option value =$row[$counter] >$row[$counter] $row[$c] $row[$d] $row[$e] .</option>");
            
            }
           
            }
            ?>
        </select>


      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Choisir</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>