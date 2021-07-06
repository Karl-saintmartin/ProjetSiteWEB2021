<!-- ----- debut de la page documentation -->
<?php include '../../app/view/fragment/fragmentCovidHeader.html'; ?>
<body>
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="../../app/router/router2.php?action=covidAccueil">Karl Hugo</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                 aria-haspopup="true" aria-expanded="false">Gestion des vaccins <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../../app/router/router2.php?action=vaccinsReadAll">Liste des vaccins</a></li>
                <li><a href="../../app/router/router2.php?action=vaccinsCreate">Ajout d'un vaccin</a></li>    
                <li><a href="../../app/router/router2.php?action=vaccinsUpdate">Mise à jour d'un vaccin</a></li>   
              </ul>
            </li>   
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                 aria-haspopup="true" aria-expanded="false">Gestion des centres <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                       <li><a href="../../app/router/router2.php?action=centresReadAll">Liste des centres</a></li>
                <li><a href="../../app/router/router2.php?action=centresCreate">Ajout d'un centre</a></li>   

              </ul>
            </li>  
               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                 aria-haspopup="true" aria-expanded="false">Gestion des patients <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="../../app/router/router2.php?action=patientsReadAll">Liste des patients</a></li>
                <li><a href="../../app/router/router2.php?action=patientsCreate">Ajout d'un patient</a></li>   
              </ul>
            </li>  
                  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                 aria-haspopup="true" aria-expanded="false">Gestion des stocks <span class="caret"></span></a>
                  <ul class="dropdown-menu">
           <li><a href="../../app/router/router2.php?action=stocksReadAll">Liste des centres avec le nombre de doses de chaque vaccin</a></li>
                <li><a href="../../app/router/router2.php?action=stocksReadGlobal">Nombre global de doses des centres</a></li> 
                 <li><a href="../../app/router/router2.php?action=stocksAdd">Attribution de vaccins pour un centre</a></li> 

              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                 aria-haspopup="true" aria-expanded="false">Gestion des rendez-vous <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><a href="../../app/router/router2.php?action=dossiersAdd"> Dossier de vaccination d'un patient</a></li>
                  </ul>
            </li>

           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                 aria-haspopup="true" aria-expanded="false">Mes innovations <span class="caret"></span></a>
              <ul class="dropdown-menu">            
                <li><a href="../../app/router/router2.php?action=dossiersReadAll">Liste des rendez-vous</a></li>
                <li><a href="../../app/router/router2.php?action=innovationsReadCentre">Graphique des vaccins par centre</a></li>
                <li><a href="../../app/router/router2.php?action=innovationsReadCentreAdress">Adresses des centres</a></li>
              </ul>
            </li>


            <li><a href="documentation.php">Documentation</a></li>
          </ul>
        </div>
      </nav>
      
      <?php
    include '../../app/view/fragment/fragmentCovidJumbotron.html';
    ?>
    
    <h2 style="text-align: center;">Documentation du projet</h2>
    <br> <br> <br> <br> 
    
    
    
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Partie Innovation</h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <ul>
                    <li>Innovation 1 : Liste des Rendez-vous<br> <br> 
                    Cette première innovation est destinée à avoir un point de vue direct sur la liste des rendez-vous pris. On retrouve un tableau avec les identifiants et 
                    les noms des centres, patients, et vaccins à injecter. L'idée de ce tableau est de pouvoir saisir directement, en un coup d'oeil, les rendez-vous planifiés, dans quel centre, avec quel vaccin. 
                    Du côté code, on a réutilisé l'architecture MVC avec la partie Dossiers, puisque c'est cette partie que notre innovation concerne. On a à cet effet modifié la fonction getAll() du ModelDossiers pour que
                    les bonnes valeurs soient renvoyées. On a enfin permis l'affichage avec un viewAll du dossier "dossiers" qui nous permet den transmettre les bonnes informations dans un tableau. On a alors
                    centre_id, le nom du centre, patient_id, le nom du patient, le numéro de l'injection, vaccin_id et enfin le nom du vaccin.</li><br><br> 
                    <li>Innovation 2 : Graphique des vaccins par centre<br><br>
                    Nous n'avions pas vraiment d'idée pour cette seonde innovation. Il nous fallait quelque chose qui différait de la première créée. C'est alors que nous avons pensé à un graphique.
                    En effet, on traite des données tout au long de ce projet. Des quantités de vaccin, des quantités de doses, de rendez-vous, etc... On a donc essayé de passer tout d'abord par PHP pour créer un graphique.
                    Or, on s'est vite rendus compte que c'était bien trop compliqué. Effectivement, c'est quelque chose que nous n'avions jamais fait; après moultes recherches, nous avons trouvé la solution d'une bibliothèque PHP
                    à intégrer au serveur. Nous avons rapidement testé jpgraph, en essayant de l'upload sur le serveur. Or, l'utilisation était vraiment compliquée. On avait vu passer sur un forum la mention de l'utilisation
                    de javascript à la place, en faisant appel à une bibliothèque également, mais de façon beaucoup plus simple. Et en effet, ça l'était. La principale difficulté aura été d'intégrer une fonction génératrice de couleurs aléatoires
                    en javascript, et à l'intérieur du script, tenir compte d'un nombre changeant de vaccins dans la table avec une variable. Une fois que nous avons compris cela, on a pu implémenter cette fonctionalité en 
                    ajoutant quelques options à l'affichage, pour que le diagramme soit centré. L'avantage de cette solution est qu'elle est légère, interactive, et qu'au final on puisse choisir un centre facilement
                    pour voir les doses en stock. On lit également facilement les données en survolant avec la souris le diagramme.</li><br><br> 
                    <li>Innovation 3 : Adresses des centres<br><br> 
                    Pour cette troisième innovation, nous avions tout d'abord pensé à inclure un autre graphique, d'une sorte différente, qui permette d'afficher d'autres données. Cependant, nous avons eu
                    peur qu'en répétant quelque peu la procédure, on n'aurait pas suffisamment innové. On a alors regardé l'ensemble du site, les fonctionnalités qu'il proposait. Et c'est là que l'idée nous est venue. 
                    En effet, on a des listes de vaccins, de centres, de patients. On a également quelques données sur les centres, comme leur adresse. Il nous paraissait challengeant d'essayer
                    de produire un lien pour chaque centre, qui redirigerait vers Google Maps. Ce lien serait adapté à chaque centre, mais pas manuellement. C'est là  que réside le plus intéressant.
                    Ce lien est généré automatiquement avec l'adresse du centre correspondant. Si d'autres centres sont ajoutés, ceux-ci auront également leur lien vers Google Maps. C'est cela qu'il
                    a été compliqué de programmer. On a également intégré le lien sur une petite image Google Maps pour que ce soit plus lisible.</li><br><br> 
                </ul>
            </table>
        </div>
    </div>
    <br><br><br><br>
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Point de vue global sur le projet et amélioration</h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <p>Ce projet nous aura permis d'apprendre l'organisation et la cohésion de groupe. Nous avons pu 
                    perfectionner notre maîtrise dans la gestion de projet type MVC avec son arboresence, ainsi 
                    que l'utilisation poussée du php et des requêtes SQL. Nous avons pu également intégrer un script javascript 
                    en le mélangeant à nos données php, ce qui nous aura à nouveau permis d'affiner nos talent de programmeurs en herbe.
                    Notre projet reste néanmoins imparfait, en effet nous pourrions ajouter des éléments graphiques afin de le rendre
                    plus attrayant ou même quelques fonctionnalitées comme :
                </p>
                <br>
                <ul>
                    <li>L'ajout d'une valeur dans la table rendezvous permettant de gérer les dates des rendez-vous. On pourrait ainsi
                    entrevoir la possibilité de réaliser des graphiques sur le nombre de personnes vaccinées (ici le rendez-vous est 
                    posé mais la personne n'a pas encore reçu sa dose).</li><br>

                    <li>Des informations complémentaires sur l'état du patient (si il à déjà eu le covid ou non) afin de connaître le 
                    nombre de doses à lui administrer (si il l'a déjà eu on ne lui donnera qu'une seule dose par exemple)</li><br>

                    <li>Ajouter une fonctionnalité permettant de proposer la ville du patient lors de la prise de rendez-vous.</li><br>

                    <li>Ajouter des fonctionnalitées de suppressions pour tout, si un patient ne vient jamais, un centre ferme, un vaccin
                    est retiré du marché, etc...</li><br>
                </ul>
            </table>
        </div>
    </div>
    
      
      
      
  </div>   
  
  <?php
  include '../../app/view/fragment/fragmentCovidFooter.html';
  ?>

  <!-- ----- fin de la page documentation -->

</body>
</html>