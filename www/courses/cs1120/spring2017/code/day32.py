def fakeQuote():
  source = makeSound('lab8.wav')
  
  start1 = 118000
  end1 = 175000
  start2 = 270000
  end2 = 292000
  start3 = 222500
  end3 = 240000
  
  length = (end1 - start1) + (end2 - start2) \
    + (end3 - start3) 
  
  target = makeEmptySound(length)
  
  targetIndex = 0
  
  for i in range(start1, end1):
    v = getSampleValueAt(source, i)
    setSampleValueAt(target, targetIndex, v)
    targetIndex += 1

  for i in range(start2, end2):
    v = getSampleValueAt(source, i)
    setSampleValueAt(target, targetIndex, v)
    targetIndex += 1
                
  for i in range(start3, end3):
    v = getSampleValueAt(source, i)
    setSampleValueAt(target, targetIndex, v)
    targetIndex += 1      
    
  explore(target)      
  return target   
      
    
def fakeQuote2():    
  source = makeSound('lab8.wav')
  
  part1 = clip(source, 118000, 175000)
  part2 = clip(source, 270000, 292000)
  part3 = clip(source, 222500, 240000)

  length1 = getLength(part1)
  length2 = getLength(part2)
  length3 = getLength(part3)
    
  target = makeEmptySound(length1 + length2 + length3)
  
  copy(part1, target, 0)
  copy(part2, target, length1)
  copy(part3, target, length1 + length2)
  
  explore(target)      
  return target   
  

def clip(source, start, end):
  target = makeEmptySound(end - start)
  for i in range(start, end):
    v = getSampleValueAt(source, i)
    setSampleValueAt(target, i - start, v)
  return target
  
def copy(source, target, offset):
  length = getLength(source)
  for i in range(0, length):
    v = getSampleValueAt(source, i)
    setSampleValueAt(target, i + offset, v)
  
                  