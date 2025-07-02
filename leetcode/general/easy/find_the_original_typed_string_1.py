class Solution:
    def possibleStringCount(self, word: str) -> int:
        
        n = 1

        for i in range(1, len(word)):
            if word[i] == word[i-1]:
                n += 1

        return n