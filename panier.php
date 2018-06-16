<?php require 'header.php'; ?>
<?php var_dump($_SESSION); ?>

<h1>Panier</h1>

<?php 
$ids = array_keys($_SESSION['panier']);
$products = $DB->query('SELECT * FROM products WHERE id IN ('.implode(',',$ids).')');
foreach ($products as $product):
 ?>

<div class="row">
	<a href="#" class="img"><img src="images/test.jpg" alt=""></a>
	<span class="name">Produit numero 1</span>
	<span class="price"><?= number_format($product->price, 2, ",", " "); ?>€</span>
	<span class="quantity">1</span>
	<span class="subtotal"><?= number_format($product->price*1.196, 2, ",", " "); ?></span>
	<span class="action">
		<a href="#" class="del"><img src="images/del.jpg" alt=""></a>
	</span>
</div>



<?php endforeach ?>

<?php require 'footer.php'; ?>
