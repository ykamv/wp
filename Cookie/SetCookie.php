<?php
if(isset($_POST['submit'])){
    $a=$_POST['uname'];
    $b=$_POST['upassword'];
    if(isset($_POST['remember'])&&$_POST['remember']==1){
        setcookie("login","1",time()+1200);
        setcookie("uname",$a,time()+1200);
        setcookie("upassword",$b,time()+1200);
        header("location:prac8cookies.php");
        
    }
    else{
        setcookie("login","1");
        header("location:prac8logout.php");
    }
}

?>