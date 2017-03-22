def fadeIn(sound):  
  length = getLength(sound)    
  fade_factor = 0
  fade_step = 1.0/length
  
  for s in getSamples(sound):
    value = getSampleValue(s)  
    setSampleValue(s, value * fade_factor)
    fade_factor = fade_factor + fade_step       
    
def fadeInOut(sound):  
  length = getLength(sound)    
  fade_factor = 0
  fade_step = 1.0/(length/2)

  samples = getSamples(sound)
  for i in range(length/2):
    s = samples[i]
    value = getSampleValue(s)  
    setSampleValue(s, value * fade_factor)
    fade_factor = fade_factor + fade_step 
    
  for i in range(length/2, length):
    s = samples[i]
    value = getSampleValue(s)  
    setSampleValue(s, value * fade_factor)
    fade_factor = fade_factor - fade_step      
             
    
def reverse(sound):
  samples1 = getSamples(sound)
  length = len(samples1)
  target = makeEmptySound(length) 
  samples2 = getSamples(target)   
  for i in range(length):
    s1 = samples1[i]
    s2 = samples2[length-i-1]
    value = getSampleValue(s1)
    setSampleValue(s2, value)
  return target
