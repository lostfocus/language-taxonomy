=== Language Taxonomy ===
Contributors: dominik.schwind
Tags: language, taxonomy
Requires at least: 3.0
Tested up to: 3.3.1
Stable tag: 0.2

Adds a language taxonomy to posts, pages and other items.

== Description ==

Adds a language taxonomy to posts, pages and other items.

This will add a URL scheme (Your Blog)/lang/(slug).

There is also a template tag for usage within the loop.

---

Example:

`<?php if(function_exists('lt_the_language')): ?>
<?php lt_the_language($post_id); ?>
<?php endif; ?>`

== Installation ==

1. Just like any other plugin, too.
1. Activate it.
1. Update your "Permalinks" settings.

== Changelog ==

= 0.2 =

* Template tag to use in the loop

= 0.1 =

* Initial Version
* More options will be coming, especially template tags.

== Upgrade Notice ==

= 0.2 =
This update introduces the template tag.