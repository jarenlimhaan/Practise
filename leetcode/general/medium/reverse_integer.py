class Solution:
    def reverse(self, x: int) -> int:
        positive = True 
        if x < 0:
            positive = False


        x = abs(x)
        res = 0

        while x > 0:
            res = (res * 10) + (x % 10)
            x //= 10

        if res > 2 ** 31 - 1 or res < -2 ** 31:
            return 0


        return res if positive else -res