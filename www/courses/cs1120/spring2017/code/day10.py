def makePic():
  file = pickAFile()
  return makePicture(file)
  
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
  
def decreaseRedHalf(picture):
  pixels = getPixels(picture)
  for i in range((len(pixels)/2) * 0.9):
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
  print i
    
  for i in range(point1, point2):
    pixel = pixels[i]
    setColor(pixel, color2)
  print i
    
  for i in range(point2, point3): 
    pixel = pixels[i]
    setColor(pixel, color3)        
  print i
  repaint(picture) 
  
