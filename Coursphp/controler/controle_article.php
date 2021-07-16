<?php
//ajout de la vue
include('../vue/vue_article.php');

//connexion à la BDD
include('../connect/connect_bdd.php');

//test existence des champs 
if(isset($_POST['nom_article']) and isset($_POST['id_article']))
{
//création des 3 variables qui vont récupérer le contenu des super globales POST
$id_article= $_POST['id_article'];
$nom_article=$_POST['nom_article'];
$prix_article=$_POST['prix_article'];
//ajout du model
include('..modele/model_article.php.');
}
else{
//affichage dans la page html de ce que l'on a enregistré en bdd
echo '<p>veuillez ajouter un article</p>';
}
?>