<?php
if(isset($_REQUEST['submit'])){
    $bg = $_REQUEST['bg'];

    if($bg == ""){
        echo "Select blood group <br>";
    }else{
        echo "Blood Group: ".$bg."<br>";
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

        <option value="A+" <?php if(isset($bg) && $bg=="A+") echo "selected"; ?>>A+</option>

        <option value="B+" <?php if(isset($bg) && $bg=="B+") echo "selected"; ?>>B+</option>

        <option value="O+" <?php if(isset($bg) && $bg=="O+") echo "selected"; ?>>O+</option>
    </select>

    <br><br>
    <hr>

    <input type="submit" name="submit" value="Submit"/>
</form>

</fieldset>

</body>
</html>