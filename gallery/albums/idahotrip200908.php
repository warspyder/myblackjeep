<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!--   ******************************************************************************
       * idahotrip200908.php                                             08/27/2009 *
       * For www.myblackjeep.com by Mark Coulter                                    *
       * Photo gallery - Montana And Idaho August 2009                              *
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
<title>My Black Jeep - Photo Galley - Montana And Idaho August 2009</title>
<script type="text/javascript" src="/js/prototype.js"></script>
<script type="text/javascript" src="/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="/js/lightbox.js"></script>
<link rel="stylesheet" type="text/css" href="/css/main.css" />
<link rel="stylesheet" href="/css/lightbox.css" type="text/css" media="screen" />

</head>
<body>
<div id="page">

    <?php include $_SERVER['DOCUMENT_ROOT'].'/include/header.inc'; /* Photo, Navigation Bar, and Logo */ ?>

    <div id="mainbody">

        <?php include $_SERVER['DOCUMENT_ROOT'].'/include/leftcol.inc'; /* Left Column */ ?>

        <div id="content">
            <h3><a href="/gallery.php">Photo Gallery</a> &gt; Montana And Idaho August 2009</h3>
            <?php
                // **********************************************************************************
                // Build the index page of Photos.
                // The text file /gallery/albums/idahotrip200908.txt contains the list of Photos.
                // The format for the file is:
                //      Line 1: Album Filename including the path.
                //      Line 2: Text Description. Limit this to 42 characters.
                // If you do not have a description, line 2 will have to be blank.
                // **********************************************************************************
                $fh = fopen($_SERVER['DOCUMENT_ROOT']."/gallery/albums/idahotrip200908.txt", "r");

                while (!feof($fh)) {
                    $line1 = rtrim(fgets($fh));
                    $line2 = rtrim(fgets($fh));
                    $path_parts = pathinfo($line1);
                    $imgalt = $path_parts['basename'];
                    $thumbnail = $path_parts['dirname'] ."/thumbs/thumb_".$path_parts['basename'];
//                    if (!feof($fh)) {
                        echo "\t<div class=\"img\">\n";
                        echo "\t\t<a href=\"$line1\" rel=\"lightbox[group]\" title=\"$line2\"><img src=\"$thumbnail\" alt=\"$imgalt\" /></a>\n";
                        echo "\t\t\t<div class=\"desc\">$line2</div>\n";
                        echo "\t</div>\n";
//                    }
                }

                fclose($fh);
            ?>
        </div>  <!-- end of content -->

        <?php include $_SERVER['DOCUMENT_ROOT'].'/include/footer.inc'; /* Footer */ ?>

    </div>      <!-- end of mainbody -->

</div>          <!-- end of page -->
</body>
</html>