=== Clyp ===
Contributors: clyp, ramiy
Tags: clyp, audio, oEmbed
Requires at least: 3.5
Tested up to: 4.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed audio from clyp.it into your WordPress site

== Description ==

[Clyp](https://clyp.it) is a simple way to record, discover, and share the sounds in your life with friends. Our platform enables anyone (no account required) to easily record and upload audio through a web browser, iPhone or Android device and share it with your existing networks like Facebook, Twitter, Reddit and more. Clyp provides every audio file with a short, unique link that makes sharing as easy as possible.

Using this plugin you can embed your sounds from clyp into your WordPress site using nothing but the URL. Just copy the audio URL and paste it to the post text editor. Then simply click over to the visual editor to confirm that it loads properly.

== Installation ==

= Installation =
1. In your WordPress Dashboard go to "Plugins" -> "Add Plugin".
2. Search for "Clyp".
3. Install the plugin by pressing the "Install" button.
4. Activate the plugin by pressing the "Activate" button.

= Updating =
* Use WordPress automatic updates to upgrade to the latest version. Ensure to backup your site just in case.

= Minimum Requirements =
* WordPress version 3.5 or greater.
* PHP version 5.2.4 or greater.
* MySQL version 5.0 or greater.

= Recommended  Requirements =
* The latest WordPress version.
* PHP version 5.4 or greater.
* MySQL version 5.5 or greater.

== Frequently Asked Questions ==

= How do I embed an audio from Clyp? =

With this plugin you can use the URL to embed an audio. Just paste the audio URL into your post editor:
`https://clyp.it/bbap3oir`

= How do I set custom dimensions to my audio? =

In WordPress 4.2 you can set max `width` and max `height` dimensions. It will add the WordPress `[embed]` shortcode:
`[embed width="600" height="150"]https://clyp.it/bbap3oir[/embed]`

**Note:** Doing it the WordPress way, using the `[embed]` shortcode, is backwards and forward compatible, and it works  with all the themes.

== Changelog ==

= 1.0 (2015-05-22) =
* Initial release.
* Register oEmbed provider.
