Krystel Navas: Web-based App

24 files including the media:
artwork_buttons.css
manuscript_viewer.css
pik_viewer.css
live.jar
body_BG.jpg
button.jpg
Chad_Cover_Image.jpg
main_nav_BG.jpg
3d.php
About.php
Artwork_classes.php
artwork_divs.php
credits.php
FoLIO.php
manuscript_viewer.php
Media_classes.php
pik_viewer.php
video_test.php
home_button.png
info_BUTTON.png
navigation_TOP_divider.png
table-of-contents_BUTTON.png
Chad001re3D_textured_copy.m
config1.xml

The main file for the home page is artwork_divs.php. In that file there’s the CSS to the style, it also include the Artwork_classes.php and that file include Media_classes with the different media types that will be used along the application. Both files contain the classes to be parsed with the configuration XML file. The XML file contain the data of the manuscripts and in this file is where is going to be update, adding more manuscripts. The divisions (divs) are to give the buttons style with the CSS.

The manuscrip_viewer.php is for the cover page of the manuscript. It contain cover book image for the Chad Gospels and information about the manuscript, FoLIO, and credits. This about information will be available in the navigation bar. There’s also the divs for the home button, info button, table of contents button, and start button that will go to the first page of the manuscript. This file also have a Javascript to resize the window with client size window.

The pik_viewer.php is the file that will display display the first page of the manuscript like if you were open the book. Some of the divs are: frame that contain the manuscript image of each page, frame_2 contain the translation with the XML, main_frame contain both frame and frame_2. The main_frame purpose is to position the frames divs according to the client size of the screen. The url variable is the location of the images for the frames div. There’s also other divs like: previous and next buttons that are to change the page. Menubar div is to set up the navigation bar with the available media for the specific manuscript. Again I used the classes to have the available media for the manuscript from the configuration file.

The other files are for the viewers, images, video, and other data of the application.

