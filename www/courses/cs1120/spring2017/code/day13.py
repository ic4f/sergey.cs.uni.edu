#example of using if/else to produce a charcoal drawing
def makeBW(picture):
  for p in getPixels(picture):
    luminance = (getRed(p) + getGreen(p) + getBlue(p))/3
    if luminance < 92:
      setColor(p, black)
    else:
      setColor(p, white)
      
 #example of if/elif/else to porduce a very simple posterizing effect
def makeRGB(picture):
  for p in getPixels(picture):
    luminance = (getRed(p) + getGreen(p) + getBlue(p))/3
    if luminance < 64:
      setColor(p, red)
    elif luminance < 128:
      setColor(p, blue)         
    else:
      setColor(p, green)       
      
#original NetherlandsTint with 3 loops
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
    
#modified NetherlandsTint with conditionals instead of multiple loops    
def makeNetherlandsTint2(picture):  
  pixels = getPixels(picture)
  point1 = len(pixels)/3
  point2 = point1 * 2
  
  for i in range(len(pixels)):
    pixel = pixels[i]    
    if i < point1:
      setBlue(pixel, getBlue(pixel) * 0.5)
      setGreen(pixel, getGreen(pixel) * 0.5)
    elif i >= point1 and i < point2:
      setRed(pixel, getRed(pixel) * 1.5)
      setGreen(pixel, getGreen(pixel) * 1.5)
      setBlue(pixel, getBlue(pixel) * 1.5)  
    else:
      setRed(pixel, getRed(pixel) * 0.5)
      setGreen(pixel, getGreen(pixel) * 0.5)  

#more if/elif/else: 
#  sepia tone: the big ugly functions that does grayscale AND sepia tone
def makeSepia(pic):
  for pixel in getPixels(pic):
  
    red = getRed(pixel) * 0.299
    green = getGreen(pixel) * 0.587
    blue = getBlue(pixel) * 0.114
    lum = red + green + blue
          
    #shadows
    if lum < 63:
      newRed = lum * 1.1
      newBlue = lum * 0.9      
    #midtones      
    elif lum < 192:
      newRed = lum * 1.15
      newBlue = lum * 0.85        
    #highlights
    else:
      newRed = min(lum * 1.08, 255) #use min()
      newBlue = lum * 0.93
    
    #set color
    setRed(pixel, newRed)
    setBlue(pixel, newBlue)    
    setGreen(pixel, lum) 
    
#a better sepia function: we factor out creating a grayscale picture
#   into a separate function adn then call it from this one
def makeGrayscale(pic):
  for p in getPixels(pic):
    red = getRed(p) * 0.299
    green = getGreen(p) * 0.587
    blue = getBlue(p) * 0.114
    intensity = red + green + blue
    color = makeColor(intensity, intensity, intensity)
    setColor(p, color)  
    
def makeSepia2(pic):
  makeGrayscale(pic)
  for pixel in getPixels(pic):
    lum = getRed(pixel)
    
    #shadows
    if lum < 63:
      newRed = lum * 1.1
      newBlue = lum * 0.9      
    #midtones      
    elif lum < 192:
      newRed = lum * 1.15
      newBlue = lum * 0.85        
    #highlights
    else:
      newRed = min(lum * 1.08, 255) #use min()
      newBlue = lum * 0.93
    
    #set color
    setRed(pixel, newRed)
    setBlue(pixel, newBlue)                                          