<<<<<<< HEAD
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
=======
<div class="container">
   <div class="row">
      <div class="col mx-auto" style="margin-top:100px">
         <?php
            echo"
            <div id='creationCommande'>
            <form method='POST' action='index.php?uc=gererPanier&action=confirmerCommande'>
                  <p>
                  <label for='nom'>Nom *</label>
                  <input id='nom' type='text' name='nom' value='$nom' size='30' maxlength='45'>
                  </p>
                  <p>
                  <label for='rue'>rue*</label>
                  <input id='rue' type='text' name='rue' value='$rue' size='30' maxlength='45'>
                  </p>
                  <p>
                     <label for='cp'> code postal*: </label>
                     <input id='cp' type='text' name='cp' value='$cp' size='5' maxlength='5'>
                  </p>
                  <p>
                     <label for='ville'> ville*: </label>
                     <input id='ville' type='text' name='ville'  value='$ville' size='20' maxlength='20'>
                  </p>
                  <p>
                     <label for='mail'> mail*: </label>
                     <input id='mail' type='text'  name='mail' value='$mail' size ='25' maxlength='25'>
                  </p> 
                  <p>
                     <input type='submit' value='Valider' name='valider'>
                     <input type='reset' value='Annuler' name='annuler'> 
                  </p>
            </form>
            </div>
         ";
         ?>
      </div>
   </div>
>>>>>>> bb2fed33245d3afe40ce3e58ddd1d560f6342841
</div>


