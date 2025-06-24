class Solution:
    def majorityElement(self, nums: List[int]) -> int:

        res = most = 0

        for n in nums:

            if most == 0:
                res = n 

            most += 1 if n == res else - 1

        return res
        