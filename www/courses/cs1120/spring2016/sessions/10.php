<h4>Homework 2: Solution for Question 1</h4>

<p>Don't think of a solution to the entire problem, think of the simplest step towards a solution. Implement that step, then consider the next simplest step - continue until problem is solved. Following is a very detailed example of one possible solution to question one.

<p>You need to generate a square. 
<br>You generate that square by printing characters. 
<br>You print characters one line at a time (i.e., we don't print in columns)
<br>Let's try doing this for a square of x's with side=5 (we'll worry about passing parameters later).
<br>Look at the sample result in the task:

<pre class="code">
xxxxx
x   x
x   x
x   x
xxxxx
</pre>

<p>Let's consider this one line at a time:

<pre class="code">
line 1: print 5 "x"
line 2: print "x", then 3 spaces, then "x"
line 3: print "x", then 3 spaces, then "x"
line 4: print "x", then 3 spaces, then "x"
line 5: print 5 "x"
</pre>

<p>Recall the material of chapter 3: we build up strings using concatenation. However, if we need to repeat a character a number of times, we can use multiplication (which is repeated concatenation!) So, for line 1 and 5 we can use: 

<pre class="code">
print "x" * 5
</pre>

<p>What about lines 2-4? How can we express 3 in terms of 5 (which is the size)? How about 5-2? That gives us:

<pre class="code">
print "x" + " " * (5 - 2) + "x"
</pre>


<p>Thus, we have the following code:

<pre class="code">
print "x" * 5
print "x" + " " * (5 - 2) + "x"
print "x" + " " * (5 - 2) + "x"
print "x" + " " * (5 - 2) + "x"
print "x" * 5
</pre>

<p>Consider the three inner print statements - that's repetition - and for that we should use a loop:

<pre class="code">
for i in range(0, 3):
    print "x" + " " * (5 - 2) + "x" 
</pre>

<p>Let's put it together, substituting 5-2 for 3, and adding the outer print statements:

<pre class="code">
print <span class="red">"x"</span> * <span class="green">5</span>
for i in range(0, (<span class="green">5</span> - 2)):
    print <span class="red">"x"</span> + " " * (<span class="green">5</span> - 2) + <span class="red">"x"</span> 
print <span class="red">"x"</span> * <span class="green">5</span>
</pre>

<p>Last step: see those <span class="green">5</span>'s and <span class="red">x</span>'s? Those are our parameters! On to the final solution:

<pre class="code">
def textsquare(char, size):
    print char * size
    for i in range(0, (size - 2)):
        print char + " " * (size - 2) + char 
    print char * size
</pre>

<p>You can improve this slightly - eliminating minor duplication, but that is left as an exercise for the reader.

<p>Main idea: don't try to solve the whole thing at once; break down your problem into smaller problems - and solve them one step at a time, building up towards the solution.

<h4>Back to Image Manipulation</h4>

<p>[to be posted later this week..]
 
