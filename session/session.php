
<?php
session_start();
if(isset($_POST['submit'])){
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    if(isset($_POST['yes'])){
        $checkbox = $_POST['yes'];
    }
    else{
        $checkbox = $_POST['no'];
    }
    $_SESSION["uname"] = $uname;
    $_SESSION["pass"] = $pass;
    $_SESSION["checkbox"] = $checkbox;

    echo "Variables set";
}