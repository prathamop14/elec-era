<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com --><!-- Last Published: Mon Apr 01 2024 04:29:59 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="electronic-era-d58163.webflow.io" data-wf-page="660a380edcbe8e8216677e51"
    data-wf-site="660a380edcbe8e8216677e08" lang="en">
<head>
<?php
    include('nav.php');
    ?>
</head>
<body>
    <div class="section cc-subscribe-form">
     
        <div class="container cc-subscription-form">
            <div class="heading-jumbo-small">Repair Form For <?php echo $_GET['product'];?></div>
            <div class="paragraph-light cc-subscribe-paragraph">Enter Your <?php echo $_GET['product']?> Details</div>
            <div class="form-block w-form">
                <form method="POST" action="repair.php?product=<?php echo $_GET['product']?>">
                    <input class="text-field cc-subscribe-text-field w-input" maxlength="256" name="pro-name" placeholder="Enter <?php echo $_GET['product'];?> Model" type="text" required="" /><br>
                    <input class="text-field cc-subscribe-text-field w-input" maxlength="256" name="address" placeholder="Enter Address" type="text" required="" /><br>
                    <div role="group">
                        <select
                                id="option-set-f9a7001ff087b782c3ad5088da606865"
                                data-node-type="commerce-add-to-cart-option-select"
                                data-commerce-option-set-id="f9a7001ff087b782c3ad5088da606865" class="w-select"
                                required="" name="damage">
                                <option value="" selected="">Select problems</option>
                                <option value="internal">Internal</option>
                                <option value="external">Extenal</option>
                                <option value="other">Others</option>
                            </select></div>
                    <input type="submit" data-wait="Please wait..." class="button w-button" value="Submit" name="sbt"/>
                    </form>
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "elec-era";
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                    if(isset($_COOKIE['userid'])) {
                        if (isset($_POST['sbt'])) {
                            $userid = $_COOKIE['userid'];
                            $query = 'INSERT INTO repair_req (product, name, email, address, damage, userid) VALUES ("'.$_GET['product'].'", "'.$_POST['pro-name'].'", "'.$_COOKIE['email'].'", "'.$_POST['address'].'","'.$_POST['damage'].'", ' .$_COOKIE['userid'].');';
                            $result = mysqli_query($conn, $query);
                            header('Location:home.php');
                        }
                    } else {
                        header("Location:login.php");
                        exit();
                    }
                    ?>
                    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
                </div>
            </div>
        </div>
    </div>
</body>
  <?php
  include("footer.php");
  ?> 
</html>