<?php
    
  
    
    if(isset($_POST['id_article']) and isset($_POST['nom_article']) and isset($_POST['prix_article'])) {

    $id_article= $_POST['id_article'];
    $nom_article=$_POST['nom_article'];
    $prix_article=$_POST['prix_article'];
    
    try{
        $req = $bdd->prepare('INSERT into article (id_article, nom_article, prix_article)values("'.$id_article.'", "'.$nom_article.'","'.$prix_article.'")');

        $req->execute(array('id_article' => iconv("UTF-8", "ISO-8859-1//TRANSLIT", $id_article),
        'nom_article' => iconv("UTF-8", "ISO-8859-1//TRANSLIT", $nom_article),
        'prix_article' => iconv("UTF-8", "ISO-8859-1//TRANSLIT", $prix_article)));

        echo "ajout de l'article : $nom_article qui à comme prix : $prix_article et en ID : $id_article";

    }

    catch(Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}
    else{
    echo '<p>veuillez remplir les champs de formulaire</p>';
}