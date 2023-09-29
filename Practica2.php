<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Práctica 2 - Inserción de Código en Páginas Web</title>
	<style type="text/css">
  		#contenedor { width: 80%; margin: auto; border-radius: 20px;box-shadow: 10px 10px 20px; background-color: peachpuff; padding: 3%; padding-bottom: 1%; padding-top: 0.5%}
  		h2 {margin: auto; margin-left: 25%;}
  		hr {width: calc(100% + 7.6%); height: 2px; color: black; background-color: black; border: none; margin-left: -3.8%;}
	</style>
</head>
<body>
	<div id="contenedor">

		<?php
			
			echo "<h2>✸ Práctica 2: Inserción de Código en Páginas Web - Jorge Fernández Cea ✸</h2>";
			
			echo "<hr>";
			
			echo "<h3>➤ <u> Actividad 1</u> - Crea un archivo PHP para ejecutar en nuestro servidor XAMPP que muestre por pantalla lo siguiente:</h3>";
			
			echo "<h4>a) Variable de tipo String con valor “Hola” concatenada a un espacio y concatenada a una variable de tipo String con valor “Mundo”. Guarda la concatenación en una nueva variable.</h4>";
			
			$hola = "Hola";
			$espacio = " ";
			$mundo = "Mundo";
			$concatenacion = $hola.$espacio.$mundo;
			echo "Resultado: ".$concatenacion;

			echo "<h4>b) Variable de tipo boolean con valor “true”.</h4>";
			
			$booleano = true;
			echo "Resultado: ".$booleano;
			
			echo "<h4>c) Variable de tipo float con valor “3,14”.</h4>";
			
			$float = 3.14;
			echo "Resultado: ".$float;

			echo "<h4>d) Variable de tipo array que contenga los valores “1”, “2” y “3” y tengan como clave valor1, valor2 y valor3 respectivamente.</h4>";
			
			$array = array("valor1" => 1, "valor2" => 2, "valor3" => 3);
			print_r($array);

			echo "<hr>";

			echo "<h3>➤ <u> Actividad 2</u> - Cambia la variable de tipo boolean a valor “false”. Muestra el resultado obtenido al ejecutarlo con el servidor. ¿Qué ocurre y por qué?</h3>";

			$booleano = false;
			echo $booleano;

			echo "<p>Como podemos observar, al cambiar la variable de tipo boolean a valor \"false\" el resultado obtenido no aparecerá en pantalla. Esto sucede ya que dicha variable se considera una variable vacía, debido a que su valor actual es 0 (\"false\").</p>";
			
			echo "<p>A continuación se comprobará que dicha variable esté vacía mediante la función \"empty()\":</p>";

			echo "Resultado: ".empty($booleano);

			echo "<hr>";

			echo "<h3>➤ <u> Actividad 3</u> - Elimina los espacios de la variable concatenada utilizando la función correspondiente.</h3>";

			echo "<p>Para ello, tendremos que remplazar la variable \$espacio quitando dicho espacio haciendo uso de la función \"str_replace (“cadenaOriginal”, “cadenaNueva”, \$cadenaTotal)\":</p>";

			echo "Resultado: ".str_replace (" ", "", $concatenacion);

			echo "<hr>";

			echo "<h3>➤ <u> Actividad 4</u> - Muestra por pantalla el siguiente mensaje:</h3>";

			$mensaje = "El operador \"+\" sirve para sumar el valor de variables. Con la \"/\" podemos dividir valores entre variables. El símbolo del dólar \"$\" indica que estamos utilizando variables pero no lo usaremos en las constantes o globales.";

			echo $mensaje;

			echo "<hr>";

			echo "<h3>➤ <u> Actividad 5</u> - Almacena la cadena anterior en una variable y usa la función correspondiente para indicar la longitud de la cadena.</h3>";

			$longitud = str_replace (" ", "", $mensaje);

			echo "Para conocer la longitud de la cadena utilizaremos la función \"strlen(\$cadenaTotal)\". Por tanto, la longitud de la cadena anterior es de: ".strlen($longitud);

			echo "<hr>";

			echo "<h3>➤ <u> Actividad 6</u> - Utiliza la función correspondiente para eliminar las vocales en la frase “Hello World”.</h3>";

			echo "<p>Para eliminar las vocales de la frase “Hello World” utilizaremos de nuevo la función \"str_replace (“cadenaOriginal”, “cadenaNueva”, \$cadenaTotal)\":</p>";

			$frase = "Hello World";

			echo "Resultado: ".$eliminarVocales = str_replace (["a", "e", "i", "o", "u"], "", $frase);

			echo "<hr>";

			echo "<h3>➤ <u> Actividad 7</u> - Crea una variable sin contenido y usa la función correspondiente para comprobar si está vacía. ¿Qué ocurre y por qué?.</h3>";

			$variableVacia;

			echo "<p>Para comprobar si la variable está vacía utilizaremos la función \"empty()\" anteriormente mencionada:</p>";

			echo "Resultado: ".empty($variableVacia);

			echo "<br>";

			echo "<p>Como podemos observar, en PHP, cuando se utiliza la función \"empty()\" con una variable que no ha sido inicializada o que contiene un valor que se considera \"vacío\" (como \"false\", \"null\", una cadena vacía, o un array vacío), la función devuelve \"true\", lo que se interpreta como 1 en un contexto booleano.</p>";


			if (isset($variableVacia)) { // La función isset() verifica si una variable está definida antes de usarla
    			echo $variableVacia;
    		}else {
    			echo "Por tanto, la variable está vacía o no está definida.";
			}

			echo "<hr>";

			echo "<h3>➤ <u> Actividad 8</u> - Convierte la variable que contiene la frase “Hello World” y conviértela en entero. ¿Qué ocurre y por qué?.</h3>";

			echo "<p>Para convertir la variable que contiene la frase “Hello World” en un número entero tendremos que hacer uso de la función \"intval ()\", que convertirá a entero cualquier variable que se le pase como parámetro:</p>";

			$entero = intval($frase);

			echo "Resultado: ".$entero;

			echo "<p>En este caso, la variable \$entero contendrá el valor 0, ya que la cadena “Hello World” no comienza con un número reconocible, y por lo tanto, la conversión a entero devolverá 0.</p>";

			echo "<hr>";

			echo "<h3>➤ <u> Actividad 9</u> - Crea programas que calculen lo siguiente:</h3>";

			echo "<h4>a) La raíz cuadrada de 144.</h4>";

			$raizCuadrada = sqrt(144);

			echo "La raíz cuadrada de 144 es: ".$raizCuadrada;

			echo "<h4>b) La potencia 2^8.</h4>";

			$potencia = pow(2, 8);

			echo "El resultado de 2^8 es: ".$potencia;

			echo "<h4>c) El resto de la división de 100/6.</h4>";

			$resto = 100 % 6;

			echo "El resto de la división es: ".$resto;

			echo "<h4>d) El máximo común divisor de 3 y 6.</h4>";

			$numero1 = 3;
			$numero2 = 6;

			while ($numero2 != 0) { // Bucle while para calcular el mcd de dos números enteros de acuerdo al algoritmo de Euclides
				$mcd = $numero2;
				$numero2 = $numero1 % $mcd;
				$numero1 = $mcd;
			}

			echo "El máximo común divisor de 3 y 6 es: ".$mcd;
		?>
	</div>
</body>
</html>