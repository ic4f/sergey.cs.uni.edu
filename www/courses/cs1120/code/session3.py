def madlib():
    name = "Mark"
    pet = "Baxter"
    verb = "ate"
    snack = "Krispy Kreme Doughnuts"
    line1 = "Once upon a time, "+name+" was walking"
    line2 = " with "+pet+", a trained dragon. "
    line3 = "Suddenly, "+pet+" stopped and announced,"
    line4 = "'I have a desperate need for "+snack+"'. "
    line5 = name+" complained.               'Where I am going to get that?' "
    line6 = "Then "+name+" found a wizard's wand. "
    line7 = "With a wave of the wand, "
    line8 = pet+" got "+snack+". "
    line9 = "Perhaps surprisingly, "+pet+" "+verb+" the "+snack+"."
    print line1+line2+line3+line4
    print line5+line6+line7+line8+line9

# Better: use one variable as a string accumulator 
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
  
# Even better: add parameters to the function: makes the function more general
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
   mystring = "My name is Inigo Montoya."
   mythreat = 'You killed my father. Prepare to die.'
   print mystring + mythreat #String concatenation
   print mystring * 6    
   
def pyramid(char):
   space = " "
   print 4*space,char
   print 3*space,3*char
   print 2*space,5*char
   print space,7*char
   print 9*char   
