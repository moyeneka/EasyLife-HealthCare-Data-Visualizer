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

    <title>Home</title>
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./AddPatient.php">Add Patient</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./ViewPatient.php">Data Analysis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="patient" id="patient">
            <div class="card text-center">
                <div class="d-flex justify-content-center align-items-center">

                    <div class="col-md-5">
                        <img src="./assets/images/pexels-anete-lusina-4792291.jpg" class="img-fluid rounded-start" style="object-fit: container;" alt="Data Analysis Picture">
                        <footer>
                            <small>
                                Photo by Anete Lusina from Pexels
                            </small>
                        </footer>
                    </div>

                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Easy Life</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis temporibus magni nesciunt ipsam nam voluptates excepturi consectetur est necessitatibus similique, quidem fugiat quasi atque, expedita natus. Voluptatem inventore nam maxime!
                            </p>
                            <a href="#" class="btn btn-primary">Get Started</a>
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

