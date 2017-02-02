def decreaseRed(picture):
  for pixel in getPixels(picture):
    setRed(pixel, getRed(pixel) * 0.2)
  repaint(picture)
    
def decreaseRed2(picture):
  pixels = getPixels(picture)
  for i in range(len(pixels)):
    pixel = pixels[i]
    setRed(pixel, getRed(pixel) * 0.2)
  repaint(picture)    
  
  
  
def makeNetherlands(picture):
  pixels = getPixels(picture)
  color1 = makeColor(174,28,40)
  color2 = makeColor(255, 255, 255)
  color3 = makeColor(33,70,139)  
  
  point1 = len(pixels)/3
  point2 = point1 * 2
  point3 = len(pixels)
  
  for i in range(0, point1):
    pixel = pixels[i]
    setColor(pixel, color1)
    
  for i in range(point1, point2):
    pixel = pixels[i]
    setColor(pixel, color2)
    
  for i in range(point2, point3): 
    pixel = pixels[i]
    setColor(pixel, color3)        

  repaint(picture)   
  
def makeNetherlandsTint(picture):  
  pixels = getPixels(picture)
  point1 = len(pixels)/3
  point2 = point1 * 2
  point3 = len(pixels)
  
  for i in range(0, point1):
    pixel = pixels[i]
    setBlue(pixel, getBlue(pixel) * 0.5)
    setGreen(pixel, getGreen(pixel) * 0.5)
 
  for i in range(point1, point2):
    pixel = pixels[i] 
    setRed(pixel, getRed(pixel) * 1.5)
    setGreen(pixel, getGreen(pixel) * 1.5)
    setBlue(pixel, getBlue(pixel) * 1.5)  
  
  for i in range(point2, point3):
    pixel = pixels[i]
    setRed(pixel, getRed(pixel) * 0.5)
    setGreen(pixel, getGreen(pixel) * 0.5)  

  repaint(picture)   
  
  
  
#v1 fix redeye for entire image / solid red
def fixRedEye1(pic):
  for pixel in getPixels(pic):
    color = getColor(pixel)
    if color == red:
      setColor(pixel, black)  
  repaint(pic) 
  
#v2 fix redeye for entire image
def fixRedEye2(pic):
  for pixel in getPixels(pic):
    color = getColor(pixel)
    if distance(red, color) < 165:
      setColor(pixel, black)  
  repaint(pic)    

#v2 fix redeye for specific region  
def fixRedEye3(pic, startX, startY, endX, endY):
  for pixel in getPixels(pic):
    x = getX(pixel)
    y = getY(pixel)
    if startX <= x <= endX:
      if startY <= y <= endY:
        color = getColor(pixel)
        if distance(red, color) < 165:
          setColor(pixel, black)    
  repaint(pic)
  
#v2 fix redeye for specific region  /improved if-statement  
def fixRedEye4(pic, startX, startY, endX, endY):
  for pixel in getPixels(pic):
    x = getX(pixel)
    y = getY(pixel)
    if startX <= x <= endX and startY <= y <= endY:
      color = getColor(pixel)
      if distance(red, color) < 165:
        setColor(pixel, black)    
  repaint(pic)  

  
  