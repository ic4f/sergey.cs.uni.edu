def decreaseRed(pic):
  for p in getPixels(pic):
    value = getRed(p)
    setRed(p, value * 0.5)
  repaint(pic)
  
def decreaseRed2(pic):
  pixels = getPixels(pic)
  for i in range(len(pixels)/3):
    p = pixels[i]
    value = getRed(p)
    setRed(p, value * 0.5)
  repaint(pic)    
  
def makeNetherlands(pic):
  pixels = getPixels(pic)
  total = len(pixels)
  section1 = total/3
  section2 = section1 * 2
  for i in range(total):    
    p = pixels[i]
    if i < section1:
      setGreen(p, getGreen(p) * 0.5)
      setBlue(p, getBlue(p) * 0.5)      
    elif i < section2:
      setRed(p, getRed(p) * 1.5)
      setGreen(p, getGreen(p) * 1.5)
      setBlue(p, getBlue(p) * 1.5)      
    else:
      setRed(p, getRed(p) * 0.5)
      setGreen(p, getGreen(p) * 0.5)
  repaint(pic)    
  
#a more elegant (and reusable) solution:
  
def increaseRed(pixel):
  setGreen(pixel, getGreen(pixel) * 0.5)
  setBlue(pixel, getBlue(pixel) * 0.5)   
  
def increaseWhite(pixel):
  setRed(pixel, getRed(pixel) * 1.5)
  setGreen(pixel, getGreen(pixel) * 1.5)
  setBlue(pixel, getBlue(pixel) * 1.5)  
  
def increaseBlue(pixel):
  setRed(pixel, getRed(pixel) * 0.5)   
  setGreen(pixel, getGreen(pixel) * 0.5)

  
def makeNetherlands2(pic):
  pixels = getPixels(pic)
  total = len(pixels)
  section1 = total/3
  section2 = section1 * 2
  for i in range(total):    
    p = pixels[i]
    if i < section1:
      increaseRed(p)    
    elif i < section2:
      increaseWhite(p)      
    else:
      increaseBlue(p)
  repaint(pic)     
  
  
def makeFrance(pic):
  width = getWidth(pic) 
  section1 = width/3
  section2 = section1 * 2  
  for x in range(width):
    for y in range(getHeight(pic)):
      p = getPixel(pic, x, y)
      if x < section1:
        increaseBlue(p)
      elif x < section2:
        increaseWhite(p)
      else:
        increaseRed(p)
  repaint(pic)    