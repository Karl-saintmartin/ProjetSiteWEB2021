
<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCovidMenu.html';
      include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
      ?>

    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">centre_id</th>
          <th scope = "col">nom du centre</th>
          <th scope = "col">patient_id</th>
          <th scope = "col">nom du patient</th>
          <th scope = "col">injection</th>
          <th scope = "col">vaccin_id</th>
           <th scope = "col">nom du vaccin</th>
   
        </tr>
      </thead>
      <tbody>
          <?php
            while ($row = $results->fetch())
            {
                for ($counter = 0; $counter < $results->columnCount(); $counter +=7) 
                {
                    $c = $counter + 1;
                    $d = $counter + 2;
                    $e = $counter + 3;
                     $f = $counter + 4;
                    $g = $counter + 5;
                    $h = $counter + 6;
                    echo("<tr>");
                    echo ("<td>$row[$counter]</td><td>$row[$c]</td><td>$row[$d]</td><td>$row[$e]</td><td>$row[$f]</td><td>$row[$g]</td><td>$row[$h]</td>");
                    echo("</tr>");
                }
           
            }
            ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  