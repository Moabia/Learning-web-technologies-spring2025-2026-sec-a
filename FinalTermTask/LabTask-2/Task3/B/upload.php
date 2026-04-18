<?php
if(isset($_REQUEST['submit'])){
    $dob = $_REQUEST['dob'];

    if($dob == ""){
        echo "Null DOB";
    }else{
        echo "Your DOB is: ".$dob;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DOB Submission</title>
</head>
<body>

<fieldset style="width:320px;">
    <legend>Date of Birth</legend>

<form method="post">
    DOB: <input type="date" name="dob"/> <br><br>
    <hr>
    <input type="submit" name="submit" value="Submit"/>
</form>

</fieldset>

</body>
</html>