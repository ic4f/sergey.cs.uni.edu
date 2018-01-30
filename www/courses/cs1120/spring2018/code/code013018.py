def reduceBlue(picture, amount):  
    for pixel in getPixels(picture):    
        newBlue = getBlue(pixel) * amount
        setBlue(pixel, newBlue)    
    repaint(picture)
 

def swapRedBlue(picture):
    for pixel in getPixels(picture): 
        swapBlue = getRed(pixel)
        swapRed = getBlue(pixel)
        setRed(pixel, swapRed)
        setBlue(pixel, swapBlue)
    repaint(picture)


def makeSunset(picture):
    for pixel in getPixels(picture): 
        setGreen(pixel, getGreen(pixel) * .6)
        setBlue(pixel, getBlue(pixel) * .6)
    repaint(picture)
 

def makeNegative(picture):
    for pixel in getPixels(picture): 
        newRed   = 255 - getRed(pixel)
        newGreen = 255 - getGreen(pixel)
        newBlue  = 255 - getBlue(pixel)
        newColor = makeColor(newRed, newGreen, newBlue)
        setColor(pixel, newColor)
    repaint(picture)


def makeGrayscale(picture):
    for pixel in getPixels(picture):
        r = getRed(pixel)
        g = getGreen(pixel)
        b = getBlue(pixel)
        avg = (r + g + b) / 3
        newColor = makeColor(avg, avg, avg)
        setColor(pixel, newColor)
    repaint(picture)  
