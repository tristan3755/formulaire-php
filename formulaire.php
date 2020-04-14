<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if( isset ($_POST {'prenom'}))  
{
echo 'Vous vous appelez '  .  $_POST {'prenom'};
}

if(empty( $_POST {'prenom'}))
{

    echo 'Vous avez oubliez de renseigner votre prénom';
}      


if(isset( $_POST {'Genre'}))
{
echo ' et vous êtes de sexe ' . $_POST {'Genre'};
}

if(empty( $_POST {'Genre'}))
{

    echo ' .Vous avez oubliez de renseigner votre genre';
}      


if(isset( $_POST {'Pays'}))
{
echo '. Vous vivez actuellement en  ' . $_POST {'Pays'};
}

if(isset( $_POST {'newsletter'}))
{
echo ' et vous vous êtes abonné(e) à la newsletter. ' . $_POST {'newsletter'};
}





?>
 <form action="formulaire.php" method="Post" name="formulaire">
 <br>
<fieldset>
<br>
<legend> Formulaire de renseignement </legend>

 <label for="prenom">Prénom</label> 
 <input type="text" value="" name="prenom">
 <br>
 <br>

 <label for="Genre">Genre</label> 
 
<input type="radio" value="féminin" name="Genre" id="f"> 
<label for="#f">Femme</label> 
<input type="radio" value="masculin" name="Genre" id="m">
<label for="#m">Homme</label> 
<br>
<br>
<label for="Pays">Pays</label> 
<select name="Pays">
<option  value="France"> France </option>
<option  value="Royaume-Uni"> Royaume-Uni </option>
<option  value="Bulgarie"> Bulgarie </option>
<option  value="Suède"> Suède </option>

</select>
<br>
<br>
<label for="newsletter">newsletter</label> 
<input type="checkbox" name="newsletter" value="">

<br>
<br>
<input type="submit" value="envoyer">


</fieldet>


</form>


</body>
</html>



