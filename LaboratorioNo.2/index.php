  <!-- Desarrollo de Software 7 | Laboratorio #2 | Estudiante: Darío López -->

  <html>

<head>
<link href= "Style.css" rel="stylesheet" type = "text/css">
</head>


<title>
CRIPT PHONE
</title>
<h1>CRIPT PHONE</h1>


  <body background="1.jpg">

  

  <form name="formulario" method="post" action="index.php">

  <label type = "1">CÓDIGO</label> <br><br>
    <input type="text" id="num0" name="num0" size="1" required minlength="1" maxlength="1" value=0 /> 
    <input type="text" id="num1" name="num1" size="1" required minlength="1" maxlength="1" value=0 />
    <input type="text" id="num2" name="num2" size="1" required minlength="1" maxlength="1" value=0 />
    <input type="text" id="num3" name="num3" size="1" required minlength="1" maxlength="1" value=0 /><br><br> 
  <input class="button" type="submit" value="Aceptar"/>
      
  </form>


<?php

  $NTel0 = $_POST['num0'];
  $NTel1 = $_POST['num1'];
  $NTel2 = $_POST['num2'];
  $NTel3 = $_POST['num3'];

  $Sum0 = (($NTel0 + 7)/10);
  $Sum1 = (($NTel1 + 7)/10);
  $Sum2 = (($NTel2 + 7)/10);
  $Sum3 = (($NTel3 + 7)/10);
  

$code = $Sum2.$Sum3.$Sum0.$Sum1;


echo   '<label>'.$code.'</label>'

?>

</body>

</html>