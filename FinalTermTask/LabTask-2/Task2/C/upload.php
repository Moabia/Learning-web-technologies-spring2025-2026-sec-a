<?php


if(isset($_REQUEST['submit'])){
    $email = $_REQUEST['email'];

    if($email == ""){
        echo "Null name";
    }else{
        echo "Your Email is: ".$email;
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
<form method="post">
    Email: <input type="email" name="email" value="<?php if(isset($email)){echo $email;}?>"/> <br><br>
    <hr>
    <input type="submit" name="submit" value="Submit"/>
</form>
    </legend>
  </fieldset>
</body>
</html>