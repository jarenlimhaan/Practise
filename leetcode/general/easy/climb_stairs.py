class Solution:
    def climbStairs(self, n: int) -> int:
        return self.memo(n, {})
        
    def memo(self, n, m):

        if n == 0 or n == 1:
            return 1
        
        if n not in m:
            m[n] = self.memo(n-1, m) + self.memo(n-2, m)
        
        return m[n]