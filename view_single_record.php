<?php 
    require_once('config/config.php');

    if(isset($_GET['id'])){

        $sql = " SELECT * FROM `student_data` WHERE id = '{$_GET['id']}' ";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            ?>
             <!-- Bootstrap CSS v5.2.1 -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

            <style>
                .parent { position: relative;}
                .child {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);}
            </style>
            <div class="parent" style="width: 100%; height:100vh;">
                <div class="child mb-3" style="text-align: center; width: 50%;">
                    <h4 style="background-color: blueviolet;color:aliceblue; width:100%; padding:1rem; border-radius:10px;;"> 
                    Name: <?= $row['name']; ?>
                    </h4>
                    <h4 style="background-color: blueviolet;color:aliceblue; width:100%; padding:1rem; border-radius:10px;;"> 
                    Father's Name: <?= $row['f_name']; ?>
                    </h4>
                    <h4 style="background-color: blueviolet;color:aliceblue; width:100%; padding:1rem; border-radius:10px;;"> 
                    Surname: <?= $row['surname']; ?>
                    </h4>
                    <a href="view.php">Go Back</a>
                </div>
            </div>

            
            <?php
        }
    }





    }//end isset;





?>