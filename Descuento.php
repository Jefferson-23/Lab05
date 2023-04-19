<?php
     $precioActual=$_POST['precioActual'];
     $cantidad=$_POST['cantidad'];
     $descuentoPorcentaje = 7/100;

     $nuevoPrecio = $precioActual * 0.95;
     $importeCompra = $nuevoPrecio * $cantidad;
     $importeDescuento = $importeCompra * $descuentoPorcentaje; // Calculando el importe del descuento
     $importePagar = $importeCompra - $importeDescuento;
     $obsequio = $cantidad * 2;
// Imprimiendo los resultados
echo "Nuevo precio de la gaseosa: S/. " . $nuevoPrecio . "<br>";
echo "Importe de la compra: S/. " . $importeCompra . "<br>";
echo "Importe del descuento: S/. " . $importeDescuento . "<br>";
echo "Importe a pagar: S/. " . $importePagar . "<br>";
echo "Obsequio: " . $obsequio . " caramelos.<br>";
?>