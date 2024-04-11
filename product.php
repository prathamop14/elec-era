<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com --><!-- Last Published: Mon Apr 01 2024 04:29:59 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="electronic-era-d58163.webflow.io" data-wf-page="660a380edcbe8e8216677e6b"
    data-wf-site="660a380edcbe8e8216677e08" lang="en">

<head>
    <?php
    include('nav.php')
    ?>
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
            <div class="store-categories-wrap"><a href="/products" aria-current="page"
                    class="products-category-link w--current">All Products</a>
                <div class="w-dyn-list">
                    <div role="list" class="collection-list w-dyn-items">
                        <div role="listitem" class="w-dyn-item"><a href="/category/category-1"
                                class="products-category-link">Category 1</a></div>
                        <div role="listitem" class="w-dyn-item"><a href="/category/category-2"
                                class="products-category-link">Category 2</a></div>
                        <div role="listitem" class="w-dyn-item"><a href="/category/category-3"
                                class="products-category-link">Category 3</a></div>
                        <div role="listitem" class="w-dyn-item"><a href="/category/category-4"
                                class="products-category-link">Category 4</a></div>
                    </div>
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
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT name, image FROM categories";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    echo '                <div role="listitem" class="collection-item w-dyn-item">
                <a href="repair.php?product='.$row['name'].'"><img src="'.$row['image'].'">
                        <div class="product-description">
                            <div class="product-name-text">'.$row['name'].'</div>
                        </div>
                    </a>
                </div>';
        }
    }
    ?>
    </div>
        </div>
    </div>
    <div class="section cc-subscribe-form">
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
    </div>
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
</body>

</html>