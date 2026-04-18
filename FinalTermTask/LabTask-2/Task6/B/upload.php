<?php
if(isset($_REQUEST['submit'])){
    $bg = $_REQUEST['bg'];

    if($bg == ""){
        echo "Select blood group";
    }else{
        echo "Blood Group: ".$bg;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blood Group Submission</title>
</head>
<body>

<fieldset style="width:320px;">
    <legend>Blood Group</legend>

<form method="post">
    <select name="bg">
        <option value="">Select</option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="O+">O+</option>
    </select>

    <br><br>
    <hr>
    <input type="submit" name="submit" value="Submit"/>
</form>

</fieldset>

</body>
</html>