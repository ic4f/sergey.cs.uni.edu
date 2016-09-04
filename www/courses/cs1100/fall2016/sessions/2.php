<p>Before we move into markup and web-based (client-side) programming, let's take a closer look at the underlying technologies - the Internet and the World Wide Web. This course is not just about learning to write HTML, CSS, JavaScript, or any other markup or programming language.  We want you to gain an understanding of how this technology works. Such knowledge offers power and flexibility: you can do much more, and you are not limited to the examples you may find online: you will create your own. 

<p>It is not necessary to understand how the Web works (or how it came to be) if what you need is a specific visual effect for your web page: you simply find the right code snippet (you might even read an explanation about how to use it on stackoverflow) - copy it into your web page, cross your fingers and hope nothign breaks. Of course, when something does go wrong, you waste hours (or days) on figuring out which part of the code you borrowed is causing the problem. 

<p>The goal of this course is to give you a much deeper understanding of building web pages than what's required to be able to cut and paste bits and pieces of code. Knowledge of the core technological aspects of the Web and the Internet is essential for any kind of web development - which is why we introduce both the Internet and the World Wide Web at the beginning of our course.

<p>Following are the key points of what we covered today in class + a few links to further resources.

<h4>The Internet: origins and a few historical highlights</h4>

<ul>
    <li>1957: USSR launches <a href="https://en.wikipedia.org/wiki/Sputnik_1">Sputnik</a>
    <li> 1958: Advanced Research Projects Agency (now <a href="https://en.wikipedia.org/wiki/DARPA">DARPA</a>)
    <li>1969: <a href="https://en.wikipedia.org/wiki/ARPANET">ARPANET</a> goes online:
        <ul style="margin-top: 0;">
            <li>decentralized > distributed network
            <li>packet switching (message broken up into chunks, then rearranged at its destination) 
        </ul>
    <li>1973-74: TCP/IP (protocols: "accepted rules" for networks to communicate). That's when the term “Internet” is coined to describe how different networks can communicate with each other - i.e., how they "internetwork".
    <li>1983: TCP/IP adopted across ARPANET: can be considered the birth of the modern Internet.
</ul>

<h4>The World Wide Web: origins and basic concepts</h4>
<ul>
    <li>Invented by Tim Berners-Lee, a british scientist who was working at CERN
    <li>1989: first proposal circulated 
    <li>1990: <a href="http://info.cern.ch/hypertext/WWW/TheProject.html">first web page</a> goes online 

        <div style="text-align:center;padding:10px;">
            <a href="2_resources/screen1.png"><img src="2_resources/screen1.png" alt="first web page" style="width:40%;"></a>
            <a href="2_resources/screen2.png"><img src="2_resources/screen2.png" alt="first web page source" style="width:40%;"></a>
        </div>

    <li>1993: <a href="https://en.wikipedia.org/wiki/Mosaic_(web_browser)">Mosaic</a>, the first graphic browser is created at the University of Illinois (before that, browsers were text-based)

        <div style="text-align:center;padding:10px;">
            <a href="2_resources/mosaic.png"><img src="2_resources/mosaic.png" alt="Mosaic" style="width:40%;"></a>
        </div>

    <li>1994: <a href="http://w3c.org">The World Wide Web Consortium (W3C)</a>, the international standards organization that oversees the growth of the web, is founded. The W3C publishes specifications (which are called recommendations) which are then followed by software manufacturers which produce the technology (servers, browsers) that enables the Web.  
</ul>

<h4>Core features</h4>

<ul>
    <li><strong>URL</strong> (uniform resource locator): a unique address to identify a resource on the Web
    <li><strong>HTTP</strong>: hypertext transfer protocol: a set of rules than enable a client (your local computer) to communicate with a server (a remote computer)
    <li>A <strong>web server</strong>: a program that resides on the server (the term server can refer to both, the machine and the software that resides on it and is responsible for handling client requests)
    <li>A <strong>web browser</strong>: a program that resides on the client, is capable of making requests to the server based on the provided URL, and then displays the HTML it recieves from the server.
    <li><strong>HTML</strong>: hypertext markup language: the markup language used to describe the content of a web page
</ul>

<p>CERN did not patent this technology. We can say that the growth of the World Wide Web over the past decades has been facilitated by this decision.

<h4>Client-server model of communication</h4>

<p>The Web can be thought of as a client-server model of communciation:

<ol>
    <li>the client makes a request to the server for some resource (html file, media file, etc.)
    <li>the server processes the request and sends a response (the requested resource + additional information about the response)
    <li>the client processes the server's response and displays either the received file or an error message
</ol>

<p>The above sequence is also referred to as the request-response loop. Here's how you can view the client-server communciation that goes on: https://www.google.com/search?q=how+to+view+http+headers

<h4>Static vs dynamic websites (and how this relates to our course)</h4>

<p>Any web page is displayed as a result of a request-response loop. However, what happens on the server-end depends on the type of the website: there is a distinction between sttaic and dynamic web pages (or, more generally, websites).

<p>A <strong>static web page</strong> is an HTML file that resides on the server. When the server recieves a request for that file, it locates it and then sends it as is. Thsi could be a simple website that has only a few pages (a personal website might be a good example).

 <p>A <strong>dynamic web page</strong> is very different. Even though we still see rendered HTML, that HTML is generated by some program that resides on the server. The HTML needs to be generated because the content depends on the request (what was requested, by whom, in what context, etc...) Most websites are dynamic, so if you choose to right-click a web page and view its source code, most likely the code you see was generated by a program.

<p><strong>Client-side coding</strong> - the focus of our course - used to refer to static websites. Client-side means code to be handled by the client - i.e., the browser on your computer; and the browser handles HTML, CSS and JavaScript (in the past, used mostly for visual effects and basic validation of data users submit through forms). 

<p><strong>Server-side coding</strong> refered to writing programs that reside on the server and process user input, get data from external sources (databases and more), do any kind of calculations, and generate HTML to be sent back to the client. 

<p>However, this mapping of client-side to static websites and server-side to dynamic websites is mostly a thing of the past. Today, on the client-side we can process (somehwat limited) user input, get data from external sources (databases and more), do calculations, and generate HTML. We also use JavaScript to communicate with programs on the server, which respond by sending newly generated content; we'll discuss this more towards the end of the semester once we talk about AJAX and APIs. 

<p>Thus, today client-side coding can be far more complex than it used to be in the not-so-distant past. In our course, we will only scratch the surface. I enourage you to look beyond the topics we cover in class - what you will find is facinating tehcnology!

<h4>So, once again: what is the difference between the Intenret and the Web?</h4>
<p>In the words of <cite><a href="https://www.w3.org/People/Berners-Lee/FAQ.html#InternetWeb">Tim Berners-Lee</a></cite>:

<blockquote>
<p>"The Internet ('Net) is a network of networks. Basically it is made from computers and cables. What Vint Cerf and Bob Kahn did was to figure out how this could be used to send around little "packets" of information. As Vint points out, a packet is a bit like a postcard with a simple address on it. If you put the right address on a packet, and gave it to any computer which is connected as part of the Net, each computer would figure out which cable to send it down next so that it would get to its destination. That's what the Internet does. It delivers packets - anywhere in the world, normally well under a second.

<p>Lots of different sort of programs use the Internet: electronic mail, for example, was around long before the global hypertext system I invented and called the World Wide Web ('Web). Now, videoconferencing and streamed audio channels are among other things which, like the Web, encode information in different ways and use different languages between computers ("protocols") to provide a service.

<p>The Web is an abstract (imaginary) space of information. On the Net, you find computers -- on the Web, you find document, sounds, videos,.... information. On the Net, the connections are cables between computers; on the Web, connections are hypertext links. The Web exists because of programs which communicate between computers on the Net. The Web could not be without the Net. The Web made the net useful because people are really interested in information (not to mention knowledge and wisdom!) and don't really want to have know about computers and cables."
</blockquote>

<h4>Further Resources</h4>
<p>There are many sources on the history of the Internet and the World Wide Web. Here are just a few - detailed timelines, collections of curious facts, definitive papers and big ideas that predated today's technology:

<ul>
    <li><a href="http://www.internetsociety.org/internet/what-internet/history-internet/brief-history-internet">Brief History of the Internet</a>: a paper describing the origins and history of the Intenet, written by some of its creators
    <li><a href="http://www.theatlantic.com/magazine/archive/1945/07/as-we-may-think/303881/">As We May Think</a>: an article by Vannevar Bush, published in The Atlantic in 1945, describing a hypothetical mechanical device called the Memex which would enable links between documents. The task at hand: to make "more accessible our bewildering store of knowledge" (which may be <a href="https://www.google.com/about/company">a familiar idea</a>!) 
    <li>The Memex, even as a theoretical concept, was a precursor of hypertext, a concept <a href="http://dl.acm.org/citation.cfm?id=806036">proposed by Ted Nelson in 1965</a>: a digital file structure where "interlinking" between documents provided access to information in a nonlinear manner.
    <li><a href="https://www.w3.org/History.html">A short timeline of the World Wide Web's origins and early history</a>
    <li>...much more available on the <a href="http://www.internetsociety.org/internet">Internet Society's web site</a>
</ul>
