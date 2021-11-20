<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!--CSS Styles -->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Patient Information</title>
  </head>

  <body>
    <div class="container-fluid">

        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <a class="navbar-brand" style="font-size='30px'; " href="#"><h3>Easy Life</h3></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <ul class="navbar-nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Add Patient</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./ViewPatients.php">Data Analysis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="patient" id="patient">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-7">

                    <div class="card">
                        <div class="card-header">
                            <h2>Patient Information</h2>
                        </div>
                        <div class="card-body">
                            <form action="AddPatient.php" method="post">
            
                                <div class="mb-3 row">
                                    <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-5">
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>
            
                                <div class="mb-3 row">
                                    <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-5">
                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
                                    </div>
                                </div>
            
                                <div class="mb-3 row">
                                    <label for="age" class="col-sm-2 col-form-label">Age</label>
                                    <div class="col-sm-2">
                                    <input type="number" class="form-control" id="age" name="age" placeholder="Age" required>
                                    </div>

                                    <label for="Sex" class="col-sm-1 col-form-label">Sex</label>
                                    <div class="col-sm-2">
                                        <select class="form-select" id="sex" name="sex" aria-label="Default select example" >
                                            <option selected>Sex</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Prefer Not To Say</option>
                                        </select>
                                    </div>
                                </div>                    
                                
                                <div class="row justify-content-end" >
                                    <div class="col-auto">
                                        <input name="submit" type="submit"  class="btn btn-primary mb-3 float-right">
                                    </div>
                                </div>


                                <div class="row justify-content-start" >
                                    <div class="col-auto">
                                        <a href="./heart_info.php" class="link-primary" style>Add Heart information</a>
                                    </div>
                                </div>
                            </form>

                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        

        
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
if (isset($_POST['submit']))
{
    $FNAME = escapeshellarg($_POST[fname]);
    $LNAME = escapeshellarg($_POST[lname]);
    $AGE = escapeshellarg($_POST[age]);
    $SEX = escapeshellarg($_POST[sex]);

    $command = 'python3 add_patient.py' . ' ' .$FNAME . ' ' . $LNAME . ' ' . $SEX . ' ' . $AGE;

    $escaped_command = escapeshellcmd($command);
    system($escaped_command);
}
?>