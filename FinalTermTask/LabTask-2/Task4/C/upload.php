<?php
if(isset($_REQUEST['submit'])){
    $gender = $_REQUEST['gender'];

    if($gender == ""){
        echo "Select gender <br>";
    }else{
        echo "Your gender is: ".$gender."<br>";
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
    <input type="radio" name="gender" value="Male"
    <?php if(isset($gender) && $gender=="Male") echo "checked"; ?>> Male

    <input type="radio" name="gender" value="Female"
    <?php if(isset($gender) && $gender=="Female") echo "checked"; ?>> Female

     <input type="radio" name="gender" value="Other"
     <?php if(isset($gender) && $gender=="Other") echo "checked"; ?>> Other

    <br><br>
    <hr>

    <input type="submit" name="submit" value="Submit"/>
</form>

</fieldset>

</body>
</html>