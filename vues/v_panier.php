<div class="container">
	<div class="row">
		<div class="col text-center" style="margin-top:100px">
			<br/>
			<span style="font-family: Vladimir Script; font-size:40pt">Votre Panier<img src="images/cart.png"	alt="Panier" title="panier" width="100"/><br/>
			<?php
				foreach( $lesProduits as $unProduit) 
				{
					$id = $unProduit->getId();
					$description = $unProduit->getDescription();
					$image = $unProduit->getImage();	
					$quantite = $lesQuantites[$id];
					$url ="<a href=index.php?uc=gererPanier&produit=$id&action=supprimerUnProduit>supprimer </a>";
					
					echo "
							<p><img src=".$image." alt=image width=100	height=100 />
							$description
							Quantite : $quantite
							$url
							</p>";
				}
			?>
			<a style="font-family: Vladimir Script; font-size:20pt" href=index.php?uc=gererPanier&action=passerCommande>Passer la commande</a>
			</div>
		</div>
	</div>
</div>


