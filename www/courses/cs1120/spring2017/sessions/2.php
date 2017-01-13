<h4>What does a computer "understand"?</h4>

<p>Last time we designed a simple "recipe" (an algorithm). We agreed that if we were to write down our recipe in a way that a computer could understand it, we need to be more specific. But how specific? Each step in our recipe must describe an action the computer knows how to do - i.e., understands. So what does a computer understand?

<p>Not much! In fact, a computer "understands" only voltages - nothing more! A wire may have a voltage on it, or it may not - these are the two conditions to which a computer can react. Of course voltages can be encoded as numbers: 0 for no voltage and 1 for voltage. We call this a bit (short for binary digit) - it is the smallest unit of data a computer can work with. We can then use sequences of bits to encode decimal numbers (i.e., numbers that we are used to dealing with).

<pre class="code">
00 -> 0
01 -> 1
10 -> 2
11 -> 3
etc...
</pre>

<p>Hence, there are only <span style="color:navy; font-weight:bold;">10</span> types of people: those who get binary, and those who don't ;-)

<p>Thus, 2 digits give us 4 different values, 3 digits - 8 values, 4 digits - 16 values, etc. The pattern here, as you may have noticed, is 2<sup>n</sup>. A set of eight bits is called a byte (it can encode 256 values). Of course decimal numbers can be used to encode characters (in <a href="http://www.asciitable.com/">ASCII</a>, 65 = 'A' ). Sequences of characters form strings that can be used to encode commands (in Python, to print the number 42 to the screen you would type "print 42"). 

<p>This hierarchy of encodings (or levels of abstraction) enables us to describe fairly complicated, high-level tasks without worrying about the low-level details. Just like in your previous exercise, your steps were more like "turn left, walk to the wall, turn right..." instead of "use muscle x to do y..." - same in our programs, we write "print 42" instead of a long sequence of 1's and 0's. 

<p>In this course you will learn that writing programs is very much about building layers of abstraction: from variables - to functions - to programs, and through that - expressing more and more complex ideas. 

<p>Last time we started discussing computer science, and programming in particular, using a recipe as a metaphor. A recipe that can be run on a computer is a program. But how do we communicate our recipes to a computer? 

<h4>Why do we need programming languages?</h4>
<p>So, a computer doesn't "understand" anything beyond voltages. Of course, we can use voltages to encode bits (1's and 0's), a sequence of eight bits forms a byte, a byte can encode 256 different values - which can be numbers or characters, or sequences of characters, etc. Through  these layers of encodings (or levels of abstraction) we can specify a language we can use to communicate with a computer - i.e.,  a programming language.  We use a programming language to write our recipes so that they can be translated into a representation that a machine can process (i.e., from statements - to bytes and, eventually, to voltages).

<p>Why can’t we just use English, Russian, Chinese, or any other natural language? After all, it's just yet another layer of encoding? It turns out that we can't. Natural language is <b>ambiguous</b> and <b>imprecise</b>. Consider the following sentence: "I saw the man in the park with the telescope" - does it have one definitive meaning? Here's a more fun example: "I made her duck" - can you come up with FIVE different meanings of this phrase?
<p>. . .
<p>. . .
<p>. . .
<p>. . .
<p>. . .
<p>ANSWER:

<ul>
    <li>I cooked waterfowl for her benefit (to eat)
    <li>I cooked waterfowl belonging to her
    <li>I created the (plaster?) duck she owns
    <li>I caused her to quickly lower her head or body
    <li>I waved my magic wand and turned her into undifferentiated waterfowl
</ul>
<em style="font-size:0.9em">(from Speech and Language Processing by <a href="http://web.stanford.edu/~jurafsky/">Daniel Jurafsky</a> & <a href="https://www.cs.colorado.edu/~martin/">James H. Martin</a>)</em>

<p>We share a vast sense of common knowledge and experience - which is why we (usually) understand each other. Computers do not share with us that common knowledge and experience. Hence, <b>we use special notation</b>: programming languages, which come with:
<ul>
    <li><b>Precise form (syntax)</b>
    <li><b>Precise meaning (semantics)</b>
</ul>
...which is why attention to detail is so important!

<p>It is like a “secret” code! And, indeed, we refer to programming as coding or writing code.

<h4>Why Python?</h4>
<p>We will be using Python. Why Python, you might ask. Why not C++ (which, arguably, <a href="http://tech.co/highest-paying-programming-languages-2015-03">pays the most</a>), or maybe JavaScript (one of the most "popular" languages - i.e., everyone has heard of it)? 

<p>There are many different programming languages out there. Each one has a purpose, even <a href="https://en.wikipedia.org/wiki/Esoteric_programming_language">these</a>. However, a language that is particularly useful for a certain kind of domain (e.g., C++ for game development, or JavaScript for web applications) is not necessarily a language that is easy to learn. However, all languages follow the same fundamental principles, so once you have mastered one, the rest will be just new syntax. And although this is a simplification, believe me, learning your second language is much easier compared to learning your first. 

<p>Python is an excellent choice for a first language: its syntax is intuitive, there's little syntactic overhead, and the learning curve is much friendlier compared to many other languages. Compare these:

<p>Print "Hello, world!" in Java:

<pre class="code">
public class HelloApp {
    public static void main(String[] args) {
        System.out.println("Hello, World!");
    }
}
</pre>

<p>Same in Python:

<pre class="code">
print("Hello, World!")
</pre>

<p>At the same time, Python is extremely popular in the corporate and open source world and is used by many organizations, <a href="https://wiki.python.org/moin/OrganizationsUsingPython">some of which you might have heard of</a>. So fear not - what you'll be learning is no joke... even though the language <a href="https://docs.python.org/2/faq/general.html#why-is-it-called-python">is named after a BBC comedy series!</a>

<p>More specifically, we will be using Jython, which is Python, or a variant of Python (it is Python implemented in Java). What that means for us is this: Jython provides access to rich multimedia facilities. For example, if we were using plain Python, we would have to write up some non-trivial code to process an image file, but with Jython we get to use very convenient shortcuts:

<pre class="code">
pickAFile() 
makePicture(file)
show(picture)
</pre>

<p>More on this later... 

<p>The code you write in this class will run MUCH slower than the same image effects executed in Photoshop. However, our goal is not to write something as fast as Photoshop; instead our goal is to learn about programming and computer science in the context of digital media, having fun in the process. And for that Python, and Jython is an excellent tool.

<p>[move on to the lab from here]



