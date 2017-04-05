def blend2Sounds(s1, s2):
  length = getLength(s1)  
  blended = makeEmptySound(length)
  
  for i in range(0, length):
    value1 = getSampleValueAt(s1, i) * 0.5
    value2 = getSampleValueAt(s2, i) * 0.5
    setSampleValueAt(blended, i, value1 + value2)
    
  normalize(blended)    
  return blended
  
  
  
#assume different lengths
def blendAny2Sounds(s1, s2):
  #find length of LONGEST sound
  length1 = getLength(s1)
  length2 = getLength(s2)
  length = max(length1, length2)

  #set empty sound to length of LONGEST sound
  blended = makeEmptySound(length)
  
  #blend sounds CHECKING at EACH step if boundary reached for EACH sound
  for i in range(0, length):
    #check boundaries for each
    if i >= length1:
      #we've reached the end of s1, so we only need s2
      value = getSampleValueAt(s2, i) * 0.5
    elif i >= length2: 
      #we've reached the end of s2, so we only need s1
      value = getSampleValueAt(s1, i) * 0.5
    else:
      #we need both
      value = getSampleValueAt(s1, i) * 0.5 + getSampleValueAt(s2, i) * 0.5

    setSampleValueAt(blended, i, value)    
  normalize(blended)
  return blended 
  
  
  
 #same as above, but condensed / no comments
def blendAny2Sounds_2(s1, s2):
  length1 = getLength(s1)
  length2 = getLength(s2)
  length = max(length1, length2)  
  blended = makeEmptySound(length)
    
  for i in range(0, length):
    if i >= length1:
      value = getSampleValueAt(s2, i) * 0.5
    elif i >= length2: 
      value = getSampleValueAt(s1, i) * 0.5
    else:
      value = getSampleValueAt(s1, i) * 0.5 + getSampleValueAt(s2, i) * 0.5

    setSampleValueAt(blended, i, value)    
  normalize(blended)
  return blended   
  
      
  
#any number of sounds; assume equal lengths  
def blendSounds(*sounds):
  length = getLength(sounds[0])  
  blended = makeEmptySound(length)
  weight = 1.0 / len(sounds)
    
  for i in range(0, length):
    total = 0 
    for s in sounds:
      value = getSampleValueAt(s, i) * weight
      total += value
    setSampleValueAt(blended, i, total)
    
  normalize(blended)
  return blended   
   
     
 
#any number of sounds; assume different lengths, use longest as length  
def blendAnySoundsByMax(*sounds):
  #change1: find max  
  length = 0
  for s in sounds:
    length = max(length, getLength(s))

  blended = makeEmptySound(length)
  weight = 1.0 / len(sounds)
    
  for i in range(0, length):
    total = 0 
    for s in sounds:
      #change2: check if within length
      if i < getLength(s):
        value = getSampleValueAt(s, i) * weight
        total += value
    setSampleValueAt(blended, i, total)
    
  normalize(blended)
  return blended      
   
   
   
#same as above, but use shortest as length  
def blendAnySoundsByMin(*sounds): 
  length = sys.maxint
  for s in sounds:
    length = min(length, getLength(s))

  blended = makeEmptySound(length)
  weight = 1.0 / len(sounds)
    
  for i in range(0, length):
    total = 0 
    for s in sounds:
      if i < getLength(s):
        value = getSampleValueAt(s, i) * weight
        total += value
    setSampleValueAt(blended, i, total)
    
  normalize(blended)
  return blended 
  
  
def normalize(sound):
  largest = 0
  for s in getSamples(sound):
    largest = max(largest, abs(getSampleValue(s)))
  multiplier = 32767.0 / largest  
  for s in getSamples(sound):
    louder = multiplier * getSampleValue(s)
    setSampleValue(s, louder)  
  