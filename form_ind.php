<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario de Registro Individual</title>
	<link rel="stylesheet" href="styles/form.css" />
    <link type="text/css" rel="stylesheet" href="styles/fonts/lato-font.css" />
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
$nameErr = $emailErr = $phoneErr = $iamErr = "";
$name = $email = $phone = $iam_f = $team = "";
//$iam = array();
$iam = [ 
	"visitor" => "",
	"developer" => "",
	"PM" => "",
	"team_lead" => "",
	"designer" => "",
	"entrepreneur" => "",
	"other" => "",
	];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["team"])) {
    $team = "";
  } else {
    $team = test_input($_POST["team"]);
  }
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if phone number is valid
    if (!preg_match("/^[0-9+]+$/",$phone)) {
      $phoneErr = "Invalid phone number";
    }
  }

  /*if (empty($_POST["idea"])) {
    $ideaErr = "Your idea is required";
  } else {
    $idea = test_input($_POST["idea"]);
  }*/
// checkbox
  foreach($_POST["iam"] as $option) {
	  if ($option == "visitor"){
		  $iam["visitor"] = test_input($option);
	  }
	  if ($option == "developer"){
		  $iam["developer"] = test_input($option);
	  }
	  if ($option == "PM"){
		  $iam["PM"] = test_input($option);
	  }
	  if ($option == "team_lead"){
		  $iam["team_lead"] = test_input($option);
	  }
	  if ($option == "designer"){
		  $iam["designer"] = test_input($option);
	  }
	  if ($option == "entrepreneur"){
		  $iam["entrepreneur"] = test_input($option);
	  }
	  if ($option == "other"){
		  $iam["other"] = test_input($option);
	  }
      if ($iam == ""){
          $iamErr = "This field is required";
      }
  }
    
    
    if (!empty($iam["visitor"])){
        $iam_f .= $iam["visitor"] . "|";
    }
    if (!empty($iam["developer"])){
        $iam_f .= $iam["developer"] . "|";
    }
    if (!empty($iam["PM"])){
        $iam_f .= $iam["PM"] . "|";
    }
    if (!empty($iam["team_lead"])){
        $iam_f .=  $iam["team_lead"] . "|";
    }
    if (!empty($iam["designer"])){
        $iam_f .= $iam["designer"] . "|";
    }
    if (!empty($iam["entrepreneur"])){
        $iam_f .= $iam["entrepreneur"] . "|";
    }
    if (!empty($iam["other"])){
        $iam_f .= $iam["other"];
    }
    
  if(empty($nameErr)&&empty($emailErr)&&empty($phoneErr)){
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

<form class="form" id="solo-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <h3 class="header">Take part as a solo-participant</h3>  
     
    
     <label class="label-form" for="name">Nombre<br>
        <input class="input-text" type="text" placeholder="Nombre" name="name" value="<?php echo $name;?>">
     </label>
     <label class="error"><?php echo $nameErr;?></label>
	 <br><br>            
      
     <label class="label-form" for="email">Email <?php echo $emailErr;?><br>
        <input class="input-text" type="text" placeholder="xxx@usal.es" name="email" value="<?php echo $email;?>">
     </label>
     <label class="error"><?php echo $emailErr;?></label>
	 <br><br>
	  
	 <label class="label-form" for="phone">Teléfono <?php echo $phoneErr;?><br>
        <input class="input-text" type="text" placeholder="+XXX XXXXXXXXX" name="phone" value="<?php echo $phone;?>"/>
     </label>
     <label class="error"><?php echo $phoneErr;?></label>
	 <br><br>
	  
	 <!--<label class="label-form" for="idea">Your idea <?php //echo $ideaErr;?><br>
        <input class="input-text" type="text" name="idea" value="<?php// echo $idea;?>" />
     </label>
     <label class="error"><?php// echo $ideaErr;?></label>
	 <br><br>-->
	  
	 <label class="label-form" for="iam">Soy ... <br>
         <div class="d-checkbox">
             <input class="input-checkbox" type="checkbox" id="visitor" name="iam[]" <?php if (isset($iam["visitor"]) && $iam["visitor"]=="visitor") echo "checked";?> value="visitor"> visitante (no sé si participaré o no)<br>
             <input class="input-checkbox" type="checkbox" id="developer" name="iam[]" <?php if (isset($iam["developer"]) && $iam["developer"]=="developer") echo "checked";?>value="developer"> desarrollador<br>
             <input class="input-checkbox" type="checkbox" id="PM" name="iam[]" <?php if (isset($iam["PM"]) && $iam["PM"]=="PM") echo "checked";?> value="PM" > PM<br>
             <input class="input-checkbox" type="checkbox" id="team_lead" name="iam[]" <?php if (isset($iam["team_lead"]) && $iam["team_lead"]=="team lead") echo "checked";?> value="team_lead" > lider de equipo<br>
             <input class="input-checkbox" type="checkbox" id="designer" name="iam[]" <?php if (isset($iam["designer"]) && $iam["designer"]=="designer") echo "checked";?> value="designer" > diseñador<br>
             <input class="input-checkbox" type="checkbox" id="entrepreneur" name="iam[]" <?php if (isset($iam["entrepreneur"]) && $iam["entrepreneur"]=="entrepreneur") echo "checked";?>value="entrepreneur" > emprendedor<br>
             <input class="input-checkbox" type="checkbox" id="other" name="iam[]" <?php if (isset($iam["other"]) && $iam["other"]=="other") echo "checked";?>value="other" > otro<br>
        </div>
     </label>
     <label class="error"><?php echo $iamErr;?></label>
	 <br><br>
	 
	 <label class="label-form" for="team">I am looking for team members ... <br>
        <input class="input-text" type="text" name="team" value="<?php echo $team;?>" />
     </label>
	 <br><br>
	 
     <input class="i-submit" type="submit" name="submit" value="Take part">  
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
            $stmt = $conn->prepare("INSERT INTO form_ind (name, email, phone, iam, team) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $name, $email, $phone, $iam_f, $team);

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

<?php /*
$stmt->execute();
$stmt->close();
$conn->close();*/
?>
</body>
</html>