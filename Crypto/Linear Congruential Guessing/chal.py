from Crypto.Util.number import bytes_to_long, isPrime
from secrets import randbelow
from sympy import nextprime

s = 31337
p = bytes_to_long(b'KIET_CTF{fake_flag}')

c = 0
while not isPrime(p):
    p+=1
    c+=1

assert isPrime(p)

a = randbelow(p)
b = randbelow(p)

def LCG(seed):
    return (a * seed + b) % p

print("c = ", c)
print("a = ", a)
print("b = ", b)
print("LCG(seed) = ", LCG(s))
print("LCG(LCG(seed)) = ", LCG(LCG(s)))
