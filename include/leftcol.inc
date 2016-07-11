<?php
//******************************************************************************
//* leftcol.inc                                                     02/27/2009 *
//* For www.myblackjeep.com by Mark Coulter                                    *
//* Content for the left column.                                               *
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
//*                                                                            *
//*                                                                            *
//*                                                                            *
//******************************************************************************
        echo "\t<div id=\"leftcol\">\n";
            echo "\t\t<h3>My Top Links</h3>\n";
            echo "\t\t<h4>Miscellaneous</h4>\n";
            echo "\t\t<ul>\n";
                echo "\t\t\t<li><a href=\"http://www.mozilla.com/\" target=\"_blank\">Download Firefox</a></li>\n";
            echo "\t\t</ul>\n\n";

            echo "\t\t<h4>Four Wheeling</h4>\n";
            echo "\t\t<ul>\n";
                echo "\t\t\t<li><a href=\"http://www.utah4x4club.com/\" target=\"_blank\">Utah 4x4 Club Forum</a></li>\n";
                echo "\t\t\t<li><a href=\"http://4bangerjp.com/\" target=\"_blank\">4 BangerJP - Home Of The Four Anger Squirrels</a></li>\n";
                echo "\t\t\t<li><a href=\"http://www.jeepsonly.com/\" target=\"_blank\">A Jeeps Only Directory</a></li>\n";
                echo "\t\t\t<li><a href=\"http://www.bc4x4.com/faqs/yj.cfm\" target=\"_blank\">BC 4x4</a></li>\n";
                echo "\t\t\t<li><a href=\"http://www.jeepaholics.com/\" target=\"_blank\">Jeepaholics</a></li>\n";
                echo "\t\t\t<li><a href=\"http://www.jeeptech.com/\" target=\"_blank\">Jeep Tech Pages</a></li>\n";
                echo "\t\t\t<li><a href=\"http://www.teraflex.biz/\" target=\"_blank\">TeraFlex</a></li>\n";
            echo "\t\t</ul>\n\n";

            echo "\t\t<h4>Offroad Trailers</h4>\n";
            echo "\t\t<ul>\n";
                echo "\t\t\t<li><a href=\"http://www.outbackteardrop.com/\" target=\"_blank\">Outback Teardrop Trailer</a></li>\n";
                echo "\t\t\t<li><a href=\"http://www.tentrax.com/\" target=\"_blank\">Tentrax Offroad Trailers</a></li>\n";
            echo "\t\t</ul>\n";
        echo "\t</div>\n\n";
// end of leftcol.inc
?>