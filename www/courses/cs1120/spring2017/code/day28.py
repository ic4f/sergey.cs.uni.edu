#solution to exercise
# muslt be a double: decimalpoint
def decrease(sound, factor): 
  for s in getSamples(sound):
    value = getSampleValue(s)
    newValue = value / factor
    setSampleValue(s, newValue)

#version 2: array index notation
def decrease2(sound, factor): 
  samples = getSamples(sound)
  for i in range(len(samples)):
    s = samples[i]
    value = getSampleValue(s)
    newValue = value / factor
    setSampleValue(s, newValue)
    
#version 3: 
def decrease3(sound, factor): 
  length = getLength(sound)
  for i in range(length):
    value = getSampleValueAt(sound, i)
    newValue = value / factor
    setSampleValueAt(sound, i, newValue)

#normalizing a sound
   
#version 1
def norm1(sound):
  largest = 0
  for s in getSamples(sound):
    value = getSampleValue(s)
    if value > largest:
      largest = value      
		
  multiplier = 32767.0 / largest
  
  for s in getSamples(sound):
    louder = multiplier * getSampleValue(s)
    setSampleValue(s, louder)
	
#version 2: uses the max() function instead of an if statement
def norm2(sound):
  largest = 0
  for s in getSamples(sound):
    largest = max(largest, getSampleValue(s))

  multiplier = 32767.0 / largest
  print largest
  
  for s in getSamples(sound):
    louder = multiplier * getSampleValue(s)
    setSampleValue(s, louder)	
	
#version 3: takes into account negative values:
# uses absolutle value of sample value: abs() function
def norm3(sound):
  largest = 0
  for s in getSamples(sound):
    largest = max(largest, abs(getSampleValue(s)))

  multiplier = 32767.0 / largest
  print largest
  
  for s in getSamples(sound):
    louder = multiplier * getSampleValue(s)
    setSampleValue(s, louder)	
    
#just for fun
def findMax(sound):
  max = 0
  index = 0
  samples = getSamples(sound)
  for i in range(len(samples)):
    s = samples[i]
    value = getSampleValue(s)   
    if value > max:
      max = value
      index = i  
  
  print "max value: ", max
  print "at index: ", index
  
#just for fun  
def findMin(sound):
  min = 0
  index = 0
  samples = getSamples(sound)
  for i in range(len(samples)):
    s = samples[i]
    value = getSampleValue(s)   
    if value < min:
      min = value
      index = i  
  
  print "min value: ", min
  print "at index: ", index
  
