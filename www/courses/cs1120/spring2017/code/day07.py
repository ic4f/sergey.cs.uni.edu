def decreaseBlue(picture):
  for pixel in getPixels(picture):
    blue = getBlue(pixel)
    new_blue = blue * 0.1
    setBlue(pixel, new_blue)
  repaint(picture)
  
def swapColor(picture):
  for pixel in getPixels(picture):
    blue = getBlue(pixel)
    red = getRed(pixel)
    setBlue(pixel, red)
    setRed(pixel, blue)
  repaint(picture)

