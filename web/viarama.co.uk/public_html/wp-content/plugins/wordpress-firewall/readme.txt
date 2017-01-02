=== Plugin Name ===
Contributors: seoegghead
Donate link: http://seoegghead.com/
Tags: security, firewall
Requires at least: 2.6.1
Tested up to: 2.8

This WordPress plugin investigates web requests with simple WordPress-specific heuristics to identify and stop most obvious attacks. There exist a few powerful generic modules that do this; but they're not always installed on web servers, and difficult to configure. 

== Description ==

This WordPress plugin investigates web requests with simple WordPress-specific heuristics to identify and stop most obvious attacks. There exist a few powerful generic modules that do this; but they're not always installed on web servers, and difficult to configure. 

It intelligently whitelists and blacklists pathological-looking phrases based on which field they appear within in a page request (unknown/numeric parameters vs. known post bodies, comment bodies, etc.). Its purpose is not to replace prompt and responsible upgrading, but rather to mitigate 0-day attacks and let bloggers sleep better at night.

See:
[WordPress Firewall Info](http://www.seoegghead.com/software/wordpress-firewall.seo "WordPress Firewall Information") and
[WordPress Firewall Security Filters](http://www.seoegghead.com/software/wordpress-firewall-security-filters.seo "WordPress Firewall Security Filters") for more information.

== Installation ==

1. Copy the contained program to "wordpress-firewall.php" within your "wp-content/plugins/" folder.

== Frequently Asked Questions ==

= What does this thing actually do? =

Lots of stuff - here's the list:

* Detect, intecept, and log suspicious-looking parameters — and prevent them compromising WordPress.
* Also protect most WordPress plugins from the same attacks.
* Optionally configure as the first plugin to load for maximum security.
* Respond with an innocuous-looking 404, or a home page redirect.
* Optionally send an email to you with a useful dump of information upon blocking a potential attack.
* Turn on or off directory traversal attack detection.
* Turn on or off SQL injection attack detection.
* Turn on or off WordPress-specific SQL injection attack detection.
* Turn on or off blocking executable file uploads.
* Turn on or off remote arbitrary code injection detection.
* Add whitelisted IPs.
* Add additional whitelisted pages and/or fields within such pages to allow above to get through when desirable.

== Screenshots ==

1. Screenshot 1 (screenshot-1.gif).
2. Screenshot 2 (screenshot-2.gif).

== Changelog ==

= 1.25 =
* First release.

= 0.5 =
* Unreleased.
