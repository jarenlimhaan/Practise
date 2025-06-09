class Solution:
    def plusOne(self, digits: List[int]) -> List[int]:
        res = 0 

        for d in digits:
            res = res * 10 + d

        res += 1

        return [int(d) for d in str(res)]