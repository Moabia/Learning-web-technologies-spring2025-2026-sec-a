<?php
if(isset($_REQUEST['submit'])){
    if(isset($_REQUEST['degree'])){
        $degree = $_REQUEST['degree'];
        echo "Selected degrees: ".implode(", ", $degree);
    }else{
        echo "Select at least one degree";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Degree Submission</title>
</head>
<body>

<fieldset style="width:320px;">
    <legend>Degree</legend>

<form method="post">
    <input type="checkbox" name="degree[]" value="SSC"> SSC
    <input type="checkbox" name="degree[]" value="HSC"> HSC
    <input type="checkbox" name="degree[]" value="BSc"> BSc
    <br><br>
    <hr>
    <input type="submit" name="submit" value="Submit"/>
</form>

</fieldset>

</body>
</html>