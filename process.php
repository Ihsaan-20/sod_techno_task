<?php
session_start();
require_once('config/config.php');

if(isset($_POST['submit'])){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    // echo '
    //     <script>
    //     alert("working")
    //     </script>
    //     ';
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // extract($_POST);
    $number = $_POST['number'];

    // for ($i = 1; $i <= $number; $i++) {
    //     echo $i;

    //     $sql = "INSERT INTO `student_data` (`student`, `name`, `f_name`, `surname` ) 
    //             VALUES ('{$student[$i]}', '{$name[$i]}', '{$f_name[$i]}', '{$surname[$i]}')";
        
    //     // echo $sql;  // Output the SQL query (for debugging)
        
    //     // Now you can execute the SQL query using your database connection
    //     // Example: mysqli_query($connection, $sql);
    // }
    
        $count = 0;
    for ($i = 1; $i <= $number; $i++) {

        $name = mysqli_real_escape_string($conn, $_POST['name'.$i]);
        $f_name = mysqli_real_escape_string($conn, $_POST['f_name'.$i]);
        $surname = mysqli_real_escape_string($conn, $_POST['surname'.$i]);
    
        $sql = "INSERT INTO `student_data` (`name`, `f_name`, `surname` ) 
                VALUES ('{$name}', '{$f_name}', '{$surname}')";
        $result = mysqli_query($conn, $sql);
        ++$count;

        if($result){
            $_SESSION['msg'] = "$count query inserted";
            header('location: view.php');
        }else{
            echo "Failed something went wrong...";
            header('location: view.php');

        }
        
        // echo $sql;  // Output the SQL query (for debugging)
        
        // Now you can execute the SQL query using your database connection
        // Example: mysqli_query($connection, $sql);
    }
    

}