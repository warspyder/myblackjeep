<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!--   ******************************************************************************
       * contact.php                                                     02/27/2009 *
       * For www.myblackjeep.com by Mark Coulter                                    *
       * Contact page.                                                              *
       * Far from finished.                                                         *
       *                                                                            *
       * Modified - 10/21/2009 - MDC                                                *
       *   Cleaned up root directory for the website. Arranged files into           *
       *   directories and renamed some of the directories.                         *
       *                                                                            *
       *                                                                            *
       *                                                                            *
       *                                                                            *
       *                                                                            *
       *                                                                            *
       ****************************************************************************** -->
<title>My Black Jeep - Contact Me</title>
<link rel="stylesheet" type="text/css" href="css/main.css" />

</head>
<body>
<div id="page">

    <!-- Photo, Navigation Bar, and Logo -->
    <?php include 'include/header.inc'; ?>

    <div id="mainbody">

        <!-- Left Column  -->
        <?php include 'include/leftcol.inc'; ?>

        <div id="content">

<!-- This form was taken from an example see the following info.
Title: Very simple form *Includes IP address*
Description: A very simple form mail processor. If you have tried previous ones and it failed
(I understand your frustration) this is the one for you!
It also includes the user's IP address when sending the form.
This is the FINAL version. I've cleared up so it's an easier to read format.
This file came from Planet-Source-Code.com...the home millions of lines of source code
You can view comments on this code/and or vote on it at:
http://www.Planet-Source-Code.com/vb/scripts/ShowCode.asp?txtCodeId=2262&lngWId=8

The author may have retained certain copyrights to this code...
please observe their request and the law by reviewing all copyright conditions at the above URL.

There is no validation here or in mail.php but it works for now.
-->
            <form method="post" action="mail.php">
                Name: <input type="text" name="name" size="30"><br>
                <br>
                E-mail: <input type="text" name="email" size="30"><br>
                <br>
                Message:<br>
                <textarea name="message" rows=6 cols=40>
                </textarea><br>
                <br>
                <input type="submit">
                <input type="reset">
            </form>

        </div>  <!-- end of content -->

        <!-- Footer -->
        <?php include 'include/footer.inc'; ?>

    </div>      <!-- end of mainbody -->

</div>          <!-- end of page -->
</body>
</html>