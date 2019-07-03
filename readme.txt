=== Custom Code Manager ===
Contributors: Arthur Gareginyan
Tags: code, function, snippet, script, inject code, insert code, execute code
Donate link: https://www.spacexchimp.com/donate.html
Requires at least: 3.9
Tested up to: 5.2
Stable tag: 1.1
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Easily and safely add your custom code (PHP, HTML, CSS, JavaScript, etc.) to your WordPress website, directly out of the WordPress Admin Area, without the need to have an external editor.


== Description ==

An easy to use, with intuitive interface, WordPress plugin that gives you the ability to easily and safely add your custom code (PHP, HTML, CSS, JavaScript, etc.) to your WordPress website, directly out of the WordPress Admin Area, without the need to have an external editor.

This is a simple and perfect tool to use as your website's functionality plugin. This is a must have tool for authors and website's owners. Its purpose is to provide a familiar experience to WordPress users. There is no need for any more editing of the files of your theme or plugins for to add custom code (PHP, HTML, CSS, JavaScript, etc.). Just add your custom code in the field on the plugin page and this plugin will do the rest for you. It will automatically add your custom code to the desired section of your website, without changing any of your theme files and without slowing down your website.

The plugin works completely independently of the theme, so you can use it with any theme. The code you place on the plugin page will be entirely unaffected if you edit the contents of the theme’s files, or even completely change the theme. This is really useful in case of updating theme or plugins, because your custom code would never be overwritten. Your custom code will keep on working, no matter how many times you upgrade or switch your theme and plugins.

On the plugin page you find the code editor powered by CodeMirror. This code editor has options such as syntax highlighting, line numbering, and more. And if you want more options, let us know and we will be happy to add them.

**Features**

* Lightweight and fast
* Secure code with using clear coding standards
* Intuitive interface
* Cross browser compatible (work smooth in any modern browser)
* Compatible with all WordPress themes
* RTL compatible (right to left)
* Translation ready

**Key features include**

* Insert custom PHP/HTML/CSS/JS code into the site
* Checks the entered code for fatal errors
* Easy disable option for WSOD
* Ability to temporarily disable all custom PHP/CSS code
* Code syntax highlighting
* Line numbering
* Active line highlighting
* Editor allow for Tab indentation
* And much, much more!

**Supported languages**

* PHP
* HTML
* CSS
* JavaScript

**Translation**

This plugin is ready for translation and has already been translated into several languages. But If your language is not available then you can make one. It is also possible that not all existing translations are up-to-date or correct, so you are welcome to make corrections. Many of plugin users would be delighted if you share your translation with the community. Thanks for your contribution!

* English (default)
* Russian (translation by [Milena Kiseleva](https://www.instagram.com/milava_kiseleva/))
* German (translation by Michael)
* Polish
* Chinese-Taiwan (translation by Gordon Yu)
* Spanish (translation by Ramiro Garcés and Patricio Toledo)
* Dutch (translation by Peter Leenders)
* French (translation by Jean-Michel, Theophil Bethel and Hervé Bouzin)

If you want to help translate this plugin, please visit the [translation page](https://translate.wordpress.org/projects/wp-plugins/custom-code-manager).

**Minimum system requirements:**

* [PHP](https://secure.php.net) version **5.2** or higher.
* [MySQL](https://www.mysql.com) version **5.0** or higher.

**Recommended system requirements:**

* [PHP](https://secure.php.net) version **7.0** or higher.
* [MySQL](https://www.mysql.com) version **5.6** or higher.

**Contribution**

Developing plugins is long and tedious work. If you benefit or enjoy this plugin please take the time to:

* [Donate](https://www.spacexchimp.com/donate.html) to support ongoing development. Your contribution would be greatly appreciated.
* [Rate and Review](https://wordpress.org/support/plugin/custom-code-manager/reviews/#new-post) this plugin.
* [Share with us](https://www.spacexchimp.com/contact.html) or view the [GitHub Repo](https://github.com/ArthurGareginyan/custom-code-manager) if you have any ideas or suggestions to make this plugin better.


== Installation ==

Install "Custom Code Manager" just as you would any other WordPress Plugin.

Automatically via WordPress Admin Area:

1. Log in to Admin Area of your WordPress website.
2. Go to "`Plugins`" -> "`Add New`".
3. Find this plugin and click install.
4. Activate this plugin through the "`Plugins`" tab.

Manually via FTP access:

1. Download a copy (ZIP file) of this plugin from WordPress.org.
2. Unzip the ZIP file.
3. Upload the unzipped catalog to your website's plugin directory (`/wp-content/plugins/`).
4. Log in to Admin Area of your WordPress website.
5. Activate this plugin through the "`Plugins`" tab.

After installation and activation, the "`Code`" menu item will appear in the Admin Area. Click on it in order to view the plugin settings page.

[More help installing plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins "WordPress Codex: Installing Plugins")


== Frequently Asked Questions ==

= Q. Will this plugin work on my wordpress.COM website? =
A. Sorry, this plugin is available for use only on self-hosted (wordpress.ORG) websites.

= Q. Can I use this plugin on my language? =
A. Yes. This plugin is ready for translation and has already been translated into several languages. But If your language is not available then you can make one. It is also possible that not all existing translations are up-to-date or correct, so you are welcome to make corrections. Many of plugin users would be delighted if you share your translation with the community. Thanks for your contribution!

If you want to help translate this plugin, please use the POT file that is included and placed in the `languages` folder to create a translation PO file. Just [send the PO file to us](https://www.spacexchimp.com/contact.html) and we will include this translation within the next plugin update.

= Q. How does it work? =
A. Simply go to the plugin settings page, place your custom code (PHP, HTML, CSS, JavaScript, etc.) in the code editor field and click the "Save changes" button. Enjoy the result of applying your custom code. It's that simple!
You can find the plugin settings page at "`WordPress Admin Area`" -> "`Code`".

= Q. How much of custom code (characters) I can enter in the code editor? =
A. We don't limit the number of characters.

= Q. Does this plugin requires any modification of the theme? =
A. Absolutely not. This plugin is configurable entirely from the plugin settings page that you can find in the Admin Area of your WordPress website.

= Q. Does this require any knowledge of HTML or CSS? =
A. This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page. But you need to know the HTML or CSS in order to add/remove/modify the HTML or CSS code by using this plugin.

= Q. Can I add my custom code to a specific page of my website? =
A. For now, this plugin does not have an option to apply the custom code only on specific pages. We plan to add this feature soon. But for now in order to apply your custom code only on specific pages of your website, you need to wrap your custom code in a PHP function that will determine the page you want. You need something like this:

`function my_custom_code() {

    // Stop the function if this is not the Home page of website
    if ( !is_home() ) {
        return;
    }

    // YOUR CUSTOM PHP CODE HERE

}
my_custom_code();`

= Q. On the plugin settings page, an error message appears. What could be wrong? =
A. Here are a few of the most likely causes of the error message:

1. You make a syntax error in the code that you have entered. Check the syntax of your code and try again.
2. You entered two functions with the same name. Use a unique names for your functions.
3. You have entered function with a name that is already occupied by another function. Use a unique name for your function.
4. You are trying to overwrite an existing function (of WordPress, theme, or plugin). Instead, use filters and hooks.

= Q. My custom code is not working. What could be wrong? =
A. It happens that your custom code that you insert on the plugin page does not work, even if an error message does not appear. Here are a few of the most likely causes of the issue:

1. You have a typo during the insertion of your custom code.
2. Your custom code has a syntax error.
3. Your custom code is incorrect and may not work.

= Q. It's not working. What could be wrong? =
A. As with every plugin, it's possible that things don't work. It's impossible to tell what could be wrong exactly. The most common reason for this is a web browser’s cache. Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load. This is called the browser’s cache. Clearing your browser’s cache may solve the problem.

If you post a support request in the plugin's support forum on WordPress.org, we'd be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.

= Q. What to do if this plugin crashed the website? =
A. This plugin has a built-in functions for checking the custom code for syntax errors, duplicate functions names, and etc. But plugin is not perfect, so there are times when the entered custom code causes the error and white screen (WSOD). This is due to the fact that your custom code has a syntax error that this plugin could not detect. When this happens with you, please perform the following steps.

1. Access your server via FTP or SFTP. If you aren’t sure how usually your web hosting provider will have instructions somewhere on their website.
2. Browse to the directory `wp-content/plugins/custom-code-manager/`. Please contact your web hosting company to get help if you can't find this folder.
3. Rename the file `START` to `STOP`. This will stop the execution of your custom code.
4. Log in to Admin Area of your WordPress website.
5. Go to the plugin settings page `Code` -> `PHP code`.
6. Edit/fix your custom PHP code that you entered before the crash.
7. Return to the plugin folder and rename the file `STOP` to `START` and you're done!

This plugin stored you entered code in the database of your website. For getting your code, you also can go to the `Database` -> Table "`wp_options`" -> Option "`spacexchimp_p001_settings`" -> "`option_value`".

We are already working on a feature to automatically stop the execution of users custom PHP code for cases when this plugin could not detect the error, and this caused the inaccessibility of the website.

= Q. The last WordPress update is preventing me from editing my website that is using this plugin. Why is this? =
A. This plugin can not cause such problem. More likely, the problem are related to the settings of the website. It could just be a cache, so please try to clear your website's cache (may be you using a caching plugin, or some web service such as the CloudFlare) and then the cache of your web browser. Also please try to re-login to the website, this too can help.

= Q. Where to report bug if found? =
A. Bug reports are very welcome! Please visit [our contact page](https://www.spacexchimp.com/contact.html) and report. Thank you!

= Q. Where to share any ideas or suggestions to make the plugin better? =
A. Any suggestions are very welcome! Please visit [our contact page](https://www.spacexchimp.com/contact.html) and share. Thank you!

= Q. I love this plugin! Can I help somehow? =
A. Yes, any contributions are very welcome! Please visit [our donation page](https://www.spacexchimp.com/donate.html). Thank you!


== Screenshots ==

1. Plugin page.
2. Plugin page with custom PHP code added.
3. Plugin page with custom CSS code added.
4. Plugin page with custom HTML code added.
5. Plugin page with custom JS code added.


== Other Notes ==

****

"Custom Code Manager" is one of the own software projects of [Space X-Chimp](https://www.spacexchimp.com).

**License**

This plugin is licensed under the [GNU General Public License, version 3 (GPLv3)](http://www.gnu.org/licenses/gpl-3.0.html) and is distributed free of charge.
Commercial licensing (e.g. for projects that can’t use an open-source license) is available upon request.

**Credits**

* The icon of plugin is a copyrighted image created by the [Space X-Chimp](https://www.spacexchimp.com) team. (C) All rights reserved.
* The banner of plugin is a copyrighted image created by the [Space X-Chimp](https://www.spacexchimp.com) team. (C) All rights reserved.
* [CodeMirror](https://codemirror.net/) is an open-source project shared under the [MIT license](https://codemirror.net/LICENSE).
* [Bootstrap](http://getbootstrap.com) by Twitter, Inc. released under the [MIT license](https://github.com/twbs/bootstrap/blob/master/LICENSE).
* [Bootstrap-checkbox](https://github.com/vsn4ik/bootstrap-checkbox) is a project of [Vasily A.](https://github.com/vsn4ik), shared under the [MIT license](https://github.com/vsn4ik/bootstrap-checkbox/blob/master/LICENSE).

**Links**

* [Developer website](https://www.spacexchimp.com)
* [Dedicated plugin page on GitHub](https://github.com/ArthurGareginyan/custom-code-manager)
* [Dedicated plugin page on WordPress.org](https://wordpress.org/plugins/custom-code-manager/)


== Changelog ==

= 1.1 =
* On the settings page of the plugin, the "Store" tab is added.
* On the settings page of the plugin, the "Support" tab is added.
* Additional link (donate) added to the plugin meta row.

= 1.0.1 =
* The function "_register_submenu_page" is cleared of useless code.
* The content of the "readme.txt" file is corrected.

= 1.0 =
* Initial release.

= 0.3 =
* Release candidate.

= 0.2 =
* Beta version.

= 0.1 =
* Alpha version.


== Upgrade Notice ==

= 1.0 =
Please update to first stable release!