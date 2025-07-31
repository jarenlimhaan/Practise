class Solution:
    def findUnsortedSubarray(self, nums: List[int]) -> int:

        n = len(nums) - 1
        l, r = 0, n

        while l < r and nums[l] <= nums[l+1]:
            l += 1

        if l == n:
            return 0 

        while l < r and nums[r] >= nums[r-1]:
            r -= 1

        min_val = min(nums[l:r+1])
        max_val = max(nums[l:r+1])

        while l > 0 and nums[l-1] > min_val:
            l -= 1

        while r < n and nums[r+1] < max_val:
            r += 1

        return r - l + 1