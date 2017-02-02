def makeSunset(picture):
  for pixel in getPixels(picture):
    blueValue = getBlue(pixel)
    setBlue(pixel, blueValue * 0.5)
    greenValue = getGreen(pixel)
    setGreen(pixel, greenValue * 0.5)
  repaint(picture)  

def makeNegative(picture):
  for pixel in getPixels(picture):
    red = getRed(pixel)
    green = getGreen(pixel)
    blue = getBlue(pixel)
    negColor = makeColor(255-red, 255-green, 255-blue)
    setColor(pixel, negColor)
  repaint(picture) 
  
def makeGrayscale(picture):
  for pixel in getPixels(picture):
    red = getRed(pixel)
    green = getGreen(pixel)
    blue = getBlue(pixel)
    intensity = (red + green + blue) / 3
    color = makeColor(intensity, intensity, intensity)
    setColor(pixel, color)
  repaint(picture)   
  
def makeGrayscale2(pic):
  for p in getPixels(pic):
    red = getRed(p) * 0.299
    green = getGreen(p) * 0.587
    blue = getBlue(p) * 0.114
    intensity = red + green + blue
    color = makeColor(intensity, intensity, intensity)
    setColor(p, color)
  repaint(pic)   

