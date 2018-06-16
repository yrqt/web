<?php 
require("header.php");
?>

<div class="title">MamHapi And Co</div>
<?php $products = $DB->query('SELECT * FROM products'); ?>





<div class="home">
	<div class="row">
		<div class="wrap">
			<?php foreach ($products as $product): ?>
				<div class="divProduct">
					<img src="images/<?= $product->ID; ?>.jpg" alt="produit <?= $product->ID; ?>">
					<div class="divNameProduct"><?php echo $product->name; ?></div>
					<div class="divPrice"><?php echo number_format($product->price, 2, ",", " ")."€"; ?></div>
					<a class="divBtnPanier" href="addPanier.php?id=<?= $product->ID; ?>">add</a>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>


<?php require("footer.php"); ?>
