<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--CSS Styles -->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>TEMP</title>
  </head>

    <body>
        <section class="patient" id="patient">
            <h2>Enter Patient Information</h2>
            <div class="patient-form-container">
                <div class="patient-form">
                    <form action="AddPatient.php" method="post">
                        <div class="form-control">
                            <label for="fname">First Name</label>
                            <input type="text" id ="fname" name="fname" placeholder="John" class="input-field" required/>
                        </div>
                        <div class="form-control">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lname" placeholder="Doe" class="input-field" required/>
                        </div>
                        <div class="form-control">
                            <label for="lname">Sex</label>
                            <input type="text" id="sex" name="sex" placeholder="m" class="input-field" required/>
                        </div>
                        <div class="form-control">
                            <label for="lname">Age</label>
                            <input type="text" id="age" name="age" placeholder="20" class="input-field" required/>
                        </div>
                        <div class="form-control">
                            <label for="lname">ID</label>
                            <input type="text" id="id" name="id" placeholder="999999" class="input-field" required/>
                        </div>
                        <input type="submit" value="submit" id="submit_button" class="submit_button"/>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>

<!-- <?php
if (isset($_POST['submit']))
{
    $FNAME = escapeshellarg($_POST[fname]);
    $LNAME = escapeshellarg($_POST[lname]);
    $SEX = escapeshellarg($_POST[sex])
    $
} -->