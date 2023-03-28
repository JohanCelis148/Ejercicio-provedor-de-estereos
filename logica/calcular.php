<?php


$precio=$_POST['precio'];
$marca=$_POST['marca'];
$iva=$_POST['iva'];
$descuento= 0;
$total = 0;
$valorpagar = 0;


if($precio >= 2000){
    $descuento = $precio * 0.1;
}

if($marca = "LG"){
    $descuento = $descuento + ($precio * 0.05);
}

$total= $precio - $descuento;
$iva = ($total*$iva)/100;

$valorpagar = $total + $iva;


echo "<script>alert('El precio es: $precio')</script>";
echo "<script>alert('El descuento aplicado es: $descuento')</script>";
echo "<script>alert('El iva aplicado es: $iva')</script>";
echo "<script>alert('El valor a pagar con iva es: $valorpagar')</script>";
echo "<script>window.open('../index.html','_self')</script>";


?>
