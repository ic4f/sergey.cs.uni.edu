# ask for int, report runnig total / version 1
num = 0
total = 0
while num != -1:
    total = total + num
    print("total so far = " + str(total))
    num = int(input("next int: "))


# ask for int, report runnig total / version 2
total = 0
while True:
    num = int(input("next int: "))
    if num == -1:
        break
    total += num
    print("total so far = " + str(total))

# check if number is prime
num = int(input("int: "))
total = 0
for x in range(2, num):
    if num % x == 0:
        print(str(num) + " is NOT prime")
        break # we don't need to continue checking
    else:
        print(str(num) + " is PRIME")

# check multiple numbers 
while True:
    num = int(input("int: "))
    if num == -1:
        break

    if num < 3:
        print("int must be greater than 2")
        continue
    
    is_prime = True
    for i in range(2, num):
        if num % i == 0:
            is_prime = False
            break

    if is_prime:
        print(str(num) + " is PRIME")
    else:
        print(str(num) + " is NOT prime")

# print out primes up to 100
for i in range(3, 101):
    is_prime = True
    for j in range(2, i-1):
        if i % j == 0:
            is_prime = False
            break
    if is_prime:
        print(str(i) + " is PRIME")
    else:
        print(str(i) + " is NOT prime")

# print multilication table
for i in range(1, 11):
    for j in range(1, 11):
        print("%3d" % (i * j), end=' ')
    print()
print()
