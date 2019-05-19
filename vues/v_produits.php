<div class="container">
	<div class="row">
		<div class="col" style="margin-left:150px;margin-top:50px">
			<div id="produits">
			<?php
			echo "<table>";
			foreach( $lesProduits as $unProduit) 
			{
				$id = $unProduit->getId();
				$description = $unProduit->getDescription();
				$image = $unProduit->getImage();
				$prix = $unProduit->getPrix();
				echo "<form method='POST' action='index.php?uc=voirProduits&idCategorie=$idCategorie&idProduit=$id&action=voirProduitsEtAjouterAuPanier'>";
				echo "<tr>
						<td width=150><img src='$image' alt='image' width='100'	height='100' /></td>
						<td width=100>$description</td>
						<td width=100>$prix €</td>
						<td width=600> Quantite :<input type='text' name='quantite' value ='1' size='2' />
						<input type='submit' value='Commander'  /></td>";
				echo '</tr>';
				echo "</form>";
			}
			?>
			</table>
			</div>
		</div>
	</div>
</div>