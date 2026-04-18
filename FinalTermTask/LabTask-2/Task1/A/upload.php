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