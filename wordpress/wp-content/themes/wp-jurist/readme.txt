================
WP JURIST THEME
================
Copyright (c) 2013 by WP Dev Shed (http://wpdevshed.com/)
This Theme is distributed under the terms of the GNU GPL.

===========
ABOUT Theme
=========== 
It's a fun and functional theme perfect for the personal blogger. Featuring a traditional layout it supports custom menus and is widget ready.

This theme is compatible with Wordpress Version 3.4 and above and it supports the new theme customization API (https://codex.wordpress.org/Theme_Customization_API).

All the image graphics and icons bundled with this theme are created by the author and licensed under the GPL. Images used in the screenshot are found on the demo site: http://wpjurist.com/

Supported browsers: Firefox, Opera, Chrome, Safari and IE9+ (Some css3 styles like shadows, rounder corners and 2D transform are not supported by IE8 and below).

For free themes support, please contact us http://wpdevshed.com/contact/

============================================
Images and Graphics Copyright/License Info
============================================
 * All the image graphics and icons bundled with this theme are created by the author (WP Dev Shed) and licensed under the GNU GPL.
 
 
============================================
Scripts.js Copyright/License Info
============================================
 * All the entries inside scripts.js are written by WP DEV SHED (unless otherwise noted) and licensed under the GNU GPL.


============================================
This theme uses Toolbox as a theme backbone
============================================
 * Toolbox (http://wordpress.org/extend/themes/toolbox)
 * Copyright (c) Automattic (http://automattic.com)
 * Available under the terms of GNU GPL.
 
 
======================================
This theme uses Bones as a design tool
======================================
 * Bones (http://themble.com/bones)
 * Copyright (c) Eddie Machado (http://eddiemachado.com/)
 * This is totally free and under WTFPL license (Please read http://themble.com/bones/ for more information)


=====================================
This theme is bundled with Modernizr 
=====================================
 * Modernizr v2.6.2 (www.modernizr.com)
 * Modernizr is a JavaScript library that detects HTML5 and CSS3 features in the user’s browser.
 * Copyright (c) Faruk Ates, Paul Irish, Alex Sexton
 * Available under the BSD and MIT licenses: www.modernizr.com/license/
 
 
=================================
This theme is bundled with Cycle2
=================================
 * Cycle2 v20130203 (http://jquery.malsup.com/cycle2/)
 * Cycle2 is a versatile slideshow plugin for jQuery built around ease-of-use. It supports a declarative initialization style that allows full customization without any scripting.
 * Copyright © 2012 M. Alsup (https://github.com/malsup)
 * The Cycle2 plugin is dual licensed under the MIT (http://malsup.github.com/mit-license.txt) and GPL (http://malsup.github.com/gpl-license-v2.txt) licenses.
 

=======================================
This theme is bundled with imagesLoaded
=======================================
 * imagesLoaded v3.0.2 (http://desandro.github.io/imagesloaded/)
 * JavaScript is all like "You images done yet or what?" Detect when images have been loaded.
 * Released under the MIT License. (http://desandro.mit-license.org/)
 * This project has a storied legacy (https://github.com/desandro/imagesloaded/graphs/contributors). Its current incarnation was developed by Tomas Sardyha @Darsain and David DeSandro @desandro.

 
================================================
This theme is bundled with TGM-Plugin-Activation
================================================
 * TGM-Plugin-Activation v2.3.6 (https://github.com/thomasgriffin/TGM-Plugin-Activation)
 * Plugin installation and activation for WordPress themes.
 * Copyright (c) 2012, Thomas Griffin (thomas@thomasgriffinmedia.com)
 * http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 

 
=================================
CHANGELOG
=================================
Version 1.0.6
 * added html and css styles for the fixed footer
 * added jquery fix for Safari
 
Version 1.0.5
 * removed the bundled "People" custom post type plugin and used the one uploaded to WPORG repository instead (People Profile CPT)
 * removed the references to the bundled Plugin in readme.txt
 * removed the bundled Masonry script and enqueued the built-in WP script instead (jquery-masonry)
 * used a proper secondary query in people-profile-template.php and alt_homepage templates
 * plugin activation script now refers to Plugins as recommended, not required
 * wp_jurist_pagination() now supports core paginate_links() function
 * added unminified versions of the following scripts - jquery.cycle2.scrollVert.min, jquery.cycle2.shuffle.min, jquery.cycle2.tile.min, 
imagesloaded.pkgd.min
 * added sanitize callbacks to customizer settings
 * used pre_get_posts to filter main query to ignore sticky posts
 
 
Version 1.0.4
 * removed a function that sometimes causes all the images in the media library to not display at all when setting a featured image
 * replaced the screenshot with 880x660 size
 * fixed some erroneus function prefixes
 
Version 1.0.3
 * added an optional, top-level custom nav menu in the footer
 * fixed the bug that causes some videos not displaying
 * updated footer credit
 
Version 1.0.2
 * replaced Isotope with Masonry
 
Version 1.0.1 
 * added sanitation codes (esc_url, sanitize_email) on people post type templates
 * fixed incorrect text domains and global variable prefixes
 * fixed post with long title on single view overflowing container
 
Version 1.0
 * First public release