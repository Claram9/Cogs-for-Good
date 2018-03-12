<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario de Registro Grupo</title>
	<link rel="stylesheet" href="styles/form.css" />
    <link type="text/css" rel="stylesheet" href="styles/fonts/lato-font.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="body-form">

<?php
//Variables for SQL
$servername = "localhost";
$username = "prueba";
$password = "prueba123";
$dbname = "conectar";
//define variables and set to empty values
$error = false;
$nameErr = $emailErr = $phoneErr = $teamErr = "";
$name = $email = $phone = $team = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $error = true;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $error = true;
    }
  }
    
  if (empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if phone number is valid
    if (!preg_match("/^[0-9+]+$/",$phone)) {
      $phoneErr = "Invalid phone number";
      $error = true;
    }
  }

  if (empty($_POST["team"])) {
    $teamErr = "Team is required";
  } else {
    $team = test_input($_POST["team"]);
  }
    
  if(empty($nameErr)&&empty($emailErr)&&empty($phoneErr)&&empty($teamErr)){
      $error=false;
  }else{
      $error=true;
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>
<form class="form" id="next-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <h3 class="header">Take part as a team</h3>  

	 <label class="label-form" for="team">Descripción de su equipo ... <br>
        <input class="input-text" type="text" name="team" value="<?php echo $team;?>" />
     </label><br>
     <label class="error"><?php echo $teamErr;?></label>
	 <br><br>
	 
     <label class="label-form" for="name">Nombre <br>
        <input class="input-text" type="text" placeholder="Nombre" name="name" value="<?php echo $name;?>">
     </label><br>
     <label class="error"><?php echo $nameErr;?></label>
	 <br><br>            
      
     <label class="label-form" for="email">E-mail <br>
        <input class="input-text" type="text" placeholder="xxx@nextibs.com" name="email" value="<?php echo $email;?>">
     </label><br>
     <label class="error"><?php echo $emailErr;?></label>
	 <br><br>
	  
	 <label class="label-form" for="phone">Teléfono <br>
        <input class="input-text" type="text" placeholder="+XXX XXXXXXXXX" name="phone" value="<?php echo $phone;?>"/>
     </label><br>
     <label class="error"><?php echo $phoneErr;?></label>
	 <br><br>
	
     <input class="i-submit" type="submit" name="submit" value="Formar Parte">  
    <?php 
        if(isset($_POST['submit'])) {
        if(!$error){
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            //Check connection
            if ($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }
            // prepare and bind
            $stmt = $conn->prepare("INSERT INTO form_grup (name, email, phone, team) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("sssss", $name, $email, $phone, $team);

            $stmt->execute();
            $stmt->close();
            $conn->close();
            
            echo "<script>
                alert('Thanks for sign up!')
                location.replace('index.php')
                </script>";

        }
    }
    ?>
</form>

<?php

?>
</body>
</html>