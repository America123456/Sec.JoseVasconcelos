
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Regna Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">PRE-REGISTRO</h3>
          <p class="section-description">¡¡¡ POR FAVOR, INGRESE SUS DATOS !!!</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Benito Juarez s/n <br>San Diego Alcala, Temoaya, Edo. de México</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>7221597900</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href= "#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>


<?php

    // include('C:\xampp\htdocs\tercer_parcial\conexion.php');
     
?>
  
              <form action="http://localhost/tercer_parcial/insertar.php" method="post" role="form" class="contactForm">
                <div class="form-group">



                  <input type="text" name="name" class="form-control" id="name" placeholder="COLOQUE SU NOMBRE"data-rule="minlen:4" data-msg="Por favor ingrese por lo menos 4 caracteres" />
                  <div class="validation"></div>
                </div>




                <div class="form-group">
                  <input type="text" name="pat" class="form-control" id="pat" placeholder="APELLIDO PATERNO"data-rule="minlen:4" data-msg="Por favor ingrese por lo menos 4 caracteres" />
                  <div class="validation"></div>
                </div>





                <div class="form-group">
                  <input type="text" name="mat" class="form-control" id="mat" placeholder="APELLIDO MATERNO"data-rule="minlen:4" data-msg="Por favor ingrese por lo menos 4 caracteres" />
                  <div class="validation"></div>
                </div>





<i>SELECCIONA TU GENERÓ: </i> <input type="radio" name="gen" value="m"/>  Masculino <input type="radio" name="gen" value="f"/>  Femenino 


               <div class="form-group">
                 <br> <input  class="form-control" name="edad"  placeholder="EDAD"   />
                </div>





                <div class="form-group">
                  <input type="text" class="form-control" name="dom" id="subject" placeholder="DOMICILIO" data-rule="minlen:4" data-msg="Por favor ingrese por lo menos 4 caracteres" />
                  <div class="validation"></div>
                </div>








                 <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="COLOQUE SU Email" data-rule="email" data-msg="Por favor ingrese una dirección de correo valida" />
                  <div class="validation"></div>
                </div>






                <div class="form-group">
                  <input  class="form-control" name="tel"  placeholder="TELEFONO"   />
                </div>

                <div class="text-center"><button type="submit" onsubmit="submit" href="paginas.html">ENVIAR MENSAJE</button></div>


    
              



              </form>





   
    



            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact  eso lo borre -----type=""-->

  </main>

  <!--==========================
    Footer
  ============================-->
    <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>2019</strong>. TODOS LOS DERECHOS RESERVADOS
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
       
        DISEÑADO POR: <a href="https://bootstrapmade.com/"> DELICIUS</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
   <!--<script src="contactform/contactform.js"></script>-->

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

