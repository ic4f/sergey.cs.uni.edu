
<h4>Plan for today:</h4>
<ol>
    <li><a href="#1">What is a markup language</a>
    <li><a href="#2">HTML: versions, browser wars, standards movement</a>
    <li><a href="#3">HTML syntax</a>
    <li><a href="#4">Structure of an HTML document</a>
    <li><a href="#5">Debugging and validating your code</a>
</ol>

<a name="1"></a>
<h4>1. What is a markup language</h4>
<p>HTML stands for <b>H</b>yper<b>t</b>ext <b>M</b>arkup <b>L</b>anguage. Markup is used to annotate text. A markup <em>language</em> is used to annotate text in a systematic way. In the world of print, markup could be editing instructions added to a manuscript by an editor. In school, markup could be the corrections a teacher makes to a student's paper. In a web page, markup is instructions on how to display the content (or, more precisely, a description of that content's structure). 

<p>In other words, markup is information about the content.

<p>As you remember, a web page is nothing but plain text. That text consists of (a) text to be displayed, and (b) instructions on how to display it. The browser should be able to tell the difference between the two. And since the browser is a computer program, it will only understand precise instructions. That's exactly what HTML does: it uses a precise syntactic construct, called tags, to separate text from markup - i.e., text to be displayed from text to be interpreted as instructions. 

<p>Here's an example:

<pre>
<p>This is a paragraph
</pre>

<p>The text "This is a paragraph" is just text - so it will be displayed. 
<p>The text "<p>" is a tag - so it won't be displayed. Instead, it will be interpreted by the browser as a "paragraph" tag, so the browser will display everything that follows this tag on a new line. 

<p>Thus, HTML is a formal language used for describing the structure of a web page, that is understood by the browser.

<a name="2"></a>
<h4>2. HTML: versions, browser wars, standards movement</h4>
1991: first web page goes online
1997: The W3C releases the specification of HTML 4.0 as a W3C Recommendation 
"Browser wars" and the Web Standards movement:
refers to the struggle among browser manufacturer's for market dominance. The most iconic was, probably, the struggle between Internet Explorer and Netscape Navigator in the late 90s and throughout the early 2000s. 
occasional positive outcome: introduction of useful features (JavaScript, first CSS implementation)
negative consequences: 
fragmentation of the Web, incompatible browsers offering features that "work best in" or, often, only in a specific browser
cost of web development skyrockets (multiple versions of the same web page written to accommodate multiple browsers)
impossible to predict how different browsers will handle invalid or incompatible markup
...and many, many more!
Web Standards Project: represents the Web standards movement, an attempt to bring the web development community to follow standards developed by the W3C (read this for a quick overview: http://www.webstandards.org/about/history/ )
HTML goes through several versions (XHTML 1.0 Strict; XHTML 1.0 Transitional)
HTML5 / current version: started by a small subcommittee of the W3C, adopted by the W3C as the HTML new standard version in 2009 (development of XHTML 2.0 abandoned)
HTML5 is:
a new version of HTML, with new elements, attributes, and behaviors
a larger set of technologies that enables the development of rich media/interaction websites and web  applications

<a name="3"></a>
<h4>3. HTML syntax </h4>
<p>Besides the material offered by your textbook, there are lots of HTML tutorials and other resources available online. Here's a very brief overview of HTML: https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Introduction
Here's a great place to start: https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML
(look at the guides!)
<p>And if this looks overwhelming, start simple: https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web

<p>Following are a few key points from our class discussion.

An HTML document consists of text content and HTML elements containing information about that content.
An HTML element:
is denoted by one or two (opening and closing) tags 
may contain textual content or other HTML elements. 
A tag contains the name of the element and, optionally, one or more attributes.
An attribute provides additional information about the HTML element, and has the form of a name/value pair

<p>Here's an example of an HTML element:

<a href="http://uni.edu">University of Northern Iowa</a>

a
<a href="http://uni.edu">
</a>
University of Northern Iowa
href
http://uni.edu
name of HTML element (a is short for anchor)
opening tag
closing tag
content of the element
attribute name
attribute value

<p>Having learned the syntax of HTML you will be able to read any HTML document you encounter. More importantly, it will be much easier for you to write HTML (regardless of the tags or attributes you use), and it will be much easier for you to debug your code. So, think of HTML syntax NOT in terms of the elements (and tags) you have already seen, but in terms of patterns:
    
<tag> 
<tag>some content</tag>
<tag attribute="value">
<tag attribute-1="value" attribute-2="value">
...and any combination of the above!

<p>There are lots of HTML elements, and you should not try to learn them all. As you construct more and more web pages, you will come to know more and more HTML elements, many of which you will eventually remember.  But there's no need to memorize them on purpose. There are many references available online. When you come across an element you don't know - look it up! Here's an excellent resource:
https://developer.mozilla.org/en-US/docs/Web/HTML/Element

<a name="4"></a>
<h4>4. Structure of an HTML document</h4>
<p>An HTML document consists of 2 main parts: the head and the body:
the HEAD contains information about the web page (not displayed by the browser)
the BODY contains the web page content (this is what your browser displays)



<p>Here are a few more detailed resources:
https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML/Getting_started#Anatomy_of_an_HTML_document
https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML/The_head_metadata_in_HTML

<p>In HTML5, the <html>, <head> and <body> tags are optional. If you don't include them, the html, head and body HTML elements still exist - they are implied, so you can style them with CSS or manipulate them with JavaScript.

<p>Thus, the source code of the smallest valid HTML document would look like this: 

<!DOCTYPE html><title> </title>

<p>(Note the space: the title cannot be empty)

<p>However, my strong recommendation is to include three tags of these elements. Code is written to be read by humans; that includes others who will read your code, and you - for you will be reading (and editing) it over and over again while developing your web site. Separating the head (with information about your content) from the actual content makes coding much easier! In other words, keep the meta data separate from the data!

<a name="5"></a>
<h4>5. Debugging and validating your code</h4>
<p>Here's a good set of guidelines on how to debug your HTML:
https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML/Debugging_HTML

<p>When using the W3C HTML validator: https://validator.w3.org/ do not be scared by many errors: ususally fixing the first one takes care of most of the rest (a missed quotation mark can cause a lot od errors to "trickle down" the source code: adding the missed quote could fix them all!)

<p>Overall, pay attention to detail: you are writing "for a computer" - and computers only follow instructions. Miss a character, and the precise instruction will fall apart. So when you see a mess, look at your code and try to imagine how a computer would read that code - i.e., character by character. Where, do you think, it could have seen a character that confused it?

<p>Also, pay attention to syntax highlighting in your editor: you will immediately see when something is off.

<p>Try to spot the errors in these examples (the first one has no errors, the rest have ONE character missed or mistyped):





<p>Exercise: find the errors!

<ul>
    <li><a href="3_resources/noerror.html">no error</a>
    <li><a href="3_resources/error1.html">error 1</a>
    <li><a href="3_resources/error2.html">error 2</a>
    <li><a href="3_resources/error3.html">error 3</a>
    <li><a href="3_resources/error4.html">error 4</a>
</ul>

