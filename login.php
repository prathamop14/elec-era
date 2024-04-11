<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>    
<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elec-era";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['sbt'])) {
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $login_query = "SELECT id, email, name, password FROM users WHERE email = '$email' AND password = '$pass'";
        $result = $conn->query($login_query);
        
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION["userid"] = $row["id"];
            $_SESSION["name"] = $row["name"];
            setcookie("userid", $row["id"], time() + 3600, "/");
            setcookie("name", $row["name"], time() + 3600, "/");
            header("Location: home.php");
            exit();
        } 
    else{
        $error_message = "Invalid username or password";
    }
    
}
}

$conn->close();
?>
<section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem; height: 520px;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://w0.peakpx.com/wallpaper/37/578/HD-wallpaper-techno-color-circuit-computer-electronic-electronics-information-led-science-tech-technology.jpg"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 520px; width: 330px; position: relative; right: 0.1px; bottom: 0.52px;" />
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
                            
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">                               
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                    <span class="h1 fw-bold mb-0">Login</span>
                                </div>
                                
                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                                
                                <div class="form-outline mb-4">
                                    <input type="email" id="form2Example17" class="form-control form-control-lg" style="border: 2px solid black;" placeholder="Email" name="email"/>
                                </div>
                                
                                <div class="form-outline mb-4">
                                    <input type="password" id="form2Example27" class="form-control form-control-lg" style="border: 2px solid black;" placeholder="Password" name="pass"/>
                                </div>
                                
                                <div class="pt-1 mb-4">
                                    <input type="submit" class="btn btn-dark btn-lg btn-block" value="Login" name="sbt">
                                </div>
                                <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="reg.php"
                                    style="color: #393f81;">Register here</a></p>
                                    <?php echo $error_message?>
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