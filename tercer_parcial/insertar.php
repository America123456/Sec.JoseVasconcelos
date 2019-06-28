<?php

     include("conexion.php");
      //if($_POST){//SI SE HA PRESIONADO EL ENVIAR
      $a=$_POST['name'];
       $b=$_POST['pat'];
        $c=$_POST['mat'];
         $d=$_POST['gen'];
          $e=$_POST['edad'];
           $f=$_POST['dom'];
            $g=$_POST['email'];
             $h=$_POST['tel'];

            // $sql="insert into belismite(Nombre,Apellido_paterno,Apellido_materno,Genero,Edad,Domicilio,Correo,Telefono)values('$a','$b','$c','$d','$e,'$f','$g','$h')";
             $resultado=mysqli_query($conexion,"insert into belismite(Nombre,Apellido_paterno,Apellido_materno,Genero,Edad,Domicilio,Correo,Telefono)values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."');");
            if($resultado){
                echo
               header('Location:paginas.html');

            }
            //else{
              //  echo"Error en la ejecución de la consulta";
               // echo "conexion exitosa";
          //   }

             

         //  }
?>