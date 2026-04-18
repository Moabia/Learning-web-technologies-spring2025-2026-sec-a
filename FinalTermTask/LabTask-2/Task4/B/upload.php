<?php
if(isset($_REQUEST['submit'])){
    $gender = $_REQUEST['gender'];

    if($gender == ""){
        echo "Select gender";
    }else{
        echo "Your gender is: ".$gender;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender Submission</title>
</head>
<body>

<fieldset style="width:320px;">
    <legend>Gender</legend>

<form method="post">
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other
    <br><br>
    <hr>
    <input type="submit" name="submit" value="Submit"/>
</form>

</fieldset>

</body>
</html>