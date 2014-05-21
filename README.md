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

*2) Syntax Highlighting*
By default, a filter called cthulusyntaxhelper [reference here](http://blog.codinghorror.com/parsing-html-the-cthulhu-way/) is turned on in this theme. I created my cthulusyntaxhelper in order to decrease the frequency of laptop-throwing upon attemps to publish readable code in my posts. This theme employs [highlight.js](http://highlightjs.org). Highlight.js requires code blocks to be wrapped in `<pre><code></code></pre>`. My cthulusyntaxhelper acts upon post content as you are saving your post. It catches the opening and closing pre, code tags, recognizes the code block, and turns all special characters within the code block into HTML entities. This way, if you want to display for readers the `<pre><code</code></pre>` code, you can do that just fine within another such block. Moreover, the cthulusyntaxhelper wont fight you if you realize you need to add some classes to those blocks. This is especially helpful as I build out the (class-based) syntax styling features. Note that you will be able to see the changes my cthulusyntaxhelper wrought in the text editor immediately after a save. 

At this time, there is no option to turn off the cthulusyntaxhelper or disable it for specific instances, however. Additionally, it will add the text "Error" to the beginning of your post if opening and closing tags don't match up correctly. This is merely a temporary way of it handling such errors, which I intend to fix up later.

Of note: I recognize that syntax highlighting is more of a plugin feature than a theme feature, and I don't care. At this time, I would prefer my work here to come as a package deal.