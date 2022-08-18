<?php
session_start();
if (isset($_SESSION['cart'])) {
	$checker=array_column($_SESSION['cart'], 'item_name');
	if(in_array($_GET['cart_name'], $checker)){
		echo "<script>alert('Produkti ndodhet tashme ne shporte');
			window.location.href='product.php';
		</script>";
	}else{

	$count=count($_SESSION['cart']);
	$_SESSION['cart'][$count]=array('item_id' => $_GET['cart_id'], 'item_name'=>$_GET['cart_name'], 'item_price'=>$_GET['cart_price'],'item_img'=>$_GET['cart_img'], 'quantity'=>1 );
	echo "<script>alert('Produkti u shtua');
	window.location.href='product.php';
	</script>";
	}
} else {
	$_SESSION['cart'][0]=array('item_id'=>$_GET['cart_id'], 'item_name'=>$_GET['cart_name'], 'item_price'=>$_GET['cart_price'],'item_img'=>$_GET['cart_img'], 'quantity'=>1);
	echo "<script>alert('Product Added');
	window.location.href='product.php';
	</script>";
}

?>