=== Cipher ===
Author URI: http://luigicavalieri.com
Plugin URI: https://sitetreeplugin.com/blog/cipher/
Contributors: _luigi
Tags: backticks, blocks, code, encode, convert, entities, comment, pre, preformatted, snippet, tag
Requires at least: 5.2
Tested up to: 5.3
Requires PHP: 5.6.20
Stable tag: 1.2.1
License: GPL 3.0
License URI: https://opensource.org/licenses/GPL-3.0

Cipher allows commenters to publish (pre-formatted) code.


== Description ==

Cipher is a settings-free plugin that allows commenters to publish (pre-formatted) code.

Functionalities:

* Backticks (\`) can be used as an alternative to the `<code>` tag to mark up both in-line and pre-formatted code within a comment.
* Formatted chunks of code or pieces of code longer than 70 characters posted via the comment form automatically wrapped in `pre+code` tags.
* Special characters in code submitted through the comment form automatically converted to HTML entities.


== Installation ==

Upload in the 'plugins' folder and activate.


== Upgrade Notice ==

= 1.2.1 =

General improvements.


== Changelog ==

= 1.2.1 =

Improved the namespacing of the base class.

= 1.2 =

* Removed the QuickTags feature, incompatible with the new Gutenberg editor.
* Periods, slashes and @ are no longer converted to HTML entities.