<?php
    //******************************************************************************
    //* index.php                                                       02/27/2009 *
    //* For www.myblackjeep.com by Mark Coulter                                    *
    //* Home page.                                                                 *
    //* Simple, clean, and to the point.                                           *
    //*                                                                            *
    //* Modified - 03/02/2009 - MDC                                                *
    //*   Changed comment block. Hid it inside PHP code tag.                       *
    //*                                                                            *
    //* Modified - 03/09/2009 - MDC                                                *
    //*   Changed the comment block back to html comment. That way the PHP         *
    //*   processor doesn't have to parse it. For a site as small as this one      *
    //*   it doesn't make a difference.                                            *
    //*                                                                            *
    //* Modified - 10/21/2009 - MDC                                                *
    //*   Cleaned up root directory for the website. Arranged files into           *
    //*   directories and renamed some of the directories.                         *
    //*                                                                            *
    //*                                                                            *
    //******************************************************************************
    include 'include/doctype.inc'; /* Doctype statements */
    echo "<title>My Black Jeep - Home</title>\n";
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/main.css\" />\n";
    echo "<link rel=\"shortcut icon\" href=\"/favicon.ico\">";
    echo "</head>\n\n";
?>
<body>
<div id="page">
    <?php include 'include/header.inc'; /* Photo, Navigation Bar, and Logo */ ?>

    <div id="mainbody">
        <?php include 'include/leftcol.inc'; /* Left Column */ ?>

        <div id="content">
            <h2>My Black Jeep</h2>

            <p>When I purchased my 1992 Jeep Wrangler back in the early 2000's it had aluminum wheels, 31&quot; tires, and a 2.5&quot; suspension lift when I bought it. Oh, yea it had a cheap stereo and descent in-dash speakers also.</p>
            <p>I made a few minor modifications soon after bringing it home. I removed the cone restrictor out of the air intake box. I modified the 15 gallon fuel tank to a 20 gallon, thank you Chrysler. Then I replaced the stereo with an used Alpine, my daughter had it just laying around. The speakers sounded like crap. It turned out that they were loose and just needed to be tightened up. I replaced the nuts with wing nuts, it made it a lot easier to tighten. They sound a lot better, but not great. You can only get so much out of tiny 4x6 speakers.</p>
            <p>I was a little hesitant on purchasing this Jeep. It has the 2.5 liter 4 cylinder engine and I wanted the 4.0 liter 6 cylinder engine. The 2.5 does excellent off road. It is just a little slow at highway speeds.</p>
            <p>I have made several changes to it since then. Visit <a href="aboutmyjeep.php">About My Jeep</a> for more details and pictures.</p>
        </div>  <!-- end of content -->
        <?php include 'include/footer.inc'; /* Footer */ ?>

    </div>      <!-- end of mainbody -->

</div>          <!-- end of page -->
</body>
</html>