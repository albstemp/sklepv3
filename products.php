<?php
	include_once "form.php";
	$products=array();
	$number=$how_many[0];
	for($i=0;$i<$number;$i++)
	{
		$products[$i]='<section data-product-id="'.$id[$i].'" class="products"><div> <div><img src="img/'.$photo[$i].'.png" alt="PRODUKT" class="img"></div> <div class="name">'.$name[$i].'</div> <div class="price">CENA: '.$price[$i].'</div> <div class="choose"><button type="button" class="add-to-cart" data-product-id="'.$id[$i].'">DO KOSZYKA</button></div> </div></section>';
	}
?>