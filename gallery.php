<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!--   ******************************************************************************
       * gallery.php                                                     08/26/2009 *
       * For www.myblackjeep.com by Mark Coulter                                    *
       * Photo gallery                                                              *
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
       *                                                                            *
       ****************************************************************************** -->
<title>My Black Jeep - Photo Galley</title>
<link rel="stylesheet" type="text/css" href="css/main.css" />

</head>
<body>
<div id="page">

    <?php include 'include/header.inc'; /* Photo, Navigation Bar, and Logo */ ?>

    <div id="mainbody">

        <?php include 'include/leftcol.inc'; /* Left Column */ ?>

        <div id="content">
            <h3>Photo Gallery</h3>
            <?php
                // **********************************************************************************
                // Build the list of Photo Albums.
                // The text file /gallery/albums/albums.txt contains the list of Photo Albums.
                // The format for the file is:
                //      Line 1: Album Filename including the path.
                //      Line 2: Thumbnail Filename including the path.
                //      Line 3: This is the alt text for the img tag. Usually the image filename.
                //      Line 4: Text Description. Limit this to 42 characters.
                // If you do not have a description, line 4 will have to be blank.
                // **********************************************************************************
                $fh = fopen($_SERVER['DOCUMENT_ROOT']."/gallery/albums/albums.txt", "r");
        // Found a big bug in the following logic. The albums.txt file MUST have a black line at the end of the file.
        // If not the while loop will not process the last photo album list in the text file.
                while (!feof($fh)) {
                    $line1 = rtrim(fgets($fh));
                    $line2 = rtrim(fgets($fh));
                    $line3 = rtrim(fgets($fh));
                    $line4 = rtrim(fgets($fh));
                    if (!feof($fh)) {
                        echo "\t<div class=\"img\">\n";
                        echo "\t\t<a href=\"$line1\"><img src=\"$line2\" alt=\"$line3\" /></a>\n";
                        echo "\t\t\t<div class=\"desc\">$line4</div>\n";
                        echo "\t</div>\n";
                    }
                }

                fclose($fh);
            ?>
        </div>  <!-- end of content -->

        <?php include 'include/footer.inc'; /* Footer */ ?>

    </div>      <!-- end of mainbody -->

</div>          <!-- end of page -->
</body>
</html>