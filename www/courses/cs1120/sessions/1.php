<h4>Welcome to Media Computation!</h4>

<p>This course is a gentle introduction to programming and computer science. We will use digital media and text as our context and our playground. 

<p>Why study computer science? Even if you never program for a living, you may find yourself in situations where you would like to be able to make a software tool do something that it doesn’t yet do. More and more applications are allowing this kind of “end user programming” - so you may be able to <u>considerably boost your productivity</u> if you know how to take advantage of such features. Or you might want to write a script to process some data for you - i.e, rename a hundred files, find the most common words or phrases in a text, run a sequence of transformations on all images in a folder that were taken after a certain date, etc. - the list can go on.. This can be related to your job. This can be also related to your hobby, your studies, or your home media collection, your personal website, and anything else - i.e., anything you happen to care about. And once you are comfortable writing your own code, you may find yourself <u>having a lot of fun along the way</u>. 

<p>The goal of this course is to help you learn how to write simple programs, using digital media and text as context and Jython (which is a variant of Python) and JES as your first programming toolkit. 

<p>Using digital media as context helps in several ways. Computer science concepts can be quite complex to a novice and sometimes may be perceived as dry (same as ideas from math, science or engineering). The context of digital media helps: we will use examples that are visual and, therefore, are quite easy to relate to. Although, certainly, you may find that thinking in terms of abstractions (and constructing intricate models in your mind) can be just as engaging as manipulating images or sounds! 

<p>An additional benefit of using digital media in this course is learning about how stuff works. It is one thing to know how to use your favorite media editing software - i.e., what menu options to select to achieve the desirable effect. But if you understand the principle behind a given transformation, or what computation happens behind the scenes when you apply a filter, you are transitioning from experienced user to expert. Understanding media computation enables you not only to easily switch between media editing programs (they all follow the same patterns after all), but to know what is possible and what is not, and to come up with original solutions to all kinds of problems you will encounter, in digital media and beyond. 

<p>The broader goal of this course is to have you learn how to solve problems computationally. Throughout the course you will be practicing <a href="https://www.cs.cmu.edu/~15110-s13/Wing06-ct.pdf">computational thinking</a> - a skill I hope you will find most useful (more on this later!). And when you reach a point when you realize there are more ideas, approaches or languages that you would like to explore, I hope you will have learned enough about computer science and programming in this course to know how and where to look for more.

<h4>Housekeeping</h4> 
<p>My office hours are on the syllabus; however, my schedule tends to be rather flexible, so feel free to setup appointments with me outside my office hours. 

<p>The course website is this one (originally it was uni.edu/sergey/courses/cs1120). I will try to post all materials we use in class, as well as labs, assignments, and any other resources to this website. All assignments must be submitted through eLearning unless indicated otherwise. I will try to post lecture notes for most lectures, however since I am teaching this course for the first time, it may take me a few days to write up the material we discuss in class. 

<p>The course mailing list is <a href="mailto:cs-1120-01-spring@uni.edu">cs-1120-01-spring@uni.edu</a>. Feel free to use it for questions or discussions (everyone in the class can post to the list). Note that to send messages to the list, you must send them from the address from which you are subscribed. By default, that is your uni.edu e-mail address. If you prefer to use another email address, please let me know and I'll add it to the mailing list.

<p>There are three essentials to succeed in this course:
<ol>
    <li>Read the textbook. The book is very good, it is well written, it's easy and fun to read; but most importantly, the material we will be covering in this class is beautifully structured in this book; reading it throughout the semester will help you very much.
    <li>Do the examples from the book and from class. Try to replicate them. Try to understand them - i.e., try to understand each line (what does it do, why is it there, and, maybe, what happens if you change or remove it). Do this every week - that way you will encounter all the simple-but-confusing errors early, before your next assignment is due.
    <li>Never miss an assignment. If your work is incomplete, submit what you have and you may receive partial credit. 
</ol>

<h4>What computer science is about</h4>
<p>In this course we will talk about digital media and computer science. You know what's digital media, but what is computer science? It is not what you might think it is: it is said that computer science is no more about computers than astronomy is about telescopes (attributed to <a href="https://en.wikipedia.org/wiki/Edsger_W._Dijkstra">Edsger W. Dijkstra)</a>. Your textbook explains that computer science is about process - i.e., how we do things, how we specify what we do, and how we specify the stuff that we process. One way to think of process is in terms of a recipe. In fact, using a recipe as a metaphor, we can describe some of the main areas of computer science: 
<ul>
    <li>how recipes work (algorithms)
    <li>how recipes are written (programming languages and software engineering)
    <li>the units used in recipes (data structures and databases)
    <li>what recipes can be written (theory of computation, artificial intelligence)
    <li>do we like the recipes that have been written and why (human-computer interaction)
    <li>...etc.
</ul>

<p><b>EXERCISE:</b> A recipe is a sequence of steps. Try to come up with a recipe - i.e., a sequence of steps - for forming a line and exiting the classroom in case of a fire alarm. Be as detailed and explicit as you can. Write it down.

<p><b>DISCUSSION:</b> Here's the most common recipe (more or less):

<pre>

- stand up
- first row: 
  - turn left
  - move to wall
  - turn right, move forward to door
- do the same for each row while there are rows remaining
</pre>

<p>Another variation was to split each row in the middle (i.e., looking for the median to split the load - good thinking!) and form a line along both walls. There are lots of other variations of course. 

<p>Congratulations - you've written an <a href="https://en.wikipedia.org/wiki/Algorithm">algorithm</a>! Your recipes were quite explicit (i.e., there were no generalizations like "form a line") - which is good! However, as we started discussing the details, we discovered that there can be different levels of detail - i.e., how do I stand up? Do I push the chair backward? What muscles do I use? How far do I turn? How do I walk? What happens if the spot near the wall is taken? 

<p>Of course, I know what you mean by "stand up" - but if we are writing a program (which is a recipe that can be run on a computer), we need to be more specific. How specific? Each step in our recipe must describe an action the computer knows how to do - i.e., understands. What does a computer understand?

<p>Not much! In fact, a computer "understands" only voltages - nothing more! A wire may have a voltage on it, or it may not - these are the two conditions to which a computer can react. Of course voltages can be encoded as numbers: 0 for no voltage and 1 for voltage. We call this a bit (short for binary digit) - it is the smallest unit of data a computer can work with. We can then use sequences of bits to encode decimal numbers (i.e., numbers that we are used to dealing with).

<pre>

00 -> 0
01 -> 1
10 -> 2
11 -> 3
etc...
</pre>

<p>Thus, 2 digits give us 4 different values, 3 digits - 8 values, 4 digits - 16 values, etc. The pattern here, as you may have noticed, is 2<sup>n</sup>. A set of eight bits is called a byte (it can encode 256 values). Of course decimal numbers can be used to encode characters (in <a href="http://www.asciitable.com/">ASCII</a>, 65 = 'A' ). Sequences of characters form strings that can be used to encode commands (in Python, to print the number 42 to the screen you would type "print 42"). 

<p>This hierarchy of encodings (or levels of abstraction) enables us to describe fairly complicated, high-level tasks without worrying about the low-level details. Just like in your previous exercise, your steps were more like "turn left, walk to the wall, turn right..." instead of "use muscle x to do y..." - same in our programs, we write "print 42" instead of a long sequence of 1's and 0's. 

<p>In this course you will learn that writing programs is very much about building layers of abstraction: from variables - to functions - to programs, and through that - expressing more and more complex ideas. 

<h4>Wrap-up</h4>
<ol>
    <li>Computer science is the study of process.
    <li>We will use recipes as a metaphor for process.
    <li>A recipe that can be run on a computer is a program.
    <li>When specifying a recipe, state explicitly what you want the computer to do.
    <li>Each step in a recipe should be something a computer knows how to do.
</ol>

