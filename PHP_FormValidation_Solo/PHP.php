<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
<p>Your name: <input type="text" name="name" /></p>
<p>Your age: <input type="text" name="age" /></p>
<p>Password: <input type="password" name="pass"/></p>

<label>Choose your course:</label><br>
<input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label><br/>
<input type="checkbox" name="check_list[]" value="Java"><label>Java</label><br/>
<input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label><br/>

<p><input type="submit" name="submit" /></p>

</form>


<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $pass = $_POST['pass'];
        
        if(strlen($name)==0){
            $name_var = "Name field cannot be empty."."<br>";
        }
        else{
            $name_var = "Hii ". trim($name)."<br>"; 
        }

        if($age == ''){
            $age_var = "Age field cannot be empty."."<br>";
        }
        else{
            $age_var = "You are ".$age." years old."."<br>"; 
        }

        if($pass ==''){
            $pass_var = "Password field cannot be empty."."<br>";
        } 
        else{
            $valid = preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[$%^&]).{6,18}$/',$pass); 
            if(!$valid){
                $pass_var = "Incorrect Password."."<br>";
            }
            else{
                $pass_var = "Correct Password."."<br>";
            }
        } 
    
        
        if(!empty($_POST['check_list'])) 
            {   
                $list_var=array();
                $list = $_POST['check_list'];
                foreach($list as $value)
                {
                    array_push($list_var,$value);
                }
            }
        else{
            $list_var = "Nothing Selected!";
            }

        echo $name_var;
        echo $age_var;
        echo $pass_var;
        echo "Checked items are: "."<br>";
        foreach($list_var as $value)
        {
            echo $value."<br>";
        }
    }
    ?>
    </body>
    </html>