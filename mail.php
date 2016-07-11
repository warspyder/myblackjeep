<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!--   ******************************************************************************
       * mail.php                                                        02/27/2009 *
       * For www.myblackjeep.com by Mark Coulter                                    *
       * Mail page.                                                                 *
       *                                                                            *
       * Modified - 10/21/2009 - MDC                                                *
       *   Cleaned up root directory for the website. Arranged files into           *
       *   directories and renamed some of the directories.                         *
       *                                                                            *
       *                                                                            *
       *                                                                            *
       *                                                                            *
       *                                                                            *
       ****************************************************************************** -->
<title>My Black Jeep - Message Sent</title>
<link rel="stylesheet" type="text/css" href="css/main.css" />
</head><body>
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $ip = $_SERVER['REMOTE_ADDR'];
?>
<div id="page">

    <?php include 'include/header.inc'; /* Photo, Navigation Bar, and Logo */ ?>

    <div id="mainbody">

        <?php include 'include/leftcol.inc'; /* Left Column */ ?>

        <div id="content">

<?php
    $body = ("Name: $name \n \n Email: $email \n \n Message: $message");
?>

<?php
    mail("mark@myblackjeep.com", "Form Submission Contact Page", "$body \n \n IP address $ip", "From: $name <$email>");
    echo ("Your Message was sent successfully  <br><b>Your Name:</b> $name <br> <b>Your E-Mail:</b><br>$email<br><b>Your Message:</b><br>$message");
    echo ("<br>");
    echo ("<a href=javascript:history.go(-1)>Click here to go back</a>");
?>

        </div>  <!-- end of content -->

        <?php include 'include/footer.inc'; /* Footer */ ?>

    </div>      <!-- end of mainbody -->

</div>          <!-- end of page -->
</body>
</html>