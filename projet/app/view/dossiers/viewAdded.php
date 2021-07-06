
<!-- ----- début viewAdded -->
<?php
require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCovidMenu.html';
    include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    echo(" <div class='container'>");
      echo(  "<div class='panel panel-default'>");
        echo(  "<div class='panel-heading'>");
            echo("<h3 class='panel-title'>Patient et doses</h3>");
         echo( "</div>");
          echo("<div class='panel-body'>");
     
  echo("patient = ");
    echo($_GET['patient_id']);
    $results7 = $_GET['patient_id'];
    echo("<br/>");
    echo("Nombre de doses reçues = ");
    echo($results2);
 
  
 echo("</div>");
  echo("</div>");
    echo("</div>"); 
        
        if ($results3B != "BINGO" && $results2 != $results3B ){
              echo(" <div class='container'>");
      echo(  "<div class='panel panel-default'>");
        echo(  "<div class='panel-heading'>");
            echo("<h3 class='panel-title'>Vaccin</h3>");
         echo( "</div>");
          echo("<div class='panel-body'>");
        echo("Vaccin numéro :");
        echo("<br/>");
        echo($results3);
        echo("<br/>");
        echo("Ce vaccin nécessite le nombre de doses suivantes :");
        echo("<br/>");
         echo($results3B);
         
          echo("</div>");
  echo("</div>");
    echo("</div>"); 
        
        }
        if ($results2 >= $results3B)
    {
         echo(" <div class='container'>");
      echo(  "<div class='panel panel-default'>");
        echo(  "<div class='panel-heading'>");
            echo("<h3 class='panel-title'>Patient OK</h3>");
         echo( "</div>");
          echo("<div class='panel-body'>");
        echo("Le patient a reçu toutes ses doses.");
  
         echo("</div>");
  echo("</div>");
    echo("</div>"); 
    }
    
    else{
    if ($results3B == "BINGO"){
         echo("<form role='form' method='get' action='router2.php'>");
     echo("<div class='form-group'>");
      echo("<input type='hidden' name='action' value='dossiersAdded3'>");
        echo("<input id='doses' name='doses' type='hidden' value=$results2>");
                echo("<input id='patient_id' name='patient_id' type='hidden' value= $results7 >");
      
          echo( " <label for='centre_id'>Quel centre ? : </label>");
       echo( "<select class='form-control' id='centre_id' name='centre_id' style='width: 600px'>");
        
          
       
        
        while ($row = $results4->fetch())
        {
      
            for ($counter = 0; $counter < $results4->columnCount(); $counter +=2) 
            {
                $c = $counter + 1;
           
                 
              
                
                echo ("<option value =$row[$counter] >$row[$counter] $row[$c]   </option>");
            
            }
           
            }
            

          echo(" </select>");
      echo("<br/>");
      echo ( "<button class='btn btn-primary' type='submit'>Valider rendez-vous</button>");
          echo("</form>");
        
        
    }
    else{
         echo("<form role='form' method='get' action='router2.php'>");
     echo("<div class='form-group'>");
      echo("<input type='hidden' name='action' value='dossiersAdded2'>");
      
        echo("<input id='doses' name='doses' type='hidden' value=$results2>");
           echo("<input id='vaccin_id' name='vaccin_id' type='hidden' value= $results3 >");
           echo("<input id='patient_id' name='patient_id' type='hidden' value= $results7 >");
     
        
        echo( " <label for='centre_id'>Quel centre ? : </label>");
       echo( "<select class='form-control' id='centre_id' name='centre_id' style='width: 600px'>");
        
          
       
        
        while ($row = $results4->fetch())
        {
      
            for ($counter = 0; $counter < $results4->columnCount(); $counter +=3) 
            {
                $c = $counter + 1;
                 $d = $counter + 2;
               
              
                
                echo ("<option value =$row[$counter] >$row[$counter] $row[$c] $row[$d]  </option>");
            
            }
           
            }
            
       echo(" </select>");
       echo("<br/>");
       echo ( "<button class='btn btn-primary' type='submit'>Ajouter</button>");
          echo("</form>");
    }
        
        
    
    
    

    echo("</div>");
    }
    echo("</div>");
    include $root . '/app/view/fragment/fragmentCovidFooter.html';
    ?>
    <!-- ----- fin viewAdded -->   

    
    