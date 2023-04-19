<?php
     $totalVentas=$_POST['totalVentas'];
     $hijosEscolar=$_POST['hijosEscolar'];
     $sueldoBasico = 600;
     $bonificacion = $hijosEscolar * 50;
     $comision = $totalVentas * 0.075;
     $sueldoBruto = $sueldoBasico + $comision + $bonificacion;
     $descuento = $sueldoBruto * 0.11;
     $sueldoNeto = $sueldoBruto - $descuento;
// Imprimiendo los resultados
echo "Bonificación: S/. " . $bonificacion . "<br>";
echo "Comisión: S/. " . $comision . "<br>";
echo "Sueldo bruto: S/. " . $sueldoBruto . "<br>";
echo "Descuento: S/. " . $descuento . "<br>";
echo "Sueldo neto: S/. " . $sueldoNeto . "<br>";
?>
