<?php

      $servidor="localhost";
      $usuario="root";
      $clave="";
      $base="belismite";
      $conexion=mysqli_connect($servidor,$usuario,$clave);
      mysqli_select_db($conexion,$base);
		

?>