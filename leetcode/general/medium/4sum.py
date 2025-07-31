class Solution:
    def fourSum(self, nums: List[int], target: int) -> List[List[int]]:

        res = []
        se = set()
        nums.sort()


        for i in range(len(nums)):

            if i > 0 and nums[i] == nums[i-1]:
                continue 

            for j in range(i+1, len(nums)):
                if j > i+1 and nums[j] == nums[j-1]:
                    continue
                s, l, r = j, j+1, len(nums) - 1

                while l < r:
                    t = nums[i] + nums[s] + nums[l] + nums[r]

                    if t == target:
                        if (nums[i], nums[s], nums[l], nums[r]) not in se:
                            res.append([nums[i], nums[s], nums[l], nums[r]])
                            se.add((nums[i], nums[s], nums[l], nums[r]))

                            l += 1
                            r-= 1

                            while l < r and nums[l] == nums[l-1]:
                                l += 1

                            while l < r and nums[r] == nums[r+1]:
                                r -= 1
                    elif t < target:
                        l += 1
                    else:
                        r -= 1
        return res



                    
        