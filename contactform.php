<html>

<head>
    <style>

    </style>
    <!--[if IE]>
	<link rel="stylesheet" type="text/css" href="css/style-ie.css" />
<![endif]-->
<!--[if !IE]<!-->
    <link rel="stylesheet" type="text/css" href="css/style1.css">
     <!--<![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="css/vendor/jquery-3.2.1.min.js"></script>
</head>

<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = $messageErr = "";
$name = $email = $phone = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed in name field";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["message"])) {
    $messageErr = "Message is required";
  } else {
    $message = test_input($_POST["message"]);
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone number is required.";
    } else {
    $phone = test_input($_POST["phone"]);
    if (!preg_match('/^[0-9 +]*$/',$phone)) {
        $phoneErr = "Phone number is invalid.";
      } 
  }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $err = $nameErr . $emailErr . $phoneErr . $messageErr;


?> 

<?php
// The message
$emailMessage = "Name: " . $name . "\r\n Email: " . $email . "\r\n Phone: " . $phone . "\r\n Message: " . $message;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$emailMessage = wordwrap($emailMessage, 70, "\r\n");

// Send
mail('jesse@jessechapman.com.au', 'New Web Enquiry', $emailMessage);
?>

    <div class="container-grid">
        <section id="home" name="home" class="home grid">
            <?php
            if (empty($err)) {
        echo "<h2 class=\"heading\">Thank you for your enquiry.</h2>";
        echo "<p class=\"paragraph\">I will be in contact with you soon.<a href=\"index.php\"><br /><br /><button class=\"btn primary\">Back to home</button></a></p>";
            } else {
                echo "<h3 class=\"heading\">There was a problem with your submission.</h3>";
                echo "<p class=\"paragraph\">Please fix the following errors: " . $nameErr . $emailErr . $phoneErr . $messageErr; 
            }
            ?>
        </section>
        <!--.home grid-->
        <footer class="footer">
            

        </footer><!--.footer -->
        <div class="footer-cont grid">
           <!-- <div class="footer-links">   
            <h4>Links</h4>
            <ul>
                <li>Link</li>
                <li>Link</li>
                <li>Link</li>
                <li>Link</li>
            </ul>
        </div>-->
        <div id="contact" name="contact" class="footer-contact-1">
                <h4>Contact</h4>
                <p>P: 0438 604 786</p>
                <p>E: info@viccommunitysites.com</p>
                <p>Altona Meadows, Victoria.</p>
            </div> 
        <div class="footer-contact">   
            
            <form action="contact-form.php" method="POST">
                <div class="form-item">
                <label class="label">Name:</label>
                <input type="text" name="name"  size="30" value="<?php echo $name;?>">
            </div>
                <div class="form-item">
                <label class="label">Email:</label>
                <input type="email" name="email"  size="30" value="<?php echo $email;?>">
            </div>
                <div class="form-item">
                <label class="label">Phone:</label>
                <input type="text" name="phone"  size="30" value="<?php echo $phone;?>">
            </div>
                <div class="form-item">
                <label class="label">Message:</label>
                <textarea cols="23" name="message"><?php echo $message;?></textarea>
                
            </div>
            <div class="submit">
            <input type="submit" value="Submit"/> 
        </div>
            </form>
        </div> 
        <div class="copyright"> Copyright &copy; 2018 Community Group Sites</div>
            </div>
    </div>
    <!--.container-grid-->
    <script src="hover.js"></script>
</body>

</html>