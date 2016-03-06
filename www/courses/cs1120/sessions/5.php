<p>Last time we discussed data types, variables and assignment statements. Today we will take a first look at functions. 

<h4>How to create a function</h4>
<p>Recall, that to open an image we wrote the following code:

<pre class="code">
>>> filename = pickAFile()
>>> picture = makePicture(filename)
>>> show(picture)
</pre>

<p>Let's look at what's going on here:

<ol>
<li>We call the function pickAFile, which enables us to select a file on our computer and then returns the full path to that file, which we assign to a variable, filename:

<pre class="code">
>>> filename = pickAFile()
>>> filename
'C:\\Users\\sergey\\Desktop\\sergey.jpg'
</pre>

<li>We call the function makePicture passing variable filename as an argument; the function returns a picture object which we assign to a variable, picture:

<pre class="code">
>>> picture = makePicture(filename)
>>> picture
Picture, filename C:\Users\sergey\Desktop\sergey.jpg height 251 width 200
</pre>

<li>We call the show function, passing the picture object as an argument. The function displays the image in a separate window.
</ol>

<p>So, we display an image  by executing these three statements all together. If we want to display another image, we have to type these three lines again - i.e., we type them for every single picture we want to show. Wouldn't it be nice if we could simplify this by typing just one command, for example pickAndShow? It turns out that's very easy to do!

<p>Consider this. Our goal is to show a picture. We have a process for that; a process that consists of three steps. We know how to execute each step. In other words, we have a recipe for showing a picture. Let's formalize this recipe so that our computer can understand it:

<pre class="code">
def pickAndShow():
    filename = pickAFile()
    picture = makePicture(filename)
    show(picture)
</pre>

<p>We define (keyword def) the word pickAndShow as the name of a our recipe for showing a picture. We can now use this recipe by simply calling it by its name. In other words, we have created a function, pickAndShow, that we can call anytime we want to display an image. 

<h4>Defining a function in JES</h4>
<p>When using JES, define your functions in the program area (not the command area). You can use the command area, but it's less convenient for writing multi-line blocks of code; besides, you cannot save the code you type into the command area - which is what you want to do with your function.

<p>Type in the code for your function definition. Then hit the Load Program button - you will be prompted to save your code as a file - save it with a ".py" filename extension (for example, "myprogram.py"). Then hit the Load Program again - this will load your code into JES, and your function will be available to you - you can now call it from the command area. 

<h4>Why we need functions</h4>
<p>But why go through all this trouble? There are many reasons; here are just a few that are relevant in the context of our class:
<ol>
<li>Next time you need to display an image, you DON'T want to remember what code you should write to get the path to the file, then create a picture object, and then display the picture - you should only need to remember the name of your new function: pickAndShow. 
<li>Functions you write later in this class will be more complicated than this example (which is quite trivial). Without a function, not only you would have to remember the code you wrote, you would need to remember the logic of your solution that your code implements - and implement it - without any errors or typos - all over again.
<li>As you learn how to implement more and more interesting ideas, your programs will get more complicated. Using functions simplifies your code - it becomes much easier to read and understand. Functions help you focus on the big picture and not get lost in implementation details. Recall our exercise on the first day of class: imagine that instead of just "turning left" we would have to plan which muscles, and in what succession we need to activate to accomplish a left turn!
</ol>
<p>Therefore, whenever you have code that is likely to be reused, you may want to turn that code into a function, and call the function instead of rewriting all the code over and over again. 

<h4>Using parameters to make our function more useful</h4>
<p>Our function is not very useful because it requires us to manually select a file every time we call it. If we wanted to display several files - i.e., all the files in a folder, this would be very annoying. If we knew the filename, we could modify our function: 

<pre class="code">
def pickAndShow():
    filename = "C:\Users\sergey\Desktop\0301\sergey.jpg"
    picture = makePicture(filename)
    show(picture)
</pre>

<p>However, now our function works for one file only - which makes it not very useful. 

<p>A good function is one that handles the general case - i.e., we want to reuse the same code for displaying ANY image. We can <b>abstract away</b> the filename by passing it as an <b>argument</b> to the function. To do that, we rewrite our function definition, so that now our function can take a parameter:

<pre class="code">
def pickAndShow(filename):
    picture = makePicture(filename)
    show(picture)
</pre>

<p>Notice that instead of the empty parenthesis, we have the word filename following the function name. This is your parameter, or input variable. When you call the function like this: 


<pre class="code">
>>> pickAndShow("C:\Users\sergey\Desktop\0301\sergey.jpg")
</pre>

- the file path in parentheses is assigned to the input variable filename - which is then used in the body of the function.

<p>Now we can call our function for any image file, and we don't have to rewrite any of its code. 

<p>Keep in mind: when you <b>define</b> a function, you specify <b>parameters</b>; when you <b>call</b> a function, you call it with <b>arguments</b>. So:

<pre class="code">
def printName(name):
    print name
</pre>

- in the code above, name is the parameter; 

<pre class="code">
>>> printName("Arthur")
</pre>

- in the code above, "Arthur" is the argument.

<p>Functions are essential to what we do in this class (and to programming in general). Make sure you have read and understood Chapter 2 before moving forward. By all means, try to write your own functions - you may be surprised how easy that is, and how much that simplifies your programming tasks!



