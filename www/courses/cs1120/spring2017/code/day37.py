def madlib():
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
  

def mathWithStrings():
   my_name = "My name is Inigo Montoya. "
   my_threat = 'You killed my father. Prepare to die.\n'
   my_text = my_name + my_threat #String concatenation
   print my_text * 6    
   
def pyramid(char):
   space = " "
   print 4 * space + char
   print 3 * space + 3 * char
   print 2 * space + 5 * char
   print space + 7 * char
   print 9 * char   
      
def pyramid2(char):
   space = " "
   print 4 * space, 1 * char
   print 3 * space, 3 * char
   print 2 * space, 5 * char
   print 1 * space, 7 * char
   print 0 * space, 9 * char   

def pyramid3(char, levels):
  space = " "
  j = levels/2
  for i in range(1, levels, 2):
    j -= 1
    print j * space, i * char    
   
def double_pyramid(char, levels):
  space = " "
  j = levels/2
  for i in range(1, levels, 2):
    j -= 1
    print j * space, i * char  
  for i in range(levels-3, 0, -2):
    j += 1  
    print j * space, i * char
 
def manyPyramids(char, levels, cycles):
  for i in range(cycles):
    double_pyramid(char, levels)
    
    
    
    