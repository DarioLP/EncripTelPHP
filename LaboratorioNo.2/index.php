  <!-- Desarrollo de Software 7 | Laboratorio #2 | Estudiante: Darío López -->

  <html>

<head>
<link href= "Style.css" rel="stylesheet" type = "text/css">
</head>


<title>
CRIPT PHONE
</title>
<h1>CRIPT PHONE</h1>


  <body>

  <form name="formulario" method="post" action="index.php">

  <label>Código:</label> <br><br>
    <input type="text" id="num0" name="num0" size="1" required minlength="1" maxlength="1" value=0 /> 
    <input type="text" id="num1" name="num1" size="1" required minlength="1" maxlength="1" value=0 />
    <input type="text" id="num2" name="num2" size="1" required minlength="1" maxlength="1" value=0 />
    <input type="text" id="num3" name="num3" size="1" required minlength="1" maxlength="1" value=0 /><br><br> 
  <input type="submit" value="Aceptar"/>
      
  </form>


<?php

  $NTel0 = $_POST['num0'];
  $NTel1 = $_POST['num1'];
  $NTel2 = $_POST['num2'];
  $NTel3 = $_POST['num3'];

  $Sum0 = $NTel0 + 7;
  $Sum1 = $NTel1 + 7;
  $Sum2 = $NTel2 + 7;
  $Sum3 = $NTel3 + 7;
  
  $div10 = ($Sum0+$Sum1+$Sum2+$Sum3)/10;


?>

</body>

</html>