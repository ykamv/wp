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
        <div class="age"></div>
        <p>Password: <input type="password" name="pass" /></p>
        <div class="pass"></div>
        <label>choose your course</label>
        <br>
        <input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label><br />
        <input type="checkbox" name="check_list[]" value="Java"><label>Java</label><br />
        <input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label><br />
        <div class="check"></div>
        <p><input type="submit" name="submit" /></p>

    </form>


    <?php


    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $pass = $_POST['pass'];

        if (strlen($name) == 0) {
            $name_var = "Name field cannot be empty." . "<br>";
        } else {
            $name_var = $name_var_pass = "Hii " . trim($name) . "<br>";
        }

        if ($age == '') {
            $age_var = "Age field cannot be empty." . "<br>";
        } else {
            $age_var = $age_var_pass = "You are " . $age . " years old." . "<br>";
        }

        if ($pass == '') {
            $pass_var = "Password field cannot be empty." . "<br>";
        } else {
            $valid = preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@$%^&]).{8,12}$/', $pass);
            if (!$valid) {
                $pass_var = "Incorrect Password." . "<br>";
            } else {
                $pass_var = $pass_var_pass = "Correct Password." . "<br><br>";
            }
        }


        if (!empty($_POST['check_list'])) {
            $i = 0;
            $list_arr_initial = [];
            foreach ($_POST['check_list'] as $val) {
                $list_arr_initial[$i] = $val;
                $i++;
            }
            $list_arr = implode(',', $list_arr_initial);
            $list_var_pass = $list_arr;
            echo "Checked items are: " . $list_arr . "<br>";
        } else {
            echo "Checkbox Unselected!" . "<br>";
        }

        echo $name_var;
        echo $age_var;
        echo $pass_var;



        if (!empty($name_var_pass) && !empty($age_var_pass) && !empty($pass_var_pass) && !empty($list_var_pass)) {


            $serverhost = "localhost"; //or localhost 

            $dbName = "php_db"; // your db_name 

            $dbUsername = "root"; // root by default for localhost  

            $dbPassword = "";  // by default empty for localhost 



            $conn = mysqli_connect($serverhost, $dbUsername, $dbPassword, $dbName);

            if (!$conn) {

                die("Connection failed: " . mysqli_connect_error());
            }

            echo "Connected Successfully" . "<br>";




            $sql = "CREATE TABLE if not exists youtubers( 

            name VARCHAR(30) NOT NULL, 

            age int NOT NULL, 

            password varchar(30) NOT NULL,
    
             checklist varchar(50) NOT NULL)";



            if (mysqli_query($conn, $sql)) {

                echo "<br>" . "Table created successfully" . "<br>";
            } else {

                echo "ERROR: Could not create table " . mysqli_error($conn) . "<br>";
            }




            $sql = "INSERT INTO youtubers VALUES ('$name','$age','$pass','$list_arr')";

            if (mysqli_query($conn, $sql)) {

                echo "Records inserted successfully." . "<br>";
            } else {

                echo "ERROR: Could not insert values " . mysqli_error($conn) . "<br>";
            }



            $sql = "select * from youtubers";
            if ($result = mysqli_query($conn, $sql)) {

                //returns number of rows in result
                if (mysqli_num_rows($result) > 0) {


                    //fetches result as an associative, numeric array
                    while ($row = mysqli_fetch_array($result)) {




                        echo "<br>";
                        echo " " . $row['name'];

                        echo " " . $row['age'];

                        echo " " . $row['password'];

                        echo " " . $row['checklist'];
                    }


                    // Free result set 
                    mysqli_free_result($result);
                } else {

                    echo "<br>" . "No records could be retrieved.";
                }
            }



            // $sql = "UPDATE youtubers SET age=18 WHERE name='ykamv'"; 

            // if(mysqli_query($conn, $sql)){ 

            //     echo "<br>"."Records were updated successfully."; 

            // } else { 

            //     echo "<br>"."ERROR: Could not able to execute $sql. " . mysqli_error($conn); 

            // } 



            // $sql = "DELETE FROM youtubers WHERE name='xyz'"; 

            // if(mysqli_query($conn, $sql)){ 

            //     echo "<br>"."Records were deleted successfully."; 

            // } else{ 

            //     echo "<br>"."ERROR: Could not able to execute $sql. " . mysqli_error($conn); 

            // } 


            //all records deleted
            // $sql = "DELETE FROM youtubers"; 

            // if(mysqli_query($conn, $sql)){ 

            //     echo "<br>"."Records were deleted successfully."; 

            // } else{ 

            //     echo "<br>"."ERROR: Could not able to execute $sql. " . mysqli_error($conn); 

            // } 



            mysqli_close($conn);
        }
    }

    ?>
</body>

</html>