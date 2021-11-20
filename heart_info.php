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

    <title>Heart Information</title>
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
                            <h2>Heart Information</h2>
                        </div>
                        <div class="card-body">
                            <form action="AddHeartInfo.php" method="post">
            
            
                                <div class="mb-3 row">
                                    <label for="cp" class="col-sm-5 col-form-label">chest pain type (4 values)</label>
                                    <div class="col-sm-6">
                                    <input type="number" class="form-control" id="cp" placeholder="Chest Pain" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="restingbp" class="col-sm-5 col-form-label">Resting Blood pressure</label>
                                    <div class="col-sm-6">
                                    <input type="number" class="form-control" id="restingbp" placeholder="Resting Blood pressure" required>
                                    </div>
                                    </div>
                                    
                                <div class="mb-3 row">
                                    <label for="chol" class="col-sm-5 col-form-label">Serum Cholestoral (mg/dl)</label>
                                    <div class="col-sm-6">
                                    <input type="number" class="form-control" id="chol " placeholder="Serum Cholestoral" required>
                                    </div>
                                    </div>

                                <div class="mb-3 row">
                                    <label for="fbs" class="col-sm-5 col-form-label">Fasting Blood Sugar > 120 mg/dl</label>
                                    <div class="col-sm-6">
                                    <input type="number" class="form-control" id="fbs" placeholder="Fasting Blood Sugar" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="restecg" class="col-sm-5 col-form-label"> Resting Electrocardiographic Results (values 0,1,2)</label>
                                    <div class="col-sm-6">
                                    <input type="number" class="form-control" id="restecg" placeholder="Resting Electrocardiographic Results" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="thalach" class="col-sm-5 col-form-label">Maximum Heart Rate Achieved</label>
                                    <div class="col-sm-6">
                                    <input type="number" class="form-control" id="thalach" placeholder="Maximum Heart Rate Achieved" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="exang" class="col-sm-5 col-form-label">Exercise Induced Angina</label>
                                    <div class="col-sm-6">
                                    <input type="number" class="form-control" id="exang" placeholder="Exercise Induced Angina" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="oldpeak" class="col-sm-5 col-form-label">Oldpeak</label>
                                    <div class="col-sm-6">
                                    <input type="number" class="form-control" id="oldpeak" placeholder="Oldpeak" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="slope" class="col-sm-5 col-form-label">Slope of the peak exercise ST segment</label>
                                    <div class="col-sm-6">
                                    <input type="number" class="form-control" id="slope" placeholder="Slope of the peak exercise ST segment" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="ca" class="col-sm-5 col-form-label">Number of Major Vessels (0-3) colored by flourosopy</label>
                                    <div class="col-sm-6">
                                    <input type="number" class="form-control" id="ca" placeholder="Resting Blood pressure" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="thal" class="col-sm-5 col-form-label">Thal: 0 = normal; 1 = fixed defect; 2 = reversable defect</label>
                                    <div class="col-sm-6">
                                    <input type="number" class="form-control" id="thal" placeholder="Thal" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="tgt" class="col-sm-5 col-form-label">Target: 0= less chance of heart attack 1= more chance of heart attack</label>
                                    <div class="col-sm-6">
                                    <input type="number" class="form-control" id="tgt" placeholder="Target" required>
                                    </div>
                                </div>                    
                                
                                <div class="row justify-content-end" >
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-3 float-right">Submit</button>
                                    </div>
                                </div>

                                <div class="row justify-content-between" >
                                    <div class="col-auto">
                                        <a href="./AddPatient.php" class="link-primary" style>Back</a>
                                    </div>

                                    <div class="col-auto">
                                        <a href="./Diabetes_info.php" class="link-primary" style>Add Diabetes Information</a>
                                    </div>
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

