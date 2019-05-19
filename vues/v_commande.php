<?php
echo"
<div id='creationCommande'>
<form method='POST' action='index.php?uc=gererPanier&action=confirmerCommande'>
   <fieldset>
     <legend>Commande</legend>
	   <p>
       <label for='idPharmacien'>Quel est votre identifiant ?</label>
       <input id='idPharmacien' type='text' name='idPharmacien' value='$idPharmacien' size='30' maxlength='35'>
       </p>
	  <p>
         <input type='submit' value='Valider' name='valider'>
         <input type='reset' value='Annuler' name='annuler'> 
      </p>
</form>
</div>
";
?>



