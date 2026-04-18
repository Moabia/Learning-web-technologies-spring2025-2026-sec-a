<?php

if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];

    if($name == ""){
        echo "Null name <br>";
    }else{
        echo "Your name is: ".$name."<br>";
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
        Name: 
        <input type="text" name="name"
        value="<?php if(isset($name)){echo $name;} ?>" /> 
        <br><br>

        <hr>

        <input type="submit" name="submit" value="Submit"/>
    </form>

</fieldset>

</body>
</html>