class Solution:
    def convertToTitle(self, columnNumber: int) -> str:
        
        if columnNumber < 27:
            return chr(64 + columnNumber)

        res = ""

        while columnNumber > 0:
            columnNumber -= 1
            res = chr(65 + (columnNumber) % 26) + res
            columnNumber //= 26

        return res