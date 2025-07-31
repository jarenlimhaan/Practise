class Solution:
    def sortColors(self, nums: List[int]) -> None:
        """
        Do not return anything, modify nums in-place instead.
        """
        m = {}

        for num in nums:
            m[num] = m.get(num, 0) + 1

        k = 0  

        for i in range(3):

            c = m.get(i, 0)
            nums[k: k + c] = [i] * c
            k += c