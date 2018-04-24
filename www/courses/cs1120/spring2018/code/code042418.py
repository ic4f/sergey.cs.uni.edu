def madlib1():
  name = "Mark"
  pet = "Baxter"
  verb = "ate"
  snack = "Krispy Kreme Doughnuts"
  line1 = "Once upon a time, "+name+" was walking"
  line2 = " with "+pet+", a trained dragon. "
  line3 = "Suddenly, "+pet+" stopped and announced,"
  line4 = "'I have a desperate need for "+snack+"'. "
  line5 = name+" complained. 'Where I am going to get that?' "
  line6 = "Then "+name+" found a wizard's wand. "
  line7 = "With a wave of the wand, "
  line8 = pet+" got "+snack+". "
  line9 = "Perhaps surprisingly, "+pet+" "+verb+" the "+snack+"."
  print line1+line2+line3+line4
  print line5+line6+line7+line8+line9

 
#a slightly better way to to do this  
def madlib2():
  name = "Mark"
  pet = "Baxter"
  verb = "ate"
  snack = "Krispy Kreme Doughnuts"
  line = "Once upon a time, " + name + " was walking"
  line += " with "+ pet + ", a trained dragon. "
  line += "Suddenly, "+pet+" stopped and announced,"
  line += "'I have a desperate need for " + snack + "'. "
  line += name + " complained. 'Where am I going to get that?' "
  line += "Then " + name + " found a wizard's wand. "
  line += "With a wave of the wand, "
  line += pet + " got " + snack + ". "
  line += "Perhaps surprisingly, " + pet + " " + verb + " the " + snack + "."
  print line  
 

#a much better way to to do this: pass values as arguments when calling the function
def madlib3(name, pet, verb, snack):
  line = "Once upon a time, " + name + " was walking"
  line += " with "+ pet + ", a trained dragon. "
  line += "Suddenly, "+pet+" stopped and announced,"
  line += "'I have a desperate need for " + snack + "'. "
  line += name + " complained. 'Where am I going to get that?' "
  line += "Then " + name + " found a wizard's wand. "
  line += "With a wave of the wand, "
  line += pet + " got " + snack + ". "
  line += "Perhaps surprisingly, " + pet + " " + verb + " the " + snack + "."
  print line  
  

def mathWithStrings():
   my_name = "My name is Inigo Montoya. "
   my_threat = 'You killed my father. Prepare to die.\n'
   my_text = my_name + my_threat #String concatenation
   print my_text * 6     
   

def pyramid1(char):
   space = " "
   print 4 * space + char
   print 3 * space + 3 * char
   print 2 * space + 5 * char
   print space + 7 * char
   print 9 * char   
      
#same as above, but with a musch learer pattern..
def pyramid2(char):
   space = " "
   print 4 * space, 1 * char
   print 3 * space, 3 * char
   print 2 * space, 5 * char
   print 1 * space, 7 * char
   print 0 * space, 9 * char  
   
# ..which can be expressed as a loop
def pyramid(char, levels):
   space = " "
   for i in range(0, levels):   
     spaces = space * (levels - i) 
     chars = char + char * i * 2
     print spaces + chars  
     
def pyramidInverted(char, levels):
   space = " "
   for i in range(1, levels + 1):   
     spaces = space * i 
     chars = char + char * (levels -i) * 2
     print spaces + chars      
     
def manyPyramids(char, levels, repeat):     
  for i in range (0, repeat):
    pyramid(char, levels)
    pyramidInverted(char, levels)
    

#check if ALL characters are digits (we didn't get to this version
def isDigits1(text):  
  result = true
  for c in text:
    if c not in "0123456789": 
      result = false
  return result
  
#same as above, but more efficient (returns immediately if false condition found)
def isDigits2(text):  
  for c in text:
    if c not in "0123456789": 
      return false
  return true
    
  
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
     
     
   
