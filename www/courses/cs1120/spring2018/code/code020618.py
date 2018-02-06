# specify pixels by index

#1: same function as before
def decreaseRed(picture):
  for pixel in getPixels(picture):
    setRed(pixel, getRed(pixel) * 0.5)
  repaint(picture)

# remember to make a new picture object between calls!

#2: different approach, same functionality
def decreaseRed2(picture):
  pixels = getPixels(picture)
  for i in range(0, len(pixels)):
    pixel = pixels[i]
    setRed(pixel, getRed(pixel) * 0.5)
  repaint(picture)  
  
  
#3: now process only half of the pixels!
def decreaseRed2Half(picture):
  pixels = getPixels(picture)
  for i in range(0, len(pixels)/2):
    pixel = pixels[i]
    setRed(pixel, getRed(pixel) * 0.5)
  repaint(picture)    
  
#Make The Netherlands flag!
def makeNetherlands(picture):
  pixels = getPixels(picture)
  #use the actual flag colors 
  color1 = makeColor(174,28,40)
  color2 = makeColor(255, 255, 255)
  color3 = makeColor(33,70,139)  
  
  #calculate boundaries to split the list of pixels into 3 parts
  point1 = len(pixels)/3
  point2 = point1 * 2
  point3 = len(pixels)
  
  #color the first third of the pixels
  for i in range(0, point1):
    pixel = pixels[i]
    setColor(pixel, color1)
    
  #color the second third of the pixels	
  for i in range(point1, point2):
    pixel = pixels[i]
    setColor(pixel, color2)
    
  #color the remaiing pixels
  for i in range(point2, point3): 
    pixel = pixels[i]
    setColor(pixel, color3)     
	
  repaint(picture) 
  
#even better - do a color overlay!
def makeNetherlandsTint(picture):    
  pixels = getPixels(picture)
  #here's a better way to determine the color boundaries
  point1 = getHeight(picture) / 3 * getWidth(picture)
  point2 = point1 * 2  
  point3 = len(pixels)
    
  #increase red for the top third of the flag
  for i in range(0, point1):
    pixel = pixels[i]
    setBlue(pixel, getBlue(pixel) * 0.5) 
    setGreen(pixel, getGreen(pixel) * 0.5)
 
  #make the midsection brighter
  for i in range(point1, point2):
    pixel = pixels[i] 
    setRed(pixel, getRed(pixel) * 1.5)
    setGreen(pixel, getGreen(pixel) * 1.5)
    setBlue(pixel, getBlue(pixel) * 1.5)  
  
  #increase blue for the bottom third of the flag
  for i in range(point2, point3):
    pixel = pixels[i]
    setRed(pixel, getRed(pixel) * 0.5)
    setGreen(pixel, getGreen(pixel) * 0.5)  

  repaint(picture) 

#fix redeye

#1 fix redeye for entire image / solid red (naive approach)
def fixRedEye1(pic):
  for pixel in getPixels(pic):
    color = getColor(pixel)
    if color == red:
      setColor(pixel, black)  
  repaint(pic) 
  
#the above approach didn't work because we were looking for "perfect" red (255,0,0).
  
#v2 fix redeye for entire image / try colors that are similar to red ("close" to red)
def fixRedEye2(pic):
  for pixel in getPixels(pic):
    color = getColor(pixel)
    if distance(red, color) < 165:
      setColor(pixel, black)  
  repaint(pic)    

#v2 fix redeye for specific region  
#Plot a rectangle around the area we want to process (the eyes in this case)
#For the photo we used in class, here are the coordinates of the top left 
#and bottom right points (they don't have to be precise):
#startX = 110, startY = 80, endX = 200, endY = 110
def fixRedEye3(pic, startX, startY, endX, endY):
  for pixel in getPixels(pic):
    #get the coordinates of the current pixel
    x = getX(pixel)
    y = getY(pixel)
    #check if the pixel is in the rectangle:
    if x >= startX:
      if x <= endX:
        if y >= startY:
          if y <= endY:
          #if so - get its color
            color = getColor(pixel)
            #check if the color is close to red
            if distance(red, color) < 165:
              #set to black
              setColor(pixel, black)    
            
  repaint(pic)

#same as above, but a much improved if statement
def fixRedEye4(pic, startX, startY, endX, endY):
  for pixel in getPixels(pic):
    #get the coordinates of the current pixel
    x = getX(pixel)
    y = getY(pixel)
    #check if the pixel is in the rectangle:
    if x >= startX and x <= endX and y >= startY and y <= endY:
      #if so - get its color
      color = getColor(pixel)
      #check if the color is close to red
      if distance(red, color) < 165:
        #set to black
        setColor(pixel, black)    
            
  repaint(pic)
  