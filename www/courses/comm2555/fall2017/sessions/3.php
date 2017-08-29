
<p><a href="3.pdf">Download lecture slides</a>

<h4>Plan for today:</h4>

<ol>
    <li><a href="#1">What is a markup language</a>
    <li><a href="#2">HTML syntax</a>
    <li><a href="#3">Structure of an HTML document</a>
</ol>

<h4 id="1">1. What is a markup language</h4>
<p>HTML stands for <b>H</b>yper<b>t</b>ext <b>M</b>arkup <b>L</b>anguage. Markup is used to annotate text. A markup <em>language</em> is used to annotate text in a systematic way. In the world of print, markup could be editing instructions added to a manuscript by an editor. In school, markup could be the corrections a teacher makes to a student's paper. In a web page, markup is instructions on how to display the content (or, more precisely, a description of that content's structure). 

<p>In other words, markup is information about the content.

<p>As you remember, a web page is nothing but plain text. That text consists of (a) text to be displayed, and (b) instructions on how to display it. The browser should be able to tell the difference between the two. And since the browser is a computer program, it will only understand precise instructions. That's exactly what HTML does: it uses a precise syntactic construct, called tags, to separate text from markup - i.e., text to be displayed from text to be interpreted as instructions. 

<p>Here's an example:

<pre class="code">
<?php echo(htmlspecialchars('<p>This is a paragraph')); ?>
</pre>

<p>The text "This is a paragraph" is just text - so it will be displayed. 
<p>The text "&lt;p&gt;" is a tag - so it won't be displayed. Instead, it will be interpreted by the browser as a "paragraph" tag, so the browser will display everything that follows this tag on a new line. 

<p>Thus, HTML is a formal language used for describing the structure of a web page, that is understood by the browser.

<h4 id="2">2. HTML syntax </h4>
<p>Besides the material offered by your textbook, there are lots of HTML tutorials and other resources available online. 
<ul>
    <li><a href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Introduction">Here's a very brief overview of HTML</a>  
    <li><a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML">Here's a great place to start</a> (look at the guides!)
    <li>And if this looks overwhelming, <a href="https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web">start simple</a>
</ul>

<p>Following are a few key points from our class discussion.

<ul>
    <li>An HTML document consists of text content and <b>HTML elements</b> containing information about that content.
    <li>An HTML element:
        <ul>
            <li>is denoted by one or two (opening and closing) <b>tags</b> 
            <li>may contain textual content or other HTML elements. 
        </ul>
    <li>A tag contains the name of the element and, optionally, one or more <b>attributes</b>.
    <li>An attribute provides additional information about the HTML element, and has the form of a name/value pair
</ul>
<p>Here's an example of an HTML element:

<p><img src="4_resources/html_element.png" alt="html element">

<p>Having learned the syntax of HTML you will be able to read any HTML document you encounter. More importantly, it will be much easier for you to write HTML (regardless of the tags or attributes you use), and it will be much easier for you to debug your code. So, think of HTML syntax NOT in terms of the elements (and tags) you have already seen, but in terms of patterns:

<pre class="code">&lt;tag&gt; 

&lt;tag&gt;some content&lt;/tag&gt;

&lt;tag attribute="value"&gt;

&lt;tag attribute-1="value" attribute-2="value"&gt;

...and any combination of the above!
</pre>

<p>There are lots of HTML elements, and you should not try to learn them all. As you construct more and more web pages, you will come to know more and more HTML elements, many of which you will eventually remember.  But there's no need to memorize them on purpose. There are many references available online. When you come across an element you don't know - look it up! 
<a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Here's an excellent resource</a>.


<h4 id="3">3. Structure of an HTML document</h4>
<p>An HTML document consists of 2 main parts: the head and the body:
<ul>
    <li>the <b>HEAD</b> contains information about the web page (not displayed by the browser)
    <li>the <b>BODY</b> contains the web page content (this is what your browser displays)
</ul>

<p><img src="4_resources/structure.png" alt="html element">


<p>Here are a few more detailed resources:
<ul>
    <li><a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML/Getting_started#Anatomy_of_an_HTML_document">Anatomy of an HTML document</a>
    <li><a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML/The_head_metadata_in_HTML">What's in the head?</a>
</ul>

<p>In HTML5, the &lt;html&gt;, &lt;head&gt; and &lt;body&gt; tags are optional. If you don't include them, the html, head and body HTML elements still exist - they are implied, so you can style them with CSS or manipulate them with JavaScript.

<p>Thus, the source code of the smallest valid HTML document would look like this: 

<pre class="code">
        <?php echo(htmlspecialchars("<!DOCTYPE html><title> </title>")); ?>
</pre>

<p>(Note the space: the title cannot be empty)

<p>However, my <strong>strong</strong> recommendation is to include three tags of these elements. Code is written to be read by humans; that includes others who will read your code, and you - for you will be reading (and editing) it over and over again while developing your web site. Separating the head (with information about your content) from the actual content makes coding much easier! In other words, keep the meta data separate from the data!


