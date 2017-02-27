#simple flip
def flip(source):
  width = getWidth(source)
  height = getHeight(source)
  target = makeEmptyPicture(width, height)   
  for x in range(width):
    for y in range(height):
      sourcePixel = getPixel(source, x, y)
      targetPixel = getPixel(target, y, x)
      setColor(targetPixel, getColor(sourcePixel))      
  return target
  
  
#version 1  
def rotate90(source):
  width = getWidth(source)
  height = getHeight(source)
  target = makeEmptyPicture(width, height)   
  y1 = 0
  for x in range(width):
    x1 = width - 1
    for y in range(height):
      sourcePixel = getPixel(source, x, y)
      targetPixel = getPixel(target, x1, y1)
      setColor(  targetPixel, getColor(sourcePixel))      
      x1 -= 1
    y1 += 1
  return target  
    
def rotate270(source):
  width = getWidth(source)
  height = getHeight(source)
  target = makeEmptyPicture(width, height)   
  x1 = width - 1
  for x in range(width):
    y1 = 0
    for y in range(height):
      sourcePixel = getPixel(source, x, y)
      targetPixel = getPixel(target, y1, x1)
      setColor(targetPixel, getColor(sourcePixel))      
      y1 += 1
    x1 -= 1
  return target  
    
def rotate180(source):
  width = getWidth(source)
  height = getHeight(source)
  target = makeEmptyPicture(width, height)   
  x1 = width - 1
  for x in range(width):
    y1 = width - 1
    for y in range(height):
      sourcePixel = getPixel(source, x, y)
      targetPixel = getPixel(target, x1, y1)
      setColor(targetPixel, getColor(sourcePixel))      
      y1 -= 1
    x1 -= 1
  return target    
  

#version 2  
def simpleRotate90(source):
  width = getWidth(source)
  height = getHeight(source)
  target = makeEmptyPicture(width, height)   
  for x in range(width):
    for y in range(height):
      sourcePixel = getPixel(source, x, y)
      targetPixel = getPixel(target, width-1-x, y)
      setColor(targetPixel, getColor(sourcePixel))      
  return target  
  
def simpleRotate180(source):
  width = getWidth(source)
  height = getHeight(source)
  target = makeEmptyPicture(width, height)   
  for x in range(width):
    for y in range(height):
      sourcePixel = getPixel(source, x, y)
      targetPixel = getPixel(target, width-1-x, width-1-y)
      setColor(targetPixel, getColor(sourcePixel))      
  return target   
  
def simpleRotate270(source):
  width = getWidth(source)
  height = getHeight(source)
  target = makeEmptyPicture(width, height)   
  for x in range(width):
    for y in range(height):
      sourcePixel = getPixel(source, x, y)
      targetPixel = getPixel(target, x, width-1-y)
      setColor(targetPixel, getColor(sourcePixel))      
  return target    
  

#version 3
def rotate(source, angle):
  width = getWidth(source)
  height = getHeight(source)  
  target = makeEmptyPicture(width, height)     
  for x in range(width):
    for y in range(height):
      sourcePixel = getPixel(source, x, y)
      targetPixel = getRotatedPixel(target, x, y, width, angle)
      setColor(targetPixel, getColor(sourcePixel))      
  return target    

#helper fucntion
def getRotatedPixel(picture, x, y, width, angle):
  if angle == 90:
    return getPixel(picture, width-1-x, y)
  elif angle == 180:
    return getPixel(picture, width-1-x, width-1-y)
  elif angle == 270:
    return getPixel(picture, x, width-1-y)
  else:
    return getPixel(picture, x, y)
    
    
