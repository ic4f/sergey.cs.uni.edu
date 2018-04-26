def hasVowels(word):
  for c in word:
    if c in "aeiouAEIOU":
      return true
  return false


def isStrongPass(text):
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
  
  
  
  
def getVowels(text):
  accum = ""
  for c in text:
    if c in "aeiouAEIOU":
      accum += c
  return accum  
  
def getVowels2(text):
  accum = ""
  for c in text.lower():
    if c in "aeiou":
      accum += c
  return accum
  
def getConsonants(text):
  accum = ""
  for c in text.lower():
    if c not in "aeiou":
      accum += c
  return accum  
  


     
	  
	  

def encrypt(text, key):
  cipher = makeCipher(key)
  alphabet = getAlphabet()
  encrypted = ""
  for c in text:
    index = alphabet.find(c)
    encrypted += cipher[index]
  return encrypted
  

def decrypt(encrypted, key):
  cipher = makeCipher(key)
  alphabet = getAlphabet()
  decrypted = ""
  for c in encrypted:
    index = cipher.find(c)
    decrypted += alphabet[index]
  return decrypted
  
def getAlphabet():
  return "abcdefghijklmnopqrstuvwxyz "
    
def makeCipher(key):
  alphabet = getAlphabet()
  cipher = ""
  for c in alphabet:
    if c not in key:
      cipher += c
  return key + cipher
