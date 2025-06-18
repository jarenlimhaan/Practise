class Solution:
    def mySqrt(self, x: int) -> int:

        if x < 2:
            return x

        for i in range(1, x//2 + 1):
            if i ** 2 == x:
                return i
            elif i ** 2 > x:
                return i - 1 

        return i
        

        