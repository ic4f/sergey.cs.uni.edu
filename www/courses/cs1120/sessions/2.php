<p>Last time we started discussing computer science, and programming in particular, using a recipe as a metaphor. A recipe that can be run on a computer is a program. But how do we communicate our recipes to a computer? 

<h4>Why do we need programming languages?</h4>
<p>As you remember, a computer doesn't "understand" anything beyond voltages. Of course, we can use voltages to encode bits (1's and 0's), a sequence of eight bits forms a byte, a byte can encode 256 different values - which can be numbers or characters, or sequences of characters, etc. Through  these layers of encodings (or layers of abstraction) we can specify a language we can use to communicate with a computer - i.e.,  a programming language.  We use a programming language to write our recipes so that they can be translated into a representation that a machine can process (i.e., from statements - to bytes and, eventually, to voltages).

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

<p>There are many different programming languages out there. Each one has a purpose, even <a href="https://en.wikipedia.org/wiki/Esoteric_programming_language">these</a>. However, a language that is particularly useful for a certain kind of domain (e.g., C++ for game development, or JavaScript for web applications) is not necessarily a language that is easy to learn. However, all languages follow the same fundamental principles, so once you have mastered one, the rest will be just new syntax. And although this is a simplification, believe me, learning your second language is peanuts compared to learning your first. 

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

<p>We will be using or Jython, which is Python, or a variant of Python (it is Python implemented in Java). What that means for us is this: Jython provides access to rich multimedia facilities. For example, if we were using plain Python, we would have to write up some non-trivial code to process an image file, but with Jython we get to use very convenient shortcuts:

<pre class="code">
pickAFile() 
makePicture(file)
show(picture)
</pre>

<p>More on this later... 

<p>Using Jython as opposed to Python, or Python as opposed to C, is a trade-off: we trade speed and efficiency for convenience. That's why the code you write in this class will run MUCH slower than the same image effects executed in Photoshop. However, our goal is not to write something as fast as Photoshop; instead our goal is to learn about programming and computer science in the context of digital media, having fun in the process. And for that Python, and Jython is an excellent tool.

<p>[move on to the lab from here]



