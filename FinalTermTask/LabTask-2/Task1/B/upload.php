<?php

if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];

    if($name == ""){
        echo "Null name";
    }else{
        echo "Your name is: ".$name;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Submission</title>
</head>
<body>
  <fieldset style="width:320px;">
    <legend>Name</legend>
<form method="post" action="upload.php">
    Name: <input type="text" name="name"/> <br><br>
    <hr>
    <input type="submit" name="submit" value="Submit"/>
</form>
    </legend>
  </fieldset>
</body>
</html>

