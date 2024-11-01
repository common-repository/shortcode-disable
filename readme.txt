=== Shortcode Disable ===
Contributors: Fabrizio Lungo
Donate link: 
Tags:  WordPress, Shortcode, Widget, Disable, Developer, Blog, Plugins
Requires at least: 2.2
Tested up to: 2.9.2
stable tag: 0.1.0

Allows you to set some text inside the shortcode content so that it is shown as text rather than WordPress processing it as a shortcode. Good for developers of shortcode plugins so they can give examples of the code without it being rendered and it can also be used to talk about shortcode plugins.

== Description ==

Allows you to set some text inside the shortcode content so that it is shown as text rather than WordPress processing it as a shortcode. Good for developers of shortcode plugins so they can give examples of the code without it being rendered and it can also be used to talk about shortcode plugins.

I origionally made this for myself as the developer of the Flattr Shortcode Widget to be able to give examples of how to use the plugin on my wordpress blog.

== Installation ==

Installation is easy:

1. Download and unzip the plugin.
1. Copy the folder to the plugins directory of your blog.
1. Enable the plugin in your admin panel.
1. Include a widget in a post or page by adding the appropriate shortcode to your page or post.

== Frequently Asked Questions ==

= Question =

Answer

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the directory of the stable readme.txt, so in this case, `/tags/4.3/screenshot-1.png` (or jpg, jpeg, gif)
2. This is the second screen shot

== Changelog ==

= 0.1.0 =
NEW: Plugin created

== Arbitrary section ==

To use the shortcode disabler, put the test you wish for shortcodes to be disabled on as the {content} variable of this shortcode:

[sd]{content}[sd]