=== Imgbacklink ===
Contributors: ypraise
Donate link: http://ypraise.com/2011/12/wordpress-plugin-image-backlink-generator/
Tags: images, backlinks, seo
Requires at least: 3.0
Tested up to: 3.8.0
Stable tag: 1.1
Version: 1.1

Pop up box appears over image when someone right-clicks and displays link to image and page in both html and bbcode format.

== Description ==

This plugin no longer works with Wordpress 3.9. A new more flexible version of Imgbacklink is available at http://wp.ypraise.com.


The Imgbacklink plugin can help with getting back links to your site if you do not mind sharing your images and bandwidth. This plugin makes it easy to use the LinkMyPics javascript by Michael VandeMar on your Wordpress site. Just install the plugin and all the images in your content section will be covered.

This plugin is different to the other available image backlink generators in that the code box only shows when someone right clicks your image for information  - so there are no code boxes showing that can spoil the look and flow of your page. It also covers all your images in a post rather than just the first one.

The code that is shown to your web site visitor who wants to use your image is given in html - which includes the web address of the page, the source url of the image and the alt tags for the image. It also gives the bbcode for linking which includes the url of the post page and the image source url.

There's no settings to worry about just upload and activate. 


== Installation ==

1. Upload imgbacklnk folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Make sure that any image you put in a post or page is not linking back to itself - you're defeatng the purpose of the plugin if people can click back to the individual image page.


== Frequently Asked Questions ==

= What exactly does this plugin do to my Wordpress installation =

There are no core file changes, this is purely a plugin that can easily be installed and uninstalled. There are no database changes or additions. This plugin does two things;
1. It loads the LinkMyPic javascript into your site which displays the box.
2. It adds a mouseup event into the image tags. You can see this after you add an image to your post, change to html view and you will see that a mouseup event has been added in the image source tags section.

= Images do not show on other web site =

This plugin does not over-ride any hotlink protection yuo may have installed on wordpress or through your server management software such as cPanel. Either switch off your hotlink protection or if you know the other sites web address then whitelist it.

= What does the future hold for Imgbacklink =

When I get the time I plan on seeing if there's a hook into the image editor screen so I can put in a tick box for you to choose if an individual image is covered by the plugin or not. At the moment all images you insert in a post or page is covered. To exclude an image you have to maunally change the code. It's easy to do, after inserting the image into your page just change to html view and delete the mouseup event tag.

== Screenshots ==

1. When someone right clicks an image a box pops up giving the code for them to use.


== Changelog ==

= 1.1 =

This plugin no longer works with WP 3.9. Imgbacklink 2.0 is available at wp.ypraise.com

= 1.0 =
* The first flavour launched.


== Upgrade Notice ==

= 1.1 =

This plugin no longer works with WP 3.9. Imgbacklink 2.0 is available at wp.ypraise.com

= 1.0 =
None
