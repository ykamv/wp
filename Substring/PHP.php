<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div>
    <form action="" method="post" >
      <label for="string">ENTER STRING: </label>
      <input type="text" name="text"><br>
      <label for="password">Generate Password(Enter Length): </label>
      <input type="number" name="password"><br>
      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
  <div>
  <?php
  if(isset($_POST['submit'])){
  
    $str = $_POST['text'];
    $n= $_POST['password'];
  

    echo"The STRING entered is:  ".$str; 
    echo"<br>";
    echo "A SUBSTRING of the given string is: ".substr($str,4,10);
    echo"<br>";
    echo "The last 3 CHARACTERS of the given string are: ".substr($str,-3);
    echo"<br>";
 

    function password_generate($chars) 
    {
      $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
      return substr(str_shuffle($data),0,$chars);
    }

    echo "The $n digit generated password is: ".password_generate($n)."\n";

  }
      ?>
</body>
</html>