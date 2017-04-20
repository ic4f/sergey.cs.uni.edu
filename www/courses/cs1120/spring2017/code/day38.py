#------------------- verion 1 --------------------#
def isDigits(text):
  result = false
  for c in text:
    if c in "0123456789":
      result = true
  return result
  
#------------------- verion 2 --------------------#  
def isDigits2(text):
  for c in text:
    if c in "0123456789":
      return true
  return false

  
  
#------------------- verion 1 --------------------#
def isStrongPass(text):
  hasLower = false
  hasUpper = false
  hasDigit = false
  for c in text:
    if char in "abcdefghijklmnopqrstuvwxyz":
      hasLower = true
    elif char in "ABCDEFGHIJKLMNOPQRSTUVWXYZ": 
      hasUpper = true
    elif char in "0123456789":
      hasDigit = true
  return hasLower and hasUpper and hasDigit
    
#------------------- verion 2 --------------------#  
def isStrongPass2(text):
  hasLower = false
  hasUpper = false
  hasDigit = false
  for c in text:
    if isLower(c):
      hasLower = true
    elif isUpper(c):
      hasUpper = true
    elif isDigit(c):
      hasDigit = true
  return hasLower and hasUpper and hasDigit
  
def isLower(char):
  return char in "abcdefghijklmnopqrstuvwxyz"

def isUpper(char):
  return char in "ABCDEFGHIJKLMNOPQRSTUVWXYZ"  
  
def isDigit(char):
  return char in "0123456789"    
      
  
def getVowels(text):
  accum = ""
  for c in text:
    if c in "aeiouAEIOU":
      accum += c
  return accum  
  
def getVowels2(text):
  accum = ""
  for c in text:
    if c.lower() in "aeiou":
      accum += c
  return accum
  
def getConsonants(text):
  accum = ""
  for c in text:
    if c.lower() not in "aeiou":
      accum += c
  return accum  
  
def getCopy(text):
  accum = ""
  for c in text:
    accum += c
  return accum    
  
def getDoubled(text):
  accum = ""
  for c in text:
    accum += c * 2
  return accum     
  
def getReversed(text):
  accum = ""
  for c in text:
    accum = c + accum
  return accum    
  
