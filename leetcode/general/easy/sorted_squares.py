class Solution:
    def sortedSquares(self, nums: List[int]) -> List[int]:

        n = len(nums) - 1
        l, r, p = 0, n, n
        squares = [0] * len(nums)

        while l <= r:

            left = nums[l] ** 2
            right = nums[r] ** 2

            if left > right:
                squares[p] = left
                l += 1
            else:
                squares[p] = right
                r -= 1
            
            p -= 1

        
        return squares
        

        