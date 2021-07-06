
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

    <?php
    if ($results->rowCount()>0)
    {
        echo '<h3>Liste des données correspondantes dans la base</h3>';
        echo '<table class="table table-striped table-bordered">';
        echo '<tr>';
        for ($counter = 0; $counter < $results->columnCount(); $counter ++) 
        {
            echo '<th>'.$results->getColumnMeta($counter)['name'].'</th>';
        }
        echo '</tr>';
        while ($row = $results->fetch())
        {
            echo '<tr>';
            for ($counter = 0; $counter < $results->columnCount(); $counter ++) 
            {
                echo '<td>'.$row[$counter].'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    else
    {
        echo '<h3>Il n\'y a aucune donnée qui correspond à votre demande dans la base de données</h3>';
    }
    ?>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>
<!-- ----- fin viewAll -->