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
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="mb-3 mt-4">
                    <form action="#" method="POST">
                        <span class="text-muted">Enter number to generate the forms</span>
                        <input type="number" class="form-control" placeholder="enter number" name="number" min="1" max="10">
                        <input type="submit" name="generate" class="form-control btn btn-outline-primary mt-3" value="Generate">
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-10 mx-auto">
                <?php
                if(isset($_POST['generate'])){
                    extract($_POST);
                    $number;
                    ?>
                    <form action="process.php" method="POST">                    
                    <?php

                    for($i=1; $i <= $number; $i++){
                        ?>
                        <div class="mb-3 d-flex gap-2">
                            <input type="hidden" name="number" value="<?php echo $number; ?>">
                            <input type="text" class="form-control mb-3" name="name<?php echo $i; ?>" placeholder="Enter name ">
                            <input type="text" class="form-control mb-3" name="f_name<?php echo $i; ?>" placeholder="Enter f_name">
                            <input type="text" class="form-control mb-3" name="surname<?php echo $i; ?>" placeholder="Enter surname">
                        </div>
                        <?php
                    } ?>
                    <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-outline-success" name="submit">Add record</button>
                    </div>                    
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>
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