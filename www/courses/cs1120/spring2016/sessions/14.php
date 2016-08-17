

<h4>Lab 7 Walkthrough</h4>
<p>Today we did a lab where we blended two images into one:

<p><img src="../mediasources/session14/boehner.jpg" width="32%" alt="John Boehner">
<img src="../mediasources/session14/flag.jpg" width="32%" alt="US flag">
<img src="../mediasources/session14/blended1.jpg" width="32%" alt="blended version 1">

<p>We then modified our function and produced a better blend, giving more weight to the face:

<p><img src="../mediasources/session14/blended2.jpg" width="32%" alt="blended version 2">

<p>However, the point of this exercise was not really to produce a cool visual effect, as to practice improving our code by making it more general and less specific. Consider our initial function: (empty lines added for readability)

<pre class="code">
def mixFaceAndFlag():
  face = makePicture("boehner.jpg")
  flag = makePicture("flag.jpg")
  canvas = makeEmptyPicture(450, 300)    

  for x in range(450):
    for y in range(300):
      pixel1 = getPixel(face, x, y)
      pixel2 = getPixel(flag, x, y)
      pixel3 = getPixel(canvas, x, y)           

      r = getRed(pixel1) * 0.5 + getRed(pixel2) * 0.5
      g = getGreen(pixel1) * 0.5 + getGreen(pixel2) * 0.5
      b = getBlue(pixel1) * 0.5 + getBlue(pixel2) * 0.5                        

      setColor(pixel3, makeColor(r, g, b))            

  return canvas
</pre>

<p>This function produces the desired visual effect, but only for two specific images. As such, it is useless in any other context. When you end up with code like this, ask yourself: what do I really want my code to do here? Do I want to blend the photo of the former Speaker of the House with a photo of the american flag? More likely, I want to blend two images. Furthermore, after experimenting with different weights applied to each image, I want to be able to specify the relative weights of these images, so that I can give more emphasis to one or the other. 

<p>If we look at our initial solution, we can identify values that are specific to the two pictures we've used so far. Let's replace these with variables that we can pass to our function as arguments. This way, our function definition changes to the following (we'll change its name to something more appropriate as well):

<pre class="code">
#pic1 and pic2 must be same dimensions, 0 <= ratio <= 1 
def blendTwoImages(pic1, pic2, ratio):
  width = getWidth(pic1)
  height = getHeight(pic1)
  canvas = makeEmptyPicture(width, height)  

  for x in range(width):
    for y in range(height):
      pixel1 = getPixel(pic1, x, y)
      pixel2 = getPixel(pic2, x, y)
      pixel3 = getPixel(canvas, x, y)      

      r = getRed(pixel1) * ratio + getRed(pixel2) * (1 - ratio)
      g = getGreen(pixel1) * ratio + getGreen(pixel2) * (1 - ratio)
      b = getBlue(pixel1) * ratio + getBlue(pixel2) * (1 - ratio)                       

      setColor(pixel3, makeColor(r, g, b))            

  return canvas 
</pre>

<p>Our new function does exactly the same thing as our initial function. However, now it works for ANY two images (of the same dimensions), and it allows us to specify the weight ratio so we can choose which image to emphasize, and to what extent. This makes our function much more useful. 

<h4>Tips for Lab 6 / Homework 4</h4>
<p>Last week we didn't have enough time to discuss the solution for creating a simple collage (four copies of one photo displayed on a larger canvas). Let's try it now.

<p>As usual, we start by considering what exactly our code needs to do. So, we are defining a function that:
<ul>
<li>takes a picture as an argument (we'll call it source)
<li>creates an empty canvas with dimensions that are twice the size of the input picture: x*2, y*2
<li>iterates over the pixels of the source picture, and for each pixel:
    <ul>
        <li>gets its color
        <li>sets the color of the corresponding pixel on the canvas to the color of the source pixel; and does this four times in different locations. 
    </ul>
</ul>

<p>Since we are dealing with location, we need the x,y coordinates of each pixel - so we use a nested for loop. 

<p>Here is one possible solution:

<pre class="code">
def make2x2(pic):
  width = getWidth(pic)
  height = getHeight(pic)
  canvas = makeEmptyPicture(width*2, height*2)

  for x in range(width):
    for y in range(height):
      color = getColor(getPixel(pic, x, y))
      pixel1 = getPixel(canvas, x, y)
      pixel2 = getPixel(canvas, x+width, y)
      pixel3 = getPixel(canvas, x, y+height)
      pixel4 = getPixel(canvas, x+width, y+height)

      setColor(pixel1, color)
      setColor(pixel2, color)
      setColor(pixel3, color)
      setColor(pixel4, color)  

  return canvas
</pre>

<p align="center"><img src="../mediasources/session14/collage1.jpg" alt="2x2 collage" width="50%">

<p>This works fine. However, this limits us to a 2x2 grid. Can we make this function more general? Look at the code inside the for loop: it looks like it has a pattern. Consider the following values for the x,y coordinates for each of the sections of a 2x2 and a 3x3 grid:

<table class="grid grid1">
    <tr>
        <th>grid
        <th>x
        <th>y
    <tr>
        <td>2x2
        <td>x
        <td>y
    <tr>
        <td>
        <td>x
        <td>y+height
    <tr>
        <td>
        <td>x+width
        <td>y
    <tr>
        <td>
        <td>x+width
        <td>y+height
    <tr>
        <td>3x3
        <td>x
        <td>y
    <tr>
        <td>
        <td>x
        <td>y+height
    <tr>
        <td>
        <td>x
        <td>y+height+height
    <tr>
        <td>
        <td>x+width
        <td>y
    <tr>
        <td>
        <td>x+width
        <td>y+height
    <tr>
        <td>
        <td>x+width
        <td>y+height+height
    <tr>
        <td>
        <td>x+width+width
        <td>y
    <tr>
        <td>
        <td>x+width+width
        <td>y+height
    <tr>
        <td>
        <td>x+width+width
        <td>y+height+height
</table>  


<p>Do you see the pattern? How about this:

<br>column-1: x + width * 0
<br>column-2: x + width * 1
<br>column-3: x + width * 2
<br>and so on...

<p>The multiplier is the step in your iteration. Thus, you can write a for loop that will generate a grid of any size! Here it is:

<pre class="code">
def makenxn(pic, n):
  width = getWidth(pic)
  height = getHeight(pic)
  canvas = makeEmptyPicture(width*n, height*n)

  for x in range(width):
    for y in range(height):
      color = getColor(getPixel(pic, x, y))

      for j in range(n):
        for k in range(n):
          targetX = x + width * j
          targetY = y + height * k
          pixel = getPixel(canvas, targetX, targetY)
          setColor(pixel, color)  

  return canvas  
</pre>

<p>Again, we have taken a specialized function and have changed it slightly, this time with a little help from basic algebra, to handle not only the special case, but any other case. Now we can generate grids of any size, provided JES (and your computer) can handle the computation in reasonable time. Here's a 10x10:

<p align="center"><img src="../mediasources/session14/collage2.jpg" alt="10x10 collage" width="50%">

<p>We can take this even further and combine it with the posterizing effect we did in a previous lab. Throw in some random color generation, and you can <b><i><?php echo rainbow("automagically"); ?></i></b> create visual effects that would take some (unreasonably long) quality time in Photoshop:

<p align="center"><img src="../mediasources/session14/collage3.jpg" alt="posterized 4x4 collage" width="50%">

<p>The example above requires the use of a few techniques we haven't discussed yet (random number generation, sorting an array, and using dictionaries), but we'll get to it later this semester.



<?php
//TODO: move this into a functions file or something...
function rainbow($text) {
    $html = "";
    $colors = array('red', 'green', 'orange', 'blue', 'purple');
    $colorsCount = count($colors);

    $chars = str_split($text);
    $charsCount = count($chars);

    $j = 0;
    for ($i=0; $i<$charsCount; $i++) {
        if ($j == $colorsCount) {
            $j = 0;
        }
        $html .= "<span style='color:" . $colors[$j] . "; font-weight:bold;'>" . $chars[$i] . "</span>";
        $j++;
 
    }
    return $html;
}
?>
