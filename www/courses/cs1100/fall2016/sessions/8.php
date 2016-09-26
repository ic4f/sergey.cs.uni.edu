<p>[this is a draft]

<p>Why do we need different approaches? Because, unlike in the world of print where the size of the page does not change once it has been printed, a web page will be viewed on very different devices, that come with screens which have different resolution (and other) capabilities - which leads to a variety of viewing experiences. 

<p>In the past, one could build several different versions of the same web page to satisfy different types of screens (which was very tedious work for the coder!). Today. however, this is not a realistic approach: the variety of screen capabilities is simply too great. Thus, we try to build our webpage in a way to accommodate any screen.

<p>We discussed three approaches to website layout:
<ul>
    <li>fixed
    <li>fluid (or liquid)
    <li>responsive
</ul>

<p>We looked at (almost) the same web page that used fixed, fluid and responsive layout:

<ul>
    <li>Fixed: <a href="8_resources/layout1.html">html</a> | <a href="8_resources/style1.css">css</a>
    <li>Fluid: <a href="8_resources/layout2.html">html</a> | <a href="8_resources/style2.css">css</a>
    <li>Responsive: <a href="8_resources/layout3.html">html</a> | <a href="8_resources/style3.css">css</a>
</ul>

<p>As a reminder:

<p>In <b>fixed layout</b> we use absolute units of measurement (pixels, inches, points, etc.) to specify the position and size of HTML elements. The advantages of fixed layout are:
<ul>
    <li>The designer gets to specify the layout exactly how they envision it
    <li>The layout will stay fixed on any screen or device 
    <li>It's easy! When the layout is fixed, we don't have to worry about a column shifting when the window is resized
</ul>

<p>The main disadvantage of fixed layout is that it will stay fixed on any screen - and unlike the 90s, today we have a lot of different screens on a lot of different devices. Our layout is guaranteed to be suboptimal (usually, with excessive white space) on most! (and barely readable on mobile devices). 

<p>In <b>fluid (or liquid) layout</b>, we use relative units (%, em, rem, etc.). The main advantage of fluid layout is that it adjusts to almost any screen size: a website that is 80% wide on a high resolution desktop monitor will be still 80% on a small screen.

<p>The disadvantage is that even though it adjusts to any screen size, the result of this adjustment is not necessarily satisfactory. A high resolution screen will result in a page that is too wide - both aesthetically, and in terms of readability: the lines will become too long. On a small screen, on the other hand, if the page elements don't have a minimum width specified, the page may become unusable. 

<p>In <b>responsive layout</b>, the website "responds" to the screen's (and device's) capabilities by rearranging its content to provide the user with an optimal experience regardless of the type of device used to access it. 

<p>We'll address responsive layout in more detail in our next section.
