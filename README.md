Station8 Branding
==============
This WordPress theme is designed to be used by Station8 Branding internally, as they see fit. The theme is a skeleton theme based on Roots.io theme framework.

Less Compiler
-------------
I've also created a LESS compiler that automatically compiles from the /assets/less file to the /assets/css/main.css when any less file is changed. If you would like to change settings for the LESS generator, such as turning caching on/off, you can edit it in /lib/less.php.

JS Components
-------------
* Modernizer - v3.3.1
* JQuery - v1.11
* BootStrap JS Components v3.3
* FitVid.js - v1.1
* Respond.js - v1.4.2

Base.php
------------
This theme uses a base.php to wrap around every other template. The Base file is the one that pulls in the head.php and footer.php rather than having each template file pull one in. If you would like a specific page to be different (say the homepage) you can dublicate the base.php and rename it base-page-home.php and the page using the page-home.php file will also use that instead of the normal base.php.

Other Components
----------------
__FontAwesome__ is an online icon library. This theme currently uses v4.5.0. You can update the url that pulls it in /lib/scrips.php

__isTree__ is a function found in /lib/station.php that takes the ID number of a page and returns true or false if you are on that page, a child of that page, or a grandchild of that page. This is mainly used in displaying sidebars or menus.

I have also created a widget that displays on the admin dashboard that pulls a feed from the station8branding.com RSS feed.





This theme was originally created by Collin Berg.
