alphabet = 'abcdefghijklmnopqrstuvwxyz'

#VERSION 1
text = input('your input: ')

for c_alphabet in alphabet: #test each character in the alphabet
    for c_text in text: # ...comparing it to each character in the text
        found_char = False #when we start, we haven't found the current character yet
        if c_text == c_alphabet: 
            found_char = True #found it! Set found_char to true and exit the inner loop
            break
    if not found_char:
        break #we didn't find the currect charcter, so we break out of the outer loop and report failure

#finally, print message depending on the value of found_char:
if not found_char:
    print('at least one character is missing')
else:
    print('all characters are present')


#VERSION 2: using the 'in' operator
text = input('your input: ')
for c_alphabet in alphabet:
    found_char = True #assume character is present
    if c_alphabet not in text: #but if not, set variable to false and break out fo the loop
        found_char = False
        break

if not found_char:
    print('at least one character is missing')
else:
    print('all characters are present')
        
        
    

