class Solution:
    def threeSum(self, nums: List[int]) -> List[List[int]]:
        res = set()
        nums.sort()

        for i, j in enumerate(nums):

            l, r = i+1, len(nums) - 1

            while l < r:

                total = j + nums[l] + nums[r]

                if total > 0:
                    r -= 1
                if total < 0:
                    l += 1
                
                if total == 0:
                    res.add((j, nums[l], nums[r]))
                    l += 1
                    r -= 1
                  
        return [list(i) for i in res]