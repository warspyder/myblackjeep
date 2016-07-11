<?php
//******************************************************************************
//* header.inc                                                      02/27/2009 *
//* For www.myblackjeep.com by Mark Coulter                                    *
//* Set image for logo.                                                        *
//* Contains links for the navigation tool bar.                                *
//* Set image for photo.                                                       *
//*                                                                            *
//* Modified - 03/02/2009 - MDC                                                *
//*   Changed comment block. Hid it inside PHP code tag.                       *
//*                                                                            *
//* Modified - 03/09/2009 - MDC                                                *
//*   Changed the comment block back to html comment. That way the PHP         *
//*   processor doesn't have to parse it. For a site as small as this one      *
//*   it doesn't make a difference.                                            *
//*                                                                            *
//*   The photo on the website now gets randomly selected from a list          *
//*   of photos.                                                               *
//*                                                                            *
//* Modified - 08/26/2009 - MDC                                                *
//*   Added Photo Gallery navigation.                                          *
//*   Added Travel Blog navigation.                                            *
//*   Added Modification Blog navigation.                                      *
//*                                                                            *
//* Modified - 08/26/2009 - MDC                                                *
//*   Changed the random image routine. It worked fine as long as the          *
//*   html document was in the root directory. The files for the gallery       *
//*   are in a subdirectory. Came up with a solution that works, it is not     *
//*   eligant as I would like it, but it works.                                *
//*                                                                            *
//* Modified - 10/21/2009 - MDC                                                *
//*   Cleaned up root directory for the website. Arranged files into           *
//*   directories and renamed some of the directories.                         *
//*                                                                            *
//******************************************************************************
    // Show logo image
    echo "\t<div id=\"logo\"><img src=\"/images/myblackjeep_basicii-green.png\"></div>\n\n";
    // end of logo

    // Navigation Bar
    echo "\t<div id=\"navbar\">\n";
        echo "\t\t<ul>\n";
            echo "\t\t\t<li><a href=\"/index.php\">Home</a></li>\n";
            echo "\t\t\t<li><a href=\"/news.php\">News</a></li>\n";
            echo "\t\t\t<li><a href=\"/aboutme.php\">About Me</a></li>\n";
            echo "\t\t\t<li><a href=\"/aboutmyjeep.php\">About My Jeep</a></li>\n";
            echo "\t\t\t<li><a href=\"/gallery.php\">Gallery</a></li>\n";
            echo "\t\t\t<li><a href=\"/travelblog.php\">Travel Articles</a></li>\n";
            echo "\t\t\t<li><a href=\"/modblog.php\">Modification Articles</a></li>\n";
            echo "\t\t\t<li><a href=\"/contact.php\">Contact</a></li>\n";
        echo "\t\t</ul>\n";
    echo "\t</div>\n\n";
    // end of Navigation Bar

    // Show random photo
    echo "\t<div id=\"photo\">\n";
    // Show a random image 03-09-2009 Mark Coulter
    // For best results on these pages the images should only be 125px in height.
    // The path and image extension is hard coded. May want to
    // expand on this code to make it more universal. By defining
    // the path in a variable and processing other extensions.
    $image_list = array();  // list of images
    $i = 0;                 // index to image_list
    $random_image = "";     // filename of the random image

    // Having an issue with the path when the php file is not in the wwwroot.
    // It is not pretty, but it works for me. At least until I figure come up with
    // something better. I tried "$_SERVER['DOCUMENT_ROOT'].", it worked fine for
    // glob. However the html img tag choked and failed on the results. I think
    // preg_replace could be used to make this work better. "$_SERVER['DOCUMENT_ROOT']."
    // needs to be removed from what the html img tag gets for the image.
    if (is_dir("gallery/albums/sitephotos/thumbs/")) {
        $thumbs = "gallery/albums/sitephotos/thumbs/*.jpg";
        }
        else
        {
        if (is_dir("../gallery/albums/sitephotos/thumbs/")) {
            $thumbs = "../gallery/albums/sitephotos/thumbs/*.jpg";
            }
            else
            {
            if (is_dir("../../gallery/albums/sitephotos/thumbs/")) {
                $thumbs = "../../gallery/albums/sitephotos/thumbs/*.jpg";
                }
            }
        }

    foreach (glob($thumbs) as $filename) {
        //echo $filename;
        $image_list[$i] = $filename;
        $i++;
    }

    $random_image = $image_list[array_rand($image_list)];
    //  Added / in front of $random_image as a test.
    echo "\t\t<img id=\"randomimage\" src=\"/$random_image\" alt=\"random image\">\n";
    echo "\t</div>\n\n";
    // end of random photo
// end of header.inc
?>
