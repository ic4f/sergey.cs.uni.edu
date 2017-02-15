#code from class
def mirror1(filename):
  picture = makePicture(filename)
  width = getWidth(picture)
  height = getHeight(picture)
  middle = width/2
  
  for x in range(0, middle):
    for y in range(0, height):
      pixelLeft = getPixel(picture, x, y)
      pixelRight = getPixel(picture, width-1-x, y)
      color = getColor(pixelLeft)
      setColor(pixelRight, color)
  
  show(picture)    
  
  
def mirror2(filename):
  picture = makePicture(filename)
  width = getWidth(picture)
  height = getHeight(picture)
  middle = width/2
  
  for x in range(middle, width):
    for y in range(0, height):
      pixelLeft = getPixel(picture, x, y)
      pixelRight = getPixel(picture, width-x-1, y)
      color = getColor(pixelLeft)
      setColor(pixelRight, color)
  
  show(picture)  
  
  
def mirrorL(picture):
  height = getHeight(picture)
  width = getWidth(picture)
  lastX = width - 1
  midpoint = width/2

  for x in range(midpoint-1):
    for y in range(height-1):    
      p1 = getPixel(picture, x, y)
      p2 = getPixel(picture, lastX-x, y)
      color = getColor(p1)
      setColor(p2, color)
  repaint(picture)
  
  
def mirrorR(picture):
  height = getHeight(picture)
  width = getWidth(picture)
  lastX = width - 1
  midpoint = width/2

  for x in range(midpoint-1):
    for y in range(height-1):    
      p1 = getPixel(picture, x, y)
      p2 = getPixel(picture, lastX-x, y)
      color = getColor(p2)
      setColor(p1, color)
  repaint(picture)  
        
        
def mirrorB(picture):
  height = getHeight(picture)
  width = getWidth(picture)
  lastY = height - 1
  midpoint = height/2

  for x in range(width-1):
    for y in range(midpoint-1):   
      p1 = getPixel(picture, x, y)
      p2 = getPixel(picture, x, lastY-y)
      color = getColor(p1)
      setColor(p2, color)
  repaint(picture)
  
                  
def mirrorT(picture):
  height = getHeight(picture)
  width = getWidth(picture)
  lastY = height - 1
  midpoint = height/2

  for x in range(width-1):
    for y in range(midpoint-1):    
      p1 = getPixel(picture, x, y)
      p2 = getPixel(picture, x, lastY-y)
      color = getColor(p2)
      setColor(p1, color)
  repaint(picture)     
    