class Solution:
    def findLHS(self, nums: List[int]) -> int:
        nums.sort()

        res = 0
        l = 0

        for r in range(len(nums)):
            if nums[r] - nums[l] > 1:
                l += 1
            if nums[r] - nums[l] == 1:
                res = max(res, r - l + 1)
        return res

    def findLHS2(self, nums: List[int]) -> int:
        m = {}
        res = 0

        for num in nums:
            m[num] = m.get(num, 0) + 1

        for k in m:
            if k + 1 in m:
                l = m[k] + m[k+1]
                res = max(res, l)

        return res