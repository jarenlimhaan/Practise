class Solution:
    def threeSumClosest(self, nums: List[int], target: int) -> int:
        
        nums.sort()

        total = float('inf')

        for i in range(len(nums)):

            l =  i + 1
            r = len(nums) - 1

            while l < r:
                t = nums[i] + nums[l] + nums[r]
                if abs(target-t) < abs(target-total):
                    total = t
               
                if target == t:
                    return t

                elif t < target:
                    l += 1
                else:
                    r -= 1

        return total 
