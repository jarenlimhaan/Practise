class Solution:
    def numIdenticalPairs(self, nums: List[int]) -> int:
        
        m = {}
        res = 0

        for i, n in enumerate(nums):

            m[n] = m.get(n, 0) + 1

            res += m[n] - 1

        return res

