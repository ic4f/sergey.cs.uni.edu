<h4>Welcome to Media Computation!</h4>

<p>This course is a gentle introduction to programming and computer science. We will use digital media and text as our context and our playground. 

<p>Why study computer science? Even if you never program for a living, you may find yourself in situations where you would like to be able to make a software tool do something that it doesn’t yet do. More and more applications are allowing this kind of “end user programming” - so you may be able to <u>considerably boost your productivity</u> if you know how to take advantage of such features. Or you might want to write a script to process some data for you - i.e, rename a hundred files, find the most common words or phrases in a text, run a sequence of transformations on all images in a folder that were taken after a certain date, etc. - the list can go on.. This can be related to your job. This can be also related to your hobby, your studies, or your home media collection, your personal website, and anything else - i.e., anything you happen to care about. And once you are comfortable writing your own code, you may find yourself <u>having a lot of fun along the way</u>. 

<p>The goal of this course is to help you learn how to write simple programs, using digital media and text as context and Jython (which is a variant of Python) and JES as your first programming toolkit. 

<p>Using digital media as context helps in several ways. Computer science concepts can be quite complex to a novice and sometimes may be perceived as dry (same as ideas from math, science or engineering). The context of digital media helps: we will use examples that are visual and, therefore, are quite easy to relate to. Although, certainly, you may find that thinking in terms of abstractions (and constructing intricate models in your mind) can be just as engaging as manipulating images or sounds! 

<p>An additional benefit of using digital media in this course is learning about how stuff works. It is one thing to know how to use your favorite media editing software - i.e., what menu options to select to achieve the desirable effect. But if you understand the principle behind a given transformation, or what computation happens behind the scenes when you apply a filter, you are transitioning from experienced user to expert. Understanding media computation enables you not only to easily switch between media editing programs (they all follow the same patterns after all), but to know what is possible and what is not, and to come up with original solutions to all kinds of problems you will encounter, in digital media and beyond. 

<p>The broader goal of this course is to have you learn how to solve problems computationally. Throughout the course you will be practicing <a href="https://www.cs.cmu.edu/~15110-s13/Wing06-ct.pdf">computational thinking</a> - a skill I hope you will find most useful (more on this later!). And when you reach a point when you realize there are more ideas, approaches or languages that you would like to explore, I hope you will have learned enough about computer science and programming in this course to know how and where to look for more.

<h4>Housekeeping</h4> 
<p>My office hours are on the syllabus; however, my schedule tends to be rather flexible, so feel free to setup appointments with me outside my office hours. 

<p>The course website is this one. I will post most of the materials we use in class, as well as labs, assignments, and any other resources to this website. All assignments must be submitted through eLearning unless indicated otherwise. 

<p>The course mailing list is <a href="mailto:cs-1120-01-spring@uni.edu">cs-1120-01-spring@uni.edu</a>. Feel free to use it for questions or discussions (everyone in the class can post to the list). Note that to send messages to the list, you must send them from the address from which you are subscribed. By default, that is your uni.edu e-mail address. If you prefer to use another email address, please let me know and I'll add it to the mailing list.

<p>There are three essentials to succeed in this course:
<ol>
    <li>Read the textbook. The book is very good, it is well written, it's easy and fun to read; but most importantly, the material we will be covering in this class is beautifully structured in this book; reading it throughout the semester will help you very much.
    <li>Do the examples from the book and from class. Try to replicate them. Try to understand them - i.e., try to understand each line (what does it do, why is it there, and, maybe, what happens if you change or remove it). Do this every week - that way you will encounter all the simple-but-confusing errors early, before your next assignment is due.
    <li>Never miss an assignment. If your work is incomplete, submit what you have and you may receive partial credit. 
</ol>

<h4>What computer science is about</h4>
<p>In this course we will talk about digital media and computer science. You know what's digital media, but what is computer science? For starters, it is not really a science (we don't learn about computation through systematic observation, at least not for the most part). But it is not really about computers either: it is said that computer science is no more about computers than astronomy is about telescopes (attributed to <a href="https://en.wikipedia.org/wiki/Edsger_W._Dijkstra">Edsger W. Dijkstra)</a>. The same can be said about biology and microscopes, physics and particle accelerators. Computers in computer science are not so much the <em>essence</em> of the field as they are the <em>tools</em> of the field. The essence of computer science is the study of process - i.e., how we do things, how we specify what we do, and how we specify the stuff that we process.  

<p>One way to think of process is in terms of a recipe. In fact, using a recipe as a metaphor, we can describe some of the main areas of computer science: 

<ul>
    <li>how recipes work (algorithms)
    <li>how recipes are written (programming languages and software engineering)
    <li>the units used in recipes (data structures and databases)
    <li>what recipes can be written (theory of computation, artificial intelligence)
    <li>do we like the recipes that have been written and why (human-computer interaction)
    <li>...etc.
</ul>

<p><b>EXERCISE:</b> A recipe is a sequence of steps. Try to come up with a recipe - i.e., a sequence of steps - for forming a line and exiting the classroom in case of a fire alarm. Be as detailed and explicit as you can. Write it down.

<p><b>DISCUSSION:</b> We discussed two versions of this recipe, and here's one:

<pre class="code">
- gather your things
- stand up
- move chair 
- choose nearest door
- walk to wall past last table
- turn
- walk to door
- if door is closed, open door
- etc...
</pre>

<p>Another variation was a more general set of steps - which was just as valid. There are lots of other variations of course. 

<p>Congratulations - you've written an <a href="https://en.wikipedia.org/wiki/Algorithm">algorithm</a>!

However, as we started discussing the details, we discovered that there can be different levels of detail - i.e., even the detailed recipe raised questions: how do I stand up? Do I push the chair backward before I stand up? What muscles do I use? How far do I turn? How do I walk? What happens if the spot near the wall is taken? How do I choose the nearest door?

<p>Of course, I know what you mean by "stand up" - but if we are writing a program (which is a recipe that can be run on a computer), we need to be more specific. But how specific? That's the question we will address next time, as well as how we communicate this algorithm to a computer so that it can "understand" it.

<h4>Wrap-up</h4>
<ol>
    <li>Computer science is the study of process.
    <li>We will use recipes as a metaphor for process.
    <li>A recipe that can be run on a computer is a program.
    <li>When specifying a recipe, state explicitly what you want the computer to do. (more on this next time)
</ol>

