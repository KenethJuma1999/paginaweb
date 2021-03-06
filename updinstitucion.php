<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About - Flattern Bootstrap Template</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern - v2.1.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<?PHP

require_once('conexion/dbconnect.php');
$conn=new MySQLConn();
$conn -> connect();
$vpasada=$_GET['ruci'];
$sql="SELECT ruci,nombresi,direccioni,telefonoi,emaili FROM institucion WHERE ruci='$vpasada';";
$conn -> sqlQuery($sql);
$rucis=$conn -> rows[0];
$nombresis=$conn -> rows[1];
$direccionis=$conn -> rows[2];
$telefonois=$conn -> rows[3];
$emailis=$conn -> rows[4];
//echo $rucis;

$rucs=$_POST['txtRuc'];
$nombres=$_POST['txtNombres'];
$direccions=$_POST['txtDireccion'];
$telefonos=$_POST['txtTelefono'];
$emails=$_POST['txtEmail'];

if(isset($_POST['btnActualizar'])){
$conn=mysql_connect("localhost","root","");
mysql_select_db("biblioteca");

$sql2="UPDATE institucion SET nombresi='".$nombres."', direccioni='".$direccions."', telefonoi='".$telefonos."', emaili='".$emails."' WHERE ruci='".$rucs."'";
echo $sql2;
$result=mysql_query($sql2);
echo "<script languaje='javascript'>";
echo "alert('Registro con ??xito')";
echo "</script>";
}

if(isset($_POST['btnEliminar'])){
$conn=mysql_connect("localhost","root","");
mysql_select_db("biblioteca");

$sql2="DELETE FROM institucion WHERE ruci='".$rucs."'";
//echo $sql2;
$result=mysql_query($sql2);
echo "<script languaje='javascript'>";
echo "alert('Elimiaci??n Exitosa')";
echo "</script>";
}

?>


<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Biblioteca</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li class="active"><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="testimonials.html">Testimonials</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us"></section>
    <!-- End About Us Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <form name="form1" method="post" action="">
        <table width="304" border="1" align="center">
          <tr>
            <td width="123">Ruc:</td>
            <td width="165"><label>
              <input name="txtRuc" type="text" id="txtRuc" value="<?=$rucis ?>">
            </label></td>
          </tr>
          <tr>
            <td>Nombres:</td>
            <td><label>
              <input name="txtNombres" type="text" id="txtNombres" value="<?=$nombresis ?>">
            </label></td>
          </tr>
          <tr>
            <td>Direccion:</td>
            <td><label>
              <input name="txtDireccion" type="text" id="txtDireccion" value="<?=$direccionis ?>">
            </label></td>
          </tr>
          <tr>
            <td>Tel??fono:</td>
            <td><label>
              <input name="txtTelefono" type="text" id="txtTelefono" value="<?=$telefonois ?>">
            </label></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><label>
              <input name="txtEmail" type="text" id="txtEmail" value="<?=$emailis ?>">
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input name="btnActualizar" type="submit" id="btnActualizar" value="Actualizar">
              <input name="btnEliminar" type="submit" id="btnEliminar" value="Eliminar">
            </label></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <table width="63%" height="21" border="1" align="center" bordercolor="#000000">
          <tr bgcolor="#6699CC">
            <td width="18%" align="center" bgcolor="#CCCCCC" class="Estilo18">RUC</td>
            <td width="22%" align="center" bgcolor="#CCCCCC" class="Estilo18">NOMBRES</td>
            <td width="24%" align="center" bgcolor="#CCCCCC" class="Estilo18">DIRECCION</td>
            <td width="20%" align="center" bgcolor="#CCCCCC" class="Estilo18">TELEFONO</td>
            <td width="16%" align="center" bgcolor="#CCCCCC" class="Estilo18">EMAIL</td>
            
          </tr>
          <?PHP

$Conexion = mysql_connect("localhost","root",""); 
mysql_select_db("biblioteca");
 

$sql = "SELECT ruci,nombresi,direccioni,telefonoi,emaili FROM institucion order by nombresi;";

$Consulta = mysql_query($sql,$Conexion);
$NumFilas = mysql_num_rows($Consulta);
for($i=0;$i<$NumFilas;$i++){ 

	
	echo "<tr><td with='75%'><font size='1' face='Verdana, Arial, Helvetica, sans-serif'>";   
	echo mysql_result($Consulta,$i,'ruci');
    echo "</font></td>";
	
	echo "<td with='75%'><font size='1' face='Verdana, Arial, Helvetica, sans-serif'>";   
	echo mysql_result($Consulta,$i,'nombresi');
    echo "</font>";
	
	echo "<td with='75%'><font size='1' face='Verdana, Arial, Helvetica, sans-serif'>";   
	echo mysql_result($Consulta,$i,'direccioni');
    echo "</font>";
	
	echo "<td with='75%'><font size='1' face='Verdana, Arial, Helvetica, sans-serif'>";   
	echo mysql_result($Consulta,$i,'telefonoi');
    echo "</font>";
	
	echo "<td with='25%'  ><font size='1' face='Verdana, Arial, Helvetica, sans-serif'>"; 
    echo mysql_result($Consulta,$i,"emaili"); 
    echo "</font></td><tr>";	
	
} 
?>
        </table>
        <p>        </p>
      </form>
    </section>
    <!-- End Our Team Section -->

    <!-- ======= Our Skills Section ======= -->
    <section id="skills" class="skills"></section>
    <!-- End Our Skills Section -->

    <!-- ======= Our Clients Section ======= -->
    <!-- End Our Clients Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Flattern</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Flattern</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>