<?php
if(isset($_REQUEST['submit'])){
    if(isset($_REQUEST['degree'])){
        $degree = $_REQUEST['degree'];
        echo "Selected degrees: ".implode(", ", $degree)."<br>";
    }else{
        echo "Select at least one degree <br>";
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

<input type="checkbox" name="degree[]" value="SSC"
<?php if(isset($degree) && in_array("SSC",$degree)) echo "checked"; ?>> SSC

<input type="checkbox" name="degree[]" value="HSC"
<?php if(isset($degree) && in_array("HSC",$degree)) echo "checked"; ?>> HSC

<input type="checkbox" name="degree[]" value="BSc"
<?php if(isset($degree) && in_array("BSc",$degree)) echo "checked"; ?>> BSc

<br><br>
<hr>

<input type="submit" name="submit" value="Submit"/>

</form>

</fieldset>

</body>
</html>