<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="C.css">

</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem; height: 550px;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://w0.peakpx.com/wallpaper/37/578/HD-wallpaper-techno-color-circuit-computer-electronic-electronics-information-led-science-tech-technology.jpg"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 550px; width: 330px; position: relative; right: 0.1px; bottom: 0.52px;" />
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
                            
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                    <span class="h1 fw-bold mb-0">Register</span>
                                </div>    
                                <div class="form-outline mb-4">
                                    <input type="email" id="form2Example17" class="form-control form-control-lg" placeholder="Email address" style="border: 2px solid black;" name="email"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" id="form2Example27" class="form-control form-control-lg" placeholder="Name" style="border: 2px solid black;" name="name"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="number" id="form2Example27" class="form-control form-control-lg"placeholder="Pincode" style="border: 2px solid black; margin-bottom: 10px;" name="pincode"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" id="form2Example27" class="form-control form-control-lg" placeholder="Password" style="border: 2px solid black;" name="pass"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" id="form2Example27" class="form-control form-control-lg" placeholder="Confirm Password" style="border: 2px solid black;" name="cpass"/>
                                </div>
                                <div class="pt-1 mb-4">
                                    <input class="btn btn-dark btn-lg btn-block" type="submit" name="sbt" value="Register">
                                </div>
                                <?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "elec-era";
     $conn = new mysqli($servername, $username, $password, $dbname);
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     $sql = "SELECT * FROM users";
     $login = "INSERT INTO users (name,email,pincode,password) VALUES('" . $_POST["name"] . "','" . $_POST["email"] . "'," . $_POST["pincode"] . ",'" . $_POST["pass"] . "')";
     $results = $conn->query($sql);
    if (isset($_POST['sbt'])) {
        if ($_POST['pass']==$_POST['cpass']) {
        try {
            mysqli_query($conn, $login);
            echo "<h1>Record inserted successfully.</h1>";
            $_POST["name"] = "";
            $_POST["email"] = "";
            $_POST["pincode"] = "";
            $_POST["pass"] = "";
            sleep(2);
            header("Location:login.php");
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {
                echo "Error: Username is already taken.";
            } else {
                echo "Error inserting record: " . $e->getMessage();
            }
        }
    }else {
        echo "Password Must Be Same";
    }
    }
    
    ?>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>