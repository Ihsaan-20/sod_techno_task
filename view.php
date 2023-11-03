<?php session_start(); require_once('config/config.php');  ?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand" href="view.php">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="view.php" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_form.php">Add Record</a>
                </li>
                
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
  </header>
  <main>
    <div class="container">
        <?php
        $sql = " SELECT * FROM `student_data` ";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0 ){
            ?>
            <div class="table-responsive mt-3">
            <table class="table table-hover text-center">
                <thead>
                    <tr class="bg-dark text-light">
                        <th scope="col">#</th>
                        <th scope="col">Students</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $count = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        ++$count;
                        ?>
                         <tr>
                            <td><?= $count; ?></td>
                            <td> <a href="view_single_record.php?id=<?= $row['id'] ?>" class="text-dark"><?= $row['name'] ?></a> </td>
                            <td> 
                                <a href="process.php?id=<?= $row['id'] ?>" class="text-light text-decoration-none btn btn-primary" >Edit</a>
                                <a href="process.php?id=<?= $row['id'] ?>" class="text-light text-decoration-none btn btn-danger">Delete</a> 
                            </td>
                         </tr>
                        <?php
                    }
                    
                    ?>
                    
                </tbody>
            </table>
        </div>
            
            <?php
        }else {
            ?>
            <div class="mb-3">
                <h1 class="text-center text-danger">No Record found</h1>
            </div>
            <?php
        }
        ?>
    </div>
    
    <div id="showdata">

    </div>
    
    
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>