def fixRedEyeDemo():
  pic = makePicture('redeye.jpg')  
  #find coordinates of the 'red eye' rectangle
  x1 = 122
  x2 = 188
  y1 = 90
  y2 = 107
  #examine all pixels and change those within rectange
  for pixel in getPixels(pic):
    #get the coordinates of the current pixel
    x = getX(pixel)
    y = getY(pixel)
    #check if the pixel is in the rectangle: (using < and > instead of <= >= for simplicity)
    if x > x1 and x < x2 and y > y1 and y < y2:
      #if so - get its color
      color = getColor(pixel)
      #check if the color is close to red
      if distance(red, color) < 165:
        #set to black
        setColor(pixel, black)    
            
  repaint(pic)
  
def demoPurple1():
  pic = makePicture('tc.jpg')  
  myPurple = makeColor(128, 99, 153)
  #find coordinates of the 'purple' rectangle
  x1 = 65
  x2 = 182
  y1 = 86
  y2 = 250
  #examine all pixels and transform to grayscale if they are OUTSIDE the rectangle
  for pixel in getPixels(pic):
    #get the coordinates of the current pixel
    x = getX(pixel)
    y = getY(pixel)
    #check if the pixel is outside the rectangle:
    if x < x1 or x > x2 or y < y1 or y > y2:
      lum = (getRed(pixel) + getGreen(pixel) + getBlue(pixel)) / 3
      newColor = makeColor(lum, lum, lum)
      setColor(pixel, newColor)
    
  #now again,  but look at the opposite: INSIDE the rectangle
  for pixel in getPixels(pic):
    #get the coordinates of the current pixel
    x = getX(pixel)
    y = getY(pixel)
    #check if the pixel is outside the rectangle:
    # use >= and <= instead of > and < to include cases when x equals x1 or x2 (and same for y)
    if x >= x1 and x <= x2 and y >= y1 and y <= y2:
      color = getColor(pixel)
      if distance(color, myPurple) > 75:        
        lum = (getRed(pixel) + getGreen(pixel) + getBlue(pixel)) / 3
        newColor = makeColor(lum, lum, lum)
        setColor(pixel, newColor)      
            
  repaint(pic)
  
  
#use 1 loop only!
def demoPurple2():
  pic = makePicture('tc.jpg')  
  myPurple = makeColor(128, 99, 153)
  #find coordinates of the 'purple' rectangle
  x1 = 65
  x2 = 182
  y1 = 86
  y2 = 250
  #examine all pixels and transform to grayscale if they are OUTSIDE the rectangle
  for pixel in getPixels(pic):
    #get the coordinates of the current pixel
    x = getX(pixel)
    y = getY(pixel)
    #check if the pixel is outside the rectangle:
    if x < x1 or x > x2 or y < y1 or y > y2:
      lum = (getRed(pixel) + getGreen(pixel) + getBlue(pixel)) / 3
      newColor = makeColor(lum, lum, lum)
      setColor(pixel, newColor)
    #but if it's not on the outside, it has to be on the inside! 
    #  So use "else" (which means "in all other cases")
    else: 
      color = getColor(pixel)
      if distance(color, myPurple) > 75:        
        lum = (getRed(pixel) + getGreen(pixel) + getBlue(pixel)) / 3
        newColor = makeColor(lum, lum, lum)
        setColor(pixel, newColor)      
            
  repaint(pic)  
  
#make it shorter (refactor: remove duplicate code)
def demoPurple3():
  pic = makePicture('tc.jpg')  
  myPurple = makeColor(128, 99, 153)
  #find coordinates of the 'purple' rectangle
  x1 = 65
  x2 = 182
  y1 = 86
  y2 = 250
  #examine all pixels and transform to grayscale if they are OUTSIDE the rectangle
  for pixel in getPixels(pic):
    #get the coordinates of the current pixel
    x = getX(pixel)
    y = getY(pixel)    
    lum = (getRed(pixel) + getGreen(pixel) + getBlue(pixel)) / 3
    newColor = makeColor(lum, lum, lum)
    #check if the pixel is outside the rectangle:
    if x < x1 or x > x2 or y < y1 or y > y2:
      setColor(pixel, newColor)
    #but if it's not on the outside, it has to be on the inside!!!
    else: 
      color = getColor(pixel)
      if distance(color, myPurple) > 75:          
        setColor(pixel, newColor)      
            
  repaint(pic)   
  
  
  
#a simple mirror effect (try this one on the picture of Jon Snow)
def mirror(picture):
  height = getHeight(picture)
  width = getWidth(picture) 
  midpoint = width/2

  #loop over all x,y coordinates (i.e., all pixels):
  #loop over half of the x values (0 through width/2)
  for x in range(midpoint-1):
    #FOR EACH VALUE OF x, loop over all y values (0 throuhg height-1)
    for y in range(height-1):    
      #get pixel from the left side of the picture
      p1 = getPixel(picture, x, y)
      #get pixel from the right side of the picture (the "mirror" pixel)
      p2 = getPixel(picture, width-x-1, y)
      
      #now set the color of the left pixel to its mirror pixel on the right
      #OR DO IT THE OTHER WAY ROUND - just switch p1 and p2 - for a very different effect!
      color = getColor(p1)
      setColor(p2, color)
  repaint(picture) 
  
  
  
  