<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Form 1</title>
</head>
<body>

    <form action="GenerateXMLcode.php" method="post" enctype="multipart/form-data">
       
     
        <center>
            <br>
            <h4>Type  voiture:</h4><br>
            <select name="TypeVoiture">
                
                <option value="Petite cintadine">Petite cintadine</option>
                <option value="Citadine">Citadine</option>
                <option value="Monospace">Monospace</option>
                <option value="Utilitaire">Utilitaire</option>
            </select>
            <br>   <br>

            <div>
            <h4>Date:</h4><br>
                <input type="date"  name="JourReservation"  required>
            </div><br>


            <h4>Opt</h4>

            Avec Plein:<input type="checkbox"  name="Opt[]" value="Avec Plein"> 
           
            | Siege bebe:<input type="checkbox"  name="Opt[]" value="Siege bebe">
            
            | Conducteur:<input type="checkbox"  name="Opt[]" value="Conducteur">
            
           
            <br>

            <h4>Carburant</h4>

            Essence:<input type="radio"  name="Carburant" value="Essence"> 
           
            | Diesel:<input type="radio"  name="Carburant" value="Diesel">
            
            | GPL:<input type="radio"  name="Carburant" value="GPL">
           
            | Electrique:<input type="radio"  name="Carburant" value="Electrique">
           
            <br>


            <br>
            <h4>Demande Specifique</h4>
            <textarea name="DemandeSpecifique"  required></textarea>
            <br><br>

        </center>
        </fieldset>



        <div>
            <center>
            <button type="submit" name="Envoyer" value="Envoyer">Envoyer</button>
            </center>
        </div>
    </form>
    
</body>
</html>

<style>
form {
  /* Uniquement centrer le formulaire sur la page */
  margin: 0 auto;
  width: 400px;
  /* Encadré pour voir les limites du formulaire */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

form div + div {
  margin-top: 1em;
}

label {
  /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
  display: inline-block;
  width: 90px;
  text-align: right;
}



input:focus, textarea:focus {
  /* Pour souligner légèrement les éléments actifs */
  border-color: #000;
}

textarea {
  /* Pour aligner les champs texte multi‑ligne avec leur étiquette */
  vertical-align: top;

  /* Pour donner assez de place pour écrire du texte */
  height: 5em;
}

.button {
  /* Pour placer le bouton à la même position que les champs texte */
  padding-left: 90px; /* même taille que les étiquettes */
}

button {
  /* Cette marge supplémentaire représente grosso modo le même espace que celui
     entre les étiquettes et les champs texte */
  margin-left: .5em;
}

</style>