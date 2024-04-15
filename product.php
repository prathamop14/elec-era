<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com --><!-- Last Published: Mon Apr 01 2024 04:29:59 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="electronic-era-d58163.webflow.io" data-wf-page="660a380edcbe8e8216677e6b"
    data-wf-site="660a380edcbe8e8216677e08" lang="en">

<head>
    <?php
    include('nav.php')
    ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>


<body>
                <div class="menu-button w-nav-button"><img
                        src="https://assets-global.website-files.com/660a380edcbe8e8216677e08/660a380edcbe8e8216677e79_menu-icon.png"
                        width="22" alt="" class="menu-icon" /></div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container cc-heading-wrap">
            <h1>Our Products</h1>
            <div class="store-categories-wrap"><a href="product.php" aria-current="page"
                    class="products-category-link w--current">All Products</a>
              
                </div>
            </div>
        </div>
    </div>
    <div class="section">
    <div class="w-dyn-list">
        <div role="list" class="collection-wrap w-dyn-items">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "elec-era";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: ". $conn->connect_error);
            }
            $sql = "SELECT name, image FROM categories";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <div role="listitem" class="collection-item w-dyn-item d-flex justify-content-start">
                        <div class="card" style="width: 15rem;">
                            <img src="'. $row['image']. '" class="card-img-top" alt="'. $row['name']. '" style="height: 250px; width: 230px;">
                            <div class="card-body">
                                <h5 class="card-title">'. $row['name']. '</h5>
                                <a href="repair.php?product='. $row['name']. '" class="btn btn-primary">View Product</a>
                            </div>
                        </div>
                    </div>';
                }
            }
           ?>
        </div>
    </div>
</div>

    <!-- <div class="section cc-subscribe-form">
        <div class="container cc-subscription-form">
            <div class="heading-jumbo-small">Monthly Newsletter</div>
            <div class="paragraph-light cc-subscribe-paragraph">Sign up to receive updates from our shop, including new
                tea selections and upcoming events.</div>
            <div class="form-block w-form">
                <form id="wf-form-Monthly-Newsletter-Form" name="wf-form-Monthly-Newsletter-Form"
                    data-name="Monthly Newsletter Form" method="get" class="subscribe-form"
                    data-wf-page-id="660a380edcbe8e8216677e6b"
                    data-wf-element-id="2df3695a-ff87-37fa-7ac7-63d4f4891940"><input
                        class="text-field cc-subscribe-text-field w-input" maxlength="256" name="Newsletter-Email"
                        data-name="Newsletter Email" placeholder="Enter your email" type="email" id="Newsletter-Email"
                        required="" /><input type="submit" data-wait="Please wait..." class="button w-button"
                        value="Submit" /></form>
                <div class="status-message w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="status-message w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </div> -->
    <head>
    <?php
    include('footer.php')
    ?> 
    </head>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=660a380edcbe8e8216677e08"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="/era.js"
        type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>