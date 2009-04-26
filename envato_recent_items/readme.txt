=== Plugin Name ===
Contributors: Drew Douglass
Donate link: http://dev-tips.com
Tags: envato, envato api, themeforest, audiojungle, flashden
Requires at least: 2.7
Tested up to: 2.7.1
Stable tag: 1.0

Displays a list of your recent Envato items (along with the thumbnails and links) from any market you choose using the Envato API.

== Description ==
Allows the following options:

*   The username of the items you wish to display.
*   The marketplace to show the items from (i.e. Flashden, ThemeForest)
*   The number or items to display (i.e. 5)
*   The price is of the item is not shown by default, can be easily shown if desired.
*   Referrer ID is optional if you partake in the referrer program.
*   Thumbnails of your item are automatically outputted in markup, as well as the description and link, to allow for easy styling.



== Installation ==

Installation is very simple, follow the below steps:

e.g.

1. Upload `envato_recent_items` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `<?php echo envato_recent_items('collis', 'themeforest', 5, true, $ref='collis'); ?>` in your template file(s) where you wish the items to be displayed.

*   The first argument is your username and is required.
*   The second argument is the marketplace and is required.
*   The third argument is the number of items to display and is required.
*   The fourth argument is wether or not to show the price and is not required. Defaults to false.
*   The fifth argument is your referral id (your username) and is not required. Defaults to null.

All of the data that is output is wrapped in custom classes to allow you to easily and quickly style the results.

Please note your server must support the php `file_get_contents()` function. If you are unsure, please check with your hosting provider.

== Frequently Asked Questions ==

= This doesn't work or I get errors about file_get_contents() =

This plugin requires that your host supports the php function `file_get_contents()`. Please check with your host to make sure it is enabled. 

= What are the function arguments and what do they do? =

Please see the installation section which explains every argument. Also, please remember the first three arguments are required (username, marketplace, items to show).

== Screenshots ==

1. Screenshot of 3 items without any styling. Note the price here is being shown, as that is an option.



== Learn More ==

The original idea for this plugin came from a post I wrote on how to use the API which can be found [here](http://blog.themeforest.net/general/display-your-recent-envato-items-with-wordpress-and-the-envato-api/ "Envato API Tut"). If you're interested in learning more about how the API works and how you can build a plugin with it, I suggest you take some time to read the article.


