#fix redeye for entire image
def fixRedEye1(pic, endColor):
  for pixel in getPixels(pic):
    color = getColor(pixel)
    if distance(red, color) < 165:
      setColor(pixel, endColor)  
      
#fix redeye for specific area
def fixRedEye2(pic, startX, startY, endX, endY, endColor):
  for pixel in getPixels(pic):
    x = getX(pixel)
    y = getY(pixel)
    if startX <= x <= endX:
      if startY <= y <= endY:
        color = getColor(pixel)
        if distance(red, color) < 165:
          setColor(pixel, endColor)        
    
#same as above, but improved if statement
def fixRedEye3(pic, startX, startY, endX, endY, endColor):
  for pixel in getPixels(pic):
    x = getX(pixel)
    y = getY(pixel)
    if (startX <= x <= endX) and (startY <= y <= endY):
      color = getColor(pixel)
      if distance(red, color) < 165:
        setColor(pixel, endColor)        
        
        
def makeGrayscale(pic):
  for p in getPixels(pic):
    red = getRed(p) * 0.299
    green = getGreen(p) * 0.587
    blue = getBlue(p) * 0.114
    intensity = red + green + blue
    color = makeColor(intensity, intensity, intensity)
    setColor(p, color)
    
def sepiaTint(pic):
  makeGrayscale(pic)
  
  for pixel in getPixels(pic):
    red = getRed(pixel)
    blue = getBlue(pixel)
    
    #shadows
    if red < 63:
      red *= 1.1
      blue *= 0.9
    #midtones
    elif red >= 63 and red < 192:
      red *= 1.15
      blue *= 0.85
    #highlights
    else:
      red *= 1.08
      blue *= 0.93
      if red > 255:
        red = 255
    
    setRed(pixel, red)
    setBlue(pixel, blue)

#splits color range into 2 areas
def posterize(pic):
  for p in getPixels(pic):
    red = getRed(p)
    green = getGreen(p)
    blue = getBlue(p)
    if red < 128:
      setRed(p, 64)
    else:
      setRed(p, 192)

    if green < 128:
      setGreen(p, 64)
    else:
      setGreen(p, 192)    
    
    if blue < 128:
      setBlue(p, 64)
    else:
      setBlue(p, 192)    


def betterPosterize(pic):
  for p in getPixels(pic):
    red = getRed(p)
    green = getGreen(p)
    blue = getBlue(p)
    setRed(p, getReduced2(red))
    setGreen(p, getReduced2(green)) 
    setBlue(p, getReduced2(blue))

#splits color range into 4 areas
def getReduced(color):
  if color < 64:
    return 31
  elif color >= 64 and color < 128:
    return 95
  elif color >= 128 and color < 192:
    return 159    
  else:
    return 192
    
#even better!
def getReducedSmart(color):
  return color/64 * 64 + 32

def grayPosterize(pic, cutOff):
  for p in getPixels(pic):
    red = getRed(p)
    green = getGreen(p)
    blue = getBlue(p)
    luminance = (red + green + blue) / 3
    if luminance < cutOff:
      setColor(p, black)
    else:
      setColor(p, white)
    
  
  
