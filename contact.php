<!DOCTYPE html>
<html data-wf-domain="electronic-era-d58163.webflow.io" data-wf-page="660a380edcbe8e8216677e64"
    data-wf-site="660a380edcbe8e8216677e08" lang="en">
    <link rel="stylesheet" href="C.css">

<head>
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/contacts/contact-1/assets/css/contact-1.css">
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
    <!-- Contact 1 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Contact</h2>
        <p class="text-secondary mb-5 text-center">The best way to contact us is to use our contact form below. Please fill out all of the required fields and we will get back to you as soon as possible.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-lg-center">
      <div class="col-12 col-lg-9">
        <div class="bg-white border rounded shadow-sm overflow-hidden">

          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
              <div class="col-12">
                <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
              </div>
              <div class="col-12 col-md-6">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                  </span>
                  <input type="email" class="form-control" id="email" name="email" value="" required>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                      <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                  </span>
                  <input type="tel" class="form-control" id="phone" name="phone" value="">
                </div>
              </div>
              <div class="col-12">
                <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
    <!-- <div class="section">
        <div class="container cc-heading-wrap">
            <h1>Get in touch</h1>
            <div class="paragraph-bigger cc-bigger-light">Hey there, fill out this form</div>
        </div>
        <div class="container">
            <div class="get-in-touch-form-wrap w-form">
                <form id="wf-form-Get-In-Touch-Form" name="wf-form-Get-In-Touch-Form" data-name="Get In Touch Form"
                    method="get" class="get-in-touch-form" data-wf-page-id="660a380edcbe8e8216677e64"
                    data-wf-element-id="ecbd41cd-5b2d-78be-ec94-d855601f627b">
                    <div class="credentials-inputs-wrap">
                        <div class="contact-name-field-wrap"><label for="name">Name</label><input
                                class="text-field cc-contact-field w-input" maxlength="256" name="name" data-name="Name"
                                placeholder="Enter your name" type="text" id="Name" /></div>
                        <div class="email-name-field-wrap"><label for="Email-2">Email Address</label><input
                                class="text-field cc-contact-field w-input" maxlength="256" name="Email"
                                data-name="Email" placeholder="Enter your email" type="email" id="Email-2"
                                required="" /></div>
                    </div><label for="">Message</label><textarea id="field" name="field"
                        placeholder="Enter your message" maxlength="5000" data-name="Field"
                        class="text-field cc-textarea cc-contact-field w-input"></textarea><input type="submit"
                        data-wait="Please wait..." class="button w-button" value="Submit" />
                </form>
                <div class="status-message cc-success-message w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="status-message cc-error-message w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
            <div class="map w-widget w-widget-map" data-widget-style="roadmap" data-widget-latlng=""
                data-enable-scroll="true" role="" title="" data-enable-touch="true" data-widget-zoom="12"
                data-widget-tooltip=""></div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="contacts-section">
                <h2>Main contacts</h2>
                <div class="w-layout-grid grid">
                    <div id="w-node-_016410b9-f46c-d5d0-c671-ed1d7aa23d84-16677e64" class="number-contact-wrap">
                        <div class="paragraph-bigger">Support</div>
                        <div class="paragraph-contact-text">+61 8372 4662<br /></div>
                        <div class="paragraph-tiny cc-paragraph-tiny-light">Mon - Fri, 9am - 5pm<br /></div>
                    </div>
                    <div id="w-node-_016410b9-f46c-d5d0-c671-ed1d7aa23d8d-16677e64" class="number-contact-wrap">
                        <div class="paragraph-bigger">Marketing</div>
                        <div class="paragraph-contact-text">+61 8372 4662<br /></div>
                        <div class="paragraph-tiny cc-paragraph-tiny-light">Mon - Fri, 9am - 5pm<br /></div>
                    </div>
                    <div id="w-node-_016410b9-f46c-d5d0-c671-ed1d7aa23d96-16677e64" class="number-contact-wrap">
                        <div class="paragraph-bigger">Office Hotline</div>
                        <div class="paragraph-contact-text">+61 8372 4662<br /></div>
                        <div class="paragraph-tiny cc-paragraph-tiny-light">Mon - Fri, 9am - 5pm<br /></div>
                    </div>
                    <div id="w-node-_016410b9-f46c-d5d0-c671-ed1d7aa23d9f-16677e64" class="number-contact-wrap">
                        <div class="paragraph-bigger">Email</div><a
                            href="mailto:support@store.com?subject=You&#x27;ve%20got%20mail"
                            class="support-link">electronicera21@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="section cc-subscribe-form">
        <div class="container cc-subscription-form">
            <div class="heading-jumbo-small">Monthly Newsletter</div>
            <div class="paragraph-light cc-subscribe-paragraph">Sign up to receive updates from our shop, including new
                tea selections and upcoming events.</div>
            <div class="form-block w-form">
                <form id="wf-form-Monthly-Newsletter-Form" name="wf-form-Monthly-Newsletter-Form"
                    data-name="Monthly Newsletter Form" method="get" class="subscribe-form"
                    data-wf-page-id="660a380edcbe8e8216677e64"
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
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elec-era";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO contact_form (name, email, phone, message) VALUES ('$_POST[fullname]', '$_POST[email]', '$_POST[phone]', '$_POST[message]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: ". $sql. "<br>". $conn->error;
}

$conn->close();
?>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=660a380edcbe8e8216677e08"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="contact.js"
        type="text/javascript"></script>
</body>

</html>