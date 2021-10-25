<style>
.resultado{
	color:#F00;
	font-weight:bold;
	font-size:32px;
}

</style>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AAAAAAAAAAAAAAAAAA</title>
</head>

<body>
    <!--Barra de navegacion-->
    <ul class="nav">
        <li class="nav nav-pills">
            <a class="nav-link active" href="Index.html">Inicio</a>
        </li>
    </ul>
</body>
</html>
	



<?php
	
	
	function calcular($operacion){
		
		global $numero1;
		global $numero2;
		
		if(!strcmp("Suma", $operacion)) {
			$resultado = $numero1+$numero2;
			 echo "<p class='resultado'> El resultado es: $resultado</p>";
		
		}
		if(!strcmp("Resta", $operacion)) {
			 echo "El resultado es: " . ($numero1-$numero2);
		
		}
		if(!strcmp("Multiplicación", $operacion)) {
			 echo "El resultado es: " . ($numero1*$numero2);
		
		}
		if(!strcmp("División", $operacion)) {
			 echo "El resultado es: " . ($numero1/$numero2);
		
		}
		if(!strcmp("Módulo", $operacion)) {
			 echo "El resultado es: " . ($numero1%$numero2);
		
		}
	}
?>