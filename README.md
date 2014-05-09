WILLOWSELLSTHEME
================

This is an under-development WordPress theme, designed and built by **Willow Sells** of [*willowsells.com*](http://www.willowsells.com).

This theme has a [WTFPL](http://www.wtfpl.net/). Learn from it. Use it. Take a single line of code or all of it. Mention me, or don't.

Please note: this theme is being built as a learning exercise. USE AT YOUR OWN RISK. If there's one thing I'm good at, it's breaking things.

---

Basic Documentation notes
-------------------------
As more things come up, I'll have to organize this into some meaningful thing. But for now...

*1) Nav Menu*
This theme comes with a header/navigational menu that is highly customizable (albeit, also currently breakable) through Wordpress' menu UI. However, the menu's name must be set (currently "Header Menu") and the appropriate theme location box must also be checked. Otherwise, you'll only get the tag line, and no menu.

*2) Syntax Highlighting & Markdown*
At this moment, the theme does not come with any markdown features; a plugin must be used. I am considering working on that. I have, however, implemented syntax highlighting using [highlight.js](http://highlightjs.org). Highlight.js required code blocks to be wrapped in '<pre><code></code></pre>' though. In order to ensure this works properly and to allow for two differently styled code blocks (portrait and landscape), I've done something weird. If you'd like to use the landscape styling (for a full-width text block without float or ugly borders), you make sure that your code is wrapped in '<pre class='landscape'></pre>'. Replace landscape with portrait for proper portrait styling. This way, you can work in the visual editor (which will provide you with the proper indenting and html codes), click the "pre" button, move over to the text tab and simply add the class to the pre tag.

Okay, that whole thing is something I'm still working on. I really haven't decided how I want to do it. I'll work on it. That's just how it's working right now.