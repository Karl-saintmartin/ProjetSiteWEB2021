
<!-- ----- début viewInsert -->
 
<?php 
require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCovidMenu.html';
      include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
    ?> 

    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='patientsCreated'>        
        <label for="id">Nom : </label><input type="text" name='nom' size='75' value='Jean'>       
        <br/>
        <br/>
         <label for="id">Prénom : </label><input type="text" name='prenom' size='75' value='Michelle'>       
        <br/>
        <br/>
        <label for="id">Adresse : </label><input type="text" name='adresse' size='100' value='Toulon'>   
              
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

<!-- ----- fin viewInsert -->



