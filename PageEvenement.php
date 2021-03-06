<?php
session_start();
require 'connect.php';
include 'header.php';
?>

<html lang="fr">
  <head>
    <meta charset="utf-8">
    
    <title>Happy Time</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style-templates.css" rel="stylesheet">
  </head>

  <body>

    <div class="jumbotron">
      <div class="container">
          <div id="titre1">
              <h1>
              <?php
              $rq="SELECT ";
              
              ?>
              
              </h1>
          </div>
        
        <p id="titre2">
            Catégorie : Cinéma
        </p>
      </div>
    </div>
    
    <p id='titrerubrique'>Description</p>
    <blockquote id='event'> 
        Marion quitte sa ville natale et toute sa famille pour vivre une nouvelle vie de conseillère en image à Besançon. Elle rencontre alors son nouveau chef, Julien, jeune cadre tout juste débarqué de Paris. Le coup de foudre est immédiat. Seulement, leur parcours sera semé d'embuches. Arriveront-ils à se trouver malgré les difficultés?</p>
    </blockquote>
   
    <p id='titrerubrique'>Date de l'évènement</p>
    <blockquote id='event'> 
        <ul>
            <li> Lundi 23 janvier </li>
            <li> Mardi 24 janvier </li>
        </ul>
        
    </blockquote>
    
    <p id='titrerubrique'>Lieu</p>
    <blockquote id='event'> 
        Cet évènement se deroulera au <br/>
        Cinéma Grosmont <br/>
        Allée du 7ème Art <br/>
        33400	<br/>
        Talence	Aquitaine<br/>
         <a target="_blank" href="https://www.google.fr/maps/place/Cin%C3%A9ma+Gaumont+Talence/@44.811957,-0.591415,17z/data=!3m1!4b1!4m2!3m1!1s0xd5527780ef519b1:0x254f54e406b506b3" role="button">&raquo; Voir sur le plan</a>
    </blockquote>
    
    <p id='titrerubrique'>Prix</p>
    <blockquote id='event'> 
        <h3>7euros par place</h3>
    </blockquote>
    
     <p id='titrerubrique'>S'inscrire à l'évènement</p>
     <blockquote id='event'> 
         <div id="form-event">
                <div class="form-group">
                    <input type="text" placeholder="Identifiant" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Mot de passe" class="form-control" required>
                </div>
             <div class="form-group">
                <select class="form-control">
                <option selected>Nombre de places</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                </select>
            </div>
            <div class="form-group">
                <h5>Prix total : 7euros</h5>
            </div>
             
                <button type="submit" class="btn btn-success">S'incrire à l'évènement</button>
                
        </div>
     </blockquote>
    
  </body>
</html>
