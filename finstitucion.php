
<html>
<HEAD>
<title>PlanClase::Informes Generales</title>
<style type="text/css">
<!--
#Layer1 {	position:absolute;
	left:16px;
	top:57px;
	width:133px;
	height:112px;
	z-index:1;
}
.style4 {font-family: Georgia, "Times New Roman", Times, serif}
.style5 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
}
.style7 {color: #000000; font-weight: bold; font-size: 12px; }
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; }
.style10 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.Estilo18 {font-size: 11px; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; }
.fb7 {    background: #EBE3CD no-repeat 5px center;
    vertical-align:middle; 
    border: 1px solid #969184;
}
.Estilo63 {font-size: 14px}
.Estilo64 {font-size: 14px; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; }
.Estilo66 {
	color: #0000FF;
	font-weight: bold;
}
.Estilo72 {color: #000000}
.Estilo73 {color: #000000; font-size: 24px; }
.Estilo75 {
	color: #FFFFFF;
	font-size: 7px;
}
.Estilo77 {font-size: 7px; }
-->
</style>
</HEAD>
<?php
	$rucimp=$_GET['ruci'];
	require_once('conexion/dbconnect.php');
	
	$conn = new MySQLConn();
	$conn->connect();
	
	
	$sql3 = "SELECT ruci,nombresi, direccioni,telefonoi,emaili FROM institucion WHERE ruci='$rucimp' " ;
	//echo $sql3;
	$conn->sqlQuery($sql3);
	$filas = $conn->rows[0];
	$filas1 = $conn->rows[1];
	$filas2 = $conn->rows[2];
	$filas3 = $conn->rows[3];
	$filas4 = $conn->rows[4];

?>
<div id="printReady">
  <table width="100%" border="0">
    <tr>
      <td valign="top"><div align="center">
        <form name="form1" method="post" action="">
        <table width="987" border="0">
                <tr>
                  <td width="291" class="Estilo66"><div align="center"><img src="assets/LogoUTN.png" width="225" height="225"></div></td>
                  <td width="343" class="Estilo66"><p align="center" class="Estilo73">UNIVERSIDAD T&Eacute;CNICA DEL NORTE</p>
                  <p align="center" class="Estilo72">Biblioteca General </p>
                  <p align="center" class="Estilo72">&nbsp;</p>
                  </td>
                  <td width="339" class="Estilo66"><div align="center"><a href="menup.php"><img src="assets/sello_UTN_f.png" width="339" height="150" border="0"></a></div></td>
                </tr>
            </table>
			  <p align="left" class="Estilo75">.</p>
			  <table width="992" border="1">
                <tr>
                  <td height="33" colspan="2"><span class="Estilo66">DATOS INSTITUCION: </span></td>
                </tr>
                <tr>
                  <td width="203"><span class="Estilo64">RUC:</span></td>
                  <td><?= $filas ?></td>
                </tr>
                <tr>
                  <td height="26"><span class="Estilo64">NOMBRES:</span></td>
                  <td><?= $filas1 ?></td>
                </tr>
                <tr>
                  <td><span class="Estilo64">DIRECCION:</span></td>
                  <td><?= $filas2 ?></td>
                </tr>
                <tr>
                  <td><span class="Estilo64">TELEFONO:</span></td>
                  <td><?= $filas3 ?></td>
                </tr>
                <tr>
                  <td><span class="Estilo64">EMAIL:</span></td>
                  <td><?= $filas4 ?></td>
                </tr>
              </table>
			  <p align="left" class="Estilo77">.</p>
			  <p class="Estilo77">.</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p align="right">&nbsp;</p>
			  <p>&nbsp;</p>
		  </form>
      </div></td>
    </tr>
  </table>
</div>


<script language="JavaScript">
var gAutoPrint = true; // Flag for whether or not to automatically call the print function

function printSpecial()
{
	if (document.getElementById != null)
	{
		var html = '<HTML>\n<HEAD>\n';

		if (document.getElementsByTagName != null)
		{
			var headTags = document.getElementsByTagName("head");
			if (headTags.length > 0)
				html += headTags[0].innerHTML;
		}
		
		html += '\n</HE' + 'AD>\n<BODY>\n';
		
		var printReadyElem = document.getElementById("printReady");
		
		if (printReadyElem != null)
		{
				html += printReadyElem.innerHTML;
		}
		else
		{
			alert("Could not find the printReady section in the HTML");
			return;
		}
			
		html += '\n</BO' + 'DY>\n</HT' + 'ML>';
		
		var printWin = window.open("","printSpecial");
		printWin.document.open();
		printWin.document.write(html);
		printWin.document.close();
		if (gAutoPrint)
			printWin.print();
	}
	else
	{
		alert("Lo Sentimos, Tu Impresion no soporta el Navegador.");
	}
}

</script>

<form id="printMe" name="printMe">
  <div align="center">
    <p>
      <input type="button" name="printMe" onClick="printSpecial()" value="Imprimir">
    </p>
  </div>
</form>  
  

